<?php
include "conn.php";

$sql ="CREATE TABLE `travell`.`signup` ( `id` INT NOT NULL AUTO_INCREMENT , `fname` VARCHAR(200) NOT NULL , `lname` VARCHAR(200) NOT NULL , `email` VARCHAR(200) NOT NULL , `password` VARCHAR(200) NOT NULL , PRIMARY KEY (`id`))";

$result = mysqli_query($conn,$sql);

if(!$result){
    die("Unable to create table: ".mysqli_error($conn));
}
echo "Successful";

?>