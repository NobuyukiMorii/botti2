<?php

class MeetingsController extends AppController
{
    public $name = 'Meetings';

    public $uses = array('Meeting','User','Bar');

    public $components = array('Auth','Email','Session','Paginator');

    public $helpers = array("DatePicker");

    public function roulette(){

        $login_gender = $this->Auth->user('gender');
        if($login_gender == 1){
            $partner_gender = 2;
        } else {
            $partner_gender = 1;
        }

        $randomUser = $this->User->find('first',array(
            'conditions' => array('User.age >=' => '20','User.gender' => $partner_gender),
            'order' => 'rand()',
            'limit' => 1
            )
        );

        $randomBar = $this->Bar->find('first',array(
            'conditions' => array('Bar.station' => $randomUser['User']['kiboueki'],'Bar.genre' => $randomUser['User']['genre']),
            'order' => 'rand()',
            'limit' => 1
            )
        );

        $anata =$this->User->find('first',array(
            'conditions' => array('User.id' => $this->Auth->user('id')),
            'limit' => 1,
            )
        );

        $this->set(compact('randomBar','randomUser','anata'));
        $this->Session->write('randomBar',$randomBar);
        $this->Session->write('randomUser',$randomUser);

        //希望曜日の一週間後の日付を算出してViewに渡す
        $target_week = $randomUser['User']['kibouyoubi'];
        $today_week=date('w');
        $plus=0;
        if($target_week>$today_week) {
            $plus=$target_week-$today_week;
        } else {
            $plus=7-($today_week-$target_week);
        }
        $add_sec = $plus * 86400;//日数×１日の秒数
        $target_sec = date('U') + $add_sec;//Unixからの秒数
        $NextWeekDay = date('Y-m-d', $target_sec);

        $this->set('NextWeekDay',$NextWeekDay);

        //今日の曜日
        $youbi = array("日", "月", "火", "水", "木", "金", "土");
        $w = date("w");
        $this->set('youbi',$youbi[$w]);

        $request_time = $randomUser['User']['kibouzikan'];
        $this->set('request_time',$request_time);

        //datetimeのプルダウンのフォーマットの設定を渡す
        $start_time_option = array(
            'minYear' => date('Y'),
            'maxYear' => date('Y', strtotime(date('Y-m-1').' +1 year')),
            'separator' => array('年','月','日'),
            'value' => array('year' => date('Y'),'month' => date('m'),'day' => date('d')),
            'monthNames' => false
        );
        $this->set('start_time_option',$start_time_option);

        //山手線の駅のマッチングポイント
        $station_a = $randomUser['User']['kiboueki'];
        $station_b = $anata['User']['kiboueki'];

        if ($station_a - $station_b > 15) {$dif_st_cnt = (29 - $station_a) + $station_b;}
        if ($station_a - $station_b < -15) {$dif_st_cnt = $station_a + (29 - $station_b);}
        if ($station_a - $station_b >= -15 || $station_a - $station_b <= 15 ) {$dif_st_cnt = abs($station_a - $station_b);};
        $mach_station_point = 30 - $dif_st_cnt;

        //曜日のマッチングポイント
        $youbi_a = $randomUser['User']['kibouyoubi'];
        $youbi_b = $anata['User']['kibouyoubi'];

        if ($youbi_a == $youbi_b) {
            $mach_youbi_point = 20;
        } else {$mach_youbi_point = 0;
        }

        //年齢のマッチングポイント
        $age_a = $randomUser['User']['age'];
        $age_b = $anata['User']['age'];
        if(abs($age_a - $age_b) <= 10) {
            $much_age_point = 10 - abs($age_a - $age_b);            
        } else {
            $much_age_point = 0;
        }

        //仕事のマッチングポイント
        $work_a = $randomUser['User']['work'];
        $work_b = $anata['User']['work'];
        if ($work_a == $work_b) {
            $much_work_point = 10;
        } else {$much_work_point = 0;
        }   

        //時間のマッチングポイント
        $time_a = strtotime($randomUser['User']['kibouzikan']);
        $time_b = strtotime($anata['User']['kibouzikan']);
        $this->set(compact('time_a','time_b')); 
        $differ_time = ($time_a - $time_b) / 60;
        if ($differ_time == 0) {
            $much_age_point = 20;
        } elseif ($differ_time >= 30 && $differ_time < 60) {
            $much_age_point = 15;
        } elseif ($differ_time >= 60 && $differ_time < 90) {
            $much_age_point = 10;
        } elseif ($differ_time >= 90 && $differ_time < 120) {
            $much_age_point = 5;
        } else {
            $much_age_point = 0;
        }

        //食事のマッチングポイント
        $genre_a = $randomUser['User']['genre'];
        $genre_b = $anata['User']['genre'];
        if ($genre_a == $genre_b) {
            $much_genre_point = 10;
        } else {$much_genre_point = 0;
        }
        //トータルポイント
        $total_match_point = $mach_station_point + $mach_youbi_point + $much_age_point + $much_work_point + $much_age_point + $much_genre_point;
        $this->set('total_match_point',$total_match_point);

        $this->Session->write('total_match_point',$total_match_point);

    }

