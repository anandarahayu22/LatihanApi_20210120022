<?php
 header("Access-Control-Allow-Origin: *");
 $connection = new mysqli("localhost","root","","api");
 $data = mysqli_query($connection, "select * from motor");
 $data = mysqli_fetch_all($data, MYSQLI_ASSOC);
 echo json_encode($data);