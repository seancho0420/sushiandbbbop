$(document).ready(function() {
    
 
    // $("#content-effect").fadeIn(1500);
 
    $("a.transition").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("#content-effect").fadeOut(1000, redirectPage);
    });
    
    function redirectPage() {
        window.location = linkLocation;
    }
});

$(window).load(function() {
    $("#content-effect").fadeIn(1500);
});