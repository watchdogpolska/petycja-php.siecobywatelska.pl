<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Signature'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="signatures index large-9 medium-8 columns content">
    <h3><?= __('Signatures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('comment') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('first_name') ?></th>
                <th><?= $this->Paginator->sort('last_name') ?></th>
                <th><?= $this->Paginator->sort('newsletter') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($signatures as $signature): ?>
            <tr>
                <td><?= $this->Number->format($signature->id) ?></td>
                <td><?= h($signature->comment) ?></td>
                <td><?= h($signature->email) ?></td>
                <td><?= h($signature->first_name) ?></td>
                <td><?= h($signature->last_name) ?></td>
                <td><?php if(h($signature->newsletter)==1) echo 'yes'; else echo 'no' ?></td>
                <td><?= h($signature->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $signature->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $signature->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $signature->id], ['confirm' => __('Are you sure you want to delete # {0}?', $signature->id)]) ?>
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
