		<footer id='footer' class="footer" role="contentinfo">
			<section class='footer-content footer-social'>
				<div class='container'>
	                <a class='footer-icon twitter' href="http://www.twitter.com/cusec" title="@cusec" onclick="_gaq.push(['_trackEvent', 'Social Media', 'Twitter', 'Clicked to Twitter']);">
						<img src='<?php echo get_template_directory_uri(); ?>/library/images/icon-twitter.svg' alt='Twitter @cusec'/>
	                </a>
	                <a class='footer-icon facebook' href="http://www.facebook.com/pages/CUSEC/9884406702" title="CUSEC on Facebook" onclick="_gaq.push(['_trackEvent', 'Social Media', 'Facebook', 'Clicked to Facebook']);">
						<img src='<?php echo get_template_directory_uri(); ?>/library/images/icon-facebook.svg' alt='CUSEC Facebook'/>
	                </a>
					<a class='footer-icon googleplus' href="https://plus.google.com/109086660120732587899" rel="publisher" title='CUSEC on Google+' onclick="_gaq.push(['_trackEvent', 'Social Media', 'Google Plus', 'Clicked to Google Plus']);">
						<img src='<?php echo get_template_directory_uri(); ?>/library/images/icon-googleplus.svg' alt='CUSEC Google Plus'/>
	                </a>
	            </div>
			</section>
			<section class='footer-content footer-credits'>
				<div class='container clearfix'>
					<p class='pull-left'>
						Built by <a href='http://xeniatay.com' title='Xenia Tay'>Xenia Tay</a>
					</p>

					<p class='cusec-credit'>Presented by the <a href="<?php echo home_url(); ?>/team">CUSEC 2014 Team</a></p>

					<p class='pull-right'>
						<a href='mailto:info@cusec.net' title='info@cusec.net' onClick="_gaq.push(['_trackEvent', 'mailto', 'info']);">Contact</a> |
						<a href='mailto:sponsor@cusec.net' title='sponsor@cusec.net' onClick="_gaq.push(['_trackEvent', 'mailto', 'sponsorship']);">Sponsor</a>
					</p>
				</div>
			</section>
		</footer>

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html>
