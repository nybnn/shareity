<?php
  include './include/config.php';
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
  <meta name="keywords"
		content="shareity speaks">
  <!-- <meta name="description" content=""> -->
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

<body>
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
  //console.log('A VERRR', partof)
  if (partof == 'speaks' || 'slug') {
    const logoGN =
      '<a href="/speaks"><img src="/images/ss-logo.png" style="width: 15%; position: relative; min-width: 130px;" alt=""></a>';
    document.getElementById("logo").innerHTML = logoGN;
  }
  </script>

  <script type="text/javascript">
  let controltrend = 0,
    newdatrend = [];
  let controllat = 0,
    newdatlat = [];
  var pathArray = window.location.pathname.split('/');
  var product = pathArray[2];
  console.log('product=', product);
  if (product == null || undefined || '' || product === "") {
    console.log('Data Speak')
    window.onload = getDataSpeak();
  } else {
    console.log('Data Custom')
    window.onload = getDataSlug();
  }

  //--------------DATA SPEAKS------------------//
  function getDataSpeak() {


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
        document.getElementById('customData').style.display = "none";
        document.getElementById('slugCarr').style.display = "none";

        // Intro
        speakInt.innerHTML = `
            <div class="int-back back-speak1">
              <div class="intro-content-land">
                <img class="land-logo" src="/images/ss-logo-2.png">
              </div>
            </div>
            `

        // Carrusel
        let datos = data.recommend;
        let newdat = Array.from(datos);
        speakCarr.innerHTML = `
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#speakCarr" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#speakCarr" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
              <button type="button" data-bs-target="#speakCarr" data-bs-slide-to="2" aria-label="Slide 3" class="active"
                aria-current="true"></button>
            </div>
            <div class="carousel-inner">
              <div id="sp1" class="carousel-item">
              </div>
              <div id="sp2" class="carousel-item">
              </div>
              <div id="sp3" class="carousel-item active">
              </div>
            </div>
            <a class="carousel-control-prev carousel-control-land" href="#speakCarr" role="button" data-slide="prev">
              <span class="carousel-control-prev-land carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next carousel-control-land" href="#speakCarr" role="button" data-slide="next">
              <span class="carousel-control-next-icon carousel-control-next-land" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            `
        for (let i = 0; i <= 0; i++) {
          sp1.innerHTML += `
              <a class="opacity" href="/speaks/${newdat[i].slug}">
                <img class="opa-img" src="https://chgs.shareity.me/${newdat[i].thumbnail}" alt="">
              </a>`
        }
        for (let i = 1; i <= 1; i++) {
          sp2.innerHTML += `
              <a class="opacity" href="/speaks/${newdat[i].slug}">
                <img class="opa-img" src="https://chgs.shareity.me/${newdat[i].thumbnail}" alt="">
              </a>`
        }
        for (let i = 2; i <= 2; i++) {
          sp3.innerHTML += `
              <a class="opacity" href="/speaks/${newdat[i].slug}">
                <img class="opa-img" src="https://chgs.shareity.me/${newdat[i].thumbnail}" alt="">
              </a>`
        }


        // Latest
        lat.innerHTML = `
            <h3 class="nw-title" style="padding-top:30px">Latest</h3>
            <div id="latCards" class="row" style="margin: 30px 0px">
            </div>
            `
        let valorl = data.latest
        newdatlat = Array.from(valorl);
        console.log('ARREGLO LATEST', newdatlat);
        loadLatest();

        loadLat.innerHTML = `
            <div class="elementor-button-wrapper" >
              <a href="javascript:void(0)" onclick="loadLatest()" style="text-decoration:none" role="button">
                <span class="elementor-button-content">
                  <span class="elementor-button-text">LOAD MORE
                    <span class="iconForward">❯</span>
                  </span>
                </span>
              </a>
            </div>`

        //Trending 
        trend.innerHTML = `
            <h3 class="nw-title">Trending</h3>
            <div id="trendCards" class="row" style="margin: 30px 0px">
            </div>
            `
        let valort = data.trending
        newdatrend = Array.from(valort);
        console.log('ARREGLO TRENDING', newdatrend);
        loadTrend();

        loadtrend.innerHTML = `
            <div class="elementor-button-wrapper" style="padding-bottom: 30px">
              <a href="javascript:void(0)" onclick="loadTrend()" style="text-decoration:none" role="button">
                <span class="elementor-button-content">
                  <span class="elementor-button-text">LOAD MORE
                    <span class="iconForward">❯</span>
                  </span>
                </span>
              </a>
            </div>`
      })
      .catch(function(err) {
        console.error(err);
      });
  }

  function loadTrend() {
    let limit = controltrend == 0 ? 2 : controltrend + 4;
    controltrend = controltrend == 0 ? 0 : controltrend++;
    for (let i = controltrend; i <= limit; i++) {
      controltrend++;
      var pictrend = newdatrend[i].thumbnail;
      var slugtrend = newdatrend[i].slug;
      trendCards.innerHTML += `
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card py-3" style="border: 0px">
            <a class="opacity" href="/speaks/${slugtrend}">
              <img class="opa-img" src="https://chgs.shareity.me/${pictrend}">
            </a>
          </div>
        </div>
        `
    }
  }

  function loadLatest() {
    let limit = controllat == 0 ? 2 : controllat + 4;
    controllat = controllat == 0 ? 0 : controllat++;
    for (let i = controllat; i <= limit; i++) {
      controllat++;
      var piclat = newdatlat[i].thumbnail;
      var sluglat = newdatlat[i].slug;
      latCards.innerHTML += `
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card py-3" style="border: 0px">
            <a class="opacity" href="/speaks/${sluglat}">
              <img class="opa-img" src="https://chgs.shareity.me/${piclat}">
            </a>
          </div>
        </div>
        `
    }
  }

  //--------------/DATA SPEAKS------------------//

  //--------------DATA SLUGS------------------//
  function getDataSlug() {

    /*Buscar por pathname*/
    var pathArray = window.location.pathname.split('/');
    var SlugProd = pathArray[2];
    /*Config */
    var domUrl = window.location.hostname;
    var url = `https://apidev.shareity.com/api/web/speak/single-speak?slug=${SlugProd}`

    if (domUrl == 'shareity.com') {
      var url = url.replace('apidev', 'api');
    }
    fetch(url)
      .then(function(response) {
        if (response.ok) {
          return response.json();
        }
      })
      .then(function(data) {
        console.log('Data = ', data);
        var title = data.single.title;
        var header = data.single.headerImg;;
        var dateString = data.single.airDate.replace(/\s+/g, 'T');
        var dateObject = new Date(dateString);
        var options = {
          day: 'numeric',
          month: 'long',
          year: 'numeric',
          hour: 'numeric',
          hour12: true
        };
        var datecomplete = dateObject.toLocaleDateString('en-US', options)

        var offset = -(new Date(dateString).getTimezoneOffset() / 60)
        console.log(offset);
        var mult = dateObject.getHours();
        console.log(dateString);

        var url1 = data.single.url;
        var url2 = url1.replace('youtu.be', 'youtube.com/embed');
        var urlYT = url2 + '?rel=0&modestbranding=0';
        //console.log('PA VEER==', urlYT, 'fecha=',datecomplete) ;


        var urlencode = encodeURIComponent(window.location.href)
        var urlimg = encodeURIComponent('https://chgs.shareity.me/' + data.single.filename);
        var urltitle = encodeURIComponent(data.single.title);
        var appid = '1514861518800355';

        //HIDE
        document.getElementById("speakInt").style.display = "none";
        document.getElementById("speakCarr").style.display = "none";
        document.getElementById("lat").style.display = "none";
        document.getElementById("loadLat").style.display = "none";
        document.getElementById("trend").style.display = "none";
        document.getElementById("loadtrend").style.display = "none";


        customData.innerHTML = ` 
          <div class="int-back back-speak2" style="  background-image: url(https://chgs.shareity.me/${header});">
            <div class="int-content-lat">
              <div class="int-text-lat" style="margin-bottom: 10px;">
              ${title}
              </div>
              <div class="airdate">AIR DATE: ${datecomplete} EST
                <div class="speak-social-icons col-4 p-0" style="margin-left:60px">
                  <div class="speak-grid-item">
                    <a class="speak-icon" href="javascript: void(0);" 
                    onclick="window.open('https://www.facebook.com/dialog/feed?app_id=${appid}&link=${urlencode}&name=${urltitle}&picture=${urlimg}&redirect_uri=https://www.facebook.com','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
                      <img src="/images/f-i.png" class="speak-imgsb">
                    </a>
                  </div>
                  <div class="speak-grid-item">
                    <a class="speak-icon" href="javascript: void(0);" onclick="window.open('http://twitter.com/share?url=${window.location.href}&text=${urltitle}','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
                      <img src="/images/t-i.png" class="speak-imgsb">
                    </a>
                  </div>
                  <div class="speak-grid-item">
                    <a class="speak-icon" href="javascript: void(0);" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=${urlencode}&title=${urltitle}','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
                      <img src="/images/l-i.png" class="speak-imgsb">
                    </a>
                  </div>
                  <div class="speak-grid-item">
                    <a class="speak-icon" onclick="getlink();">
                      <img src="/images/c-i.png" class="speak-imgsb">
                      <span id="speakcp" class="span-speak"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="intro-land2">
            <div class="intro-content-land2">
              <iframe src="${urlYT}" title="${title}"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
            </div>
          </div>
          `

        let datos = data.trending;
        let newdatslug = Array.from(datos);
        slugCarr.innerHTML = `
            <!--Indicators-->
            <ol class="carousel-indicators carousel-control-land">
              <li data-target="#slugCarr" data-slide-to="0" class="active"></li>
              <li data-target="#slugCarr" data-slide-to="1"></li>
            </ol>
            <!--/.Indicators-->
            <!-- Slides-->
            <div class="carousel-inner" role="listbox" style="text-align: center;">
              <!--First slide-->
              <div class="carousel-item active">
                <div id="sps1" class="row row-land">
                </div>
              </div>
              <!--/.First slide-->
              <!--Second slide-->
              <div class="carousel-item">
                <div id="sps2" class="row row-land">
                </div>
              </div>
              <!--/.Second slide-->
            </div>
            <!--/.Slides-->

            <a class="carousel-control-prev carousel-control-land" href="#slugCarr" role="button" data-slide="prev">
              <span class="carousel-control-prev-land carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next carousel-control-land" href="#slugCarr" role="button" data-slide="next">
              <span class="carousel-control-next-icon carousel-control-next-land" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          `
        console.log('ARREGLO CARRUSEL SLUGG::::', newdatslug)
        for (let i = 0; i <= 3; i++) {
          sps1.innerHTML += `
              <div  class="col-2 col-land">
                <div class="card" style="border: 0px">
                  <div class="row row-little-land">
                    <a class="opacity" href="/speaks/${newdatslug[i].slug}">
                      <img class="img-slugcrr opa-img" src="https://chgs.shareity.me/${newdatslug[i].thumbnail}">
                    </a>
                  </div>
                </div>
              </div>`
        }
        for (let i = 4; i <= 7; i++) {
          sps2.innerHTML += `
              <div  class="col-2 col-land">
                <div class="card" style="border: 0px">
                  <div class="row row-little-land">
                    <a class="" href="/speaks/${newdatslug[i].slug}">
                      <img class="img-slugcrr opa-img" src="https://chgs.shareity.me/${newdatslug[i].thumbnail}">
                    </a>
                  </div>
                </div>
              </div>`
        }
      })
      .catch(function(err) {
        console.error(err);
      });
  }

  function getlink() {
    var aux = document.createElement("input");
    aux.setAttribute("value", window.location.href);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
    speakcp.style.color = 'green'
    speakcp.innerText = 'Copied link!'
    setInterval(function() {
      speakcp.innerText = ''
    }, 4000)
  }

  //---------------/DATA SLUG-------------------//
  </script>
  <!--------------- SPEAK PAGE --------------->
  <div id="speakInt"></div>
  <div id="speakCarr" class="carousel slide"></div>
  <div class="speak-container">
    <div id="lat"></div>
    <div id="loadLat"></div>
    <div id="trend"></div>
    <div id="loadtrend"></div>
  </div>
  <!--------------- /SPEAK PAGE --------------->
  <!--------------- SLUG PAGE --------------->
  <div id="customData"></div>
  <div id="slugCarr" class="carousel slide carousel-multi-item"></div>
  <!--------------- SLUG PAGE --------------->

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

  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/2675419.js"></script>
  <!-- End of HubSpot Embed Code -->

</body>

</html>