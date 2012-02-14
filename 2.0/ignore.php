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
  <h2>Ignorowanie</h2>
  <h5>Podstawowe ignorowanie kontaktów</h5>
  
  <ul class="index">
    <li><a href="#start">Ignoruj kontakt</a></li>
		<li><a href="#list">Lista ignorowanych</a></li>
		<li><a href="#how">Jak to działa</a></li>
  </ul>

  <h6>Data ostatniej modyfikacji: 13:51 2005-09-24</h6>
  
  <p>Czasem mamy dość jakiejś osoby i chcemy aby przestała pisać. Wielokrotnie nieznajomi zaczepiają i chcą „poklikać”, a nam się to nie uśmiecha. Możemy <a href="nonroster.php">uniknąć</a> w ogóle rozmów z nieznajomymi, ale nie zawsze jest to odpowiednie wyjście - dlatego w Konnekcie jest także opcja ignorowania kontaktu.</p>
  
  <h3 id="start">Ignoruj kontakt</h3>
  <img src="pic/ignore/screen_a.png" alt="" class="left" />
  <p>Kliknij prawym przyciskiem myszy na kontakt, aby wyświetlić menu kontekstowe. Wybierz pozycję <span class="menu">Ignoruj</span>.</p>
	
	<img src="pic/ignore/screen_b.png" alt="" class="right" />
	<p>Ikona kontaktu zmieni się lekko, a dokładnie zostanie dodana mniejsza <a href="icons.php">ikonka</a> z lewej strony. Kontakt nie zostanie z listy wyrzucony, natomiast spadnie na koniec danej grupy. Jeśli nie masz <a href="plug_sprzataczk.php">grup</a>, to spadnie na koniec listy kontaktów.</p>
	
	<h3 id="list">Lista ignorowanych</h3>
	
	<img src="pic/ignore/screen_c.png" alt="" class="left" />
	<p>Jeśli nie pamiętasz kogo ignorujesz, nie możesz znaleźć kontaktu, bądź chcesz dodać z góry kontakt do ignorowania, możesz skorzystać z listy ignorowanych kontaktów. Kliknij na menu główne <span class="tool">Kontakty</span>, a potem na <span class="menu">Lista ignorowanych</span>.</p>
	
	<img src="pic/ignore/screen_d.png" alt="" class="right" />
	<p>W nowym okienku możesz sprawdzić kontakty ignorowane dla każdej z dostępnych sieci, usunąć je z listy bądź dodać nowe, za pomocą pola tekstowego w prawym rogu i przycisku <span class="but">Dodaj</span>.</p>
	
	<h3 id="how">Jak to działa</h3>
	
	<img src="pic/ignore/screen_e.png" alt="" class="left" />
	<p>Jeśli Wasze kontakty są w sieci Gadu-Gadu, to po zignorowaniu Ciebie przez kogoś zobaczysz powiadomienie <a href="plug_knotify.php">kNotify</a> oraz odpowiednią ikonę na liście kontaktów. Jeśli Ty kogoś ignorujesz, będziesz widział zmiany statusu tej osoby, ale bez powiadomień kNotify. Osoba ignorowana nie będzie widzieć nic.</p>
	
	<img src="pic/ignore/screen_g.png" alt="" class="right" />
	<img src="pic/ignore/screen_f.png" alt="" class="left" />
	<p>Na innych sieciach ignorowanie działa tylko jak wyłumienie wiadomości. Kontakt ignorowany nie zorientuje się swojego stanu dopóki mu nie odpiszesz, ponieważ żadna ikona nie jest wyświetlana. Wiadomości wysyłane przez kontakty ignorowane są trzymane w <a href="history.php">historii rozmów</a> w katalogu <span class="list">ignorowani</span> w <span class="list">Usunięte</span>.</p>
	
	
	
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