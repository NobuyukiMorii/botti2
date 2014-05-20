<div class="col-sm-12"><!-- row5 --> 
  <div class="col-sm-10 pull-left">
<!-- Standard button -->

<?php
if ($bar_a == $bar_b) { ?>
<button type="button" class="btn btn-primary col-sm-1">行きつけ</button>
<?php } else { ?>
<button type="button" class="btn btn-default col-sm-1">行きつけ</button>
<?php } ?>
<?php
if ($youbi_a == $youbi_b) { ?>
<button type="button" class="btn btn-primary col-sm-1"><?php echo h($randomUser['User']['kibouyoubiText']); ?></button>
<?php } else { ?>
<button type="button" class="btn btn-default col-sm-1"><?php echo h($randomUser['User']['kibouyoubiText']); ?></button>
<?php } ?>
<?php
if ($time_a == $time_b) { ?>
<button type="button" class="btn btn-primary col-sm-1"><?php echo h($randomUser['User']['kibouzikan']); ?></button>
<?php } else { ?>
<button type="button" class="btn btn-default col-sm-1"><?php echo h($randomUser['User']['kibouzikan']); ?></button>
<?php } ?>
<?php
if ($age_a == $age_b) { ?>
<button type="button" class="btn btn-primary col-sm-1"><?php echo h($randomUser['User']['age']); ?>才</button>
<?php } else { ?>
<button type="button" class="btn btn-default col-sm-1"><?php echo h($randomUser['User']['age']); ?>才</button>
<?php } ?>

<?php
if ($amount_a == $amount_b) { ?>
<button type="button" class="btn btn-primary col-sm-1"><?php echo h($randomUser['User']['amount']); ?></button>
<?php } else { ?>
<button type="button" class="btn btn-default col-sm-1"><?php echo h($randomUser['User']['amount']); ?></button>
<?php } ?>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
  </div>

  <div class="col-sm-2"><!-- col-sm-4 --> 
    <!-- 誘わない -->
    <span class="input-group-btn"><a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="pull-right"><button class="btn btn-lg btn-default" type="button">次を見る</button></a></span>
    <!-- /誘わない -->
  </div>
</div>

<!-- content -->                      
  <div class="panel panel-default" style="margin-top:80px;"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body --> 
        <div class="col-sm-12"><!-- col-sm-12 -->

          <div class="col-sm-4"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$randomUser['Image'][0]['dir']."/thumb400_".$randomUser['Image'][0]['photo_user']);?>" class="img-responsive">
            </div>
            <!-- /PartnerImage --> 

          </div> <!-- /col-sm-4 --> 
          <div class="col-sm-8"><!-- col-sm-8 --> 
              <div class="col-sm-4"><!-- col-sm-6 --> 
                <!-- プロフィール -->
                <div class="panel-heading">
                  <h4>プロフィール</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">ニックネーム：<?php echo h($randomUser['User']['nickname']); ?></li>
                    <li class="list-group-item">年齢：<?php echo h($randomUser['User']['age']); ?>歳</li>
                    <li class="list-group-item">誕生日：<?php echo h(date("n月j日", strtotime($randomUser['User']['birthday']))); ?></li>
                    <li class="list-group-item">職業：<?php echo h($randomUser['User']['work']); ?></li>
                    <li class="list-group-item">好きな食べ物：<?php echo h($randomUser['User']['like']); ?></li>
                    <li class="list-group-item">話題：<?php echo h($randomUser['User']['topic']); ?></li>
                    <li class="list-group-item">好きな飲み物：<?php echo h($randomUser['User']['drink']); ?></li>
                  </ul>
                 <!-- /プロフィール -->

               </div><!-- /col-sm-6 -->

              <div class="col-sm-8"><!-- col-sm-6 -->
              <div class="col-sm-12">
                  <div class="panel-heading">
                      <h4><?php echo h($randomBar['Bar']['name']); ?></h4>
                    </div>
              </div>
                <div class="col-sm-4">
                   <!-- BarImage -->
                  <div class="panel-thumbnail">
                    <img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$randomBar['Image'][0]['dir']."/thumb150_".$randomBar['Image'][0]['photo_bar']);?>" class="img-responsive">
                  </div>
                  <!-- BarImage -->
                </div>
                 <div class="col-sm-8">
                  <!-- メッセージ -->       
                      <ul class="list-group">
                        <li class="list-group-item" style="height :150px;"><?php echo h($randomBar['Bar']['description']); ?><br />(
                          <?php echo h($randomBar['Bar']['station']); ?><?php echo h($randomBar['Bar']['gate']); ?>から徒歩<?php echo h($randomBar['Bar']['walk_time']); ?>分）</li>
                      </ul>
                  <!-- /メッセージ -->
                 </div>

              <!-- メッセージ -->
              <div class="col-sm-12">
                <div class="panel-heading">
                  <h4>メッセージ</h4>
                </div>           
                  <ul class="list-group">
                    <li class="list-group-item" style="height :98px;"><?php echo h($randomUser['User']['message']); ?></li>
                  </ul>
              </div> 
              </div> <!-- /col-sm-6 -->
              </div> <!-- /col-sm-8 --> 

              <div class="col-sm-12">



  <div class="col-sm-2 col-sm-offset-10">
                  <!-- 誘う -->
                  <span class="input-group-btn"><a href="<?php echo $this->Html->url('/meetings/detail'); ?>" class="pull-right"><button class="btn btn-lg btn-primary" type="button">日程調整に進む</button></a></span>
                
              <!-- /メッセージ -->
  </div>

          

        </div><!-- col-sm-12 -->

    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
 <!-- content -->