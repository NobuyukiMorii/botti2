<?php

class BarsController extends AppController
{

// Sweet,Commentモデルを使用する
    public $uses = array('Meeting','User','Bar');

    // Sessionコンポーネントを使用する

    public $components = array('Auth','Session','Paginator');

    public function admin_register(){


    }

	public function admin_confirm(){

        if ($this->request->is('post')) {

            //バリデーションチェック
            $this->Bar->set($this->request->data);

            //バリデーションエラーがあれば、admin_register画面に戻し、エラーを表示する
            if(!$this->Bar->validates()){

                $this->set("error",$this->Bar->validationErrors);
                $this->render("admin_register");
            } else {
                $this->Session->write('hozon',$this->request->data);
                $this->render("admin_confirm");
            }
        }
    }

    public function image2(){
        //指定したidに沿ってデータを一件検索
        $graphic = $this->Session->read('hozon');
        //画像ファイルをアップロードする際の定型コード。どんな データなのかを教えるおまじない。
        header('Content-type: image/jpeg');
        //画像ファイルの呼び出し
        echo ($graphic["Bar"]["image"]);
        exit;
    }

    public function admin_notice(){

        $register = $this->request->data;

        if ($this->Bar->saveAll($register, array( 'validate' => false))) {
            $this->render("admin_notice");
        }

    }

    public function image($cid){
        //画面表示用テンプレート読み込み動作
        $this->autoRender = FALSE;
        //指定したidに沿ってデータを一件検索
        $graphic = $this->Bar->findById($cid);
        //画像ファイルをアップロードする際の定型コード
        header('Content-type: image/jpeg');
        //画像ファイルの呼び出し
        echo $graphic["Bar"]["image"];
        exit;
    }

    public function admin_list() {
        $this->Paginator->settings = array(
            'conditions' => array(),
            'limit' => 1,
            'sort' => 'Bar.station'
        );
        $data = $this->Paginator->paginate('Bar');
        $this->set(compact('data'));
    }

    public function search(){
        
    }

    public function result() {
        $data = null;
        if(!empty($this->request->data)){
            $data = $this->Bar->find('all', array('conditions' => 
                array('Bar.name like' => "%{$this->data['Bar']['name']}%")));
        } else {
            $data = $this->Board->find('all');
        }
        $this->set('data',$data);

    }



    public $paginate = array(
        'page' => 1,
        'limit' => 5,
        'limit' =>100,
        'order' => array('Meeting.date' => 'ASC','Meeting.time' => 'ASC')
    );

    public function bar_control() {

        $this->Paginator->settings = array(
            'Meeting' => array(
                'limit' => 20,
                'order' => array('date' => 'ASC'),
                // 'group' => array('week', 'home_team_id', 'away_team_id'),
            )
        );

        $data = $this->Paginator->paginate('Meeting');
        $this->set(compact('data'));

    }


}