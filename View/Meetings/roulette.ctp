<!--             <h1 class="page-header"><?php echo $loginUser['nickname'] ?>さん、ガチャしようよ！<br /> -->
<div class="container" >

        <div class="row">

            <div class="col-lg-4 col-md-4 portfolio-item" style="border: 1px solid #009000">
                <a href="#project-one">
                    <p class="trimming"><img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>" alt="<?php echo h($randomUser['User']['nickname']); ?>" width="500" height="500"  class="img" ></p>
                </a>
            </div>
<!--             <p class="trimming"><img src="/image/user.jpg" alt="ユーザー名" width="100" height="80"  class="img"></p> -->

            <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item" style="border: 1px solid #009000">
                <a href="#project-two">
                    <p class="trimming"><img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>" alt="<?php echo h($randomBar['Bar']['name']); ?>" width="500" height="500"  class="img"></p>
                </a>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 portfolio-item">
                <h3 class="text-left"><a href="#project-three"><?php echo h($randomUser['User']['nickname']); ?></a>
                </h3>
            </div>

            <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item">
                <h3 class="text-left"><a href="#project-four"><?php echo h($randomBar['Bar']['name']); ?></a>
                </h3>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 portfolio-item">
                <p class="text-left">年齢：<?php echo h($randomUser['User']['age']); ?></p>
            </div>

            <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item">
                <p class="text-left">住所：<br /><?php echo h($randomBar['Bar']['location']);?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 portfolio-item">
                <p class="text-left">性別：<?php echo h($randomUser['User']['genderText']); ?></p>
            </div>

            <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item">
                <p class="text-left">電話番号：<?php echo h($randomBar['Bar']['telnumber']); ?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 portfolio-item">
                <p class="text-left">職業：<?php echo h($randomUser['User']['workText']);?></p>
            </div>

            <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item">
                <p class="text-left">最寄駅：<?php echo h($randomBar['Bar']['stationText']); ?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 portfolio-item">
                <p class="text-left">都合のいい曜日：<?php echo h($randomUser['User']['kibouyoubiText']);?></p> 
            </div>

            <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item">
                <p class="text-left">最寄出口：<?php echo h($randomBar['Bar']['gate']);?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 portfolio-item">
                <p class="text-left">都合のいい待ち合わせ時間：<?php echo h($randomUser['User']['kibouzikan']);?></p>
            </div>

            <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item">
                <p class="text-left">料金：<?php echo h($randomBar['Bar']['price']); ?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 portfolio-item">
                <p class="text-left">行きやすい駅：<?php echo h($randomUser['User']['kibouekiText']);?></p>
            </div>

            <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item">
                <p class="text-left">ジャンル：ジャンル</p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 portfolio-item">
                <p class="text-left">メッセージ：<?php echo h($randomUser['User']['message']);?></p>
                
            </div>

            <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item">
                <p class="text-left">紹介：<?php echo h($randomBar['Bar']['description']); ?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 portfolio-item">
                <p class="text-left">行きやすい駅：<?php echo h($randomUser['User']['kiboueki']);?></p>
                
            </div>

            <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item">
                <p class="text-left">ぐるなびページ：<a href="<?php echo h($randomBar['Bar']['url']); ?>"><?php echo h($randomBar['Bar']['url']); ?><a></p>
            </div>

        </div>

 </div>

<div class="container">

        <div class="row">

            <div class="col-lg-12">

                <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="btn btn btn-primary"><span class="glyphiconglyphicon-home"></span>ガチャする<a>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <a href="<?php echo $this->Html->url('/meetings/detail'); ?>" class="btn btn btn-primary"><span class="glyphiconglyphicon-home"></span>デートに誘う<a>
            </div>

        </div>

 </div>
    <!-- /.container -->


