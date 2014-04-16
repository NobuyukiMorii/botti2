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
}