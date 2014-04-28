<?php echo $this->Html->script(array('jquery-1.10.2.js', 'jquery-ui-1.10.4.custom','jquery.ui.datepicker-ja'), array('inline'=>false)); ?>
<?php echo $this->Html->css(array('jquery-ui-1.10.4.custom'), array('inline'=>false)); ?>

<!-- <div class="row" style="height:400px; border:solid 1px;">
	<div class="col-lg-5 col-md-5 portfolio-item" >

          <a href="<?php echo $randomBar['Bar']['url']; ?>">
            <p class="trimming2">
              <img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>" alt="<?php echo h($randomUser['User']['nickname']); ?>" >
            </p>
          </a>


	</div>

	<div class="col-lg-7 col-md-7 portfolio-item" >

          <dl class="text-left">
            <dt>ニックネーム<dt>
              <dd><?php echo $randomUser['User']['nickname']; ?>さん</dd>
            <dt>年齢</dt>
              <dd><?php echo $randomUser['User']['age']; ?>才</dd>
            <dt>職業</dt>
              <dd><?php echo $randomUser['User']['workText']; ?></dd>
            <dt>デートしやすい駅</dt>
              <dd><?php echo $randomUser['User']['kibouekiText']; ?></dd>
            <dt>デートしやすい曜日</dt>
              <dd><?php echo $randomUser['User']['kibouyoubiText']; ?></dd>
            <dt>待ち合わせやすい時間</dt>
              <dd><?php echo $randomUser['User']['kibouzikan']; ?></dd>
            <dt>好きなジャンル</dt>
              <dd><?php echo $randomUser['User']['genreText']; ?></dd>
          </dl>

	</div>

</div>

<div class="row" style="height:100px; border:solid 1px; margin-top:10px;">

	<div class="col-lg-5 col-md-5 portfolio-item" >

        

	<div>

	<div class="col-lg-12 col-md-12 portfolio-item" >

        <p class="text-left"><?php echo $randomUser['User']['message']; ?></p>

	<div>

</div>

<div class="row" style="height:100px; border:solid 1px; margin-top:80px;">


	<div class="col-lg-3 col-md-3 col-lg-offset-6 col-md-offset-6 portfolio-item" >

		<h1><?php echo $total_much_point ;?>％</h1>

	</div>

	<div class="col-lg-3 col-md-3 portfolio-item" >

		     <div class="img-question">
            <a href="<?php echo $this->Html->url('/meetings/roulette2'); ?>">
            <?php echo $this->Html->image('heart.jpeg', array('alt' => 'サンプル画像','width'=>'100','height'=>'100')); ?>
            </a>
            </div>

	</div>
</div>





 -->



    <div class="container">

        <div class="row" style="margin-top:50px;">

            <div class="col-md-6" >
            	<p class="trimming2">
                <img class="img-responsive" src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>" alt="<?php echo h($randomUser['User']['nickname']); ?>">
            	</p>
            </div>

            <div class="col-md-6" >

                <h1 class="text-left"><?php echo $randomUser['User']['nickname']; ?>さん</h1>
                <h1 class="text-left"><?php echo $total_much_point ;?>％  match</h1>

                <div class="text-left" style="margin-top:40px;">

					<?php echo $randomUser['User']['age']; ?>才の<?php echo $randomUser['User']['workText']; ?>です。<br/>
					基本的に<?php echo $randomUser['User']['kibouyoubiText']; ?>の<?php echo $randomUser['User']['kibouzikan']; ?>時からは大丈夫です。
					<?php echo $randomUser['User']['kibouekiText']; ?>駅は行きやすいです。<br />
					<?php echo $randomUser['User']['genreText']; ?>が好きです！<br />

				</div>


                <div style="margin-top:40px;">

                	 <div class="text-right"><?php echo $this->Form->submit('デートに誘う', array('class' => 'btn btn-primary'));?></div>
					

				</div>

				<div class="text-right" style="margin-top:20px;">

                	 <div class="text-left">

                	 	<a href="<?php echo $this->Html->url('/meetings/roulette2'); ?>">
				            <?php echo $this->Html->image('next2.png', array('alt' => '次へ','width'=>'150','height'=>'150')); ?>
				         </a>

                	 </div>
                	          
				</div>



            </div>

       </div>

    </div>
    <!-- /.container -->