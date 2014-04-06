<h2>待ち合わせ場所と時間を決める画面</h2>
<br />
<h2>会う人</h2>

    <table>
    <tr>
        <th>写真</th>
        <th>ニックネーム</th>
        <th>性別</th>
        <th>職業</th>
        <th>年齢</th>
        <th>メッセージ</th>
    </tr>
    <tr>
        <td><img src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>"></td>
<!--         <td><img src="<?php echo $this->Html->url("/meetings/image2Bar"); ?>"></td>
 -->        <td><?php echo h($randomUser['User']['nickname']); ?></td>
        <td><?php echo h($randomUser['User']['gender']); ?></td>
    	<td><?php echo h($randomUser['User']['work']);?></td>
        <td><?php echo h($randomUser['User']['age']);?></td>
        <td><?php echo h($randomUser['User']['message']);?></td>
    </tr>
    </table>
<br />

<h2>会うバー</h2>
    <table>
    <tr>
        <th>写真</th>
        <th>店名</th>
        <th>住所</t>
        <th>電話番号</th>
        <th>料金</th>
        <th>紹介文</th>
        <th>URL</th>
    </tr>
    <tr>
        <td><img src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>"></td>
        <!-- <td><img src="<?php echo $this->Html->url("/meetings/image2User"); ?>"></td> -->
        <td><?php echo h($randomBar['Bar']['name']); ?></td>
    	<td><?php echo h($randomBar['Bar']['location']);?></td>
		<td><?php echo h($randomBar['Bar']['telnumber']); ?></td>
    	<td><?php echo h($randomBar['Bar']['price']); ?></td>
        <td><?php echo h($randomBar['Bar']['description']); ?></td>
    	<td><?php echo h($randomBar['Bar']['url']);?></td>
    </tr>
    </table>

<h2>待ち合わせ場所と時間のレコメンド</h2>
   <p><?php echo h($randomUser['User']['nickname']); ?>さんの希望は・・・</p>
   <br />
   <h2>曜日：<?php echo h($randomUser['User']['kibouyoubi']);?></h2>
   <h2>時間：<?php echo h($randomUser['User']['kibouzikan']);?></h2>
   <p><?php echo h($randomBar['Bar']['name']); ?>の最寄りは・・・</p>
   <h2>最寄駅：<?php echo h($randomBar['Bar']['station']); ?></h2>
   <h2>最寄口：<?php echo h($randomBar['Bar']['gate']); ?></h2>
   <br />

    <form  action="/gachakoi/Meetings/confirm" method="post">

    <p>何月何日</p><br />
    <input type="dateTime" name="data[Meeting][date]">
    <br />
    <p>時間</p><br />
    <input type="dateTime" name="data[Meeting][time]">
    <p>駅</p><br />
    <input type="text" name="data[Meeting][station]">
    <br />
    <p>何口</p><br />
    <input type="text" name="data[Meeting][gate]">
    <br />
    <p>待ち合わせ場所</p><br />
    <input type="text" name="data[Meeting][meetingspot]">
    <br />
    <input type="submit" value="送信する">
    </form>

<a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">戻る</a>