function verificarDatos() {
    var contra = $("#contrasenia").val();

    var num = 0;
    var may = 0;
    var min = 0;
    var mayusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for (var i = 0; i < contra.length; i++) {
        if (contra[i] == '1' || contra[i] == '2' || contra[i] == '3' || contra[i] == '4' || contra[i] == '5' || contra[i] == '6' || contra[i] == '7' || contra[i] == '8' || contra[i] == '9' || contra[i] == '0') {
            num++;
        } else {
            for (var x = 0; x < mayusculas.length; x++) {
                if (contra[i] == mayusculas[x]) {
                    may += 1;
                } else if (contra[i] == mayusculas[x].toLowerCase()) {
                    min++;
                }
            }
        }

    }
    if (contra.length < 4 || may < 1 || num < 1) {
        $("#resultadoContra").html("<p id=\"textoContra\" style='color:red;font-size:10px;'>Debe tener al menos 4 caracteres, una mayuscula y un numero</p>");
        return;
    } else {
        $("#resultadoContra").html("");
        var datos = new FormData();

        var corr = $('#correo').val();
        datos.append('correo', $('#correo').val());
        datos.append('contra', contra);
        var name = "";
        $.ajax({
            url: "./Scripts/consultas.php",
            type: 'POST',
            data: { 'correo': corr, 'contrasenia': contra },
            dataType: 'json',
            success: function(json) {
                if (json == 1) {
                    window.location.href = '../UsuarioLector/home.php'
                } else {
                    alert('Sus credenciales no se han encontrado o son incorrectos');
                    return;
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    }
}

function busqueda() {
    $busque = $("#busqArti").val();
    $.ajax({
        type: "POST",
        url: "../Scripts/insertar.php",
        data: { 'consulta': 'BUSQA', 'txtBusqueda': $busque },
        dataType: "json",
        success: function(response) {
            console.log(response);
            if (response.length > 0) {
                window.location.href = "../UsuarioLector/busquedas.php?search=" + $busque;

            } else {
                alert("No se encontraron resultados");
                return;
            }
            //window.location.href = "../UsuarioLector/busquedas?"
            return;
        }
    });
    return;
}

$(".categorias").click(function(e) {
    var valores = $(this).find("a");
    var $idG = $(valores).text();
    console.log($idG);
    window.location.href = "../../UsuarioLector/busquedas.php?type=asv&search=" + $idG;
    return false;
    alert("Prueva");

});
$(".articulos").click(function(e) {
    var idG = ($(this).attr("data-id"));
    window.location.href = "../UsuarioLector/abrirArticulo.php?art=" + idG;
    return;
});

function agregaCom($valor, $autor) {
    $cosas = $("#comentarioArti").val();
    var fecha = new Date();
    if ($("#comentarioArti").val().trim().length > 0) {
        fecha = fecha.getDate() + "/" + (fecha.getMonth() + 1) + "/" + fecha.getFullYear();
        $.ajax({
            type: "get",
            url: "../Scripts/insertCom.php",
            data: { 'fecha': fecha, 'id_art': $valor, 'contenido': $cosas },
            dataType: "json",
            success: function(response) {
                $(".contenidoComentarios").html($(".contenidoComentarios").html() + "<div class=\"comentario\"><p class=\"autorComen\">" + $autor + "</p><p class=\"fechaComen\">" + fecha + "</p><p class=\"contenidoComen\">" + $cosas + "</p></div>");
                $("#comentarioArti").val("");
                return
            }
        });
    } else {
        alert("Su comentario no es válido o está vacío, escriba uno nuevo")
    }
    return
}