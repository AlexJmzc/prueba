<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: application/json');
include 'conexion.php';
$op=$_POST['op'];
if($op===null)
{
    echo "Error";
}
else{
switch($op)
{
        case 'insertarAlumno':
            header('Content-Type: application/json');
            $cedula=$_POST['CED_EST'];
            $nombre=$_POST['NOM_EST'];
            $curso=$_POST['ID_CURSO_PER'];
            $apellido=$_POST['APE_EST'];
            $direccion=$_POST['DIR_EST'];
            $ecivil=$_POST['ECIVIL_EST'];
            $sexo=$_POST['SEXO_EST'];
            $sqlInsert="INSERT INTO estudiantes(CED_EST,ID_CURSO_PER,NOM_EST,APE_EST,DIR_EST,SEXO_EST,ECIVIL_EST) VALUES ('$cedula','$curso','$nombre','$apellido','$direccion','$sexo','$ecivil')";
            if($mysqli->query($sqlInsert)===TRUE)
            {
            echo json_encode("Se guardo correctamente");
            echo $sqlInsert;
            }
            else
            {
            echo "Error:".$sqlInsert."<br>".$mysqli->error;
            echo  $sqlInsert;
            }
            $mysqli->close();
        break;
        
            case 'editarAlumno':
                header('Content-Type: application/json');
                $cedula=$_POST['CED_EST'];
                $nombre=$_POST['NOM_EST'];
                $curso=$_POST['ID_CURSO_PER'];
                $apellido=$_POST['APE_EST'];
                $direccion=$_POST['DIR_EST'];
                $ecivil=$_POST['ECIVIL_EST'];
                $sexo=$_POST['SEXO_EST'];
                $sqlUpdate="UPDATE estudiantes SET ID_CURSO_PER='$curso',NOM_EST = '$nombre',
                APE_EST = '$apellido', DIR_EST = '$direccion',
                SEXO_EST = '$sexo', ECIVIL_EST = '$ecivil'
                WHERE CED_EST = '$cedula'";
                if($mysqli->query($sqlUpdate)===TRUE)
                {
                echo json_encode("Se actualizo correctamente");
                }
                else
                {
                echo "Error:".$sqlUpdate."<br>".$mysqli->error;
                }
                $mysqli->close();
            break;

            case 'eliminarAlumno':
                header('Content-Type: application/json');
                $cedula=$_POST['CED_EST'];
                $sqlDelete="DELETE FROM estudiantes WHERE CED_EST = '$cedula'";
                $resultado= $mysqli->query($sqlDelete);
                echo json_encode(array("correcto" => $resultado));
            
              
            break;
}
}

?>