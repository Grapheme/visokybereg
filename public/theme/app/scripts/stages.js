$(function() {
  var $stage_btns = $('.side .stages a.unit');
  var $stages = $('.project-visual-wrapper.stages .stage');
  
  $stage_btns.click(function(e){
    var size = $stages.size()-1;
    var cur = $(this).index($stage_btns);
    
    $stages.fadeOut(100, function(){
      $stages.eq(cur).fadeIn(200, function(){
        $( window ).resize();
      });
    });
    e.preventDefault();
  });
  
  $stage_btns.eq(0).click();
});