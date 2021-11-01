
            NeoTracker v1.4
          Instrukcja  obs³ugi

 --------------------------------------

   WSTÊP

   NeoTracker jest programem s³u¿¹cym
do edycji i odtwarzania muzyki przy
pomocy oœmiobitowych sampli (cyfrowych
próbek dŸwiêku), wykorzystuj¹cym
rozszerzon¹ pamiêæ do 1MB oraz COVOX.
Pod wzglêdem obs³ugi wzorowany jest na
najlepszym (najwygodniejszym), zdaniem
autora, programie muzycznym - Theta
Music Composer'ze.
   Od momentu wydania wersji 1.12
minê³o ju¿ kilka miesiêcy, od wpisania
pierwszego LDA - dok³adnie rok. Dlatego
te¿, mimo rozpoczêcia prac nad wersj¹
2.0, postanowi³em wydaæ wersjê 1.4 -
nie tak bogat¹ w mo¿liwoœci, bo opart¹
czêœciowo jeszcze na starym kodzie.
   Mimo tego mam nadziejê, ¿e w³aœnie
dziêki nowej wersji muzyka tworzona
przy pomocy sampli zacznie byæ trakto-
wana na naszej platformie nieco
powa¿niej.
   Mi³ego tworzenia ¿yczy

                        Epi/Tristesse
                           28.08.2003


   HISTORIA

   Wersja 1.4 (08.2003)
- zwiêkszona czêstotliwoœæ miksowania
  przy odtwarzaniu modu³u (11.5kHz)
- poprawione tablice czêstotliwoœci
- poprawiona konwersja formatu MOD
- poprawione zarz¹dzanie pamiêci¹
- wbudowana podrêczna pomoc
- wybór urz¹dzenia: POKEY/COVOX przy
  instalacji
- komendy efektu portamento
- obs³uga podkatalogów SpartaDOS
- oddzielne œcie¿ki dla modu³ów,
  sampli i paternów
- kilkanaœcie mniejszych poprawek

   Wersja 1.12p (02.2003)
- odpowiednik wersji 1.12 dla POKEYa

   Wersja 1.12 (12.2002)
- dodana czwarta oktawa przy konwersji
  formatu MOD
- usuniête kilka drobnych b³êdów

   Wersja 1.11 (11.2002)
- niewielkie zmiany w obs³udze
- poprawiona obs³uga p³ynnej zmiany
  g³oœnoœci
- opcja wyg³adzania sampli

   Wersja 1.1 (11.2002)
- opcja testowania sampli z klawiatury
  przy czêstotliwoœci 15.5kHz
- usuniête kilka b³êdów

   Wersja 1.0 (11.2002)
- zupe³nie nowy wygl¹d, wzorowany na
  TMC
- nowy format pliku
- szybsza i dok³adniejsza konwersja
  formatu MOD
- informacja o iloœci wolnego miejsca
  na dysku
- mo¿liwoœæ wykorzystania tzw. d³ugiego
  sampla - do 22kB
- komendy p³ynnej zmiany g³oœnoœci
- kilka mniejszych poprawek

   Wersja 0.91 (10.2002)
- konwersja plików .MOD (ProTracker)
- drobne zmiany w obs³udze

   Wersja 0.9 (09.2002)
- pierwsza wersja


   WYMAGANIA SYSTEMOWE

Konfiguracja sprzêtowa:

minimalna  - ATARI 130XE
           - stacja dysków

podstawowa - +256kB RAM
           - Covox
           - stacja dysków lub SIO2PC

optymalna  - +1MB RAM
           - Covox
           - SpartaDOS X
           - SIO2PC lub twardy dysk

Wymagania programowe:

- MEMLO poni¿ej $2000
- nie u¿ywana pamiêæ pod ROM-em OS


   INSTALACJA

   W celu zainstalowania NeoTracker'a
nale¿y przygotowaæ ok. 16kB wolnego
miejsca na dowolnym dysku oraz wczytaæ
plik NEOINST.COM. Po jego za³adowaniu
mamy mo¿liwoœæ zmiany nastêpuj¹cych
ustawieñ:

- Katalogi domyœlne (Default
  directories) dla modu³ów, sampli
  i paternów. Ustawiane s¹ one
  standardowo przy ka¿dym uruchomieniu
  programu.
  Klawisze:    DEL - cofniêcie kursora
           RET,TAB - zatwierdzenie
               ESC - wyjœcie do DOS

