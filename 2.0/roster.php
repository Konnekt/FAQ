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
  <h2>Lista kontaktów</h2>
  <h5>ustawienia wyświetlania kontaktów na rosterze</h5>
  
  <ul class="index">
    <li><a href="#start">Start</a></li>
	<li><a href="#config">Konfiguracja</a></li>
	<li><a href="#icons">Ikony statusu</a></li>
	<li><a href="#online">Kontakty dostępne</a></li>
	<li><a href="#activity">Aktywność kontaktów</a></li>
	<li><a href="#buffer">Buforowanie listy</a></li>
	<li><a href="#edit">Edytowanie nazwy</a></li>
	<li><a href="#animname">Animowanie nazwy</a></li>
	<li><a href="#animicon">Animowanie ikon</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 13:57 2005-06-17</h6>
  
  <p>Lista kontaktów w Konnekcie może być dostosowana do naszych potrzeb i preferencji. Ten poradnik opisze szczegółowo poszczególne konfiguracje ustawień. Jest ich dość dużo i możemy z nich stworzyć własne, spersonalizowane ustawienia zupełnie zależne od naszych preferencji. Mimo, że w większości są one łatwe do zrozumienia, w tym poradniku spkupiliśmy się na pokazaniu wizualnych różnic między poszczególnymi stanami listy kontaktów.</p>

  <h3 id="start">Start</h3>
  <img src="pic/roster/screen_a.png" alt="" class="left"/>
  <p>Wejdź do menu <span class="tool">Ustawienia</span>, następnie wybierz pozycję <span class="menu">Ustawienia</span>.</p>

  <h3 id="config">Konfiguracja</h3>
  <img src="pic/roster/screen_b.png" alt="" class="left"/>
  <p>Z listy po lewej wybierz <span class="list">Interfejs</span>, a następnie <span class="list">Lista kontaktów</span>. Po prawej pojawią się opcje.</p>

  <h3 id="icons">Ikony statusu</h3>
  <p><span class="chx on">Ikony statusu niezależnie od sieci kontaktu</span> - opcja ta pozwala ignorować <a href="roster_icons">ustawienia ikon</a> zestawu kStyle i używać jednolitych dla wszystkich sieci. Jedynymi odróżniającymi je elementami są malutkie symbole w lewym górym rogu. Poniżej różnica wizualna:</p>
  
  <img src="pic/roster/screen_c.png" alt="" /><img src="pic/roster/screen_d.png" alt="" />

  <h3 id="online">Kontakty dostępne</h3>
  <p><span class="chx on">Kontakty dostępne - grubą czcionką</span> - opcja ta pogrubi nazwę ekranową statusu, który ma status Dostępny bądź Pogadam. Poniżej różnica wizualna:</p>
  
  <img src="pic/roster/screen_e.png" alt="" /><img src="pic/roster/screen_f.png" alt="" />

   <h3 id="activity">Aktywność kontaktów</h3>
   <p><span class="ui">Oznaczanie aktywności kontaktów</span> -&gt; <span class="chx on">Uwzględnij przy sortowaniu i pokaż ikonkę aktywności</span> - opcja ta pokaże na <a href="icons.php">ikonie</a> sieci znak zapytania, jeśli kontakt zmienił opis będąc Niewidocznym bądź posiada opis przy łączeniu się z siecią. Trwa 20 min.</p>
  
  <img src="pic/roster/screen_g.png" alt="" /><img src="pic/roster/screen_h.png" alt="" />

  <h3 id="buffer">Buforowanie listy</h3>
  <img src="pic/roster/screen_i.png" alt="" class="left"/>
  <p><span class="chx off">Buforowane wyświetlanie</span> najlepiej mieć wyłączone, jeśli lista "rozwala" ci się jak pokazano po lewej. Lecz ogólnie naprawia to problemy z miganiem podczas przewijania.</p>

  <h3 id="edit">Edytowanie nazwy</h3>
  <img src="pic/roster/screen_j.png" alt="" />
  <img src="pic/roster/screen_k.png" alt="" />
  <p>Po zaznaczeniu opcji <span class="chx on">Edytuj nazwę kontaktu bezpośrednio na liście</span> możemy po zaznaczeniu kontaktu i klinięciu go jeszcze raz wpisać nową nazwę ekranową.</p>

  <h3 id="animname">Animowanie nazwy</h3>
  <img src="pic/roster/screen_l.png" alt="" />
  <img src="pic/roster/screen_m.png" alt="" />
  <p>Po zaznaczeniu opcji <span class="chx on">Animuj kontakty, które zmieniły status</span> będzie można zauważyć przyszarzenie nazwy ekranowej kontaktu po zmienie statusu.</p>

  <h3 id="animicon">Animowanie ikon</h3>
  <img src="pic/roster/screen_n.gif" alt="" class="left"/>
  <p><span class="chx on">Animowane ikony powiadomień</span> spowodują, że podczas przyjścia wiadomości do nas, na liście kontaktu ikona wiadomości będzie pulsowała z częstotliwością określoną w  <span class="list">Interfejs</span>, <span class="list">Powiadomienia</span> -&gt; <span class="ui">Animacja ikon</span>.</p>
  
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
