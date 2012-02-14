<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head profile="http://gmpg.org/xfn/1">
<title>Konnekt FAQ - Poradniki, tutoriale, artykuły</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
  <link rel="stylesheet" title="Default" href="default.css" type="text/css" /> <!-- by Riddle -->
	<link rel="stylesheet" title="Light" href="default_light.css" type="text/css" /> <!-- by Olórin -->
	
  <link rel="stylesheet" href="treelist.css" type="text/css" /> <!-- CSS dla drzewka -->
	<style type="text/css">
		ul.treelist li.new { font-weight: bold; }
		ul.treelist li.new::before { content: url(gfx/litemnew.gif) " "; }
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
  <h2>Poziomy zaawansowania</h2>
  <h5>Opcje konfiguracji dostępne dla każdego poziomu</h5>
  
  <ul class="index">
  <li><a href="#changing">Zmiana poziomu</a></li>
	<li><a href="#listopts">Pozycje listy ustawień</a></li>
	<li><a href="#options">Opcje</a></li>
	<!-- <li><a href="#"></a></li>
	<li><a href="#"></a></li> -->
  </ul>
  
  <h6>Data ostatniej modyfikacji: 11:12 2005-08-14</h6>
  
  <p>Użytkownik ma możliwość ustawienia odpowiedniego poziomu zaawansowania, co pozwala Konnektowi na serwowanie odpowiednich ustawień i podpowiedzi. W tym poradniku wypiszemy wszystkie opcje dla poszczególnych poziomów oraz, wskażemy różnice.</p>
	
	<p>Niektóre wtyczki nie mają rozgraniczonych opcji dla każdego poziomu, więc nie umieszczaliśmy ich w spisie. W poradniku nie wgłębiamy się w dokładniejsze ustawienia ilości informacji, kreatorów i podpowiedzi, możliwe do ustawienia, po kliknięciu przycisku <span class="but">&raquo;</span>.</p>
  
	<h3 id="changing">Zmiana poziomu</h3>
  <p>Zmiana poziomu jest możliwa podczas pierwszego uruchomienia Konnekta oraz za pomocą przycisku <span class="but">Wybierz swój stopień zaawansowania</span>. Poziomów jest pięć:</p>
	
	<img src="pic/school/winlevels.png" alt="" class="right" />
	<ol>
		<li>Początkujący - idealny na początek. Wiele dodatkowych informacji i tylko najbardziej potrzebne ustawienia, pozwolą przyjemniej oswoić się z Konnektem.</li>
		<li>Prosty - jeżeli nie lubisz być traktowany jak "początkujący", a lubisz prostą obsługę - ten poziom jest dla Ciebie.</li>
		<li>Normalny - dostępne wszystkie przydatne opcje, garść podpowiedzi, trochę kreatorów, to to co normalny użytkownik lubi najbardziej.</li>
		<li>Zaawansowany - poziom dla zaawansowanych użytkowników. Wszystkie opcje dostępne, plus najbardziej przydatne ułatwienia i podpowiedzi.</li>
		<li>Pro - uważasz, że Konnekt'a masz w małym palcu? Absolutnie wszystkie opcje dostępne, oprócz kreatorów i podpowiedzi.</li>
	</ol>
	
	<h3 id="listopts">Pozycje listy ustawień</h3>
  <p>Lista ustawień jest widoczna w oknie Ustawień (<span class="tool">Ustawienia</span> -> <span class="menu">Ustawienia</span>) po lewej stronie. Zawiera ona pozycje, które grupują ustawienia i ułatwiają poruszanie się między nimi. W przypadku poziomów niektóre ustawienia są komplenie schowane, to znaczy, pozycja je kryjąca jest niewidoczna.</p>
	
	<div class="lcol"><h5 id="beg">1. Początkujący</h5><ul class="treelist"><li class="exp">Ustawienia<ul><li>Uruchamianie</li><li class="exp">Połączenie<ul><li>Proxy</li></ul></li><li>Aktualizacje</li></ul></li><li class="exp">Użytkownik<ul><li>Tlen</li><li>GG</li><li>Jabber</li><li>kLAN</li></ul></li><li class="exp">Interfejs<ul><li class="exp">Lista kontaktów<ul><li>Ikonki</li></ul></li><li>Powiadomienia</li><li class="exp">Wiadomości<ul><li>Historia</li></ul></li><li>Wygląd</li></ul></li></ul></div>
	
	<div class="rcol"><h5 id="bas">2. Prosty</h5><ul class="treelist"><li class="exp">Ustawienia<ul><li>Uruchamianie</li><li class="exp">Połączenie<ul><li>Proxy</li></ul></li><li>Aktualizacje</li></ul></li><li class="exp">Użytkownik<ul><li class="new">Opisy statusów</li><li>Tlen</li><li class="exp">GG<ul><li class="new">Obrazki</li></ul></li><li>Jabber</li><li>kLAN</li></ul></li><li class="exp">Interfejs<ul><li class="new">Grupy</li><li class="exp">Lista kontaktów<ul><li>Ikonki</li><li class="new">Tip</li></ul></li><li>Powiadomienia</li><li class="exp">Wiadomości<ul><li>Historia</li></ul></li><li>Wygląd</li></ul></li></ul></div>
	
	<hr />
	
	<div class="lcol"><h5 id="nrm">3. Normalny</h5><ul class="treelist"><li class="exp">Ustawienia<ul><li>Uruchamianie</li><li class="exp">Połączenie<ul><li>Proxy</li></ul></li><li>Aktualizacje</li></ul></li><li class="exp">Użytkownik<ul><li>Opisy statusów</li><li>Tlen</li><li class="exp">GG<ul><li>Obrazki</li></ul></li><li>Jabber</li><li>kLAN</li></ul></li><li class="exp">Interfejs<ul><li class="new">Dokowanie</li><li>Grupy</li><li class="exp">Lista kontaktów<ul><li>Ikonki</li><li>Tip</li></ul></li><li>Powiadomienia</li><li class="exp">Wiadomości<ul><li>Historia</li><li class="new">Spoza listy</li></ul></li><li>Wygląd</li></ul></li></ul></div>
	
	<div class="rcol"><h5 id="adv">4. Zaawansowany</h5><ul class="treelist"><li class="exp">Ustawienia<ul><li>Uruchamianie</li><li class="exp">Połączenie<ul><li>Proxy</li></ul></li><li class="exp">Aktualizacje<ul><li class="new">Dodatkowe centralki</li></ul></li></ul></li><li class="exp">Użytkownik<ul><li>Opisy statusów</li><li>Tlen</li><li class="exp">GG<ul><li>Obrazki</li></ul></li><li>Jabber</li><li>kLAN</li></ul></li><li class="exp">Interfejs<ul><li>Dokowanie</li><li>Grupy</li><li class="exp">Lista kontaktów<ul><li>Ikonki</li><li>Tip</li></ul></li><li>Powiadomienia</li><li class="exp">Wiadomości<ul><li>Historia</li><li>Spoza listy</li></ul></li><li>Wygląd</li><li class="new">Formatowanie pól</li></ul></li></ul></div>
	
	<hr />
	
	<h5 id="pro">5. Pro</h5>
  <p>Lista wygląda tak samo jak dla poziomu Zaawansowany. Różni się ten poziom jednak opcjami kryjącymi się pod tymi pozycjami</p>
	
	<h3 id="options">Opcje</h3>
	<p>Dla każdego poziomu poszczególne karty okna konfiguracji mają trochę inne opcje. Na pierwszych poziomach dodatkowo jest więcej podpowiedzi i ułatwień. Poniżej ich pełna lista:</p>
	
	<dl>
		<dt>Uruchamianie</dt>
		<dd>
			<h5>Początkujący</h5>
			<ul>
				<li><span class="chx off">Pokazuj ekran powitalny podczas uruchamiania</span></li>
				<li><span class="chx off">Nie pokazuj głównej okna po uruchomieniu systemu</span></li>
			
				<li><span class="ui">Uruchamianie razem z systemem (autostart)</span>
					<ul>
						<li><span class="chx off">Po uruchomieniu pytaj o profil</span></li>
						<li><span class="radoff">Nie uruchamiaj</span></li>
						<li><span class="radoff">Zawsze uruchamiaj</span></li>
						<li><span class="radoff">Tylko gdy sam nie zamknę</span></li>
					</ul>
				</li>			
			</ul>
			<h5>Prosty</h5>
			<p>Bez zmian</p>
			<h5>Normalny</h5>
			<ul>
				<li><span class="ui">Uruchamianie razem z systemem (autostart)</span></li>
				<li>Poniższe ustawienia dotyczą:
					<ul>
						<li>Dowolnej kopii programu</li>
						<li>Aktualnej kopii programu</li>
						<li>Aktualnie wybranego profilu</li>
					</ul>
				</li>
			</ul>
			<h5>Zaawansowany</h5>
			<ul>
				<li><span class="but">Usuń wszystkie wpisy w autostarcie</span></li>
			</ul>
			<h5>Pro</h5>
				<ul>
					<li>Bez zmian</li>
				</ul>
		</dd>
	</dl> 
	
		
	<dl>
		<dt>Połączenie</dt>
		<dd>
			<h5>Początkujący</h5>
			<ul>
				<li><span class="chx off">Łączę się z internetem przy użyciu modemu</span></li>
				<li><span class="chx off def">Łącz automatycznie</span></li>
				<li><span class="chx off">Automatycznie wznawiaj zerwane połączenie</span></li>
				<li><span class="slider">Limit czasu na zestawienie połączenia (timeout). [60]</span></li>
				<li><span class="slider">Przerwa pomiędzy próbami połączeń. [60]</span></li>
			</ul>
			<h5>Prosty</h5>
			<ul>
				<li>Bez zmian</li>
			</ul>			
			<h5>Normalny</h5>
			<ul>
				<li>Bez zmian</li>
			</ul>
			<h5>Zaawansowany</h5>
			<ul>
				<li>Bez zmian</li>
			</ul>
			<h5>Pro</h5>
			<ul>
				<li>Bez zmian</li>
			</ul>
		</dd>
	</dl>
	
	<a href="sql_levels-options.txt">Więcej w postaci niesformatowanego pliku <span class="file">.txt</span></a>.
	
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