
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('image') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('like').'/'.$this->Paginator->sort('unlike') ?></th>
                <th><?= $this->Paginator->sort('rubric_id') ?></th>
                <th><?= $this->Paginator->sort('blog_id') ?></th>
                <th><?= $this->Paginator->sort('state') ?></th>
                <th><?= $this->Paginator->sort('created_at') ?></th>
                <th><?= $this->Paginator->sort('updated_at') ?></th>
                <th><?= $this->Paginator->sort('published_at') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $this->Number->format($post->id) ?></td>
                    <td><?= h($post->title) ?></td>
                    <td><?= h($post->image) ?></td>
                    <td><?= h($post->slug) ?></td>
                    <td>
                        <?= $this->Number->format($post->like).' '.__('like') ?>
                        <?= $this->Number->format($post->unlike).' '.__('unlike')  ?>
                    </td>
                    <td><?= $post->has('rubrics') ? $this->Html->link($post->Rubric->title, ['controller' => 'Rubrics', 'action' => 'view', $post->Rubric->id]) : '' ?></td>
                    <td><?= $post->has('blog') ? $this->Html->link($post->blog->title, ['controller' => 'Blogs', 'action' => 'view', $post->blog->id]) : '' ?></td>
                    <td><?= h($post->state) ?></td>
                    <td><?= h($post->created_at) ?></td>
                    <td><?= h($post->updated_at) ?></td>
                    <td><?= h($post->published_at) ?></td>
                    <td class="actions">
                        <?= $this->element('row_actions',[
                            'item_id'=> $user->id,
                            'view'=>true,
                            'edit'=>true,
                            'validate'=>true,
                            'delete'=>true
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->element('pagination') ?>
    </div>

</div>

