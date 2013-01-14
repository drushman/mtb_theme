$(function() {
  
  $( ".view-comments-recent .item-list .views-field-type span.field-content" ).each(function() {
    $(this).addClass("type-" + $(this).text().toLowerCase());
//    console.log($(this).parent());
    $(this).parent().parent().parent().parent().addClass("type-" + $(this).text().toLowerCase());
  });
  
  
});