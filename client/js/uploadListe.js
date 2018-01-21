$(document).ready(function(){

    //hacemos la petición ajax
    $.ajax({
        url: '../../serveur/php/uploadListe.php',
        type: 'POST',
        // Form data
        //datos del formulario
        data: false,
        dataType: 'json',
        //necesario para subir archivos via ajax
        cache: false,
        contentType: false,
        processData: false,
        //una vez finalizado correctamente
        success: function(data){
            addRow(data);
        },
        //si ha ocurrido un error
        error: function(data){
            console.log(data);
        }
    });

})



function addRow(data){
    var n = 1;

    //foreach (var file in data)
    data.forEach(function(file) {
        console.log(file);
        var size = formatFileSize(file.size, 2);
        var Pdf = " voir-pdf";
        var row = `<tr class="">
                              <td scope="row"><strong>${n}</strong></td>
                              <td>${file.name}</td>
                              <td>${size}</td>
                              <td><a class="btn btn-sm btn-outline-success ${Pdf}" target='_blank' href="${file.url}"  title="">Voir en ligne</a></td>
                          </tr>`;
          console.log(row);
          $(".table > tbody").append(row);
          n++;
    });
}

function formatFileSize(bytes,decimalPoint) {
       if(bytes == 0) return '0 Bytes';
       var k = 1000,
           dm = decimalPoint || 2,
           sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
           i = Math.floor(Math.log(bytes) / Math.log(k));
       return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
}
