<div class="container">
                         <!-- main col left --> 
                         <div class="col-sm-12">
                            <?php echo $this->Session->flash('auth'); ?>
                              <div class="panel panel-default">
                                <div class="panel-body">
                                  <p>「僕を飲みに誘って」は、「誰かと好きな店で飲みたいな。でも自分から誘うのも面倒だな」と思う人が、とりあえずサービスに登録して、誘いのメールを待つというサービスです。ここまでで、既にお分かりと思いますが、本当に使えない糞サービスです。</p>
                                </div>
                              </div>
                           
                          </div>
                          
                          <!-- main col right -->
                          <div class="col-sm-12">
                      
                               <div class="panel panel-default">
                                 <div class="panel-heading"> <h4>使い方</h4></div>
                                  <div class="panel-body">
                                    <p class="lead"> ①自分のが誘って欲しいお店を選ぶ。そして誰かに誘われるのをひたすら待つ。</p>
                                    <p> まず、自分を飲みに誘って欲しいお店を<a href="<?php echo $this->Html->url('/users/my_bar/'.$LoginUserId); ?>">ここ</a>から選択して下さい。初期設定では<?php echo $data['Bar']['name'] ;?>になっています。選択肢の中に気に入ったお店がなけれな、<a href="<?php echo $this->Html->url('/bars/admin_register'); ?>">ここ</a>から登録すれば、選択できるようになりますよ。待ってれば、だれかから飲みに誘うメールが来るかもしれません。１年でも２年でも気長に待ちましょう。</p>
                                    <img src="<?php echo $this->Html->url("/webroot/img/matu2.jpg");?>" class="img-responsive">
                                    <hr>
                                    <p class="lead"> ②そんなに待てない超短気な人は、誰かを誘う</p>
                                    <p> 画面上の「飲みに誘う」ボタンを押して、日時を入力して、「飲みに誘う」ボタンを押すと相手にメールが届きます。なるべく相手の希望曜日と時間に合わせて誘ってあげて下さい。次の人が見たければ、「次へ」ボタンを押して下さい。<br />※「え、相手選べないの？しかも男もでんじゃん。しかも飲み屋をこっちから指定出来ないのかよ」とか思った人いますよね。うん、そこはふつうにごめん、、。</p>
                                    <img src="<?php echo $this->Html->url("/webroot/img/matu.jpg");?>" class="img-responsive">
                                    <hr>
                                    <p class="lead">③成立したら、待ち合わせ日時に<strong>お店</strong>に行く</p>
                                    <p> 誘った飲み相手がOKしたらあなたにメールが届きます。「飲みの予定」から当日の待ち合わせ時間と場所を確認して、お店に行きましょう。待ち合わせは<strong>お店の中</strong>です。ドタキャンや遅刻をすると飲み相手が凄く寂しいことになるので、絶対やめて下さい。まーでも相手が来なかいことは往々にしてあり得るので、そこは覚悟しておきましょう。（あと、お店がいっぱいだったら、どこか他の店に行って下さい。</p>
                                    <img src="<?php echo $this->Html->url("/webroot/img/au.jpg");?>" class="img-responsive">
                               </div>
                              </div>

                       </div><!--/row-->
</div>