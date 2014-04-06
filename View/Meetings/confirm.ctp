<h2>リクエストを送信しました！</h2>
さあお店に電話しよう！
「ガチャ恋で電話」しましたというと、話が早いですよ！
<br />

電話番号は<?php echo $randomBar['Bar']['telnumber']; ?>のお店です。

[お店の地図]
[おすすめのメニューやコース]

◯◯名
◯◯時〜
◯◯

プランのおすすめ

    <h2>あなたのお名前</h2>
        <?php echo $loginUserName; ?>
        <br/>
    <h2>待ちあせ時間と場所</h2>
        <h2>日付</h2>
        <?php echo h($this->data["Meeting"]["date"]); ?>
        <br/>
        <h2>駅</h2>
        <?php echo h($this->data["Meeting"]["station"]); ?>
        <br/>
        <h2>最寄り口</h2>
        <?php echo h($this->data["Meeting"]["gate"]); ?>
        <br/>
        <h2>待ち合わせ場所</h2>
        <?php echo h($this->data["Meeting"]["meetingspot"]); ?>
        <br/>

    <h2>バー確認画面</h2>
        <h2>写真</h2>
        <img src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>">
<!--         <img src="<?php echo $this->Html->url("/meetings/image2Bar"); ?>"
 -->        <br />
        <h2>名前</h2>
        <?php echo $randomBar['Bar']['name']; ?>
        <br/>
        <p>住所</p>
        <?php echo $randomBar['Bar']['location']; ?>
        <br/>
        <p>電話番号</p>
        <?php echo $randomBar['Bar']['telnumber']; ?>
        <br/>
        <p>最寄駅</p>
        <?php echo $randomBar['Bar']['station']; ?>
        <br/>
        <p>最寄口</p>
        <?php echo $randomBar['Bar']['gate']; ?>
        <br/>
        <p>紹介文</p>
        <?php echo $randomBar['Bar']['description']; ?>
        <br/>
        <p>URL</p>
        <?php echo $randomBar['Bar']['url']; ?>

    <h2>パートナーの情報</h2>
        <h2>写真</h2>
        <img src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>">
<!--         <img src="<?php echo $this->Html->url("/meetings/image2User"); ?>"
 -->        <br/>
        <h2>名前</h2>
        <?php echo $randomUser['User']['nickname']; ?>
        <br/>
        <h2>年齢</h2>
        <?php echo $randomUser['User']['age']; ?>
        <br/>
        <h2>メッセージ</h2>
        <?php echo $randomUser['User']['message']; ?>
        <br/>
        <h2>行動範囲</h2>
        <?php echo $randomUser['User']['area']; ?>
        <br/>

    <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">ガチャ画面に戻る</a>
    -->