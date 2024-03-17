<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Leadership Demo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        <style>
            .error{
                color:red;
            }

            .form_section .form_message .button{
                margin-top:22px;
            }

            .form_message{
                text-align:start;
            }

            form .form_message textarea {
                margin-bottom:0;
            }
        </style>
    </head>
    <body>
    <!-- ---------------- Nav Bar (HEADER) ------------------- -->
            <header class="site-header">
                <div class="page-width">
                    <div class="flex-container">
                        <button class="navbar-toggler collapsed" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="logo">
                            <a href="index.html" class="img_logo">
                                <i class="fa-brands fa-gg-circle"></i>
                                <p>LEADERSHIP<br>EVENT</p>
                            </a>
                        </div>
                        <div class="header-cta__wrapper hide-desktop">
                            <a class="ticket_button cta_ticket" title="Buy Ticket" href="#">Buy Tickets</a>
                        </div>
                        <div class="header-right">
                            <div class="flex-container">
                                <nav class="tabs header-menu">
                                    <ul id="nav">                     
                                        <li><a href="#hero_banner">Home</a></li>
                                        <li><a data-id="ourStory" href="#ourStory">About</a></li>
                                        <li><a href="#block_speaker">Speakers</a></li>
                                        <li><a href="#scroll_schedule">Schedules</a></li>
                                        <li><a href="#ticket_pricing">Pricing</a></li>
                                        <li><a href="#venue">Venue</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                                <div class="header-cta__wrapper hide-mobile">
                                    <a class="ticket_button cta_ticket" title="Buy Ticket" href="#hero_banner">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

    <!-- -------------- Container Box (Banner / Title) ------------------- -->
    <section id="hero_banner" class="hero-banner">
        <video autoplay muted loop id="myVideo">
        <source src="./cover-clip.mp4" type="video/mp4">
        </video>
      
            <div class="container_all">
                <!-- <img src="./cover.jpg" alt=""> -->
                <div class="title">
                    <h1 class="title_1"><u>Leadership</u></h1>
                    <h2 class="title_2">Conference 2022</h2>
                </div>
                <div class="location">
                    <ul>
                        <li class="date">July 12 to 18, 2022</li>
                        <li class="address">Times Square, NY</li>
                    </ul>
                </div>
                <div id="gotoabout" class="downarrow">
                    <a href="#ourStory" class="arrow">&#8595; </a>
                </div>
            </div>
       
        
    </section>

    <section class="img_container">
        <div class="page-width">
            <div class="inside_box">
                <div class="boxcoll">
                    <div class="contentbox1">
                        <div class="imgbox_container">
                            <img class="imgbox1" src="./img1.jpg" alt="image_1" height="100" width="120" loading="lazy">
                            <h3 class="box_title">2019 Highlights</h3>
                            <a href="#" class="icon-youtube"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="boxcoll">
                    <div class="contentbox2">
                        <div class="imgbox_container">
                            <img class="imgbox1" src="./img2.jpg" alt="image_2" height="100" width="120" loading="lazy">
                            <h3 class="box_title">2020 Highlights</h3>
                            <a href="#" class="icon-youtube"><i class="fa-brands fa-youtube"></i></a>
                        </div>
        
                    </div>
                </div>
                <div class="boxcoll">
                    <div class="contentbox3">
                        <div class="imgbox_container">
                            <img class="imgbox1" src="./img3.jpg" alt="image_3" height="100" width="120" loading="lazy">
                            <h3 class="box_title">2021 Highlights</h3>
                            <a href="#" class="icon-youtube"><i class="fa-brands fa-youtube"></i></a>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
    </section>
            
    <!-- -------------- body part(some details) --------------- -->
        <section id="ourStory" class="body_story">
            <div class="page-width">
                <div  class="bodypart">
                    <div class="story">
                        <h1 class="storytitle">Our <span class="storytitle2">Story</span></h1>
                    </div>
                    <div class="storydetails">
                        <div class="leftpart">
                            <h2 class="lefthead">The importance of Leadership Conference in 2022</h2>
                            <p class="details1">Leadership Event is one-page Bootstrap v5.13 CSS layout for your website.
                                Thank you for choosing TemplateMo website where you can instantly download free CSS templates at no cost.
                            </p>
                            <div class="button1">
                                <a href="#" title="Meet Speakers" class="meet_speakers">Meet Speakers</a>
                                <a href="#" title="Check out Schedule" class="schedule">Check out Schedule</a>
                            </div>                    
                        </div>
                        <div class="rightpart">
                            <h3 class="righthead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</h3>
                            <div class="avatarimg">
                                <img src="./images/avatar/avatar1.jpg" alt="avatar1" class="avatar imgavatar" width="50" height="50" loading="lazy">
                                <img src="./images/avatar/avatar2.jpg" alt="avatar1" class="avatar1 imgavatar" width="50" height="50" loading="lazy">
                                <img src="./images/avatar/avatar4.jpg" alt="avatar1" class="avatar2 imgavatar" width="50" height="50" loading="lazy">
                                <img src="./images/avatar/avatar3.jpg" alt="avatar1" class="avatar3 imgavatar" width="50" height="50" loading="lazy">
                                <p class="textright">120+ People are attending with us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- -------------- about speakers------------------ -->

        <section id="block_speaker" class="block_speaker">
            <div class="page-width">
                <div class="speaker_list">
                    <div class="speaker_info">
                        <div class="left_speaker">
                            <h2 class="speaker_title">Our <span class="spanid">Speakers</span></h2>
                            <p class="textword1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore
                            </p>
                        </div>

                        <div class="right_speaker">
                            <div class="speaker_info_block">
                                <img src="./images/avatar/avatar1.jpg" alt="avatar1" class="logan" height="100" width="100" loading="lazy">
                                <p class="tag1">FEATURED</p>
                                <div class="name">
                                    <div class="position-relative flex-container">
                                        <div class="insidename">
                                            <h3 class="namelogan">Logan Wilson</h3>
                                            <p class="namelogan_position">CEO / FOUNDER</p>
                                        </div>
                                        <div class="nameicon">
                                            <a href="#" class="icon-social"><i class="fa-brands fa-whatsapp"></i></a>
                                            <a href="#" class="icon-social"><i class="fa-brands fa-instagram"></i></a>
                                            <a href="#" class="icon-social"><i class="fa-brands fa-google"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>

    <!-- ----------- other speakers --------------- -->

                    <div class="otherspeaker">
                        <div class="list_of_speakers">

                            <div class="list_other_speaker">
                                <img src="./images/avatar/avatar3.jpg" alt="avatar1" class="speakersimg" height="100" width="100" loading="lazy">
                                <div class="name">
                                <div class="position-relative flex-container">
                                        <div class="insidename">
                                            <h3 class="speakername">Natalie</h3>
                                            <p class="speakername_position">EVENT PLANNER</p>
                                        </div>
                                        <div class="nameicon2">
                                            <a href="#" class="icon-social2"><i class="fa-brands fa-whatsapp"></i></a>
                                            <a href="#" class="icon-social2"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list_other_speaker">
                                <img src="./images/avatar/avatar4.jpg" alt="avatar1" class="speakersimg" height="100" width="100" loading="lazy">
                                <div class="name">
                                    <div class="position-relative flex-container">
                                        <div class="insidename">
                                            <h3 class="speakername">Thomas</h3>
                                            <p class="speakername_position">STARTUP COACH</p>
                                        </div>
                                        <div class="nameicon2">
                                            <a href="#" class="icon-social2"><i class="fa-brands fa-whatsapp"></i></a>
                                            <a href="#" class="icon-social2"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list_other_speaker">
                                <img src="./images/avatar/avatar5.jpg" alt="avatar1" class="speakersimg" height="100" width="100" loading="lazy">
                                <div class="name">
                                    <div class="position-relative flex-container">
                                        <div class="insidename">
                                            <h3 class="speakername">Isabella</h3>
                                            <p class="speakername_position">EVENT MANAGER</p>
                                        </div>
                                        <div class="nameicon2">
                                            <a href="#" class="icon-social2"><i class="fa-brands fa-whatsapp"></i></a>
                                            <a href="#" class="icon-social2"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list_other_speaker">
                                <img src="./images/avatar/avatar2.jpg" alt="avatar1" class="speakersimg" height="100" width="100"
                                    loading="lazy">
                                <div class="name">
                                    <div class="position-relative flex-container">
                                        <div class="insidename">
                                            <h3 class="speakername">Samantha</h3>
                                            <p class="speakername_position">TOP LEVEL SPEAKER</p>
                                        </div>
                                        <div class="nameicon2">
                                            <a href="#" class="icon-social2"><i class="fa-brands fa-whatsapp"></i></a>
                                            <a href="#" class="icon-social2"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- ---------- Schedule Section ---------------- -->

        <section id="scroll_schedule" class="schedule_section">
            <div class="page-width">
                <div class="schedule_div">
                    <div class="title_schedule">
                        <h2 class="schedule_title">Next <span class="spantitle2">Schedules</span></h2>
                    </div>
                    
                    <div class="day_box_block">
                        <div class="day_insidebox">
                            <a href="#day1" id="dayoneschedule" class="schedule_day" title="Day One">
                                <h3>Day One<span>July 12, 2022</span></h3>
                            </a>
                        </div>

                        <div class="day_insidebox">
                            <a href="#day2" class="schedule_day" title="Day Two">
                                <h3>Day Two<span>July 14, 2022</span>
                                </h3>
                            </a>
                        </div>

                        <div class="day_insidebox">
                            <a href="#day3" class="schedule_day" title="Day Three">
                                <h3>Day Three<span>July 16, 2022</span>
                                </h3>
                            </a>
                        </div>

                        <div class="day_insidebox">
                            <a href="#day4" class="schedule_day" title="Day Four">
                                <h3>Day Four<span>July 18, 2022</span>
                                </h3>
                            </a>
                        </div>
                    </div>

    <!-- ----------------- Schdeule INFORMATION ------------------ -->
                    <div class="tabs-content">
                        <div id="day1" class="schedule_info">
                            <div class="info_block">
                                <div class="info_img">
                                    <img src="./images/schedule/fabian-friedrich-JDUVM9_VaZE-unsplash.jpg" alt="schedule1" height="100"
                                        width="120" loading="lazy">
                                </div>
                        
                                <div class="info_details">
                                    <h3 class="info1_head">Startup Development Ideas</h3>
                                    <p class="info1_head_explain">
                                        You are free to download any HTML CSS template from TemplateMo website. You can use any template for
                                        business purposes.
                                        You are not allowed to redistribute the downloadable ZIP file on any other template website. Thank you.
                                    </p>
                                    <div class="trainee">
                                        <div class="imgname_trainee">
                                            <div class="img_trainee">
                                                <img src="./images/avatar/avatar1.jpg" alt="trainee1" height="100" width="120"
                                                    loading="lazy">
                                            </div>
                                            <div class="name_trainee">
                                                <p>Logan Wilson <span><br>CEO / FOUNDER</span></p>
                                            </div>
                                        </div>
                                        <div class="time_trainee">
                                            <p><i class="fa-solid fa-clock"></i> 9:00 - 9:45 AM</p>
                                        </div>
                                        <div class="hall_trainee">
                                            <p><i class="fa-solid fa-map"></i> Conference Hall 3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="info_block">
                                <div class="info_img">
                                    <img src="./images/schedule/clayton-cardinalli-JMoFpdqL3XM-unsplash.jpg" alt="schedule1" height="100"
                                        width="120" loading="lazy">
                                </div>
                        
                                <div class="info_details">
                                    <h3 class="info1_head">Introduction to Online Businesses</h3>
                                    <p class="info1_head_explain">
                                        Quisque mollis, ante non semper ultricies, nulla sapien sollicitudin augue, id scelerisque nunc turpis
                                        nec urna. Class
                                        aptent taciti sociosqu ad litora.
                                    </p>
                                    <div class="trainee">
                                        <div class="imgname_trainee">
                                            <div class="img_trainee">
                                                <img src="./images/avatar/avatar3.jpg" alt="trainee2" height="100" width="120"
                                                    loading="lazy">
                                            </div>
                                            <div class="name_trainee">
                                                <p>Natalie
                                                    <span><br>EVENT PLANNER</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="time_trainee">
                                            <p><i class="fa-solid fa-clock"></i> 10:00 - 10:45 AM</p>
                                        </div>
                                        <div class="hall_trainee">
                                            <p><i class="fa-solid fa-map"></i> 100-D Room</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="info_block info_block_id">
                                <div class="info_img">
                                    <img src="./images/schedule/business-woman-making-presentation-office.jpg" alt="schedule1" height="100"
                                        width="120" loading="lazy">
                                </div>
                        
                                <div class="info_details">
                                    <h3 class="info1_head">Bootstrapping Startup</h3>
                                    <p class="info1_head_explain">
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut consequat
                                        purus posuere
                                        tortor efficitur, sit amet dignissim libero aliquam.
                                    </p>
                                    <div class="trainee">
                                        <div class="imgname_trainee">
                                            <div class="img_trainee">
                                                <img src="./images/avatar/avatar4.jpg" alt="trainee3" height="100" width="120"
                                                    loading="lazy">
                                            </div>
                                            <div class="name_trainee">
                                                <p>Thomas
                                                    <span><br>STARTUP COACH</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="time_trainee">
                                            <p><i class="fa-solid fa-clock"></i> 11:00 - 11:45 AM</p>
                                        </div>
                                        <div class="hall_trainee">
                                            <p><i class="fa-solid fa-map"></i> 100-B Room</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div id="day2" class="schedule_info">
                            <div class="info_block">
                                <div class="info_img">
                                    <img src="./images/schedule/people-smiling-while-conference-room.jpg" alt="schedule1" height="100"
                                        width="120" loading="lazy">
                                </div>
                        
                                <div class="info_details">
                                    <h3 class="info1_head">Building a famous company</h3>
                                    <p class="info1_head_explain">
                                        Quisque mollis, ante non semper ultricies, nulla sapien sollicitudin augue, id scelerisque nunc turpis nec urna. Class
                                        aptent taciti sociosqu ad litora torquent per conubia.
                                    </p>
                                    <div class="trainee">
                                        <div class="imgname_trainee">
                                            <div class="img_trainee">
                                                <img src="./images/avatar/avatar5.jpg" alt="trainee1" height="100" width="120"
                                                    loading="lazy">
                                            </div>
                                            <div class="name_trainee">
                                                <p>Isabella <span><br>EVENT MANAGER</span></p>
                                            </div>
                                        </div>
                                        <div class="time_trainee">
                                            <p><i class="fa-solid fa-clock"></i> 9:00 - 9:45 AM</p>
                                        </div>
                                        <div class="hall_trainee">
                                            <p><i class="fa-solid fa-map"></i> Conference Hall 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="info_block info_block_id">
                                <div class="info_img">
                                    <img src="./images/schedule/jason-goodman-bzqU01v-G54-unsplash.jpg" alt="schedule1" height="100"
                                        width="120" loading="lazy">
                                </div>
                        
                                <div class="info_details">
                                    <h3 class="info1_head">Dev Ops life in corporate</h3>
                                    <p class="info1_head_explain">
                                        Quisque mollis, ante non semper ultricies, nulla sapien sollicitudin augue, id scelerisque nunc turpis nec urna. Class
                                        aptent taciti sociosqu ad litora torquent per conubia nostra.
                                    </p>
                                    <div class="trainee">
                                        <div class="imgname_trainee">
                                            <div class="img_trainee">
                                                <img src="./images/avatar/avatar2.jpg" alt="trainee2" height="100" width="120"
                                                    loading="lazy">
                                            </div>
                                            <div class="name_trainee">
                                                <p>Samantha
                                                    <span><br>TOP LEVEL SPEAKER</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="time_trainee">
                                            <p><i class="fa-solid fa-clock"></i> 10:00 - 10:45 AM</p>
                                        </div>
                                        <div class="hall_trainee">
                                            <p><i class="fa-solid fa-map"></i> 100-A Room</p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        
                        <div id="day3" class="schedule_info">
                            <div class="info_block">
                                <div class="info_img">
                                    <img src="./images/schedule/people-smiling-while-conference-room.jpg" alt="schedule1" height="100"
                                        width="120" loading="lazy">
                                </div>
                        
                                <div class="info_details">
                                    <h3 class="info1_head">Maintaining a Successful Business</h3>
                                    <p class="info1_head_explain">
                                        Quisque mollis, ante non semper ultricies, nulla sapien sollicitudin augue, id scelerisque nunc turpis nec urna. Class
                                        aptent taciti sociosqu.
                                    </p>
                                    <div class="trainee">
                                        <div class="imgname_trainee">
                                            <div class="img_trainee">
                                                <img src="./images/avatar/avatar5.jpg" alt="trainee2" height="100" width="120"
                                                    loading="lazy">
                                            </div>
                                            <div class="name_trainee">
                                                <p>Isabella
                                                    <span><br>EVENT MANAGER</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="time_trainee">
                                            <p><i class="fa-solid fa-clock"></i> 9:00 - 9:45 AM</p>
                                        </div>
                                        <div class="hall_trainee">
                                            <p><i class="fa-solid fa-map"></i> Conference Hall 1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="info_block info_block_id">
                                <div class="info_img">
                                    <img src="./images/schedule/jason-goodman-bzqU01v-G54-unsplash.jpg" alt="schedule1" height="100"
                                        width="120" loading="lazy">
                                </div>
                        
                                <div class="info_details">
                                    <h3 class="info1_head">Working Life in Corporate Environment</h3>
                                    <p class="info1_head_explain">
                                        Quisque mollis, ante non semper ultricies, nulla sapien sollicitudin augue, id scelerisque nunc turpis nec urna.
                                    </p>
                                    <div class="trainee">
                                        <div class="imgname_trainee">
                                            <div class="img_trainee">
                                                <img src="./images/avatar/avatar2.jpg" alt="trainee3" height="100" width="120"
                                                    loading="lazy">
                                            </div>
                                            <div class="name_trainee">
                                                <p>Samantha
                                                    <span><br>TOP LEVEL SPEAKER</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="time_trainee">
                                            <p><i class="fa-solid fa-clock"></i> 10:00 - 10:45 AM</p>
                                        </div>
                                        <div class="hall_trainee">
                                            <p><i class="fa-solid fa-map"></i> 100-C Room</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="day4" class="schedule_info">                                 
                            <div class="info_block info_block_id">
                                <div class="info_img">
                                    <img src="./images/schedule/jeshoots-com-TWRCH-GaKr4-unsplash.jpg" alt="schedule1" height="100"
                                        width="120" loading="lazy">
                                </div>
                        
                                <div class="info_details">
                                    <h3 class="info1_head">After Party at the fullest</h3>
                                    <p class="info1_head_explain">
                                        There is a plenty of great HTML CSS templates available at TemplateMo.com website for your businesses. You can download,
                                        edit and use any template for any purpose. Please let us know your feedback via Email. Thank you.
                                    </p>
                                    <div class="trainee">
                                        <div class="time_trainee">
                                            <p><i class="fa-solid fa-clock"></i> 8:00 - 9:00 AM</p>
                                        </div>
                                        <div class="hall_trainee">
                                            <p><i class="fa-solid fa-map"></i>Conference Hall 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
