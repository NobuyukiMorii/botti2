<?php

class User extends AppModel {

    public $uses  = array('User');
/*
    public $hasone = array(
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

	public function beforeSave(){
		$this->data['User']['password'] =
		 AuthComponent::password($this->data['User']['password']);
	return true;
	}

    //user_id_1とのリレーションをどうする
    public function afterFind ($results, $primary) {

        foreach($results as $i => $item){

            foreach (array('User', 'User1', 'User2') as $model) {
                if (array_key_exists($model, $item)) {

                    if ($item[$model]['gender'] == 1) {
                        $item[$model]['genderText'] = '男性';
                    } else {
                        $item[$model]['genderText'] = '女性';
                    }
                    /*
                    *workに関する処理はforeachで書きたいが、どう書けばいいか良くわからない
                    */
                    // $work = array('1'=>'大学生','2'=>'大学院生','3'=>'会社員','4'=>'公務員','5'=>'経営者','6'=>'自営業','7'=>'農業','8'=>'医者','9'=>'弁護士','10'=>'ニート','11'=>'ハイパーメディアクリエイター','12'=>'その他');

                    // foreach ($work as $key => $value) {
                    //     if ($item[$model]['work'] == $key){
                    //         $item[$model]['workText'] == $value;
                    //     }
                    // }

