<?php
try{
$file_db = new PDO('sqlite:project.sqlite3');
}
catch(PDOException $e) {
    echo $e->getMessage();
}
try{
$file_db->exec("CREATE TABLE IF NOT EXISTS listdevices (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,ip TEXT,port INTEGER,community TEXT,version TEXT,firstprobe TEXT,latestprobe TEXT,fail INTEGER)");}
catch(PDOException $e) {
    echo $e->getMessage();
}
$result = $file_db->query('SELECT * FROM listdevices');
foreach ($result as $result) {
    print $result['ip'].'|'.$result['port'].'|'.$result['community'].'|'.$result['version'].'|'.$result['firstprobe'].'|'.$result['latestprobe'].'|'.$result['fail']."\n";
}
?>
