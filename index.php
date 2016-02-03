<?php

require_once("config.php");
$link = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("connection failed");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />

    <title>Dvaita'16</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animations.css" />
    <link rel="stylesheet" type="text/css" href="css/superslides.css" />
    <link rel="stylesheet" type="text/css" href="css/flexslider.css" />
    <link rel="stylesheet" type="text/css" href="css/masonry.css" />
    <link rel="stylesheet" type="text/css" href="css/fancybox.css" />
    <link rel="stylesheet" type="text/css" href="css/multicolor.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
</head>
<body>


<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<!-- Logo -->


<div class="logo"><img src="img/logo.png" alt="logo"/></div>
<div class="dept "><h1>Department of Computer Science and Engineering</h1></div>
<div class="nssce"><img src="img/nssce.png" alt="nssce"/></div>


<!-- Slider -->
<div id="slides">
    <ul class="slides-container">

        <!-- Slider Single Item -->
        <li><a href="#about" ><img src="img/banner.jpg" alt="swat" /></a>
            <div class="slides-detail">
                <div class="countdown styled"></div></div>
        </li>

        <!-- Slider Single Item -->
        <li><a href="#swatthebug" class="goto-swatthebug"><img src="img/swatbug.gif" alt="Photo" /></a>
            <div class="slides-detail">
                <a href="#swatthebug" ><h1>Swat the Bug</h1></a>
                <span class="lead">“It’s not a bug, It’s an undocumented feature”</span></div>
        </li>

        <!-- Slider Single Item -->
        <li><a href="#"><img src="img/boombox_slide.gif" alt="boombox" /></a>
            <div class="slides-detail">
                <h1><span>BOOM BOX</span></h1>
                <span class="lead"><strong>Dancing with the feet is one thing, but dancing with the heart is anothers</strong></span></div>
        </li>
    </ul>

    <!-- Slider Navigation -->
    <div class="slides-navigation"><a href="#" class="prev"><i class="icon-angle-left"></i></a> <a href="#" class="next"><i class="icon-angle-right"></i></a></div>
</div>



<div id="about" class="section">
    <div class="section-title"><i class="icon-smile"></i><strong>About</strong>

    </div>

    <!-- About Content -->
    <div class="container">
        <hr />
        <h1 class="main-title"><span>Dvaita'16</span></h1>
        <p class="lead">Learn it , code it , hack it , loop it</p>
        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">The Computer Science & Engineering department of NSS College of Engineering, Palakkad is organizing a National level Technical fest - DVAITA'16 on 19th and 20th February, 2016.<br>

                    DVAITA that contributes some of the core Indian beliefs on the nature of reality finds its relevance on the Binary system of our scientific world. This is the reason why this event got entitled by the name "DVAITA".<br>

                    The fest features various technical events that challenges the skills of any computer professional and general events for igniting the creativity of engineering minds. We expect it to reach out to more than 3000 bright minds and potential engineers from various colleges in India over 2 days.</p>
            </div>
        </div>

        <hr />

        <!-- About Slogan -->

        <!-- About ADV -->
        <div class="hero-unit text-center">
            <h2> <span>NSS COLLEGE OF ENGINEERING</span></h2>
            <p class="lead">NSS College of Engineering, Palakkad was established in 1960 with three branches during the second Five – Year plan with the assistance of Central and State Government under the Grand in – Aid scheme.<br><br>
                Currently it is one of the most reputed, premier Engineering educational institutions in Kerala, managed by Nair Service Society affiliated to the University of Calicut.<br><br>
                At present, the institution offers B-TECH degree courses in six branches and M-TECH degree courses in Communication engineering,Power Electronics,Computer Science & Engineering, Structural Engineering and Computer Integrated Manufacturing</p>
            </div>
    </div>
</div>

<!-- Events Section -->
<div id="services" class="section">
    <div class="section-title"><i class="icon-cog"></i><strong>Events</strong>
    </div>

    <!-- events Content -->
    <div class="container">
        <hr />
        <h1 class="main-title"><span>Technical </span>events</h1>
        <div class="flexslider">

            <!-- TECHnical List Carousel -->
            <ul class="thumbnails slides">

                <!-- Service Detail -->
                <li >
                    <div class="thumbnail"><i class="icon-arrow-right"></i>
                        <h3><span>Technical</span></h3>
                        <h5>Events</h5>
                        <p><br><br><br><br></p>

                </li>

                <!-- Service Detail -->
                <li class=" goto-maestro">
                    <div class="thumbnail"><i class="icon-magic"></i>
                        <h3><span>Code Maestro</span> </h3>
                        <h5>“Talk is cheap. Show me the code”</h5>
                        <p>A battleground for programmers to unleash the coder in them.</p>
                        <a href="#" class="btn goto-maestro">Details</a></div>
                </li>
                <!-- Service Detail -->
                <li class=" goto-swatthebug">
                    <div class="thumbnail"><i class="icon-bug"></i>
                        <h3><span>Swat the bug!</span> </h3>
                        <h5>“It’s not a bug, It’s an undocumented feature”</h5>
                        <p>Programming is not just a science, but an art.</p>
                        <a href="#" class="btn goto-swatthebug">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-hackerjack">
                    <div class="thumbnail"><i class="icon-desktop"></i>
                        <h3><span>Hacker Jack</span> </h3>
                        <h5>“Never trust a programmer in a suit”</h5>
                        <p>He who exceeds the boundaries of literate knowledge excels in the art of penetration testing.</p>
                        <a href="#" class="btn goto-hackerjack">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-langx">
                    <div class="thumbnail"><i class="icon-xing"></i>
                        <h3><span>Language X</span> </h3>
                        <h5>”Learn the principle, Abide by the principle, Dissolve the principle”</h5>
                        <p>The coding contest that pushes you beyond your comfort zones.</p>
                        <a href="#" class="btn goto-langx">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-bashemup">
                    <div class="thumbnail"><i class="icon-bar-chart"></i>
                        <h3><span>Bash'em up!</span> </h3>
                        <h5>“It is easier to port a shell than a shell script”e</h5>
                        <p>Show off your advanced shell scripting skills</p>
                        <a href="#" class="btn goto-bashemup">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-codezilla">
                    <div class="thumbnail"><i class="icon-code"></i>
                        <h3><span>Codezilla</span> </h3>
                        <h5>“Treat your code like poetry”</h5>
                        <p>Think you have the mad skills to be a cracker jack programmer?</p>
                        <a href="#" class="btn goto-codezilla">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-codeswap">
                    <div class="thumbnail"><i class="icon-code-fork"></i>
                        <h3><span>Code Swap</span> </h3>
                        <h5>“It is all about teamwork”</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-codeswap">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-sidhandics">
                    <div class="thumbnail"><i class="icon-file-alt"></i>
                        <h3><span>Sidhandhics</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Calculate the Chemistry between you and your buddy. Program and Debug it and Expect a Switch to the next.</p>
                        <a href="#" class="btn goto-sidhandics">Details</a></div>
                </li>
            </ul>
        </div>
        <hr />

        <h1 class="main-title"><span>General </span>events</h1>
        <p class="lead">we are specialized in web</p>
        <div class="flexslider">

            <!-- TECHnical List Carousel -->
            <ul class="thumbnails slides">

                <!-- Service Detail -->
                <li class=" goto-bestengineer">
                    <div class="thumbnail"><i class="icon-male"></i>
                        <h3><span>Best engineer</span> </h3>
                        <h5>“Designed to lead, Lead to design”</h5>
                        <p>The thing about being the best is that you can only get better.</p>
                        <a href="#" class="btn goto-bestengineer">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-startaction">
                    <div class="thumbnail"><i class="icon-camera-retro"></i>
                        <h3><span>Start, Action, Cut</span> </h3>
                        <h5>“Creative without strategy is called art, creative with strategy is called advertising”</h5>
                        <p>Start action cut is an Ad film contest which is bound to thrill the young talents.</p>
                        <a href="#" class="btn goto-startaction">Details</a></div>
                </li>
                <!-- Service Detail -->
                <li class=" goto-mrcad">
                    <div class="thumbnail"><i class="icon-building"></i>
                        <h3><span>Mr. CAD</span> </h3>
                        <h5>“CREATE A Difference”</h5>
                        <p>Reveal the magic of new perspective and  manifest your skill in AutoCAD. </p>
                        <a href="#" class="btn goto-mrcad">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-shutterbug">
                    <div class="thumbnail"><i class="icon-camera"></i>
                        <h3><span>ShutterBug</span> </h3>
                        <h5>“Eyes like shutter, Mind like lens”</h5>
                        <p>The Photography contest, "Shutterbug"</p>
                        <a href="#" class="btn goto-shutterbug">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-respawn">
                    <div class="thumbnail"><i class="icon-gamepad"></i>
                        <h3><span>Respawn</span> </h3>
                        <h5>“Gamers  don’t  die, they  just RESPAWN!!!" </h5>
                        <p>Ready for an astounding gaming experience? Here you go! </p>
                        <a href="#" class="btn goto-respawn">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-highq">
                    <div class="thumbnail"><i class="icon-question-sign"></i>
                        <h3><span>High Q</span> </h3>
                        <h5>“Quick on Buzz. Right.”</h5>
                        <p>Flex you neurones to catch hold of the fleeting facts.</p>
                        <a href="#" class="btn goto-highq">Details</a></div>
                </li>
                <li class=" goto-contraption">
                    <div class="thumbnail"><i class="icon-cog"></i>
                        <h3><span>Break In Style</span> </h3>
                        <h5>“d-STRUCT 2 re-STRUCT”</h5>
                        <p>Break In Style is the kind of event which puts your engineering skill set to the test.</p>
                        <a href="#" class="btn goto-contraption">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-crossfire">
                    <div class="thumbnail"><i class="icon-fire"></i>
                        <h3><span>Crossfire</span> </h3>
                        <h5>“Intellectuals Debate. Idiots Argue”</h5>
                        <p>It is better to debate a question than to settling it than to settle a question without debating it.</p>
                        <a href="#" class="btn goto-crossfire">Details</a></div>
                </li>
                <!-- Service Detail -->
                <li class=" goto-pirate">
                    <div class="thumbnail"><i class="icon-map-marker"></i>
                        <h3><span>Be the pirate!</span> </h3>
                        <h5>“Lost at Sea? Let the hunt begin”</h5>
                        <p>Be The Pirate! Is a game  in which a team try to find hidden objects or places by using a series of clues.</p>
                        <a href="#" class="btn goto-pirate">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-mysteriarch">
                    <div class="thumbnail"><i class="icon-question"></i>
                        <h3><span>Mysteriarch</span> </h3>
                        <h5>“Not so Elementary, dear Watson”</h5>
                        <p>Do you have a team of two to be the next Sherlock and Watson to unravel the mysteries behind the scenes?</p>
                        <a href="#" class="btn goto-mysteriarch">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-hudrolaunch">
                    <div class="thumbnail"><i class="icon-rocket"></i>
                        <h3><span>HydroLaunch</span> </h3>
                        <h5>“ Let’s splash off!!!”</h5>
                        <p>Have you ever experienced the magic of Aerodynamics?</p>
                        <a href="#" class="btn goto-hudrolaunch">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-disco">
                    <div class="thumbnail"><i class="icon-lightbulb"></i>
                        <h3><span>Digital Disco</span> </h3>
                        <h5>“Turn on the lights in your head”</h5>
                        <p>Are you fascinated by the twinkling of LEDs?</p>
                        <a href="#" class="btn goto-disco">Details</a></div>
                </li>
                <li class=" goto-cognizance">
                    <div class="thumbnail"><i class="icon-cogs"></i>
                        <h3><span>Cognizance battle</span> </h3>
                        <h5>“A simple idea can inspire and motivate”</h5>
                        <p>It is a battle of innovative project ideas. Gather some brilliant concepts which guarantee to inspire.</p>
                        <a href="#" class="btn goto-cognizance">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-wikisurf">
                    <div class="thumbnail"><i class="icon-book"></i>
                        <h3><span>WIkiSurf</span> </h3>
                        <h5>“Navigate! Explore the unexplored”</h5>
                        <p>Surf from one wiki page to another using the links provided in each page.</p>
                        <a href="#" class="btn goto-wikisurf">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-roadies">
                    <div class="thumbnail"><i class="icon-road"></i>
                        <h3><span>Roadies</span> </h3>
                        <h5>“Rare to Dare. Actually, you can, We Swear”</h5>
                        <p>Roadies - the name that strikes terror into the weakhearted</p>
                        <a href="#" class="btn goto-roadies">Details</a></div>
                </li>
            </ul>
        </div>
        <hr />


    </div>
