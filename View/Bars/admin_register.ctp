<h2>新しくバーを登録する</h2>
    <form action="/gachakoi/bars/admin_confirm" enctype="multipart/form-data" role="form" id="BarAdminConfirmForm" method="post" accept-charset="utf-8">

        <div style="display:none;">
            <input type="hidden" name="_method" value="POST"/>
        </div>

                <label for="BarName">名称</label>
                <input name="data[Bar][name]" type="text" id="BarName" value="<?php echo h($this->data["Bar"]["name"]); ?>"/>
                <?php echo $this->Form->error('Bar.name'); ?>

                <label for="BarLocation">住所</label>
                <input name="data[Bar][location]" type="text" id="BarLocation" value="<?php echo h($this->data["Bar"]["location"]); ?>"/>
                <?php echo $this->Form->error('Bar.location'); ?>

                <label for="BarTelnumber">電話番号</label>
                <input name="data[Bar][telnumber]" type="text" id="BarTelnumber" value="<?php echo h($this->data["Bar"]["telnumber"]); ?>" />
                <?php echo $this->Form->error('Bar.telnumber'); ?>


                <label for="BarStation">最寄駅</label>
                    <select name="data[Bar][station]" id="BarStation" value="<?php echo h($this->data["Bar"]["station"]); ?>" >
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
                <?php echo $this->Form->error('Bar.station'); ?>

                <label for="BarGate">最寄口</label>
                    <input name="data[Bar][gate]" type="text" id="BarGate" value="<?php echo h($this->data["Bar"]["gate"]); ?>" />

                <label for="BarPrice">価格</label>
                    <select name="data[Bar][price]" id="Barprice" value="<?php echo h($this->data["Bar"]["price"]); ?>" >
                            <option value="安">安</option>
                            <option value="中">中</option>
                            <option value="高">高</option>
                    </select>
                <?php echo $this->Form->error('Bar.name'); ?>

¥                <label for="BarDescription">紹介文</label>
                    <textarea name="data[Bar][description]" cols="30" rows="6" id="BarDescription" value="<?php echo h($this->data["Bar"]["description"]); ?>" ></textarea>
                <?php echo $this->Form->error('Bar.description'); ?>

                <label for="BarUrl">Url</label>
                    <input name="data[Bar][url]" type="text" id="BarUrl" value="<?php echo h($this->data["Bar"]["url"]); ?>" />
                <?php echo $this->Form->error('Bar.url'); ?>

                <input type="file" name="data[Bar][image]"  class="btn" id="BarImage" value="<?php echo $this->Html->url("/bars/image2".$this->request->data["Bar"]["image"]); ?>"/>
                <?php echo $this->Form->error('Bar.image'); ?>

                <div class="submit">
                    <input  class="btn btn-primary" type="submit" value="登録する"/>
                </div>
    </form>