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
  <h2>Statusy</h2>
  <h5>Ustawienia statusów w sieci.</h5>
  
  <ul class="index">
	<li><a href="#autoaway">Tryb Auto-Away</a></li>
	<li><a href="#priv">Prywatność</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 14:54 2005-06-30</h6>
	<p>Artykuł o dodatkowych opcjach związanych ze <a href="sql_status.php">statusami</a> w Konnekcie.</p>
  
<h3 id="autoaway">Tryb Auto-Away</h3>
	<img src="pic/status/screen_a.png" class="right" alt="" />
	<p>Konnekt posiada opcję włączania statusu <span class="status">Nieosiągalny</span> w sieciach Jabber i Tlen oraz <span class="status">Zaraz wracam</span> w Gadu-Gadu, jeśli nie wykonujemy żadnej czynności na komputerze przez określony czas. Można ją włączyć, wchodząc do menu <span class="tool">Ustawienia</span>, wybierając pozycję <span class="menu">Ustawienia</span> i w nowym oknie wybierając z listy <span class="list">Użytkownik</span>. Tam można suwakiem ustawić czas w sekundach.</p>
	
	<p>Status zostanie zmieniony, tylko jeśli mieliśmy wcześniej status <span class="status">Dostępny</span>. W przypadku pozostałych, jak <span class="status">Pogadam</span>, <span class="status">Nie przeszkadzać</span>, <span class="status">Niewidoczny</span>, tryb Auto-Away nie włączy się.</p>
	
	<h3 id="priv">Prywatność</h3>
	<p>Dla użytkowników Jabbera lub Tlen'a ważna jest <a href="auth.php">autoryzacja</a> kontaktów, aby można było zobaczyć status.</p>
	
	<img src="pic/icons/screen_b.png"	alt="" class="left" />
	<p>Użytkownicy Gadu-Gadu mogą zabezpieczyć się przed pokazywaniem statusu osobom postronnym włączając opcję <span class="chx on">Mój status widoczny tylko u znajomych z mojej listy</span> (<span class="tool">Ustawienia</span> -> <span class="menu">Ustawienia</span> -> <span class="list">Użytkownik</span> -> <span class="list">Gadu-Gadu</span>). Dzięki temu dla pojedynczych kontaktów sieci Gadu-Gadu można włączyć opcję (dostępną z menu kontaktu dostępnego przez kliknięcie prawym klawiszem na kontakcie) <span class="menu opt">Ukryj status przed nim</span>. Wtedy ikonka przybierze postać jak na obrazku po prawej. Chodzi dokładnie o ten trójkąt przy słoneczku.</p> 
	
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