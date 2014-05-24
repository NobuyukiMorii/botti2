<div class="container">
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

<?php for ($i = 0; $i < count($data); $i++) { ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12  col-md-12 hidden-sm hidden-xs">
      <h3>
       <span class="label label-default"><?php echo h($i+1); ?></span><?php echo h($data[$i]['Meeting']['date']); ?> <?php echo h($data[$i]['Meeting']['time']); ?>
       （<?php echo h($data[$i]['Meeting']['date_partner']['User']['last_name']); ?><?php echo h($data[$i]['Meeting']['date_partner']['User']['first_name']); ?> × <?php echo h($data[$i]['Bar']['name']); ?>）
          <a href="<?php echo $this->Html->url("/Meetings/acceptance/".$data[$i]['Meeting']['id']); ?>">
            <button class="btn btn-lg btn-default" type="button">
              <?php echo h($data[$i]['Meeting']['resultText']); ?>
            </button>
          </a>
      </h3>
    </div>
  </div>


  <div class="row">
    <div class="hidden-lg hidden-md col-sm-12  col-xs-12">
      <h4>
       <span class="label label-default"><?php echo h($i+1); ?></span><?php echo h($data[$i]['Meeting']['date']); ?> <?php echo h($data[$i]['Meeting']['time']); ?>
      </h4>
    </div>
    <div class="hidden-lg hidden-md col-sm-12  col-xs-12">
      <h5>
        名前：<?php echo h($data[$i]['Meeting']['date_partner']['User']['last_name']); ?><?php echo h($data[$i]['Meeting']['date_partner']['User']['first_name']); ?>
      </h5>
    </div>
    <div class="hidden-lg hidden-md col-sm-12  col-xs-12">
      <h5>
        お店：<?php echo h($data[$i]['Bar']['name']); ?>
      </h5>
    </div>
    <div class="hidden-lg hidden-md col-sm-12  col-xs-12">
      <h5>
        <a href="<?php echo $this->Html->url("/Meetings/acceptance/".$data[$i]['Meeting']['id']); ?>">
            <button class="btn btn-sm btn-default" type="button">
              <?php echo h($data[$i]['Meeting']['resultText']); ?>
            </button>
          </a>
      </h5>
    </div>    
  </div>

</div>
<?php } ?>