<?php

class Meeting extends AppModel {

	public $uses  = array('Meeting','User','Bar');

	public $belongsTo = array(
		'User1' => array(
			'className' => 'User',
			'foreignKey' => 'user_id_1'
		),
		'User2' => array(
			'className' => 'User',
			'foreignKey' => 'user_id_2'
		),
		'Bar' => array(
			'className' => 'Bar',
			'foreignKey' => 'bar_id'
		),
	);

	// public $validate = array(
	// 	'user_id_1' => array(
	// 			//'rule'=>array('maxRecords','User.user_id_1',3),
	// 			// 'message'=>'１日３回以上ガチャできません！。'
	// 			)
	// );

	/*
	*これだとgacha_countの全部の回数になる。一日あたりの回数になるよう改造しないと。
	*おそらくcreated_atと組み合わせることで出来るのではないか
	*/

	// public function maxRecords($data,$field,$num){
	// 	$n = $this->find('gacha_count',
	// 		array('conditions' => array($field => $data)));
	// 	return $n < $num ? true : false;
	// }
}
?>