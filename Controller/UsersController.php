<?php

class UsersController extends AppController
{

// Sweet,Commentモデルを使用する
    public $name = 'Users';

    public $scaffold;

    public $uses = array('User');

    public $components = array('Auth','Session');

    public function beforeFilter(){
        $this->Auth->allow('add','/gachakoi/View/xml/default');//ホーム画面に行けない
        /*Facebockログインのやり方わからない為コメントアウト
        $this->Auth->allow('facebook');
        */
        parent::beforeFilter();

        $this->Auth->authError = "あなたはログインしていません。";
        $this->Auth->loginError = "ログインに失敗しました。";
    }

public function add(){
    if(!empty($this->data)){
        if($this->data){
            $this->User->create();
            $this->request->data["User"]["image"]=file_get_contents($this-> data["User"]["image"]["tmp_name"]);
            $this->User->save($this->data);
            $this->redirect(array('action'=>'login'));
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
    if($this->request->isPost()){
        if($this->Auth->login()){
            $this->redirect($this->Auth->redirect(array('action' => 'roulette','controller' => 'Meetings')));
        } else {
            $this->Session->setFlash('ユーザー名かパスワードが違います。','default',array(),'auth');
        }    
    }
}

public function logout(){
    $this->Auth->logout();
    return $this->redirect(array('action'=>'roulette','controller'=>'Meetings'));
}

public function profile($id = null) {
    
    $this->set('data',$this->Auth->user());

    $this->User->id = $id;
        // if (!$this->User->exists()) {
        //     throw new NotFoundException(__('ユーザー登録がありません。'));
        // }

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->request->data["User"]["image"]=file_get_contents($this-> data["User"]["image"]["tmp_name"]);
            
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('プロフィールを更新しました！！'));
                $this->redirect(array('action' => 'roulette','controller' => 'Meetings'));
            } else {
                $this->Session->setFlash(__('更新に失敗しました。'));
            }
        } else {
            // $this->request->data = $this->User->read(null, $id);
            // unset($this->request->data['User']['password']);
        }
}

}
