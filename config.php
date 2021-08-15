<?php
/*
This file contains database configuration assuming
*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id17422540_db_knowledge');
define('DB_PASSWORD', 'N=d*avknMp86^wCc');
define('DB_NAME', 'id17422540_knowledge_hub');


$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// chack the connection
if($conn == false){
    dir('Error: Cannoth connect');
}
?>