<?php
    include 'dbconnect.php';

    session_start();

    if(isset($_GET['id']))
    $sql = "SELECT * FROM hewan WHERE id=".$_GET['id'];
    $result = mysqli_query($con, $sql);
    $product = mysqli_fetch_array($result);



    $id=$product['id'];

    $con->query("DELETE FROM hewan WHERE id='$id'");
    header("location: product_admin.php?deleteproduct=$id");
?>