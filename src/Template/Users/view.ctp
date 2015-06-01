<div class="row form">
    <div class="col-md-6">
        <legend><?= __('View User').' #'.$this->Number->format($user->id)?></legend>
        <div class="form-body">
            <h6><?= __('Name') ?></h6>
            <p><?= h($user->name) ?></p>
            <h6><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6><?= __('Gender') ?></h6>
            <p><?= h($user->gender) ?></p>
            <h6><?= __('Birthday') ?></h6>
            <p><?= h($user->birthday) ?></p>
            <h6><?= __('Country') ?></h6>
            <p><?= h($user->country) ?></p>
            <h6><?= __('City') ?></h6>
            <p><?= h($user->city) ?></p>
            <h6><?= __('Biography') ?></h6>
            <?= $this->Text->autoParagraph(h($user->biography)); ?>
            <h6><?= __('Created At') ?></h6>
            <p><?= h($user->created_at) ?></p>
            <h6><?= __('State') ?></h6>
            <p><?= h($user->state) ?></p>
            <h6><?= __('Role') ?></h6>
            <p><?= h($user->role) ?></p>
        </div>
        <div class="form-actions">
            <?= $this->Html->link(__('Edit'), ['action' => 'edit',$user->id],['class'=>'btn blue']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'index'],['class'=>'btn default']) ?>
        </div>
    </div>

</div>
