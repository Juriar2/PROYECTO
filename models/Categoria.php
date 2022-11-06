<?php
    class Categoria extends Conectar{
        /****insertar */
        public function insert_categoria($cat_nom){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_categoria (cat_id, cat_nom,fech_crea, est) VALUES (NULL,?,now(),'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cat_nom);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

       /** actualizar */
        public function update_categoria($cat_id,$cat_nom){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_categoria
                SET
                    cat_nom = ?
                WHERE
                    cat_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cat_nom);
            $sql->bindValue(2, $cat_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        /****eliminar */
        public function delete_categoria($cat_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_categoria
                SET
                    est = 0
                WHERE
                    cat_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cat_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        
        /**
         * .Devuelve todas las categorías de la base de datos.
         * 
         * 
         */
        public function get_categoria(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE est = 1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

       
        /**
         * Obtiene la categoría de la base de datos.
         * 
         * 
         */
        public function get_categoria_id($cat_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE cat_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cat_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>