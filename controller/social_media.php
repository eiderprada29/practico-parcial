<?php
    require_once("../config/config.php");
    require_once("../modelos/social_media.php");
    $social_media = new social_media();

    switch($_GET["op"]){
        case "mostrar":
            $datos = social_media->get_social_mediaXid($_POST["socmed_id"]);
            if(is_array($datos)==true and count($datos)<>0){
                foreach($datos as $row){
                    $output["socmed_icono"] = $row["socmed_icono"];
                    $output["socmed_url"] = $row[socmed_url];
                }
                echo json_encode($output);
            }
            break;
        
        case "modificar":
            $social_media->update_social_media(
                $_POST["socmed_id"],
                $_POST["socmed_icono"],
                $_POST["socmed_url"]
            );
            break;
        
        case "guardaryeditar":
            if(empty($_POST["socmed_id"])){
                $social_media->insert_social_media($_POST["socmed_icono"],$_POST["socmed_url"]);
            }else{
                $social_media->update_social_media($_POST["socmed_id"],$_POST["socmed_icono"], $_POST["socmed_url"]);
            }
            break;

        case "eliminar":
            break;
        
        case "listar":
            break;
    }