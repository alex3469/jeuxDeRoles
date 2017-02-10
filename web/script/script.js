//quand le document est pret ( a la fin du chargement de la page)
$(document).ready(function () {
    centerButton();
    centerFormulaire();
    $("body").css("visibility", "visible");

});

$(window).resize(function () {
    centerButton();
    centerFormulaire();
});

//quand on clic sur le bouton
$("button").click(function(e){
    $(this).fadeOut(600,function(){
        $("#selection").fadeIn(600);
    });
});

function centerButton() {

// on récupere les dimensions de la fenetre
    var w = $(window).width();
    var h = $(window).height();
    // on récupere les  dimensions du bouton
    var buttonw = $("button").width();
    var buttonh = $("button").height();
    // on calcule la position du bouton afin qu'il soit au centre
    var top = (h - buttonh) / 2;
    var left = (w - buttonw) / 2;
    //on affecte les nouvelles positions calculées
    $("button").css({
        "left": left + "px",
        "top": top + "px"
    });
}

function centerFormulaire(){
    // on récupere les dimensions de la fenetre
    var w = $(window).width();
    var h = $(window).height();
    // on récupere les  dimensions du bouton
    var buttonw = $("#selection").width();
    var buttonh = $("#selection").height();
    // on calcule la position du bouton afin qu'il soit au centre
    var top = (h - buttonh) / 2;
    var left = (w - buttonw) / 2;
    //on affecte les nouvelles positions calculées
    $("#selection").css({
        "left": left + "px",
        "top": top + "px"
    });
    
}