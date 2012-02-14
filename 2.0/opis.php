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
  <h2>Opisy na liście kontaktów</h2>
  <h5>jak uzykać podobny efekt na liście kontaktów jak dawniej</h5>
  
  <ul class="index">
    <li><a href="#start">Start</a></li>
	<li><a href="#config">Konfiguracja</a></li>
	<li><a href="#options">Opcje opisów</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 18:41 2005-05-21</h6>
  
  <p>Poradnik ten pokaże w jaki sposób uzyskać statusy opisowe widoczne w oknie głównym, na liście kontaktów. Istnieją jednak pewne ograniczenia i różnice co do obsługi opisów z innymi klientami, co mamy zamiar wyjaśnić.</p>
  
  <h3 id="start">Start</h3>
  <img src="pic/opis/screen_a.png" alt="" class="left" />
  <p>Przejdź do <span class="tool">Ustawienia</span> -> <span class="menu">Ustawienia</span>, rozwiń <span class="list">Interfejs</span>, następnie wybierz <span class="list">Lista kontaktów</span>.</p>
  
  <h3 id="config">Konfiguracja</h3>
  <img src="pic/opis/screen_b.png" alt="" class="left" />
  <p>Po prawej stronie będzie dosyć dużo opcji. Lecz nie przejmuj się i skup na grupie <span class="ui">Opis kontaktu na liście</span>.</p>
  
  <h3 id="options">Opcje opisów</h3>
  <p><span class="config">Opis kontaktu na liście</span>.</p>
  
  <h4><span class="radon">Wyłączone</span>, <span class="radon">Obok nazwy (1 linijka)</span></h4>
  <img src="pic/opis/screen_c.png" alt="" class="left" /><img src="pic/opis/screen_d.png" alt="" class="left" />
  
  <h4><span class="radon">Pod nazwą</span>, <span class="radon">+ zawijanie wierszy</span></h4>
  <img src="pic/opis/screen_e.png" alt="" class="left" /><img src="pic/opis/screen_f.png" alt="" class="left" />
  
  <h4>Wymuszene zawijania wierszy:</h4>
  <p>Zawijanie wierszy działa tylko w przypadku, kiedy w <span class="menu">Ustawieniach</span>, w <span class="list">Interfejs</span>, <span class="list">Formatowanie pól</span> ustawimy w polu <span class="ui">Opis kontaktu na liście</span> takie coś:</p>
  
  <pre style="text-align: left"><code>{info}
(enter)
(enter)
...</code></pre>
  
  <p>Gdzie <code>(enter)</code> to po prostu naciśnięcie klawisza <kbd>Enter</kbd>. W ten sposób tworzymy miejsce na wyświetlanie zawiniętego opisu, lecz miejsce powiększa nam się dla każdego kontaktu na liście.</p>
  
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
