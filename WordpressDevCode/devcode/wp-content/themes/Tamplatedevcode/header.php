<?php
	//$dir = caminho da pasta do tema
	$dir = esc_url( get_template_directory_uri() );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php bloginfo('name');?>
		</title>
		<meta charset="<?php bloginfo('charset');?>">

		<meta name="viewport" content="width=device-width,initial-scale=1">

		<link rel="stylesheet" type="text/css" href="<?=$dir;?>/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="<?=$dir;?>/css/fontawesome.min.css">

		<link rel="stylesheet" type="text/css" href="<?=$dir;?>/css/lightbox.min.css">

        <link rel="stylesheet" type="text/css" href="<?=$dir;?>/style.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

		<script type="text/javascript" src="<?=$dir;?>/js/jquery-3.3.1.min.js"></script>

		<script type="text/javascript" src="<?=$dir;?>/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="<?=$dir;?>/js/lightbox.min.js"></script>
		


		<?php
			//scripts de plugins de terceiros
			wp_head();
		?>

		<link rel="shortcut icon" href="<?=$dir;?>">

	</head>

	