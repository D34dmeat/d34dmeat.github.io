<?php
if(!empty($_POST['data'])){
$data = test_input($_POST['data']);
$name = test_input($_POST['name']);
$fname = "posting.yml";//generates random name = mktime() . "

$file = fopen("_data/" .$fname, 'rw');//creates new file
$curry = fread($file);
fwrite($file, $curry ."post:" .$data);
fclose($file);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
