<?php
/*
Template Name: Speaker Page Template
*/
?>

<?php include ('list-speakers.php'); ?>

<?php get_header(); ?>

    <div id='main-content' class='content page-content'>
        <div class='page-speakers page-profiles' id='speakers'>
            <div class='container'>
                <h2 class='section-heading light'>Speakers</h2>

                <ul class='profiles-quicknav'>
                    <?php foreach ($speaker_tiers as $speaker_tier): ?>
                        <?php foreach ($speaker_tier[speakers] as $profile): ?>
                        <li class='profile-quicknav'>
                            <a href='#<?php echo strtolower( str_replace( " ", "-", $profile[name] ) ) ?>' title='<?php echo $profile[name] ?>'>
                                <img class=''
                                     src='<?php echo get_template_directory_uri(); ?>/library/images/speakers/<?php echo ($profile[img]) ? $profile[img] : 'placeholder.png' ?>'
                                     alt='<?php echo $profile[name] ?>'/>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ul>

                <?php foreach ($speaker_tiers as $speaker_tier): ?>
                    <h3 class='speaker-subheading'>
                        <?php if ($speaker_tier[tier] === 'keynote') {
                            echo "Keynotes";
                        } else {
                            echo "Non-Keynotes";
                        } ?>
                    </h3>
                    <ul class='profiles'>
                        <?php foreach ($speaker_tier[speakers] as $profile): ?>
                            <li id='<?php echo strtolower( str_replace( " ", "-", $profile[name] ) ) ?>' class='profile'>
                                <img class='profile-pic'
                                     src='<?php echo get_template_directory_uri(); ?>/library/images/speakers/<?php echo ($profile[img]) ? $profile[img] : 'placeholder.png' ?>'
                                     alt='<?php echo $profile[name] ?>'/>
                                <div class='profile-text'>
                                    <span class='profile-name'>
                                        <?php if ($profile[link]): ?>
                                            <a href='<?php echo $profile[link] ?>' title='<?php echo $profile[name] ?>'><?php echo $profile[name] ?></a>
                                        <?php else: ?>
                                            <?php echo $profile[name] ?>
                                        <?php endif; ?>
                                    </span>
                                    <span class='profile-title'><?php echo $profile[title] ?></span>
                                    <span class='profile-desc'>
                                        <?php if ($profile[desc]) {
                                            echo $profile[desc];
                                        } else {
                                            echo "<span class='coming-soon'>Description coming soon.</span>";
                                        } ?>
                                    </span>
                                </div>
                            </li>
                        <?php if ($profile !== end($speaker_tier[speakers])) { echo "<hr/>"; } ?>
                    <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>

                <p class='to-be-announced spk-announce'>More speakers <strong>to be announced</strong> &mdash; stay tuned!</p>

                <p class='home-section-cta'>
                    Want to speak at CUSEC 2014? Contact Dominic at
                    <a href='mailto:talks@cusec.net' title='talks@cusec.net' onClick="_gaq.push(['_trackEvent', 'mailto', 'talks']);">talks@cusec.net</a>.
                </p>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
