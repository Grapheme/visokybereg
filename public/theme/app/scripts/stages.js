$(function() {
  var $stage_btns = $('.side .stages a.unit');
  var $stages = $('.project-visual-wrapper.stages .stage');
  
  $stage_btns.click(function(e){
    var size = $stages.size()-1;
    var cur = $stage_btns.index($(this));
    $stages.hide()
    
    
      $stages.eq(cur).fadeIn(200, function(){
        console.log('2')
        $( window ).resize();
      });
    
    e.preventDefault();
  });
  
  $stage_btns.eq(0).click();
});