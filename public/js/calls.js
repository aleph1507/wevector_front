jQuery('document').ready(function() {

  function myTrim(x) {
    return x.replace(/^\s+|\s+$/gm,'');
  }

  function entry(type = "", page = "", placement = "", content = "", background_image = null, background_color=null) {
    this.placement = placement;
    this.type = type;
    this.page = page;
    this.content = content;
    this.background_image =  background_image;
    this.background_color = background_color;
  };

  var formData = new FormData();

  function setMenuEntry(menuItem, menuInputs){
    c_entry = new entry("menu", menuItem);
    for(i = 0; i<menuInputs.length; i++){
      if($(menuInputs[i]).prop("tagName").toLowerCase() == "input"){
        c_entry.content = $(menuInputs[i]).val();
        // if($(menuInputs[i]).attr('type') == 'color')
        //   c_entry.placement = 'menufontcolor';
      } else if($(menuInputs[i]).prop("tagName").toLowerCase() == "select"){
        c_entry.placement = $(menuInputs[i]).val();
      }
    }
    formData.append(menuItem, JSON.stringify(c_entry));
  }

  function setEntry(e){
    ent = new entry();
    content = '';
    bcolor = null;
    bimage = null;
    if($(e).prop("tagName").toLowerCase() == "input" && $(e).attr('type').toLowerCase() == 'file'){
      if($(e).val() == ""){
        content = $('#' + $(e).data("placement")).attr('src').split('/');
        content = content[content.length-1];
      } else {
        content = $(e).get(0).files[0];
        formData.append($(e).data("placement"), content);
      }
    } else {
      if($(e).prop("tagName").toLowerCase() == "input" && $(e).attr('type').toLowerCase() == 'checkbox')
        content = $(e).is(':checked');
      else{
        content = myTrim($(e).val());
        content = content.replace("\u2028", "\\u2028").replace("\u2029", "\\u2029");
      }
    }

    ent = new entry($(e).data("type"), $(e).data("page"), $(e).data("placement"), content);
    formData.append($(e).data("placement"), JSON.stringify(ent));
  }

  function successToast(heading, text) {
    $.toast({
      heading: heading,
      text: text,
      showHideTransition: 'slide',
      icon: 'success'
    });
  }

  function failToast(heading, text) {
    $.toast({
      heading: heading,
      text: text,
      showHideTransition: 'slide',
      icon: 'error'
    });
  }

  jQuery('.send').click(function(e){
    e.preventDefault();
    call = null;
    payload = null;
    formdata = new FormData();

    switch($(e.target).data("type")){
      case 'menu':
        call = 'set_menus';
        formData.append('call', 'set_menus');
        payload = [];
        setMenuEntry('howitworks', $('*[data-page="howitworks"]'));
        setMenuEntry('plans', $('*[data-page="plans"]'));
        setMenuEntry('contact', $('*[data-page="contact"]'));
        setMenuEntry('customers', $('*[data-page="customers"]'));
        setMenuEntry('color', $('*[data-page="menu"]'));
        break;
      case 'landing':
        call = 'landing';
        formData.append('call', 'landing');
        payload = [];
        for(i = 0; i<$('*[data-page="landing"]').length; i++){
          payload.push(setEntry($('*[data-page="landing"]')[i]));
        }
        break;
      case 'howitworks':
        call = 'howitworks';
        formData.append('call', 'howitworks');
        payload = [];
        for(i = 0; i<$('*[data-page="howitworks"]').length; i++){
          payload.push(setEntry($('*[data-page="howitworks"]')[i]));
        }
        break;
      case 'packages':
        call = 'plans';
        formData.append('call', 'plans');
        payload = [];
        for(i = 0; i<$('*[data-page="packages"]').length; i++){
          payload.push(setEntry($('*[data-page="packages"]')[i]));
        }
        break;
      case 'contact':
        call = 'contact';
        formData.append('call', 'contact');
        payload = [];
        for(i = 0; i<$('*[data-page="contact"]').length; i++){
          payload.push(setEntry($('*[data-page="contact"]')[i]));
        }
        break;
      case 'footer':
        call = 'footer';
        formData.append('call', 'footer');
        payload = [];
        for(i = 0; i<$('*[data-page="footer"]').length; i++){
          setEntry($('*[data-page="footer"]')[i]);
        }
        break;
      default:
        break;
    }

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    if(call != null){
      jQuery.ajax({
        url: "/admin/content",
        method: 'POST',
        contentType: false,
        processData: false,
        cache: false,
        data: formData,
        success: function(data, textStatus, xhr) {
          item = call == 'set_menus' ? 'menu items' : 'data';
          successToast('Success!', 'Your ' + item + ' has been saved');
        },
        error: function(xhr, status, error, message) {
          if(xhr.status == 418)
            failToast('Error!', xhr.responseJSON.message);
          else {
            item = call == 'set_menus' ? 'menu items' : 'data';
            failToast('Error!', 'There\'s been a problem saving your ' + item);
          }
        }
      });
    }
  });

  jQuery('#btn_publish').click(function(e) {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    jQuery.ajax({
      url: "/admin/publish",
      method: 'POST',
      contentType: false,
      processData: false,
      cache: false,
      data: '',
      success: function(data, textStatus, xhr) {
        successToast('Success!', 'Your content has been published!');
      },
      error: function(xhr, status, error, message) {
        if(xhr.status == 418)
          failToast('Error!', xhr.responseJSON.message);
        else {
          failToast('Error!', 'There\'s been a problem publishing your content');
        }
      }
    });
  });

  function readURL(input){
    if(input.files && input.files[0]){
      imgEl = $('#' + $(input).data("placement"));
      var reader = new FileReader();

      reader.onload = function(e) {
        imgEl.attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $(".upload-input").on('change', function(e) {
    readURL(e.target);
  });

});