</div>

<div id="predvaita" class="section">
    <div class="section-title"><i class="icon-cog"></i><strong>Pre Dvaita</strong>
    </div>

    <!-- events Content -->
    <div class="container">
        <hr />
        <h1 class="main-title"><span>Technical Events </span></h1>
        <div class="flexslider">

            <!-- TECHnical List Carousel -->
            <ul class="thumbnails slides">

                <!-- Service Detail -->
                <li class=" goto-embedded">
                    <div class="thumbnail"><i class="icon-linux"></i>
                        <h3>Workshop on <span>GNU/Linux and Embedded Systems</span></h3>

                        <p>This is a beginner level hands-on workshop for   students with knowledge of C programming. </p>
                        <a href="#" class="btn goto-embedded">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" ">
                    <div class="thumbnail"><i class="icon-code"></i>
                        <h3>Workshop on <span>Python</span> </h3>
                        <p>This is a beginner level hands-on workshop for students .</p>
                        <a href="#" class="btn ">Details</a></div>
                </li>

                <li class=" goto-codezilla">
                    <div class="thumbnail"><i class="icon-code"></i>
                        <h3> <span>CodeZilla</span> </h3>
                        <p>Think you have the mad skills to be a cracker jack programmer?</p>
                        <a href="#" class="btn goto-codezilla">Details</a></div>
                </li>
                <li class=" goto-shutterbug">
                    <div class="thumbnail"><i class="icon-camera"></i>
                        <h3><span>Shutterbug</span> </h3>
                        <h5>“Eyes like shutter, Mind like lens”</h5>
                        <p>The Photography contest, "Shutterbug",</p>
                        <a href="#" class="btn goto-shutterbug">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-startaction">
                    <div class="thumbnail"><i class="icon-camera-retro"></i>
                        <h3><span>Start, Action, Cut</span> </h3>
                        <h5>“Creative without strategy is called art, creative with strategy is called advertising”</h5>
                        <p>Start action cut is an Ad film contest which is bound to thrill the young talents.</p>
                        <a href="#" class="btn goto-startaction">Details</a></div>
                </li>



            </ul>
        </div>



    </div>
</div>

<!-- Portoflio Section
<div  class="section">
    <div class="section-title"><i class="icon-briefcase"></i><strong>Sponsors</strong>
        <p> Sponsors  <span>Not available at present</span></p>
    </div>

    <!-- Portoflio Content
    <div class="container">
        <hr />
        <h1 class="main-title">Our <span>Sponsors</span></h1>
        <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.<br />
            Sed diam <span>nonummy nibh</span> euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        <!-- Filter
        <div id="folio-filters" class="filter">
            <p><a href="#" data-filter="*" class="active">All</a> <a href="#" data-filter=".webdesign">Web Design</a> <a href="#" data-filter=".illustration">Illustration</a> <a href="#" data-filter=".abstract">Abstract</a></p>
        </div>
-->
        <!-- Portfolio Masonry
        <div class="masonry">

            <!-- Portfolio Single item
            <div class="item webdesign"><img src="img/folio1.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description
                <div class="item-detail">
                    <h2>This is a Portfolio single <span>Title</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio1.jpg" class="view-fancybox" rel="tag"><img src="img/folio1.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item
            <div class="item illustration"><img src="img/folio2.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description
                <div class="item-detail">
                    <h2>Some goes <span>Here</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio2.jpg" class="view-fancybox" rel="tag"><img src="img/folio2.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item
            <div class="item webdesign"><img src="img/folio8.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description
                <div class="item-detail">
                    <h2>Another <span>Title</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio8.jpg" class="view-fancybox" rel="tag"><img src="img/folio8.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item
            <div class="item abstract"><img src="img/folio7.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description
                <div class="item-detail">
                    <h2>Write some here <span>what you want</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio7.jpg" class="view-fancybox" rel="tag"><img src="img/folio7.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item
            <div class="item illustration"><img src="img/folio3.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description
                <div class="item-detail">
                    <h2>Folio <span>Title in 2 rows</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio3.jpg" class="view-fancybox" rel="tag"><img src="img/folio3.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item
            <div class="item abstract"><img src="img/folio5.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description
                <div class="item-detail">
                    <h2>This is another <span>Title in 3 rows or more</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio5.jpg" class="view-fancybox" rel="tag"><img src="img/folio5.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item
            <div class="item webdesign"><img src="img/folio4.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description
                <div class="item-detail">
                    <h2>Ally Jerry <span>Masonry</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio4.jpg" class="view-fancybox" rel="tag"><img src="img/folio4.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item
            <div class="item webdesign"><img src="img/folio6.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description
                <div class="item-detail">
                    <h2>No <span>Title</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio6.jpg" class="view-fancybox" rel="tag"><img src="img/folio6.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>
        </div>

        <!-- Folio ADV
        <div class="hero-unit text-center">
            <h2>efficiency and <span>reliability</span></h2>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention</p>
            <a class="btn btn-large">Get a Quote</a></div>
    </div>
</div>-->


<!-- Contact Section -->
<div id="contact" class="section">
    <div class="section-title"><i class="icon-envelope-alt"></i><strong>Contact</strong>
        <p>Connect to  <span> Us </span></p>
    </div>

    <!-- Contact Content -->
    <div class="container">
        <hr />
        <h1 class="main-title"><span>Contact</span> Us</h1>
        <p class="lead"></p>

        <div class="row">
            <div class="span12">

                <!-- Contact address -->
                <h2>We Are <span>Here</span></h2>
                <address>
                    NSS COLLEGE OF ENGINEERING<br />
                    AKATHETHARA P.O. , PALAKKAD<br />
                    <a href="mailto:contact@dvaita16.com">contact@dvaita16.com</a>
                </address>

                <!-- Contact form -->

            </div>
        </div>

        <!-- Google Map -->
        <h2>On the <span>Map</span></h2>
        <div id="map-canvas"></div>
    </div>
</div>

