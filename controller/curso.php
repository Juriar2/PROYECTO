<?php
    /* cadena de Conexion */
    require_once("../config/config.php.");
    /* Llamando a la clase */
    require_once("../models/Curso.php");
    /* Inicializando Clase */
    $curso = new Curso();

    /* solicitud de controller */
    switch($_GET["op"]){
        /* Guardar y editar cuando  */
        case "guardaryeditar":
            if(empty($_POST["cur_id"])){
                $curso->insert_curso($_POST["cat_id"],$_POST["cur_nom"],$_POST["cur_descrip"],$_POST["cur_fechini"],$_POST["cur_fechfin"],$_POST["inst_id"]);
            }else{
                $curso->update_curso($_POST["cur_id"],$_POST["cat_id"],$_POST["cur_nom"],$_POST["cur_descrip"],$_POST["cur_fechini"],$_POST["cur_fechfin"],$_POST["inst_id"]);
            }
            break;
     
        case "mostrar":
            $datos = $curso->get_curso_id($_POST["cur_id"]);
            if(is_array($datos)==true and count($datos)<>0){
                foreach($datos as $row){
                    $output["cur_id"] = $row["cur_id"];
                    $output["cat_id"] = $row["cat_id"];
                    $output["cur_nom"] = $row["cur_nom"];
                    $output["cur_descrip"] = $row["cur_descrip"];
                    $output["cur_fechini"] = $row["cur_fechini"];
                    $output["cur_fechfin"] = $row["cur_fechfin"];
                    $output["inst_id"] = $row["inst_id"];
                }
                echo json_encode($output);
            }
            break;
        /* Eliminar segun ID */
        case "eliminar":
            $curso->delete_curso($_POST["cur_id"]);
            break;
        
        case "listar":
            $datos=$curso->get_curso();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["cat_nom"];
                $sub_array[] = '<a href="'.$row["cur_img"].'" target="_blank">'.strtoupper($row["cur_nom"]).'</a>';
                $sub_array[] = $row["cur_fechini"];
                $sub_array[] = $row["cur_fechfin"];
                $sub_array[] = $row["inst_nom"] ." ". $row["inst_apep"] ." ". $row["inst_apem"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["cur_id"].');"  id="'.$row["cur_id"].'" class="btn btn-outline-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["cur_id"].');"  id="'.$row["cur_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-close"></i></div></button>';                
                $sub_array[] = '<button type="button" onClick="imagen('.$row["cur_id"].');"  id="'.$row["cur_id"].'" class="btn btn-outline-success btn-icon"><div><i class="fa fa-file"></i></div></button>';                
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;
        
        case "combo":
            $datos=$curso->get_curso();
            if(is_array($datos)==true and count($datos)>0){
                $html= " <option label='Seleccione'></option>";
                foreach($datos as $row){
                    $html.= "<option value='".$row['cur_id']."'>".$row['cur_nom']."</option>";
                }
                echo $html;
            }
            break;

        case "eliminar_curso_usuario":
            $curso->delete_curso_usuario($_POST["curd_id"]);
            break;
        /* detalle de curso usuario */
        case "insert_curso_usuario":
         
            $datos = explode(',', $_POST['usu_id']);
            /* Registrar tantos usuarios vengan de la vista */
            $data = Array();
            foreach($datos as $row){
                $sub_array = array();
                $idx=$curso->insert_curso_usuario($_POST["cur_id"],$row);
                $sub_array[] = $idx;
                $data[] = $sub_array;
            }

            echo json_encode($data);
            break;

       case "update_imagen_curso":
            $curso->update_imagen_curso($_POST["curx_idx"],$_POST["cur_img"]);
            break;
        
    }
?>