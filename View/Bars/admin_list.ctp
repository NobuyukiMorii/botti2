
<?php
echo $this->Paginator->first('<<',array());
echo $this->Paginator->prev('<',array());
echo $this->Paginator->numbers();
echo $this->Paginator->next('>',array());
echo $this->Paginator->last('>>',array());
?>

    <div class="table-responsive">
    <table class = "table table-striped table-bordered table-condensed table-hover">
    <tr>
        <th>写真</th>
        <th>店名</th>
        <th>ジャンル</th>
        <th>料金</th>
        <th>紹介文</th>
        <th>電話番号</th>
        <th>最寄駅</th>
        <th>最寄口</th>
        <th>住所</th>
    </tr>
<?php for ($i = 0; $i < count($data); $i++) { ?>
    <tr>
        <td><a href="<?php echo h($data[$i]['Bar']['url']);?>"><img src="<?php echo $this->Html->url("/bars/image/".$data[$i]['Bar']['id']);?>", width = '100', height = '100' , alt ='BarImage'></a></td>
        <td width="180"><a href="<?php echo h($data[$i]['Bar']['url']);?>"><?php echo h($data[$i]['Bar']['name']); ?></a></td>
        <td width="100"><?php echo h($data[$i]['Bar']['genreText']); ?></td>
        <td width="100"><?php echo h($data[$i]['Bar']['price']); ?></td>
        <td width="300"><?php echo h($data[$i]['Bar']['description']);?></td>
        <td width="400"><?php echo h($data[$i]['Bar']['telnumber']);?></td>
        <td width="300"><?php echo h($data[$i]['Bar']['stationText']); ?></td>
        <td width="200"><?php echo h($data[$i]['Bar']['gate']); ?></td>
        <td width="400"><?php echo h($data[$i]['Bar']['location']);?></td>
    </tr>
<?php } ?>
    </table>