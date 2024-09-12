<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    include 'connection.php';
    $sql = "DELETE FROM client WHERE id=$id";
    $conn->query($sql);
}

header("location:basic.php");
exit;
