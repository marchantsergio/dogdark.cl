
            NeoTracker v1.4
          Instrukcja  obs�ugi

 --------------------------------------

   WST�P

   NeoTracker jest programem s�u��cym
do edycji i odtwarzania muzyki przy
pomocy o�miobitowych sampli (cyfrowych
pr�bek d�wi�ku), wykorzystuj�cym
rozszerzon� pami�� do 1MB oraz COVOX.
Pod wzgl�dem obs�ugi wzorowany jest na
najlepszym (najwygodniejszym), zdaniem
autora, programie muzycznym - Theta
Music Composer'ze.
   Od momentu wydania wersji 1.12
min�o ju� kilka miesi�cy, od wpisania
pierwszego LDA - dok�adnie rok. Dlatego
te�, mimo rozpocz�cia prac nad wersj�
2.0, postanowi�em wyda� wersj� 1.4 -
nie tak bogat� w mo�liwo�ci, bo opart�
cz�ciowo jeszcze na starym kodzie.
   Mimo tego mam nadziej�, �e w�a�nie
dzi�ki nowej wersji muzyka tworzona
przy pomocy sampli zacznie by� trakto-
wana na naszej platformie nieco
powa�niej.
   Mi�ego tworzenia �yczy

                        Epi/Tristesse
                           28.08.2003


   HISTORIA

   Wersja 1.4 (08.2003)
- zwi�kszona cz�stotliwo�� miksowania
  przy odtwarzaniu modu�u (11.5kHz)
- poprawione tablice cz�stotliwo�ci
- poprawiona konwersja formatu MOD
- poprawione zarz�dzanie pami�ci�
- wbudowana podr�czna pomoc
- wyb�r urz�dzenia: POKEY/COVOX przy
  instalacji
- komendy efektu portamento
- obs�uga podkatalog�w SpartaDOS
- oddzielne �cie�ki dla modu��w,
  sampli i patern�w
- kilkana�cie mniejszych poprawek

   Wersja 1.12p (02.2003)
- odpowiednik wersji 1.12 dla POKEYa

   Wersja 1.12 (12.2002)
- dodana czwarta oktawa przy konwersji
  formatu MOD
- usuni�te kilka drobnych b��d�w

   Wersja 1.11 (11.2002)
- niewielkie zmiany w obs�udze
- poprawiona obs�uga p�ynnej zmiany
  g�o�no�ci
- opcja wyg�adzania sampli

   Wersja 1.1 (11.2002)
- opcja testowania sampli z klawiatury
  przy cz�stotliwo�ci 15.5kHz
- usuni�te kilka b��d�w

   Wersja 1.0 (11.2002)
- zupe�nie nowy wygl�d, wzorowany na
  TMC
- nowy format pliku
- szybsza i dok�adniejsza konwersja
  formatu MOD
- informacja o ilo�ci wolnego miejsca
  na dysku
- mo�liwo�� wykorzystania tzw. d�ugiego
  sampla - do 22kB
- komendy p�ynnej zmiany g�o�no�ci
- kilka mniejszych poprawek

   Wersja 0.91 (10.2002)
- konwersja plik�w .MOD (ProTracker)
- drobne zmiany w obs�udze

   Wersja 0.9 (09.2002)
- pierwsza wersja


   WYMAGANIA SYSTEMOWE

Konfiguracja sprz�towa:

minimalna  - ATARI 130XE
           - stacja dysk�w

podstawowa - +256kB RAM
           - Covox
           - stacja dysk�w lub SIO2PC

optymalna  - +1MB RAM
           - Covox
           - SpartaDOS X
           - SIO2PC lub twardy dysk

Wymagania programowe:

- MEMLO poni�ej $2000
- nie u�ywana pami�� pod ROM-em OS


   INSTALACJA

   W celu zainstalowania NeoTracker'a
nale�y przygotowa� ok. 16kB wolnego
miejsca na dowolnym dysku oraz wczyta�
plik NEOINST.COM. Po jego za�adowaniu
mamy mo�liwo�� zmiany nast�puj�cych
ustawie�:

- Katalogi domy�lne (Default
  directories) dla modu��w, sampli
  i patern�w. Ustawiane s� one
  standardowo przy ka�dym uruchomieniu
  programu.
  Klawisze:    DEL - cofni�cie kursora
           RET,TAB - zatwierdzenie
               ESC - wyj�cie do DOS

