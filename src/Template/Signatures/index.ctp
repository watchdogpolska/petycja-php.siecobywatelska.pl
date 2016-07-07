<div class="row">
    <nav class="col-lg-3 col-md-4 columns" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Actions') ?></h2>
            </div>
            <div class="list-group">
                <?= $this->Html->link(__('New Signature'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </div>
        </div>
    </nav>
    <div class="signatures index col-lg-9 col-md-8 columns content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Signatures') ?></h2>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('newsletter') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($signatures as $signature): ?>
                        <tr>
                            <td><?= $this->Number->format($signature->id) ?></td>
                            <td><?= h($signature->email) ?></td>
                            <td><?= h($signature->first_name) ?></td>
                            <td><?= h($signature->last_name) ?></td>
                            <td><?= $signature->newsletter ? __('Yes') : __('No') ?></td>
                            <td><?= h($signature->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $signature->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $signature->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['action' => 'delete', $signature->id],
                                    [
                                        'confirm' => __('Are you sure you want to delete # {0}?', $signature->id),
                                        'class' => 'btn btn-danger'
                                    ]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
