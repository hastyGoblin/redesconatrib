	function regLogout(){
    	/*$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });*/

        /* SELECT TIPO CONFLICTO*/
        $.ajax({
            type: 'GET',
            url: '/regLogout',
            data: {
                
            },
            /*beforeSend: function () {
                alert('Enviaré mis datos va.'+ $('#materia').val());
            },*/
            success: function (respuesta) {

                console.log("RegistroLogout");
                document.getElementById('logout-form').submit();
            },
            error: function (jqXHR, textStatus, errorThrown) {
               alert('Ocurrio un errror, intente de nuevo.' + jqXHR.responseText )
            }
        });
    }

	/*var logOutButton = document.querySelector("#id_red");

	red.addEventListener('change', function(){
        validaInicioRed();
    });*/
