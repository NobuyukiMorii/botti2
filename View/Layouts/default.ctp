<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>ガチャ恋</title>

    <?=$this->Html->css('bootstrap.css')?>
    <?=$this->Html->css('style.css')?>
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		?>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $this->Html->url('/meetings/roulette'); ?>">ガチャする</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo $this->Html->url('/meetings/list'); ?>">デートの約束</a></li>
            <li><a href="<?php echo $this->Html->url("/users/profile/"); ?>">プロフィール編集</a></li><!--本当はここにidの引数を明示的に持たせる必要がある-->
            <li><a href="<?php echo $this->Html->url('/bars/admin_list'); ?>">お店一覧</a></li>
            <li><a href="<?php echo $this->Html->url('/users/logout'); ?>">ログアウト</a></li>
            <li><a href="#contact">利用規約</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

			<?php echo $this->fetch('content'); ?>

    </div><!-- /.container -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
