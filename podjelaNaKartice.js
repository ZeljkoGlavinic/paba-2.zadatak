function openPage(pageName, elmnt, color) {
	// Početno SAKRIJ početno sve elemente s klasom class="sadržajKartice" */
	var i, sadrzajKartice, vezeKartica;
	sadrzajKartice = document.getElementsByClassName("sadržajKartice");
	for (i = 0; i < sadrzajKartice.length; i++) {
		sadrzajKartice[i].style.display = "none";
	}

	// Ukloni boju pozadine svih vezaKartice i dugmadi
	// vezeKartica = document.getElementsByClassName("vezaKartice");
	// for (i = 0; i < vezeKartica.length; i++) {
	// 	vezeKartica[i].style.backgroundColor = "";
	// }

	// Prikaži zadani sadržaj kartice
	document.getElementById(pageName).style.display = "block";

	// Postavi boju pozadine kartice na boju dugmeta pomoću kojeg je otvorena
	elmnt.style.backgroundColor = color;
}

// "Klikni" onu Karticu (element) koji ima id="početnoOtvorenaKartica"
document.getElementById("početnoOtvorenaKartica").click();
