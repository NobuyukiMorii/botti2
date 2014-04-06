<?php

class UsersController extends AppController
{

// Sweet,Commentモデルを使用する
    public $name = 'Users';

    public $scaffold;

    public $uses = array('User');

    public $components = array('Auth','Session');

    public function beforeFilter(){
        $this->Auth->allow('add');
        /*Facebockログインのやり方わからない為コメントアウト
        $this->Auth->allow('facebook');
        */
        parent::beforeFilter();

        $this->Auth->authError = "あなたはログインしていません。";
        $this->Auth->loginError = "ログインに失敗しました。";
    }
/*FACEBOOKログインにさせたかったが、うまくいかなかった為コメントアウト
    function facebook() {
        App::import('Helper', 'Html');
        $html = new HtmlHelper();
        $url = $this->facebook->getLoginUrl(array(
            'redirect_uri' => $html->url(array('action' => 'callback'), true),
            'scope' => 'email,publish_stream',));
        $this->redirect($url);
    }

        function callback() {
        try {
                $me = $this->facebook->api('/me');
                $access_token = $this->facebook->getAccessToken();
            } catch (FacebookApiException $e) {
                // Facebookエラー
                error_log($e);
                return;
            }
            $login['User']['fb_id'] = $me['id'];
            $login['User']['password'] = "1";
            // Facebookから取得した情報で通常のAuth認証を行います if ($this->Auth->login($login)) {
            // 既存ユーザーの場合の処理
            if ($this->Auth->login($login)) {
                $this->redirect($this->Auth->redirect());
            } else {
            // 新規ユーザーの場合の処理
                $this->redirect($this->Auth->redirect(
                $user = $login;
                $user['User']['username'] =
                $me['first_name'].'.'.$me['last_name'];
                $this->User->save($user);

                $this->Auth->login($login);
                $this->redirect($this->Auth->redirect());
            }
        }
*/

/**
 * 新規登録画面
*/

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

public function profile() {
    $this->set('data',$this->Auth->user());
}


}
