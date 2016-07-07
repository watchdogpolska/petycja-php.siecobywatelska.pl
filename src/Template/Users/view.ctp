<div class="row">
    <nav class="col-lg-3 col-md-4" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?= __('Actions') ?></div>
            </div>
            <div class="list-group">
                <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(
                    __('Delete User'),
                    ['action' => 'delete', $user->id],
                    [
                        'confirm' => __('Are you sure you want to delete # {0}?', $user->id),
                        'class' => 'list-group-item'
                    ]
                ) ?>
                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </div>
        </div>
    </nav>
    <div class="users view col-lg-9 col-md-8 columns content">
        <h2><?= h($user->id) ?></h2>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row"><?= __('Login') ?></th>
                    <td><?= h($user->login) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
