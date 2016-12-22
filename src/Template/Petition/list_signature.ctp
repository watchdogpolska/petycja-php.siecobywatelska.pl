<div id="map" style="height: 400px"></div>
<p>&nbsp;</p>
<div class="row">
    <div class="col-lg-4 col-md-6 columns">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Add Signature') ?></h2>
            </div>
            <div class="panel-body">
                <?= $this->Form->create(null, [
                    // 'horizontal' => true,
                    'url' => '/'
                ]) ?>
                <?= $this->Form->input('first_name'); ?>
                <?= $this->Form->input('last_name'); ?>
                <?= $this->Form->input('email'); ?>
                <?= $this->Form->textarea('comment'); ?>
                <?= $this->Form->input('newsletter', array('label' => 'KOTEK')); ?>
                <?= $this->Form->input('giodo', array(
                    'type' => 'checkbox',
                    'label' => 'Giodo',
                    'required' => true)); ?>
                <?= $this->Form->input('location', array('label' => 'Miejscowość')); ?>
                <?= $this->Form->button(__('Sign'), array('class'=> 'btn btn-custom-brand')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
    <div class="signatures index col-lg-8 col-md-6 columns content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Signatures') ?></h2>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="col-xs-1" ><span data-toggle="tooltip" title="<?= __('Identifier'); ?>"><?= __('Id') ?></span></th>
                            <th scope="col"><?= __('Name') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($signatures as $signature): ?>
                        <tr class="bg-info">
                            <td><?= $this->Number->format($signature->id) ?></td>
                            <td><?= h($signature->name) ?></td>
                        </tr>
                        <?php  if($signature->comment): ?>
                        <tr>
                            <td colspan="2"><?= h($signature->comment) ?></td>
                        </tr>
                        <?php  endif; ?>
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
<?php


?>
<?php $this->append('script'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoPxTl-O2LzNrwJBQC8gwULYkxRMIxlHs&callback=init_map"
async defer></script>
<script src="https://cdn.rawgit.com/googlemaps/js-marker-clusterer/gh-pages/src/markerclusterer.js"></script>
<?= $this->Html->script('/js/map-points.js'); ?>
<script>
    (function ($) {
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    }) (jQuery)
</script>
<?php $this->end();?>
