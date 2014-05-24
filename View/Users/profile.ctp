<div class="container">
 
  <!-- ここからメイン左 ユーザー -->
  <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 
    <?php echo $this->Session->flash('auth'); ?>
    <!-- ここからボタン -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 chidden-sm hidden-xs"> 
        <a href="<?php echo $this->Html->url('/users/edit/'.$LoginUserId); ?>">
          <button class="btn btn-lg btn-default" type="button">プロフィール変更</button>
        </a>
        <a href="<?php echo $this->Html->url('/users/password/'.$LoginUserId); ?>">
          <button class="btn btn-lg btn-default" type="button">パスワード変更</button>
        </a>
      </div>
    </div>
    <!-- ここまでボタン -->
    <!-- ここから名前 -->
    <div class="row" style="margin-top:40px;">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h3 class="text-left"><?php echo h($data['User']['last_name']); ?>
          <?php echo h($data['User']['first_name']); ?>
        </h3>
      </div>

    </div>
    <!-- ここまで名前 -->
    <!-- ここからメッセージ -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h6>
          <?php echo h($data['User']['age']); ?>歳、<?php echo h($data['User']['work']); ?>、<?php echo h($data['User']['kibouyoubiText']); ?>の<?php echo h($data['User']['kibouzikan']); ?>~<?php echo h($data['User']['kibouzikan_finish']); ?>希望、<?php echo h($data['User']['topic']); ?>の話がしたい。
        </h6>
      </div>
    </div>
    <!-- ここまでメッセージ -->
    <!-- ここから写真 -->
    <div class="row">
      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data['Image'][0]['dir']."/thumb250_".$data['Image'][0]['photo_user']);?>" class="img-responsive">
      </div>

    <!-- ここまで写真 -->
    <!-- ここからメッセージ -->

      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <?php echo h($data['User']['message']); ?>
      </div>
    </div>
    <!-- ここまでメッセージ -->
    <!-- ここからボタン -->
    <div class="row">
      <div class="hidden-lg hidden-md col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 
        <a href="<?php echo $this->Html->url('/users/edit/'.$LoginUserId); ?>">
          <button class="btn btn-lg btn-default" type="button">プロフィール変更</button>
        </a>
        <a href="<?php echo $this->Html->url('/users/password/'.$LoginUserId); ?>">
          <button class="btn btn-lg btn-default" type="button">パスワード変更</button>
        </a>
      </div>
    </div>
    <!-- ここまでボタン -->
  </div>
  <!-- ここまでメイン左 ユーザー-->

  <!-- ここからメイン右 バー-->
  <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">

<!-- ここからボタン -->
 <div class="row">
    <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 hidden-sm hidden-xs"> 
      <a href="<?php echo $this->Html->url('/users/my_bar/'.$LoginUserId); ?>">
        <button class="btn btn-lg btn-default" type="button">お店変更</button>
      </a>
    </div>
  </div>
  <!-- ここまでボタン -->

    <!-- ここから名前 -->
    <div class="row" style="margin-top:40px;">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h3 class="text-left">
          <?php echo h($bar['Bar']['name']); ?>
        </h3>
      </div>

    </div>
    <!-- ここまで名前 -->
    <!-- ここからメッセージ -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h6>
          <?php echo h($bar['Bar']['genreText']); ?>、<?php echo h($bar['Bar']['telnumber']); ?>、平均<?php echo h(number_format($bar['Bar']['price'])); ?>円/人、<?php echo h($bar['Bar']['station']); ?>、<?php echo h(date("H時i分", strtotime($bar['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($bar['Bar']['close_time']))); ?>（LO:<?php echo h(date("H時i分", strtotime($bar['Bar']['last_order_time']))); ?>）
        </h6>
      </div>
    </div>
    <!-- ここまでメッセージ -->
    <!-- ここから写真 -->
    <div class="row">
      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <a href="<?php echo $bar['Bar']['url']; ?>" target="_blank"><img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$bar['Image'][0]['dir']."/thumb250_".$bar['Image'][0]['photo_bar']);?>" class="img-responsive"></a>
      </div>

    <!-- ここまで写真 -->
    <!-- ここからメッセージ -->

      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <?php echo h($bar['Bar']['description']); ?>
      </div>
    </div>
    <!-- ここまでメッセージ -->
    <!-- ここからボタン -->
    <div class="row">
      <div class="hidden-lg hidden-md col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 
        <a href="<?php echo $this->Html->url('/users/my_bar/'.$LoginUserId); ?>">
          <button class="btn btn-lg btn-default" type="button">お店変更</button>
        </a>
      </div>
    </div>
    <!-- ここまでボタン -->
  </div>
  <!-- ここまでメイン右 バー -->

</div>
