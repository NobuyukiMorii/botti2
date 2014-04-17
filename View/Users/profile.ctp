<!-- 
<?php echo $data['id'] ?>
<?php echo $data['username'] ?>
<?php echo $data['nickname'] ?>
<?php echo $data['work'] ?>
<?php echo $data['birthday'] ?>
<?php echo $data['message'] ?>
<?php echo $data['nickname'] ?>
<?php echo $data['kibouyoubi'] ?>
<?php echo $data['kibouzikan'] ?>
<?php echo $data['kiboueki'] ?>
<img src="<?php echo $this->Html->url("/Meetings/image2User/".$data['id']); ?>", width = '200', height = '200' , alt ='UserImage'>
 -->
<h1>プロフィール変更画面</h1>

<?php echo $this->Form->create('User',array('type' => 'post', 'action'=>'add', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>
      <fieldset>

            <div class="form-group">
            <label for="UserUsername">メールアドレス</label>
            <?php echo $this->Form->input('User.username', array('class' => 'form-control','default' => $data['username']));?>
            <?php echo $this->Form->error('User.username'); ?>
            </div>

<!--             <div class="form-group">
            <?php echo $this->Form->input('User.password', array('class' => 'form-control','default' => $data['password']));?>
            <?php echo $this->Form->error('User.password', array('class' => "warning")); ?>
            </div> -->

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

<!--             <div class="form-group">
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
            </div> -->

            <div class="form-group">
            <?php echo $this->Form->input('User.work',array('type'=>'select','options'=>array('1'=>'大学生','2'=>'大学院生','3'=>'会社員','4'=>'公務員','5'=>'経営者','6'=>'自営業','7'=>'農業','8'=>'医者','9'=>'弁護士','10'=>'ニート','11'=>'ハイパーメディアクリエイター','12'=>'その他'),'default' => $data['work'])) ?>
            <?php echo $this->Form->error('User.work', array('class' => "warning")); ?>
        	</div>

<!-- 
            <div class="form-group">
            <select name='User.kibouyoubi' id="UserKibouyoubi" class="form-control" value= $data['kibouyoubi']>
            <option value="1">月曜日</option>
            <option value="2">火曜日</option>
            <option value="3">水曜日</option>
            <option value="4">木曜日</option>
            <option value="5">金曜日</option>
            <option value="6">土曜日</option>
            <option value="7">日曜日</option>
            </select>
            <?php echo $this->Form->error('User.kibouyoubi', array('class' => "warning")); ?>
            </div>
 -->
            <div class="form-group">
            <?php echo $this->Form->input('User.kibouyoubi',array('type'=>'select','options'=>array('1'=>'月曜日','2'=>'火曜日','3'=>'水曜日','4'=>'木曜日','5'=>'金曜日','6'=>'土曜日','7'=>'日曜日'),'default' => $data['kibouyoubi'])) ?>
            <?php echo $this->Form->error('User.kibouyoubi', array('class' => "warning")); ?>
        	</div>

            <div class="form-group">
            <?php echo $this->Form->input('User.kibouzikan', array('class' => 'form-control input-sm','default' => $data['kibouzikan']));?>
            <?php echo $this->Form->error('User.kibouzikan', array('class' => "warning")); ?>
            </div>

<!--             <div class="form-group">
            <select name='User.kiboueki' id="UserKiboueki" class="form-control">
            <option value="" selected>好きな山手線の駅を以下からお選びください。</option>
            <?php
            $kibouekis = array ('東京','有楽町','新橋','浜松町','田町','品川','大崎','五反田','目黒','恵比寿','渋谷','原宿','代々木','新宿','新大久保','高田馬場','目白','池袋','大塚','巣鴨','駒込','田端','西日暮里','日暮里','鶯谷','上野','御徒町','秋葉原','神田');
            foreach($kibouekis as $kiboueki){
            print('<option value="'.$kiboueki.'">'.$kiboueki.'</option>');
            }
            ?>
            </select>
            </div> -->

            <div class="form-group">
            <?php echo $this->Form->input('User.kiboueki',array('type'=>'select','options'=>array('1'=>'東京','2'=>'有楽町','3'=>'新橋','4'=>'浜松町','5'=>'田町','6'=>'品川','7'=>'大崎','8'=>'五反田','9'=>'目黒','10'=>'恵比寿','11'=>'渋谷','12'=>'原宿','13'=>'代々木','14'=>'新宿','15'=>'新大久保','16'=>'高田馬場','17'=>'目白','18'=>'池袋','19'=>'大塚','20'=>'巣鴨','21'=>'駒込','22'=>'田端','23'=>'西日暮里','24'=>'日暮里','25'=>'鶯谷','26'=>'上野','27'=>'御徒町','28'=>'秋葉原','29'=>'神田'),'default' => $data['kiboueki'])) ?>
            <?php echo $this->Form->error('User.kiboueki', array('class' => "warning")); ?>
        	</div>



             <p>写真</p>
<!--         <input type="file" name="data[User][image]"> -->
			 <img src="<?php echo $this->Html->url("/Meetings/image2User/".$data['id']); ?>", width = '200', height = '200' , alt ='UserImage'>
             <?php echo $this->Form->input('User.image', array( 'type' => 'file','default' => $data['image'])); ?>
             <?php echo $this->Form->error('User.image'); ?> 

             <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-primary'));?>
      </fieldset>
<?php echo $this->Form->end(); ?>