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
  <h2>Statusy</h2>
  <h5>Wytłumaczenie poszczególnych stanów w sieci</h5>
  
  <ul class="index">
  <li><a href="#on">Dostępny</a></li>
	<li><a href="#ffc">Pogadam</a></li>
	<li><a href="#brb">Zaraz wracam</a></li>
	<li><a href="#xa">Nieosiągalny</a></li>
	<li><a href="#dnd">Nie przeszkadzać</a></li>
	<li><a href="#inv">Ukryty</a></li>
	<li><a href="#off">Niedostępny</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 21:28 2005-07-03</h6>
  
  <p>Statusy to podstawowa rzecz w każdym komunikatorze. Każda sieć udostępnia swoje własne statusy, lecz uogólniając są one zawsze prawie takie same. Z reguły Jabber ma 7 statusów, co wydaje się początkowo oszałamiającą liczbą jak dla użytkowników innych sieci. Osoby korzystające z Tlen'a wiedzą, że Tlen ma także 7 statusów, a to dlatego, że Tlen to taki okrojony Jabber właśnie. Gadu-Gadu jest dosyć ubogie i ma tylko cztery.</p>
	
	<p>Dodatkowo artykuł ten ma wyjaśnić różnice między statusami i skłonić użytkowników do poprawnego ich używania - po to powstały różne statusy, aby zapewnić wybór. Do prostego zmieniania statusów służy wtyczka <a href="plug_kzmieniacz.php">kZmieniacz</a>.</p>
  

  <h3 id="on">Online</h3>
	<img src="pic/status/ion.png" alt="" class="left" />
  <p>Użytkownik jest online i zwykle odpowie na wiadomości.</p>
	
	<h3 id="ffc">Pogadam</h3>
	<img src="pic/status/iffc.png" alt="" class="left" />
  <p>Pełna dostępność, komunikat „nudzę się", lub informacja dla wyszukujących kontakty, że chcemy porozmawiać. Status ten jest oznaczany tak samo jak <span class="status">Online</span> przy filtrowaniu listy. Czasem stosuje się w stosunku do niego skrót FFC (Free For Chat). Statusu tego nie ma w sieci Gadu-Gadu. Na niej ustawiany jest <span class="status">Dostępny</span>.</p>
	
	<h3 id="brb">Zaraz wracam</h3>
	<img src="pic/status/ibrb.png" alt="" class="left" />
  <p>Symbolizuje szybkie „zniknięcia” sprzed monitora. Jest dobrym wyborem gdy odchodzimy na chwilę sprzed komputera.</p>
	
	<h3 id="xa">Nieosiągalny</h3>
	<img src="pic/status/ixa.png" alt="" class="left" />
  <p>W sieci Tlen <span class="status">Wrócę później</span>. Status ten włączany jest przez komunikator po <a href="status.php#autoaway">określonym czasie</a>, lub gdy sami go włączymy. Świadczy o braku naszej obecności przed monitorem na dłuższy czas. Czasem stosuje się w stosunku do niego skrót XA (eXtended Away) lub N/A (Not Available). Jest dobrym wyborem gdy wychodzimy z domu, idziemy na film, a komputer jest włączony. Statusu tego nie ma w sieci Gadu-Gadu. Na niej ustawiany jest <span class="status">Zaraz wracam</span>.</p>
	
	<h3 id="dnd">Nie przeszkadzać</h3>
	<img src="pic/status/idnd.png" alt="" class="left" />
  <p>Status, który świadczy o tym, że jesteśmy podpięci do sieci, lecz nie chcemy, żeby nam ktoś przeszkadzał. W przypadku osób poważnych na liście kontaktów sposób działa. Czasem stosuje się w stosunku do niego skrót DND (Do Not Disturb). Statusu tego nie ma w sieci Gadu-Gadu. Na niej ustawiany jest <span class="status">Zaraz wracam</span>.</p>
	
	<h3 id="inv">Ukryty</h3>
	<img src="pic/status/iinv.png" alt="" class="left" />
  <p>Inaczej nazywany <span class="status">Niewidocznym</span>. Użytkownicy widzą nas tak samo jak gdy mamy status <span class="status">Niedostępny</span>, lecz możliwa jest konwersacja. Wiele komunikatorów wyłapuje zmianę statusu opisowego, więc aby pozostać niezinwigilowanym należy zostawić tą opcję w spokoju.</p>

	<p>Niezaktualizowane oprogramowanie JabberD2 serwera Jabbera, nie pozwala na połączenie się z siecią na Ukrytym. Zależy wszystko od tego, którego serwera Jabbera używamy.</p>
	
	<h3 id="off">Niedostępny</h3>
	<img src="pic/status/ioff.png" alt="" class="left" />
  <p>Gdy nie mamy połączenia z serwerem. Oczywiście nie otrzymujemy wiadomości, ani nie możemy ich wysyłać. Osoby połączone zobaczą ikonę niedostępności i status opisowy, gdy jakiś mieliśmy w momencie wylogowywania się z serwera. Wiadomości wysyłane przez nas podczas braku połączenia są zapisywane w kolejce (można je zobaczyć w <a href="history.php">Historii</a> pod pozycją <span class="list">Kolejka</span>) i wysyłane, jak tylko się połączymy.</p>
		
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