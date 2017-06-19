jQuery(function($) {
$( ".cross" ).hide();
$( ".menu--mobile" ).hide();
$( ".hamburger" ).click(function() {
    $( ".menu--mobile" ).slideToggle( "slow", function() {
        $( ".hamburger" ).hide();
        $( ".cross" ).show();
    });
});

$( ".cross" ).click(function() {
    $( ".menu--mobile" ).slideToggle( "slow", function() {
    $( ".cross" ).hide();
    $( ".hamburger" ).show();
    });
});
});
