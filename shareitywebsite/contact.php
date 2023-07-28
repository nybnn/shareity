<?php
  include './include/config.php';
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Oct 13 2020 19:19:42 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5f808516414aa175e2ad7953" data-wf-site="5f808516326cd92adf25095c">

<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
  <meta content="Contact Us" property="og:title">
  <meta content="Contact Us" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/responsive.css" rel="stylesheet" type="text/css">
  <link href="/css/shareity-com.webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/website.css" rel="stylesheet" type="text/css">
  <link href="/css/responsive-website.css" rel="stylesheet" type="text/css">
  <link href="/images/shareity.ico" rel="shortcut icon" type="image/x-icon">
  <link href="/images/shareity.ico" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
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
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
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

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KXCKTT" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Menu  -->
  <?php include $config->linkPath('menu'); ?>
  <!-- Menu End -->
  <div class="int-back back-cont">
    <div class="int-content" style="padding: 100px 0px;">
      <div class="int-text">
        Contact Us!
        <p class="inline-p" style="max-width: 600px; margin: auto!important; line-height: 1.5;">
          Give us some information on what you're looking for and our team will reach out as soon as possible.
        </p>
      </div>
    </div>
  </div>

  <div class="formcont container" style="padding: 60px;">
    <div class="row" id="contact-form">
      <div class="col-md-6 form-group">
        <input id="firstname" class="form-control" type="text" placeholder="First Name" />
        <span id="fnmsg" class="span-cont-form"></span>
      </div>
      <div class="col-md-6 form-group">
        <input id="lastname" class="form-control" type="text" placeholder="Last Name" />
        <span id="lnmsg" class="span-cont-form"></span>
      </div>
      <div class="col-md-6 form-group">
        <input id="email" class="form-control" type="text" placeholder="Email Address" />
        <span id="emsg" class="span-cont-form"></span>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12 col-sm-6">
            <input id="company" class="form-control" type="text" placeholder="Company Name" />
            <span id="cmpny" class="span-cont-form"></span>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12 col-sm-6">
            <br>
            <textarea class="form-control" name="" id="messge" placeholder="Message" cols="10" rows="5"></textarea>
            <span id="msg" class="span-cont-form"></span>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-12 text-center">
        <button id="sendMessage" class="my-2 btn btn-nb-2" onclick="sendFormContact()">Send message</button>
        <span id="dispatch" class="span-cont-form" style="text-align: left;"></span>
      </div>
    </div>
  </div>


  <div class="divider"></div>
  <div class="motto-wrap">
    <div class="label-contact">Our locations</div>
    <div class="heading-jumbo-small label-ff-1" style="font-size: 18px;">24 School Street, Boston Massachusetts, 02108
    </div>
  </div>
  <div class="card-grid-container" id="contact-grid" style="padding-bottom: 70px;">
    <div id="w-node-68bff385190f-e2ad7953">
      <h3 class="label-cc">General Inquiries</h3>
      <p class="label-cc-desc" style="margin-inline-start: 0px;">info@shareity.com</p>
    </div>
    <div id="w-node-68bff385190f-e2ad7953">
      <h3 class="label-cc">Sales Team</h3>
      <p class="label-cc-desc" style="margin-inline-start: 0px;">sales@shareity.com</p>
    </div>
    <div id="w-node-68bff385190f-e2ad7953">
      <h3 class="label-cc">Support Team</h3>
      <p class="label-cc-desc" style="margin-inline-start: 0px;">support@shareity.com</p>
    </div>
  </div>

  <!--  footer -->
  <?php include $config->linkPath('footer'); ?>
  <!--  /footer -->

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
  /*Newsletter sent*/
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

  //Envio de Formulario 
  function sendFormContact() {
    //data
    let firstname = document.getElementById('firstname')
    let lastname = document.getElementById('lastname')
    let email = document.getElementById('email')
    let company = document.getElementById('company')
    let messge = document.getElementById('messge')

    //span
    let emsg = document.getElementById('emsg')
    let fnmsg = document.getElementById('fnmsg')
    let lnmsg = document.getElementById('lnmsg')
    let cmpny = document.getElementById('cmpny')
    let msg = document.getElementById('msg')

    let inputValidate = validateEmptly(firstname.value, lastname.value, email.value, company.value, messge.value)
    let valid = []

    if (inputValidate.length == 0) {
      fetchContactForm(firstname.value, lastname.value, email.value, company.value, messge.value)
    }

    inputValidate.forEach(function(item, index) {

      switch (item) {
        case 'firstname':
          fnmsg.innerText = '*First Name required';
          document.getElementById("firstname").classList.add("borderColor");
          setInterval(function() {
            fnmsg.innerText = '';
            document.getElementById("firstname").classList.remove("borderColor");
          }, 3000)
          break;
        case 'lastname':
          lnmsg.innerText = '*Last Name required'
          document.getElementById("lastname").classList.add("borderColor");
          setInterval(function() {
            lnmsg.innerText = '';
            document.getElementById("lastname").classList.remove("borderColor");
          }, 3000)
          break;

        case 'email':
          emsg.innerText = '*Email required';
          document.getElementById("email").classList.add("borderColor");
          setInterval(function() {
            emsg.innerText = ''
            document.getElementById("email").classList.remove("borderColor");
          }, 3000)
          break;

        case 'company':
          cmpny.innerText = '*Company required';
          document.getElementById("company").classList.add("borderColor");
          setInterval(function() {
            cmpny.innerText = '';
            document.getElementById("company").classList.remove("borderColor");
          }, 3000)
          break;

        case 'messge':
          msg.innerText = '*Message required';
          document.getElementById("messge").classList.add("borderColor");
          setInterval(function() {
            msg.innerText = ''
            document.getElementById("messge").classList.remove("borderColor");
          }, 3000)
          break;
        case 'invalid':
          emsg.innerText = '*Invalid email';
          document.getElementById("email").classList.add("borderColor");
          setInterval(function() {
            emsg.innerText = ''
            document.getElementById("email").classList.remove("borderColor");
          }, 5000)
          break;
      }

    });
    /*   function abrirNuevoTab(url) {
            // Abrir nuevo tab
            var win = window.open(url);
          }
          $('#sendMessage').click(function(){
            abrirNuevoTab('/confirmation')
          }) */
  }
  // validate emptly field
  function validateEmptly(firstname, lastname, email, company, messge) {
    let arr = []

    if (firstname == null || firstname == '') {
      arr.push('firstname')
    }

    if (lastname == null || lastname == '') {
      arr.push('lastname')
    }

    if (email == null || email == '') {
      arr.push('email')
    } else if (!validateEmail(email)) {
      arr.push('invalid')
    }

    if (company == null || company == '') {
      arr.push('company')
    }

    if (messge == null || messge == '') {
      arr.push('messge')
    }

    return arr

  }
  var apiUrlC = 'https://apidev.shareity.com/api/web/user/contact-from'

  var domUrl = window.location.hostname;

  if (domUrl == 'localhost') {
    var apiUrlC = apiUrlC.replace('apidev', 'api');
  }
  //console.log('NUEVO:::::',apiUrlC)
  function fetchContactForm(firstname, lastname, email, company, messge) {


    // Build formData object.
    let formData = new FormData()
    formData.append('firstname', firstname)
    formData.append('lastname', lastname)
    formData.append('email', email)
    formData.append('company', company)
    formData.append('messge', messge)

    fetch(apiUrlC, {
        body: formData,
        method: 'post'
      }).then(function(response) {
        if (response.ok) {
          document.getElementById("firstname").value = '';
          document.getElementById("lastname").value = '';
          document.getElementById("email").value = '';
          document.getElementById("messge").value = '';
          document.getElementById("company").value = '';
          dispatch.style.color = 'green'
          dispatch.innerText = 'Your message has been sent!'
          console.log(response)

          setInterval(function() {
            dispatch.innerText = ''
          }, 2000)

        } else {
          throw 'ajax call failed'
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

  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/2675419.js"></script>
  <!-- End of HubSpot Embed Code -->

</body>

</html>