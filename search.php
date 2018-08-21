<?php
include('config.php');
$mac = $_GET['mac'];
$macw = str_replace('*','%',$mac);
$result = $file_db->query("SELECT * FROM list where macs LIKE '%$macw%'");
$array = array();
foreach ($result as $result) {
		$out = $result['ip'].'|'.$result['vlan'].'|'.$result['port'].'|'.$result['macs'];
		if (in_array($out, $array)){
			
		}
		else{
			array_push($array, $out);
		}
}
if(empty($array)){
	$res = $file_db->query("SELECT * FROM listdevices");
	$count = 0;
	foreach ($res as $res) {
		$count = $count+1;
	}
	print "No match in $count devices.";
}
else{
foreach ($array as $elem) {
	print $elem."\n";
}
}
?>
