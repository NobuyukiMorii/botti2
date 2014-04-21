<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $loginUser['nickname'] ?>さん、ガチャしようよ！<br />
                <small>デート相手とお店をがちゃしよう！</small>
            </h1>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-6 col-md-6 portfolio-item">
            <div class="col-lg-6 col-md-6 portfolio-item">
                <h3><a href="#project-two"><?php echo h($randomUser['User']['nickname']); ?></a></h3>
                <a href="#project-one">
                    <img src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>" width="200px">
                </a>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <dl class="text-left">
                    <dt>年齢</dt>
                        <dd><?php echo h($randomUser['User']['age']); ?></dd>
                    <dt>性別</dt>
                        <dd><?php echo h($randomUser['User']['genderText']); ?></dd>
                    <dt>職業</dt>
                        <dd><?php echo h($randomUser['User']['workText']);?></dd>
                    <dt>都合のいい曜日</dt>
                        <dd><?php echo h($randomUser['User']['kibouyoubiText']);?></dd>
                    <dt>希望待ち合わせ時間</dt>
                        <dd><?php echo h($randomUser['User']['kibouzikan']);?></dd>
                    <dt>行きやすい駅</dt>
                        <dd><?php echo h($randomUser['User']['kiboueki']);?></dd>
                    <dt>メッセージ</dt>
                        <dd><?php echo h($randomUser['User']['message']);?></dd>
                </dl>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 portfolio-item">
            <div class="col-lg-6 col-md-6 portfolio-item">
                <h3><a href="#project-two"><?php echo h($randomBar['Bar']['name']); ?></a></h3>
                <a href="<?php echo h($randomBar['Bar']['url']) ?>">
                    <img  src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>" width="200px">
                </a>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
            <dl  class="text-left">
                <dt>住所</dt>
                    <dd><?php echo h($randomBar['Bar']['location']);?></dd>
                <dt>電話番号</dt>
                    <dd><?php echo h($randomBar['Bar']['telnumber']); ?></dd>
                <dt>最寄駅</dt>
                    <dd><?php echo h($randomBar['Bar']['stationText']); ?></dd>
                <dt>最寄出口</dt>
                    <dd><?php echo h($randomBar['Bar']['gate']);?></dd>
                <dt>値段</dt>
                    <dd><?php echo h($randomBar['Bar']['price']); ?></dd>
                <dt>紹介</dt>
                    <dd><?php echo h($randomBar['Bar']['description']); ?></dd>

            </dl>
            </div>
        </div>

    </div>

</div>
<!-- /.container -->

<a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="btn btn btn-primary"><span class="glyphiconglyphicon-home"></span>ガチャする<a>
<a href="<?php echo $this->Html->url('/meetings/detail'); ?>" class="btn btn btn-primary"><span class="glyphiconglyphicon-home"></span>デートに誘う<a>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">2 Col Portfolio
                    <small>Showcase Your Work Two Columns at a Time</small>
                </h1>
            </div>

        </div>

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
                <p class="text-left">年齢</p>
                <?php echo h($randomUser['User']['age']); ?>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">住所</p>
                <?php echo h($randomBar['Bar']['location']);?>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">性別</p>
                <?php echo h($randomUser['User']['genderText']); ?>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">電話番号</p>
                <?php echo h($randomBar['Bar']['telnumber']); ?>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">職業</p>
                <?php echo h($randomUser['User']['workText']);?>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">最寄駅</p>
                <?php echo h($randomBar['Bar']['stationText']); ?>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">都合のいい曜日</p>
                <?php echo h($randomUser['User']['kibouyoubiText']);?>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">最寄出口</p>
                <?php echo h($randomBar['Bar']['gate']);?>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">都合のいい待ち合わせ時間</p>
                <?php echo h($randomUser['User']['kibouzikan']);?>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">料金</p>
                <?php echo h($randomBar['Bar']['price']); ?>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">行きやすい駅</p>
                <?php echo h($randomUser['User']['kiboueki']);?>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">メッセージ</p>
                <?php echo h($randomUser['User']['message']);?>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item">
                <p class="text-left">紹介</p>
                <?php echo h($randomBar['Bar']['description']); ?>
            </div>

        </div>

        <hr>

        <div class="row text-center">

            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>

        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->


