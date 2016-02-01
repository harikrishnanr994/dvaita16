<?php

require_once("config.php");
$link = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("connection failed");
?>
<!DOCTYPE html>
<html>
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
<div class="dept"><h1>Computer science Department </h1><h4>Presents</h4></div>
<div class="nssce"><img src="img/nssce.png" alt="nssce"/></div>


<!-- Slider -->
<div id="slides">
    <ul class="slides-container">

        <!-- Slider Single Item -->
        <li><a href="#about" ><img src="img/slide1.jpg" alt="swat" /></a>
            <div class="slides-detail">
                <div class="countdown styled"></div></div>
        </li>

        <!-- Slider Single Item -->
        <li><a href="#swatthebug" class="goto-swatthebug"><img src="img/swatbug.gif" alt="Photo" /></a>
            <div class="slides-detail">
                <a href="#swatthebug" ><h1>Swat the  <span>Bug</span></h1></a>
                <span class="lead">Debug  <strong>the </strong>Codes</span></div>
        </li>

        <!-- Slider Single Item -->
        <li><a href="#"><img src="img/boombox_slide.gif" alt="boombox" /></a>
            <div class="slides-detail">
                <h1><span>BOOMBOX</span></h1>
                <span class="lead"><strong>Dancing with the feet is one thing, but dancing with the heart is anothe</strong></span></div>
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
        <p>some text <span>here</span></p>
    </div>

    <!-- events Content -->
    <div class="container">
        <hr />
        <h1 class="main-title"><span>Technical </span>events</h1>
        <p class="lead">we are specialized in web</p>
        <div class="flexslider">

            <!-- TECHnical List Carousel -->
            <ul class="thumbnails slides">

                <!-- Service Detail -->
                <li class=" goto-hacknight">
                    <div class="thumbnail"><i class="icon-coffee"></i>
                        <h3><span>HackNight</span></h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-hacknight">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-maestro">
                    <div class="thumbnail"><i class="icon-magic"></i>
                        <h3><span>Code Maestro</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-maestro">Details</a></div>
                </li>
                <!-- Service Detail -->
                <li class=" goto-swatthebug">
                    <div class="thumbnail"><i class="icon-bug"></i>
                        <h3><span>Swat the bug!</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-swatthebug">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-hackerjack">
                    <div class="thumbnail"><i class="icon-desktop"></i>
                        <h3><span>Hacker Jack</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-hackerjack">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-langx">
                    <div class="thumbnail"><i class="icon-xing"></i>
                        <h3><span>Language X</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-langx">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-bashemup">
                    <div class="thumbnail"><i class="icon-bar-chart"></i>
                        <h3><span>Bash'em up!</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-bashemup">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-codezilla">
                    <div class="thumbnail"><i class="icon-code"></i>
                        <h3><span>Codezilla</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-codezilla">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-codeswap">
                    <div class="thumbnail"><i class="icon-code-fork"></i>
                        <h3><span>Code Swap</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-codeswap">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-sidhandics">
                    <div class="thumbnail"><i class="icon-file-alt"></i>
                        <h3><span>Sidhandhics</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
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
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-bestengineer">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-startaction">
                    <div class="thumbnail"><i class="icon-camera-retro"></i>
                        <h3><span>Start, Action, Cut</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-startaction">Details</a></div>
                </li>
                <!-- Service Detail -->
                <li class=" goto-mrcad">
                    <div class="thumbnail"><i class="icon-building"></i>
                        <h3><span>Mr. CAD</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-mrcad">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-shutterbug">
                    <div class="thumbnail"><i class="icon-camera"></i>
                        <h3><span>ShutterBug</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-shutterbug">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-respawn">
                    <div class="thumbnail"><i class="icon-gamepad"></i>
                        <h3><span>Respawn</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-respawn">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-highq">
                    <div class="thumbnail"><i class="icon-question-sign"></i>
                        <h3><span>High Q</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-highq">Details</a></div>
                </li>
                <li class=" goto-contraption">
                    <div class="thumbnail"><i class="icon-cog"></i>
                        <h3><span>Contraption</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-contraption">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-crossfire">
                    <div class="thumbnail"><i class="icon-fire"></i>
                        <h3><span>Crossfire</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-crossfire">Details</a></div>
                </li>
                <!-- Service Detail -->
                <li class=" goto-pirate">
                    <div class="thumbnail"><i class="icon-map-marker"></i>
                        <h3><span>Be the pirate!</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-pirate">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-mysteriarch">
                    <div class="thumbnail"><i class="icon-question"></i>
                        <h3><span>Mysteriarch</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-mysteriarch">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-hudrolaunch">
                    <div class="thumbnail"><i class="icon-rocket"></i>
                        <h3><span>HudroLaunch</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-hudrolaunch">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-disco">
                    <div class="thumbnail"><i class="icon-music"></i>
                        <h3><span>Digital Disco</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-disco">Details</a></div>
                </li>
                <li class=" goto-cognizance">
                    <div class="thumbnail"><i class="icon-cogs"></i>
                        <h3><span>Cognizance battle</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-cognizance">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-wikisurf">
                    <div class="thumbnail"><i class="icon-book"></i>
                        <h3><span>WIkiSurf</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-wikisurf">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-roadies">
                    <div class="thumbnail"><i class="icon-road"></i>
                        <h3><span>Roadies</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
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
                        <h3>workshop on <span>GNU/Linux and Embedded Systems</span></h3>

                        <p>This is a beginner level hands-on workshop for   students with knowledge of C programming. </p>
                        <a href="#" class="btn goto-embedded">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-python">
                    <div class="thumbnail"><i class="icon-code"></i>
                        <h3>Workshop on <span>Python</span> </h3>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-python">Details</a></div>
                </li>

                <li class=" goto-codezilla">
                    <div class="thumbnail"><i class="icon-code"></i>
                        <h3> <span>CodeZilla</span> </h3>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-codezilla">Details</a></div>
                </li>
                <li class=" goto-shutterbug">
                    <div class="thumbnail"><i class="icon-camera"></i>
                        <h3><span>Shutterbug</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-shutterbug">Details</a></div>
                </li>

                <!-- Service Detail -->
                <li class=" goto-startaction">
                    <div class="thumbnail"><i class="icon-camera-retro"></i>
                        <h3><span>Start, Action, Cut</span> </h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn goto-startaction">Details</a></div>
                </li>



            </ul>
        </div>



    </div>
