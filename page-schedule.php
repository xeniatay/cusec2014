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
                            <td class='schedule-event' colspan='2'>Introduction
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                        </tr>
                        <tr class='schedule-row one-hour'>
                            <td class='schedule-time speaker-slot'>10:00 AM</td>
                            <td class='schedule-event speaker-slot' colspan='2'>Zach Holman
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                            <td class='schedule-event speaker-slot'>Nahim Nasser
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                            <td class='schedule-event speaker-slot'>Nabil Al-Azem
                                <span class='schedule-room'>Caf Conc Room</span>
                            </td>
                            <td class='schedule-event speaker-slot'>Julia Evans
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                            <td class='schedule-event speaker-slot'>Bruno Morency
                                <span class='schedule-room'>Caf Conc Room</span>
                            </td>
                        </tr>
                        <tr class='schedule-row one-hour'>
                            <td class='schedule-time speaker-slot'>11:00 AM</td>
                            <td class='schedule-event speaker-slot'>Ian Chan
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                            <td class='schedule-event speaker-slot'>Tony Hooper
                                <span class='schedule-room'>Caf Conc Room</span>
                            </td>
                            <td class='schedule-event speaker-slot' colspan='2'>Michelle Zatlyn
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                            <td class='schedule-event speaker-slot' colspan='2'>Bruce Eckel
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time'>12:00 PM</td>
                            <td class='schedule-event' colspan='2'>Lunch Break</td>
                            <td class='schedule-event' rowspan='2' colspan='2'>Lunch Break</td>
                            <td class='schedule-event' colspan='2'>Lunch Break</td>
                        </tr>
                        <tr class='schedule-row one-hour'>
                            <td class='schedule-time'>12:30 PM</td>
                            <td class='schedule-event' colspan='2'>
                                <a href="<?php echo home_url(); ?>/resume-upload">Resume Roast</a>
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                            <td class='schedule-event' colspan='2'>Volunteer Info Session
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                        </tr>
                        <tr class='schedule-row one-hour'>
                            <td class='schedule-time'>1:30 PM</td>
                            <td class='schedule-event' colspan='2' rowspan='2'>Career Fair</td>
                            <td class='schedule-event' colspan='2' rowspan='2'>Career Fair</td>
                            <td class='schedule-event' colspan='2'>Career Fair</td>
                        </tr>
                        <tr class='schedule-row one-hour'>
                            <td class='schedule-time speaker-slot'>2:30 PM</td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Nadim Kobeissi
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Matt Helm
                                <span class='schedule-room'>Caf Conc Room</span>
                            </td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time speaker-slot'>3:00 PM</td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Josh Matthews
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Derek Ruths
                                <span class='schedule-room'>Caf Conc Room</span>
                            </td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Avi Bryant
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                            <td class='schedule-event speaker-slot' rowspan='2'>Maria Smirnoff
                                <span class='schedule-room'>Caf Conc Room</span>
                            </td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time'>3:30 PM</td>
                            <td class='schedule-event' colspan='2'>Break</td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time speaker-slot'>4:00 PM</td>
                            <td class='schedule-event' colspan='2'>Raffle for EA Tour
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                            <td class='schedule-event' colspan='2'>Break</td>
                            <td class='schedule-event speaker-slot' colspan='2' rowspan='2'>Gary Bernhardt
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                        </tr>
                        <tr class='schedule-row half-hour'>
                            <td class='schedule-time speaker-slot'>4:30 PM</td>
                            <td class='schedule-event speaker-slot' colspan='2' rowspan='2'>Don Olmstead
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
                            <td class='schedule-event speaker-slot' colspan='2' rowspan='2'>Kelsey Gilmore-Innis
                                <span class='schedule-room'>CSEC Room</span>
                            </td>
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
                                <a href="<?php echo home_url(); ?>/democamp">Democamp sponsored by Velocity</a>
                                <span class='schedule-room'>CSEC Room</span>
                            <td class='schedule-event free-time' colspan='2'></td>
                            <td class='schedule-event free-time' colspan='2' rowspan='3'></td>
                        </tr>
                        <tr class='schedule-row one-half-hour'>
                            <td class='schedule-time'>8:00 PM</td>
                            <td class='schedule-event' colspan='2' rowspan='2'>Games Night
                            </td>
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
