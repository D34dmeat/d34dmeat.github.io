if(!empty($_POST['data'])){
$data = $_POST['data'];
$fname = mktime() . ".yaml";//generates random name

$file = fopen("_data/" .$fname, 'w');//creates new file
fwrite($file, $data);
fclose($file);
}
