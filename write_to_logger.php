<?php
if(!empty($_POST['data'])){
    $data = $_POST['data'];
    $fname = "log.txt";

$file = fopen( $fname, 'a');
fwrite($file, $data);
fclose($file);
}
?>