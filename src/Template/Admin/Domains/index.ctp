
<div class="row">
    <div class="col-md-12">
        <div class="table-toolbar">
            <?= $this->Html->link(__('Add New').
                ' <i class="fa fa-plus"></i>',
                ['action' => 'add'],
                ['class'=>'btn green','escape'=>false]
            )?>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('slug') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($domains as $domain): ?>
                    <tr>
                        <td><?= $this->Number->format($domain->id) ?></td>
                        <td><?= h($domain->title) ?></td>
                        <td><?= h($domain->slug) ?></td>
                        <td><?= $this->Text->autoParagraph(h($domain->description)); ?></td>
                        <td class="actions">
                            <?= $this->element('row_actions',[
                                'item_id'=> $domain->id,
                                'view'=>true,
                                'edit'=>true,
                                'delete'=>true
                            ]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->element('pagination') ?>
    </div>

</div>
