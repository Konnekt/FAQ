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
  <h2>Parametry</h2>
  <h5>uruchamianie Konnekta w różnych trybach</h5>
  
  <ul class="index">
	<li><a href="#about">Ogólne informacje</a></li>
	<li><a href="#offline">Uruchamianie offline</a></li>
	<li><a href="#restore">Przywracanie na wierzch</a></li>
	<li><a href="#profile">Wybór profilu</a></li>
	<li><a href="#plugins">Wybór wtyczek</a></li>
	<li><a href="#debug">Tryb developerski</a></li>
	<li><a href="#profiledir">Katalog profilu</a></li>
	<li><a href="#logpath">Katalog logów</a></li>
	<li><a href="#msg">Wiadomość</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 11:31 2005-06-19</h6>
  
  <p>Parametr jest to swego rodzaju przełącznik, dzięki któremu program, który z nim uruchamiamy, wie jak się ma zachować. Konnekt ma parę parametrów, które mogą okazać się przydatne.</p>
  
  <h3 id="about">Ogólne informacje</h3>
  
  <p>Uruchamianie programu z parametrem najlepiej przeprowadzić wpisując w <span class="tool">Start</span> -> <span class="menu">Uruchom...</span> pełną ścieżkę do programu, spację i parametr. Parametry są wylistowane poniżej. Należy pamiętać, że myślnik <code>-</code> też zalicza się do parametru.</p>
  
  <p>W przypadku Konnekta jest to <span class="folder"><a href="sql_folders.php#konnekt">%Konnekt%</a>\konnekt.exe -parametr</span>.</p>
	
	<h3 id="offline">Uruchamianie offline</h3>
  <p><code>-offline</code></p>
	<p>Jeśli mamy włączoną opcję <span class="chx on">Łącz automatycznie</span>, to Konnekt po włączeniu będzie ustawiał na sieciach nasz poprzedni status. Czasem jednak możemy chcieć włączyć Konnekta tylko, żeby sprawdzić czyjeś dane, wysłać SMS albo otworzyć historię. Wtedy można uruchomić program z tym parametrem. Działa w nowszych betach.</p>
	
  <h3 id="profile">Wybieranie profilu</h3>
	<img src="pic/school/winprofile.png" alt="" class="right" />
  <p><code>-profile</code></p>  
  <p>Jeśli pragniemy uruchomić Konnekt z innym profilem, bądź stworzyć nowy, wystarczy że skorzystamy z tego parametru. Pokaże się okno jak po prawej, w którym możemy wybrać jeden z dostępnych profili (i wpisać hasło, jeśli potrzebne) albo stworzyć nowy.</p>
	
	<p><code>-profile=Nazwa_profilu</code></p>  
	<p>Uruchomi Konnekt z włączonym profilem o podanej nazwie.</p>
	
	<h3 id="restore">Przywracanie na wierzch</h3>
	<p><code>-restore</code></p>
	<p>Jeżeli Konnekt jest już uruchomiony, przywraca jego okienko na wierzch. Można stosować razem z <a href="#profile">wyborem profilu</a>.</p>
  
  <h3 id="plugins">Wybór wtyczek</h3>
  
  <img src="pic/school/winplugins.png" alt="" class="right" />
  <p><code>-plugins</code></p>
  
  <p>Jeśli jakaś wtyczka przestała nam działać, powoduje zawieszenie się Konnekta i zamyka go, zanim zdążymy ją wyłączyć, należy uruchomić Konnekt z tym parametrem. Spowoduje to pokazanie się okna wyboru wtyczek, w którym możemy odznaczyć tą feralną (zwykle w komunikacie błędu generowanym przez Konnekta jest nazwa wtyczki).</p>
  
  <h3 id="debug">Tryb developerski</h3>
  
  <img src="pic/school/menudebug.png" alt="" class="right" />
  <p><code>-debug</code></p>
  <p>Parametr przydatny dla programistów wtyczek i twórców dodatków do Konnekta. Dodaje on dodatkowe submenu <span class="menu">DEV/DEBUG</span>. Najbardziej przydatną, z punktu widzenia zwykłego użytkownika, opcją jest <span class="menu">Lista ikon</span>. Okno, które się po jej kliknięciu otwiera, zawiera spis wszystkich ikon użytych w Konnekcie razem z ich wartościami <code>ID</code> i <code>iml</code> - spore ułatwienie podczas tworzenia pliku <span class="file">.xml</span> do zestawu <a href="plug_kstyle.php">ikon kStyle</a>.</p>
  
  <p><code>-nocatch</code></p>
  <p>Nie przechwytuje błędów krytycznych - przydatne dla developerów do debugowania</p>
	
	<p><code>-makeReport</code></p>
	<p>Generuje raport z błędów krytycznych (przydatne w razie problemów, bo zawiera trochę więcej informacji niż to co jest wysyłane na serwer. W nowszych betach Konnekta</p>
	
	<p><code>-debugall</code></p>
	<p>Loguje wszystkie komunikaty do i od API. W nowszych betach Konnekta</p>
	
	<p><code>-startDev</code></p>
	<p>Uruchamia Konnekta z otwartym okienkiem debugowania i włączonym logowaniem. W nowszych betach Konnekta</p>
  
  <h3 id="profiledir">Katalog profilu</h3>
  
  <img src="pic/school/winprofiledir.png" alt="" class="right" />
  <p><code>-profilesDir</code></p>
	<p>Wskaże katalog profili.</p>
	
	<p><code>-profilesDir=</code></p>
  <p>Pokaże nam okno z wyborem <a href="sql_folders.php#profile">katalogu dla profilu</a>.</p>
	
	<p><code>-profilesDir=c:\sciezka\do\profili</code></p>
	<p>Po znaku <code>=</code> można także wpisać własny katalog, gdzie będzie przechowywany profil - ustawi tam katalog profili.</p>
	
	<h3 id="logpath">Katalog logów</h3>
	<p><code>-logpath=c:\sciezka\do\logow</code></p>
	<p>Po znaku <code>=</code> trzeba wpisać katalog, gdzie będą przechowywane logi.</p>
	
  <h3 id="msg">Wiadomość</h3>
  <p><code> -cnt=sieć/UID[?wiadomość]</code>
  <p>Wyśle <code>wiadomość</code> przez <code>sieć</code> do kontaktu o identyfikatorze <code>UID</code>. Treść wiadomości (<code>[?wiadomość]</code> jest opcjonalna.</p>
  
  <p><code>-msg="wiadomość"</code>
  <p>Treść wiadomość może być także przekazana przez drugi parametr do pary z pierwszym.</p>
  
  
  <h3 id="config">Konfiguracja z pliku</h3>
  
  <p><code>-import=plik.xml</code>
  <p>Dzięki wtyczce <a href="plug_expimp.php">exPIMP</a> zaimportuje podany plik. Mogą to być ustawienia albo lista kontaktów.</p>
  
  
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
