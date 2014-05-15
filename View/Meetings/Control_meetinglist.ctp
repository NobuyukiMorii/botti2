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

      <div class="row"><!-- row3 --> 

        <div class="col-sm-2"><!-- col-sm-6 -->

                 <!-- 待ち合わせ --> 
                  <ul class="list-group">
                    <li class="list-group-item"><?php echo h($data[$i]['Meeting']['date']); ?></li>
                    <li class="list-group-item"><?php echo h($data[$i]['Meeting']['time']); ?></li>
                    <li class="list-group-item"><?php echo h($data[$i]['Meeting']['meetingspot']); ?></li>     
                  </ul>
                 <!-- /待ち合わせ -->        

        </div><!-- col-sm-6 -->

        <div class="col-sm-2"><!-- col-sm-6 -->

                 <!-- 待ち合わせ --> 
                  <ul class="list-group">
                    <li class="list-group-item"><?php echo h($data[$i]['Meeting']['resultText']); ?></li>
                    <li class="list-group-item"><?php echo h($data[$i]['Meeting']['created']); ?></li>
                    <li class="list-group-item"><?php echo h($data[$i]['Meeting']['modified']); ?></li>     
                  </ul>
                 <!-- /待ち合わせ -->        

        </div><!-- col-sm-6 -->

          <div class="col-sm-2"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data[$i]['User']['Image'][0]['dir']."/thumb150_".$data[$i]['User']['Image'][0]['photo_user']);?>" class="img-responsive">
            </div>
            <!-- /PartnerImage -->          
          </div> <!-- /col-sm-4 --> 

          <div class="col-sm-2"><!-- col-sm-8 --> 

                 <!-- 誘った人 --> 
                  <ul class="list-group">
                    <li class="list-group-item"><?php echo h($data[$i]['User']['last_name']); ?><?php echo h($data[$i]['User']['first_name']); ?></li>
                    <li class="list-group-item"><?php echo h($data[$i]['User']['telnumber']); ?></li>
                    <li class="list-group-item"><?php echo h($data[$i]['User']['age']); ?></li>
                    <li class="list-group-item"><?php echo h($data[$i]['User']['birthday']); ?></li>     
                  </ul>
                 <!-- /誘った人 -->                                   


          </div> <!-- /col-sm-8 -->

          <div class="col-sm-2"><!-- col-sm-4 --> 
             <!-- PartnerImage -->
            <div class="panel-thumbnail">
              <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data[$i]['Meeting']['date_partner']['Image'][0]['dir']."/thumb150_".$data[$i]['Meeting']['date_partner']['Image'][0]['photo_user']);?>" class="img-responsive">
            </div>
            <!-- /PartnerImage -->          
          </div> <!-- /col-sm-4 --> 

          <div class="col-sm-2"><!-- col-sm-8 --> 

                 <!-- 誘った人 --> 
                  <ul class="list-group">
                    <li class="list-group-item"><?php echo h($data[$i]['Meeting']['date_partner']['User']['last_name']); ?><?php echo h($data[$i]['Meeting']['date_partner']['User']['first_name']); ?></li>
                    <li class="list-group-item"><?php echo h($data[$i]['Meeting']['date_partner']['User']['telnumber']); ?></li>
                    <li class="list-group-item"><?php echo h($data[$i]['Meeting']['date_partner']['User']['age']); ?></li>
                    <li class="list-group-item"><?php echo h($data[$i]['Meeting']['date_partner']['User']['birthday']); ?></li>     
                  </ul>
                 <!-- /誘った人 -->                                   


          </div> <!-- /col-sm-8 -->  

      </div><!-- row3 --> 
<?php } ?>

    </div><!-- /panel-body -->
  </div><!-- panel panel-default --> 
</div><!-- /row -->
 <!-- content --> 