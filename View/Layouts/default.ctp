<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>DateBook</title>

    <?php
      echo $this->fetch('meta');
      echo $this->fetch('script');
      echo $this->fetch('css');
    ?>

    <!-- Bootstrap core CSS -->
    <?=$this->Html->css('bootstrap.css')?>

    <!-- Custom styles for this template -->
    <?=$this->Html->css('justified-nav.css')?>

    <!-- Original for this template -->
    <?=$this->Html->css('style.css')?>

    <!-- Original for this template -->
    <?=$this->Html->css('one-page-wonder.css')?>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php var_dump($LoginUserId) ;?>
    <?php var_dump($LoginUserNickname) ;?>
    <?php var_dump($group_id) ;?>
    <div class="container"><!-- container -->
      <div style="margin : 30px 0px 20px 0px">
        <h1><a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">DateBook</a></h1>
      </div>

      <div class="masthead">
        <ul class="nav nav-justified">
          
          <li><a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">デートカタログ</a></li>
          <li><a href="<?php echo $this->Html->url('/meetings/user_date'); ?>">ブッキングリスト</a></li>
          <li><a href="<?php echo $this->Html->url('/users/edit/'.$LoginUserId); ?>">プロフィール</a></li>
          <li><a href="<?php echo $this->Html->url('/bars/admin_list'); ?>">マイバー</a></li>
          <li><a href="<?php echo $this->Html->url('/users/logout'); ?>">ログアウト</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <?php echo $this->Session->flash('success'); ?>
        <?php echo $this->Session->flash('fail'); ?>
        <?php echo $this->Session->flash('auth'); ?>
        
        <?php echo $this->fetch('content'); ?>
      </div>
      <!-- /Jumbotron -->

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <?=$this->Html->script('jquery-1.10.2.js')?>
    <?=$this->Html->script('bootstrap.js')?>
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
