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
  <h2>metaK</h2>
  <h5>Metakontakty w Konnekcie</h5>
  
  <ul class="index">
	<li><a href="#sciaganie">Ściąganie wtyczki</a></li>
	<li><a href="#tworzenie">Tworzenie metakontaktów</a></li>
	<li><a href="#config">Konfiguracja</a></li>
	<li><a href="#donotdo">Czego nie robić</a></li>
	<li><a href="#ico">Zmiana ikonek metakontaktu</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 18:43 2005-07-01</h6>
  
  <p>Wtyczka pozawala na utworzenie jednego kontaktu zawierającego w sobie kilka innych podkontaktów z różnych sieci. Pomaga to uporządkować listę, zachowując funkcjonalość wszystkich sieci.</p>
	<p><strong>Uwaga!</strong> Wtyczka jest w stadium beta, nie zaleca się jej używania początkującym użytkownikom Konnekta. Wtyczkę testowano w wersji 0.0.1.2 lecz 0.0.1.3 posiada te same błędy i możliwości.</p>  

	<h3 id="start">Instalacja</h3>
	<p>Jako że wtyczka jest w fazie beta nie znajdziemy jej na żadnej centralce czy stronie kPlugins. Znajduje się ona na stronie autora <a href="http://pz16.info">Pz16</a>. Po ściągnięciu wtyczki i jej <a href="plugins.php">zainstalowaniu</a>, <a href="plug_expimp.php">zapisz <strong>koniecznie</strong> ustawienia</a> Konnekta wtyczką exPIMP, tak by jej niestabilne zachowanie nie zniszczyło Ci konfiguracji profilu.</p>
	
  <h3 id="start">Tworzenie metakontaktów</h3>
	<img src="pic/plug_metak/screen_b.png" alt="" class="left" />
	<p>By utworzyć nowy metakontakt postępujemy tak jak w przypadku <a href="contacts.php">dodawania kontaktu</a>. <span class="tool">Kontakty</span> -> <span class="menu">Dodaj kontakt</span>.</p>
	
	<p>W wyborze sieci wybieramy <span class="input">Metakontakt</span>. Pole <span class="ui">UID</span> pozostawiamy puste.</p>
	
	<h3 id="">Podpinanie kontaktów</h3>
	<img src="pic/plug_metak/screen_d.png" alt="" class="left" />
	<p>Gdy nasz metakontakt został stworzony wypadałoby podpiąć pod niego kontakty. Aby to zrobić klikamy prawym przyciskiem myszy na interesujący nas kontakt i wybieramy opcję <span class="menu">Dodaj do metakontaktu</span>.</p>
	
	<h4></h4>
	<img src="pic/plug_metak/screen_c.png" alt="" class="left" />
  <p>Wyświetli nam się okienko z utworzonymi już metakontaktami, klikamy na interesujący nas metakontakt. Właśnie dodaliśmy podkontakt do metakontaktu.</p>
	
	<h3 id="">Domyślna sieć</h3>
	<img src="pic/plug_metak/screen_e.png" alt="" class="left" />
  <p>By określić, która sieć powinna być domyślna wchodzimy w opcje kontaktu. Klikamy prawym klawiszem myszy na metakontakt (zauważmy, że możemy tym sposobem wybrać sieć, przez którą chcemy rozmawiać) i wybieramy <span class="menu">więcej</span>. </p>
	
	<p>Okienko różni się od standardowego wyglądu okna konfiguracji kontaktu. Widzimy dodane podkontakty i jak i przyciski <span class="but">Usuń</span>, <span class="but">W górę</span> i przycisk <span class="but">W dół</span>. By ustalić kolejność sieci po prostu przesuwamy kontakty na zasadzie, im wyżej, tym ważniejszy. Gdy podkontakt na samej górze jest niedostępny wtyczka otwiera rozmowę z następnym podkontaktem.</p>
	
	<h3 id="">Konfiguracja</h3>
	<img src="pic/plug_metak/screen_f.png" alt="" class="right" />
  <p>Opisze tutaj działające opcje, nieposiadające większych błędów. By skonfigurować wtyczkę wchodzimy w: <span class="tool">Ustawienia</span> -> <span class="menu">Konfiguracja</span> -> <span class="list">Wtyczki</span> -> <span class="list">metaK</span>.</p>
	
	<ul>
		<li><span class="chx on">Pokazuj podkontakty metakontaktu</span> - metakontakt nie będzie ukrywał podkontaktów</li>
		<li><span class="chx on">Pokazuj wiadomości od metakontaktu w jednym oknie</span> - gdy metakontakt rozpocznie rozmowę otworzy nam się jedno okno rozmowy, ze wskaźnikiem sieci metakontakt.</li>
		<li><span class="chx on">Domyślnie otwieraj wspólne okno</span> - Gdy chcemy rozpocząć rozmowę z metakontaktem nie będzie on ukazywał, przez jaka sieć się łączymy tylko otworzy okno ze wskaźnikiem sieci metakontakt</li>
	</ul>
	
	<h3 id="donotdo">Czego nie robić</h3>
	<p>Jako że wtyczka jest w fazie beta testów ma poważne błędy. Oto niektóre z nich:</p>
	
	<ul>
		<li>Nie zaznaczać przy dodawaniu <strong>jakiegokolwiek</strong> kontaktu opcji <span class="chx off">kontakt ukryty</span> - ukryje nam to kontakt i możliwość jego usuniecia będzie dostępna tylko poprzez wyłączenie wtyczki lub przez przycisk <span class="tool">Wiecej</span> w oknie rozmowy.</li>
		<li>Nie zaznaczać w konfiguracji wtyczki opcji: <span class="chx off">Podmieniaj ikonę na ikonę kontaktu domyślnego</span> - powoduje to dziwne zachowanie ikonek sieci na liście kontaktów.</li>
		<li>Jeśli chcesz pozbyć się metakontaktu, lub usunąć wtyczkę, najpierw usuń wszystkie podkontakty - zapobiegnie to znikaniu kontaktów z listy. Jeśli jednak usunąłeś/aś metakontakt lub wyczkę jest na to wyjście.
			<ol>
				<li>Pośrednie - zaznaczyć opcje: Pokazuj kontakty metakontaktu</li>
				<li><p>Doraźne - wyeksportować listę kontaktów <a href="plug_expimp.php">exPIMPem</a>, edytować plik z kontaktami i zamienić linie</p>
				<pre><code>&lt;cell name="Składowa Metakontaktu"&gt;1&lt;/cell&gt;</code></pre>
				<p>na</p>
				<pre><code>"&lt;cell name="Składowa Metakontaktu"&gt;0&lt;/cell&gt;</code></pre></li> 
			</ol>
		</li>
	</ul>

	<h4>Więcej błędów</h4>
	<p>Znalazłeś błąd, tutaj nie opisany, i nie wiesz jak sobie z nim poradzić? na <a href="http://www.konnekt.info/forum/index.php?showtopic=4559&amp;st=0">Forum Konnekta</a> możesz zawsze zadać pytanie lub zgłosić ten bład autorowi.</p>
	
	<h3 id="ico">Zmiana ikonek metakontaktu</h3>
		<p>By zmienić ikonki musimy edytować aktualnie używany plik <span class="file">theme.xml</span> i dodać tam następujące linie:</p>
		<pre><code>&lt;!-- metaK  --&gt; 
  &lt;ico iml="16" file="z_online.png" type="4" net="116" id="64" /&gt; 
  &lt;ico iml="16" file="z_offline.png" type="4" net="116" id="0" /&gt; 
  &lt;ico iml="16" file="z_chat.png" type="4" net="116" id="67" /&gt; 
  &lt;ico iml="16" file="z_brb.png" type="4" net="116" id="65" /&gt; 
  &lt;ico iml="16" file="z_busy.png" type="4" net="116" id="34" /&gt; 
  &lt;ico iml="16" file="z_away.png" type="4" net="116" id="33" /&gt;</code></pre>
	
	
	
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