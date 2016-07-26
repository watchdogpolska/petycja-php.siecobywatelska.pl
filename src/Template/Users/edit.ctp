<div class="row">
    <nav class="col-lg-3 col-md-4" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?= __('Actions') ?></div>
            </div>
            <div class="list-group">
                <?= $this->Form->postLink(
                        $this->Html->icon('trash') . ' ' . __('Delete'),
                        ['action' => 'delete', $user->id],
                        [
                            'escape' => false,
                            'class' => 'list-group-item',
                            'confirm' => __('Are you sure you want to delete # {0}?', $user->id)
                        ]
                    )?>
                <?= $this->Html->link(
                        $this->Html->icon('list') . ' ' . __('List Users'),
                        ['action' => 'index'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
            </div>
        </div>
    </nav>
    <div class="users form col-lg-9 col-md-8 columns content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= $this->Html->icon('user') ?> <?= __('Edit User') ?></h2>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($user, ['horizontal' => true]) ?>
                <?= $this->Form->input('login'); ?>
                <?= $this->Form->input('display_name'); ?>
                <?= $this->Form->input('password'); ?>
                <?= $this->Form->input('email'); ?>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