</div>

<!-- Portoflio Section -->
<div id="folio" class="section">
    <div class="section-title"><i class="icon-briefcase"></i><strong>Sponsors</strong>
        <p>some text <span>here</span></p>
    </div>

    <!-- Portoflio Content -->
    <div class="container">
        <hr />
        <h1 class="main-title">Our <span>Sponsors</span></h1>
        <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.<br />
            Sed diam <span>nonummy nibh</span> euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        <!-- Filter -->
        <div id="folio-filters" class="filter">
            <p><a href="#" data-filter="*" class="active">All</a> <a href="#" data-filter=".webdesign">Web Design</a> <a href="#" data-filter=".illustration">Illustration</a> <a href="#" data-filter=".abstract">Abstract</a></p>
        </div>

        <!-- Portfolio Masonry -->
        <div class="masonry">

            <!-- Portfolio Single item -->
            <div class="item webdesign"><img src="img/folio1.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description -->
                <div class="item-detail">
                    <h2>This is a Portfolio single <span>Title</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio1.jpg" class="view-fancybox" rel="tag"><img src="img/folio1.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item -->
            <div class="item illustration"><img src="img/folio2.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description -->
                <div class="item-detail">
                    <h2>Some goes <span>Here</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio2.jpg" class="view-fancybox" rel="tag"><img src="img/folio2.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item -->
            <div class="item webdesign"><img src="img/folio8.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description -->
                <div class="item-detail">
                    <h2>Another <span>Title</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio8.jpg" class="view-fancybox" rel="tag"><img src="img/folio8.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item -->
            <div class="item abstract"><img src="img/folio7.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description -->
                <div class="item-detail">
                    <h2>Write some here <span>what you want</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio7.jpg" class="view-fancybox" rel="tag"><img src="img/folio7.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item -->
            <div class="item illustration"><img src="img/folio3.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description -->
                <div class="item-detail">
                    <h2>Folio <span>Title in 2 rows</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio3.jpg" class="view-fancybox" rel="tag"><img src="img/folio3.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item -->
            <div class="item abstract"><img src="img/folio5.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description -->
                <div class="item-detail">
                    <h2>This is another <span>Title in 3 rows or more</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio5.jpg" class="view-fancybox" rel="tag"><img src="img/folio5.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item -->
            <div class="item webdesign"><img src="img/folio4.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description -->
                <div class="item-detail">
                    <h2>Ally Jerry <span>Masonry</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio4.jpg" class="view-fancybox" rel="tag"><img src="img/folio4.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>

            <!-- Portfolio Single item -->
            <div class="item webdesign"><img src="img/folio6.jpg" alt="Portfolio" class="thumb" /><span class="view">+</span>

                <!-- Portfolio Single Description -->
                <div class="item-detail">
                    <h2>No <span>Title</span></h2>
                    <em class="date">June 23, 2013</em> <a href="img/folio6.jpg" class="view-fancybox" rel="tag"><img src="img/folio6.jpg" alt="Portfolio" /></a>
                    <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ex ea <a href="#">commodo consequat</a>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <span class="item-close">×</span></div>
            </div>
        </div>

        <!-- Folio ADV -->
        <div class="hero-unit text-center">
            <h2>efficiency and <span>reliability</span></h2>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention</p>
            <a class="btn btn-large">Get a Quote</a></div>
    </div>
