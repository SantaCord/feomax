<?php
$language = 'ru';
$title = 'Home';
$brend = 'FeoMax';
/* $left_aside = '
	<ul class="menu">
		<li><a href="#">Link_1</a></li>
		<li><a href="#">Link_2</a></li>
		<li><a href="#">Link_3</a></li>
		<li><a href="#">Link_4</a></li>
		<li><a href="#">Link_5</a></li>
		<li><a href="#">Link_6</a></li>
	</ul>'; */
$error_message = '<div class="alert alert-danger" role="alert">Оопс! Что-то пошло не так...</div>';

ob_start();
if(!isset($_GET['id']))
{
	require_once(__DIR__ . '/../main/index.php');
}
else
{
	require_once(__DIR__ . '/../main/view.php');
}	

$content = ob_get_clean();
?>

<!DOCTYPE html>
<html lang="<?= $language ?>">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" rel="styleshit">
	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/js/common.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><?= $brend ?></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#">Link_1</a></li>
						<li><a href="#">Link_2</a></li>
						<li><a href="#">Link_3</a></li>
						<li><a href="#">Link_4</a></li>
						<li><a href="#">Link_5</a></li>
						<li><a href="#">Link_6</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="left-aside">
			<?= $left_aside ?>
		</div>
		<div class="main">
			<?= $error_message ?>
			<?= $content ?>
		</div>
	</div>
</body>
</html>