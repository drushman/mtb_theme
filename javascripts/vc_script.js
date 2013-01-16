$(function() {
  
  $( ".view-comments-recent .item-list .views-field-type span.field-content" ).each(function() {
    $(this).addClass("type-" + $(this).text().toLowerCase());
    $(this).parent().parent().parent().parent().addClass("type-" + $(this).text().toLowerCase());
  });
  
  
  var total_1 = 0;
  $('.view-id-videos tr img').each(function(){
    total_1 += parseInt($(this).css('width').match(/\d+/)) + 5.5;
    console.log(total_1);
    $(this).addClass(total_1.toString());
  });
  $('.view-videos.view-display-id-block_2 tbody tr').css('width', total_1);
  
  
  var total_2 = 0;
  $('.view-id-photos tr img').each(function(){
    total_2 += parseInt($(this).css('width').match(/\d+/)) + 5.5;
    $(this).addClass(total_2.toString());
    console.log(total_2);
  });
  $('.view-photos.view-display-id-block_1 tbody tr').css('width', total_2);
  
  
  if (!$.browser.webkit) {
    $('.view-photos.view-display-id-block_1 tbody')
      .bind('jsp-initialised',
        function(event, isScrollable) {
          if (isScrollable) {
            $('.view-photos.view-display-id-block_1 .jspContainer').append('<div class="gradient" ></div>');
          }
        }
      )
      .bind('jsp-scroll-x',
        function(event, scrollPositionX, isAtLeft, isAtRight) {
          if (isAtRight) {
            $('.view-photos.view-display-id-block_1 .jspContainer .gradient').css('display', 'none');
          } 
          else {
            $('.view-photos.view-display-id-block_1 .jspContainer .gradient').css('display', 'block');
          }
          if (isAtLeft) {
            $('.view-photos.view-display-id-block_1 .jspContainer .gradient').css('display', 'block');
          }
        }
      )
      .jScrollPane();
                                                    
                                                    
                                                    
    $('.view-videos.view-display-id-block_2 tbody')
      .bind('jsp-initialised',
        function(event, isScrollable)
        {
          if (isScrollable) {
            $('.view-videos.view-display-id-block_2 .jspContainer').append('<div class="gradient" ></div>');
          }
        }
      )
      .bind('jsp-scroll-x',
        function(event, scrollPositionX, isAtLeft, isAtRight)
        {
          if (isAtRight) {
            $('.view-videos.view-display-id-block_2 .jspContainer .gradient').css('display', 'none');
          } 
          else {
            $('.view-videos.view-display-id-block_2 .jspContainer .gradient').css('display', 'block');
          }
          if (isAtLeft) {
            $('.view-videos.view-display-id-block_2 .jspContainer .gradient').css('display', 'block');
          }
        }
      )
      .jScrollPane();
//    $('.view-photos.view-display-id-block_1 .jspContainer').append('<div class="gradient" style="display:none;"></div>');
//    $('.view-videos.view-display-id-block_2 .jspContainer').append('<div class="gradient" style="display:none;"></div>');
    
//    $('.view-videos.view-display-id-block_2 .jspContainer').append('<div class="gradient" ></div>');
    
//    $('.view-display-id-block_2 .view-content tbody > tr > td')
//      .appendTo('.view-id-photos.view-display-id-block_1 .view-content tbody > tr');
  }
  
  $(document).ready(function () {
          
      });
  
});