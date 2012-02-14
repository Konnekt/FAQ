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
  <h2>Wtyczki</h2>
  <h5>czyli instalacja rozszerzeń</h5>
  
  <ul class="index">
    <li><a href="#step1">Krok 1</a></li>
	<li><a href="#step2">Krok 2</a></li>
	<li><a href="#step3">Krok 3</a></li>
	<li><a href="#step4">Krok 4</a></li>
	<li><a href="#step5">Krok 5</a></li>
	<li><a href="#step6">Krok 6</a></li>
	<li><a href="#step7">Krok 7</a></li>
	<li><a href="#step8">Krok 8</a></li>
	<li><a href="#step9">Krok 9</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 18:52 2005-09-23</h6>
  
  <p>Wtyczki (plug-iny) są rozszerzeniami powiększającymi możliwości Konnekt'a. Głównie dzięki nim zdobył taką popularność. W tym artykule pokażemy w jaki sposób zainstalować wtyczkę. Wykorzystamy do pokazu wtyczkę <a href="plug_kdodatki.php">kDodatki</a>, lecz analogicznie postępując możecie zainstalować każdą wtyczkę dla Konnekt'a.</p>

  <h3 id="step1">Krok 1</h3>
  <img src="pic/plugins/screen_b2.png" alt="" class="left" />
  <p>Skorzystaj ze strony <a href="http://kplugins.net">kPlugins.net</a> - są tam wszystkie wtyczki dla Konnekt'a w przystępnej formie, niektóre ze źródłami kodu. Listę wtyczek znajdziesz w kategorii <span class="menu">Download</span>, potem wtylko kliknij wybraną, i wybierz podświetlony na żółto plik, aby ściągnąć go na dysk.</p>

  <h3 id="step2">Krok 2</h3>
  <img src="pic/plugins/screen_c.png" alt="" class="left" />
  <p>Zapisz pliki do <a href="sql_folders.html#plugins">katalogu z wtyczkami</a> - to tam znajdziesz wszystkie plugin'y do Konnekt'a. Otwórz ten katalog, na przykład przez <span class="menu">Start</span> -&gt; <span class="menu">Uruchom</span>.</p>

  <h3 id="step3">Krok 3</h3>
  <img src="pic/plugins/screen_d.png" alt="" class="left" />
  <p>W katalogu kliknij na spakowany plik wtyczki i rozpakuj go (prawie zawsze potrzeba do tego <a href="http://www.rarlab.com/download.htm" class="ex">WinRAR</a>'a - jest także wersja polska). My wybraliśmy superszybką opcję wypakowania pliku od razu do katalogu, ale jeśli nie masz takiej opcji, to z pewnością wiesz jak rozpakować plik <span class="file">.rar</span>. :)</p>

  <h3 id="step4">Krok 4</h3>
  <img src="pic/plugins/screen_e.png" alt="" class="left" />
  <p>W katalogu musisz mieć plik wtyczki. Ma on rozszerzenie <span class="file">.dll</span> - sprawdź, czy na pewno tam się znajduje.</p>

  <h3 id="step5">Krok 5</h3>
  <p>Jeśli wasz Konnekt nie był do tego czasu uruchomiony, uruchomcie go i przejdźcie do <a href="#step7">Kroku 7</a>. </p>

  <h3 id="step6">Krok 6</h3>
  <img src="pic/plugins/screen_f2.png" alt="" class="left" />
  <p>W otwartym Konnekcie kliknijcie na <span class="tool">Ustawienia</span>, potem na <span class="menu">Wtyczki</span>.</p>

  <h3 id="step7">Krok 7</h3>
  <img src="pic/plugins/screen_f1.png" alt="" class="left" />
  <p>W oknie wyboru wtyczek poszukajcie waszej nowo wgranej wtyczki, będzie ona oznaczona ikonką z gwiazdką. Zaznaczcie ją klikając w polu po lewej od nazwy.</p>

  <h3 id="step8">Krok 8</h3>
  <img src="pic/plugins/screen_f3.png" alt="" class="left" />
  <p>Gdy korzystaliście z <a href="#step6">Kroku 6</a>, trzeba będzie jeszcze zrestartować program, gdy ukaże się monit. Zróbcie to i gotowe!</p>

  <h3 id="step9">Krok 9</h3>
  <img src="pic/plugins/screen_g.png" alt="" class="left" />
  <p>Aby sprawdzić, czy dana wtyczka działa, możecie przejść do <span class="menu">Ustawień</span> i sprawdzić czy na liście po lewej, pod kategorią <span class="list">Wtyczki</span> widnieje nazwa wtyczki. Lecz przypominamy, że nie wszystkie wtyczki tam się lokują, więc najlepiej sprawdzić czy działa opcja, której potrzebowaliśmy od danego rozszerzenia programu.</p>
 
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