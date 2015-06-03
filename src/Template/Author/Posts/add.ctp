
<div class="row">
    <div class="col-md-6">
        <?= $this->Form->create($post) ?>
        <legend><?= __('Add Post') ?></legend>
        <div class="form-body">
            <div class="form-group">
                <?= $this->Form->input('title',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('image',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('rubric_id', ['options' => $rubrics,'class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('intro',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('content',['class'=>'form-control']); ?>
            </div>
            <div class="form-actions">
                <?= $this->Form->button(__('Submit'),['class'=>'btn blue']) ?>
                <?= $this->Html->link(__('Cancel'), ['action' => 'index'],['class'=>'btn default']) ?>
            </div>

        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
