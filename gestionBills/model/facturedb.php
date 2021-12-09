<?php 
require_once 'db.php';

function addFacture($date, $consommation, $prix, $paiement){
    $paiement = false;
    $sql = "INSERT INTO factures VALUES(NULL, '$date', '$consommation', '$prix', '$paiement')";

    $conn = getConnection();
    
    return $conn->exec($sql);
}

function updateFacture($idF){    

    $sql = "UPDATE factures SET paiement = 1 WHERE idF = $idF";

    $conn = getConnection();
    
    return $conn->exec($sql);
}

function listeFacture(){
    
    $sql = "SELECT * FROM facture";

    $conn = getConnection();
    
    return $conn->query($sql);
}

function listeFactureNonReglee(){
    
    $sql = "SELECT * FROM facture WHERE paiement = 0";

    $conn = getConnection();
    
    return $conn->query($sql);
}

function listeFactureReglee(){
    
    $sql = "SELECT * FROM facture WHERE paiement = 1";

    $conn = getConnection();
    
    return $conn->query($sql);
}
?>