<!--  Section -->
<div id="register" class="section">
    <div class="section-title"><i class="icon-pencil"></i><strong>Register</strong>
        <p>Register now</p>
    </div>

    <!-- Register Content -->
    <div class="container">
        <hr />
        <h1 class="main-title"><span>Register</span> Now</h1>


        <div class="row">
            <div class="span5 offset4">
                <div id="message" class=" span3  alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> You have been registered successfully with us!. Kindly check your mail to activate your account and ensure your accommodation.
                </div>

                <div id="error" class=" span3 alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Error!</strong>Registration failed!. Try again
                </div>
                <form id="reg-form" action="register.php" class="contact-form" method="post">
                    <fieldset>
                        <div id="name-group" class="form-group">
                        <input type="text" placeholder="Name" class="form-control" class="span3" name="name" id="name" required/>
                    </div>
                    <div id="email-group" class="form-group">
                        <input type="email" placeholder="Email" class="form-control" class="span3" name="email" id="email" required onBlur="checkAvailability()"/><span id="availability-status"></span>
                        <div id='email'></div>
                    </div>

                        <input type="password" placeholder="Password" class="form-control" class="span3" name="pwd" id="pwd" required/>
                        <div id='password'></div>
                        <input type="password" placeholder="Confirm Password" class="form-control" class="span3" name="cpwd" id="cpwd" required/>
                        <div id='cpassword'></div>
                        <input type="number" placeholder="Phone" class="form-control" class="span3" name="phone" id="phone" required/>
                        <input type="text" placeholder="College" class="form-control" class="span3" name="college" id="college" required/>
                        
                        <div class="span6 radio-group label1" >
                            <br>
                            <label >Gender<span class="radio-inline">*</span></label>
                            <label class="radio-inline"><input type="radio" class ="gender" name="gender" id="male" value="male"  > Male</label>
                            <label class="radio-inline"><input type="radio" class ="gender"  name="gender" id="female" value="female" > Female</label>
                        </div>
                        <div class="input-group span6 label2">
                          <span class="input-group-addon">
                            <input type="checkbox" aria-label="chbox for accom" name="accom" value="yes">
                          </span>
                            Need accommodation
                        </div>
                        <button type="submit" class="btn btn-large" id="submit-btn">Submit</button>
                        <button type="reset" class="btn btn-large">Reset</button>
                        <button  class="btn btn-large goto-login">Already Registered ?</button>

                    </fieldset>
                </form>
            </div>
        </div>

        <!-- Google Map -->

    </div>
</div>

<div id="login" class="section">
    <div class="section-title"><i class="icon-pencil"></i><strong>Login</strong>
        <p>Login Now </p>
    </div>

    <!-- Contact Content -->
    <div class="container">
        <hr />
        <h1 class="main-title"><span>Login</span> Now</h1>


        <div class="row">
            <div class="span5 offset4">
                <div id="message" class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong>
                </div>

                <div id="error" class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Error!</strong>Login failed!. Try again
                </div>
                <form id="login-form" action="#" class="contact-form" method="post" style="display: none">
                    <fieldset>

                        <div id="email-group1" class="form-group">
                            <input type="email" placeholder="Email" class="form-control" class="span3" name="email" id="email" required/>
                        </div>
                        <input type="password" placeholder="Password" class="form-control" class="span3" name="pwd" id="pwd" required/>



                        <button type="submit" class="btn btn-large">Submit</button>
                        <button type="reset" class="btn btn-large">Reset</button>
                        <button class="btn btn-large goto-register">Not Registered yet ?</button>

                    </fieldset>
                </form>


                <div  class="alert alert-info">
                    <strong>Login </strong>Coming Soon
                </div>
            </div>
        </div>
    <hr />


    </div>
</div>


<!--Boombox Section -->
<div id="boombox" class="section">
    <div class="section-title"><i class="icon-instagram"></i><strong>Boom BOX</strong>
        <p><span>“Dancing with the feet is one thing, but dancing with the heart is another"</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/BoomBox.png"  alt="boombox"  />


        <h1 class="main-title"><span>Description</span></h1>


        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Dance is the most aesthetic form of art that our race has ever developed. <br>
                    Dancing speaks a language right from the heart. Do you have what it takes to beat the best? <br>
                    Then put on your dancing shoes, Compete with the finest crews across the nation and stand a chance to be the ultimate dancing crew.<br> 
                    The stage is set, dancers pumped up. Let the dance begin.
                </p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. A team should have a minimum of 3 members.</ol>
                    <ol style="color: #ffffff;  "  > 2. There is no restriction on the maximum number of participants,</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but a maximum of only 15 members are allowed at a time on stage.</ol>
                    <ol style="color: #ffffff;  "  > 3. Time limit for each team is 12 minutes (including narration, stage set up etc.)</ol>
                    <ol style="color: #ffffff;  "  > 4. The teams should not use any kind of explosives that would disrupt the stage.</ol>
                    <ol style="color: #ffffff;  "  > 5. Spot registration is mandatory.</ol>
                    <ol style="color: #ffffff;  "  > 6. There are no restrictions on the choice of music.</ol>
                    <ol style="color: #ffffff;  "  > 7. The judges' decisions will be final.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Ashwin Jayakumar  - +91 808 988 3350  </h4>
                <h4 style="color: #fff" align="center">Manu   - +91 960 530 9092  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>


<!-- tech event Section -->


<div id="embedded" class="section">
    <div class="section-title"><i class="icon-coffee"></i><strong>Workshop on</strong>
        <p><span> GNU/Linux and Embedded Systems. </span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/blank.jpg"  alt="blank"  />


        <h1 class="main-title"><span>Description</span></h1>


        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">This is a beginner level hands-on workshop ideal for  students with knowledge of C programming. Topics covered<br>

                    are: an introduction to GNU/Linux and Free Software,  working with Linux commands, programming Texas Instrument's ARM <br>

                    microcontroller based "Launchpad" development boards  using an Arduino-like IDE called "Energia". Students will be provided  the<br>

                    required hardware (TI Stellaris and MSP432 launchpads) by the workshop organizers.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->
        <h1 class="main-title"> <span> Pre Requisites </span></h1>

        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. A recent version of Ubuntu should be installed on all systems.</ol>
                    <ol style="color: #ffffff;  "  > 2.  If Java is not installed, please install it.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.digitalocean.com/community/tutorials/how-to-install-java-on-ubuntu-with-apt-get"> https://www.digitalocean.com/community/tutorials/how-to-install-java-on-ubuntu-with-apt-get</a></ol>
                    <ol style="color: #ffffff;  "  >  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Make sure you are able to run java .class files before proceeding further.</ol>
                    <ol style="color: #ffffff;  "  > 4. Install  Energia (different files have to be downloaded for 32 bit and 64  bit systems):</ol>
                    <ol style="color: #ffffff;  "  >  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://energia.nu/download">http://energia.nu/download</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Make sure the energia IDE is running properly. </ol>
                    <ol style="color: #ffffff;  "  > 5. Install python-serial</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sudo apt-get install python-serial</ol>
                    <ol style="color: #ffffff;  "  > 6. Make sure you are able to compile and run C programs on all systems (using gcc).</ol>
                </ul>
            </div>
        </div>



        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Amal  - +91 828 136 0530  </h4>
                <h4 style="color: #fff" align="center">Shafeeq  - +91 808 965 2690  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="python" class="section">
    <div class="section-title"><i class="icon-laptop"></i><strong>Workshop on  Python</strong>
        <p><span> </span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/blank.jpg"  alt="banner"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title" > <span> Rules </span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <li > Lorem ipsum dolor sit amet, consectetuer  </li>
                    <li  >Lorem ipsum dolor sit amet, consectetuer  </li>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Ruby Paul   - +91 954 401 4948  </h4>
                <h4 style="color: #fff" align="center">Arjun K M   - +91 811 181 5967  </h4>
                <h4 style="color: #fff" align="center">Bineesh P B - +91 859 033 2334  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="hackerjack" class="section">
    <div class="section-title"><i class="icon-desktop"></i><strong>Hacker Jack</strong>
        <p> <span>“Never trust a programmer in a suit”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Hacking.png"  alt="Hacking"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">
            He who exceeds the boundaries of literate knowledge excels in the art of penetration testing.<br>
            So explore yourself in the world of cyber security and hack the Jack prize<br>
            Hack jacker is mainly concerned with

        </p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom"> <br>
                    1. checking the contenders knowledge on current cyber vulnerability<br>
                    2. Their skills on prevention measures<br>
                    3. Penetration testing<br>
                    4. Vulnerability Exploitation skills<br>
                    5. Familiarisation with common used tools for vulnerability assessment.<br>
                    6. Knowledge in dark web<br>
                    7. Google hacks<br>
                    8. Basic Linux and windows commands.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title" > <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. The competition will be based on individuals.</ol>
                    <ol style="color: #ffffff;  "  > 2.The first prelims of the competition will be an aptitude test </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;where in the top contenders will be selected for the next round</ol>
                    <ol style="color: #ffffff;  "  > 3. The next stage will be a set of tasks having different points for each.</ol>
                    <ol style="color: #ffffff;  "  > 4. Internet connectivity will be provided in this round.</ol>
                    <ol style="color: #ffffff;  "  > 5. The one who complete all the tasks first will be the winner.</ol>
                    <ol style="color: #ffffff;  "  > 6. In case of non-completion of tasks, the one who scores the highest point will be the winner.</ol>
                    <ol style="color: #ffffff;  "  > 7. Organising committee’s decisions will be final.</ol>
                    <ol style="color: #ffffff;  "  > 8. College ID card is mandatory for registration.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Suraj Suresh   - +91 994 692 0110  </h4>
                <h4 style="color: #fff" align="center">Abel Kuruvila   - +91 808 935 2216  </h4>
                <h4 style="color: #fff" align="center">Deepa S - +91 755 991 5153  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="langx" class="section">
    <div class="section-title"><i class="icon-xing"></i><strong>Language X</strong>
        <p><span>Learn the principle, Abide by the principle, Dissolve the principle”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />

       <div>

        <img class="pic" src="img/Languagex.png"  alt="Languagex"  />

           </div>
        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">
            The coding contest that pushes you beyond your comfort zones.<br>
            The contest is aimed at the grasping power of contestants and their ability to learn and code <br>
            in an esoteric programming language.Within a given time the participants have to study <br>
            the language provided and solve problem based on the logic and codes of the program.


        </p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom"> <br>
                    </p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title" style="color:#ffffff "> <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1.The competition will be conducted in two stages.</ol>
                    <ol style="color: #ffffff;  "  > 2. Preliminary screening round will contain 20 MCQ questions from basic C language.</ol>
                    <ol style="color: #ffffff;  "  > 3. Selected candidates will proceed to the coding round.</ol>
                    <ol style="color: #ffffff;  "  > 4. In Coding round, the participants would be given the documentation for an esoteric coding language.</ol>
                    <ol style="color: #ffffff;  "  > 5. Participants has to code for a given problem using the syntax and logic of the given language.</ol>
                    <ol style="color: #ffffff;  "  > 6. Apart from the documentation, the participants are not allowed to refer anything else.</ol>
                    <ol style="color: #ffffff;  "  > 7. Quickest person to solve the problem will be declared as the winner.</ol>
                    <ol style="color: #ffffff;  "  > 8. In case of a tie, the scores from the preliminary screening round would  be considered.</ol>
                    <ol style="color: #ffffff;  "  > 9. Organising committee have the right to disqualify a participant, in the event of any misconduct or malpractice.</ol>
                    <ol style="color: #ffffff;  "  > 10. College ID card is mandatory for registration.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Anil - +918129542772  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="sidhandics" class="section">
    <div class="section-title"><i class="icon-file-alt"></i><strong>Sidhandics</strong>
        <p><span> “Exchange a thought provoking idea”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />

        <div>

            <img class="pic" src="img/sidhandics.png"  alt="sidhandics"  />

        </div>
        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">
            Sidhandhics provides a platform to put forward your innovative ideas related to computer science. <br>
            Submit your ideas and get invited for a live presentation during Dvaita ‘16. <br>
            Participation can be individual or group (not more than 5).


        </p>



        <hr />
        <!-- Rules -->

        <h1 class="main-title" > <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  >1. Maximum of five authors per paper.</ol>
                    <ol style="color: #ffffff;  "  >2. Undergraduate students from any institute are eligible to participate.</ol>
                    <ol style="color: #ffffff;  "  >3. Interested candidates may send the soft copy of the paper (PDF) to </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:sidhandhics@dvaita16.com" > sidhandhics@dvaita16.com</a>on or before 12th February 2016.</ol>
                    <ol style="color: #ffffff;  "  > 4. Name, e-mail ID and contact number of authors should be mentioned in the e-mail.</ol>
                    <ol style="color: #ffffff;  "  > 5. Subject of the e-mail should specify the domain of CS under which the paper is</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;submitted. Eg:- Data mining, Cloud Computing etc.</ol>
                    <ol style="color: #ffffff;  "  > 6. Submitted papers should be in the following format:</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full length paper not exceeding 4 pages of A4 size in IEEE double column format.</ol>

                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Durganand - +918281357181</h4>
                <br><br>

            </div>
        </div>



    </div>
