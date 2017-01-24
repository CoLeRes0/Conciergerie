<?php 
	include "vue/vue_entete.php";
 ?>
<html>
	<div id="contenu">
	  <div class="table-responsive-vertical shadow-z-1">
<?php
	if(!empty($_SESSION['Mail'])){			    
		if (($_SESSION['Mail'])=="Admin"){echo '
		  	<table id="table" class="table table-hover table-mc-light-blue">
		      <thead>
		      <h2><b>Commande en cours</b></h2>
		        <tr>
		          <th><b>Salarié</b></th>
		          <th><b>Etat</b></th>
		          <th><b>Date</b></th>
		          <th><b>Date Livraison</b></th>
		          <th><b>Prix</b></th>
		          <th></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td data-title="Salarie">DUPONT</td>
		          <td data-title="Etat"><a href="#" class="btn btn-primary">Régler</a></td>
		          <td data-title="Date">11/01/2017</td>
		          <td data-title="Date Livraison">16/01/2017</td>
		          <td data-title="Prix">25 €</td>
		          <td><a href="#" class="btn btn-primary">Annuler</a></td>
		        </tr>
		        <tr>
		       <td data-title=""><a href="index.php?section=cmdservice">Commander <i class="fa fa-plus-circle fa-lg" aria-hidden="true"> </i></a></td>
		          <td data-title=""></td>
		          <td data-title=""></td>
		          <td data-title=""></td>
		          <td data-title=""></td>
		          <td data-title=""></td>
		        </tr>
		      </tbody>
		    </table>
	';}} 
?> 
<?php
	if(!empty($_SESSION['Mail'])){			    
		if (($_SESSION['Mail'])=="Salarie"){echo '
		  	<table id="table" class="table table-hover table-mc-light-blue">
		      <thead>
		      <h2><b>Commande en cours</b></h2>
		        <tr>
		          <th><b>Service</b></th>
		          <th><b>Etat</b></th>
		          <th><b>Date</b></th>
		          <th><b>Date Livraison</b></th>
		          <th><b>Prix</b></th>
		          <th></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td data-title="Service">Ménage</td>
		          <td data-title="Etat"><a href="#" class="btn btn-primary">Régler</a></td>
		          <td data-title="Date">11/01/2017</td>
		          <td data-title="Date Livraison">16/01/2017</td>
		          <td data-title="Prix">25 €</td>
		          <td><a href="#" class="btn btn-primary">Annuler</a></td>
		        </tr>
		        <tr>
		       <td data-title=""><a href="index.php?section=cmdservice">Commander <i class="fa fa-plus-circle fa-lg" aria-hidden="true"> </i></a></td>
		          <td data-title=""></td>
		          <td data-title=""></td>
		          <td data-title=""></td>
		          <td data-title=""></td>
		          <td data-title=""></td>
		        </tr>
		      </tbody>
		    </table>
	';}} 
?> 
	    <table id="table" class="table table-hover table-mc-light-blue">
	      <thead>
	      <h2><b>Commande archivées</b></h2>
	        <tr>
	          <th><b>Service</b></th>
	          <th><b>Etat</b></th>
	          <th><b>Prix</b></th>
	          <th></th>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td data-title="Service">Garde d'enfants</td>
	          <td data-title="Etat"><a href="#" class="btn btn-primary">Facture</a></td>
	          <td data-title="Prix">15 €</td>
	          <td><a href="#" class="btn btn-primary">Avis</a></td>
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