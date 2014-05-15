<!-- content -->                      
<div class="row"><!-- row --> 
  <div class="panel panel-default"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body --> 
      <div class="row"><!-- row3 --> 
        <div class="col-sm-12"><!-- col-sm-12 -->

          <div class="col-sm-4"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$randomUser['Image'][0]['dir']."/thumb400_".$randomUser['Image'][0]['photo_user']);?>" class="img-responsive">
            </div>
            <!-- /PartnerImage --> 
            <h3>I think <?php echo $total_match_point ;?>% match for you</h3>
            
                <div class="row"><!-- row5 --> 
                  <div class="col-sm-4 col-sm-offset-4"><!-- col-sm-4 --> 
                    <!-- 誘う -->
                    <span class="input-group-btn"><a href="<?php echo $this->Html->url('/meetings/detail'); ?>" class="pull-right"><button class="btn btn-lg btn-success" type="button">デートに誘う</button></a></span>
                    <!-- /誘う -->
                  </div>
                  <div class="col-sm-4"><!-- col-sm-4 --> 
                    <!-- 誘わない -->
                    <span class="input-group-btn"><a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="pull-right"><button class="btn btn-lg btn-info" type="button">次へ</button></a></span>
                    <!-- /誘わない -->
                  </div>
                </div><!-- /row5 --> 

          </div> <!-- /col-sm-4 --> 
          <div class="col-sm-8"><!-- col-sm-8 --> 
            <div class="row"><!-- row1 --> 
              <div class="col-sm-6"><!-- col-sm-6 --> 
                <!-- プロフィール -->
                <div class="panel-heading">
                  <h4>プロフィール</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">ニックネーム：<?php echo h($randomUser['User']['nickname']); ?></li>
                    <li class="list-group-item">年齢：<?php echo h($randomUser['User']['age']); ?>歳</li>
                    <li class="list-group-item">誕生日：<?php echo h(date("Y年n月j日", strtotime($randomUser['User']['birthday']))); ?></li>
                    <li class="list-group-item">職業：<?php echo h($randomUser['User']['workText']); ?></li>
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
                    <li class="list-group-item">時間：<?php echo h($randomUser['User']['kibouzikan']); ?>〜</li>
                    <li class="list-group-item">デート場所：<?php echo h($randomUser['User']['kibouekiText']); ?>駅</li>
                    <li class="list-group-item">料理：<?php echo h($randomUser['User']['genreText']); ?></li>
                </ul>
              <!-- /プロフィール -->                      
              </div> <!-- /col-sm-6 --> 
            </div><!-- /row1 --> 

            <div class="row"><!-- row2 --> 
              <div class="col-sm-12"><!-- col-sm-6 --> 
                <div class="row"><!-- row4 --> 
                <!-- メッセージ -->
                <div class="panel-heading">
                  <h4>メッセージ</h4>
                </div>           
                  <ul class="list-group">
                    <li class="list-group-item"><?php echo h($randomUser['User']['message']); ?></li>
                  </ul>
                  <!-- /メッセージ -->
                </div><!-- /row4 --> 

              </div><!-- /col-sm-12 -->
            </div><!-- /row2 --> 

          </div> <!-- /col-sm-8 --> 

        </div><!-- col-sm-12 -->

      </div><!-- row3 --> 
    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
</div><!-- /row -->
 <!-- content --> 