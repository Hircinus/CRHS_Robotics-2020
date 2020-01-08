<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link type="text/css" rel="stylesheet" href="/crhsrobotics2020/assets/style.css">
    <script src="/crhsrobotics2020/assets/lazyload.js"></script>
		<link rel="icon" type="image/png" href="/crhsrobotics2020/assets/favicon.png">
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
	<body id="body">
	<div id="transition"></div>
		<div id="content">
			<nav class="btmnav">
				<a class="navbar-brand" title="Go home" href="/crhsrobotics2020/home"><img src="/crhsrobotics2020/assets/logo.png"></a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN Home'){echo 'active';}else{echo '';} ?>" href="/crhsrobotics2020/home">Home</a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN About'){echo 'active';}else{echo '';} ?>" href="/crhsrobotics2020/about">About</a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN Articles'){echo 'active';}else{echo '';} ?>" href="/crhsrobotics2020/articles">Articles</a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN CRC'){echo 'active';}else{echo '';} ?>" href="/crhsrobotics2020/crc">The CRC</a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN Robot'){echo 'active';}else{echo '';} ?>" href="/crhsrobotics2020/robot">Our robot</a>
				<div class="dropdown">
				  <button id="<?php if($title =='CRHS Robotics 2020 - ESPN Team'){echo 'active';}else{echo '';} ?>" class="dropbtn">Team <i class="fas fa-caret-right"></i></button>
				  <div class="dropdown-content">
					<a href="/crhsrobotics2020/team#Robot">Robot</a>
					<a href="/crhsrobotics2020/team#Kiosk">Kiosk</a>
					<a href="/crhsrobotics2020/team#Video">Video</a>
					<a href="/crhsrobotics2020/team#Web">Web/journalism</a>
					<a href="/crhsrobotics2020/team#Mentors">Mentors</a>
				  </div>
				</div>
        <a id="fr" title="Acc&eacute;dez au site en Fran&ccedil;ais" href="<?php echo "fr" . $_SERVER['REQUEST_URI']; ?>">Fran&ccedil;ais</a>
			</nav>
			<nav id="navbar">
				<a class="navbar-brand" href="/crhsrobotics2020/home"><img src="/crhsrobotics2020/assets/logo.png"></a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN Home'){echo 'active';}else{echo '';} ?>" href="home">Home</a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN About'){echo 'active';}else{echo '';} ?>" href="about">About</a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN Articles'){echo 'active';}else{echo '';} ?>" href="articles">Articles</a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN CRC'){echo 'active';}else{echo '';} ?>" href="crc">The CRC</a>
				<a id="<?php if($title =='CRHS Robotics 2020 - ESPN Robot'){echo 'active';}else{echo '';} ?>" href="robot">Our robot</a>
				<div class="dropdown">
				  <button id="<?php if($title =='CRHS Robotics 2020 - ESPN Team'){echo 'active';}else{echo '';} ?>" class="dropbtn">Team <i class="fas fa-caret-right"></i></button>
				  <div class="dropdown-content">
						<a href="/crhsrobotics2020/team#Robot">Robot</a>
						<a href="/crhsrobotics2020/team#Kiosk">Kiosk</a>
						<a href="/crhsrobotics2020/team#Video">Video</a>
						<a href="/crhsrobotics2020/team#Web">Web/journalism</a>
						<a href="/crhsrobotics2020/team#Mentors">Mentors</a>
				  </div>
				</div>
            <a id="fr" href="<?php echo "fr" . $_SERVER['REQUEST_URI']; ?>">Fran&ccedil;ais</a>
			</nav>
			<script src="/crhsrobotics2020/assets/script.js"></script>
			<div class="content">