                    if ($item[$model]['work'] == 1) {
                        $item[$model]['workText'] = '大学生';
                    } elseif ($item[$model]['work'] == 2) {
                        $item[$model]['workText'] == '大学院生';
                    } elseif ($item[$model]['work'] ==3)  {
                        $item[$model]['workText'] = '会社員';
                    } elseif ($item[$model]['work'] == 4) {
                        $item[$model]['workText'] == '公務員';
                    } elseif ($item[$model]['work'] ==5)  {
                        $item[$model]['workText'] = '経営者';
                    } elseif ($item[$model]['work'] == 6) {
                        $item[$model]['workText'] == '自営業';
                    } elseif ($item[$model]['work'] ==7)  {
                        $item[$model]['workText'] = '農業';
                    } elseif ($item[$model]['work'] == 8) {
                        $item[$model]['workText'] == '医者';
                    } elseif ($item[$model]['work'] ==9)  {
                        $item[$model]['workText'] = '弁護士';
                    } elseif ($item[$model]['work'] == 10) {
                        $item[$model]['workText'] == 'ニート';
                    } elseif ($item[$model]['work'] ==11)  {
                        $item[$model]['workText'] = 'ハイパーメディアクリエイター';
                    } elseif ($item[$model]['work'] == 12) {
                        $item[$model]['workText'] == 'その他';
                    }
                    /*
                    *kibouyoubiに関する処理はforeachで書きたいが、どう書けばいいか良くわからない
                    */
                    if ($item[$model]['kibouyoubi'] == 1) {
                        $item[$model]['kibouyoubiText'] = '月曜日';
                    } elseif ($item[$model]['kibouyoubi'] == 2) {
                        $item[$model]['kibouyoubiText'] = '火曜日';
                    } elseif ($item[$model]['kibouyoubi'] == 3) {
                        $item[$model]['kibouyoubiText'] = '水曜日';
                    } elseif ($item[$model]['kibouyoubi'] == 4) {
                        $item[$model]['kibouyoubiText'] = '木曜日';
                    } elseif ($item[$model]['kibouyoubi'] == 5) {
                        $item[$model]['kibouyoubiText'] = '金曜日';
                    } elseif ($item[$model]['kibouyoubi'] == 6) {
                        $item[$model]['kibouyoubiText'] = '土曜日';
                    } elseif ($item[$model]['kibouyoubi'] == 0) {
                        $item[$model]['kibouyoubiText'] = '日曜日';
                    } 
                    /*
                    *kibouyoubiに関する処理はforeachで書きたいが、どう書けばいいか良くわからない
                    */
                    if ($item[$model]['kiboueki'] == 1) {
                        $item[$model]['kibouekiText'] = '東京';
                    } elseif ($item[$model]['kiboueki'] == 2) {
                        $item[$model]['kibouekiText'] = '有楽町';
                    } elseif ($item[$model]['kiboueki'] == 3) {
                        $item[$model]['kibouekiText'] = '新橋';
                    } elseif ($item[$model]['kiboueki'] == 4) {
                        $item[$model]['kibouekiText'] = '浜松町';
                    } elseif ($item[$model]['kiboueki'] == 5) {
                        $item[$model]['kibouekiText'] = '田町';
                    } elseif ($item[$model]['kiboueki'] == 6) {
                        $item[$model]['kibouekiText'] = '品川';
                    } elseif ($item[$model]['kiboueki'] == 7) {
                        $item[$model]['kibouekiText'] = '大崎';
                    } elseif ($item[$model]['kiboueki'] == 8) {
                        $item[$model]['kibouekiText'] = '五反田';
                    } elseif ($item[$model]['kiboueki'] == 9) {
                        $item[$model]['kibouekiText'] = '目黒';
                    } elseif ($item[$model]['kiboueki'] == 10) {
                        $item[$model]['kibouekiText'] = '恵比寿';
                    } elseif ($item[$model]['kiboueki'] == 11) {
                        $item[$model]['kibouekiText'] = '渋谷';
                    } elseif ($item[$model]['kiboueki'] == 12) {
                        $item[$model]['kibouekiText'] = '原宿';
                    } elseif ($item[$model]['kiboueki'] == 13) {
                        $item[$model]['kibouekiText'] = '代々木';
                    } elseif ($item[$model]['kiboueki'] == 14) {
                        $item[$model]['kibouekiText'] = '新宿';
                    } elseif ($item[$model]['kiboueki'] == 15) {
                        $item[$model]['kibouekiText'] = '新大久保';
                    } elseif ($item[$model]['kiboueki'] == 16) {
                        $item[$model]['kibouekiText'] = '高田馬場';
                    } elseif ($item[$model]['kiboueki'] == 17) {
                        $item[$model]['kibouekiText'] = '目白';
                    } elseif ($item[$model]['kiboueki'] == 18) {
                        $item[$model]['kibouekiText'] = '池袋';
                    } elseif ($item[$model]['kiboueki'] == 19) {
                        $item[$model]['kibouekiText'] = '大塚';
                    } elseif ($item[$model]['kiboueki'] == 20) {
                        $item[$model]['kibouekiText'] = '巣鴨';
                    } elseif ($item[$model]['kiboueki'] == 21) {
                        $item[$model]['kibouekiText'] = '駒込';
                    } elseif ($item[$model]['kiboueki'] == 22) {
                        $item[$model]['kibouekiText'] = '田端';
                    } elseif ($item[$model]['kiboueki'] == 23) {
                        $item[$model]['kibouekiText'] = '西日暮里';
                    } elseif ($item[$model]['kiboueki'] == 24) {
                        $item[$model]['kibouekiText'] = '日暮里';
                    } elseif ($item[$model]['kiboueki'] == 25) {
                        $item[$model]['kibouekiText'] = '鴬谷';
                    } elseif ($item[$model]['kiboueki'] == 26) {
                        $item[$model]['kibouekiText'] = '上野';
                    } elseif ($item[$model]['kiboueki'] == 27) {
                        $item[$model]['kibouekiText'] = '御徒町';
                    } elseif ($item[$model]['kiboueki'] == 28) {
                        $item[$model]['kibouekiText'] = '秋葉原';
                    } elseif ($item[$model]['kiboueki'] == 29) {
                        $item[$model]['kibouekiText'] = '神田';
                    } 

                }
            }

            $results[$i] = $item;

        }
        return $results;
    }

    public $virtualFields = array(
        'age' => '(year(curdate()) - year(User.birthday)) - (right(curdate(),5) < right(User.birthday,5))'
    );

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