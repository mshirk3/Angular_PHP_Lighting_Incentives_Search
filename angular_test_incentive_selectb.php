<?php


$con = mysql_connect("localhost","********","********");





if (!$con) {


  die('Could not connect: ' . mysql_error());


}





mysql_select_db("********", $con);



$result = mysql_query("SELECT T_L_INCENTIVES_ID, REBATE_CODE, REBATE_TYPE, LONG_DESC, PER_UNIT_INCENTIVE, PER_UNIT_ID, E_LIGHTING_TYPE, R_LIGHTING_TYPE,
PER_KWH_INCENT, PER_KW_INCENT, INCENT_TECH_ID, E_FIXTURE_MIN, E_FIXTURE_MAX, R_FIXTURE_MIN, R_FIXTURE_MAX, T_L_INCENTIVES_OUTDOOR,PAYBACK, UTILITY_ABBREV_NAME
, COUNT(DISTINCT T_L_INCENT_PREREQ_ID) num_prereqs, GROUP_CONCAT(long_description,',,')
FROM incentive_wide_atomic_v
GROUP BY T_L_INCENTIVES_ID DESC");

$names = array();
$names['name'] = 'names';

$values = array();
$values['name'] = 'year_area_sqft';

echo "[";
while($row = mysql_fetch_array($result)) {

foreach ($names as $name){
	$yo = array();
	$prereqs = $row[19]; 
	$prereqsb = explode(",,,", $prereqs);
	$prereqsc = count($prereqsb);
	$i = 1;
	$text="";
	while ($i <= $prereqsc){
	foreach ($prereqsb as $prereq){ 
	$text .= '{"Prereq":"' . $prereq . '"},' ;
	$i++;}
	}
	$prereqstrimmed = rtrim($text,', ');
	
	
	
	$lighting = $row[6]; 
	switch($lightingR){
	
	case $lighting == 'COMPACT FLUORESCENT (CFL)': $lightingRImage = '/images/cfl_icon.jpg'; break;
	
	 case $lighting == 'FLUORESCENT - T12': $lightingImage = '/images/T12_icon.jpg'; break; 
	 case $lighting == 'FLUORESCENT - T5': $lightingImage = '/images/T5_icon.jpg'; break; 
	 case $lighting == 'FLUORESCENT - UNCATEGORIZED': $lightingImage = '/images/T12_icon.jpg'; break; 
	 case $lighting == 'Mercury Vapor': $lightingImage = '/images/mercuryvapor_icon.jpg'; break; 
	 case $lighting == 'Standard Metal Halide': $lightingImage = '/images/metalhalide_icon.jpg'; break; 
	 case $lighting == 'PHOTOCELL': $lightingImage = '/images/ledmr16_icon.jpg'; break; 
	 case $lighting == 'High-Pressure Sodium': $lightingImage = '/images/psmh_icon.jpg'; break; 
	 case $lighting == 'OTHER': $lightingImage = '/images/T12_icon.jpg'; break; 
	 case $lighting == 'Low-Pressure Sodium': $lightingImage = '/images/psmh_icon.jpg'; break; 
	 case $lighting == 'HIGH PRESSURE SODIUM': $lightingImage = '/images/psmh_icon.jpg'; break; 
	 case $lighting == 'Any': $lightingImage = '/images/incandescent_icon.jpg'; break; 
	 case $lighting == 'Any A Type Lamp': $lightingImage = '/images/incandescent_icon.jpg'; break; 
	 case $lighting == 'LINEAR FLUORESCENT': $lightingImage = '/images/T12_icon.jpg'; break; 
	 case $lighting == 'Incandescent': $lightingImage = '/images/incandescent_icon.jpg'; break; 
	 case $lighting == 'LED': $lightingImage = '/images/ledmr16_icon.jpg'; break; 
	 case $lighting == 'T8': $lightingImage = '/images/T12_icon.jpg'; break; 
	 case $lighting == 'T5': $lightingImage = '/images/T12_icon.jpg'; break; 
	 case $lighting == 'T12': $lightingImage = '/images/T12_icon.jpg'; break; 
	 case $lighting == 'T12HO': $lightingImage = '/images/T12_icon.jpg'; break; 
	 case $lighting == 'PSMH/CMH': $lightingImage = '/images/psmh_icon.jpg'; break; 
	 case $lighting == 'T5HO': $lightingImage = '/images/T12_icon.jpg'; break; 
	 case $lighting == 'PAR30': $lightingImage = '/images/par30_icon.jpg'; break; 
	 case $lighting == 'LED PAR38': $lightingImage = '/images/par38_icon.jpg'; break; 
	 case $lighting == 'PAR38': $lightingImage = '/images/par38_icon.jpg'; break; 
	 case $lighting == 'Halogen': $lightingImage = '/images/halogen_icon.jpg'; break; 
	 case $lighting == 'MR16': $lightingImage = '/images/mr16_icon.jpg'; break; 
	 case $lighting == 'PAR IR': $lightingImage = '/images/parir_icon.jpg'; break; 
	 case $lighting == 'MR16': $lightingImage = '/images/mr16_icon.jpg'; break; 
	 case $lighting == 'Induction': $lightingImage = '/images/induction_icon.jpg'; break; 
	 case $lighting == 'LED A Lamp': $lightingImage = '/images/ledalamp_icon.jpg'; break; 
	 case $lighting == 'LED A Lamp': $lightingImage = '/images/ledalamp_icon.jpg'; break; 
	 case $lighting == 'PAR Halogen': $lightingImage = '/images/parhalogen_icon.jpg'; break; 
	 case $lighting == 'PAR Halogen': $lightingImage = '/images/parhalogen_icon.jpg'; break; 
	 case $lighting == 'Pulse-Start Metal Halide': $lightingImage = '/images/psmh_icon.jpg'; break; 
	 case $lighting == 'Pulse-Start Metal Halide': $lightingImage = '/images/psmh_icon.jpg'; break; 
	 case $lighting == 'Reduced Wattage T5 HO': $lightingImage = '/images/reducedwattT5HO_icon.jpg'; break; 
	 case $lighting == 'Reduced Wattage T8': $lightingImage = '/images/reducedwattT8_icon.jpg'; break; 
	 case $lighting == 'T12 HO': $lightingImage = '/images/T12HO_icon.jpg'; break; 
	 case $lighting == 'T5 HO': $lightingImage = '/images/T5HO_icon.jpg'; break; 
	 case $lighting == 'High-Performance T8': $lightingImage = '/images/highperformanceT8_icon.jpg'; break; 
	 case $lighting == 'High-Performance T5': $lightingImage = '/images/highperformanceT5_icon.jpg'; break; 
	 case $lighting == 'Super T8': $lightingImage = '/images/highperformanceT8_icon.jpg'; break;
	 default: $lightingImage = '/images/T12_icon.jpg';
	}
	
	
	
	
	$lightingR = $row[7]; 
switch($lightingR){
case 'COMPACT FLUORESCENT (CFL)': $lightingRImage = '/images/cfl_icon.jpg'; break;
case 'FLUORESCENT - T12case ': $lightingRImage = '/images/T12_icon.jpg'; break; 
	case 'FLUORESCENT - T5case ': $lightingRImage = '/images/T5_icon.jpg'; break; 
	case 'FLUORESCENT - UNCATEGORIZEDcase ': $lightingRImage = '/images/T12_icon.jpg'; break; 
	case 'Mercury Vaporcase ': $lightingRImage = '/images/mercuryvapor_icon.jpg'; break; 
	case 'Standard Metal Halidecase ': $lightingRImage = '/images/metalhalide_icon.jpg'; break; 
	case 'PHOTOCELLcase ': $lightingRImage = '/images/ledmr16_icon.jpg'; break; 
	case 'High-Pressure Sodiumcase ': $lightingRImage = '/images/psmh_icon.jpg'; break; 
	case 'OTHERcase ': $lightingRImage = '/images/T12_icon.jpg'; break; 
	case 'Low-Pressure Sodiumcase ': $lightingRImage = '/images/psmh_icon.jpg'; break; 
	case 'HIGH PRESSURE SODIUMcase ': $lightingRImage = '/images/psmh_icon.jpg'; break; 
	case 'Anycase ': $lightingRImage = '/images/incandescent_icon.jpg'; break; 
	case 'Any A Type Lampcase ': $lightingRImage = '/images/incandescent_icon.jpg'; break; 
	case 'LINEAR FLUORESCENTcase ': $lightingRImage = '/images/T12_icon.jpg'; break; 
	case 'Incandescentcase ': $lightingRImage = '/images/incandescent_icon.jpg'; break; 
	case 'LEDcase ': $lightingRImage = '/images/ledmr16_icon.jpg'; break; 
	case 'T8case ': $lightingRImage = '/images/T12_icon.jpg'; break; 
	case 'T5case ': $lightingRImage = '/images/T12_icon.jpg'; break; 
	case 'T12case ': $lightingRImage = '/images/T12_icon.jpg'; break; 
	case 'T12HOcase ': $lightingRImage = '/images/T12_icon.jpg'; break; 
	case 'PSMH/CMHcase ': $lightingRImage = '/images/psmh_icon.jpg'; break; 
	case 'T5HOcase ': $lightingRImage = '/images/T12_icon.jpg'; break; 
	case 'PAR30case ': $lightingRImage = '/images/par30_icon.jpg'; break; 
	case 'LED PAR38case ': $lightingRImage = '/images/par38_icon.jpg'; break; 
	case 'PAR38case ': $lightingRImage = '/images/par38_icon.jpg'; break; 
	case 'Halogencase ': $lightingRImage = '/images/halogen_icon.jpg'; break; 
	case 'MR16case ': $lightingRImage = '/images/mr16_icon.jpg'; break; 
	case 'PAR IRcase ': $lightingRImage = '/images/parir_icon.jpg'; break; 
	case 'MR16case ': $lightingRImage = '/images/mr16_icon.jpg'; break; 
	case 'Inductioncase ': $lightingRImage = '/images/induction_icon.jpg'; break; 
	case 'LED A Lampcase ': $lightingRImage = '/images/ledalamp_icon.jpg'; break; 
	case 'LED A Lampcase ': $lightingRImage = '/images/ledalamp_icon.jpg'; break; 
	case 'PAR Halogencase ': $lightingRImage = '/images/parhalogen_icon.jpg'; break; 
	case 'PAR Halogencase ': $lightingRImage = '/images/parhalogen_icon.jpg'; break; 
	case 'Pulse-Start Metal Halidecase ': $lightingRImage = '/images/psmh_icon.jpg'; break; 
	case 'Pulse-Start Metal Halidecase ': $lightingRImage = '/images/psmh_icon.jpg'; break; 
	case 'Reduced Wattage T5 HOcase ': $lightingRImage = '/images/reducedwattT5HO_icon.jpg'; break; 
	case 'Reduced Wattage T8case ': $lightingRImage = '/images/reducedwattT8_icon.jpg'; break; 
	case 'T12 HOcase ': $lightingRImage = '/images/T12HO_icon.jpg'; break; 
	case 'T5 HOcase ': $lightingRImage = '/images/T5HO_icon.jpg'; break; 
	case 'High-Performance T8case ': $lightingRImage = '/images/highperformanceT8_icon.jpg'; break; 
	case 'High-Performance T5case ': $lightingRImage = '/images/highperformanceT5_icon.jpg'; break; 
	case 'Super T8case ': $lightingRImage = '/images/highperformanceT8_icon.jpg'; break;
		default: $lightingRImage = '/images/T12_icon.jpg';


}
	
	$rebateType = $row[2];
	$paysKwh = $row[8];
	$paysKw = $row[9];
	$perunitIncent = $row[4];
	$unitType = $row[5];
	$rUnitMax = $row[14];
	$outSide = $row[15];
	if($rebateType == 'CUSTOM') {$titulo = "Incentive # " . $row[0] . " " . $row[3] . "."; 
	$payback ="Custom Incentives pay by square footage and total Kilowatts or Kilowatt hours. This incentive pays $" . $paysKwh . "/kWh and $" . $paysKw . "/kW.";  
	}
	else {$titulo = "Incentive # " . $row[0] . " Must Replace " . $row[6] . " with " . $row[7] . "."; 
	$payback ="This Express Incentive pays $ " . $perunitIncent . " for every " . $unitType . " replaced.";
	}
	
	
	
	
	
	$resultstr[] = "{\"IncentiveID\":\"" . $row[0] . "\",\"RebateType\":\"" . $row[2] . "\",\"LongDesc\":\"" . $row[3] . "\",\"ExistingLightingType\":\"" . $row[6] . "\",\"Title\":\"" . $titulo . "\",\"Lighting\":\"" . $lightingImage . "\",\"PerUnitIncentive\":\"" . $row[4] . "\",\"ReplacementLightingType\":\"" . $row[7] . "\",\"LightingR\":\"" . $lightingRImage . "\",\"RebateCode\":\"" . $row[1] . "\",\"Payback\":\"" . $payback . "\",\"RUnitMax\":\"" . $rUnitMax . "\",\"Outside\":\"" . $outSide . "\",\"Prereqs\":[" . $prereqstrimmed . "]}"; 

}
$coolstring = implode(",",$resultstr);

}
echo $coolstring;
echo "]";




?> 
