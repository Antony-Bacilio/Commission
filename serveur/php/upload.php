<?php

//comprobamos que sea una petición ajax
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos
    if(!is_dir("../upload/"))
        mkdir("../upload/", 0777) or die("Pas possible creer le directory/n");

    //L'element est un Array, donc on utilise forEach() pour extraer tous les valeurs
    foreach($_FILES["fileUpLoad"]['tmp_name'] as $key => $tmp_name){
      //Valider que le fichier existe
      if($_FILES["fileUpLoad"]["name"][$key]) {
              $filename = $_FILES["fileUpLoad"]["name"][$key]; //Obtenir Nom original du fichier
              $source = $_FILES["fileUpLoad"]["tmp_name"][$key]; //Obtenir Nom temporel du fichier

              $directorio = '../upload/'.$filename; //Chemin pour garder les fichiers

              //Deplacer et valider que le fichier est chargé
              //move_uploaded_file(Origine, destination)
              if($filename && move_uploaded_file($source, $directorio)) {
                    echo "Le fichier $filename est gardé!!!...";
              } else {
                    echo "Erreur!!!...<br>";
              }
      }
    }

}else{
    throw new Exception("Error Processing Request", 1);
}

?>
