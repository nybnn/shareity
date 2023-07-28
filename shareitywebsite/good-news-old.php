<?php
  include './include/config.php';
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Oct 13 2020 19:19:42 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5f808516414aa175e2ad7953" data-wf-site="5f808516326cd92adf25095c">

<head>
  <meta charset="utf-8">
  <title>Good News</title>
  <meta content="Good News" property="og:title">
  <meta content="Good News" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/css/responsive.css" rel="stylesheet" type="text/css">
  <link href="/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/shareity-com.webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/website.css" rel="stylesheet" type="text/css">
  <link href="/css/responsive-website.css" rel="stylesheet" type="text/css">
  <link href="/images/Good-News-Favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="/images/Good-News-Favicon.png" rel="apple-touch-icon">
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

  <!-- Change Logo Navbar -->
  <script>
  var pathArray = window.location.pathname.split('/');
  var partof = pathArray[1];
  //console.log('A VERRR', partof)
  if (partof == 'good-news') {
    const logoGN =
      '<a href="/good-news"><img src="/images/good-news-logo.png" style="width: 20%; position: relative; min-width: 150px;" alt=""></a>';
    document.getElementById("logo").innerHTML = logoGN;
  }
  </script>

  <script type="text/javascript">
  let control = 0,
    newdatpost = [];
  var pathArray = window.location.pathname.split('/');
  var product = pathArray[2];
  console.log('product=', product);
  if (product == null || undefined || '' || product === "") {
    window.onload = getDataBlog();
    console.log('Data Blog')
  } else {
    if (product == 'category') {
      window.onload = getDataCategory();
      console.log('Data Category')
    } else {
      window.onload = getDataPost();
      console.log('Data Post')
    }
  }
  //--------------DATA BLOG------------------//
  function getDataBlog() {
    /*Config */
    var domUrl = window.location.hostname;
    //console.log('DOMINIO:::: ',domUrl)

    var endpoint = 'https://apidev.shareity.com/api/web/blog/index?limit=15';
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
        /* Single Post */
        //var pCatb = JSON.parse(data.single.categories);
        //var catblog = pCatb.join(", ");
        //console.log('CAT=',catblog);
        //console.log('single=',data.single);
        /*Chars*/
        const originalString = data.single.description;
        const strippedString = originalString.replace(/(<([^>]+)>)/gi, "");
        var res1 = strippedString.substring(0, 160);
        var finaldesc1 = res1 + "...";
        var date = data.single.datetime;;
        var datewt = date.substring(0, 10);
        /*Chars*/
        /* HIDE */
        document.getElementById("pintro").style.display = "none";
        document.getElementById("pcont").style.display = "none";
        document.getElementById("social").style.display = "none";
        document.getElementById("prcm").style.display = "none";
        document.getElementById("banner").style.display = "none";
        singlepost.innerHTML = `
          <div class="col-md-7 lib-img" style="padding: 0px 0px 0px 40px;">
              <a class="oimgb"  href="/good-news/${data.single.slug}">
              <img class="img-blg" style="width: fit-content"  src="https://chgs.shareity.me/${data.single.filename}" >
              </a>
          </div>
          <div id="toppost-desc"  class="col-md-4">
              <div class="lib-row lib-header">
                <div class="meta"><a href="/good-news/category/${data.single.categories}">${data.single.categories}</a></div>
                <div class="card-title"><a class="bg-tcards-0" href="/good-news/${data.single.slug}">${data.single.title}</a></div>
              </div>
              <div class="lib-row lib-desc">
              <p>${finaldesc1}</p>
              <p class="date-singlepost">${datewt}</p>
              </div>
          </div>`

        let datos = data.popular;
        let newdat = Array.from(datos);
        //console.log('====',newdat);
        carwrap.innerHTML = `
          <div id="multi-item-carousel" class="carousel slide carousel-multi-item" data-ride="carousel" style="background: #f2f2f2;">
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#multi-item-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-carousel" data-slide-to="1"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
              <div id="postsfirst" class="row row-blog-crr" style="height: 300px;">
              </div>
            </div>
            <!--/.First slide-->
            <!--Second slide-->
            <div class="carousel-item">
              <div id="postssecond" class="row row-blog-crr" style="height: 300px">
              </div>
            </div>
            <!--/.Second slide-->
          </div>
          <!--/.Slides-->
          <a class="carousel-control-prev carouselwidth carousel-blog" href="#multi-item-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon carousel-control-prev-blog carousel-blog" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next carousel-blog carouselwidth" href="#multi-item-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon carousel-control-next-blog  carousel-blog" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> `
        for (let i = 0; i <= 2; i++) {
          postsfirst.innerHTML += `
            <div class="col-sm-6 col-md-6 col-lg-4" style="margin:auto; padding-left: 5px; padding-right: 5px">
                <div class="card mb-2 card-crr" style="border: 0px">
                  <div class="row row-little-card">
                  <a class="oimgb3" href="/good-news/${newdat[i].slug}">
                    <img class="d-block opbg" height=100px src="https://chgs.shareity.me/${newdat[i].filename}" alt="First slide" style="margin: auto;">
                  </a>
                  <div id="toppost-desc1"  class="col-md-5">
                    <div class="lib-row lib-header centered-title">
                      <div class="meta3"><a href="/good-news/category/${newdat[i].categories}">${newdat[i].categories}</a></div>
                      <div class="card-title"><a class="bg-tcards-crr" href="/good-news/${newdat[i].slug}">${newdat[i].title}</a></div>
                    </div>
                  </div>
                </div>          
              </div>
            </div>`;
        }
        for (let i = 3; i <= 5; i++) {
          postssecond.innerHTML += `
            <div class="col-sm-6 col-md-6 col-lg-4" style="margin:auto; padding-left: 5px; padding-right: 5px">
                <div class="card mb-2 card-crr" style="border: 0px">
                  <div class="row row-little-card">
                  <a class="oimgb3" href="/good-news/${newdat[i].slug}">
                    <img class="d-block opbg" height=100px src="https://chgs.shareity.me/${newdat[i].filename}" alt="First slide" style="margin: auto;">
                  </a>
                  <div id="toppost-desc1"  class="col-md-5">
                    <div class="lib-row lib-header centered-title">
                      <div class="meta3"><a href="/good-news/category/${newdat[i].categories}">${newdat[i].categories}</a></div>
                      <div class="card-title"><a class="bg-tcards-crr" href="/good-news/${newdat[i].slug}">${newdat[i].title}</a></div>
                    </div>
                  </div>
                </div>          
              </div>
            </div>`;
        }

        /* Posts */

        //var cbparse = JSON.parse(valor.categories);
        //var cbfinal = cbparse.join(", ");
        //var autparse = JSON.parse(valor.author);
        //console.log()
        let valor = data.posts
        newdatpost = Array.from(valor);
        console.log('===================', newdatpost);
        loadData();

        butload.innerHTML = `
        <div class="elementor-button-wrapper">
        <a href="javascript:void(0)" onclick="loadData()" style="margin-left: -15px;" role="button">
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

  function loadData() {
    let limit = control == 0 ? 5 : control + 6;
    control = control == 0 ? 0 : control++;
    for (let i = control; i <= limit; i++) {
      control++;
      var urlpost = newdatpost[i].slug;
      //Chars
      var dat1 = newdatpost[i].datetime;
      var dwt = dat1.substring(0, 10);
      const originalStringP = newdatpost[i].description;
      const strippedStringP = originalStringP.replace(/(<([^>]+)>)/gi, "");
      var res2 = strippedStringP.substring(0, 120);
      var finaldesc2 = res2 + "...";
      //*Chars
      //console.log('idpop=', urlidp) 
      //console.log('objets=', valor) 
      //console.log('categoria=', cbfinal)
      posts.innerHTML += `
      <div class="col-lg-3 col-sm-5 mb-4" style="margin:0px 10px; padding-right: 1px; padding-left: 1px;">
      <div class="card h-100">
        <a class="oimgb2" href="/good-news/${urlpost}">
          <img class="card-img-top" src="https://chgs.shareity.me/${newdatpost[i].filename}"  style="height:115px;">
        </a>
        <div class="card-body">
          <h4 class="card-title ">
            <a class="date-post">${dwt}</a>
            <div class="meta2"><a  href="/good-news/category/${newdatpost[i].categories}">${newdatpost[i].categories}</a></div>
            <a class="bg-tcards-1" href="/good-news/${urlpost}">${newdatpost[i].title}</a>
          </h4>
          <p class="card-text-posts">${finaldesc2}</p>
        </div>
      </div>
    </div>`
    }
  }
  //--------------/DATA BLOG------------------//

  //--------------DATA POST------------------//
  function getDataPost() {
    /*Buscar por Parametro */
    //const urlParams = new URLSearchParams(window.location.search)
    //var product = urlParams.get();
    /*Buscar por pathname*/
    var pathArray = window.location.pathname.split('/');
    var PostProd = pathArray[2];
    /*Config */
    var domUrl = window.location.hostname;
    //console.log('DOMINIO:::: ',domUrl)    
    var url = `https://apidev.shareity.com/api/web/blog/single-post?limit=3&slug=${PostProd}`

    if (domUrl == 'shareity.com') {
      var url = url.replace('apidev', 'api');
    }
    //console.log('NUEVO::::',url)
    fetch(url)
      .then(function(response) {
        if (response.ok) {
          return response.json();
        }
      })
      .then(function(data) {
        /*Single Post*/
        console.log('Data = ', data);

        //var pCat = JSON.parse(data.single.categories);
        //var cat = pCat.join(", ");
        var pAuth = JSON.parse(data.single.author);
        var dateString = data.single.datetime.replace(/\s+/g, 'T');
        var dateObject = new Date(dateString);
        //var dateParts = dateString.split("/");
        //var dateObject = new Date(+dateParts[2], dateParts[1] - 1, +dateParts[0]); 
        var options = {
          day: 'numeric',
          month: 'long',
          year: 'numeric'
        };
        //console.log('SIRVE:::',dateObject.toLocaleDateString('en-US',options));
        const originalStringSP = data.single.description;
        const strippedStringSP = originalStringSP.replace(/&nbsp;/g, " ");
        const finalstringSP = strippedStringSP.replace(/(\r\n|\n|\r)/gm, "");


        var urlencode = encodeURIComponent(window.location.href)
        var urlimg = encodeURIComponent('https://chgs.shareity.me/' + data.single.filename);
        var urltitle = encodeURIComponent(data.single.title);
        var urldesc = encodeURIComponent(data.single.title);
        var appid = '1514861518800355';
        //console.log('UUUUURRRRRLLLLL',urlimg);

        //HIDE
        document.title = data.single.title;
        document.getElementById("carwrap").style.display = "none";
        document.getElementById("bintro").style.display = "none";
        document.getElementById("posts").style.display = "none";
        document.getElementById("ccards").style.display = "none";

        pintro.innerHTML = ` 
        <div class="intro-header-blogs">
          <div class="row row-blog2">
            <div id="intropost" class="col-md-8" style="min-width: 950px;">      
              <div class="lib-row lib-header">
                <div class="meta1"><a  href="/good-news/category/${data.single.categories}">${data.single.categories}</a></div>
                <div class="card-title mb-0"><a class="bg-tcards-2">${data.single.title}</a></div>
              </div>
              <div class="blog-seperator"></div>
              <!-- Author --><!-- Date/Time -->
              <div id="avatar" class="row" style="margin-left: 0px; ">
                <img id="imavt"src="https://chgs.shareity.me/${pAuth.avatar}" style=" width: 56px; height:56px"  
                class="rounded-circle img-fluid impad" width=10% >
                  <div id="autdat" class="col-2 col-mb-3 colpad p-0" style="margin-top: auto; margin-left:0px; margin-bottom: auto;">
                  <p class="auth author-blog">${pAuth.author}</p>
                  <p class="auth date-blog">${dateObject.toLocaleDateString('en-US',options)}</p>
                  </div>
                <div class="post-social-icons col-4 p-0" style="margin-top: auto; margin-bottom: auto; min-width:134px; line-height: 0px;">
                  <div class="post-grid-item">
                  <a class="post-icon" href="javascript: void(0);" onclick="window.open('https://www.facebook.com/dialog/feed?app_id=${appid}&link=${urlencode}&name=${urltitle}&caption=${urldesc}&picture=${urlimg}&redirect_uri=https://www.facebook.com','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
                      <img src="/images/facebook-post.png" class="post-img">
                    </a> 
                  </div>
                  <div class="post-grid-item">
                  <a class="post-icon" href="javascript: void(0);" onclick="window.open('http://twitter.com/share?url=${window.location.href}&text=${urltitle}','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
                      <img src="/images/twitter-post.png" class="post-img">
                    </a>
                  </div>
                  <div class="post-grid-item">
                  <a class="post-icon" href="javascript: void(0);" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=${urlencode}&title=${urltitle}','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
                      <img src="/images/linkedin-post.png" class="post-img">
                    </a>
                  </div>
                  <div class="post-grid-item">
                  <a class="post-icon" onclick="getlink();">
                    <img src="/images/link2.png" class="post-img">
                    <span id="copied" class="span-post" ></span>
                  </a>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>`

        pcont.innerHTML = `
        <div class="container-b1">
        <div id="blog-resp" class="row row-blog">
          <div id="content"class="blog-padding">
            <div id="filename">
            <img id="imgpost" src="https://chgs.shareity.me/${data.single.filename}" width:fit-content; max-width: 900px; margin: auto;"  
            class="img-fluid rounded cntrd" style="margin:auto;"></div>
            <br><p id="description" class="content-blog">${finalstringSP} </p>
          </div>
        </div>
        </div>`

        /*Social Bar */
        social.innerHTML = `		
    <ul>
			<li>
        <a class="social-bar-i" href="javascript: void(0);" onclick="window.open('https://www.facebook.com/dialog/feed?app_id=${appid}&link=${urlencode}&name=${urltitle}&caption=${urldesc}&picture=${urlimg}&redirect_uri=https://www.facebook.com','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
          <img src="/images/facebook-post.png" class="post-img">
        </a>
      </li>
			<li>
        <a class="social-bar-i" href="javascript: void(0);" onclick="window.open('http://twitter.com/share?url=${window.location.href}&text=${urltitle}','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
          <img src="/images/twitter-post.png" class="post-img">
        </a>
      </li>
			<li>
        <a class="social-bar-i" href="javascript: void(0);" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=${urlencode}&title=${urltitle}','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
          <img src="/images/linkedin-post.png" class="post-img">
        </a>
      </li>
			<li>
      <a class="social-bar-i" onclick="getlink2();">
        <img src="/images/link2.png" class="post-img">
        <span id="copiedtwo" class="span-post-2" ></span>
      </a>
      </li>

		</ul>`
        prcm.innerHTML += `
        <div class="container-b2">
          <h1 class="title-blog">Recommended</h1>
          <div id="recommended" class="row row-ofblog">
          </div>
        </div>`

        /* Recommended Post */
        for (let valor of data.recommended) {
          //console.log('objets=', valor)
          //Chars

          const originalStringR = valor.description;
          const strippedStringR = originalStringR.replace(/(<([^>]+)>)/gi, "");
          var res = strippedStringR.substring(0, 120);
          var final = res + "...";
          //*Chars
          var urlrec = valor.slug;
          //var catparse = JSON.parse(valor.categories);
          //var catfinal = catparse.join(", ");
          var dt = valor.datetime;
          var dtwt = dt.substring(0, 10);

          //var autparse = JSON.parse(valor.author);
          //$("p").hover(function(){var final = valor.description;});
          recommended.innerHTML += `
            <div class="col-md-5 col-lg-3 col-sm-5 mb-4" style="padding-left: 0px; padding-right: 0px; margin-right: 10px; margin-left: 10px;">
              <div class="card h-100">
                <a class="oimgb2" href="/good-news/${urlrec}"><img class="card-img-top" src="https://chgs.shareity.me/${valor.filename}" href="/good-news/${urlrec}" style="height:125px"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a class="date-post">${dtwt}</a>
                    <div class="meta2"><a  href="/good-news/category/${valor.categories}">${valor.categories}</a></div>
                    <a id="titler" class="bg-tcards-1" href="/good-news/${urlrec}">${valor.title}</a>
                  </h4>
                  <p class="card-text-posts">${final}</p>
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
    copied.style.color = 'green'
    copied.innerText = 'Copied link!'
    setInterval(function() {
      copied.innerText = ''
    }, 4000)
  }

  function getlink2() {
    var cop = document.createElement("input");
    cop.setAttribute("value", window.location.href);
    document.body.appendChild(cop);
    cop.select();
    document.execCommand("copy");
    document.body.removeChild(cop);
    copiedtwo.style.color = 'green'
    copiedtwo.innerText = 'Copied link!'
    setInterval(function() {
      copiedtwo.innerText = ''
    }, 4000)
  }
  //---------------/DATA POST-------------------//

  //--------------- DATA CATEGORY-------------------//
  function getDataCategory() {
    var pathArray = window.location.pathname.split('/');
    var CatProd = pathArray[3];
    //console.log('product=',product);

    /*Config */
    var domUrl = window.location.hostname;
    var url = `https://apidev.shareity.com/api/web/blog/get-by-category?categories=${CatProd}&limit=10`
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
        //HIDE
        document.getElementById("pintro").style.display = "none";
        document.getElementById("pcont").style.display = "none";
        document.getElementById("social").style.display = "none";
        document.getElementById("prcm").style.display = "none";
        document.getElementById("carwrap").style.display = "none";
        document.getElementById("bintro").style.display = "none";
        document.getElementById("posts").style.display = "none";

        for (let valor of data.posts) {
          document.title = valor.categories;
          var urlcat = valor.slug;
          var titlcat = valor.title;
          var category = valor.categories;
          var imgcat = valor.filename;
          //Parse Auth.
          //var autparse = JSON.parse(valor.author);
          //var authcat = autparse.author;
          //Parse Desc.
          const originalStringP = valor.description;
          const strippedStringP = originalStringP.replace(/(<([^>]+)>)/gi, "");
          var resDesc = strippedStringP.substring(0, 120);
          var finalDesc = resDesc + "...";
          //Parse Date.
          var dwt = valor.datetime;
          var datcat = dwt.substring(0, 10);

          //console.log('Prueba:::',authcat);
          banner.innerHTML = `
          <div class="cat-container-row">
            <div class="cat-header">
              <div class="cat-content">
                  <div class="catfont">${category}</div>
                </div>
            </div>
          </div>`
          cards.innerHTML += `
          <div class="col-lg-3 col-sm-5 mb-4" style="margin:0px 10px; padding-right: 1px; padding-left: 1px;">
            <div class="card h-100">
              <a class="oimgb2" href="/good-news/${urlcat}">
                <img class="card-img-top" src="https://chgs.shareity.me/${imgcat}"  style="height:115px;">
              </a>
              <div class="card-body">
                <h4 class="card-title ">
                  <a class="date-post">${datcat}</a>
                  <div class="meta2"><a href="/good-news/category/${category}">${category}</a></div>
                  <a class="bg-tcards-1" href="/good-news/${urlcat}">${titlcat}</a>
                </h4>
                <p class="card-text-posts">${finalDesc}</p>
              </div>
            </div>
          </div>`
        }
      })
      .catch(function(err) {
        console.error(err);
      });
  }
  //---------------/DATA CATEGORY-------------------//
  </script>
  <!--------------- BLOG PAGE --------------->
  <!--Post Intro Popular -->
  <div id="bintro" class="row" style="margin: 15px;">
    <div class="col-md-12 lib-item" data-category="ui">
      <div class="lib-panel">
        <div id="singlepost" class="row row-blog box-shadow">
        </div>
      </div>
    </div>
  </div>
  <!--/.Post Intro Popular -->
  <!--Carousel Wrapper-->
  <div id="carwrap"></div>
  <!--/.Carousel Wrapper-->
  <!-- Cards -->
  <div class="container-blog">
    <!--row -->
    <div id="posts" class="row row-blog">
    </div>
    <div id="butload"></div>
    <!--/row -->
  </div>
  <!--/. Cards -->
  <!--------------- /BLOG PAGE --------------->
  <!--------------- POST PAGE --------------->
  <!-- Intro Post -->
  <div id="pintro"></div>
  <!-- /.Intro Post -->
  <div id="social"></div>
  <!-- Post -->
  <div id="pcont"></div>
  <!--/. Post -->
  <!--Post Recommended-->
  <div id="prcm"></div>
  <!--/. Post Recommended-->
  <!--------------- POST PAGE --------------->
  <!--------------- CATEGORY PAGE --------------->
  <!-- Banner -->
  <div id="banner"></div>
  <!-- /Banner -->
  <!-- Cards -->
  <div id="ccards" class="container-blog">
    <div id="cards" class="row row-blog">
    </div>
  </div>
  <!--/. Cards -->
  <!--------------- CATEGORY PAGE --------------->

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
  //console.log('NUEVO:::::', apiUrl)

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