- U¿ywane banki pamiêci dodatkowej
  (Extended memory). Wyœwietlane
  informacje to: liczba aktywnych
  banków, ca³kowita iloœæ banków oraz
  (poni¿ej) kody wszystkich aktywnych
  banków. Kody nieaktywnych (nie
  wykorzystywanych przez NeoTracker'a)
  banków zastêpowane s¹ przez "==".
  Klawisze: -,=,+,* - ruch kursorem
               SPC - aktywacja/
               dezaktywacja banku
           RET,TAB - zatwierdzenie
               ESC - wyjœcie do DOS

- DŸwiêk I/O (I/O Sound). Jego
  wy³¹czenie znacznie uprzyjemnia
  odczyt d³ugich plików przez SIO.
  Klawisze:    SPC - w³-/wy³¹czenie
           RET,TAB - zatwierdzenie
               ESC - wyjœcie do DOS

- Urz¹dzenie wyjœciowe (Output device).
  Opcja umo¿liwia korzystanie z prog-
  ramu na komputerach nie wyposa¿onych
  w Covox. Stereo jest wykrywane
  automatycznie.
  Klawisze:    SPC - zmiana POKEY/COVOX
           RET,TAB - zatwierdzenie
               ESC - wyjœcie do DOS

- Œcie¿ka docelowa (Save to:) - okreœla
  istniej¹cy katalog, w którym zostanie
  zapisany NeoTracker z wybranymi
  ustawieniami.
  Klawisze:    DEL - cofniêcie kursora
               TAB - powrót do edycji
                    katalogu domyœlnego
               RET - instalacja
               ESC - wyjœcie do DOS

   Najprostszym sposobem instalacji
(polecanym u¿ytkownikom starszych DOSów
oraz stacji dysków), jest siedmiokrotne
wciœniêcie klawisza RETURN, a potem Y.
   U¿ytkownicy SDX powinni pamiêtaæ
o koniecznoœci podania bezwzglêdnych
œcie¿ek dostêpu oraz wy³¹czeniu banku
wykorzystywanego przez DOS w trybie
BANKED - najczêœciej jest to drugi
(licz¹c od zera) wykrywany bank, ale
(dla pewnoœci) najlepiej jest u¿yæ
sterownika SSDXBNK.SYS, przenosz¹cego
SDX do wybranego banku.


   PIERWSZE URUCHOMIENIE

   Uruchomienie programu nastêpuje po
wczytaniu NEO.COM. Po za³adowaniu
nastêpuje rozpakowanie i generacja
tablic, po czym ukazuje siê g³ówny
ekran. Dzieli siê on na trzy najwa¿-
niejsze czêœci: edytor paternów
(po lewej), edytor songu (po prawej, na
górze) oraz okno sampli (równie¿ po
prawej, ale na dole). Przechodzenie
miêdzy oknami dokonuje siê klawiszem
[TAB].
   Poni¿ej znajduj¹ siê jeszcze trzy
mniejsze okienka, informuj¹ce kolejno
o: szybkoœci odtwarzania ca³ego modu³u,
bie¿¹cej oktawie oraz statusie ostat-
niej operacji. Normalnie wyœwietlana
jest tu informacja o iloœci wolnych
banków rozszerzonej pamiêci dla sampli
(jeden sampel zajmuje jeden bank) oraz
rozmiarze wolnej pamiêci na paterny
(w bajtach). Oprócz tego, tu¿ pod
informacj¹ o wersji programu i autorze,
znajduje siê miejsce na tytu³ aktualnie
wczytanego utworu.
   Wszystkie liczby w programie (za
wyj¹tkiem numeru b³êdu) podawane s¹
w notacji szesnastkowej.
Maksymalna liczba paternów wynosi 128,
a sampli - 64, przy czym w du¿ej mierze
zale¿y to od iloœci wolnej pamiêci.
Zape³nienie bufora dla paternów lub
wszystkich banków rozszerzonej pamiêci
dla sampli powoduje wyœwietlenie
komunikatu "Out Of Memory". D³ugoœæ
sampli ograniczona jest rozmiarem
banku (16kB), ale istnieje mo¿liwoœæ
u¿ycia jednego sampla o d³ugoœci do
22kB ($5800).
   Czêstotliwoœæ odtwarzania wynosi:
- przy odgrywaniu modu³u - 11.5kHz
  (o 0.4kHz wiêcej, ni¿ w poprzednich
  wersjach)
- przy testowaniu sampli/odgrywaniu
  paternu - 15.5kHz
- przy wpisywaniu nut z klawiatury
  - ok. 13kHz

   Rozk³ad klawiszy nutowych jest
nastêpuj¹cy:

Pierwsza oktawa:
   [S] [D]     [G] [H] [J]     [L]
 [Z] [X] [C] [V] [B] [N] [M] [,] [.]

Druga oktawa:
   [2] [3]     [5] [6] [7]     [9]
 [Q] [W] [E] [R] [T] [Y] [U] [I] [O]

   Program dysponuje zakresem ponad
piêciu oktaw (63 pó³tony).

   Przy komponowaniu utworu mo¿na
korzystaæ z nastêpuj¹cych efektów:
- koniec paternu - tu¿ za pozycj¹
  w paternie, gdzie jest umieszczony,
  powoduje zakoñczenie odgrywania
  bie¿¹cego paternu/pozycji w songu
  i zapêtlenie paternu/przejœcie do
  nastêpnej pozycji w songu
- zmiana tempa - umo¿liwia zmianê szyb-
  koœci odtwarzania utworu w dowolnym
  momencie jego trwania od pozycji
  w paternie, na której zostanie
  ustawiona
- p³ynna zmiana g³oœnoœci - powoduje
  zwiêkszanie lub zmniejszanie g³oœ-
  noœci co jedn¹ ramkê - na pozycji,
  w której jest umieszczona, wykonuje
  siê tyle razy, ile okreœla to aktual-
  na szybkoœæ odtwarzania
- portamento (p³ynna zmiana wysokoœci
  dŸwiêku) - wartoœæ parametru dodawana
  jest do czêstotliwoœci dŸwiêku na
  danym kanale, nale¿y pamiêtaæ
  o obowi¹zuj¹cej tutaj skali logary-
  tmicznej; niestety - ze wzglêdu na
  ró¿ne czêstotliwoœci odtwarzania
  paternu i ca³ego utworu, dobór
  odpowiednich wartoœci mo¿e sprawiaæ
  problemy

   Tablica g³oœnoœci obejmuje zakres
33 ró¿nych g³oœnoœci - od $00 (cisza)
do $20 (pe³na g³oœnoœæ sampla).

   Od wersji 0.91 mo¿liwy jest import
modu³ów w formacie MOD (ProTracker).
Konwersja obejmuje nuty w czterech
oktawach oraz efekty: 1,2 (portamento;
niestety bez uwzglêdnienia odwróconej
skali logarytmicznej i tylko do
wartoœci $0F), 5,6,A (p³ynna zmiana
g³oœnoœci), B (skok do pozycji),
C (zmiana g³oœnoœci), D (koniec
paternu). Z grubsza konwersja polega
na zamianie sampli ze znakiem na próbki
bez znaku, podzieleniu g³oœnoœci przez
2 (format MOD przewiduje 65 poziomów
g³oœnoœci), oraz podzieleniu paternów
czteroœcie¿kowych na pojedyncze œcie¿ki
i spakowaniu ich.


   EDYTOR PATERNÓW

   Na szczycie okna widnieje skrótowa
informacja o bie¿¹cym paternie: jego
numer oraz znak "+" lub "-", mówi¹cy
o tym, czy w danym paternie coœ siê
znajduje. "-" oznacza patern pusty.
   Poni¿ej znajduje siê 17 z 64 linii
paternu - ka¿da z nich wygl¹da
mniej-wiêcej tak:

            1E:>D#2 04 20 P5
            ----------------
            aa:znnn ss vv kp

gdzie: aa - numer linii w paternie
        z - w tym miejscu mo¿e staæ
            znacznik, u¿ywany np. przy
            kopiowaniu fragmentów
            paternu
      nnn - nuta odgrywana na danej
            pozycji, lub puste miejsce
            oznaczaj¹ce kontynuacjê
            odgrywania poprzedniej nuty
       ss - numer sampla u¿ytego do
            odegrania danej nuty - jego
            brak oznacza kontynuacjê
            odtwarzania poprzedniego
            sampla
       vv - zmiana g³oœnoœci
       kp - komenda efektu i parametr:
            S0 - koniec paternu
            Sx - zmiana tempa (x=1-F)
            -x - p³ynne œciszanie
            +x - p³ynne pog³aœnianie
            Qx - portamento w dó³
            Px - portamento w górê

   Klawisze w edytorze paternów:
(^ = [CTRL], ! = [SHIFT])

klawisze nutowe - wpisywanie nut
[-][=] - ruch kursorem: góra/dó³
![INS] - wstawienie pustej linii
![DEL] - usuniêcie linii
[DEL]  - kopiowanie zaznaczonej pozycji
^[Z]   - ustawienie znacznika
![P]   - skok na pocz¹tek paternu
^[P]   - skok do pozycji znacznika

![-][=] - wybór oktawy
^[-][=] - wybór bie¿¹cego sampla
 [+][*] - wybor paternu: poprzedni/
          nastêpny
^[Q]    - skok do wybranego paternu

 ![<]  - wyczyszczenie paternu
 ^[<]  - skopiowanie paternu do bufora
         i wyczyszczenie paternu
 ^[>]  - skopiowanie zawartoœci bufora
         do paternu
!^[>]  - na³o¿enie zawartoœci bufora na
         bie¿¹cy patern
 ^[L]  - odczyt paternu
 ^[S]  - zapis paternu
 [RET] - odtwarzanie paternu
![RET] - odtwarzanie od pocz¹tku
^[RET] - odtwarzanie od pozycji
         znacznika
         ([SPC] - stop)

 ^[C]    - zmiana g³oœnoœci na bie¿¹cej
           pozycji
 ![+][*] - zmiana g³oœnoœci stopniowo:
           ciszej/g³oœniej
 ^[,][.] - ustawienie komendy efektu
 ^[+][*] - zmiana parametru komendy
 ![SPC]  - usuniêcie komendy efektu
 ^[SPC]  - usuniêcie numeru sampla
 ^[N]    - zmiana tytu³u utworu
!^[-][=] - zmiana tempa ca³ego utworu

   Poni¿sze cztery opcje uruchamia siê
z klawiszem [CTRL] (edycja numeru
sampla) lub [SHIFT] (edycja parametru,
nie przy kasowaniu - [D]). Klawisze [+]
i [*] s³u¿¹ do wyboru wpisywanej
wartoœci (szesnastkowo), [RET] powoduje
zatwierdzenie wpisu, [ESC] - rezygnacjê
i powrót do edycji paternu.

[T] - transpozycja - wartoœæ parametru
      okreœla, o ile pó³tonów zostan¹
      podniesione dŸwiêki
[X] - zmiana sampli - wartoœæ parametru
      okreœla numer sampla docelowego
[V] - zmiana g³oœnoœci - parametr
      jest mno¿ony przez g³oœnoœæ
      na ka¿dej pozycji w paternie
      wed³ug zasady: $40 - *2, $20 -
      *1, $10 - *0.5, itd.
[D] - kasowanie nut - wyczyszczenie
      wszystkich pozycji, na których
      u¿yto wybranego sampla

  [TAB] - przejœcie do okna sampli
 [HELP] - pomoc
!^[ESC] - wyjœcie do DOS


   OKNO SAMPLI

   W oknie tym znajduje siê lista
wczytanych sampli, ka¿da linia tej
listy wygl¹da mniej-wiêcej tak:

        >+04:!MINOR CHORD [L]
        ----------------------
        zuaa:lnnnnnnnnnnnnnnnn

gdzie: z - znacznik wskazuj¹cy bie¿¹cy
           sampel (u¿ywany do odgry-
           wania i wpisywania nut)
       u - znak "+" w tym miejscu
           oznacza, ¿e dany sampel jest
           u¿ywany w bie¿¹cym paternie
      aa - numer sampla
       l - znak "!" w tym miejscu
           stoi przed nazw¹ d³ugiego
           (ponad 16kB) sampla
  nnn... - nazwa sampla

   Po prawej stronie znajduje siê w¹ska
kolumna, z której mo¿na odczytaæ
informacje o bie¿¹cym samplu:
SMP - numer sampla
VOL - g³oœnoœæ bazowa
LEN - d³ugoœæ sampla w bajtach
REP - pozycja pocz¹tku pêtli

   Klawisze w oknie sampli:

 [-][=] - wybór sampla
   ^[Q] - skok do wybranego sampla
![-][=] - wybór oktawy
 [RET]  - testowanie sampla
          ([SPC] - stop)
^[V]    - zmiana g³oœnoœci bazowej
![+][*] - stopniowa zmiana g³oœnoœci
          bazowej
^[S]    - zapis sampla .NSF
^[L]    - odczyt sampla .NSF
^[R]    - odczyt sampla .SMP
          (z programu ProTracker)
^[D]    - usuniêcie sampla z listy
^[N]    - zmiana nazwy sampla

  [TAB] - przejœcie do edytora songu
 [HELP] - pomoc
!^[ESC] - wyjœcie do DOS


   EDYTOR SONGU

   Na samej górze okna znajduje siê
informacja o numerach œcie¿ek oraz
ich stan: podkreœlenie pod nazw¹
œcie¿ki oznacza kana³ w³¹czony.
   Poni¿ej widaæ fragment (8 linii)
songu, ka¿da z tych linii wygl¹da
mniej-wiêcej tak:

       01 1E:00 1E:0C 04:00 0A:FE
       --------------------------
       aa p1:t1 p2:t2 p3:t3 p4:t4

gdzie: aa - numer linii
       px - numer paternu na danej
            pozycji na œcie¿ce nr x
       tx - transpozycja paternu na
            danej pozycji na œcie¿ce x

   Klawisze w edytorze songu:

[-][=][+][*] - ruch kursorem
 ^[Q]    - skok do wybranej pozycji
  [0..F] - wpisywanie wartoœci
 ![1..4] - w³-/wy³¹czenie œcie¿ki
!^[-][=] - zmiana tempa utworu
  [RET]  - odtwarzanie modu³u
 ![RET]  - odtwarzanie od pocz¹tku
 ^[SPC]  - zerowanie wartoœci pod
           kursorem
 ^[N]    - edycja tytu³u utworu
 ^[L]    - odczyt modu³u .NEO
 ^[R]    - import modu³u .MOD
 ^[S]    - zapis modu³o .NEO
!^[CLR]  - skasowanie wszystkich
           danych

  [TAB] - przejœcie do edytora paternów
 [HELP] - pomoc
!^[ESC] - wyjœcie do DOS


   OPERACJE DYSKOWE

   Ka¿da próba odczytu lub zapisu
danych w NeoTrackerze powoduje przej-
œcie do menu operacji dyskowych. Na
dole ekranu pojawia siê wtedy œcie¿ka
dostêpu do bie¿¹cego katalogu,
a w oknie paternu widoczna jest jego
zawartoœæ - pliki danego typu oraz
podkatalogi. Program obs³uguje zarówno
katalogi MyDOS-a, jak i SpartaDOS.
Je¿eli katalog jest pusty, widoczna
jest tylko informacja "no files". Wpis
".." oznacza katalog nadrzêdny.

Klawisze przy odczycie pliku:

  [-][=] - ruch kursorem
   [RET] - wejœcie do podkatalogu/
           odczyt pliku
!^[1..8] - przejœcie do katalogu
           g³ównego danego dysku

Klawisze przy zapisie pliku:

[A..Z][0..9][_] - edycja nazwy
   [DEL] - kasowanie znaku
  [-][=] - ruch kursorem
   [RET] - wejœcie do podkatalogu
  ![RET] - zapis pliku o podanej nazwie
  ^[RET] - utworzenie podkatalogu
           o podanej nazwie
  ![DEL] - usuniêcie podkatalogu (tylko
           MyDOS) lub pliku
!^[1..8] - przejœcie do katalogu
           g³ównego danego dysku

   Je¿eli podczas odczytu/zapisu
wyst¹pi b³¹d, zostanie wyœwietlona
odpowiednia informacja. Komunikat "I/O
Error- nnn!" oznacza b³¹d transmisji
(nnn to jego numer), zaœ "Bad file
type", ¿e nie zosta³ poprawnie roz-
poznany format pliku.


   KREDYTKI

   Program powsta³ przy wspó³udziale
nastêpuj¹cych osób:

- pomys³, projekt, kod, testowanie,
  dokumentacja:
   Epi/Tristesse^O.S.

- pomys³, testowanie:
   Pinokio/Tristesse

- procedura wykrywaj¹ca XMS:
   Fox/Taquart

Przy jego tworzeniu przyda³y siê
nastêpuj¹ce programy:
- X-Assembler v2.5          Fox/Taquart
- Turbo Basic XL 1.5    Frank Ostrowski
- MS-Edit v2.0                Microsoft
- APE 1.16             Steven J. Tucker
- QMEG v4.3     S. Dorndorf, Gumi/Tight
- Flash Pack v2.1           Fox/Taquart
- FastTracker v2.09   Vogue&Mr.H/Triton

   Specjalne podziêkowania dla
Voy-a/SSG^Dial za masê inspiruj¹cych
informacji o tracker-ach z innych
platform.

   NeoTracker v1.4 jest programem typu
freeware, co oznacza, ¿e:
- u¿ywasz go na w³asn¹ odpowiedzialnoœæ
- rozpowszechniasz go nie zmieniaj¹c
  nic w archiwum i nie bior¹c za niego
  ¿adnej zap³aty
- nic za niego nie p³acisz, ale je¿eli
  Ci siê on spodoba, jesteœ zobowi¹zany
  wys³aæ autorowi pocztówkê ze swojej
  miejscowoœci

   Wszelkie sensowne uwagi i propozycje
oraz kartki pocztowe nale¿y kierowaæ
na adres autora:

        snail: Adrian Matoga
               ul. JeŸdziecka 11
               30-698 Kraków
       e-mail: epi@atari.pl
          gsm: +48505713863

 --------------------------------------

          (c) 2003 Tristesse

