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
  <h2>SMS</h2>
  <h5>Wysyłanie SMSów z Konnekta</h5>
  
  <ul class="index">
  <li><a href="#start">Start</a></li>
	<li><a href="#config">Ustawienia SMS</a></li>
	<li><a href="#lua">Pliki skryptów bramek</a></li>
	<li><a href="#gate">Wybranie bramek</a></li>
	<li><a href="#miastoplusa">Bramka MiastoPlusa</a></li>
	<li><a href="#info">Zakres numerów i liczba znaków</a></li>
	<li><a href="#loginpass">Dane rejestracyjne</a></li>
	<li><a href="#confirm">Potwierdzenie wysłania</a></li>
	<li><a href="#telnumb">Numer telefonu kontaktu</a></li>
	<li><a href="#smssend">Opcja "Wyślij SMS"</a></li>
	<li><a href="#winsms">Okno wysyłania SMSa</a></li>
	<li><a href="#smssent">Wysłanie SMS</a></li>
	<li><a href="#idea">Bramka Idea</a></li>
	<li><a href="#token">Token</a></li>
	<li><a href="#logs">Logi zdarzeń</a></li>
	<li><a href="#queue">Kolejka wiadomości</a></li>
	<li><a href="#configmore">Inne ustawienia</a></li>
  </ul>
  
  <h6>Data ostatniej modyfikacji: 19:44 3.07.2005</h6>
  
  <p>Konnekt dzięki wtyczce do SMS pozwala wysyłać krótkie wiadomości tekstowe do wszystkich sieci. Dodatkowo, dzięki temu, że obsługa poszczególnych operatorów i usług sprowadza się do pojedynczych skryptów o otwartym kodzie, każdy może korzystać, modyfikować i tworzyć te skrypty, które są mu potrzebne.</p>
	
	<p>W tym artykule przedstawimy obsługę wtyczki SMS na przykładzie dwóch bramek SMS. Pokażemy także jak ustawić odpowiednie opcje dla wtyczki. Oraz wreszcie jak wysyłać SMS z naszego ulubionego komunikatora. :)</p>
  

  <h3 id="start">Start</h3>
	<img src="pic/sms/screen_a.png" alt="" class="left" />
  <p>Aby ustawić wszystko co potrzebne, należy otworzyć Ustawienia (menu <span class="tool">Ustawienia</span>, pozycja <span class="menu">Ustawienia</span>) i przejść do elementu <span class="list">Wtyczki</span> -> <span class="list">SMS</span> w liście po lewej.</p>
	
	<h3 id="config">Ustawienia SMS</h3>
	<img src="pic/sms/screen_b.png" alt="" class="left" />
  <p>W oknie wypada wpisać swój podpis, dołączany do wysyłanego SMS. Zawsze możemy go zmienić w okienku wysyłania wiadomości, lecz na początku, automatycznie będzie się pojawiał wpisany tutaj. Uwaga. Jeśli dany skrypt do któregoś z operatorów nie udostępnia podpisu (przekonamy się o tym za chwilę testując jeden ze skryptów), nic nie da wpisanie go tutaj.</p>
	
	<h3 id="lua">Pliki skryptów bramek</h3>
	<img src="pic/sms/screen_c.png" alt="" class="left" />
  <p>Pliki umożliwiające wysyłanie SMSów znajdują się w <a href="sql_folders.php#sms" title="Położenie katalogu z plikami skryptów">katalogu skryptów SMS</a>. Każdy skrypt składa się z pliku <span class="file">.xml</span>, pliku <span class="file">.lua</span> i opcjonalnie ikony <span class="file">.ico</span>.</p>
	
	<p>Skrypty do wtyczki można ściągnąć przez <a class="todo" href="kupdate.php">aktualizację kUpdate</a> lub pobrać najnowsze wersje (zwykle poprawione) z działu <a class="ex" href="http://www.konnekt.info/forum/index.php?showforum=40">Bramki SMS</a> na forum. Wszystkie należy rozpakować i w postaci opisanej tutaj, umieścić w tym katalogu.</p>
	
	<h3 id="gate">Wybranie bramek</h3>
	<img src="pic/sms/screen_d.png" alt="" class="left" />
	<img src="pic/sms/screen_e.png" alt="" class="right" />
  <p>Wybranie pozycji podrzędnej do <span class="list">SMS</span> - <span class="list">Bramki</span> umożliwia zaznaczenie aktywnych skrytpów bramek. W tym artykule pokażemy jak wysyłać SMS z bramki <span class="chx on">MiastoPlusa</span>, która wymaga rejestracji oraz szerokodostępnej bramki <span class="chx on">Idei</span>.</p>
	
	<h3 id="miastoplusa">Bramka MiastoPlusa</h3>
	<img src="pic/sms/screen_f.png" alt="" class="left" />
  <p>Przejdźmy niżej, do listy bramek i wybierzmy w naszym przykładzie <span class="list">MiastoPlusa.pl</span>.</p>
	
	<h3 id="info">Zakres numerów i liczba znaków</h3>
	<img src="pic/sms/screen_g.png" alt="" class="left" />
  <p>W prawej częsci okna pokażą się informacje oraz opcje konfiguracji bramki. Należy pamiętać, że zależą one głównie od typu bramki. Nie każda ma przedstawione.</p>
	
	<p>W podanym przykładzie widzimy zakres numerów pod które możemy wysyłać SMSy. Interesuje nas część wyrażenia regularnego: <code>(887|6[069][13579])</code>. Znak <code>|</code> oddziela początkową część numeru dla telefonów komórkowych - u nas <code>887</code> i <code>6[069][13579]</code>. Teraz weźmiemy się za drugi zakres. Liczby w nawiasach kwadratowych <code>[]</code> wskazują na jedną, dowolną liczbę z podanego zbioru. Dla <code>[069]</code> jest to <code>0</code>, <code>6</code> albo <code>9</code>. Czyli możemy mieć numery <code>60...</code>, <code>66...</code> albo <code>69...</code>.</p>
	
	<p>Dalej znowu mamy nawias kwadratowy - <code>[13579]</code>. Oczywiście jasne jest, że trzecią cyfrą numeru będzie <code>1</code>, <code>3</code>, <code>5</code>, <code>7</code> albo <code>9</code>. W ten sposób dowiedzieliśmy się pod jakie numery, zaczynające się od podanych zakresów, możemy wysyłać wiadomości.</p>
	
	<p>Wreszcie, na końcu, mamy podaną ilość znaków jaką może zawierać jedna wiadomość. Oczywiście wiadomość ponad 160 znaków zostanie podzielona na więcej SMSów.</p>
	
	<h3 id="loginpass">Dane rejestracyjne</h3>
	<img src="pic/sms/screen_h.png" alt="" class="left" />
  <p>Niżej wpisujemy swoje dane rejestracyjne - login i hasło, jeśli skrypt bramki tego wymaga.</p>
	
	<p>Dla bramki MiastoPlusa, należy wpisać dane konta, które jako <strong>użytkownicy sieci PlusGSM</strong>, możemy <a class="ex" href="http://www.miastoplusa.pl/registration/first.jsp">założyć na stronie</a>. Będziemy mogli wysyłać SMS do sieci Plus za darmo oraz, już za opłatą, do innych sieci. Na razie jednak skrypt MiastoPlusa (w wersji 2.2.0) nie umożliwia wysyłania do innych sieci, lecz możemy sprawdzić inne skrypty bramek.</p>
	
	<h3 id="confirm">Potwierdzenie wysłania</h3>
	<img src="pic/sms/screen_i.png" alt="" class="left" />
  <p>Poniżej widnieją jeszcze inne opcje. W przypadku naszej bramki możemy ustalić, czy dociera do nas powiadomienie o poprawnie wysłanym SMSie. Legenda wskazuje co należy wpisać w pole. Możemy teraz zapisać nasze ustawienia klikając na <span class="but">Zastosuj</span> lub <span class="but">OK</span>.</p>
	
	<h3 id="telnumb">Numer telefonu kontaktu</h3>
	<img src="pic/sms/screen_j.png" alt="" class="left" />
  <p>Teraz <a href="contacts.php">dodajemy nowy kontakt</a>, bądź edytujemy jego dane na liście. W przypadku edycji klikamy na <span class="menu">Więcej</span> w menu kontaktu. W kategorii <span class="list">Kontakt</span> wpisujemy w <span class="ui">Telefon</span> -> <span class="ui">Komórka</span> odpowiedni numer, bez prefiksu czy zera. Zapisujemy dane klikając na <span class="tool">Zapisz</span>.</p>
	
	<h3 id="smssend">Opcja "Wyślij SMS"</h3>
	<img src="pic/sms/screen_k.png" alt="" class="left" />
  <p>Teraz możemy kliknąć dany kontakt prawym przyciskiem myszy i wybrać pozycję <span class="menu">Wyślij SMSa</span>.</p>
	
	<h4>Kontakt sieci</h4>
	<img src="pic/sms/screen_l.png" alt="" class="left" />
	<p>Jeśli wpiszemy numer telefonu dla kontaktu danej sieci, opcja <span class="menu">Wyślij SMSa</span> też będzie dostępna.</p>
	
	<h4>Menu wtyczek</h4>
	<img src="pic/sms/screen_m.png" alt="" class="left" />
	<p>Możemy także wydać polecenie z menu <span class="tool">Wtyczki</span>. W tym przypadku nie będzie wybranego automatycznie numeru telefonu, pod który chcemy SMS wysłać.</p>
	
	<h3 id="winsms">Okno wysyłania SMSa</h3>
	<img src="pic/sms/screen_o.png" alt="" class="left" />
	<p>Pojawi się okno, dosyć intuicyjne w obsłudze. Po lewej mamy numer telefonu, po prawej wybór bramki. Niżej pole do wpisania treści wiadomości. Jeszcze niżej pole podpisu. Skrypt bramki MiastoPlusa, której tutaj używamy nie pozwala na dołączenie podpisu - pole jest więc przyszarzone.</p>
	
	<p>W pasku statusu okna mamy licznik znaków oraz informację ile SMS zostanie wysłanych, o podanej liczbie znaków, jeśli przekroczy ona 160. Po prawej od licznika mamy listę rozwijalną z informacjami o wysyłaniu SMS - opisana dalej w tekście.</p>
	
	<h4>Numer telefonu</h4>
	<img src="pic/sms/screen_n.png" alt="" class="left" />
  <p>Możemy wybrać numer telefonu, pod który wysyłamy, oraz odpowiednią bramkę. Uwaga. Jeśli numer nie spełnia wymagań bramki co do zakresu, nie pojawi się ona w liście rozwijalnej po prawej.</p>
	
	<h3 id="smssent">Wysłanie SMS</h3>
	<img src="pic/sms/screen_p.png" alt="" class="left" />
  <p>Po wpisaniu treści wiadomości, klikamy na przycisk <span class="but">Wyślij</span> w górnej części okna. Skrypt bramki wykona odpowiednie czynności i wyśle wiadomość. Logi wszelkich czynności zostaną wyświetlone w liście rozwijalnej na pasku statusu okna. W naszym przykładzie ostatnią informacją jest to, że serwer przyśle nam SMS gdy wiadomość zostanie wysłana. Numer naszego telefonu oczywiście jest znany, bo rejestrowaliśmy się w MiastoPlusa.</p>
	
	<h3 id="idea">Bramka Idea</h3>
	<img src="pic/sms/screen_q.png" alt="" class="left" />
  <p>Skorzsytajmy teraz z bezpłatnej bramki Idea - Idea. Okno wygląda tak samo oczywiście, tylko że w tym przypadku możemy wpisać swój podpis. Opcja <span class="chx on">Zapisz</span> działa tak samo jakbyśmy wpisali podpis w <span class="menu">Ustawieniach</span> wcześniej.</p>
	
	<p>Należy pamiętać, że opcje bramki Idea są inne od MiastoPlusa. Aby sprawdzić jaki zakres numerów obsługuje skrypt bramki, należy wejść do <span class="menu">Ustawień</span> -> <span class="list">Wtyczki</span> -> <span class="list">SMS</span> -> <span class="list">Idea</span>. Wypisane są tam informacje i porady oraz umieszczone opcje. Tak jest w przypadku każdej bramki, nie wahajcie się sprawdzić swojej własnej i poeksperymentować.</p>
	
	<h3 id="token">Token</h3>
	<img src="pic/sms/screen_r.png" alt="" class="left" />
  <p>Niektóre bramki, a należy do niej bramka Idei, wymagają potwierdzenia wyłania SMS przez człowieka, przez wpisanie słowa z tak zwanego "Tokenu". Wyświetli się on w nowym oknie. Po prostu przepisz słowo, które widzisz na obrazku do pola tekstowego i kliknij w <span class="but">OK</span>.</p>
	
	<h3 id="logs">Logi zdarzeń</h3>
	<img src="pic/sms/screen_s.png" alt="" class="left" />
  <p>Tak jak poprzednie, logi wszystkich zdarzeń są dostępne w liście rozwijalnej na okna.</p>
	
	<h3 id="queue">Kolejka wiadomości</h3>
	<p>Czasem, z różnych powodów, SMS mógł nie zostać wysłany. Nie wysłane wiadomości dostępne są w <a href="history.php">Historii</a> (<span class="tool">Kontakty</span> -> <span class="menu">Historia</span>) w zakładce <span class="list">Kolejka</span>. Naciskając <span class="tool">Prześlij</span> w <a href="history.php">Historii</a>, wszystkie wiadomości w kolejce zostaną wysłane ponownie.</p>
	
	<h3 id="configmore">Inne ustawienia</h3>	
	<img src="pic/sms/screen_t.png" alt="" class="right" />
	<p>Po zaznaczeniu opcji w Ustawieniach wtyczki SMS, <span class="chx on">Nie zostawiaj niewysłanej wiadomości w kolejce</span> nie pozwolimy programowi na dodanie niewysłanego SMS do Historii.</p>
	
	<p>Opcja <span class="chx on">Kasuj treść wiadomości w okienku</span> spowoduje, że po kliknięciu przycisku <span class="but">Wyślij</span> pole wiadomości zostanie wyczyszczone.</p>
	
	<p>Natomiast opcja <span class="chx on">Używaj jednego okna do wysyłania</span> nie pozwoli na otworzenie więcej niż jednego okna SMS. Każde inne wywołanie będzie zmieniało tylko numer telefonu, a nie otwierało kolejne okno SMS.</p>
	
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