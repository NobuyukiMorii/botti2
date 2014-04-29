<?php var_dump($data["Meeting"]["date"]) ;?><br />
<?php var_dump($data["Meeting"]["time"]) ;?><br />


<div class="container">

        <!-- START THE FEATURETTES -->

            <h2 class="featurette-heading"><?php echo $randomUser['User']['nickname']; ?>さんを
                <span class="text-muted">デートに誘いました。</span>
            </h2>

            <h3><?php echo $randomUser['User']['nickname']; ?>さんがOKするのをお待ち下さい。</h3>

            <h4 class="text-left">デート内容</h4>

            <p class="lead"><?php echo h($this->data["Meeting"]["date"] ["year"]); ?>年<?php echo h($this->data["Meeting"]["date"] ["month"]); ?>月<?php echo h($this->data["Meeting"]["date"] ["day"]); ?>日<?php echo h($this->data["Meeting"]["time"]["hour"]); ?>時<?php echo h($this->data["Meeting"]["time"]["min"]); ?>分に、<?php echo h($this->data["Meeting"]["meetingspot"]); ?>で待ち合わせです。</p>


        <!-- /END THE FEATURETTES -->

</div>


<!-- containerここから -->
<div class="container" >

    <!-- row１ここから -->
    <div class="row">
      
      <div class="col-lg-5 col-md-5 portfolio-item" >
           
        <button type="button" class="btn btn-info btn-block">デート相手</button>

      </div>

       <!-- &マークここから -->
<!--       <div class="col-lg-2 col-md-2 portfolio-item" >

        <a href="#project-two">
          <img class="img-question" src="<?php echo $this->Html->url("/webroot/img/AndImg.jpg"); ?>" alt="AndImage" />
        </a>
  
      </div> -->
      <!-- &マークここまで --> 

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
        <!-- デート相手詳細 -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

          <dl class="text-left">
            <dt>ニックネーム<dt>
              <dd><?php echo $randomUser['User']['nickname']; ?>さん</dd>
            <dt>年齢</dt>
              <dd><?php echo $randomUser['User']['age']; ?>才</dd>
            <dt>職業</dt>
              <dd><?php echo $randomUser['User']['workText']; ?></dd>
          </dl>

        </div>
        <!-- デート相手詳細 -->
      </div>
      <!-- デート相手ここまで -->

      <!-- デート場所 -->
      <div class="col-lg-5 col-md-5 col-md-offset-2 portfolio-item" >
        <!--デート場所写真 -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

          <a href="#project-two">
            <p class="trimming2">
              <img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>" alt="<?php echo h($randomBar['Bar']['name']); ?>" >
            </p>
          </a>

        </div>
        <!-- デート場所写真ここまで -->
        <!-- デート場所詳細 -->
        <div class="col-lg-6 col-md-6 portfolio-item" >

          <dl class="text-left">
            <dt>店名</dt>
              <dd><a href="<?php echo $randomBar['Bar']['url']; ?>"><?php echo $randomBar['Bar']['name']; ?></a></dd>
            <dt>電話番号</dt>
              <dd><?php echo $randomBar['Bar']['telnumber']; ?></dd>
            <dt>住所</dt>
              <dd><address><?php echo $randomBar['Bar']['location']; ?></address></dd>
          </dl>

        </div>
        <!-- デート場所詳細 -->
      </div>
      <!-- デート場所ここまで -->

    </div>
    <!-- row２ここまで -->

    <!-- row３ここから -->
    <div class="row">

      <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item" >
        <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="btn btn-primary"><span class="glyphiconglyphicon-home" ></span>ガチャ画面に戻る<a>
      </div>

    </div>
    <!-- row３ここまで -->

</div>