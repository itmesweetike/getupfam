<?php
 
    $data = $_POST['firstname'] . '-' . $_POST['Apikey'] . "\n";
    $openthefile = fopen(thedata.txt, "a");
    fwrite($openthefile, $data);
    fclose($openthefile);
    var_dump($data);

?>
