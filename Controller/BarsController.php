<?php

class BarsController extends AppController
{

// Sweet,Commentモデルを使用する
    public $uses = array('Bar');

    // Sessionコンポーネントを使用する
    public $components = array('Auth','Session');


    public function admin_register(){


    }

	public function admin_confirm(){
        $this->request->data["Bar"]["image"]=file_get_contents($this-> data["Bar"]["image"]["tmp_name"]);
        //$this->Sweet->save($this->request->data);
        $this->Session->write('hozon',$this->request->data);


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
        $this->Bar->save($register);

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
        $data = $this->Bar->findAllByName($this->request->data['Bar']['name']);
        $this->set('data',$data);
    }

//バーの詳細画面を追加


}