</div>


<div id="bashemup" class="section">
    <div class="section-title"><i class="icon-bar-chart"></i><strong>BASH EM UP</strong>
        <p><span> “It is easier to port a shell than a shell script”</span> </p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />

        <div>

            <img class="pic" src="img/Bashemup.png"  alt="Bashemup"  />

        </div>
        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">
            Show off your advanced shell scripting skills and compete to win exciting prizes.<br>
            Work your way through interesting tasks using only the bash shell.<br>
            So get your terminals ready to Bash 'em Up!


        </p>



        <hr />
        <!-- Rules -->

        <h1 class="main-title" > <span> Rules </span></h1>
        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Participants can be single or a team of two.</ol>
                    <ol style="color: #ffffff;  "  > 2.Prelims will be conducted online, out of which ideally 7 teams will be selected.</ol>
                    <ol style="color: #ffffff;  "  > 3.Prelims will be MCQ</ol>
                    <ol style="color: #ffffff;  "  > 4.The next stage of the event will be conducted at NSSCE during the tech fest.</ol>
                    <ol style="color: #ffffff;  "  > 5.This shall consist of maximum of two rounds.</ol>
                    <ol style="color: #ffffff;  "  > 6.Round 2 will be conducted only if there is a tie in scores between teams in round 1.</ol>
                    <ol style="color: #ffffff;  "  > 7.Rules are subjected to change as per the decision of the organizing committee.</ol>
                    <ol style="color: #ffffff;  "  > 8.All participants should have proper ID cards.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Shafeeq - +91 808 965 2690  </h4>
                <h4 style="color: #fff" align="center">Sachin Krishnan - +91 812 959 8421  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="swatthebug" class="section">
    <div class="section-title"><i class="icon-bug"></i><strong>Swat The Bug !</strong>
        <p><span>“It’s not a bug, It’s an undocumented feature”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Swatthebug.png"  alt="swat the bug"  />


        <h1 class="main-title"><span>Description</span></h1>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Programming is not just a science, but an art. This event focuses on testing the <br>
                    conceptual understanding of programming methodology to implement, test and debug the programs.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. This event is to be competed in team of two members. Both participants have to register for the event.</ol>
                    <ol style="color: #ffffff;  "  > 2. College ID card is mandatory for registration. </ol>
                    <ol style="color: #ffffff;  "  > 3. Laptops, books or any type of written/printed materials, use of internet/mobile phones are strictly prohibited during the event. </ol>
                    <ol style="color: #ffffff;  "  > 4. The event is onsite and will consist of two rounds.</ol>
                    <ol style="color: #ffffff;  "  > 5. The first round is a written objective test of 30 minutes. This is an elimination round and</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;will consist of objective questions with/without multiple choices from the basics of programming.</ol>
                    <ol style="color: #ffffff;  "  > 6. The final round contains the implementation, debugging and error solving of one/ more complex </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;programs in C/C++ programming language with prescribed time limit. </ol>
                    <ol style="color: #ffffff;  "  > 8. Organizing committee has a right to disqualify a participant in case of any indiscipline.</ol>
                    <ol style="color: #ffffff;  "  > 9. Decision of the judges shall be final and it will be binding to all. </ol>
                    <ol style="color: #ffffff;  "  > 10.On the spot registration is allowed.
                    </ol>

                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Febin - +91 904 802 5743 </h4>
                <h4 style="color: #fff" align="center">Vivek A V - +91 902 007 8321</h4>
                <br><br>

            </div>
        </div>



    </div>
</div>


<div id="maestro" class="section">
    <div class="section-title"><i class="icon-magic"></i><strong>Code Maestro</strong>
        <p><span> “Talk is cheap. Show me the code”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Codemaestro.png"  alt="Code meastro"  />


        <h1 class="main-title"><span>Description</span></h1>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">A battleground for programmers to unleash the coder in them.<br>

                    Do not miss this opportunity to  gratify the creative longings built deep within you. Come and have fun coding.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>
        <p class="lead">The Rules and Regulations</p>

        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol   > 1.Code Maestro is not a team event. Only individuals are allowed to compete.</ol>
                    <ol   > 2.All contestants are required to present a valid student identification card during the time of registration.</ol>
                    <ol  > 3.A preliminary MCQ test based on programming will be conducted.</ol>
                    <ol > 4.Those contestants who qualify in the prelims can enter the next round of the competition.</ol>
                    <ol  > 5.Contestants have to code the questions given to them in the stipulated period of time.</ol>
                    <ol   > 6.Rules are subjected to change as per the decision of the organising committee.</ol>
                    <ol  > 7. Organising committee have the right to disqualify a participant, in the event of any misconduct or malpractices.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Sreya - +91 949 525 8405  </h4>
                <h4 style="color: #fff" align="center">Sathyasree - +91 815 697 4942  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="codeswap" class="section">
    <div class="section-title"><i class="icon-code-fork"></i><strong>Code Swap</strong>
        <p><span> “It is all about teamwork”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Codeswap.png"  alt="Code swap"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p style="color: #fff" class="lead">Calculate the Chemistry between you and your buddy</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Code Swap is a coordination based programming challenge where the players <br>
                    in a team will interchange their codes while coding.SWAPPING allows the players to code for, not only one, <br>
                    but more than one program in different languages which makes it all more interesting and challenging.<br>
                    However, the players must note that, in the event, time plays an important factor.<br>
                    Here, the players must construct a code such that, it gets executed by using your programming <br>
                    capabilities with the ability to get the desired result.<br>

                    <strong>PREREQUISITE: Basic Programming knowledge of Java ,python,c/c++</strong>
                </p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Code Swap is a team event consisting of 2 members in each team.</ol>
                    <ol style="color: #ffffff;  "  > 2. Participants should have basic programming knowledge of Java, Python, C/C++.</ol>
                    <ol style="color: #ffffff;  "  > 3. The event will proceed in two rounds: Prelims and Finals.</ol>
                    <ol style="color: #ffffff;  "  > 4. The Prelims will be a written test, based on logical and programming questions.</ol>
                    <ol style="color: #ffffff;  "  > 5. Both the members should score minimum marks in prelims to qualify for the final round.</ol>
                    <ol style="color: #ffffff;  "  > 6. Finals round will comprise of multiple language programs to check the team’s coordination </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skill and ability to correlate multiple task.</ol>
                    <ol style="color: #ffffff;  "  > 7. Both members will be asked to code two different programs in two different languages.</ol>
                    <ol style="color: #ffffff;  "  > 8. Members will be asked to swap at a particular point of time and continue the coding.</ol>
                    <ol style="color: #ffffff;  "  > 9. Apart from these, some additional rules will be disclosed on the spot. </ol>
                    <ol style="color: #ffffff;  "  > 10. Organising committee have the right to disqualify a team, in the event of any misconduct or malpractice.</ol>
                    <ol style="color: #ffffff;  "  > 11. College ID card is mandatory for registration.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                    <h4 style="color: #fff" align="center">Ruby Paul   - +91 954 401 4948  </h4>
                    <h4 style="color: #fff" align="center">Arjun K M   - +91 811 181 5967  </h4>
                    <h4 style="color: #fff" align="center">Bineesh P B - +91 859 033 2334  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>


