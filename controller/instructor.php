<?php
    /* Llamando a cadena de Conexion */
    require_once("../config/config.php");
    /* Llamando a la clase */
    require_once("../models/Instructor.php");
    /* Inicializando Clase */
    $instructor = new Instructor();

    /* Opcion de solicitud de controller */
    switch($_GET["op"]){
       /* Comprobando si el usuario está vacío, si lo está, insertará el usuario, si no, actualizará el
        usuario. */
        /* Checking if the user is empty, if it is, it will insert the user, if not, it will update the
        user. */
        case "guardaryeditar":
            if(empty($_POST["inst_id"])){
                $instructor->insert_instructor($_POST["inst_nom"],$_POST["inst_apep"],$_POST["inst_apem"],$_POST["inst_correo"],$_POST["inst_sex"],$_POST["inst_telf"]);
            }else{
                $instructor->update_instructor($_POST["inst_id"],$_POST["inst_nom"],$_POST["inst_apep"],$_POST["inst_apem"],$_POST["inst_correo"],$_POST["inst_sex"],$_POST["inst_telf"]);
            }
        break;
        
        /* Creating a JSON object. */
        case "mostrar":
            $datos = $instructor->get_instructor_id($_POST["inst_id"]);
            if(is_array($datos)==true and count($datos)<>0){
                foreach($datos as $row){
                    $output["inst_id"] = $row["inst_id"];
                    $output["inst_nom"] = $row["inst_nom"];
                    $output["inst_apep"] = $row["inst_apep"];
                    $output["inst_apem"] = $row["inst_apem"];
                    $output["inst_correo"] = $row["inst_correo"];
                    $output["inst_sex"] = $row["inst_sex"];
                    $output["inst_telf"] = $row["inst_telf"];
                }
                echo json_encode($output);
            }
            break;
        /***para hacer una eliminacion en desde la visra */
        case "eliminar":
            $instructor->delete_instructor($_POST["inst_id"]);
            break;
        
        /* va ser un listado de todo los instructores*/
        /* will be a list of all instructors */
        case "listar":
            $datos=$instructor->get_instructor();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["inst_id"];
                $sub_array[] = $row["inst_nom"];
                $sub_array[] = $row["inst_apep"];
                $sub_array[] = $row["inst_apem"];
                $sub_array[] = $row["inst_correo"];
                $sub_array[] = $row["inst_telf"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["inst_id"].');"  id="'.$row["inst_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-pencil-square-o"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["inst_id"].');"  id="'.$row["inst_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-minus-circle"></i></div></button>';                
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;
        /*Crear una lista desplegable de todos los instructores*/
        /* Creating a dropdown list of all the instructors. */
        case "combo":
            $datos=$instructor->get_instructor();
            if(is_array($datos)==true and count($datos)>0){
                $html= " <option label='Seleccione'></option>";
                foreach($datos as $row){
                    $html.= "<option value='".$row['inst_id']."'>".$row['inst_nom']." ".$row['inst_apep']." ".$row['inst_apem']."</option>";
                }
                echo $html;
            }
            break;
    }
?>