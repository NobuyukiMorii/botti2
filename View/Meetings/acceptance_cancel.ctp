<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=false', false); ?>

<div class="col-sm-12"><!-- row5 --> 
    <h3><?php echo h($data['Meeting']['date']); ?> <?php echo h($data['Meeting']['time']); ?> ＠<?php echo h($data['Meeting']['meetingspot']); ?></h3>
  </div>
<!-- content -->                      
<div class="row" style="margin-top:70px;"><!-- row --> 
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
            'height' => '675px',
            'style' => '',
            'zoom' => 17,
            'type' => 'ROADMAP',
            'custom' => null,
            'localize' => false,
            'latitude' => $data['Bar']['latitude'],
            'longitude' => $data['Bar']['longitude'],
            'address' => $data['Bar']['location'],
            'marker' => true,
            'markerTitle' => $data['Bar']['name'],
            'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
            'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
            'infoWindow' => true,
            'windowText' => 'My Position'
            );
            ?>

            <?= $this->GoogleMap->map($map_options); ?>


          </div> <!-- /col-sm-4 --> 
          <div class="col-sm-4"><!-- col-sm-8 --> 
            <div class="row"><!-- row1 --> 
            <div class =" my-inline form-inline">
              <?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'acceptance','role' => 'form'));?>
              <?php echo $this->Form->submit('キャンセルする', array('name' => 'NO','class' => 'btn btn-warning btn-block')); ?>
              <?php echo $this->Form->end();?>
            </div>

                <!-- プロフィール -->
                <div class="panel-heading">
                  <h4>お相手</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">お名前：<?php echo h($partner_data['User']['last_name']); ?><?php echo h($partner_data['User']['first_name']); ?></li>
                    <li class="list-group-item">ニックネーム：<?php echo h($partner_data['User']['nickname']); ?></li>
                    <li class="list-group-item">年齢：<?php echo h($partner_data['User']['age']); ?>歳</li>
                    <li class="list-group-item">誕生日：<?php echo h(date("n月j日", strtotime($partner_data['User']['birthday']))); ?></li>
                    <li class="list-group-item">職業：<?php echo h($partner_data['User']['work']); ?></li>
                    <li class="list-group-item">好きな食べ物：<?php echo h($partner_data['User']['like']); ?></li>
                    <li class="list-group-item">嫌いな食べ物：<?php echo h($partner_data['User']['dislike']); ?></li>
                    <li class="list-group-item">好きな飲み物：<?php echo h($partner_data['User']['drink']); ?></li>
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
