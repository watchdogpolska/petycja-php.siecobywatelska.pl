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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= h($user->id) ?></h2>
            </div>
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
        <?php if (!empty($user->posts)): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Related Posts') ?></h2>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Title') ?></th>
                        <th scope="col"><?= __('Created') ?></th>
                        <th scope="col"><?= __('Modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user->posts as $posts): ?>
                    <tr>
                        <td><?= h($posts->id) ?></td>
                        <td><?= h($posts->title) ?></td>
                        <td><?= h($posts->created) ?></td>
                        <td><?= h($posts->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id], ['class' => 'btn btn-default']) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id], ['class' => 'btn btn-default']) ?>
                            <?= $this->Form->postLink(
                                __('Delete'),
                                ['controller' => 'Posts', 'action' => 'delete', $posts->id],
                                [
                                    'confirm' => __('Are you sure you want to delete # {0}?', $posts->id),
                                    'class' => 'btn btn-danger'
                                ]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
