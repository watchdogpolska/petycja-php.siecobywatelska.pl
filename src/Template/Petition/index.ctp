<div class="row">
    <div class="col-lg-4 col-md-6 columns">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Add Signature') ?></h2>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($signature, [
                    // 'horizontal' => true,
                ]) ?>
                <?= $this->Form->input('first_name'); ?>
                <?= $this->Form->input('last_name'); ?>
                <?= $this->Form->input('email'); ?>
                <?= $this->Form->textarea('comment'); ?>
                <?= $this->Form->input('newsletter', array(
                    'label' => array(
                        'class' => 'aggrament',
                        'text' => 'Zgodnie z Ustawą z dnia 18 lipca 2002 roku o świadczeniu usług drogą elektroniczną (Dz. U z 2002 r. Nr 144, poz. 1204 ze zm.) wyrażam zgodę na otrzymywanie od Fundacji Rodzić po Ludzku, ul. Nowolipie 13/15, 00 – 150 Warszawa informacji i materiałów o działalności Fundacji przesyłanych drogą elektroniczną. Zgoda może być w każdej chwili odwołana poprzeŁz wyslłanie maila na adres: fundacja@rodzicpoludzku.pl',
                    ))); ?>
                <?= $this->Form->input('giodo', array(
                    'type' => 'checkbox',
                    'label' => 'Giodo',
                    'required' => true)); ?>
                <?= $this->Form->input('location', array('label' => 'Miejscowość')); ?>
                <?= $this->Form->button(__('Sign'), array('class'=> 'btn btn-custom-brand')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body sign-counter">
                Już
                <strong><?= $this->Paginator->counter('{{count}}');?></strong>
                podpisało
            </div>
        </div>
    </div>
    <div class="signatures index col-lg-8 col-md-6 columns content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Signatures') ?></h2>
            </div>
            <div class="panel-body">
                <?= $this->Html->image('banner.jpg', array('alt' => 'Walczymy o przywrócenie Standardów Opieki Okołoporodowej', 'class' => 'img-responsive'));?>
                <p>Do:<br>
Prezes Rady Ministr&oacute;w Beata Szydło<br>
Kancelaria Prezesa Rady Ministr&oacute;w<br>
Al. Ujazdowskie 1/3<br>
00-583 Warszawa<br>
<p><br /> </p>
<p>Szanowna Pani Premier</p>
<p>Apelujemy do Pani jako do Premier Rządu Polskiego, o przywr&oacute;cenie poprzedniego brzmienia Art. 22 ust. 5 Ustawy o działalności leczniczej i przywr&oacute;cenia Standard&oacute;w Opieki Okołoporodowej jako standardu medycznego.</p>
<p>Wprowadzone zmiany w Ustawie o działalności leczniczej likwidują aktualnie obowiązujące standardy medyczne dotyczące prowadzenia porodu fizjologicznego, łagodzenia b&oacute;lu w trakcie porodu, postępowania w ciąży powikłanej, określonych patologii i niepowodzeń położniczych. Dotychczasowe standardy medyczne zostaną ograniczone do zaledwie standard&oacute;w organizacyjnych opieki zdrowotnej.</p>
<p>Prace nad Standardami rozpoczęły się na wniosek Ministra Zdrowia prof. Zbigniewa Religi w 2007 roku. Powołany przez Ministra zesp&oacute;ł ekspert&oacute;w (położnicy i neonatolodzy, położne, strona społeczna reprezentowana przez Fundację Rodzić po Ludzku) stworzył dokument, kt&oacute;rego celem jest ograniczenie nadmiernej medykalizacji porodu fizjologicznego, przestrzeganie praw pacjenta, stosowanie zasad tr&oacute;jstopniowej opieki perinatalnej i zwiększenie satysfakcji pacjentek z opieki okołoporodowej. Standardy powstały w odpowiedzi na głos tysięcy kobiet, kt&oacute;re nie chciały więcej doświadczać odhumanizowanej opieki, szpitalnej rutyny, przestarzałych, często szkodliwych procedur medycznych. Sukcesem Standard&oacute;w jest r&oacute;wnież to, że przestrzeganie praw pacjenta zostało określone jako stały element nowoczesnej opieki. Uwzględniają one potrzeby kobiet rodzących, a wprowadzone procedury medyczne są zgodne z najnowszymi doniesieniami naukowymi. Stąd w Standardach znalazły się między innymi zalecenia o zachęcaniu kobiety do aktywności w czasie porodu, wyboru dogodnej pozycji do parcia, możliwości chodzenia czy picia. Uznano r&oacute;wnież terapeutyczną rolę osoby bliskiej, a także podkreślono rolę pierwszego kontaktu matki z dzieckiem i karmienia piersią.</p>
<p>Wiemy, że nie we wszystkich szpitalach położniczych Standardy były w pełni przestrzegane. Niemniej, z roku na rok, sytuacja w opiece okołoporodowej poprawiała się. Obawiamy się, że likwidacja Standard&oacute;w spowoduje pogorszenie, i tak niezbyt dobrej, sytuacji kobiet na porod&oacute;wkach. Brak powszechnie obowiązującego prawa cofnie nas do czas&oacute;w, kiedy zasady postępowania w szpitalu stanowione były przez pracujący w nim personel, a kobieta traktowana była w spos&oacute;b nieludzki i przedmiotowy.</p>
<p>Oburza nas fakt, że Minister Zdrowia, Konstanty Radziwiłł ignorując wypracowany przez środowiska medyczne i pacjenckie konsensus, przychylił się do jedynego głosu sprzeciwu reprezentowanego przez Naczelną Radę Lekarską. Co więcej, zataił zaproponowaną zmianę przed opinią publiczną, a także ekspertami zajmującymi się zagadnieniami poprawy opieki okołoporodowej, uniemożliwiając tym samym podjęcie otwartej dyskusji nad sensem jej wprowadzenia.</p>
<p>Liczymy na to, że spowoduje Pani przywr&oacute;cenie Standard&oacute;w Opieki Okołoporodowej stanowiących gwarancję nowoczesnej, skierowanej na potrzeby kobiet opieki, i da tym samym każdej Polce możliwość rodzenia po ludzku.</p>
<p>Joanna Pietrusiewicz</p>
<p>Fundacja Rodzić po Ludzku</p>
            </div>
        </div>
    </div>
</div>
<?php
$this->Html->script('/js/map-points.js', [
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
