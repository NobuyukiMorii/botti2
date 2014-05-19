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

              <div class="col-sm-6"><!-- col-sm-6 -->
              
                <!-- ご紹介 -->
                <div class="panel-heading">
                  <h4>ご紹介</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item" style="height :80px;"><?php echo h($randomBar['Bar']['description']); ?></li>
                  </ul>
                 <!-- /ご紹介 -->


        <!-- フォーム -->     
          <div class ="well my-inline form-inline">
            <div>
              <?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'confirm', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>
              <label>日付</label>
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
                <br />
                <label>時間</label>
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
                    <h6><?php echo $randomUser['User']['nickname']; ?>さんは<?php echo $randomUser['User']['kibouyoubiText']; ?>の<?php echo h(date("H時i分", strtotime($randomUser['User']['kibouzikan']))); ?>をご希望です。</h6>
                  </h4>

                </div>

                <div class = "form-group" style="margin-top : 10px">
                  <label>場所</label><br />
                  <div class="radio">

                    <?php echo $this->Form->radio(
                      'Meeting.meetingspot',
                      array(
                        $randomBar['Bar']['station'].'駅'.$randomBar['Bar']['gate'].'の改札前'
                        => $randomBar['Bar']['station'].'駅'.$randomBar['Bar']['gate'].'の改札前', 
                        $randomBar['Bar']['name'].'の店内'
                        => $randomBar['Bar']['name'].'の店内'
                        ), 
                      array(
                        'legend' => false,'separator' => "<br />",
                        'value' => $randomBar['Bar']['station'].'駅'.$randomBar['Bar']['gate'].'の改札前'
                        ),
                      array(
                        'class' => 'form-group',
                        'required' => false
                        )
                      )
                      ;?>

                    </div>

                  </div>

                  <div class="text-right" style="margin-top : 10px">
                    <?php echo $this->Form->submit('デートに誘う', array('class' => 'btn btn-lg btn-primary'));?>
                  </div>

                  <?php echo $this->Form->end();?>
                </form>

              </div>
              <!-- /フォーム -->

              </div> <!-- /col-sm-6 --> 
              
              <div class="col-sm-6"><!-- col-sm-6 --> 
                <!-- プロフィール -->
                <div class="panel-heading">
                  <h4>デート場所</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">店名：<?php echo h($randomBar['Bar']['name']); ?></li>
                    <li class="list-group-item">ジャンル：<?php echo h($randomBar['Bar']['genreText']); ?></li>
                    <li class="list-group-item">電話番号：<?php echo h($randomBar['Bar']['telnumber']); ?></li>
                    <li class="list-group-item">料金：平均<?php echo h($randomBar['Bar']['price']); ?>円</li>
                    <li class="list-group-item">最寄駅：<?php echo h($randomBar['Bar']['station']); ?></li>
                    <li class="list-group-item">最寄口：<?php echo h($randomBar['Bar']['gate']); ?></li>
                    <li class="list-group-item">駅から：徒歩<?php echo h($randomBar['Bar']['walk_time']); ?>分</li>
                    <li class="list-group-item">営業時間：<?php echo h(date("H時i分", strtotime($randomBar['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($randomBar['Bar']['close_time']))); ?><br />（LO：<?php echo h(date("H時i分", strtotime($randomBar['Bar']['last_order_time']))); ?>）</li>
                  </ul>
                 <!-- /プロフィール -->

               </div><!-- /col-sm-6 -->

          </div> <!-- /col-sm-8 --> 

        </div><!-- col-sm-12 -->

      </div><!-- row3 --> 

    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
</div><!-- /row -->
 <!-- content --> 




