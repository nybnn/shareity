(function ($) {

  "use strict";

  new WOW().init();

  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 200) {
      $('.scrolling-navbar').addClass('top-nav-collapse');
    } else {
      $('.scrolling-navbar').removeClass('top-nav-collapse');
    }
  });

  // Slick Nav 
  $('.mobile-menu').slicknav({
    prependTo: '.navbar-header',
    parentTag: 'span',
    allowParentLinks: true,
    duplicate: false,
    label: '',
  });

  /*  Page Loader */
  $('#loader').fadeOut();
  $('#year').text(new Date().getFullYear());

}(jQuery));

// Validate Email
function validateEmail(email) {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

function detectEmailValide() {
  const email = $("#inputEmail").val();
  if (validateEmail(email)) {
    $("#alert-email-valid").css('display', 'none');
  }
}

// Register Promotional
function registerPromotional() {
  const email = $("#inputEmail").val();
  if (validateEmail(email)) {
    $("#alert-email-valid").css('display', 'none');
  } else {
    $("#alert-email-valid").css('display', 'block');
    return false;
  }

  $("#progress-bar").css('display', 'block');
  $.ajax({
    xhr: function () {
      var xhr = new window.XMLHttpRequest();

      // Upload progress
      xhr.upload.addEventListener("progress", function (evt) {
        if (evt.lengthComputable) {
          var percentComplete = evt.loaded / evt.total;
          //Do something with upload progress
          console.log('percentComplete A', percentComplete);
          $('.progress-bar').css({
              width: percentComplete * 100 + '%'
          });
        }
      }, false);

      // Download progress
      xhr.addEventListener("progress", function (evt) {
        if (evt.lengthComputable) {
          var percentComplete = evt.loaded / evt.total;
          // Do something with download progress
          console.log('percentComplete B', percentComplete);
          $('.progress-bar').css({
              width: percentComplete * 100 + '%'
          });
        }
      }, false);

      return xhr;
    },
    type: 'POST',
    url: "http://apidev.shareity.com/api/web/credit/promotional-credit",
    data: {email: email},
    success: function (res) {
      // Do something success-ish
      console.log('res', res);
      if (res.error) {
        $("#alert-email-used").alert();
        $("#alert-email-used").css('display', 'block');
        $("#progress-bar").css('display', 'none');
        $('.progress-bar').css({
          width: '10%'
        });
        setTimeout(() => {
          $("#alert-email-used").alert('fade');
          $("#alert-email-used").css('display', 'none');
        }, 5000);
        return false;
      }
      $("#progress-bar").css('display', 'none');
      $("#inputEmail").val('');
      $("#alert-email-info").alert();
      $("#alert-email-info").css('display', 'block');

      setTimeout(() => {
        $("#alert-email-info").alert('close');
        $("#alert-email-info").css('display', 'none');
      }, 5000);
    }
  });
 /*  $.post("http://apidev.shareity.com/api/web/credit/promotional-credit", { email: email }, function (res) {
    console.log('res', res);
    if (res.error) {
      $("#alert-email-used").css('display', 'block');
      $("#progress-bar").css('display', 'none');
      setTimeout(() => {
        $("#alert-email-used").alert('close')
      }, 5000);
      return false;
    }
    $("#progress-bar").css('display', 'none');
    $("#inputEmail").val('');
    $("#alert-email-info").css('display', 'block');

    setTimeout(() => {
      $("#alert-email-info").alert('close')
    }, 5000);
  }); */
}
