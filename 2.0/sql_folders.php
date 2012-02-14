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
  <h2>Katalogi</h2>
  <h5>co się gdzie znajduje</h5>
  
  <ul class="index">
	<li><a href="#konnekt">Katalog Konnekta</a></li>
	<li><a href="#profile">Katalog profilu</a></li>
	<li><a href="#temp">Katalog tymczasowy</a></li>
	<li><a href="#plugins">Katalog wtyczek</a></li>
	<li><a href="#logs">Katalog logów</a></li>
	<li><a href="#addons">Katalog dodatków</a></li>
	<li><a href="#appdata">Dane aplikacji</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 13:49 2005-06-30</h6>
  <img src="pic/school/menufolders.png" alt="" class="left"  />
  <p>Struktura katalogów programu nie jest bardzo skomplikowana, ale może przydać się ta mała ściągawka. Część skrótów do katalogów jest umieszczona w menu głównym Konnekta, po zainstalowaniu wtyczki kDodatki.</p>
  
  <h3 id="konnekt">Katalog Konnekta</h3>
  
  <p>Na samym początku, instalator pyta nas o położenie plików dla programu - wybieramy wtedy katalog bądź pozostawiamy domyślny <span class="folder">C:\Program Files\Konnekt\</span>. W artykułach na tej stronie katalog Konnekta jest oznaczany w ten sposób: <span class="folder">%Konnekt%\</span>. Oznacza to właśnie położenie głównego katalogu programu, tam gdzie zażyczyliście sobie go zainstalować.</p>
  
  <h3 id="profile">Katalog profilu</h3>
  
  <p>Profil jest to katalog, w którym Konnekt trzyma swoje ustawienia, archiwum, itp. Katalog ten nie jest usuwany podczas deinstalacji programu, można więc bezproblemowo usunąć starą wersję Konnekta i zainstalować nową.</p>
  
  <p>Podczas pierwszego startu Konnekt pyta nas gdzie chcemy przechowywać swój profil. Mamy do wyboru katalog systemowy, bądź katalog Konnekta.</p>

  <p>Jeśli wybraliśmy katalog Konnekta, profil znajduje się w katalogu <span class="folder"><a href="#konnekt">%Konnekt%</a>\profiles\{Nazwa profilu}\</span></p>
  
  <p>Jeśli wybraliśmy katalog systemowy, umiejscowienie profilu będzie rożne w zależności od wersji systemu:</p>
  
  <ul>
	<li><code>Windows 95</code> i <code>98</code>: <span class="folder"><a href="#appdata">%AppData%</a>\stamina\konnekt\{Nazwa profilu}</span></li>
	<li><code>Windows 2000</code>, <code>XP</code> i <code>2003</code>: <span class="folder"><a href="#appdata">%AppData%</a>\stamina\konnekt\{Nazwa profilu}</span>. Uwaga: pod <code>Windows 2000</code>, <code>XP</code> i <code>2003</code> folder <span class="folder"><a href="#appdata">%AppData%</a></span> jest ukryty.</li>
  </ul>
  
  <h3 id="temp">Katalog tymczasowy</h3>
  
  <p>Umiejscowienie katalogu tymczasowego Konnekta jest uzależnione od wersji systemu:</p>
  
  <ul>
	<li>Dla <code>Windows 95, 98</code> i <code>Windows Me</code> jest to: <span class="folder">C:\Windows\Temp\Konnekt_{Nazwa profilu}_{losowyCiagZnakow}\</span></li>
	<li>Dla <code>Windows 2000</code>, <code>Windows XP</code> i nowszych ten katalog to: <span class="folder">C:\Documents and Settings\{Nazwa użytkownika}\Ustawienia lokalne\Temp\Konnekt_{Nazwa profilu}_{losowyCiagZnakow}\</span></li>
  </ul>
  
  <p>Ostatni katalog (<span class="folder">Konnekt_{Nazwa profilu}_{losowyCiagZnakow}\</span>) może mieć postać: <span class="folder">Konnekt_riddle_72bcf2b0</span>.</p>
  
  <h3 id="plugins">Katalog wtyczek</h3>
  
  <p>Katalog z wtyczkami jest umiejscowiony w katalogu Konnekta - <span class="folder"><a href="#konnekt">%Konnekt%</a>\plugins\</span>. Jeśli dana wtyczka jest włączona, jej plik jest w użyciu i nie można go skasować ani nadpisać innym. Należy wyłączyć wtyczkę i zrestartować Konnekta, albo wyłączyć Konnekta, aby poddać je tym akcjom.</p>
  
  <h3 id="logs">Katalog logów</h3>
  
  <p>Katalogów z logami czyli plikami, w których zapisane są czynności i wykonane polecenia przez program, znajduje się w <span class="folder"><a href="#konnekt">%Konnekt%</a>\data\log\</span>.</p>
  
  <h3 id="addons">Katalogi dodatków</h3>
  
  <p>Wiele wtyczek ma poumieszczane swoje pliki w katalogu Konnekta. Oto one:</p>
  
  <ul>
	<li><a href="emots.php">Emotikony</a> - <span class="folder"><a href="#konnekt">%Konnekt%</a>\emots\</span></li>
	<li>Skiny <a href="plug_knotify.php">kNotify</a> - <span class="folder"><a href="#konnekt">%Konnekt%</a>\knotify\</span></li>
	<li>Tematy <a href="plug_kstyle.php">kStyle</a> (ikony i kolory) oraz <a href="style.php">style CSS</a> okna rozmowy - <span class="folder"><a href="#konnekt">%Konnekt%</a>\themes\</span></li>
	<li><a class="todo" href="sound.php">Dźwięki</a> - <span class="folder"><a href="#konnekt">%Konnekt%</a>\sounds\</span></li>	
	<li>Skrypty <a class="todo" href="plug_checky.php">Checky</a> - <span class="folder"><a href="#konnekt">%Konnekt%</a>\checky\</span></li>
	<li id="sms">Skrypty <a href="sms.php">SMS</a> - <span class="folder"><a href="#konnekt">%Konnekt%</a>\sms\</span></li>
  </ul>
  
  <h3 id="appdata">Dane aplikacji</h3>
  
  <p><span class="folder">%AppData%</span> jest skrótem dla folderu <span class="folder">Dane Aplikacji</span> dla systemów <code>Windows 2000</code>, <code>Windows XP</code> i nowszych.</p>
  
  <p>Możesz to sprawdzić wybierając z menu <span class="tool">Start</span> pozycję <span class="menu">Uruchom...</span> i wpisując <code>%AppData%</code>. Zostaniesz przeniesiony do prawdziwego folderu. Zwykle jest to <span class="folder">C:\Documents and Settings\{Nazwa użytkownika}\Dane aplikacji</span>.</p>
  
  <p>Dane aplikacji systemów <code>Windows 95</code>, <code>98</code> oraz <code>Me</code> są umiejscowione zwykle w <span class="folder">C:\WINDOWS\Dane Aplikacji\</span>.</p>
  
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
