
<div class="row form">
    <div class="col-md-6">
        <legend><?= __('View Domain').' #'.$this->Number->format($domain->id)?></legend>

        <div class="form-body">
            <h6><?= __('Title') ?></h6>
            <p><?= h($domain->title) ?></p>
            <h6><?= __('Slug') ?></h6>
            <p><?= h($domain->slug) ?></p>
            <h6><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($domain->description)); ?>
        </div>
        <div class="form-actions">
            <?= $this->Html->link(__('Edit'), ['action' => 'edit',$domain->id],['class'=>'btn blue']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'index'],['class'=>'btn default']) ?>
        </div>
    </div>

</div>
