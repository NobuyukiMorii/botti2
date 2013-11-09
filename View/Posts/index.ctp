<h1>Blog posts</h1>

<?php echo $this->Html->link('新規投稿', '/posts/add'); ?>

<table>
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Created</th>
  </tr>

<!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

<?php foreach ($posts as $post) { ?>
  <tr>
    <td><?php echo h($post['Post']['id']); ?></td>
    <td><?php echo $this->Html->link($post['Post']['title'], '/posts/view/'.$post['Post']['id']); ?></td>
    <td><?php echo h($post['Post']['created']); ?></td>
  </tr>
<?php } ?>
</table>
