function Listar_Usuarioxcuentaxcclave() {

    var cuenta = "";
    var clave = "";

    cuenta = $("#login").val();
    clave = $("#password").val();

    if (cuenta.length > 0 && clave.length > 0) {

        $.ajax({

            type: "POST",
            url: "Vistas/WebFormIngreso.aspx/Listar_Usuarioxcuentaxcclave",
            data: "{usu:'" + cuenta + "', clave:'" + clave + "'}",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (response) {

                var data = response.d;

                if (data != null) {

                    if (data.length > 0) {

                        console.log(data);
                        window.location.href = "Vistas/Administrador/Principal";
                    }
                }
            },
            error: function (result) {

                alert('ERROR ' + result.status + ' ' + result.statusText);
            }
        });
    }
}