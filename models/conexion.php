<?php
$servername="sql202.epizy.com";
$username="epiz_27780615";
$password="BXjWSHmtfjsCyIF";
$dbname="epiz_27780615_base_uta";
$conn= mysqli_connect($servername,$username,$password,$dbname);
$mysqli = new mysqli($servername,$username,$password,$dbname);
if(!$mysqli)
{
    die("Error en la conexion".mysqli_connect_error());
}
function utf8_converter($array)
{
    array_walk_recursive($array, function(&$item) {
        $item =utf8_encode($item);
    });
    return json_encode($array);
}

?>
