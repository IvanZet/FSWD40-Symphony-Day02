<h1>List of Posts</h1>
<table>
<tr><th>Date</th><th>Title</th></tr>
<?php foreach ($posts as $post): ?>
 <tr>
   <td><?php echo $post['post_date'] ?></td>
   <td><?php echo $post['post_title'] ?></td>
 </tr>
<?php endforeach; ?>
</table>