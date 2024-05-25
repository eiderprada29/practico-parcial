<?php
class Usuario extends Conectar {
    public function login() {
        $conectar = parent::Conexion();
        parent::set_names();

        if (isset($_POST["enviar"])) {
            $correo = $_POST["email"];
            $password = $_POST["contrasena"];

            if (empty($correo) || empty($password)) {
                echo '<script>
                        window.location.href = "'.Conectar::ruta().'login.php?m=2";
                      </script>';
                exit();
            } else {
                $sql = "SELECT * FROM usuarios WHERE email = ? AND password = ? AND estado=1 ";
                $stmt = $conectar->prepare($sql);
                $stmt->bindValue(1, $correo);
                $stmt->bindValue(2, $password);
                $stmt->execute();
                $resultado = $stmt->fetch();

                if (is_array($resultado) && count($resultado) > 0) {
                    $_SESSION["id"] = $resultado["id"];
                    $_SESSION["nombre"] = $resultado["nombre"];
                    $_SESSION["email"] = $resultado["email"];
                    echo '<script>
                            window.location.href = "'.Conectar::ruta().'/view/inicio.php";
                          </script>';
                    exit();
                } else {
                    echo '<script>
                            window.location.href = "'.Conectar::ruta().'login.php?m=1";
                          </script>';
                    exit();
                }
            }
        }
    }
}