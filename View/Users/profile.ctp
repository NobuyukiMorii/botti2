<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=false', false); ?>
<div class="col-sm-12"><!-- row5 --> 

<!-- content -->                 
  <div class="panel panel-default" style="margin-top:30px;"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body -->

        <div class="col-sm-12"><!-- col-sm-12 -->
          <div class="col-sm-1">
                  <!-- 誘う -->
                  <span class="input-group-btn" style="height :80px;"><a href="<?php echo $this->Html->url('/users/edit/'.$LoginUserId); ?>" class="pull-right"><button class="btn btn-lg btn-primary" type="button">プロフィールを変更する</button></a></span>
              <!-- /メッセージ --> 
          </div>
        </div>

        <div class="col-sm-12"><!-- col-sm-12 -->

          <div class="col-sm-4"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data['Image'][0]['dir']."/thumb400_".$data['Image'][0]['photo_user']);?>" class="img-responsive">
            </div>
            <!-- /PartnerImage --> 

          </div> <!-- /col-sm-4 --> 
          <div class="col-sm-8"><!-- col-sm-8 --> 
              <div class="col-sm-6"><!-- col-sm-6 --> 
                <!-- プロフィール -->
                <div class="panel-heading">
                  <h4>プロフィール</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">ニックネーム：<?php echo h($data['User']['nickname']); ?></li>
                    <li class="list-group-item">年齢：<?php echo h($data['User']['age']); ?>歳</li>
                    <li class="list-group-item">誕生日：<?php echo h(date("n月j日", strtotime($data['User']['birthday']))); ?></li>
                    <li class="list-group-item">職業：<?php echo h($data['User']['work']); ?></li>
                    <li class="list-group-item">好きな食べ物：<?php echo h($data['User']['like']); ?></li>
                    <li class="list-group-item">話題：<?php echo h($data['User']['topic']); ?></li>
                    <li class="list-group-item">好きな飲み物：<?php echo h($data['User']['drink']); ?></li>
                  </ul>
                 <!-- /プロフィール -->

               </div><!-- /col-sm-6 -->

              <div class="col-sm-6"><!-- col-sm-6 -->
              <!-- プロフィール -->
                <div class="panel-heading">
                  <h4>デートの希望</h4>
                </div>
                  <ul class="list-group">
                    <li class="list-group-item">曜日：<?php echo h($data['User']['kibouyoubiText']); ?></li>
                    <li class="list-group-item">時間：<?php echo h(date("H時i分", strtotime($data['User']['kibouzikan']))); ?>〜<?php echo h(date("H時i分", strtotime($data['User']['kibouzikan_finish']))); ?></li>
                    <li class="list-group-item">飲む量：<?php echo h($data['User']['amount']); ?></li>
                </ul>
              <!-- /プロフィール -->
              <!-- メッセージ -->
                <div class="panel-heading">
                  <h4>メッセージ</h4>
                </div>           
                  <ul class="list-group">
                    <li class="list-group-item" style="height :82px;"><?php echo h($data['User']['message']); ?></li>
                  </ul>
              </div> <!-- /col-sm-6 --> 

          </div> <!-- /col-sm-8 --> 

        </div><!-- col-sm-12 -->
    
    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
 <!-- content --> 

<!-- content -->                      
  <div class="panel panel-default" style="margin-top:30px;"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body --> 

        <div class="col-sm-12"><!-- col-sm-12 -->

          <div class="col-sm-1">
                  <!-- 誘う -->
                  <span class="input-group-btn" style="height :80px;"><a href="<?php echo $this->Html->url('/users/my_bar/'.$LoginUserId); ?>" class="pull-right"><button class="btn btn-lg btn-primary" type="button">行きつけのバーを変更する</button></a></span>
              <!-- /メッセージ --> 
          </div>
          
        </div>

        <div class="col-sm-12"><!-- col-sm-12 -->

          <div class="col-sm-4"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$bar['Image'][0]['dir']."/thumb400_".$bar['Image'][0]['photo_bar']);?>" class="img-responsive">
            </div>
            <!-- /PartnerImage --> 

          </div> <!-- /col-sm-4 --> 
          <div class="col-sm-8"><!-- col-sm-8 --> 
              <div class="col-sm-6"><!-- col-sm-6 --> 
                <!-- プロフィール -->
                <div class="panel-heading">
                  <h4>プロフィール</h4>
                </div>               
                <ul class="list-group">
                  <li class="list-group-item">ジャンル：<?php echo h($bar['Bar']['genreText']); ?></li>
                  <li class="list-group-item">電話番号：<?php echo h($bar['Bar']['telnumber']); ?></li>
                  <li class="list-group-item">料金：平均<?php echo h(number_format($bar['Bar']['price'])); ?>円/人</li>
                  <li class="list-group-item">最寄駅：<?php echo h($bar['Bar']['station']); ?></li>
                  <li class="list-group-item">最寄口：<?php echo h($bar['Bar']['gate']); ?></li>
                  <li class="list-group-item">駅から：徒歩<?php echo h($bar['Bar']['walk_time']); ?>分</li>
                  <li class="list-group-item">営業時間：<?php echo h(date("H時i分", strtotime($bar['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($bar['Bar']['close_time']))); ?></li>
                  <li class="list-group-item">ラストオーダー：<?php echo h(date("H時i分", strtotime($bar['Bar']['last_order_time']))); ?></li>
                </ul>
                 <!-- /プロフィール -->

               </div><!-- /col-sm-6 -->

              <div class="col-sm-6"><!-- col-sm-6 -->
                  <?
          // Override any of the following default options to customize your map
                  $map_options = array(
                    'id' => 'map_canvas',
                    'width' => '400px',
                    'height' => '400px',
                    'style' => '',
                    'zoom' => 17,
                    'type' => 'ROADMAP',
                    'custom' => null,
                    'localize' => false,
                    'latitude' => $bar['Bar']['latitude'],
                    'longitude' => $bar['Bar']['longitude'],
                    'address' => $bar['Bar']['location'],
                    'marker' => true,
                    'markerTitle' => 'This is my position',
                    'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
                    'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
                    'infoWindow' => true,
                    'windowText' => 'My Position'
                    );
                    ?>

            <?= $this->GoogleMap->map($map_options); ?>
              </div> <!-- /col-sm-6 --> 

          </div> <!-- /col-sm-8 --> 

        </div><!-- col-sm-12 -->

    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
 <!-- content --> 


