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
                <!-- YES I am using a table, but THIS IS A SCHEDULE -->
                <table class='schedule-table'>
                    <thead>
                        <tr>
                            <th></th>
                            <th colspan='2'>Thursday</th>
                            <th colspan='2'>Friday</th>
                            <th colspan='2'>Saturday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class='schedule-row threequart-hour'>
                            <td class='schedule-time'>8:00 AM</td>
                            <td class='schedule-event' colspan='2'>Registration</td>
                            <td class='schedule-event free-time' colspan='2'></td>
                            <td class='schedule-event free-time' colspan='2'></td>
                        </tr>
                        <tr class='schedule-row quart-hour'>
                            <td class='schedule-time'>9:15 AM</td>
                            <td class='schedule-event' colspan='2'>Registration / Breakfast</td>
                            <td class='schedule-event' rowspan='2' colspan='2'>Breakfast</td>
                            <td class='schedule-event' rowspan='2' colspan='2'>Breakfast</td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time'>9:30 AM</td>
                            <td class='schedule-event' colspan='2'>Introduction</td>
                        </tr>
                        <tr class='schedule-row one-hour'>
                            <td class='schedule-time speaker-slot'>10:00 AM</td>
                            <td class='schedule-event speaker-slot' colspan='2'>Zach Holman</td>
                            <td class='schedule-event speaker-slot'>Nahim Nasser</td>
                            <td class='schedule-event speaker-slot'>Nabil Al-Azem</td>
                            <td class='schedule-event speaker-slot'>Julia Evans</td>
                            <td class='schedule-event speaker-slot'>Bruno Morency</td>
                        </tr>
                        <tr class='schedule-row one-hour'>
                            <td class='schedule-time speaker-slot'>11:00 AM</td>
                            <td class='schedule-event speaker-slot'>Ian Chan</td>
                            <td class='schedule-event speaker-slot'>Tony Hooper</td>
                            <td class='schedule-event speaker-slot' colspan='2'>Michelle Zatlyn</td>
                            <td class='schedule-event speaker-slot' colspan='2'>Bruce Eckel</td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time'>12:00 PM</td>
                            <td class='schedule-event' colspan='2'>Lunch</td>
                            <td class='schedule-event' rowspan='2' colspan='2'>Lunch</td>
                            <td class='schedule-event' colspan='2'>Lunch</td>
                        </tr>
                        <tr class='schedule-row one-hour'>
                            <td class='schedule-time'>12:30 PM</td>
                            <td class='schedule-event' colspan='2'>
                                <a href="<?php echo home_url(); ?>/resume-upload">Resume Roast</a>
                            </td>
                            <td class='schedule-event' colspan='2'>Volunteer Info Session</td>
                        </tr>
                        <tr class='schedule-row one-hour'>
                            <td class='schedule-time'>1:30 PM</td>
                            <td class='schedule-event' colspan='2' rowspan='2'>Career Fair</td>
                            <td class='schedule-event' colspan='2' rowspan='2'>Career Fair</td>
                            <td class='schedule-event' colspan='2'>Career Fair</td>
                        </tr>
                        <tr class='schedule-row one-hour'>
                            <td class='schedule-time speaker-slot'>2:30 PM</td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Nadim Kobeissi</td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Matt Helm</td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time speaker-slot'>3:00 PM</td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Josh Matthews</td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Derek Ruths</td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Avi Bryant</td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Maria Smirnoff</td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time'>3:30 PM</td>
                            <td class='schedule-event' colspan='2'>Break</td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time speaker-slot'>4:00 PM</td>
                            <td class='schedule-event' colspan='2'>Raffle for EA Tour</td>
                            <td class='schedule-event' colspan='2'>Break</td>
                            <td class='schedule-event speaker-slot' colspan='2' rowspan='2'>Gary Bernhardt</td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time speaker-slot'>4:30 PM</td>
                            <td class='schedule-event speaker-slot' colspan='2' rowspan='2'>Don Olmstead</td>
                            <td class='schedule-event speaker-slot' colspan='2' rowspan='2'>Kelsey Gilmore-Innis</td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time speaker-slot'>5:00 PM</td>
                            <td class='schedule-event' colspan='2'>Closing Remarks</td>
                        </tr>
                        <tr class='schedule-row long-free-time'>
                            <td class='schedule-time free-time'></td>
                            <td class='schedule-event free-time' colspan='2'></td>
                            <td class='schedule-event free-time' colspan='2'></td>
                            <td class='schedule-event free-time' colspan='2'></td>
                        </tr>
                        <tr class='schedule-row one-hour'>
                            <td class='schedule-time'>7:00 PM</td>
                            <td class='schedule-event' colspan='2' rowspan='2'>
                                <a href="<?php echo home_url(); ?>/democamp">Democamp</a>
                            <td class='schedule-event free-time' colspan='2'></td>
                            <td class='schedule-event free-time' colspan='2' rowspan='3'></td>
                        </tr>
                        <tr class='schedule-row one-half-hour'>
                            <td class='schedule-time'>8:00 PM</td>
                            <td class='schedule-event' colspan='2' rowspan='2'>Games Night</td>
                        </tr>
                        <tr class='schedule-row long-time'>
                            <td class='schedule-time'>9:30 PM - Midnight</td>
                            <td class='schedule-event' colspan='2' rowspan='2'>Shopify Night @ Les 3 Brasseurs</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
