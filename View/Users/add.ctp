
      <?php echo $this->Form->create
            (
            'User',
            array(
                  'type' => 'file', 
                  'action'=>'add', 
                  'enctype' => 'multipart/form-data',
                  'role' => 'form',
                  'class' => 'form-horizontal text-left'
                  )
            );
      ?>

      <?php echo $this->Form->hidden
            (
            'User.group_id', 
             array(
                  'value'=>'1'
                  )
            );
      ?>

      基本情報
      <div class ="well">

            <div class="form-group">
                  <label for="Image0Model" class="col-sm-2 control-label">写真</label>
                  <div class="col-sm-10">

                        <?php echo $this->Form->hidden
                              (
                              'Image.0.model', 
                              array(
                                    'value'=>'User'
                                    )
                              );
                        ?>

                        <?php echo $this->Form->input
                              (
                              'Image.0.photo_user',
                              array(
                                    'type' => 'file',
                                    'required' => false,
                                    'label' => false , 
                                    'id' => "Image0Model"
                                    )
                              ); 
                        ?>

                  </div>
            </div>




            <div class="form-group">
                  <label for="UserUsername" class="col-sm-2 control-label">メールアドレス</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.username', 
                                    array(
                                          'class' => 'form-control',
                                          'required' => false,
                                          'label' => false , 
                                          'div' => false,
                                          'placeholder' => "メールアドレスを入力して下さい。",
                                          'id' => "UserUsername",
                                          )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="UserPassword" class="col-sm-2 control-label">パスワード</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.password', 
                              array(
                                    'class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "半角英数字、6文字以上16文字以下で入力して下さい。",
                                    'id' => "UserPassword"
                                    )
                              );
                        ?>
                  </div>
            </div>

                  <div class="form-group form-inline">
                        <label for="UserName" class="col-sm-2 control-label">お名前</label>
                        <div class="col-sm-2">
                              <?php echo $this->Form->input
                                    (
                                    'User.last_name', 
                                    array('class' => 'form-control',
                                          'required' => false,
                                          'label' => false , 
                                          'div' => false,
                                          'placeholder' => "姓",
                                          'id' => "UserName"
                                          )
                                    );
                              ?>
                        </div>

                        <div class="col-sm-3">
                              <?php echo $this->Form->input
                                    (
                                    'User.first_name', 
                                    array('class' => 'form-control',
                                          'required' => false,
                                          'label' => false , 
                                          'div' => false,
                                          'placeholder' => "名",
                                          'id' => "UserName"
                                          )
                                    );
                              ?>
                        </div>
                  </div>

            <div class="form-group">
                  <label for="UserNickname" class="col-sm-2 control-label">ニックネーム</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.nickname', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "ニックネームを入力して下さい。",
                                    'id' => "UserNickname"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="UserTelnumber" class="col-sm-2 control-label">電話番号</label>
                  <div class="col-sm-2">
                        <?php echo $this->Form->input
                              (
                              'User.telnumber', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "xxx-xxxx-xxxx",
                                    'id' => "UserTelnumber"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="User.gender" class="col-sm-2 control-label">性別</label>
                  <div class="col-sm-10">
                        <?php echo $this->Form->radio('User.gender',
                              array(
                                    "1" => '男性', 
                                    "2" => '女性'
                              ), 
                              array(
                                    'legend' => false,
                                    'value' => '1',
                                    'id' => "User.gender"
                              ),
                              array(
                                    'class' => 'form-group',
                                    'required' => false
                              )
                        )
                        ;?>
                  </div>
            </div>

            <div class="form-group form-inline">
                  <label for="UserBirthday" class="col-sm-2 control-label">生年月日</label>
                  <div class="col-sm-10">
                        <?php echo $this->JpForm->datetime(
                              'User.birthday', 
                              'YMD',
                               null, 
                               array(
                                    'separator' => array('年', '月', '日'), 
                                    'maxYear' => date('YMD', strtotime("-20 year")),
                                    'minYear' => date('YMD', strtotime("-80 year")),
                                    'label' => false,
                                    'default' => date('Y-m-d', strtotime("-25 year")),
                                    'empty' => true,
                                    'required' => false,
                                    'class' => 'form-control',
                                    'id' => "UserBirthday"
                                    )
                              ) 
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="UserWork" class="col-sm-2 control-label">お仕事</label>
                  <div class="col-sm-10">
                        <?php echo $this->Form->input('User.work',
                              array(
                                    'type'=>'select',
                                    'label' => false,
                                    'id' => "UserWork",
                                    'options'=> array(
                                                      '1'=>'大学生',
                                                      '2'=>'大学院生',
                                                      '3'=>'会社員',
                                                      '4'=>'公務員',
                                                      '5'=>'経営者',
                                                      '6'=>'自営業',
                                                      '7'=>'農業',
                                                      '8'=>'医者',
                                                      '9'=>'弁護士',
                                                      '10'=>'ニート',
                                                      '11'=>'ハイパーメディアクリエイター',
                                                      '12'=>'その他'
                                                ), 
                                    array(
                                          'class' => 'form-group',
                                          'required' => false,
                                    )
                              )
                        )
                        ;?>
                  </div>
            </div>
            
            <div class="form-group">
                  <label for="UserMoyorieki" class="col-sm-2 control-label">自宅の最寄り駅</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.moyorieki', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "最寄り駅を入力して下さい。",
                                    'id' => "UserMoyorieki"
                                    )
                              );
                        ?>
                  </div>
            </div>

      </div>

      デートの希望
      <div class ="well">

            <div class="form-group">
                  <label for="UserGenre" class="col-sm-2 control-label">好きな居酒屋のタイプ</label>
                  <div class="col-sm-10">
                        <?php echo $this->Form->input(
                              'User.genre',
                              array(
                                    'type'=>'select',
                                    'options'=>
                                          array(
                                                '1'=>'和風居酒屋',
                                                '2'=>'洋風居酒屋',
                                                '3'=>'中華料理',
                                                '4'=>'コンセプト居酒屋'
                                          ),
                                    'required' => false,
                                    'label' => false ,
                                    'div' => false,
                                    'id' => "UserGenre"
                                    )
                              ); 
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="UserKiboueki" class="col-sm-2 control-label">希望駅（山手線）</label>
                  <div class="col-sm-10">
                        <?php echo $this->Form->input(
                              'User.kiboueki',
                              array(
                                    'type'=>'select',
                                    'options'=>array(
                                                '1'=>'東京',
                                                '2'=>'有楽町',
                                                '3'=>'新橋',
                                                '4'=>'浜松町',
                                                '5'=>'田町',
                                                '6'=>'品川',
                                                '7'=>'大崎',
                                                '8'=>'五反田',
                                                '9'=>'目黒',
                                                '10'=>'恵比寿',
                                                '11'=>'渋谷',
                                                '12'=>'原宿',
                                                '13'=>'代々木',
                                                '14'=>'新宿',
                                                '15'=>'新大久保',
                                                '16'=>'高田馬場',
                                                '17'=>'目白',
                                                '18'=>'池袋',
                                                '19'=>'大塚',
                                                '20'=>'巣鴨',
                                                '21'=>'駒込',
                                                '22'=>'田端',
                                                '23'=>'西日暮里',
                                                '24'=>'日暮里',
                                                '25'=>'鶯谷',
                                                '26'=>'上野',
                                                '27'=>'御徒町',
                                                '28'=>'秋葉原',
                                                '29'=>'神田'),
                                    'required' => false,
                                    'label' => false ,
                                    'div' => false,
                                    'id' => "UserKiboueki"
                              )
                        );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="UserKibouyoubi" class="col-sm-2 control-label">希望曜日</label>
                  <div class="col-sm-10">
                        <?php echo $this->Form->input
                              ('User.kibouyoubi',
                              array('type'=>'select',
                                    'options'=>
                                          array(
                                                '1'=>'月曜日',
                                                '2'=>'火曜日',
                                                '3'=>'水曜日',
                                                '4'=>'木曜日',
                                                '5'=>'金曜日',
                                                '6'=>'土曜日',
                                                '0'=>'日曜日'
                                                ),
                                    'required' => false,
                                    'label' => false ,
                                    'div' => false,
                                    'id' => "UserKibouyoubi"
                                    )
                              )
                        ?>
                  </div>
            </div>

            <div class="form-group form-inline">
                  <label for="UserKibouzikan" class="col-sm-2 control-label">希望待ち合わせ時間</label>
                  <div class="col-sm-10">
                              <?php
                              echo $this->form->input
                              ('User.kibouzikan',
                               array(
                                    'label' => false,
                                    'timeFormat' => '24',
                                    'dateFormat' => 'H:i:s',
                                    'default' => date('19:00'),
                                    'empty' => true,
                                    'interval' => 30,
                                    'class' => 'form-control',
                                    'required' => false,
                                    'id' => "UserKibouzikan"
                                    )
                               );
                              ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="UserBar_id" class="col-sm-2 control-label">デートするお店</label>
                  <div class="col-sm-10">
                        <?php echo $this->Form->input(
                              'User.bar_id',
                              array(
                                    'type'=>'select',
                                    'options'=> $options_bar,
                                    'required' => false,
                                    'label' => false ,
                                    'div' => false,
                                    'id' => "UserBar_id"
                              )
                        );
                        ?>
                  </div>
            </div>

      </div>

      その他
      <div class ="well">
            <div class="form-group">
                  <label for="UserMessage" class="col-sm-2 control-label">何かひとこと</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.message', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false ,
                                    'div' => false,
                                    'placeholder' => "50文字以下で入力して下さい。空欄でも大丈夫です。",
                                    'id' => "UserMessage",
                                    'rows' => 2
                                    )
                              );
                        ?>
                  </div>
            </div>
      </div>

      <div class="form-group">
            <div class="col-sm-6 text-left">
                  <?php echo $this->Html->link('戻る', '/users/login', array('class' => 'btn btn-success', 'target' => '_blank')); ?>
            </div>
            <div class="col-sm-6 text-right">
                  <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-success'));?>
            </div>
      </div>



      <?php echo $this->Form->end(); ?>













