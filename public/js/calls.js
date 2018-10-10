jQuery('document').ready(function() {
  jQuery('.send').click(function(e) {
    placementControl = '';
    placement = '';
    type = '';
    page = '';
    placement = '';
    content = '';
    if($(e.target).data("type") == 'menu'){
      type = "menu";
      page = $(e.target).data('page');
      placementControl = $($(e.target).data('placement-control'));
      placement = placementControl.val();
      contentControl = $($(e.target).data('content-control'));
      content = contentControl.val();
    }
    dataType = $(e.target).data("type"); //menu
    dataPage = $(e.target).data("page"); //howitworks
    dataPlacement = $(e.target).data("placement"); // 1
    dataContent = $(e.target).data("content"); //How it works
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    jQuery.ajax({
      url: "/admin/content",
      method: 'post',
      data: {
        type: type,
        page: page,
        placement: placement,
        content: content
      },
      success: function(result) {
        console.log(result);
      }
    });
  });
});
