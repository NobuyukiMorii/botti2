<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Bootply.com - Faceboot - A Facebook style template for Bootstrap</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?=$this->Html->css('bootstrap.css')?>
        <?=$this->Html->css('facebook.css')?>
        <link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
        <?php
          echo $this->fetch('meta');
          echo $this->fetch('script');
          echo $this->fetch('css');
        ?>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body>
        
        <div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
                      
        
          
            <!-- main right col -->
            <div class="column col-sm-12 col-xs-12" id="main">
                
                <!-- top nav -->
                <div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                      </button>
                      <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="navbar-brand logo">D</a>
                    </div>
                    <nav class="collapse navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-left">

                    </form>
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="<?php echo $this->Html->url('/users/logout'); ?>"><i class="glyphicon glyphicon-home"></i> ログアウト</a>
                      </li>
                      <li>
                        <a href="<?php echo $this->Html->url('/meetings/Control_meetinglist'); ?>"><i class="glyphicon glyphicon-home"></i> 予約状況</a>
                      </li>
                      <li>
                        <a href="<?php echo $this->Html->url('/meetings/Control_statistics'); ?>"><i class="glyphicon glyphicon-home"></i> 集計</a>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                          <li><a href="">More</a></li>
                        </ul>
                      </li>
                    </ul>
                    </nav>
                </div>
                <!-- /top nav -->

                <div class="padding">
                    <div class="full col-sm-9">

                <!-- View Contents -->
                <?php echo $this->Session->flash('success'); ?>
                <?php echo $this->Session->flash('fail'); ?>
                <?php echo $this->Session->flash('auth'); ?>
                <?php echo $this->fetch('content'); ?>
                <!-- /View Contents -->
                        
                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>


<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      Update Status
      </div>
      <div class="modal-body">
          <form class="form center-block">
            <div class="form-group">
              <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div>
          <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
            <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
      </div>  
      </div>
  </div>
  </div>
</div>
        
        <?=$this->Html->script('jquery-1.10.2.js')?>


        <?=$this->Html->script('bootstrap.js')?>

        
        <!-- JavaScript jQuery code from Bootply.com editor -->
        
    <script type='text/javascript'>
            
    $(document).ready(function() {
            
      /* off-canvas sidebar toggle */

      $('[data-toggle=offcanvas]').click(function() {
          $(this).toggleClass('visible-xs text-center');
          $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
          $('.row-offcanvas').toggleClass('active');
          $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
          $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
          $('#btnShow').toggle();
      });
            
    });
            
    </script>
        
    </body>
</html>