<div id="codezilla" class="section">
    <div class="section-title"><i class="icon-code"></i><strong>CodeZilla</strong>
        <p><span>“Treat your code like poetry”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Codezilla.png"  alt="code zilla"  />


        <h1 class="main-title"><span>Description</span></h1>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Think you have the mad skills to be a cracker jack programmer? <br>
                    Waiting for a cool way to show off your coding skills or are you just a super geek too <br>
                    lazy to move out of your room? Then this is the right place for you!! Take part in our <br><strong></strong>International</strong> <br>
                    level online coding contest and have a go at the amazing prizes up for grabs.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Codezilla is an online coding contest for individuals commencing on February 13, 2016.</ol>
                    <ol style="color: #ffffff;  "  > 2. Codezilla is hosted by HackerRank.</ol>
                    <ol style="color: #ffffff;  "  > 3. Participants can code directly on HackerRank interface.</ol>
                    <ol style="color: #ffffff;  "  > 4. HackerRank supports 20 major languages.</ol>
                    <ol style="color: #ffffff;  "  > 5. Any case of code plagiarism will result in disqualification of both the users from the contest.</ol>
                    <ol style="color: #ffffff;  "  > 6. Please refrain from discussing strategy during the contest.</ol>
                    <ol style="color: #ffffff;  "  > 4. Decision of judges will be final.</ol>
                    <ol style="color: #ffffff;  "  > 7. For details regarding the rules, please visit: <a href="https://www.hackerrank.com/contests"> https://www.hackerrank.com/contests</a></ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Sony - +91 944 768 2785  </h4>
                <h4 style="color: #fff" align="center">Harikrishnan M K  - +91 940 084 3565  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<!-- Gen event Section -->

