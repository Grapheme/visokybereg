$(function() {
  var $marks = $('.marks .mark');
  
  $marks.click(function(e){
    e.preventDefault();
    
    if ($(e.target).is('.cross')) {
      if ($(this).is('.active')) {
        $marks.removeClass('active');
      } else {
        $marks.removeClass('active');
        $(this).closest('.mark').addClass('active');
      }
    }
    
  });
  
});