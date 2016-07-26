<div class="row">
    <div class="col-lg-3 col-md-4" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?= __('Actions') ?></div>
            </div>
            <ul class="list-group">
                <?= $this->Html->link(
                        $this->Html->icon('list') . ' ' . __('List Posts'),
                        ['action' => 'index'],
                        ['escape' => false, 'class' => 'list-group-item'] ) ?>
                <?= $this->Html->link(
                        $this->Html->icon('list') . ' ' . __('List Users'),
                        ['controller' => 'Users', 'action' => 'index'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(
                        $this->Html->icon('plus') . ' ' . __('New User'),
                        ['controller' => 'Users', 'action' => 'add'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="posts form col-lg-9 col-md-8 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Add Post') ?></h2>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($post, ['horizontal' => true]) ?>
                <?= $this->Form->input('title'); ?>
                <?= $this->Form->textarea('content'); ?>
                <?= $this->Form->input('user_id', ['options' => $users, 'empty' => true]); ?>
                <?= $this->Form->input('state', ['options' => [
                    'published' => __('Published'),
                    'pinned' => __('Pinned'),
                    'draft' => __('Draft')
                ], 'empty' => false]); ?>
                <?= $this->Form->input('type', ['options' => [
                    'text' => __('Text'),
                    'link' => __('Link')
                ], 'empty' => false,
                    'label' => __('Type')]); ?>
                <?= $this->Form->input('link_target', ['label' => __('Link Target')]); ?>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
