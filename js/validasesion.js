function Valida_Sesion() {
       
    $.ajax({
        type: "POST",
        url: "../WebFormValidaSesion.aspx/Valida_Sesion",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {

            var acceso = response.d;

            if (acceso == -1) {

                window.location = "../../Index.aspx";

            } else {
                
                //menu_principal();
            }
        },
        error: function (result) {
            alert('ERROR ' + result.status + ' ' + result.statusText);
        }
    });
}