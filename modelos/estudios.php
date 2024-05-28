<?php   
    for($i=0;$i<sizeof($soc);$i++):
?>
<?php
    class estudios extends Conectar{

        public function get_estudios(){
            $estudios = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM estudios WHERE est=1";
            $sql=$estudios->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_estudios($titulo,$descripcion, $fecha){
            $estudios = parent::conexion();
            parent::set_names();
            $sql="INSERT INTO estudios (id,titulo,descripcion,fecha) VALUES(NULL,?,?,?)";
            $sql->bindValue(1, $titulo);
            $sql->bindValue(2, $descripcion);
            $sql->bindValue(3, $fecha);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_estudios($id,$titulo,$descripcion,$fecha){
            $estudios = parent::conexion();
            parent::set_names();
            $sql="UPDATE usuarios
                SET
                    titulo = ?,
                    descripcion = ?
                    fecha = ?
                WHERE
                    id = ?";
            $sql=$estudios->prepare($sql);
            sql->bindValue(1,$tiutlo);
            sql->bindValue(2,$descripcion);
            sql->bindValue(3,$fecha);
            sql->bindValue(4,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_estudios($id){
            $estudios = parent::conexion();
            parent::set_names();
            $sql = "UPDATE usuarios SET est = 0 WHERE id=?";
            $sql=$estudios->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
    