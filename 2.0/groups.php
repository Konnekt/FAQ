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
  <h2>Grupy kontaktów</h2>
  <h5>czyli w jaki sposób uporządkować swojego <span title="lista kontaktów">rostera</span></h5>
  
  <ul class="index">
    <li><a href="#start">Start</a></li>
	<li><a href="#manage">Zarządzanie grupami</a></li>
	<li><a href="#tabs">Zakładki w oknie</a></li>
	<li><a href="#config">Konfiguracja</a></li>
	<li><a href="#options">Opcje</a></li>
	<li><a href="#add">Przydzielanie kontaktów</a></li>
	<li><a href="#more">Dodatkowe opcje</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 08:39 2005-02-13</h6>
  
  <p>Konnekt, podobnie jak Gadu-Gadu umożliwia wyświetlanie zakładek w liście kontaktów, aby prościej było je przeglądać i nimi zarządzać. Czynności związane z grupami tutaj prostsze i bardziej zautomatyzowane niż w Gadu-Gadu, lecz mimo wszystko pokażemy od jakiej strony ugryźć to nietrudne zagadnienie w Konnekcie.</p>
  
  <h3 id="start">Start</h3>
  <img src="pic/groups/screen_a.png" alt="" class="left" />
  <p>Kliknij w oknie głównym na <span class="config">Kontakty</span>, potem, w rozwiniętym menu, na <span class="config">Grupy kontaktów</span>.</p>
  
  <h3 id="manage">Zarządzanie grupami</h3>
  <img src="pic/groups/screen_b.png" alt="" class="left" />
  <p>Twoim oczom ukaże się okienko edycji grup. Dodaj wszystkie potrzebne, gdy się pomylisz możesz <span class="option">edytować</span> nazwę lub ją <span class="option">usunąć</span>. Kliknij <span class="config">OK</span> gdy już skończysz.</p>
  
  <h3 id="tabs">Zakładki w oknie</h3>
  <img src="pic/groups/screen_c.png" alt="" class="left" />
  <p>Na górze listy kontaktów, w oknie głównym, w miarę jak dodajesz nowe grupy, przybywają zakładki. W następnym kroku pokażemy jak dostosować je do własnych upodobań.</p>
  
  <h3 id="config">Konfiguracja</h3>
  <img src="pic/groups/screen_d.png" alt="" class="left"/>
  <p>Wejdź do <span class="tool">Ustawienia</span> w oknie głównym -> <span class="menu">Ustawienia</span> i rozwiń pozycję <span class="list">Interfejs</span> a następnie <span class="list">Grupy</span> w drzewku po lewej.</p>
  
  <h3 id="options">Opcje</h3>
  <img src="pic/groups/screen_e.png" alt="" class="left"/>
  <img src="pic/groups/screen_f.png" alt="" class="right"/>
  <p>Po prawej stronie pokażą się opcje. Kliknij <span class="chx on">Zakładki w kilku linijkach</span>, jeśli masz ich wystarczająco dużo, że trzeba przewijać je w poziomie aby dostać się do tych dalszych. Dzięki temu ustawieniu uzyskasz efekt podobny jak na rysunku po prawej.</p>
  
  <h3 id="add">Przydzielanie kontaktów</h3>
  <img src="pic/groups/screen_g.png" alt="" class="left"/>
  <img src="pic/groups/screen_h.png" alt="" class="right"/>
  <p>Teraz możesz przydzielić kontakty do nowych zakładek. Zaznacz kontakt na liście (lub więcej, trzymając wciśnięty klawisz <kbd>Ctrl</kbd>) i przeciągnij metodą drag-and-drop na nową zakładkę. Możesz także poprzez wybranie opcji <span class="menu">Więcej</span> po kliknięciu prawym klawiszem na kontakt, następnie na <span class="list">Dane osobowe</span> i w polu <span class="ui">Wyświetl jako</span> wybrać z listy rozwijalnej, po prawej, odpowiednią zakładkę dla tego kontaktu.</p>
  
  <h3 id="more">Dodatkowe opcje</h3>
  <ul>
	<li>Aby zmienić nazwę zakładki <span class="tab">Wszyscy</span>, która domyślnie jest ustawiona na <span class="input">*</span>, wejdź do <span class="menu">Ustawień</span>. Odnajdź opcję <span class="ui">Zakładka główna</span> -> <span class="ui">Opis zakładki</span>.</li>
	<li>Aby ułatwić przeglądanie listy, możesz wyłączyć dublowanie kontaktów na zakładce głównej. Zaznacz <span class="chx on">Wyświetlaj TYLKO kontakty nie przydzielone do żadnej grupy</span>, aby pozostawić w zakładce <span class="tab">Wszyscy</span> tylko kontakty bez przypisanej wartości pola <span class="input">Grupa</span>.</li>
	<li>Niestety jak na obecną wersję Konnekt'a nie da się wyświetlić zakładek z boku listy. W przyszłości lista kontaktów, zakładki i grupy zostanie jednak znacznie ulepszona, jest więc na co czekać.</li>
  </ul>
  
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
