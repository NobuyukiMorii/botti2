      <?php echo $this->Form->create
            (
            'User',
            array(
                  'type' => 'post', 
                  'action'=>'my_bar', 
                  'role' => 'form',
                  'class' => 'form-horizontal text-left'
                  )
            );
      ?>

      <?php echo $this->Form->hidden
            (
            'User.group_id', 
             array(
                  'value'=>'1'
                  )
            );
      ?>

        <div class="row">
            <div class ="col-sm-11">
              <div class="pagination pagination-large">
                  <ul class="pagination">
                    <?php
                      echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                      echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                      echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                    ?>
                  </ul>
              </div>
            </div>
        </div>

              <div class="panel panel-default"><!-- panel panel-default --> 
                <div class="panel-body"><!-- panel-body --> 

            <?php for ($i = 0; $i < count($data); $i++) { ?>


                    <div class="col-sm-6"><!-- col-sm-12 -->

                      <div class="col-sm-4"><!-- col-sm-4 --> 
                         <!-- PartnerImage -->
                        <div class="panel-thumbnail">
                          <img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$data[$i]['Image'][0]['dir']."/thumb250_".$data[$i]['Image'][0]['photo_bar']);?>" class="img-responsive">
                        </div>
                        <?php echo $this->Form->radio('User.bar_id',
                              array(
                                    $data[$i]['Bar']['id'] => "", 
                              ), 
                              array(
                                    'legend' => false,
                                    'id' => "UserBarId"
                              ),
                              array(
                                    'class' => 'form-group',
                                    'required' => false
                              )
                        )
                        ;?>
                        <!-- /PartnerImage -->          
                      </div> <!-- /col-sm-4 --> 
                      <div class="col-sm-8"><!-- col-sm-8 --> 
                            <!-- プロフィール -->
                              <ul class="list-group">
                                <li class="list-group-item">店名：<?php echo h($data[$i]['Bar']['name']); ?></li>
                                <li class="list-group-item">ジャンル：<?php echo h($data[$i]['Bar']['genreText']); ?></li>
                                <li class="list-group-item">料金：平均<?php echo h($data[$i]['Bar']['price']); ?>円</li>
                                <li class="list-group-item">最寄駅：<?php echo h($data[$i]['Bar']['station']); ?></li>
                                <li class="list-group-item">駅から：徒歩<?php echo h($data[$i]['Bar']['walk_time']); ?>分</li>
                              </ul>
                             <!-- /プロフィール -->

                      </div> <!-- /col-sm-8 --> 

                    </div><!-- col-sm-12 -->

            <?php } ?>

                </div><!-- /panel-body -->
              </div><!-- panel panel-default -->

            <div class ="col-sm-1 col-sm-offset-11">
              <div class="form-group">
                    <div>
                          <?php echo $this->Form->submit('変更する', array('class' => 'btn btn-default'));?>
                    </div>
              </div>
            </div>

      <?php echo $this->Form->end(); ?>