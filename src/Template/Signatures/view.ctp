<nav class="col-lg-3 col-md-4" id="actions-sidebar">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?= __('Actions') ?></h3>
        </div>
        <div class="list-group">
            <?= $this->Html->link(__('Edit Signature'), ['action' => 'edit', $signature->id], ['class' => 'list-group-item']) ?>
            <?= $this->Form->postLink(
                __('Delete Signature'),
                ['action' => 'delete', $signature->id],
                [
                    'confirm' => __('Are you sure you want to delete # {0}?', $signature->id),
                    'class' => 'list-group-item'
                ]) ?>
            <?= $this->Html->link(__('List Signatures'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
            <?= $this->Html->link(__('New Signature'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
        </div>
    </div>
</nav>
<div class="signatures view col-lg-9 col-md-8 columns content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?= h($signature->first_name) ?> <?= h($signature->last_name) ?></h3>
        </div>
        <table class="table">
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($signature->id) ?></td>
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
                <th><?= __('Email') ?></th>
                <td><?= h($signature->email) ?></td>
            </tr>
            <tr>
                <th><?= __('Comment') ?></th>
                <td><?= h($signature->comment) ?></td>
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
</div>
