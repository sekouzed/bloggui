
<div class="row">
    <div class="col-md-6">
        <?= $this->Form->create($user) ?>
        <legend><?= __('Add User') ?></legend>
        <div class="form-body">
            <div class="form-group">
                <?= $this->Form->input('blog.title',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('blog.slug',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('blog.domain_id',['class'=>'form-control','options' => $domains]); ?>
            </div>
            <hr>
            <div class="form-group">
                <?= $this->Form->input('name',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('email',['class'=>'form-control']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('password',['class'=>'form-control']); ?>
            </div>
            <div class="form-actions">
                <?= $this->Form->button(__('Submit'),['class'=>'btn blue']) ?>
                <?= $this->Html->link(__('Cancel'), ['action' => 'index'],['class'=>'btn default']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>