</div>


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
                <form id="reg-form" action="process.php" class="contact-form" method="post">
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
                        <button type="reset" class="btn btn-large goto-login">Already Registered ?</button>

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
                <form id="login-form" action="#" class="contact-form" method="post">
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


        <img class="pic" src="img/boombox.jpg"  alt="boombox"  />


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
        <p class="lead">Connect To us </p>

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
<div id="hacknight" class="section">
    <div class="section-title"><i class="icon-coffee"></i><strong>HackNight</strong>
        <p>A Group Coding Event <span> of Enthusiastic Coders.</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Hackathon.jpg"  alt="banner"  />


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
        <p class="lead">Connect To us </p>

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

<div id="embedded" class="section">
    <div class="section-title"><i class="icon-coffee"></i><strong>Workshop on</strong>
        <p><span> GNU/Linux and Embedded Systems .</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Hackathon.jpg"  alt="banner"  />


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
        <p class="lead">Connect To us </p>

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

<div id="python" class="section">
    <div class="section-title"><i class="icon-laptop"></i><strong>Workshop on  Python</strong>
        <p><span> </span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Hackathon.jpg"  alt="banner"  />


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
        <p class="lead">Connect To us </p>

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
        <p>Offline <span> Hacking </span>Event.</p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Hacking.jpg"  alt="Hacking"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">
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
        <p class="lead">we are specialized in web</p>

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
        <p class="lead">Connect To us </p>

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

<div id="langx" class="section">
    <div class="section-title"><i class="icon-xing"></i><strong>Language X</strong>
        <p>How well can you<span> Adapt to a New Language ?</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />

       <div>

        <img class="pic" src="img/Languagex.jpg"  alt="Languagex"  />

           </div>
        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">
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

        <h1 class="main-title" style="color:#ffffff "> <span> Rules </span></h1>
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
        <p class="lead">Connect To us </p>

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

<div id="sidhandics" class="section">
    <div class="section-title"><i class="icon-file-alt"></i><strong>Sidhandics</strong>
        <p>The<span> Paper presentation </span>event.</p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />

        <div>

            <img class="pic" src="img/Psidhandics.jpg"  alt="Psidhandics"  />

        </div>
        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">
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
        <p class="lead">Connect To us </p>

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


<div id="bashemup" class="section">
    <div class="section-title"><i class="icon-bar-chart"></i><strong>BASH EM UP</strong>
        <p>The<span> UNIX shell scripting </span>competition. </p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />

        <div>

            <img class="pic" src="img/Bashemup.jpg"  alt="Bashemup"  />

        </div>
        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">
            Bash Em Up

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
        <p class="lead">The Rules and Regulations of the Event</p>

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
        <p class="lead">Connect To us </p>

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

<div id="swatthebug" class="section">
    <div class="section-title"><i class="icon-bug"></i><strong>Swat The Bug !</strong>
        <p><span> Debug</span> The<span> Code</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Swatthebug.jpg"  alt="banner"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>
        <p class="lead">we are specialized in web</p>

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
        <p class="lead">Connect To us </p>

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


