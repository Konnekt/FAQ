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
  <h2>kZmieniacz</h2>
  <h5>zmiana statusu i opisu na wszystkich sieciach</h5>
  
  <ul class="index">
  <li><a href="#install">Instalacja</a></li>
	<li><a href="#start">Start</a></li>
	<li><a href="#traymenu">Menu kontekstowe</a></li>
	<li><a href="#desc">Status opisowy</a></li>
	<li><a href="#winset">Okno ustawiania statusu</a></li>
	<li><a href="#delimit">Limit znaków</a></li>
	<li><a href="#ntoolbar">Pasek sieci</a></li>
	<li><a href="#mtoolbar">Okno główne</a></li>
	<li><a href="#chtoolbar">Okno rozmowy</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 21:36 23.06.2005</h6>
  
  <p>Wtyczka ta pozwala w łatwy sposób zmieniać status na jednej lub, jeśli korzystamy, wielu sieciach. Zmieniany jest status i status opisowy, jeśli tego chcemy. Do tego wtyczka udostępnia bardzo dużą możliwość zmiany interfejsu - położenia opcji zmieniania statusu, w zależności od preferencji użytkownika.</p>
  
  <h3 id="install">Instalacja</h3>
  <p>Wtyczkę można <a href="http://www.kplugins.net/downloads.kzmieniacz.xml">ściągnąć z serwisu kplugins.net</a>. Potem należy ją <a href="plugins.php">zainstalować</a>.</p>
  
  <h3 id="start">Start</h3>
	<img src="pic/plug_kzmieniacz/screen_a.png" alt="" class="left" />
  <p>Na początku zauważymy dodatkowy pasek narzędziowy w oknie główym Konnekta. Jeśli się nam nie podoba - spokojnie. Będziemy w stanie to zmienić, ale wszystko po kolei. Wejdź w <span class="tool">Ustawienia</span>, wybierz z menu <span class="menu">Ustawienia</span>. Odnajdź na liście po lewej pozycję <span class="list">Wtyczki</span>, rozwiń ją i wybierz <span class="list">kZmieniacz</span>.</p>
  
  <h3 id="config">Ustawienia</h3>
	<img src="pic/plug_kzmieniacz/screen_b.png" alt="" class="left" />
  <p>Od tego jak ustawimy opcje wtyczki będzie zależało komfortowe jej używanie. W panelu <span class="ui">Ustawienia</span> masz do dyspozycji wiele opcji zmieniających umiejscowienie "zmieniacza" oraz zachowanie wtyczki. Wszystkie je poniżej wytłumaczymy.</p>
  
  <h3 id="traymenu">Menu kontekstowe</h3>
	<img src="pic/plug_kzmieniacz/screen_c.png" alt="" class="left" />
  <p>Pierwsza opcja - <span class="chx on">Zmiana statusu wszystkich sieci w menu tray</span> powoduje dodanie w menu kontekstowym programu (które rozwija się po kliknięciu prawym klawiszem myszy na ikonę Konnekta w zasobniku systemowym) dodatkowych pozycji. Po kliknięciu na dowolną z nich, na wszystkich sieciach (na przykład Gadu-Gadu i Tlen jeśli takie mamy) zmienimy status na właśnie ten.</p>
	<p>Istnieją wyjątki w tym procesie, wytłumaczone są one w opisie <a href="status.php">statusów i statusów opisowych</a>. Chcemy jeszcze dodać, że <a href="plug_kstyle.php">ikonki</a> w menu u Was mogą się różnić od naszych.</p>
  
  <h3 id="desc">Status opisowy</h3>
	<img src="pic/plug_kzmieniacz/screen_d.png" alt="" class="left" />
	<img src="pic/plug_kzmieniacz/screen_e.png" alt="" class="right" />
  <p>Jeśli zaznaczymy do tego opcję <span class="chx on">+ zmiana opisu</span>, w menu kontekstowym pojawi się pozycja <span class="menu">Opis</span>. Jeśli wyłączymy poprzednią opcję i włączymy tą, zaskutkuje to przesunięciem się pozycji menu do głównej kolumny.</p>
	
	<h3 id="winset">Okno ustawiania statusu</h3>
	<img src="pic/plug_kzmieniacz/screen_f.png" alt="" class="left" />
	<p>Po kliknięciu na pozycję <span class="menu">Opis</span> pokaże się okno dialogowe z wieloma funkcjami, które warto wytłumaczyć.</p>
	
	<p>Na samej górze mamy możliwość zmiany statusu, jak wcześniej z menu kontekstowego. Jednak co wyróżnia ten sposób wybierania statusu, jest możliwość ustawienia statusu opisowego, w polu poniżej ikon statusów.</p>
	
	<p>Statusy opisowe mogą mieć wiele linijek - na wszystkich sieciach zaskutkuje to stworzeniem znaku nowej linii i odpowiednim wyglądem. Wpisane statusy opisowe są zapamiętywane po kliknęciu <span class="but">OK</span>. Możesz wybrać poprzednie 20 opisów z listy rozwijalnej nad polem opisu.</p>
	
	<p>Na dole są jeszcze pola wyboru - <span class="chx on">status</span> oraz <span class="chx on">opis</span>. Zaznaczenie ich wpływa na to, co zmieniamy po kliknięciu przycisku <span class="but">OK</span>. W przypadku odznaczenia pola <span class="chx off">opis</span> i połączenia się z sieciami na statusie Niewidoczny, nie zostajemy wykryci przez innego Konnekta, które normalnie oznacza nas ikoną aktywności, po zmianie opisu lub statusu. Warto to zapamiętać. :)</p>
	
	<h3 id="delimit">Limit znaków</h3>
	<img src="pic/plug_kzmieniacz/screen_g.png" alt="" class="left" />
	<p>Jak wiemy, sieć Gadu-Gadu ma limit znaków w statusie opisowym. kZmieniacz powiadamia Cię o tym gdy zaczniesz wpisywać znaki powyżej 70 - gdyż taki jest limit.</p>
	
	<h4 id="ellipsis">Wielokropek</h4>
	<img src="pic/plug_kzmieniacz/screen_l.png" alt="" class="right" />
	<p>kZmieniacz normalnie dodaje znak wielokropka do opisu na sieci Gadu-Gadu, który jest za długi, aby się zmieścić. Jeśli sobie tego nie życzymy, wystarczy zaznaczyć opcję <span class="chx on">Nie dodawaj "..." do długich opsów na GG</span>.</p>
	
	<h3 id="ntoolbar">Pasek sieci</h3>
	<img src="pic/plug_kzmieniacz/screen_h.png" alt="" class="left" />
	<p>Wracając do ustawień - po zaznaczeniu opcji <span class="chx on">Zmiana statusu wszystkich sieci na pasku sieci</span> do głównego paska narzędziowego z ikonami sieci zostaje dodana ikona kZmieniacza i stamtąd dostępne jest menu kontekstowe do zmiany statusów i opisu.</p>
	
	<h3 id="mtoolbar">Okno główne</h3>
	<img src="pic/plug_kzmieniacz/screen_i.png" alt="" class="left" />
	<p>Opcja <span class="chx on">Zmiana statusu wszystkich sieci na osobnym toolbarze</span> dodaje ten pasek wyboru, który pojawił się podczas pierwszego startu wtyczki. Możemy go w ten sposób wyłączyć</p>
	
	<h4 id="butok">Przycisk zatwierdzający</h4>
	<img src="pic/plug_kzmieniacz/screen_j.png" alt="" class="left" />
	<p>Można też włączyć przycisk akceptujący wpisany status opisowy. Wystaczy zaznaczyć opcję <span class="chx on">Przycisk OK</span>.</p>
	
	<h3 id="chtoolbar">Okno rozmowy</h3>
	<img src="pic/plug_kzmieniacz/screen_k.png" alt="" class="left" />
	<p>Opcja <span class="chx on">Zmiana statusu wszystkich sieci w oknie rozmowy</span> powoduje dodanie przycisku do paska narzędziowego w oknie rozmowy. Kliknięcie na nową ikonę skutkuje pojawieniem się okienka zmiany statusu i opisu, opisanego wcześniej.</p>
		
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