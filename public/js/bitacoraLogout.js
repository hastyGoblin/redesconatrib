function regLogout() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST', // Cambiado a POST
        url: '/regLogout',
        success: function (respuesta) {
            console.log("RegistroLogout");
            const logoutForm = document.getElementById('logout-form');
            if (logoutForm) {
                logoutForm.submit();
            } else {
                console.error("El formulario de logout no fue encontrado.");
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('Ocurrió un error, intente de nuevo: ' + jqXHR.responseText);
        }
    });
}
