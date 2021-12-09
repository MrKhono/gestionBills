<?php 
require_once '../model/reglementdb.php';
require_once '../model/facturedb.php';
extract($_POST);
//$date = $_POST['date'];
$result = addReglement($date, $idF);
if($result != 0){
    updateFacture($idF);
}
header("location:reglements");
?>