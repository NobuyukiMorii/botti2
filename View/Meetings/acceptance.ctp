<?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'acceptance','role' => 'form','class'=>'form-inline'));?>
<div class="container">

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h1 class="text-left"><?php echo h($data['Meeting']['date']); ?>
        <?php echo h($data['Meeting']['time']); ?><small>に<?php echo $data['Bar']['name']; ?>店内でお待ち合わせ</small>
      </h1>
    </div>
  </div>
  <div class="row">
    <div class =" my-inline form-inline col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'acceptance','role' => 'form'));?>
        <?php echo $this->Form->submit('飲みに行く', array('name' => 'OK','class' => 'btn btn-primary btn-block')); ?>
    </div>
    <div class =" my-inline form-inline col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <?php echo $this->Form->submit('キャンセルする', array('name' => 'NO','class' => 'btn btn-warning btn-block')); ?>
        <?php echo $this->Form->end();?>
    </div>
  </div>
  <!-- ここまでボタン -->
</div>
  
<div class="container">
  <!-- ここからメイン左 ユーザー -->
  <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 

    <!-- ここから名前 -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h3 class="text-left"><?php echo h($partner_data['User']['last_name']); ?>
          <?php echo h($partner_data['User']['first_name']); ?>
        </h3>
      </div>

    </div>
    <!-- ここまで名前 -->
    <!-- ここからメッセージ -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h6>
          <?php echo h($partner_data['User']['age']); ?>歳、<?php echo h($partner_data['User']['work']); ?>、<?php echo h($partner_data['User']['kibouyoubiText']); ?>の<?php echo h($partner_data['User']['kibouzikan']); ?>~<?php echo h($partner_data['User']['kibouzikan_finish']); ?>希望、<?php echo h($partner_data['User']['topic']); ?>の話がしたい。
        </h6>
      </div>
    </div>
    <!-- ここまでメッセージ -->
    <!-- ここから写真 -->
    <div class="row">
      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$partner_data['Image'][0]['dir']."/thumb250_".$partner_data['Image'][0]['photo_user']);?>" class="img-responsive">
      </div>

    <!-- ここまで写真 -->
    <!-- ここからメッセージ -->

      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <?php echo h($partner_data['User']['message']); ?>
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
        <h3 class="text-left">
          <?php echo h($data['Bar']['name']); ?>
        </h3>
      </div>

    </div>
    <!-- ここまで名前 -->
    <!-- ここからメッセージ -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h6>
          <?php echo h($data['Bar']['genreText']); ?>、<?php echo h($data['Bar']['telnumber']); ?>、平均<?php echo h(number_format($data['Bar']['price'])); ?>円/人、<?php echo h($data['Bar']['station']); ?>、<?php echo h(date("H時i分", strtotime($data['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($data['Bar']['close_time']))); ?>（LO:<?php echo h(date("H時i分", strtotime($data['Bar']['last_order_time']))); ?>）
        </h6>
      </div>
    </div>
    <!-- ここまでメッセージ -->
    <!-- ここから写真 -->
    <div class="row">
      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <a href="<?php echo $data['Bar']['url']; ?>" target="_blank"><img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$data['Bar']['Image'][0]['dir']."/thumb250_".$data['Bar']['Image'][0]['photo_bar']);?>" class="img-responsive"></a>
      </div>

    <!-- ここまで写真 -->
    <!-- ここからメッセージ -->

      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <?php echo h($data['Bar']['description']); ?>
      </div>
    </div>
    <!-- ここまでメッセージ -->
  </div>
  <!-- ここまでメイン右 バー -->
</div>