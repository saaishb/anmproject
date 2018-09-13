<?php
try{
$file_db = new PDO('sqlite:project.sqlite3');
}
catch(PDOException $e) {
    echo $e->getMessage();
}





$result = $file_db->query('SELECT * FROM list');
foreach ($result as $result) {
	
	
    print $result['ip'].'|'.$result['vlan'].'|'.$result['port'].'|'.$result['macs'].'|'."\n";
}
?>