<!-- -------------- Register Section --------------- -->

        <section class="register">
            <div class="page-width">
                <div class="register_section">
                    <div class="left_register">
                        <h2>Become an <span><u>event speaker?</u></span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</p>
                    </div>
                    <div class="right_register">
                        <a href="#" class="button_register" title="Register Button">Register Today</a>
                    </div>
                </div>
            </div>
        </section>

<!-- -------------- Ticket Section ----------------- -->

        <section id="ticket_pricing" class="ticket">
            <div class="page-width">
                <div class="ticket_section">
                    <h2>Get Your <span>Tickets</span></h2>
                
                    <div class="ticket_option">
    <!-- ----------------Early Bird Ticket Option --------------- -->
                        <div class="ticket_optionbox">
                            <div class="ticket_head">
                                <div class="head_name">
                                    <h3>Early Bird</h3>
                                </div>
                                <div class="price">
                                    <h4>$640</h4>
                                </div>
                            </div>
                            <div class="ticket_body">
                                <div class="body_details">
                                    <p><span class="material-symbols-outlined">
                                            local_cafe
                                        </span>All-Day Coffee + Snacks</p>
                                    <p><span class="material-symbols-outlined">
                                            stadia_controller
                                        </span> After Party</p>
                                    <p><span class="material-symbols-outlined">Forum
                                        </span> 24/7 Support</p>
                                </div>
                                <div class="other_details">
                                    <p>Quick group meetings for multiple teams</p>
                                    <a href="#" title="Buy Tickets">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
    <!-- ---------------- Gold Ticket Option --------------- -->
                        <div class="ticket_optionbox">
                            <div id="ticket_head_gold" class="ticket_head">
                                <div class="head_name">
                                    <h3>Gold</h3>
                                </div>
                                <div id="price_gold" class="price">
                                    <h4>$840</h4>
                                </div>
                            </div>
                            <div class="ticket_body">
                                <div class="body_details">
                                    <p><span class="material-symbols-outlined">
                                            local_cafe
                                        </span>All-Day Coffee + Snacks</p>
                                    <p><span class="material-symbols-outlined">
                                            speaker_group
                                        </span> Group Meetings + After Party</p>
                                    <p><span class="material-symbols-outlined">Forum
                                        </span> 24/7 Support + Instant Chats</p>
                                </div>
                                <div class="other_details">
                                    <p>Quick group meetings for multiple teams</p>
                                    <a href="#" title="Buy Tickets">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
    <!-- ---------------Platinium Ticket Option --------------- -->
                        <div class="ticket_optionbox">
                            <div class="ticket_head">
                                <div class="head_name">
                                    <h3>Platinum</h3>
                                </div>
                                <div class="price">
                                    <h4>$1240</h4>
                                </div>
                            </div>
                            <div class="ticket_body">
                                <div class="body_details">
                                    <p><span class="material-symbols-outlined">
                                            payments
                                        </span>Cashback $200</p>
                                    <p><span class="material-symbols-outlined">
                                            speaker_group
                                        </span> Private Meetings + After Party</p>
                                    <p><span class="material-symbols-outlined">Forum
                                        </span> 24/7 Support + Instant Chats</p>
                                </div>
                                <div class="other_details">
                                    <p>Group talks and private chats for multiple teams</p>
                                    <a href="#" title="Buy Tickets">Buy Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- ------------- Venue location -------------- -->
    
        <section id="venue" class="venue_section">
            <div class="page-width">
                <div class="venue_block">
                    <h2>Here you go <span>Venue</span></h2>
                    <div class="venue_block_flex">
                        <div class="venue_location">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3022.184132449766!2d-73.9855426!3d40.7579747!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855a96da09d%3A0x860bf5a5e1a00a68!2sTimes%20Square%2C%20New%20York%2C%20NY%2010036%2C%20USA!5e0!3m2!1sen!2snp!4v1709114154030!5m2!1sen!2snp"
                                width="600" height="450" style="border:0;" allowfullscreen=""
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="venue_address">
                            <div class="venue_address_title">
                                <h3>Times Square</h3>
                            </div>
                            <div class="venue_contact_address">
                                <div class="address1">
                                    <span class="material-symbols-outlined">
                                        location_on </span>
                                    <p class="venue_exact_address">102 South. 7th Street, New York, NY 10036, USA</p>
                                </div>
                                <div class="address2">
                                    <span class="material-symbols-outlined"> mail </span>
                                    <a href="">
                                        <p>hi@company.com</p>
                                    </a>
                                </div>
                                <p>
                                    <a href=""><i class="fa fa-phone"></i> 010-020-0340</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<!-- --------------- Form Section --------------- -->
        
        <section id="contact" class="form_section">
            <?php
                // define variables and set to empty values
                $name = $email = $subject = $message = "";
                $nameErr = $emailErr = $subjectErr = $messageErr = "";
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = test_input($_POST["name"]);
                $email = test_input($_POST["email"]);
                $subject = test_input($_POST["subject"]);
                $message = test_input($_POST["message"]);
                }
                
                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["name"])) {
                        $nameErr = "* Name is Required";
                    } else {
                        $name = test_input($_POST["name"]);
                
                        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                            $nameErr = "* Only letters and whitespace allowed";
                        }
                    }
                
                    if (empty($_POST["email"])) {
                        $emailErr = "* Email is required";
                    } else {
                        $email = test_input($_POST["email"]);
                
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailErr = "* Invalid Email Address";
                        }
                    }
                
                    if (empty($_POST["subject"])) {
                        $subjectErr = "* Subject is required";
                    } else {
                        $subject = test_input($_POST["subject"]);
                    }
                
                    if (empty($_POST["message"])) {
                        $messageErr = "* Message is required";
                    } else {
                        $message = test_input($_POST["message"]);
                    }
                }
            ?>

            <div class="page-width">
                <div class="form_container">
                    <div class="form_title">
                        <h2>Please Say Hi</h2>
                    </div>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form_lineone">
                            <div class="form_name form_lineone_top">
                                <input type="text" name="name" placeholder="Name" value=""><br>
                                <span class="error">
                                    <?php echo $nameErr;?>
                                </span>
                            </div>
                            <div class="form_email form_lineone_top">
                                <input type="text" name="email" placeholder="Email" value=""><br>
                                <span class="error">
                                    <?php echo $emailErr;?>
                                </span>
                            </div>
                            <div class="form_subject form_lineone_top">
                                <input type="text" name="subject" placeholder="Subject" value=""><br>
                                <span class="error">
                                    <?php echo $subjectErr;?>
                                </span>
                            </div>
                        </div>
        
                        <div class="form_message">
                            <textarea name="message" id="message" placeholder="Message" cols="10" rows="6"
                                value=""></textarea><br>
                            <span class="error">
                                <?php echo $messageErr;?>
                            </span>
                            <button type="submit" class="button" title="Submit Button" class="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
