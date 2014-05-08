<?php var_dump($data['Meeting']['time']); ?>

	    <div class="container">

	    	<div class="row" style="margin-top:20px;">

	    		<div class="col-md-5" >

	    			<h1 class="text-left"><?php echo $data['Meeting']['date']; ?>(<?php echo $youbi; ?>)</h1>
	    			<h1 class="text-left"><?php echo $data['Meeting']['time']; ?></h1>
	    			<h2 class="text-left"><a href = "<?php echo $data['Bar']['url'] ;?>"><?php echo $data['Bar']['name']; ?></a></h2>
	    			<h2 class="text-left text-primary"><?php echo $data['Meeting']['meetingspot']; ?>待ち合わせ</h2>
	    				<h4>
	    				<dl class="text-left" style="margin-top:30px;">		
	    					<dt>ジャンル<dt>
	    						<dd><?php echo $data['Bar']['genreText']; ?></dd>
	    						<dt>ご予算</dt>
	    						<dd>１人様平均<?php echo $data['Bar']['price']; ?>円</dd>
	    						<dt>アクセス<dt>
	    							<dd><?php echo $data['Bar']['stationText']; ?>駅<?php echo $data['Bar']['gate']; ?>から徒歩<?php echo $data['Bar']['walk_time']; ?>分</dd>
	    							<dt>電話番号</dt>
	    							<dd><?php echo $data['Bar']['telnumber']; ?></dd>
	    							<dt>住所<dt>
	    								<dd><?php echo $data['Bar']['location']; ?></dd>
	    							</dl>
	    						</h4>
	    		</div>


	    		<div class="col-md-4" >


	    						<p class="trimming4" >
	    							<img class="img-responsive" src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$partner_data['Image'][0]['dir']."/thumb400_".$partner_data['Image'][0]['photo_user']);?>" alt="<?php echo h($data['Bar']['name']); ?>" alt="<?php echo h($partner_data['User']['nickname']); ?>">
	    						</p>

	    						<p class="trimming4" style="margin-top:330px;">
	    							<a href = "<?php echo $data['Bar']['url'] ;?>"><img class="img-responsive" src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$data['Bar']['Image'][0]['dir']."/thumb400_".$data['Bar']['Image'][0]['photo_bar']);?>" alt="<?php echo h($data['Bar']['name']); ?>"></a>
	    						</p>

	    		</div>

	    		<div class="col-md-3" >

	    						<h1 class="text-left"><?php echo $data['Meeting']['total_match_point'] ;?>％  match</h1>	    						

	    						<h4>
	    							<dl class="text-left" style="margin-top:50px;">	
	    								<dt>お名前<dt>
	    									<dd><?php echo $partner_data['User']['nickname']; ?>さん</dd>	
	    								<dt>年齢<dt>
	    									<dd><?php echo $partner_data['User']['age']; ?>歳</dd>
	    								<dt>お仕事</dt>
	    									<dd><?php echo $partner_data['User']['workText']; ?></dd>
	    							</dl>
	    						</h4>


	    						<div class ="well my-inline form-inline" style="margin-top:90px;">
	    							<?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'acceptance','role' => 'form'));?>
	    							<div class="boxContainer">
	    								<?php echo $this->Form->submit('NO', array('name' => 'NO','class' => 'btn btn-warning btn-block')); ?>
	    							</div>
	    							<?php echo $this->Form->end();?>
	    						</div>

	    		</div>

	    	</div>

	   	</div>