<div id="maestro" class="section">
    <div class="section-title"><i class="icon-magic"></i><strong>Code Maestro</strong>
        <p><span> Offline coding competition  </span>in a<span> particular language .</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Codemeastro.jpg"  alt="Codemeastro"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

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

<div id="codeswap" class="section">
    <div class="section-title"><i class="icon-code-fork"></i><strong>Code Swap</strong>
        <p><span> Offline coding event</span><span> for a team of 2.</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Codeswap.jpg"  alt="Codeswap"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p style="color: #fff" class="lead">Calculate the Chemistry between you and your buddy</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Calculate the chemistry between you and your buddy. Operate on your skills ,Debug it and <strong>Expect a switch to the next</strong></p>
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
        <p class="lead">Connect To us </p>

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
        <p><span>An online coding   </span>event to be conducted<span> in Hackerrank.</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Codeswap.jpg"  alt="codezilla"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

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

<!-- Gen event Section -->

<div id="bestengineer" class="section">
    <div class="section-title"><i class="icon-male"></i><strong>Best Engineer</strong>
        <p><span> Are you </span>The<span> Best Engineer ?</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Bestengineer.jpg"  alt="Best Engineer"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>
        <p class="lead">we are specialized in web</p>

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
        <p class="lead">Connect To us </p>

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

<div id="highq" class="section">
    <div class="section-title"><i class="icon-question-sign"></i><strong>High Q</strong>
        <p><span> Quiz </span><span> competition</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/HighQ.jpg"  alt="HighQ"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

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

<div id="startaction" class="section">
    <div class="section-title"><i class="icon-film"></i><strong>Start Action Cut</strong>
        <p><span> Ad Film</span><span> Competition</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Startactioncut.jpg"  alt="Startactioncut"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>
        <p class="lead">The Rules and Regulations of the Event</p>

        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol    > 1. There is no subject /theme for the competition, any products, ideas, Or events can be advertised.</ol>
                    <ol   > 2. The Contest is open to all (not only for students).</ol>
                    <ol   > 3. Number of participants in a team: Min - 1; Max - 5</ol>
                    <ol    > 4. Strict adherence to the time limit. Maximum 120 seconds Clip.</ol>
                    <ol  > 5. Any character, prop, place can be taken as per your creativity.</ol>
                    <ol   > 6. The video should not have any obscene or defamatory scenes in it.</ol>
                    <ol   > 7. Videos in any language other than English and Malayalam is also accepted, </ol>
                    <ol   > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but it needs to be subtitled in English.</ol>
                    <ol   > 8. Submitted video must be original, unpublished work and free from copyright issues. </ol>
                    <ol   > 9. Each team have to send their Ad film to us on startactioncut@dvaita16.com(change)  </ol>
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
        <p class="lead">Connect To us </p>

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

<div id="mrcad" class="section">
    <div class="section-title"><i class="icon-building"></i><strong>Mr. CAD</strong>
        <p><span> Are you </span>The<span> Best Designer ?</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Mrcad.jpg"  alt="Mrcad"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

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

<div id="shutterbug" class="section">
    <div class="section-title"><i class="icon-camera"></i><strong>Shutter Bug</strong>
        <p><span> Capture </span> the <span> Moments </span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Shutterbug.jpg"  alt="Shutterbug"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead" style="color: #ffffff">Theme: “Colours of Life”</p>

        <div class="row">
            <div class="span6 offset3">
                        </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. There is no registration procedures and no age limit for participation.</ol>
                    <ol style="color: #ffffff;  "  > 2. Photographs related to the specified theme only are accepted.</ol>
                    <ol style="color: #ffffff;  "  > 3. Only upto 3 photographs are accepted from a participant.</ol>
                    <ol style="color: #ffffff;  "  > 4. Participants must specify their name, age, place & contact number along with the photograph(s).</ol>
                    <ol style="color: #ffffff;  "  > 5. All digital files must be 20 megabytes or smaller, must be in JPEG or JPG format, </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and must be at least 1,600 pixels wide (if a horizontal image) or 1,600 pixels tall (if a vertical image).</ol>
                    <ol style="color: #ffffff;  "  > 6. Digital manipulation that distorts the reality of the images will not be allowed. </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Only basic enhancements such as sharpening, contrast adjustment, focus or simple cropping will be allowed.</ol>
                    <ol style="color: #ffffff;  "  > 7. Participants with incorrect contact details will get disqualified. </ol>
                    <ol style="color: #ffffff;  "  > 8. Selected pictures will be posted in Dvaita's official Facebook page everyday .  </ol>
                    <ol style="color: #ffffff;  "  > 9. Number of likes to the pictures will also be a factor for selecting the winner. </ol>
                    <ol style="color: #ffffff;  "  >10. Decisions taken by the event heads will be final </ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        <p class="lead">Connect To us </p>

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

