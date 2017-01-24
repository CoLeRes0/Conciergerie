<?php 
  include "vue/vue_entete.php";
 ?>
<html>
  <div id="contenu">
    <div class="table-responsive-vertical shadow-z-1">

      <table id="table" class="table table-hover table-mc-light-blue">
        <thead>
            <h2><b>Mes services</b></h2>
            <tr>
                <th><b>Nom</b></th>
                <th><b>Détails</b></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-title="Nom">Ménage</td>
                <td data-title="Détails">Le ménage comprend : 1h de ménage, le nettoyage des surfaces, le nettoyage du sol, nettoyage salle de bain/toilettes, nettoyage de la cuisine, mise en place de draps propres.</td>
                <td><button class="btn btn-danger" type="submit">Modifier</button></td>
                <td><button class="btn btn-primary" type="submit">Avis</button></td>
            </tr>
            <tr>
                <td data-title="Nom">Pressing</td>
                <td data-title="Détails">Le service de nettoyage du linge comprend : le nettoyage et séchage de vos draps et serviettes, la remise en place de vos draps et serviettes, le nettoyage du linge est pour 1 kit 2 personnes soit : 1 housse de couette, 1 drap housse, 2 taies d'oreillers, 2 serviettes, 1 tapis de bain et 1 serviette main.</td>
                <td><button class="btn btn-danger" type="submit">Modifier</button></td>
                <td><button class="btn btn-primary" type="submit">Avis</button></td>
            </tr>
            <tr>
              	<td data-title=""><a href="#">Ajouter <i class="fa fa-plus-circle fa-lg" aria-hidden="true"> </i></a></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>    
</html>

<script type="text/javascript">
  $(document).ready(function() {

      var table = $('#table');

      // Table bordered
      $('#table-bordered').change(function() {
          var value = $( this ).val();
          table.removeClass('table-bordered').addClass(value);
      });

      // Table striped
      $('#table-striped').change(function() {
          var value = $( this ).val();
          table.removeClass('table-striped').addClass(value);
      });
    
      // Table hover
      $('#table-hover').change(function() {
          var value = $( this ).val();
          table.removeClass('table-hover').addClass(value);
      });

      // Table color
      $('#table-color').change(function() {
          var value = $(this).val();
          table.removeClass(/^table-mc-/).addClass(value);
      });
  });

  (function(removeClass) {

    jQuery.fn.removeClass = function( value ) {
      if ( value && typeof value.test === "function" ) {
        for ( var i = 0, l = this.length; i < l; i++ ) {
          var elem = this[i];
          if ( elem.nodeType === 1 && elem.className ) {
            var classNames = elem.className.split( /\s+/ );

            for ( var n = classNames.length; n--; ) {
              if ( value.test(classNames[n]) ) {
                classNames.splice(n, 1);
              }
            }
            elem.className = jQuery.trim( classNames.join(" ") );
          }
        }
      } else {
        removeClass.call(this, value);
      }
      return this;
    }
  })(jQuery.fn.removeClass);
</script>