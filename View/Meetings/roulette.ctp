<div class="container">
    <!-- ここからボタン -->
    <div class="row">
      <div class="hidden-lg hidden-md col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 
        <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">
          <button class="btn btn-lg btn-default" type="button">次を見る</button>
        </a>       
      </div>
    </div>
    <!-- ここまでボタン -->
</div>

<div class="container">
<?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'confirm', 'class'=>'form-inline', 'role' => 'form'));?>

  <!-- ここから日時入力 -->
    <div class="row pull-right">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 hidden-sm hidden-xs"> 
        <div class="form-group">
          <label class="sr-only" for="MeetingDate">日付</label>
          <?php echo $this->Datepicker->datepicker('Meeting.date', array(
            'label' => false,
            'type' => 'text',
            'default' => date('Y/m/d', strtotime($NextWeekDay)),
            'empty' => true,
            'maxYear' => date("Y/m/d",strtotime("+1 year")),//効かない
            'inline' => true,
            ));
            ?>
        </div>

        <div class="form-group"> 
          <label class="sr-only" for="MeetingTime">時間</label>
          <?
          echo $this->form->input('Meeting.time', array(
            'label' => false,
            'default' => $matiawase,
            'timeFormat' => '24',
            'dateFormat' => 'H:i:s',
            'empty' => true,
            'separator' => ':',
            'interval' => 30,
            'inline' => true,
            'id' => 'MeetingTime',
            'class' => 'form-control'
            ));
            ?>
        </div>
        <div class="form-group">
          <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">
            <?php echo $this->Form->submit('飲みに誘う', array('class' => 'btn btn-lg btn-default'));?>  
          </a>
        </div>
    </div>
  </div>
<?php echo $this->Form->end(); ?>
</div>
  <!-- ここまで日時入力 -->

<div class="container">
  <!-- セッションフラッシュここから -->
  <div class="row">
    <div class="col-lg-3 col-lg-offset-9 col-md-3 col-md-offset-9 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 
      <p class="text-danger"><?php echo $this->Session->flash('fail'); ?></p>
    </div>
  </div>
  <!-- セッションフラッシュここまで -->

  <!-- ここからメイン左 ユーザー -->
  <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 
    <!-- ここから名前 -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h1 class="page-header text-left"><?php echo h($randomUser['User']['last_name']); ?>
          <?php echo h($randomUser['User']['first_name']); ?>
        </h1>
      </div>

    </div>
    <!-- ここまで名前 -->
    <!-- ここからメッセージ -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h6>
          <?php echo h($randomUser['User']['age']); ?>歳、<?php echo h($randomUser['User']['work']); ?>、<?php echo h($randomUser['User']['kibouyoubiText']); ?>の<?php echo h($randomUser['User']['kibouzikan']); ?>~<?php echo h($randomUser['User']['kibouzikan_finish']); ?>希望、<?php echo h($randomUser['User']['topic']); ?>の話がしたい。
        </h6>
      </div>
    </div>
    <!-- ここまでメッセージ -->
    <!-- ここから写真 -->
    <div class="row">
      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$randomUser['Image'][0]['dir']."/thumb250_".$randomUser['Image'][0]['photo_user']);?>" class="img-responsive">
      </div>

    <!-- ここまで写真 -->
    <!-- ここからメッセージ -->

      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <?php echo h($randomUser['User']['message']); ?>
      </div>
    </div>
    <!-- ここまでメッセージ -->
  </div>
  <!-- ここまでメイン左 ユーザー-->

  <!-- ここからメイン右 バー-->
  <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 
    <!-- ここから名前 -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h1 class="page-header text-left"><?php echo h($randomBar['Bar']['name']); ?>
        </h1>
      </div>

    </div>
    <!-- ここまで名前 -->
    <!-- ここからメッセージ -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h6>
          <?php echo h($randomBar['Bar']['genreText']); ?>、<?php echo h($randomBar['Bar']['telnumber']); ?>、平均<?php echo h(number_format($randomBar['Bar']['price'])); ?>円/人、<?php echo h($randomBar['Bar']['station']); ?>、<?php echo h(date("H時i分", strtotime($randomBar['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($randomBar['Bar']['close_time']))); ?>（LO:<?php echo h(date("H時i分", strtotime($randomBar['Bar']['last_order_time']))); ?>）
        </h6>
      </div>
    </div>
    <!-- ここまでメッセージ -->
    <!-- ここから写真 -->
    <div class="row">
      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <a href="<?php echo $randomBar['Bar']['url']; ?>" target="_blank"><img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$randomBar['Image'][0]['dir']."/thumb250_".$randomBar['Image'][0]['photo_bar']);?>" class="img-responsive"></a>
      </div>

    <!-- ここまで写真 -->
    <!-- ここからメッセージ -->

      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <?php echo h($randomBar['Bar']['description']); ?>
      </div>
    </div>
    <!-- ここまでメッセージ -->
  </div>
  <!-- ここまでメイン右 バー -->
</div>

<div class="container">
  <!-- ここから日時入力 -->
    <div class="row">
      <div class="hidden-lg hidden-md col-sm-12 col-lg-offset-0 col-xs-12 col-md-offset-0"> 
        <div class="form-group">
            <?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'confirm', 'class'=>'form-inline', 'role' => 'form'));?>
            <?php echo $this->JpForm->datetime('Meeting.date', 'YMD', null, array('separator' => array('年', '月', '日'), 'minYear' => date("Y"), 'maxYear'=>date('Y',strtotime("+1 year")),'orderYear' => 'asc','selected' =>array(date('Y-m-d')))) ?>
            <?
            echo $this->form->input('Meeting.time', array(
              'label' => false,
              'default' => $matiawase,
              'timeFormat' => '24',
              'dateFormat' => 'H:i:s',
              'empty' => false,
              'separator' => ':',
              'interval' => 30,
              'inline' => true,
              'id' => 'MeetingTime',
              ));
            ?>
        </div>
        <div class="form-group">
          <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">
            <?php echo $this->Form->submit('飲みに誘う', array('class' => 'btn btn-lg btn-default'));?>  
          </a>
        </div>
    </div>
  </div>
<?php echo $this->Form->end(); ?>
</div>
  <!-- ここまで日時入力 -->

<div class="container" style="margin-top:40px;">
    <!-- ここからボタン -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 hidden-sm hidden-xs pull-right"> 
        <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">
          <button class="btn btn-lg btn-default" type="button">次を見る</button>
        </a>       
      </div>
    </div>
    <!-- ここまでボタン -->
</div>