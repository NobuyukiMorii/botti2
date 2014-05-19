      <?php echo $this->Form->create
            (
            'User',
            array(
                  'type' => 'post', 
                  'action'=>'password', 
                  'role' => 'form',
                  'class' => 'form-horizontal text-left'
                  )
            );
      ?>

      <?php echo $this->Form->hidden
            (
            'User.group_id', 
             array(
                  'value'=>'1'
                  )
            );
      ?>

      <div class ="well">

            <div class="form-group">
                  <label for="UserPassword" class="col-sm-2 control-label">パスワード</label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.new_password1', 
                              array(
                                    'class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "6文字以上16文字以下で入力して下さい。",
                                    'id' => "UserPassword"
                                    )
                              );
                        ?>
                  </div>
            </div>

            <div class="form-group">
                  <label for="UserPassword" class="col-sm-2 control-label"></label>
                  <div class="col-sm-5">
                        <?php echo $this->Form->input
                              (
                              'User.new_password2', 
                              array(
                                    'class' => 'form-control',
                                    'required' => false,
                                    'label' => false , 
                                    'div' => false,
                                    'placeholder' => "確認のため、上記と同様のパスワードを入力して下さい。",
                                    'id' => "UserPassword"
                                    )
                              );
                        ?>
                  </div>
            </div>

      </div><!-- /パスワード--> 
            <div class="form-group">
                  <div class="col-sm-2 col-sm-offset-10">
                        <?php echo $this->Form->submit('登録する', array('class' => 'btn btn-success'));?>
                  </div>
            </div>
      <?php echo $this->Form->end(); ?>