<div id="bestengineer" class="section">
    <div class="section-title"><i class="icon-male"></i><strong>Best Engineer</strong>
        <p><span> “Designed to lead, Lead to design”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Bestengineer.png"  alt="Best Engineer"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">The thing about being the best is that you can only get better.<br>
                    A set of tasks have been set that shall test your grey matter.Those who can adapt, <br>
                    improvise and implement easily shall find this as a cake walk.<br>

                   <strong> To be the best you need to beat the rest.</strong> </p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1.Individuals are allowed to compete (not in groups).</ol>
                    <ol style="color: #ffffff;  "  > 2. All contestants are required to present a valid student identification card.</ol>
                    <ol style="color: #ffffff;  "  > 3. Four rounds will be there.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUND 1: A sequence of written tests to test the thinking skills of the applicant.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUND 2: Challenges will be set up to test the presence of mind and creativity of the participant.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUND 3: Participant will be tested for the skill of working as a group.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Group Discussion/some other group involving activity).</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUND 4: Stress Interview.</ol>
                    <ol style="color: #ffffff;  "  > 4. Rules are subjected to change as per the decision of the organising committee.</ol>
                    <ol style="color: #ffffff;  "  > 5. Decision of judges will be final.</ol>

                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Ashwin Jayakumar - +91 808 988 3350  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="highq" class="section">
    <div class="section-title"><i class="icon-question-sign"></i><strong>High Q</strong>
        <p><span>“Quick on Buzz. Right.”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/HighQ.png"  alt="HighQ"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Flex you neurones to catch hold of the fleeting facts. Here is a chance to iterate your knowledge and unload your answers. If you think you have got what it takes to leave everyone biting the dust with your knowledge, this brain battle extravaganza is just the place to be. Welcome to the open quiz of Dvaita!!!</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Participation is open to students from colleges and schools.</ol>
                    <ol style="color: #ffffff;  "  > 2. A team should not exceed a maximum of 3 members.</ol>
                    <ol style="color: #ffffff;  "  > 3. Cross college teams are allowed.</ol>
                    <ol style="color: #ffffff;  "  > 4. Mr. Shibin Azad will be the Quiz Master.</ol>
                    <ol style="color: #ffffff;  "  > 5. Registration can be done online or on spot.</ol>
                    <ol style="color: #ffffff;  "  > 6. The quiz will be dealing with general topics.</ol>
                    <ol style="color: #ffffff;  "  > 7. The quiz will proceed in two stages.</ol>
                    <ol style="color: #ffffff;  "  > 8. Eight teams will qualify to the final round.</ol>
                    <ol style="color: #ffffff;  "  > 9. All the participants must submit their college ID card during registration.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Hariprasad - +91 984 718 9695  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="startaction" class="section">
    <div class="section-title"><i class="icon-film"></i><strong>Start Action Cut</strong>
        <p><span> “Creative without strategy is called art, creative with strategy is called advertising”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Startactioncut.png"  alt="Start action cut"  />


        <h1 class="main-title"><span>Description</span></h1>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Start action cut is an Ad film contest which is bound to thrill the young talents.
                    It has become a necessity for students and institutes offering professional courses to develop their understanding
                    of present marketing and advertising trends. Ad film making requires knowledge, sensibility and great communication
                    skills to create an instant effect on audience. It is an excellent opportunity to exercise their creative skill and
                    win exciting prizes.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>
        <p class="lead">The Rules and Regulations of the Event</p>

        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol    > 1. There is no subject /theme for the competition, any products, ideas, or events can be advertised.</ol>
                    <ol   > 2. The contest is open to all (anybody can participate).</ol>
                    <ol   > 3. Number of participants in a team: Min - 1, Max - 5</ol>
                    <ol    > 4. There will be strict adherence to time limit. The duration of the </ol>
                    <ol   > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AD film can be no longer than 120 seconds.</ol>
                    <ol  > 5. Any character, prop, place can be taken as per your creativity.</ol>
                    <ol   > 6. The video should not have any obscene or defamatory scenes in it.</ol>
                    <ol   > 7. Videos in any language other than English and Malayalam is also accepted, </ol>
                    <ol   > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but it needs to be subtitled in English. </ol>
                    <ol   > 8. Submitted video must be original, unpublished work and free from copyright issues. </ol>
                    <ol   > 9. Each team have to send their Ad film to us on <a href="mailto:startactioncut@dvaita16.com" >startactioncut@dvaita16.com</a> </ol>
                    <ol   > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by 17th February 2016(12 p.m.). </ol>
                    <ol   > 10. Decisions of the judges shall be final and binding to all teams.</ol>
                    <ol   >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No complaints or correspondence will be entertained in this regard </ol>
                    <ol   >11. Attach a form containing the following details:</ol>
                    <ol   > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of the film: </ol>
                    <ol   > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of the director: </ol>
                    <ol   > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Duration of the film: </ol>
                    <ol   > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact address with phone number: </ol>

                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Midhun - +91 890 784 5767  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="mrcad" class="section">
    <div class="section-title"><i class="icon-building"></i><strong>Mr. CAD</strong>
        <p><span>“CREATE A Difference”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Mrcad.png"  alt="Mr cad"  />


        <h1 class="main-title"><span>Description</span></h1>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Reveal the magic of new perspective. Manifest your skill in AutoCAD.
                    Get the 2d,imagine the 3d, build the figure & beat d Euclid.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. There will be three rounds each with a deadline.</ol>
                    <ol style="color: #ffffff;  "  > 2. The FIRST ROUND consists of a task to complete a 2D figure within 10 minutes.</ol>
                    <ol style="color: #ffffff;  "  > 3. The SECOND ROUND will be to complete a 3D figure with a time limit of 20 minutes.</ol>
                    <ol style="color: #ffffff;  "  > 4. In the THIRD ROUND, the candidate has to draw the front view, back view, top view</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and side view of the given figure in another 20 minutes.</ol>
                    <ol style="color: #ffffff;  "  > 5. All the participants must submit their college ID card during registration.</ol>
                    <ol style="color: #ffffff;  "  > 4. Decision of judges will be final.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Susan - +91 828 156 2611  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="shutterbug" class="section">
    <div class="section-title"><i class="icon-camera"></i><strong>Shutter Bug</strong>
        <p><span>“Eyes like shutter, Mind like lens”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Shutterbug.png"  alt="Shutter bug"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead" style="color: #ffffff">Theme: “Colours of Life</p>

        <div class="row">
            <div class="span6 offset3"><p>The Photography contest, named as "Shutterbug", is going to be conducted between
                    12th and 18th of this february. Pictures should be sent to an e-mail id, in the dates specified.
                    Winner will be announced on the first day of Dvaita'16.</p>
                        </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. There is no registration procedures and no age limit for participation.</ol>
                    <ol style="color: #ffffff;  "  > 2. Photographs related to the specified theme only are accepted.</ol>
                    <ol style="color: #ffffff;  "  > 3. Only upto 3 photographs are accepted from a participant.</ol>
                    <ol style="color: #ffffff;  "  > 4. Participants are to send the photos to <a href="mailto:shutterbug@dvaita16.com" >shutterbug@dvaita16.com.</a></ol>
                    <ol style="color: #ffffff;  "  > 5. Participants must specify their name, age, place & contact number along with the photograph(s).</ol>
                    <ol style="color: #ffffff;  "  > 6. Participants with incorrect contact details will get disqualified.</ol>
                    <ol style="color: #ffffff;  "  > 7. All digital files must be 20 megabytes or smaller, must be in JPEG or JPG format,</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and must be at least 1,600 pixels wide (if a horizontal image) or 1,600 pixels tall (if a vertical image).</ol>
                    <ol style="color: #ffffff;  "  > 8. Digital manipulation that distorts the reality of the images will not be allowed. Only  </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;basic enhancements such as sharpening, contrast adjustment, focus or simple cropping will be allowed.</ol>
                    <ol style="color: #ffffff;  "  > 9. Selected pictures will be posted in Dvaita's official Facebook page everyday </ol>
                    <ol style="color: #ffffff;  "  > 9. Number of likes to the pictures will also be a factor for selecting the winner. </ol>
                    <ol style="color: #ffffff;  "  >10. Decisions taken by the event heads will be final </ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Sarath - +91 859 282 2923  </h4>
                <h4 style="color: #fff" align="center">Pradeep C V -  +91 964 580 2847  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="respawn" class="section">
    <div class="section-title"><i class="icon-gamepad"></i><strong>RESPAWN Arena</strong>
        <p><span> “Gamers  don’t  die, they  just RESPAWN!!! “</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Respawnarena.png"  alt="Respawn arena"  />


        <h1 class="main-title"><span>Description</span></h1>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Ready for an astounding gaming experience? Here you go! Swank your gaming skills the way you want to..!!</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>
        <br><br><br><br>
        <h4 class="main-title"> <span> General Guidelines </span></h4>
        <div class="row">
            <div class="span8 offset3">

                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Spot registration is compulsory.</ol>
                    <ol style="color: #ffffff;  "  > 2.Registration will be closed after prelims.</ol>
                    <ol style="color: #ffffff;  "  > 3. In case of unintentional disconnection, admin will decide on how to proceed.</ol>
                    <ol style="color: #ffffff;  "  > 4. If at any time, a player intentionally disconnects/exits the game, he/she will be disqualified. </ol>
                    <ol style="color: #ffffff;  "  > 5. In case of alt-tabbing, the admin will decide whether it was intentionally/mistake and </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;what action must be taken, with disqualification being maximum penalty.</ol>
                    <ol style="color: #ffffff;  "  > 6. Rules are subject to change as per the decision of the organising committee.</ol>
                    <ol style="color: #ffffff;  "  > 7. Organising committee’s decisions are final.</ol>
                    <ol style="color: #ffffff;  "  > 8. There will be no practicing allowed.  </ol>
                    <ol style="color: #ffffff;  "  > 9. Participants are only allowed to change necessary controls and check them.</ol>
                    <ol style="color: #ffffff;  "  > 10. The total number of rounds for prelims will depend on the total no. of participants.</ol>
                    <ol style="color: #ffffff;  "  > 11. Keyboards will be provided.</ol>
                    <ol style="color: #ffffff;  "  > 13. If referee decides that external conditions (press, team, player, spectator etc..) give </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unfair advantages to a player, the team/individual may be given a warning or lose by</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default at the referee's sole discretion.</ol>


                </ul>
            </div>
        </div>

        <br><br><br><br>
        <h4 class="main-title"> <span> NFS Most wanted </span></h4>
        <div class="row">
            <div class="span8 offset3">

                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Qualification round:</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All tournament participants will play 3 laps and the qualifier </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for further rounds will be decided on best time basis (Top 32). </ol>
                    <ol style="color: #ffffff;  "  > 2. At the end of each match, players must maintain the final screens and receive confirmation from a referee.</ol>
                    <ol style="color: #ffffff;  "  > 3. Any participants failing to complete the race will be disqualified.</ol>
                </ul>
            </div>
        </div>

        <br><br><br><br>
        <h4 class="main-title"> <span> FIFA 11 </span></h4>
        <div class="row">
            <div class="span9 offset3">

                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. All games will be classic 1 vs 1.</ol>
                    <ol style="color: #ffffff;  "  > 2. In case of unintentional disconnection, admin will decide on how to proceed.</ol>
                    <ol style="color: #ffffff;  "  > 3. If game is within half time, and no goals have been scored, the game will be restarted</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with same teams for a full time game.</ol>
                    <ol style="color: #ffffff;  "  > 4. If not, the game will be played for the remaining time based on what time it was </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;disconnected with scores being carried over.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If not, the game will be played for the remaining time based on what time it disconnected with scores being carried over.</ol>
                    <ol style="color: #ffffff;  "  > 5. Teams can be either clubs or countries (classic x1 and world x1 is not allowed).</ol>
                    <ol style="color: #ffffff;  "  > 6. The prelims and league will be classic 4 min half time matches.</ol>
                    <ol style="color: #ffffff;  "  > 7. Quarter and Semis will all be 5 min half time matches.</ol>
                    <ol style="color: #ffffff;  "  > 8. Final will be 6 min half time match. </ol>
                </ul>
            </div>
        </div>


        <br><br><br><br>
        <h4 class="main-title"> <span> Counter strike </span></h4>
        <div class="row">
            <div class="span9 offset3">

                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. 4 vs 4 (Team play, 4 players per team).</ol>
                    <ol style="color: #ffffff;  "  > 2. The first team to win 9 rounds wins the match.</ol>
                    <ol style="color: #ffffff;  "  > 3. Extra rounds will be played until winner is decided.</ol>
                    <ol style="color: #ffffff;  "  > 4. A knockout tournament structure will be used or league structure if number of participants are less.</ol>
                    <ol style="color: #ffffff;  "  > 5. Round Description:</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 16 rounds (Maximum round format):- </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 rounds as terrorist and 8 rounds as counter terrorist per team.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Victory condition: The first team to win 9 rounds.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Round time: 3 minutes.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Freeze Time: 5 seconds.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Buy time: 25 seconds.</ol>
                    <ol style="color: #ffffff;  "  > 6. Counter strike, terrorist will be decided before the match or decided by the knifing.</ol>
                    <ol style="color: #ffffff;  "  > 7. In case of a tie after regulation, 6 extra rounds will be played (3 as terrorist and 3 as counter terrorist per team)</ol>
                    <ol style="color: #ffffff;  "  > 8. Extra round restart money : $10,000.</ol>
                    <ol style="color: #ffffff;  "  > 9. In the case of a retie after 6 rounds as stated above, 6 more extra rounds will be played until tie is broken.</ol>
                    <ol style="color: #ffffff;  "  > 10. Official Maps: Defusal Maps.</ol>
                    <ol style="color: #ffffff;  "  > 11. The server master will record the process of the match.</ol>
                    <ol style="color: #ffffff;  "  > 12. Approved grenade amounts per round: </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Flash bangs:2.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Grenades:1.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Smoke Grenades:1.</ol>
                    <ol style="color: #ffffff;  "  > 13. Approved commands: </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Adjust crosshair size</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mp-autokicko</ol>
                    <ol style="color: #ffffff;  "  > 14. Default skins must be used</ol>
                    <ol style="color: #ffffff;  "  > 15. Any other use of map or program bugs can result in warning at the minimum or lose</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by default for the offending team after deliberation and decision by the board of referees at discretion.</ol>
                    <ol style="color: #ffffff;  "  > 16. Mouse fix and unfix will be provided in the arena. </ol>
                    <ol style="color: #ffffff;  "  > 17. The server master can and will check for the use of any unfair practice or script,  </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;even those not listed during the match.</ol>
                    <ol style="color: #ffffff;  "  > 18. HLTV proxy will join the game server for tournament broadcasts. </ol>
                    <ol style="color: #ffffff;  "  > 19. To test for HLTV Flash, players must follow the direction of the server master and/or the referees. </ol>
                    <ol style="color: #ffffff;  "  > 20. The use of consoles will be monitored by the officials in the arena. </ol>
                    <ol style="color: #ffffff;  "  > 21. Players are allowed to adjust the multiplayer settings using commands like </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mp-autokicko, but they are not allowed to use any other commands. The permissible </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiplayer commands and server commands shall be specified by the organizers in the arena. </ol>





                </ul>
            </div>
        </div>


        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Sony - +91 940 055 5121  </h4>
                <h4 style="color: #fff" align="center">Harish - +91 854 758 8659  </h4>
                <h4 style="color: #fff" align="center">Sachin Giridhar - +91 974 478 2170   </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="contraption" class="section">
    <div class="section-title"><i class="icon-cog"></i><strong>Break In Style</strong>
        <p><span> “d-STRUCT 2 re-STRUCT”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Contraption.png"  alt="Break in style"  />


        <h1 class="main-title"><span>Description</span></h1>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Break In Style is the kind of event which puts your engineering skill set to the test.
                    Unlock your imagination and build a complex structure based on engineering principles to perform a task.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. College ID card is mandatory for registration.</ol>
                    <ol style="color: #ffffff;  "  > 2. Each team can have a maximum of 5 members.</ol>
                    <ol style="color: #ffffff;  "  > 3. Same person could not be member of more than one team.</ol>
                    <ol style="color: #ffffff;  "  > 4. All teams involving common person as participant will be disqualified.</ol>
                    <ol style="color: #ffffff;  "  > 5. All participants are requested to bring two copies of properly printed abstract of their</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contraption, clearly mentioning steps charts,which shows all energy conversions.</ol>
                    <ol style="color: #ffffff;  "  > 6. A space of 5 ft * 6 ft * 7 ft provided.</ol>
                    <ol style="color: #ffffff;  "  > 7. No chemical explosions are allowed during the working of contraption.</ol>
                    <ol style="color: #ffffff;  "  > 8. 180 minutes will be given to each team for the initial setup.</ol>
                    <ol style="color: #ffffff;  "  > 9. Setup time of 45 minutes will be given before second trial.</ol>
                    <ol style="color: #ffffff;  "  > 10. Only two trials will be allowed.</ol>
                    <ol style="color: #ffffff;  "  > 11. Teams taking more than 2 trial will be disqualified.</ol>
                    <ol style="color: #ffffff;  "  > 12. Maximum of 3 hand touches are allowed including the starting bit.</ol>
                    <ol style="color: #ffffff;  "  > 13. 10,30, and 50 points will be deducted for 4th, 5th, and  6th handtouch respectively.</ol>
                    <ol style="color: #ffffff;  "  > 14. Participants will have only have 15 minutes for displaying the contraption to judges.</ol>
                    <ol style="color: #ffffff;  "  > 15. Less points will be allotted for repeated conversions.</ol>
                    <ol style="color: #ffffff;  "  > 16. The steps performed for energy conversion by any readymade product will not be scored.</ol>
                    <ol style="color: #ffffff;  "  >17. Nobody other than the participating team may involve in setting up the contraption.</ol>


                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Varis - +91 980 946 4672  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="crossfire" class="section">
    <div class="section-title"><i class="icon-fire"></i><strong>Cross Fire</strong>
        <p><span> “Intellectuals Debate. Idiots Argue”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Crossfire.png"  alt="Crossfire"  />


        <h1 class="main-title"><span>Description</span></h1>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">It is better to debate a question than to settling it than to settle a question without debating it.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Crossfire will be a team event comprising of two members in each team.</ol>
                    <ol style="color: #ffffff;  "  > 2. College ID card is mandatory for registration.</ol>
                    <ol style="color: #ffffff;  "  > 3. The competition proceeds in three rounds.</ol>
                    <ol style="color: #ffffff;  "  > Round-1:</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.A picture of a particular topic will be given to a team with no other information.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Each team will get a different picture with 1 minute preparation time.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. One of the members have to speak in favor of the topic and other against it.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Duration: 2 minutes for each speaker.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Best 4 teams will be selected to 2nd round.</ol>
                    <ol style="color: #ffffff;  "  > Round-2:</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.Two new teams of 4 members each will be made combining any two old teams.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Topic will be given on the spot with 7 minutes preparation time. </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. All the members of the team have to speak either in favor or against which will be determined by a lott.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Duration: 1 minute for each speaker.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Rebuttal session for 5 minutes.</ol>
                    <ol style="color: #ffffff;  "  > Round-3:</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Best two teams will be selected and has to face the judges and audience’s criticizing questions.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. The best team will be rewarded. </ol>
                    <ol style="color: #ffffff;  "  > 4. Judges’ decisions will be final.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Akhil Ashok - +91 904 825 3683  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="pirate" class="section">
    <div class="section-title"><i class="icon-map-marker"></i><strong>Be The Pirate</strong>
        <p><span>“Lost at Sea? Let the hunt begin”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Bethepirate.png"  alt="Be the pirate"  />


        <h1 class="main-title"><span>Description</span></h1>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Be The Pirate! Is a game for teams having 3 or 4 members,
                    in which team try to find hidden objects or places by using a series of clues.
                    The game may contain many rounds in which a number of teams get eliminated in each round.
                    The first team to find the key to the treasure in the final round will be declared as the winner.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Be the Pirate is a team event comprising of 4 members in each team.</ol>
                    <ol style="color: #ffffff;  "  > 2. The event features 4 rounds that tests different skill levels of the participants.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Round 1: It will be an aptitude test from which only the top 12 teams will be proceeding on to the next round.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Round 2: There will be 3 levels to test the team coordination, logical ability and </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gaming skills of each group. The best 8 teams will be selected for the next round.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Round 3: Group skill will be tested in this round in two levels. Top 4 teams will be  </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;selected for the next round.</ol>

                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Round 3: Group skill will be tested in this round in two levels. Top 4 teams will be  </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;selected for the next round.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Round 4: The job is to find some hidden objects or places by using a series of clues </ol>
                    <ol style="color: #ffffff;  "  > 3. Details of each round will be given on the spot.</ol>
                    <ol style="color: #ffffff;  "  > 4. Rules are subjected to change as per the decision of the organizing committee.</ol>
                    <ol style="color: #ffffff;  "  > 5. Participants are required to submit their college ID cards during the time of registration.</ol>
                    <ol style="color: #ffffff;  "  > 6. Organizing committee has the right to disqualify a team in case of any indiscipline or malpractices during the event.</ol>

                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Karthik - +91 828 139 4052  </h4>
                <h4 style="color: #fff" align="center">Bharath - +91 894 344 2917 </h4>
                <h4 style="color: #fff" align="center">Jithu   - +91 974 6320 754</h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="mysteriarch" class="section">
    <div class="section-title"><i class="icon-question"></i><strong>Mysteriarch</strong>
        <p><span> “Not so Elementary, dear Watson” </span> </p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Mysteriarch.png"  alt="Mysteryarch"  />


        <h1 class="main-title"><span>Description</span></h1>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Do you have a team of two to be the next Sherlock and Watson to unravel the mysteries
                    behind the scenes? Then put on your thinking cap and investigate on the crime event. Record, Refresh and,
                    Reiterate your findings and LOCK the culprit…</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Team of two members.</ol>
                    <ol style="color: #ffffff;  "  > 2.Three rounds will be there.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Aptitude</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Video perception</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Crime scene investigation</ol>
                    <ol style="color: #ffffff;  "  > 3. Details about the rounds will be given on the spot.</ol>
                    <ol style="color: #ffffff;  "  > 4. Decision of judges will be final.</ol>
                    <ol style="color: #ffffff;  "  > 5. All contestants are required to present a valid student identification card.</ol>


                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Manu - +91 960 530 9092  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="hudrolaunch" class="section">
    <div class="section-title"><i class="icon-rocket"></i><strong>Hydro launch</strong>
        <p><span> “ Let’s splash off!!!”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Hydrolaunch.png"  alt="Hydrolaunc"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Have you ever experienced the magic of Aerodynamics? Here comes an opportunity
                    to build an air pressurized rocket propelled with water.

                    <br><br>Get ready with your rocket. 1.. 2.. 3.. Splash off…
                </p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Only plastic soft drink bottles are to be used for the rocket body.</ol>
                    <ol style="color: #ffffff;  "  > 2. The water rocket must use only compressed ambient atmospheric air as its source of energy. </ol>
                    <ol style="color: #ffffff;  "  > 3. Only tap water shall be used in the rocket, and the water will be provided by the organisers. </ol>
                    <ol style="color: #ffffff;  "  > 4. Water brought by the team will not be allowed in the rocket.</ol>
                    <ol style="color: #ffffff;  "  > 5. No chemical or aerated water should be added for launching the rocket.</ol>
                    <ol style="color: #ffffff;  "  > 6. Pressure pump will be provided.</ol>
                    <ol style="color: #ffffff;  "  > 7. No component or body part of the rocket should get detached from the main frame </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;during the flight of the rocket except for the case of payload.</ol>
                    <ol style="color: #ffffff;  "  > 8. If any other part gets detached, then the team will be disqualified.</ol>
                    <ol style="color: #ffffff;  "  > 9. There can be a maximum of 4 members per team.</ol>
                    <ol style="color: #ffffff;  "  > 10. College ID card is mandatory for registration.</ol>
                    <ol style="color: #ffffff;  "  > 11. The points earned by the team will depend on the range of flight, leak-free rockets and successful design.</ol>
                    <ol style="color: #ffffff;  "  > 12. Organising committee have the right to disqualify a team, in the event of any misconduct or malpractice.</ol>

                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Sanal - +91 808 958 7820  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="disco" class="section">
    <div class="section-title"><i class="icon-lightbulb"></i><strong>Digital disco</strong>
        <p><span> “Turn on the lights in your head”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/digitaldisco.png"  alt="Digital Disco"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead"></p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Are you fascinated by the twinkling of LEDs?
                    Logic teaches rules for presentation, not thinking.
                    The event aims at illuminating the LEDs provided in a specific sequence.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. The team should not consist of more than two members.</ol>
                    <ol style="color: #ffffff;  "  > 2. A preliminary MCQ test regarding digital and analog circuits will be conducted.</ol>
                    <ol style="color: #ffffff;  "  > 3. In the next round participants have to blink the LEDs as per the given </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sequence using the given components.</ol>
                    <ol style="color: #ffffff;  "  > 4. Pin-out diagrams of ICs, flip-flops, timer, etc will be provided.</ol>
                    <ol style="color: #ffffff;  "  > 5. Function generator, Digital IC trainer kit, etc will not be provided.</ol>
                    <ol style="color: #ffffff;  "  > 6. Participants are permitted to use only the tested components and devices.</ol>
                    <ol style="color: #ffffff;  "  > 7. Clocking circuits should be made by your own using the given components, if it is necessary.</ol>
                    <ol style="color: #ffffff;  "  > 8. Blinking of LEDs should be perfectly detectable (Sequence interval>=1 second)</ol>
                    <ol style="color: #ffffff;  "  > 9. The whole circuit should work independently, i.e, external DC supply would be the</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;only input given to the whole circuit.</ol>
                    <ol style="color: #ffffff;  "  > 10. Those who get the correct sequence within a specified time limit will be the winner.</ol>
                    <ol style="color: #ffffff;  "  > 11. If there is a tie/any other things happen, judges' decision regarding it will be final.</ol>
                    <ol style="color: #ffffff;  "  > 12. Rules are subjected to change as per the decision of the organising committee.</ol>
                    <ol style="color: #ffffff;  "  > 13. All participants should have proper ID cards at the time of registration.</ol>

                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Akhil K J - +91 984 697 8402  </h4>
                <h4 style="color: #fff" align="center">Hariharan M -   - +91 889 109 0369  </h4>
                <br><br>

            </div>
        </div>


    </div>
