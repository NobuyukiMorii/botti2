<h1>デートの集合場所と時間を入力してね！</h1>

<TABLE BORDER="0">
<TR>
<TD>
    <div class="table-responsive">
    <table height="40" class = "table table-striped table-bordered table-condensed table-hover">
    <tr>
        <th>写真</th>
        <th>ニックネーム</th>
        <th>年齢</th>
        <th>性別</th>
        <th>職業</th>
        <th>メッセージ</th>
    </tr>
    <tr>
        <td><img src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>", width = '200', height = '200' , alt ='UserImage'></td>
        <td><?php echo h($randomUser['User']['nickname']); ?></td>
        <td><?php echo h($randomUser['User']['age']); ?></td>
        <td><?php echo h($randomUser['User']['genderText']); ?></td>
        <td><?php echo h($randomUser['User']['work']);?></td>
        <td><?php echo h($randomUser['User']['message']);?></td>
    </tr>
    </table>
    </div>
</TD>
<TD>
    <div class="table-responsive">
    <table height="40" class = "table table-striped table-bordered table-condensed table-hover">
    <tr>
        <th>写真</th>
        <th>店名</th>
        <th>住所</th>
        <th>電話番号</th>
        <th>料金</th>
        <th>紹介文</th>
    </tr>
    <tr>
        <td><a href="<?php echo h($randomBar['Bar']['url']) ?>"><img src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>", width = '200', height = '200' , alt ='BarImage'></a></td>
        <td><a href="<?php echo h($randomBar['Bar']['url']) ?>"><?php echo h($randomBar['Bar']['name']); ?></a></td>
        <td><?php echo h($randomBar['Bar']['location']);?></td>
        <td><?php echo h($randomBar['Bar']['telnumber']); ?></td>
        <td><?php echo h($randomBar['Bar']['price']); ?></td>
        <td><?php echo h($randomBar['Bar']['description']); ?></td>
    </tr>
    </table>
    </div>
</TD>
</TR>
</TABLE>

<dl align = left ;>
  <dt><?php echo h($randomUser['User']['nickname']); ?>さんは</dt>
  <dd><?php echo h($randomUser['User']['kibouyoubi']);?>曜日の<?php echo h($randomUser['User']['kibouzikan']);?>からが都合よくて、</dd>
</dl>
<dl>
  <dt><?php echo h($randomBar['Bar']['name']); ?>の最寄り駅は、</dt>
  <dd><?php echo h($randomBar['Bar']['station']); ?>、最寄り口は<?php echo h($randomBar['Bar']['gate']); ?>だよ！</dd>
</dl>



<!--     <form  action="/gachakoi/Meetings/confirm" method="post">

    <p>何月何日</p><br />
    <input type="dateTime" name="data[Meeting][date]">
    <br />
    <p>時間</p><br />
    <input type="dateTime" name="data[Meeting][time]">
    <p>駅</p><br />
    <input type="text" name="data[Meeting][station]">
    <br />
    <p>何口</p><br />
    <input type="text" name="data[Meeting][gate]">
    <br />
    <p>待ち合わせ場所</p><br />
    <input type="text" name="data[Meeting][meetingspot]">
    <br />
    <input type="submit" value="送信する">
    </form>
 -->
<?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'confirm', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>
    <fieldset>
    <div class="form-group">
    <?php echo $this->Form->input('Meeting.date', array('class' => 'form-control'));?>
    <?php echo $this->Form->error('Meeting.date]', array('class' => "warning")); ?>
    </div>

    <div class="form-group">
    <?php echo $this->Form->input('Meeting.time', array('class' => 'form-control'));?>
    <?php echo $this->Form->error('Meeting.time', array('class' => "warning")); ?>
    </div>

<!--     <div class="form-group">
    <select name='Meeting.station' id="MeetingStation" class="form-control">
    <option value="h($randomBar['Bar']['station']" selected><?php echo h($randomBar['Bar']['station']); ?></option>
    <?php
    $stations = array ('東京','有楽町','新橋','浜松町','田町','品川','大崎','五反田','目黒','恵比寿','渋谷','原宿','代々木','新宿','新大久保','高田馬場','目白','池袋','大塚','巣鴨','駒込','田端','西日暮里','日暮里','鶯谷','上野','御徒町','秋葉原','神田');
    foreach($stations as $station){
    print('<option value="'.$station.'">'.$station.'</option>');
    }
    ?>
    </select>
    </div> -->

    <div class="form-group">
        <select name="data[Meeting][meetingspot]" id="Meetingspot" class="form-control">
        <option value="" selected><?php echo h($randomBar['Bar']['station']); ?>の近くの待ち合わせ場所をお選びください。</option>
        <option value="<?php echo h($randomBar['Bar']['station']); ?>の<?php echo h($randomBar['Bar']['gate']); ?>の改札前"><?php echo h($randomBar['Bar']['station']); ?>の<?php echo h($randomBar['Bar']['gate']); ?>の改札前</option>
        <option value="お店の中">お店の中</option>
        </select>
        <?php echo $this->Form->error('Meeting.meetingspot', array('class' => "warning")); ?>
    </div>

    <?php echo $this->Form->submit('本当にデートに誘う', array('class' => 'btn btn-primary'));?>

    </fieldset>
<?php echo $this->Form->end();?>

<a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="btn btn-primary"><span class="glyphiconglyphicon-home"></span>もう一度ガチャする<a>






