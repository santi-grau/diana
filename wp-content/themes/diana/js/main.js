$( function() {
  $('.isotope').isotope({
    itemSelector: '.item',
    masonry: {
      	columnWidth: 10,
    }
  });
});
function aboutbox(){
	$('.modal.about-box').fadeToggle();
	$('html').toggleClass('modal-open');
	$('.modal.contact-box').fadeOut();
}
function contactbox(){
	$('.modal.contact-box').fadeToggle();
	$('html').toggleClass('modal-open');
	$('.modal.about-box').fadeOut();
}
function modaltoggle(){
	$('.modal').fadeOut();
	$('html').toggleClass('modal-open');
}