<?php
/*
Template Name: Sponsor Page Template
*/
?>

<?php include ('list-sponsors.php'); ?>

<?php get_header(); ?>

    <div id='main-content' class='content page-content'>
        <div class='sponsors page-sponsors' id='sponsors'>
            <div class='container'>
                <h2 class='section-heading light'>Sponsors</h2>

                <p class='spon-cta'>
                    CUSEC is only possible with the support of all our sponsors.<br/>
                </p>

                <?php foreach ($tiers as $tier): ?>
                <div class='spon-tier tier-<?php echo strtolower($tier[level]) ?>'>

                    <h3 class='tier-subheading'><?php echo $tier[level] ?></h3>
                    <ul class='tier-list'>

                    <?php foreach ($tier[sponsors] as $sponsor): ?>

                        <li class='<?php echo $sponsor[id] ?>'>
                            <a class='spon-link' href='<?php echo $sponsor[link] ?>' title='<?php echo $sponsor[name] ?>'>
                                <img class='spon-logo'
                                     src='<?php echo get_template_directory_uri(); ?>/library/images/sponsors/<?php echo $sponsor[img] ?>'
                                     alt='<?php echo $sponsor[name] ?> - CUSEC <?php echo $tier[level] ?> Sponsor'/>
                            </a>
                        </li>

                    <?php endforeach; ?>

                    </ul>
                    <?php if ( $tier !== end($tiers)) { echo "<hr/>"; } ?>

                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
