<?php
require_once "..\\Classes\\PHPExcel.php";
function getALLPath() {
  $tabPATH = [];
  $excelReader = PHPExcel_IOFactory::createReaderForFile ( "..\\init\\CheminsDossier.xlsx" );
  $excelObj = $excelReader->load ( "..\\init\\CheminsDossier.xlsx" );
  $worksheet = $excelObj->getSheet ( 0 );
  $lastRow = $worksheet->getHighestRow ();

  // For commence � deux car la premi�re ligne contient du texte (type de donn�es)
  for($row = 2; $row < $lastRow; $row ++) {
    if($worksheet->getCell ( 'A' . $row )->getCalculatedValue()!=null) {
      array_push ( $tabPATH, array (
          "nom" => $worksheet->getCell ( 'A' . $row )->getCalculatedValue(),
          "path" => $worksheet->getCell ( 'C' . $row )->getCalculatedValue()
      ));
    }
  }
  return $tabPATH;
}
?>
