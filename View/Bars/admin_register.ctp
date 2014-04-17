<?php echo $this->Form->create('Bar',array('type' => 'post', 'action'=>'admin_confirm', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>

    <h2>新しくバーを登録する</h2>

        <div class="form-group">
         <?php echo $this->Form->input('Bar.name', array('class' => 'form-control'));?>
        </div>
        <div class="form-group">
         <?php echo $this->Form->input('Bar.location', array('class' => 'form-control'));?>
        </div>
        <div class="form-group">
         <?php echo $this->Form->input('Bar.telnumber', array('class' => 'form-control'));?>
        </div>
        <div class="form-group">
         <?php echo $this->Form->input('Bar.station', array('class' => 'form-control'));?>
        </div>
        <div class="form-group">
         <?php echo $this->Form->input('Bar.gate', array('class' => 'form-control'));?>
        </div>
        <div class="form-group">
         <?php echo $this->Form->input('Bar.price', array('class' => 'form-control'));?>
        </div>
        <div class="form-group">
         <?php echo $this->Form->input('Bar.description', array('class' => 'form-control'));?>
        </div>
        <div class="form-group">
         <?php echo $this->Form->input('Bar.url', array('class' => 'form-control'));?>
        </div>
        <?php echo $this->Form->file('Bar.image', array('class' => 'btn'));?>

<!--    <input type = "file" id = "BarImage" name = data["Bar"]["image"] style = "display: none;">

        <div class="input-prepend">
        <a class="btn" onclick="$('#file-input').click();"><i class="icon-folder-open"></i></a>
        <span id="cover" class="input-xlarge uneditable-input">select file</span>
        </div>

        <script type="text/javascript">
        $('#file-input').change(function() {
        $('#cover').html($(this).val());
        });
        </script>
 -->
        <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-primary'));?>
        <?php echo $this->Form->end();?>

