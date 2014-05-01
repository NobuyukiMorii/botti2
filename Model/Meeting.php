<?php

class Meeting extends AppModel {

	public $uses  = array('Meeting','User','Bar');

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
		),
		'Bar' => array(
			'className' => 'Bar',
			'foreignKey' => 'bar_id'
		),
	);

	public function afterFind ($results, $primary) {

        foreach($results as $i => $item){

            foreach (array('Meeting') as $model) {
                if (array_key_exists($model, $item)) {

                    if ($item[$model]['result'] == 1) {
                        $item[$model]['resultText'] = '検討中';
                    } elseif ($item[$model]['result'] == 2) {
                        $item[$model]['resultText'] = 'デート予定';
                    } elseif ($item[$model]['result'] == 3)  {
                        $item[$model]['resultText'] = 'キャンセル';
                    } 
                }
            }

            $results[$i] = $item;

        }
        return $results;
    }

    public $validate = array(

        'date' => array(
            array(
                'rule' => 'notEmpty',
                'message' => '日付は必ず入力して下さい。'
            ),
        ),

        'time' => array(
            array(
                'rule' => 'notEmpty',
                'message' => '時間は必ず入力して下さい。'
            ),
            array(
                'rule' => array('time','H:i:s'),
                'message' => '◯◯:◯◯の形式で入力して下さい。'
            )
        ),

        'meetingspot' => array(
            array(
                'rule' => 'notEmpty',
                'message' => '必ず入力して下さい。',
            ),
        ), 
    );


}
?>