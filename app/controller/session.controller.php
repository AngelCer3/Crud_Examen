<script>
    $(document).ready(() => {
        $('#session').click(() => {
            let usuario = $('#usuario').val();
            let pass = $('#pass');

            if (usuario === "") {
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un nombre de usuario'
                });
                return false;
            } else {
                let regexpUsuario = /^[a-zA-Z0-9ÑñÁáÉéÍíÓóÚúÜü\s]+$/;

                if (!(regexpUsuario).test(usuario)) {
                    Swal.fire({
                        icon: 'question',
                        text: 'Tipo de dato no permitido'
                    });
                    return false;
                } else {
                    usuario = $('#usuario').val();
                }
            }
            if (pass === "") {
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa una Contraseña'
                });
                return false;
            } else {
                let regexpPassword = /^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,}/;

                if ((regexpPassword).test(pass) && pass.length > 8) {
                    Swal.fire({
                        icon: 'question',
                        text: 'Tipo de dato no permitido'
                    });
                    return false;
                } else {
                    pass = $('#pass').val();
                }
            }

            $.ajax({
                type: "POST",
                data: {
                    usuario,
                    pass
                },
                url: './app/model/process/session.process.php',

                success: (res) => {
                    if (res == 1) {
                        console.log(res)
                        window.location = "./read"
                    } else {
                        window.location = "./home"
                    }
                },
                error: () => {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        text: 'Contacta con el administrador',
                        timer: 1500
                    });
                }
            })

        })
    })
</script>