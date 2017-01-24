<?php 
	include "vue/vue_entete.php";
 ?>
<html>
	<div id="contenu">
		<div class="table-responsive-vertical shadow-z-1">
			<?php 
			    if(!empty($_SESSION['Mail'])){
			        if (($_SESSION['Mail'])=="Client"){echo ' 
				  	<table id="table" class="table table-hover table-mc-light-blue">
				      <thead>
				      <h2><b>Liste abonnements</b></h2>
				        <tr>
				          <th><b>Nom</b></th>
				          <th><b>Détails</b></th>
				          <th></th>
				        </tr>
				      </thead>
				      <tbody>
				        <tr>
				          <td data-title="Nom">Complet</td>
				          <td data-title="Détails">Ménage, Coiffeur, Garde d\'enfants</td>
				          <td data-title=""><a href="#"><i class="fa fa-minus-circle fa-lg" aria-hidden="true"></i></a></td>
				        </tr>
				      </tbody>
				    </table>

				    <h2><b>Liste des bouquets</b></h2>
				    <table id="table" class="table table-hover table-mc-light-blue">
				      <thead>
				        <tr>
				          <th><b>Nom</b></th>
				          <th><b>Détails</b></th>
				          <th></th>
				        </tr>
				      </thead>
				      <tbody>
				        <tr>
				          <td data-title="Nom">Low Cost</td>
				          <td data-title="Détails">Ménage</td>
				          <td data-title=""><a href="#"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i></a></td>
				        </tr>
				        <tr>
				          <td data-title="Nom">Medium</td>
				          <td data-title="Détails">Ménage, Garde d\'enfants, Dressing</td>
				          <td data-title=""><a href="#"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i></a></td>
				        </tr>
				        <tr>
				          <td data-title=""><a href="#">Créer <i class="fa fa-plus-circle fa-lg" aria-hidden="true"> </i></a></td>
				          <td data-title=""></td>
				          <td data-title=""></td>
				        </tr>
				      </tbody>
				    </table>
			';}} 
			if(!empty($_SESSION['Mail'])){			    
				if (($_SESSION['Mail'])=="Admin"){echo '
					<table id="table" class="table table-hover table-mc-light-blue">
				      <thead>
				      <h2><b>Liste abonnements</b></h2>
				        <tr>
				          <th><b>Nom</b></th>
				          <th><b>Entreprise</b></th>
				          <th><b>Détails</b></th>
				          <th></th>
				        </tr>
				      </thead>
				      <tbody>
				        <tr>
				          <td data-title="Nom">Complet</td>
				          <td data-title="Nom">Orange</td>
				          <td data-title="Détails">Ménage, Coiffeur, Garde d\'enfants</td>
				          <td data-title=""><a href="#"><i class="fa fa-minus-circle fa-lg" aria-hidden="true"></i></a></td>
				        </tr>
				      </tbody>
				    </table>
				    
			    	<h2><b>Liste des bouquets à tarifer</b></h2>
				    <table id="table" class="table table-hover table-mc-light-blue">
				      <thead>
				        <tr>
				          <th><b>Nom</b></th>
				          <th><b>Détails</b></th>
				          <th></th>
				        </tr>
				      </thead>
				      <tbody>
				        <tr>
				          <td data-title="Name">Universite</td>
				          <td data-title="Détails">Ménage, Garde d\'enfants, Dressing</td>
				          <td data-title=""><input type ="number" step="0.01" placeholder="Tarif"> </input><button class="btn btn-primary" type="submit">Entrer</button></td>
				        </tr>
				    </table>
			';}} 
			?>
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