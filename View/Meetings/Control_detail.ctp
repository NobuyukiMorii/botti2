ミーティングの情報
    <?php echo h($data['Meeting']['date']); ?>
    <?php echo h($data['Meeting']['time']); ?>
    <?php echo h($data['Meeting']['meetingspot']); ?>
    <?php echo h($data['Meeting']['created']); ?>
    <?php echo h($data['Meeting']['resultText']); ?>

<br />
誘った人の情報
    <?php echo h($data['User']['nickname']); ?>
    <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data['User']['Image'][0]['dir']."/thumb150_".$data['User']['Image'][0]['photo_user']);?>",alt ='UserImage'>
    <?php echo h($data['User']['last_name']); ?>
    <?php echo h($data['User']['first_name']); ?>
    <?php echo h($data['User']['telnumber']); ?>
    <?php echo h($data['User']['gender']); ?>
    <?php echo h($data['User']['birthday']); ?>
    <?php echo h($data['User']['age']); ?>
    <?php echo h($data['User']['work']); ?>
    <?php echo h($data['User']['kibouyoubi']); ?>
    <?php echo h($data['User']['kibouzikan']); ?>
    <?php echo h($data['User']['genre']); ?>
    <?php echo h($data['User']['message']); ?>

<br />
誘われた人の情報

    <?php echo h($data['Meeting']['date_partner']['User']['nickname']); ?>
    <img src="<?php echo $this->Html->url("/webroot/files/image/photo_user/".$data['Meeting']['date_partner']['Image'][0]['dir']."/thumb150_".$data['Meeting']['date_partner']['Image'][0]['photo_user']);?>",alt ='PatnerImage'>
    <?php echo h($data['Meeting']['date_partner']['User']['last_name']); ?>
    <?php echo h($data['Meeting']['date_partner']['User']['first_name']); ?>
    <?php echo h($data['Meeting']['date_partner']['User']['telnumber']); ?>
    <?php echo h($data['Meeting']['date_partner']['User']['gender']); ?>
    <?php echo h($data['Meeting']['date_partner']['User']['birthday']); ?>
    <?php echo h($data['Meeting']['date_partner']['User']['age']); ?>
    <?php echo h($data['Meeting']['date_partner']['User']['work']); ?>
    <?php echo h($data['Meeting']['date_partner']['User']['kibouyoubi']); ?>
    <?php echo h($data['Meeting']['date_partner']['User']['kibouzikan']); ?>
    <?php echo h($data['Meeting']['date_partner']['User']['genre']); ?>
    <?php echo h($data['Meeting']['date_partner']['User']['message']); ?>


<br />

    <a class="btn btn-primary" href="<?php echo $this->Html->url("/Meetings/Control_meetinglist/") ;?>">戻る</a>