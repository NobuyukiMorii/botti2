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

                    if ($item[$model]['station'] == 1) {
                        $item[$model]['stationText'] = '東京';
                    } elseif ($item[$model]['station'] == 2) {
                        $item[$model]['stationText'] = '有楽町';
                    } elseif ($item[$model]['station'] == 3) {
                        $item[$model]['stationText'] = '新橋';
                    } elseif ($item[$model]['station'] == 4) {
                        $item[$model]['stationText'] = '浜松町';
                    } elseif ($item[$model]['station'] == 5) {
                        $item[$model]['stationText'] = '田町';
                    } elseif ($item[$model]['station'] == 6) {
                        $item[$model]['stationText'] = '品川';
                    } elseif ($item[$model]['station'] == 7) {
                        $item[$model]['stationText'] = '大崎';
                    } elseif ($item[$model]['station'] == 8) {
                        $item[$model]['stationText'] = '五反田';
                    } elseif ($item[$model]['station'] == 9) {
                        $item[$model]['stationText'] = '目黒';
                    } elseif ($item[$model]['station'] == 10) {
                        $item[$model]['stationText'] = '恵比寿';
                    } elseif ($item[$model]['station'] == 11) {
                        $item[$model]['stationText'] = '渋谷';
                    } elseif ($item[$model]['station'] == 12) {
                        $item[$model]['stationText'] = '原宿';
                    } elseif ($item[$model]['station'] == 13) {
                        $item[$model]['stationText'] = '代々木';
                    } elseif ($item[$model]['station'] == 14) {
                        $item[$model]['stationText'] = '新宿';
                    } elseif ($item[$model]['station'] == 15) {
                        $item[$model]['stationText'] = '新大久保';
                    } elseif ($item[$model]['station'] == 16) {
                        $item[$model]['stationText'] = '高田馬場';
                    } elseif ($item[$model]['station'] == 17) {
                        $item[$model]['stationText'] = '目白';
                    } elseif ($item[$model]['station'] == 18) {
                        $item[$model]['stationText'] = '池袋';
                    } elseif ($item[$model]['station'] == 19) {
                        $item[$model]['stationText'] = '大塚';
                    } elseif ($item[$model]['station'] == 20) {
                        $item[$model]['stationText'] = '巣鴨';
                    } elseif ($item[$model]['station'] == 21) {
                        $item[$model]['stationText'] = '駒込';
                    } elseif ($item[$model]['station'] == 22) {
                        $item[$model]['stationText'] = '田端';
                    } elseif ($item[$model]['station'] == 23) {
                        $item[$model]['stationText'] = '西日暮里';
                    } elseif ($item[$model]['station'] == 24) {
                        $item[$model]['stationText'] = '日暮里';
                    } elseif ($item[$model]['station'] == 25) {
                        $item[$model]['stationText'] = '鴬谷';
                    } elseif ($item[$model]['station'] == 26) {
                        $item[$model]['stationText'] = '上野';
                    } elseif ($item[$model]['station'] == 27) {
                        $item[$model]['stationText'] = '御徒町';
                    } elseif ($item[$model]['station'] == 28) {
                        $item[$model]['stationText'] = '秋葉原';
                    } elseif ($item[$model]['station'] == 29) {
                        $item[$model]['stationText'] = '神田';
                    } 

                    if ($item[$model]['genre'] == 1) {
                        $item[$model]['genreText'] = '居酒屋';
                    } elseif ($item[$model]['genre'] == 2) {
                        $item[$model]['genreText'] = '洋風居酒屋';
                    } elseif ($item[$model]['genre'] == 3) {
                        $item[$model]['genreText'] = '中華料理';
                    } elseif ($item[$model]['genre'] == 3) {
                        $item[$model]['genreText'] = 'コンセプト居酒屋';
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

        'image' => array(

            // ルール：uploadError => errorを検証
            'upload-file' => array( 
                'rule' => array( 'uploadError'),
                'message' => array( '写真のアップロードに失敗しました。')
            ),

            // ルール：extension => pathinfoを使用して拡張子を検証
            'extension' => array(
                'rule' => array( 'extension', array( 
                    'jpg', 'jpeg', 'png', 'gif')  // 拡張子を配列で定義
                ),
                'message' => array( 'jpg、jpeg、png、gifの写真を選択して下さい。')
            ),

            // ルール：mimeType => 
            // finfo_file(もしくは、mime_content_type)でファイルのmimeを検証
            'mimetype' => array( 
                'rule' => array( 'mimeType', array( 
                    'image/jpeg', 'image/png', 'image/gif')  // MIMEタイプを配列で定義
                ),
                'message' => array( 'jpg、jpeg、png、gifの写真を選択して下さい。')
            ),

            // ルール：fileSize => filesizeでファイルサイズを検証(2GBまで)
            'size' => array(
                'maxFileSize' => array( 
                    'rule' => array( 'fileSize', '<=', '10MB'),  // 10M以下
                    'message' => array( '10MB以下のファイルにして下さい。')
                ),
                'minFileSize' => array( 
                    'rule' => array( 'fileSize', '>',  0),    // 0バイトより大
                    'message' => array( 'このファイルは選択出来ません。')
                ),
            ),
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