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
  <h2>Katalog Jabbera</h2>
  <h5>Znajdz innych i pozwól być znalezionym.</h5>
  
  <ul class="index">
    <li><a href="#start">Start</a></li>
	<li><a href="#register">Rejestracja</a></li>
	<li><a href="#form">Formularz</a></li>
	<li><a href="#search">Szukanie</a></li>
	<li><a href="#browsing">Przeglądanie</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 16:46 2005-06-17</h6>
  
  <p>Istnieje <a href="http://ludzie.jabberpl.org/" class="ex">Polski Katalog Użytkowników Jabbera</a>, gdzie można znaleźć ludzi korzystajacych z tego protokołu nie zważajac na serwer. <strong>Uwaga!</strong> nie wszystkie serwery mają dostępną ta usługę. W artykule bazujemy na serwerze <code>chrome.pl</code> - podobnie więszość polskich serwerów ma ją zainstalowaną.</p>
  
	<h3 id="start">Start</h3>

	<img src="pic/jkatalog/jkatalog1.png" alt="" class="left" />
	<p>Wybieramy w głównym pasku narzędziowym daną sieć <span class="tool">Jabbera</span>, następnie z menu <span class="menu def">Usługi</span>.</p>
	
	<h3 id="register">Rejestracja</h3>
	<img src="pic/jkatalog/jkatalog2.png" alt="" class="right" />
	<p>Znajdujemy opcję <span class="list">Polski Katalog Użytkowników Jabbera</span> (<span class="list">Szukanie osób w polskim katalogu</span> też może być). Klikamy na nią prawym przyciskiem myszki i wybieramy <span class="menu">Rejestracja</span>.</p>
	
	<h3 id="form">Formularz</h3>
	<img src="pic/jkatalog/jkatalog3.png" alt="" class="right" />
	<p>Wypełniamy dane w oknie, które się pojawi. Najważniejszą opcją jest ustawienie <span class="ui">trybu</span> <span class="input">Zarejestruj</span> oraz wybranie sposobu synchronizacji.  Polski katalog użytkowników umożliwia okresową synchronizację danych z Twoją osobistą wizytówką (vCardem) - tym co wpiszesz w opcjach Konnekta (<span class="tool">Ustawienia</span> -> <span class="menu">Twoje dane</span>). Do wyboru masz trzy opcje</p>
	
	<ul>
		<li><span class="ui">Brak synchronizacji</span> – żadne dane nie są synchronizowane z wizytówką. W katalogu znajdują się jedynie dane wpisane przez użytkownika podczas rejestracji/aktualizacji w katalogu</li>
		<li><span class="ui">Podstawowe dane</span>. Danymi pobieranymi są: <span class="ui">Imię</span>, <span class="ui">Nazwisko</span>, <span class="ui">Pseudonim</span>, <span class="ui">Województwo</span>, <span class="ui">Stan</span>.</li>
		<li><span class="ui">Kompletna</span>, razem z danymi pobieramymi z pól, gdy wybierzemy <span class="input">Podstawowe dane</span>, dodatkowymi informacjami są: <span class="ui">Rok urodzenia</span>, <span class="ui">Miejscowość</span>, <span class="ui">Telefonu</span>, <span class="ui">E-mail</span>, <span class="ui">Strona domowa</span></li>
	</ul>
	
	<p>Naciśnij przycisk <span class="but">OK</span>. Brawo! Już jesteś zarejestrowany w katalogu.</p>
	
 
	<h3 id="search">Szukanie</h3>
	<img src="pic/jkatalog/jkatalog4.png" alt="" class="right" />
	<p>Główne okno -> <span class="tool">Jabber</span> -> <span class="menu def">Usługi</span>. Wybieramy pozycję <span class="list">Polski Katalog Użytkowników Jabbera</span>. Prawy klik myszy otwiera menu kontekstowe. Tym razem wybieramy pozycję <span class="menu">Szukaj</span>. W odpowiednich miejscach wpisujemy interesujące nas dane i wciskamy <span class="but">OK</span>.</p>
	
	<p>Możemy także sprecyzować sposób wyszukiwania.</p>
	<ul>
		<li><span class="ui">szybciej / mniej dokładnie</span> - dopasowuje pola tylko do początku (<span class="input">a</span> znajdzie <span class="input">Adam</span>, <span class="input">Arek</span>).</li>
		<li><span class="ui">wolniej / bardziej dokładnie</span> - dopasowuje zapytanie w całym polu (<span class="input">a</span> znajdzie <span class="input">Adam</span>, <span class="input">Arek</span> ale też <span class="input">Marta</span>, <span class="input">Sebastian</span>.)</li>
	</ul>
	
	<h4>Wyniki</h4>
	<p>Po chwili wyświetli się tabelka z ludźmi, do których pasowały nasze kryteria.</p>
	<img src="pic/jkatalog/jkatalog4b.png" alt="" />

	<h3 id="browsing">Przeglądanie</h3>
	<img src="pic/jkatalog/jkatalog5.png" alt="" class="right" />
	<p>Jeśli rozwiniemy pozycję <span class="list">Polski Katalog Użytkowników Jabbera</span>, klikając w krzyżyk po jej lewej stronie, uzyskamy wglad w kategoriw wyszukiwania.</p>
	
	<p>Wybieramy interesujacą nas kategorię, rozwijamy ją. Widzimy skatalogowane alfabetycznie osoby zarejestrowane. Nic prostszego jak znaleść osobe nas interesujacą. Po kliknięciu w dany węzeł oznaczony niebieską ikoną, musimy poczekać (<code>Zapytanie zostało wysłane, czekam na odpowiedź.</code>). Po wybraniu jej po prawej stronie pojawi nam się <acronym lang="en-US" title="Jabber Identifier">JID</acronym> osoby, a z menu kontekstowego (prawy przycisk myszy) możemy wybrać <span class="menu">Dodaj do listy</span>.</p>

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