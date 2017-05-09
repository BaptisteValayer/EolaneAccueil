<?php
require_once "..\\Classes\\PHPExcel.php";
function getALLPath() {
  $tabPATH = [];
  $excelReader = PHPExcel_IOFactory::createReaderForFile ( "CheminsDossier.xlsx" );
  $excelObj = $excelReader->load ( "CheminsDossier.xlsx" );
  $worksheet = $excelObj->getSheet ( 0 );
  $lastRow = $worksheet->getHighestRow ();

  // For commence � deux car la premi�re ligne contient du texte (type de donn�es)
  for($row = 2; $row <= $lastRow; $row ++) {
      array_push ( $tabPATH, array (
          "path" => $worksheet->getCell ( 'C' . $row )->getCalculatedValue()
      ));
  }
  echo json_encode($tabPATH);
}
getALLPath();
?>
