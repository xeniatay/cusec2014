<?php
/*
Template Name: Democamp Page Template
*/
?>

<?php get_header(); ?>

    <div id='main-content' class='content page-content'>
        <div class='page-democamp'>
            <div class='container'>
                <h2 class='section-heading light'>Democamp sponsored by <a href="http://velocity.uwaterloo.ca" title="Velocity">Velocity</a></h2>
                <div class='democamp-desc'>
                    <p><strong>DemoCamp is an opportunity to demo and present a project that you or a team have been working on.</strong></p>
                    <p>
                        <strong>The Game:</strong>
                        You have 10 minutes to pitch your work, no slides, only working code. You’ll then have a couple of minutes to answer questions from the audience.
                    </p><p>
                        <strong>The Players:</strong>
                        Individual or a Team!
                    </p><p>
                        <strong>Your Tools:</strong>
                        A project you worked on for school or developed on your own time.
                    </p><p>
                        <strong>The Prize:</strong>
                        The top 3 teams as voted by the audience will receive prizes sponsored by <a href="http://velocity.uwaterloo.ca" title="Velocity">Velocity</a>. In addition, the team in 1st place will receive an exclusive invitation to dinner with our speakers and sponsor representatives.
                    </p><p>
                        In addition to presenting to an audience of fellow CUSEC attendees, you will be presenting to a panel of judges made up of speakers and sponsors whose job it is to offer feedback, advice, and their expertise.
                    </p><p>
                        Democamp submissions are now closed! Be sure to catch the event tonight from 7pm - 8pm!
                    </p>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php // the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