    public function image2Bar($bar_id){
        //指定したidに沿ってデータを一件検索
        $graphic = $this->Bar->findById($bar_id);
        //画像ファイルをアップロードする際の定型コード。どんな データなのかを教えるおまじない。
        header('Content-type: image/jpeg');
        //画像ファイルの呼び出し
        echo ($graphic["Bar"]["image"]);
        exit;
    }

    public function image2User($user_id){

        $graphic = $this->User->findById($user_id);

        //画像ファイルをアップロードする際の定型コード。どんな データなのかを教えるおまじない。
        header('Content-type: image/jpeg');
        //画像ファイルの呼び出し
        echo ($graphic["User"]["image"]);
        exit;
    }

    public function detail(){

        $randomBar = $this->Session->read('randomBar');
        $randomUser = $this->Session->read('randomUser');
        $this->set(compact('randomBar','randomUser'));

        //希望曜日の一週間後の日付を算出してViewに渡す
        $target_week = $randomUser['User']['kibouyoubi'];
        $today_week=date('w');
        $plus=0;
        if($target_week>$today_week) {
            $plus=$target_week-$today_week;
        } else {
            $plus=7-($today_week-$target_week);
        }
        $add_sec = $plus * 86400;//日数×１日の秒数
        $target_sec = date('U') + $add_sec;//Unixからの秒数
        $NextWeekDay = date('Y-m-d', $target_sec);

        $this->set('NextWeekDay',$NextWeekDay);

    }

    public function email () {

        $randomUser = $this->Session->read('randomUser');
        $randomBar = $this->Session->read('randomBar');
        $meeting_info = $this->Session->read('data');

        $user_nickname = $this->Auth->user('nickname');

        $partner_nickname = $randomUser['User']['nickname'];
        $partner_age = $randomUser['User']['age'];
        $partner_work = $randomUser['User']['workText'];
        $partner_kibouyoubi = $randomUser['User']['kibouyoubi'];
        $partner_kiboueki = $randomUser['User']['kiboueki'];
        $partner_genre = $randomUser['User']['genreText'];

        $bar_name = $randomBar['Bar']['name'];
        $bar_url = $randomBar['Bar']['url'];
        $bar_station = $randomBar['Bar']['stationText'];
        $bar_gate = $randomBar['Bar']['gate'];
        $bar_genre = $randomBar['Bar']['genreText'];
        $bar_walk_time = $randomBar['Bar']['walk_time'];
        $bar_telnumber = $randomBar['Bar']['telnumber'];
        $bar_location = $randomBar['Bar']['location'];
        $bar_start_time = $randomBar['Bar']['start_time'];
        $bar_close_time = $randomBar['Bar']['close_time'];
        $bar_price = $randomBar['Bar']['price'];

        $meeting_id = $this->Session->read('last_id');
        $meeting_date = $meeting_info['Meeting']['date'];
        $meeting_time_hour = $meeting_info['Meeting']['time']['hour'];
        $meeting_time_min = $meeting_info['Meeting']['time']['min'];
        $meetingspot = $meeting_info['Meeting']['meetingspot'];

        $title = "【DateBookTokyo】デートのお誘い/".$meeting_date."/".$partner_nickname;

        $email = new CakeEmail('smtp');
        $email->to($randomUser['User']['username']);
        $email->subject($title);

        $email->emailFormat( 'text');
        $email->template( 'template');
        $email->viewVars( compact( 
                'user_nickname', 
                'partner_nickname',
                'partner_age', 
                'partner_work',
                'partner_kibouyoubi',
                'partner_kiboueki',
                'partner_genre',
                'bar_name',
                'bar_url', 
                'bar_station',
                'bar_gate', 
                'bar_genre', 
                'bar_walk_time',
                'bar_telnumber', 
                'bar_location',
                'bar_start_time', 
                'bar_close_time',
                'bar_price',
                'meeting_id',
                'meeting_date',
                'meeting_time_hour',
                'meeting_time_min', 
                'meetingspot'
                ));
        $email->send();

        $this->render('confirm');
    }

