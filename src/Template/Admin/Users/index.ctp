
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
                <th><?= $this->Paginator->sort('photo') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('blog_id') ?></th>
                <th><?= $this->Paginator->sort('role') ?></th>
                <th><?= $this->Paginator->sort('state') ?></th>
                <th><?= $this->Paginator->sort('created_at') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->photo) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= $user->has('blog') ? $this->Html->link($user->blog->title, ['controller' => 'Blogs', 'action' => 'view', $user->blog->id]) : '' ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= h($user->state) ?></td>
                    <td><?= h($user->created_at) ?></td>

                    <td class="actions">
                        <?= $this->element('row_actions',[
                            'item_id'=> $user->id,
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

