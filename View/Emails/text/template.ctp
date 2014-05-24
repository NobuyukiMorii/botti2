こんにちは<?php echo $partner_name ;?>さん！<?php echo $user_name ;?>さんから飲みのお誘いです！<?php echo "\n" ?>
詳細は以下URLにアクセスして、OKボタンかキャンセルボタンを押して下さい！<?php echo "\n" ?>

http://localhost:8888/botti2/meetings/acceptance/<?php echo $meeting_id ;?><?php echo "\n" ?>

【待ち合わせ】<?php echo "\n" ?>
	日付：<?php echo $meeting_date ;?><?php echo "\n" ?>
	時間：<?php echo $meeting_time_hour ;?>:<?php echo $meeting_time_min ;?><?php echo "\n" ?>
	場所：<?php echo $bar_name ;?>店内<?php echo "\n" ?>

【飲み相手】<?php echo "\n" ?>
	お名前：<?php echo $partner_name ;?>さん<?php echo "\n" ?>
	年齢：<?php echo $partner_age ;?>才<?php echo "\n" ?>
	お仕事：<?php echo $partner_work ;?><?php echo "\n" ?>

【お店】<?php echo "\n" ?>
	お店：<?php echo $bar_name ;?><?php echo "\n" ?>
	ジャンル：<?php echo $bar_genre ;?><?php echo "\n" ?>
	アクセス：<?php echo $bar_station ;?><?php echo $bar_gate ;?>から徒歩<?php echo $bar_walk_time ;?>分<?php echo "\n" ?>
	住所：<?php echo $bar_location ;?><?php echo "\n" ?>
	電話番号：<?php echo $bar_telnumber ;?><?php echo "\n" ?>
	営業時間：<?php echo $bar_start_time ;?>~<?php echo $bar_close_time ;?><?php echo "\n" ?>
	URL：
	<?php echo $bar_url ;?><?php echo "\n" ?>

From ぼっち飲み
http://localhost:8888/botti2/users/login

━━━━━━━━━━━━━━━━━━━━━━━━━━
ぼっち飲み