<?php echo $this->Html->script(array('jquery-1.10.2.js', 'jquery-ui-1.10.4.custom','jquery.ui.datepicker-ja'), array('inline'=>false)); ?>
<?php echo $this->Html->css(array('jquery-ui-1.10.4.custom'), array('inline'=>false)); ?>
<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=false', false); ?>

<!-- content -->                      
<div class="row"><!-- row --> 
  <div class="panel panel-default"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body --> 
      <div class="row"><!-- row3 --> 
        <div class="col-sm-12"><!-- col-sm-12 -->

          <div class="col-sm-4"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$randomBar['Image'][0]['dir']."/thumb400_".$randomBar['Image'][0]['photo_bar']);?>" class="img-responsive">
            </div>
            <!-- /PartnerImage -->          
          </div> <!-- /col-sm-4 --> 
          <div class="col-sm-8"><!-- col-sm-8 --> 
            <div class="row"><!-- row1 --> 
              <div class="col-sm-6"><!-- col-sm-6 --> 
                <!-- プロフィール -->
                <div class="panel-heading">
                  <h4>お店について</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">店名：<?php echo h($randomBar['Bar']['name']); ?></li>
                    <li class="list-group-item">ジャンル：<?php echo h($randomBar['Bar']['genreText']); ?></li>
                    <li class="list-group-item">電話番号：<?php echo h($randomBar['Bar']['telnumber']); ?></li>
                    <li class="list-group-item">料金：平均<?php echo h($randomBar['Bar']['price']); ?>円</li>
                    <li class="list-group-item">最寄駅：<?php echo h($randomBar['Bar']['stationText']); ?></li>
                    <li class="list-group-item">最寄口：<?php echo h($randomBar['Bar']['gate']); ?></li>
                    <li class="list-group-item">駅から：徒歩<?php echo h($randomBar['Bar']['walk_time']); ?>分</li>
                    <li class="list-group-item">営業時間：<?php echo h(date("H時i分", strtotime($randomBar['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($randomBar['Bar']['close_time']))); ?><br />（LO：<?php echo h(date("H時i分", strtotime($randomBar['Bar']['last_order_time']))); ?>）</li>
                  </ul>
                 <!-- /プロフィール -->

               </div><!-- /col-sm-6 -->

              <div class="col-sm-6"><!-- col-sm-6 -->
              



        <!-- フォーム -->     
          <div class ="well my-inline form-inline">
            <div>
              <?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'confirm', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>
              <p>待ち合わせ日時</p>
              <div class = "form-group">
                <?php echo $this->Datepicker->datepicker('Meeting.date', array(
                  'label' => false,
                  'type' => 'text',
                  'default' => date('Y/m/d', strtotime($NextWeekDay)),
                  'empty' => true,
                  'maxYear' => date('Y'),
                  'inline' => true
                  ));
                  ?>
                </div>

                <div class = "form-group">
                  <?
                  echo $this->form->input('Meeting.time', array(
                    'label' => false,
                    'default' => $matiawase,
                    'timeFormat' => '24',
                    'dateFormat' => 'H:i:s',
                    'empty' => true,
                    'separator' => ':',
                    'interval' => 30
                    ));
                    ?>
                  </div>

                </div>


                <div>
                  <h4 class="text-left text-info";>
                    <?php echo $randomUser['User']['nickname']; ?>さんは<?php echo $randomUser['User']['kibouyoubiText']; ?>の<?php echo h(date("H時i分", strtotime($randomUser['User']['kibouzikan']))); ?>をご希望です。
                  </h4>

                </div>

                <div class = "form-group" style="margin-top : 50px">
                  <p>待ち合わせ場所</p>
                  <div class="radio">

                    <?php echo $this->Form->radio(
                      'Meeting.meetingspot',
                      array(
                        $randomBar['Bar']['stationText'].'駅'.$randomBar['Bar']['gate'].'の改札前'
                        => $randomBar['Bar']['stationText'].'駅'.$randomBar['Bar']['gate'].'の改札前', 
                        $randomBar['Bar']['name'].'の店内'
                        => $randomBar['Bar']['name'].'の店内'
                        ), 
                      array(
                        'legend' => false,'separator' => "<br />",
                        'value' => $randomBar['Bar']['stationText'].'駅'.$randomBar['Bar']['gate'].'の改札前'
                        ),
                      array(
                        'class' => 'form-group',
                        'required' => false
                        )
                      )
                      ;?>

                    </div>

                  </div>

                  <div class="text-right" style="margin-top : 30px">
                    <?php echo $this->Form->submit('デートに誘う', array('class' => 'btn btn-lg btn-success'));?>
                  </div>

                  <?php echo $this->Form->end();?>
                </form>

              </div>
              <!-- /フォーム -->

              </div> <!-- /col-sm-6 --> 
            </div><!-- /row1 --> 

            <div class="row"><!-- row2 --> 
              <div class="col-sm-12"><!-- col-sm-6 --> 
                <div class="row"><!-- row4 --> 
                <!-- メッセージ -->             

                  <!-- /メッセージ -->
                </div><!-- /row4 --> 

              </div><!-- /col-sm-12 -->
            </div><!-- /row2 --> 

          </div> <!-- /col-sm-8 --> 

        </div><!-- col-sm-12 -->

      </div><!-- row3 --> 

      <div class="row"><!-- row6 --> 
          <?
  // Override any of the following default options to customize your map
          $map_options = array(
            'id' => 'map_canvas',
            'width' => '1350px',
            'height' => '400px',
            'style' => '',
            'zoom' => 7,
            'type' => 'ROADMAP',
            'custom' => null,
            'localize' => false,
            'latitude' => 35.681382,
            'longitude' => 139.766084,
            'address' => $randomBar['Bar']['location'],
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
              <?= $this->GoogleMap->getDirections("map_canvas", "directions1", array("from" => $randomBar['Bar']['stationText'].'駅'.$randomBar['Bar']['gate'], "to" => $randomBar['Bar']['location']), $directions_options); 
            ?>
      </div><!-- /row6 --> 



    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
</div><!-- /row -->
 <!-- content --> 



