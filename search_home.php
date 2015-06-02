<?php


	include_once "dblogin.php";
	
	$sale=$_POST['sale'];
	$amount=explode("-",$_POST['amount']);
	$bath=explode("-",$_POST['bath']);
	$bedroom=explode("-",$_POST['bedroom']);
	$sqft=explode("-",$_POST['sqft']);
	$radio = $_POST['radio'];
	
	$amount1=str_replace('$','',$amount[0]);
	$amount1=str_replace(',','',$amount1);
	
	$amount2=str_replace('$','',$amount[1]);
	$amount2=str_replace(',','',$amount2);
	
	$bath1=trim(str_replace('Bathroom','',$bath[0]));
	$bath2=trim(str_replace('Bathrooms','',$bath[1]));
	
	$bedroom1=trim(str_replace('Bedrooms','',$bedroom[0]));
	$bedroom2=trim(str_replace('Bedrooms','',$bedroom[1]));
	
	$sqft1=trim(str_replace('Sq. Ft.','',$sqft[0]));
	$sqft2=trim(str_replace('Sq. Ft.','',$sqft[1]));
	
	$sqft1=trim(str_replace(',','',$sqft1));
	$sqft2=trim(str_replace(',','',$sqft2));
	
	if($radio == "sale"){
		$bldgtype = "Commercial Leasing";
	}elseif($radio == "rent"){
		$bldgtype = "Residential";
	}
	else{
		$bldgtype = "Residential";
	}
	
	mysql_select_db("ftplay_teb", $con);

	$sql='SELECT * FROM national_retail_properties WHERE type = \''.$bldgtype.'\' AND ( sq_ft_available >= '.$sqft1.' AND sq_ft_available <= '.$sqft2.' AND bedroom >= '.$bedroom1.' AND bedroom <= '.$bedroom2.' AND bathroom >= '.$bath1.' AND bathroom <= '.$bath2.' AND sale='.$sale.' AND rent >= '.$amount1.' AND rent <= '.$amount2.')';

    $county="";
	
	if($_POST['checked_values']!='')
	{
		$checked_values=substr($_POST['checked_values'],0,-1);
	    $check=explode(",",$checked_values);
		$county="AND(";
		for($i=0;$i<count($check);$i++)
		{
			$county.='property_city="'.$check[$i].'" OR ';
		}
	
	    $county=substr($county,0,-3);
		$county.=')';
	}
	
	$sql=$sql.$county;
	//echo $sql;
	$result = mysql_query($sql);
	$output="";
	$num_rows = mysql_num_rows($result);
	
		if($num_rows>0)
		{
			$output.=	"<div>";
			$output.=" ".$num_rows." ";			
			$output .= 	" <span>LISTINGS</span></div>";	
			echo $output;
				
		}
		else
		{
		$output .= "<div>0 <span>LISTINGS</span></div>";
		echo $output;
		}

?>

