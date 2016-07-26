<div class="row">
    <nav class="col-lg-3 col-lg-4" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?= __('Actions') ?></div>
            </div>
            <div class="list-group">
                <?= $this->Html->link(
                        $this->Html->icon('list') . ' ' . __('List Signatures'),
                        ['action' => 'index'],
                        ['escape' => false, 'class' => 'list-group-item']) ?>
            </div>
        </div>
    </nav>
    <div class="signatures form col-lg-9 col-md-8 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= $this->Html->icon('pencil'); ?> <?= __('Add Signature') ?></h2>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($signature, ['horizontal' => true]) ?>
                <?= $this->Form->input('first_name'); ?>
                <?= $this->Form->input('last_name'); ?>
                <?= $this->Form->input('email'); ?>
                <?= $this->Form->textarea('comment'); ?>
                <?= $this->Form->input('location'); ?>
                <?= $this->Form->input('newsletter'); ?>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>

    </div>
</div>
