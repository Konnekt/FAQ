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
  <h2>Filtr wiadomości</h2>
  <h5>blokada wiadomości spoza listy</h5>
  
  <ul class="index">
  <li><a href="#start">Start</a></li>
	<li><a href="#config">Ustawienia</a></li>
	<li><a href="#answer">Odpowiedź</a></li>
	<li><a href="#pass">Hasło</a></li>
	<li><a href="#history">Historia</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 14:30 24.06.2005</h6>
  
  <p>Konnekt udostępnia możliwość blokowania wiadomości od osób, które nie znamy. Przydatne jest to, gdy nasz numer Gadu-Gadu bądź identyfikator Jabbera jest w miejscu publicznym (na forum na przykład). Lecz co stanowi o przewadze Konnekta nad innymi komunikatorami jest możliwość porozumienia się z nami, gdy osoba zna hasło. Więcej o tym w dalszej części artykułu.</p>
  

  <h3 id="start">Start</h3>
	<img src="pic/nonroster/screen_a.png" alt="" class="left" />
  <p>Otwórz menu <span class="tool">Ustawienia</span>, wbierz pozycję <span class="menu">Ustawienia</span>. W oknie konfiguracji z listy po lewej rozwiń <span class="list">Interfejs</span>, <span class="list">Wiadomości</span> a potem kliknij w <span class="list">Spoza listy</span>.</p>
	
	<h3 id="config">Ustawienia</h3>
	<img src="pic/nonroster/screen_b.png" alt="" class="left" />
  <p>Główną opcją jest <span class="chx on">Przyjmuj wiadomości od osób spoza listy</span>. Jest ona zaznaczona domyślnie, więc Konnekt zezwala na odbieranie wiadomości od nieznajomych. Odznaczmy ją.</p>
	
	<h3 id="answer">Odpowiedź</h3>
	<img src="pic/nonroster/screen_c.png" alt="" class="left" />
  <p>W polu <span class="ui">Na nieprzyjęte wiadomości odpowiedz:</span> możemy wpisać tekst, który otrzyma nieznajoma osoba (przez nieznajoma mamy na myśli osobę, której nie ma na naszej liście kontaktów) po zwróceniu się do nas. Możemy zostawić to pole puste, lecz warto dać wskazówkę do hasła, które jest wytłumaczone poniżej; bądź o inną drogę kontaktu.</p>
	<p>Dodam jeszcze, że najlepiej wpisać krótki, przejrzysty tekst. Zwykle osoba pisząca nie ma pojęcia dlaczego dostaje taką odpowiedź i powinna od razu przeczytać, że to odpowiedź automatyczna.</p>
	
	<h3 id="pass">Hasło</h3>
	<img src="pic/nonroster/screen_d.png" alt="" class="left" />
  <p>Pole <span class="ui">Dodaj kontakt do listy jeśli przyśle 'hasło':</span> oczywiście wpisujemy swoje hasło. Hasłem jest wiadomość, która zostanie wysłana do nas przez nieznajomą osobę. Do czego może być to przydatne? Jeśli właśnie chcemy, aby ktoś się z nami skontaktował, jeśli naprawdę potrzebuje. Uwaga. Wielkość liter jest ważna. Natomiast jeśli pozostawimy pole pustym, nie będzie możliwa komunikacja z nami.</p>
	
	<h3 id="history">Historia</h3>
	<img src="pic/nonroster/screen_e.png" alt="" class="left" />
  <p>Kliknij w menu <span class="tool">Kontakty</span> pozycję <span class="menu">Historia rozmów</span>, aby otworzyć <a href="history.php">archiwum</a>.</p>
	
	<h4 id="nonroster">Spoza listy</h4>
	<img src="pic/nonroster/screen_f.png" alt="" class="left" />
  <p>Z listy po lewej rozwiń pozycję <span class="list">Usunięte</span>. Przejdź do <span class="list">spoza listy</span>. Znajdziesz tam wiadomości wysłane do Ciebie, ale odrzucone przez filtr, który ustawiłeś wyżej. Warto czasem przeglądać tamte wiadomości, aby zorientować się, czy ktoś się bezskutecznie dobijał.</p>
	
	
	
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