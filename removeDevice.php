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
	$x = $file_db->exec("DELETE FROM listdevices WHERE ip='$ip' AND port='$port'AND community='$community' AND version='$version'");
	if($X==1){
		echo "OK";
	}
	else{
		echo "FALSE";
	}
}
$file_db=null;
?>
