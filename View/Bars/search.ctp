<form  action="<?php echo $this->Html->url("/bars/result");?>" method="post" >

    <table>
    <tr>
        <th>店名</th>
    </tr>
    <td><input type="text" name="data[Bar][name]"></td>
    </table>

    <input type="submit" value="Go">

</form>
