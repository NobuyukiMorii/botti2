<?php

class Bar extends AppModel {

	public $name = 'Bar';

	public $uses  = array('Bar','Attachment');

    public $hasMany = array(
        'Image' => array(
            'className' => 'Attachment',
            'foreignKey' => 'foreign_key',
            // 'conditions' => array(
            //     'Attachment.model' => 'Bar',
            // ),
        ),
    );

    public function afterFind ($results, $primary = true) {

        foreach($results as $i => $item){

            if(is_array($item)) {

            foreach (array('Bar') as $model) {

                if (array_key_exists($model, $item) && $results[0][$model] != false) {

                    if ($item[$model]['genre'] == 0) {
                        $item[$model]['genreText'] = 'バー';
                    } elseif ($item[$model]['genre'] == 1) {
                        $item[$model]['genreText'] = '居酒屋';
                    } elseif ($item[$model]['genre'] == 2) {
                        $item[$model]['genreText'] = 'イタリアン';
                    } elseif ($item[$model]['genre'] == 3) {
                        $item[$model]['genreText'] = 'フレンチ';
                    } elseif ($item[$model]['genre'] == 4) {
                        $item[$model]['genreText'] = 'スパニッシュ';
                    } elseif ($item[$model]['genre'] == 5) {
                        $item[$model]['genreText'] = '焼き肉';
                    } elseif ($item[$model]['genre'] == 6) {
                        $item[$model]['genreText'] = '焼き鳥';
                    } elseif ($item[$model]['genre'] == 7) {
                        $item[$model]['genreText'] = '鍋';
                    } elseif ($item[$model]['genre'] == 8) {
                        $item[$model]['genreText'] = '中華';
                    } elseif ($item[$model]['genre'] == 9) {
                        $item[$model]['genreText'] = 'アジア系';
                    } elseif ($item[$model]['genre'] == 10) {
                        $item[$model]['genreText'] = 'インド系';
                    } elseif ($item[$model]['genre'] == 11) {
                        $item[$model]['genreText'] = 'その他';
                    } 
                }

            }

        }

            $results[$i] = $item;

        }
        return $results;
    }

    public $validate = array(

        'name' => array(
            array(
                'rule' => 'notEmpty',
                'message' => '必ず入力して下さい。'
            ),
            array(
                'rule' => array('maxLength', 30),
                'message' => '30文字以内で入力して下さい。'
            )
        ),

        'location' => array(
            'rule' => 'notEmpty',
            'message' => '必ず入力して下さい。',
        ),

        'telnumber' => array(
            array(
                'rule' => 'notEmpty',
                'message' => '必ず入力して下さい。',
            ),
            array(
                'rule' => array( 'custom', '/^(0\d{1,4}-\d{1,4}-\d{4})$/'),
                'message'=>'電話番号を正確に入力してください。'
            )
        ),

        'station' => array(
            array(
                'rule' => 'notEmpty',
                'message' => '必ず入力して下さい。',
            ),
            array(
                'rule' => 'numeric',
                'message' => 'プルダウンから選択して下さい。',
            ),
            array(
                'rule' => array('comparison','<=',29),
                'message' => 'プルダウンから選択して下さい。',
            )
        ),

        'genre' => array(
            'rule' => 'notEmpty',
            'message' => 'ジャンルは必ず入力して下さい。',   
        ),

        'gate' => array(
            array(
                'rule' => 'notEmpty',
                'message' => '必ず入力して下さい。',
            ),
            array(
                'rule' => array('maxLength', 30),
                'message' => '30文字以内で入力して下さい。',
            )
        ),

        'url' => array(
            array(
                'rule' => 'notEmpty',
                'message' => '必ず入力して下さい。',
            ),
            array(
                'rule' => 'url',
                'message' => 'URLを入力して下さい。',
            )
        ),

        'description' => array(
            array(
                'rule' => 'notEmpty',
                'message' => '必ず入力して下さい。',
            ),
            array(
                'rule' => array('maxLength', 200),
                'message' => '「200文字以内で入力して下さい。',
            )
        ),

        'price' => array(
            'rule' => 'notEmpty',
            'message' => '必ず入力して下さい。'
        )
    );


}