</div>

<div id="cognizance" class="section">
    <div class="section-title"><i class="icon-cogs"></i><strong>Cognizance</strong>
        <p><span> “A simple idea can inspire and motivate”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Cognizance.png"  alt="Cognizance Battle"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">It is a battle of innovative project ideas. Gather some brilliant concepts which guarantee to inspire.
                    Despite the heavy research topics, we'll be super happy if you guys finally “click_on_something..inspiring”.Here the battle is between ideas.
                    Mission is to make the event a little bit less perfect and a bit more innovative.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Each team shall consist a maximum of 2 participants.</ol>
                    <ol style="color: #ffffff;  "  > 2. All the participants must submit their college ID card during registration.</ol>
                    <ol style="color: #ffffff;  "  > 3. Project ideas from any discipline is welcomed.</ol>
                    <ol style="color: #ffffff;  "  > 4. Project ideas should have a possible working model.</ol>
                    <ol style="color: #ffffff;  "  > 5. Project ideas submitted should be relevant and innovative.</ol>
                    <ol style="color: #ffffff;  "  > 6. Candidates should submit one soft copy and hard copy of their ideas on the day of presentation.</ol>
                    <ol style="color: #ffffff;  "  > 7. Registration can be done on or before the day of presentation.</ol>
                    <ol style="color: #ffffff;  "  > 8. Plagiarism is strictly prohibited. Any candidates found doing so will be disqualified.</ol>
                    <ol style="color: #ffffff;  "  > 9. Decision of the judging committee will be final.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Aravind Sai - +91 828 130 5736  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="wikisurf" class="section">
    <div class="section-title"><i class="icon-book"></i><strong>Wikisurf</strong>
        <p><span> Have</span> you <span> Wiki-ed enough ?</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/wiki.png"  alt="WikiSurf"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Surf from one wiki page to another using the links provided in each page.
                    A start wiki page and end wiki page will be given to the contestant. Constraints can be changed in each level.
                    Winning criteria can be the minimum number of pages navigated between source and destination,
                    minimum time taken or even reaching the destination by visiting a particular number of pages.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. A source page and a destination page will be given.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eg. Source page: Boeing 747 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Destination page: Jackie Chan</ol>
                    <ol style="color: #ffffff;  "  > 2. Using the links in the source page, the contestant must navigate to the destination page.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eg. Boeing 747->United States of America->Los Angeles->Hollywood->Cinema </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the United States->Jackie Chan </ol>
                    <ol style="color: #ffffff;  "  > 3. WikiSurf is not a team event.</ol>
                    <ol style="color: #ffffff;  "  > 4. Word of the admin is final.</ol>
                    <ol style="color: #ffffff;  "  > 5. Disregarding/disobeying admin’s instructions may lead to disqualification.</ol>
                    <ol style="color: #ffffff;  "  > 6. College ID card is mandatory for registration..</ol>
                    <ol style="color: #ffffff;  "  > 7. The event consists of 3 rounds:.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Round 1:</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. The number of pages (distance) taken by the contestant to reach from source page to destination page (excluding source and destination) is recorded.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. For each source and destination, a pre-recorded distance will be fixed. </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. If a contestant covers less distance as compared to the pre-recorded one, he will be awarded a positive score. </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. If the contestant covers more distance, he will be awarded a negative score.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Magnitude of the score will be the difference between pre-set distance and distance covered by the contestant.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. If the contestant covers a distance equal to the pre-set distance, he/she will get a score of zero.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7. Tie breaker would be the time taken by the contestant to reach from source to destination.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8. If a contestant visits an already visited page, +2 will be added to his/her distance.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9. Searching of keywords using the browser’s search option is permitted. </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10. The top 8 participants with the minimum distance (minimum time, in case of tie) will proceed to the next round. </ol>

                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Round 2:</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Contestant should navigate from source to destination by visiting the given two intermediate pages (Safe houses).</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Visiting an already visited page will lead to the resetting of contestant’s position to the last safe house.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Scoring is same as that in Round 1. </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. The top 4 participants with the minimum distance (minimum time, in case of tie) will proceed to the final round.</ol>

                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Final round:</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Contestant should navigate from source to destination and back to the source, but through a different path.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. If a contestant visits an already visited page, +5 will be added to his/her distance. </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Searching using the browser’s search option is<strong> NOT </strong> allowed in this round.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Contestant with the total minimum distance will be awarded first place.</ol>                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Arjun K -  +91 828 125 8322  </h4>
                <h4 style="color: #fff" align="center">Nidhin K-   - +91 860 609 5263   </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<div id="roadies" class="section">
    <div class="section-title"><i class="icon-road"></i><strong>Roadies</strong>
        <p><span>“Rare to Dare. Actually, you can, We Swear”</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Roadies.png"  alt="Roadies"  />


        <h1 class="main-title"><span>Description</span></h1>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Roadies - the name that strikes terror into the weakhearted, the one that makes the brave impatient for the next adventure.
                    DVAITA'16 brings you ROADIES in all its true spirit.
                    Push yourself to the limits that you never knew existed. Face the unknown and struggle through obstacles.
                    Wake up the warrior in you and fight against all odds till your last breath, or until you win.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>

        <div class="row">
            <div class="span6 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. The participants will have to compete individually, and there is no groups.</ol>
                    <ol style="color: #ffffff;  "  > 2. The decisions of organising committee will be final and non-negotiable.</ol>
                    <ol style="color: #ffffff;  "  > 3. Participants should not take help from anyone unless it is mentioned in the task.</ol>
                    <ol style="color: #ffffff;  "  > 4. Organising committee have the right to disqualify a participant, in the event of any misconduct or malpractice.</ol>
                    <ol style="color: #ffffff;  "  > 5. Participants will have to take responsibility of their injuries, even though first aid will </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be provided by the organising committee.</ol></ol>
                    <ol style="color: #ffffff;  "  > 6. All the rounds will be explained on spot during the event.</ol>
                    <ol style="color: #ffffff;  "  > 7. The selection procedures will be 100% fair and no questioning or recommendations will be entertained.</ol>
                    <ol style="color: #ffffff;  "  > 8. Try to be nice with others, it may help you later.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Rahul V K    - +91 940 056 9317  </h4>
                <h4 style="color: #fff" align="center">Akash G Krishnan   - +91 989 510 6147  </h4>
                <h4 style="color: #fff" align="center">Shibili - +91 907 266 6141 </h4>
                <h4 style="color: #fff" align="center">Vishnu Mohan K V  - +91 940 060 1776  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<!-- Switch Section -->
