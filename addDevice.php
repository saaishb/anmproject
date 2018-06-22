<?php
include('config.php');
try{
$file_db->exec("CREATE TABLE IF NOT EXISTS listdevices (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,ip TEXT,port INTEGER,community TEXT,version TEXT,firstprobe TEXT,latestprobe TEXT,fail INTEGER)");}
catch(PDOException $e) {
    echo $e->getMessage();
}
$ip = $_GET['ip'];
$port = $_GET['port'];
$community = $_GET['community'];
$version = $_GET['version'];
#echo $ip.$port.$community.$version;
if(empty($ip) || empty($port)||empty($community) || empty($version)) {
echo "FALSE";
}
else{
$file_db->exec("INSERT INTO listdevices (ip,port,community,version) VALUES ('$ip','$port','$community','$version')");
echo "OK";
}


$file_db=null;
?>
