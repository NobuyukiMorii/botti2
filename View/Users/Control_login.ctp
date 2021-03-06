
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
      <h1>ぼっち飲み For Shop</h1>
      <h3>
        <em>デートを</em>
        <em>ブッキング</em></h3>
        
    
      <!-- Login Form -->
        <div class="container">
          <form action="/botti2/users/Control_login" id="UserLoginForm" method="post" class="form-signin" accept-charset="utf-8" role="form">

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
            <a href="<?php echo $this->Html->url('/users/Control_add'); ?>"><button class="btn btn-lg btn-success btn-block" type="submit">ユーザー登録</button></a>
          </div>
      <!-- /Login Form -->
    </div>

    <!-- /vert-text -->
  </div>

  </body>
  </html>
