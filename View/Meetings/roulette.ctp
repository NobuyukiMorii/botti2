<!--             <h1 class="page-header"><?php echo $loginUser['nickname'] ?>さん、ガチャしようよ！<br /> -->
<div class="container" >

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <a href="#project-one">
                    <img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>" width="200px">
                </a>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <a href="#project-two">
                    <img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>" width="200px">
                </a>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <h3 class="text-left"><a href="#project-three"><?php echo h($randomUser['User']['nickname']); ?></a>
                </h3>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <h3 class="text-left"><a href="#project-four"><?php echo h($randomBar['Bar']['name']); ?></a>
                </h3>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">年齢：<?php echo h($randomUser['User']['age']); ?></p>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">住所：<br /><?php echo h($randomBar['Bar']['location']);?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">性別：<?php echo h($randomUser['User']['genderText']); ?></p>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">電話番号：<?php echo h($randomBar['Bar']['telnumber']); ?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">職業：<?php echo h($randomUser['User']['workText']);?></p>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">最寄駅：<?php echo h($randomBar['Bar']['stationText']); ?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">都合のいい曜日：<?php echo h($randomUser['User']['kibouyoubiText']);?></p> 
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">最寄出口：<?php echo h($randomBar['Bar']['gate']);?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">都合のいい待ち合わせ時間：<?php echo h($randomUser['User']['kibouzikan']);?></p>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">料金：<?php echo h($randomBar['Bar']['price']); ?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">行きやすい駅：<?php echo h($randomUser['User']['kibouekiText']);?></p>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">ぐるなびページ：<?php echo h($randomBar['Bar']['url']); ?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">メッセージ：<?php echo h($randomUser['User']['message']);?></p>
                
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">紹介：<?php echo h($randomBar['Bar']['description']); ?></p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">行きやすい駅：<?php echo h($randomUser['User']['kiboueki']);?></p>
                
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">ぐるなびページ：<?php echo h($randomBar['Bar']['url']); ?></p>
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


