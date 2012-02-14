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
  <h2>Kontakty</h2>
  <h5>dodawanie kontaktów i edycja danych kontaktowych</h5>
  
  <ul class="index">
    <li><a href="#start">Zaczynamy</a></li>
	<li><a href="#net">Sieć kontaktu</a>
		<ul><li><a href="#gadugadu">Gadu-Gadu</a></li>
		<li><a href="#jabber">Jabber</a></li>
		<li><a href="#tlen">Tlen</a></li>
		<li><a href="#lan">LAN - sieć lokalna</a></li></ul>
	</li>
	<li><a href="#edit">Edytowanie danych</a></li>
	<li><a href="#screenname">Nazwa ekranowa</a></li>
	<li><a href="#group">Grupa kontaktów</a></li>
	<li><a href="#adddata">Dodatkowe dane</a></li>
	<li><a href="#personalize">Personalizacja opcji</a></li>
  </ul>

  <h6>Data ostatniej modyfikacji: 16:06 2005-05-20</h6>
  
  <p> W tym poradniku dowiecie się jak ręcznie dodać kontakt do listy oraz jak w prosty sposób edytować jego dane i ustawienia. Zapraszamy dalej.</p>
  
  <h3 id="start">Zaczynamy</h3>
  <img src="pic/contacts/screen_a.png" alt="" class="left" />
  <p>Aby dodać kontakt należy wybrać w oknie głównym przycisk <span class="mbut">Kontakty</span>, a następnie z menu wybrać <span class="menu">Dodaj kontakt</span>.</p>
  
  <h3 id="net">Sieć kontaktu</h3>
  <img src="pic/contacts/screen_b.png" alt="" class="left" />
  <p>Pojawi się okienko informacji o kontakcie. Aby można było uznać wpis za kontakt należy wybrać jego sieć. Sieć jest to najprościej mówiąc sposób w jaki będziemy się z kontaktem po rozumiewać. Sieci w naszym Konnekcie są dostępne, jeśli zainstalowano odpowiednie wtyczki. Standardowo w pełnej paczce możemy korzystać z sieci Gadu-Gadu, Jabber, Tlen, LAN. Możemy także dodać od razu Konferencję w sieci Gadu-Gadu, lecz o tym dalej.</p>
  
  <p>Dla każdej sieci należy wpisać unikalny identyfikator (<acronym lang="en-US" title="Unique Identifier">UID</acronym>) danego kontaktu. Jeśli go nie znamy, możemy zapytać znajomego bądź możemy <a class="todo" href="search.php">wyszukać</a> go w katalogu użytkowników, jeśli tam jest.</p>
  
  <h4 id="gadugadu">Gadu-Gadu</h4>
  <img src="pic/contacts/screen_c.png" alt="" class="left" />
  <p>Kontakty w sieci Gadu-Gadu mają identyfikator liczbowy. Przykład po lewej.</p>
  
  <h4 id="jabber">Jabber</h4>
  <img src="pic/contacts/screen_d.png" alt="" class="left" />
  <p>Kontakty Jabbera mają identyfikator składający się z nazwy użytkownika, znaku <span class="input">@</span> oraz następującej po nim, nazwie serwera z którego użytkownik korzysta. Są różne serwery, ich <a class="ex" href="http://www.jabberpl.org/Serwery/Spis">lista</a> jest dostępna w polskim serwisie Jabbera.</p>
  
  
  <h4 id="tlen">Tlen</h4>
  <img src="pic/contacts/screen_e.png" alt="" class="left" />
  <p>Kontakty w sieci Tlen wyglądają podobnie jak kontakty Jabbera, lecz serwer zawsze jest ten sam - <span class="input">tlen.pl</span></p>
  
  
  <h4 id="lan">LAN - sieć lokalna</h4>
  <img src="pic/contacts/screen_f.png" alt="" class="left" />
  <p>Kontakty dla sieci LAN są po prostu nazwami komputera w sieci lokalnej, z którą chcemy się łączyć. Identyfikator składa się z podwójnego slasha <span class="path">//</span> i nazwy komputera.</p>
 
  <h3 id="edit">Edytowanie danych</h3>
  <img src="pic/contacts/screen_h.png" alt="" class="left" />
  <p>Następnie powinniśmy wpisać podstawowe dane kontaktu. Służą do tego pola w panelu <span class="config">Dane</span>. Możemy wpisać <span class="option">Imię</span>, dodatkowe <span class="option">Imiona</span>, <span class="option">Nazwisko</span> oraz <span class="option">Ksywkę</span>.</p>
  
  
  <h3 id="screenname">Nazwa ekranowa</h3>
  <img src="pic/contacts/screen_i.png" alt="" class="left" />
  <p>Następnie w panelu <span class="config">Wyświetl jako</span> możemy wybrać sposób w jaki kontakt będzie prezentowany na liście kontaktów. Do wyboru jest pare możliwości, utworzonych na podstawie wpisanych danych.</p>
  
  <img src="pic/contacts/screen_j.png" alt="" class="right" />
  <p>Lecz możemy także wpisać to co uważamy za słuszne w to pole.</p>
  
  <h3 id="group">Grupa kontaktów</h3>
  <img src="pic/contacts/screen_k.png" alt="" class="left" />
  <p>Kolejne pole w panelu <span class="ui">Wyświetl jako</span>, na prawo od wybierania nazwy ekranowej, umożliwia nam przyporządkowanie danego kontaktu do <a href="groups.php">zakładki</a>, jeśli jakieś mamy. Pozycja tam wybrana zależy od tego którą zakładkę mieliśmy aktywną podczas klikania na <span class="menu">Dodaj kontakt</span>.</p>
  
  <h3 id="adddata">Dodatkowe dane</h3>
  <img src="pic/contacts/screen_l.png" alt="" class="right" />
  <p>W liście po lewej, nadal w tym samym oknie, możemy edytować więcej informacji o kontakcie. Służą do tego karty <span class="list">Kontakt</span>, <span class="list">Praca</span> i <span class="list">Więcej</span>.</p>
  
  <img src="pic/contacts/screen_m.png" alt="" class="left" />
  <p>Możemy tam wpisać dane dotyczące innych sposobów kontaktowania się z tą osobą, wypełnić dane dotyczące jego firmy. Opcji jest dużo, powinny nam one starczyć.</p>
  
  <img src="pic/contacts/screen_n.png" alt="" class="right" />
  <p>W karcie <span class="list">Więcej</span> możemy wybrać płeć kontaktu, co jest wyjściem przy niepoprawnej formie powiadomienia kNotify. Konnekt sam próbuje zgadnąć (na podstawie końcówki nazwy ekranowej) jaką płeć ma kontakt, lecz czasem jest to błędne "rozumowanie".</p>
  
  <p>Możemy tam także wpisać datę urodzin osoby, z czego korzysta wtyczka <a class="todo" href="plug_kbirth.php">kBirth</a>.</p>
  
  <h3 id="personalize">Personalizacja opcji</h3>
  <img src="pic/contacts/screen_o.png" alt="" class="left" />
  <p>W liście po lewej są także dodatkowe pozycje. Ich ilość zależy od zainstalowanych wtyczek. Służą one do ustawiania spersonalizowanych opcji dotyczących kontaktu.</p>
  
  	<p>Możemy teraz ustawić opcje tylko dla tej osoby. I tak - wyłączyć <span class="chx off">Zmiany statusu kontaktu</span> dla dowcipnisia-melomana w K.Notify, w kIEview po kliknięciu <span class="chx on">Indywidualne ustawienia emotikon dla tego kontaktu</span> można odznaczyć <span class="chx off">Wyświetlaj emotikony dla tego kontaktu</span> i znika problem masowej ilości emotek, w jednym zdaniu, od słodkiej koleżanki. Więcej opcji i dostosowań opisanych jest niżej:</p>
  
  <ul>
	<li><strong>kIEview</strong> - indywidualne ustawienia styli dla tego kontaktu, indywidualne ustawienia emotikon dla tego kontaktu</li>
    <li><strong>K.Notify</strong> - zmiany statusu kontaktu, pokazywanie statusu opisowego, odebranych wiadomości, wyświetlanie początku wiadomości.</li>
    <li><strong>Dźwięki</strong> - cały lub pojedyńcze dzwięki dla kontaktu</li>
    <li><strong>kMigacz</strong> - tak, nie, domyślnie</li>
    <li><strong>kTranfer</strong> - przyjmowanie wszystkiego od tego kontaktu, indywidualna ścieżka składowania plików</li>
	<li><strong>Olew.K</strong> - zapisywanie do historii, informacja o wiadomościach, odpowiedź wysyłana do ignorowanego</li>
	<li><strong>kStatusLog</strong> - zapisywanie albo nie</li>
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