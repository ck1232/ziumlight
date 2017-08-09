<!DOCTYPE html>
<html>
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<base href="<?php echo base_url(); ?>" />
<script src="js/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js" type="text/javascript"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<link href="css/stylesheet.css" rel="stylesheet">
<script type="text/javascript" src="js/image-picker/image-picker.min.js"></script>
<link href="css/stylesheet.css" rel="css/image-picker/image-picker.css">
<link href="css/custom.css" rel="stylesheet">
<?php if (isset($styles)){
	foreach ($styles as $style) { ?>
<link href="<?php echo $style->href; ?>" type="text/css" rel="<?php echo $style->rel; ?>" media="<?php echo $style->media; ?>" />
<?php }} ?>
<?php if(isset($links)){ 
	foreach ($links as $link) { ?>
<link href="<?php echo $link->href; ?>" rel="<?php echo $link->rel; ?>" />
<?php }} ?>

<?php 
	if(isset($menu_scripts)){
	foreach ($menu_scripts as $script) { ?>
<script src="<?php echo $script; ?>" type="text/javascript"></script>
<?php }} ?>
</head>
<body>