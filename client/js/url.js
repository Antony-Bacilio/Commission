//url du site, endroit à changer unique

//http://localhost/Projet_Tutore/CMS_FINAL/client/onglets/creer-reunion-2.html

var url_host = "localhost/Projet_Tutore/CMS_FINAL/";
var url_client = url_host + "client/";
var url_serveur = url_host + "serveur/";
var url_onglets = url_client + "onglets/";

var url_rss = url_site + "rsslib/";
var url_scripts = url_site + "scripts/";

function loadPage() {
      var ref=cordova.inAppBrowser.open('aPropos.html', '_blank', 'location=yes');
      var myCallback = function(event) {
              alert(event.url);
      }

      ref.addEventListener('loadstart', myCallback);
      ref.removeEventListener('loadstart', myCallback);
}
