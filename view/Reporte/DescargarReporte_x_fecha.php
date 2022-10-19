<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <!--Importante--->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar</title>
    <style>
    .color{
        background-color: #9BB;  
    }
</style>
</head>
<body>
    
<?php
include('config.php');
$fecha = date("d_m_Y");


/**PARA FORZAR LA DESCARGA DEL EXCEL */
header("Content-Type: text/html;charset=utf-8");
header("Content-Type: application/vnd.ms-excel charset=iso-8859-1");
$filename = "ReporteExcel_" .$fecha. ".xls";
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Disposition: attachment; filename=" . $filename . "");


/***RECIBIENDO LAS VARIABLE DE LA FECHA */
$fechaInit = date("Y-m-d", strtotime($_POST['fecha_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_POST['fechaFin']));

                      

$sqluser = ("SELECT * FROM tm_usuario,tm_curso and WHERE usu_id=?");
$query = mysqli_query($con, $sqluser);
?>


<table style="text-align: center;" border='1' cellpadding=1 cellspacing=1>
<thead>
    <tr style="background: #D0CDCD;">
    <th>#</th>
    <th class="color">Nombre</th>
    <th class="color">paterno</th>
    <th class="color">materno</th>
    <th class="color">Correo</th>
    <th class="color">Telefono</th>
    <th class="color">Matricula</th>
    <th class="color">Fecha</th>
    </tr>
</thead>

<?php
$i =1;
    while ($dataRow = mysqli_fetch_array($query)) { ?>
    <tbody>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $dataRow['usu_nom']; ?></td>
            <td><?php echo $dataRow['usu_apep']; ?></td>
            <td><?php echo $dataRow['usu_apem'] ; ?></td>
            <td><?php echo $dataRow['usu_correo'] ; ?></td>
            <td><?php echo $dataRow['usu_telf'] ; ?></td>
            <td><?php echo $dataRow['usu_matri'] ; ?></td>
            <td><?php echo $dataRow['fech_crea'] ; ?></td>
        </tr>
    </tbody>
    
<?php } ?>
</table>

</body>
</html>


