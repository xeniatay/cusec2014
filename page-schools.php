<?php
/*
Template Name: Schools Page Template
*/
?>

<?php include ('list-schools.php'); ?>

<?php get_header(); ?>

    <div id='main-content' class='content page-content'>
        <div class='page-schools' id='schools'>
            <div class='container'>
                <h2 class='section-heading light'>Schools</h2>

                <p class='page-cta'>
                    Get in touch with your school’s Head Delegate to find out more about getting to CUSEC with your school!
                </p>

                <div class='school-name'>
                    <h3 class='school-subheading'>Schools</h3>
                </div>

                <div class='school-hds'>
                    <h3 class='school-subheading'>Head Delegates</h3>
                </div>

                <ul class='schools-list clearfix'>
                    <?php foreach ($schools as $school): ?>
                        <li>
                            <div class='school-name'>
                                <a href='<?php echo $school[link] ?>' title='<?php echo $school[name] ?>'>
                                    <?php echo $school[name] ?>
                                </a>
                            </div>
                            <div class='school-hds'>
                                <a href="mailto:<?php echo $school[email] ?>" title="<?php echo $school[email] ?>" onclick="_gaq.push(['_trackEvent', 'mailto', 'HD - <?php echo $school[ga] ?>']);">
                                    <?php echo $school[hd] ?>
                                </a>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>

                <p class='page-cta'>
                    Want to be a Head Delegate for your school? Contact us at
                    <a class='page-cta-mailto' href="mailto:info@cusec.net" title="info@cusec.net" onclick="_gaq.push(['_trackEvent', 'mailto', 'info']);">
                        info@cusec.net.
                    </a>
                </p>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
