
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
誕生日の欄をつけて、誕生日なら◎ボタン
    <tr>
      <th>待ち合わせ日</th>
      <th>待ち合わせ時間</th>
      <th>待ち合わせ場所</th>

      <th>誘った人の名前</th>
      <th>誘ったユーザーの写真</th>

      <th>デートパートナー</th>
      <th>誘われたユーザーの写真</th>



      <th>登録日</th>
      <th>ステータス</th>

      <th>詳細</th>

    </tr>
  </thead>
  <tbody>
  <?php for ($i = 0; $i < count($data); $i++) { ?>
  <tr>
    <td><?php echo h($data[$i]['Meeting']['date']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['time']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['meetingspot']); ?></td>

    <td><?php echo h($data[$i]['User']['nickname']); ?></td>
    <td><img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data[$i]['User']['Image'][0]['dir']."/thumb150_".$data[$i]['User']['Image'][0]['photo_user']);?>",alt ='UserImage'></td>

    <td><?php echo h($data[$i]['Meeting']['date_partner']['User']['nickname']); ?></td>
    <td><img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data[$i]['Meeting']['date_partner']['Image'][0]['dir']."/thumb150_".$data[$i]['Meeting']['date_partner']['Image'][0]['photo_user']);?>",alt ='PatnerImage'></td>

    <td><?php echo h($data[$i]['Meeting']['created']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['resultText']); ?></td>
    <td><a class="btn btn-primary" href="<?php echo $this->Html->url("/Meetings/Control_detail/".$data[$i]['Meeting']['id']); ?>">詳細</a></td>
  </tr>
  <?php } ?>
 </tbody>
</table>
</div>
</div>

<?php var_dump($data) ;?>