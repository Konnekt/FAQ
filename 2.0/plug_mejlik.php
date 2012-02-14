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
	
  <h2>mejliK</h2>
  <h5>Powiadamianie o poczcie</h5>
  
  <ul class="index">
    <li><a href="#start">Start</a></li>
	<li><a href="#ustawienia">Ustawienia</a></li>
	<li><a href="#konta">Konta</a></li>
	<li><a href="#end">Zakończenie</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 05:130 2006-02-04</h6>
  
  <p>Wtyczka sprawdzająca konta pocztowe POP3 w określonych odstępach czasu i informująca o nowej poczcie przy pomocy <a href="plug_knotify.php">kNotify</a> i <a href="plug_ksound.php">kSound</a>. Może sprawdzać dowolną liczbę kont. Obsługuje bezpieczne połączenia SSL.</p>
  
  <h3 id="start">Start</h3>
  <p>Pierwsze, co musimy zrobić to przed wszystkim ściągnąć wtyczkę (najlepiej z głównej centralki przez <a href="kupdate.php" class="todo">kUpdate</a>), a następnie <a href="plugins.php">zainstalować ją</a>.</p>
 
  <h3 id="ustawienia">Ustawienia</h3>
  <img src="pic/plug_mejlik/screen_a.png" alt="" class="left" />
  <p>Przejdźmy do konfiguracji wtyczki. Aby to zrobić kliknij w menu <span class="tool">Ustawienia</span> wybierz pozycję <span class="menu">Ustawienia</span>. W nowym oknie z listy po lewej rozwiń <span class="list">Wtyczki</span> i wybierz <span class="list">mejliK</span>.</p>

  <h3 id="konta">Konta</h3>
  <img src="pic/plug_mejlik/screen_b.png" alt="" class="right" />
  
	<p><span class="menu">Nazwa</span>. Zawartość tego pola będzie wyświetlana w oknie tworzonym przez wtyczkę.</p>
	<p><span class="menu">Serwer</span>. W to pole wpisujemy adres POP3 naszego serwera.</p>

			<ul>
				<li>dla serwisu o2.pl będzie to : <code>poczta.o2.pl</code></li>
				<li>dla interia.pl: <code>poczta.interia.pl</code></li>
				<li>dla wp.pl: <code>poczta.wp.pl</code></li>
				<li>dla gmail: <code>pop.gmail.com</code> <small>Trzeba również w opcjach konta pocztowego włączyć obsługę POP3. Aby tego dokonać wchodzimy w Settings -> Forward and POP, a następnie ustawiamy opcję POP Download: "Enable POP only for mail that arrives from now on" i klikamy Save Changes.</small></li>
			</ul>
			
	<p><span class="menu">Port</span>. Pozostawiamy bez zmian – chyba, że wymaga tego serwer (sprawdzamy wtedy w opcjach konta, dla GMail: 955)</p>
	
	<p><span class="menu">SSL</span>. Opcjonalnie – wymagane dla GMail.</p>
	<p><span class="menu">Użytkownik</span>. Podajemy nasz login do konta. W przypadku GMaila wpisujemy login@gmail.com</p>
	<p><span class="menu">Hasło</span>. Podajemy nasze hasło do konta.</p>
	
	<p>Na końcu klikamy <span class="but">Dodaj</span>. Możemy także zmienić dane konta klikając na nie, wprowadzając zmiany i klikając <span class="but">Zapisz</span>. Zawsze też możemy kliknąć <span class="but">Usuń</span>.</p>
	
  <h3 id="end">Zakończenie</h3>
  <img src="pic/plug_mejlik/screen_c.png" alt="" class="right" />
  <p>Przykładowe powiadomienie przez <a href="plug_knotify.php">kNotify</a> o nowych listach.</p>

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
