<h1>Hello</h1>

<?= $this->paginator->prev('前へ'.__(''),[],null,['class' => 'prev disabled']); ?>

<?= $this->Paginator->counter([
  'format' => __('{:page}/{:pages}ページを表示')
]);
?>

<?= $this->Paginator->next(__('') . '次へ',[],null,['class' => 'next disabled']); ?>
<table>
    <tr>
      <th>ID</th>
      <th>タイトル</th>
      <th>カテゴリー</th>
      <th>削除</th>
    </tr>
    <?php foreach($posts as $post): ?>
      <tr>
        <td><?= $post['Post']['id']; ?></td>
        <td>
        <?= $this->Html->link($post['Post']['title'],[
            'controller' => 'posts',
            'action' => 'show',
             $post['Post']['id']
          ]); ?>
        </td>
        <td><?= $post['Category']['name'] ?></td>
        <td>
          <?= $this->Form->postLink(
            '削除',
            ['action'=>'delete',$post['Post']['id']],
            ['class'=>'deleteBtn'],
            '本当に削除しますか？'
          ); ?>

        </td>
      </tr>
    <?php endforeach; ?>

  </tr>
</table>
