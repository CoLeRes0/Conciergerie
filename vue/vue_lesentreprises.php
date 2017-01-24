<?php 
	include "vue/vue_entete.php";
 ?>
<html>
	<div id="contenu">
	  <div class="table-responsive-vertical shadow-z-1">

	  	<table id="table" class="table table-hover table-mc-light-blue">
		    <thead>
		      	<h2><b>Entreprises Cliente</b></h2>
		        <tr>
		          	<th><b>Nom</b></th>
		          	<th><b>Bouquet</b></th>
		          	<th></th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		          	<td data-title="Nom">SNCF</td>
		          	<td data-title="Bouquet">Complet</td>
		          	<td><button class="btn btn-danger" type="submit">Modifier</button></td>
		        </tr>
		        <tr>
		          	<td data-title="Nom">Orange</td>
		          	<td data-title="Bouquet">Complet</td>
		          	<td><button class="btn btn-danger" type="submit">Modifier</button></td>
		        </tr>
		        <tr>
		       		<td data-title=""><a href="#">Ajouter <i class="fa fa-plus-circle fa-lg" aria-hidden="true"> </i></a></td>
		          	<td data-title=""></td>
		          	<td></td>
		        </tr>
		    </tbody>
	    </table>

	    <table id="table" class="table table-hover table-mc-light-blue">
		    <thead>
		      	<h2><b>Entreprises Prestataire</b></h2>
		        <tr>
		          <th><b>Nom</b></th>
		          <th><b>Services</b></th>
		          <th></th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		          	<td data-title="Nom">CleanMaison</td>
		          	<td data-title="Services">Ménage</td>
		          	<td><button class="btn btn-danger" type="submit">Modifier</button></td>
		        </tr>
		        <tr>
		          	<td data-title="Nom">Orleans'Propre</td>
		          	<td data-title="Services">Ménage</td>
		          	<td><button class="btn btn-danger" type="submit">Modifier</button></td>
		        </tr>
		        <tr>
		          	<td data-title="Nom">Orleans Enfants</td>
		          	<td data-title="Services">Garde enfants</td>
		          	<td><button class="btn btn-danger" type="submit">Modifier</button></td>
		        </tr>
		        <tr>
		          	<td data-title="Nom">Coif'Orleans</td>
		          	<td data-title="Services">Coiffeur</td>
		          	<td><button class="btn btn-danger" type="submit">Modifier</button></td>
		        </tr>
		        <tr>
		       		<td data-title=""><a href="#">Ajouter <i class="fa fa-plus-circle fa-lg" aria-hidden="true"> </i></a></td>
		          	<td data-title=""></td>
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