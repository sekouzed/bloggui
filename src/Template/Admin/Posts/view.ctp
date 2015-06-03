<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rubrics'), ['controller' => 'Rubrics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rubric'), ['controller' => 'Rubrics', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="posts view large-10 medium-9 columns">
    <h2><?= h($post->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($post->title) ?></p>
            <h6 class="subheader"><?= __('Image') ?></h6>
            <p><?= h($post->image) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($post->slug) ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= h($post->state) ?></p>
            <h6 class="subheader"><?= __('Rubric') ?></h6>
            <p><?= $post->has('rubric') ? $this->Html->link($post->rubric->name, ['controller' => 'Rubrics', 'action' => 'view', $post->rubric->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Blog') ?></h6>
            <p><?= $post->has('blog') ? $this->Html->link($post->blog->name, ['controller' => 'Blogs', 'action' => 'view', $post->blog->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($post->id) ?></p>
            <h6 class="subheader"><?= __('Like') ?></h6>
            <p><?= $this->Number->format($post->like) ?></p>
            <h6 class="subheader"><?= __('Unlike') ?></h6>
            <p><?= $this->Number->format($post->unlike) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Published At') ?></h6>
            <p><?= h($post->published at) ?></p>
            <h6 class="subheader"><?= __('Created At') ?></h6>
            <p><?= h($post->created_at) ?></p>
            <h6 class="subheader"><?= __('Updated At') ?></h6>
            <p><?= h($post->updated_at) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Intro') ?></h6>
            <?= $this->Text->autoParagraph(h($post->intro)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content') ?></h6>
            <?= $this->Text->autoParagraph(h($post->content)); ?>

        </div>
    </div>
</div>
