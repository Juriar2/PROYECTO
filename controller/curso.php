<?php
    /*TODO: Llamando a cadena de Conexion */
    require_once("../config/config.php");
    /*TODO: Llamando a la clase */
    require_once("../models/Curso.php");
    /*TODO: Inicializando Clase */
    $curso = new Curso();

    
    switch($_GET["op"]){
        /* Comprobando si el usuario está vacío, si lo está, insertará el usuario, si no, actualizará el
        usuario. */
        /* Checking if the user is empty, if it is, it will insert the user, if not, it will update the
        user. */
        case "guardaryeditar":
            if(empty($_POST["cur_id"])){
                $curso->insert_curso($_POST["cat_id"],$_POST["cur_nom"],$_POST["cur_descrip"],$_POST["cur_fechini"],$_POST["cur_fechfin"],$_POST["inst_id"]);
            }else{
                $curso->update_curso($_POST["cur_id"],$_POST["cat_id"],$_POST["cur_nom"],$_POST["cur_descrip"],$_POST["cur_fechini"],$_POST["cur_fechfin"],$_POST["inst_id"]);
            }
            break;
        
        /* Obtener la información de la base de datos. */
        /* Get the information from the database. */
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
        /*Eliminar*/
        case "eliminar":
            $curso->delete_curso($_POST["cur_id"]);
            break;
        /* se encarga de mostrar los datos en la tabla. */
       /* is responsible for displaying the data in the table. */
        case "listar":
            $datos=$curso->get_curso();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["cat_nom"];
                $sub_array[] = '<a style="color:black;" href="'.$row["cur_img"].'" target="_blank">'.strtoupper($row["cur_nom"]).'</a>';
                $sub_array[] = $row["cur_fechini"];
                $sub_array[] = $row["cur_fechfin"];
                $sub_array[] = $row["inst_nom"] ." ". $row["inst_apep"] ." ". $row["inst_apem"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["cur_id"].');"  id="'.$row["cur_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-pencil-square-o"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["cur_id"].');"  id="'.$row["cur_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-minus-circle"></i></div></button>';                
                $sub_array[] = '<button type="button" onClick="imagen('.$row["cur_id"].');"  id="'.$row["cur_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-file-image-o"></i></div></button>';                
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;
        /* Listar toda la informacion segun formato de datatable */
        /* Una función que se utiliza para llenar una lista desplegable. */
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
            /******eliminar */
        case "eliminar_curso_usuario":
            $curso->delete_curso_usuario($_POST["curd_id"]);
            break;
        /*TODO: Insetar detalle de curso usuario */
        case "insert_curso_usuario":
            /* Array de usuario separado por comas */
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