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
  <h2>exPIMP</h2>
  <h5>eksport, import ustawień</h5>
  
  <ul class="index">
  <li><a href="#plugin">Wtyczka</a></li>
	<li><a href="#config">Ustawienia</a></li>
	<li><a href="#contacts">Kontakty</a></li>
	<li><a href="#selected">Kontakty zaznaczone</a></li>
	<li><a href="#files">Pliki .expimp</a></li>
	<li><a href="#import">Import</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 21:20 29.06.2005</h6>
  
  <p>Wtyczka exPIMP (eksport, import) umożliwia archwizowanie konfiguracji Konnekta i listy kontaktów i ich przenoszenie pomiędzy komputerami. Bywa przydatna, oszczędza mnóstwo pracy, choćby podczas reinstalacji programu.</p>
  

  <h3 id="plugin">Wtyczka</h3>
	<img src="pic/plug_expimp/screen_a.png" alt="" class="left" />
  <p>Używamy wtyczkę korzystając z pozycji <span class="menu">exPIMP</span> w menu <span class="tool">Ustawienia</span>.</p>
	
	<h3 id="config">Ustawienia</h3>
	<img src="pic/plug_expimp/screen_b.png" alt="" class="left" />
  <p>Pozycja <span class="menu">Exportuj ustawienia</span> wywołuje okienko zapisu pliku, o domyślnej nazwie <span class="file">konnekt_{nazwa profilu}_ustawienia.expimp</span>. Należy wybrać miejsce jego zapisu i voila. Dane wyeksportowane.</p>
	
	<p>W przypadku eksportowania ustawień do pliku nie są dodawane informacje o wyglądzie okien i listy kontaktów - to należy do obowiązków <a href="plug_kstyle.php">kStyle</a>.</p>
	
	<h3 id="contacts">Kontakty</h3>
	<img src="pic/plug_expimp/screen_c.png" alt="" class="left" />
  <p>Pozycja <span class="menu">Exportuj kontakty</span> zapisze do pliku o domyślnej nazwie <span class="file">konnekt_{nazwa profilu}_kontakty.expimp</span> wszystkie pozycje na liście kontaktów - kontakty sieci, <a href="plug_faworki.php">skróty</a>, <a href="plug_checky.php">skrypty</a> jak i zwyczajne wpisy z danymi osobistymi, a bez możliwości rozmowy. Wszystko. :-)</p>
	
	<p>Dla dociekliwych - utworzony plik jest plikiem XML, przez co może być użyty w innych aplikacjach.</p>
	
	<h3 id="selected">Kontakty zaznaczone</h3>
	<img src="pic/plug_expimp/screen_d.png" alt="" class="left" />
	<img src="pic/plug_expimp/screen_e.png" alt="" class="right" />
  <p>Zaznacz część swoich kontaktów klikając je z wciśniętym klawiszem <kbd>Ctrl</kbd>. Możesz teraz poprzez pozycję <span class="menu">Exportuj kontakty zaznaczone</span> zapisać tylko część swoich kontaktów.</p>
	
	<p>Jeśli chcesz zaznaczyć kontakty z paru <a href="groups.php">grup</a>, musisz wyłączyć opcję odpowiedzialną za ukrywanie ich z grupy głównej. W wybieraniu kontaktów mogą być pomocne <a href="filter.php">filtry</a>.</p>
	
	<h3 id="files">Pliki .expimp</h3>
	<img src="pic/plug_expimp/screen_f.png" alt="" class="left" />
  <p>Przykładowe pliki ustawień wyglądają w ten sposób. Mogą mieć inną nazwę oczywiście, ale muszą mieć rozszerzenie <span class="">.expimp</span>. Dzięki postaci wygodnych plików można je prosto nagrać na nośnik danych bądź umieścić w Internecie, aby skorzystać z nich gdzieś indziej.</p>
	
	<h3 id="import">Import</h3>
	<img src="pic/plug_expimp/screen_g.png" alt="" class="left" />
	<p>Możemy je teraz dwa razy kliknąć, jeśli mają ikonę Konnekta (co oznacza, że dany typ pliku jest skojarzony z programem Konnekt) lub wybrać pozycję <span class="menu">Importuj</span> z menu i wskazać odpowiedni plik. Po tej akcji program zapyta nas czy chcemy wczytać plik z danymi. Poda nam typ danych w pliku (kontakty, ustawienia) oraz datę wygenerowania.</p>
	
	<img src="pic/plug_expimp/screen_h.png" alt="" class="right" />
	<p>W przypadku importowania ustawień i kontaktów, tylko ustawienia zapisane w pliku zostaną podmienione. Więc jeśli dodaliśmy jakiś kontakt, a potem zechcieliśmy importować poprzednie dane, to nie zostanie on skasowany. Ustawienia podobnie - domyślne ustawienia nie zostaną skasowane.</p>
	
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