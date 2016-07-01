![Sieć Obywatelska Watchdog Polska	](https://siecobywatelska.pl//wp-content/uploads/2015/03/logo.png)
# Wydarzenia

## Omówienie

Stworzenie aplikacji internetowego służącego do organizacji wydarzęń mających na celu wpływanie na działania organów publicznych do wykorzystania przez Stowrzyszenie oraz inne podmioty. Narzędzie to będzie służyć do wyrażania zdania społeczeństwa w sprawach istotnych, a takżę będzie centrum informacji na temat sprawy, a także składania petycji.

Termin realizacji: 1 lipiec - 31 lipiec


### Założenia projektu

* Aplikacja w prosty sposób powinna być możliwa do dostosowania do różnych akcji. 
* PHP/CakePHP + MySQL + SCSS/Bootstrap
* **Tworzenie aplikacji ma mieć szczególny charakter edukacyjny dla wszystkich jego współpracowników**
* Podczas tworzenia aplikacji należy podejmować zawsze decyzje, która zwiekszają jakość kodu nawet kosztem czasu realizacji (no ugly hack)


### Moduły

#### Petycje

W aplikacji ma być możliwość dopisywania się do listy, która ma być wyrazem poparcia dla danej inicjatywy poprzez wpisanie swojego imienia, nazwiska, komentarzy (z możliwosćią wyłączenia)


#### Blog

Blog, czyli listy chronologicznej lista, która pozwala w prosty sposób informować o bieżacym przebiegu sprawy. Wskazane jest, aby była możliwość przypinania wpisów do góry list, aby wpisy, które mają szczególną wagę mogły być podkreslone. (Komentarze?). Wpisy powinny być opatrzone datą publikacji oraz jeśli nastąpiła to datą edycji. Niektóre wpisy na blogu bedą stanowić tylko odowłanie do zewnętrznych witryn. 


#### Panel administracyjny

Funkcjonalności: 
* dodawania/edycja wpisów do bloga. Podczas edycji ma być wykorzystany edytor WYSIWYG
* ukrywania wpisów 
* pobranie listy osób, które podpisały petycje 
* pobranie listy osób, które zgodziły się na newsletter 


## Realizacja

1. Przemyślenie architektury informacji oraz szablonu strony - struktura dokumentów, etapy podpisywania, moduły społecznościowe. 
2. Stworzenie szablonu zgodnie z pkt
3. Stworzenie czeci serwerowej
4. Połączenie backendu i frontendu


### Narzędzia

Backend aplikacji będzie napisany w języku PHP wraz z bazą danych MySQL (lecz o ile to możliwe aplikacja powinna być niezależna od silniku bazodanowego). Frontend będzie wykorzystywać [Bootstrap for Sass 3](https://github.com/twbs/bootstrap-sass) oraz język [SCSS](http://sass-lang.com/). Do wspólnej komunikacji będzie wykorzystany Facebook, a przypisywanie zadań będzie zrealizowane przez Github Issues.


## Zakończenie


### Dalszep plany 

* Integracja z portalami społecznościowymi 
* Integracja z [CiviCRM](https://civicrm.org/)