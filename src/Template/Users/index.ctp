<div class="row">
    <nav class="col-lg-3 col-md-4" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?= __('Actions') ?></div>
            </div>
            <div class="list-group">
                <?= $this->Html->link(
                        $this->Html->icon('plus') . ' ' . __('New User'),
                        ['action' => 'add'],
                        ['escape' => false, 'class'=>'list-group-item']) ?>
            </div>
        </div>
    </nav>
    <div class="users index col-lg-9 col-md-8 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= $this->Html->icon('users') ?> <?= __('Users') ?></h2>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('login') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('display_name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->login) ?></td>
                            <td><?= h($user->display_name) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link($this->Html->icon('eye'), ['action' => 'view', $user->id], ['escape' => false, 'class' => 'btn btn-default', 'title' => __('View')]) ?>
                                <?= $this->Html->link($this->Html->icon('pencil'), ['action' => 'edit', $user->id], ['escape' => false, 'class' => 'btn btn-default', 'title' => __('Edit')]) ?>
                                <?= $this->Form->postLink(
                                    $this->Html->icon('trash'), ['action' => 'delete', $user->id],
                                    [
                                        'escape' => false,
                                        'confirm' => __('Are you sure you want to delete # {0}?', $user->id),
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
