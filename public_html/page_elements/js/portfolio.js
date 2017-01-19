

$("a").attr("target", "_blank");

// DISCIPLINES
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

// LANGUAGES
$('.xjava').click(function(){
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.java').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xpyth').click(function(){
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.pyth').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xwebdev').click(function(){
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.webdev').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xphp').click(function(){
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.php').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xclang').click(function(){
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.clang').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xmips').click(function(){
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.mips').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xswift').click(function(){
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.swift').removeClass("hidden");
    $('.switchrow').removeClass("row");
});
$('.xadobe').click(function(){
    $('.pitem').addClass("hidden");
    $('.pitem').removeClass("pitema");
    $('.adobe').removeClass("hidden");
    $('.switchrow').removeClass("row");
});


// ALL
$('.xall').click(function(){
    $('.pitem').removeClass("hidden");
    $('.pitem').addClass("pitema");
    $('.switchrow').addClass("row");
});