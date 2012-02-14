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
  <h2>sprzataczK</h2>
  <h5>grupowanie kontaktów na liście</h5>
  
  <ul class="index">
    <li><a href="#install">Instalacja</a></li>
	<li><a href="#start">Start</a></li>
	<li><a href="#grouping">Stany Grupowania</a></li>
	<li><a href="#options">Opcje</a></li>
	<li><a href="#look">Wygląd</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 10:42 2005-04-16</h6>
  
  <p>Wtyczka ta rozszerza możliwości interfejsu Konnekta, pozwalając na grupowanie kontaktów w panele, według paru kryteriów.</p>
  
  <h3 id="install">Instalacja</h3>
  <p>Jak w każdej wtyczce, nie dołączanej do Konnekt'a od razu, należy ją <a href="http://www.kplugins.net/downloads.sprzataczk.xml">ściągnąć</a> i <a href="plugins.php">zainstalować</a>. Następnie można już przejść do konfiguracji i używania.</p>

  <h3 id="start">Start</h3>
  <img src="pic/plug_sprzataczk/screen_a.png" alt="" class="left" />
  <p>Wchodzimy do ustawień. <span class="config">Ustawienia</span> -> <span class="config">Interfejs</span> -> <span class="config">Lista kontaktów</span> -> <span class="config">Grupowanie</span>.</p>

  <h3 id="grouping">Stany grupowania</h3>
  <img src="pic/plug_sprzataczk/screen_b.png" alt="" class="left" />
  <p>Po prawej stronie okna wyświetlą się opcje dotyczące wtyczki. Zajmijmy się elementem <span class="ui">Grupuj kontakty weług</span>. Mamy do wyboru 4 stany - brak grupowania w panele oraz trzy inne, zobrazowane jako zrzuty ekranu listy kontaktów:</p>

	<ol>
		<li><img src="pic/plug_sprzataczk/screen_c.png" alt="" /><span class="input">Sieci</span></li>
		<li><img src="pic/plug_sprzataczk/screen_d.png" alt="" /><span class="input">Statusu</span></li>
		<li><img src="pic/plug_sprzataczk/screen_e.png" alt="" /><span class="input">Grup</span></li>
	</ol>

  <h3 id="options">Opcje</h3>
  <img src="pic/plug_sprzataczk/screen_f.png" alt="" class="left" />
  <p>Możemy jeszcze ustawić <span class="ui">Kolor nagłówka paneli</span>. Określa on kolor napisu opisującego dany panel, co ilustruje przykład:</p>

  <img src="pic/plug_sprzataczk/screen_g.png" alt="" class="right" />
  <p>W <span class="ui">Ustawieniach</span> sprzataczKi możemy jeszcze wpisać nazwę dla panelu zbierającego kontakty nieprzyporządkowane gdzie indziej.</p>

  <h3 id="look">Wygląd</h3>
  <img src="pic/plug_sprzataczk/screen_h.png" alt="" class="left" />
  <p>Niekatywny pasek tytułowy, jak pokazano na zrzucie, wpływa na kolor gradientowanej linii poniżej napisu określającego nazwę panelu. Można zmienić te kolory, lecz wpłynie to na wygląd całego Windows'a.</p>

  <img src="pic/plug_sprzataczk/screen_i.png" alt="" class="right" />
  <p>Należy dostać się do właściwości ekranu. W Windows XP: <span class="folder">Panel Sterowania/Ekran</span> -> zakładka <span class="tab">Wygląd</span> -> przycisk <span class="but">Zaawansowane</span> -> <span class="ui">Element</span> -> <span class="input">Nieaktywny pasek tytułowy</span>.</p>
  
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