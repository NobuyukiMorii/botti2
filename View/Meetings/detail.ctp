<div class="container" >

    <div class="row">

        <h1>デートの待ち合わせ</h1>

        <form action="/gachakoi/meetings/confirm" enctype="multipart/form-data" role="form" id="MeetingConfirmForm" method="post" accept-charset="utf-8">
            <div style="display:none;">
                <input type="hidden" name="_method" value="POST"/>
            </div>

            <fieldset>

            <div class="form-group">
                <div class="input date">
                <label for="MeetingDateMonth">日付</label>

                    <select class="span2" name="data[Meeting][date][year]" class="form-control" id="MeetingDateYear">
                        <?php for($year=date('Y'); $year<=date("Y",strtotime("+1 year")); $year++) {
                            print('<option value="'.$year.'">'.$year.'</option>');
                        } ?>
                     </select>

                    <select class="span2" name="data[Meeting][date][month]" class="form-control" id="MeetingDateMonth">
                        <?php 
                            $this_month=date('n');
                            for($month=1; $month<13; $month++){
                            echo "<option value=\"$month\"";
                            if($month==$this_month){
                            echo "selected=selected";  
                            }
                            echo ">$month</option>";                  
                            }
                        ?>     
                    </select>

                    <select class="span2" name="data[Meeting][date][day]" class="form-control" id="MeetingDateDay">
                        <?php 
                            $today=date('d');
                            for($day=1; $day<32; $day++){
                            echo "<option value=\"$day\"";
                            if($day==$today){
                            echo "selected=selected";  
                            }
                            echo ">$day</option>";
                           }
                       ?>      
                    </select>
                </div>
            </div>

        <div class="form-group">
            <div class="input time">

                <label for="MeetingTimeHour">時間</label>

                <select class="span2" name="data[User][kibouzikan][meridian]" class="form-control input-sm" id="UserKibouzikanMeridian">
                    <option value="am">午前</option>
                    <option value="pm" selected="selected">午後</option>
                </select>

                <select class="span2" name="data[Meeting][time][hour]" class="form-control" id="MeetingTimeHour">
                    <?php 
                        $selected_hour=h($randomUser['User']['kibouzikan']['hour']);

                        for($hour=1; $hour<13; $hour++){
                            echo "<option value=\"$hour\"";
                                if($hour==$selected_hour){
                                    echo "selected=selected";  
                                }
                            echo ">$hour</option>";
                        }
                    ?>
                </select>

                <select class="span2" name="data[Meeting][time][min]" class="form-control" id="MeetingTimeMin">
                    <option value="0" selected="selected">0</option>
                    <option value="30">30</option>
                </select>

            </div>
        </div>



        <!--     <div class="form-group">
            <?php echo $this->Form->input('Meeting.time', array('class' => 'form-control'));?>
            <?php echo $this->Form->error('Meeting.time', array('class' => "warning")); ?>
            </div> -->

        <div class="form-group">
            <div class="input time">
                <label for="Meetingspot">待ち合わせ場所</label>

                <select class="span6" name="data[Meeting][meetingspot]" id="Meetingspot" class="form-control">
                <option value="<?php echo h($randomBar['Bar']['stationText']); ?>駅<?php echo h($randomBar['Bar']['gate']); ?>の改札前" selected="selected"><?php echo h($randomBar['Bar']['stationText']); ?>駅の<?php echo h($randomBar['Bar']['gate']); ?>の改札前</option>
                <option value="<?php echo h($randomBar['Bar']['name']); ?>のお店の中"><?php echo h($randomBar['Bar']['name']); ?>のお店の中</option>
                </select>
                <?php echo $this->Form->error('Meeting.meetingspot', array('class' => "warning")); ?>
            </div>
        </div>

            <?php echo $this->Form->submit('本当にデートに誘う', array('class' => 'btn btn-primary'));?>

        </fieldset>
        <?php echo $this->Form->end();?>

        <dl align = center ;>
          <dt><?php echo h($randomUser['User']['nickname']); ?>さんは</dt>
          <dd><?php echo h($randomUser['User']['kibouyoubiText']);?>の<?php echo h($randomUser['User']['kibouzikan']);?>からが都合よくて、</dd>
        </dl>
        <dl align = center ;>
          <dt><?php echo h($randomBar['Bar']['name']); ?>の最寄り駅は、</dt>
          <dd><?php echo h($randomBar['Bar']['stationText']); ?>、最寄り口は<?php echo h($randomBar['Bar']['gate']); ?>だよ！</dd>
        </dl>

    </div>
</div>






