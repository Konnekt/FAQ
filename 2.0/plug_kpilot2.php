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
  <h2>kPilot2</h2>
  <h5>kompleksowa obsługa programów do odtwarzania muzyki</h5>
  
  <ul class="index">
    <li><a href="#download">Pobranie wtyczki</a></li>
	<li><a href="#extension">Instalacja rozszerzenia</a></li>
	<li><a href="#interface">Konfiguracja interfejsu</a></li>
	<li><a href="#status">Zmienianie opisów</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 15:04 2005-04-15</h6>
  
  <p>Wtyczka zmienia opis statusu na tytuł utworu aktualnie odtwarzanego przez Winampa2 i 5, Windows Media Player 9 i 10, Foobara2000 oraz innego playera, z pluginem współpracującym z kPilot2. Umożliwia również kontrolę tych programów. <a href="http://www.konnekt.info/forum/index.php?showtopic=3036">Więcej na temat wtyczki</a> można dowiedzieć się z forum Konnekta.</p>
  
  <h3 id="download">Pobranie wtyczki</h3>
  
	<h4 id="dl_step1">Krok 1</h4>
	<img src="pic/plug_kpilot2/screen_a.png" alt="" class="left" />
	<p>Wtyczka kPilot2 jest dostępna do pobrania z centralki kplugins.net. Upewnij się, że masz aktywną wtyczkę kUpdate (okno główne programu : <span class="tool">Ustawienia</span> -> <span class="menu">Ustawienia</span> -> <span class="list">Wtyczki</span>).</p>
	<p>Aby zainstalować kpilot2, należy wejść do <span class="menu">Ustawień</span> programu, a następnie, w liście po lewej, wybrać <span class="list">Ustawienia</span> -> <span class="list">Aktualizacje</span>.</p>

	<h4 id="dl_step2">Krok 2</h4>
	<img src="pic/plug_kpilot2/screen_b.png" alt="" class="right" />
	<p>Następnie w prawej częsci okna zaznaczyć pole <span class="chx on">Centralka k.Plugins</span> pokazane na obrazku.</p>

	<h4 id="dl_step3">Krok 3</h4>
	<img src="pic/plug_kpilot2/screen_c.gif" alt="" class="left" />
	<p>Teraz trzeba już tylko kliknąć na przycisk <span class="but">Zastosuj</span>, a potem, nadal w oknie Ustawień, na <span class="but">Przejrzyj aktualizacje</span>, pokazany na obrazku.</p>

	<h4 id="dl_step4">Krok 4</h4>
	<img src="pic/plug_kpilot2/screen_d.png" alt="" class="right" />
	<p>Pojawi się okno kUpdate. Z drzewka <span class="list">KPlugins</span> -> <span class="list">KPlugins team</span> wybierz <span class="list">kpilot2</span> klikając czerwony wykrzyknik przy nim, jak pokazane na obrazku. Kliknij <span class="tool">Start</span>, na dole okna, po lewej.</p>

	<h4 id="dl_step5">Krok 5</h4>
	<img src="pic/plug_kpilot2/screen_f.png" alt="" class="left" />
	<p>Program pobierze aktualizację i po jej zakończeniu zapyta, czy zrestartować. Wybierz <span class="but">Tak, zrestartuj teraz.</span></p>

  <h3 id="extension">Instalacja rozszerzenia</h3>
  <p>Potrzebne jest teraz odpowiednie rozszerzenie do naszego odtwarzacza.</p>
  
	<h4 id="ex_step1">Krok 1</h4>
	<img src="pic/plug_kpilot2/screen_g.png" alt="" class="left" />
	<p>By kPilot2 komunikował się z Twoim odtwarzaczem musimy najpierw dodać odpowiednie rozszerzenie. Będzie umożliwiało ono obsługę danego typu programu. Aby to zrobić musimy wejśc w <span class="menu">Ustawienia</span> -> z listy po lewej, <span class="list">Wtyczki</span> -> <span class="list">kpilot2</span>.</p>

	<h4 id="ex_step2">Krok 2</h4>
	<img src="pic/plug_kpilot2/screen_h.png" alt="" class="left" />
	<p>Z prawej części okna wybieramy <span class="but">Kreator</span> w polu <span class="ui">Wybierz odtwarzacz</span>.</p>

	<h4 id="ex_step3">Krok 3</h4>
	<img src="pic/plug_kpilot2/screen_i.png" alt="" class="left" />
	<p>Kreator przeprowadzi nas przez instalację, wybierając odpowiednie rozszerzenie do Twojego odtwarzacza, używanego przez Ciebie.</p>
	
	<h4 id="ex_step4">Krok 4</h4>
	<img src="pic/plug_kpilot2/screen_j.png" alt="" class="left" />
	<p>Po instalacji wybieramy z menu odtwarzacz (w tym wypadku <span class="input">FooBar2000</span>), restartujemy Konnekta oraz odtwarzacz. Potem kPilot2 jest gotowy do wysyłania sygnałów i do konfiguracji, o czym za chwilę.</p>
  
  <h3 id="interface">Konfiguracja interfejsu</h3>
  
	<h4 id="in_step1">Krok 1</h4>
	<p>Aby przez nasz komunikator można było koordynować poczynania odtwarzacza, musimy określić jakie przyciski, menu lub inne fanaberie chcemy mieć do dyspozycji. Masz dość dużo kontrolek do umieszczenia: <span class="ui">1</span> paski narzędziowe (toolbary), <span class="ui">2</span> menu czy <span class="ui">3</span> suwaki głośności.</p>

	<ol>
		<li><img src="pic/plug_kpilot2/screen_l.png" alt="" /></li>
		<li><img src="pic/plug_kpilot2/screen_k.png" alt="" /></li>
		<li><img src="pic/plug_kpilot2/screen_m.png" alt="" /></li>
	</ol>

	<h4 id="in_step2">Krok 2</h4>
	<p>Standardowo, po instalacji wtyczki, w głównym oknie komunikatora, pojawia się toolbar, a w oknie rozmowy menu. Jeśli jednak Ci się to nie podoba, zawsze możesz dokonać zmian w konfiguracji wtyczki. <span class="menu">Ustawienia</span> -> <span class="list">Wtyczki</span> -> <span class="list">kPilot2</span>. </p>

	<h4 id="in_step3">Krok 3</h4>
	<img src="pic/plug_kpilot2/screen_n.png" alt="" class="right"/>
	<p>Tutaj możemy określić co i gdzie chcemy by nam sie pojawiło. Zrzuty ekranu ilustrujące zmiany w Konnekcie, widoczne są poniżej.</p>

	<h4 id="in_step4">Krok 4</h4>
	<p>Zrzuty ekranu <span class="ui">Przyciski w głównym oknie</span></p>

	<ol>
		<li><img src="pic/plug_kpilot2/screen_o.png" alt="" /><span class="radon">Jako menu</span></li>
		<li><img src="pic/plug_kpilot2/screen_p.png" alt="" /><span class="radon">Jako toolbar</span></li>
		<li><img src="pic/plug_kpilot2/screen_q.png" alt="" /><span class="radon">Na głównym toolbarze</span></li>
	</ol>

	<h4 id="in_step5">Krok 5</h4>
	<p>Zrzuty ekranu <span class="ui">Przyciski w oknie wiadomości</span></p>

	<ol>
		<li><img src="pic/plug_kpilot2/screen_r.png" alt="" /><span class="radon">Jako menu</span></li>
		<li><img src="pic/plug_kpilot2/screen_s.png" alt="" /><span class="radon">Jako toolbar</span></li>
	</ol>

	<h4 id="in_step6">Krok 6</h4>
	<img src="pic/plug_kpilot2/screen_t.png" alt="" class="left" />
	<p>Oczywiście sami decydujemy jakie przyciski mają być w naszym pilocie. Po prostu wybieramy odpowiednie przyciski poprzez ich zaznaczenie.</p>
	<p>Mamy do wyboru okno główne - pasek narzędziowy w nim oraz pozycje w oknie rozmowy.</p>
	
	<p>Pozycja <span class="input opt">Głośność</span> decyduje, czy umieścić dwa przyciski, pozwalające skokowo zmieniać głośność (<span class="tool">Głośniej</span>, <span class="tool">Ciszej</span>). Suwak głośności wydaje się być jednak o wiele lepszym pomysłem, o czym za chwilę.</p>
	
	<h4 id="in_step7">Krok 7</h4>
	<img src="pic/plug_kpilot2/screen_u.png" alt="" class="left" />
	<img src="pic/plug_kpilot2/screen_v.png" alt="" class="right" />
	<p>Suwak głośności jest osobną pozycją w oknie. Aby dodać taki suwak, po prostu zaznaczamy odpowiednią opcję, pokazaną na obrazku. Również mamy tutaj do wyboru okno główne i okno wiadomości.</p>
  
  <h3 id="status">Zmienianie opisów</h3>
  
	<h4 id="st_step1">Krok 1</h4>
	<img src="pic/plug_kpilot2/screen_w.png" alt="" class="left" />
	<p>By wtyczka pobierała opis słuchanego utworu należy wyrazić chęć na takie działanie, poprzez zaznaczenie na naszym toolbarze/menu, przycisku. Jednak jeśli nie satysfakcjonują Cię informacje pobieranie do opisu, jest na to sposób.</p>
	
	<h4 id="st_step2">Krok 2</h4>
	<p><span class="menu">Ustawienia</span> -> <span class="list">Wtyczki</span> -> <span class="list">kPilot2</span>. Skoncentrujmy się na formatowaniu statusu. To właśnie tutaj można pozieniać wszystko w sprawie wyświetlania informacji o utworach w Twoim opisie. Poprzez wpisywanie odpowiednich zmiennych można uzyskać wiele efektów. Zmienne znajdziemy po naciśnięciu przycisku <span class="but">?</span> po prawej stronie od pola tekstowego.</p>

	<h4 id="st_step3">Krok 3</h4>
	<img src="pic/plug_kpilot2/screen_x.png" alt="" class="left" />
	<p>Przykładowo wpiszmy zmienne:</p>
		
	<pre><code>{OldInfo}