<div id="respawn" class="section">
    <div class="section-title"><i class="icon-gamepad"></i><strong>RESPAWN Arena</strong>
        <p><span> Ultimate</span><span> Virtual War Zone</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Respawnarena.jpg"  alt="Respawn"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>
        <p class="lead">we are specialized in web</p>
        <br><br><br><br>
        <h4 class="main-title"> <span> NFS Most wanted </span></h4>
        <div class="row">
            <div class="span8 offset3">

                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Spot registration is compulsory.</ol>
                    <ol style="color: #ffffff;  "  > 2.Registration will be closed after prelims.</ol>
                    <ol style="color: #ffffff;  "  > 3. Qualification round:</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All tournament participants will play 3 laps and the qualifier </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for further rounds will be decided on best time basis(Top 32)</ol>
                    <ol style="color: #ffffff;  "  > 4. At the end of each match,players must maintain the final screens and receive confirmation from a referee.</ol>
                    <ol style="color: #ffffff;  "  > 5. Any participants failing to complete the race will be disqualified.</ol>
                    <ol style="color: #ffffff;  "  > 6. In case of unintentional disconnection , admin will decide on how to proceed.</ol>
                    <ol style="color: #ffffff;  "  > 7. If at any time, a player intentionally disconnects/exits the game,he/she will be disqualified. </ol>
                    <ol style="color: #ffffff;  "  > 8. In case of alt-tabbing, the admin will decide whether it was intentionally/mistake and </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;what action  must be taken with disqualification being maximum penalty.</ol>
                </ul>
            </div>
        </div>

        <br><br><br><br>
        <h4 class="main-title"> <span> FIFA 11 </span></h4>
        <div class="row">
            <div class="span9 offset3">

                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. All games will be classic 1 vs 1.</ol>
                    <ol style="color: #ffffff;  "  > 2. There will be no practicing allowed.Participants are only allowed to change necessary control and check them.</ol>
                    <ol style="color: #ffffff;  "  > 3. Keyboard will be provided. Participants can use their own joysticks/gamepads/keyboards if necessary.</ol>
                    <ol style="color: #ffffff;  "  > 4. The total number of rounds for prelims will be decided based on participation.</ol>
                    <ol style="color: #ffffff;  "  > 5.  In case of unintentional disconnection , admin will decide on how to proceed.If game is within half time and </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;no goals have been scored,the game will be restarted with same teams for a full time game.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If not, the game will be played for the remaining time based on what time it disconnected with scores being carried over.</ol>

                    <ol style="color: #ffffff;  "  > 6.  If at any time, a player intentionally disconnects/exits the game,he/she will be disqualified. </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In case of alt-tabbing, the admin will decide whether it was intentionally/mistake and what action</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;must be taken with disqualification being maximum penalty.</ol>
                    <ol style="color: #ffffff;  "  > 7. Teams can be either clubs or countries according users will (classic x1 and world x1 not allowed).</ol>
                    <ol style="color: #ffffff;  "  > 8. The prelims and league will be classic 4 min half time matches quarter and semis will all be 5 min half time  </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matches and finals will be 6 min half time matches.</ol>
                    <ol style="color: #ffffff;  "  > 9. The admin's decision will be final. </ol>
                    <ol style="color: #ffffff;  "  > 10.Rules are subject to change as per the decision of the organising committee.</ol>
                </ul>
            </div>
        </div>


        <br><br><br><br>
        <h4 class="main-title"> <span> Counter strike </span></h4>
        <div class="row">
            <div class="span9 offset3">

                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1.  4 vs 4(Team play, 4 players per team).</ol>
                    <ol style="color: #ffffff;  "  > 2. The first team to win 9 rounds wins the match.</ol>
                    <ol style="color: #ffffff;  "  > 3. Extra rounds will be played until winner is decide.</ol>
                    <ol style="color: #ffffff;  "  > 4. A knockout tournament structure will be used or league structure if number of participants are less.</ol>
                    <ol style="color: #ffffff;  "  > 5. Rounds :</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 16 rounds(Maximum round format)-</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8 rounds as terrorist and 8 rounds as counter terrorist per team.If a team scores 9 rounds first ,</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  the match is ended immediately.</ol>
                    <ol style="color: #ffffff;  "  > 6. Victory condition :The first team to win 11 rounds.</ol>
                    <ol style="color: #ffffff;  "  > 7. Round time :3 minutes.</ol>
                    <ol style="color: #ffffff;  "  > 8. Freeze Time:5 seconds.</ol>
                    <ol style="color: #ffffff;  "  > 9. Buy time :25 seconds</ol>
                    <ol style="color: #ffffff;  "  > 10. Counter strike,terrorist will be decided before the match or decided by the knifing.</ol>
                    <ol style="color: #ffffff;  "  > 11. In case of a tie after regulation,6 extra rounds will be played (3 as terrorist and 3 as counter terrorist per team).</ol>
                    <ol style="color: #ffffff;  "  > 12. Extra round restart money :$10,000. </ol>
                    <ol style="color: #ffffff;  "  > 13. In the case of a retie after 6 rounds as stated above ,6 more extra rounds will be played until tie is broken.</ol>
                    <ol style="color: #ffffff;  "  > 14. Official Maps : Defusal Maps </ol>
                    <ol style="color: #ffffff;  "  > 15. The server master will record the process of the match. </ol>
                    <ol style="color: #ffffff;  "  > 16. Approved grenade amounts per round: </ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Flash bangs:2.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Grenades:1.</ol>


                </ul>
            </div>
        </div>


        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        <p class="lead">Connect To us </p>

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

