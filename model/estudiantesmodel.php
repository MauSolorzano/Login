<?php

include_once 'class/estudiantes.php';


class EstudiantesModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getEstudiantes(){        
        $items = [];

        try {
            //code...
            $stringSQL = "SELECT * FROM `estudiante` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while ( $row = $query->fetch()){//obtiene todas las filas
                $item = new classEstudiantes();

                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                }
                array_push($items, $item);
            }
            //var_dump($items);
            return $items;
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }
    }

    public function insertarEstudiante($datos){
        //# INSERT INTO curso(id, nombre, descripcion, tiempo, usuario) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
                try {
                    //code...
                    $datos['id'] = "0";
                    //$datos['usuario'] = "Prof Mario";
                    $stringSQL = 'INSERT INTO estudiante(id, cedula, correoelectronico, telefono, telefonocelular, fechanacimiento, 
                        sexo, direccion, nombre, apellidopaterno,apellidomaterno,nacionalidad,idCarreras,usuario ) 
                        VALUES ( 
                        :id, :cedula, :correoelectronico, :telefono, :telefonocelular, :fechanacimiento, 
                        :sexo, :direccion, :nombre, :apellidopaterno, :apellidomaterno, :nacionalidad, :idCarreras, :usuario);';
        
                    $query = $this->db->connect()->prepare($stringSQL);
                    $query->execute($datos);
                    return true;
        
                } catch (PDOException $th) {
                    //throw $th;
                    //var_dump($th);
                    return false;
                }
            }

    public function verEstudiantes($id){
       //var_dump($id);
        //var_dump($_SESSION);
        try {
            $item = new classEstudiantes();
            //code...
            $stringSQL = "Select * FROM `estudiante` where id=:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id'=>$id]);

            while ( $row = $query->fetch()){//obtiene la fila
                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                   // $_SESSION['autenticado'] = true;
                }
            }
            return $item;
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }           
    }
      //actualizarEstudiante
      public function actualizarEstudiantes($datos){
                    var_dump($datos);
                try {
                    //code... 
                    //#UPDATE curso SET nombre='[value-2]',descripcion='[value-3]',tiempo='[value-4]',usuario='[value-5]' WHERE id='[value-1]'
                    $stringSQL = 'UPDATE estudiante SET cedula=:cedula, correoelectronico=:correoelectronico, telefono=:telefono, telefonocelular=:telefonocelular, fechanacimiento=:fechanacimiento,
                    sexo=:sexo, direccion=:direccion, nombre=:nombre, apellidopaterno=:apellidopaterno, apellidomaterno=:apellidomaterno, nacionalidad=:nacionalidad, idCarreras=:idCarreras, usuario=:usuario WHERE id=:id ;';
        
                    $query = $this->db->connect()->prepare($stringSQL);
                    $query->execute($datos);
                    return true;
        
                } catch (PDOException $th) {
                    //throw $th;
                    var_dump($th);
                    return false;
                }
            }   

    //eliminarEstudinate
    public function eliminarEstudiante($id){        
        try {            
            //code...
            $stringSQL = "DELETE FROM `estudiante` WHERE id =:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id'=>$id]);
            
            return true;
        } catch (PDOException $th) {
            //throw $th;
            var_dump($th);
            return false;
        }           
    }
}

?>