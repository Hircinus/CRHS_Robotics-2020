<?php
$fullpath = $_SERVER['REQUEST_URI'];
$path = basename($fullpath, ".php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link type="text/css" rel="stylesheet" href="/2020/assets/style.css">
    <script src="/2020/assets/lazyload.js"></script>
		<link rel="icon" type="image/png" href="/2020/assets/favicon.png">
		<meta charset="UTF-8">
		<meta name="description" content="CRHS se joint &agrave; nouveau au concours de robotique CRC 2020 de cette ann&eacute;e! Le CRC est un d&eacute;fi multidisciplinaire pour les &eacute;coles secondaires et les C&Eacute;GEPs, de la construction de robots &agrave; la production vid&eacute;o. Cette ann&eacute;e, la comp&eacute;tition s'appelle Flip 2020.">
		<meta name="keywords" content="CRHS, CRC, Robotique, CRC Robotique, Robotique rive-sud">
		<meta name="author" content="Jacob-Mahmoud Alfahad">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Links to external sources need to be downloaded -->
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
				<a class="navbar-brand" title="Go home" href="/2020/fr/home"><img src="/2020/assets/logo.png"></a>
				<a id="<?php if($title =='Accueil - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/home">Accueil</a>
				<a id="<?php if($title =='&Agrave; propos de nous - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/about">&Agrave; propos</a>
				<a id="<?php if($title =='&Agrave; propos du CRC - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/crc">Le CRC</a>
				<a id="<?php if($title =='&Agrave; propos de notre robot - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/robot">Notre robot</a>
				<a id="<?php if($title =='&Agrave; propos du jeu - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/game">Le jeu</a>
				<a id="<?php if($title =='Notre &eacute;quipe - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/team">&Eacute;quipe</a>
				<a id="<?php if($title =='Articles - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/articles">Articles</a>
				<a id="<?php if($title =='Vid&eacute;os - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/videos">Vid&eacute;os</a>
        <a id="fr" title="Enter the site in English" href="<?php echo "../" . $path; ?>">English</a>
			</nav>
			<nav id="navbar">
				<a class="navbar-brand" href="/2020/fr/home"><img src="/2020/assets/logo.png"></a>
				<a id="<?php if($title =='Accueil - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/home">Accueil</a>
				<a id="<?php if($title =='&Agrave; propos de nous - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/about">&Agrave; propos</a>
				<a id="<?php if($title =='&Agrave; propos du CRC - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/crc">Le CRC</a>
				<a id="<?php if($title =='&Agrave; propos de notre robot - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/robot">Notre robot</a>
				<a id="<?php if($title =='&Agrave; propos du jeu - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/game">Le jeu</a>
				<a id="<?php if($title =='Notre &eacute;quipe - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/team">&Eacute;quipe</a>
				<a id="<?php if($title =='Articles - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/articles">Articles</a>
				<a id="<?php if($title =='Vid&eacute;os - CRHS Robotique 2020'){echo 'active';}else{echo '';} ?>" href="/2020/fr/videos">Vid&eacute;os</a>
        <a id="fr" title="Enter the site in English" href="<?php echo "../" . $path; ?>">English</a>
			</nav>
			<script src="/2020/assets/script.js"></script>
			<div class="content">
				<a name="target"></a>
