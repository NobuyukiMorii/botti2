<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ぼっち飲み</title>

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
      <h1>ぼっち飲み</h1>
      <h3>
        <em>ぼっち同士で飲みに行こう！</em></h3>
        
    
      <!-- Login Form -->
        <div class="container">
          <form action="/gachakoi/users/login" id="UserLoginForm" method="post" class="form-signin" accept-charset="utf-8" role="form">

            <h2 class="form-signin-heading">Sign Up</h2>
            <?php echo $this->Session->flash('success'); ?>
            <?php echo $this->Session->flash('fail'); ?>
            <?php echo $this->Session->flash('auth'); ?>
            <input name="data[User][username]" id="UserUsername" type="email" class="form-control" placeholder="Email address" required autofocus>
            <input name="data[User][password]" id="UserPassword" type="password" class="form-control" placeholder="Password" required>
            <label class="checkbox">
              <input name="data[User][keep_me_logged_in]" type="checkbox" value="keep_me_logged_in"> ログインしたままにする
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">ぼっちとしてログイン</button>
          </form>
        </div>

        <div class="container">
          <div class="form-signin">
            <a href="<?php echo $this->Html->url('/users/add'); ?>"><button class="btn btn-lg btn-success btn-block" type="submit">あなたをぼっちとして登録</button></a>
          </div>
      <!-- /Login Form -->
    </div>

    <!-- /vert-text -->
  </div>

    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Services -->
    <div id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>ぼっち飲みのコンセプト</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-rocket"></i>
                        <h4>早い</h4>
                        <p>ログインするとそこにぼっちがいます。チェンジも出来るけど、最短クリック２回すればぼっちを飲みに誘えます。</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-magnet"></i>
                        <h4>お店を選ぶ必要なし</h4>
                        <p>面倒くさいお店選びをする必要はありません。飲み相手がユーザー登録時にお気に入りのお店を登録しているので、そこに行けばOKです。</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-shield"></i>
                        <h4>安全・安心</h4>
                        <p>ぼっちは基本的にいい人なので、安心で安全です。</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-pencil"></i>
                        <h4>人と出会える</h4>
                        <p>ぼっち飲みを使えば、ぼっちがぼっちと会えます。いわゆるウィンウィンです。</p>
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
                    <h3>新規ぼっち募集中！（もちろん無料です）</h3>
                      <a href="<?php echo $this->Html->url('/users/add'); ?>"><button class="btn btn-lg btn-success btn-block" type="submit">あなたをぼっちとして登録</button></a>
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
