<?php echo $this->Html->script(array('jquery-1.10.2.js', 'jquery-ui-1.10.4.custom','jquery.ui.datepicker-ja'), array('inline'=>false)); ?>
<?php echo $this->Html->css(array('jquery-ui-1.10.4.custom'), array('inline'=>false)); ?>
<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=false', false); ?>

<!-- content -->                      
<div class="row"><!-- row --> 
  <div class="panel panel-default"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body --> 
      <div class="row"><!-- row3 --> 
        <div class="col-sm-12"><!-- col-sm-12 -->

          <div class="col-sm-8"><!-- col-sm-8 --> 

              <div class="col-sm-8"><!-- col-sm-6 -->

              <div class="col-sm-4">
                <div class="panel-thumbnail">
                  <img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$randomBar['Image'][0]['dir']."/thumb150_".$randomBar['Image'][0]['photo_bar']);?>" class="img-responsive">
                </div>
              </div>
              
              <div class="col-sm-8">
                <!-- ご紹介 -->
                <div class="panel-heading">
                  <h4><?php echo h($randomBar['Bar']['name']); ?></h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item" style="height :80px;"><?php echo h($randomBar['Bar']['description']); ?></li>
                  </ul>
                 <!-- /ご紹介 -->
              </div>

              <div class="col-sm-12">
                <div>
                  <h4 class="text-left text-info";>
                    <h6><?php echo $randomUser['User']['nickname']; ?>さんは<?php echo $randomUser['User']['kibouyoubiText']; ?>の<?php echo h(date("H時i分", strtotime($randomUser['User']['kibouzikan']))); ?>をご希望です。</h6>
                    <h6>待ち合わせは<?php echo $randomBar['Bar']['name']; ?>の店内です。</h6>
                  </h4>

                </div>
              </div>

              </div> <!-- /col-sm-6 --> 



            <div class="col-sm-4"><!-- col-sm-6 --> 
              <!-- プロフィール -->           
                <ul class="list-group">
                  <li class="list-group-item">ジャンル：<?php echo h($randomBar['Bar']['genreText']); ?></li>
                  <li class="list-group-item">電話番号：<?php echo h($randomBar['Bar']['telnumber']); ?></li>
                  <li class="list-group-item">料金：平均<?php echo h(number_format($randomBar['Bar']['price'])); ?>円/人</li>
                  <li class="list-group-item">最寄駅：<?php echo h($randomBar['Bar']['station']); ?></li>
                  <li class="list-group-item">最寄口：<?php echo h($randomBar['Bar']['gate']); ?></li>
                  <li class="list-group-item">駅から：徒歩<?php echo h($randomBar['Bar']['walk_time']); ?>分</li>
                  <li class="list-group-item">営業時間：<?php echo h(date("H時i分", strtotime($randomBar['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($randomBar['Bar']['close_time']))); ?></li>
                  <li class="list-group-item">ラストオーダー：<?php echo h(date("H時i分", strtotime($randomBar['Bar']['last_order_time']))); ?></li>
                </ul>
               <!-- /プロフィール -->

             </div><!-- /col-sm-6 -->

          </div> <!-- /col-sm-8 --> 

          <div class="col-sm-4"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
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
            'latitude' => $randomBar['Bar']['latitude'],
            'longitude' => $randomBar['Bar']['longitude'],
            'address' => $randomBar['Bar']['location'],
            'marker' => true,
            'markerTitle' => 'This is my position',
            'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
            'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
            'infoWindow' => true,
            'windowText' => 'My Position'
            );
            ?>

            <?= $this->GoogleMap->map($map_options); ?>
            <!-- /PartnerImage -->          
          </div> <!-- /col-sm-4 --> 

        </div><!-- col-sm-12 -->

      </div><!-- row3 --> 

    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
</div><!-- /row -->
 <!-- content --> 


<div class="container">
    <div class="row">
        <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"><div class="well"><p>12 wide</p></div></div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-4 col-xs-offset-0"><div class="well"><p>4 cols</p></div></div>
        <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-4 col-xs-offset-0"><div class="well"><p>4 cols</p></div></div>
        <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-4 col-xs-offset-0"><div class="well"><p>4 cols</p></div></div>
    </div>
    <div class="row">
      <?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'confirm', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>
        <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 
              <div class="text-left">
                <?php echo $this->Form->submit('飲みに誘う', array('class' => 'btn btn-lg btn-default'));?>
              </div>         
        </div>

        <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">        <!-- フォーム -->     
          
            <div>
              
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
            </div>
        </div>

        <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"> 

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
        </form>
        <?php echo $this->Form->end();?><!-- /フォーム --> 
    </div>
    <div class="row">
        <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-3 col-xs-offset-0"><div class="well"><p>3 md cols</p></div></div>
        <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-3 col-xs-offset-0"><div class="well"><p>3 md cols</p></div></div>
        <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-3 col-xs-offset-0"><div class="well"><p>3 md cols</p></div></div>
        <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-3 col-xs-offset-0"><div class="well"><p>3 md cols</p></div></div>
    </div>
</div>

