<?php

    require('connexion.php');

    $connecter = new Connecter();
    $BdD = $connecter->connexion();

    $resultat=$BdD->query("SELECT * FROM commission");

    $resultat->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($resultat as $data){
        echo '<option value="'.$data['no_com'].'">'.$data['lib_com'].'</option>';
    }

 ?>
