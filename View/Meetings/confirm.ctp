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

    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12"><h1 class="page-header text-left"><?php echo h($randomUser['User']['last_name']); ?><?php echo h($randomUser['User']['first_name']); ?></h1></div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12"><h1 class="page-header text-left"><?php echo h($randomBar['Bar']['name']); ?></h1></div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-sm-3 col-md-6 col-xs-12"><img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$randomUser['Image'][0]['dir']."/thumb250_".$randomUser['Image'][0]['photo_user']);?>" class="img-responsive"></div>
      <div class="col-lg-3 col-sm-3 col-md-6 col-xs-12"><p class="text-left"><?php echo h($randomUser['User']['message']); ?></p></div>
      <div class="col-lg-3 col-sm-3 col-md-6 col-xs-12"><a href="<?php echo $randomBar['Bar']['url']; ?>" target="_blank"><img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$randomBar['Image'][0]['dir']."/thumb250_".$randomBar['Image'][0]['photo_bar']);?>" class="img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-md-6 col-xs-12"><p class="text-left"><?php echo h($randomBar['Bar']['description']); ?></p></div>
    </div>

    <div class="row">

      <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">       
        <dl class="dl-horizontal">
          <dt>年齢</dt><dd><?php echo h($randomUser['User']['age']); ?>歳</dt>
          <dt>職業</dt><dd><?php echo h($randomUser['User']['work']); ?></dt>
          <dt>希望曜日</dt><dd><?php echo h($randomUser['User']['kibouyoubiText']); ?></dt>
          <dt>希望時間</dt><dd><?php echo h($randomUser['User']['kibouzikan']); ?></dt>
          <dt>希望終了時間</dt><dd><?php echo h($randomUser['User']['kibouzikan_finish']); ?></dt>
          <dt>話題</dt><dd><?php echo h($randomUser['User']['topic']); ?></dt>
        </dl>
      </div>

      <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">       
        <dl class="dl-horizontal">
          <dt>ジャンル</dt><dd><?php echo h($randomBar['Bar']['genreText']); ?></dd>
          <dt>電話番号</dt><dd><?php echo h($randomBar['Bar']['telnumber']); ?></dd>
          <dt>料金</dt><dd>平均<?php echo h(number_format($randomBar['Bar']['price'])); ?>円/人</dd>
          <dt>最寄駅</dt><dd><?php echo h($randomBar['Bar']['station']); ?></dd>
          <dt>営業時間</dt><dd><?php echo h(date("H時i分", strtotime($randomBar['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($randomBar['Bar']['close_time']))); ?></dd>
          <dt>LO</dt><dd><?php echo h(date("H時i分", strtotime($randomBar['Bar']['last_order_time']))); ?></dd>
        </dl>
      </div>
</div>