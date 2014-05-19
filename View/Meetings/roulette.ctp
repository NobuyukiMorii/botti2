<div class="col-sm-12"><!-- row5 --> 
  <div class="col-sm-9 pull-left">
<!-- Standard button -->

<?php
if ($bar_a == $bar_b) { ?>
<button type="button" class="btn btn-primary col-sm-1">バー</button>
<?php } else { ?>
<button type="button" class="btn btn-default col-sm-1">バー</button>
<?php } ?>

<?php
if ($age_a == $age_b) { ?>
<button type="button" class="btn btn-primary col-sm-1">年齢</button>
<?php } else { ?>
<button type="button" class="btn btn-default col-sm-1">年齢</button>
<?php } ?>

<?php
if ($atmosphere_a == $atmosphere_b) { ?>
<button type="button" class="btn btn-primary col-sm-1">雰囲気</button>
<?php } else { ?>
<button type="button" class="btn btn-default col-sm-1">雰囲気</button>
<?php } ?>

<?php
if ($youbi_a == $youbi_b) { ?>
<button type="button" class="btn btn-primary col-sm-1">曜日</button>
<?php } else { ?>
<button type="button" class="btn btn-default col-sm-1">曜日</button>
<?php } ?>

<?php
if ($time_a == $time_b) { ?>
<button type="button" class="btn btn-primary col-sm-1">時間</button>
<?php } else { ?>
<button type="button" class="btn btn-default col-sm-1">時間</button>
<?php } ?>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
  </div>
  <div class="col-sm-3 pull-right"><!-- col-sm-4 --> 
    <!-- 誘わない -->
    <span class="input-group-btn"><a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="pull-right"><button class="btn btn-lg btn-default" type="button">次のデートを見る</button></a></span>
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
              <div class="col-sm-6"><!-- col-sm-6 --> 
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
                    <li class="list-group-item">嫌いな食べ物：<?php echo h($randomUser['User']['dislike']); ?></li>
                    <li class="list-group-item">好きな飲み物：<?php echo h($randomUser['User']['drink']); ?></li>
                    <li class="list-group-item">職場の最寄駅：<?php echo h($randomUser['User']['moyorieki']); ?></li>
                  </ul>
                 <!-- /プロフィール -->

               </div><!-- /col-sm-6 -->

              <div class="col-sm-6"><!-- col-sm-6 -->
              <!-- プロフィール -->
                <div class="panel-heading">
                  <h4>デートの希望</h4>
                </div>
                  <ul class="list-group">
                    <li class="list-group-item">曜日：<?php echo h($randomUser['User']['kibouyoubiText']); ?></li>
                    <li class="list-group-item">時間：<?php echo h($randomUser['User']['kibouzikan']); ?>〜<?php echo h($randomUser['User']['kibouzikan_finish']); ?></li>
                    <li class="list-group-item">デートの雰囲気：<?php echo h($randomUser['User']['atmosphere']); ?></li>
                    <li class="list-group-item">デート場所：<?php echo h($randomBar['Bar']['name']); ?></li>
                </ul>
              <!-- /プロフィール -->
              <!-- メッセージ -->
                <div class="panel-heading">
                  <h4>メッセージ</h4>
                </div>           
                  <ul class="list-group">
                    <li class="list-group-item" style="height :82px;"><?php echo h($randomUser['User']['message']); ?></li>
                  </ul>

                  <!-- 誘う -->
                  <span class="input-group-btn" style="height :80px;"><a href="<?php echo $this->Html->url('/meetings/detail'); ?>" class="pull-right"><button class="btn btn-lg btn-primary" type="button">デートに誘う</button></a></span>
                
              <!-- /メッセージ --> 

              </div> <!-- /col-sm-6 --> 

          </div> <!-- /col-sm-8 --> 

        </div><!-- col-sm-12 -->

    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
 <!-- content --> 