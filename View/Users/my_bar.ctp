      <?php echo $this->Form->create
            (
            'User',
            array(
                  'type' => 'post', 
                  'action'=>'my_bar', 
                  'role' => 'form',
                  'class' => 'form-horizontal text-left'
                  )
            );
      ?>

      <?php echo $this->Form->hidden
            (
            'User.group_id', 
             array(
                  'value'=>'1'
                  )
            );
      ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <div class="pagination pagination-large">
                  <ul class="pagination">
                    <?php
                      echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                      echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                      echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                    ?>
                  </ul>
              </div>
        </div>
    </div>

  <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <?php echo $this->Form->submit('変更する', array('class' => 'btn btn-lg btn-default pull-right'));?>
      </div>
  </div>

<?php for ($i = 0; $i < count($data); $i++) { ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <h1 class="page-header text-left">
        <?php echo h($data[$i]['Bar']['name']); ?>
        
        <?php echo $this->Form->radio('User.bar_id',
            array(
                  $data[$i]['Bar']['id'] => "", 
            ), 
            array(
                  'legend' => false,
                  'id' => "UserBarId"
            ),
            array(
                  'class' => 'form-group',
                  'required' => false
            )
        )
        ;?>
      </h1>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12"><a href="<?php echo $data[$i]['Bar']['url']; ?>" target="_blank"><img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$data[$i]['Image'][0]['dir']."/thumb250_".$data[$i]['Image'][0]['photo_bar']);?>" class="img-responsive"></a></div>
    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"><p class="text-left"><?php echo h($data[$i]['Bar']['description']); ?></p></div>

    <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">       
      <dl class="dl-horizontal">
        <dt>ジャンル</dt><dd><?php echo h($data[$i]['Bar']['genreText']); ?></dd>
        <dt>電話番号</dt><dd><?php echo h($data[$i]['Bar']['telnumber']); ?></dd>
        <dt>料金</dt><dd>平均<?php echo h(number_format($data[$i]['Bar']['price'])); ?>円/人</dd>
        <dt>最寄駅</dt><dd><?php echo h($data[$i]['Bar']['station']); ?></dd>
        <dt>営業時間</dt><dd><?php echo h(date("H時i分", strtotime($data[$i]['Bar']['start_time']))); ?>~<?php echo h(date("H時i分", strtotime($data[$i]['Bar']['close_time']))); ?></dd>
        <dt>LO</dt><dd><?php echo h(date("H時i分", strtotime($data[$i]['Bar']['last_order_time']))); ?></dd>
      </dl>
    </div>
  </div>
</div>
<?php } ?>

</div>
<?php echo $this->Form->end(); ?>