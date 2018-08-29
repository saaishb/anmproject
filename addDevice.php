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
	$result = $file_db->query('SELECT * FROM listdevices');
	$count = 0;
	foreach ($result as $result) {
		if($result['ip']==$ip && $result['port']==$port && $result['community']==$community && $result['version']==$version){
			$count = $count+1;
		}
	}
	if ($count ==0){
	
		$file_db->exec("INSERT INTO listdevices (ip,port,community,version) VALUES ('$ip','$port','$community','$version')");
		echo "OK";

	}
	else{
		echo "FALSE";
		}
}


$file_db=null;
?>
