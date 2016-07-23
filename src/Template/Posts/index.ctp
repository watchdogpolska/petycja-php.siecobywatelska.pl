<div class="row">
    <div class="col-lg-3 col-md-4" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="list-group">
                <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'list-group-item'] ) ?>
                <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="posts index col-lg-9 col-md-8 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Posts') ?></h2>
            </div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                            <th scole="col"><?= $this->Paginator->sort('user_id') ?></th>
                            <th scole="col"><?= $this->Paginator->sort('state') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?= $this->element('post-type-icon', ['post' => $post]); ?></td>
                            <td><?= $this->Number->format($post->id) ?></td>
                            <td><?= h($post->title) ?></td>
                            <td><?= $post->has('user') ? $this->Html->link($post->user->display_name, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?></td>
                            <td><?= __($post->stateToString()) ?></td>
                            <td><?= h($post->created) ?></td>
                            <td><?= h($post->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $post->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['action' => 'delete', $post->id],
                                    [
                                        'confirm' => __('Are you sure you want to delete # {0}?', $post->id),
                                        'class' => 'btn btn-danger'
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
