<?php
    class trabajosrealizados extends Conectar{

        public function get_trabajosrealizados(){
            $trabajosrealizados = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM trabajosrealizados WHERE est=1";
            $sql=$trabajosrealizados->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_trabajosrealizados($titulo,$descripcion, $fecha){
            $trabajosrealizados = parent::conexion();
            parent::set_names();
            $sql="INSERT INTO trabajosrealizados (id,titulo,descripcion,fecha) VALUES(NULL,?,?,?)";
            $sql->bindValue(1, $titulo);
            $sql->bindValue(2, $descripcion);
            $sql->bindValue(3, $fecha);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_trabajosrealizados($id,$titulo,$descripcion,$fecha){
            $trabajosrealizados = parent::conexion();
            parent::set_names();
            $sql="UPDATE usuarios
                SET
                    titulo = ?,
                    descripcion = ?
                    fecha = ?
                WHERE
                    id = ?";
            $sql=$trabajosrealizados->prepare($sql);
            sql->bindValue(1,$tiutlo);
            sql->bindValue(2,$descripcion);
            sql->bindValue(3,$fecha);
            sql->bindValue(4,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_trabajosrealizados($id){
            $trabajosrealizados = parent::conexion();
            parent::set_names();
            $sql = "UPDATE usuarios SET est = 0 WHERE id=?";
            $sql=$trabajosrealizados->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }