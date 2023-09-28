<?php

use LDAP\Result;

    class Crud{
        private $conexion;
        private $host = "localhost";
        private $usuario = "root";
        private $pass = "";
        private $bd = "tienda";

        public function __construct()
        {
            $this -> conexion = new PDO("mysql:host=$this->host;dbname=$this->bd", $this->usuario, $this->pass);
        }
        public function read(){
            $query = "SELECT * FROM t_producto";
            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
        public function readPedido($id){
            $query = "SELECT t_producto.nombre, cantidad, t_producto.precio as precio FROM t_pedido LEFT JOIN t_producto on t_pedido.producto = t_producto.id WHERE pedido_por=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
        public function crearUsuario($datos){
            $query = "INSERT INTO t_usuario(nombres,apellidos,usuario,pass) VALUES(:nombres, :apellidos, :usuario, :pass)";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':nombres', $datos['nombres']);
            $stmt->bindParam(':apellidos', $datos['apellidos']);
            $stmt->bindParam(':usuario', $datos['usuario']);
            $stmt->bindParam(':pass', $datos['pass']);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }
        public function comprobarUsuario($datos){
            $query = "SELECT * FROM t_usuario WHERE usuario=:usuario AND pass=:pass";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':usuario', $datos['usuario']);
            $stmt->bindParam(':pass', $datos['pass']);
            $stmt->execute();
            $fila = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(count($fila) > 0){
                unset($this->conexion);
                session_start();
                $_SESSION['id'] = $fila[0]['id'];
                echo 1;
            }else{
                unset($this->conexion);
                echo 0;
            }
        }
        public function crearProducto($datos){
            $query = "INSERT INTO t_producto (nombre,precio,fecha_caducidad) VALUES(:nombre,:precio,:fecha)";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":nombre", $datos["nombre"]);
            $stmt->bindParam(":precio", $datos["precio"]);
            $stmt->bindParam(":fecha", $datos["fecha"]);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }
        public function crearPedido($datos){
            $query = "INSERT INTO t_pedido(producto,pedido_por,cantidad) VALUE(:producto, :pedido, :cantidad)";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":producto", $datos['producto']);
            $stmt->bindParam(":pedido", $datos['pedido']);
            $stmt->bindParam(":cantidad", $datos["cantidad"]);
            $stmt->execute();
            //unset($this->conexion);
            return $stmt;
        }
        
        public function updateeProducto($datos){
            $query = "UPDATE t_producto SET nombre=:nombre, precio=:precio, fecha_caducidad=:fecha WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $datos['id']);
            $stmt->bindParam(":nombre", $datos['nombre']);
            $stmt->bindParam(":precio", $datos['precio']);
            $stmt->bindParam(":fecha", $datos['fecha']);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }
        
        public function delete($datos){
            $query = "DELETE FROM t_producto WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $datos["id"]);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }
        public function show($id){
            $query = "SELECT * FROM t_producto WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $id);
            $result = $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            //unset($this->conexion);
            return $result;
        }
    }

?>