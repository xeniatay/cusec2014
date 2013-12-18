<?php include ('list-speakers.php'); ?>

<div class='home-section home-speakers' id='speakers'>
    <div class='container'>
        <h2 class='section-heading light'>Speakers</h2>

        <?php foreach ($speaker_tiers as $speaker_tier): ?>
            <?php if ($speaker_tier[tier] === 'keynote'): ?>
                <h3 class='speaker-subheading'>Keynotes</h3>
                <ul class='profiles'>
                    <div class='profiles-row'>
                    <?php foreach ($speaker_tier[speakers] as $index => $profile): ?>

                        <?php if ( ( ($index % 3) === 0 ) && ($index > 0) ) {
                            echo "</div><div class='profiles-row'>";
                        } ?>

                        <li class='profile'>
                            <a href='<?php echo home_url(); ?>/speakers#<?php echo strtolower( str_replace( " ", "-", $profile[name] ) ) ?>' title='<?php echo $profile[name] ?>'>
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
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    </div>
                </ul>
            <?php endif; ?>
        <?php endforeach; ?>

        <a class='view-all spk-view-all' href='<?php echo home_url(); ?>/speakers'>
            View All Speakers
        </a>
        <p class='home-section-cta'>
            Want to speak at CUSEC 2014? Contact Dominic at
            <a href='mailto:talks@cusec.net' title='talks@cusec.net' onClick="_gaq.push(['_trackEvent', 'mailto', 'talks']);">talks@cusec.net</a>.
        </p>
    </div>
</div>


