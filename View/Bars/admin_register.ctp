<?php echo $this->Form->create('Bar',array('type' => 'file', 'action'=>'admin_notice', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>

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
        <?php echo $this->Form->input('Bar.genre',array('type'=>'select','options'=>array('1'=>'和風居酒屋','2'=>'洋風居酒屋','3'=>'中華料理','4'=>'コンセプト居酒屋'),'required' => false)); ?>
        </div>



        <div class="form-group">
         <?php echo $this->Form->input('Bar.walk_time', array('class' => 'form-control','required' => false));?>
        </div>

        <div class="form-group">
         <?php echo $this->Form->input('Bar.price', array('class' => 'form-control','required' => false));?>
        </div>

        <div class="form-group">
        <?php echo $this->form->input('Bar.start_time', array(
          'label' => '開店時間',
          'default' => date('18:00:00'),
          'timeFormat' => '24',
          'dateFormat' => 'H:i:s',
          'empty' => true,
          'separator' => ':',
          'interval' => 10
          ));
        ?>
        </div>

        <div class="form-group">
        <?php echo $this->form->input('Bar.close_time', array(
          'label' => '閉店時間',
          'default' => date('23:00:00'),
          'timeFormat' => '24',
          'dateFormat' => 'H:i:s',
          'empty' => true,
          'separator' => ':',
          'interval' => 10
          ));
        ?>
        </div>

        <div class="form-group">
        <?php echo $this->form->input('Bar.last_order_time', array(
          'label' => 'ラストオーダー',
          'default' => date('23:00:00'),
          'timeFormat' => '24',
          'dateFormat' => 'H:i:s',
          'empty' => true,
          'separator' => ':',
          'interval' => 10
          ));
        ?>
        </div>

        <div class="form-group">
         <?php echo $this->Form->input('Bar.description', array('class' => 'form-control','required' => false));?>
        </div>

        <div class="form-group">
         <?php echo $this->Form->input('Bar.url', array('class' => 'form-control','required' => false));?>
        </div>

        <?php echo $this->Form->hidden('Image.0.model', array('value'=>'Bar'));?>
        <!-- ファイルを選択するボタン -->
        <?php echo $this->Form->input('Image.0.photo_bar', array('type' => 'file')); ?>
        <!-- 送信ボタン -->

        <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-primary'));?>
        <?php echo $this->Form->end();?>
