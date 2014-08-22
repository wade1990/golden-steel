$('.flexslider').flexslider();
	
	var responsive = $('.responsive');
	var nav = $('nav');
	
	var responsiveIcon = function(selector, item){
		selector.on('click', function(){
			item.slideToggle();
		});
	};
	
	responsiveIcon(responsive, nav);
	
	var accordion = $('.accordion');
	accordion.accordion({
	active: false,
	collapsible: true,
	heightStyle: "content"
	});
		
