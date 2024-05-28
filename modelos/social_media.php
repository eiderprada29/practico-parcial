<?php
    class social_media extends Conectar{

        public function get_social_media(){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM social_media WHERE est=1";
            $sql=$social->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_social_media($socmed_icono,$socmed_url){
            $social = parent::conexion();
            parent::set_names();
            $sql="INSERT INTO social_media (socemed_id,socemed_icono,socmed_irl,est) VALUES(NULL,?,?,1)";
            $sql->bindValue(1, $socmed_icono);
            $sql->bindValue(2, $socmed_url);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_social_media($socmed_id,$socmed_icono,$socmed_url){
            $social = parent::conexion();
            parent::set_names();
            $sql="UPDATE usuarios
                SET
                    socmed_icono = ?,
                    socmed_url = ?
                WHERE
                    socmed_id = ?";
            $sql=$social->prepare($sql);
            sql->bindValue(1,$socmed_icono);
            sql->bindValue(2,$socmed_url);
            sql->bindValue(3,$socmed_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_social_media($socmed_id){
            $social = parent::conexion();
            parent::set_names();
            $sql = "UPDATE usuarios SET est = 0 WHERE socmed_id=?";
            $sql=$social->prepare($sql);
            $sql->bindValue(1,$socmed_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
    