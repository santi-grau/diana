$( function() {
	$('.isotope').isotope({
		itemSelector: '.item',
		masonry: {
			columnWidth: 10,
		}
	});
});
var modal = function(targetID){
	$('.modal.active').removeClass('active');
	$('body').toggleClass('modal-open');
	$('#'+targetID).addClass('active');
}
var closeModal = function(){
	$('.modal').removeClass('active')
}