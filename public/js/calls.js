jQuery('document').ready(function() {
  function entry(type = "", page = "", placement = "", content = "") {
    this.placement = placement;
    this.type = type;
    this.page = page;
    this.content = content;
  };

  function setMenuEntry(menuItem, menuInputs){
    c_entry = new entry("menu", menuItem);
    for(i = 0; i<menuInputs.length; i++){
      if($(menuInputs[i]).prop("tagName").toLowerCase() == "input"){
        c_entry.content = $(menuInputs[i]).val();
      } else if($(menuInputs[i]).prop("tagName").toLowerCase() == "select"){
        c_entry.placement = $(menuInputs[i]).val();
      }
    }
    return c_entry;
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
    if($(e.target).data("type") == 'menu'){
      call = 'set_menus';
      entryHowitworks = setMenuEntry('howitworks', $('*[data-page="howitworks"]'));
      entryPlans = setMenuEntry('plans', $('*[data-page="plans"]'));
      entryContact = setMenuEntry('contact', $('*[data-page="contact"]'));
      entryCustomers = setMenuEntry('customers', $('*[data-page="customers"]'));
      payload = {
        howitworks: entryHowitworks,
        plans: entryPlans,
        contact: entryContact,
        customers: entryCustomers
      };
    }

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    jQuery.ajax({
      url: "/admin/content",
      method: 'post',
      data: {
        call: call,
        payload: JSON.stringify(payload)
      },
      success: function(data, textStatus, xhr) {
        console.log('data: ', data);
        console.log('textStatus: ', textStatus);
        console.log('xhr: ', xhr);
        console.log('xhr.status', xhr.status);
        item = call == 'set_menus' ? 'menu items' : 'data';
        successToast('Success!', 'Your ' + item + ' has been saved')
      },
      error: function(xhr, status, error, message) {
        console.log('error');
        console.log('xhr: ', xhr);
        console.log('message: ', xhr.responseJSON.message);
        console.log('status: ', status);
        console.log('error: ', error);
        console.log('xhr.status: ', xhr.status);
        if(xhr.status == 418)
          failToast('Error!', xhr.responseJSON.message);
        else {
          item = call == 'set_menus' ? 'menu items' : 'data';
          failToast('Error!', 'There\'s been a problem saving your ' + item);
        }
      }
    });
  });
});
