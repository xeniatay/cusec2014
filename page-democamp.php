<?php
/*
Template Name: Democamp Page Template
*/
?>

<?php include ('list-democamp-submissions.php'); ?>

<?php get_header(); ?>

    <div id='main-content' class='content page-content'>
        <div class='page-democamp'>
            <div class='container'>
                <h2 class='section-heading light'>Democamp Presentations</h2>
                <p class='page-cta'><strong>DemoCamp is an opportunity to demo and present a project that you or a team have been working on.</strong></p>
                <p class='page-cta'><strong>We would like to congratulate the top 3 winners of Democamp!</strong></p>
                <ol>
                    <?php foreach ($democamp_winners as $proj): ?>
                        <li class='democamp-submission'>
                            <p class='democamp-submission-name democamp-attr'>
                                <span class='democamp-label'>Project:</span>
                                <? echo $proj[project_name] ?>
                            </p>
                            <p class='democamp-team democamp-attr'>
                                <span class='democamp-label'>Team:</span>
                                <? echo $proj[team] ?>
                            </p>
                            <p class='democamp-submission-desc democamp-attr'>
                                <span class='democamp-label-block'>Description:</span>
                                <? echo $proj[project_desc] ?>
                            </p>
                            <p class='democamp-submission-explanation democamp-attr'>
                                <span class='democamp-label-block'>Project inspiration, founding story, and relevant links:</span>
                                <? echo $proj[explanation] ?>
                            </p>
                        </li>
                        <hr/>
                    <? endforeach ?>
                </ol>

                <p class='page-cta'><strong>Thank you to all of our other Democamp presenters. We wish you the best of luck with your projects!</strong></p>
                <p class='page-cta'>Below are the list of presentations, in no particular order.</p>
                <hr/>
                <ol>
                    <?php foreach ($democamp_submissions as $proj): ?>
                        <li class='democamp-submission'>
                            <p class='democamp-submission-name democamp-attr'>
                                <span class='democamp-label'>Project:</span>
                                <? echo $proj[project_name] ?>
                            </p>
                            <p class='democamp-team democamp-attr'>
                                <span class='democamp-label'>Team:</span>
                                <? echo $proj[team] ?>
                            </p>
                            <p class='democamp-submission-desc democamp-attr'>
                                <span class='democamp-label-block'>Description:</span>
                                <? echo $proj[project_desc] ?>
                            </p>
                            <p class='democamp-submission-explanation democamp-attr'>
                                <span class='democamp-label-block'>Project inspiration, founding story, and relevant links:</span>
                                <? echo $proj[explanation] ?>
                            </p>
                        </li>
                        <hr/>
                    <? endforeach ?>
                </ol>

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
                    </p>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
                <p class='page-cta'>Thank you for your interest in Democamp, submissions are currently closed.</p>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
