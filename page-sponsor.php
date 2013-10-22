<?php
/*
Template Name: Sponsor Page Template
*/
?>

<?php get_header(); ?>

    <div id='main-content' class='content page-content'>
        <div class='sponsors page-sponsors' id='sponsors'>
            <div class='container'>
                <h2 class='section-heading light'>Sponsors</h2>

                <p class='spon-cta'>
                    Want to be a CUSEC 2014 sponsor? Contact Samira at
                    <a class='spon-link' href="mailto:sponsor@cusec.net" title="sponsor@cusec.net" onclick="_gaq.push(['_trackEvent', 'mailto', 'sponsorship']);">sponsor@cusec.net.</a>
                </p>

                <div id='tier-partner' class='spon-tier tier-partner hide'>
                    <h3 class='tier-subheading'>Partner</h3>
                    <ul class='tier-list'>
                        <li>
                            <a class='spon-link' href='http://www.cse-cst.gc.ca/index-eng.html' title='Communications Security Establishment Canada'>
                                <!--
                                <img class='spon-logo' src='<?php echo get_template_directory_uri(); ?>/library/images/sponsors/csec.png' alt='CSEC - CUSEC Partner Sponsor'/>
                                 -->
                            </a>
                        </li>
                    </ul>
                </div>

                <hr/>

                <div id='tier-gold' class='spon-tier tier-gold'>
                    <h3 class='tier-subheading'>Gold</h3>
                    <ul class='tier-list'>
                        <li>
                            <a class='spon-link' href='http://www.morganstanley.com/' title='Morgan Stanley'>
                                <img class='spon-logo' src='<?php echo get_template_directory_uri(); ?>/library/images/sponsors/morganstanley.png' alt='Morgan Stanley - CUSEC Gold Sponsor'/>
                            </a>
                        </li>
                        <hr class='spon-div'/>
                        <li>
                            <a class='spon-link' href='http://www.shopify.com/' title='Shopify'>
                                <img class='spon-logo' src='<?php echo get_template_directory_uri(); ?>/library/images/sponsors/shopify.png' alt='Shopify - CUSEC Gold Sponsor'/>
                            </a>
                        </li>
                        <hr class='spon-div'/>
                        <li class='hide'>
                            <a class='spon-link' href='http://www.ibm.com/ca/en/' title='IBM'>
                                <!--
                                <img class='spon-logo' src='<?php echo get_template_directory_uri(); ?>/library/images/sponsors/ibm.png' alt='IBM - CUSEC Gold Sponsor'/>
                                -->
                            </a>
                        </li>
                        <hr class='spon-div'/>
                        <li>
                            <a class='spon-link' href='http://www.genetec.com/' title='Genetec'>
                                <img class='spon-logo' src='<?php echo get_template_directory_uri(); ?>/library/images/sponsors/genetec.png' alt='Genetec - CUSEC Gold Sponsor'/>
                            </a>
                        </li>
                    </ul>
                </div>

                <hr/>

                <div class='spon-tier tier-silver'>
                    <h3 class='tier-subheading'>Silver</h3>
                    <ul class='tier-list'>
                        <li>
                            <a class='spon-link' href='http://context.io/' title='Context.IO'>
                                <img class='spon-logo' src='<?php echo get_template_directory_uri(); ?>/library/images/sponsors/contextio.png' alt='Context.IO - CUSEC Silver Sponsor'/>
                            </a>
                        </li>
                    </ul>
                </div>

                <hr/>

                <div class='spon-tier tier-bronze'>
                    <h3 class='tier-subheading'>Bronze</h3>
                    <ul class='tier-list last-child'>
                        <li>
                            <a class='spon-link' href='http://www.macadamian.com/' title='Macadamian'>
                                <img class='spon-logo' src='<?php echo get_template_directory_uri(); ?>/library/images/sponsors/macadamian.png' alt='Macadamian - CUSEC Bronze Sponsor'/>
                            </a>
                        </li>
                    </ul>
                </div>

                <hr/>

                <p class='to-be-announced spon-announce'>
                    Additional sponsors <strong>to be revealed!</strong>
                </p>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
