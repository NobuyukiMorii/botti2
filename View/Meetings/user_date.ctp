<!-- content -->                      
<div class="row"><!-- row --> 
  <div class="panel panel-default"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body --> 

<div class="pagination pagination-large">
    <ul class="pagination">
      <?php
        echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
        echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
        echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
      ?>
    </ul>
</div>

<?php for ($i = 0; $i < count($data); $i++) { ?>
      <div class="row" style="margin-bottom : 10px"><!-- row3 --> 
        <div class="col-sm-12"><!-- col-sm-12 -->

          <div class="col-sm-4"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data[$i]['Meeting']['date_partner']['Image'][0]['dir']."/thumb400_".$data[$i]['Meeting']['date_partner']['Image'][0]['photo_user']);?>" class="img-responsive">
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
                    <li class="list-group-item">お名前：<?php echo h($data[$i]['Meeting']['date_partner']['User']['last_name']); ?><?php echo h($data[$i]['Meeting']['date_partner']['User']['first_name']); ?></li>
                    <li class="list-group-item">ニックネーム：<?php echo h($data[$i]['Meeting']['date_partner']['User']['nickname']); ?></li>
                    <li class="list-group-item">年齢：<?php echo h($data[$i]['Meeting']['date_partner']['User']['age']); ?>歳</li>
                    <li class="list-group-item">誕生日：<?php echo h(date("n月j日", strtotime($data[$i]['Meeting']['date_partner']['User']['birthday']))); ?></li>
                    <li class="list-group-item">職業：<?php echo h($data[$i]['Meeting']['date_partner']['User']['work']); ?></li>
                    <li class="list-group-item">好きな食べ物：<?php echo h($data[$i]['Meeting']['date_partner']['User']['like']); ?></li>
                    <li class="list-group-item">嫌いな食べ物：<?php echo h($data[$i]['Meeting']['date_partner']['User']['dislike']); ?></li>
                    <li class="list-group-item">好きな飲み物：<?php echo h($data[$i]['Meeting']['date_partner']['User']['drink']); ?></li>
                  </ul>
                 <!-- /プロフィール -->                    
              </div> <!-- /col-sm-6 --> 

              <div class="col-sm-6"><!-- col-sm-6 --> 
                <!-- 待ち合わせ -->
                <div class="panel-heading">
                  <h4>待ち合わせ</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">日付：<?php echo h($data[$i]['Meeting']['date']); ?></li>
                    <li class="list-group-item">時間：<?php echo h($data[$i]['Meeting']['time']); ?></li>
                    <li class="list-group-item">場所：<?php echo h($data[$i]['Meeting']['meetingspot']); ?></li>     
                  </ul>
                 <!-- /待ち合わせ -->

                 <!-- お店 -->
                <div class="panel-heading">
                  <h4>お店</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">店名：<?php echo h($data[$i]['Bar']['name']); ?></li>
                    <li class="list-group-item">電話番号：<?php echo h($data[$i]['Bar']['telnumber']); ?></li>
                    <li class="list-group-item">住所：<?php echo h($data[$i]['Bar']['location']); ?></li>     
                  </ul>
                 <!-- /お店 -->

                  <div class="col-sm-6 col-sm-offset-6"><!-- col-sm-4 --> 
                    <span class="input-group-btn"><a href="<?php echo $this->Html->url("/Meetings/acceptance/".$data[$i]['Meeting']['id']); ?>" class="pull-right"><button class="btn btn-lg btn-info" type="button"><?php echo h($data[$i]['Meeting']['resultText']); ?></button></a></span>
                  </div><!-- /col-sm-4 -->

               </div><!-- /col-sm-6 -->

            </div><!-- /row1 --> 

          </div> <!-- /col-sm-8 --> 

        </div><!-- col-sm-12 -->

      </div><!-- row3 --> 
<?php } ?>
    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
</div><!-- /row -->
 <!-- content --> 