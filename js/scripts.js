// Funkcija za tabove
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}

$(".collapse-box").collapse;

$(document).ready( function(){
    $(".collapse-control").click( function() {
        $(".collapse-box").toggle();
    });
});

$(document).ready( function(){
    $(".collapse-control").click( function() {
        var tab = $(".tabs")
        tab.animate({height: '300px', opacity: '0.4'}, "slow");
        tab.animate({width: '300px', opacity: '0.8'}, "slow");
        tab.animate({height: '100px', opacity: '0.4'}, "slow");
        tab.animate({width: '100px', opacity: '0.8'}, "slow");
        tab.animate({width: '100%', height: '100%', margins: '100%'}, "slow");
    })
})


