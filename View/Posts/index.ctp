<h1>Blog posts</h1>

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
    <td><?php echo h($post['Post']['title']); ?></td>
    <td><?php echo h($post['Post']['created']); ?></td>
  </tr>
<?php } ?>
</table>
