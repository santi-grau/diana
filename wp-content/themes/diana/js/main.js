$( function() {
  $('.isotope').isotope({
    itemSelector: '.item',
    masonry: {
      	columnWidth: 394,
  		gutter: 15
    }
  });
});

function aboutbox(){
	$('#about').fadeToggle();
	$('body').toggleClass('block');
}