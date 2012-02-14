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
  <h2>Tray</h2>
  <h5>czyli Konnekt w zasobniku systemowym (tray'u)</h5>
  
  <ul class="index">
    <li><a href="#start">Start</a></li>
	<li><a href="#net">Ikona zależna od połączenia</a></li>
	<li><a href="#force">Ikona na stałe</a></li>
	<li><a href="#multiply">Wiele ikon</a></li>
	<li><a href="#menu">Menu</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 12:25 2005-03-07</h6>
  
  <img src="pic/tray/screen_e.png" alt="" class="left" />
  <p>Konnekt, jak przystało na wzorowy komunikator umieszcza się w zasobniku systemowym. Ikona, która go symbolizuje może być dowolnie zmieniana, co jest tematem tego artykułu. Na końcu pokażemy także jak "rozmnożyć" ikonę do wszystkich sieci, tak jakbyśmy mieli parę komunikatorów.</p>
  
  <h3 id="start">Start</h3>
  <img src="pic/tray/screen_a.png" alt="" class="left" />
  <p>Klikamy na <span class="tool">Ustawienia</span> , wchodzimy do <span class="menu">Ustawień</span>, potem w liście po lewej wybieramy <span class="list">Interfejs</span>, następnie <span class="list">Powiadomienia.</span></p>

  <h3 id="net">Ikona zależna od połączenia</h3>
  <img src="pic/tray/screen_c.png" alt="" class="left" />
  <p>Zobaczymy dużo opcji, ale interesuje nas tylko dział <span class="ui">Status połączenia</span>. Na górze mamy dwie opcje:</p>
  
  <img src="pic/tray/screen_b.png" alt="" class="right"/>
  <ul>
	<li><span class="radon">Pierwsza sieć na belce statusów</span> - przyda się tutaj wyjaśnienie. "Pierwsza sieć" jest to sieć, której ikonka w oknie głównym znajduje się najbardziej na lewo. Kolejność sieci ustawia się przenosząc wtyczki na liście <span class="menu">Wtyczek</span>. W naszym przypadku pierwszy jest kJabber, więc to ikonka Jabbera będzie w tray'u.</li>
	<li><span class="radon">Sieć, która jako ostatnia zmieniła swój status</span> - to jest już chyba prostsze. Po prostu jeśli zmienialiście status w Tlenie, ikonka Tlena będzie w tray'u. Jeśli podczas łączenia do wszystkich sieci, ostatnia sieć podłączyła się Gadu-Gadu, to taka właśnie ikonka będzie w zasobniku.</li>
  </ul>

  <h3 id="force">Ikona na stałe</h3>
  <img src="pic/tray/screen_d.png" alt="" class="left" />
  <p>Poniżej tych dwóch opcji mamy kolejne. Tym razem już możemy "na siłę" ustawić daną ikonkę sieci w zasobniku, bądź przypisać standardową ikonę Konnekt'a (opcja <span class="radon">Nie pokazuj</span>).</p>

  <h3 id="multiply">Wiele ikon</h3>
  <img src="pic/tray/screen_f.png" alt="" class="left" />
  <p>Jak pamiętamy, Konnekt wyświetla jedną ikonkę, nawet jeśli używamy paru sieci. Dla niektórych może być to dezorientujące, więc twórcy wpadli na pomysł, żeby udostępnić "pseudokomunikatory" dla każdej sieci, z możliwością zmiany statusu dla każdej sieci w oddzielnym menu kontekstowym.</p><p>Wystarczy ściągnąć <a href="http://www.kplugins.net/plugins.kpaleta.xml">wtyczkę kPaleta</a>, <a href="plugins.php">zainstalować ją</a> i voila! Widzimy wszystkie statusy na każdej sieci (w naszym przypadku jest ich aż 6! - w tym 3 <a href="jabber_klon.php">sklonowane Jabbery</a>), co może być niektórym w smak.</p>

  <h3 id="menu">Menu</h3>
  <img src="pic/tray/screen_g.png" alt="" class="left" />
  <p>Dla każdej sieci mamy inną ikonkę i menu, co widać na obrazku. Wyjątkiem jest jedynie sieć główna Konnekt'a  - posiada normalne menu programu.</p>
 
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