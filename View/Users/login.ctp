<h2>ガチャ恋</h2>

<?php

if($this->Session->check('Message.auth'))
	echo $this->Session->flash('auth');
echo $this->Form->create('User',array('action'=>'login'));
echo 'メールアドレス：';
echo $this->Form->input('username');
echo 'パスワード：';
echo $this->Form->input('password');
echo $this->Form->end('login');

?>