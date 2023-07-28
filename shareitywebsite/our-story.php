<?php
  include './include/config.php';
	include './include/nwdata.php';
  include './include/use.php';
  include './include/team.php';
  ?>
<!DOCTYPE html>
<html data-wf-page="5f808516414aa175e2ad7953" data-wf-site="5f808516326cd92adf25095c">

<head>
  <meta charset="utf-8">
  <title>Our Story</title>
  <meta content="Our Story" property="og:title">
  <meta content="Our Story" property="twitter:title">
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

<body id="our-story">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KXCKTT" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Menu  -->
  <?php include $config->linkPath('menu'); ?>
  <!-- Menu End -->

  <!-- INTRO -->
  <div class=" int-back back-story">
    <div class="int-content" style="padding: 100px 0px;">
      <div class="int-text">
        <p>OUR STORY</p><br>
        A Look Under the Hood<br><br>
        <p class="inline-p">
          Learn about the origin, purpose, mission, vision, values and team
        </p>
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

  <!-- OUR STORY -->
  <div class="nw-container">
    <section id="story">
      <h2 class="label-web">Our Story</h2>
      <?php foreach ($rowstory as $data) { ?>
      <div class="row-story">
        <div class="col-lg-6">
          <img class="blur lazyload " src="<?= $config->linkAsset('images/' . $data['img']); ?>" style="">
        </div>
        <div class="col-lg-5">
          <h3 class="nw-title"><?= $data['title'] ?></h3>
          <p class="nw-subt"><?= $data['text'] ?></p>
          <span class="timeline"></span>
          <label class="timeline-event-icon"></label>
        </div>
      </div>
      <?php } ?>
  </div>
  </section>
  </div>
  <!-- /.OUR STORY -->

  <!-- QUESTIONS -->
  <section id="quest-sect">
    <div class="quest-sect-background">
      <?php foreach ($questsect as $data) { ?>
      <div class="row-q">
        <div class="col-md-3">
          <h3><?= $data['h3'] ?></h3>
          <h2><?= $data['h2'] ?></h2>
        </div>
        <div class="col-md-8">
          <p class="nw-subt"><?= $data['txt'] ?></p>
        </div>
      </div>
      <?php } ?>
    </div>
  </section>
  <!--/.QUESTIONS -->

  <!-- CORE VALUES -->
  <div class="nw-container">
    <section id="core-values">
      <h2 class="label-web">Our Guiding Core Values</h2>
      <h3 class="nw-subt" style="text-align:center;">Filler Text.</h3>
      <div class="icon-text-points">
        <?php foreach ($storyicon as $data) { ?>
        <div class="row">
          <div class="col-lg-8">
            <div class="row lg-4">
              <div class="col-sm-3">
                <img class="value-icons" src="<?= $config->linkAsset('img/use/' . $data['img']); ?>">
              </div>
              <div class="col-sm-9" style="align-self: center;">
                <h4 class="nw-title" style="font-size:20px"><?= $data['sent'] ?></h4>
                <p class="nw-subt"><?= $data['subt'] ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>
  </div>
  <!--/.CORE VALUES  -->

  <!-- BIG BUTTON -->
  <div class="mid-bigbutton">
    <div class="int-content" style="padding: 100px 0px; text-align: -webkit-center;">
      <a class="big-button" role="button" href="/good-news" target="_blank">
        Learn more about the culture and careers at shareity
      </a>
    </div>
  </div>
  <!-- /.BIG BUTTON -->

  <!-- OUR TEAM  -->
  <section id="team">
    <h2 class="label-web">Our Team</h2>

    <h3 class="label-team">Executive Team</h3>
    <div class="team-container">
      <div class="row-team">
        <?php foreach ($teamppal as $data) { ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="profile-teampic">
            <img src="<?= $config->linkAsset('img/team/photos/' . $data['photo']); ?>" style="width: 60%; height: 60%;">
            <!--div class="team-details"-->
            <div class="team-class">
              <div class="profile-teamtitle-name"><?= $data['name']; ?></div>
              <div class="profile-teamtitle-job"><?= $data['charge']; ?></div>
            </div>
            <!--/div-->
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

    <h3 class="label-team">Marketing & More</h3>
    <div class="team-container">
      <div class="row-team">
        <?php foreach ($teammark as $data) { ?>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="profile-teampic">
            <img src="<?= $config->linkAsset('img/team/photos/' . $data['photo']); ?>" style="width: 40%; height: 40%;">
            <!--div class="team-details"-->
            <div class="team-class">
              <div class="profile-teamtitle-name"><?= $data['name']; ?></div>
              <div class="profile-teamtitle-job"><?= $data['charge']; ?></div>
            </div>
            <!--/div-->
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

    <div class="backfa">
      <h3 class="label-team">Advisory Board</h3>
      <div class="team-container">
        <div class="row-team" style="background-color: #fafafa;">
          <?php foreach ($teamadv1 as $data) { ?>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="profile-teampic">
              <img src="<?= $config->linkAsset('img/team/photos/' . $data['photo']); ?>"
                style="width: 60%; height: 60%;">
              <!--div class="team-details"-->
              <div class="team-class">
                <div class="profile-teamtitle-name"><?= $data['name']; ?></div>
              </div>
              <!--/div-->
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="team-container">
        <div class="row-team" style="background-color: #fafafa;">
          <?php foreach ($teamadv2 as $data) { ?>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="profile-teampic">
              <img src="<?= $config->linkAsset('img/team/photos/' . $data['photo']); ?>"
                style="width: 60%; height: 60%;">
              <!--div class="team-details"-->
              <div class="team-class">
                <div class="profile-teamtitle-name"><?= $data['name']; ?></div>
              </div>
              <!--/div-->
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <h3 class="label-team">Developers & Design</h3>
    <div class="team-container">
      <div class="row-team">
        <?php foreach ($teamcartoon as $data) { ?>
        <div class="col-lg-3">
          <div class="profile-teampic">
            <img src="<?= $config->linkAsset('img/team/cartoon/' . $data['photo']); ?>">
            <!--div class="team-details"-->
            <div class="team-class">
              <div class="profile-teamtitle-name"><?= $data['name']; ?></div>
              <div class="profile-teamtitle-job"><?= $data['charge']; ?></div>
            </div>
            <!--/div-->
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- /.OUR TEAM -->

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

  <!-- Video mediabox -->
  <script src="/js/mediabox.js"></script>
  <script type="text/javascript">
  MediaBox('.mediabox');
  </script>
  <script src="/js/lazysizes.min.js" async=""></script>
  <!-- /.Video mediabox -->

</body>

</html>