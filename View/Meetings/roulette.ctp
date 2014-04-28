<?php echo $this->Html->script(array('jquery-1.10.2.js', 'jquery-ui-1.10.4.custom','jquery.ui.datepicker-ja'), array('inline'=>false)); ?>
<?php echo $this->Html->css(array('jquery-ui-1.10.4.custom'), array('inline'=>false)); ?>

    <!-- row１ここから -->
    <div class="row">
      
      <div class="col-lg-5 col-md-5 portfolio-item" >
           
        <button type="button" class="btn btn-info btn-block">誰と</button>

      </div>

      <div class="col-lg-2 col-md-2 portfolio-item" >

        <h1><?php echo $total_much_point ;?>％</h1>

      </div>

      <div class="col-lg-5 col-md-5 portfolio-item" >

        <button type="button" class="btn btn-info btn-block">誰が</button>

      </div>

    </div>
    <!-- row１ここまで -->

    <!-- row２ここから -->
    <div class="row" >

      <!-- デート相手 -->
      <div class="col-lg-5 col-md-5 portfolio-item" style="border-right:solid 1px;;border-left:solid 1px;" >
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
            <dt>好きなジャンル</dt>
              <dd><?php echo $randomUser['User']['genreText']; ?></dd>
          </dl>

        </div>
        <!-- デート相手詳細１ -->
      </div>
      <!-- デート相手ここまで -->

      <!-- ガチャボタンここから -->
      <div class="col-lg-2 col-md-2 portfolio-item" >

            <div class="img-question">
            <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">
            <?php echo $this->Html->image('heart.jpeg', array('alt' => 'サンプル画像','width'=>'200','height'=>'200')); ?>
            </a>
            </div>

      </div>
      <!-- ガチャボタンここまで -->

      <!-- デート場所 -->
      <div class="col-lg-5 col-md-5 portfolio-item" style="border-right:solid 1px;;border-left:solid 1px; ">
      <!-- 自分写真 -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

          <a href="<?php echo $randomBar['Bar']['url']; ?>">
            <p class="trimming2">
             <img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2User/".$anata['User']['id']); ?>" alt="<?php echo h($anata['User']['nickname']); ?>" >
            </p>
          </a>

        </div>
        <!-- 自分写真ここまで -->
        <!-- 自分詳細 -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

          <dl class="text-left">
            <dt>ニックネーム<dt>
              <dd><?php echo $anata['User']['nickname']; ?>さん</dd>
            <dt>年齢</dt>
              <dd><?php echo $anata['User']['age']; ?>才</dd>
            <dt>職業</dt>
              <dd><?php echo $anata['User']['workText']; ?></dd>
            <dt>デートしやすい駅</dt>
              <dd><?php echo $anata['User']['kibouekiText']; ?></dd>
            <dt>デートしやすい曜日</dt>
              <dd><?php echo $anata['User']['kibouyoubiText']; ?></dd>
            <dt>待ち合わせやすい時間</dt>
              <dd><?php echo $anata['User']['kibouzikan']; ?></dd>
            <dt>好きなジャンル</dt>
              <dd><?php echo $anata['User']['genreText']; ?></dd>
          </dl>

        </div>
        <!-- 自分詳細 -->

    </div>
    <!-- row２ここまで -->

    <!-- row３ここから -->
    <div class="row">
    <!-- デート相手詳細２ここから -->    
      <div class="col-lg-5 col-md-5 portfolio-item" style="height:100px;">

          <dl class="text-left">
            <dt>メッセージ</dt>
              <dd><?php echo $randomUser['User']['message']; ?></dd>
          </dl>           


      </div>
      <!-- デート相手詳細２ここまで --> 
      <!-- デート相手場場所２ここから --> 
      <div class="col-lg-5 col-md-5 col-md-offset-2 portfolio-item" style="height:100px;">

          <dl class="text-left">
            <dt>ご紹介</dt>
              <dd><?php echo $randomBar['Bar']['description']; ?></dd>
          </dl>

      </div>
      <!-- デート相手場場所２ここまで -->
    </div>
    <!-- row３ここまで -->

    <!-- row４ここから -->
    <div class="row">
      
      <div class="col-lg-5 col-md-5 portfolio-item" >
           
        

      </div>

      <div class="col-lg-2 col-md-2 portfolio-item" >


      </div>

      <div class="col-lg-5 col-md-5 portfolio-item" >
           
        

      </div>

    </div>
    <!-- row４ここまで -->

    <!-- row５ここから -->
    <div class="row">
      
      <div class="col-lg-5 col-md-5 portfolio-item" >
           
        <button type="button" class="btn btn-info btn-block">デートのお店</button>

      </div>

      <div class="col-lg-2 col-md-2 portfolio-item" >

        

      </div>

      <div class="col-lg-5 col-md-5 portfolio-item" >

        <button type="button" class="btn btn-info btn-block">待ち合わせ</button>

      </div>

    </div>
    <!-- row５ここまで -->

    <!-- row６ここから -->
    <div class="row" >

      <!-- デート相手 -->
      <div class="col-lg-5 col-md-5 portfolio-item" >
        <!-- デート相手写真 -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

          <a href="<?php echo $randomBar['Bar']['url']; ?>">
            <p class="trimming2">
                <p class="trimming2">
                  <img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>" alt="<?php echo h($randomBar['Bar']['name']); ?>" >
            </p>
          </a>

        </div>
        <!-- デート相手写真ここまで -->
        <!-- デート相手詳細１ -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

              <dl class="text-left">
                <dt>店名</dt>
                  <dd><a href="<?php echo $randomBar['Bar']['url']; ?>"><?php echo $randomBar['Bar']['name']; ?></a></dd>
                <dt>ジャンル</dt>
                  <dd><?php echo $randomBar['Bar']['genreText']; ?></dd>
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
        <!-- デート相手詳細１ -->
      </div>
      <!-- デート相手ここまで -->

      <!-- ガチャボタンここから -->
      <div class="col-lg-2 col-md-2 portfolio-item" >


      </div>
      <!-- ガチャボタンここまで -->

      <!-- デート場所 -->
      <div class="col-lg-5 col-md-5 portfolio-item" >
      <!-- 自分写真 -->
        <div class="col-lg-6 col-md-6 portfolio-item" >



        </div>
        <!-- 自分写真ここまで -->
        <!-- 自分詳細 -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

          <dl class="text-left">
            <dt>ニックネーム<dt>
              <dd><?php echo $anata['User']['nickname']; ?>さん</dd>
            <dt>年齢</dt>
              <dd><?php echo $anata['User']['age']; ?>才</dd>
            <dt>職業</dt>
              <dd><?php echo $anata['User']['workText']; ?></dd>
            <dt>デートしやすい駅</dt>
              <dd><?php echo $anata['User']['kibouekiText']; ?></dd>
            <dt>デートしやすい曜日</dt>
              <dd><?php echo $anata['User']['kibouyoubiText']; ?></dd>
            <dt>待ち合わせやすい時間</dt>
              <dd><?php echo $anata['User']['kibouzikan']; ?></dd>
          </dl>

        </div>
        <!-- 自分詳細 -->

    </div>
    <!-- row６ここまで -->

    <!-- row７ここから -->
    <div class="row">
    <!-- デート相手詳細２ここから -->    
      <div class="col-lg-5 col-md-5 portfolio-item" style="height:100px";>

          <dl class="text-left">
            <dt>紹介文</dt>
              <dd><?php echo $randomBar['Bar']['description']; ?></dd>
          </dl>           


      </div>

      <div class="col-lg-2 col-md-2 portfolio-item" style="height:100px";>



      </div>

      <div class="col-lg-5 col-md-5 portfolio-item" style="height:100px";>



      </div>
      <!-- デート相手場場所２ここまで -->
    </div>
    <!-- row７ここまで -->




    <div class="row">

        <?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'confirm', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>


        <div id="formBd"></div>
        <?php echo $this->Datepicker->datepicker('Meeting.date', array(
          'type' => 'text',
          'default' => date('Y/m/d', strtotime($NextWeekDay)),
          'empty' => true,
          'maxYear' => date('Y'),
          'inline' => true
          ));
        ?>

        <?
        echo $this->form->input('Meeting.time', array(
          'label' => __('time', true),
          'default' => date('H:i:s', strtotime($randomUser['User']['kibouzikan'])),
          'timeFormat' => '24',
          'dateFormat' => 'H:i:s',
          'empty' => true,
          'separator' => '/',
        ));
        ?>

      <?php echo $this->Form->radio('Meeting.meetingspot', array("改札前" => $randomBar['Bar']['stationText'].$randomBar['Bar']['gate'].'改札前', "店内" => $randomBar['Bar']['name'].'店内'), array('legend' => '待ち合わせ場所','value' => '1'), array('class' => 'form-control','required' => false));?>

      <?php echo $this->Form->submit('デートに誘う', array('class' => 'btn btn-primary'));?>

      <?php echo $this->Form->end();?>

    </div>
</div>
