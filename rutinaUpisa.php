<!DOCTYPE html>
<html lang="hr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Dohvaćanje Bootstrap predgotovljenih oblikovanja -->
    <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
    <link rel="stylesheet" href="karticeStranice.css" />
		<link rel="stylesheet" href="oblikovanje.css" />
		<title>Upisivanje podataka</title>
	</head>
	<body style="margin: 50px">
    
  <?php
    $servername = "localhost";
    $username = "glavinic_paba";
    $password = "glavinic_paba";
    $database = "glavinic_paba";

    // Priključi se na bazu
    $connection = new mysqli($servername, $username, $password, $database);

    // Provjeri priključak
    if ($connection->connect_error) {
      die("Pogreška prilikom konektiranja" . $connection->connect_error);
    }

    // Prikupi svih 6 vrijednosti s obrasca za upis
    $iznos =  $_REQUEST['iznos'];
    $datum = $_REQUEST['datum'];
    $vrsta =  $_REQUEST['vrsta'];
    $korisnik =  $_REQUEST['korisnik'];
    $valuta =  $_REQUEST['valuta'];
    $opis =  $_REQUEST['opis'];
    
    // Konstruiraj (sastavi, montiraj) SQL-upit od prikupljenih dijelova
    $sql = "INSERT INTO transakcije (iznos, datum, vrsta, korisnik, valuta, opis) 
    VALUES ('$iznos','$datum','$vrsta','$korisnik','$valuta', '$opis')";
    
    // Izvedi upit (zapiši podatke u tablicu transakcije)
    if(mysqli_query($connection, $sql)){
      echo "<h3>Podaci su upisani.</h3>"; 
      // Ispiši podatke s obrasca i to svaki u svojem redu
      echo nl2br("\n$iznos\n $datum\n $vrsta\n $korisnik\n $valuta\n $opis");
      echo "<h3> Ažuriranu tablicu transakcija pogledajte pritiskom na dugme Transakcije</h3>"; 
    } else {
      echo "GREŠKA: Isprika... $sql. " 
          . mysqli_error($connection);
    }
    // Odkopčaj se od baze
    mysqli_close($connection);
    ?>
    </body>
</html>
