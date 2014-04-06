<form  action="<?php echo $this->Html->url("/bars/result");?>" method="post" >

    <h3>検索画面</h3>
    <table>
    <tr>
        <th>店名</th>
    </tr>
    <td><input type="text" name="data[Bar][name]"></td>
    </table>

    <input type="submit" value="Go">

</form>
