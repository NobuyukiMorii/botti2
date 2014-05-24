<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>誰か私を飲みに誘って</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?=$this->Html->css('bootstrap.css')?>
    <?=$this->Html->css('footer.css')?>
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php
      echo $this->fetch('meta');
      echo $this->fetch('script');
      echo $this->fetch('css');
    ?>
  </head>
  <body>

<div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $this->Html->url('/meetings/title'); ?>">誰か私を飲みに誘って</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">誰かを誘う</a></li>
        <li><a href="<?php echo $this->Html->url('/meetings/user_date'); ?>">飲みの予定</a></li>
        <li><a href="<?php echo $this->Html->url('/users/profile/'.$LoginUserId); ?>">プロフィール</a></li>
        <li><a href="<?php echo $this->Html->url('/bars/admin_list'); ?>">お店の一覧</a></li>
        <li><a href="<?php echo $this->Html->url('/bars/admin_register'); ?>">お店を登録する</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo $this->Html->url('/users/logout'); ?>">ログアウト</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div><!-- /.MainContents -->

<!-- View Contents -->
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Session->flash('fail'); ?>
<?php echo $this->Session->flash('success'); ?>
<?php echo $this->fetch('content'); ?>
<!-- /View Contents -->

  
</div><!-- /.MainContents -->

</div>

  <!-- script references -->
    <?=$this->Html->script('jquery-1.10.2.js')?>
    <?=$this->Html->script('bootstrap.js')?>

  </body>
</html>