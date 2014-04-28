<?php echo $this->Html->script(array('jquery-1.10.2.js', 'jquery-ui-1.10.4.custom','jquery.ui.datepicker-ja'), array('inline'=>false)); ?>
<?php echo $this->Html->css(array('jquery-ui-1.10.4.custom'), array('inline'=>false)); ?>


<div class="container">

    <div class="row" style="margin-top:50px;">

        <div class="col-md-6" >

            <div style="margin-top:-20px;">

                <a target="_blank" href="<?php echo $randomBar['Bar']['url']; ?>">
                    <h2 class="text-left"><?php echo h($randomBar['Bar']['name']); ?></h2>
                </a>

            </div>


            <p class="trimming2" style="margin-top:50px;">
            <a target="_blank" href="<?php echo $randomBar['Bar']['url']; ?>">
                <img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>" alt="<?php echo h($randomUser['User']['nickname']); ?>">
            </a>
            </p>


        </div>

        <div class="col-md-6" >

            <div class="text-left">

                <strong><?php echo $randomUser['User']['kibouekiText']; ?>駅</strong>を希望している<?php echo h($randomUser['User']['nickname']); ?>さんにぴったりなお店。<br />
                <?php echo h($randomUser['User']['nickname']); ?>さんは<?php echo h($randomUser['User']['genreText']); ?>が好きだし、絶対に喜ぶはず！<br />

            </div>

            <div class="text-left" style="margin-top:10px;">

            <dl class="text-left">
                <dt>最寄駅</dt>
                  <dd><?php echo $randomBar['Bar']['stationText']; ?></dd>
                <dt>アクセス</dt>
                  <dd><?php echo $randomBar['Bar']['gate']; ?>から徒歩x分</dd>
            </dl>

            </div>

            <div class="text-left" style="margin-top:20px;">

                <form class ="well my-inline form-inline">


                    <div>
                        <?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'confirm', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>
                        <p>待ち合わせ日時</p>
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

                          <div class = "form-group">
                            <?
                            echo $this->form->input('Meeting.time', array(
                              'label' => false,
                              'default' => date('H:i:s', strtotime($randomUser['User']['kibouzikan'])),
                              'timeFormat' => '24',
                              'dateFormat' => 'H:i:s',
                              'empty' => true,
                              'separator' => '/',
                              ));
                              ?>
                          </div>

                    </div>


                    <div>
                        <h4 class="text-left text-info"; style="margin-top:10px;">
                        <?php echo $randomUser['User']['nickname']; ?>さんは<?php echo $randomUser['User']['kibouyoubiText']; ?>の<?php echo $randomUser['User']['kibouzikan']; ?>をご希望です。
                        </h4>
                    </div>

                    <div class = "form-group" style="margin-top : 30px">
                      <p>待ち合わせ場所</p>
                        <div class="radio">
                          <?php echo $this->Form->radio('Meeting.meetingspot', array("改札前" => $randomBar['Bar']['stationText'].'駅'.$randomBar['Bar']['gate'].'改札前', "店内" =>'店内'), array('legend' => false,'separator' => "<br />", 'value' => '1'), array('class' => 'form-group','required' => false));?>
                        </div>
                    </div>

              

                  <div class="text-right" style="margin-top : 0px">
                      <?php echo $this->Form->submit('デートに誘う', array('class' => 'btn btn-primary'));?>
                  </div>

              </form>

              <?php echo $this->Form->end();?>
              
          </div>

      </div>

  </div>

</div>
    <!-- /.container -->