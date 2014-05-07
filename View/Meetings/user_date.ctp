<?php
echo $this->Paginator->first('<<',array());
echo $this->Paginator->prev('<',array());
echo $this->Paginator->numbers();
echo $this->Paginator->next('>',array());
echo $this->Paginator->last('>>',array());
?>
 <div class="container">
 <div class="table-responsive">
 <table class = "table table-striped table-bordered table-condensed table-hover" >
  <thead>

    <tr>
      <th>デートパートナー</th>
      <th>ユーザーの写真</th>

      <th>お店の写真</th>
      <th>店名</th>

      <th>待ち合わせ日</th>
      <th>待ち合わせ時間</th>
      <th>待ち合わせ場所</th>

      <th>駅名</th>
      <th>登録日</th>
      <th>ステータス</th>
    </tr>
  </thead>
  <tbody>
	<?php for ($i = 0; $i < count($data); $i++) { ?>
	<tr>
    <td><img src="<?php echo $this->Html->url("/Meetings/image2User/".$data[$i]['Meeting']['date_partner']['User']['id']);?>", width = '120',alt ='PatnerImage'></td>
    <td><?php echo h($data[$i]['Meeting']['date_partner']['User']['nickname']); ?></td>
    <td><img src="<?php echo $this->Html->url("/Meetings/image2Bar/".$data[$i]['Bar']['id']);?>", width = '120',alt ='PatnerImage'></td>
    <td><?php echo h($data[$i]['Bar']['name']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['date']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['time']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['meetingspot']); ?></td>
		<td><?php echo h($data[$i]['Bar']['stationText']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['created']); ?></td>
    <td><a class="btn btn-primary" href="<?php echo $this->Html->url("/Meetings/acceptance/".$data[$i]['Meeting']['id']); ?>"><?php echo h($data[$i]['Meeting']['resultText']); ?></a></td>
	</tr>
	<?php } ?>
 </tbody>
</table>
</div>
</div>


