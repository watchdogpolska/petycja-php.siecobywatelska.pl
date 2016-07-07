<div class="row">
    <div class="col-lg-3 col-md-4" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?= __('Actions') ?></div>
            </div>
            <div class="list-group">
                <?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(
                    __('Delete Post'),
                    ['action' => 'delete', $post->id],
                    [
                        'confirm' => __('Are you sure you want to delete # {0}?', $post->id),
                        'class' => 'list-group-item'
                    ]) ?>
                <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </div>
        </div>
    </div>
    <div class="posts view col-lg-9 col-md-8 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= h($post->title) ?></h2>
            </div>
            <table class="table">
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($post->id) ?></td>
                </tr>
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
