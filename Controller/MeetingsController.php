<?php

class MeetingsController extends AppController
{
    public $name = 'Meetings';

    public $scaffold;

    public $uses = array('Meeting','User','Bar');

    public $components = array('Auth','Email','Session');

    public function beforeFilter(){
        $this->Auth->allow('add');
        //$this->Auth->allow('logout');
        $this->Auth->authError = "あなたはログインしていません。";
        $this->Auth->loginError = "ログインに失敗しました。";
    }

    public function roulette(){
        /*
        男も女もでる。なぜだ。
        */
        
        $login_gender = $this->Auth->user('gender');
        if($login_gender == 1){
            $partner_gender = 2;
        } else {
            $partner_gender = 1;
        }
        //制御構造の場合、外の}には;いらない。
        
        $randomUser = $this->User->find('first',array(
            'conditions' => array('User.age >=' => 20,'User.gender' => $partner_gender),
            'order' => 'rand()',
            'limit' => 1
            )
        );

        $randomBar = $this->Bar->find('first',array(
            /*
            ユーザーのエリアとお店のエリアが一致するようにしたい。
            Barが定義されていないとか言われる。してるっちゅうに！
            */
            //'conditions'=> array('Bar.area' => $randomUser['User']['area']),
            'order' => 'rand()',
            'limit' => 1
            )
        );

        $this->set(compact('randomBar','randomUser'));
        $this->Session->write('randomBar',$randomBar);
        $this->Session->write('randomUser',$randomUser);

        $this->set('loginUser',$this->Auth->user());

        /*
        ガチャのカウントをユーザーテーブルに記録させたい。
        その上で一日あたりのガチャ回数を取り出して、３回までしかガチャができないようにしたい。
        */




    }

    public function image2Bar(){
        //指定したidに沿ってデータを一件検索
        $graphic = $this->Session->read('randomBar');
        //画像ファイルをアップロードする際の定型コード。どんな データなのかを教えるおまじない。
        header('Content-type: image/jpeg');
        //画像ファイルの呼び出し
        echo ($graphic["Bar"]["image"]);
        exit;
    }

    public function image2User(){
        //指定したidに沿ってデータを一件検索
        $graphic = $this->Session->read('randomUser');
        //画像ファイルをアップロードする際の定型コード。どんな データなのかを教えるおまじない。
        header('Content-type: image/jpeg');
        //画像ファイルの呼び出し
        echo ($graphic["User"]["image"]);
        exit;
    }

    public function detail(){

        $requestedBar = $this->Session->read('randomBar');
        $requestedUser = $this->Session->read('randomUser');
        $this->set(compact('requestedBar','requestedUser'));
    }

    public function confirm(){
        /*
        全データを$this->request->dataにsaveする
        $this->request->dataにはuser_id_1,user_id_2,bar_idが欠損している
        */
        
        $this->request->data["Meeting"]["user_id_1"] = $this->Auth->user('id');
        $loginUserName = $this->Auth->user('nickname');
        $this->set('loginUserName',$loginUserName);

        $randomBar = $this->Session->read('randomBar');
        $this->set('randomBar',$randomBar);
        $this->request->data["Meeting"]["bar_id"] = $randomBar['Bar']['id'];

        $randomUser = $this->Session->read('randomUser');
        $this->set('randomUser',$randomUser);
        $this->request->data["Meeting"]["user_id_2"] = $randomUser['User']['id'];   
        var_dump($this->request->data);

        $this->set("data",$this->request->data);
        /*
        保存すると勝手にUserテーブルと連携しようとしやがる。
        */
        //$this->Meeting->save($this->request->data);
    }


    /*Facebook機能がよく分からないためコメントアウト
    function post(){
        $this->facebook->api('/me/feed','POST',
        array(
        // 投稿したい項目を複数選べます
        // リファレンス参照 https://developers.facebook.com/docs/reference/api/post/
        'message' => 'メッセージ:テスト投稿',
        'link' => 'https://developers.facebook.com/docs/reference/api/post/', // 'picture' => '画像URL',
        // 'name' => '投稿の名前',
        // 'caption' => 'キャプション', // 'description' => '説明',
        ));
        $this->redirect($this->referer());
        }
    */
}