

<?php $this->assign('title', __('Mon profil'));?>

<div class="users form">
    <?= $this->Form->create($user,['class'=>'form-horizontal']); ?>

    <div class="control-group"><?= $this->Form->input('nom_complet')?></div>
    <div class="control-group"><?= $this->Form->input('email')?></div>
    <div class="control-group"><?= $this->Form->input('tel')?></div>
    <div class="control-group"><?= $this->Form->input('password')?></div>
    <div class="control-group"><?= $this->Form->input('username')?></div>


    <div class="control-group form-footer">
        <?= $this->Form->button(__('Envoyer'),['class'=>'btn btn-info']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
 