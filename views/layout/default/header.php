<html>
<head>
	<title><?php if(isset($this->titulo)) echo $this->titulo;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
	<link rel="stylesheet" href="<?php echo $_layoutParams['ruta_css'] ;?>estilos.css" type="text/css">
	<script  src="<?php echo BASE_URL; ?>public/js/jquery.js" type="text/javascript"></script>
	<script  src="<?php echo BASE_URL; ?>public/js/jquery.validate.js" type="text/javascript"></script>

	<?php if(isset($_layoutParams['js']) && count($_layoutParams['js'])): ?>

		<?php for ($i=0; $i < count($_layoutParams['js']); $i++) : ?>
		<script  src="<?php echo $_layoutParams['js'][$i] ?>" type="text/javascript"></script>
	<?php endfor; ?>
	<?php endif; ?>
</head>
<body>
	<div id="main">
		<div id="header">
			<h1><?php echo APP_NAME; ?> </h1>
		</div>
		<div id="menu">
			<ul>
				<?php if(isset($_layoutParams['menu'])): ?>
				<?php for ($i = 0 ; $i < count($_layoutParams['menu']); $i++): ?>
				<li><a href="<?php echo $_layoutParams['menu'][$i]['enlace'] ;?>"><?php echo $_layoutParams['menu'][$i]['titulo'] ;?></a></li>
				<?php endfor; ?>
				<?php endif; ?>

			</ul>
		</div>
		<div id="error"><?php if(isset($this->_error)) echo $this->_error; ?></div>