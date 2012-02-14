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
  <h2>kBoard</h2>
  <h5>rysowanie ze znajomymi</h5>
  
  <ul class="index">
    <li><a href="#install">Instalacja</a></li>
	<li><a href="#start">Start</a></li>
	<li><a href="#plugwindow">Okno rysowania</a></li>
	<li><a href="#toolbar">Pasek narzędziowy</a></li>
	<li><a href="#draw">Rysowanie</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 18:14 2005-03-20</h6>
  
  <p>Wtyczka ta pozwala rysować ze znajomym na wspólnej planszy, lecz tylko jeśli macie obydwoje tą wtyczkę włączoną. Działa ona niezależnie od sieci.</p>
  
  <h3 id="install">Instalacja</h3>
  <p>Jak w każdej wtyczce, nie dołączanej do Konnekt'a od razu, należy ją <a href="http://www.kplugins.net/downloads.kboard.xml">ściągnąć</a> i <a href="plugins.php">zainstalować</a>. Następnie można już przejść do używania.</p>
  
  <h3 id="start">Start</h3>
  <img src="pic/plug_kboard/screen_a.png" alt="" class="left" />
  <p>Kliknijcie prawym klawiszem myszy na kontakcie z którym chcecie porysować. Gdy używacie Jabber'a, a znajomy ma Gadu-Gadu, nie ma to znaczenia - działa ta wtyczka niezależnie od sieci. Wystarczy kliknąć w menu na <span class="config">Rozpocznij rysowanie</span>.</p>
  
  <h3 id="plugwindow">Okno rysowania</h3>
  <img src="pic/plug_kboard/screen_b.png" alt="" class="right" />
  <p>Gdy kontakt ma włączoną wtyczkę pojawi się okno w którym możecie rysować. Gdy zaczniecie coś rysować, u kontaktu wyświetli się powiadomienie w <a href="plug_knotify.php">kNotify</a>.</p>
  
  <h3 id="toolbar">Pasek narzędziowy</h3>
  <img src="pic/plug_kboard/screen_c.png" alt="" class="left" />
  <p>Pasek narzędziowy posiada podstawowe funkcje, które w zupełności wystarczą, aby narysować wzór fizyczny, obrazek bądź wiadomość (taka bardziej wyrafinowana "czcionka", wiecie :P).</p>
  
  <ol>
	<li><span class="tool">Ołówek</span> - wolne rysowanie </li>
	<li><span class="tool">Linia</span> - standardowa</li>
	<li><span class="tool">Koło</span></li>
	<li><span class="tool">Prostokąt</span></li>
	<li><span class="tool">Grubość linii</span> - od 1 do 10 pikseli. - wpływa na wszystkie narzędzia.</li>
	<li><span class="tool">Kolor linii</span> - wybór z podstawowych z menu kontekstowego bądź standardowego okna wyboru kolorów.</li>
	<li><span class="tool">Kolor wypełnienia</span> - decyduje o kolorze środka koła i prostokąta.</li>
	<li><span class="tool">Wyczyść</span> - czyści płótno</li>
</ol>
  
  <h3 id="draw">Rysowanie</h3>
  <img src="pic/plug_kboard/screen_d.png" alt="" class="left" />
  <p>Korzystając z tych narzędzi możemy stworzyć coś naprawdę schizowego, jak widać po lewej. :D Aby usunąć fragment obrazka, można użyć <span class="tool">Ołówka</span> o <span class="tool">Grubości linii</span> 3-10px (żeby było czym wycierać :P) i <span class="tool">Kolorze linii</span> ustawionym na biały.</p>
  
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