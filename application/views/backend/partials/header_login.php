<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
  	<?php echo $title; ?>
		<?php 
			if ( isset( $action_title )) {
				echo " | ";
				if ( is_string( $action_title )) echo $action_title;
				else if ( is_array( $action_title )) echo $action_title[count($action_title) - 1]['label'];
			} 
	?>: Belajar Al-Quran dan Al-Hadits
  </title>
  <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url('assets/baru/img/apple-touch-icon-57x57-precomposed.png'); ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url('assets/baru/img/apple-touch-icon-72x72-precomposed.png'); ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url('assets/baru/img/apple-touch-icon-114x114-precomposed.png'); ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url('assets/baru/img/apple-touch-icon-144x144-precomposed.png'); ?>">

    <!-- BASE CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/baru/css/bootstrap_customized.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/baru/css/style.css'); ?>">

    <!-- SPECIFIC CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/baru/css/account.css'); ?>">

    <!-- YOUR CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/baru/css/custom.css'); ?>">

</head>
<body id="login_bg">
<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->