function hasClass(element, className){
  return (' ' + element.className + ' ').indexOf(' ' + className+ ' ') > -1;
}

function mobile_menu() {
  var x = document.getElementById("navbar");
  hasClass(x, 'responsive') ? x.classList.remove('responsive') : x.classList.add('responsive');
};

window.addEventListener('load', function (event) {
  window.onscroll = function() {toggleMenu()};

  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  var contactUs = document.querySelector('#contact-nav-link');
  var cForm = document.getElementById("c-form");
  var brand = document.querySelector('#brand');
  var sendMsgBtn = document.getElementById("c-form-submit");
  var submitMsg = document.getElementById("submitMsg");
  var smp = document.getElementById("sendMessagePage");
  var cpf = document.getElementById("contact-page-form");
  var msgImg = document.getElementById("msgImg");

  function toggleMenu() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky");
    } else {
      navbar.classList.remove("sticky");
    }

    if(cForm != null){
      if(window.pageYOffset > (cForm.offsetTop - 500) && (window.pageYOffset < (cForm.offsetTop + 160) )) {
        navbar.classList.add("invisible");
      } else {
        navbar.classList.remove("invisible");
      }
    }
  }

  contactUs.addEventListener('click', function() {
    smoothScroll("#form-title", 1000);
  });

  if(document.getElementById("hero-section") != null){
    brand.addEventListener('click', function() {
      smoothScroll("#hero-section", 1000);
    });
  }

  if(smp != null){
    smp.addEventListener('click', function() {
      if(cpf != null){
        cpf.classList.add('transparent');
        msgImg.classList.remove("transparent");
      }
    });
  }

  function getFormData(form){
    var unindexed_array = $(form).serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
  }

  if(sendMsgBtn != null){
    // sendMsgBtn.addEventListener('click', function() {
    //   console.log('clicked send message');
    //   var xmlhttp = new XMLHttpRequest();
    //   xmlhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200) {
    //       // submitMsg.innerHTML = this.responseText;
    //       console.log('this.responseText: ', this.responseText);
    //     }
    //   }
    //   xmlhttp.open("GET", "ajax_mail_handler.php", true);
    //   xmlhttp.send();
    // });
    console.log('sendMsgBtn: ', sendMsgBtn)
    cForm.addEventListener('submit', function(e) {
      e.preventDefault();
      console.log('getFormData(cForm): ', getFormData(cForm));
      data = getFormData(cForm);
      submittedMsg = document.getElementById('submitMsg');

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      jQuery.ajax({
        url: "/contactmail/send",
        method: 'POST',
        data: data,
        success: function(data, textStatus, xhr) {
         // console.log('data: ', data);
         // console.log('textStatus: ', textStatus);
         // console.log('xhr: ', xhr);
         // console.log('xhr.status', xhr.status);
         // $(submittedMsg).css({
         //   'display' : 'block',
         //   'padding' : '6vh 3vh',
         //   'background-color' : 'lightgreen',
         //   'border-color' : '2px solid green'
         // });
         if($(submittedMsg).hasClass('alert-danger'))
          $(submittedMsg).removeClass('alert-danger');

         $(submittedMsg).addClass('alert-success');
         $(submittedMsg).css({'display' : 'inline-block'});
         submittedMsg.textContent = 'Your message has been sent';
       },
       error: function(xhr, status, error, message) {
         // console.log('error');
         // console.log('xhr: ', xhr);
         // console.log('message: ', xhr.responseJSON.message);
         // console.log('status: ', status);
         // console.log('error: ', error);
         // console.log('xhr.status: ', xhr.status);

         if($(submittedMsg).hasClass('alert-success'))
          $(submittedMsg).removeClass('alert-success');

         $(submittedMsg).addClass('alert-danger');
         $(submittedMsg).css({'display' : 'inline-block'});
         submittedMsg.textContent = 'There has been an error. Please try again later';
       }
      })
    });

    // jQuery.ajax({
    //   url: "/contact/send",
    //   method: 'POST',
    //   contentType: false,
    //   processData: false,
    //   cache: false,
    //   data: formData,
    //   success: function(data, textStatus, xhr) {
    //     console.log('data: ', data);
    //     console.log('textStatus: ', textStatus);
    //     console.log('xhr: ', xhr);
    //     console.log('xhr.status', xhr.status);
    //     item = call == 'set_menus' ? 'menu items' : 'data';
    //     successToast('Success!', 'Your ' + item + ' has been saved');
    //   },
    //   error: function(xhr, status, error, message) {
    //     console.log('error');
    //     console.log('xhr: ', xhr);
    //     console.log('message: ', xhr.responseJSON.message);
    //     console.log('status: ', status);
    //     console.log('error: ', error);
    //     console.log('xhr.status: ', xhr.status);
    //     if(xhr.status == 418)
    //       failToast('Error!', xhr.responseJSON.message);
    //     else {
    //       item = call == 'set_menus' ? 'menu items' : 'data';
    //       failToast('Error!', 'There\'s been a problem saving your ' + item);
    //     }
    //   }
    // });
  }

  function smoothScroll(target, duration){
    var target = document.querySelector(target);
    var targetPosition = target.getBoundingClientRect().top;
    var startPosition = window.pageYOffset;
    var distance = targetPosition - startPosition;
    var startTime = null;

    function animation(currentTime){
      if(startTime === null) startTime = currentTime;
      var timeElapsed = currentTime - startTime;
      var run = ease(timeElapsed, startPosition, targetPosition, duration);
      window.scrollTo(0, run);
      if(timeElapsed < duration) requestAnimationFrame(animation);
    }

    function ease(t, b, c, d) {
      t /= d / 2;
      if (t < 1) return c / 2 * t * t + b;
      t--;
      return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animation);

  }

  function scrollTo(element, to, duration) {
    if (duration <= 0) return;
    var difference = to - element.scrollTop;
    var perTick = difference / duration * 10;

    setTimeout(function() {
        element.scrollTop = element.scrollTop + perTick;
        if (element.scrollTop === to) return;
        scrollTo(element, to, duration - 10);
    }, 10);
  }

});
