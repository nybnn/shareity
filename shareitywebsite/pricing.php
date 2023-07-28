<?php
  include './include/config.php';
  include './include/partners.php';
	include './include/use.php';
	include './include/faq.php';
	include './include/nwdata.php';
  ?>
<!DOCTYPE html>
<html data-wf-page="5f808516414aa175e2ad7953" data-wf-site="5f808516326cd92adf25095c">

<head>
  <meta charset="utf-8">
  <title>Pricing</title>
  <meta content="Pricing" property="og:title">
  <meta content="Pricing" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
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

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-G9V0502V0F"></script>
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

  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
  ! function(o, c) {
    var n = c.documentElement,
      t = " w-mod-";
    n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
      .className += t + "touch")
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
  <!-- Facebook Pixel Code -->
  <script>
  ! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
      n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '464542611372585');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=464542611372585&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KXCKTT" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Menu  -->
  <?php include $config->linkPath('menu'); ?>
  <!-- Menu End -->

  <!-- INTRO -->
  <div class="int-back back-pri">
    <div class="int-content" style="padding: 100px 0px;">
      <div class="int-text">Best ROAS In The Industry<br><br>
        <p>Yup, It’s True!</p>
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

  <!-- ICONS -->
  <div class="pric-use">
    <section class="icon-sections">
      <div class="row rsrs">
        <?php foreach ($pricicon as $data) { ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="b-center">
            <img src="<?= $config->linkAsset('img/use/' . $data['img']); ?>" with="150" height="150">
            <h3 class="tpric-use">
              <?= $data['name'] ?>
            </h3>
            <p class="dpric-use">
              <?= $data['description'] ?>
            </p>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>
  </div>

  <!-- BLUE BOXES -->
  <div class="backfa" style="padding: 30px 0px;">
    <h2 class="label-web" style="">How Most Users Start With Shareity</h2>
    <div class="row-pric">
      <div class="col-md-4 pilot-box px-4 py-4" style="">
        <div>
          <h4 class="pricing-numbered-list mt-4">01</h4>
          <p class="pric-point">Create your account and setup your profile.</p>
        </div>
      </div>
      <div class="col-md-4 pilot-box-md px-4 py-4" style="">
        <div>
          <h4 class="pricing-numbered-list mt-4">02</h4>
          <p class="pric-point">Link a brand or cause to your account.</p>
        </div>
      </div>
      <div class="col-md-4 pilot-box px-4 py-4" style="">
        <div>
          <h4 class="pricing-numbered-list mt-4">03</h4>
          <p class="pric-point">Create a campaign/challenge. <br>
          Get creative, and track the data via the Dashboard ™.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- /.BLUE BOXES -->

  <!-- SALES PLANS -->
  <section id="switch">
    <div class="d-flex justify-content-center mt-5 price-switch-container">
      <div class="text-right pr-3 toggler toggler--is-active" id="filt-annually">
        Monthly 
      </div>
      <label class="switch toggler">
        <input type="checkbox" id="switcher" class="check">
        <span class="slider round" style="background:#E8ECEE;"></span>
      </label>
      <div class="toggler pl-3" id="filt-monthly">Annually <br>
        <span class="font-weight-bold" style="color:#04aded">~ (Save 25%)</span>
      </div>
    </div>
  </section>

  <section id="cardsPlans" class="my-5">
    <div class="price-comparison">
      <div id="toControl" class="row mx-auto">
        
        <?php foreach ($plans as $data) { ?>
        <div class="col-md-4 p-0">
          <div class="price-box">
          <a class="<?= $data['etiq'] ?>">RECOMMENDED</a>
            <h2 class="plans d-flex flex-column justify-content-center" >
              <?= $data['title'] ?></h2>
            <div class="px-4 pb-4">
              <div class="price-top mb-3" style="height: fit-content">
                <div class="price-container mt-4 h-100">
                  <div class="monthly price-wrapper mx-auto">
                    <span class="pricePlans mt-0">$</span>
                    <p class="pricePlans mt-0"><?= $data['monthly'] ?><sub>/mo</sub></p>
                  </div>
                  <div class="annually price-wrapper mx-auto hide">
                    <span class="pricePlans mt-0">$</span>
                    <p class="pricePlans mt-0"><?= $data['annual'] ?><sub>/mo</sub></p>
                  </div>
                  <div class="monthly">
										<p class="centered pay-structure"><?= $data['descM'] ?></p>
									</div>
                  <div class="annually hide">
										<p class="centered pay-structure"><?= $data['descA'] ?></p>
                  </div>
                </div>
                <div class="d-flex justify-content-center" style="text-align:center;">
                  <a class="btn-nb-2 btn" target="_blank" href="/book-a-demo">GET STARTED</a>
                </div>
              </div>
              <div class="pricing-feature py-3">
                <?= $data['list'] ?>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

      </div>
    </div>
  </section>

  <script>
  var e = document.getElementById('filt-annually'),
    d = document.getElementById('filt-monthly'),
    t = document.getElementById('switcher'),
    m = document.getElementsByClassName('annually'),
    y = document.getElementsByClassName('monthly');


  e.addEventListener('click', function() {
    t.checked = false;
    e.classList.add('toggler--is-active');
    d.classList.remove('toggler--is-active');
    for (var i = 0; i < m.length; i++) {
      m[i].classList.remove('hide');
    }
    for (var i = 0; i < y.length; i++) {
      y[i].classList.add('hide');
    }
  });

  d.addEventListener('click', function() {
    t.checked = true;
    d.classList.add('toggler--is-active');
    e.classList.remove('toggler--is-active');
    for (var i = 0; i < m.length; i++) {
      m[i].classList.add('hide');
    }
    for (var i = 0; i < y.length; i++) {
      y[i].classList.remove('hide');
    }
  });

  t.addEventListener('click', function() {
    d.classList.toggle('toggler--is-active');
    e.classList.toggle('toggler--is-active');
    for (var i = 0; i < m.length; i++) {
      m[i].classList.toggle('hide');
    }
    for (var i = 0; i < y.length; i++) {
      y[i].classList.toggle('hide');
    }
  })
  </script>
  <!-- /.SALES PLANS -->

  <!-- BRAND OR CAUSE SECTION -->
  <!-- <div class="nw-content-backg" style="margin: 20px 0px;">
    <h2 class="label-web" style="">Are you a Brand or Cause?</h2>
    <div class="row row-cards">
      <div class="w-col w-col-6">
        <div id="bra-card"  class="nw-cards" style="margin: 20px 0px">
          <div class="nw-card-header">BRANDS<br>
            <p class="font-weight-light">Build brand advocates</p>
          </div>
          <div class="card-body nw-card-body">
            <h2 class="price-text">$0.25<sup>USD</sup></h2>
            <p class="card-text pr-card-text">Cost Per Action/Selfie</p>
            <a class="btn-nb-2 btn" style="color: white;margin-top:1rem;" href="/book-a-demo">Get Started</a>
          </div>
        </div>
      </div>
      <div class="w-col w-col-6">
        <div id="cau-card" class="nw-cards" style="margin: 20px 0px">
          <div class="nw-card-header">CAUSES<br>
            <p class="font-weight-light">Empower your donors</p>
          </div>
          <div class="card-body nw-card-body" style="">
            <h2 class="price-text">FREE!</h2>
            <p class="card-text pr-card-text">Causes are completely free! </p>
            <a class="btn-nb-2 btn" style="color: white;margin-top:1rem;" href="/book-a-demo">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- /.BRAND OR CAUSE SECTION -->

  <!-- ADD ONS SECTION -->
  <div class="nw-content-backg" style="margin-bottom: 50px;">
    <h2 class="label-web" style="">Add-On Support Packages</h2>
    <?php foreach ($prices as $data) { ?>
    <div id="animpri"class="row-add">
      <div class="col-md-4 addons-left">
        <span class="dollar-sign mt-1" style="margin-left:0.2rem;">USD</span>
        <div class="d-flex h-100 align-items-center justify-content-center" style="color:white;">
          <div class="price-container flex-column mt-0 h-100 py-3 py-md-5" style="margin-top: 0rem;">
            <div class="price-wrapper mx-auto justify-content-center">
              <p class="price mt-0"><?= $data['title'] ?></p>
            </div>
            <div style="text-align: center;">
              <p class="centered price-strong"><?= $data['price'] ?></p>
              <p class="centered pay-structure">Per Campaign</p>
            </div>
            <a class="btn-nb-2 btn" style="color: white;margin-top:1rem;" href="/contact">Contact Us</a>
          </div>
        </div>
      </div>
      <div class="col-md-8 addons-right">
        <div class="pricing-features pl-0 py-3" style="margin-top: 2rem; width: 700px;">
          <p class=""><?= $data['list'] ?></p>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <!-- /.ADS ON SECTION -->
  <div class="backfa">
    <!--  FAQ -->
    <?php include $config->linkPath('frequent'); ?>
    <!--  /.FAQ -->
  </div>
  <!-- PARTNERS CAROUSEL -->
  <section class="container-slick" style="background-color: #FFFFFF; margin: 20px 0px;">
    <h3 class="nw-title-light" style="text-align:center; color: #505050">Join Thousands of Companies using Shareity</h3>
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

  <!-- ENDING -->
  <div class="end-web">
    <div class="end-content">
      <div class="end-text">Changing the world is as simple as <br>
       <i><p>Snap. Raise. Share<sup>TM</sup></p></i>
      </div>
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

  <!-- Slick Carousel -->
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
  <!--/.Slick Carousel -->

</body>

</html>