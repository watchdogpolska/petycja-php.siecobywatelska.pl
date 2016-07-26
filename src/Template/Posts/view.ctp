<div class="row">
    <div class="col-lg-3 col-md-4" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?= __('Actions') ?></div>
            </div>
            <div class="list-group">
                <?= $this->Html->link(
                        $this->Html->icon('pencil') . ' ' . __('Edit Post'),
                        ['action' => 'edit', $post->id],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(
                        $this->Html->icon('trash') . ' ' . __('Delete Post'),
                        ['action' => 'delete', $post->id],
                        [
                            'escape' => false,
                            'confirm' => __('Are you sure you want to delete # {0}?', $post->id),
                            'class' => 'list-group-item'
                        ]) ?>
                <?= $this->Html->link(
                        $this->Html->icon('list') . ' ' . __('List Posts'),
                        ['action' => 'index'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(
                        $this->Html->icon('plus') . ' ' . __('New Post'),
                        ['action' => 'add'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(
                        $this->Html->icon('globe') . ' ' . __('View on site'),
                        ['controller' => 'blog', 'action' => 'view', $post->slug],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
            </div>
        </div>
    </div>
    <div class="posts view col-lg-9 col-md-8 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= $this->element('post-type-icon', ['post' => $post]); ?> : <?= h($post->title) ?></h2>
            </div>
            <table class="table">
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($post->id) ?></td>
                </tr>
                <tr>
                    <th scole="row"><?= __('User') ?></th>
                    <td><?= $post->has('user') ? $this->Html->link($post->user->display_name, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scole="row"><?= __('State') ?></th>
                    <td><?= $post->stateToString() ?></td>
                </tr>
                <?php if($post->type == 'link'): ?>
                    <tr>
                        <th scole="row"><?= __('Link') ?></th>
                        <td><?= h($post->link_target) ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($post->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($post->modified) ?></td>
                </tr>

            </table>
            <div class="panel-body">
                <?= h($post->content) ?>
            </div>
        </div>
    </div>
</div>
