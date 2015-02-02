var char = 0;var line = 0;
var caption = new Array();var caption_type = new Array();
var d = new Date();
var days = new Array('Sun','Mon','Tue','Wed','Thu','Fri');
var months = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
d.setTime( d.getTime() - Math.floor(Math.random()*86400) );		// subtrack random time
caption[caption.length] = 'Last login: ' + days[ d.getDay() ] + ' ' + months[ d.getMonth() ] + ' ' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds() + '<br />';
caption_type[caption_type.length] = 0;
caption[caption.length] = 'Edoras:~ web$ ';
caption_type[caption_type.length] = 0;
caption[caption.length] = 'ssh pentagon -u hacker -p;';
caption_type[caption_type.length] = 1;
caption[caption.length] = '<br />password:';
caption_type[caption_type.length] = 0;
caption[caption.length] = '*********';
caption_type[caption_type.length] = 1;
caption[caption.length] = '<br />Access Granted!<br />Pentagon:~ hacker$ ';
caption_type[caption_type.length] = 0;
caption[caption.length] = 'launch missles -now;';
caption_type[caption_type.length] = 1;
caption[caption.length] = '<br />missles launched;<br />';
caption_type[caption_type.length] = 0;
caption[caption.length] = 'clear;';
caption_type[caption_type.length] = 1;

$(document).ready(function() {
	type();
});

function type() {
	if (line >= caption.length) {
		// reset and start over
		line = 0;
		char = 0;
		$('#typecode').html('');
	}
	
	if(caption_type[line] == 1) {
		$('#typecode').append(caption[ line ].charAt(char++));
	} else {
		$('#typecode').append(caption[ line++ ]);
		char = 0;
	}	

	if(char >= caption[ line ].length+1) {
		line++;
		char = 0;
	}
	setTimeout("type()", 200);
}

