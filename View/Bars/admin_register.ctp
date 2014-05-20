      <?php echo $this->Form->create
            (
            'Bar',
            array(
                  'type' => 'file', 
                  'action'=>'admin_notice', 
                  'enctype' => 'multipart/form-data',
                  'role' => 'form',
                  'class' => 'form-horizontal text-left'
                  )
            );
      ?>

      <div class ="well">

            <div class="form-group">
                  <label for="Image0Model" class="col-sm-2 control-label">写真</label>
                  <div class="col-sm-10">

                        <?php echo $this->Form->hidden
                              ('Image.0.model', 
                              array(
                                    'value'=>'Bar'
                                    )
                              );
                        ?>
                        <?php echo $this->Form->input
                              (
                              'Image.0.photo_bar', 
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
                  <label for="BarName" class="col-sm-2 control-label">店名</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'Bar.name', 
                                    array(
                                          'class' => 'form-control',
                                          'required' => false,
                                          'label' => false , 
                                          'div' => false,
                                          'placeholder' => "店名を入力して下さい。",
                                          'id' => "BarName",
                                          )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="BarUrl" class="col-sm-2 control-label">URL</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              ('Bar.url', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false ,
                                    'div' => false,
                                    'placeholder' => "食べログなどのURLをご記入下さい。",
                                    'id' => "BarUrl",
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="BarLocation" class="col-sm-2 control-label">住所</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              ('Bar.location', 
                              array(
                                    'class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "",
                                    'id' => "BarLocation"
                                    )
                              );
                        ?>
                  </div>
            </div>

                  <div class="form-group">
                        <label for="BarTelnumber" class="col-sm-2 control-label">電話番号</label>
                        <div class="col-sm-5">
                          <?php echo $this->Form->input
                                (
                                'Bar.telnumber', 
                                array('class' => 'form-control',
                                      'required' => false,
                                      'div' => false,
                                      'label' => false, 
                                      'placeholder' => "",
                                      'id' => "BarTelnumber"
                                      )
                                );
                          ?>
                        </div>
                  </div>

            <div class="form-group">
                  <label for="BarTelnumber" class="col-sm-2 control-label">最寄駅</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'Bar.station', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "例）東京駅、新橋駅",
                                    'id' => "BarTelnumber"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="BarGate" class="col-sm-2 control-label">最寄口</label>
                  <div class="col-sm-2">
                        <?php echo $this->Form->input
                              (
                              'Bar.gate', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false, 
                                    'div' => false,
                                    'placeholder' => "例）東口、A1出口",
                                    'id' => "BarGate"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="BarWalk_time" class="col-sm-2 control-label">駅から徒歩◯分</label>
                  <div class="col-sm-2">
                        <?php echo $this->Form->input
                              (
                              'Bar.walk_time', 
                              array(
                                    'class' => 'form-control',
                                    'required' => false,
                                    'label' => false, 
                                    'placeholder' => "半角数字",
                                    'class' => 'form-control',
                                    'id' => "BarWalk_time"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="BarPrice" class="col-sm-2 control-label">料金（１名）</label>
                  <div class="col-sm-2">
                        <?php echo $this->Form->input
                              (
                              'Bar.price', 
                              array(
                                    'class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "半角数字",
                                    'id' => "BarPrice"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="BarGenre" class="col-sm-2 control-label">カテゴリー</label>
                  <div class="col-sm-10">
                        <?php echo $this->Form->input
                              (
                              'Bar.genre',
                              array('type'=>'select',
                                    'options'=>array(
                                                    '0'=>'バー',
                                                    '1'=>'居酒屋',
                                                    '2'=>'イタリアン',
                                                    '3'=>'フレンチ',
                                                    '4'=>'スパニッシュ',
                                                    '5'=>'焼き肉',
                                                    '6'=>'焼き鳥',
                                                    '7'=>'鍋',
                                                    '8'=>'中華',
                                                    '9'=>'アジア系',
                                                    '10'=>'インド系',
                                                    '11'=>'その他'
                                                    ),
                              'required' => false,
                              'label' => false, 
                              'div' => false,
                              'id' => "BarGenre"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="BarStart_time" class="col-sm-2 control-label">開店時間</label>
                  <div class="col-sm-5">
                        <?php echo $this->form->input('Bar.start_time', array(
                          'label' => false,
                          'default' => date('18:00:00'),
                          'timeFormat' => '24',
                          'dateFormat' => 'H:i:s',
                          'empty' => true,
                          'separator' => ':',
                          'interval' => 10,
                          'id' => "BarStart_time"
                          ));
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="BarClose_time" class="col-sm-2 control-label">閉店時間</label>
                  <div class="col-sm-5">
                        <?php echo $this->form->input('Bar.close_time', array(
                          'label' => false,
                          'default' => date('23:00:00'),
                          'timeFormat' => '24',
                          'dateFormat' => 'H:i:s',
                          'empty' => true,
                          'separator' => ':',
                          'interval' => 10,
                          'id' => "BarClose_time"
                          ));
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="BarLast_order_time" class="col-sm-2 control-label">ラストオーダー</label>
                  <div class="col-sm-5">
                        <?php echo $this->form->input('Bar.last_order_time', array(
                          'label' => false,
                          'default' => date('23:00:00'),
                          'timeFormat' => '24',
                          'dateFormat' => 'H:i:s',
                          'empty' => true,
                          'separator' => ':',
                          'interval' => 10,
                          'id' => "BarLast_order_time"
                          ));
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="BarDescription" class="col-sm-2 control-label">紹介</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'Bar.description', 
                              array('class' => 'form-control',
                                    'required' => false,
                                    'label' => false ,
                                    'div' => false,
                                    'placeholder' => "50文字以下で入力して下さい。空欄でも大丈夫です。",
                                    'id' => "BarDescription",
                                    'rows' => 2
                                    )
                              );
                        ?>
                  </div>
            </div>

      </div>

             <!-- content -->
       </div><!-- /wellデートの希望 -->  
            <div class="form-group">
                  <div class="col-sm-2 col-sm-offset-10">
                        <?php echo $this->Form->submit('ぼっち飲みを始める', array('class' => 'btn btn-primary'));?>
                  </div>
            </div>
      <?php echo $this->Form->end(); ?>














