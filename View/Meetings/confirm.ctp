<div class="container">

        <div class="row" style="margin-top:170px;">

            <h2 class="featurette-heading"><?php echo $randomUser['User']['nickname']; ?>さんを
                <span class="text-muted">デートに誘いました。</span>
            </h2>

            <h3><?php echo $randomUser['User']['nickname']; ?>さんがOKするのをお待ち下さい。</h3>

            <div class="col-lg-4 col-md-4 col-md-offset-4 portfolio-item" style="margin-top:50px;">
               <a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="btn btn-primary"><span class="glyphiconglyphicon-home" ></span>トップ画面に戻る<a>
            </div>

        </div>

</div>