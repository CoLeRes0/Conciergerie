<!DOCTYPE html>
<?php 
	include "vue/vue_entete.php";
 ?>
<html>
	<body>
		<center>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
			
				<div class="item active">
					<img class="autre" src="vue/img/2.jpg" alt="Picasso">
				</div> 

				<div class="item">
				   <img class="autre" src="vue/img/1.jpg" alt="Work">
				</div>

				<div class="item">
				  <img class="autre" src="vue/img/3.jpg" alt="Code">
				</div>

			</div>			  
		</div>
		<?php
			if(!empty($_SESSION['Mail'])){
		    
		    if (($_SESSION['Mail'])=="Admin" or ($_SESSION['Mail'])=="Client"){echo '	
			<div class="row">
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-block">
			        <h3 class="card-title">Complet</h3>
			        <p class="card-text">Dressing, Ménage, Coiffeur.</p>
			        <a href="index.php?section=bouquet" class="btn btn-primary">Voir l\'offre</a>
			      </div>
			    </div>
			  </div>
			  
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-block">
			        <h3 class="card-title">Low Cost</h3>
			        <p class="card-text">Ménage.</p>
			        <a href="index.php?section=bouquet" class="btn btn-primary">Voir l\'offre</a>
			      </div>
			    </div>
			  </div>
			</div>
		';}} 
		?>
		</center>
	</body>
</html>