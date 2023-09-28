<script>
    $(document).ready(() => {
        $('#crearUsuario').click(() =>{
            let nombres = $("#nombres").val();
            let apellidos = $('#apellidos').val();
            let usuario = $('#usuario').val();
            let pass = $('#pass').val();

            if(nombres === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un nombre'
                });

                return false;
            }else{
                let regexpNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                if(!regexpNombre.test(nombres)){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido solo permite letras'
                });
                    return false;
                }else{
                    nombres = $('#nombres').val();
                }
            }
            if(apellidos === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un apellido'
                });

                return false;
            }else{
                let regexpApellidos = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                if(!regexpApellidos.test(apellidos)){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido solo permite letras'
                });
                    return false;
                }else{
                    apellidos = $('#apellidos').val();
                }
            }

            if(usuario === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un nombre de usuario'
                });
                return false;
            }else{
                let regexpUsuario = /^[a-zA-Z0-9ÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                
                if(!(regexpUsuario).test(usuario)){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido'
                });
                    return false;
                }else{
                    usuario = $('#usuario').val();
                }
            }
            if(pass === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa una Contraseña'
                });
                return false;
            }else{
                let regexpPassword = /^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,}/;
                
                if((regexpPassword).test(pass) && pass.length >= 8){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido'
                });
                    return false;
                }else{
                    pass = $('#pass').val();
                }
            }

            
            $.ajax({
                url: "./app/model/process/registre.process.php",
                data: {
                    nombres,
                    apellidos,
                    usuario,
                    pass
                },
                type: "POST",

                success: () =>{
                    Swal.fire({
                        title: 'Usuario Registrado',
                        text: "Usuario dado de alta con exito",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK!'
                    }).then((result) => {
                        window.location = "./read"
                    })
                    
                },
                error: () =>{
                    //console.log("error")
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