<!-- content -->                      
<div class="row"><!-- row --> 
  <div class="panel panel-default"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body --> 

      <div class="row"><!-- row7 --> 
    	<h2 class="featurette-heading"><?php echo $randomUser['User']['last_name']; ?><?php echo $randomUser['User']['first_name']; ?>さんをデートに誘いました。デートOKをお待ち下さい。</h2>
      </div>

      <div class="row"><!-- row3 --> 
        <div class="col-sm-12" style="margin-top : 40px"><!-- col-sm-12 -->

          <div class="col-sm-4"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$randomUser['Image'][0]['dir']."/thumb400_".$randomUser['Image'][0]['photo_user']);?>" class="img-responsive">
            </div>
            <!-- /PartnerImage -->          
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
                    <li class="list-group-item">誕生日：<?php echo h(date("n月j日", strtotime($randomUser['User']['birthday']))); ?></li>
                    <li class="list-group-item">職業：<?php echo h($randomUser['User']['work']); ?></li>
                    <li class="list-group-item">好きな食べ物：<?php echo h($randomUser['User']['like']); ?></li>
                    <li class="list-group-item">嫌いな食べ物：<?php echo h($randomUser['User']['dislike']); ?></li>
                    <li class="list-group-item">好きな飲み物：<?php echo h($randomUser['User']['drink']); ?></li>
                    <li class="list-group-item">よく行く駅：<?php echo h($randomUser['User']['moyorieki']); ?></li>
                  </ul>
                 <!-- /プロフィール -->                    
              </div> <!-- /col-sm-6 --> 

              <div class="col-sm-6"><!-- col-sm-6 --> 
                <!-- 待ち合わせ -->
                <div class="panel-heading">
                  <h4>待ち合わせ</h4>
                </div>               
                  <ul class="list-group">
                  	<li class="list-group-item">日付：<?php echo h($data['Meeting']['date']); ?></li>
                  	<li class="list-group-item">時間：<?php echo h($meeting_time); ?></li>
                    <li class="list-group-item">場所：<?php echo h($data['Meeting']['meetingspot']); ?></li>     
                  </ul>
                 <!-- /待ち合わせ -->

                 <!-- お店 -->
                <div class="panel-heading">
                  <h4>お店</h4>
                </div>               
                  <ul class="list-group">
                  	<li class="list-group-item">店名：<?php echo h($randomBar['Bar']['name']); ?></li>
                  	<li class="list-group-item">電話番号：<?php echo h($randomBar['Bar']['telnumber']); ?></li>
                    <li class="list-group-item">住所：<br /><?php echo h($randomBar['Bar']['location']); ?></li>     
                  </ul>
                 <!-- /お店 -->

                  <div class="col-sm-6 col-sm-offset-6" style="margin-top : 25px"><!-- col-sm-4 --> 
                    <span class="input-group-btn"><a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="pull-right"><button class="btn btn-lg btn-primary" type="button">トップ画面に戻る</button></a></span>
                  </div><!-- /col-sm-4 -->

               </div><!-- /col-sm-6 -->

            </div><!-- /row1 --> 

          </div> <!-- /col-sm-8 --> 

        </div><!-- col-sm-12 -->

      </div><!-- row3 --> 

    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
</div><!-- /row -->
 <!-- content --> 