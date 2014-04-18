<h1>プロフィール変更画面</h1>

<?php echo $this->Form->create('User',array('type' => 'post', 'action'=>'add', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>
      <fieldset>

            <div class="form-group">
            <label for="UserUsername">メールアドレス</label>
            <?php echo $this->Form->input('User.username', array('class' => 'form-control','default' => $data['username']));?>
            <?php echo $this->Form->error('User.username'); ?>
            </div>

            <div class="form-group">
            <?php echo $this->Form->input('User.nickname', array('class' => 'form-control','default' => $data['nickname']));?>
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
            <?php echo $this->Form->input('User.birthday', array('class' => 'form-control','default' => $data['birthday']));?>
            <?php echo $this->Form->error('User.birthday', array('class' => "warning")); ?>
            </div>

            <div class="form-group">
            <?php echo $this->Form->input('User.work',array('type'=>'select','options'=>array('1'=>'大学生','2'=>'大学院生','3'=>'会社員','4'=>'公務員','5'=>'経営者','6'=>'自営業','7'=>'農業','8'=>'医者','9'=>'弁護士','10'=>'ニート','11'=>'ハイパーメディアクリエイター','12'=>'その他'),'default' => $data['work'])) ?>
            <?php echo $this->Form->error('User.work', array('class' => "warning")); ?>
        	</div>

            <div class="form-group">
            <?php echo $this->Form->input('User.kibouyoubi',array('type'=>'select','options'=>array('1'=>'月曜日','2'=>'火曜日','3'=>'水曜日','4'=>'木曜日','5'=>'金曜日','6'=>'土曜日','0'=>'日曜日'),'default' => $data['kibouyoubi'])) ?>
            <?php echo $this->Form->error('User.kibouyoubi', array('class' => "warning")); ?>
        	</div>

            <div class="form-group">
            <?php echo $this->Form->input('User.kibouzikan', array('class' => 'form-control input-sm','default' => $data['kibouzikan']));?>
            <?php echo $this->Form->error('User.kibouzikan', array('class' => "warning")); ?>
            </div>

            <div class="form-group">
            <?php echo $this->Form->input('User.kiboueki',array('type'=>'select','options'=>array('1'=>'東京','2'=>'有楽町','3'=>'新橋','4'=>'浜松町','5'=>'田町','6'=>'品川','7'=>'大崎','8'=>'五反田','9'=>'目黒','10'=>'恵比寿','11'=>'渋谷','12'=>'原宿','13'=>'代々木','14'=>'新宿','15'=>'新大久保','16'=>'高田馬場','17'=>'目白','18'=>'池袋','19'=>'大塚','20'=>'巣鴨','21'=>'駒込','22'=>'田端','23'=>'西日暮里','24'=>'日暮里','25'=>'鶯谷','26'=>'上野','27'=>'御徒町','28'=>'秋葉原','29'=>'神田'),'default' => $data['kiboueki'])) ?>
            <?php echo $this->Form->error('User.kiboueki', array('class' => "warning")); ?>
        	</div>

             <?php echo $this->Form->input('User.image', array( 'type' => 'file','default' => $data['image'])); ?>
             <?php echo $this->Form->error('User.image'); ?> 

             <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-primary'));?>
      </fieldset>
<?php echo $this->Form->end(); ?>