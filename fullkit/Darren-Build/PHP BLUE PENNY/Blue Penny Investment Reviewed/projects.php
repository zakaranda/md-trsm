<?php 
if(isset($_POST['submit'])){
    $to = "darren.cootapen@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Thank you - Blue Penny";
    $message = $name . " :" . "\n\n" . $_POST['message'];
    $message2 = "Thank you for your message. We will get back to you as soon as possible." ;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
	echo '<script language="javascript">';
	echo 'setTimeout(function() { alert("Your message has been sent...") }, 2000);';
	echo '</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <title>Madagascar trsm</title>
    <meta name="description" content="Madagascar trsm">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="./styles/app.css">
</head>

<body>
    <header class="header"><a class="header__mobile-menu-open-btn js-menu-open-icon" href="javascript:void(0)"><span class="sr-only">open</span><i class="fa fa-bars"></i></a>
        <a class="header__logo" href="http://kiadybezaka.com/demo-ppdf"><img src="images/logo.png" width="150" height="30" alt="image"></a><a class="header__mobile-menu-close-btn js-menu-close-icon sr-only" href="javascript:void(0)"><span class="sr-only">close</span><i class="fa fa-times"></i></a>
        <nav class="header__nav">
            <ul>
                <li><a href="http://kiadybezaka.com/demo-ppdf#about">About us</a></li>
                <li><a href="http://kiadybezaka.com/demo-ppdf#values">Our values</a></li>
                <li><a href="http://kiadybezaka.com/demo-ppdf#projects">Projects</a></li>
                <li><a href="http://kiadybezaka.com/demo-ppdf#teams">Our teams</a></li>
                <li><a href="http://kiadybezaka.com/demo-ppdf#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="headerMobile js-mobile-menu">
        <ul>
            <li><a class="js-mobile-menu-item" href="http://kiadybezaka.com/demo-ppdf#about">About us</a></li>
            <li><a class="js-mobile-menu-item" href="http://kiadybezaka.com/demo-ppdf#values">Our values</a></li>
            <li><a class="js-mobile-menu-item" href="http://kiadybezaka.com/demo-ppdf#projects">Projects</a></li>
            <li><a class="js-mobile-menu-item" href="http://kiadybezaka.com/demo-ppdf#teams">Our teams</a></li>
            <li><a class="js-mobile-menu-item" href="http://kiadybezaka.com/demo-ppdf#contact">Contact</a></li>
        </ul>
    </div>
    <div class="banner">
        <div class="banner__overlay"></div>
        <div class="banner__image">
            <picture>
                <source media="(max-width: 768px)" srcset="images/banner/banner-768.jpg">
                <source media="(max-width: 480px)" srcset="images/banner/banner-480.jpg"><img src="images/banner/banner-1920.jpg" alt="banner image"></picture>
        </div>
        <div class="banner__text">
            <p>Invest in our Property Development Fund.</p><a class="btn js-open-popin-item" href="#">Find how<div class="js-popin-details sr-only"><div class="popinContact"><h4>If you are an investor interested in investing in our fund and need more information, contact us below:</h4><form action="/" method="POST"><div class="popinContact__input"><label for="name">Name</label><input id="name" name="name" type="text" placeholder="Your name" required=""></div><div class="popinContact__input"><label for="mail">Mail</label><input id="mail" name="email" type="email" placeholder="Your email address" required=""></div><div class="popinContact__input"><label for="subject">Subject</label><input id="subject" name="subject" type="text" placeholder="The subject of your message" required=""></div><div class="popinContact__input"><label for="message">Message</label><textarea id="message" name="content" placeholder="Your message here ..." required=""></textarea></div><div class="popinContact__btn"><button class="btn" type="submit" name="submit">Send</button></div></form></div></div></a></div>
    </div>
    <div class="section" id="projects">
        <h2 class="section__title">Projects Requiring Investment</h2>
        <h3 class="section__subtitle">Completely productize dynamic outsourcing vis-a-vis high standards in web.</h3>
        <div class="project section__content">
            <div class="project__item js-open-popin-item">
                <div class="project__image"><img src="images/project/p-1.jpg" width="300" height="300" alt="image"></div>
                <div class="project__text">
                    <h3>Beach House</h3></div>
                <div class="project__details js-popin-details sr-only">
                    <div class="projects"><img src="images/project/p-1.jpg" width="300" height="300" alt="image">
                        <div class="projects__text">
                            <h3>Beach House</h3>
                            <p>Compellingly evolve client-centric action items rather than emerging deliverables. Compellingly negotiate transparent paradigms through worldwide collaboration and idea-sharing. Rapidiously strategize compelling solutions via tactical vortals. Efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project__item js-open-popin-item">
                <div class="project__image"><img src="images/project/p-2.jpg" width="300" height="300" alt="image"></div>
                <div class="project__text">
                    <h3>Blue Bay Luxury Hotel</h3></div>
                <div class="project__details js-popin-details sr-only">
                    <div class="projects"><img src="images/project/p-2.jpg" width="300" height="300" alt="image">
                        <div class="projects__text">
                            <h3>Blue Bay Luxury Hotel</h3>
                            <p>Compellingly evolve client-centric action items rather than emerging deliverables. Compellingly negotiate transparent paradigms through worldwide collaboration and idea-sharing. Rapidiously strategize compelling solutions via tactical vortals. Efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project__item js-open-popin-item">
                <div class="project__image"><img src="images/project/p-3.jpg" width="300" height="300" alt="image"></div>
                <div class="project__text">
                    <h3>Luxury Villa</h3></div>
                <div class="project__details js-popin-details sr-only">
                    <div class="projects"><img src="images/project/p-3.jpg" width="300" height="300" alt="image">
                        <div class="projects__text">
                            <h3>Luxury Villa</h3>
                            <p>Compellingly evolve client-centric action items rather than emerging deliverables. Compellingly negotiate transparent paradigms through worldwide collaboration and idea-sharing. Rapidiously strategize compelling solutions via tactical vortals. Efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project__item js-open-popin-item">
                <div class="project__image"><img src="images/project/p-4.jpg" width="300" height="300" alt="image"></div>
                <div class="project__text">
                    <h3>New Ebène</h3></div>
                <div class="project__details js-popin-details sr-only">
                    <div class="projects"><img src="images/project/p-4.jpg" width="300" height="300" alt="image">
                        <div class="projects__text">
                            <h3>New Ebène</h3>
                            <p>Compellingly evolve client-centric action items rather than emerging deliverables. Compellingly negotiate transparent paradigms through worldwide collaboration and idea-sharing. Rapidiously strategize compelling solutions via tactical vortals. Efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project__item js-open-popin-item">
                <div class="project__image"><img src="images/project/p-5.jpg" width="300" height="300" alt="image"></div>
                <div class="project__text">
                    <h3>Cambuse Beach &amp; Spa</h3></div>
                <div class="project__details js-popin-details sr-only">
                    <div class="projects"><img src="images/project/p-5.jpg" width="300" height="300" alt="image">
                        <div class="projects__text">
                            <h3>Cambuse Beach &amp; Spa</h3>
                            <p>Compellingly evolve client-centric action items rather than emerging deliverables. Compellingly negotiate transparent paradigms through worldwide collaboration and idea-sharing. Rapidiously strategize compelling solutions via tactical vortals. Efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project__item js-open-popin-item">
                <div class="project__image"><img src="images/project/p-6.jpg" width="300" height="300" alt="image"></div>
                <div class="project__text">
                    <h3>DODO CASINO</h3></div>
                <div class="project__details js-popin-details sr-only">
                    <div class="projects"><img src="images/project/p-6.jpg" width="300" height="300" alt="image">
                        <div class="projects__text">
                            <h3>DODO CASINO</h3>
                            <p>Compellingly evolve client-centric action items rather than emerging deliverables. Compellingly negotiate transparent paradigms through worldwide collaboration and idea-sharing. Rapidiously strategize compelling solutions via tactical vortals. Efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="contact">
        <h2 class="section__title">Contact Us</h2>
        <h3 class="section__subtitle">Completely productize dynamic outsourcing vis-a-vis high standards in web.</h3>
        <div class="sContact section__content"><a class="sContact__map" href="https://www.google.com/maps/dir//Perdrix+Ave,+Quatre+Bornes,+Maurice/@-20.2735117,57.4756285,16z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x217c5b5b55dbb4c9:0x38a0aabcc2865289!2m2!1d57.4800059!2d-20.2735218!3e3" target="_blank" rel="noopener noreferrer"><span class="sr-only">map</span><img src="images/map.png" width="500" height="500" alt="image"></a>
            <div class="sContact__content">
                <div class="sContact__text">
                    <div class="sContact__item"><span>Address:</span>
                        <p>7A Perdrix Ave, Quatre Bornes, Sodnac, Mauritius</p>
                    </div>
                    <div class="sContact__item"><span>Phone: </span>
                        <p>+ 230 57 18 78 86</p>
                    </div>
                    <div class="sContact__item"><span>E-mail:</span>
                        <p>contact@zakaranda@gmail.com</p>
                    </div>
                </div>
                <ul class="sContact__icons">
                    <li><a href="https:/linkedin.com" target="_blank" rel="noopener noreferrer"><span class="sr-only">icon</span><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer__item">
            <div class="contact">
                <div class="contact__item"><span>Address:</span>
                    <p>7A Perdrix Ave, Quatre Bornes, Sodnac, Mauritius</p>
                </div>
                <div class="contact__item"><span>Phone: </span>
                    <p>+230 57187886</p>
                </div>
                <div class="contact__item"><span>E-mail:</span>
                    <p>contact@zakaranda@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="footer__item">
            <ul class="footer__nav">
                <li><a href="http://kiadybezaka.com/demo-ppdf#about">About us</a></li>
                <li><a href="http://kiadybezaka.com/demo-ppdf#projects">Projects</a></li>
                <li><a href="http://kiadybezaka.com/demo-ppdf#teams">Our teams</a></li>
            </ul>
        </div>
        <div class="footer__item">
            <ul class="footer__icons">
                <li><a href="https:/linkedin.com" target="_blank" rel="noopener noreferrer"><span class="sr-only">icon</span><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer__text">
            <p>&copy; 2020, Madagascar trsm</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Open Sans:300,400']
            }
        });
    </script>
    <script src="./scripts/app.js" async></script>
</body>

</html>