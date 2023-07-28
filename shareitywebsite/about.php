<?php
  include './include/config.php';
  include './include/team.php';
  ?>
<!DOCTYPE html>
<html data-wf-page="5f808516414aa175e2ad7953" data-wf-site="5f808516326cd92adf25095c">
<head>
    <meta charset="utf-8">
    <title>About us</title>
    <meta content="About us" property="og:title">
    <meta content="About us" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="/css/website.css" rel="stylesheet" type="text/css">
    <link href="/css/responsive-website.css" rel="stylesheet" type="text/css">
    <link href="/images/shareity.ico" rel="shortcut icon" type="image/x-icon">
    <link href="/images/shareity.ico" rel="apple-touch-icon">
    <link href="/css/shareity-com.webflow.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G9V0502V0F"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5KXCKTT');</script>
    <!-- End Google Tag Manager -->

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic","Raleway:regular,900"]  }});</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-G9V0502V0F');
    </script>
    <!-- Facebook Pixel Code -->
    <script>!function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '464542611372585');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=464542611372585&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->

<style>
@media only screen and (max-width: 320px) {
.nav-collapse{
    background: rgb(221, 221, 221)!important;
    position: absolute;
    right: 0%;
    top: 80%;
    color: black !important;
    width: 320px;
    }}
</style>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KXCKTT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Menu  -->
<?php include $config->linkPath('menu'); ?> 
<!-- Menu End -->

<section style="padding-bottom: 80px;">
  <h2 class="label-web" style=" margin-top: 20px; color: BLACK;">Our Team</h2> 
  <div class="abt-container">
    <div class="row-ab">
      <?php foreach ($teamabout as $data) { ?>
        <div class="col-lg-3">
          <div class="profile-userpic">
            <img src="<?= $config->linkAsset('img/team/cartoon/' . $data['photo']); ?>">
            <!--div class="team-details"-->
              <div class="team-inner">
              <div class="profile-usertitle-name"><?= $data['name']; ?></div>
				     	<div class="profile-usertitle-job"><?= $data['charge']; ?></div>
              </div>
            <!--/div-->
          </div>
        </div>
      <?php } ?>
    </div>
  </div> 
</section> 

<!--  footer -->
<?php include $config->linkPath('footer'); ?> 
<!--  /footer -->     


<script>
  // action button
  function sendNewsletter(){
    let newsletter = document.getElementById('newsletter')
    let message = document.getElementById('message')

    if( !validateEmail(newsletter.value) ){
      message.innerText = 'invalid email'

      setInterval(function(){ 
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

      if(email){
        return re.test(email)
      } else {
        return false
      }
  }
  var apiUrl = 'https://apidev.shareity.com/api/web/user/newsletter?'
    
    var domUrl = window.location.hostname;
    
    if (domUrl == 'shareity.com'){
    var apiUrl = apiUrl.replace('apidev','api');
    }
    //console.log('NUEVO:::::',apiUrl)
  function fetchNewsletter(email, message, newsletter){

    fetch(apiUrl + new URLSearchParams('email='+email), {
      method:'POST', 
    })
    .then(function(response) {
      if(response.ok) {
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
  type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="/js/webflow.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
 
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/2675419.js"></script>
<!-- End of HubSpot Embed Code -->

</body>
</html>