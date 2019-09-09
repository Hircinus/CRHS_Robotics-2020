<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$acceptLang = ['en', 'fr'];
$lang = in_array($lang, $acceptLang) ? $lang : 'en';

if ($lang == 'en')
	{
		header("Location: home");
		die();
	}

if ($lang == 'fr')
	{
		header("Location: fr/accueil");
		die();
	}
  else
	{
		header("Location: home");
	    die;
	}

?>