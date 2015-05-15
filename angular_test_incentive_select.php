<?php


$con = mysql_connect("localhost","********","********");





if (!$con) {


  die('Could not connect: ' . mysql_error());


}





mysql_select_db("********", $con);



$result = mysql_query("SELECT T_L_INCENTIVES_ID, REBATE_CODE, REBATE_TYPE, LONG_DESC, PER_UNIT_INCENTIVE, PER_UNIT_ID, E_LIGHTING_TYPE, R_LIGHTING_TYPE,
PER_KWH_INCENT, PER_KW_INCENT, INCENT_TECH_ID, E_FIXTURE_MIN, E_FIXTURE_MAX, R_FIXTURE_MIN, R_FIXTURE_MAX, T_L_INCENTIVES_OUTDOOR,PAYBACK, UTILITY_ABBREV_NAME
, COUNT(DISTINCT T_L_INCENT_PREREQ_ID) num_prereqs, GROUP_CONCAT(T_L_INCENT_PREREQ_ID)
FROM incentive_wide_atomic_v
GROUP BY T_L_INCENTIVES_ID DESC");

$names = array();
$names['name'] = 'names';

$values = array();
$values['name'] = 'year_area_sqft';

echo "[";
while($row = mysql_fetch_array($result)) {

foreach ($names as $name){
	
	$lighting = $row[6]; 
	if ( $lighting == 'COMPACT FLUORESCENT (CFL)' ) { $lightingImage = '/images/cfl_icon.jpg'; } else if($lighting == 'FLUORESCENT - T12'){$lightingImage = '/images/T12_icon.jpg';} else if($lighting == 'FLUORESCENT - T5'){$lightingImage = '/images/T5_icon.jpg';} else if($lighting == 'FLUORESCENT - UNCATEGORIZED'){$lightingImage = '/images/T12_icon.jpg';} else if($lighting == 'Mercury Vapor'){$lightingImage = '/images/mercuryvapor_icon.jpg';} else if($lighting == 'Standard Metal Halide'){$lightingImage = '/images/metalhalide_icon.jpg';} else if($lighting == 'PHOTOCELL'){$lightingImage = '/images/ledmr16_icon.jpg';} else if($lighting == 'High-Pressure Sodium'){$lightingImage = '/images/psmh_icon.jpg';} else if($lighting == 'OTHER'){$lightingImage = '/images/T12_icon.jpg';} else if($lighting == 'Low-Pressure Sodium'){$lightingImage = '/images/psmh_icon.jpg';} else if($lighting == 'HIGH PRESSURE SODIUM'){$lightingImage = '/images/psmh_icon.jpg';} else if($lighting == 'Any'){$lightingImage = '/images/incandescent_icon.jpg';} else if($lighting == 'Any A Type Lamp'){$lightingImage = '/images/incandescent_icon.jpg';} else if($lighting == 'LINEAR FLUORESCENT'){$lightingImage = '/images/T12_icon.jpg';} else if($lighting == 'Incandescent'){$lightingImage = '/images/incandescent_icon.jpg';} else if($lighting == 'LED'){$lightingImage = '/images/ledmr16_icon.jpg';} else if($lighting == 'T8'){$lightingImage = '/images/T12_icon.jpg';} else if($lighting == 'T5'){$lightingImage = '/images/T12_icon.jpg';} else if($lighting == 'T12'){$lightingImage = '/images/T12_icon.jpg';} else if($lighting == 'T12HO'){$lightingImage = '/images/T12_icon.jpg';} else if($lighting == 'PSMH/CMH'){$lightingImage = '/images/psmh_icon.jpg';} else if($lighting == 'T5HO'){$lightingImage = '/images/T12_icon.jpg';} else if($lighting == 'PAR30'){$lightingImage = '/images/par30_icon.jpg';} else if($lighting == 'LED PAR38'){$lightingImage = '/images/par38_icon.jpg';} else if($lighting == 'PAR38'){$lightingImage = '/images/par38_icon.jpg';} else if($lighting == 'Halogen'){$lightingImage = '/images/halogen_icon.jpg';} else if($lighting == 'MR16'){$lightingImage = '/images/mr16_icon.jpg';} else if($lighting == 'PAR IR'){$lightingImage = '/images/parir_icon.jpg';} else if($lighting == 'MR16'){$lightingImage = '/images/mr16_icon.jpg';} else if($lighting == 'Induction'){$lightingImage = '/images/induction_icon.jpg';} else if($lighting == 'LED A Lamp'){$lightingImage = '/images/ledalamp_icon.jpg';} else if($lighting == 'LED A Lamp'){$lightingImage = '/images/ledalamp_icon.jpg';} else if($lighting == 'PAR Halogen'){$lightingImage = '/images/parhalogen_icon.jpg';} else if($lighting == 'PAR Halogen'){$lightingImage = '/images/parhalogen_icon.jpg';} else if($lighting == 'Pulse-Start Metal Halide'){$lightingImage = '/images/psmh_icon.jpg';} else if($lighting == 'Pulse-Start Metal Halide'){$lightingImage = '/images/psmh_icon.jpg';} else if($lighting == 'Reduced Wattage T5 HO'){$lightingImage = '/images/reducedwattT5HO_icon.jpg';} else if($lighting == 'Reduced Wattage T8'){$lightingImage = '/images/reducedwattT8_icon.jpg';} else if($lighting == 'T12 HO'){$lightingImage = '/images/T12HO_icon.jpg';} else if($lighting == 'T5 HO'){$lightingImage = '/images/T5HO_icon.jpg';} else if($lighting == 'High-Performance T8'){$lightingImage = '/images/highperformanceT8_icon.jpg';} else if($lighting == 'High-Performance T5'){$lightingImage = '/images/highperformanceT5_icon.jpg';} else if($lighting == 'Super T8'){$lightingImage = '/images/highperformanceT8_icon.jpg';} else{ echo'';} 
	
	$lightingR = $row[7]; 
	if ( $lightingR == 'COMPACT FLUORESCENT (CFL)' ) { $lightingRImage = '/images/cfl_icon.jpg'; } else if($lightingR == 'FLUORESCENT - T12'){$lightingRImage = '/images/T12_icon.jpg';} else if($lightingR == 'FLUORESCENT - T5'){$lightingRImage = '/images/T5_icon.jpg';} else if($lightingR == 'FLUORESCENT - UNCATEGORIZED'){$lightingRImage = '/images/T12_icon.jpg';} else if($lightingR == 'Mercury Vapor'){$lightingRImage = '/images/mercuryvapor_icon.jpg';} else if($lightingR == 'Standard Metal Halide'){$lightingRImage = '/images/metalhalide_icon.jpg';} else if($lightingR == 'PHOTOCELL'){$lightingRImage = '/images/ledmr16_icon.jpg';} else if($lightingR == 'High-Pressure Sodium'){$lightingRImage = '/images/psmh_icon.jpg';} else if($lightingR == 'OTHER'){$lightingRImage = '/images/T12_icon.jpg';} else if($lightingR == 'Low-Pressure Sodium'){$lightingRImage = '/images/psmh_icon.jpg';} else if($lightingR == 'HIGH PRESSURE SODIUM'){$lightingRImage = '/images/psmh_icon.jpg';} else if($lightingR == 'Any'){$lightingRImage = '/images/incandescent_icon.jpg';} else if($lightingR == 'Any A Type Lamp'){$lightingRImage = '/images/incandescent_icon.jpg';} else if($lightingR == 'LINEAR FLUORESCENT'){$lightingRImage = '/images/T12_icon.jpg';} else if($lightingR == 'Incandescent'){$lightingRImage = '/images/incandescent_icon.jpg';} else if($lightingR == 'LED'){$lightingRImage = '/images/ledmr16_icon.jpg';} else if($lightingR == 'T8'){$lightingRImage = '/images/T12_icon.jpg';} else if($lightingR == 'T5'){$lightingRImage = '/images/T12_icon.jpg';} else if($lightingR == 'T12'){$lightingRImage = '/images/T12_icon.jpg';} else if($lightingR == 'T12HO'){$lightingRImage = '/images/T12_icon.jpg';} else if($lightingR == 'PSMH/CMH'){$lightingRImage = '/images/psmh_icon.jpg';} else if($lightingR == 'T5HO'){$lightingRImage = '/images/T12_icon.jpg';} else if($lightingR == 'PAR30'){$lightingRImage = '/images/par30_icon.jpg';} else if($lightingR == 'LED PAR38'){$lightingRImage = '/images/par38_icon.jpg';} else if($lightingR == 'PAR38'){$lightingRImage = '/images/par38_icon.jpg';} else if($lightingR == 'Halogen'){$lightingRImage = '/images/halogen_icon.jpg';} else if($lightingR == 'MR16'){$lightingRImage = '/images/mr16_icon.jpg';} else if($lightingR == 'PAR IR'){$lightingRImage = '/images/parir_icon.jpg';} else if($lightingR == 'MR16'){$lightingRImage = '/images/mr16_icon.jpg';} else if($lightingR == 'Induction'){$lightingRImage = '/images/induction_icon.jpg';} else if($lightingR == 'LED A Lamp'){$lightingRImage = '/images/ledalamp_icon.jpg';} else if($lightingR == 'LED A Lamp'){$lightingRImage = '/images/ledalamp_icon.jpg';} else if($lightingR == 'PAR Halogen'){$lightingRImage = '/images/parhalogen_icon.jpg';} else if($lightingR == 'PAR Halogen'){$lightingRImage = '/images/parhalogen_icon.jpg';} else if($lightingR == 'Pulse-Start Metal Halide'){$lightingRImage = '/images/psmh_icon.jpg';} else if($lightingR == 'Pulse-Start Metal Halide'){$lightingRImage = '/images/psmh_icon.jpg';} else if($lightingR == 'Reduced Wattage T5 HO'){$lightingRImage = '/images/reducedwattT5HO_icon.jpg';} else if($lightingR == 'Reduced Wattage T8'){$lightingRImage = '/images/reducedwattT8_icon.jpg';} else if($lightingR == 'T12 HO'){$lightingRImage = '/images/T12HO_icon.jpg';} else if($lightingR == 'T5 HO'){$lightingRImage = '/images/T5HO_icon.jpg';} else if($lightingR == 'High-Performance T8'){$lightingRImage = '/images/highperformanceT8_icon.jpg';} else if($lightingR == 'High-Performance T5'){$lightingRImage = '/images/highperformanceT5_icon.jpg';} else if($lightingR == 'Super T8'){$lightingRImage = '/images/highperformanceT8_icon.jpg';} else{ echo'';} 
	
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
	
	
	
	
	
	$resultstr[] = "{\"IncentiveID\":\"" . $row[0] . "\",\"RebateType\":\"" . $row[2] . "\",\"LongDesc\":\"" . $row[3] . "\",\"ExistingLightingType\":\"" . $row[6] . "\",\"Title\":\"" . $titulo . "\",\"Lighting\":\"" . $lightingImage . "\",\"PerUnitIncentive\":\"" . $row[4] . "\",\"ReplacementLightingType\":\"" . $row[7] . "\",\"LightingR\":\"" . $lightingRImage . "\",\"RebateCode\":\"" . $row[1] . "\",\"Payback\":\"" . $payback . "\",\"RUnitMax\":\"" . $rUnitMax . "\",\"Outside\":\"" . $outSide . "\"}"; 

}
$coolstring = implode(",",$resultstr);

}
echo $coolstring;
echo "]";




?> 
