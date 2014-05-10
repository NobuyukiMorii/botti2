<?php

class UsersController extends AppController
{

// Sweet,Commentモデルを使用する
    public $name = 'Users';

    public $uses = array('User','Meeting');

    public $components = array('Auth','Session','Cookie');

    public $helpers = array("DatePicker");

public function add(){
    $this->layout = 'non_nav';
    if(!empty($this->data)){
        if($this->data){
            $this->User->create($this->request->data);

            if(!$this->User->validates()){
                $this->set("error",$this->User->validationErrors);
                $this->render("add");
            } else {
                $this->User->saveAll($this->data);
                $this->Session->setFlash('ユーザー登録を完了しました。', 'default', array(), 'success');
                $this->redirect(array('action'=>'login'));
            }

        }
    }
}

public function Control_add(){
    $this->layout = 'Control_non_nav';
    if(!empty($this->data)){
        if($this->data){
            $this->User->create($this->request->data);

            if(!$this->User->validates()){
                $this->set("error",$this->User->validationErrors);
                $this->render("add");
            } else {
                $this->User->saveAll($this->data);
                $this->Session->setFlash('ユーザー登録を完了しました。', 'default', array(), 'success');
                $this->redirect(array('action'=>'login'));
            }

        }
    }
}

public function image($cid){
    //画面表示用テンプレート読み込み動作
    $this->autoRender = FALSE;
    //指定したidに沿ってデータを一件検索
    $graphic = $this->User->findById($cid);
    //画像ファイルをアップロードする際の定型コード
    header('Content-type: image/jpeg');
    //画像ファイルの呼び出し
    echo $graphic["User"]["image"];
    exit;
    }

public function login() {

    $this->autoLayout = false;
    $this->autoRender = true;

    if (!empty($this->data) ) {
        // ログイン OK
        if ($this->Auth->login()) {
            // keep_me_logged_inがチェックされている場合
            if (isset($this->data['User']['keep_me_logged_in'])) {
                // cookieへの書き込みにkeep_me_logged_inを除外
                unset($this->request->data['User']['keep_me_logged_in']);
                $cookie = $this->request->data;
                // cookie書き込み
                $this->Cookie->write('Auth', $cookie, true, '+2 weeks');

            // keep_me_logged_inがチェックされていない場合
            } else {

            }
            // リダイレクト
            return $this->redirect('/Meetings/roulette/');
            $this->Session->setFlash('ログインしました。','default',array(),'auth');

        // ログイン NG
        } else {
            $this->Session->setFlash('ユーザー名かパスワードが違います。','default',array(),'auth');
        }
    }

    if (empty($this->data) ) {
        // cookie 有り
        if ($this->Cookie->check('Auth')) {
            // cookieをログイン用データに書き込み
            $this->request->data = $this->Cookie->read('Auth');
            // ログイン OK
            if ($this->Auth->login()) {
                // ログインリダイレクト
                return $this->redirect('/Meetings/roulette/');
            // ログイン NG
            } else {
                // coockie削除
                $this->Cookie->delete('Auth');    //    クッキー削除
            }
        // cookie 無し
        } else {
            // ログイン画面表示
        }
    }
}

public function Control_login() {

    $this->autoLayout = false;
    $this->autoRender = true;

    if (!empty($this->data) ) {
        // ログイン OK
        if ($this->Auth->login()) {
            // keep_me_logged_inがチェックされている場合
            if (isset($this->data['User']['keep_me_logged_in'])) {
                // cookieへの書き込みにkeep_me_logged_inを除外
                unset($this->request->data['User']['keep_me_logged_in']);
                $cookie = $this->request->data;
                // cookie書き込み
                $this->Cookie->write('Auth', $cookie, true, '+2 weeks');

            // keep_me_logged_inがチェックされていない場合
            } else {

            }
            // リダイレクト
            return $this->redirect('/Meetings/Control_meetinglist/');
            $this->Session->setFlash('ログインしました。','default',array(),'auth');

        // ログイン NG
        } else {
            $this->Session->setFlash('ユーザー名かパスワードが違います。','default',array(),'auth');
        }
    }

    if (empty($this->data) ) {
        // cookie 有り
        if ($this->Cookie->check('Auth')) {
            // cookieをログイン用データに書き込み
            $this->request->data = $this->Cookie->read('Auth');
            // ログイン OK
            if ($this->Auth->login()) {
                // ログインリダイレクト
                return $this->redirect('/Meetings/Control_meetinglist/');
            // ログイン NG
            } else {
                // coockie削除
                $this->Cookie->delete('Auth');    //    クッキー削除
            }
        // cookie 無し
        } else {
            // ログイン画面表示
        }
    }
}

public function logout(){
    
    $this->Cookie->delete('Auth');
    return $this->redirect( $this->Auth->logout());
}

public function Control_logout(){
    
    $this->Cookie->delete('Auth');
    return $this->redirect('/Users/Control_login/');
}

public function edit($id = null) {
        //pr('★START');
        //pr($this->request->data);

    $this->User->id = $id;
    if (!$this->User->exists()) {
        throw new NotFoundException(__('Invalid user'));
    }

    unset($this->User->validate['new_password1']['between']);
    unset($this->User->validate['new_password2']['between']);

    if ($this->request->is('post') || $this->request->is('put')) {

            // 更新処理時
            // User.new_password1、User.new_password2 ともに入力の場合はパスワードの更新を行う
        if ($this->request->data['User']['new_password1'] !== '' && $this->request->data['User']['new_password2'] !== '') {
                // User.password が存在しないので、リクエストの配列に追加
            $this->request->data['User']['password'] = $this->request->data['User']['new_password1'];
        }

        unset($this->User->validate['username']['isUnique']);

        if ($this->User->save($this->request->data)) {
                // 更新成功
            $this->Session->setFlash('プロフィールを更新しました！！', 'default', array(), 'success');
                // 2つのパスワード入力フォームを空で表示するために、配列から破棄
            unset($this->request->data['User']['new_password1'], $this->request->data['User']['new_password2']);

            $this->redirect(array('action' => 'roulette','controller' => 'Meetings'));

        } else {
                // 更新失敗
            $this->Session->setFlash('プロフィールを更新に失敗しました！！', 'default', array(), 'fail');
            $this->redirect('/users/edit/'.$this->Auth->user('id'));

        }
    } else {
            // 初期表示時
        $this->request->data = $this->User->read(null, $id);

    }
}



}
