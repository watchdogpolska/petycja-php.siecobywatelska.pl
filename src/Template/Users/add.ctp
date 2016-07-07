<nav class="col-lg-3 col-md-4 columns" id="actions-sidebar">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title"><?= __('Actions') ?></div>
        </div>
        <div class="list-group">
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
        </div>
    </div>
</nav>
<div class="col-lg-9 col-md-8 columns content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Add user</h3>
        </div>
        <div class="panel-body">
            <?= $this->Form->create($user, ['horizontal' => true]) ?>
            <?= $this->Form->input('login'); ?>
            <?= $this->Form->input('password'); ?>
            <?= $this->Form->input('email'); ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
