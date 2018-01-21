jQuery(document).ready(function($){

var url_etud = "../../serveur/php/recupererEtudiantNom.php";

  $.ajax({

         url: url_etud,
         success: function(data) {
                var html_text = data;
                    $('#nom').append(html_text);
          }

  });


});
