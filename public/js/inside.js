/*
    flickers object like it glitching
 */
function flicker(obj_id) {
    if (obj_id.length == 0) return;
    var original_opacity = $('#' + obj_id).css('opacity') * 10;
    var loopcount = 0;

    var intflick = setInterval(function() {
        var i = Math.random();
        var new_opacity = (Math.floor(i * (original_opacity-3)) + 3)*0.1;
        $('#' + obj_id).css('opacity',new_opacity);

        if (new_opacity == 0.6 || loopcount++ > 8) {
            clearInterval(intflick);
            var timeout = (Math.floor(Math.random() * 10) + 3)*1000;
            setTimeout(function() {
                flicker(obj_id);
            },timeout);
            $('#' + obj_id).css('opacity','0.6');
        }

    },100);
}

$(document).ready(function() {
    $.expr[':'].external = function(obj){
        return !obj.href.match(/^mailto\:/)
            && (obj.hostname != location.hostname)
            && !obj.href.match(/^javascript\:/)
            && !obj.href.match(/^$/)
            && !obj.href.match(/s3-us-west-1.amazonaws.com\/chuckharper/)
    };

    $('a:external').click( function() {
        window.open(this.href);
        return false;
    });

    Shadowbox.init({
        displayCounter: false,
        displayNav: false
    });

    var img_count = $('img:visible').length;
    var glitch_chance = (img_count * 0.005);
    console.log('glitch_chance = ' + glitch_chance);
    $('img:visible').each(function() {
        var this_id = $(this).prop('id');
        if (Math.random() > glitch_chance) return;

        setTimeout(function() {
            flicker(this_id);
        },Math.floor(Math.random() * 20)*1000);
    });

});