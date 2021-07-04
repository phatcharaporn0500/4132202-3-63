<?php
require "../conDB.php";

$id = $ $_GET['id'];
$_sub_id = $_GET['sub_id'];

try{
    $sql = "DELETE FROM tb_register WHERE id = '$id' AND subject_id = '$_sub_id'";
    $mysqli->query($sql);

    if($mysqli->errno == null)
        header("Location:/add.php");
}
catch(Excetion $e){
    echo $e->getMessage();
}
?>