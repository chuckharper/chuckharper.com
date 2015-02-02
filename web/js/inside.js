$(document).ready(function() {
	$(document).mousemove(function(e){
		$('#mousetext').html(e.pageX + '.' + e.pageY);
	});
	
	$('a').hover(function(){
		$('#mousetext').addClass('over');
	},function(){	
		$('#mousetext').removeClass('over');
	});
	
	$('a[rel*=external]').click( function() {
		window.open(this.href);
		return false;
	});
	
	$(".buzzword").tooltip({
		track: true,
		delay: 0,
		showURL: true,
		showBody: " - ",
		fade: 250
	});

	Shadowbox.init({
		displayCounter: false,
		displayNav: false
	});
	
});