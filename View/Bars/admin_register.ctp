<form  action="<?php echo $this->Html->url("/bars/admin_confirm");?>" method="post" enctype="multipart/form-data">

    <h2>バー登録画面</h2>

        <p>ID</p>
        <input type="text" name="data[Bar][id]">
        <br />
        <p>店名</p>
        <td><input type="text" name="data[Bar][name]"></td>
        <br />
        <p>住所</p>
        <input type="text" name="data[Bar][location]">
        <br />
        <p>電話番号</p>
        <input type="text" name="data[Bar][telnumber]">
        <br />
        <p>最寄駅</p>
        <input type="text" name="data[Bar][station]">
        <br />
        <p>最寄口</p>
        <input type="text" name="data[Bar][gate]">
        <br />
        <p>料金</p>
        <input type="text" name="data[Bar][price]">
        <br />
        <p>紹介文</p>
        <input type="text" name="data[Bar][description]">
        <br />
        <p>URL</p>
        <input type="text" name="data[Bar][url]">
        <br />
        <p>店舗のエリア</p>
        <label id="area">
        <input type="checkbox" name="data[Bar][area]" value="東京" id="area">東京<br />
        <input type="checkbox" name="data[Bar][area]" value="大阪" id="area">大阪<br />
        <input type="checkbox" name="data[Bar][area]" value="札幌" id="area">札幌<br />
        <input type="checkbox" name="data[Bar][area]" value="仙台" id="area">仙台<br />
        <input type="checkbox" name="data[Bar][area]" value="博多" id="area">博多<br />
        <input type="checkbox" name="data[Bar][area]" value="松山" id="area">松山<br />
        </label>
        <br />

        <p>写真</p>
        <input type="file" name="data[Bar][image]">
        <br />
        <input type="submit" value="登録する">

</form>