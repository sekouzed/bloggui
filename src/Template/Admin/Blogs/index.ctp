
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('logo') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('domain_id') ?></th>
                <th><?= $this->Paginator->sort('user') ?></th>
                <th><?= $this->Paginator->sort('state') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($blogs as $blog): ?>
                <tr>
                    <td><?= $this->Number->format($blog->id) ?></td>
                    <td><?= h($blog->logo) ?></td>
                    <td><?= h($blog->title) ?></td>
                    <td><?= h($blog->slug) ?></td>
                    <td><?= h($blog->domain->title) ?></td>
                    <td><?= $blog->has('user') ? $this->Html->link($blog->user->name, ['controller' => 'Users', 'action' => 'view', $blog->user->id]) : '' ?></td>
                    <td><?= h($blog->state) ?></td>

                    <td class="actions">
                        <?= $this->element('row_actions',[
                            'item_id'=> $blog->id,
                            'view'=>true,
                            'edit'=>true,
                            'validate'=>true,
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
