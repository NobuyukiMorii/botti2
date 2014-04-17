<!-- <form action="/gachakoi/users/add" method="post" enctype="multipart/form-data"> -->
<!--<?php echo $this->Form->create(false,array('type'=>'post','action'=>"/users/add",'enctype'=>"multipart/form-data")); ?> -->


<h1>ユーザー新規登録画面</h1>

<?php echo $this->Form->create('User',array('type' => 'post', 'action'=>'add', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>
      <fieldset>

            <div class="form-group">
            <label for="UserUsername">メールアドレス</label>
            <?php echo $this->Form->input('User.username', array('class' => 'form-control'));?>
            <?php echo $this->Form->error('User.username'); ?>
            </div>

            <div class="form-group">
            <?php echo $this->Form->input('User.password', array('class' => 'form-control'));?>
            <?php echo $this->Form->error('User.password', array('class' => "warning")); ?>
            </div>

            <div class="form-group">
            <?php echo $this->Form->input('User.nickname', array('class' => 'form-control'));?>
            <?php echo $this->Form->error('User.nickname', array('class' => "warning")); ?>
            </div>

            <div class="radio">
            <label>
            <input type="radio" name='User.gender' id="UserGender" value="1" checked>
            男性
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="User.gender" id="UserGender" value="2">
            女性
            </label>

            </div>

            <div class="form-group">
            <?php echo $this->Form->input('User.birthday', array('class' => 'form-control'));?>
            <?php echo $this->Form->error('User.birthday', array('class' => "warning")); ?>
            </div>

            <div class="form-group">
            <select name='User.work' id="UserWork" class="form-control">
            <option value="" selected>職業を以下からお選びください。</option>
            <option value="大学生">大学生</option>
            <option value="大学院生">大学院生</option>
            <option value="会社員">会社員</option>
            <option value="経営者">経営者</option>
            <option value="フリーランス">フリーランス</option>
            <option value="その他">その他</option>
            </select>
            <?php echo $this->Form->error('User.work', array('class' => "warning")); ?>
            </div>

            <div class="form-group">
            <select name='User.kibouyoubi' id="UserKibouyoubi" class="form-control">
            <option value="" selected>希望曜日を以下からお選びください。</option>
            <option value="月">月曜日</option>
            <option value="火">火曜日</option>
            <option value="水">水曜日</option>
            <option value="木">木曜日</option>
            <option value="金">金曜日</option>
            <option value="土">土曜日</option>
            <option value="日">日曜日</option>
            </select>
            <?php echo $this->Form->error('User.kibouyoubi', array('class' => "warning")); ?>
            </div>

            <div class="form-group">
            <?php echo $this->Form->input('User.kibouzikan', array('class' => 'form-control input-sm'));?>
            <?php echo $this->Form->error('User.kibouzikan', array('class' => "warning")); ?>
            </div>

            <div class="form-group">
            <select name='User.kiboueki' id="UserKiboueki" class="form-control">
            <option value="" selected>好きな山手線の駅を以下からお選びください。</option>
            <?php
            $kibouekis = array ('東京','有楽町','新橋','浜松町','田町','品川','大崎','五反田','目黒','恵比寿','渋谷','原宿','代々木','新宿','新大久保','高田馬場','目白','池袋','大塚','巣鴨','駒込','田端','西日暮里','日暮里','鶯谷','上野','御徒町','秋葉原','神田');
            foreach($kibouekis as $kiboueki){
            print('<option value="'.$kiboueki.'">'.$kiboueki.'</option>');
            }
            ?>
            </select>
            </div>

             <p>写真</p>
<!--         <input type="file" name="data[User][image]"> -->
             <?php echo $this->Form->input( 'User.image', array( 'type' => 'file')); ?>
             <?php echo $this->Form->error('User.image'); ?> 

             <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-primary'));?>
      </fieldset>
<?php echo $this->Form->end(); ?>