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

<?php for ($i = 0; $i < count($data)-1; $i++) { ?>
<table class="table table-striped table-bordered table-hover">
  <tr>
    <th class="col-sm-1">写真</th>
    <th class="col-sm-1">名前</th>
    <th class="col-sm-1">性別</th>
    <th class="col-sm-1">年齢</th>
    <th class="col-sm-2">職業</th>
    <th class="col-sm-2">好きな食べ物</th>
    <th class="col-sm-2">話題</th>
    <th class="col-sm-1">誕生日</th>
  </tr>
  <tr>
    <td><img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data[$i]['Image'][0]['dir']."/thumb150_".$data[$i]['Image'][0]['photo_user']);?>" class="img-responsive"></td>
    <td><?php echo h($data[$i]['User']['last_name']); ?><?php echo h($data[$i]['User']['first_name']); ?></td>
    <td><?php echo h($data[$i]['User']['genderText']); ?></td>
    <td><?php echo h($data[$i]['User']['age']); ?>才</td>
    <td><?php echo h($data[$i]['User']['work']); ?></td>
    <td><?php echo h($data[$i]['User']['like']); ?></td>
    <td><?php echo h($data[$i]['User']['topic']); ?></td>
    <td><?php echo h($data[$i]['User']['birthday']); ?></td>
  </tr>
</table>

 <?php } ?>