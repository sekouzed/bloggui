<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Blog'), ['action' => 'edit', $blog->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Blog'), ['action' => 'delete', $blog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blog->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Domains'), ['controller' => 'Domains', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Domain'), ['controller' => 'Domains', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rubrics'), ['controller' => 'Rubrics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rubric'), ['controller' => 'Rubrics', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="blogs view large-10 medium-9 columns">
    <h2><?= h($blog->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($blog->title) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($blog->slug) ?></p>
            <h6 class="subheader"><?= __('Logo') ?></h6>
            <p><?= h($blog->logo) ?></p>
            <h6 class="subheader"><?= __('Language') ?></h6>
            <p><?= h($blog->language) ?></p>
            <h6 class="subheader"><?= __('Basic Color') ?></h6>
            <p><?= h($blog->basic_color) ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= h($blog->state) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $blog->has('user') ? $this->Html->link($blog->user->name, ['controller' => 'Users', 'action' => 'view', $blog->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Domain') ?></h6>
            <p><?= $blog->has('domain') ? $this->Html->link($blog->domain->name, ['controller' => 'Domains', 'action' => 'view', $blog->domain->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($blog->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created At') ?></h6>
            <p><?= h($blog->created_at) ?></p>
            <h6 class="subheader"><?= __('Updated At') ?></h6>
            <p><?= h($blog->updated_at) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($blog->description)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Posts') ?></h4>
    <?php if (!empty($blog->posts)): ?>
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
        <?php foreach ($blog->posts as $posts): ?>
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
            <td><?= h($posts->published_at) ?></td>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Rubrics') ?></h4>
    <?php if (!empty($blog->rubrics)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Slug') ?></th>
            <th><?= __('Parent Id') ?></th>
            <th><?= __('Lft') ?></th>
            <th><?= __('Rght') ?></th>
            <th><?= __('Blog Id') ?></th>
            <th><?= __('Created At') ?></th>
            <th><?= __('Updated At') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($blog->rubrics as $rubrics): ?>
        <tr>
            <td><?= h($rubrics->id) ?></td>
            <td><?= h($rubrics->title) ?></td>
            <td><?= h($rubrics->slug) ?></td>
            <td><?= h($rubrics->parent_id) ?></td>
            <td><?= h($rubrics->lft) ?></td>
            <td><?= h($rubrics->rght) ?></td>
            <td><?= h($rubrics->blog_id) ?></td>
            <td><?= h($rubrics->created_at) ?></td>
            <td><?= h($rubrics->updated_at) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Rubrics', 'action' => 'view', $rubrics->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Rubrics', 'action' => 'edit', $rubrics->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rubrics', 'action' => 'delete', $rubrics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rubrics->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
