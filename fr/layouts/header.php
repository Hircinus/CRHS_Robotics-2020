<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link type="text/css" rel="stylesheet" href="../assets/style.css">
		<script src="../assets/script.js"></script>
      <script src="../assets/lazyload.js"></script>
		<link rel="icon" type="image/png" href="../assets/favicon.png">
		<meta charset="UTF-8">
		<meta name="description" content="CRHS joins robotics in this year's 2020 CRC robotics competition! This year's theme is ESPN, 
		so check it out!">
		<meta name="keywords" content="CRHS, CRC, Robotics, CRC Robotics, south shore robotics, robotics south shore">
		<meta name="author" content="Jacob-Mahmoud Alfahad">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body>
		<div id="content">
			<nav class="btmnav">
				<a class="navbar-brand" href="accueil"><img src="../assets/favicon.png"></a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN Home'){echo 'active';}else{echo '';} ?>" href="home">Accueil</a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN About'){echo 'active';}else{echo '';} ?>" href="about">&Agrave; propos</a>
				<div class="dropdown">
				  <button id="<?php if($title =='Tech articles - CRHS Robotics 2020' || $title=='Important articles - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" class="dropbtn">Articles <i class="fas fa-caret-right"></i></button>
				  <div class="dropdown-content">
					<a id="<?php if($title =='Tech articles - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="article/tech">Tech</a>
					<a id="<?php if($title =='Important articles - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="article/important">Important</a>
				  </div>
				</div>
				<div class="dropdown">
				  <button id="<?php if($title =='CRHS Robotics 2020 - ESPN Team'){echo 'active';}else{echo '';} ?>" class="dropbtn">&Eacute;quipe <i class="fas fa-caret-right"></i></button>
				  <div class="dropdown-content">
					<a href="team#">Link 1</a>
					<a href="team#">Link 2</a>
					<a href="team#">Link 3</a>
				  </div>
				</div>
            <a id="fr" href="<?php if($title=='CRHS Robotique 2020 - ESPN Accueil'){echo '../home';}if($title=='CRHS Robotique 2020 - ESPN &Agrave; propos'){echo '../about';}else{echo '';} ?>">English</a>
				<!--
				<a class="social-link" href="https://www.facebook.com/CRHSROBOTICSOFFICIAL/" target="_blank"><i class="fab fa-facebook-square"></i></a>
				<a class="social-link" href="https://www.instagram.com/crhsrobotics2k20/" target="_blank"><i class="fab fa-instagram"></i></a>
				<a class="social-link" href="https://www.youtube.com/channel/UCWMAQGH2H-f1ipbH2OWfZag" target="_blank"><i class="fab fa-youtube"></i></a>
				-->
			</nav>
			<nav id="navbar">
				<a class="navbar-brand" href="home"><img src="../assets/favicon.png"></a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN Home'){echo 'active';}else{echo '';} ?>" href="home">Accueil</a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN About'){echo 'active';}else{echo '';} ?>" href="about">&Agrave; propos</a>
				<div class="dropdown">
				  <button id="<?php if($title =='Tech articles - CRHS Robotics 2020' || $title=='Important articles - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" class="dropbtn">Articles <i class="fas fa-caret-right"></i></button>
				  <div class="dropdown-content">
					<a id="<?php if($title =='Tech articles - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="article/tech">Tech</a>
					<a id="<?php if($title =='Important articles - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="article/important">Important</a>
				  </div>
				</div>
				<div class="dropdown">
				  <button id="<?php if($title =='CRHS Robotics 2020 - ESPN Team'){echo 'active';}else{echo '';} ?>" class="dropbtn">&Eacute;quipe <i class="fas fa-caret-right"></i></button>
				  <div class="dropdown-content">
					<a href="team#">Link 1</a>
					<a href="team#">Link 2</a>
					<a href="team#">Link 3</a>
				  </div>
				</div>
            <a id="fr" href="<?php if($title=='CRHS Robotique 2020 - ESPN Accueil'){echo '../home';}if($title=='CRHS Robotique 2020 - ESPN &Agrave; propos'){echo '../about';}else{echo '';} ?>">English</a>
			</nav>
			<div class="content">