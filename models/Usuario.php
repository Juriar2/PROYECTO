<?php
    class Usuario extends Conectar{
        /*TODO: Funcion para login de acceso del usuario */
        public function login(){
            $conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["usu_correo"];
                $pass = $_POST["usu_pass"];
               
                if(empty($correo) and empty($pass)){
                    /*TODO: En caso esten vacios correo y contraseña, devolver al index con mensaje = 2 */
                    header("Location:".conectar::ruta()."Login?m=2");
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
                        /*TODO: Si todo esta correcto indexar en home */
                        header("Location:".Conectar::ruta()."view/UsuHome/Usuario");
                        exit();
                    }else{
                        /*TODO: En caso no coincidan el usuario o la contraseña */
                        header("Location:".conectar::ruta()."Login?m=1");
                        exit();
                    }
                    
                }
            }
        }

        /*TODO: Mostrar todos los cursos en los cuales esta inscrito un usuario */
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

        /*TODO: Mostrar todos los cursos en los cuales esta inscrito un usuario */
        public function get_cursos_x_usuario_top_limited($usu_id){
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

        /*TODO: Mostrar todos los datos de un curso por su id de detalle */
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

        /*TODO: Cantidad de Cursos por Usuario */
        public function get_total_cursos_x_usuario($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT count(*) as total FROM td_curso_usuario WHERE usu_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        /*TODO: Mostrar los datos del usuario segun el ID */
        public function get_usuario_x_id($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_usuario WHERE est=1 AND usu_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

      

    }
?>