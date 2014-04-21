<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stylish Portfolio Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <?=$this->Html->css('bootstrap.css')?>

  <!-- Add custom CSS here -->
  <?=$this->Html->css('stylish-portfolio.css')?>
  <?=$this->Html->css('font-awesome/css/font-awesome.min.css')?>
</head>

<body>

  <!-- Full Page Image Header Area -->
  <div id="top" class="header">
    <!-- vert-text -->
    <div class="vert-text">
      <h1>がちゃ恋</h1>
      <h3>
        <em>無料で</em> 出会えて,
        <em>簡単に</em> デート</h3>
        <a href="<?php echo $this->Html->url('/users/add'); ?>" class="btn btn-default btn-lg">ユーザー登録</a>
    
      <!-- Login Form -->
        <!-- html -->

        <form action="/gachakoi/users/login" role="form" id="UserLoginForm" method="post" accept-charset="utf-8">

            <div style="display:none;">
              <input type="hidden" name="_method" value="POST"/>
            </div>

            <div class="container">
            <div class="form-group">
            <div class="row">
            <div class="col-xs-3">
              <div class="input text required">
                <label for="UserUsername">Username</label>
                <input name="data[User][username]" class="form-control" maxlength="50" type="text" id="UserUsername" required="required"/>
              </div>
            </div>
            </div>
            </div>
            </div>


            <div class="form-group">
            <div class="row">
            <div class="col-xs-2">
              <div class="input password">
                <label for="UserPassword">Password</label>
                <input name="data[User][password]" class="form-control" type="password" id="UserPassword"/>
              </div>
            </div>
            </div>
            </div>

            <div class="checkbox">
              <label><input type="checkbox">ログイン状態を保持する</label>
            </div>

            <div class="submit">
              <input  class="btn btn-primary" type="submit" value="login"/>
            </div>

        </form>

        <!-- /html --> 

      <!-- /Login Form -->
    </div>
    <!-- /vert-text -->
  </div>

  </body>
  </html>
