<?php

class Bar extends AppModel {
	
	public $uses  = array('Bar');

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
            'foreignKey' => 'bar_id'
        )
    );
*/
//自分だけ投稿するつもりだから、バリデーションはなしでいい。

    public function afterFind ($results, $primary) {

            foreach($results as $i => $item){

                foreach (array('Bar') as $model) {
                    if (array_key_exists($model, $item)) {

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

                    }
                }

                $results[$i] = $item;

            }
            return $results;
        }



}