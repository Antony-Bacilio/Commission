<?php

    require('connexion.php');

    $connecter = new Connecter();
    $BdD = $connecter->connexion();

    $resultat=$BdD->query("SELECT * FROM etudiant");

    $resultat->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($resultat as $data){
        echo '<option value="'.$data['no_etud'].'">'.$data['nom'].'</option>';

    }


 ?>
