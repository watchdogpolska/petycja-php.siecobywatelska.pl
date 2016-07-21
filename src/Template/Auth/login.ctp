<?= $this->Flash->render('auth') ?>
<div class="row">
    <div class="col-lg-4 col-lg-push-4 col-md-8 col-md-push-2 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
                <?= $this->Form->create(null) ?>
                <?= $this->Form->input('login'); ?>
                <?= $this->Form->input('password', ['label' => __('Password')]); ?>
                <?= $this->Form->button(__('Login')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
