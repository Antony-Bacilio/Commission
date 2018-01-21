$(document).ready(function(){

    //al enviar el formulario
    $('#btn-upload').click(function(){
            //información del formulario
            var formData = new FormData($("#form1")[0]);
            var message = "";
            //hacemos la petición ajax
            $.ajax({
                url: '../../serveur/php/upload.php',
                type: 'POST',
                // Form data
                //datos del formulario
                data: formData,
                //necesario para subir archivos via ajax
                cache: false,
                contentType: false,
                processData: false,
                //mientras enviamos el archivo
                beforeSend: function(){
                    console.log("Loading, Veuillez patienter svp...");
                },
                //una vez finalizado correctamente
                success: function(data){
                    $(".alert-success").addClass('show');
                    console.log(data);
                },
                //si ha ocurrido un error
                error: function(data){
                    console.log(data);
                }
            });
    });
})
