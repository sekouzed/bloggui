<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Rubric'), ['action' => 'edit', $rubric->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rubric'), ['action' => 'delete', $rubric->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rubric->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rubrics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rubric'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rubrics view large-10 medium-9 columns">
    <h2><?= h($rubric->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($rubric->title) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($rubric->slug) ?></p>
            <h6 class="subheader"><?= __('Blog') ?></h6>
            <p><?= $rubric->has('blog') ? $this->Html->link($rubric->blog->name, ['controller' => 'Blogs', 'action' => 'view', $rubric->blog->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($rubric->id) ?></p>
            <h6 class="subheader"><?= __('Parent Id') ?></h6>
            <p><?= $this->Number->format($rubric->parent_id) ?></p>
            <h6 class="subheader"><?= __('Lft') ?></h6>
            <p><?= $this->Number->format($rubric->lft) ?></p>
            <h6 class="subheader"><?= __('Rght') ?></h6>
            <p><?= $this->Number->format($rubric->rght) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created At') ?></h6>
            <p><?= h($rubric->created_at) ?></p>
            <h6 class="subheader"><?= __('Updated At') ?></h6>
            <p><?= h($rubric->updated_at) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Posts') ?></h4>
    <?php if (!empty($rubric->posts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Image') ?></th>
            <th><?= __('Slug') ?></th>
            <th><?= __('Intro') ?></th>
            <th><?= __('Content') ?></th>
            <th><?= __('Like') ?></th>
            <th><?= __('Unlike') ?></th>
            <th><?= __('State') ?></th>
            <th><?= __('Rubric Id') ?></th>
            <th><?= __('Blog Id') ?></th>
            <th><?= __('Published At') ?></th>
            <th><?= __('Created At') ?></th>
            <th><?= __('Updated At') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($rubric->posts as $posts): ?>
        <tr>
            <td><?= h($posts->id) ?></td>
            <td><?= h($posts->title) ?></td>
            <td><?= h($posts->image) ?></td>
            <td><?= h($posts->slug) ?></td>
            <td><?= h($posts->intro) ?></td>
            <td><?= h($posts->content) ?></td>
            <td><?= h($posts->like) ?></td>
            <td><?= h($posts->unlike) ?></td>
            <td><?= h($posts->state) ?></td>
            <td><?= h($posts->rubric_id) ?></td>
            <td><?= h($posts->blog_id) ?></td>
            <td><?= h($posts->published at) ?></td>
            <td><?= h($posts->created_at) ?></td>
            <td><?= h($posts->updated_at) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
