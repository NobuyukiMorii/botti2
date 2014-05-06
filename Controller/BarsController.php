<?php

class BarsController extends AppController
{

// Sweet,Commentモデルを使用する
    public $uses = array('Meeting','User','Bar');

    // Sessionコンポーネントを使用する

    public $components = array('Auth','Session');

    public function admin_register(){


    }

	public function admin_confirm(){

        if ($this->request->is('post')) {

            //バリデーションチェック
            $this->Bar->set($this->request->data);
            $this->request->data["Bar"]["image"]=file_get_contents($this-> data["Bar"]["image"]["tmp_name"]);

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

        $register = $this->Session->read('hozon');

        if ($this->Bar->save($register, array( 'validate' => false))) {
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

        $data = $this->Bar->find('all');
        $this->set('data', $data);
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

        $data = $this->Meeting->find('all',array(
            'conditions' => array('Meeting.bar_id' => 47,'Meeting.date >=' => date("Y-m-d")),
            'limit' =>100,
            'order' => array('Meeting.date' => 'ASC','Meeting.time' => 'ASC')
            )
        );

        $data = $this->paginate();
        $this->set('data',$data);

        $LoginUserName = $this->Auth->user('nickname');
        $this->set('LoginUserName',$LoginUserName);

    }


}