    public function confirm(){
        /*
        全データを$this->request->dataにsaveする
        $this->request->dataにはuser_id_1,user_id_2,bar_idが欠損している
        */
        
        $this->request->data["Meeting"]["user_id"] = $this->Auth->user('id');

        $randomBar = $this->Session->read('randomBar');
        $this->set('randomBar',$randomBar);
        $this->request->data["Meeting"]["bar_id"] = $randomBar['Bar']['id'];

        $randomUser = $this->Session->read('randomUser');
        $this->set('randomUser',$randomUser);
        $this->request->data["Meeting"]["match_user"] = $randomUser['User']['id'];   

        $total_match_point = $this->Session->read('total_match_point');
        $this->request->data["Meeting"]["total_match_point"] = $total_match_point;

        $this->request->data["Meeting"]["result"] = 1;
        // var_dump($total_match_point);
        // $this->set("total_match_point",$total_match_point);



        $this->Session->write('data',$this->request->data);

        $this->set("data",$this->request->data);

        // $this->Meeting->save($this->request->data);

        if($this->Meeting->save($this->request->data)){
            $last_id = $this->Meeting->getLastInsertID();
        } else {
            $this->Session->setFlash('入力に誤りがあります！', 'default', array(), 'fail');
            $this->redirect('/meetings/detail/');
        }

        $this->Session->write('last_id',$last_id);
        
        /*
        *CakeEmailの送信
        */
        $this->setAction("email");

    }

    public function meetinglist() {

        $data = $this->Meeting->find('all',array(
            'limit' =>100,
            'order' => array('Meeting.date' => 'ASC','Meeting.time' => 'ASC')
            )
        );

        $this->set('data', $data);

    }

    public function user_date() {

        $this->Paginator->settings = array(
            'conditions' => array('or' => array(
                'Meeting.user_id' => $this->Auth->user('id'),
                'Meeting.match_user' => $this->Auth->user('id'),
                ),
                'Meeting.date >=' => date("Y-m-d")
            ),
            'limit' => 2,
            'order' => array('Meeting.date' => 'ASC','Meeting.time' => 'ASC'),
        );
        $data = $this->Paginator->paginate('Meeting');
        $this->set(compact('data'));
    }

    public function userpolicy() {

    }

