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
	#types img { border: none; padding: 0; }
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
  <h2>Faworki</h2>
  <h5>Skróty do stron www, folderów i plików na liście kontaktów.</h5>
  
  <ul class="index">
    <li><a href="#start">Start</a></li>
	<li><a href="#www">Dodawanie skrótu WWW</a></li>
	<li><a href="#exe">Dodawanie skrótu pliku</a></li>
	<li><a href="#folder">Dodawanie folderu</a></li>
	<li><a href="#position">Pozycja na rosterze</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 17:20 2005-06-14</h6>
  
	<p>Na pulpicie "walaja się" skróty, zakładki powoli cie przytłaczają, chcesz mieć szybki dostęp do ulubionych folderów? Wtyczka faworki rozwiązuje te problemy</p>
  
	<h3 id="start">Start</h3>
	<p>Wtyczkę faworKi trzeba <a href="http://www.kplugins.net/downloads.faworki.xml">ściągnąć</a> i <a href="plugins.php">zainstalować</a>. Po instalacji jest od razu gotowa do użycia. Do listy kontaktów możemy wtedy dodać 3 rodzaje skrótów:</p>
	
	<ul id="types">
		<li><img src="pic/plug_faworki/faw_folder.png" alt="" />Foldery</li>
		<li><img src="pic/plug_faworki/faw_plik.png" alt="" />Pliki <span class="file">.exe</span></li>
		<li><img src="pic/plug_faworki/faw_www.png" alt="" />Adresy internetowe</li>
	</ul>
		
	<p>Wybierzmy sobie po jednej z każdych możliwości i do dzieła.</p>
	
	<img src="pic/plug_faworki/faw_0.png" alt="" class="left" />
	<p>Z menu <span class="tool">Kontakty</span> wybieramy pozycję <span class="menu">Dodaj skrót</span>. Wyświetli nam sie okno z opcjami dotyczacymi naszego skrótu.</p>
	
	<h3 id="www">Dodawanie skrótu WWW</h3>
	<img src="pic/plug_faworki/faw_1.png" alt="" class="right" />
	<p>Upewniwszy sie że mamy zaznaczoną opcje <span class="radon">Adres internetowy</span> wpisujemy pełny adres strony (razem z <code>http://</code>). Nie zapomnijmy tez wybrać grupy gdzie bedzie wyświetlany skrót oraz nazwy pod jaką będzie występować.</p>
	
	<h3 id="exe">Dodawanie pliku</h3>
	<img src="pic/plug_faworki/faw_2.png" alt="" class="right" />
	<p>Zmieniamy zaznaczenie na <span class="radon">Plik</span>. Zauważmy ze mamy dwa miejsca do wpisania danych. Pierwsze jest przeznaczone na ścieżkę do pliku. Poniżej mamy możliwość dodania <a class="todo" href="sql_param.php">parametru</a> dla skrótu, jeśli jest to aplikacja. Można także podać skrót dla innego typu pliku - tekstowego, albo graficznego - jak głosi podpowiedź, zostanie otworzony domyślną aplikacją.</p>
	
	<h3 id="folder">Dodawanie folderu</h3>
	<img src="pic/plug_faworki/faw_3.png" alt="" class="right" />
	<p>Zmieniamy jedynie zaznaczenie w oknie dodawania skrótu na <span class="radon">Katalog</span>. Wypełniamy odpowiednie pola ze ścieżką, nazwą pozycji na liście oraz grupą i skrót jest gotowy. </p>
	
	<h3 id="position">Pozycja na rosterze</h3>
	<img src="pic/plug_faworki/faw_4.png" alt="" class="left" />
	<p>W <span class="menu">Ustawieniach</span> Konnekta przechodzimy do <span class="list">Wtyczki</span> -> <span class="list">FaworKi</span>. W konfiguracji znajdziemy możliwość pozycjonowania naszych skrótów na liście kontaktów. Wybieramy interesujaca nas pozycje by nasze skróty pojawiały sie w odpowiednim miejscu. (jeśli chcemy mieć pożądek na liście to proponuję używanie wtyczki <a href="plug_sprzataczk.php">sprzątaczK</a>)</p>
	
	<h4>Szybsze dodawanie skrótów</h4>
	<p>Kolejną przydatną opcją w konfiguracji jest uproszczenie dodawania folderów do listy kontaktów. <span class="chx on">Ucinaj katalog z pliku w przypadku automatycznego nadania nazwy</span> - pozwala nam to na spokojnie dodanie pliku bez nadawanie mu nazwy, wtyczka pominie ścieżkę do pliku i ustawi nazwę folderu lub pliku docelowego.</p>
	
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