<Html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  rel="icon" type="image/png" sizes="32x32"  href="Vue/img/Logo.svg"/>	
        <title>Conciergerie</title>

		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="vue/css/bootstrap.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>
	<body>
    	<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Conciergerie</span>
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php?section=index">Conciergerie</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php 
                            if (!empty($_SESSION['Mail'])){echo '<a href="index.php?section=accueil">Accueil</a>';}
                            ?>
                        </li>
                        <li>
                            <?php
                            if (empty($_SESSION['Mail'])){echo '<a href="index.php?section=connexion">Connexion</a>';}
                            else 
                                {echo '<a href="index.php?section=deconnexion">Deconnexion</a>';}
                            ?>
                        </li>
                        <li>
                        <?php
                            if(!empty($_SESSION['Mail'])){
                            if (($_SESSION['Mail'])=="Admin" or ($_SESSION['Mail'])=="Client"){echo '<a href="index.php?section=bouquet">Bouquets</a>';}}
                            ?>
                        </li>
                        <li>
                            <?php
                            if (!empty($_SESSION['Mail'])){echo '<a href="index.php?section=service">Services</a>';}
                            ?>
                        </li>
                        <li>
                        <?php
                            if(!empty($_SESSION['Mail'])){
                            if (($_SESSION['Mail'])=="Salarie"){echo '<a href="index.php?section=cmdservice">Commander</a>';}}
                            ?>
                        </li>
                        <li>
                        <?php 
                        if(!empty($_SESSION['Mail'])){
                            if (($_SESSION['Mail'])=="Salarie" or ($_SESSION['Mail'])=="Admin"){echo '<a href="index.php?section=commande">Historique</a> ';}}
                            ?>
                        </li>
                        <li>
                        <?php 
                        if(!empty($_SESSION['Mail'])){
                            if (($_SESSION['Mail'])=="Prest"){echo '<a href="index.php?section=messervices">Mes services</a> ';}}
                            ?>
                        </li>
                        <li>
                        <?php 
                        if(!empty($_SESSION['Mail'])){
                            if (($_SESSION['Mail'])=="Client"){echo '<a href="index.php?section=messalaries">Mes salaries</a> ';}}
                            ?>
                        </li>
                        <li>
                        <?php 
                        if(!empty($_SESSION['Mail'])){
                            if (($_SESSION['Mail'])=="Admin"){echo '<a href="index.php?section=lesentreprises">Entreprises</a> ';}}
                            ?>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- jQuery -->
        <script src="vue/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vue/js/bootstrap.min.js"></script>
    </body>
</html>