<div id="switch" class="switch-section "><div class="switch-header"><h5 >Events</h5></div>
    <p class="switch-section-cont bottom"><a href="#" class="section-boombox"><i class="icon-instagram"></i></a> <a href="#" class="section-respawn"><i class="icon-gamepad"></i></a> <a href="#" class="section-bestengineer"><i class="icon-male"></i></a> <a href="#" class="section-maestro"><i class="icon-magic"></i></a>
                                          <a href="#" class="section-swatthebug"><i class="icon-bug"></i></a> <a href="#" class="section-hackerjack"><i class="icon-desktop"></i></a> <a href="#" class="section-langx"><i class="icon-xing-sign"></i></a> <a href="#" class="section-bashemup"><i class="icon-bar-chart"></i></a> <a href="#" class="section-codezilla"><i class="icon-code"></i></a>
                                            <a href="#" class="section-codeswap"><i class="icon-code-fork"></i></a> <a href="#" class="section-sidhandics"><i class="icon-file-alt"></i></a> <a href="#" class="section-startaction"><i class="icon-film"></i></a> <a href="#" class="section-mrcad"><i class="icon-building"></i></a> <a href="#" class="section-shutterbug"><i class="icon-camera"></i></a>
                                        <a href="#" class="section-highq"><i class="icon-question-sign"></i></a> <a href="#" class="section-contraption"><i class="icon-cog"></i></a> <a href="#" class="section-crossfire"><i class="icon-fire"></i></a> <a href="#" class="section-pirate"><i class="icon-map-marker"></i></a><a href="#" class="section-mysteriarch"><i class="icon-question"></i></a>
        <a href="#" class="section-hudrolaunch"><i class="icon-rocket"></i></a><a href="#" class="section-disco"><i class="icon-lightbulb"></i></a><a href="#" class="section-cognizance"><i class="icon-cogs"></i></a><a href="#" class="section-wikisurf"><i class="icon-book"></i></a><a href="#" class="section-roadies"><i class="icon-road"></i></a><a href="#" class="section-python"><i class="icon-laptop"></i></a><a href="#" class="section-embedded"><i class="icon-linux"></i></a>
    </p>
</div>

<a href="#" class="section-close">×</a>

<!-- Scripts -->  
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="js/register.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.animate-enhanced.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.superslides.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="/js/jquery.validate.js"></script>
<script type="text/javascript" src="/js/jquery.validation.functions.js"></script>
        <script type="text/javascript">

            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#phone").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
                jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
                jQuery("#pwd").validate({
                    expression: "if (VAL.length > 5 && VAL) return true; else return false;",
                    message: "Please enter a valid Password"
                });
                jQuery("#cpwd").validate({
                    expression: "if ((VAL == jQuery('#pwd').val()) && VAL) return true; else return false;",
                    message: "Confirm password field doesn't match the password field"
                });
            });
            /* ]]> */
        </script>
</body>
</html>