Gra: {Artist} - {Title}</code></pre>

	<p>Co przekłada sie na status w wypadku gdy słuchamy <span class="tip">Kult - Piloci</span>, a nasz opis z przed włączenia pobierania informacji do opisu wyglądał: <span class="tip">tereferekuku baba strzela z łuku :)</span>. Otrzymujemy opis:</p>

	<img src="pic/plug_kpilot2/screen_y.png" alt="" />

	<h4 id="st_step4">Krok 4</h4>
	<img src="pic/plug_kpilot2/screen_z.png" alt="" class="left" />
	<p>By wybrańcy z konkretnej sieci mogli zobaczyć poprzez nasz opis co słuchamy, zaznaczamy lub odznaczamy (domyślnie wszystko jest zaznaczone), do których sieci ma byc taka informacja wysyłana.</p>

	<h4 id="st_step5">Krok 5</h4>
	<img src="pic/plug_kpilot2/screen_za.png" alt="" class="left"/>
	<p>Wiekszość opcji jest zrozumiała.</p>
		
		<ul>
			<li><span class="chx on">Przy zatrzymaniu przywracaj opis</span> - po zatrzymaniu (<span class="tool">Stop</span>) opis jest czyszczony i zwrócony poprzedni (<span class="tip">{OldInfo}</span>), bez informacji o piosence.</li>
			<li><span class="chx on">Przy pauzie przywracaj opis</span> - jak wyżej, tylko po kliknięciu przycisku <span class="tool">Pauza</span>.</li>
			<li><span class="chx on">Nie zmieniaj opisu, gdy zmienna "title" lub "artist" jest pusta</span> - Poprostu jeśl nie masz potagowanych (dodanych informacji o autorze, tytule, albumie i tak dalej) plików i masz zaznaczoną tą opcje, to jeśli nie masz wypełnionych tagów <span class="input">artist</span> (wykonawca) <strong>albo</strong> <span class="input">title</span> (tytuł), ta piosenka nie zostanie wyświetlona w statusie przez wtyczkę.</li>
			<li><span class="chx off">Zmieniaj opis przy statusie ukryty</span> - Najlepiej pozostawić odznaczone. Pozwoli to spokojnie się ukrywać. Każda zmiana statusu może zostać wychwycona przez użytkownika, a dodatkowo jeśli ktoś posiada Konnekta, to jesteś u niego wtedy <a href="icons.php">zaznaczony z ikonką "?"</a>.</li>
		</ul>

	<h4 id="st_step6">Krok 6</h4>
	<img src="pic/plug_kpilot2/screen_zb.png" alt="" class="left"/>
	<p>Opcja <span class="chx on">Informuj o zmianie utworu przez K.Notify</span> powoduje wyświetlanie się informacji o utworze właśnie odgrywanym w <a href="plug_knotify.php">kNotify</a>. Jak widzimy są tam zmienne, takie same jak w formatowaniach statusu wiec analogicznie do tego możemy ustalić co ma być wyświetlane. Ten właśnie sposób powiadomień jest widoczny tylko u nas. Można w ten sposób używać Konnekta i kPilota do powiadomień o odtwarzanym utworze, jeśli sam odtwarzacz nie ma takiej opcji (Winamp na przykład). Screen:</p>

	<img src="pic/plug_kpilot2/screen_zc.png" alt="" />

	<h4 id="st_step7">Krok 7</h4>
	<img src="pic/plug_kpilot2/screen_zd.png" alt="" class="left"/>
	<p><span class="ui">Antyflood</span> - definiuje wartość czasową, po której zmieni nam sie status. Jest to bardzo przydatne, bo gdy przeskakujemy z piosenki na piosenkę nie denerwujemy nikogo zmianami swojego statusu i opisu.</p>
	<p>W pozostałe pola możemy wpisać tekst, który wyświetli się w opisie pod zmienną <span class="tip">{PlayerState}</span>, gdy wykonamy którąś z czynności w odtwarzaczu.</p>
	
	<ul>
		<li><span class="ui">Nazwa stanu 'Playing'</span> - gdy piosenka jest odtwarzana.</li>
		<li><span class="ui">Nazwa stanu 'Paused'</span> - gdy odtwarzana piosenka jest zapauzowana.</li>
		<li><span class="ui">Nazwa stanu 'Stopped'</span> - gdy odtwarzacz jest zatrzymany.</li>
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