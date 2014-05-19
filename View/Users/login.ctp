<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>QuickDate</title>

  <!-- Bootstrap core CSS -->
  <?=$this->Html->css('bootstrap.css')?>

  <!-- Add custom CSS here -->
  <?=$this->Html->css('stylish-portfolio.css')?>
  <?=$this->Html->css('font-awesome/css/font-awesome.min.css')?>
  <?=$this->Html->css('signin.css')?>
</head>

<body>

  <!-- Full Page Image Header Area -->
  <div id="top" class="header">
    <!-- vert-text -->
    <div class="vert-text">
      <h1>QuickDate</h1>
      <h3>
        <em>「誰かと会いたい」</em>
        <em>そんな夜に</em></h3>
        
    
      <!-- Login Form -->
        <div class="container">
          <form action="/gachakoi/users/login" id="UserLoginForm" method="post" class="form-signin" accept-charset="utf-8" role="form">

            <div style="display:none;">
              <input type="hidden" name="_method" value="POST"/>
            </div>

            <h2 class="form-signin-heading">Sign Up</h2>
            <?php echo $this->Session->flash('success'); ?>
            <?php echo $this->Session->flash('fail'); ?>
            <?php echo $this->Session->flash('auth'); ?>
            <input name="data[User][username]" id="UserUsername" type="email" class="form-control" placeholder="Email address" required autofocus>
            <input name="data[User][password]" id="UserPassword" type="password" class="form-control" placeholder="Password" required>
            <label class="checkbox">
              <input name="data[User][keep_me_logged_in]" type="checkbox" value="keep_me_logged_in"> ログインしたままにする
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
          </form>
        </div>

        <div class="container">
          <div class="form-signin">
            <a href="<?php echo $this->Html->url('/users/add'); ?>"><button class="btn btn-lg btn-success btn-block" type="submit">ユーザー登録</button></a>
          </div>
      <!-- /Login Form -->
    </div>

    <!-- /vert-text -->
  </div>

    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Intro -->
    <div id="about" class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h1>
                    「明日の夜、誰かに会いたいな」</h1>
                    <h3>そんな時、ありませんか？</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- /Intro -->

    <!-- Services -->
    <div id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>QuickDateのコンセプト</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-rocket"></i>
                        <h4>すぐに</h4>
                        <p>最速ログイン後クリック２回でデートに誘えます！</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-magnet"></i>
                        <h4>無料で</h4>
                        <p>完全に無料です。</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-shield"></i>
                        <h4>安全・安心</h4>
                        <p>デートに誘われるときでも、お店を決めるのは自分。馴染みのお店だから、安心してデート出来ます。</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-pencil"></i>
                        <h4>偶然の出会いを</h4>
                        <p>出会いはいつだって偶然なはす。そんな出会いを、演出します。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Services -->

    <!-- Call to Action -->
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h3>リリースまであと１ヶ月！新規ユーザー募集中！</h3>
                      <a href="<?php echo $this->Html->url('/users/add'); ?>"><button class="btn btn-lg btn-success btn-block" type="submit">ユーザー登録（無料）</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Call to Action -->


    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
