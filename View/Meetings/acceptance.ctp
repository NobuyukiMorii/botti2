<h1>プロフィール変更画面</h1>

<?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'acceptance', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>

<fieldset>

    <div>
      <p>OK or No</p>
      <div class="radio">
        <?php echo $this->Form->radio('Meeting.result', array("2" => "OK", "3" =>'No'), array('legend' => false,'separator' => "<br />", 'value' =>'2' ), array('class' => 'form-group','required' => false));?>
      </div>
    </div>

  <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-primary'));?>

</fieldset>

<?php echo $this->Form->end(); ?>