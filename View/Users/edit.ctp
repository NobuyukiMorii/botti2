  <div class="col-sm-12"><!-- col-sm-12 -->
    <div class="col-sm-3 col-sm-offset-9">
                  <span class="input-group-btn"><a href="<?php echo $this->Html->url('/users/password/'.$LoginUserId); ?>" class="pull-right"><button class="btn btn-lg btn-default" type="button">パスワードを変更する</button></a></span>
    </div>
  </div>
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

      <h4>①プロフィール</h4>
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
                                    'default' => date('Y-m-d', strtotime('1988-1-1')),
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
                  <label for="Userlike" class="col-sm-2 control-label">好きな食べ物</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.like', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "唐揚げ、ステーキなど",
                                    'id' => "Userlike"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="UserTopic" class="col-sm-2 control-label">話したい話題</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.topic', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "恋愛相談、趣味のテニスのこと、会社の愚痴、などなど",
                                    'id' => "UserTopic"
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
                                    'id' => "UserTopic"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="Usera飲むAmount" class="col-sm-2 control-label">飲む量（自称）</label>
                  <div class="col-sm-10">
                        <?php echo $this->Form->input(
                              'User.amount',
                              array(
                                    'type'=>'select',
                                    'options'=>
                                          array(
                                                'すげー飲む'=>'すげー飲む',
                                                'まあまあ飲む'=>'まあまあ飲む',
                                                'ほろ酔い程度に'=>'ほろ酔い程度に',
                                                'ソフトドリンクを・・'=>'ソフトドリンクを・・',
                                          ),
                                    'required' => false,
                                    'label' => false ,
                                    'div' => false,
                                    'id' => "UserAmount"
                                    )
                              ); 
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="UserMessage" class="col-sm-2 control-label">飲み相手にひとこと</label>
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

      <h4>②ぼっち飲みのタイミング</h4>
      <h6>多分ここに登録したタイミングでぼっち飲みに誘われる確率が高くなります。</h6>
      <div class ="well">

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

            <div class="form-group form-inline">
                  <label for="UserKibouzikan_finish" class="col-sm-2 control-label">希望終了時間</label>
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

          <div class="col-sm-1 col-sm-offset-11">
            <div class="form-group">
                        <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-lg btn-primary'));?>
            </div>
          </div>

      <?php echo $this->Form->end(); ?>