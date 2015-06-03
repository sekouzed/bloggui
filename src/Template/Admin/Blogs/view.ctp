
<div class="row form">
    <div class="col-md-6">
        <legend><?= __('View Blog').' #'.$this->Number->format($blog->id)?></legend>
        <div class="form-body">
            <h6><?= __('Title') ?></h6>
            <p><?= h($blog->title) ?></p>
            <h6><?= __('Slug') ?></h6>
            <p><?= h($blog->slug) ?></p>
            <h6><?= __('Logo') ?></h6>
            <p><?= h($blog->logo) ?></p>
            <h6><?= __('Language') ?></h6>
            <p><?= h($blog->language) ?></p>
            <h6><?= __('Basic Color') ?></h6>
            <p><?= h($blog->basic_color) ?></p>
            <h6><?= __('State') ?></h6>
            <p><?= h($blog->state) ?></p>
            <h6><?= __('User') ?></h6>
            <p><?= $blog->has('user') ? $this->Html->link($blog->user->name, ['controller' => 'Users', 'action' => 'view', $blog->user->id]) : '' ?></p>
            <h6><?= __('Domain') ?></h6>
            <p><?= $blog->domain->title ?></p>
            <h6><?= __('Created At') ?></h6>
            <p><?= h($blog->created_at) ?></p>
            <h6><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($blog->description)); ?>
        </div>
        <div class="form-actions">
            <?= $this->Html->link(__('Edit'), ['action' => 'edit',$blog->id],['class'=>'btn blue']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'index'],['class'=>'btn default']) ?>
        </div>
    </div>

</div>
 