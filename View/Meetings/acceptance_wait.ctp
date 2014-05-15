<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=false', false); ?>

<!-- content -->                      
<div class="row"><!-- row --> 
  <div class="panel panel-default"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body --> 

      <div class="row"><!-- row3 --> 
        <div class="col-sm-12"><!-- col-sm-12 -->

          <div class="col-sm-8"><!-- col-sm-4 --> 

          <?
  // Override any of the following default options to customize your map
          $map_options = array(
            'id' => 'map_canvas',
            'width' => '840px',
            'height' => '400px',
            'style' => '',
            'zoom' => 6,
            'type' => 'ROADMAP',
            'custom' => null,
            'localize' => false,
            'latitude' => 35.681382,
            'longitude' => 139.766084,
            'address' => $data['Bar']['location'],
            'marker' => false,
            'markerTitle' => 'This is my position',
            'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
            'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
            'infoWindow' => true,
            'windowText' => 'My Position'
            );
            ?>

            <?= $this->GoogleMap->map($map_options); ?>

            <?
  // Override any of the following default options to customize your route
            $directions_options = array(
              'travelMode' => "WALKING",
              'directionsDiv' => 'directions',
              );
              ?>
              <div id="directions"></div>
              <?= $this->GoogleMap->getDirections("map_canvas", "directions1", array("from" => $data['Bar']['stationText'].'駅'.$data['Bar']['gate'], "to" => $data['Bar']['location']), $directions_options); 
            ?>


          </div> <!-- /col-sm-4 --> 
          <div class="col-sm-4"><!-- col-sm-8 --> 
            <div class="row"><!-- row1 --> 

                <!-- 待ち合わせ -->
                <div class="panel-heading">
                  <h4>待ち合わせ</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">日付：<?php echo h($data['Meeting']['date']); ?></li>
                    <li class="list-group-item">時間：<?php echo h($data['Meeting']['time']); ?></li>
                    <li class="list-group-item">場所：<?php echo h($data['Meeting']['meetingspot']); ?></li>     
                  </ul>
                 <!-- /待ち合わせ -->

                <!-- プロフィール -->
                <div class="panel-heading">
                  <h4>お相手</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">お名前：<?php echo h($partner_data['User']['last_name']); ?><?php echo h($data['User']['first_name']); ?></li>
                    <li class="list-group-item">ニックネーム：<?php echo h($partner_data['User']['nickname']); ?></li>
                    <li class="list-group-item">年齢：<?php echo h($partner_data['User']['age']); ?>歳</li>
                    <li class="list-group-item">誕生日：<?php echo h(date("Y年n月j日", strtotime($partner_data['User']['birthday']))); ?></li>
                    <li class="list-group-item">職業：<?php echo h($partner_data['User']['workText']); ?></li>
                  </ul>
                 <!-- /プロフィール -->

                 <!-- お店 -->
                <div class="panel-heading">
                  <h4>お店</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">店名：<?php echo h($data['Bar']['name']); ?></li>
                    <li class="list-group-item">時間：<?php echo h($data['Bar']['telnumber']); ?></li>
                    <li class="list-group-item">住所：<?php echo h($data['Bar']['location']); ?></li>
                    <li class="list-group-item">営業時間：<?php echo h(date("H時i分", strtotime($data['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($data['Bar']['close_time']))); ?>（LO:<?php echo h(date("H時i分", strtotime($data['Bar']['last_order_time']))); ?>）</li>
                    <li class="list-group-item">料金：平均<?php echo h($data['Bar']['price']); ?>円</li>        
                  </ul>
                 <!-- /お店 -->  

            </div><!-- /row1 --> 

          </div> <!-- /col-sm-8 --> 

        </div><!-- col-sm-12 -->

      </div><!-- row3 --> 

    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
</div><!-- /row -->
 <!-- content --> 


 
<!-- content -->                      
<div class="row"><!-- row --> 
  <div class="panel panel-default"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body --> 

      <div class="row"><!-- row3 --> 

        <div class="col-sm-6"><!-- col-sm-6 -->

          <div class="col-sm-4"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$partner_data['Image'][0]['dir']."/thumb250_".$partner_data['Image'][0]['photo_user']);?>" class="img-responsive">
            </div>
            <!-- /PartnerImage -->          
          </div> <!-- /col-sm-4 --> 

          <div class="col-sm-8"><!-- col-sm-8 --> 

                <!-- プロフィール -->
                <div class="panel-heading">
                  <h4><?php echo h($partner_data['User']['last_name']); ?><?php echo h($partner_data['User']['first_name']); ?></h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item"><?php echo h($partner_data['User']['message']); ?></li>
                  </ul>
                 <!-- /プロフィール -->                   


          </div> <!-- /col-sm-8 -->

        </div><!-- col-sm-6 -->

        <div class="col-sm-6"><!-- col-sm-6 -->

          <div class="col-sm-4"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$data['Bar']['Image'][0]['dir']."/thumb250_".$data['Bar']['Image'][0]['photo_bar']);?>" class="img-responsive">
            </div>
            <!-- /PartnerImage -->          
          </div> <!-- /col-sm-4 --> 

          <div class="col-sm-8"><!-- col-sm-8 --> 

                 <!-- お店 -->
                <div class="panel-heading">
                  <h4><?php echo h($data['Bar']['name']); ?></h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item"><?php echo h($data['Bar']['description']); ?></li>       
                  </ul>
                 <!-- /お店 -->                  


          </div> <!-- /col-sm-8 -->

        </div><!-- col-sm-6 -->

      </div><!-- row3 --> 

    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
</div><!-- /row -->
 <!-- content --> 

