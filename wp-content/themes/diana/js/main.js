$(window).load(function(){
	$( function() {
		$('.isotope').isotope({
			itemSelector: '.item',
			masonry: {
			}
		});
	});
});
var modal = function(targetID){
	$('body').toggleClass('modal-open');
	$('.modal.active').removeClass('active');
	$('#'+targetID).addClass('active');
}
var closeModal = function(){
	$('.modal').removeClass('active');
	$('body').toggleClass('modal-open');
}
function shareModal(that){
	$('body').toggleClass('modal-open');
	$(that).parent().parent().next('.share-box').addClass('active');
}
function shareModalProject(that){
	$('body').toggleClass('modal-open');
	$('.modal.active').removeClass('active');
	$(that).next('.modal').addClass('active');
}

setTimeout(function() {
    $('footer a').attr('href', 'mailto:hello@diana-bada.com');
	$( function() {
		$('.isotope').isotope({
			itemSelector: '.item',
			masonry: {
			}
		});
	});
}, 1000);