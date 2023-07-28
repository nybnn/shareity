<?php
  include './include/config.php';
  include './include/nwdata.php';
  include './include/team.php';
?>
<!DOCTYPE html>
<html data-wf-page="5f808516414aa175e2ad7953" data-wf-site="5f808516326cd92adf25095c">

<head>
  <meta charset="utf-8">
  <title>Shareity Speaks</title>
  <meta content="Shareity Speaks" property="og:title">
  <meta content="Shareity Speaks" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/css/responsive.css" rel="stylesheet" type="text/css">
  <link href="/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/shareity-com.webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/website.css" rel="stylesheet" type="text/css">
  <link href="/css/responsive-website.css" rel="stylesheet" type="text/css">
  <link href="/images/ss-favicon.jpg" rel="shortcut icon" type="image/x-icon">
  <link href="/images/ss-favicon.jpg" rel="apple-touch-icon">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
  WebFont.load({
    google: {
      families: [
        "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
        "Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic",
        "Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic", "Raleway:regular,900"
      ]
    }
  });
  </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
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
  <!-- Facebook Pixel Code -->
  <script>
  ! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
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

<body id="speaksevent">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KXCKTT" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Menu  -->
  <?php include $config->linkPath('menu'); ?>
  <!-- Menu End -->

  <!-- Change Logo Navbar -->
  <script>
  var pathArray = window.location.pathname.split('/');
  var partof = pathArray[1];

  if (partof == 'event' || 'event.php') {
    const logoGN =
      '<a href="/speaks"><img src="/images/ss-logo.png" style="width: 15%; position: relative; min-width: 130px;" alt=""></a>';
    document.getElementById("logo").innerHTML = logoGN;
  }
  </script>

  <script type="text/javascript">
  var pathArray = window.location.pathname.split('/');
  var product = pathArray[2];
  console.log('product=', product);
  if (product === 'login') {
    console.log('Data Login')
    window.onload = getDataLogin();
  }
  //--------------DATA SPEAKS------------------//
  function getDataLogin() {
    /*Config */
    var domUrl = window.location.hostname;
    //console.log('DOMINIO:::: ',domUrl)

    var endpoint = 'https://apidev.shareity.com/api/web/speak/index?limit=20';
    //console.log('ENDPOINT::::',endpoint) 

    if (domUrl == 'shareity.com') {
      var endpoint = endpoint.replace('apidev', 'api');
    }
    //console.log('NUEVO::::', endpoint)
    fetch(endpoint)
      .then(function(response) {
        if (response.ok) {
          return response.json();
        }
      })
      .then(function(data) {
        console.log('Data = ', data);

        //HIDE
        document.getElementById('tohide').style.display = "none";
        document.getElementById('details').style.display = "none";

        forlogin.innerHTML = `
        <div class="nw-content-backg my-5">
          <div class="stylemodal" style="background: #fafafa; max-width: 600px;">
            <img src="/images/ss-logo.png" style="width: 35%;margin: auto;">
            <h3 class="my-4" style="font-family: 'Gotham', sans-serif;color:#8C8C8C; font-size: 20px;">Please sign in to continue</h3>
            <div class="row justify-content-center" id="contact-form">
              <div class="col-md-10 form-group">
                <label class="label-form">Email</label>
                <input class="form-control" type="text" placeholder="" />
                <span class="" />
              </div>
              <div class="col-md-10 form-group">
                <label class="label-form">Password</label>
                <input class="form-control" type="password" placeholder="" />
                <span class="" />
              </div>
              <div class="col-md-12 form-group text-center">
                <button type="submit" class="btn-nb-2 btn" onclick="location.href='javascript:openLive()'">
                  SUBMIT
                </button>
                <br>
                <span class="" />
              </div>
            </div>
          </div>
        </div>
        `
      })
      .catch(function(err) {
        console.error(err);
      });
  }

  function openLive() {
    window.open('/slugforevent');
  }
  </script>
  <!-- INTRO -->
  <div class="int-back back-speak2" style="  background-image: url(/images/KH-and-Shareity-On-The-Move.jpg);">
    <div class="int-content-lat">
      <div class="int-text-lat" style="margin-bottom: 20px;">
        Shareity Investment Event 2022
      </div>
      <div class="airdate">
        March 2nd, 2022 | 3-4pm EST
      </div>
      <div class="d-flex align-items-center justify-content-left mt-2">
        <a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=M2k4bDkwZ2VuYmhmbXNuYjUyMjU0dGptZHMgdHlsZXJAc2hhcmVpdHkuY29t&tmsrc=tyler%40shareity.com"
          target="_blank"><img class="ml-2 mx-1" style="width:30px;" src="/images/google.png"></a>
        <a href="/include/Shareity-Investment-Event-2022.ics"><img class="mx-1" style="width:30px;"
            src="/images/apple.png"></a>
        <a href="/include/Shareity-Investment-Event-2022.ics"><img class="mx-1" style="width:30px"
            src="/images/outlook.png"></a>
      </div>
      <a type="button" data-toggle="modal" data-target="#RegistPopUp" class="btn-nb-2 btn"
        style="margin:30px 0px; padding: 0.375rem 2.75rem;">REGISTER NOW!</a>
      <div class="speak-social-icons col-4 p-0">
        <div class="speak-grid-item">
          <a class="speak-event-icon" href="javascript: void(0);">
            <img src="/images/f-i.png" class="speak-imgsb">
          </a>
        </div>
        <div class="speak-grid-item">
          <a class="speak-event-icon" href="javascript: void(0);">
            <img src="/images/t-i.png" class="speak-imgsb">
          </a>
        </div>
        <div class="speak-grid-item">
          <a class="speak-event-icon" href="javascript: void(0);">
            <img src="/images/l-i.png" class="speak-imgsb">
          </a>
        </div>
        <div class="speak-grid-item">
          <a class="speak-event-icon" onclick="getlink();">
            <img src="/images/c-i.png" class="speak-imgsb">
            <span id="copied" class="span-event-speak"></span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div id="forlogin"></div>

  <!-- Details event -->
  <div id="details" class="nw-content-wrap">
    <h2 class="label-web my-5 text-uppercase">About the event</h2>
    <div class="nw-layout-grid about-grid nw-grid" style="">
      <div id="w-node-2">
        <div class="nw-section-wrap" id="event-text">
          <p class="nw-subt" style="text-align:justify">Social media advertising has become noise resulting in
            desensitized users,
            who are pre-conditioned to ignore ads. Shareity has created a transformative marketing approach
            called “Fundertising” that combines brand marketing, cause awareness, corporate giving, and social
            sharing into emotionally authentic calls to action. We are seeking up to $5 million in funding.
            Combined with cash flows will cover company operations for ~20-24 months.</p>
          <a type="button" data-toggle="modal" data-target="#RegistPopUp" class="btn-nb-2 btn"
            style="margin:30px 0px; padding: 0.375rem 2.75rem;">REGISTER NOW!</a>
          <!-- <a type="button"
            href="https://calendar.google.com/calendar/u/0/r/eventedit?text=Shareity+Investor+Event+2022&dates=20220302T190000Z/20220302T19550Z&details=For+details,+go+here:%0Ahttps://shareity.com/speaks-event"
            target="_blank" class="btn-nb-2 btn event-btn mt-3">
            <img class="icon-event" src="/images/eventcalend.png"></img>
            &nbsp;&nbsp;Add to my calendar</a> -->
        </div>
      </div>
      <img src="/images/KH-and-Shareity-on-jet.png" class="nw-image-event">
    </div>
  </div>


  <div id="tohide">
    <!-- Speakers -->
    <div class="backfa">
      <h2 class="label-web mt-5 text-uppercase">Our Speakers</h2>
      <div class="speaker-container">
        <div class="row mx-0 justify-content-center">
          <?php foreach ($speakers as $data) { ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 my-4">
            <div class="profile-teampic">
              <img src="<?= $config->linkAsset('img/team/speakers/' . $data['photo']); ?>"
                style="width: 60%; height: 60%;">
              <div class="team-class">
                <div class="speak-name"><?= $data['name']; ?></div>
                <div class="speak-desc"><?= $data['descrip']; ?></div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <!-- /Speakers -->

    <!-- Timeline Schedule -->
    <h2 class="label-web my-5 text-uppercase">Schedule</h2>
    <section class="timesched">
      <div id="timeSchedule" class="container">
        <?php foreach ($times as $data) { ?>
        <div class="timesched-item">
          <div class="timesched-img"></div>
          <div class="timesched-content">
            <h2 class="nw-title" style="color: #04aded; <?= $data['aligname'] ?>"><?= $data['name'] ?></h2>
            <h2 class="nw-title-light" style="color: #707070; <?= $data['alighour'] ?>"><?= $data['hour'] ?></h2>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>
    <!-- /Timeline Schedule -->


    <!-- Counter Down -->
    <div class="int-back back-speak2" style="background-image: url(/images/Registerclose.png); padding:120px 0px;">
      <div class="int-text" style="margin-bottom: 10px;">
        <img src="/images/record.png" class="record">
        REGISTRATION CLOSES IN
      </div>
      <link rel="stylesheet" href="/css/flipdown.css" />
      <script src="/js/flipdown.js"></script>
      <div id="flipdown" class="flipdown"></div><br><br><br>
      <script>
      var flipdown = new FlipDown(1646247600, {
        theme: 'light' // or dark
      });
      window.onload = flipdown.start();
      </script>
      <a type="button" data-toggle="modal" data-target="#RegistPopUp" class="btn-nb-2 btn"
        style="margin:30px 0px; padding: 0.375rem 2.75rem;">REGISTER NOW!</a>
    </div>

  </div>

  <!--  footer -->
  <?php include $config->linkPath('footer'); ?>
  <!--  /footer -->

  <!-- MODALS -->
  <!-- Registration PopUp -->
  <div class="modal fade" id="RegistPopUp" tabindex="-1" role="dialog" aria-labelledby="RegistPopUp" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-regist">
        <img src="/images/ss-logo.png" style="width: 35%;margin: auto;">
        <iframe id="se-frame"
          src="https://docs.google.com/forms/d/e/1FAIpQLSdLFp5BzlrGLZNlrVbbsl4l_Toknq6jnuXjwkeib2iPYIhfig/viewform?embedded=true"
          width="600" height="1100" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        <!-- <div class="row" id="contact-form">
          <div class="col-md-6 form-group">
            <label class="label-form">Full Name</label>
            <input class="form-control" type="text" placeholder="" />
            <span class="" />
          </div>
          <div class="col-md-6 form-group">
            <label class="label-form"></label>
            <input class="form-control" type="text" placeholder="" />
            <span class="" />
          </div>
          <div class="col-md-12 form-group">
            <label class="label-form">Work Email Address</label>
            <input class="form-control" type="text" placeholder="" />
            <span class="" />
          </div>
          <div class="col-md-12 form-group">
            <label class="label-form">Company Name</label>
            <input class="form-control" type="text" placeholder="" />
            <span class="" />
          </div>
          <div class="col-md-12 form-group">
            <label class="label-form">Company Website</label>
            <input class="form-control" type="text" placeholder="" />
            <span class="" />
          </div>
          <div class="col-md-12 form-group text-center">
            <button type="submit" class="btn-nb-2 btn" data-dismiss="modal" data-toggle="modal"
              data-target="#ConfRegist" onclick="">
              SUBMIT
            </button>
            <br>
            <span class="" />
          </div>
        </div> -->
        <!-- <iframe id="registerPopup" src="https://forms-us1-25313-761-31519-505.public.500apps.org/forms" height="750px"
          width="" frameborder="0"></iframe> -->
      </div>
    </div>
  </div>
  <!-- /.Registration PopUp -->
  <!-- Registration confirmation -->
  <div class="modal fade" id="ConfRegist" tabindex="-1" role="dialog" aria-labelledby="ConfRegist" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-regist text-center">
        <img src="/images/ss-logo.png" style="width: 35%;margin: auto;">
        <img src="/images/approved.png" style="width: 30%;margin: auto;" class="my-4">
        <h2 style="font-family: 'Gotham', sans-serif;font-weight: 600; color:#8C8C8C; font-size: 24px">Your Registration
          was Successful!</h2>
        <h3 style="font-family: 'Gotham', sans-serif;color:#8C8C8C; font-size: 20px">Please check your email for details
        </h3>
        <img src="/images/clock.png" style="width: 8%;margin: auto;" class="mt-4 mb-3">
        <h2 style="font-family: 'Gotham', sans-serif;font-weight: 600; color:#8C8C8C; font-size: 22px">December, 01
          3:00pm EST</h2>
        <div class="d-flex align-items-center justify-content-center mt-2">
          <img class="mx-1" style="width:10%;height:10%" src="/images/google.png">
          <img class="mx-1" style="width:8%;height:8%" src="/images/apple.png">
          <img class="mx-1" style="width:9%;height:9%" src="/images/outlook.png">
        </div>
      </div>
    </div>
  </div>
  <!-- /.Registration confirmation -->
  <!-- /.MODALS -->


  <script>
  function getlink() {
    var aux = document.createElement("input");
    aux.setAttribute("value", window.location.href);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
    copied.style.color = 'green'
    copied.innerText = 'Copied link!'
    setInterval(function() {
      copied.innerText = ''
    }, 4000)
  }
  </script>

  <script>
  // action button
  function sendNewsletter() {
    let newsletter = document.getElementById('newsletter')
    let message = document.getElementById('message')

    if (!validateEmail(newsletter.value)) {
      message.innerText = 'invalid email'

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
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f808516326cd92adf25095c"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
  </script>
  <script src="/js/webflow.js" type="text/javascript"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>