    public function email2 () {

        $meeting_id = $this->Session->read('meeting_id');

        $date_data = $this->Meeting->find('first',array(
            'conditions' => array('Meeting.id' => $meeting_id),
            )
        );

        $LoginUserId = $this->Auth->user('id');

        if($LoginUserId === $date_data['Meeting']['user_id']) {
            $partner_data = $this->User->find('first',array(
                'conditions' => array('User.id' => $date_data['Meeting']['match_user'])
                )
            );
        } elseif ($LoginUserId === $date_data['Meeting']['match_user']) {
            $partner_data = $this->User->find('first',array(
                'conditions' => array('User.id' => $date_data['Meeting']['user_id'])
                )
            );
        }

        $user_nickname = $this->Auth->user('nickname');

        $partner_nickname = $partner_data['User']['nickname'];
        $partner_age = $partner_data['User']['age'];
        $partner_work = $partner_data['User']['workText'];
        $partner_kibouyoubi = $partner_data['User']['kibouyoubi'];
        $partner_kiboueki = $partner_data['User']['kiboueki'];
        $partner_genre = $partner_data['User']['genreText'];

        $bar_name = $date_data['Bar']['name'];
        $bar_url = $date_data['Bar']['url'];
        $bar_station = $date_data['Bar']['stationText'];
        $bar_gate = $date_data['Bar']['gate'];
        $bar_genre = $date_data['Bar']['genreText'];
        $bar_walk_time = $date_data['Bar']['walk_time'];
        $bar_telnumber = $date_data['Bar']['telnumber'];
        $bar_location = $date_data['Bar']['location'];
        $bar_start_time = $date_data['Bar']['start_time'];
        $bar_close_time = $date_data['Bar']['close_time'];
        $bar_price = $date_data['Bar']['price'];

        $meeting_date = $date_data['Meeting']['date'];
        $meeting_time = $date_data['Meeting']['time'];//date('YMD', strtotime($date_data['Meeting']['time']))
        $meetingspot = $date_data['Meeting']['meetingspot'];
        $meetingresult = $date_data['Meeting']['result'];

        if($date_data['Meeting']['result'] == 2) {
            $title = "【【DateBookTokyo】デートOKのご連絡/".$meeting_date."/".$partner_nickname;
        } elseif ($date_data['Meeting']['result'] == 3) {
            $title = "【【DateBookTokyo】デートキャンセルのご連絡/".$meeting_date."/".$partner_nickname;
        }

        if($date_data['Meeting']['result'] == 2) {

            $email = new CakeEmail('smtp');
            $email->to(array($partner_data['User']['username'],'qwerty.poiu@softbank.ne.jp'));//自分の携帯のアドレスはバーのemailアドレス
            $email->subject($title);

            $email->emailFormat( 'text');
            $email->template( 'template2');
            $email->viewVars( compact( 
                    'user_nickname', 
                    'partner_nickname',
                    'partner_age', 
                    'partner_work',
                    'partner_kibouyoubi',
                    'partner_kiboueki',
                    'partner_genre',
                    'bar_name',
                    'bar_url', 
                    'bar_station',
                    'bar_gate', 
                    'bar_genre', 
                    'bar_walk_time',
                    'bar_telnumber', 
                    'bar_location',
                    'bar_start_time', 
                    'bar_close_time',
                    'bar_price',
                    'meeting_id',
                    'meeting_date',
                    'meeting_time',
                    'meetingspot',
                    'meetingresult'
                    ));
            $email->send();
    
        } elseif ($date_data['Meeting']['result'] == 3) {

            $email = new CakeEmail('smtp');
            $email->to($partner_data['User']['username']);
            $email->subject($title);

            $email->emailFormat( 'text');
            $email->template( 'template3');
            $email->viewVars( compact( 
                    'user_nickname', 
                    'partner_nickname',
                    'partner_age', 
                    'partner_work',
                    'partner_kibouyoubi',
                    'partner_kiboueki',
                    'partner_genre',
                    'bar_name',
                    'bar_url', 
                    'bar_station',
                    'bar_gate', 
                    'bar_genre', 
                    'bar_walk_time',
                    'bar_telnumber', 
                    'bar_location',
                    'bar_start_time', 
                    'bar_close_time',
                    'bar_price',
                    'meeting_id',
                    'meeting_date',
                    'meeting_time',
                    'meetingspot',
                    'meetingresult'
                    ));
            $email->send(); 
        }

        $this->redirect(array('action' => 'user_date','controller' => 'Meetings'));
    }

