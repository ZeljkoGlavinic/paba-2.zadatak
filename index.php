<!DOCTYPE html>
<html lang="hr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="podjelaNaKartice.css" />
    <!-- Dohvaćanje Bootstrap predgotovljenih oblikovanja -->
		<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
		/>
    <link rel="stylesheet" href="oblikovanje.css" />
		<!-- Učitavanje JS-datoteke koja omogućava funkcionalnosti kartica (tabova) -->
		<title>Kućni budžet</title>
	</head>
	<body style="margin: 50px">
		<h1>Transakcije kućnog budžeta</h1>
		<p>Nacrt mrežne usluge za vođenje kućnog budžeta izrađena prema uputama 2. zadatka iz natječaja za radno mjesto poslodavca Partner banka</p>
    <div id="izbornik">
      <button class="vezaKartice pregled" onclick="openPage('Pregled', this, 'rgb(255, 230, 230)')" id="početnoOtvorenaKartica">
        Pregled transakcija
      </button>
      <button	class="vezaKartice upis" onclick="openPage('Upis', this, 'rgb(204, 255, 221)')" >
        Upis transakcije
      </button>

      <button class="vezaKartice tehnologije" onclick="openPage('Tehnologije', this, 'rgb(179, 217, 255)')" >
        Tehnologije razvoja
      </button>
      <button class="vezaKartice pseudokôd" onclick="openPage('Pseudokôd', this, 'rgb(255, 245, 204)')">
        Pseudokôd rješenja
      </button>
    </div>

		<div id="Pregled" class="sadržajKartice">
      <h3>Pregled transakcija</h3>
			<table class="table">
				<thead>
					<tr>
						<th>iznos</th>
						<th>datum</th>
						<th>vrsta</th>
						<th>korisnik</th>
						<th>valuta</th>
						<th>opis</th>
					</tr>
				</thead>
				<tbody>
        <?php
            $servername = "localhost";
            $username = "glavinic_paba";
            $password = "glavinic_paba";
            $database = "glavinic_paba";
    
            // Uspostavi  konekciju
            $connection = new mysqli($servername, $username, $password, $database);
            
            if ($connection->connect_error) { 
              die("Pogreška prilikom konektiranja" . $connection->connect_error); 
            } 
          // Redom iščitaj sve	retke iz tablice 
          $sql = "SELECT * FROM transakcije"; 
          $result = $connection->query($sql); 
          while ($row = $result->fetch_assoc()) { 
            echo	"<tr>
                    <td>". $row["iznos"] . "</td>
                    <td>". $row["datum"] . "</td>
                    <td>". $row["vrsta"] . "</td>
                    <td>". $row["korisnik"] . "</td>
                    <td>". $row["valuta"] . "</td>
                    <td>". $row["opis"] . "</td>
                    </tr>"; 
          } ?>
				</tbody>
			</table>
		</div>

		<div id="Upis" class="sadržajKartice">
			<h3>Upis transakcije</h3>
			<p>Upis nove transakcije</p>
      <form id="Obrazac" action="rutinaUpisa.php" method= POST/GET>
			<!-- Iznos -->
			<label for="iznos">Iznos</label
			><input id="iznos" name="iznos" placeholder="Iznos transakcije" />

			<!-- Datum -->
			<label for="datum">Datum</label
			><input id="datum" name="datum" placeholder="Datum transakcije" />

			<!-- Vrsta -->
			<label for="vrsta">Vrsta</label
			><input id="Vrsta" name="vrsta" placeholder="Vrsta transakcije" />

			<!-- Korisnik -->
			<label for="korisnik">Transakciju izvršio</label
			><input id="korisnik" name="korisnik" placeholder="Ime i prezime" />

			<!-- Valuta -->
			<label for="valuta">Valuta</label
			><input id="valuta" name="valuta" placeholder="HRK ili EUR" />

			<!-- Opis -->
			<label for="opis">Opis</label
			><input id="opis" name="opis" placeholder="Opis transakcije" />
		</form>
		<button
			type="submit"
			form="Obrazac"
			id="dugme"
			name="dugme"
			value="Upiši"
		>
    Upiši
  </button>


		</div>

		<div id="Tehnologije" class="sadržajKartice">
			<h3>Tehnologije razvoja i produkcije</h3>
      <p>Rješenje je razvijano lokalno, a zatim postavljeno na "produkcijski" web-poslužitalj</p>
      <h4>Razvoj</h4>
			<ul>
        <li>Kodiranje i razvoj: Visual Studio Code, Ekstenzija Live Server</li>
				<li>
					Razvojna okolina (lokalno) XAPMPP | Firefox
					Developer Edition | Live Server Firefox Extension |
				</li>
				<li>Baza podataka i web-GUI: MySQL (MariaDB) | phpMyAdmin |</li>
			</ul>
      <h4>Produkcija</h4>
      <ul>
        <li>Hosting: Hostens.com - udomljavanje u produkcijsku "živu" web-okolinu</li>
        <li>Stranicu (aplikaciju) konstruira PHP-skripta spregnuta s bazom podataka (MySQL odnosno MariaDB)</li>
        
        <li>
          PHP-skripta i baza podataka postavljeni su na mrežni poslužitelj (udomitelj: hostens.com)
          </li>
          <li>Na mapu u kojoj se nalazi skripta (index.php) usmjeren je primjereno sastavljeni URL</li>
          
          <li>URL je sastavljen od vršne domene (glavinic.com) i njezine poddomene (zeljko) - ukupno: zeljko.glavinic.com</li>
          <li>Unutar takvog URL-a uspostavljena je hijerarhija od 2 mape (paba/zadatak2)</li>
          Konačni URL: https://zeljko.glavinic.com/paba/zadatak2/
        </ul>
		</div>

		<div id="Pseudokôd" class="sadržajKartice">
			<h3>Pseudokôd ostvarenog i ideja za nedovršeni dio zadatka</h3>
      <p>Riješena je osnovna koncepcija i funkcionalnosti, a opisuju se ideje za realizaciju preostalih funkcionalnosti zadatka</p>
      <h4>Osnovna koncepcija i realizirane funkcionalnosti</h4>
      <ul>
        <li>
          Mrežnu stranicu usluge "konstruira" PHP-skripta uz pomoć baze podataka
          MySQL.
        </li>
        <li>
          PHP-skripta se povezuje s bazom iz koje iščitava podatke o transakcijama zapisane
          u recima odgovarajuće tablice (sheme). 
        </li>
        <li>PHP-skripta zatim u petlji, redak po redak "zamata" podatke u retke HTML-tablice.</li>
      </ul>
      <h4>Nerealizirano</h4>
      <ul>
        <li>Pregled ukupne sume i ukupne sume po vrsti i valuti</li>
        <li>Trenutno stanje (saldo) svih valuta u kunskoj protuvrijednosti (HRK) po srednjem tečaju HNB-a na dan kad se stanje gleda</li>
      </ul>
      <h4>Aktivnosti za cjelovito rješenje zadatka</h4>
			<p>
        Korake i programerske radnje potrebne za cjelovito, funkcionalno 
        rješenje koje je zadatkom zadano, ali je podrazumijevano i očekivano 
        iz korisničkog motrišta (user  experience - UX) opisujem u nastavku
        prema skupinama zadaća i tehnologija:
			</p>
      <h4>Dizajn baze (MySQL, MariaDB) alatom phpMyAdmin</h4>
      <ul>
        <li>Primjereno dizajnirati bazu podataka</li>
        <li>Uspostava dodatnih relacija (tablica ) i njihovo povezivanje vanjskim ključevima</li>
        <li>Dovođenje relacija (udovoljavanje) u normalne forme</li>
        <li>Kreiranje posebnih tablica za entitete: korisnik, valuta, vrsta transakcije</li>
        <li>Osiguravanje integriteta, vanjskih ključeva i pravila</li>
      </ul>
      <h4>Ograničenja baze - phpMyAdmin, SQL</h4>
      <ul>
        <li>Određivanje domene podataka u stupcima</li>
        <li>Ograničenja na upis podataka</li>
        <li>Dozvoljavanje ili onemogućavanje tzv. NULL vrijednosti</li>
      </ul>
      <h4>Namještanje baze za prikaz hrvatskih standarda</h4>
      <ul>
        <li>Rješavanje aktualnog problema s upisivanjem i prikazom hrvatskih znakova</li>
        <li>Kodna stranica, skup znakova - character set,  collation</li>
        <li>Hrvatski standard datuma, brojeva, decimalnog zareza itd.</li>
        <li>Ugađanje na razini servera, baze, relacija (tablica), stupaca, konekcija itd.</li>
      </ul>
      <h4>Serversko skriptiranje SQL, PHP i MySQL</h4>
        <ul>
          <li>Sumiranje po vrsti, valuti i ukupno</li>
          <li>Odgovarajući SQL upit koji će pokrenuti PHP</li>
          <li>Dohvaćanje aktualnog tečaja jednom od metoda:</li>
          <li>Primjena API -a (Application programming interface) HNB-a za dohvaćanje podataka - ako postoji</li>
          <li>Mrežna stranica HNB-a - tehnikom web scraping (skidanje, grebanje podataka)</li>
          <li>Trenutno stanje (saldo) svih valuta u kunskoj protuvrijednosti (HRK) po srednjem tečaju HNB-a</li>
        </ul>
        <h4>Korisničko sučelje: HTML, Javascript, CSS</h4>
          <ul>
            <li>Izrada (ili primjena gotovih biblioteka) Javascript funkcionalnosti za prikaz i sortiranje HTML tablice.</li>
            <li>Oznaka sortiranja na stupcima i njezino sprezanje s funciojom sortiranja.</li>
            <li>Ograničenja na upis podataka - front-end kontrola upisa na razini stranice.</li>
            <li>Ne treba "potezati" serversku funkcionalnost - konekciju i drugo dok polja obrasca nisu uredno popunjena</li>
            <li>Osmišljavanje svih funkcionalnosti na jednoj web-stranici</li>
            <li>Pregled, upis,  osvježavanje podataka, brisanje</li>
          </ul>
		</div>
	</body>
  <script src="podjelaNaKartice.js"></script>
</html>
