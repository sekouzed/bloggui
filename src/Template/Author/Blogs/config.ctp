
<div class="row">
    <div class="col-md-6">
        <?= $this->Form->create($blog) ?>
        <legend><?= __('Config Blog') ?></legend>
        <div class="form-body">
            <div class="form-group">
                <?= $this->Form->input('logo',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('title',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('domain_id',['options' => $domains,'class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('description',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('language',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('basic_color',['class'=>'form-control']); ?>
            </div>
            <div class="form-actions">
                <?= $this->Form->button(__('Submit'),['class'=>'btn blue']) ?>
                <?= $this->Html->link(__('Cancel'), ['action' => 'index'],['class'=>'btn default']) ?>
            </div>

        </div>
        <?= $this->Form->end() ?>
    </div>
</div>

