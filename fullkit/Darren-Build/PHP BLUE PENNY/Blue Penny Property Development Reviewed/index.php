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
    <header class="header"><a class="header__mobile-menu-open-btn js-menu-open-icon" href="javascript:void(0)"><span class="sr-only">open</span><em class="fa fa-bars"></em></a>
        <a class="header__logo" href="http://kiadybezaka.com/demo-ppdf"><img src="images/BP Logo.png" width="150" height="30" alt="image"></a><a class="header__mobile-menu-close-btn js-menu-close-icon sr-only" href="javascript:void(0)"><span class="sr-only">close</span><em class="fa fa-times"></em></a>
        <nav class="header__nav">
            <ul>
                <li><a href="http://kiadybezaka.com/demo-ppdf#about">About us</a></li>
                <li><a href="http://kiadybezaka.com/demo-ppdf#values">Our values</a></li>
                <li><a href="http://kiadybezaka.com/demo-ppdf#projects">Projects</a></li>
                <li><a href="http://kiadybezaka.com/demo-ppdf#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="headerMobile js-mobile-menu">
        <ul>
            <li><a class="js-mobile-menu-item" href="http://kiadybezaka.com/demo-ppdf#about">About us</a></li>
            <li><a class="js-mobile-menu-item" href="http://kiadybezaka.com/demo-ppdf#values">Our values</a></li>
            <li><a class="js-mobile-menu-item" href="http://kiadybezaka.com/demo-ppdf#projects">Projects</a></li>
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
        <div class="banner__text"> <p>Invest in our Property Development Projects.</p><a class="btn js-open-popin-item" href="#">Contact Us<div class="js-popin-details sr-only"><div class="popinContact">
          <h4>If you are interested in investing in our projects and need more information, contact us below:</h4>
          <form action="/" method="POST"><div class="popinContact__input"><label for="name">Name</label><input id="name" name="name" type="text" placeholder="Your name" required=""></div><div class="popinContact__input"><label for="mail">Mail</label><input id="mail" name="email" type="email" placeholder="Your email address" required=""></div><div class="popinContact__input"><label for="subject">Subject</label><input id="subject" name="subject" type="text" placeholder="The subject of your message" required=""></div><div class="popinContact__input"><label for="message">Message</label><textarea id="message" name="content" placeholder="Your message here ..." required=""></textarea></div><div class="popinContact__btn"><button class="btn" type="submit" name="submit">Send</button></div></form></div></div></a></div>
    </div>
    <div class="section first">
