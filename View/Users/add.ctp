<h1>ユーザー新規登録画面</h1>

<form action="/gachakoi/users/add" enctype="multipart/form-data" role="form" id="UserAddForm" method="post" accept-charset="utf-8">

      <div style="display:none;">
            <input type="hidden" name="_method" value="POST"/>
      </div>     

      <fieldset>

            <label for="UserUsername">メールアドレス</label>
            <input name="data[User][username]" type="text" id="UserUsername" />

            <label for="UserPassword">パスワード</label>
            <input name="data[User][password]" type="password" id="UserPassword"/>

            <label for="UserNickname">お名前</label>
            <input name="data[User][nickname]" type="text" id="UserNickname"/>

            <label class="radio-inline">
            <input type="radio" name='User.gender' id="UserGender" value="1" checked>
            男性
            </label>
            </div>
            <div class="radio">
            <label class="radio-inline">
            <input type="radio" name='User.gender' id="UserGender" value="2">
            女性
            </label>

            <label for="UserBirthdayMonth">お誕生日</label>
            <select class="span2" name="data[User][birthday][year]" id="UserBirthdayYear">
                  <?php for($year=date("Y",strtotime("-40 year")); $year<=date("Y",strtotime("-20 year")); $year++) {
                        print('<option value="'.$year.'">'.$year.'</option>');
                  } ?>
            </select>

            <select class="span2" name="data[User][birthday][month]" id="UserBirthdayMonth">
                  <?php 
                        for($month=1; $month<13; $month++){
                        print('<option value="'.$month.'">'.$month.'</option>');
                        }
                  ?>
            </select>

            <select class="span2" name="data[User][birthday][day]" id="UserBirthdayDay">
                  <?php 
                        for($day=1; $day<32; $day++){
                        print('<option value="'.$day.'">'.$day.'</option>');
                        }
                  ?>
            </select> 

            <div class="input select">
            <label for="UserWork">お仕事</label>
            <select name="data[User][work]" id="UserWork">
            <option value="1">大学生</option>
            <option value="2">大学院生</option>
            <option value="3">会社員</option>
            <option value="4">公務員</option>
            <option value="5">経営者</option>
            <option value="6">自営業</option>
            <option value="7">農業</option>
            <option value="8">医者</option>
            <option value="9">弁護士</option>
            <option value="10">ニート</option>
            <option value="11">ハイパーメディアクリエイター</option>
            <option value="12">その他</option>
            </select>
            </div>

            <div class="input select">
            <label for="UserKibouyoubi">夜暇な曜日</label>
            <select name="data[User][kibouyoubi]" id="UserKibouyoubi">
            <option value="1">月曜日</option>
            <option value="2">火曜日</option>
            <option value="3">水曜日</option>
            <option value="4">木曜日</option>
            <option value="5">金曜日</option>
            <option value="6">土曜日</option>
            <option value="0">日曜日</option>
            </select>
            </div>

            <label for="UserKibouzikanHour">夜暇な時間</label>

            <select class="span2" name="data[User][kibouzikan][meridian]" class="form-control input-sm" id="UserKibouzikanMeridian">
                    <option value="am">午前</option>
                    <option value="pm" selected="selected">午後</option>
            </select>

            <select class="span2" name="data[User][kibouzikan][hour]" class="form-control input-sm" id="UserKibouzikanHour">
                  <?php 
                        for($hour=1; $hour<13; $hour++){
                            echo "<option value=\"$hour\"";
                                if($hour==7){
                                    echo "selected=selected";  
                                }
                            echo ">$hour</option>";
                        }
                  ?>
            </select>

            <select class="span2" name="data[User][kibouzikan][min]" class="form-control input-sm" id="UserKibouzikanMin">
                  <option value="0" selected="selected">0</option>
                  <option value="30">30</option>
            </select>

            <label for="UserKiboueki">好きな山手線の駅</label>
            <select name="data[User][kiboueki]" id="UserKiboueki">
            <option value="1">東京</option>
            <option value="2">有楽町</option>
            <option value="3">新橋</option>
            <option value="4">浜松町</option>
            <option value="5">田町</option>
            <option value="6">品川</option>
            <option value="7">大崎</option>
            <option value="8">五反田</option>
            <option value="9">目黒</option>
            <option value="10">恵比寿</option>
            <option value="11">渋谷</option>
            <option value="12">原宿</option>
            <option value="13">代々木</option>
            <option value="14">新宿</option>
            <option value="15">新大久保</option>
            <option value="16">高田馬場</option>
            <option value="17">目白</option>
            <option value="18">池袋</option>
            <option value="19">大塚</option>
            <option value="20">巣鴨</option>
            <option value="21">駒込</option>
            <option value="22">田端</option>
            <option value="23">西日暮里</option>
            <option value="24">日暮里</option>
            <option value="25">鶯谷</option>
            <option value="26">上野</option>
            <option value="27">御徒町</option>
            <option value="28">秋葉原</option>
            <option value="29">神田</option>
            </select>

            <label for="UserImage">写真</label>
            <input type="file" name="data[User][image]"  id="UserImage"/>     

            <div class="submit">
            <input  class="btn btn-primary" type="submit" value="登録する"/>
            </div>

</form>
</div>

      </fieldset>