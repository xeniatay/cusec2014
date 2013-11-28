<?php
/*
Template Name: Team Page Template
*/
?>

<?php
/* Pardon the hardcoded PHP.
 * Guilty as charged. No excuses. :(
 * Plz judge this book by its cover instead
*/

$team = array(
    array(
        'name' => 'Alex Selesse',
        'title' => 'Co-Chair',
        'link' => 'http://github.com/selesse',
        'img' => 'alex-selesse.jpg',
        'desc' => "Alex is a recent Software Engineering graduate from McGill. Last year, Alex was CUSEC's Director of Sponsorship. Alex likes to read, go rock climbing, play video games, and he loves programming. These days, he's particularly intrigued by the combination of Java, gradle, and IntelliJ IDEA (with IdeaVim!)."
    ),
    array(
        'name' => 'Matthew Leavitt',
        'title' => 'Co-Chair',
        'link' => NULL,
        'img' => 'matthew-leavitt.jpg',
        'desc' => "Matthew is a PhD student in Neuroscience at McGill. He spends most of his time thinking of witty things to include in blurbs like this, but he occasionally indulges his curiosity by doing things like cooking, or co-chairing software engineering conferences.  He is very close to figuring out how the brain works."
    ),
    array(
        'name' => 'Dominic Charley-Roy',
        'title' => 'Director of Speakers',
        'link' => 'http://github.com/jokeoftheweek',
        'img' => 'dominic-charley-roy.png',
        'desc' => "Dominic is a 2nd year Software Engineering student at McGill University. He fell in love with programming the first time he got 'Hello, World!' to print on his old DOS 386. Nowadays he's mainly playing around with Javascript and Go with a nice cup of tea next to him. This is his second year on the CUSEC team. "
    ),
    array(
        'name' => 'Mohammed Chamma',
        'title' => 'Director of Audio/Visual',
        'link' => 'http://github.com/mef51',
        'img' => 'mohammed-chamma.jpg',
        'desc' => "Mohammed is a 3rd year Physics-Math student at the University of Ottawa. He programs when physics gets too hard. Right now he's learning about things like Javascript, Go, and Matlab. This is his third CUSEC!"
    ),
    array(
        'name' => 'Santiago Gil',
        'title' => 'Director of Promotions',
        'link' => NULL,
        'img' => 'santiago-gil.jpg',
        'desc' => "Santiago is currently in his 3B term in Software Engineering at the University of Waterloo. He's attended CUSEC since 1st year and just keeps coming back. He's worked mostly on mobile platforms (iOS, BB10) and a bit of OS X development on his previous co-ops. This year he's acting in the role of Director of Promotions for CUSEC."
    ),
    array(
        'name' => 'Michael Lakhia',
        'title' => 'Co-Director of Logistics',
        'link' => 'http://github.com/mlakhia',
        'img' => 'michael-lakhia.jpg',
        'desc' => "Michael studies Computer Science at John Abbott College. He works at PasswordBox.com on the Android and JavaScript teams and loves it. This is his first year as the Co-Director of Logistics."
    ),
    array(
        'name' => 'Alex Coco',
        'title' => 'Co-Director of Logistics',
        'link' => NULL,
        'img' => 'alex-coco.jpg',
        'desc' => "Alex is in his third year of Software Engineering at McGill. In his spare time, he loves to cook, drink coffee, and explore. He loves Ruby, Rails, typography, and Tetris and wants to learn more Go and Node.js."
    ),
    array(
        'name' => 'Bowen Xu',
        'title' => 'Co-Director of Sponsors',
        'link' => NULL,
        'img' => 'bowen-xu.jpg',
        'desc' => "Bowen is a 3rd year Software Engineering Student at University of Waterloo. He enjoys coding, reading, and going to the gym. This is his second CUSEC and he helps in the Sponsorship team."
    ),
    array(
        'name' => 'Samira El-Rayyes',
        'title' => 'Co-Director of Sponsorship',
        'link' => 'http://linkedin.com/in/samiraelrayyes',
        'img' => 'samira-el-rayyes.jpg',
        'desc' => "Samira was first exposed to the world of code in grade ten, and she is now a third year Software Engineering student at the University of Ottawa. After attending her first CUSEC in 2012, she knew that she had to get involved with this awesome event and has been an organizer since. Last year, she handledCUSEC's social media sites and now Samira is the Director of Sponsorship for CUSEC 2014."
    ),
    array(
        'name' => 'Xenia Tay',
        'title' => 'Webmaster',
        'link' => 'http://www.xeniatay.com',
        'img' => 'xenia-tay.jpg',
        'desc' => "WRITE THIS LOL"
    ),
    array(
        'name' => 'Nataly Sheinin',
        'title' => 'York University Head Delegate',
        'link' => 'http://ca.linkedin.com/in/natalysheinin',
        'img' => 'nataly-sheinin.jpg',
        'desc' => "Nataly is a 3rd year Computer Science student at Lassonde School of Engineering, York University. This is her first year as a delegate for CUSEC. She spends her summers working at TELUS as a co-op developer on the web services team. She has experience using java for the purpose of web development."
    ),
    array(
        'name' => 'Julian Horvat',
        'title' => 'University of Guelph Head Delegate',
        'link' => 'http://github.com/jhorvat',
        'img' => 'julian-horvat.jpg',
        'desc' => "Julian is a 3rd year Software Engineering student at the University of Guelph. He has been in love with computers his whole life but didn't start programming till highschool. At school he uses C, and Java but in his spare time is learning Web Development and Go. This is his second CUSEC but the first time being a delegate."
    ),
    array(
        'name' => 'Danielle Pham',
        'title' => 'WAT R U',
        'link' => NULL,
        'img' => 'danielle-pham.jpg',
        'desc' => "Danielle is in her third year of Computer Science and Biology at McGill. She appreciates readable code, particularly Python and Ruby, as well as minimalistic design. Danielle is interested in learning web development, data analytics and visualization."
    ),
        array(
        'name' => 'Sami Jaber',
        'title' => 'WAT R U',
        'link' => NULL,
        'img' => 'sami-jaber.jpg',
        'desc' => "Sami is a 3rd year Computer Science Major at McGill University. Attended the last two CUSEC's, was blown away by the event's calibre, and wanted to help make it even better! A coder currently obsessed with Scala, he uses it on his free time to learn web development."
    ),
    array(
        'name' => 'David Kua',
        'title' => 'University of Toronto Head Delegate',
        'link' => 'http://github.com/dkua',
        'img' => 'david-kua.png',
        'desc' => "David is a third year Computer Science student at the University of Toronto Scarborough. He likes Python, Go, Javascript, and talking about API design. When he is not programming, David can be found dragon boating. This is his first CUSEC."
    ),
    array(
        'name' => 'Patrick Nguyen',
        'title' => 'Concordia University Head Delegate',
        'link' => NULL,
        'img' => 'patrick-nguyen.jpg',
        'desc' => "Patrick is a 2nd year Software Engineering student at Concordia University. This would be the 3rd CUSEC that he attends and he's looking forward to meeting amazing people and hearing awesome speeches. He enjoys to snowboard and draw in his spare time."
    ),
    array(
        'name' => 'Saif Myageri',
        'title' => 'WAT R U',
        'link' => NULL,
        'img' => 'saif-myageri.jpg',
        'desc' => "Saif is a third year Software Engineering student at McMaster University. This is his second CUSEC and the first time as the head delegate. In his spare time he likes to read and aimlessly browse the internet. He's most passionate about soccer and loves to play and watch soccer games."
    ),
    array(
        'name' => 'Miguel Ocampo-Gooding',
        'title' => 'York University Head Delegate',
        'link' => NULL,
        'img' => 'miguel-ocampo-gooding.jpg',
        'desc' => "Miguel is a second year Digital Media student at York University. This will be his second CUSEC and his first as a Head Delegate. He is currently learning about how to bridge the gap between programming and art."
    ),
    array(
        'name' => 'Alykhan Kanji',
        'title' => 'University of Waterloo Head Delegate',
        'link' => 'http://alykhan.com',
        'img' => 'alykhan-kanji.jpg',
        'desc' => "Alykhan is a third year Software Engineering student at the University of Waterloo. He has attended CUSEC annually and is a Head Delegate this year. Alykhan is enthusiastic about Open Data and mobile development. He has experience developing mobile apps and websites."
    ),
    array(
        'name' => 'Vaughan Hilts',
        'title' => 'Wilfrid Laurier University Head Delegate',
        'link' => 'http://github.com/hilts-vaughan',
        'img' => 'vaughan-hilts.jpg',
        'desc' => "Vaughan is a 2nd year Computer Science student at Wilfrid Laurier University. Interested in programming and game development pre high school - he now works at startup Axonify developing HTML5 games using bleeding edge technology. In his spare time, Vaughan enjoys game theory and development, machine learning and web apps for the mobile space."
    ),
    array(
        'name' => 'Stephanie Zeidan',
        'title' => 'University of Ottawa Head Delegate',
        'link' => NULL,
        'img' => 'stephanie-zeidan.png',
        'desc' => "Stephanie is a 3rd year student at the University of Ottawa studying Electrical Engineering and Computing technology. This is will be her second year attending CUSEC and her first year as a Head delegate. Currently interested in and learning web development and MATLAB. She hopes to travel the world one day."
    )
);

?>

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
                                <span class='profile-desc'><?php echo $profile[desc] ?></span>
                            </div>
                        </li>
                        <?php if ($profile !== end($team)) { echo "<hr/>"; } ?>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
