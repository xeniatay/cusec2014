<?php
/*
Template Name: Resume Upload Page Template
*/
?>

<?php get_header(); ?>

    <div id='main-content' class='content page-content'>
        <div class='resume-upload page-resume-upload' id='resume-upload'>
            <div class='container'>
                <h2 class='section-heading light'>Resume Upload</h2>
                    <div class='page-content'>
                        <p class='page-cta'>Submit your resume to our sponsors before the career fair at CUSEC!</p>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
