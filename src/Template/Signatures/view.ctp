<nav class="col-lg-3 col-md-4" id="actions-sidebar">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?= __('Actions') ?></h3>
        </div>
        <div class="list-group">
            <?= $this->Html->link(
                    $this->Html->icon('pencil') . ' ' . __('Edit Signature'),
                    ['action' => 'edit', $signature->id],
                    ['escape' => false, 'class' => 'list-group-item']) ?>
            <?= $this->Form->postLink(
                    $this->Html->icon('trash') . ' ' . __('Delete Signature'),
                    ['action' => 'delete', $signature->id],
                    [
                        'escape' => false,
                        'confirm' => __('Are you sure you want to delete # {0}?', $signature->id),
                        'class' => 'list-group-item'
                    ]) ?>
            <?= $this->Html->link(
                    $this->Html->icon('list') . ' ' . __('List Signatures'),
                    ['action' => 'index'],
                    ['escape' => false, 'class' => 'list-group-item']) ?>
            <?= $this->Html->link(
                    $this->Html->icon('plus') . ' ' . __('New Signature'),
                    ['action' => 'add'],
                    ['escape' => false, 'class' => 'list-group-item']) ?>
        </div>
    </div>
</nav>
<div class="signatures view col-lg-9 col-md-8 columns content">
    <?php if($signature->geo_lng && $signature->geo_lat): ?>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Mapka</h3>
        </div>
        <div class="panel-body">
            <div
                id="map"
                style="height: 400px"
                data-lng="<?= h($signature->geo_lng) ?>"
                data-lat="<?= h($signature->geo_lat) ?>">
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?= $this->Html->icon('pencil'); ?>  <?= h($signature->first_name) ?> <?= h($signature->last_name) ?></h3>
        </div>
        <table class="table">
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($signature->id) ?></td>
            </tr>
            <tr>
                <th><?= __('First Name') ?></th>
                <td><?= h($signature->first_name) ?></td>
            </tr>
            <tr>
                <th><?= __('Last Name') ?></th>
                <td><?= h($signature->last_name) ?></td>
            </tr>
            <tr>
                <th><?= __('Email') ?></th>
                <td><?= h($signature->email) ?></td>
            </tr>
            <tr>
                <th><?= __('Comment') ?></th>
                <td><?= h($signature->comment) ?></td>
            </tr>
            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($signature->created) ?></td>
            </tr>
            <tr>
                <th><?= __('Newsletter') ?></th>
                <td><?= $signature->newsletter ? __('Yes') : __('No'); ?></td>
            </tr>
        </table>
    </div>
</div>
<?php
$this->Html->script('/js/map-point.js', [
    'block' => true
]);
?>
<?php $this->append('script'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoPxTl-O2LzNrwJBQC8gwULYkxRMIxlHs&callback=init_map"
async defer></script>
<script>
    (function ($) {
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    }) (jQuery)
</script>
<?php $this->end();?>
