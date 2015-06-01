<div class="row-actions">

<?php
    if($view){
        echo $this->Html->link('<i class="fa fa-folder-open-o"></i>',
            ['action' =>'view', $item_id],
            ['class' => 'btn btn-xs default','escape'=>false, 'title' => __('View')]
        );
    }
    if($edit){
        echo $this->Html->link('<i class="fa fa-edit"></i>',
            ['action' =>'edit', $item_id],
            ['class' => 'btn btn-xs blue','escape'=>false, 'title' => __('Edit')]
        );
    }
    if($validate){
        echo $this->Html->link('<i class="fa fa-check-square-o"></i>',
            ['action' =>'validate', $item_id],
            [
                'class' => 'btn btn-xs yellow',
                'escape'=>false,
                'title' => __('Validate'),
                'confirm' => __('Voulez-vous vraiment valider ?')
            ]
        );
    }
    if($delete){
        echo $this->Html->link('<i class="fa fa-trash-o"></i>',
            ['action' =>'delete', $item_id],
            [
                'class' => 'btn btn-xs red',
                'escape'=>false,
                'title' => __('Delete'),
                'confirm' => __('Voulez-vous vraiment supprimer ?')
            ]
        );
    }
?>
</div>