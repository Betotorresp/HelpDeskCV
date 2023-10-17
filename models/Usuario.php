<?php

    class Usuario extends Conectar{

        public function login(){
            $conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["usu_correo"];
                $pass = $_POST["usu_pass"];
                if(empty($correo)and empty($pass)){
                    header("location:".conectar::ruta()."index.php?m=2");
                    exit();

                }else{
                    $sql = "";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);



                }

            }



        }


    }

?>