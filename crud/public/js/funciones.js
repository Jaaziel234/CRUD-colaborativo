$(document).ready(function(){
    $("a.agregar").click(function(event){
        var email = $("#email").val();
        var clave = $("#clave").val();
        event.preventDefault();
        alert(email);
        alert(clave);
    })
})