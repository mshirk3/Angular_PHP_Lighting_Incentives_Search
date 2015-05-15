<?php


$con = mysql_connect("localhost","********","********");





if (!$con) {


  die('Could not connect: ' . mysql_error());


}





mysql_select_db("********", $con);



$result = mysql_query("SELECT T_L_INCENTIVES_ID, GROUP_CONCAT(long_description)
FROM incentive_wide_atomic_v
GROUP BY T_L_INCENTIVES_ID DESC");

$names = array();
$names['name'] = 'names';

$values = array();
$values['name'] = 'year_area_sqft';

echo "[";
while($row = mysql_fetch_array($result)) {

foreach ($names as $name){

	$resultstr[] = "{\"IncentiveID\":\"" . $row[0] . "\",\"Prereqs\":\"" . $prereqs . "\"}"; 

}
$coolstring = implode(",",$resultstr);

}
echo $coolstring;
echo "]";




?> 
