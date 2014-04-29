<?php

class UsersController extends AppController
{

// Sweet,Commentモデルを使用する
    public $name = 'Users';

    public $scaffold;

    public $uses = array('User');

    public $components = array('Auth','Session');

    public $helpers = array("DatePicker");

public function add(){
    if(!empty($this->data)){
        if($this->data){
            $this->User->create($this->request->data);
            $this->request->data["User"]["image"]=file_get_contents($this-> data["User"]["image"]["tmp_name"]);

            if(!$this->User->validates()){
                $this->set("error",$this->User->validationErrors);
                $this->render("add");
            } else {
                $this->User->save($this->data);
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

public function login (){
    
    $this->autoLayout = false;
    $this->autoRender = true;

    if($this->request->isPost()){
        if($this->Auth->login()){
            //$this->redirect($this->Auth->redirect(array('action' => 'roulette','controller' => 'Meetings')));
            $this->redirect('/Meetings/roulette/');
            $this->Session->setFlash('ログインしました。','default',array(),'auth');
        } else {
            $this->Session->setFlash('ユーザー名かパスワードが違います。','default',array(),'auth');
        }    
    }
}

public function logout(){
    $this->Auth->logout();
    $this->redirect('/Users/login/');
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

        $this->request->data["User"]["image"]=file_get_contents($this->data["User"]["image"]["tmp_name"]);
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

            $this->redirect(array('action' => 'roulette2','controller' => 'Meetings'));

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
