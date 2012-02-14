<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head profile="http://gmpg.org/xfn/1">
<title>Konnekt FAQ - Poradniki, tutoriale, artykuły</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
  <link rel="stylesheet" title="Default" href="default.css" type="text/css" /> <!-- by Riddle -->
	<link rel="stylesheet" title="Light" href="default_light.css" type="text/css" /> <!-- by Olórin -->
	
	<style type="text/css">
		@import url(numbers.css);
	</style>
  
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
  <h2>KTP</h2>
  <h5>Wysyłanie plików na FTP.</h5>
  
  <ul class="index">
		<li><a href="#config">Ustawienia</a></li>
		<li><a href="#send">Wysyłanie plików do innego użytkowinika</a></li>
		<li><a href="#addconfig">Dodatkowe opcje</a></li>
		<li><a href="#send_ftp">Wysyłanie plików tylko na serwer FTP</a></li>
		<li><a href="#del">Usuwanie plików z serwera FTP</a></li>
		<li><a href="#lasttips">Informacje końcowe</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 17:26 2005-09-23</h6>
  
  <p>Konnekt obsługuje narazie przesyłanie plików poprzez Gadu-Gadu, jednak jeśli posiadasz konto FTP nic straconego. Możesz wysłac plik poprzez konto <a href="http://pl.wikipedia.org/wiki/FTP">FTP</a>.</p>
  
		<h3 id="config">Ustawienia.</h3>
	
		<img src="pic/plug_ktp/screen_a.png" alt="" class="left" />
		<p>By móc wysyłać pliki musimy najpierw skonfigurować połaczenie KTP z z naszym kontem FTP. Wchodzimy wiec w <span class="tool">Ustawienia</span> -> <span class="menu">Konfiguracja</span> -> <span class="list">Wtyczki</span> -> <span class="list">KTP</span>. Naszym oczom ukaże się okno konfiguracji. Skupmy sie najpierw na ustawieniach serwera.</p>
		
		<img src="pic/plug_ktp/screen_b.png" alt="" class="right" />		
		<ol>
			<li>Wpisujemy adres naszego serwera FTP. Pamietajmy że wpisujemy adres bez ftp://</li>
			<li>Tutaj wpisujemy login do naszego konta FTP</li>
			<li>Podajemy hasło do naszego konta</li>
			<li>Podajemy port serwera FTP. Domyślny port to 21 jednak jeśli KTP nie che nam sie połaczyć powinniśmy
		sprawdzić na jakim porcie ustawiony jest nasz serwer FTP.</li>
			<li>Jeśli chcemy by KTP zapisywał pliki w konkretnym folderze na naszym FTP podajemy nazwę folderu.
		Pamietajmy by nie podawać znaków "/" przed i po nazwie foldera</li>
		</ol>
	
		<h3 id="addconfig">Dodatkowe opcje</h3>		
		
		<img src="pic/plug_ktp/screen_c.png" alt="" class="right" /> 		
		<p>W miejscu Adres strony wpisujemy adres naszej strony. Format wysyłanej wiadomości służy do modyfikacji wyświetlanego odnośnika. Możemy dodać jakieś słowo lub parametr by link wygladał przejrzyście.</p>
		
		<pre><code>{adres} [{size}]</code></pre>
		
		<p>Otrzymamy link: <span class="file">http://piczon.e-vro.org/KTP/300_hi.mov [13,20 MB]</span>.<br/>Dostępne parametry: <code>{adres}</code> oraz <code>{size}</code>.</p>
		
		<p><span class="chx on">Czy dodawac do adresu katalog?</span> Jeśli mamy zdefiniowany <span class="no5">katalog</span> opcja powinna byc zaznaczona. Unikniemy wtedy niepotrzebnych komplikacji zwiazanych z wysyłaniem odnośników.</p>
		
		<p><span class="chx on">Zmiana spacji na podkreślenia( _ )</span> Opcja przydatna jeśli wysyłamy pliki o nazwie np: <span class="file">MetaK 0.0.1.2.rar</span>.  Jeśli plik zawiera spacje, link będzie się urywał w miejscu spacji: <span class="file"><a href="#notarget">http://piczon.e-vro.org/KTP/MetaK</a> 0.0.1.2.rar.</span></p>
		
		<p>Jak widzimy odnośnik nie przenosi nas do pliku docelowego, choć plik został wysłany poprawnie. Dlatego zaznaczając tą opcje link będzie wyglądał następująco <span class="file"><a href="#notarget">http://piczon.e-vro.org/KTP/MetaK_0.0.1.2.rar</a></span> i będzie prowadził do wysłanego przez nas pliku.
		
		<p><span class="chx off">Zawsze nadpisuj plik</span> Jak sama nazwa wskazuje bedzie nadpisywał wysyłane pliki jeśli na koncie FTP znajdują się już pliki o takiej samej nazwie.</p>
		
		<img src="pic/plug_ktp/screen_1.png" alt="" class="left" />
		<p><span class="chx off">Nie wyświetlaj pozycji "KTP" na pasku pluginów</span> Jak sama nazwa wskazuje, zaznaczenie spowoduje usunie nam z paska pluginów pozycji z KTP.</p>
		
		<h4></h4>
		
		<img src="pic/plug_ktp/screen_2.png" alt="" class="right" />
		<p><span class="chx on">Włacz Drag & drop w oknie rozmowy</span>. Pozwala to na przesyłanie pliku na zasadzie przeciagnij i upuść. By uniknąć zgrzytów z <a href="plug_ggimage.php">GGimage</a> plik przeciagamy na cześć okna, powyżej toolbara z przyciskami.</p>
		
		<p>Rozmiar bufora w kB domyślnie wynosi 2kB i jak radzi autor wtyczki lepiej nie zmieniać.</p>
		
		<h3 id="send">Wysyłanie plików do innego użytkownika</h3>
		
		<p>Gdy mamy juz skonfigurowaną wtyczkę, możemy zaczynać wysyłać pliki poprzez FTP.</p>
		
		<h4></h4>
		
		<img src="pic/plug_ktp/screen_d.png" alt="" class="left" />		
		<p>Aby wysłać plik poprzez KTP kliknij <acronym title="prawym przyciskiem myszy" lang="eng">ppm</acronym> na kontakt na liście kontaktów i wybierz opcję <span class="menu">Wyślij przez KTP</span>.</p>
		
		<h4></h4>
		
		<img src="pic/plug_ktp/screen_e.png" alt="" class="left" />		
		<p>Możemy też wysłac plik z okna rozmowy klikajać na odpowiedni przycisk.</p>
		
		<h4></h4>
		
		<p>Ukaże nam się okno wyboru pliku który chcemy wysłać, po jego wybraniu otworzy nam się okno rozmowy z informacją: Wysyłanie rozpoczęte. Teraz wtyczka łączy się z serwerem i sprawdza czy plik o takiej nazwie znajduje się na naszym FTP. Jeśli juz istnieje plik o takiej nazwie wtyczka spyta nas, czy nadpisać plik (oczywiście jeśli mamy odznaczoną opcje <span class="chx on">Zawsze nadpisuj plik</span>). W przeciwnym wypadku takie okno nam sie nie pokaże.</p>
		
		<h4></h4>
		
		<img src="pic/plug_ktp/screen_f.png" alt="" class="left" />		
		<p>Gdy wysyłamy plik na FTP ukazuje nam sie dodatkowo okienko z prędkością transferu oraz postępem wysyłania.	Możemy też w tym oknie zaprzestać przesyłania pliku na FTP poprzez klikniecie na przycisk Anuluj.</p>
		
		<h4></h4>
		
		<img src="pic/plug_ktp/screen_g.png" alt="" class="left" />
		<p>Po zakończeniu wysyłania wtyczka zakomunikuje w oknie rozmowy czy plik został wysłany poprawnie oraz poda 
		nam link do naszego pliku.</p>
		
		<h4></h4>
		<p><strong>Uwaga!</strong> Jeśli masz wtyczkę <a href="plug_kpilot2.php">kPilot2</a> oraz KTP i nie wyświetla ci się powiadomienie o wysłaniu pliku, zainstaluj wtyczkę kPilot2 zmodyfikowaną przez Olórina.</p>
		
		<h3 id="send_ftp">Wysyłanie plików tylko na serwer FTP</h3>
		
		<img src="pic/plug_ktp/screen_h.png" alt="" class="left" />
		<p>Funkcjonalność wtyczki wzbogaca możliwość wysyłania plików wyłącznie na serwer FTP. Aby wysłać plik wystarczy wejśc w menu wyczek. Wybieramy <span class="tool">Wtyczki</span> -> <span class="menu">KTP</span> -> <span class="menu">Tylko wyślij na serwer</span>.</p>
		
		<p>Zostaniemy przeniesieni do okna wybierania pliku. Gdy wybierzemy plik wtyczka połączy się z serwerem i rozpocznie przesyłanie pliku. Niestety nie otrzymamy żadnego potwierdzenia że plik został przesłany poprawnie.</p>
		
		<h3 id="del">Usuwanie plików z serwera FTP</h3>
		
		<img src="pic/plug_ktp/screen_i.png" alt="" class="left" />
		<p>Możemy też usunąć plik z naszego serwera FTP. Aby to uczynić ponownie wchodzimy w menu wtyczek i wybieramy <span class="menu">Usuń plik z serwera</span>. Pokaże nam sie okno, w którym musimy podać ścieżkę do pliku który chcemy usunąć. Plik zostaje usunięty. Niestety i tym razem nie otrzymujemy powiadomienia o porażce/sukcesie operacji.</p>
		
		<h3 id="lasttips">Informacje końcowe</h3>
		<p>Wtyczka dalej jest w fazie rozwojowej, więc niektóre aspekty mogą ulec zmianie. Sugestie i błędy prosimy
		umieszczać w <a href="http://www.konnekt.info/forum/index.php?showtopic=3327">wątku wtyczki na forum</a>.</p>
		
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
