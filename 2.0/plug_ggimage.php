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
  <h2>GGImage</h2>
  <h5>wysyłanie obrazków przez Gadu-Gadu</h5>
  
  <ul class="index">
  <li><a href="#start">Start</a></li>
	<li><a href="#config">Ustawienia</a></li>
	<li><a href="#file">Wysyłanie obrazka</a></li>
	<li><a href="#prntscrn">Zrzut ekranu</a></li>
	<li><a href="#prntscrncut">Fragment zrzutu</a></li>
	<li><a href="#save">Zapisywanie obrazka</a></li>
	<li><a href="#clrscrn">Czyszczenie okna</a></li>
  </ul>
	
  <h6>Data ostatniej modyfikacji: 13:21 26.06.2005</h6>
  
  <p>Wtyczka ta umożliwia przesyłanie obrazków w sieci Gadu-Gadu, przez okienko rozmowy a także jako zwykły plik. Poniżej wytłumaczone są dodatkowe opcje, ponieważ właśnie one stanowią o oryginalności wtyczki.</p>
  
	<h3 id="start">Start</h3>
	<p>Jeśli nie posiadasz wtyczki w swojej paczce Konnekta, <a href="http://www.kplugins.net/downloads.ggimage.xml">ściągnij</a> ją z kPlugins.net bądź przez <a class="todo" href="kupdate.php">centralkę</a>. Potem <a href="plugins.php">zainstaluj</a>.</p>
	
  <h3 id="config">Ustawienia</h3>
	<img src="pic/plug_ggimage/screen_j.png" alt="" class="left" />
	<p>Poszczególne możliwości wtyczki i jej opcje będą tłumaczone razem z możliwościami ich konfiguracji. Aby wejść do konfiguracji wtyczki, kliknij w menu <span class="tool">Ustawienia</span>, wybierz pozycję <span class="menu def">Ustawienia</span>. W nowym oknie z listy po lewej rozwiń <span class="list">Użytkownik</span>, <span class="list">GG</span> i wybierz <span class="list">Obrazki</span>.</p>
	
	<h3 id="file">Wysyłanie obrazka</h3>
	<img src="pic/plug_ggimage/screen_a.png" alt="" class="left" />
  <p>W oknie rozmowy pojawił się dodatkowy przycisk - <span class="tool">Wyślij obrazek</span>. Kliknij go i wybierz pozycję <span class="menu">wybór pliku</span>.</p>
	
	<h4 id="choosefile">Plik</h4>
	<img src="pic/plug_ggimage/screen_b.png" alt="" class="left" />
  <p>Następnie w okienku wybierz plik, który chcesz wysłać przez wtyczkę. Standardowo pojawi się on w okienku rozmowy i zostanie pokazana informacja, że obrazek został wysłany poprawnie.</p>	
	
	<h4 id="fileconfig">Konfiguracja</h4>
	<img src="pic/plug_ggimage/screen_n.png" alt="" class="left" />
	<p>Zanim przejdziemy dalej, warto zatrzymać się na opcjach wysyłania obrazka. Jeśli osoba do której wysyłamy obrazek, ma zaznaczoną opcję <span class="chx on">Informację o odebraniu pliku pokazuj jako wiadomość</span> nie ujrzy obrazka w oknie rozmowy.
	
	<h4 id="result">Rezultat:</h4>
	<img src="pic/plug_ggimage/screen_o.png" alt="" class="right" />
	<p>Zamiast tego pokaże się tekst wiadomości informujący o odebraniu pliku, jego rozmiarze i miejscu gdzie został skopiowany.</p>
	
	<h4 id="dragdrop">Drag&amp;Drop</h4>
	<img src="pic/plug_ggimage/screen_u.png" alt="" class="left" />
	<p>Klikając w opcjach na <span class="chx on">Włącz Drag&amp;Drop w okienku rozmowy</span> można przeciągać pliki do wysłania od razu na okna rozmowy.</p>
	
	<h4 id="howitworks">Jak to działa:</h4>
	<img src="pic/plug_ggimage/screen_k.png" alt="" class="left" />
	<p>Teraz wystarczy tylko kliknąć plik i nie puszczając myszki przeciągnąć go na pole do wpisywania tekstu.</p>
	
	<h3 id="prntscrn">Zrzut ekranu</h3>
	<img src="pic/plug_ggimage/screen_c.png" alt="" class="left" />
  <p>Następnie z menu wybierz <span class="menu">zrzut ekranu</span>.</p>	
	
	<h4 id="prntscrnresult">Rezultat</h4>
	<img src="pic/plug_ggimage/screen_d.png" alt="" class="left" />
  <p>Zostanie wykonany zrzut ekranu (łącznie z otwartym oknem wiadomości) i wysłany przez wtyczkę.</p>	
	
	<h4 id="compression">Kompresja</h4>
	<img src="pic/plug_ggimage/screen_t.png" alt="" class="left" />
	<p>W ustawieniach możemy określić stopień kompresji wysyłanego obrazu. Im większa wartość na suwaku, tym plik ma lepszą jakość i więcej waży. Wartość <span class="input">75</span> jest standardowa i zwykle wystarcza do zdjęć, ale w przypadku przesyłania fragmentów interfejsu programów można nawet użyć <span class="input">50</span>.</p>	
	
	<p>Poniżej są dwa obrazki: pierwszy ma jakość <span class="input">75</span>, drugi <span class="input">20</span>.</p>
	
	<img src="pic/plug_ggimage/screen_l.jpg" alt="" /><img src="pic/plug_ggimage/screen_m.jpg" alt="" />
	
	<h3 id="prntscrncut">Fragment zrzutu</h3>
	<img src="pic/plug_ggimage/screen_e.png" alt="" class="left" />
  <p>Wybierz teraz <span class="menu">fragment zrzutu ekranu</span> z tego samego menu.</p>	
	
	<h4 id="selection">Zaznaczenie</h4>
	<img src="pic/plug_ggimage/screen_f.png" alt="" class="left" />
	<p>Następnie zaznacz fragment ekranu przy pomocy wskaźnika.</p>
	
	<h4 id="cutresult">Rezultat</h4>
	<img src="pic/plug_ggimage/screen_g.png" alt="" class="left" />
	<p>Obrazek zostanie wysłany i ponownie powinno pokazać się powiadomienie.</p>
	
	<h4 id="winprnt">Okno zrzutu</h4>
	<img src="pic/plug_ggimage/screen_q.png" alt="" class="left" />
	<img src="pic/plug_ggimage/screen_r.png" alt="" class="right" />
	<p>W ustawieniach możemy wybrać, czy chcemy aby okno zawierające zrzut ekranu, z którego wcinamy, było na pełnym ekranie lub nie. Wystarczy odznaczyć <span class="chx off">Okno wyboru fragmentu na pełnym ekranie</span>.</p>
	
	<h4 id="confim">Potwierdzenie</h4>
	<img src="pic/plug_ggimage/screen_s.png" alt="" class="right" />
	<p>Zaznaczenie <span class="chx on">Potwierdzaj prawidłowość zaznaczonego fragmentu</span> spowoduje pojawienie się okienka po wycięciu fragmentu. <span class="but">Tak</span> wysyła obrazek, <span class="but">Nie</span> pozwala jeszcze raz wybrać, <span class="but">Anuluj</span> wychodzi z trybu wybierania fragmentu.</p>
	
	<h3 id="save">Zapisywanie obrazka</h3>
	<img src="pic/plug_ggimage/screen_h.png" alt="" class="left" />
  <p>Jeśli chodzi o obrazek w oknie rozmowy, możemy go kliknąć prawym klawiszem i z menu wybrać <span class="menu">Zapisz obrazek</span>. Po wybraniu katalogu docelowego, plik zostanie zapisany.</p>	
	
	<h3 id="clrscrn">Czyszczenie okna</h3>
	<img src="pic/plug_ggimage/screen_i.png" alt="" class="left" />
	<p>Jeśli ktoś wysłał nam dość duży obrazek i psuje nam to okno rozmowy, możemy je wyczyścić. Wystarczy kliknąć prawym klawiszem na rozmowę i wybrać <span class="menu">Wyczyść okno</span>. Okno zostanie wyczyszczone i wróci do poprzednich rozmiarów</p>
	
	
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