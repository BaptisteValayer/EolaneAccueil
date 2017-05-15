/**
 * fonction qui permet de rechercher un produit grâce à son code IPR
 * Insertion d'une objet "<a><i></i></a>" dans l'html pour pouvoir le telecharger
 */
function findObject() {
	var iprCode = $("#IPRZone").val();
	$("i").parent().remove();

	// Récupération de l'élément dans la BD grâce à son code IPR
	$.getJSON("Classes\\getOne.php", {ipr : iprCode},function(data) {
		if (data == false || data == "ERROR") {
			alert("le code IPR n'existe pas");
			return 0;
		}
		code = data["article"];
		// Récupère le le lien permettant d'accéder à la fiche produit
		$.get("Classes\\getLink.php", {codeArticle : code}, function(data) {
			console.log(data);
			if (data == false || data == "ERROR") {
				alert("La fiche du produit est introuvable");
				return 0;
			}

			// Récupération de l'extension du fichier
			splitedExtension = data.split(".");
			fileformat = splitedExtension[splitedExtension.length - 1];

			// Récupération du chemin et du nom du fichier
			splitedFileName = data.split("\\");
			filename = splitedFileName[splitedFileName.length - 1];
			filepath = data.split(filename)[0];

			// Création d'un élément <a> qui permettra de télécharger la fiche produit
			a = $("<a>").attr("href","Classes\\download.php?filename=" + filename + "&path=" + filepath)
						.attr("download", "fichier");

			// Création d'un élément <i> contenu dans le <a> qui a une apparence différente suivant l'extension de la fiche produit
			switch (fileformat) {
			case "xlsx":
			case "xls":
				$("<i>").addClass("fa fa-file-excel-o fa-5x")
						.attr("aria-hidden", "true")
						.css("color", "#0d6a0e")
						.appendTo(a);
				a.appendTo($("#SearchResult"));
				break;
			case "docx":
			case "doc":
				$("<i>").addClass("fa fa-file-word-o fa-5x")
						.attr("aria-hidden", "true")
						.css("color", "#1d318d")
						.appendTo(a);
				a.appendTo($("#SearchResult"));
				break;
			case "pdf":
				$("<i>").addClass("fa fa-file-pdf-o fa-5x")
						.attr("aria-hidden","true")
						.css("color", "#ff421a")
						.appendTo(a);
				a.appendTo($("#SearchResult"));
				break;
			}
		});//fin getLink.php
  });//fin getOne.php
}

/**
 * Affiche ou cache le champ de recherche par IPR
 */
function hideVisibleSearch() {
	form = $("#form");
	if (form.css("visibility") == "hidden") {
		form.css("visibility", "visible");
	} else {
		form.css("visibility", "hidden");
	}
}

	$(document).ready(function() {
		var time = new timer();
		time.init();
		time.affiche();
		setInterval(function() {time.affiche();},60000);
		var btnS = new Bouton();
		btnS.init();
	});
