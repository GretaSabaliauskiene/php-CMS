<?php

$conn = mysqli_connect('localhost', 'root', 'mysql', 'cms');
if ($conn) {
   echo "Connection succesfull!!";
} else {
   die("Database connection failed");
}
