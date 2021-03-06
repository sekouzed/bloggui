
<div class="row">
    <div class="col-md-6">
        <?= $this->Form->create($user) ?>
        <legend><?= __('Edit User') ?></legend>
        <div class="form-body">
            <div class="form-group">
                <?= $this->Form->input('email',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('password',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('photo',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('name',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('gender', ['class'=>'form-control',
                    'options' => ['male'=>__('male'),'female' => __('female')]
                ])?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('birthday',['class'=>'form-control','empty' => true, 'default' => '']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('biography',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('country',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('city',['class'=>'form-control']); ?>
            </div>

            <div class="form-actions">
                <?= $this->Form->button(__('Submit'),['class'=>'btn blue']) ?>
                <?= $this->Html->link(__('Cancel'), ['action' => 'index'],['class'=>'btn default']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>