<?php
  include './include/config.php';
  include './include/partners.php';
	include './include/use.php';
  ?>
<!DOCTYPE html>
<html data-wf-page="5f808516414aa175e2ad7953" data-wf-site="5f808516326cd92adf25095c">

<head>
  <meta charset="utf-8">
  <title>The Charity Challenge Platform | Shareity</title>
  <meta property="og:title" content="SHAREITY">
  <meta property="og:image" content="http://dev.shareity.com/images/shareity-with-background.png">
  <meta property="twitter:title" content="SHAREITY">
  <meta property="twitter:image" content="http://dev.shareity.com/images/shareity-with-background.png">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <meta name="keywords" content="shareity, causes, brands, chareity, snap, raise, share, share care, economy, economy challenge, 
    charity challenge, tik tok challenge, fan engagement, new ways to advertise, fundraising tools, 
    building brand advocates, gdpr compliant advertising, social advertising ">
  <meta name="description" content="Shareity is the charity challenge platform where users perform actions 
  (e.g. snap a selfie), and brands donate money because of them. We help brands build an intelligent 1st party 
  data mart by monetizing charity challenges on social networks, creating a more focused core audience for brands 
  to share with.">
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-5KXCKTT');
  </script>
  <!-- End Google Tag Manager -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/website.css" rel="stylesheet" type="text/css">
  <link href="/css/responsive.css" rel="stylesheet" type="text/css">
  <link href="/css/responsive-website.css" rel="stylesheet" type="text/css">
  <link href="/css/shareity-com.webflow.css" rel="stylesheet" type="text/css">
  <link href="/images/shareity.ico" rel="shortcut icon" type="image/x-icon">
  <link href="/images/shareity.ico" rel="apple-touch-icon">
  <link rel="stylesheet" type="text/css" href="/css/slick.css">
  <link rel="stylesheet" href="/css/mediabox.css" type="text/css">
  <script src="js/animation.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
  ! function(o, c) {
    var n = c.documentElement,
      t = " w-mod-";
    n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className +=
      t + "touch")
  }(window, document);
  </script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'G-G9V0502V0F');
  </script>

