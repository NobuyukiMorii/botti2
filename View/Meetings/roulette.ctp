<p><?php echo $loginUser['nickname'] ?>さんこんにちわ</p>
<h2>ガチャ恋！</h2>
<h2>「１０円で出会える「恋」」</h2>
<br />
<h2>ランダムにユーザー表示</h2>
    <table>
    <tr>
        <th>写真</th>
        <th>ニックネーム</th>
        <th>年齢</th>
        <th>性別</th>
        <th>職業</th>
        <th>都道府県</th>
        <th>メッセージ</th>
    </tr>
    <tr>
        <td><img src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>"></td>
        <td><?php echo h($randomUser['User']['nickname']); ?></td>
        <td><?php echo h($randomUser['User']['age']); ?></td>
        <td><?php echo h($randomUser['User']['genderText']); ?></td>
      	<td><?php echo h($randomUser['User']['work']);?></td>
        <td><?php echo h($randomUser['User']['prefecture']);?></td>
        <td><?php echo h($randomUser['User']['message']);?></td>
    </tr>
    </table>
<br />

<h2>ランダムにバー表示</h2>
    <table>
    <tr>
        <th>写真</th>
        <th>店名</th>
        <th>住所</th>
        <th>電話番号</th>
        <th>最寄駅</th>
        <th>最寄口</th>
        <th>料金</th>
        <th>紹介文</th>
        <th>URL</th>

    </tr>
    <tr>
        <td><img src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>"></td>
        <td><?php echo h($randomBar['Bar']['name']); ?></td>
    	<td><?php echo h($randomBar['Bar']['location']);?></td>
		<td><?php echo h($randomBar['Bar']['telnumber']); ?></td>
        <td><?php echo h($randomBar['Bar']['station']); ?></td>
    	<td><?php echo h($randomBar['Bar']['gate']);?></td>
    	<td><?php echo h($randomBar['Bar']['price']); ?></td>
        <td><?php echo h($randomBar['Bar']['description']); ?></td>
    	<td><?php echo h($randomBar['Bar']['url']);?></td>
    </tr>
    </table>



<form  action="<?php echo $this->Html->url("");?>" method="post" >
    <input type="submit" value="ガチャする">
</form>
<form  action="<?php echo $this->Html->url("/meetings/detail");?>" method="post" enctype="multipart/form-data">
    <input type="submit" value="「出会い」をリクエストする">
</form>

<br />
<a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">ガチャする</a>
<br />
<br />
<a href="<?php echo $this->Html->url('/bars/admin_register'); ?>">バー登録画面（管理者のみ）</a>
<br />
<a href="<?php echo $this->Html->url('/bars/search'); ?>">バー検索画面（管理者のみ）</a>
<br />
<a href="<?php echo $this->Html->url('/users/index'); ?>">ユーザー管理画面（管理者のみ）</a>
<br />
<a href="<?php echo $this->Html->url('/users/logout'); ?>">ログアウト</a>
<br />
<a href="<?php echo $this->Html->url('/bars/admin_list'); ?>">バー一覧</a>
<br />
<a href="<?php echo $this->Html->url("/users/edit/".$loginUser['id']); ?>">プロフィール編集</a>
<br />
<a href="<?php echo $this->Html->url('/meetings'); ?>">約束一覧画面</a>
予約確認画面も必要


<!-- <h2>ガチャ恋</h2>

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
<?php echo $this->Form->end();?> -->




