<?php
    class menu extends Conectar{

        public function get_menu(){
            $menu = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM menu WHERE est=1";
            $sql=$menu->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_menu($opcion,$enlace){
            $menu = parent::conexion();
            parent::set_names();
            $sql="INSERT INTO menu (id,opcion,enlace) VALUES(NULL,?,?)";
            $sql->bindValue(1, $opcion);
            $sql->bindValue(2, $enlace);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_menu($id,$opcion,$enlace){
            $menu = parent::conexion();
            parent::set_names();
            $sql="UPDATE usuarios
                SET
                    opcion = ?,
                    enlace = ?
                WHERE
                    id = ?";
            $sql=$menu->prepare($sql);
            sql->bindValue(1,$opcion);
            sql->bindValue(2,$enlace);
            sql->bindValue(3,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_menu($id){
            $menu = parent::conexion();
            parent::set_names();
            $sql = "UPDATE usuarios SET est = 0 WHERE id=?";
            $sql=$menu->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }