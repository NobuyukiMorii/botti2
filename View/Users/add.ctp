<form action="/gachakoi/users/add" method="post" enctype="multipart/form-data">
<!--<?php echo $this->Form->create(false,array('type'=>'post','action'=>"/users/add",'enctype'=>"multipart/form-data")); ?> -->

    <h2>ユーザー新規登録画面</h2>

            <p>メールアドレス</p>
<!--             <input type="text" name="data[User][username]"> -->
            <?php echo $this->Form->text('User.username'); ?>
            <?php echo $this->Form->error('User.username'); ?>
            <br />

            <p>パスワード</p>
<!--             <input type="password" name="data[User][password]"> -->
            <?php echo $this->Form->text('User.password'); ?>
            <?php echo $this->Form->error('User.password'); ?>
            <br />
            
            <p>ニックネーム</p>
<!--             <input type="text" name="data[User][nickname]"> -->
            <?php echo $this->Form->text('User.nickname'); ?>
            <?php echo $this->Form->error('User.nickname'); ?>
            <br />
            
            <p>性別</p>
<!--             <input type="radio" name="data[User][gender]" value="男性">男性<br />
            <input type="radio" name="data[User][gender]" value="女性">女性<br /> -->
            <?php echo $this->Form->radio('User.gender',array(1 => '男性',2 => '女性'),array('legend'=>'性別')); ?>
            <?php echo $this->Form->error('User.gender'); ?>
            <br />
            <br />
            
            <p>年齢</p>
<!--             <input type="text" name="data[User][age]"> 歳 -->
            <?php echo $this->Form->text('User.age'); ?>
            <?php echo $this->Form->error('User.age'); ?>     
            <br />
            
            <p>都道府県</p>
<!--             <input type="text" name="data[User][prefecture]">県 -->
            <?php echo $this->Form->text('User.prefecture'); ?>県
            <?php echo $this->Form->error('User.prefecture'); ?>    
            <br />
            
            <p>職業</p>
<!--             <input type="text" name="data[User][work]"> -->
            <?php echo $this->Form->text('User.work'); ?>
            <?php echo $this->Form->error('User.work'); ?>  
            <br />

            <p>希望曜日</p>
<!--             <input type="text" name="data[User][kibouyoubi]">曜日 -->
            <?php echo $this->Form->text('User.kibouyoubi'); ?>曜日
            <?php echo $this->Form->error('User.kibouyoubi'); ?>        
            <br />

            <p>希望時間</p>
<!--             <input type="text" name="data[User][kibouzikan]">時〜 -->
            <?php echo $this->Form->text('User.kibouzikan'); ?>時〜
            <?php echo $this->Form->error('User.kibouzikan'); ?>       
            <br />
            
            <p>希望駅</p>
<!--             <input type="text" name="data[User][kiboueki]"> -->
            <?php echo $this->Form->text('User.kiboueki'); ?>駅
            <?php echo $this->Form->error('User.kiboueki'); ?> 
            <br />

            <p>行動範囲（エリア）</p>
<!--             <label id="area">
            <input type="checkbox" name="data[User][area]" value="東京" id="area">東京<br />
            <input type="checkbox" name="data[User][area]" value="大阪" id="area">大阪<br />
            <input type="checkbox" name="data[User][area]" value="札幌" id="area">札幌<br />
            <input type="checkbox" name="data[User][area]" value="仙台" id="area">仙台<br />
            <input type="checkbox" name="data[User][area]" value="博多" id="area">博多<br />
            <input type="checkbox" name="data[User][area]" value="松山" id="area">松山<br /> -->

            <?php echo $this->Form->radio('User.area',array(
                  1 => '東京',
                  2 => '大阪',
                  3 => '札幌',
                  4 => '仙台',
                  5 => '博多',
                  6 => '松山'
            ),array('legend'=>'生活エリア')); ?>
            <?php echo $this->Form->error('User.area'); ?>

            <br />
            
            <p>写真</p>
<!--             <input type="file" name="data[User][image]"> -->
            <?php echo $this->Form->input( 'User.image', array( 'type' => 'file')); ?>
            <?php echo $this->Form->error('User.image'); ?> 
            <br />
            <br />

            <!-- <input type="submit" value="登録する"> -->
            <?php echo $this->Form->submit("登録する"); ?>
<?php echo $this->Form->end(); ?>

