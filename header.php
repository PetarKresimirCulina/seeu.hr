<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo pll__( 'description' ); ?>">
    <meta name="keywords" content="<?php echo pll__( 'keywords' ); ?>">
    <link rel="icon" href="<?php echo get_bloginfo("template_url") . '/img/favicon.ico'; ?>">

	<?php
		$name = get_bloginfo('name');
		$tagline = get_bloginfo('description');
	?>

    <title><?php echo $name . ' - ' . $tagline; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo("template_url") . '/css/style.css'; ?>" rel="stylesheet">
	<script defer src="<?php echo get_bloginfo("template_url") . '/js/fontawesome-all.js'; ?>"></script>
	 

	
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<?php wp_head(); ?>
  </head>