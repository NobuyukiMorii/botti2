<table>
<?php for ($i = 0; $i < count($data); $i++) { ?>
<tr>
<td><?php echo h($data[$i]['User']['nickname']); ?></td>
<td><?php echo h($data[$i]['User']['birthday']); ?></td>
<td><?php echo h($data[$i]['User']['work']); ?></td>
<td><?php echo h($data[$i]['Meeting']['date']); ?></td>
<td><?php echo h($data[$i]['Meeting']['time']); ?></td>
<td><?php echo h($data[$i]['Meeting']['meetingspot']); ?></td>
<td><?php echo h($data[$i]['Bar']['name']); ?></td>
<td><?php echo h($data[$i]['Bar']['station']); ?></td>
</tr>
<?php } ?>
</table>