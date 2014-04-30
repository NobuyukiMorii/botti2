<?php echo $LoginUserName ;?>
 <h1>ユーザーのデート</h1>
 <div class="container">
 <div class="table-responsive">
 <table class = "table table-striped table-bordered table-condensed table-hover" >
  <thead>

    <tr>
      <th>待ち合わせ日</th>
      <th>待ち合わせ時間</th>
      <th>待ち合わせ場所</th>
      <th>店名</th>
      <th>誘った人</th>
      <th>誘われた人</th>
<!--       <th>デートパートナー</th> -->
      <th>駅名</th>
      <th>登録日</th>
      <th>状態</th>
      <th>回答する</th>
    </tr>
  </thead>
  <tbody>
	<?php for ($i = 0; $i < count($data); $i++) { ?>
	<tr>
    <td><?php echo h($data[$i]['Meeting']['date']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['time']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['meetingspot']); ?></td>
    <td><?php echo h($data[$i]['Bar']['name']); ?></td>
    <td><?php echo h($data[$i]['User']['nickname']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['match_user']); ?></td>
<!-- 		<td><?php echo h($data[$i]['Meeting']['date_partner']); ?></td> -->
		<td><?php echo h($data[$i]['Bar']['stationText']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['created']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['resultText']); ?></td>
    <td><a class="btn btn-primary" href="<?php echo $this->Html->url("/Meetings/acceptance/".$data[$i]['Meeting']['id']); ?>">編集する</a></td>
	</tr>
	<?php } ?>
 </tbody>
</table>
</div>
</div>


