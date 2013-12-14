<?php
/*
Template Name: Team Page Template
*/
?>

<?php include ('list-team.php') ?>

<?php get_header(); ?>

    <div id='main-content' class='content page-content'>
        <div class='page-team page-profiles' id='team'>
            <div class='container'>
                <h2 class='section-heading light'>Team</h2>

                <ul class='profiles'>

                    <?php foreach ($team as $profile): ?>
                        <li class='profile'>
                            <img class='profile-pic' src='<?php echo get_template_directory_uri(); ?>/library/images/team/<?php echo $profile[img] ?>' alt='<?php echo $profile[name] ?>'/>
                            <div class='profile-text'>
                                <span class='profile-name'>
                                    <?php if ($profile[link]): ?>
                                        <a href='<?php echo $profile[link] ?>' title='<?php echo $profile[name] ?>'><?php echo $profile[name] ?></a>
                                    <?php else: ?>
                                        <?php echo $profile[name] ?>
                                    <?php endif; ?>
                                </span>
                                <span class='profile-title'><?php echo $profile[title] ?></span>
                                <p class='profile-desc'><?php echo $profile[desc] ?></p>
                            </div>
                        </li>
                        <?php if ($profile !== end($team)) { echo "<hr/>"; } ?>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