    public function acceptance($id = null) {

        $this->Meeting->id = $id;
        if (!$this->Meeting->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {

            if(isset($this->request->data['OK'])) {
                //OKボタンの場合の処理
               $data['Meeting']['result'] = 2;
               $this->request->data['Meeting']['result'] = $data['Meeting']['result'];
 
            }elseif(isset($this->request->data['NO'])) {
                //NOへの場合
                $data['Meeting']['result'] = 3;
                $this->request->data['Meeting']['result'] = $data['Meeting']['result'];
 
            }

            if ($this->Meeting->save($this->request->data)) {

                $this->Session->write('meeting_id',$id);

                if($this->request->data['Meeting']['result'] == 2){
                    $this->Session->setFlash('デートを約束しました！！', 'default', array(), 'success');
                } elseif ($this->request->data['Meeting']['result'] == 3) {
                    $this->Session->setFlash('デートをお断りしました！！', 'default', array(), 'success');
                }
                $this->setAction("email2");

            } else {

                $this->Session->setFlash('システムエラーでデート約束出来ませんでした！！', 'default', array(), 'fail');

                $this->redirect('/meetings/acceptance/'.$id);
            }

        } else {

        $this->request->data = $this->Meeting->read(null, $id);

        $data = $this->Meeting->find('first',array(
            'conditions' => array('Meeting.id' => $id),
            )
        );

        $LoginUserId = $this->Auth->user('id');

        if($LoginUserId === $data['Meeting']['user_id']) {
            $partner_data = $this->User->find('first',array(
                'conditions' => array('User.id' => $data['Meeting']['match_user'])
                )
            );
        } elseif ($LoginUserId === $data['Meeting']['match_user']) {
            $partner_data = $this->User->find('first',array(
                'conditions' => array('User.id' => $data['Meeting']['user_id'])
                )
            );
        }

        if($data['Meeting']['result'] == 1 && $LoginUserId == $data['Meeting']['user_id']) {
            $this->redirect('/meetings/acceptance_wait/'.$id);
        } elseif ($data['Meeting']['result'] == 2) {
            $this->redirect('/meetings/acceptance_cancel/'.$id);
        } elseif ($data['Meeting']['result'] == 3) {
            $this->redirect('/meetings/acceptance_wait/'.$id);
        }

        $youbi = array("日", "月", "火", "水", "木", "金", "土");
        $yoteibi = strtotime($data['Meeting']['date']);
        $w = date("w",$yoteibi);
        $this->set('youbi',$youbi[$w]);

        $this->set('data',$data);
        $this->set('partner_data',$partner_data);

        }
    }

    public function acceptance_wait($id = null) {

        $this->Meeting->id = $id;
        if (!$this->Meeting->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }

        $this->request->data = $this->Meeting->read(null, $id);

        $data = $this->Meeting->find('first',array(
            'conditions' => array('Meeting.id' => $id),
            )
        );

        $LoginUserId = $this->Auth->user('id');

        if($LoginUserId === $data['Meeting']['user_id']) {
            $partner_data = $this->User->find('first',array(
                'conditions' => array('User.id' => $data['Meeting']['match_user'])
                )
            );
        } elseif ($LoginUserId === $data['Meeting']['match_user']) {
            $partner_data = $this->User->find('first',array(
                'conditions' => array('User.id' => $data['Meeting']['user_id'])
                )
            );
        } 

        $youbi = array("日", "月", "火", "水", "木", "金", "土");
        $yoteibi = strtotime($data['Meeting']['date']);
        $w = date("w",$yoteibi);
        $this->set('youbi',$youbi[$w]);

        $this->set('data',$data);
        $this->set('partner_data',$partner_data);

    }

    public function acceptance_cancel($id = null) {

        $this->Meeting->id = $id;
        if (!$this->Meeting->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }

        $this->request->data = $this->Meeting->read(null, $id);

        $data = $this->Meeting->find('first',array(
            'conditions' => array('Meeting.id' => $id),
            )
        );

        $LoginUserId = $this->Auth->user('id');

        if($LoginUserId === $data['Meeting']['user_id']) {
            $partner_data = $this->User->find('first',array(
                'conditions' => array('User.id' => $data['Meeting']['match_user'])
                )
            );
        } elseif ($LoginUserId === $data['Meeting']['match_user']) {
            $partner_data = $this->User->find('first',array(
                'conditions' => array('User.id' => $data['Meeting']['user_id'])
                )
            );
        }

        $youbi = array("日", "月", "火", "水", "木", "金", "土");
        $yoteibi = strtotime($data['Meeting']['date']);
        $w = date("w",$yoteibi);
        $this->set('youbi',$youbi[$w]);

        $this->set('data',$data);
        $this->set('partner_data',$partner_data);

    }

}