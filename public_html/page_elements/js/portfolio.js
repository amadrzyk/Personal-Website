/**
 * Created by alexmadrzyk on 12/9/16.
 */

var toggled = 0;
$('#haww').hide();
$('.xelec').click(function() {
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.elec').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xdataviz').click(function() {
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.dataviz').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xdesign').click(function() {
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.design').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xprog').click(function() {
    $('.pitem').addClass("hidden");
    $('.soft').removeClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.switchrow').removeClass("row");
});
$('.xall').click(function() {
    $('.pitem').removeClass("hidden");
    $('.pitem').addClass("pitema");
    $('.switchrow').addClass("row");
});