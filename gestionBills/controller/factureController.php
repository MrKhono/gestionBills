<?php 
require_once '../model/facturedb.php';

extract($_POST);
//$date = $_POST['date'];
$result = addFacture($date, $consommation, $prix, 0);

header("location:factures");
?>