<?php

	$con = mysql_connect("qbteicom.ipowermysql.com","webteb","teb123");
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

	$num_rows = mysql_num_rows($result);
	if($num_rows>0)
	{
					$output.= "<script>";
					$output.= "	$(function() {";
					$output.= "		$( \"#accordion\" ).accordion({";
					$output.= "		collapsible: true";
					$output.= "		});";
					$output.= "	});";
					$output.= "</script>";
					$output.= "<div class=\"large-12 columns marTop30\" id=\"accordion\">";

		while($row = mysql_fetch_array($result))
		{

					$output .= 	" <h3 class=\"listingboxheader2\"><div class=\"expander\">EXPAND </div>";
					$output .= 	" <div class=\"fl_right\"><h5 class=\"listingboxheader\"><span class=\"transit\">".$row['title'] ."<span>&nbsp;|&nbsp;</span> Unit&nbsp;". $row['unit'] ."<span>&nbsp;|&nbsp;</span>". $row['property_city'] .", ". $row['property_state']  ."</span>&nbsp;&nbsp;<img src=\"images/icons/favoriteicon.png\" width=\"29px\" height=\"29px\" alt=\"Favorite\"/>";
					$output .= 	" <img src=\"images/icons/emailicon.png\" width=\"29px\" height=\"29px\" alt=\"Email\"/>";
					$output .= 	" <img src=\"images/icons/twittersearchlistingsicon.png\" width=\"28px\" height=\"29px\" alt=\"Twitter\"/>";
					$output .= 	" <img src=\"images/icons/facebooksearchlistingsicon.png\" width=\"29px\" height=\"29px\" alt=\"Facebook\"/></h5></div><div class=\"clear\"></div>	</h3>";
					$output .= 	" <div>";

					$output .= 	" <div class=\"row whitebg shadow listingboxrow accordionpad\">";
					$output .= 	" <div class=\"large-4 columns listingbox\">";
					$output .= 	" <img src=\"images/searchlistingimg.jpg\" alt=\"15 Broad Street\"/>";
					$output .= 	" </div>";
					$output .= 	" <div class=\"large-8 columns\">";
					$output .= 	" <div class=\"row\">";
					$output .= 	" <div class=\"large-12 columns whitebg listingboxp\">";
					$output .= 	" <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>";
					$output .= 	" <div class=\"row\">";
					$output .= 	" <div class=\"large-2 columns\">";
					$output .= 	" <img src=\"images/icons/searchlistingsignature.png\" width=\"50\" height=\"50\" alt=\"TE Logo\"/>";
					$output .= 	" </div>";
					$output .= 	" <div class=\"large-10 columns\">";
					$output .=  	"<p class=\"marbottom0\"><span class=\"signaturebold\">Listed by Javier Lattanzio - </span><span class=\"signaturecolor\">Request a Call</span><br/>";
					$output .=  	"<span class=\"signaturebold\">O:</span> (212) 206-6121 &nbsp;<span class=\"signaturebold\">C:</span> (917) 670-2268<br/>";
					$output .= 	" jlattanzio@timeequities.com</p>";
					$output .= 	" </div>";
					$output .= 	" </div></div></div>";
					$output .= 	" <div class=\"row chrome42top marTop35\">";
					$output .= 	" <div class=\"large-3 columns listingmoneyfront\">";
					$output .= 	 $row['rent']."<img src=\"images/icons/moneyicon.png\" alt=\"Price\"/>";
					$output .= 	" </div>		";
					$output .=  	"<div class=\"large-3 columns listingbedroomfront\">";
					$output .= 	$row['bedroom'] ."&nbsp;<img src=\"images/icons/bedroomicon_listing.png\" alt=\"Bedroom\"/>";
					$output .= 	" </div>";
					$output .= 	" <div class=\"large-3 columns listingbathroomfront\">";
					$output .= 	$row['bathroom'] ."&nbsp;<img src=\"images/icons/bathroomicon.png\" alt=\"Bathrooms\"/>";
					$output .= 	" </div>";
					$output .= 	" <div class=\"large-3 columns listinglocationfront\">";
					$output .= 	" TRIBECA <img src=\"images/icons/locationicon_listing2.png\" alt=\"Location\"/>";
					$output .= 	" </div>";
					$output .= 	" </div>	"			;			

					$output .= 	" </div>	";
					$output .= 	" </div>	";
					$output .= 	" <div class=\"row listingmessage shadow shadowtop accordionpad\">";
					$output .= 	" <div class=\"large-1 columns whitebg\">";
					$output .= 	" <span class=\"rednote\">NOTE:</span>";
					$output .= 	" </div>";
					$output .= 	" <div class=\"large-11 columns greybg\">";
					$output .= 	" <span class=\"greynote\">Open House this Tuesday (May 1 at 1:00pm)</span>";
					$output .= 	" </div>";
					$output .= 	" </div>";

					$output .= 	" </div>";

		}
		
			$output .= 	" </div>";

				echo $output;
				
				
				
					
	}
	else
	{
		$output .= "No Results";
		echo $output;
	}

?>

