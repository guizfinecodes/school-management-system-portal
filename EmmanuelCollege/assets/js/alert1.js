$(function() {
    $('.page-alert').hide();
    //Show alert
    $('button[data-toggle="page-alert"]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('data-toggle-id');
        var alert = $('#alert-' + id);
        var timeOut;
        alert.appendTo('.page-alerts');
        alert.slideDown();
        
        //Is autoclosing alert
        var delay = $(this).attr('data-delay');
        if(delay != undefined)
        {
            delay = parseInt(delay);
            clearTimeout(timeOut);
            timeOut = window.setTimeout(function() {
                    alert.slideUp();
                }, delay);
        }
    });
    
    //Close alert
    $('.page-alert .close').click(function(e) {
        e.preventDefault();
        $(this).closest('.page-alert').slideUp();
    });
    
    //Clear all
    $('.clear-page-alerts').click(function(e) {
        e.preventDefault();
        $('.page-alert').slideUp();
    });
});