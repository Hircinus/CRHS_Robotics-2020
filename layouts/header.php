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
		<meta name="description" content="CRHS joins robotics in this year's 2020 CRC robotics competition! This year's theme is ESPN,
		so check it out!">
		<meta name="keywords" content="CRHS, CRC, Robotics, CRC Robotics, south shore robotics, robotics south shore">
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
				<a class="navbar-brand" title="Go home" href="/2020/home"><img src="/2020/assets/logo.png"></a>
				<a id="<?php if($title =='Home - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/home">Home</a>
				<a id="<?php if($title =='About us - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/about">About</a>
				<a id="<?php if($title =='About the CRC - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/crc">The CRC</a>
				<a id="<?php if($title =='About our robot - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/robot">Our robot</a>
				<a id="<?php if($title =='About the game - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/game">The game</a>
				<a id="<?php if($title =='Our team - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/team">Team</a>
				<a id="<?php if($title =='Articles - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/articles">Articles</a>
				<a id="<?php if($title =='Videos - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/videos">Videos</a>
        <a id="fr" title="Acc&eacute;dez au site en Fran&ccedil;ais" href="<?php echo "fr/" . $path; ?>">Fran&ccedil;ais</a>
			</nav>
			<nav id="navbar">
				<a class="navbar-brand" href="/2020/home"><img src="/2020/assets/logo.png"></a>
				<a id="<?php if($title =='Home - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/home">Home</a>
				<a id="<?php if($title =='About us - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/about">About</a>
				<a id="<?php if($title =='About the CRC - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/crc">The CRC</a>
				<a id="<?php if($title =='About our robot - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/robot">Our robot</a>
				<a id="<?php if($title =='About the game - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/game">The game</a>
				<a id="<?php if($title =='Our team - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/team">Team</a>
				<a id="<?php if($title =='Articles - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/articles">Articles</a>
				<a id="<?php if($title =='Videos - CRHS Robotics 2020'){echo 'active';}else{echo '';} ?>" href="/2020/videos">Videos</a>
        <a id="fr" title="Acc&eacute;dez au site en Fran&ccedil;ais" href="<?php echo "fr/" . $path; ?>">Fran&ccedil;ais</a>
			</nav>
			<script src="/2020/assets/script.js"></script>
			<div class="content">
				<a name="target"></a>
