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
        <div class="panel panel-default">
            <div class="panel-body sign-counter">
                Już
                <strong><?= $this->Paginator->counter('{{count}}');?></strong>
                podpisów
            </div>
        </div>
    </div>
    <div class="signatures index col-lg-8 col-md-6 columns content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Petition') ?></h2>
            </div>
            <div class="panel-body">
            <?= $this->Html->image('banner.jpg', array('alt' => 'Walczymy o przywrócenie Standardów Opieki Okołoporodowej', 'class' => 'img-responsive'));?>

<p>Do:</p>
<p>Prezes Rady Ministr&oacute;w Beata Szydło</br>
Kancelaria Prezesa Rady Ministr&oacute;w</br>
Al. Ujazdowskie 1/3</br>
00-583 Warszawa</p>
<p><br /> </p>
<p>Szanowna Pani Premier,</p>
<p>apelujemy do Pani jako do Premier Rządu Polskiego, o przywr&oacute;cenie poprzedniego brzmienia Art. 22 ust. 5 Ustawy o działalności leczniczej i przywr&oacute;cenie Standard&oacute;w Opieki Okołoporodowej jako standardu medycznego. Zwracamy się do Pani o obronę prawa, kt&oacute;re pomaga rodzinom witać dzieci w godnych warunkach, otoczone szacunkiem oraz troskliwą i uważną opieką ze strony personelu, przy wsparciu bliskich im  os&oacute;b.</p>
<p>Wprowadzone zmiany w Ustawie o działalności leczniczej likwidują aktualnie obowiązujące standardy medyczne dotyczące prowadzenia porodu fizjologicznego, łagodzenia b&oacute;lu w trakcie porodu, postępowania w ciąży powikłanej, określonych patologii i niepowodzeń położniczych. Dotychczasowe standardy medyczne zostaną ograniczone do zaledwie standard&oacute;w organizacyjnych opieki zdrowotnej.</p>
<p>Prace nad Standardami rozpoczęły się na wniosek Ministra Zdrowia prof. Zbigniewa Religi w 2007 roku. Powołany przez Ministra zesp&oacute;ł ekspert&oacute;w (położnicy i neonatolodzy, położne, strona społeczna reprezentowana przez Fundację Rodzić po Ludzku) stworzył dokument, kt&oacute;rego celem jest ograniczenie nadmiernej medykalizacji porodu fizjologicznego, przestrzeganie praw pacjenta, stosowanie zasad tr&oacute;jstopniowej opieki perinatalnej i zwiększenie satysfakcji pacjentek z opieki okołoporodowej. Standardy powstały w odpowiedzi na głos tysięcy kobiet, kt&oacute;re nie chciały więcej doświadczać odhumanizowanej opieki, szpitalnej rutyny, przestarzałych, często szkodliwych procedur medycznych. Sukcesem Standard&oacute;w jest r&oacute;wnież to, że przestrzeganie praw pacjenta zostało określone jako stały element nowoczesnej opieki. Uwzględniają one potrzeby kobiet rodzących, a wprowadzone procedury medyczne są zgodne z najnowszymi doniesieniami naukowymi. Stąd w Standardach znalazły się między innymi zalecenia o zachęcaniu kobiety do aktywności w czasie porodu, wyboru dogodnej pozycji do parcia, możliwości chodzenia czy picia. Uznano r&oacute;wnież terapeutyczną rolę osoby bliskiej, a także podkreślono rolę pierwszego kontaktu matki z dzieckiem i karmienia piersią.</p>
<p>Wiemy, że nie we wszystkich szpitalach położniczych Standardy były w pełni przestrzegane. Niemniej, z roku na rok, sytuacja w opiece okołoporodowej poprawiała się. Obawiamy się, że likwidacja Standard&oacute;w spowoduje pogorszenie, i tak niezbyt dobrej, sytuacji kobiet na porod&oacute;wkach. Brak powszechnie obowiązującego prawa cofnie nas do czas&oacute;w, kiedy zasady postępowania w szpitalu stanowione były przez pracujący w nim personel, a kobieta traktowana była w spos&oacute;b nieludzki i przedmiotowy.</p>
<p>Oburza nas fakt, że Minister Zdrowia, Konstanty Radziwiłł ignorując wypracowany przez środowiska medyczne i pacjenckie konsensus, przychylił się do jedynego głosu sprzeciwu reprezentowanego przez Naczelną Radę Lekarską. Co więcej, zataił zaproponowaną zmianę przed opinią publiczną, a także ekspertami zajmującymi się zagadnieniami poprawy opieki okołoporodowej, uniemożliwiając tym samym podjęcie otwartej dyskusji nad sensem jej wprowadzenia.</p>
<p>Liczymy na to, że spowoduje Pani przywr&oacute;cenie Standard&oacute;w Opieki Okołoporodowej stanowiących gwarancję nowoczesnej, skierowanej na potrzeby kobiet opieki, i da tym samym każdej Polce możliwość rodzenia po ludzku.</p>
<p>Joanna Pietrusiewicz</p>
<p>Fundacja Rodzić po Ludzku</p>
<p><br /> </p>
<p><strong>English version: </strong></p>
<p>The Honourable Beata Szydło, MP<br />
Prime Minister of the Republic of Poland<br />
The Chancellery of the Prime Minister<br />
00-583 Warsaw<br />
Al. Ujazdowskie 1/3</p>
<p><br /> </p>
<p>Dear Prime Minister,</p>
<p>We appeal to you as the Prime Minister of the Polish Government to restore the previous wording of Article 22(5) of the Act on medical activity and reinstitute the Standards of Perinatal Care as a medical standard. We ask you to defend the law that helps families to welcome their children in decent conditions, accompanied by respectful, loving and attentive care from the staff, with the support of people who are close to them.</p>
<p>The changes in the Act on medical activity eliminate valid medical standards regarding the conduct of physiological childbirth, pain relief during labour, conduct of complicated pregnancy, specified pathologies and obstetric failures. The medical standards will be limited to mere organizational standards of health care.</p>
<p>The work on the Standards started in 2007 following a proposal of the Minister of Health, Prof. Zbigniew Religa. The Minister appointed a panel of experts (obstetricians and neonatologists, midwives, and the Foundation for Childbirth with Dignity that represented the public interest). A document that was developed aimed at reducing over-medicalization of physiological childbirth, observing the patient rights, applying the principles of three-tier perinatal care and increasing satisfaction of patients with perinatal care. The Standards were created in response to the voice of thousands of women who did not want to experience dehumanized care, hospital routine, outdated and often harmful medical procedures anymore. The success of the Standards lies in the fact that the rights of the patient have been defined as a constituent element of modern care. They respect the needs of women in labour and introduce medical procedures that are consistent with the latest scientific reports. That is why the Standards recommend to encourage women to be active in childbirth and choose a convenient position to pressure, women are also allowed to walk or drink during labour. Moreover, the therapeutic role of a close relative present at birth has been appreciated and there has been highlighted the key role of the first mother-child contact and breast-feeding as well.</p>
<p>We know that there are maternity wards that still do not fully respect the standards. However, year to year, the situation in perinatal care has been improving. We are afraid that by giving up the Standards the situation of women in labour wards, which is far from perfect even now, will get worse. Without generally recognized legal provisions we would go back to the days when the hospital procedures were worked out by the hospital staff on their own and a woman was treated in an inhuman and instrumental way.<br /> We are profoundly indignant at the fact that the Minister of Health, Konstanty Radziwill, ignoring the consensus achieved by the medical and patient communities, has taken up the sole voice of opposition presented by the Polish Chamber of Physicians. Moreover, the proposed amendment was concealed not only from the public but from experts working on the improvement of perinatal care as well. Therefore, it was not possible to discuss openly the question of its implementation.</p>
<p>We hope that you will support restoring the perinatal care standards. These standards guarantee modern health care that is focused on the women's needs. We hope that you will give every woman a chance of giving birth in dignity.</p>
<p><br /> Joanna Pietrusiewicz</p>
<p>Childbirth with Dignity Foundation</p>
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
