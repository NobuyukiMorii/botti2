<p><?php echo $loginUser['nickname'] ?>さん、ガチャしようよ！</p>

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
        <th>都合のいい曜日</th>
        <th>行きやすい駅</th>
        <th>メッセージ</th>
    </tr>
    <tr>
        <td><img src="<?php echo $this->Html->url("/Meetings/image2User/".$randomUser['User']['id']); ?>", width = '200', height = '200' , alt ='UserImage'></td>
        <td><?php echo h($randomUser['User']['nickname']); ?></td>
        <td><?php echo h($randomUser['User']['age']); ?></td>
        <td><?php echo h($randomUser['User']['genderText']); ?></td>
        <td><?php echo h($randomUser['User']['workText']);?></td>
        <td><?php echo h($randomUser['User']['kibouyoubiText']);?>
        <td><?php echo h($randomUser['User']['kibouekiText']);?></td>
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
        <th>最寄駅</th>
        <th>最寄口</th>
        <th>料金</th>
        <th>紹介文</th>
    </tr>
    <tr>
        <td><a href="<?php echo h($randomBar['Bar']['url']) ?>"><img src="<?php echo $this->Html->url("/Meetings/image2Bar/".$randomBar['Bar']['id']); ?>", width = '200', height = '200' , alt ='BarImage'></a></td>
        <td><?php echo h($randomBar['Bar']['name']); ?></td>
        <td><?php echo h($randomBar['Bar']['location']);?></td>
        <td><?php echo h($randomBar['Bar']['telnumber']); ?></td>
        <td><?php echo h($randomBar['Bar']['stationText']); ?></td>
        <td><?php echo h($randomBar['Bar']['gate']);?></td>
        <td><?php echo h($randomBar['Bar']['price']); ?></td>
        <td><?php echo h($randomBar['Bar']['description']); ?></td>
    </tr>
    </table>
    </div>
</TD>
</TR>
</TABLE>

<a href="<?php echo $this->Html->url('/meetings/roulette'); ?>" class="btn btn btn-primary"><span class="glyphiconglyphicon-home"></span>ガチャする<a>
<a href="<?php echo $this->Html->url('/meetings/detail'); ?>" class="btn btn btn-primary"><span class="glyphiconglyphicon-home"></span>デートに誘う<a>



