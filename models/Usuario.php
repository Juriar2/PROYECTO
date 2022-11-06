<?php
    class Usuario extends Conectar{
        /* Funcion para login de acceso del usuario */
        public function login(){
            $conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["usu_correo"];
                $pass = $_POST["usu_pass"];
                if(empty($correo) and empty($pass)){
                    /* En caso esten vacios correo y contraseña, devolver al login con mensaje = 2 */
                    header("Location:".conectar::ruta()."login?m=2");
					exit();
                }else{
                    $sql = "SELECT * FROM tm_usuario WHERE usu_correo=? and usu_pass=? and est=1";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if (is_array($resultado) and count($resultado)>0){
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["usu_nom"]=$resultado["usu_nom"];
                        $_SESSION["usu_ape"]=$resultado["usu_ape"];
                        $_SESSION["usu_correo"]=$resultado["usu_correo"];
                        $_SESSION["rol_id"]=$resultado["rol_id"];
                        /* si esta todo correcto va dejar pasar la menu principal */
                        header("Location:".Conectar::ruta()."view/UsuHome/dashboard");
                        exit();
                    }else{
                        /*En caso no coincidan el usuario o la contraseña  va ser redirecionado con contraseña incorrecta*/
                        header("Location:".conectar::ruta()."login?m=1");
                       
                        exit();
                    }
                    
                }
            }
        }

        /*  todos los cursos en los cual esta inscrito un usuario */
        public function get_cursos_x_usuario($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT 
                td_curso_usuario.curd_id,
                tm_curso.cur_id,
                tm_curso.cur_nom,
                tm_curso.cur_descrip,
                tm_curso.cur_fechini,
                tm_curso.cur_fechfin,
                tm_usuario.usu_id,
                tm_usuario.usu_nom,
                tm_usuario.usu_apep,
                tm_usuario.usu_apem,
                tm_usuario.usu_matri,
                tm_instructor.inst_id,
                tm_instructor.inst_nom,
                tm_instructor.inst_apep,
                tm_instructor.inst_apem
                FROM td_curso_usuario INNER JOIN 
                tm_curso ON td_curso_usuario.cur_id = tm_curso.cur_id INNER JOIN
                tm_usuario ON td_curso_usuario.usu_id = tm_usuario.usu_id INNER JOIN
                tm_instructor ON tm_curso.inst_id = tm_instructor.inst_id
                WHERE 
                td_curso_usuario.usu_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        
        public function get_cursos_x_usuario_top10($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT 
                td_curso_usuario.curd_id,
                tm_curso.cur_id,
                tm_curso.cur_nom,
                tm_curso.cur_descrip,
                tm_curso.cur_fechini,
                tm_curso.cur_fechfin,
                tm_usuario.usu_id,
                tm_usuario.usu_nom,
                tm_usuario.usu_apep,
                tm_usuario.usu_apem,
                tm_usuario.usu_matri,
                tm_instructor.inst_id,
                tm_instructor.inst_nom,
                tm_instructor.inst_apep,
                tm_instructor.inst_apem
                FROM td_curso_usuario INNER JOIN 
                tm_curso ON td_curso_usuario.cur_id = tm_curso.cur_id INNER JOIN
                tm_usuario ON td_curso_usuario.usu_id = tm_usuario.usu_id INNER JOIN
                tm_instructor ON tm_curso.inst_id = tm_instructor.inst_id
                WHERE 
                td_curso_usuario.usu_id = ?
                AND td_curso_usuario.est = 1
                LIMIT 10";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

       /**
        * Devuelve la información del curso y del usuario que está registrado
        * 
        *
        */
        public  function get_cursos_usuario_x_id($cur_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT 
                td_curso_usuario.curd_id,
                tm_curso.cur_id,
                tm_curso.cur_nom,
                tm_curso.cur_descrip,
                tm_curso.cur_fechini,
                tm_curso.cur_fechfin,
                tm_usuario.usu_id,
                tm_usuario.usu_nom,
                tm_usuario.usu_apep,
                tm_usuario.usu_apem,
                tm_usuario.usu_matri,
                tm_instructor.inst_id,
                tm_instructor.inst_nom,
                tm_instructor.inst_apep,
                tm_instructor.inst_apem
                FROM td_curso_usuario INNER JOIN 
                tm_curso ON td_curso_usuario.cur_id = tm_curso.cur_id INNER JOIN
                tm_usuario ON td_curso_usuario.usu_id = tm_usuario.usu_id INNER JOIN
                tm_instructor ON tm_curso.inst_id = tm_instructor.inst_id
                WHERE 
                tm_curso.cur_id = ?
                AND td_curso_usuario.est = 1";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cur_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        
        /**
         * Devuelve los datos de un curso por su id.

         * It returns the data of a course by its id.
         * 
         * 
         */
        public function get_curso_x_id_detalle($curd_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT 
                td_curso_usuario.curd_id,
                tm_curso.cur_id,
                tm_curso.cur_nom,
                tm_curso.cur_descrip,
                tm_curso.cur_fechini,
                tm_curso.cur_fechfin,
                tm_usuario.usu_id,
                tm_usuario.usu_nom,
                tm_usuario.usu_apep,
                tm_usuario.usu_apem,
                tm_curso.cur_img,
                tm_instructor.inst_id,
                tm_instructor.inst_nom,
                tm_instructor.inst_apep,
                tm_instructor.inst_apem
                FROM td_curso_usuario INNER JOIN 
                tm_curso ON td_curso_usuario.cur_id = tm_curso.cur_id INNER JOIN
                tm_usuario ON td_curso_usuario.usu_id = tm_usuario.usu_id INNER JOIN
                tm_instructor ON tm_curso.inst_id = tm_instructor.inst_id
                WHERE 
                td_curso_usuario.curd_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $curd_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

            /*mostrar en dasbord */
        public function get_total_cursos_x_usuario($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT count(*) as total FROM tm_usuario WHERE  ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_total_cursos_x_usuario2($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT count(*) as total FROM tm_curso WHERE ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
            }
            public function get_total_cursos_x_usuario3($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT count(*) as total FROM tm_instructor WHERE ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
       
        }
        public function get_total_cursos_x_usuario4($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT count(*) as total FROM tm_categoria WHERE ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_total_cursos_x_usuario5($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT count(*) as total FROM td_curso_usuario WHERE usu_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();/* Cantidad de Cursos por Usuario finaliza aqui */
            }

        
        /**
         * Obtiene el usuario por id.
         * It gets the user by id.
         * 
         * 
         */
        public function get_usuario_x_id($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_usuario WHERE est=1 AND usu_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        

        /* Actualizar la informacion del perfil del usuario  */
        public function update_usuario_perfil($usu_id,$usu_pass,$usu_sex,$usu_telf,$usu_matri,$usu_correo){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_usuario 
                SET
                    
                    usu_pass = ?,
                    usu_sex = ?,
                    usu_telf = ?,
                    usu_matri = ?,
                    usu_correo = ?

                WHERE
                    usu_id = ?";
            $sql=$conectar->prepare($sql);
            
            $sql->bindValue(1, $usu_pass);
            $sql->bindValue(2, $usu_sex);
            $sql->bindValue(3, $usu_telf);
            $sql->bindValue(4, $usu_matri);
            $sql->bindValue(5, $usu_correo);
            $sql->bindValue(6, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        /*esta  Funcion para insertar a  los  usuario */
        public function insert_usuario($usu_nom,$usu_apep,$usu_apem,$usu_correo,$usu_pass,$usu_sex,$usu_telf,$usu_gra,$usu_grup,$rol_id,$usu_matri,$usu_pago){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_usuario (usu_id,usu_nom,usu_apep,usu_apem,usu_correo,usu_pass,usu_sex,usu_telf,usu_gra,usu_grup,rol_id,usu_matri,usu_pago,fech_crea, est) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,now(),'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_nom);
            $sql->bindValue(2, $usu_apep);
            $sql->bindValue(3, $usu_apem);
            $sql->bindValue(4, $usu_correo);
            $sql->bindValue(5, $usu_pass);
            $sql->bindValue(6, $usu_sex);
            $sql->bindValue(7, $usu_telf);
            $sql->bindValue(8, $usu_gra);
            $sql->bindValue(9, $usu_grup);
            $sql->bindValue(10, $rol_id);
            $sql->bindValue(11, $usu_matri);
            $sql->bindValue(12, $usu_pago);
            
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        /* Funcion para actualizar a los  usuario */
        public function update_usuario($usu_id,$usu_nom,$usu_apep,$usu_apem,$usu_correo,$usu_pass,$usu_sex,$usu_telf,$usu_gra,$usu_grup,$rol_id,$usu_matri,$usu_pago){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_usuario
                SET
                    usu_nom = ?,
                    usu_apep = ?,
                    usu_apem = ?,
                    usu_correo = ?,
                    usu_pass = ?,
                    usu_sex = ?,
                    usu_telf = ?,
                    usu_gra=  ?,
                    usu_grup=?,
                    rol_id = ?,
                    usu_matri = ?,
                    usu_pago = ?
                    
                WHERE
                    usu_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_nom);
            $sql->bindValue(2, $usu_apep);
            $sql->bindValue(3, $usu_apem);
            $sql->bindValue(4, $usu_correo);
            $sql->bindValue(5, $usu_pass);
            $sql->bindValue(6, $usu_sex);
            $sql->bindValue(7, $usu_telf);
            $sql->bindValue(8, $usu_gra);
            $sql->bindValue(9, $usu_grup);
            $sql->bindValue(10, $rol_id);
            $sql->bindValue(11, $usu_matri);
            $sql->bindValue(12, $usu_pago);
            $sql->bindValue(13, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        /* Eliminar */
        public function delete_usuario($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_usuario
                SET
                    est = 0
                WHERE
                    usu_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        
        /**
         * Devuelve todas las filas de la tabla tm_usuario donde la columna est es igual a 1
         * It returns all the rows from the table tm_usuario where the column est is equal to 1
         * 
         *
         */

        public function get_usuario(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_usuario WHERE est = 1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        
        /**
         * Devuelve todos los usuarios que no están en el curso.

         * It returns all the users that are not in the course.
         * 
         * @param cur_id The id of the course
         */
        public function get_usuario_modal($cur_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_usuario 
                WHERE est = 1
                AND usu_id not in (select usu_id from td_curso_usuario where cur_id=? AND est=1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cur_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        

    }
?>