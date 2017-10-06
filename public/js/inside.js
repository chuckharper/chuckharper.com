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

});