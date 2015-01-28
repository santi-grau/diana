$(window).bind({
	'load' : init
})

function init(){
	Gallery();
}

function Gallery(selector){
	this.add_module = function(type, image){
		
		var portrait_text = image.next('.like');
		var modal_share = image.next().next('.modal');
		
		var container = $('<div />' , {
			'class' : 'gallery_container'
		}).append(image).append(portrait_text).append(modal_share);
		
		if(type == 'horizontal'){
			var h_ar = image.attr('height') / image.attr('width');
			var c_width = selector.width();
			var c_height = selector.width()*h_ar
			container.css({
				'width' : c_width,
				'height' : c_height
			})
			container.addClass('horizontal')
		}
		if(type == 'vertical'){
			var c_width = v_width;
			var c_height = v_height
			container.css({
				'width' : Math.floor(v_width),
				'height' : v_height
			})
			container.addClass('vertical')
		}
		container.css({
			'float' : 'left',
		});
		container.find('.project-item').attr({
			'width' : '100%',
			'height' : '100%'
		});
		container.attr('ar' , c_height/c_width)
		container.appendTo(selector);
	}
	
	this.resized = function(){
		//console.log(sel)
		$('.gallery_container').each(function(){
			if($(this).attr('ar') >= 1){ // vertical
				$(this).css({
					'width' : sel.width()/2,
					'height' : sel.width()/2 * $(this).attr('ar')
				})
			}else{ // horizontal
				$(this).css({
					'width' : sel.width(),
					'height' : sel.width() * $(this).attr('ar'),
					'margin-right' : '15px'
				})
			}
		})
	}
	var _this = this;
	var gutter = 0;
	// start vars for counting on vertical images
	var v_counter = 0;
	var w_pxls = 0;
	var h_pxls = 0;
	var v_ar;
	// iterates through images looking for verticals
	selector.children('.project-item').each(function(){
		if(parseInt($(this).attr('width')) < parseInt($(this).attr('height'))){
			v_counter++;
			h_pxls += $(this).attr('height');
			w_pxls += $(this).attr('width');
			v_ar = $(this).attr('height') / $(this).attr('width')
		}
	})
	// calculates average ar for vertical images (anything outside from aspect ratio will be croped)
	var h_avrg = Math.floor(h_pxls/v_counter);
	var w_avrg = Math.floor(w_pxls/v_counter);
	var v_width = Math.floor((selector.width())/2);
	var v_height = v_width*v_ar;
	var sel = selector;
	selector.children('.project-item').each(function(){
		if(parseInt($(this).attr('width')) > parseInt($(this).attr('height'))){
			_this.add_module('horizontal', $(this));
		}else{
			_this.add_module('vertical', $(this));
		}
	})
	$(window).bind('resize' , _this.resized);
	if( $('.gallery_container:nth-child(2)').hasClass( "vertical" ) ) {
		$( "p.project-info" ).insertAfter($( ".gallery_container:nth-child(3)" ) );
	};
	if( $('.gallery_container:nth-child(2)').hasClass( "horizontal" ) ) {
		$( "p.project-info" ).insertAfter($( ".gallery_container:nth-child(2)" ) );
	};
	if( $('.gallery_container').length < 2 ) {
		$( "p.project-info" ).addClass('clear').insertAfter($( ".gallery_container:nth-child(2)" ) );
	};
	$("img[src*='blanc']").each(function () {
   $(this).next('.like').hide();
	});
}

var gallery = new Gallery($('.content'));