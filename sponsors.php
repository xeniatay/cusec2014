<?php
/*
Sponsors code for homepage
*/
?>

<?php include ('list-sponsors.php'); ?>

<div class='home-section sponsors' id='sponsors'>

    <div class='container'>

        <h2 class='section-heading spon-heading light'>
            <a href='<?php echo home_url(); ?>/sponsors' title='Sponsors'>Sponsors</a>
        </h2>

        <div class='spon-feature'>

            <?php foreach ($tiers as $tier): ?>

                <?php if ( ($tier[level] == 'Gold') || ($tier[level] === 'Partner') ): ?>
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

                    </div>
                <?php endif; ?>

            <?php endforeach; ?>

        </div>

        <p class='home-section-cta'>
            <a class='view-all spon-view-all' href='<?php echo home_url(); ?>/sponsors' title='View All Sponsors'>
                View All Sponsors
            </a>
        </p>

    </div>

</div>