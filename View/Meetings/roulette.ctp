<?php echo $this->Html->script(array('jquery-1.10.2.js', 'jquery-ui-1.10.4.custom','jquery.ui.datepicker-ja'), array('inline'=>false)); ?>
<?php echo $this->Html->css(array('jquery-ui-1.10.4.custom'), array('inline'=>false)); ?>




    <div class="container">

        <div class="row" style="margin-top:50px;">

            <div class="col-md-6" >
              <p class="trimming2" style="margin-left:40px;">
                <img class="img-responsive" src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$randomUser['Image'][0]['dir']."/thumb350_".$randomUser['Image'][0]['photo_user']);?>" alt="<?php echo h($randomUser['User']['nickname']); ?>">
              </p>
            </div>

            <div class="col-md-6" >

                <h1 class="text-left"><?php echo $randomUser['User']['nickname']; ?>さん</h1>
                <h1 class="text-left"><?php echo $total_match_point ;?>％  match</h1>

                <div class="text-left" style="margin-top:40px;">

                    <h4>
          <?php echo $randomUser['User']['age']; ?>才の<?php echo $randomUser['User']['workText']; ?>です。<br/>
          基本的に<?php echo $randomUser['User']['kibouyoubiText']; ?>の<?php echo $randomUser['User']['kibouzikan']; ?>時からは大丈夫です。
          <?php echo $randomUser['User']['kibouekiText']; ?>駅は行きやすいです。<br />
          <?php echo $randomUser['User']['genreText']; ?>が好きです！<br />
                    </h4>

        </div>


                <div style="margin-top:40px;">

                   <div class="text-right"><a href="<?php echo $this->Html->url('/meetings/detail'); ?>" class="btn btn btn-primary">DATE</a></div>

        </div>

        <div class="text-right" style="margin-top:0px;">

                   <div class="text-left">

                    <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>">
                    <?php echo $this->Html->image('next2.png', array('alt' => '次へ','width'=>'150','height'=>'150')); ?>
                 </a>

                   </div>
                            
        </div>



            </div>

       </div>

    </div>
    <!-- /.container -->