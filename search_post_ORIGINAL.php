<?php


	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	$sale=$_POST['sale'];
	$amount=explode("-",$_POST['amount']);
	$bath=explode("-",$_POST['bath']);
	$bedroom=explode("-",$_POST['bedroom']);
	$sqft=explode("-",$_POST['sqft']);
	
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
	
	
	mysql_select_db("teb", $con);



$sql='SELECT * FROM national_retail_properties WHERE (sq_ft_available >= '.$sqft1.' AND sq_ft_available <= '.$sqft2.' AND bedroom >= '.$bedroom1.' AND bedroom <= '.$bedroom2.' AND bathroom >= '.$bath1.' AND bathroom <= '.$bath2.' AND sale='.$sale.' AND rent >= '.$amount1.' AND rent <= '.$amount2.')';

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
	$originalTableF = "</br><table id=\"currentAvailabilitiesTable\" class=\"print tablesorter\">";
	$originalTableF .= "<thead style=\"background-color: #696969;\">";
	$originalTableF .= "<tr>";
	$originalTableF .= "<div >";
	$originalTableF .= "<th style=\"min-width:100px;\">Property</th>";
	$originalTableF .= "<th style=\"min-width:65px;\">Unit</th>";
	$originalTableF .= "<th style=\"min-width:60px;\">City</th>";
	$originalTableWSort = "<th  style=\"min-width:70px;\" class=\"header headerSortUp\">State</th>";
	$originalTableWOSort = "<th style=\"min-width:70px;\>State</th>";
	$originalTableB = "<th style=\"min-width:70px;\">Bathroom</th>";
	$originalTableB .= "<th style=\"min-width:110px;\">Bldg. Size</th>";
	$originalTableB .= "<th style=\"min-width:130px;\">Bedrooms</th>";
	if($sale==0){
	$originalTableB .= "<th style=\"min-width:70px;\">Rent</th>";
	$per_month=' /mo.';
	}
	else
	{
		$originalTableB .= "<th style=\"min-width:70px;\">Sale</th>";
		$per_month=' ';
	}
	$originalTableB .= "<th style=\"min-width:95px;\">Website</th>";
	$originalTableB .= "</div>";
	$originalTableB .= "</tr>";
	$originalTableB .= "</thead>";
	$originalTableB .= "</tbody>";

	$num_rows = mysql_num_rows($result);
	if($num_rows>0)
	{
		$output .= $originalTableF;
		$output .= $originalTableWSort;
		$output .= $originalTableB;
		
		while($row = mysql_fetch_array($result))
		{
				$output .= 	"<tr>";
				$output .= 	"<td>" . $row['title']. "</td>";
				$output .=  	"<td>" . $row['unit'] 						. "</td>";
				$output .=  	"<td>" . $row['property_city'] 		. "</td>";
				$currentState = $row['property_state'];
				$output .=  	"<td>" .$row['property_state']	. "</td>";
				$output .=  	"<td>" . $row['bathroom'] 						. "</td>";  //type
				$output .=  	"<td>" . $row['building_size'] 		. " sq. ft.</td>";  
				$output .=  	"<td>" . $row['bedroom']	. "</td>"; //sq_ft_available
				$output .=  	"<td>" . $row['rent']  .$per_month."</td>";
				$output .=  	"<td>";
				if($row['website']){
					$output .= 	"<a href=\"". $row['website']. "\"><div style=\"display:none;\">1</div><img src=\"images/website_gfk_16x15.gif\"></a>";
				}
				$output .=  	"</td>";
				$output .=  	"</tr>";
		}
				$output .=  	"</tbody>";
				$output .=  	" </table>";
				echo $output;
	}
	else
	{
		$output .= $originalTableF.$originalTableWOSort.$originalTableB;
		$output .= "<tr><td colspan=\"9\">no results found.</td></tr>";
		$output .=  	"</tbody>";
		$output .=  	" </table>";
		echo $output;
	}

?>