<div id="contraption" class="section">
    <div class="section-title"><i class="icon-cog"></i><strong>Contraption</strong>
        <p><span> Build </span> and <span> Break</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Mrcad.jpg"  alt="Mrcad"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

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

<div id="crossfire" class="section">
    <div class="section-title"><i class="icon-fire"></i><strong>Cross Fire</strong>
        <p><span> Debate</span><span> Master</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Shutterbug.jpg"  alt="Shutterbug"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

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

<div id="pirate" class="section">
    <div class="section-title"><i class="icon-map-marker"></i><strong>Be The Pirate</strong>
        <p><span> Who can</span>be  <span> Captain Jack Sparrow ?</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Bethepirate.jpg"  alt="Bethepirate"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
            </div>
        </div>

        <hr />
        <!-- Rules -->

        <h1 class="main-title"> <span> Rules </span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span8 offset3">
                <ul  class="margin-bottom">
                    <ol style="color: #ffffff;  "  > 1. Aptitude test: It is an elimination round from which the top 12 team will be allowed on to the next round.</ol>
                    <ol style="color: #ffffff;  "  > 2. Having 3 levels to verify the team coordination. Best 8 team will be selected for the next round.</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;level 1: Logical</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;level 2: Team activity</ol>
                    <ol style="color: #ffffff;  "  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;level 3: Gaming</ol>
                    <ol style="color: #ffffff;  "  > 3. Group skills will be tested here by two levels. Top 4 teams will be selected to the next round.</ol>
                    <ol style="color: #ffffff;  "  > 4. Team tries to find some hidden objects or places by using a series of clues.</ol>
                    <ol style="color: #ffffff;  "  > 5. Decision of judges will be final.</ol>
                </ul>
            </div>
        </div>

        <hr />
        <!-- Contact -->
        <h1 class="main-title"> <span>Contact</span></h1>
        <p class="lead">Connect To us </p>

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



<div id="mysteriarch" class="section">
    <div class="section-title"><i class="icon-question"></i><strong>Mysteriarch</strong>
        <p><span> Unleash </span>The<span> Sherlock Holmes </span>in you </p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Mrcad.jpg"  alt="Mrcad"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

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

