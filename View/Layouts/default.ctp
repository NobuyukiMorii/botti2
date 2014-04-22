


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Justified Nav Template for Bootstrap</title>

    <?php
      echo $this->fetch('meta');
      echo $this->fetch('script');
    ?>

    <!-- Bootstrap core CSS -->
    <?=$this->Html->css('bootstrap.css')?>

    <!-- Custom styles for this template -->
    <?=$this->Html->css('justified-nav.css')?>

    <!-- Original for this template -->
    <?=$this->Html->css('style.css')?>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container"><!-- container -->

      <div class="masthead">
        <h3 class="text-muted">ガチャ恋</h3>
        <ul class="nav nav-justified">
          <li class="active"><a href="#">がちゃ恋とは？</a></li>
          <li><a href="<?php echo $this->Html->url('/meetings/list'); ?>">ご利用に当たって</a></li>
          <li><a href="<?php echo $this->Html->url('/meetings/list'); ?>">デートの予定</a></li>
          <li><a href="<?php echo $this->Html->url("/users/profile/"); ?>">プロフィール編集</a></li>
          <li><a href="<?php echo $this->Html->url('/bars/admin_list'); ?>">居酒屋一覧</a></li>
          <li><a href="<?php echo $this->Html->url('/users/logout'); ?>">ログアウト</a></li>

        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <?php echo $this->fetch('content'); ?>
      </div>
      <!-- /Jumbotron -->


      <!-- Site footer -->
      <div class="footer">
        <p>&copy; Company 2014</p>
      </div>
      <!-- /Site footer -->

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <?=$this->Html->script('jquery-1.10.2.js')?>
    <?=$this->Html->script('bootstrap.js')?>
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
