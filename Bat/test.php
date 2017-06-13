<?php
	$handle = fopen("../Bat/test.bat","w");
	$base = "explorer ";
	$path = "\\\\val-fs01\\services\\Methodes Production\\0- IPR VALIDE";
	$file = "\\S0296C-A.xls";
	fwrite($handle,$base.$path.$file);
	fclose($handle)
?>
