(function($) {
$(function() {
  
  $( ".view-comments-recent .item-list .views-field-type span.field-content" ).each(function() {
    $(this).addClass("type-" + $(this).text().toLowerCase());
    $(this).parent().parent().parent().parent().addClass("type-" + $(this).text().toLowerCase());
  });
  
  
  var total_1 = 0;
  $('.view-id-videos tr img').each(function(){
    total_1 += parseInt($(this).css('width').match(/\d+/)) + 5.5;
    $(this).addClass(total_1.toString());
  });
  if (total_1 < 415) {
    total_1 = "100%";
    $(".view-videos.view-display-id-block_2 .view-content").append('<div class="gradient disable" ></div>');
  } 
  else {
    $(".view-videos.view-display-id-block_2 .view-content").append('<div class="gradient active" ></div>');
  }
  $('.view-videos.view-display-id-block_2 tbody tr').css('width', total_1);
  $('.view-videos.view-display-id-block_2 table').css('width', total_1);
  
  
  
  
  var total_2 = 0;
  $('.view-id-photos tr img').each(function(){
    total_2 += parseInt($(this).css('width').match(/\d+/)) + 5.5;
    $(this).addClass(total_2.toString());
  });
  if (total_2 < 415) {
    total_2 = "100%";
//    $(".view-photos.view-display-id-block_1 .view-content").append('<div class="gradient disable" ></div>');
    $(".view-photos.view-display-id-block_1").append('<div class="gradient disable" ></div>');
  } 
  else {
//    $(".view-photos.view-display-id-block_1 .view-content").append('<div class="gradient active" ></div>');
    $(".view-photos.view-display-id-block_1").append('<div class="gradient active" ></div>');
  }
  $('.view-photos.view-display-id-block_1 tbody tr').css('width', total_2);
  $('.view-photos.view-display-id-block_1 table').css('width', total_2);
  
  
  $('#map-wrap .view-header a').click(function () {
    $('#map-wrap .view-filters'). toggle(function() {
   //   fadeIn = show;
  //    fadeOut = hide;
  });
    
  
    
    
    
  });
 
});


$(document).ready(function() {
    $(".view-photos.view-display-id-block_1 .view-content").niceScroll({horizrailenabled:true});
    $(".view-videos.view-display-id-block_2 .view-content").niceScroll({horizrailenabled:true});
    
    $(".view-photos.view-display-id-block_1 .view-content").bind('scroll', function(e){

      var scrollWidth = parseInt(e.target.scrollWidth);
      var scrollLeft = parseInt(e.target.scrollLeft);
      var clientWidth = parseInt(e.target.clientWidth);
      
      if ((scrollWidth - scrollLeft) <= (clientWidth + 30)) {
        $(".view-photos.view-display-id-block_1  .gradient").removeClass('active');
        $(".view-photos.view-display-id-block_1  .gradient").addClass("disable")
      } 
      else {
        $(".view-photos.view-display-id-block_1 .gradient").removeClass('disable');
        $(".view-photos.view-display-id-block_1 .gradient").addClass("active")
      }
      $(".view-photos.view-display-id-block_1 .view-content").css('width', '92.9%');
    });
    
    $(".view-videos.view-display-id-block_2 .view-content").bind('scroll', function(e){

      var scrollWidth = parseInt(e.target.scrollWidth);
      var scrollLeft = parseInt(e.target.scrollLeft);
      var clientWidth = parseInt(e.target.clientWidth);
      
      if ((scrollWidth - scrollLeft) <= (clientWidth + 30)) {
        $(".view-videos.view-display-id-block_2  .gradient").removeClass('active');
        $(".view-videos.view-display-id-block_2  .gradient").addClass("disable")
      } 
      else {
        $(".view-videos.view-display-id-block_2 .gradient").removeClass('disable');
        $(".view-videos.view-display-id-block_2 .gradient").addClass("active")
      }
      $(".view-videos.view-display-id-block_2 .view-content").css('width', '92.9%');
    });
    
});

$(window).resize(function() {
  $(".view-photos.view-display-id-block_1 .view-content").css('width', '92.9%');
  $(".view-videos.view-display-id-block_2 .view-content").css('width', '92.9%');
  console.log("resizw");
});


})(jq183)