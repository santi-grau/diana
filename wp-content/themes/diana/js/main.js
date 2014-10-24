$( function() {
	$('.isotope').isotope({
		itemSelector: '.item',
		masonry: {
			columnWidth: 10,
		}
	});
});
var modal = function(targetID){
	$('body').toggleClass('modal-open');
	$('.modal.active').removeClass('active');
	$('#'+targetID).addClass('active');
}
var closeModal = function(){
	$('.modal').removeClass('active')
}