</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KXCKTT" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- BANNER COOKIES -->
  <div class="banner-cookies" id="banner-cookies">
    <p class="cookies-text">We use cookies to make Shareity's website a better place.
      Cookies help to provide a more personalized experience.
      For more info, please check out our <a href="/privacy-policy" style="color:#04ADED; text-decoration: none">Privacy
        Policy</a></p>
    <!-- 			To learn more about the different cookies we're using, check out our 
			<a style="color:#04ADED">Cookie Policy</a> (baked goods not included).</p> -->
    <ul>
      <li class="">
        <a type="button" href="" class="btn-cookies" id="btn-allow-cookies">Allow cookies</a>
      </li>
      <li class="">
        <a type="button" href="/cookies-policy" id="btn-cookies-policy" target="_blank" class="btn-cookies">Cookies
          Policy</a>
      </li>
    </ul>
  </div>
  <div class="back-banner-cookies" id="back-banner-cookies"></div>
  <script src="js/banner-cookies.js"></script>
  <!-- /.BANNER COOKIES -->

  <!-- <div id="spopup">
    <a class="xpop" href="javascript:void(0);" onclick="return closeSPopup();">X</a>
    <div class="fontpop px-5">Come join our virtual investment event!</div>
    <a type="button" href="/investment-event" class="btn btn-popup">Register Now</a>
  </div> -->

  <!-- Menu  -->
  <?php include $config->linkPath('menu'); ?>
  <!-- Menu End -->

  <!-- INTRO -->
  <div class="int-back back-index">
    <div class="int-content" style="padding: 180px 0px;">
      <div id="text-wrap" class="int-text">
        Do your Consumers Feel
        <!-- <br class="noshow d-md-none d-lg-none"> -->
        <span class="" style="display: none;">Appreciated?</span>
        <span class="" style="display: none;">Engaged?</span>
        <span class="" style="display: none;">Connected?</span>
        <span class="" style="display: none;">Like Friends?</span><br class="d-md-none">
        <p class="mt-4">Giving Brands the Power of Doing Good</p>
      </div>
      <ul>
        <li class="nb-link-btn nb-items">
          <a type="button" href="/book-a-demo" class="btn-nb-2 btn">Book a Demo</a>
        </li>
        <li class="nb-link-btn nb-items">
          <a type="button" href="https://members.shareity.me/#/register" style="color:white" class="btn-nb-1 btn">Sign
            Up for Free</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- PARTNERS CAROUSEL -->
  <section class="container-slick" style="background-color: #FFFFFF;max-height:80px">
    <div class="photobanner" style="filter: grayscale(1);">
      <?php foreach ($partner as $partner) { ?>
      <div class="web-part">
        <a href="<?= $config->linkPartners($partner['link']); ?>" target="_blank">
          <img src="<?= $config->linkAsset('img/partners/' . $partner['photo']); ?>">
        </a>
      </div>
      <?php } ?>
    </div>
  </section>
  <!-- /.PARTNERS CAROUSEL -->

  <!-- VIDEO -->
  <div class="nw-container">
    <div class="back-video">
      <div class="nw-content-wrap m-0">
        <div class="nw-layout-grid about-grid cc-about-2 nw-grid" style="">
          <!-- <a href="https://youtu.be/FNjtoOPVjQ4" class="mediabox" style="width: 80%; justify-self: center">
            <img class="blur ls-is-cached lazyloaded" data-src="/images/video-welcome.png"
              src="/images/video-welcome.png">
          </a> -->
          <a href="https://youtu.be/HA9-7_BfCIo?&autoplay=1" class="mediabox" style="width: 80%; justify-self: center">
            <img class="blur ls-is-cached lazyloaded" data-src="/images/video-img.png"
              src="/images/video-img.png">
          </a>
          <div id="w-node-1">
            <div class="nw-section-wrap">
              <h3 class="nw-title">The Problem We Solve</h3>
              <p class="nw-subt" id="for-ty">Are you looking for a better way to engage consumers and collect
                first party data? The reality is that 74% of consumers are tired of social media advertising.
                <span style="font-size: 12px">(Survey Monkey, 2021)</span><br><br>Unfortunately, <strong>collecting
                  first
                  party data isn’t easy, and social media doesn’t actually build brand advocates. </strong>
              </p>
            </div>
            <a href="https://shareity.com/good-news/first-party-data-and-action-speak-louder-than-words/"
              class="nw-button-link" role="button">
              <span class="nw-button-content">
                <span class="nw-button-text">Learn more about first-party data collection
                  <span class="iconForward arrow"><i class="fas fa-long-arrow-alt-right">&#8594;</i></span>
                </span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.VIDEO -->

  <!-- FOR CAUSE/BRAND -->
  <div class="nw-content-backg" style="margin: 50px 0px">
    <div class="row row-cards">
      <div class="w-col w-col-6">
        <div id="brands-card" class="nw-cards" style="margin: 50px 0px">
          <div class="nw-card-header">For Brands</div>
          <div class="card-body nw-card-body">
            <p class="card-text nw-card-text">
              • Cause-Aligned Viral Campaigns<br>
              • Shareity Effect ™ (Peer to Peer Shared)<br>
              • Build Brand Advocacy/Brand Media<br>
              • Increase Customer Loyalty With Rewards<br>
              • GDPR Compliant, First-Party Communities<br>
              • Best ROAS Against Any Social Media Platform<br>
            </p>
            <a id="first-learn" href="/brands" class="nw-button-link" role="button">
              <span class="nw-button-content">
                <span class="nw-button-text">
                  LEARN MORE
                  <span class="iconForward arrow"><i class="fas fa-long-arrow-alt-right">&#8594;</i></span>
                </span>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="w-col w-col-6">
        <div id="causes-card" class="nw-cards" style="margin: 50px 0px">
          <div class="nw-card-header">For Causes</div>
          <div class="card-body nw-card-body">
            <p class="card-text nw-card-text">
              • Raise More Money<br>
              • Give Sponsors a Better Return<br>
              • Attract New Sponsors<br>
              • Attract Gen Z, Gen X, and Millennial's<br>
              • Increase Cause Awareness<br>
              • Build a Community of Lifetime Advocates<br>
            </p>
            <a id="sec-learn" href="/causes" class="nw-button-link" role="button">
              <span class="nw-button-content">
                <span class="nw-button-text">
                  LEARN MORE
                  <span class="iconForward arrow"><i class="fas fa-long-arrow-alt-right">&#8594;</i></span>
                </span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.FOR CAUSE/BRAND -->

  <!-- HOW IT WORK -->
  <div class="backfa">
    <h2 class="label-web" style="margin-top:20px">So, How Does It Work?</h2>
    <section id="cards-section" class="cards-section" style="padding-top: 0px;">
      <div class="centered-container w-container">
        <div class="cards-grid-container">
          <div id="w-node-3" class="contra">
            <div id="" class="nw-vid-cards">
              <video playsinline="" muted="" loop="" preload="auto" autoplay="" id="" style="width: 77%;" class="">
                <source src="/images/snap-5.mp4">
              </video>
              <!-- <img src="/images/nw-snap.jpeg" alt=""> -->
            </div>
            <h3 class="nw-title text-center" style=" "> SNAP </h3>
            <p class="nw-subt text-center" style="margin-inline-start: 0px;">Users accept a challenge by clicking a
              link or texting a keyword, then upload a picture
              or video.
          </div>
          <div id="w-node-3">
            <div id="" class="nw-vid-cards">
              <video playsinline="" muted="" loop="" preload="auto" autoplay="" id="" style="width: 77%;" class="">
                <source src="/images/raise-5.mp4">
              </video>
            </div>
            <h3 class="nw-title text-center" id="w-node-4" style="">RAISE</h3>
            <p class="nw-subt text-center" id="w-node-5" style="margin-inline-start: 0px;">
              The brand gets exposure through a GLAD ™ (10-second animation) and donates for each participant.</p>
          </div>
          <div id="w-node-6">
            <div class="nw-vid-cards" id="">
              <video playsinline="" muted="" loop="" preload="auto" autoplay="" id="" style="width: 77%;" class="">
                <source src="/images/share-5.mp4">
              </video>
              <!-- <img src="/images/nw-share.jpeg" alt="">	 -->
            </div>
            <h3 class="nw-title text-center" id="w-node-7" style="">SHARE</h3>
            <p class="nw-subt text-center" id="w-node-8" style="margin-inline-start: 0px;">
              Participants share their branded challenge via The Network Effect™ to raise more money and the campaign
              goes viral.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.HOW IT WORK -->

  <!-- NETWORK VIDEO EFFECT -->
  <div style="">
    <h2 class="label-web" style="margin-top:20px">The Network Effect<sup>TM</sup></h2>
    <div class="intro-header-video">
      <video playsinline="" muted="" loop="" preload="auto" autoplay="" id="video-network" style="width: 100%;">
        <source src="/images/the-network-effect.mp4" type="video/mp4" alt="" class="">
      </video>
    </div>
  </div>
  <!-- /.NETWORK VIDEO EFFECT -->

  <!-- SH FEAT. SECTION -->
  <!-- <h2 class="label-web" style="">Shareity Features</h2> -->
  <div class="nw-content-wrap">
    <div class="nw-layout-grid about-grid nw-grid" style="">
      <video playsinline="" muted="" loop="" preload="auto" autoplay="" id="animatobj1" class=""
        style="position: relative; width: 90%;">
        <source src="/images/brands-animation.mp4">
      </video>
      <div id="w-node-1">
        <div id="animatobj2">
          <div class="nw-section-wrap" id="  ">
            <h3 class="nw-title">Powerful Analytics</h3>
            <p class="nw-subt">Each community has a dedicated dashboard equipped with powerful analytics and campaign
              statistics. These include challenge acceptance rates, total shares, engagement rates, and many more. Use
              the
              Shareity Dashboard ™ to fine-tune campaigns to guarantee success. </p>
          </div>
          <div class="nw-button-wrapper">
            <a href="https://shareity.com/good-news/beginners-guide-to-shareity/" class="nw-button-link" role="button">
              <span class="nw-button-content">
                <span class="nw-button-text">See Getting Started Guide
                  <span class="iconForward arrow"><i class="fas fa-long-arrow-alt-right">&#8594;</i></span>
                </span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="backfa">
    <div class="nw-content-wrap">
      <div class="nw-layout-grid about-grid nw-grid" style="">
        <img id="animatobj3" src="/images/rewards-mockup.png" class="nw-image">
        <div id="w-node-2">
          <div id="animatobj4">
            <div class="nw-section-wrap" id="  ">
              <h3 class="nw-title">Push-button Community</h3>
              <p class="nw-subt">Build loyal consumers by motivating your community with rewards like Gift Cards,
                Products, and Vouchers to drive more traffic to in-person and online stores.</p>
            </div>
            <div class="nw-button-wrapper">
              <a href="/how-it-works" class="nw-button-link" role="button">
                <span class="nw-button-content">
                  <span class="nw-button-text">See How It Works
                    <span class="iconForward arrow"><i class="fas fa-long-arrow-alt-right">&#8594;</i></span>
                  </span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="nw-content-wrap">
    <div class="nw-layout-grid about-grid nw-grid" style="">
      <img src="/images/social-media3.png" id="animatobj5" class="nw-image">
      <div id="w-node-1">
        <div id="animatobj6">
          <div class="nw-section-wrap">
            <h3 class="nw-title">20x Return on Investment</h3>
            <p class="nw-subt">FUNDERTISING™ has the best in class return on Ad sale. Shareity’s
              cost is just $0.25 cents and a $1, $5, or $10 donation per action to a cause.</p>
          </div>
          <div class="nw-button-wrapper">
            <a href="/pricing" class="nw-button-link" role="button">
              <span class="nw-button-content">
                <span class="nw-button-text">See Pricing
                  <span class="iconForward arrow"><i class="fas fa-long-arrow-alt-right">&#8594;</i></span>
                </span>
              </span>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Shareity Results -->
  <div class="nw-container back-stats py-4">
    <h2 class="label-web m-0" style="color: white;">Shareity Results</h2>
    <div class="row-sr">
      <?php foreach ($indexgif as $data) { ?>
      <div class="col-lg-3 text-center">
        <video playsinline="" muted="" preload="auto" autoplay="" id=" " style="width:100%">
          <source src="<?= $config->linkAsset('/images/' . $data['img']); ?>" class="">
        </video>
        <!-- <img src="" class=""> -->
        <div class="gif-sbt"><?= $data['sbt'] ?></div>
      </div>
      <?php } ?>
    </div>
  </div>
  <!--/ Shareity Results -->

  <div class="backfa">
    <div class="nw-content-wrap">
      <div class="nw-layout-grid about-grid nw-grid" style="">
        <img src="/images/dedicated.PNG" id="animatobj7" class="nw-image">
        <div id="w-node-2">
          <div id="animatobj8">
            <div class="nw-section-wrap" id="  ">
              <h3 class="nw-title">Dedicated Customer Success Team Member</h3>
              <p class="nw-subt">A dedicated team member is here to provide continued support on the Shareity platform.
                Check-ins and optimization will guarantee campaign success. From ideation to implementation, our team
                works with you to ensure ease-of-use throughout your experience.</p>
            </div>
            <div class="nw-button-wrapper">
              <a href="/book-a-demo" class="nw-button-link" role="button">
                <span class="nw-button-content">
                  <span class="nw-button-text">Get Started
                    <span class="iconForward arrow"><i class="fas fa-long-arrow-alt-right">&#8594;</i></span>
                  </span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- /.SH FEAT. SECTION -->
  </div>

  <!-- WHERE USE -->
  <div class="web-use">
    <section class="icon-sections">
      <div class="use-header">
        <h2 class="label-web" style="color: white">Where to use Shareity?</h2>
      </div>
      <div class="row rsrs">
        <?php foreach ($nwicon as $data) { ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="b-center">
            <img src="<?= $config->linkAsset('img/use/' . $data['img']); ?>" with="100" height="100">
            <h3 class="title-use">
              <?= $data['name'] ?>
            </h3>
            <p class="desc-use">
              <?= $data['description'] ?>
            </p>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>
  </div>
  <!-- /.WHERE USE -->

  <!-- PEOPLE USING -->
  <div class="mid-web">
    <section class="icon-sections">
      <div class="mid-content">
        <h2 class="label-web" style="color: white">PEOPLE USING SHAREITY</h2>
        <div class="row rsrs">
          <?php foreach ($boxes as $data) { ?>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="bb-center">
              <img src="<?= $config->linkAsset('img/use/' . $data['img']); ?>">
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
  </div>
  <!-- /.PEOPLE USING -->

  <!-- ENDING -->
  <div class="end-web">
    <div class="end-content" style="max-width: none;">
      <div id="car-two" class="end-text" style="font-size: 35px;">
        Shareity Gives You The Opportunity To Do Something
        <span class="text-bold" style="display: none;"><strong>Viral!</strong></span>
        <span class="" style="display: none;"><strong>Brilliant!</strong></span>
        <span class="" style="display: none;"><strong>Game-Changing!</strong></span>
      </div>
      <!-- <div class="end-text">Snap. Raise. Share<sup>TM</sup></div> -->
      <ul>
        <li class="nb-link-btn nb-items">
          <a type="button" href="/book-a-demo" class="btn-nb-end2 btn">Book a Demo</a>
        </li>
        <li class="nb-link-btn nb-items">
          <a type="button" href="https://members.shareity.me/#/register" style="color:white"
            class="btn-nb-end1 btn">Sign Up For Free</a>
        </li>
      </ul>
    </div>
  </div>

  <!--  footer -->
  <?php include $config->linkPath('footer'); ?>
  <!--  /footer -->

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f808516326cd92adf25095c"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
  </script>
  <script src="/js/webflow.js" type="text/javascript"></script>

  <script>
  //   action button
  function sendNewsletter() {
    let newsletter = document.getElementById('newsletter')
    let message = document.getElementById('message')

    if (!validateEmail(newsletter.value)) {
      message.innerText = '*invalid email'

      setInterval(function() {
        message.innerText = ''
      }, 2000)

      return false
    } else {
      fetchNewsletter(newsletter.value, message, newsletter)
    }
  }

  // validate email
  function validateEmail(email) {
    let re = /\S+@\S+\.\S+/
    if (email) {
      return re.test(email)
    } else {
      return false
    }
  }
  var apiUrl = 'https://apidev.shareity.com/api/web/user/newsletter?'

  var domUrl = window.location.hostname;
  if (domUrl == 'shareity.com') {
    var apiUrl = apiUrl.replace('apidev', 'api');
  }
  //console.log('NUEVO:::::',apiUrl)
  function fetchNewsletter(email, message, newsletter) {
    fetch(apiUrl + new URLSearchParams('email=' + email), {
        method: 'POST',
      })
      .then(function(response) {
        if (response.ok) {
          newsletter.value = ''
          message.style.color = 'green'
          message.innerText = 'Newsletter sent successfully'
        } else {
          throw 'ajax call failed';
        }
      })
      .catch(function(err) {
        console.log(err)
      });
  }
  </script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/2675419.js"></script>
  <!-- End of HubSpot Embed Code -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="/js/slick.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function() {
    $('.photobanner').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
          breakpoint: 928,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 520,
          settings: {
            slidesToShow: 2
          }
        }
      ]
    });
  });
  </script>

  <!-- Youtube video shareity -->
  <script src="/js/mediabox.js"></script>
  <script type="text/javascript">
  MediaBox('.mediabox');
  </script>
  <script src="/js/lazysizes.min.js" async=""></script>
  <!-- /.Youtube video shareity -->

  <!-- Variant Text -->
  <script>
  var text = document.querySelector('#text-wrap');
  var word = text.getElementsByTagName('span');
  var i = 0;

  function rotate() {
    word[i].style.display = 'none';
    i = (i + 1) % word.length
    word[i].style.display = 'inline';
  }
  setInterval(rotate, 2000)
  </script>
  <script>
  var content = document.querySelector('#car-two');
  var words = content.getElementsByTagName('span');
  var j = 0;

  function rotate() {
    words[j].style.display = 'none';
    j = (j + 1) % words.length
    words[j].style.display = 'inline';
  }
  setInterval(rotate, 2000)
  </script>
  <!-- /.Variant Text -->

  <!-- PopUp -->
  <!-- <script src="//http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  // $(window).scroll(function(){
  // if($(document).scrollTop()>=$(document).height()/200000)
  //   $("#spopup").show("slow");else $("#spopup").hide("slow");
  // });
  function closeSPopup() {
    $('#spopup').hide('slow');
  }
  </script> -->

  <!-- animation of buttons-->
  <script>
  $('.nw-button-content').hover(
    function() {
      $('.fas').addClass('chgcolor')
    },
    function() {
      $('.fas').removeClass('chgcolor')
    }
  )
  </script>
</body>

</html>