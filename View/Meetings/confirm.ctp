<h1>リクエストを送信しました。</h1>
<h2><?php echo h($this->data["Meeting"]["date"] ["year"]); ?>年<?php echo h($this->data["Meeting"]["date"] ["month"]); ?>月<?php echo h($this->data["Meeting"]["date"] ["day"]); ?>日<?php echo h($this->data["Meeting"]["time"]["hour"]); ?>時<?php echo h($this->data["Meeting"]["time"]["min"]); ?>分に、<?php echo h($this->data["Meeting"]["meetingspot"]); ?>で待ち合わせです。</h2>

  <div class="container" >

    <div class="row">

      <div class="col-lg-4 col-md-4 portfolio-item" >

        <dl class="text-left">
          <dt>デート相手</dt>
            <dd>

              <a href="<?php echo $randomBar['Bar']['url']; ?>">
                <p class="trimming"><img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>" alt="<?php echo h($randomUser['User']['nickname']); ?>" ></p>
              </a>
            </dd>
            <dd>ニックネーム：<?php echo $randomUser['User']['nickname']; ?>さん</dd>
            <dd>年齢：<?php echo $randomUser['User']['age']; ?>才</dd>
            <dd>職業：<?php echo $randomUser['User']['workText']; ?></dd>
          </dl>

      </div>

      <div class="col-lg-4 col-md-4 portfolio-item" >

        <a href="#project-two">
          <p class="trimming"><img class="img-responsive" src="<?php echo $this->Html->url("/webroot/img/AndImg.jpg"); ?>" alt="AndImage" />
        </a>
  
      </div>

      <div class="col-lg-4 col-md-4 portfolio-item" >

        <dl class="text-left">
        <dt>デート場所</dt>
          <dd>
            <a href="#project-two">
              <p class="trimming"><img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>" alt="<?php echo h($randomBar['Bar']['name']); ?>" ></p>
            </a>
          </dd>
          <dd>店名：<a href="<?php echo $randomBar['Bar']['url']; ?>"><?php echo $randomBar['Bar']['name']; ?></a></dd>
          <dd>電話番号：<?php echo $randomBar['Bar']['telnumber']; ?></dd>
          <dd>住所：<br /><?php echo $randomBar['Bar']['location']; ?></dd>
        </dl>

      </div>

    </div>

  </div>

  <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="btn btn-primary"><span class="glyphiconglyphicon-home"></span>ガチャ画面に戻る<a>