<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $signature->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $signature->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Signatures'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="signatures form large-9 medium-8 columns content">
    <?= $this->Form->create($signature) ?>
    <fieldset>
        <legend><?= __('Edit Signature') ?></legend>
        <?php
            echo $this->Form->input('comment');
            echo $this->Form->input('email');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('newsletter');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
