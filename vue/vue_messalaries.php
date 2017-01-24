<?php 
	include "vue/vue_entete.php";
 ?>
<html>
	<div id="contenu">
	  <div class="table-responsive-vertical shadow-z-1">

	  	<table id="table" class="table table-hover table-mc-light-blue">
		    <thead>
		      	<h2><b>Mes salariés</b></h2>
		        <tr>
		          	<th><b>Nom</b></th>
		          	<th><b>Prénom</b></th>
		          	<th><b>Mail</b></th>
		          	<th></th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		          	<td data-title="Nom">Dupont</td>
		          	<td data-title="Prénom">Pierre</td>
		          	<td data-title="Mail">Pierre.Dupont@contact.com</td>
		          	<td><button class="btn btn-danger" type="submit">Modifier</button></td>
		        </tr>
		        <tr>
		          	<td data-title="Nom">Georges</td>
		          	<td data-title="Prénom">Lucie</td>
		          	<td data-title="Mail">Lucie.Georges@contact.com</td>
		          	<td><button class="btn btn-danger" type="submit">Modifier</button></td>
		        </tr>
		        <tr>
		       		<td data-title=""><a href="#">Ajouter <i class="fa fa-plus-circle fa-lg" aria-hidden="true"> </i></a></td>
		          	<th></th>
		          	<th></th>
		          	<th></th>
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