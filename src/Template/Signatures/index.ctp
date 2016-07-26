<div class="row">
    <nav class="col-lg-3 col-md-4 columns" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Actions') ?></h2>
            </div>
            <div class="list-group">
                <?= $this->Html->link(
                        $this->Html->icon('plus') . ' ' . __('New Signature'),
                        ['action' => 'add'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
            </div>
        </div>
    </nav>
    <div class="signatures index col-lg-9 col-md-8 columns content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= $this->Html->icon('pencil'); ?> <?= __('Signatures') ?></h2>
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
                                <?= $this->Html->link($this->Html->icon('eye'), ['action' => 'view', $signature->id], ['escape' => false, 'class' => 'btn btn-default', 'title' => __('View')]) ?>
                                <?= $this->Html->link($this->Html->icon('pencil'), ['action' => 'edit', $signature->id], ['escape' => false, 'class' => 'btn btn-default', 'title' => __('Edit')]) ?>
                                <?= $this->Form->postLink(
                                    $this->Html->icon('trash'), ['action' => 'delete', $signature->id],
                                    [
                                        'escape' => false,
                                        'confirm' => __('Are you sure you want to delete # {0}?', $signature->id),
                                        'class' => 'btn btn-danger',
                                        'title' => __('Delete')
                                    ]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <nav class="paginator text-center">
                    <?= $this->Paginator->numbers([
                        'prev' => 'i:chevron-left ' . __('previous'),
                        'next' =>  __('next') . ' i:chevron-right',
                        ]) ?>
                </nav>
            </div>
        </div>
    </div>
</div>
