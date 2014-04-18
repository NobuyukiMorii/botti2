<h1>リクエストを送信しました。</h1>

<dl>
  <dt>待ち合わせ場所</dt>
  <dd><?php echo h($this->data["Meeting"]["meetingspot"]); ?></dd>
  <dt>日時</dt>
  <dd><?php echo h($this->data["Meeting"]["date"] ["year"]); ?>年<?php echo h($this->data["Meeting"]["date"] ["month"]); ?>月<?php echo h($this->data["Meeting"]["date"] ["day"]); ?>日<?php echo h($this->data["Meeting"]["time"]["hour"]); ?>時<?php echo h($this->data["Meeting"]["time"]["min"]); ?>分</dd>
</dl>

<dl width:200px;height:100px;float:left>
  <dt>デート場所</dt>
  <dd><a href="<?php echo h($randomBar['Bar']['url']) ?>"><img src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>", width = '200', height = '200' , alt ='BarImage'></a></dd>
  <dd>店名：<?php echo $randomBar['Bar']['name']; ?></dd>
  <dd>電話番号：<?php echo $randomBar['Bar']['telnumber']; ?></dd>
  <dd>住所：<?php echo $randomBar['Bar']['location']; ?></dd>
  <dd>URL：<a href="<?php echo $randomBar['Bar']['url']; ?>"><?php echo $randomBar['Bar']['url']; ?></a></dd>
</dl>

<dl width:200px;height:100px;float:right>
  <dt>デート相手</dt>
  <dd><img src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>", width = '200', height = '200' , alt ='BarImage'></dd>
  <dd>ニックネーム：<?php echo $randomUser['User']['nickname']; ?></dd>
  <dd>年齢：<?php echo $randomUser['User']['age']; ?></dd>
  <dd>職業：<?php echo $randomUser['User']['workText']; ?></dd>
</dl>

<a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="btn btn-primary"><span class="glyphiconglyphicon-home"></span>ガチャ画面に戻る<a>