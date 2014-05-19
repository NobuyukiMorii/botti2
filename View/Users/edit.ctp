      <?php echo $this->Form->create
            (
            'User',
            array(
                  'type' => 'post', 
                  'action'=>'edit', 
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

      <h4>基本情報</h4>
      <div class ="well">

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
                  <label for="UserWork" class="col-sm-2 control-label">ご職業</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.work', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "保険会社の営業など",
                                    'id' => "UserWork"
                                    )
                              );
                        ?>
                  </div>
            </div>
            
            <div class="form-group">
                  <label for="UserMoyorieki" class="col-sm-2 control-label">よく行く駅（東京）</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.moyorieki', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "よく行く東京の駅を入力して下さい。",
                                    'id' => "UserMoyorieki"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="Userlike" class="col-sm-2 control-label">好きな食べ物</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.like', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "カルボナーラ、ハンバーグなど",
                                    'id' => "Userlike"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="UserDislike" class="col-sm-2 control-label">嫌いな食べ物</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.dislike', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "ピーマン、セロリなど",
                                    'id' => "UserDislike"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="UserDrink" class="col-sm-2 control-label">好きなドリンク</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.drink', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "ビール、カシオレなど",
                                    'id' => "UserDislike"
                                    )
                              );
                        ?>
                  </div>
            </div>

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

      <h4>デートの希望</h4>
      <div class ="well">

            <div class="form-group">
                  <label for="UserAtmosphere" class="col-sm-2 control-label">デートの雰囲気</label>
                  <div class="col-sm-10">
                        <?php echo $this->Form->input(
                              'User.atmosphere',
                              array(
                                    'type'=>'select',
                                    'options'=>
                                          array(
                                                'まったり'=>'まったり',
                                                'きっちり'=>'きっちり',
                                                'おもしろ'=>'おもしろ',
                                                'でれでれ'=>'でれでれ',
                                          ),
                                    'required' => false,
                                    'label' => false ,
                                    'div' => false,
                                    'id' => "UserAtmosphere"
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
                  <label for="UserKibouzikan" class="col-sm-2 control-label">待ち合わせ時間</label>
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

            <div class="form-group form-inline">
                  <label for="UserKibouzikan_finish" class="col-sm-2 control-label">お別れの時間</label>
                  <div class="col-sm-10">
                              <?php
                              echo $this->form->input
                              ('User.kibouzikan_finish',
                               array(
                                    'label' => false,
                                    'timeFormat' => '24',
                                    'dateFormat' => 'H:i:s',
                                    'default' => date('22:00'),
                                    'empty' => true,
                                    'interval' => 30,
                                    'class' => 'form-control',
                                    'required' => false,
                                    'id' => "UserKibouzikan_finish"
                                    )
                               );
                              ?>
                  </div>
            </div>

             <!-- content -->
       </div><!-- /wellデートの希望 -->

            <div class="form-group">
                  <div class="col-sm-2 col-sm-offset-10">
                        <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-success'));?>
                  </div>
            </div>
      <?php echo $this->Form->end(); ?>