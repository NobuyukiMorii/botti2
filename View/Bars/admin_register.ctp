<?php echo $this->Form->create('Bar',array('type' => 'post', 'action'=>'admin_confirm', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>

    <h2>新しくバーを登録する</h2>

        <div class="form-group">
         <?php echo $this->Form->input('Bar.name', array('class' => 'form-control','required' => false));?>
        </div>

        <div class="form-group">
         <?php echo $this->Form->input('Bar.location', array('class' => 'form-control','required' => false));?>
        </div>

        <div class="form-group">
         <?php echo $this->Form->input('Bar.telnumber', array('class' => 'form-control','required' => false));?>
        </div>

        <div class="form-group">
        <?php echo $this->Form->input('Bar.station',array('type'=>'select','options'=>array('1'=>'東京','2'=>'有楽町','3'=>'新橋','4'=>'浜松町','5'=>'田町','6'=>'品川','7'=>'大崎','8'=>'五反田','9'=>'目黒','10'=>'恵比寿','11'=>'渋谷','12'=>'原宿','13'=>'代々木','14'=>'新宿','15'=>'新大久保','16'=>'高田馬場','17'=>'目白','18'=>'池袋','19'=>'大塚','20'=>'巣鴨','21'=>'駒込','22'=>'田端','23'=>'西日暮里','24'=>'日暮里','25'=>'鶯谷','26'=>'上野','27'=>'御徒町','28'=>'秋葉原','29'=>'神田'),'required' => false)); ?>
        </div>

        <div class="form-group">
         <?php echo $this->Form->input('Bar.gate', array('class' => 'form-control','required' => false));?>
        </div>

        <div class="form-group">
        <?php echo $this->Form->input('Bar.price',array('type'=>'select','required' => false,'options'=>array('安'=>'安','中'=>'中','高'=>'高'))); ?>
        </div>

        <div class="form-group">
         <?php echo $this->Form->input('Bar.description', array('class' => 'form-control','required' => false));?>
        </div>

        <div class="form-group">
         <?php echo $this->Form->input('Bar.url', array('class' => 'form-control','required' => false));?>
        </div>

        <?php echo $this->Form->file('Bar.image', array('class' => 'btn','required' => false));?>

        <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-primary'));?>
        <?php echo $this->Form->end();?>
