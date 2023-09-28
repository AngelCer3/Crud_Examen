<script>
    $(document).ready(() => {
        $('#actualizarProducto').click(() =>{
            let id = $('#id').val(); 
            let nombre = $("#nombre").val();
            let precio = $('#precio').val();
            let fecha = $('#fechaCadu').val();


            if(nombre === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un nombre de producto'
                });

                return false;
            }else{
                let regexpNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                if(!regexpNombre.test(nombre)){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido solo permite letras'
                });
                    return false;
                }else{
                    nombre = $('#nombre').val();
                }
            }
            if(precio === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa un precio'
                });

                return false;
            }else{
                let regexpPrecio = /^[0-9\s]+$/;
                if(!regexpPrecio.test(precio)){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido solo permite digitos'
                });
                    return false;
                }else{
                    precio = $('#precio').val();
                }
            }

            if(fecha === ""){
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa una fecha'
                });
                return false;
            }else{
                let regexpFecha = /^([012][1-9]|3[01])(\/)(0[1-9]|1[012])\2(\d{4})$/;
                
                if((regexpFecha).test(fecha)){
                    Swal.fire({
                    icon: 'question',
                    text: 'Tipo de dato no permitido'
                });
                    return false;
                }else{
                    fecha = $('#fechaCadu').val();
                }
            }

            
            $.ajax({
                url: "./app/model/process/update.process.php",
                data: {
                    id,
                    nombre,
                    precio,
                    fecha
                },
                type: "POST",

                success: () =>{
                    //console.log(a,b,c)
                    Swal.fire({
                        title: 'Producto Actualizado',
                        text: "Producto actualizado con exito",
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