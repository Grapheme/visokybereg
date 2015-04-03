$(function() {
  function setMinheight() {
    $('html, body').css({
      'min-height': 'initial'
    }).css({
      'min-height': $(document).height()
    });
  }
  
  setMinheight();
  
  $( window ).resize(function() {
    setMinheight();  
  });
  
});