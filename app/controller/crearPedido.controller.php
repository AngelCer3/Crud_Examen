<script>
    $(document).ready(() => {
        $('#crearPedido').click(() => {
            let producto = $('#product').val();
            let pedido = $('#pedido').val();
            let cantidad = $('#cantidad').val();

            if (cantidad === "") {
                Swal.fire({
                    icon: 'error',
                    text: 'Ingresa la cantidad'
                });

                return false;
            } else {
                let regexpCantidad = /^[0-9\s]+$/;
                if (!regexpCantidad.test(cantidad) && cantidad < 0) {
                    Swal.fire({
                        icon: 'question',
                        text: 'Tipo de dato no permitido solo permite digitos'
                    });
                    return false;
                } else {
                    cantidad = $('#cantidad').val();
                }
            }
            $.ajax({
                url: "./app/model/process/crearPedido.process.php",
                data: {
                    producto,
                    pedido,
                    cantidad
                },
                type: "POST",

                success: (a,b,c) => {
                    console.log(a,b,c)
                    Swal.fire({
                        title: 'Pedido Realizado',
                        text: "Pedido realizado con exito",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK!'
                    }).then((result) => {
                        window.location = "./readPedido"
                    })

                },
                error: () => {
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