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
  <h2>Autoryzacja użytkowników</h2>
  <h5>czyli jak odbierać statusy znajomych.</h5>
  
  <ul class="index">
    <li><a href="#start">Zaczynamy</a></li>
	<li><a href="#send">Wysyłanie statusu</a></li>
	<li><a href="#ask">Proszenie o status</a></li>
	<li><a href="#confirm">Potwierdzenie autoryzacji</a></li>
	<li><a href="#config">Konfiguracja</a></li>
	<li><a href="#options">Opcje</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 16:45 2005-02-17</h6>
  
  <p>Użytkownicy Tlena zapewnie wiedzą, że żeby poznać status i status opisowy kontaktu należy go obustronnie subskrybować. W Konnekcie istnieje też taki wymóg dla kontaktów Tlena i Jabbera. Lecz wielu początkujących użytkowników Gadu-Gadu nie ma pojęcia o tej opcji. Jest to, ogólnie mówiąc, zgoda otrzymywanie informacji o Twojej obecności. Bez tego nikt nie może sprawdzić Twojego stanu. Dlatego też powstał ten poradnik:</p>
  
  <h3 id="start">Zaczynamy</h3>
  <img src="pic/auth/screen_a.png" alt="" class="left" />
  <p>Zakładamy, że <a href="contacts.php">dodałeś</a> już kontakt Jabbera/Tlena. Kliknij na niego prawym klawiszem myszy i zlokalizuj opcję <span class="menu">Status</span> lub <span class="menu">Subskrypcja</span> jeśli chodzi o Tlen. Wybierz z menu <span class="menu opt">Wysyłaj status</span>.</p>
  
  <h3 id="send">Wysyłanie statusu</h3>
  <img src="pic/auth/screen_b.png" alt="" class="left" />
  <p>Zauważ, że ikonka kontaktu się zmieniła. W ten sposób Konnekt powiadamia Cię, że autoryzujesz dany kontakt czy zgadzasz się, żebyś widział jego status.</p>
  
  <h3 id="ask">Proszenie o status</h3>
  <img src="pic/auth/screen_c.png" alt="" class="left" />
  <p>Jeśli kontakt nie autoryzował Cię automatycznie (jego program nie ma takiej opcji, lub jest wyłączona), musisz poprosić o autoryzację. Kliknij więc znowu w <span class="menu">Status</span> a potem <span class="menu opt">Pobieraj status</span>.</p>
  
  <h3 id="confirm">Potwierdzenie autoryzacji</h3>
  <img src="pic/auth/screen_d.png" alt="" class="left" />
  <p>Jeśli wszystko przebiegnie okej, czyli kontakt siedzi przy komputerze i autoryzował Cię, wybierając pobieranie Twojego statusu, to zobaczysz przez <a href="plug_knotify.php">kNotify</a> odpowiednie powiadomienie. W podanym przykładzie <a class="todo" href="dict-enc.php">boty słownikowe</a> zautoryzowały Twój status.</p>
  
  <h3 id="config">Konfiguracja</h3>
  <img src="pic/auth/screen_e.png" alt="" class="left"/>
  <p>Na końcu polecimy ustawić parę opcji związnych z autoryzacją, żeby nie sprawiać problemów innym. Wejdź do <span class="menu">Ustawień</span>, w liście po lewej wybierz <span class="list">Jabber</span>.</p>
  
  <h3 id="options">Opcje</h3>
  <img src="pic/auth/screen_f.png" alt="" class="left"/>
  <p>Po prawej wyświetli się dużo opcji, część z nich już znasz, lecz nas interesuje panel <span class="ui">Autoryzacja</span>.</p>
  
  <ul>
	<li>Zalecamy odznaczyć opcję <span class="chx off">Automatycznie pytaj o autoryzację nowe kontakty</span>. Ma to związek z tym, że nie każdy kogo zagadniesz chce wysyłać Ci swój status - najpewniej nie zna Cię za dobrze i nie w smak mu na razie bliższa znajomość. Nawet jeśli masz dobrych znajomych na Jabberze / Tlenie możesz sam wydać polecenie autoryzacji, opisane wyżej.</li>
	<li>Drugą opcję - <span class="chx on">Automatycznie potwierdzaj autoryzację</span> zalecamy zostawić włączoną, jeśli nie masz nic przeciwko, żeby ludzie Cię widzieli. Jeśli natomiast wiesz, że dużo osób może Cię zaczepiać, wyłącz ją. Tylko przeszkadza.</li>
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