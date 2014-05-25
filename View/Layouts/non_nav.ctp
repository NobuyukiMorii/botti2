<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>僕を飲みに誘って</title>
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
      <a class="navbar-brand" href="<?php echo $this->Html->url('/users/login'); ?>">僕を飲みに誘って</a>
    </div>
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