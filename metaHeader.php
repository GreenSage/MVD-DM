<? require_once 'mvd.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title;?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:description" content="<?=$title;?>">
  <meta property="og:title" content="<?=$title;?>">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header><?=$title;?></header>
	<? echo m::links(); ?>
	<article class="frame">
