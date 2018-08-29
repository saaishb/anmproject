<?php
   try{
$file_db = new PDO('sqlite:project.sqlite3');
}catch(PDOException $e) {
    echo $e->getMessage();
}
?>
