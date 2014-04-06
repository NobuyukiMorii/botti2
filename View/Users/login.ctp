<h2>ガチャ恋</h2>

<?php

if($this->Session->check('Message.auth'))
	echo $this->Session->flash('auth');?>


<?php echo $this->Form->create('User',array('action'=>'login', 'role' => 'form'));?>

  <div class="form-group">
	<?php echo $this->Form->input('username', array('class' => 'form-control'));?>
  </div>
  <div class="form-group">
	<?php echo $this->Form->input('password', array('class' => 'form-control'));?>
  </div>
<?php echo $this->Form->submit('login', array('class' => 'btn btn-primary'));?>
<?php echo $this->Form->end();?>
