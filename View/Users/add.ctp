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
            <select name="User.prefecture" id="prefecture" class="form-control">
            <option value="" selected>都道府県を以下からお選びください。</option>
            <?php
            $prefectures = array ('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','                  山梨県','新潟県','富山県','石川県','福井県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','                  奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県'                   ,'熊本県','大分県','宮崎県','鹿児島県','沖縄県');
            foreach($prefectures as $prefecture){
            print('<option value="'.$prefecture.'">'.$prefecture.'</option>');
            }
            ?>
            </select>
            <?php echo $this->Form->error('User.prefecture', array('class' => "warning")); ?>
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
            </form>
            </div>

            <div class="form-group">
            <?php echo $this->Form->input('User.kibouyoubi', array('class' => 'form-control input-sm'));?>
            <?php echo $this->Form->error('User.kibouyoubi', array('class' => "warning")); ?>
            </div>

            <div class="form-group">
            <?php echo $this->Form->input('User.kibouzikan', array('class' => 'form-control input-sm'));?>
            <?php echo $this->Form->error('User.kibouzikan', array('class' => "warning")); ?>
            </div>

            <div class="form-group">
            <?php echo $this->Form->input('User.kiboueki', array('class' => 'form-control input-sm'));?>
            <?php echo $this->Form->error('User.kiboueki', array('class' => "warning")); ?>
            </div>

             <p>写真</p>
<!--         <input type="file" name="data[User][image]"> -->
             <?php echo $this->Form->input( 'User.image', array( 'type' => 'file')); ?>
             <?php echo $this->Form->error('User.image'); ?> 

             <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-primary'));?>
             <?php echo $this->Form->end();?>

      <fieldset>
<?php echo $this->Form->end(); ?>