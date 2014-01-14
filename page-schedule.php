<?php
/*
Template Name: Schedule Page Template
*/
?>

<?php get_header(); ?>

    <div id='main-content' class='content page-content'>
        <div class='page-schedule'>
            <div class='container'>
                <h2 class='section-heading light'>Schedule</h2>
                <p class='page-cta'>Note: Breakfast will be provided for all 3 days of the conference</p>
                <!-- YES I am using a table, but THESE ARE SCHEDULES -->
                <div class='show-mobile mobile-schedule'>
                    <?php include ('mobile-schedule.php'); ?>
                </div>
                <?php include ('desktop-schedule.php'); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
