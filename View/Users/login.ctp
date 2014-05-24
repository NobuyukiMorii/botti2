<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>ぼっち飲み</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?=$this->Html->css('login.css')?>
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?=$this->Html->css('bootstrap.css')?>
    </head>
    <body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <?php echo $this->Session->flash('auth'); ?>
          <form action="/botti2/users/login" id="UserLoginForm" method="post" class="form-signin" accept-charset="utf-8" role="form" class="form col-md-12 center-block">
            <div class="form-group">
              <input name="data[User][username]" id="UserUsername" type="email" class="form-control input-lg" placeholder="メールアドレス" required>
            </div>
            <div class="form-group">
              <input name="data[User][password]" id="UserPassword" type="password" class="form-control input-lg" placeholder="パスワード" required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit">ログイン</button>
              <span class="pull-right"><a href="<?php echo $this->Html->url('/users/add'); ?>">新規登録</a></span>
            </div>
          </form>
      </div>
  </div>
  </div>
</div>
    <!-- script references -->
    <?=$this->Html->script('bootstrap.js')?>
    <?=$this->Html->script('jquery-1.10.2.js')?>
    </body>
</html>