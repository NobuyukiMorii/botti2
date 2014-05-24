<div class="container">
<?php for ($i = 0; $i < count($data); $i++) { ?>
  <!-- ここからメイン右 バー-->
  <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 
    <!-- ここから名前 -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h3 class="text-left">
          <span class="badge"><?php echo h($i+1); ?></span><?php echo h($data[$i]['Bar']['name']); ?><small>（<?php echo h($data[$i]['Bar']['station']); ?>）</small>
        </h3>
      </div>

    </div>
    <!-- ここまで名前 -->
    <!-- ここからメッセージ -->
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <h6>
          <?php echo h($data[$i]['Bar']['genreText']); ?>、<?php echo h($data[$i]['Bar']['telnumber']); ?>、平均<?php echo h(number_format($data[$i]['Bar']['price'])); ?>円/人、<?php echo h(date("H時i分", strtotime($data[$i]['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($data[$i]['Bar']['close_time']))); ?>（LO:<?php echo h(date("H時i分", strtotime($data[$i]['Bar']['last_order_time']))); ?>）
        </h6>
      </div>
    </div>
    <!-- ここまでメッセージ -->
    <!-- ここから写真 -->
    <div class="row">
      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <a href="<?php echo $data[$i]['Bar']['url']; ?>" target="_blank"><img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$data[$i]['Image'][0]['dir']."/thumb250_".$data[$i]['Image'][0]['photo_bar']);?>" class="img-responsive"></a>
      </div>

    <!-- ここまで写真 -->
    <!-- ここからメッセージ -->

      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <?php echo h($data[$i]['Bar']['description']); ?>
      </div>
    </div>
    <!-- ここまでメッセージ -->
  </div>
  <!-- ここまでメイン右 バー -->
<?php } ?>
</div>