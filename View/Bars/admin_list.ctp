<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=false', false); ?>
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
            <div class="col-sm-12"><!-- row5 --> 
                <h3><?php echo h($data[$i]['Bar']['name']); ?>（＠<?php echo h($data[$i]['Bar']['station']); ?>駅）</h3>
            </div>
          <div class="col-sm-4"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$data[$i]['Image'][0]['dir']."/thumb400_".$data[$i]['Image'][0]['photo_bar']);?>" class="img-responsive">
            </div>
            <!-- /PartnerImage -->          
          </div> <!-- /col-sm-4 --> 
          <div class="col-sm-8"><!-- col-sm-8 --> 
            <div class="row"><!-- row1 --> 

              <div class="col-sm-6"><!-- col-sm-6 -->
                <!-- 店舗情報 -->
                <div class="panel-heading">
                  <h4>ご紹介</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item" style="height :340px;">店名：<?php echo h($data[$i]['Bar']['description']); ?></li>
                  </ul>
                 <!-- /店舗情報 -->         
              </div> <!-- /col-sm-6 --> 

              <div class="col-sm-6"><!-- col-sm-6 --> 

                <!-- 店舗情報 -->
                <div class="panel-heading">
                  <h4>店舗情報</h4>
                </div>               
                  <ul class="list-group">
                    <li class="list-group-item">店名：<?php echo h($data[$i]['Bar']['name']); ?></li>
                    <li class="list-group-item">ジャンル：<?php echo h($data[$i]['Bar']['genreText']); ?></li>
                    <li class="list-group-item">電話番号：<?php echo h($data[$i]['Bar']['telnumber']); ?></li>
                    <li class="list-group-item">料金：平均<?php echo h($data[$i]['Bar']['price']); ?>円</li>
                    <li class="list-group-item">最寄口：<?php echo h($data[$i]['Bar']['gate']); ?></li>
                    <li class="list-group-item">駅から：徒歩<?php echo h($data[$i]['Bar']['walk_time']); ?>分</li>
                    <li class="list-group-item">営業時間：<?php echo h(date("H時i分", strtotime($data[$i]['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($data[$i]['Bar']['close_time']))); ?><br />（LO：<?php echo h(date("H時i分", strtotime($data[$i]['Bar']['last_order_time']))); ?>）</li>
                  </ul>
                 <!-- /店舗情報 --> 

                  <div class="col-sm-6 col-sm-offset-6"><!-- col-sm-4 --> 
                    <span class="input-group-btn"><a href="<?php echo $this->Html->url("/Bars/acceptance/".$data[$i]['Bar']['id']); ?>" class="pull-right"><button class="btn btn-lg btn-info" type="button">戻る</button></a></span>
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