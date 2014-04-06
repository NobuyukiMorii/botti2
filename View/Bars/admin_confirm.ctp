<form  action="/gachakoi/Bars/admin_notice" method="post" >

    <h2>お店確認画面</h2>
        <p>ID</p>
        <?php echo h($this->data["Bar"]["id"]); ?>
        <br/>
        <p>店名</p>
        <?php echo h($this->data["Bar"]["name"]); ?>
        <br/>
        <p>住所</p>
        <?php echo h($this->data["Bar"]["location"]); ?>
        <br/>
        <p>電話番号</p>
        <?php echo h($this->data["Bar"]["telnumber"]); ?>
        <br/>
        <p>最寄駅</p>
        <?php echo h($this->data["Bar"]["station"]); ?>
        <br/>
        <p>最寄口</p>
        <?php echo h($this->data["Bar"]["gate"]); ?>
        <br/>
        <p>料金</p>
        <?php echo h($this->data["Bar"]["price"]); ?>
        <br/>
        <p>紹介文</p>
        <?php echo h($this->data["Bar"]["description"]); ?>
        <br/>
        <p>URL</p>
        <?php echo h($this->data["Bar"]["url"]); ?>
        <br/>
        <p>写真</p>
        <img src="<?php echo $this->Html->url("/bars/image2"); ?>">
        <br/><br /><br/><br />
        <input type="submit" value="登録する" >
        <br />
</form>