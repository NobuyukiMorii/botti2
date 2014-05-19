<div class="col-sm-12"><!-- row5 --> 

<!-- content -->                      
  <div class="panel panel-default" style="margin-top:30px;"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body --> 
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
                    <li class="list-group-item">嫌いな食べ物：<?php echo h($data['User']['dislike']); ?></li>
                    <li class="list-group-item">好きな飲み物：<?php echo h($data['User']['drink']); ?></li>
                    <li class="list-group-item">職場の最寄駅：<?php echo h($data['User']['moyorieki']); ?></li>
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
                    <li class="list-group-item">時間：<?php echo h($data['User']['kibouzikan']); ?>〜<?php echo h($data['User']['kibouzikan_finish']); ?></li>
                    <li class="list-group-item">デートの雰囲気：<?php echo h($data['User']['atmosphere']); ?></li>
                </ul>
              <!-- /プロフィール -->
              <!-- メッセージ -->
                <div class="panel-heading">
                  <h4>メッセージ</h4>
                </div>           
                  <ul class="list-group">
                    <li class="list-group-item" style="height :82px;"><?php echo h($data['User']['message']); ?></li>
                  </ul>

                  <!-- 誘う -->
                  <span class="input-group-btn" style="height :80px;"><a href="<?php echo $this->Html->url('/users/edit/'.$LoginUserId); ?>" class="pull-right"><button class="btn btn-lg btn-success" type="button">プロフィールを変更する</button></a></span>
                
              <!-- /メッセージ --> 

              </div> <!-- /col-sm-6 --> 

          </div> <!-- /col-sm-8 --> 

        </div><!-- col-sm-12 -->

    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
 <!-- content --> 