<div class="section__content">
  <h2 class="topTitle">Build a Brigher Future with Us.</h2>
  <p class="left"> <strong>Blue Penny Property Development Ltd</strong> is a property development company, specialising in the purchase of conditional land, continuing through to the planning and development of each site, with a rewarding return on investment.</p>
  <p class="left">&nbsp;</p>
            <p class="left">&nbsp;</p>
        </div></div>
    <div class="section section--dark">
        <div class="bannerInfo section__content">
            <div class="bannerInfo__item"><i class="fa fa-thumbs-up"></i>
              <p class="bannerInfo__status">Professional</p>
              <p class="bannerInfo__desc">Team</p>
            </div>
            <div class="bannerInfo__item"><i class="fa fa-thumbs-up"></i>
              <p class="bannerInfo__status">Excellent</p>
              <p class="bannerInfo__desc">ROI</p>
            </div>
            <div class="bannerInfo__item"><i class="fa fa-thumbs-up"></i>
              <p class="bannerInfo__status">Professional</p>
              <p class="bannerInfo__desc">Construction</p>
            </div>
            <div class="bannerInfo__item"><i class="fa fa-thumbs-up"></i>
              <p class="bannerInfo__status">Excellent</p>
              <p class="bannerInfo__desc">Choice</p>
            </div>
        </div>
    </div>
    <div class="section" id="values">
        <div class="section__content">
            <h2 class="section__title">Our Mission Statement</h2>
            <h3 class="section__subtitle">You are not just investing in a property or, you are investing in our trust, passion and commitment to deliver. It is our team of professionals and projects that guarantee success. Come and be part of our family and develop and grow with us.</h3>
            <div class="textBox section__content">
                
                <div class="textBox__item">
                   <div class="item__header" style="text-align:center;">
                        <h4>Conflict free</h4></div>
                    <div class="item__text">
                      <p>The needs of our clients come first. We are beholden to no, individual, institution or entity other than our clients.</p>
                    </div>
                </div>
				<div class="textBox__item">
                    <div class="item__header" style="text-align:center;">
                        <h4>Transparency</h4></div>
                    <div class="item__text">
                        <p>Integrity and honesty is one of our main core values. Our aim is to deliver what we say we will do.</p>
                    </div>
                </div>
                <div class="textBox__item">
                    <div class="item__header" style="text-align:center;">
                        <h4>Expertise</h4></div>
                    <div class="item__text">
                        <p>We demand excellence, our team of Architects, Engineers and Quantity/Land Surveyors are engulfed with knowledge and experience.</p>
                    </div>
                </div>
                <div class="textBox__item">
                    <div class="item__header" style="text-align:center;">
                        <h4>Sustainable Development</h4></div>
                    <div class="item__text">
                        <p>It is our responsibility to ensure sustainability from land acquisition, through design and construction, to sales and the provision of services for our buyers.</p>
                    </div>
                </div>
                <div class="textBox__item">
                    <div class="item__header" style="text-align:center;">
                        <h4>Accountability</h4></div>
                    <div class="item__text">
                        <p>We strive to honour commitments that we make and take responsibility to deliver with the highest quality possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="details section__content">
            <div class="details__item">
                <div class="details__image"><img class="thumbnail" src="images/about/mauritius.jpg" width="500" height="300" alt="image"></div>
                <div class="details__text">
                    <h2>About Mauritius</h2>
                    <h3>Why invest in Mauritius</h3>
                    <p>Mauritius is fast becoming an investmentdestination of choice for foreign investors who are attracted by a business-friendly environment, favourable tax rates, strong capital growth achieved through property investments.</p>
                </div>
            </div>
            <div class="details__item details__item--reverse">
                <div class="details__image"><img class="thumbnail" src="images/about/mauritius-2.jpg" width="500" height="300" alt="image"></div>
                <div class="details__text">
                    <h3>Reasons to invest in Mauritius.</h3>
                    <ul>
                        <li>Attractive ROI and Tax benefits.</li>
                        <li>Strong high-net-worth individuals (HNWI growth) – due to an increase of wealthy individuals moving to Mauritius over the last decade.</li>
                        <li>Secure ownership rights - Mauritian ownership rights are very strong, which encourages locals and foreigners to invest in property and businesses in the country.</li>
                        <li>Low level of government regulation &amp; intervention.</li>
                        <li>Automatic permanent residency - this applies if one buys a US $500,000 home in the country. It then encourages wealthy people to move there and grows the HNWI further.</li>
                        <li>Strong foreign direct investment (FDI} inflows.</li>
                        <li>Safety &amp; security - Mauritius was recently rated by New World Wealth as the safest country in Africa along with Namibia and Botswana.</li>
                        <li>Excellent education and healthcare system.</li>
                        <li>A retirement paradise.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="projects">
        <h2 class="section__title">Projects Requiring Investment</h2>
        <div class="project section__content">
            <div class="project__item js-open-popin-item">
                <div class="project__image"><img src="images/project/p-1.jpg" width="300" height="300" alt="image"></div>
                <div class="project__text">
                    <h3>Beach House</h3></div>
                <div class="project__details js-popin-details sr-only">
                    <div class="projects"><img src="images/project/p-1.jpg" width="300" height="300" alt="image">
                        <div class="projects__text">
                            <h3>Beach House</h3>
                            <p>Madagascar trsm aims to generate real value for our investors by creating synergy between onsite/offsite aspects of property development with our Property Development Protected Cell Fund.</p><p>For information on this project, contact us at <strong>contact@zakaranda@gmail.com</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project__item js-open-popin-item">
                <div class="project__image"><img src="images/project/p-9.jpg" width="300" height="300" alt="image"></div>
                <div class="project__text">
                    <h3>Grand Bay Villas</h3></div>
                <div class="project__details js-popin-details sr-only">
                    <div class="projects"><img src="images/project/p-9.jpg" width="300" height="300" alt="image">
                        <div class="projects__text">
                            <h3>Grand Bay Villas</h3>
                            <p>Madagascar trsm aims to generate real value for our investors by creating synergy between onsite/offsite aspects of property development with our Property Development Protected Cell Fund.</p><p>For information on this project, contact us at <strong>contact@zakaranda@gmail.com</strong></p>
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
                            <p>Madagascar trsm aims to generate real value for our investors by creating synergy between onsite/offsite aspects of property development with our Property Development Protected Cell Fund.</p><p>For information on this project, contact us at <strong>contact@zakaranda@gmail.com</strong></p>
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
                            <p>Madagascar trsm aims to generate real value for our investors by creating synergy between onsite/offsite aspects of property development with our Property Development Protected Cell Fund.</p><p>For information on this project, contact us at <strong>contact@zakaranda@gmail.com</strong></p>
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
                            <p>Madagascar trsm aims to generate real value for our investors by creating synergy between onsite/offsite aspects of property development with our Property Development Protected Cell Fund.</p><p>For information on this project, contact us at <strong>contact@zakaranda@gmail.com</strong></p>
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
                            <p>Madagascar trsm aims to generate real value for our investors by creating synergy between onsite/offsite aspects of property development with our Property Development Protected Cell Fund.</p><p>For information on this project, contact us at <strong>contact@zakaranda@gmail.com</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section__action"><a class="btn" href="http://kiadybezaka.com/demo-ppdf-project">Load more</a></div>
    </div>
    <div class="section" id="about">
        <h2 class="section__title">About us</h2>
        <div class="section__content">
          <p class="left"> <strong>Blue Penny Property Development Ltd </strong> is a property development company, specialising in the purchase of conditional land, continuing through to the planning and development of each site, with rewarding return on investment.
          We are responsible for all aspects of the development and investment cycle. This includes, land sourcing and acquisition, securing planning, design &amp; build, through to sales &amp; marketing and asset management. We focus on the following: </p>
          <ul>
            <li>The purchase of land for development of environmental friendly Green projects and to ensure that the correct land and size for projects are acquired.</li>
                <li>The selection of the right contractors for all our projects through legal tenders, due diligence and by the approval of the Board.</li>
                <li>Professional property architectural designs in order to maximize its functionality for its users and have architectural appeal, so that we avoid any diminishing value associated with a poorly designed project.</li>
                <li>To maximize productivity through our professional management team and invest in the development of all of our employees.</li>
                <li>To ensure that there is a balance between risk and return through financial structuring and what lenders and our investors will allow.</li>
                <li>Intellectual property rights are used correctly to enhance value through designs and branding.</li>
          </ul>
      </div>
    </div>
    <div class="section" id="contact">
        <h2 class="section__title">Contact Us</h2>
        <div class="sContact section__content"><a class="sContact__map" href="https://www.google.com/maps/dir//Perdrix+Ave,+Quatre+Bornes,+Maurice/@-20.2735117,57.4756285,16z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x217c5b5b55dbb4c9:0x38a0aabcc2865289!2m2!1d57.4800059!2d-20.2735218!3e3" target="_blank" rel="noopener noreferrer"><span class="sr-only">map</span><img src="images/map.png" width="500" height="500" alt="image"></a>
            <div class="sContact__content">
                <div class="sContact__text">
                    <div class="sContact__item"><span>Address:</span>
                        <p>7A Perdrix Ave, Quatre Bornes, Sodnac, Mauritius</p>
                    </div>
                    <div class="sContact__item">
						<span>Phone: </span>
						<div class="sContact__phoneNumber">
						  <p>Office: +230 463 3186</p>
						  <p>Mobile: +230 57 18 78 86</p>
						 </div>
                    </div>
                    <div class="sContact__item"><span>E-mail:</span>
                        <p>info@bluepenny-propertydevelopment.com</p>
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
                    <div class="contact__phoneNumber">
						  <p>Office: +230 463 3186</p>
						  <p>Mobile: +230 57 18 78 86</p>
						 </div>
                </div>
                <div class="contact__item"><span>E-mail:</span>
                    <p>contact@zakaranda@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="footer__item">
            <div class="footer__item">
            <ul class="footer__nav">
                <li><a href="http://kiadybezaka.com/demo-ppdf#about">About us</a></li>
                <li><a href="http://kiadybezaka.com/demo-ppdf#projects">Projects</a></li>
            </ul>
        </div>
        </div>
        <div class="footer__item">
            <ul class="footer__icons">
                <li><a href="https:/linkedin.com" target="_blank" rel="noopener noreferrer"><span class="sr-only">icon</span><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer__text">
          <p>&copy; 2020, Blue Penny Property Development Ltd</p>
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