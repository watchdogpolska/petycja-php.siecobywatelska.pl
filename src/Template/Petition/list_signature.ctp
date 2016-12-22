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
                <?= $this->Form->input('first_name', array('label' => 'Imię (First name)')); ?>
                <?= $this->Form->input('last_name', array('label' => 'Nazwisko (Last name)')); ?>
                <?= $this->Form->input('email'); ?>
                <?= $this->Form->textarea('comment', array(
                    'placeholder' => 'Twój komentarz (Your comment)'
                )); ?>
                <?= $this->Form->input('location', array('label' => 'Miejscowość (Location)')); ?>
                <?= $this->Form->input('giodo', array(
                    'type' => 'checkbox',
                    'label' => array(
                        'class' => 'aggrament',
                        'text' => '<span class="aggrement-text">
<span class="aggrement-text-short">Zgodą na przetwarzanie danych na cele petycji <a href="#" class="aggrement-text-more">Pokaż całość</a></span>
<span class="aggrement-text-full">
Wyrażam zgodę na przetwarzanie moich danych osobowych w celu otrzymywania od Fundacji Rodzić po Ludzku wiadomości związanych z petycją do Prezesa Rady Ministrów o przywrócenie Standardów Opieki Okołoporodowej. Zgoda może być w każdej chwili odwołana poprzez wysłanie maila na adres: fundacja@rodzicpoludzku.pl. Wyrażam zgodę na opublikowanie ujawnionych w petycji danych osobowych w zakresie: imię i nazwisko, miejscowość na stronie internetowej standardyzostaja.rodzicpoludzku.pl
</span>
</span>
<span class="aggrement-text">
<span class="aggrement-text-short">Consent to process personal data related to the petition <a href="#" class="aggrement-text-more">Show more</a></span>
<span class="aggrement-text-full">
I hereby give consent to process my personal data to receive messages from the Childbirth with Dignity Foundation related to the petition to the Prime Minister on restoring the Standards of Perinatal Care. Consent can be revoked at any time by sending information to the following email: fundacja@rodzicpoludzku.pl. I declare consent for publishing my personal data in the petition concerning: name, last name and town on the website www.standardyzostaja.rodzicpoludzku.pl
</span>

',
                        'escape' => false

                    ), 'required' => true)); ?>
                <?= $this->Form->input('newsletter', array(
                    'type' => 'checkbox',
                    'label' => array(
                        'class' => 'aggrament',
                        'text' => '
                            <span class="aggrement-text">
                                <span class="aggrement-text-short">Zgoda na przesyłanie informacji na temat dzialności fundacji <a href="#" class="aggrement-text-more">Pokaż całośc</a></span>
                                <span class="aggrement-text-full">Zgodnie z Ustawą z dnia 18 lipca 2002 roku o świadczeniu usług drogą elektroniczną (Dz. U z 2002 r. Nr 144, poz. 1204 ze zm.) wyrażam zgodę na otrzymywanie od Fundacji Rodzić po Ludzku, ul. Nowolipie 13/15, 00 – 150 Warszawa informacji i materiałów o działalności Fundacji przesyłanych drogą elektroniczną. Zgoda może być w każdej chwili odwołana poprzez wysłanie maila na adres: fundacja@rodzicpoludzku.pll</span>
                            </span>
                            <span class="aggrement-text">
                                <span class="aggrement-text-short">Consent to send information about the activities of the Foundation</span>
                                
                            </span>',
                        'escape' => false
                    ))); ?>
                <?= $this->Form->button(__('Podpisz (Sign)'), array(
                    'class' => 'btn btn-custom-brand')) ?>
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
