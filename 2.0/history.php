<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head profile="http://gmpg.org/xfn/1">
<title>Konnekt FAQ - Poradniki, tutoriale, artykuły</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
  <link rel="stylesheet" title="Default" href="default.css" type="text/css" /> <!-- by Riddle -->
	<link rel="stylesheet" title="Light" href="default_light.css" type="text/css" /> <!-- by Olórin -->
  
  <link rel="shortcut icon" href="/favicon.png" />
  <script type="text/javascript" src="code.js"></script>
  
  <style type="text/css">
  <!--
	.art .toolbar li { clear: left; display: inline; }
	.art .toolbar img { margin-right: 5px; } 
	-->
  </style>

</head>
<body>

<? include('log/run.php'); ?><div id="site">

<div id="header">
<h1><a href="/index.php" title="Wróć do strony głównej">Konnekt <acronym lang="en-US" title="Frequently Asked Questions">FAQ</acronym></a></h1>
<ul>
  <li><a href="http://konnekt.info/download.html" title="Pobierz Konnekta!">Pobierz!</a></li>
  <li><a href="/start.php" title="Zacznij używać!">Włącz!</a></li>
</ul>
</div>

<div id="main">

<div id="content">
 
  <div class="art">
  <h2>Historia</h2>
  <h5>archiwum wiadomości i wielu innych informacji w Konnekcie</h5>
  
  <ul class="index">
    <li><a href="#start">Start</a></li>
	<li><a href="#toolbar">Pasek narzędziowy</a></li>
	<li><a href="#folders">Pozycje archiwum</a></li>
	<li><a href="#search">Szukaj</a></li>
	<li><a href="#display">Formatowanie daty</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 04:06 2005-05-16</h6>
  
  <p>Archwium w Konnekcie tak naprawdę nie przechowuje tylko wiadomości. Jest sporym zbiorem wszystkich ważniejszych informacji z naszego komunikatora. Poradnik ten przybliża poszczególne foldery - kategorie wpisów archwialnych i szczegółowo tłumaczy sposób poruszania się po nich. Zwłaszcza wyszukiwania wiadomości.</p>
  
  <h3 id="start">Start</h3>
  <img src="pic/history/screen_a.png" alt="" class="left" />
  <p>Aby wejść do Historii należy wybrać w oknie głównym przycisk <span class="config">Kontakty</span>, a następnie z menu wybrać Historia. Można także w okienku rozmowy kliknąć na przycisk <span class="config">Historia</span>.</p>
  
  <h3 id="toolbar">Pasek narzędziowy</h3>
  <p>Pojawi się okno historii rozmów. Na górze okna widoczny jest pasek narzędziowy (kliknij aby przejść do podsumowania danej opcji):</p>
  
  <ul class="toolbar">
    <li><span class="tool"><a href="#reload">Odśwież</a></span></li>
    <li><span class="tool"><a href="#mdele">Kasuj wszystko</a></span></li>
	<li><span class="tool"><a href="#dele">Usuń</a></span></li>
	<li><span class="tool"><a href="#save">Zapisz</a></span></li>
	<li><span class="tool"><a href="#print">Drukuj</a></span></li>
	<li><span class="tool"><a href="#search">Szukaj</a></span></li>
	<li><span class="tool"><a href="#queue">Prześlij</a></span></li>
	<li><span class="tool"><a href="#defrag">Kompaktuj</a></span></li>
  </ul>
  
  <h3 id="folders">Pozycje archiwum</h3>
  <img src="pic/history/screen_j.png" alt="" class="left" />
  <p>Po lewej stronie widoczne jest drzewko z elementami archiwum. Po rozwinięciu danego elementu uzyskamy dostęp do katalogów, którymi mogą być dodatkowe kategorie, bądź kontakty. Najważniejszą pozycją jest kategoria <span class="list">Rozmowy</span> - domyślacie się, że zawiera zarchiwizowane wszystkie nasze rozmowy.</p>
  
  <h4>Wtyczki</h4>
  <p>Nie wszystkie elementy mogą być u Was widoczne, zależy to w większej mierze od zestawu wtyczek, jakich używacie. Wiadomości <span class="list">SMS</span> na przykład przechowywane, jeśli mamy włączoną wtyczkę do ich wysyłania. U mnie katalog ten jest pusty, a istnieje tylko dlatego, że wtyczka kiedyś była aktywna. Można go usunąć, podobnie jak inne puste, nieużywane katalogi. Inne katalogi, które dodane zostają po zainstalowaniu wtyczek:</p>
  
  <h4>OlewKa</h4>
  <img src="pic/history/screen_zc.png" alt="" class="left" />
  <p>W <span class="list">Usunięte</span> pojawi się opcja <span class="option">Ignorowani po cichu</span>, jeśli posiadamy wtyczkę <span class="todo"><a href="plug_olewk.php">olew.K</a></span> i włączymy ciche ignorowanie. Wszystkie wiadomości będą przechowywane tutaj.</p>
  
  <h4>kStatusLog</h4>
  <img src="pic/history/screen_zd.png" alt="" class="left" />
  <p>Pozycja <span class="list">opisy</span> pojawi się wraz z zainstalowaniem wtyczki <a class="todo" href="plug_kstatuslog.php">kStatusLog</a>, logującą właśnie tutaj opisy i statusy waszych znajomych z listy. Bardzo przydatna opcja - polecam.</p>
  
  <h4>kTransfer</h4>
  <img src="pic/history/screen_ze.png" alt="" class="left" />
  <p>Tą wtyczkę ma każdy instalujący pełną paczkę - <a class="todo" href="plug_ktransfer.php">kTransfer</a>. Znajdują się tutaj logi połączeń - zerwanych, wysłanych, odebranych jak i tych anulowanych.</p>
  
  <h4>Usunięte</h4>
  <p>W kategorii <span class="list">Usunięte</span> znaleźć możemy wiadomości zablokowane przez Konnekta, jeśli włączyliśmy opcję <span class="chx off">Nie przyjmuj wiadomości od osób spoza listy</span>. Więcej na temat <a class="todo" href="privacy.php">prywatności</a> tutaj. Są tam także (w kategorii <span class="list">ignorowani</span>) informacje od denerwujących użytkowników, którym daliśmy opcję <span class="menu opt">Ignoruj</span></p>
  
  <h3 id="reload">Odśwież</h3>
  <p>Opcja ta pozwala wczytać do archwium wszystkie wiadomości, które doszły do nas, po otworzeniu Historii.</p>
  
  <h3 id="mdele">Kasuj wszystko</h3>
  <img src="pic/history/screen_k.png" alt="" class="left" />
  <p>Po kliknięciu przycisku <span class="tool">Kasuj wszystko</span> pojawi się okno potwierdzenia. Opcja czasem się może przydać, lecz odradzamy jej używania, jeśli nie posiadacie kopii historii. Jednakże po naciśnięciu przycisku <span class="but">Tak</span> pożegnacie się z całym archiwum.</p>
  
  <h3 id="dele">Usuń</h3>
  <img src="pic/history/screen_l.png" alt="" class="left" />
  <p>Po kliknięciu przycisku <span class="tool">Usuń</span> gdy wybrane są któreś pozycje, pojawi się okno potwierdzenia wykonania czynności. Wiadomości zostaną wykasowane z archiwum, nie ma możliwości aby je przywrócić. Wbrew wydawało by się, pozorom, skasowane przez nas wiadomości nie znajdują się na pozycji <span class="list">Usunięte</span> w drzewku</p>
  
  <h3 id="save">Zapisz</h3>
  <img src="pic/history/screen_m.png" alt="" class="left" />
  <p>Po wybraniu wiadomości, jak to miało miejsce poprzednio, możemy także je zapisać. Wystarczy kliknąć przycisk <span class="tool">Zapisz</span></p>
  
  <h4>Typ pliku</h4>
  <img src="pic/history/screen_n.png" alt="" class="right" />
  <p>W oknie zapisywania można wybrać typ pliku - plik tekstowy do użytku własnego albo plik XML, przydatny do innych programów. XMLem nie zaprzątaj sobie na razie głowy.</p>
  
  <h3 id="print">Drukuj</h3>
  <img src="pic/history/screen_zf.png" alt="" class="left" />
  <p>Po wydaniu polecenia drukowania danej rozmowy otworzy się Internet Explorer i wyświetli rozmowę oraz pokaże okno parametrów drukowania. W zależności od wersji przeglądarki mogą pojawić się komunikaty bezpieczeństwa. Należy zaakceptować wszelkie skrypty i aktywną treść, aby móc wydrukować stronę. Nie jest to nic niebezpiecznego.</p>
  
  
  <h3 id="search">Szukaj</h3>
  <img src="pic/history/screen_o.png" alt="" class="left" />
  <p>Po kliknięciu na przycisk <span class="tool">Szukaj</span> pojawi się okno wyszukiwania. Wszystkie jego opcję będą wytłumaczone dalej. Teraz, aby przetestować jak działa wpisz wyraz i naciśnij przycisk <span class="but">Start</span>.</p>
  
  <h4>Wynik</h4>
  <img src="pic/history/screen_p.png" alt="" class="right" />
  <p>Mechanizm szukania pokaże pierwszy wynik w górnym oknie, a przycisk <span class="but">Start</span> zmieni się w <span class="but">Znajdź następny</span>, który możemy kliknąc i w ten sposób kontynuować szukanie ręcznie. Po kliknięciu na wynik treść wiadomości pokaże się w dolnym oknie.</p>
  
  <h4>Znajdź wszystkie</h4>
  <img src="pic/history/screen_q.png" alt="" class="left" />
  <p>Można także zaznaczyć opcję <span class="chx on">Znajdź wszystkie</span>, aby wyszukiwanie zwróciło wszystkie wyniki na raz. W przypadku popularnych słow może to chwilę potrwać. Wyniki ukażą się tak samo w górnym oknie, lecz wylistowane od góry do dołu.</p>
  
  <h4>Podstawowe szukanie</h4>
  <img src="pic/history/screen_r.png" alt="" class="left" />
  <p>W trybie normalnym szukanie zwraca wiadomości, w których znajdują się słowa zawierające szukany ciąg danych.</p>
  
  <h4>Wynik</h4>
  <img src="pic/history/screen_s.png" alt="" class="right" />
  <p>Przykładowo: wyszukanie <span class="path">firefox</span> zwróci wynik w postaci wiadomości ze słowami "firefoxa", "firefoxie", etc.</p>
  
  <h4>Dokładniejsze szukanie</h4>
  <img src="pic/history/screen_t.png" alt="" class="left" />
  <p>Możemy zaznaczyć opcję <span class="chx on">Tylko całe wyrazy</span> aby szukać dokładnie.</p>
  
  <h4>Wynik</h4>
  <img src="pic/history/screen_u.png" alt="" class="right" />
  <p>Teraz szukanie będzie zwracało tylko dokładne wyniki. Przydatne jest to, gdy znamy dokładnie słowo, które chcemy wyszukać, ponieważ zawęża listę wyników.</p>
  
  <h4>Przeszukiwanie jednego katalogu</h4>
  <img src="pic/history/screen_v.png" alt="" class="left" />
  <p>Jeśli zależy nam, aby wyniki wyszukiwania pochodziły tylko od jednej osoby, należy zaznaczyć opcję <span class="chx on">Tylko wybrany katalog</span>. Następnie klikamy kontakt bądź folder w jakim chcemy szukać</p>
  
  <h4>Wynik</h4>
  <img src="pic/history/screen_w.png" alt="" class="right" />
  <p>Wyniki pokażą się w oknie na gorze, jak zwykle, ograniczone do danego kontaktu.</p>
  
  <h4>Nowe wyszukiwanie</h4>
  <img src="pic/history/screen_x.png" alt="" class="left" />
  <p>Jeśli wyszukujemy w jednym katalogu i zechcemy zmienić parametry wyszukiwania (jak szukane wyrażenie, opcje wypisane wyżej, bądź <a href="#range">zakres</a> lub <a href="#time">czas</a>) to kliknięcię na <span class="but">Znajdź następny</span> będzie wyszukiwało nam w poprzednich wynikach szukania - tworzy się jakby nowy "katalog" i to do niego odwołuje się mechanizm szukania. Jeśli chcecie szukać wśród poprzedniego katalogu, należy go ponownie zaznaczyć.</p>
  
  <h4 id="range">Zakres</h4>
  <img src="pic/history/screen_y.png" alt="" class="left" />
  <p>Możliwa jest zmiana wyświetlania wiadomości jakie pojawiają się podczas wyszukiwania. O ile zawsze szukamy wyrażenia w jednej wiadomości, możemy ustawić dodatkowo czy inne wiadomości mają być wyświetlane. I tak:</p>
  
  <ul>
  <li><span class="radon">Pojedyncze wiadomości</span> - Jak napisane. Pokaże pojedyncze wyszukane wiadomości.</li>
  <li><span class="radon">Wątek do końca</span> - Wyświetli wyszukaną wiadomość oraz wszystkie następne wiadomości we wpisie archiwum. Wpisem archiwum nazywamy pozycje w górnym oknie podczas ręcznego przeglądania historii.</li>
  <li><span class="radon">Cały wątek</span> - Wyświetli wszystkie wiadomości, które są z tą wyszukaną we wpisie archwium.</li>
  <li><span class="radon">3 < - > 3</span> - Wyświetli trzy poprzednie wiadomości od wyszukanej i trzy następne z danego wpisu archwium. Zamiast trójek możemy wstawić swoje własne.</li>
  </ul>
  
  <h4 id="time">Data i czas</h4>
  <img src="pic/history/screen_za.png" alt="" class="right" />
  <p>Na dole okna wyszukiwania możemy określić datę i czas w którym będziemy szukać wiadomości. Pole uaktywnia się zaznaczając pole jak pokazane na zrzucie. Poszczególne cząstki daty i godziny możemy edytować wpisując wartość, przeskakując kursorami na klawiaturze góra/dół.</p>
  
  <h4>Przydatny kalendarz</h4>
  <img src="pic/history/screen_zb.png" alt="" class="left" />
  <p>Możemy także kliknąć na strzałkę przy polu, aby wyświetlić użyteczny kalendarz i dzięki temu wybrać szybciej datę. To samą czynność można powtórzyć dla drugiego pola. Jeśli zostawimy je puste, ogranicznikiem będzie przedział między pierwszą wybraną datą a dniem dzisiejszym.</p>
  
  <h3 id="queue">Prześlij</h3>
  <p>Opcja ta służy do wysyłania wiadomości, które siedzą w kolejce niewysłanych.</p>
  
  <h3 id="defrag">Kompaktuj</h3>
  <p>Przy kasowaniu wpisów z historii dane w plikach dla poszczególnych wiadomości są zerowane. Kompaktowanie usuwa te puste obszary. Wczytuje wszystkie wiadomości do pamięci operacyjnej i wtedy zapisuje w nowym, świeżym pliku. Dlatego przy dużych archiwach proces też może potrwać. I za wytłumaczeniem tej funkcji, nie opłaca się jej uruchamiać, jeśli nie kasowaliśmy wpisów.</p>
  
  <h3 id="display">Formatowanie daty</h3>
  <img src="pic/history/screen_zg.png" alt="" class="left" />
  <p>Bardzo przydatne jest zmienienie formatowania wyświetlania daty i czasu w historii. Da się to zrobić przez edycję pliku <span class="folder"><a href="sql_folders.php">%konnekt%</a>\history\dir.xml</span>. Możemy go otworzyć w notatniku. Należy odnaleźć linijkę:</p>
  
  <pre><code>&lt;date width="100" name="Data"  format="%H:%M %d %m'%y %A"/&gt;</code></pre>
  
  <p>I najlepiej zamienić na :</p>
  
  <pre><code>&lt;date width="100" name="Data"  format="%d-%m-%y %H:%M %A"/&gt;</code></pre>
  
  <p>Efekt prezentuj się jak pokazano na zrzucie ekranowym. Czyż nie wygodniej?</p>
  
  </div>

</div>

<div id="sidebar">
<?php include("sidebar.html"); ?>
</div>

</div>

</div>

<div id="footer">
<?php include("footer.html"); ?></div>

</div>

</body>
</html>
