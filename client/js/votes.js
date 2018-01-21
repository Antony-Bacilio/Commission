jQuery(document).ready(function($){

  $.ajax({
	   url:'../../serveur/php/votes.php',
	   success: function(reponse) {
	      var html_text = reponse;
          $('#etudiant').append(html_text);
	  	}
  });
});
