<?php

      $directorio = "../upload/";
      $directorio2 = "../upload/";
      //comprobamos que sea una petición ajax
      if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
      	// Array en el que obtendremos los resultados
      	$res = array();
      	// Agregamos la barra invertida al final en caso de que no exista
      	if(substr($directorio, -1) != "/") $directorio .= "/";
      	// Creamos un puntero al directorio y obtenemos el listado de archivos
      	$dir = @dir($directorio) or die("getFileList: Error abriendo el directorio $directorio para leerlo");
      	while(($archivo = $dir->read()) !== false) {
      	  // Obviamos los archivos ocultos
      	  if($archivo[0] == ".") continue;

      	  $res[] = array(
      	    "name" => $archivo,
      	    "size" => filesize($directorio . $archivo),
      	    "url" => '../../'. 'serveur/' .'upload/'.$directorio . $archivo
      	  );

      	}
      	$dir->close();
      	echo json_encode($res);

      }else{
      	throw new Exception("Error Processing Request", 1);
      }

      /*require('connexion.php');

      $connecter = new Connecter();
      $BdD = $connecter->connexion();

      $resultat = $BdD->query("SELECT fichier FROM reunion");

      $resultat->setFetchMode(PDO::FETCH_ASSOC);

      foreach ($resultat as $data){
          echo '<option value="'.$data['no_reunion'].'">'.$data['fichier'].'</option>';
      }*/



?>
