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
                        <p class='page-cta'>
                            <strong>NEW: You can now include your submission for our Resume Roast!</strong>
                        </p>
                        <p class='resume-roast-cta'>
                            Resume Roast is a lunchtime workshop that will feature a panel of experienced tech-industry judges going through common blunders in example resumes.
                        </p>
                        <p class='page-cta cta-note'>
                            Note: If you previously uploaded your resume for companies only, add your resume for the Roast by submitting this form with the 'Companies' field unchecked.
                        </p>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                        <p class='page-cta'>Resume uploads are now closed. Thank you for your submissions and good luck with interviews!</p>
                    </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
