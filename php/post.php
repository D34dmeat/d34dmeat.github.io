if(!empty($_POST['data'])){
$data = $_POST['data'];
$fname = "posting.yml";//generates random name = mktime() . "

$file = fopen("_data/" .$fname, 'rw');//creates new file
fwrite($file, $data);
fclose($file);
}
