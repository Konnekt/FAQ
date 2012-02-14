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
  <h2>kDodatki</h2>
  <h5>zwiększenie możliwości Konnekta małymi opcjami</h5>
  
  <ul class="index">
    <li><a href="#options">Możliwości wtyczki</a>
		<ul>
			<li><a href="#stats">Statystyka</a></li>
			<li><a href="#monitor">Wyłącz monitor</a></li>
			<li><a href="#turnoff">Wyłącz automagicznie</a></li>
			<li><a href="#scrsaver">Wygaszacz ekranu</a></li>
			<li><a href="#ping">Ping</a></li>
			<li><a href="#spam">Wyślij SPAM</a></li>
			<li><a href="#whois">WhoIs</a></li>
			<li><a href="#checkconn">Sprawdź połączenie</a></li>
		</ul>
	</li>
	<li><a href="#mainmenu">Menu główne</a></li>
	<li><a href="#addoptions">Inne możliwości</a>
		<ul>
			<li><a href="#copy">Kopiuj</a></li>
			<li><a href="#addping">Ping</a></li>
			<li><a href="#addwhois">WhoIs</a></li>
			<li><a href="#info">Informacje</a></li>
			<li><a href="#addcheckconn">Sprawdzanie połączenia</a></li>
		</ul>
	</li>
	<li><a href="#cmd">Komendy</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 14:27 2005-04-22</h6>
  
  <img src="pic/plug_kdodatki/screen_a.png" alt="" class="left" />
  <p>kDodatki jest zestawem rozszerzeń umożliwiających wykonywanie zadziwiających rzeczy w Konnekcie. Są one proste, lecz znacznie przyśpieszają pracę, bo automatyzują różne czynności.</p>
  
  <h3 id="options">Możliwości wtyczki</h3>
  <img src="pic/plug_kdodatki/screen_b.png" alt="" class="left" />
  <p>Opcje dostępne z menu <span class="tool">Wtyczki</span> -> <span class="menu">kDodatki</span>:</p>
  
	<h4 id="stats"><span class="menu">Statystyka</span></h4>
	<p>Pokazuje okienko z wiadomością, na którą składa się:</p>
	<ul>
		<li>ilość kontaktów na liście</li>
		<li>czas jaki jest włączony Konnekt</li>
		<li>godzinę o której został włączony</li>
	</ul>
	
	<h4 id="monitor"><span class="menu">Wyłącz monitor</span></h4>
	<p>Niektóre monitory ulegają presji wtyczki, niektóre nie.</p>
	
	<h4 id="turnoff"><span class="menu">Wyłącz automagicznie</span></h4>
	<p>Opcja pozwala na wykonanie jednej z akcji:</p>
	<ul>
		<li>wyłączenie monitora</li>
		<li>wyłączenie komputera</li>
		<li>zahibernowanie komputera (systemy Windows 2000 i wyższe)</li>
		<li>wyłączenie winamp'a o określonej godzinie (godzina : minuty)</li>
	</ul>
	
	<h4 id="scrsaver"><span class="menu">Wygaszacz ekranu</span></h4>
	<p>Włącza od razu wybrany przez nas wygaszacz ekranu w opcjach ekranu.</p>
	
	
	<h4 id="ping"><span class="menu">Ping</span></h4>
	<p>Po wpisaniu IP albo Hostname, cel zostanie spingowany (sprawdzone połączenie, utracone dane, itp.)</p>	
	
	<h4 id="spam"><span class="menu">Wyślij SPAM</span></h4>
	<img src="pic/plug_kdodatki/screen_c.png" alt="" class="left" />
	<img src="pic/plug_kdodatki/screen_d.png" alt="" class="right" />
	<p>Nazwa może być myląca, bo żaden z twórców wtyczek do Konnekta nie ma zamiaru zarzucać mas niechcianymi wiadomościami. Wtyczka ta umożliwia jedynie wysłanie tej samej wiadomości do wszystkich otwartych okienek rozmowy. Można używać HTML. Jest ona bardzo przydatna kiedy musimy szybko odejść od komputera, a prowadzimy symultanicznie parę rozmów.</p>
	
	
	<h4 id="whois"><span class="menu">WhoIs</span></h4>
	<p>Wysyła żadanie WhoIs podanego IP lub Hostname.</p>
	
	
	<h4 id="checkconn"><span class="menu">Sprawdź połączenie</span></h4>
	<p>Opcja przydatna dla modemowców - sprawdza czy mamy połączenie z siecią. Nie jest ono zalecane. Lepiej używać wtyczki <a class="todo" href="plug_checky.php">Checky</a> wydającej polecenie ping na onet.pl, na przykład.</p>
  
  <h3 id="mainmenu">Menu główne</h3>
  <img src="pic/plug_kdodatki/screen_h.png" alt="" class="left" />
  
  <p>Wtyczka modyfikuje menu główne Konnekta, dodając wiele przydatnych pozycji, które upraszczają używanie programu.</p>
  
  <img src="pic/plug_kdodatki/screen_i.png" alt="" class="right" />
  <ul>
	<li><span class="menu">Restart</span> - zamyka i ponownie otwiera Konnekta.</li>
	<li><span class="menu">Katalog</span> - link do <a href="http://www.konnekt.info/katalog.php">Katalogu Konnekta</a> - zbioru emotikonek, styli, dźwięków.</li>
	<li><span class="menu">KPlugins</span> - link do <a href="http://kplugins.net">KPlugins</a> - zbioru wtyczek do Konnekta.</li>
	<li><span class="menu">Folder Konnekta</span> - skrót do folderu, w którym znajduje się Konnekt.</li>
	<li><span class="menu">Folder profilu</span> - skrót do folderu, w którym znajduje się profil użytkownika. W nim jest historia rozmów, lista kontaktów, wszelkie spersonalizowane dane.</li>
	<li><span class="menu">Folder logów</span> - skrót do folderu, w którym znajdują logi - pliki tekstowe z zapisem czynności wykonanych przez Konnekt i wtyczki. Taka czarna skrzynka.</li>
  </ul>
  
  <h3 id="addoptions">Inne możliwości</h3>
  <p>Inne opcje, dostępne w menu kontekstowym kontaktu po kliknięciu prawym klawiszem myszy.</p>
  
  <img src="pic/plug_kdodatki/screen_e.png" alt="" class="left" /><img src="pic/plug_kdodatki/screen_f.png" alt="" class="left" />
  
	<h4 id="copy"><span class="menu">Kopiuj</span></h4>  
	<p>Bardzo przydatna opcja - umożliwia nam skopiowanie do schowka informacji o kontakcie. Na przykład:</p>
	<ul>
		<li><span class="menu">UID</span>: kopiuje numer lub identyfikator kontaktu (przykładowo: 9187192 lub ona@tlen.pl)</li>
		<li><span class="menu">Opis</span>: kopiuje status opisowy. Przydatne, gdy ktoś ma w opisie link do strony WWW.</li>
		<li><span class="menu">IP</span>: kopiuje IP pod jakim znajduje się kontakt</li>
		<li><span class="menu">Komórka</span>: kopiuje numer telefonu komórkowego, jeśli został wcześniej wpisany.</li>
		<li><span class="menu">Mail</span>: kopiuje adres e-mail kontaktu, jeśli został wcześniej wpisany.</li>
	</ul>
  
	<h4 id="addping"><span class="menu">Ping</span></h4>
	<p>Kontakt zostanie spingowany (sprawdzone połączenie, utracone dane, itp.)</p>
  
	<h4 id="addwhois"><span class="menu">WhoIs</span></h4>
	<p>Działa tak samo jak opcja w menu Wtyczki</p>
  
	<h4 id="info">Informacje</h4>
	<img src="pic/plug_kdodatki/screen_g.png" alt="" class="left" />
	<p>Korzystając z tej wtyczki możemy sprawdzić (w sieci Gadu-Gadu), czy kontakt posiada nas na swoim rosterze. Funkcja ta może zostać zakłócona przez niektóre komunikatory, na przykład oryginalny Tlen. Wtyczka podobnie sprawdza czy ma włączone <acronym lang="en-US" title="Peer to peer">P2P</acronym> lub czy jest za NATem.</p>
  
	<h4 id="addcheckconn">Sprawdzanie połączenia</h4>
	<p>Dodatkowo istnieje możliwość zaawansowanego sprawdzania połączenia, ustawiana w <span class="config">Ustawieniach</span>. Można zaznaczyć pole <span class="chx on">Sprawdzaj połączenie</span>, wybrać <span class="ui">odstęp czasowy</span> w sekundach i <span class="ui">adres</span> na którym będzie połączenie sprawdzane. Jednak może to spowodować wzrost pamięciożerności Konnekta.</p>
  
	<p>W opcjach można też ustawić serwer, który będzie wykonywał usługę WhoIs. Domyślnie jest <code>whois.ripe.net</code>.</p>
  
  <h3 id="cmd">Komendy</h3>
  <p>Wpisanie w oknie rozmowy komendy <span class="input">/all</span> - używa modułu <span class="menu">Wyślij SPAM</span> i wysyła wiadomość do wszystkich otwartych okienek rozmowy. Użycie komendy, jak wszystkich, polega na wpisaniu polecenia na początku wiadomości, utworzenia odstępu przez spację i wpisania wiadomości, jak pokazane poniżej:</p>

<p class="log">/all Muszę już iść, będę jutro o 10.00</p>
  
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
