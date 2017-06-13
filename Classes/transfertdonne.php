<?php
	/**
	 * Recherche du dernier fichier ajouter dans le dossier $path qui comprend les Extraction_OF
	 * @param string $path
	 * @return string
	 */
	function recupererDernierFichier($path) {
		$tab = [];
		$handle = opendir ( $path );
		while ( $file = readdir ( $handle ) ) {
			if ($file != '..' && $file != '.' && $file != '') {
				$pathfile = $path . "/" . $file;
				if (true == ($res = is_file ( $pathfile ))) {
					$date = date ( "Y/m/d", filemtime ( $pathfile ) ); // R�cup�re depuis combien de tempas le fichier existe
					array_push ( $tab, array (
							"path" => $pathfile,
							"date" => $date
					) );
				}
			}
		}

		// Cr�ation d'un tableau avec uniquement les dates d'existenses des fichiers
		$datefile = [];
		foreach ( $tab as $key => $row ) {
			$datefile [$key] = $row ['date'];
		}

		// Tri de $tab en fonction de $datefile (ordre croissant des dates d'existenses)
		array_multisort ( $datefile, SORT_DESC, $tab );
		closedir ( $handle );

		// Retourne le chemin du premier �l�ment de $tab (dernier fichier cr��)
		return $tab[0]['path'];
	}

	/**
	 * R�cup�ration des deux premi�re colonne du tableau excel comprenant le code IPR et le code article
	 * @param string $ExcelFilePath
	 * @return array
	 */
	function recupererLigneExcel($ExcelFilePath) {
		$tabIPR = [];
		$excelReader = PHPExcel_IOFactory::createReaderForFile ( $ExcelFilePath );
		$excelObj = $excelReader->load ( $ExcelFilePath );
		$worksheet = $excelObj->getSheet ( 0 );
		$lastRow = $worksheet->getHighestRow ();

		// Cr�ation d'un tableau contenant les code IPR d�j� connu pour �viter les doublons lors de l'insertion dans $tabIPR
		$known_IPR = array ();

		// For commence � deux car la premi�re ligne contient du texte (type de donn�es)
		for($row = 2; $row <= $lastRow; $row ++) {
			// Si IPR n'existe pas dans $known_IPR alors on l'ajoute dans $known_IPR et $tabIPR
			if (! in_array ( $worksheet->getCell ( 'A' . $row )->getValue (), $known_IPR )) {
				array_push ( $tabIPR, array (
						"ipr" => $worksheet->getCell ( 'A' . $row )->getValue (),
						"article" => str_replace("/","-",$worksheet->getCell ( 'B' . $row )->getValue ())
				) );

				array_push ( $known_IPR, $worksheet->getCell ( 'A' . $row )->getValue () );
			}
		}

		return $tabIPR;
	}

	/**
	 * On recherche dans le dossier si un fichier avec le code article comme nom existe
	 * @param string $codeArticle
	 * @param string $dossierPath
	 * @return string | 0 (number error)
	 */
	function IsExisting($codeArticle, $dossierPath) {
		$files = scandir ( $dossierPath );
		foreach ( $files as $key => $value ) {
			/*compare le nom d'un fichier compris dans le dossier � l'adresse $dossierPath avec une chaine de caract�re
			* qui commence par le $codeArticle (^)
			*/
			if (preg_match ( '#^' . $codeArticle . '#i', $value )) {
				return $value;
			}
		}
		return 0;
	}
?>
