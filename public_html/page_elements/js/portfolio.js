/**
 * Created by alexmadrzyk on 12/9/16.
 */

$("a").attr("target", "_blank");

$('.xelec').click(function(){
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.elec').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xdesi').click(function(){
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.desi').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xprog').click(function(){
    $('.pitem').addClass("hidden");
    $('.soft').removeClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.switchrow').removeClass("row");
});
$('.xall').click(function(){
    $('.pitem').removeClass("hidden");
    $('.pitem').addClass("pitema");
    $('.switchrow').addClass("row");
});