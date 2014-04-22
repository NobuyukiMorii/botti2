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

        $login_gender = $this->Auth->user('gender');
        if($login_gender == 1){
            $partner_gender = 2;
        } else {
            $partner_gender = 1;
        }
        //制御構造の場合、外の}には;いらない。

        $randomUser = $this->User->find('first',array(
            'conditions' => array('User.age >=' => '20','User.gender' => $partner_gender),
            'order' => 'rand()',
            'limit' => 1
            )
        );

        $randomBar = $this->Bar->find('first',array(
            'order' => 'rand()',
            'limit' => 1
            )
        );

        $this->set(compact('randomBar','randomUser'));
        $this->Session->write('randomBar',$randomBar);
        $this->Session->write('randomUser',$randomUser);

        $this->set('loginUser',$this->Auth->user());

    }

    public function image2Bar($bar_id){
        //指定したidに沿ってデータを一件検索
        $graphic = $this->Bar->findById($bar_id);
        //画像ファイルをアップロードする際の定型コード。どんな データなのかを教えるおまじない。
        header('Content-type: image/jpeg');
        //画像ファイルの呼び出し
        echo ($graphic["Bar"]["image"]);
        exit;
    }

    public function image2User($user_id){

        $graphic = $this->User->findById($user_id);

        //画像ファイルをアップロードする際の定型コード。どんな データなのかを教えるおまじない。
        header('Content-type: image/jpeg');
        //画像ファイルの呼び出し
        echo ($graphic["User"]["image"]);
        exit;
    }

    public function detail(){

        $randomBar = $this->Session->read('randomBar');
        $randomUser = $this->Session->read('randomUser');
        $this->set(compact('randomBar','randomUser'));
    }

    public function email () {
        $title = "【ガチャ恋】デートのお誘い";

        $msg = 'こんにちは◯◯さん！◯◯さんからデートのお誘いです！デートするなら、このメールのリンクをクリックしてね！';

        // 'こんにちは◯◯さん！◯◯さんからデートのお誘いです！デートするなら、このメールのリンクをクリックしてね！'.
        //         'お店'.
        //             '店名:◯◯'.
        //             'url:◯◯'.
        //             '最寄駅'.
        //             '紹介文'.
        //         '待ち合わせ'.
        //             '日程:◯月◯日'.
        //             '時間:◯時◯分'.
        //             '場所：◯駅の◯'.
        //         'お相手'.
        //             '名前:◯◯さん'.
        //             '年齢:◯◯才'.
        //             '職業：◯◯'.;

        // $randomUser = $this->Session->read('randomUser');
        // $to = $randomBar['User']['username'];

        $email = new CakeEmail('smtp');
        $email->to('qwerty.poiu.mory@gmail.com')
              ->emailFormat('text')
              ->subject($title)
              ->send($msg);

        $this->render('confirm');
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
        //var_dump($this->request->data);

        $this->set("data",$this->request->data);
        /*
        保存すると勝手にUserテーブルと連携しようとしやがる。
        */

        $this->Meeting->save($this->request->data);
        
        /*
        *CakeEmailの送信
        */
        $this->setAction("email");

    }

    public function meetinglist() {

        $data = $this->Meeting->find('all',array(
            // 'fields' => array('User2.nickname','User2.birthday','User2.work','Bar.name','Bar.station','Meeting.date','Meeting.time','Meeting.meetingspot'), //フィールド名の配列
            'order' => array('Meeting.date' => 'ASC','Meeting.time' => 'ASC'), //並び順を文字列または配列で指定  
            'limit' => 10,
            'callbacks' => false
            )
        );

        $this->set('data', $data);

    }

    public function userpolicy() {


    }







}