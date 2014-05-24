<!-- content -->                      
<div class="row"><!-- row --> 
  <div class="panel panel-default"><!-- panel panel-default --> 
    <div class="panel-body"><!-- panel-body --> 

<div class="pagination pagination-large">
    <ul class="pagination">
      <?php
        echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
        echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
        echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
      ?>
    </ul>
</div>

<?php for ($i = 0; $i < count($data); $i++) { ?>
<table class="table table-striped table-bordered table-hover">
  <tr>
    <th class="col-sm-1">ステータス</th>
    <th class="col-sm-1">予約日</th>
    <th class="col-sm-1">予約時間</th>
    <th class="col-sm-1">待ち合わせ</th>
    <th class="col-sm-1">お客様①</th>
    <th class="col-sm-1">お客様②</th>
  </tr>
  <tr>
    <td><?php echo h($data[$i]['Meeting']['resultText']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['date']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['time']); ?></td>
    <td><?php echo h($data[$i]['Meeting']['meetingspot']); ?></td>
    <td><?php echo h($data[$i]['User']['last_name']); ?><?php echo h($data[$i]['User']['first_name']); ?><img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data[$i]['User']['Image'][0]['dir']."/thumb150_".$data[$i]['User']['Image'][0]['photo_user']);?>" class="img-responsive"></td>
    <td><?php echo h($data[$i]['Meeting']['date_partner']['User']['last_name']); ?><?php echo h($data[$i]['Meeting']['date_partner']['User']['first_name']); ?><img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data[$i]['Meeting']['date_partner']['Image'][0]['dir']."/thumb150_".$data[$i]['Meeting']['date_partner']['Image'][0]['photo_user']);?>" class="img-responsive"></td>
  </tr>
</table>

 <?php } ?>