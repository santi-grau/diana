$( function() {
	$('.isotope').isotope({
		itemSelector: '.item',
		masonry: {
			columnWidth: 10,
		}
	});
});
		$("nav").hover(function(){
		    $('nav ul li a.active::before').hide();
		},function(){
		    $('nav ul li a.active::before').show();
		});
var modal = function(targetID){
	$('body').toggleClass('modal-open');
	$('.modal.active').removeClass('active');
	$('#'+targetID).addClass('active');
}
var closeModal = function(){
	$('.modal').removeClass('active')
}