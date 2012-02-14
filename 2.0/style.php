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

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head profile="http://gmpg.org/xfn/1">

  <title>Konnekt FAQ - Poradniki, tutoriale, artykuły</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
  <link rel="stylesheet" title="Default" href="default.css" type="text/css" />
  <link rel="shortcut icon" href="/favicon.png" />
  <script type="text/javascript" src="/code.js"></script>

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
  <h2>Style w oknie rozmowy</h2>
  <h5>czyli w jaki sposób odmienić wygląd rozmowy przez Konnekta</h5>
  
  <ul class="index">
    <li><a href="#start">Start</a></li>
	<li><a href="#config">Konfiguracja</a></li>
	<li><a href="#style">Wybranie stylu</a></li>
	<li><a href="#update">Więcej stylów</a></li>
	<li><a href="#screens">Zrzuty</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 19:06 2005-02-13</h6>
  
  <p>Osoby instalujące Konnekt'a po raz pierwszy bardzo często skarżą się na prostotę i ascetyczność okienka rozmowy. Mimo, że można dostosować to z <span class="menu">Ustawienia</span> -> <span class="list">Wygląd</span> -> <span class="list">Okno wiadomości</span>, jednak wielu z Was brakuje czegoś ekstra - innego niż dotychczas. Zwłaszcza widocznego rozdzielenia wiadomości przychodzących / wychodzących. Oto panaceum:</p>
  
	<h3 id="start">Start</h3>
	<img src="pic/css/screen_a.png" alt="" class="left" />
	<p>Przejdź do <span class="menu">Ustawień</span>, rozwiń <span class="list">Interfejs</span>, następnie wybierz <span class="list">Okno rozmowy</span>, tak jak przedstawiono na ilustracji.</p>
 
	<h3 id="config">Konfiguracja</h3>
	<img src="pic/css/screen_b.png" alt="" class="left" />
	<p>Znajdziesz tam bardzo dużo opcji, lecz na razie skoncentruj się na opcjach z grupy <span class="ui">Styl</span>.</p>
	
	<p>Przede wszystkim musisz zaznaczyć opcję <span class="chx on">Używaj styli css</span>. Pozostałe dwie opcje na razie pozostaw odznaczone - druga decyduje, czy możesz zmieniać wygląd okienka na niestandardowy dla dobrego kolegi czy ulubionej koleżanki.</p>
		
	<h3 id="style">Wybranie stylu</h3>
	<p>Następnie przejdź do wyboru pliku <span class="file">.css</span>. Upewnij się, że odznaczoną masz opcję <span class="chx off">Używaj pliku css z aktywnego tematu kStyle</span> i kliknij na przycisk z lupą aby wyszukać styl na dysku lub wpisz ścieżkę do katalogu <span class="folder"><a href="sql_folders.html#konnekt">%konnekt%</a>/themes/</span> gdzie masz pliki <span class="file">.css</span>.</p>
		
	<h3 id="update">Więcej stylów</h3>
	<p>Jeśli nie wystarczają Ci te dostarczone oryginalnie z Konnektem, wejdź na stronę <a href="http://www.konnekt.info/katalog/style_css.html" class="ex">konnekt.info</a> i wybierz sobie jakiś inny styl. Możesz także skorzystać z opcji <a class="todo" href="kupdate.php">uaktualnień</a>. Przycisk <span class="but">OK</span>.</p>

  <h3 id="screens">Zrzuty:</h3>
  <img src="pic/css/screen_c.png" alt="" /><img src="pic/css/screen_d.png" alt="" /><img src="pic/css/screen_e.png" alt="" />
  
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