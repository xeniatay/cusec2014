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

		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/library/images/cusec-logo-condensed.png"/>

		<!-- drop Google Analytics Here -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-42941833-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		<!-- end analytics -->

	</head>
	<body <?php body_class(); ?>>

		<header id='header' class='header container clearfix' role='banner'>
			<a class='<?php if (is_home()) { echo "is-home"; } ?> logo-wrapper' href='<?php echo home_url(); ?>' rel='nofollow'>
				<img class='cusec-logo' src='<?php echo get_template_directory_uri(); ?>/library/images/cusec-logo-wide.png' itemprop='image' alt='CUSEC 2014'/>
			</a>

			<nav class='header-nav' role='navigation'>
				<ul class='nav top-nav'>
					<li>
				        <a class="hu-register-button guestlist-event-206958" href="#" onclick="_gaq.push(['_trackEvent', 'Register', 'Guestlist - Global Nav', 'Clicked Register']);">
				        	Register
						</a>
					</li><li>
						<a href="<?php echo home_url(); ?>#venue" title='Venue'>Venue</a>
					</li><li>
						<a href="<?php echo home_url(); ?>#speakers" title='Speakers'>Speakers</a>
					</li><li>
						<a href="<?php echo home_url(); ?>/sponsors" title='Sponsors'>Sponsors</a>
					</li><li>
						<a href="<?php echo home_url(); ?>/schools">Schools</a>
					</li>
				<!--
					<li>
						<a href="javascript:void(0);" class='disabled'>
							Resume Upload
							<span class='comingsoon'>Coming Soon</span>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/team">Team</a>
					</li>
				-->

				</ul>
				<?php //bones_main_nav(); ?>
			</nav>
		</header>
