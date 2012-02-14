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
  <h2>kStyle</h2>
  <h5>czyli zmiana ikonek i stylów konnekta</h5>
  
  <ul class="index">
    <li><a href="#icons">Zmiana ikon</a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 14:02 07.06.2005</h6>
  
  <p>Wtyczka pozwala na zmiane ikonek sieci. Możemy tez przy jej uzyciu zapisać wygląd naszego
komunikatora tak by nie zagubił nam się przy okazji reinstalacji konnekta czy tez zmianach w
wyglądzie komunikatora.</p>
  
	<h3 id="icons">Zmiana ikon</h3>
	
	<h4 id="ch_step1">Krok 1</h4>

	<img src="pic/plug_kstyle/krok1.png" alt="" class="left" />
	<p>Przejdź do <span class="tool">Ustawienia</span> -> <span class="menu">Ustawienia</span>, rozwiń <span class="list">Interfejs</span>, następnie wybierz <span class="list">Wygląd</span></p>

	<h4 id="ch_step2">Krok 2</h4>
	<img src="pic/plug_kstyle/krok2.png" alt="" class="left" />
	<p>Najpierw skupmy sie na ikonkach. by zmienić ich wygląd najpierw musimy pobrać jakiś zestaw. Domyślnie konnekt posiada kilka zestawów lecz można tez wejśc na strone konnekta i pobrać pasujacy nam zestaw. Przycisk <span class="but">Katalog lokalny</span> przeniesie nas do folderu <span class="folder"><a href="sql_folders.php">%konnekt%</a>/themes/</span> , natomiast <span class="but">Schematy do ściagniecia</span> zabierze nas na stronę Konnekta z odpowiednimi schematami.</p>
	
	<h4 id="ch_step3">Krok 3</h4>
	<img src="pic/plug_kstyle/krok3.png" alt="" class="left" />
	<p>Tak standardowo wyglada nasza lista. Wybraliśmy już interesujacy nas zestaw wiec przystępujemy do dzieła. Możemy zmienić wyglad naszego komunikatora kilka sposobów:</p>
	
	<h4 id="first">Sposób pierwszy</h4>
	<img src="pic/plug_kstyle/krok3_a.png" alt="" class="left" />
	<p><span class="ui">Wczytaj schemat</span> pozwala na wczytanie wraz z ikonkami także <a href="roster_color.php">kolorów i czcionki listy kontaktów</a>.</p>
	
	<p>Obok listy ze stylami mamy też dwa przyciski:</p>
		
	<ul>
		<li><img src="pic/plug_kstyle/krok3_info.png" alt="" /> - wyświetla opis schematu.</li>
		<li><img src="pic/plug_kstyle/krok3_zas.png" alt="" /> - wprowadza wybrany zestaw.</li>
	</ul>
	
	<h4 id="second">Sposób drugi</h4>
	
	<img src="pic/plug_kstyle/krok3_b.png" alt="" class="left" />
	<p>Gdy jednak mamy juz naszą liste kontaktów odpowiednio ustawioną i chcemy zminić tylko ikonki wybieramy opcje <span class="ui">Schemat ikon</span>. Z listy wybieramy interesujacy nas zestaw i zatwierdzamy
go poprzez przycisk <span class="but">Zastosuj</span></p>

	<h4 id="screens">Zrzuty:</h4>
	<img src="pic/plug_kstyle/krok3_c.png" alt="" class="left"/><img src="pic/plug_kstyle/krok3_d.png" alt="" class="left"/><img src="pic/plug_kstyle/krok3_e.png" alt="" class="left"/>
	
	
	<h3 id="save">Zapisywanie schematu</h3>
	<p>Ustaliwszy sobie styl wizualny zapewnie chcecie sobie go zapisać.</p>
	
	<h4 id="sa_step1">Krok 1</h4>
	<p>Można to zrobić na 2 sposoby.</p>
	<ul>
		<li><a class="todo" href="plug_expimp.php">exPIMP</a> - wtedy eksportujemy <strong>wszystkie</strong> ustawienia konnekta</li>
		<li>kStyle - zapisujemy tylko wyglad naszego Konnekta (nie zapisywane są ikonki)</li>
	</ul>

	<img src="pic/plug_kstyle/krok1_v2.png" alt="" class="right"/>
	<p>Zabierzmy się, z wiadomych powodów, za kStyle. By zapisać nasz schemat po prostu klikamy na przycisk <span class="but">Zapisz aktualne czcionki i kolory jako schemat</span>.</p>
	
	<h4 id="sa_step2">Krok 2</h4>
	<img src="pic/plug_kstyle/krok2_v2.png" alt="" class="left"/>
	<p>Wybieramy nazwe dla naszego stylu i zapisujemy.</p>

	<h4 id="sa_step3">Krok 3</h4>
	<img src="pic/plug_kstyle/krok3_v2.png" alt="" class="right"/>
	<p>By wybrać zapisany styl poprostu wybieramy go w <span class="ui">Wczytaj schemat</span> i wczytujemy zapisany ten schemat.</p>
  
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
