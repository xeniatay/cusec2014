<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>CUSEC 2014 <?php wp_title('|'); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- google web fonts -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-42941833-1', 'cusec.net');
			ga('send', 'pageview');

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-42941833-1']);
			_gaq.push(['_trackPageview']);
		</script>
		<!-- end analytics -->

	</head>
	<body <?php body_class(); ?>>

		<header id='header' class='header container clearfix' role='banner'>
			<a class='<?php if (is_home()) { echo "is-home"; } ?> logo-wrapper' href='<?php echo home_url(); ?>' rel='nofollow'>
				<img class='cusec-logo' src='<?php echo get_template_directory_uri(); ?>/library/images/cusec-logo-wide.png' alt='CUSEC 2014'/>
			</a>

			<nav class='header-nav' role='navigation'>
				<ul class='nav top-nav'>
					<li>
						<a href="#speakers" title='Speakers'>Speakers</a>
					</li><li>
						<a href="#sponsors" title='Sponsors'>Sponsors</a>
					</li><li>
						<a href="javascript:void(0);" class='disabled'>
							Schools
							<span class='comingsoon'>Coming Soon</span>
						</a>
					</li>
				</ul>
				<?php //bones_main_nav(); ?>
			</nav>
		</header>
