<?php

class User extends AppModel {

    public $uses  = array('User');
/*
    public $hasmany = array(
        "Meeting" => array(
            'className' => 'Meeting',
            'conditions' => '',
            'order' => '',
            'dependent' => false,
            'limit' => 0,
            'exclusive' => false,
            'finderQuery' => '',
            'foreignKey' => 'user_id_2'
        )
    );
*/

    //user_is_1とのリレーションをどうする

	public function beforeSave(){
		$this->data['User']['password'] =
		 AuthComponent::password($this->data['User']['password']);
	return true;
	}

    public function afterFind ($results, $primary) {
        // var_dump($results);exit;
        
        foreach($results as $i => $item){

            if ($item['User']['gender'] == 1) {
                $item['User']['genderText'] = '男性';
            } else {
                $item['User']['genderText'] = '女性';
            }

            $results[$i] = $item;

        }
        return $results;
    }

    /*
    なんかメッセージが表示されない。
    あ、ビューに表示させるところがないからだ。作ろう。
    */

	public $validate = array(
        'username' => array(
            'validEmail' => array(
                'rule' => array( 'email', true),
                'message' => 'メールアドレスを入力して下さい'
            ),
            // 一意性チェック
            'emailExists' => array(
                'rule' => 'isUnique',
                'message' => 'メールアドレスは既に登録されています'
            ),
        ),

        // 'plain' => array(
        //      // パスワード・確認パスワードの一致
        //      'match' => array(
        //          'rule' => array( 'confirmPassword', 'plain', 'plain_confirm'),
        //          'message' => 'パスワードが違います'
        //      )
        // ),

        // 'gender' => array(
        //         'rule' => 'notEmpty',
        //         //'allowEmpty' => false
        //         'message' => '性別は必ず入力して下さい。',   
        // ),

        // 'prefecture' => array(
        //         'rule' => 'notEmpty',
        //         //'allowEmpty' => false
        //         'message' => 'お住まいの都道府県は必ず入力して下さい。',   
        // ),

        // 'work' => array(
        //         'rule' => 'notEmpty',
        //         //'allowEmpty' => false
        //         'message' => '職業は必ず入力して下さい。',   
        // ),

        // 'age' => array(
        //         'rule' => 'notEmpty',
        //         //'allowEmpty' => false
        //         'message' => '年齢は必ず入力して下さい。',   
        // ),

        // 'image' => array(
        //         'rule' => 'notEmpty',
        //         //'allowEmpty' => false
        //         'message' => '画像は必ず登録して下さい。',   
        // ),

        // 'message' => array(
        //         'rule' => 'notEmpty',
        //         //'allowEmpty' => false
        //         'message' => 'メッセージは必ず入力して下さい。',   
        // ),

        // 'nickname' => array(
        //         'rule' => 'notEmpty',
        //         //'allowEmpty' => false
        //         'message' => 'ニックネームは必ず入力して下さい。',   
        // ),

        // 'kibouyoubi' => array(
        //         'rule' => 'notEmpty',
        //         //'allowEmpty' => false
        //         'message' => '希望日は必ず入力して下さい。',   
        // ),

        // 'kibouzikan' => array(
        //         'rule' => 'notEmpty',
        //         //'allowEmpty' => false
        //         'message' => '希望開始時間は必ず入力して下さい。',   
        // ),

        // 'kiboueki' => array(
        //         'rule' => 'notEmpty',
        //         //'allowEmpty' => false
        //         'message' => '希望曜日は必ず入力して下さい。',   
        // ),

        // 'area' => array(
        //         'rule' => 'notEmpty',
        //         //'allowEmpty' => false
        //         'message' => 'エリアは必ず入力して下さい。',   
        // ),

    );

	public function confirmPassword( $field, $plain, $plain_confirm) {
        if ($plain == $plain_confirm) {
          // パスワードハッシュ化
          $this->request->data['User']['password'] = Security::hash( $plain, 'sha512', true);
          return true;
        }
    }

}
?>