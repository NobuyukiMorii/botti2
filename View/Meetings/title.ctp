<div class="container">
                         <!-- main col left --> 
                         <div class="col-sm-5">
                           
                              <div class="panel panel-default">
                                <div class="panel-thumbnail"><img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$data['Image'][0]['dir']."/thumb250_".$data['Image'][0]['photo_bar']);?>" class="img-responsive"></div>
                                <div class="panel-body">
                                  <p>「誰か私を飲みに誘って」は、自分のお気に入りのバーに、誰かに誘ってもらう、もしくは一緒に行ってサービスです。</p>
                                  <ul>
                                    <li>あのお店に行きたいけど、１人じゃ入りにくい。</li>
                                    <li>いつもは１人で飲んでるけど、たまには誰かと飲みたい。</li>
                                    <li>おしゃれなお店で誰かと出会いたい。</li>                                    
                                  </ul>
                                  <p>そんな方に是非。</p>
                                </div>
                              </div>
                           
                          </div>
                          
                          <!-- main col right -->
                          <div class="col-sm-7">
                      
                               <div class="panel panel-default">
                                 <div class="panel-heading"> <h4>使い方</h4></div>
                                  <div class="panel-body">
                                    <p class="lead"> ①自分のが誘って欲しいお店を選ぶ。そして誰かに誘われるのを待つ。</p>
                                    <p> ログインしたら最初に、自分の好きなお店を<a href="<?php echo $this->Html->url('/users/my_bar/'.$LoginUserId); ?>">ここ</a>から選択して下さい。初期設定では<?php echo $data['Bar']['name'] ;?>になっています。選択肢の中に気に入ったお店がなけれな、<a href="<?php echo $this->Html->url('/bars/admin_register'); ?>">ここ</a>から登録すれば、選択できるようになりますよ。待ってれば、だれだれかから飲みに誘うメールが来ると思います。</p>
                                    <hr>
                                    <p class="lead"> ②待つだけじゃものたりない人は、誰かを誘う</p>
                                    <p> 画面上の「誰かを誘う」ボタンを押すと、ランダムで飲み相手と飲むお店が表示されます。「飲みに誘う」ボタンを押すと相手にメールが届きます。なるべく相手の希望曜日と時間に合わせて誘ってあげて下さい。<br />次の人が見たければ、「次へ」ボタンを押して下さい。</p>
                                    <hr>
                                    <p class="lead">③成立したら、待ち合わせ日時にお店に行く</p>
                                    <p> 誘った飲み相手がOKしたらあなたにメールが届きます。「飲みの予定」から当日の待ち合わせ時間と場所を確認して、お店に行きましょう。待ち合わせはお店の中です。ドタキャンや遅刻をすると飲み相手が凄く寂しいことになるので、絶対やめて下さい。</p>
                               </div>
                              </div>

                       </div><!--/row-->
</div>