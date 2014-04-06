<h3>お店情報一覧</h3>
    <table>
    <tr>
        <th>ID</th>
        <th>店名</th>
        <th>住所</th>
        <th>電話番号</th>
        <th>最寄駅</th>
        <th>最寄口</th>
        <th>料金</th>
        <th>紹介文</th>
        <th>URL</th>
        <th>写真</th>
    </tr>
<?php for ($i = 0; $i < count($data); $i++) { ?>
    <tr>
        <td><?php echo h($data[$i]['Bar']['id']); ?></td>
        <td><?php echo h($data[$i]['Bar']['name']); ?></td>
    	<td><?php echo h($data[$i]['Bar']['location']);?></td>
    	<td><?php echo h($data[$i]['Bar']['telnumber']);?></td>
        <td><?php echo h($data[$i]['Bar']['station']);?></td>
        <td><?php echo h($data[$i]['Bar']['gate']);?></td>
        <td><?php echo h($data[$i]['Bar']['price']);?></td>
        <td><?php echo h($data[$i]['Bar']['description']);?></td>
        <td><?php echo h($data[$i]['Bar']['url']);?></td>
        <td><img src="<?php echo $this->Html->url("/bars/image/".$data[$i]['Bar']['id']);?>"></td>
    </tr>
<?php } ?>
    </table>

<a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">ルーレット画面に戻る</a>