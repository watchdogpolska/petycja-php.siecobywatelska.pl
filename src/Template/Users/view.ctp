<div class="row">
    <nav class="col-lg-3 col-md-4" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?= __('Actions') ?></div>
            </div>
            <div class="list-group">
                <?= $this->Html->link(
                        $this->Html->icon('pencil') . ' ' . __('Edit User'),
                        ['action' => 'edit', $user->id],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(
                        $this->Html->icon('trash') . ' ' . __('Delete User'),
                        ['action' => 'delete', $user->id],
                        [
                            'escape' => false,
                            'confirm' => __('Are you sure you want to delete # {0}?', $user->id),
                            'class' => 'list-group-item'
                        ]) ?>
                <?= $this->Html->link(
                        $this->Html->icon('list') . ' ' . __('List Users'),
                        ['action' => 'index'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(
                        $this->Html->icon('plus') . ' ' . __('New User'),
                        ['action' => 'add'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
            </div>
        </div>
    </nav>
    <div class="users view col-lg-9 col-md-8 columns content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= $this->Html->icon('user') ?> <?= h($user->display_name) ?></h2>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($user->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Display name') ?></th>
                        <td><?= h($user->display_name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Login') ?></th>
                        <td><?= h($user->login) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Email') ?></th>
                        <td><?= h($user->email) ?></td>
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
                    <?php foreach ($user->posts as $post): ?>
                    <tr>
                        <td><?= h($post->id) ?></td>
                        <td><?= h($post->title) ?></td>
                        <td><?= h($post->created) ?></td>
                        <td><?= h($post->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link($this->Html->icon('eye'), ['action' => 'view', $post->id], ['escape' => false, 'class' => 'btn btn-default', 'title' => __('View')]) ?>
                            <?= $this->Html->link($this->Html->icon('pencil'), ['action' => 'edit', $post->id], ['escape' => false, 'class' => 'btn btn-default', 'title' => __('Edit')]) ?>
                            <?= $this->Form->postLink(
                                $this->Html->icon('trash'), ['action' => 'delete', $post->id],
                                [
                                    'escape' => false,
                                    'confirm' => __('Are you sure you want to delete # {0}?', $post->id),
                                    'class' => 'btn btn-danger',
                                    'title' => __('Delete')
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
