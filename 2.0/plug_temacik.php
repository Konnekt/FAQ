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
  <h2>temaciK</h2>
  <h5>wysyłanie wiadomości z tytułem</h5>
  
  <ul class="index">
    <li><a href="#install">Instalacja</a></li>
	<li><a href="#start">Start</a></li>
	<li><a href="#plugwindow">Okno wtyczki</a></li>
	<li><a href="#topic">Temat wiadomości</a></li>
	<li><a href="#toolbar">Pasek narzędziowy</a></li>
	<li><a href="#entryvalue">Okna pomocnicze</a></li>
	<li><a href="#botpanel">Dolny panel</a></li>
	<li><a href="#jogger">Jogger</a></li>
	<li><a href="#config">Konfiguracja</a></li>
	<li><a href="#options">Opcje</a></li>
	<li><a href="#usertags">Tagi użytkownika</a></li>
	<li><a href="#shortcuts">Skróty klawiaturowe</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 15:14 2005-03-19</h6>
  
  <p>Wtyczka ta pozwala wysyłać przez sieć Jabber wiadomości z tematem. Znacznie też ułatwia komunikację z internetowym blogiem prowadzonym przez Jabber'a - <a href="http://jogger.pl" class="ex">Jogger'em</a>. Wtyczka jest bardzo przejrzysta, ale ma dosyć dużo opcji, które możecie chcieć mieć przybliżone.</p>

  <h3 id="install">Instalacja</h3>
  <p>Jak w każdej wtyczce, nie dołączanej do Konnekt'a od razu, należy ją <a href="http://www.kplugins.net/downloads.temacik.xml">ściągnąć</a> i <a href="plugins.php">zainstalować</a>. Następnie można już przejść do konfiguracji i używania. <strong>Uwaga!</strong> Zaznacza się, że opis i zrzuty zostały wykonane na <a href="http://beta.olorin.info/">wersji beta 0.3.0.0</a>.</p>

  <h3 id="start">Start</h3>
  <img src="pic/plug_temacik/screen_a.png" alt="" class="left" />
  <p>Po zainstalowaniu możecie od razu przejść do używania. Aby wysłać wiadomość z tematem do danego użytkownika kliknij jego nazwę na liście kontaktów i wybierz z <span class="menu def">Wyślij wiadomość</span> opcję <span class="menu">Wiadomość (z tematem)</span>.</p>

  <h3 id="plugwindow">Okno wtyczki</h3>
  <img src="pic/plug_temacik/screen_b.png" alt="" class="left" />
  <p>Pojawi się okno. W polu oznaczonym numerem <span class="input">1</span> wpisujesz temat wiadomości, w polu <span class="input">2</span> jej treść. Potem naciskasz <span class="but">Wyślij</span></p>

  <h3 id="topic">Temat wiadomości</h3>
  <img src="pic/plug_temacik/screen_c.png" alt="" class="left" />
  <p>Twój adresat odbierze wiadomość w zwyczajnym okienku, a temat pojawi się zwykle obok godziny i jego nick'a jak to zostało przestawione na obrazku. Ty nie zobaczysz tego tematu, lecz rozmówca tak.</p>

  <h3 id="toolbar">Pasek narzędziowy</h3>
  <img src="pic/plug_temacik/screen_d.png" alt="" class="left" />
  <p>Lecz wróćmy jeszcze do okna temaciKa. Pomiędzy polem tematu a wiadomości ma on pasek narzędziowy. Poszczególne ikonki są opcjami, które wklejają odpowieni kod HTML do pola wiadomości. Przyciski zapamiętują stan, więc można kliknąc opcję, wpisać tekst i zamknąć ją poprzez ponowne naciśnięcie. Po zaznaczeniu fragmentu tekstu w polu i wciśnięciu danego przycisku, tekst zostaje objęty znacznikami, więc nie należy się martwić o skasowanie / poprawki.</p>
  
	<ol>
		<li><span class="tool">Bold</span> - wstawia znacznik <code>&lt;b&gt;</code>, który wytłuszcza tekst.</li>
		<li><span class="tool">Kursywa</span> - wstawia znacznik <code>&lt;i&gt;</code>, który pochyla tekst.</li><li><span class="tool">Podkreślenie</span> (<kbd>Ctrl</kbd> + <kbd>U</kbd>) - wstawia znacznik <code>&lt;u&gt;</code>, który podkreśla dany tekst.</li>
		<li> <span class="tool">URL</span> - wstawia znaczniki <code>&lt;a href=""&gt;&lt;/a&gt;</code> po uprzednim monicie (nowe okienko) o adres, który zostanie dodany do <code>>href=""</code>.</li>
		<li><span class="tool">Obraz</span> - wstawia znacznik <code>&lt;img src="" alt="" /&gt;</code> po uprzednim monicie (nowe okienko) o adres obrazka, który ma zostać dodany do <code>src=""</code>. Wartość <span class="option">alt</span> należy uzupełnić, aby umożliwić zrozumienie przekazu gdy obrazek nie będzie mógł być wyświetlony. <span class="tool">Uwaga!</span> Nie jest to opis obrazka, który się pojawia po najechaniu myszką. W takim przypadku dodajemy <code>title=""</code>.</li>
		<li><span class="tool">Lista</span> - wstawia znaczniki <code>&lt;ol&gt;</code> lub <code>&lt;ul&gt;</code>, w zależności czy wybraliśmy listę uprządkowaną czy nie. Kolejne pozycje (<code>&lt;li&gt;&lt;/li&gt;</code>) są dodawane przez podawanie ich w okienkach. Naciśnij <kbd>ESC</kbd> jeśli chcesz przestać dodawać pozycje.</li>
		<li><span class="tool">Cytat</span> - wstawia znacznik <code>&lt;blockquote&gt;</code></li>
		<li><span class="tool">PRE</span> - wstawia znacznik <code>&lt;pre&gt;</code> - preformatowanie, wszystkie spacje w środku nie są pomijane, tekst o stałej szerokości znaku.</li>
		<li><span class="tool">Kod</span> - wstawia znacznik <code>&lt;code&gt;</code> - tekst o stałej szerokości znaku (kod).</li>
		<li><span class="tool">Paragraf</span> - wstawia znacznik <code>&lt;p&gt;</code> - paragraf</li>
	</ol>

  <h3 id="entryvalue">Okna pomocnicze</h3>
  <img src="pic/plug_temacik/screen_e.png" alt="" class="left" />
  <p>Okienka, które proszą o podanie wartości wyglądają mniej więcej tak - w przypadku <span class="tool">URL</span>, <span class="tool">Obrazu</span> oraz <span class="tool">Listy</span>. Pierwsze dwa zapamiętują, co było podawane, aby ułatwić późniejszą pracę.</p>

  <h3 id="botpanel">Dolny panel</h3>
  <img src="pic/plug_temacik/screen_f.png" alt="" class="left" />
  <p>Dolny pasek opcji pozwala na:</p>
  
	<ul>
		<li><span class="tool">HTML</span> - wysyłanie wiadomości w HTML'u</li>
		<li><span class="tool">nl2br</span> (new line to break) - wszystkie entery wciśnięte w polu wiadmości zostaną zamienione na <code>&lt;br /&gt;</code>.</li>
		<li><span class="tool">url2a</span> (url to anchor) - zamienia wszystkie ciągi tekstowe które z założenia są hiperłączami (http://, www) na <code>&lt;a href=""&gt;link&lt;/a&gt;</code></li>
	</ul>
		
	<p>Ostatnie dwa przyciski chyba są jasne - <span class="but">Anuluj</span> zamyka okno, a <span class="but">Wyślij</span> wysyła wiadomość.</p>

  <h3 id="jogger">Jogger</h3>
  <img src="pic/plug_temacik/screen_g.png" alt="" class="left" />
  <p>Wszystkie te opcje są bardzo przydatne podczas wysyłania wiadomości do <a href="http://jogger.pl" class="ex">Jogger'a</a>. Po kliknięciu na bota Jogger'a na liście kontaktów automatycznie otwiera się okienko pisania wiadomości. Okno to dodatkowo posiada wybór poziomu wpisu (opcja związana z prywatnością wpisów, więcej w <a href="http://jogger.pl/info.php?id=instructions#TOC_20" class="ex">FAQ</a> Jogger'a) na dole po lewej. <strong>Uwaga!</strong> Do Jogger'a wysyłaj wiadomości z wyłączonym HTML'em - sam przetworzy znaczniki na kod. Inaczej wiadomość nie dotrze.</p>

  <h3 id="config">Konfiguracja</h3>
  <img src="pic/plug_temacik/screen_h.png" alt="" class="left" />
  <p>Aby przejść do ustawień wtyczki, kliknij na <span class="config">Ustawienia</span>. W oknie wybierz z listy po lewej <span class="list">Użytkownik</span>, potem <span class="list">Jabber</span> a na końcu kliknij na <span class="list">Wiadomość z tematem</span>.</p>

  <h3 id="options">Opcje</h3>
  <p>Opcje tam wyszczególnione pozwalają na dostosowanie okienka wtyczki.</p>
  
  <ul>
	<li>Domyślne wartości - opcja <span class="ui">Domyślny poziom wpisów</span> ustawia globalny poziom wiadomości do Jogger'a (<a href="#krok8">krok 8</a>)</li>
	<li><img src="pic/plug_temacik/screen_i.png" alt="" class="left" />Dostępne są także opcje na <a href="#botpanel">dolnym panelu</a>.</li>
	<li style="clear: left"><span class="chx on">Automagicznie zamykaj okno rozmowy</span> - po kliknięciu <span class="but">Wyślij</span> okno wiadomości z tematem jest zamykane.</li>
  </ul>

  <h3 id="usertags">Tagi użytkownika</h3>
  <img src="pic/plug_temacik/screen_j.png" alt="" class="left" />
  <p>Można zdefiniować także własne tagi:</p>
  
  <ul>
	<li><span class="ui def">Nazwa</span> - Nazwa, która będzie identyfikatorem.</li>
	<li><span class="ui def">Otwierający</span> - Pierwszy z tagów, otwierający (np.: <code>&lt;ins datetime=""&gt;</code>)</li>
	<li><span class="ui def">Zamykający</span> - Ostatni, zamykający tag (np.: <code>&lt;/ins&gt;</code>)</li>
  </ul>

  <h3 id="shortcuts">Skróty klawiaturowe</h3>
  <img src="pic/plug_temacik/screen_k.png" alt="" class="left" />
  <p>W oknie temaciKa tagi użytkownika wyglądają one tak  i mają swoje skróty klawiaturowe (<kbd>Ctrl</kbd> + <kbd>1</kbd>, <kbd>2</kbd> ..)</p>
  
  <table cellspacing="0" style="width: 50%; ">
  <thead>
  <tr>
	<th>Opcja</th>
	<th>Skrót</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td><span class="tool">Bold</span></td>
    <td><kbd>Ctrl</kbd> + <kbd>B</kbd></td>
  </tr>
  <tr>
    <td><span class="tool">Kursywa</span></td>
    <td><kbd>Ctrl</kbd> + <kbd>I</kbd></td>
  </tr>
  <tr>
    <td><span class="tool">URL</span></td>
    <td><kbd>Ctrl</kbd> + <kbd>H</kbd></td>
  </tr>
  <tr>
    <td><span class="tool">Obraz</span></td>
    <td><kbd>Ctrl</kbd> + <kbd>O</kbd></td>
  </tr>
  <tr>
    <td><span class="tool">Lista</span></td>
    <td><kbd>Ctrl</kbd> + <kbd>L</kbd></td>
  </tr>
  <tr>
    <td><span class="tool">Cytat</span></td>
    <td><kbd>Ctrl</kbd> + <kbd>Q</kbd></td>
  </tr>
  <tr>
    <td><span class="tool">PRE</span></td>
    <td><kbd>Ctrl</kbd> + <kbd>J</kbd></td>
  </tr>
  <tr>
    <td><span class="tool">Kod</span></td>
    <td><kbd>Ctrl</kbd> + <kbd>K</kbd></td>
  </tr>
  <tr>
    <td><span class="tool">Paragraf</span></td>
    <td><kbd>Ctrl</kbd> + <kbd>P</kbd></td>
  </tr>
  </tbody>
</table>
  
  
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