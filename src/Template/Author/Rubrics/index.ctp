
<div class="row">
    <div class="col-md-12">
        <div class="table-toolbar">
            <?= $this->Html->link(__('Add New').
                ' <i class="fa fa-plus"></i>',
                ['action' => 'add'],
                ['class'=>'btn green','escape'=>false]
            )?>
        </div>
        <?php foreach ($rubricsList as $rubric) {
                echo $rubric . "<br>";
        }?>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('parent_id') ?></th>
                <th><?= $this->Paginator->sort('lft') ?></th>
                <th><?= $this->Paginator->sort('rght') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($rubrics as $rubric): ?>
                <tr>
                    <td><?= $this->Number->format($rubric->id) ?></td>
                    <td><?= $this->Number->format($rubric->parent_id) ?></td>
                    <td><?= $this->Number->format($rubric->lft) ?></td>
                    <td><?= $this->Number->format($rubric->rght) ?></td>
                    <td><?= h($rubric->title) ?></td>
                    <td><?= h($rubric->slug) ?></td>
                    <td><?= h($rubric->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Voir'), ['action' => 'view', $rubric->id]) ?>
                        <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $rubric->id]) ?>
                        <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $rubric->id], ['confirm' => __('Etes vous sur de vouloir supprimer # {0}?', $rubric->id)]) ?>
                        <?= $this->Form->postLink(__('Descendre'), ['action' => 'move_down', $rubric->id], ['confirm' => __('Etes vous sur de vouloir descendre # {0}?', $rubric->id)]) ?>
                        <?= $this->Form->postLink(__('Monter'), ['action' => 'move_up', $rubric->id], ['confirm' => __('Etes vous sur de vouloir monter # {0}?', $rubric->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->element('pagination') ?>
    </div>

</div>
