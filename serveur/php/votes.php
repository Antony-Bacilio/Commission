<?php

require_once("connexion.php");

$connecter = new Connecter();
$bdd = $connecter->connexion();

$etudiants=$bdd->query("SELECT DISTINCT(etudiant.no_etud) AS no_etud, nom, prenom, situation
		      FROM etudiant,vote_possibles WHERE(etudiant.no_etud = votes_possibles.no_etud)
                      AND(votes_possibles.no_reunion='1')");

$etudiants->setFetchMode(PDO::FETCH_ASSOC);

foreach($etudiants as $etud){

/*  $decisions = $bdd->query("SELECT DECISION.no_dec AS no_dec, libelle
  FROM VOTES_POSSIBLES, DECISION
  WHERE VOTES_POSSIBLES.no_reunion = '1'
  AND VOTES_POSSIBLES.no_etud = $etud['no_etud']
  AND VOTES_POSSIBLES.no_dec = DECISION.no_dec")*/

  echo '<div class="card-deck mt-4">
             <div class="row container my-2">
             <div class="card">
               <div class="card-body">
                 <div class="row">
                   <div class="col-md-3 mb-4 d-flex justify-content-center">
                     <div class="bg-dark "style="width:150px;height:150px">
                     </div>
                   </div>';

   echo '<div class="col-md-4 ">';
     echo '<div class="container">';
       echo '<div class="mb-2">';
         echo '<span class="align-self-center">#1</span><span class="ml-3 badge badge-secondary align-self-center">grp 3</span></br>';
         echo '<span class="lead font-weight-bold">'.$etud['nom'].' '.$etud['prenom'].'</span>';
             echo  '<p class="mt-2 font-italic">'.$etud['situation'].'</p>';
           echo '</div>';
         echo '</div>';
       echo '</div>';

       echo'<div class="col-md-5">
        <div class="vote container">
          <div class="row font-weight-bold mb-3">
            Votes EffectuÃ©
          </div>
          <div class="progress ">
             <div class="progress-bar" style="width:35%;">35%</div>
         </div>
         <span class="d-flex justify-content-end">Redoubler</span>
         <div class="progress ">
             <div class="progress-bar bg-warning" style="width:15%;">15%</div>
         </div>
         <span class="d-flex justify-content-end">RÃ©orienter</span>
         <div class="progress">
             <div class="progress-bar bg-danger" style="width:50%;">50%</div>
         </div>
         <span class="d-flex justify-content-end">Valider</span>
         </div>
         <div class="desicion container">
           <div class="row font-weight-bold mb-3">
             Votre dÃ©cision
           </div>
             <div class="row d-flex justify-content-between mx-1">
               <select id="commissions"class="form-control w-50">
               .
               <option>00h00</option><option>06h00</option><option>12h00</option><option>18h00</option>
               </select>
               <input type="submit" name="" class="btn btn-primary d-flex" value="Je vote">
             </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 </div>
</div>';

}

?>
