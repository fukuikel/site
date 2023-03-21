<?php
	$adr = $_GET['Adress'];
	$fp = fopen("test.txt", "w+");
	echo $adr;
	fseek($fp, 0);
	fwrite($fp, $adr);
	fclose($fp);
	exec('python_script.py');
?>