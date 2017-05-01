<?php
    	$data = $_POST['firstname'] . '-' . $_POST['Apikey'] . '-' .$_POST['Whenareyouoff'] . '-' . $_POST['Schedule'] . "\n";
   		$openthefile = fopen(".thedata.txt", "a");
   		fwrite($openthefile, $data);
    	fclose($openthefile);
?>
