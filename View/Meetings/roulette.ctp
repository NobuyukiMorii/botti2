<!-- containerここから -->
<div class="container" >

    <!-- row１ここから -->
    <div class="row">
      
      <div class="col-lg-5 col-md-5 portfolio-item" >
           
        <button type="button" class="btn btn-info btn-block">デート相手</button>

      </div>

      <div class="col-lg-5 col-md-5 col-md-offset-2 portfolio-item" >

        <button type="button" class="btn btn-info btn-block">デート場所</button>

      </div>

    </div>
    <!-- row１ここまで -->

    <!-- row２ここから -->
    <div class="row" >

      <!-- デート相手 -->
      <div class="col-lg-5 col-md-5 portfolio-item" >
        <!-- デート相手写真 -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

          <a href="<?php echo $randomBar['Bar']['url']; ?>">
            <p class="trimming2">
              <img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>" alt="<?php echo h($randomUser['User']['nickname']); ?>" >
            </p>
          </a>

        </div>
        <!-- デート相手写真ここまで -->
        <!-- デート相手詳細１ -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

          <dl class="text-left">
            <dt>ニックネーム<dt>
              <dd><?php echo $randomUser['User']['nickname']; ?>さん</dd>
            <dt>年齢</dt>
              <dd><?php echo $randomUser['User']['age']; ?>才</dd>
            <dt>職業</dt>
              <dd><?php echo $randomUser['User']['workText']; ?></dd>
            <dt>デートしやすい駅</dt>
              <dd><?php echo $randomUser['User']['kibouekiText']; ?></dd>
            <dt>デートしやすい曜日</dt>
              <dd><?php echo $randomUser['User']['kibouyoubiText']; ?></dd>
            <dt>待ち合わせやすい時間</dt>
              <dd><?php echo $randomUser['User']['kibouzikan']; ?></dd>
          </dl>

        </div>
        <!-- デート相手詳細１ -->
      </div>
      <!-- デート相手ここまで -->

      <!-- ガチャボタンここから -->
      <div class="col-lg-2 col-md-2 portfolio-item" >

            <div class="img-question">
            <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">
            <?php echo $this->Html->image('gacha.png', array('alt' => 'サンプル画像','width'=>'100','height'=>'100')); ?>
            </a>
            </div>

      </div>
      <!-- ガチャボタンここまで -->

      <!-- デート場所 -->
      <div class="col-lg-5 col-md-5 portfolio-item" >
        <!--デート場所写真 -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

          <a href="#project-two">
            <p class="trimming2">
              <img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>" alt="<?php echo h($randomBar['Bar']['name']); ?>" >
            </p>
          </a>

        </div>
        <!-- デート場所写真ここまで -->
        <!-- デート場所詳細１ -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

          <dl class="text-left">
            <dt>店名</dt>
              <dd><a href="<?php echo $randomBar['Bar']['url']; ?>"><?php echo $randomBar['Bar']['name']; ?></a></dd>
            <dt>料金</dt>
              <dd><?php echo $randomBar['Bar']['price']; ?></dd>
            <dt>電話番号</dt>
              <dd><?php echo $randomBar['Bar']['telnumber']; ?></dd>
            <dt>最寄駅</dt>
              <dd><?php echo $randomBar['Bar']['stationText']; ?></dd>
            <dt>最寄出口</dt>
              <dd><?php echo $randomBar['Bar']['gate']; ?></dd>
          </dl>

        </div>
        <!-- デート場所詳細１ -->
      </div>
      <!-- デート場所ここまで -->

    </div>
    <!-- row２ここまで -->

    <!-- row３ここから -->
    <div class="row">
    <!-- デート相手詳細２ここから -->    
      <div class="col-lg-5 col-md-5 portfolio-item" >

          <dl class="text-left">
            <dt>メッセージ</dt>
              <dd><?php echo $randomUser['User']['message']; ?></dd>
          </dl>           


      </div>
      <!-- デート相手詳細２ここまで --> 
      <!-- デート相手場場所２ここから --> 
      <div class="col-lg-5 col-md-5 col-md-offset-2 portfolio-item" >

          <dl class="text-left">
            <dt>ご紹介</dt>
              <dd><?php echo $randomBar['Bar']['description']; ?></dd>
          </dl>

      </div>
      <!-- デート相手場場所２ここまで -->
    </div>
    <!-- row３ここまで -->


</div>

<div class="container" >

    <div class="row">

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
                                if($hour==7){
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


        <?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'confirm', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>
        <fieldset>

        <div class="form-group">
        <?php echo $this->Form->input('Meeting.date', array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
        <?php
        echo $this->Form->input('Meeting.time', array('class' => 'form-control'));
        ?>
        </div>

        <div class="form-group">
            <select name="data[Meeting][meetingspot]" id="Meetingspot" class="form-control">
                <option value="" selected><?php echo h($randomBar['Bar']['stationText']); ?>駅の近くの待ち合わせ場所をお選びください。</option>
                <option value="<?php echo h($randomBar['Bar']['stationText']); ?>駅<?php echo h($randomBar['Bar']['gate']); ?>の改札前"><?php echo h($randomBar['Bar']['stationText']); ?>駅の<?php echo h($randomBar['Bar']['gate']); ?>の改札前</option>
                <option value="<?php echo h($randomBar['Bar']['name']); ?>のお店の中"><?php echo h($randomBar['Bar']['name']); ?>のお店の中</option>
            </select>
        </div>


        <?php echo $this->Form->submit('本当にデートに誘う', array('class' => 'btn btn-primary'));?>

        </fieldset>

        <?php echo $this->Form->end();?>

        <?php echo $NextWeekDay ;?>

    </div>
</div>








