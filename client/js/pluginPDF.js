
/*
* Le plug-in PDF
*/
(function(a){a.twModalPDF=function(b){defaults={title:"PDF dans un « modal »",message:"Impossible d’ouvrir le document PDF",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style="max-height: 1020px;overflow-y: auto;"':"";html='<div class="modal fade" id="oModalPDF">';html+='<div class="modal-dialog modal-lg">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#oModalPDF").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);


  $(function(){
    $('.voir-pdf').on('click',function(){
      var sUrl = $(this).attr('href');
      var sTitre = $(this).attr('title');
      var sIframe = '<object type="application/pdf" data="'+sUrl+'" width="100%" height="800">Aucun support</object>';
      $.twModalPDF({
        title:sTitre,
        message: sIframe,
        closeButton:true,
        scrollable:false
      });
      return false;
    });
  })
