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
  <h2>Wygląd listy kontaktów</h2>
  <h5>Jak z smutnego szarego okienka zrobić coś ładniejszego</h5>
  
  <ul class="index">
    <li><a href="#start">Start</a></li>
	<li><a href="#config">Konfiguracja</a></li>
	<li><a href="#background">Kolor tła</a></li>
	<li><a href="#header">Nagłówek grup</a></li>
	<li><a href="#infos">Ikony informacyjne</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: </h6>
  
  <p>Osoby instalujące Konnekt'a po raz pierwszy bardzo często skarżą się na prostotę i ascetyczność okienka, właśnie ze względu na nieinteresującą listę kontaktów. W tym artykule pokażemy w jaki sposób bardzo prosto zmienić wygląd głównej częsci programu od strony wizualnej.</p>
  
  <h3 id="start">Start</h3>
  <img src="pic/roster_colors/screen_a.png" alt="" class="left"/>
  <p>Kliknij w <span class="tool">Ustawienia</span>, wybierz <span class="menu">Ustawienia</span>, rozwiń <span class="list">Interfejs</span>, następnie wybierz <span class="list">Wygląd</span>.</p>

  <h3 id="config">Konfiguracja</h3>
  <img src="pic/roster_colors/screen_b.png" alt="" class="left"/>
  <p>Zobaczysz tam ustawienia kolorów teł i napisów. Nas na razie interesuje dolna część - <span class="ui">Lista kontaktów</span>. Masz do wyboru:</p>
  
  <ul>
	<li><span class="ui">Kontakt</span> - ogólnie mówiąc ustawienia dla tła listy kontaktów. Wyświetlanie kontaktu na liście (tyczy się to też <a class="todo" href="agents.php">agentów Jabbera</a>, <a href="plug_faworki.php">faworKów</a> czy tła pod nagłówkami grup). </li>
	<li><span class="ui">Zaznaczony</span> - da się wybrać tylko kolor, styl czcionki i tło. Polecam kontrastowe kolory, a z doświadczenia wiem, że czarne tło i białe pogrubione literki pasują w prawie każdym zestawie kolorystycznym.</li>
	<li><span class="ui">Opis</span> - jeśli włączyliście wyświetlanie <a href="opis.php">statusu opisowego</a> to tutaj najlepiej ustawić tło na takie samo jak pod <span class="option">Kontakt</span>. Czcionka najlepiej SmallFonts, 7px i lekko przyciemniona.</li>
	<li><span class="ui">Tip</span> - <a class="todo" href="tiptool.php">Etykietka</a> wyświetlająca się nad kontaktem.</li>
  </ul>

  <h3 id="background">Kolor tła</h3>
  <img src="pic/roster_colors/screen_c.png" alt="" class="left"/>
  <p>Kolory ustawiamy przez standardowe windowsowe okienko wyboru - mała zmiana to tylko pole z wartością hex danego koloru. Łatwo w ten sposób porównać, czy wybrane kolory są takie same jak zamierzone.</p>

  <h4>Zrzuty</h4>
  <img src="pic/roster_colors/screen_d.png" alt="" /><img src="pic/roster_colors/screen_e.png" alt="" />

  <h3 id="head">Nagłówek grup</h3>
  <img src="pic/roster_colors/screen_f.png" alt="" class="left" />
  <img src="pic/roster_colors/screen_g.png" alt="" class="right" />
  <p>Możesz też wybrać kolor nagłówka <a href="plug_sprzataczk.php">grup</a>, jeśli masz je włączone. Wejdź do <span class="menu">Ustawień</span> -> <span class="config">list</span> -> <span class="list">Lista kontaktów</span>, aż w końcu do <span class="config">list</span>. Tam w opcji <span class="ui">Ustawienia</span> możesz wybrać żądany kolor.</p>

  <h3 id="infos">Ikony informacyjne</h3>
  <p>Jeśli chcesz, możesz także dostosować pozycję ikonek symbolizujących czy kontakt ma status opisowy, czy istnieje informacja o emailu czy telefonie. Wejdź w <span class="menu">Ustawienia</span> -> <span class="list">Interfejs</span> -> <span class="list">Lista kontaktów</span> -> <span class="list">Ikonki</span>. Prawie wszystko masz tam opisane, łącznie z obrazkami. Pobaw się opcjami <span class="ui">Wyświetlanie po prawej stronie</span> oraz <span class="ui">Rozmieszczenie poszczególnych ikonek</span>.</p>

  <h4>Zrzuty</h4>
  <img src="pic/roster_colors/screen_h.png" alt="" /><img src="pic/roster_colors/screen_i.png" alt="" /><img src="pic/roster_colors/screen_j.png" alt="" />

  <p>Więcej na temat dostosywania wyglądu listy kontaktów:</p>
  
  <ul>
	<li><a href="roster.php">Lista kontaktów</a> - ustawienia</li>
	<li><a href="plug_sprzataczk.php">Grupowanie</a></li>
	<li><a href="opis.php">Statusy opisowe</a></li>
	<li><a href="plug_kstyle.php">Ikony</a></li>
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