<?php

class Session{
    function __construct(){

    }

    function connectionSession(){
        //session_write_close();

        if(!isset($_SESSION)){
            
            session_start();
        
            
        }
        
        if (isset($_SESSION['usuario'])) {
            
            if (!isset($_SESSION['redireccion'])) {
            
                $_SESSION['redireccion'] = true;


                echo "<script>
                        window.location='" . constant('URL') . "index';
                      </script>";
                      
                exit();
            }
        }
        else {
            echo 'Desconectado';
        
            echo "<script>
                    alert('Es aqui, no está autenticado');
                    window.location='" . constant('URL') . "iniciarSesion';
                  </script>";
        }
    }
}
//window.location='login';



?>