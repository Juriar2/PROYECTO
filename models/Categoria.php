<?php
    class Categoria extends Conectar{
       
        public function insert_categoria($cat_nom){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_categoria (cat_id, cat_nom,fech_crea, est) VALUES (NULL,?,now(),'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cat_nom);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

       
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

        /*TODO: Listar todas las categorias */
        /**
         * It returns all the categories from the database.
         * 
         * @return The result of the query.
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
         * It gets the category id from the database.
         * 
         * @param cat_id The ID of the category you want to get.
         * 
         * @return The result of the query.
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