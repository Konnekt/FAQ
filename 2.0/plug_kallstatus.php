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
  <h2>kAllStatus</h2>
  <h5>czyli w jaki sposób zmieniać status i status opisowy na wszystkich sieciach</h5>
  
  <ul class="index">
    <li><a href="#install">Instalacja</a></li>
	<li><a href="#start">Start</a></li>
	<li><a href="#plugwindow">Okno wtyczki</a></li>
	<li><a href="#config">Konfiguracja</a></li>
	<li><a href="#options">Opcje</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 09:59 2005-03-07</h6>
  
  <p>Wtyczka ta pozwala w łatwy sposób zmieniać status na jednej lub, jeśli korzystamy, wielu sieciach. Zmieniany jest status i status opisowy, jeśli tego chcemy. Następne kroki pomogą zrozumieć działanie i przybliżą tą bardzo przydatną wtyczkę.</p>
  
  <h3 id="install">Instalacja</h3>
  <p>Jak w każdej wtyczce, nie dołączanej do Konnekt'a od razu, należy ją <a href="http://www.kplugins.net/downloads.kallstatus.xml">ściągnąć</a> i <a href="plugins.php">zainstalować</a>. Następnie można już przejść do konfiguracji i używania.</p>
  
  <h3 id="start">Start</h3>
  <img src="pic/plug_kallstatus/screen_a.png" alt="" class="right" />
  <p>Kliknijcie prawym klawiszem myszy na ikonkę Konnekt'a w systemowym zasobniku. Ikonka Konnekt'a może wyglądać inaczej, zwykle jest to słoneczko Gadu-Gadu, ale w tym przypadku <a href="tray.php">zmieniliśmy ją</a>. Ukaże się menu, na górze którego znajduje się pozycja <span class="option">Status wszystkich</span>. Kliknijcie ją.</p>
  
  <h3 id="plugwindow">Okno wtyczki</h3>  
  <p>Pojawi się okienko, w którym możecie dokonać dużej ilości wyborów, ale nie ma się czym przejmować, wszystko wytłumaczymy. Na górze, w postaci <span class="radoff">ikonek</span> macie do wyboru status sieci jaki zmieni się po kliknięciu <span class="but">OK</span>. Jeśli nie rozumiecie części <a href="status.php">statusów</a>, tutaj macie "ściągę". Nazwa statusu wyświetli się, gdy najedziecie na ikonkę kursorem i poczekacie chwilkę. W naszym przypadku jest to status "Nie przeszkadzać".</p>
  
  <img src="pic/plug_kallstatus/screen_b.png" alt="" class="left" />
  <p>Kolejnym elementem okna jest pole tekstowe ze statusem opisowym, które możecie rozwinąć w dół, jeśli ustawialiście wcześniej jakiś status opisowy. Wyjaśnione jest to dokładniej w <a href="status.php">opisie statusów.</a></p>
  
  <p>Ostatnimi elementami okna są dwie opcje. Zaznaczenie opcji <span class="chx on">status</span> spowoduje zmianę statusu na wszystkich sieciach, do których jesteście podłączeni. Dodatkowo przy zaznaczeniu opcji <span class="chx on">opis</span> zmieni się wasz status opisowy. Polecam odznaczyć to pole, jeśli tylko chcecie się podłączyć do sieci, będąc niewidocznym, bo inni użytkownicy Konnekt'a mogą "podejrzeć" waszą zmianę aktywności przez <a href="plug_knotify.php">kNotify</a> albo <a href="icons.php">ikonkę na liście kontaktów</a>.</p>
  
  <h3 id="config">Konfiguracja</h3>
  <img src="pic/plug_kallstatus/screen_c.png" alt="" class="left" />
  <p>Możecie także ustawić parę opcji w <span class="tool">Ustawienia</span> -> <span class="menu">Ustawienia</span>. Wejdźcie tam, a następnie wybierzcie z listy po lewej <span class="list">Wtyczki</span> a potem <span class="list">kAllStatus</span>.</p>
  
  <h3 id="options">Opcje</h3>
  <img src="pic/plug_kallstatus/screen_d.png" alt="" class="left" />
  <img src="pic/plug_kallstatus/screen_e.png" alt="" class="right" />
  <p>Znajdują się tam dwie opcje. Sterują one wyświetlaniem pozycji <span class="menu">Status wszystkich</span>. Pierwsza, <span class="chx on">Zmiana statusu wszystkich sieci w menu tray</span> powoduje dodanie pozycji w menu w trayu - tym klikanym wcześniej. Druga (<span class="chx off">Ikona zmiany statusu wszystkich sieci w głównym oknie</span>) powoduje wyświetlanie tej pozycji w menu <span class="tool">Wtyczek</span>, jak to zostało przedstawione na obrazku. Polecamy wyłączyć tą opcję, zmiana statusu przez zasobnik (tray) jest o wiele wygodniejsza, bo nie trzeba otwierać okna głównego.</p>
  
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
