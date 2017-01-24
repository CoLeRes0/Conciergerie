<?php 
	include "vue/vue_entete.php";
 ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</head>

	<body>
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<h1> Service <br/> <small> Merci de renseigner les informations </small></h1>

				<div class="form-group">
					<select class="form-control" title="Services - Entreprises">
					  <optgroup label="Services - Entreprises">
					    <option>Ménage - CleanMaison</option>
					    <option>Ménage - Orleans'Propre</option>
					    <option>Garde enfants - Orleans Enfants</option>
					    <option>Coiffeur - Coif'Orleans</option>
					  </optgroup>
					</select>
				</div>

				<div class="form-group">
					<input type="text" placeholder="Date service" class="form-control" id="datepicker">
				</div>
				<button class="btn btn-primary" type="submit">Commander</button>
			</div>
		</div>
	</body>
</html>
<script>
  $(function() {
	$( "#datepicker" ).datepicker({
	altField: "#datepicker",
	closeText: 'Fermer',
	prevText: 'Précédent',
	nextText: 'Suivant',
	currentText: 'Aujourd\'hui',
	monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
	monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
	dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
	dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
	dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
	weekHeader: 'Sem.',
	dateFormat: 'dd-mm-yy'
	});
	});
</script>