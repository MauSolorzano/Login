<?php

include_once 'class/usuarios.php';


class UsuariosModel extends Model
{



    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuarios()
    {
        $items = [];

        try {
            //code...
            $stringSQL = "SELECT * FROM `user` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while ($row = $query->fetch()) { //obtiene todas las filas
                $item = new classUsuarios();

                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                }
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }
    }

    public function insertarUsuario($datos)
    {
        try {
            //code...
            $datos['id'] = "0"; 
            $HASHPassword = password_hash($datos['password'], PASSWORD_DEFAULT);
            var_dump($HASHPassword);
            $datos['password'] = $HASHPassword;
            $stringSQL = 'INSERT INTO user(id, name, email, password) VALUES ( :id, :name, :email, :password);';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            //throw $th;
            //var_dump($th);
            return false;
        }
    }

    public function verUsuarios($id)
    {
        try {
            $item = new classUsuarios();
            //code...
            $stringSQL = "Select * FROM `user` where id=:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id' => $id]);

            while ($row = $query->fetch()) { //obtiene la fila
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
    //actualizarcurso
    public function actualizarUsuario($datos)
    {
        try {

            $stringSQL = 'UPDATE user SET name=:name,email=:email,password=:password WHERE id=:id ;';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;
        } catch (PDOException $th) {
            //throw $th;
            //var_dump($th);
            return false;
        }
    }

    //eliminarcurso
    public function eliminarUsuario($id)
    {
        try {
            //code...
            $stringSQL = "DELETE FROM `user` WHERE id =:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id' => $id]);

            return true;
        } catch (PDOException $th) {
            //throw $th;
            return false;
        }
    }

    function validarCredenciales($email, $password)
    {

        try {
            $stringSQL = "SELECT * FROM `user` WHERE email = :email;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['email' => $email]);

            $rowCount = $query->rowCount();

            if ($rowCount > 0) {
                $row = $query->fetch();
                if ($password === $row['password']) {
                    $_SESSION['usuario'] = $email;
                    return true;
                }
                if (password_verify($password, $row["password"])) {            
                    $_SESSION['usuario'] = $email;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (PDOException $th) {
            return false;
        }
    }
}
