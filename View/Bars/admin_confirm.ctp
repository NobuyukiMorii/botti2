<!-- <form  action="/gachakoi/Bars/admin_notice" method="post" > -->
<?php echo $this->Form->create('Bar',array('type' => 'post', 'action'=>'admin_notice', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>

    <h2>確認画面</h2>

        <?php echo $this->Html->image("/bars/image2", array('width' => '200', 'height' => '200' , 'alt' => 'BarImage'  )); ?>
        <br />
        <p>店名:<?php echo h($this->data["Bar"]["name"]); ?></p>
        <p>住所:<?php echo h($this->data["Bar"]["location"]); ?></p>
        <p>電話番号:<?php echo h($this->data["Bar"]["telnumber"]); ?></p>
        <p>最寄駅:<?php echo h($this->data["Bar"]["station"]); ?></p>
        <p>最寄口:<?php echo h($this->data["Bar"]["gate"]); ?></p>
        <p>料金:<?php echo h($this->data["Bar"]["price"]); ?></p>
        <p>紹介文:<?php echo h($this->data["Bar"]["description"]); ?></p>
        <p>URL:<?php echo h($this->data["Bar"]["url"]); ?></p>
        <!-- <input type="submit" value="登録する" > -->
        <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-primary'));?>
<?php echo $this->Form->end();?>