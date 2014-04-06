<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ガチャ恋！！</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<?php
echo $this->Html->meta('icon');
echo $this->Html->css('bootstrap.min');
echo $this->Html->css('style');
echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
echo $this->Html->script('bootstrap.min');
echo $scripts_for_layout;
?>
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

<!-- ナビゲーションヘッダー -->
<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
  <div class="container">
    <a class="brand" href="<?=$this->Html->url('/')?>">ガチャ恋</a>
    <div class="nav-collapse">
      <ul class="nav">
        <li><a href="<?=$this->Html->url('/bars/')?>">バー</a></li>
        <li><a href="<?=$this->Html->url('/bars/search')?>">検索</a></li>
      </ul>
    </div>
  </div>
</div>
</div>

<!-- コンテナ -->
<div class="container">

	<!-- コンテンツ -->
	<?php echo $this->Session->flash(); ?>
	<?php echo $content_for_layout; ?>

    <!-- フッター -->
	<footer class="row">
		<hr>
		<div class="span12">&copy; 2012 <a href="http://club86.info/" target="_blank">Club86 Startup School</a></div>
	</footer>
</div>

</body>
</html>
