$("#operation").click(function() {
    $(".operator").slideToggle(1000);
    $(".book").hide(1000);
})
$("#book").click(function() {
    $(".book").slideToggle(1000);
    $(".operator").hide(1000);
})