<div id="hudrolaunch" class="section">
    <div class="section-title"><i class="icon-rocket"></i><strong>Hydro launch</strong>
        <p><span> Who is gona </span><span> Join NASA ?</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Shutterbug.jpg"  alt="Shutterbug"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

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

<div id="disco" class="section">
    <div class="section-title"><i class="icon-music"></i><strong>Digital disco</strong>
        <p><span> Are you Jack  </span>of <span> Electronics ?</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Respawnarena.jpg"  alt="Respawn"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead"></p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

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

<div id="cognizance" class="section">
    <div class="section-title"><i class="icon-cogs"></i><strong>Cognizance</strong>
        <p><span> An event to honor the Best Project Idea.</span><span> </span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Mrcad.jpg"  alt="Mrcad"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

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

<div id="wikisurf" class="section">
    <div class="section-title"><i class="icon-book"></i><strong>Wikisurf</strong>
        <p><span> Have</span> you <span> Wiki-ed enough ?</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Shutterbug.jpg"  alt="Shutterbug"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

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

<div id="roadies" class="section">
    <div class="section-title"><i class="icon-road"></i><strong>Roadies</strong>
        <p><span> How strong </span>are <span> You ?</span></p>
    </div>

    <!-- About Content -->
    <div class="container">
        <hr />


        <img class="pic" src="img/Bethepirate.jpg"  alt="Bethepirate"  />


        <h1 class="main-title"><span>Description</span></h1>
        <p class="lead">we are specialized in web</p>

        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
        <p class="lead">Connect To us </p>

        <div class="row">
            <div class="span6 offset3">

                <h4 style="color: #fff" align="center">Rahul V K    - +91 940 056 9317  </h4>
                <h4 style="color: #fff" align="center">Akash G Krishnan   - +91 989 510 6147  </h4>
                <h4 style="color: #fff" align="center">Vishnu Mohan K V  - +91 940 060 1776  </h4>
                <br><br>

            </div>
        </div>



    </div>
</div>

<!-- Switch Section -->
<div id="switch" class="switch-section "><div class="switch-header"><h5 >Events</h5></div>
    <p class="switch-section-cont bottom"><a href="#" class="section-boombox"><i class="icon-instagram"></i></a> <a href="#" class="section-respawn"><i class="icon-gamepad"></i></a> <a href="#" class="section-bestengineer"><i class="icon-male"></i></a> <a href="#" class="section-hacknight"><i class="icon-coffee"></i></a> <a href="#" class="section-maestro"><i class="icon-magic"></i></a>
                                          <a href="#" class="section-swatthebug"><i class="icon-bug"></i></a> <a href="#" class="section-hackerjack"><i class="icon-desktop"></i></a> <a href="#" class="section-langx"><i class="icon-xing-sign"></i></a> <a href="#" class="section-bashemup"><i class="icon-bar-chart"></i></a> <a href="#" class="section-codezilla"><i class="icon-code"></i></a>
                                            <a href="#" class="section-codeswap"><i class="icon-code-fork"></i></a> <a href="#" class="section-sidhandics"><i class="icon-file-alt"></i></a> <a href="#" class="section-startaction"><i class="icon-film"></i></a> <a href="#" class="section-mrcad"><i class="icon-building"></i></a> <a href="#" class="section-shutterbug"><i class="icon-camera"></i></a>
                                        <a href="#" class="section-highq"><i class="icon-question-sign"></i></a> <a href="#" class="section-contraption"><i class="icon-cog"></i></a> <a href="#" class="section-crossfire"><i class="icon-fire"></i></a> <a href="#" class="section-pirate"><i class="icon-map-marker"></i></a><a href="#" class="section-mysteriarch"><i class="icon-question"></i></a>
        <a href="#" class="section-hudrolaunch"><i class="icon-rocket"></i></a><a href="#" class="section-disco"><i class="icon-music"></i></a><a href="#" class="section-cognizance"><i class="icon-cogs"></i></a><a href="#" class="section-wikisurf"><i class="icon-book"></i></a><a href="#" class="section-roadies"><i class="icon-road"></i></a><a href="#" class="section-python"><i class="icon-laptop"></i></a><a href="#" class="section-embedded"><i class="icon-linux"></i></a>
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