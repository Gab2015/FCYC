$(document).ready(function() {
    $('#PestanaIsss').click(function(event) {
        cambiarPestana(event,'Isss');
    });
    $('#PestanaAFP').click(function(event) {
        cambiarPestana(event,'AFP');
    });
    $('#PestanaRenta').click(function(event) {
        cambiarPestana(event,'Renta');
    });
    $('#PestanaDias').click(function(event) {
        cambiarPestana(event,'Dias');
    });
    $('#PestanaAgui').click(function(event) {
        cambiarPestana(event,'Agui');
    });
    function cambiarPestana(evt,Pestana) {
    // Declaracion de variables
        var i, tabcontent, tablinks;
    // Obtengo todos los objetos de la clase tab-content y los oculto
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
    //Obtengo todos los objetos de la clase tablinks y reemplazo los active por ""
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
    // muestro todos los objetos de la pestaña abierta
    document.getElementById(Pestana).style.display = "block";
    tabpanefade = document.getElementsByClassName("tab-pane fade");
        for (i = 0; i < tabpanefade.length; i++) {
            tabpanefade[i].className = tabpanefade[i].className.replace("tab-pane fade", "tab-pane fade in active");
        }
    evt.currentTarget.className += " active";
    }
});