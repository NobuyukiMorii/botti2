 <h1>ユーザーのデート</h1>
 <div class="container">
 <div class="table-responsive">
 <table class = "table table-striped table-bordered table-condensed table-hover" >
  <thead>

    <tr>
      <th>ID</th>
      <th>誰が</th>
      <th>誰と</th>
      <th>年齢</th>
      <th>職業</th>
      <th>待ち合わせ日</th>
      <th>待ち合わせ時間</th>
      <th>待ち合わせ場所</th>
      <th>店名</th>
      <th>駅名</th>
      <th>登録日</th>
    </tr>
  </thead>
  <tbody>
	<?php for ($i = 0; $i < count($data); $i++) { ?>
	<tr>
    <td><?php echo h($data[$i]['Meeting']['id']); ?></td>
		<td><?php echo h($data[$i]['User']['nickname']); ?></td>
		<td><?php echo h($data[$i]['Meeting']['match_user']); ?></td>
		<td><?php echo h($data[$i]['User']['age']); ?></td>
		<td><?php echo h($data[$i]['User']['work']); ?></td>
		<td><?php echo h($data[$i]['Meeting']['date']); ?></td>
		<td><?php echo h($data[$i]['Meeting']['time']); ?></td>
		<td><?php echo h($data[$i]['Meeting']['meetingspot']); ?></td>
		<td><?php echo h($data[$i]['Bar']['name']); ?></td>
		<td><?php echo h($data[$i]['Bar']['station']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['created']); ?></td>
	</tr>
	<?php } ?>
 </tbody>
</table>
</div>
</div>
