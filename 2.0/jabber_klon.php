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
  <h2>Klonowanie wtyczki kJabber</h2>
  <h5>czyli w jaki sposób łączyć się z więcej niż jednym serwerem Jabbera</h5>
  
  <ul class="index">
    <li><a href="#copyfiles">Kopiowanie plików</a></li>
	<li><a href="#newplug">"Nowa" wtyczka</a></li>
	<li><a href="#newbuts">Nowe przyciski</a></li>
	<li><a href="#config">Konfiguracja</a></li>
	<li><a href="#account">Dane konta</a></li>
	<li><a href="#connection">Połączenie</a></li>
	<li><a href="#contats">Kontakty</a></li>
	<li><a href="#restrictions">Ograniczenia</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 22:17 2005-02-12</h6>
  
  <p>Jeśli Wasz ulubiony serwer przestał działać, ze względu na naprawy / wymianę sprzętu, to zawsze możecie użyć zapasowego. Konnekt umożliwia opcję podpinania się pod więcej niż jeden serwer, mimo że nie wszyscy o tym wiedzą. Wszystko da się załatwić bardzo prosto. Jak? O tym dalej.</p>
  
  <h3 id="copyfiles">Kopiowanie plików</h3>
  <img src="pic/jabber_klon/screen_a.png" alt="" class="right" />
  <p>Wyłącz Konnekt'a. Wejdź do katalogu <span class="folder"><a href="sql_folders.html#konnekt">%konnekt%</a>/plugins/</span> i stwórz kopie pliku <span class="file">kjabber.dll</span>, tyle razy ile tylko masz nowych kont na serwerach jabberowych. Nazwij je zgodnie z przeznaczeniem - możesz spokojnie używać spacji i dużych liter, więc ja na przykład nazwałem <span class="file">WP Kontakt.dll</span> aby potem było prościej je identyfikować w programie.</p>
  
  <h3 id="newplug">"Nowa" wtyczka</h3>
  <img src="pic/jabber_klon/screen_b.png" alt="" class="left" />
  <p>Uruchom Konnekta, Twoim oczom ukarze się okienko wyboru wtyczek. Zaznacz (w naszym przypadku dwie) nowe i trzymając wciśnięty klawisz <kbd>Alt</kbd> przesuń je kursorami pod wtyczkę <span class="file">kjabber.dll</span> na liście. Kliknij <span class="but">OK</span> aby uruchomić program z nimi.</p>
  
  <h3 id="newbuts">Nowe przyciski</h3>
  <img src="pic/jabber_klon/screen_c.png" alt="" class="right" />
  <p>W zależności od wybranego stylu ikon, powinny ukazać się w oknie głównym nowe przyciski z ikonkami (używamy stylu <a href="http://tinyurl.com/3qd5u" class="ex">ArkCrystal</a> v.1.1).</p>
  
  <h3 id="config">Konfiguracja</h3>
  <img src="pic/jabber_klon/screen_d.png" alt="" class="left" />
  <p>Wejdź do <span class="tool">Ustawienia</span> -> <span class="menu">Ustawienia</span> i rozwiń pozycję <span class="list">Jabber</span> w drzewku po lewej. Zobaczysz nazwy nowych "sieci" - takie same jak nazwy plików wtyczek.</p>
  
  <h3 id="account">Dane konta</h3>
  <img src="pic/jabber_klon/screen_e.png" alt="" class="left" />
  <p>Wpisz / wybierz odpowiedni <span class="ui">Serwer</span>, wprowadź swoją nazwę <span class="ui">użytkownika</span> oraz <span class="ui">hasło</span>. Możesz także <a class="todo" href="account_jabber.php">założyć konto</a>. Operację przeprowadź dla wszystkich nowych "wtyczek".</p>
  
  <h3 id="connection">Połączenie</h3>
  <img src="pic/jabber_klon/screen_f.png" alt="" class="left" />
  <p>Połącz się z serwerem, wybierając status inny niż Niedostępny.</p>
  
  <h3 id="contacts">Kontakty</h3>
  <img src="pic/jabber_klon/screen_g.png" alt="" class="left" />
  <p>Możesz teraz dodawać kontakty o sieci, np.: WP Kontakt, co ma znaczenie podczas wyświetlania kontaktu na liście i rozmowie - prowadzisz ją nie przez serwer pierwszy, tylko zastępczy - w tym przypadku <span class="input">jabber.wp.pl</span>.</p>
  
  <h3 id="restrictions">Ograniczenia</h3>
  <p>Niestety w ten sposób możesz klonować tylko wtyczkę Jabbera - innym nie jest przydzielana kolejna wartość net, więc wyskoczy błąd. Lecz mimo tego da się używać <a class="todo" href="gadux2.php">dwóch kont Gadu-Gadu</a>.</p>
  
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
