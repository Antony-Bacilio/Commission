<?php

require_once('connexion.php');
  $connecter = new Connecter();
  $BdD = $connecter->connexion();

  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

          if($_POST['formEtape'] = 1){
                    $date = $_POST['date_fin'];
                    $heure = $_POST['heure_fin'];
                    $desc = $_POST['description'];
                    //$check = $_POST['bulletin_secret'];
                    $com = $_POST['commission'].value;

                    if (isset($_POST['bulletin_secret'])){
                          $bulletin = '1';
                    }
                    else {
                          $bulletin = '0';
                    }

                    $resultat = $BdD->prepare("INSERT INTO reunion(date_limite,heure_limite,description,secret,no_com)
                                              VALUES(:datel,:heurel,:description,:secret,:no_com)");

                    $resultat->bindParam(':datel', $date);
                    $resultat->bindParam(':heurel', $heure);
                    $resultat->bindParam(':description', $desc);
                    $resultat->bindParam(':secret', $bulletin);
                    $resultat->bindParam(':no_com', $com);

                    $resultat->execute();

                    if($resultat){
                       echo "<br/><br/><b>Une nouvelle réunion est ajouté!!</b>";
                    }
                    else{
                       echo "On n'a pas pu ajouter";
                    }
          }




  }
?>
