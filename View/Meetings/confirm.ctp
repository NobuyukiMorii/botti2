<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <h3 class="text-center"><?php echo $randomUser['User']['last_name']; ?><?php echo $randomUser['User']['first_name']; ?>さんを飲みに誘いました。</h3>
          <p  class="text-center">連絡をお待ち下さい。</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-lg-offset-10 col-md-2 col-md-offset-10 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 
            <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">
                <button class="btn btn-lg btn-default" type="button">もう１人誘う</button>
            </a>       
        </div>
    </div>
</div>

<div class="container">
 
  <!-- ここからメイン左 ユーザー -->
  <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 

    <!-- ここから名前 -->
    <div class="row" style="margin-top:40px;">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h3 class="text-left"><?php echo h($randomUser['User']['last_name']); ?>
          <?php echo h($randomUser['User']['first_name']); ?>
        </h3>
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
    <div class="row" style="margin-top:40px;">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h3 class="text-left">
          <?php echo h($randomBar['Bar']['name']); ?>
        </h3>
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
        <a href="<?php echo $randomBar['Bar']['url']; ?>" target="_blank">
          <img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$randomBar['Image'][0]['dir']."/thumb250_".$randomBar['Image'][0]['photo_bar']);?>" class="img-responsive">
        </a>
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
