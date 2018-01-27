jQuery(document).ready(function($){

			$('#btn-suivant').click(function(){

				    var formData_1 = new FormData($("#formEtape1")[0]);
				    console.log(formData_1);
						$.ajax({
				    					type:'POST',
				          		data : formData_1,
				    					url:"../../serveur/php/insererDonnees.php",
				          		cache: false,
				          		contentType: false,
											processData: false,
											beforeSend: function(){
				    						console.log("Loading, Veuillez patienter svp...");
											},
											success: function(data){
												console.log(data);
											},
											error: function(data){
												console.log("error: " + data);
											}
						});
						if( document.getElementById('commission').value !="" && document.getElementById('date_fin').value !="" && document.getElementById('heure_fin').value !="" && document.getElementById('description').value !="" && document.getElementById('bulletin_secret').value !=""){
							window.location.href="../onglets/creer-reunion-2.html";
						}

						else{
							alert("Remplir les champs svp!!!...");
						}

			});

			/*$('#ajouter').click(function(){

						 var formData_2 = new FormData($("#formEtape2")[0]);
						 console.log(formData_2);

						 $.ajax({
		 		    			type:'POST',
		 		          data : formData_2,
		 		    			url:"../php/insererDonnees.php",
		 		          cache: false,
		 		          contentType: false,
		 		          processData: false,
		 		          beforeSend: function(){
		 		              console.log("Loading, Veuillez patienter svp...");
		 		          },
		 		    			success: function(data){
		 		    				    console.log(data);
		 					    },
		 		          error: function(data){
		 		                console.log("error: " + data);
		 		          }
		 				});

			})*/
});
