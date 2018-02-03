

$("a").attr("target", "_blank");

// DISCIPLINES
$('.xelec').click(function(){
    $('.pitem').addClass("hidden");
    $('.elec').removeClass("hidden");
});
$('.xdesi').click(function(){
    $('.pitem').addClass("hidden");
    $('.desi').removeClass("hidden");
});
$('.xprog').click(function(){
    $('.pitem').addClass("hidden");
    $('.prog').removeClass("hidden");
});

// LANGUAGES
$('.xjava').click(function(){
    $('.pitem').addClass("hidden");
    $('.java').removeClass("hidden");
});
$('.xpyth').click(function(){
    $('.pitem').addClass("hidden");
    $('.pyth').removeClass("hidden");
});
$('.xwebdev').click(function(){
    $('.pitem').addClass("hidden");
    $('.webdev').removeClass("hidden");
});
$('.xphp').click(function(){
    $('.pitem').addClass("hidden");
    $('.php').removeClass("hidden");
});
$('.xclang').click(function(){
    $('.pitem').addClass("hidden");
    $('.clang').removeClass("hidden");
});
$('.xmips').click(function(){
    $('.pitem').addClass("hidden");
    $('.mips').removeClass("hidden");
});
$('.xswift').click(function(){
    $('.pitem').addClass("hidden");
    $('.swift').removeClass("hidden");
});
$('.xadobe').click(function(){
    $('.pitem').addClass("hidden");
    $('.adobe').removeClass("hidden");
});


// ALL
$('.xall').click(function(){
    $('.pitem').removeClass("hidden");
});