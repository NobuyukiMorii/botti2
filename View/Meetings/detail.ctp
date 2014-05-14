<?php echo $this->Html->script(array('jquery-1.10.2.js', 'jquery-ui-1.10.4.custom','jquery.ui.datepicker-ja'), array('inline'=>false)); ?>
<?php echo $this->Html->css(array('jquery-ui-1.10.4.custom'), array('inline'=>false)); ?>
<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=false', false); ?>

<div class="container">

  <div class="row" style="margin-top:0px;">

    <a target="_blank" href="<?php echo $randomBar['Bar']['url']; ?>">
      <h2 class="text-left"><?php echo h($randomBar['Bar']['name']); ?></h2>
    </a>

  </div>

  <div class="row" style="margin-top:-20px;">

    <div class="col-md-5" >

      <div>

        <p class="trimming3" style="margin-top:0px;">
          <a target="_blank" href="<?php echo $randomBar['Bar']['url']; ?>">
            <img class="img-responsive" src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$randomBar['Image'][0]['dir']."/thumb350_".$randomBar['Image'][0]['photo_bar']);?>" alt="<?php echo h($randomUser['User']['nickname']); ?>">
          </a>
        </p>

      </div>

      <div style="margin-top:400px;">

        <dl class="text-left" style="margin-left:-20px;">
          <dt>住所</dt>  
          <dd><?php echo $randomBar['Bar']['location']; ?></dd>
          <dt>電話番号</dt>
          <dd><?php echo $randomBar['Bar']['telnumber']; ?></dd>
        </dl>

        <div class="text-left" style="margin-left:-20px;" >
          <?php echo $this->Html->link('戻る', '/meetings/roulette', array('class' => 'btn btn-success', 'target' => '_blank')); ?>
        </div>

      </div>

    </div>

    <div class="col-md-7" >

      <div class="text-left" style="margin-top:60px;">

        <h2><strong><?php echo $randomUser['User']['kibouekiText']; ?>駅</strong>を希望している<?php echo h($randomUser['User']['nickname']); ?>さんにぴったりなお店。<br />
          <?php echo h($randomUser['User']['nickname']); ?>さんは<strong><?php echo h($randomUser['User']['genreText']); ?></strong>が好きだし、絶対に喜ぶはず！<br /></h2>

        </div>

        <div class="text-left" style="margin-top:60px;">

          <div class ="well my-inline form-inline">

            <div>
              <?php echo $this->Form->create('Meeting',array('type' => 'post', 'action'=>'confirm', 'enctype' => 'multipart/form-data', 'role' => 'form'));?>
              <p>待ち合わせ日時</p>
              <div class = "form-group">
                <?php echo $this->Datepicker->datepicker('Meeting.date', array(
                  'label' => false,
                  'type' => 'text',
                  'default' => date('Y/m/d', strtotime($NextWeekDay)),
                  'empty' => true,
                  'maxYear' => date('Y'),
                  'inline' => true
                  ));
                  ?>
                </div>

                <div class = "form-group">
                  <?
                  echo $this->form->input('Meeting.time', array(
                    'label' => false,
                    'default' => $matiawase,
                    'timeFormat' => '24',
                    'dateFormat' => 'H:i:s',
                    'empty' => true,
                    'separator' => '/',
                    'interval' => 30
                    ));
                    ?>
                  </div>

                </div>


                <div>
                  <h4 class="text-left text-info"; style="margin-top:10px;">
                    <?php echo $randomUser['User']['nickname']; ?>さんは<?php echo $randomUser['User']['kibouyoubiText']; ?>の<?php echo $randomUser['User']['kibouzikan']; ?>をご希望です。
                  </h4>
                </div>

                <div class = "form-group" style="margin-top : 30px">
                  <p>待ち合わせ場所</p>
                  <div class="radio">

                    <?php echo $this->Form->radio(
                      'Meeting.meetingspot',
                      array(
                        $randomBar['Bar']['stationText'].'駅'.$randomBar['Bar']['gate'].'の改札前'
                        => $randomBar['Bar']['stationText'].'駅'.$randomBar['Bar']['gate'].'の改札前（'.$randomBar['Bar']['name'].'まで徒歩'.$randomBar['Bar']['walk_time'].'分）', 
                        $randomBar['Bar']['name'].'の店内'
                        => $randomBar['Bar']['name'].'の店内'
                        ), 
                      array(
                        'legend' => false,'separator' => "<br />",
                        'value' => $randomBar['Bar']['stationText'].'駅'.$randomBar['Bar']['gate'].'の改札前'
                        ),
                      array(
                        'class' => 'form-group',
                        'required' => false
                        )
                      )
                      ;?>

                    </div>

                  </div>

                  <div class="text-right" style="margin-top : 0px">
                    <?php echo $this->Form->submit('Book', array('class' => 'btn btn-primary'));?>
                  </div>

                  <?php echo $this->Form->end();?>

                </form>

              </div>

            </div>
          </div>
          <?
  // Override any of the following default options to customize your map
          $map_options = array(
            'id' => 'map_canvas',
            'width' => '1100px',
            'height' => '400px',
            'style' => '',
            'zoom' => 7,
            'type' => 'ROADMAP',
            'custom' => null,
            'localize' => false,
            'latitude' => 35.681382,
            'longitude' => 139.766084,
            'address' => $randomBar['Bar']['location'],
            'marker' => false,
            'markerTitle' => 'This is my position',
            'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
            'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
            'infoWindow' => true,
            'windowText' => 'My Position'
            );
            ?>

            <?= $this->GoogleMap->map($map_options); ?>

            <?
  // Override any of the following default options to customize your route
            $directions_options = array(
              'travelMode' => "WALKING",
              'directionsDiv' => 'directions',
              );
              ?>
              <div id="directions"></div>
              <?= $this->GoogleMap->getDirections("map_canvas", "directions1", array("from" => $randomBar['Bar']['stationText'].'駅'.$randomBar['Bar']['gate'], "to" => $randomBar['Bar']['location']), $directions_options); ?>

            </div>
          </div>

          <!-- /.container -->

