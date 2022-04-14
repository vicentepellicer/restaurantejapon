<?php

if(isset($_POST['bt_eliminar'])){
    $sql = "DELETE FROM `user_info` WHERE `id` = ".$row['id']."";
}

?>