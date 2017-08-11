
  <h1><?= $post['Post']['title']; ?></h1>

  <?php foreach($post['Tag'] as $tag): ?>
   <?= $tag['name']; ?>,
  <?php endforeach; ?>
  <p><?= $post['Category']['name']; ?></p>

  <p><?= $post['Post']['content']; ?></p>

  <?php foreach($post['Comment'] as $comment): ?>
    <p><?= $comment['content']; ?></p>
  <?php endforeach; ?>
