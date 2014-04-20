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
        <td><?php echo h($randomUser['User']['workText']);?></td>
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
  <dd><?php echo h($randomUser['User']['kibouyoubiText']);?>の<?php echo h($randomUser['User']['kibouzikan']);?>からが都合よくて、</dd>
</dl>
<dl>
  <dt><?php echo h($randomBar['Bar']['name']); ?>の最寄り駅は、</dt>
  <dd><?php echo h($randomBar['Bar']['stationText']); ?>、最寄り口は<?php echo h($randomBar['Bar']['gate']); ?>だよ！</dd>
</dl>

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

    <div class="form-group">
        <select name="data[Meeting][meetingspot]" id="Meetingspot" class="form-control">
        <option value="" selected><?php echo h($randomBar['Bar']['stationText']); ?>駅の近くの待ち合わせ場所をお選びください。</option>
        <option value="<?php echo h($randomBar['Bar']['stationText']); ?>駅<?php echo h($randomBar['Bar']['gate']); ?>の改札前"><?php echo h($randomBar['Bar']['stationText']); ?>駅の<?php echo h($randomBar['Bar']['gate']); ?>の改札前</option>
        <option value="<?php echo h($randomBar['Bar']['name']); ?>のお店の中"><?php echo h($randomBar['Bar']['name']); ?>のお店の中</option>
        </select>
        <?php echo $this->Form->error('Meeting.meetingspot', array('class' => "warning")); ?>
    </div>

    <?php echo $this->Form->submit('本当にデートに誘う', array('class' => 'btn btn-primary'));?>

    </fieldset>
<?php echo $this->Form->end();?>

<a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="btn btn-primary"><span class="glyphiconglyphicon-home"></span>もう一度ガチャする<a>






