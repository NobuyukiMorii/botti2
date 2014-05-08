<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DateBookTokyo</title>

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
      <h1>DateBook</h1>
      <h3>
        <em>大切な出会いは、</em>
        <em>本の中に</em></h3>
        
    
      <!-- Login Form -->
        <div class="container">
          <form action="/gachakoi/users/login" id="UserLoginForm" method="post" class="form-signin" accept-charset="utf-8" role="form">

            <div style="display:none;">
              <input type="hidden" name="_method" value="POST"/>
            </div>

            <h2 class="form-signin-heading">Sign Up</h2>
            <input name="data[User][username]" id="UserUsername" type="email" class="form-control" placeholder="Email address" required autofocus>
            <input name="data[User][password]" id="UserPassword" type="password" class="form-control" placeholder="Password" required>
            <label class="checkbox">
              <input type="checkbox" value="remember-me"> ログインしたままにする
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

  </body>
  </html>
