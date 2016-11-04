$(document).ready(function() {
    $("a.transition").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(1000, redirectPage);
    });
    
    function redirectPage() {
        window.location = linkLocation;
    }
});

$(window).load(function() {
    $("#page").fadeIn(1500);
});