- U�ywane banki pami�ci dodatkowej
  (Extended memory). Wy�wietlane
  informacje to: liczba aktywnych
  bank�w, ca�kowita ilo�� bank�w oraz
  (poni�ej) kody wszystkich aktywnych
  bank�w. Kody nieaktywnych (nie
  wykorzystywanych przez NeoTracker'a)
  bank�w zast�powane s� przez "==".
  Klawisze: -,=,+,* - ruch kursorem
               SPC - aktywacja/
               dezaktywacja banku
           RET,TAB - zatwierdzenie
               ESC - wyj�cie do DOS

- D�wi�k I/O (I/O Sound). Jego
  wy��czenie znacznie uprzyjemnia
  odczyt d�ugich plik�w przez SIO.
  Klawisze:    SPC - w�-/wy��czenie
           RET,TAB - zatwierdzenie
               ESC - wyj�cie do DOS

- Urz�dzenie wyj�ciowe (Output device).
  Opcja umo�liwia korzystanie z prog-
  ramu na komputerach nie wyposa�onych
  w Covox. Stereo jest wykrywane
  automatycznie.
  Klawisze:    SPC - zmiana POKEY/COVOX
           RET,TAB - zatwierdzenie
               ESC - wyj�cie do DOS

- �cie�ka docelowa (Save to:) - okre�la
  istniej�cy katalog, w kt�rym zostanie
  zapisany NeoTracker z wybranymi
  ustawieniami.
  Klawisze:    DEL - cofni�cie kursora
               TAB - powr�t do edycji
                    katalogu domy�lnego
               RET - instalacja
               ESC - wyj�cie do DOS

   Najprostszym sposobem instalacji
(polecanym u�ytkownikom starszych DOS�w
oraz stacji dysk�w), jest siedmiokrotne
wci�ni�cie klawisza RETURN, a potem Y.
   U�ytkownicy SDX powinni pami�ta�
o konieczno�ci podania bezwzgl�dnych
�cie�ek dost�pu oraz wy��czeniu banku
wykorzystywanego przez DOS w trybie
BANKED - najcz�ciej jest to drugi
(licz�c od zera) wykrywany bank, ale
(dla pewno�ci) najlepiej jest u�y�
sterownika SSDXBNK.SYS, przenosz�cego
SDX do wybranego banku.


   PIERWSZE URUCHOMIENIE

   Uruchomienie programu nast�puje po
wczytaniu NEO.COM. Po za�adowaniu
nast�puje rozpakowanie i generacja
tablic, po czym ukazuje si� g��wny
ekran. Dzieli si� on na trzy najwa�-
niejsze cz�ci: edytor patern�w
(po lewej), edytor songu (po prawej, na
g�rze) oraz okno sampli (r�wnie� po
prawej, ale na dole). Przechodzenie
mi�dzy oknami dokonuje si� klawiszem
[TAB].
   Poni�ej znajduj� si� jeszcze trzy
mniejsze okienka, informuj�ce kolejno
o: szybko�ci odtwarzania ca�ego modu�u,
bie��cej oktawie oraz statusie ostat-
niej operacji. Normalnie wy�wietlana
jest tu informacja o ilo�ci wolnych
bank�w rozszerzonej pami�ci dla sampli
(jeden sampel zajmuje jeden bank) oraz
rozmiarze wolnej pami�ci na paterny
(w bajtach). Opr�cz tego, tu� pod
informacj� o wersji programu i autorze,
znajduje si� miejsce na tytu� aktualnie
wczytanego utworu.
   Wszystkie liczby w programie (za
wyj�tkiem numeru b��du) podawane s�
w notacji szesnastkowej.
Maksymalna liczba patern�w wynosi 128,
a sampli - 64, przy czym w du�ej mierze
zale�y to od ilo�ci wolnej pami�ci.
Zape�nienie bufora dla patern�w lub
wszystkich bank�w rozszerzonej pami�ci
dla sampli powoduje wy�wietlenie
komunikatu "Out Of Memory". D�ugo��
sampli ograniczona jest rozmiarem
banku (16kB), ale istnieje mo�liwo��
u�ycia jednego sampla o d�ugo�ci do
22kB ($5800).
   Cz�stotliwo�� odtwarzania wynosi:
- przy odgrywaniu modu�u - 11.5kHz
  (o 0.4kHz wi�cej, ni� w poprzednich
  wersjach)
- przy testowaniu sampli/odgrywaniu
  paternu - 15.5kHz
- przy wpisywaniu nut z klawiatury
  - ok. 13kHz

   Rozk�ad klawiszy nutowych jest
nast�puj�cy:

Pierwsza oktawa:
   [S] [D]     [G] [H] [J]     [L]
 [Z] [X] [C] [V] [B] [N] [M] [,] [.]

Druga oktawa:
   [2] [3]     [5] [6] [7]     [9]
 [Q] [W] [E] [R] [T] [Y] [U] [I] [O]

   Program dysponuje zakresem ponad
pi�ciu oktaw (63 p�tony).

   Przy komponowaniu utworu mo�na
korzysta� z nast�puj�cych efekt�w:
- koniec paternu - tu� za pozycj�
  w paternie, gdzie jest umieszczony,
  powoduje zako�czenie odgrywania
  bie��cego paternu/pozycji w songu
  i zap�tlenie paternu/przej�cie do
  nast�pnej pozycji w songu
- zmiana tempa - umo�liwia zmian� szyb-
  ko�ci odtwarzania utworu w dowolnym
  momencie jego trwania od pozycji
  w paternie, na kt�rej zostanie
  ustawiona
- p�ynna zmiana g�o�no�ci - powoduje
  zwi�kszanie lub zmniejszanie g�o�-
  no�ci co jedn� ramk� - na pozycji,
  w kt�rej jest umieszczona, wykonuje
  si� tyle razy, ile okre�la to aktual-
  na szybko�� odtwarzania
- portamento (p�ynna zmiana wysoko�ci
  d�wi�ku) - warto�� parametru dodawana
  jest do cz�stotliwo�ci d�wi�ku na
  danym kanale, nale�y pami�ta�
  o obowi�zuj�cej tutaj skali logary-
  tmicznej; niestety - ze wzgl�du na
  r�ne cz�stotliwo�ci odtwarzania
  paternu i ca�ego utworu, dob�r
  odpowiednich warto�ci mo�e sprawia�
  problemy

   Tablica g�o�no�ci obejmuje zakres
33 r�nych g�o�no�ci - od $00 (cisza)
do $20 (pe�na g�o�no�� sampla).

   Od wersji 0.91 mo�liwy jest import
modu��w w formacie MOD (ProTracker).
Konwersja obejmuje nuty w czterech
oktawach oraz efekty: 1,2 (portamento;
niestety bez uwzgl�dnienia odwr�conej
skali logarytmicznej i tylko do
warto�ci $0F), 5,6,A (p�ynna zmiana
g�o�no�ci), B (skok do pozycji),
C (zmiana g�o�no�ci), D (koniec
paternu). Z grubsza konwersja polega
na zamianie sampli ze znakiem na pr�bki
bez znaku, podzieleniu g�o�no�ci przez
2 (format MOD przewiduje 65 poziom�w
g�o�no�ci), oraz podzieleniu patern�w
cztero�cie�kowych na pojedyncze �cie�ki
i spakowaniu ich.


   EDYTOR PATERN�W

   Na szczycie okna widnieje skr�towa
informacja o bie��cym paternie: jego
numer oraz znak "+" lub "-", m�wi�cy
o tym, czy w danym paternie co� si�
znajduje. "-" oznacza patern pusty.
   Poni�ej znajduje si� 17 z 64 linii
paternu - ka�da z nich wygl�da
mniej-wi�cej tak:

            1E:>D#2 04 20 P5
            ----------------
            aa:znnn ss vv kp

gdzie: aa - numer linii w paternie
        z - w tym miejscu mo�e sta�
            znacznik, u�ywany np. przy
            kopiowaniu fragment�w
            paternu
      nnn - nuta odgrywana na danej
            pozycji, lub puste miejsce
            oznaczaj�ce kontynuacj�
            odgrywania poprzedniej nuty
       ss - numer sampla u�ytego do
            odegrania danej nuty - jego
            brak oznacza kontynuacj�
            odtwarzania poprzedniego
            sampla
       vv - zmiana g�o�no�ci
       kp - komenda efektu i parametr:
            S0 - koniec paternu
            Sx - zmiana tempa (x=1-F)
            -x - p�ynne �ciszanie
            +x - p�ynne pog�a�nianie
            Qx - portamento w d�
            Px - portamento w g�r�

   Klawisze w edytorze patern�w:
(^ = [CTRL], ! = [SHIFT])

klawisze nutowe - wpisywanie nut
[-][=] - ruch kursorem: g�ra/d�
![INS] - wstawienie pustej linii
![DEL] - usuni�cie linii
[DEL]  - kopiowanie zaznaczonej pozycji
^[Z]   - ustawienie znacznika
![P]   - skok na pocz�tek paternu
^[P]   - skok do pozycji znacznika

![-][=] - wyb�r oktawy
^[-][=] - wyb�r bie��cego sampla
 [+][*] - wybor paternu: poprzedni/
          nast�pny
^[Q]    - skok do wybranego paternu

 ![<]  - wyczyszczenie paternu
 ^[<]  - skopiowanie paternu do bufora
         i wyczyszczenie paternu
 ^[>]  - skopiowanie zawarto�ci bufora
         do paternu
!^[>]  - na�o�enie zawarto�ci bufora na
         bie��cy patern
 ^[L]  - odczyt paternu
 ^[S]  - zapis paternu
 [RET] - odtwarzanie paternu
![RET] - odtwarzanie od pocz�tku
^[RET] - odtwarzanie od pozycji
         znacznika
         ([SPC] - stop)

 ^[C]    - zmiana g�o�no�ci na bie��cej
           pozycji
 ![+][*] - zmiana g�o�no�ci stopniowo:
           ciszej/g�o�niej
 ^[,][.] - ustawienie komendy efektu
 ^[+][*] - zmiana parametru komendy
 ![SPC]  - usuni�cie komendy efektu
 ^[SPC]  - usuni�cie numeru sampla
 ^[N]    - zmiana tytu�u utworu
!^[-][=] - zmiana tempa ca�ego utworu

   Poni�sze cztery opcje uruchamia si�
z klawiszem [CTRL] (edycja numeru
sampla) lub [SHIFT] (edycja parametru,
nie przy kasowaniu - [D]). Klawisze [+]
i [*] s�u�� do wyboru wpisywanej
warto�ci (szesnastkowo), [RET] powoduje
zatwierdzenie wpisu, [ESC] - rezygnacj�
i powr�t do edycji paternu.

[T] - transpozycja - warto�� parametru
      okre�la, o ile p�ton�w zostan�
      podniesione d�wi�ki
[X] - zmiana sampli - warto�� parametru
      okre�la numer sampla docelowego
[V] - zmiana g�o�no�ci - parametr
      jest mno�ony przez g�o�no��
      na ka�dej pozycji w paternie
      wed�ug zasady: $40 - *2, $20 -
      *1, $10 - *0.5, itd.
[D] - kasowanie nut - wyczyszczenie
      wszystkich pozycji, na kt�rych
      u�yto wybranego sampla

  [TAB] - przej�cie do okna sampli
 [HELP] - pomoc
!^[ESC] - wyj�cie do DOS


   OKNO SAMPLI

   W oknie tym znajduje si� lista
wczytanych sampli, ka�da linia tej
listy wygl�da mniej-wi�cej tak:

        >+04:!MINOR CHORD [L]
        ----------------------
        zuaa:lnnnnnnnnnnnnnnnn

gdzie: z - znacznik wskazuj�cy bie��cy
           sampel (u�ywany do odgry-
           wania i wpisywania nut)
       u - znak "+" w tym miejscu
           oznacza, �e dany sampel jest
           u�ywany w bie��cym paternie
      aa - numer sampla
       l - znak "!" w tym miejscu
           stoi przed nazw� d�ugiego
           (ponad 16kB) sampla
  nnn... - nazwa sampla

   Po prawej stronie znajduje si� w�ska
kolumna, z kt�rej mo�na odczyta�
informacje o bie��cym samplu:
SMP - numer sampla
VOL - g�o�no�� bazowa
LEN - d�ugo�� sampla w bajtach
REP - pozycja pocz�tku p�tli

   Klawisze w oknie sampli:

 [-][=] - wyb�r sampla
   ^[Q] - skok do wybranego sampla
![-][=] - wyb�r oktawy
 [RET]  - testowanie sampla
          ([SPC] - stop)
^[V]    - zmiana g�o�no�ci bazowej
![+][*] - stopniowa zmiana g�o�no�ci
          bazowej
^[S]    - zapis sampla .NSF
^[L]    - odczyt sampla .NSF
^[R]    - odczyt sampla .SMP
          (z programu ProTracker)
^[D]    - usuni�cie sampla z listy
^[N]    - zmiana nazwy sampla

  [TAB] - przej�cie do edytora songu
 [HELP] - pomoc
!^[ESC] - wyj�cie do DOS


   EDYTOR SONGU

   Na samej g�rze okna znajduje si�
informacja o numerach �cie�ek oraz
ich stan: podkre�lenie pod nazw�
�cie�ki oznacza kana� w��czony.
   Poni�ej wida� fragment (8 linii)
songu, ka�da z tych linii wygl�da
mniej-wi�cej tak:

       01 1E:00 1E:0C 04:00 0A:FE
       --------------------------
       aa p1:t1 p2:t2 p3:t3 p4:t4

gdzie: aa - numer linii
       px - numer paternu na danej
            pozycji na �cie�ce nr x
       tx - transpozycja paternu na
            danej pozycji na �cie�ce x

   Klawisze w edytorze songu:

[-][=][+][*] - ruch kursorem
 ^[Q]    - skok do wybranej pozycji
  [0..F] - wpisywanie warto�ci
 ![1..4] - w�-/wy��czenie �cie�ki
!^[-][=] - zmiana tempa utworu
  [RET]  - odtwarzanie modu�u
 ![RET]  - odtwarzanie od pocz�tku
 ^[SPC]  - zerowanie warto�ci pod
           kursorem
 ^[N]    - edycja tytu�u utworu
 ^[L]    - odczyt modu�u .NEO
 ^[R]    - import modu�u .MOD
 ^[S]    - zapis modu�o .NEO
!^[CLR]  - skasowanie wszystkich
           danych

  [TAB] - przej�cie do edytora patern�w
 [HELP] - pomoc
!^[ESC] - wyj�cie do DOS


   OPERACJE DYSKOWE

   Ka�da pr�ba odczytu lub zapisu
danych w NeoTrackerze powoduje przej-
�cie do menu operacji dyskowych. Na
dole ekranu pojawia si� wtedy �cie�ka
dost�pu do bie��cego katalogu,
a w oknie paternu widoczna jest jego
zawarto�� - pliki danego typu oraz
podkatalogi. Program obs�uguje zar�wno
katalogi MyDOS-a, jak i SpartaDOS.
Je�eli katalog jest pusty, widoczna
jest tylko informacja "no files". Wpis
".." oznacza katalog nadrz�dny.

Klawisze przy odczycie pliku:

  [-][=] - ruch kursorem
   [RET] - wej�cie do podkatalogu/
           odczyt pliku
!^[1..8] - przej�cie do katalogu
           g��wnego danego dysku

Klawisze przy zapisie pliku:

[A..Z][0..9][_] - edycja nazwy
   [DEL] - kasowanie znaku
  [-][=] - ruch kursorem
   [RET] - wej�cie do podkatalogu
  ![RET] - zapis pliku o podanej nazwie
  ^[RET] - utworzenie podkatalogu
           o podanej nazwie
  ![DEL] - usuni�cie podkatalogu (tylko
           MyDOS) lub pliku
!^[1..8] - przej�cie do katalogu
           g��wnego danego dysku

   Je�eli podczas odczytu/zapisu
wyst�pi b��d, zostanie wy�wietlona
odpowiednia informacja. Komunikat "I/O
Error- nnn!" oznacza b��d transmisji
(nnn to jego numer), za� "Bad file
type", �e nie zosta� poprawnie roz-
poznany format pliku.


   KREDYTKI

   Program powsta� przy wsp�udziale
nast�puj�cych os�b:

- pomys�, projekt, kod, testowanie,
  dokumentacja:
   Epi/Tristesse^O.S.

- pomys�, testowanie:
   Pinokio/Tristesse

- procedura wykrywaj�ca XMS:
   Fox/Taquart

Przy jego tworzeniu przyda�y si�
nast�puj�ce programy:
- X-Assembler v2.5          Fox/Taquart
- Turbo Basic XL 1.5    Frank Ostrowski
- MS-Edit v2.0                Microsoft
- APE 1.16             Steven J. Tucker
- QMEG v4.3     S. Dorndorf, Gumi/Tight
- Flash Pack v2.1           Fox/Taquart
- FastTracker v2.09   Vogue&Mr.H/Triton

   Specjalne podzi�kowania dla
Voy-a/SSG^Dial za mas� inspiruj�cych
informacji o tracker-ach z innych
platform.

   NeoTracker v1.4 jest programem typu
freeware, co oznacza, �e:
- u�ywasz go na w�asn� odpowiedzialno��
- rozpowszechniasz go nie zmieniaj�c
  nic w archiwum i nie bior�c za niego
  �adnej zap�aty
- nic za niego nie p�acisz, ale je�eli
  Ci si� on spodoba, jeste� zobowi�zany
  wys�a� autorowi poczt�wk� ze swojej
  miejscowo�ci

   Wszelkie sensowne uwagi i propozycje
oraz kartki pocztowe nale�y kierowa�
na adres autora:

        snail: Adrian Matoga
               ul. Je�dziecka 11
               30-698 Krak�w
       e-mail: epi@atari.pl
          gsm: +48505713863

 --------------------------------------

          (c) 2003 Tristesse

