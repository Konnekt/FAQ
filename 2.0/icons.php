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
  <h2>Ikony informacyjne</h2>
  <h5>koło ikon statusu - co Konnekt chce nam powiedzieć </h5>
  
  <ul class="index">
    <li><a href="#aktywnosc">Aktywność kontaktu</a></li>
	<li><a href="#ukrywanie">Ukrywanie statusu</a></li>
	<li><a href="#autoryzowany">Autoryzacja jednostronna</a></li>
	<li><a href="#nieautoryzowany">Brak autoryzacji</a></li>
	<li><a href="#nienaliscie">Tymczasowo na liście</a></li>
	<li><a href="#ignorowanie">Ignorowanie</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 09:50 2005-04-16</h6>
  
  <p>Wielokrotnie na liście kontaktów, którą można też nazywać rosterem, widzieliśmy różne dziwne, wydawałoby się, symbole koło ikon sieci kontaktu. Ten artykuł ma za zadanie wyjaśnić ich znaczenie, bo nie są tam tak po prostu - informują nas o różnych stanach kontaktu.</p>
  
  <h3 id="aktywnosc">Aktywność kontaktu</h3>
  <img src="pic/icons/screen_a.png" alt="" class="left" />
  <p>Znak zapytania na ikonce kontaktu - ile to razy zadawaliśmy sobie pytanie co to znaczy. Ten pytajnik to ikonka aktywności, która oznacza że kontakt był ostatnio (20 min) aktywny (wysłał nam wiadomość, zmienił status lub opis). Kontakty które są aktywne przy <a href="filter.php">filtrowaniu</a> zachowują się jak dostępne. Ta ikonka natomiast nie oznacza że kontakt jest niewidoczny, co wiele osób myli.</p>
 
  <h3 id="ukrywanie">Ukrywanie statusu</h3>
  <img src="pic/icons/screen_b.png" alt="" class="left" />
  <p>Pomarańczowy trójkąt skierowany wewnątrz ikonki kontaktu. Oznacza on, że ukrywamy nasz status w sieci Gadu-Gadu przed danym kontaktem. Należy mieć włączone pokazywanie statusu tylko dla znajomych, jeśli nie masz, Konnekt zapyta Cię o to okienkiem dialogowym. Ustawia się to poprzez wybór z menu (dostępnego pod prawym klawiszem) opcji <span class="menu opt">Ukryj status przed nim</span>.</p>

  <h3 id="autoryzowany">Autoryzacja jednostronna</h3>
  <img src="pic/icons/screen_c.png" alt="" class="left" />
  <p>Pomarańczowy trójkąt skierowany na zewnątrz ikonki kontaktu. Oznacza on, że wysłyłamy komuś swój status - <a href="auth.php">autoryzowaliśmy</a> go.</p>

  <h3 id="nieautoryzowany">Brak autoryzacji</h3>
  <img src="pic/icons/screen_d.png" alt="" class="left" />
  <p>Wykrzynik na tle żółtego trójkąta. Oznacza, że użytkownik nie <a href="auth.php">autoryzował</a> was i nie może pobierać waszego statusu ani wy nie widzicie jego.</p>

  <h3 id="nienaliscie">Tymczasowo na liście</h3>
  <img src="pic/icons/screen_e.png" alt="" class="left" />
  <img src="pic/icons/screen_f.png" alt="" class="right" />
  <p>Wykrzyknik na dle niebieskiego kółka. Oznacza on, że kontakt jest na liście tymczasowo, po zamknięciu programu zostanie usunięty. Za każdym razem, gdy ktoś do Ciebie pisze, jego identyfikator jest dodawany jako kontakt na rosterze. Możesz odznaczyć odpowiednią opcję w <span class="menu">Więcej</span> -&gt; <span class="ui">Dane osobowe</span> danego kontaktu, aby nie zniknął on po zakończeniu pracy z Konnektem.</p>
  
  <p>Można także kliknąć prawym na kontakt na rosterze i wybrać <span class="menu">Dodaj do listy</span>. Kontakty z tą ikonką są wyświetlane na dole listy.</p>

  <h3 id="ignorowanie">Ignorowanie</h3>
  <img src="pic/icons/screen_g.png" alt="" class="left" />
  <p>Czerwone kółko a w nim biały krzyżyk. Oznacza on, że kontakt GG jest ignorowany przez Ciebie. Kliknij prawym i odznacz opcję <span class="menu opt">Ignoruj</span>, aby wyłączyć. Konnekt w tej kwesti jest o wiele lepszy od Gadu-Gadu, który to wyrzuca kontakt z listy, nie dając Ci możliwości odwrócenia tego stanu.</p>
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
