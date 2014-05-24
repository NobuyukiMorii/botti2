<div class="container">
                         <!-- main col left --> 
                         <div class="col-sm-5">
                           
                              <div class="panel panel-default">
                                <div class="panel-thumbnail"><img src="<?php echo $this->Html->url("/webroot/files/image/photo_bar/".$data['Image'][0]['dir']."/thumb250_".$data['Image'][0]['photo_bar']);?>" class="img-responsive"></div>
                                <div class="panel-body">
                                  <p>「ぼっち」はひとりぼっちのぼっちです。「私はぼっちじゃない！友達いるもん！」はい。そうだと思います。でも、たまに誰とも予定も合わなくて寂しくなっちゃう時とか、ふとした時にひとりぼっちになることってありますよね。そういう意味では、みんなぼっちです。「ぼっち飲み」は、飲みたいぼっち２人が、お気に入りのお店で飲むためのサービスです。</p>
                                  <ul>
                                    <li>飲みたいけど、最近飲む友達がいない。</li>
                                    <li>親しい友達はお酒が好きじゃない</li>
                                    <li>友達の前でいっぱい飲むのはキャラ的に気が引ける</li>
                                    <li>他の人の好きなお店に行ってみたい</li>                                    
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
                                    <p class="lead"> ①自分のが誘って欲しいお店を登録する</p>
                                    <p> ログインしたら最初に、自分の好きなお店を<a href="<?php echo $this->Html->url('/users/my_bar/'.$LoginUserId); ?>">ここ</a>から選択して下さい。初期設定では<?php echo $data['Bar']['name'] ;?>になっています。選択肢の中に気に入ったお店がなけれな、<a href="<?php echo $this->Html->url('/bars/admin_register'); ?>">ここ</a>から登録すれば、選択できるようになりますよ。</p>
                                    <hr>
                                    <p class="lead"> ②誰かを誘う</p>
                                    <p> 画面上の「誰かを誘う」ボタンを押すと、飲み相手と飲むお店が表示されます。「飲みに誘う」ボタンを押すと相手にメールが届きます。なるべく相手の希望曜日と時間に合わせて誘ってあげて下さい。<br />次の人が見たければ、「次へ」ボタンを押して下さい。</p>
                                    <hr>
                                    <p class="lead">③成立</p>
                                    <p> 誘った飲み相手がOKしたらあなたにメールが届きます。「飲みの予定」から当日の待ち合わせ時間と場所を確認して、お店に行きましょう。ドタキャンや遅刻をすると飲み相手が凄く寂しいことになるので、絶対やめて下さい。</p>
                               </div>
                              </div>

                       </div><!--/row-->
</div>