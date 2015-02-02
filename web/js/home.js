$(document).ready(function() {
	jitterBrain();
	
	$(document).mousemove(function(e){
		$('#mousetext').html(e.pageX + '.' + e.pageY);
		console.log(e.pageX + '.' + e.pageY);
	});
	
	$('a').hover(function(){
		$('#mousetext').addClass('over');
	},function(){	
		$('#mousetext').removeClass('over');
	});
	
});

var brain_state = 0;
function jitterBrain() {
	interval = 100;
	
	switch (brain_state) {
		case 0:
			o = 0.8;
			l = -2;
			t = 1;
			break;
		case 1:
			o = 0.8;
			l = 4;
			t = 0;
			break;
		case 2:
			o = 0.6;
			l = -4;
			t = 0;
			break;
		case 3:
			o = 1;
			l = 2;
			t = -1;
			break;
	}
	brain_state += 1;
	if (brain_state > 3) {
		brain_state = 0;
		interval = Math.floor(Math.random()*10000);
	}

	$('#brain').animate({
		opacity: o,
		left: '+=' + l,
		top: '+=' + t
	}, 100, function() {
		setTimeout('jitterBrain()',interval);
	});
}
