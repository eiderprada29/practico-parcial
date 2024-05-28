<?php
    class informacionpersonal extends Conectar{

        public function get_informacionpersonal(){
            $informacionpersonal = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM informacionpersonal WHERE est=1";
            $sql=$informacionpersonal->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_informacionpersonal($nomre,$direccion, $telefono, $email){
            $informacionpersonal = parent::conexion();
            parent::set_names();
            $sql="INSERT INTO informacionpersonal (id,nombre,direccion,telefono,email) VALUES(NULL,?,?,?,?)";
            $sql->bindValue(1, $nombre);
            $sql->bindValue(2, $direccion);
            $sql->bindValue(3, $telefono);
            $sql->bindValue(4, $email);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_informacionpersonal($id,$nombre,$direccion,$telefono,$email){
            $informacionpersonal = parent::conexion();
            parent::set_names();
            $sql="UPDATE usuarios
                SET
                    nombre = ?,
                    direccion = ?
                    telefono = ?
                    email = ?
                WHERE
                    id = ?";
            $sql=$informacionpersonal->prepare($sql);
            sql->bindValue(1,$nombre);
            sql->bindValue(2,$direccion);
            sql->bindValue(3,$telefono);
            sql->bindValue(4,$email);
            sql->bindValue(5,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_informacionpersonal($id){
            $informacionpersonal = parent::conexion();
            parent::set_names();
            $sql = "UPDATE usuarios SET est = 0 WHERE id=?";
            $sql=$informacionpersonal->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }