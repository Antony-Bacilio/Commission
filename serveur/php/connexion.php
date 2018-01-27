<?php

//DEFINE('MYSQL_SERVEUR_BASE','mysql:host=https://infodb.iutmetz.univ-lorraine.fr; dbname=bacilios1_projet_tutore_s3');
//DEFINE ('MYSQL_UTILISATEUR','bacilios1_appli');
//DEFINE ('MYSQL_MOTDEPASSE','phpmyadmin');
DEFINE('MYSQL_SERVEUR_BASE','mysql:host=localhost;dbname=projet_tutore_s3');
DEFINE('MYSQL_UTILISATEUR', 'root');
DEFINE ('MYSQL_MOTDEPASSE','');


class Connecter{

    function connexion(){
        try {
            $objPdo = new PDO(MYSQL_SERVEUR_BASE, MYSQL_UTILISATEUR, MYSQL_MOTDEPASSE);
            echo "<b><i>Connexion au serveur Réussie!!...</i></b> <br/><br/>";
            printf("Information sur le serveur: &nbsp;" . $objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $exception){
            echo "Echec de connexion au serveur!!!";
            printf("Info d'erreur: ". $exception->getMessage());
        }
        return $objPdo;
    }

}

?>
