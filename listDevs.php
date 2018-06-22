<?php
try{
$file_db = new PDO('sqlite:project.sqlite3');
}
catch(PDOException $e) {
    echo $e->getMessage();
}
$result = $file_db->query('SELECT * FROM listdevices');
foreach ($result as $result) {
    print $result['ip'].'|'.$result['port'].'|'.$result['community'].'|'.$result['version'].'|'.$result['firstprobe'].'|'.$result['latestprobe'].'|'.$result['fail'].'<br />';
}
?>
