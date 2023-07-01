<?php
class Estudiantes extends Controller{
    function __construct(){
        parent::__construct();
        parent::connectionSession();

        $this->view->datos = [];
        $this->view->mensaje = "Seccion Estudiante";
        $this->view->mensajeResultado = "";        
    }
    function render(){
        $datos = $this->model->getEstudiantes();               
        $this->view->datos = $datos;
        $this->view->render('estudiantes/index');
        //var_dump($datos);
    }

    function crear(){   //para ver la vista                   
        $this->view->datos = [];
        $this->view->mensaje = "Crear Estudiantes";
        $this->view->render('estudiantes/crear');
    }

    function insertarEstudiante(){
        //var_dump($_POST);
        if ($this->model->insertarEstudiante($_POST)){
            $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Nuevo Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se Registro
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

    function detalle(){                      
        $this->view->datos = [];
        $this->view->mensaje = "Detalles del estudiante";
        $this->view->render('estudiantes/detalle');
    }

    function verEstudiantes( $param = null ){        
        $id = $param[0];

        $datos = $this->model->verEstudiantes($id);        
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle Estudiente";
        $this->view->render('estudiantes/detalle');
    }

    //actualizarcurso
    function actualizarEstudiantes(){
        //var_dump($_POST);
        if ($this->model->actualizarEstudiantes($_POST)){

            $datos = new classEstudiantes();

            foreach ($_POST as $key => $value) {
                # code...
                $datos->$key= $value;
            }

            $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Actualizacion de Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se actualizo el Registro
                </div>';
        }
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle Estudiante";
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->view->render('estudiantes/detalle');
    }    

    //eliminarcurso
    function eliminarEstudiante( $param = null ){   
        $id = $param[0];
        if ($this->model->eliminarEstudiante($id)){
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Se elimino el Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se elimino el Registro
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }
}

?>