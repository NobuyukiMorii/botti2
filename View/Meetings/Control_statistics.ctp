<!-- content -->                      
<div class="row">
  
 <!-- main col left --> 
 <div class="col-sm-5">
   
      <div class="panel panel-default">
        <div class="panel-body">
          <p class="lead">本日の予約人数</p>
          <h1><?php echo $count_today ;?>人</h1>
        </div>
      </div>

   
      <div class="panel panel-default">
        <div class="panel-heading"><h4>今週のご予約 計<?php echo $count_in_week ;?>人</h4></div>
          <div class="panel-body">
            <div class="list-group">
              <a href="http://bootply.com/tagged/datetime" class="list-group-item"><?php echo date('n月j日',strtotime("+1 day")) ;?> / <?php echo $count_tomorrow ;?>人</a>
              <a href="http://bootply.com/tagged/datetime" class="list-group-item"><?php echo date('n月j日',strtotime("+3 day")) ;?> / <?php echo $count_2d ;?>人</a>
              <a href="http://bootply.com/tagged/datetime" class="list-group-item"><?php echo date('n月j日',strtotime("+4 day")) ;?> / <?php echo $count_3d ;?>人</a>
              <a href="http://bootply.com/tagged/datetime" class="list-group-item"><?php echo date('n月j日',strtotime("+5 day")) ;?> / <?php echo $count_4d ;?>人</a>
              <a href="http://bootply.com/tagged/datetime" class="list-group-item"><?php echo date('n月j日',strtotime("+6 day")) ;?> / <?php echo $count_5d ;?>人</a>
              <a href="http://bootply.com/tagged/datetime" class="list-group-item"><?php echo date('n月j日',strtotime("+7 day")) ;?> / <?php echo $count_6d ;?>人</a>
              <a href="http://bootply.com/tagged/datetime" class="list-group-item"><?php echo date('n月j日',strtotime("+2 day")) ;?> / <?php echo $count_7d ;?>人</a>
            </div>
          </div>
      </div> 		
   
  </div>
  
  <!-- main col right -->
  <div class="col-sm-7">

       <div class="panel panel-default">
         <div class="panel-heading"> <h4>登録人数</h4></div>
          <div class="panel-body">
            <p> <?php echo $user_count ;?>人</p>
            <div class="clearfix"></div>
          </div>
       </div>

       <div class="panel panel-default">
         <div class="panel-heading"> <h4>男女比</h4></div>
          <div class="panel-body">
            <p> 男：<?php echo $male_count ;?>人女：<?php echo $female_count ;?>人</p>
            <div class="clearfix"></div>
          </div>
       </div>

       <div class="panel panel-default">
         <div class="panel-heading"> <h4>年齢層</h4></div>
          <div class="panel-body">
            <p> 20-24才<?php echo $u24_count ;?>人、25-29才<?php echo $u29_count ;?>人、30-34才<?php echo $u34_count ;?>人、35-39才<?php echo $u39_count ;?>人、40以上才<?php echo $over40_count ;?>人、</p>
            <div class="clearfix"></div>
          </div>
       </div>

       <div class="panel panel-default">
         <div class="panel-heading"> <h4>過去予約人数</h4></div>
          <div class="panel-body">
            <p> <?php echo $past_yoyaku_count ;?>人</p>
            <div class="clearfix"></div>
          </div>
       </div>

        </div>
      </div>
    
  </div>
</div><!--/row-->
                      