<!-------------------- Footer ------------------ -->
        <footer>
            <div class="page-width">
                <div class="footer_section">
                    <div class="footer_block_one">
                        <div class="title_footer">
                            <i class="fa-brands fa-gg-circle"></i>
                            <h3>LEADERSHIP EVENT</h3>
                        </div>
                        <div class="social_media">
                            <!-- <ul> -->
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                            <!-- </ul> -->
                        </div>
                    </div>
                
                    <div class="footer_block_two">
                        <div class="div_one footer_flex">
                            <a href="">Our Story</a>
                            <a href="">Code of Conduct</a>
                            <a href="">Privacy and Terms</a>
                            <a href="">Contact</a>
                        </div>
                        <div class="div_two footer_flex">
                            <div class="paragraph">
                                <p>Copyright © 2022 Leadership Event Co., Ltd. <br> All Rights Reserved. </p>
                                <p class="design">
                                    Template Re-Design: <a href="">Bibek Shrestha</a></p>
                            </div>
                            <div id="gotohome" class="downarrow">
                                <a href="#hero_banner" class="arrow">&uarr; </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </footer>
        <script src="form.js"></script>
        <script src="jquery.nav.js"></script>
        <script>
            $("[data-id='ourStory']").on("click", function (e) {
                var posOurStory = $("#ourStory").offset().top;
                $("html, body").animate({
                    scrollTop: posOurStory
                }, 200);
            });

            $('.navbar-toggler').on('click', function () {
                if ($(this).hasClass('collapsed')) {
                    $(".header-menu").stop().slideDown();
                    $(this).stop().addClass('close');
                    $(this).stop().removeClass('collapsed');

                }
                else {
                    $(".header-menu").stop().slideUp();
                    $(this).stop().addClass('collapsed');
                    $(this).stop().removeClass('close');
                }
            });

            $(document).ready(function () {
                $('#nav').onePageNav();
            });

        </script>

        <script>
            $('.day_box_block .day_insidebox:first-child').addClass('active');
            $('.schedule_info').hide();
            $('.schedule_info:first').show();

            $('.day_box_block .day_insidebox').click(function () {
                $('.day_box_block .day_insidebox').removeClass('active');
                $(this).addClass('active');
                $('.schedule_info').hide();

                var activeTab = $(this).find('a').attr('href');
                $(activeTab).fadeIn();
                return false;
            });
        </script>
    </body>
    
</html>