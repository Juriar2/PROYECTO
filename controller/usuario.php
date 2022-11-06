<?php
  
    require_once("../config/config.php");
    
    require_once("../models/Usuario.php");
  
    $usuario = new Usuario();

    
    switch($_GET["op"]){

        
       /*  se utiliza para listar todos los talleres que ha llevado el alumno. */
        case "listar_cursos":
            $datos=$usuario->get_cursos_x_usuario($_POST["usu_id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["cur_nom"];
                $sub_array[] = $row["cur_fechini"];
                $sub_array[] = $row["cur_fechfin"];
                $sub_array[] = $row["inst_nom"]." ".$row["inst_apep"];
                $sub_array[] = '<button type="button" onClick="certificado('.$row["curd_id"].');"  id="'.$row["curd_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-certificate"></i></div></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);

            break;

        /*o para poder tener un  litado de  los talleres de un usuario con la contancias */
        case "listar_cursos_top10":
            $datos=$usuario->get_cursos_x_usuario_top10($_POST["usu_id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["cur_nom"];
                $sub_array[] = $row["cur_fechini"];
                $sub_array[] = $row["cur_fechfin"];
                $sub_array[] = $row["inst_nom"]." ".$row["inst_apep"];
                $sub_array[] = '<button type="button" onClick="certificado('.$row["curd_id"].');"  id="'.$row["curd_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-certificate"></i></div></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);

            break;

        /*Obtener los datos de la base de datos y mostrarlos en el formulario.*/
        /* Getting the data from the database and displaying it in the form. */
        case "mostrar_curso_detalle":
            $datos = $usuario->get_curso_x_id_detalle($_POST["curd_id"]);
            if(is_array($datos)==true and count($datos)<>0){
                foreach($datos as $row){
                    $output["curd_id"] = $row["curd_id"];
                    $output["cur_id"] = $row["cur_id"];
                    $output["cur_nom"] = $row["cur_nom"];
                    $output["cur_descrip"] = $row["cur_descrip"];
                    $output["cur_fechini"] = $row["cur_fechini"];
                    $output["cur_fechfin"] = $row["cur_fechfin"];
                    $output["cur_img"] = $row["cur_img"];
                    $output["usu_id"] = $row["usu_id"];
                    $output["usu_nom"] = $row["usu_nom"];
                    $output["usu_apep"] = $row["usu_apep"];
                    $output["usu_apem"] = $row["usu_apem"];
                    $output["inst_id"] = $row["inst_id"];
                    $output["inst_nom"] = $row["inst_nom"];
                    $output["inst_apep"] = $row["inst_apep"];
                    $output["inst_apem"] = $row["inst_apem"];
                }

                echo json_encode($output);
            }
            break;
        /* mostrar la informacion de los registro que hay en la base de datos*/
        /*show the information of the records that are in the database*/
        case "total":
            $datos=$usuario->get_total_cursos_x_usuario($_POST["usu_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $output["total"] = $row["total"];

                        }
                    echo json_encode($output);
            }
                break;
            case "total2":
            $datos=$usuario->get_total_cursos_x_usuario2($_POST["usu_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                    {
                        $output["total"] = $row["total"];

                    }
                    echo json_encode($output);

                    }
                    break;

            case "total3":
            $datos=$usuario->get_total_cursos_x_usuario3($_POST["usu_id"]);
                if(is_array($datos)==true and count($datos)>0){
                    foreach($datos as $row)
                    {
                        $output["total"] = $row["total"];

                    }
                        echo json_encode($output);

                    }
                        break;
    
            case "total4":
            $datos=$usuario->get_total_cursos_x_usuario4($_POST["usu_id"]);
                if(is_array($datos)==true and count($datos)>0){
                    foreach($datos as $row)
                    {
                    $output["total"] = $row["total"];

                }
                    echo json_encode($output);
             }
                break;    /*TODO: Total de Cursos por usuario para el dashboard  finaliza aqui*/
             
             case "total4":
            $datos=$usuario->get_total_cursos_x_usuario4($_POST["usu_id"]);
                if(is_array($datos)==true and count($datos)>0){
                    foreach($datos as $row)
                    {
                    $output["total"] = $row["total"];

                }
                    echo json_encode($output);
             }
                break;    /*TODO: Total de Cursos por usuario para el dashboard  finaliza aqui*/
                case "total5":
                    $datos=$usuario->get_total_cursos_x_usuario5($_POST["usu_id"]);
                        if(is_array($datos)==true and count($datos)>0){
                            foreach($datos as $row)
                            {
                            $output["total"] = $row["total"];
        
                        }
                            echo json_encode($output);
                     }
                    break;
        /*Mostrar informacion del alumno en el formulario de  perfil */
        /*Show student information in the profile form*/
        case "mostrar":
            $datos = $usuario->get_usuario_x_id($_POST["usu_id"]);
            if(is_array($datos)==true and count($datos)<>0){
                foreach($datos as $row){
                    $output["usu_id"] = $row["usu_id"];
                    $output["usu_nom"] = $row["usu_nom"];
                    $output["usu_apep"] = $row["usu_apep"];
                    $output["usu_apem"] = $row["usu_apem"];
                    $output["usu_correo"] = $row["usu_correo"];
                    $output["usu_sex"] = $row["usu_sex"];
                    $output["usu_pass"] = $row["usu_pass"];
                    $output["usu_gra"] = $row["usu_gra"];
                    $output["usu_grup"] = $row["usu_grup"];
                    $output["usu_gra"] = $row["usu_gra"];
                    $output["usu_grup"] = $row["usu_grup"];
                    $output["usu_telf"] = $row["usu_telf"];
                    $output["rol_id"] = $row["rol_id"];
                    $output["usu_matri"] = $row["usu_matri"];
                    $output["usu_pago"] = $row["usu_pago"];
                    
                    
                }
                echo json_encode($output);
            }
            break;
        
        /*Actualizar datos de perfil */
       /* Updating the user profile. */
        case "update_perfil":
            $usuario->update_usuario_perfil(
                $_POST["usu_id"],
                
                
                $_POST["usu_pass"],
                $_POST["usu_sex"],
                $_POST["usu_telf"],
                $_POST["usu_matri"],
                $_POST["usu_correo"],

            );
            break;
        /* Comprobando si el usuario está vacío, si lo está, insertará el usuario, si no, actualizará el
        usuario. */
        /* Checking if the user is empty, if it is, it will insert the user, if not, it will update the
        user. */
        case "guardaryeditar":
            if(empty($_POST["usu_id"])){
                $usuario->insert_usuario($_POST["usu_nom"],$_POST["usu_apep"],$_POST["usu_apem"],$_POST["usu_correo"],$_POST["usu_pass"],$_POST["usu_sex"],$_POST["usu_telf"],$_POST["usu_gra"],$_POST["usu_grup"],$_POST["rol_id"],$_POST["usu_matri"],$_POST["usu_pago"]);
            }else{
                $usuario->update_usuario($_POST["usu_id"],$_POST["usu_nom"],$_POST["usu_apep"],$_POST["usu_apem"],$_POST["usu_correo"],$_POST["usu_pass"],$_POST["usu_sex"],$_POST["usu_telf"],$_POST["usu_gra"],$_POST["usu_grup"],$_POST["rol_id"],$_POST["usu_matri"],$_POST["usu_pago"]);
            }
            break;
        /*TODO: Eliminar la usuario de la base de datos */
       /* Deleting the user from the database. */
        case "eliminar":
            $usuario->delete_usuario($_POST["usu_id"]);
            break;
        /*Mostrar todo los usuarion en la datatable */
        /* Show all users in the data table */
        case "listar":
                $datos=$usuario->get_usuario();
                $data= Array();
                foreach($datos as $row){
                    $sub_array = array();
                    $sub_array[] = $row["usu_id"];
                    $sub_array[] = $row["usu_nom"];
                    $sub_array[] = $row["usu_apep"];
                    $sub_array[] = $row["usu_apem"];
                    $sub_array[] = $row["usu_correo"];
                    $sub_array[] = $row["usu_telf"];
                    $sub_array[] = $row["usu_gra"];
                    $sub_array[] = $row["usu_grup"];
                    $sub_array[] = $row["usu_matri"];
                    $sub_array[] = $row["usu_sex"];
                    $sub_array[] = $row["usu_pago"];
                    if ($row["rol_id"]==1) {
                        $sub_array[] = "<strong>Alumno</strong>";
                    }else{
                        $sub_array[] = "<strong>Admin</strong>";
                    }
                    $sub_array[] = '<button type="button" onClick="editar('.$row["usu_id"].');"  id="'.$row["usu_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                    $sub_array[] = '<button type="button" onClick="eliminar('.$row["usu_id"].');"  id="'.$row["usu_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-minus-circle"></i></div></button>';
                    
                    $data[] = $sub_array;
                }

                $results = array(
                    "sEcho"=>1,
                    "iTotalRecords"=>count($data),
                    "iTotalDisplayRecords"=>count($data),
                    "aaData"=>$data);
                echo json_encode($results);
                break;
        /* va ser un listado al tallere que pertence el alumno */
        /* It will be a list of the workshop that the student belongs to */
        case "listar_cursos_usuario":
            $datos=$usuario->get_cursos_usuario_x_id($_POST["cur_id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["cur_nom"];
                $sub_array[] = $row["usu_nom"]." ".$row["usu_apep"]." ".$row["usu_apem"];
                $sub_array[] = $row["cur_fechini"];
                $sub_array[] = $row["cur_fechfin"];
                $sub_array[] = $row["inst_nom"]." ".$row["inst_apep"];
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["curd_id"].');"  id="'.$row["curd_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-close"></i></div></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;

        /* esta funcio va listar todo los los alumno para generar su constancia*/
        case "listar_detalle_usuario":
            $datos=$usuario->get_usuario_modal($_POST["cur_id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = "<input type='checkbox' name='detallecheck[]' value='". $row["usu_id"] ."'>";
                $sub_array[] = $row["usu_nom"];
                $sub_array[] = $row["usu_apep"];
                $sub_array[] = $row["usu_apem"];
                $sub_array[] = $row["usu_correo"];
                $sub_array[] = $row["usu_grup"];

                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;

            
        
            
    }
?>