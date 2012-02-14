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
  <h2>Import kontaktów z serwera</h2>
  <h5>czyli jak odzyskać swoją listę + eksport tejże</h5>
  
  <ul class="index">
    <li><a href="#stexport">Wyeksportuj listę</a></li>
	<li><a href="#start">Start</a></li>
	<li><a href="#import">Pobieranie listy</a></li>
	<li><a href="#added">Kontakty dodane</a></li>
	<li><a href="#strange">Dziwne kontakty</a></li>
	<li><a href="#export">Eksportowanie listy</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 16:00 2005-06-15</h6>
  
  <p>Czasami ktoś kto przesiądzie się z Gadu-Gadu na Konnekt'a jest lekko zakłopotany. W tym poradniku pokażemy w jaki sposób zdobyć swoje stare kontakty w sposób automatyczny, aby nie przepisywać bezmyślnie dziesiątek lub setek numerów.</p>
  
  <h3 id="stexport">Wyeksportuj listę</h3>
  <img src="pic/gg_rimport/screen_a.jpg" alt="" class="left" />
  <p>Jeśli jeszcze nie zrobiliście tego, to eksportujcie swoje kontakty z Gadu-Gadu. Jeśli pracujecie na jedym komputerze i obydwa programy są na nim zainstalowane, proponuję eksportować listę do pliku tekstowego. Oczywiście w przypadku innego komputera najłatwiej eksportować listę do serwera Gadu-Gadu.</p>
  
  <h3 id="start">Start</h3>
  <img src="pic/gg_rimport/screen_b.png" alt="" class="left" />
  <p>Połączcie się z Gadu-Gadu wybierając inny status niż Niedostępny. W oknie Konnekt'a kliknijcie na ikonę symbolizującą <span class="tool">Kontakty</span> a następnie z menu wybierzcie <span class="menu">GG</span>. W podmenu należy kliknąć na <span class="menu">Importuj listę</span>, jak to zostało przedstawione na obrazku.</p>
  
  <h3 id="import">Pobieranie listy</h3>
  <img src="pic/gg_rimport/screen_c.png" alt="" class="left"/><p>Program zapyta Was skąd pobrać listę. Na <a href="#stexport">początku</a> decydowaliście gdzie wysłać plik. Wybierzcie <span class="but">Z pliku</span> a potem odnajdźcie na dysku odpowiedni plik. W przypadku pobierania z serwera należy poczekać na połączenie i pobranie kontaktów.</p>
  
  <h3 id="added">Kontakty dodane</h3>
  <img src="pic/gg_rimport/screen_d.png" alt="" class="left" />
  <p>Podczas wczytywania kontaktów, czy to z pliku, czy z serwera Konnekt może Was zapytać czy stworzyć <a href="groups.php">grupę</a>, jeśli dany kontakt który jest aktualnie dodawany do listy należał wcześniej do danej grupy. Okienko wygląda podobnie jak z lewej, wyiksowaliśmy tylko numer. Kliknięcie na <span class="but">Tak</span> oczywiście dodaje automatycznie daną grupę. Zaprzeczenie powoduje, że kontakt dostaje się do "grupy" głównej <span class="tab">Wszyscy (*)</span>.</p>
  
  <h3 id="strange">Dziwne kontakty</h3>
  <img src="pic/gg_rimport/screen_e.png" alt="" class="left" />
  <p>Po pomyślnym wczytaniu kontaktów dostaniecie komunikat, że operacja się powiodła. <span class="ui">Kontakty zostały pobrane.</span> (serwer) albo <span class="ui">Kontakty zostały wczytane.</span> (plik). Po ściągnięciu kontaktów zauważysz może, że na liście masz parę numerów bez nick'a czy innych danych. Zazwyczaj są to kontakty ignorowane, zbanowane inaczej mówiąc. Możesz znowu je zbanować i usunąć z programu, wciskając <kbd>Del</kbd> lub wybierając pozycję <span class="menu">Usuń</span> z menu.</p>
  
  <h3 id="export">Eksportowanie listy</h3>
  <img src="pic/gg_rimport/screen_f.png" alt="" class="left" />
  <p>Skoro już umiecie importować własną listę kontaktów to pozostaje pokazanie jak esportować. Z tego samego menu (<span class="tool">Kontakty</span> -> <span class="menu">GG</span>) wybierzcie tym razem <span class="menu">Exportuj listę</span>.</p>
  
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
