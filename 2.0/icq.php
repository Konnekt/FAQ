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
  <h2>Transport ICQ przez Jabbera</h2>
  <h5>czyli w jaki sposób rozmawiać ze znajomymi z ICQ</h5>
  
  <ul class="index">
    <li><a href="#start">Start</a></li>
	<li><a href="#browser">Przeglądarka usług</a></li>
	<li><a href="#jit">Bramka do ICQ</a></li>
	<li><a href="#register">Rejestracja</a></li>
	<li><a href="#bot">Transport ICQ</a></li>
	<li><a href="#contacts">Kontakty</a></li>
	<li><a href="#auth">Autoryzacja</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 21:33 2005-02-12</h6>
  
  <p>Konnekt poprzez wtyczkę <span class="file">kjabber.dll</span> umożliwia wykorzystywanie transportów na serwerach Jabbera. Transport jest to usługa uruchamiana po stronie serwera odpowiedzialna za komunikację z innymi sieciami komunikatorów. Jest to jakby wtyczka, tylko, że nie musisz się martwić o jej doinstalowanie - wszystko jest na serwerze, więc zawsze będzie działało - niezależnie gdzie używasz swojego konta w Jabberze. Na <a href="http://www.jabberpl.org/" class="ex">jabberpl.org</a> możesz znaleźć <a href="http://www.jabberpl.org/Serwery/Porownanie" class="ex">porównanie serwerów</a> i udostępnianych przez nie transportów. W przykładzie będziemy używać serwera <a href="http://www.chrome.pl" class="ex">chrome.pl</a>. Pamiętaj, że najpierw musisz być <a href="jkatalog.php">zarejestrowany na serwerze</a> chrome.pl.</p>
  
  <h3 id="start">Start</h3>
  <img src="pic/icq/screen_a.png" alt="" class="left" />
  <p>Dostań się z okna głównego do menu <span class="tool">Jabber</span> i wybierz <span class="menu def">Usługi</span>, aby uruchomić przeglądarkę usług, wbudowaną w Konnekt'a.</p>
  
  <h3 id="browser">Przeglądarka usług</h3>
  <img src="pic/icq/screen_b.png" alt="" class="left" />
  <img src="pic/icq/screen_b2.png" alt="" class="right" />
  <p>Jesteś w przeglądarce usług. Polecam Ci wybrać z menu kontekstowego przeglądanie w drzewku - jest ono o wiele wygodniejsze i bardziej użyteczne.</p>
  
  <h3 id="jit">Bramka do ICQ</h3>
  <img src="pic/icq/screen_c.png" alt="" class="left" />
  <p>Wybierz <span class="list">chrome.pl</span> -> <span class="list">Bramka do ICQ</span> i kliknij na tej pozycji prawym klawiszem myszy. Wybierz <span class="menu">Rejestracja</span></p>
  
  <h3 id="register">Rejestracja</h3>
  <img src="pic/icq/screen_d.png" alt="" class="left" />
  <img src="pic/icq/screen_e.png" alt="" class="right" />
  <p>Poczekaj na połączenie, a następnie wpisz swoje dane ICQ - numer i hasło. Jeśli nie masz konta, <a href="http://www.icq.com/register/index.php" class="ex">załóż je</a> na stronie ICQ. Kliknij <span class="but">OK</span>.</p>
  
  <h3 id="bot">Transport ICQ</h3>
  <img src="pic/icq/screen_f.png" alt="" class="left" />
  <p>Po pomyślnym połączeniu, do Twojej listy kontaktów zostanie dodany transport ICQ - wygląda podobnie do tego zamieszczonego po lewej.</p>
  
  <h3 id="contacts">Kontakty</h3>
  <img src="pic/icq/screen_g.png" alt="" class="left" />
  <p>Teraz możesz dodawać kontakty do listy. Kliknij <span class="tool">Kontakty</span> -> <span class="menu">Dodaj kontakt</span> i w oknie wybierz <span class="ui">Sieć</span>: <span class="menu">Jabber</span> oraz wpisz identyfikator kontaktu: <span class="input">numer@icq.chrome.pl</span></p>
  
  <h3 id="auth">Autoryzacja</h3>
  <img src="pic/icq/screen_h.png" alt="" class="left" />
  <p>Gdy <a href="auth.php">autoryzujesz kontakt</a>, możesz z nim rozmawiać. Miłego gadania! :P</p>
  
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
