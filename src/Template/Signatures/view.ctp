<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Signature'), ['action' => 'edit', $signature->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Signature'), ['action' => 'delete', $signature->id], ['confirm' => __('Are you sure you want to delete # {0}?', $signature->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Signatures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Signature'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="signatures view large-9 medium-8 columns content">
    <h3><?= h($signature->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Comment') ?></th>
            <td><?= h($signature->comment) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($signature->email) ?></td>
        </tr>
        <tr>
            <th><?= __('First Name') ?></th>
            <td><?= h($signature->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($signature->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($signature->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($signature->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Newsletter') ?></th>
            <td><?= $signature->newsletter ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
