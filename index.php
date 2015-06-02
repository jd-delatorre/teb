<?php
include_once "layout/header.php";
include_once "dblogin.php";
?>

<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>
	<!-- Main Slider Image-->
	<div class="row">
		<div class="large-12">
			<ul data-orbit data-options="slide_number:false" class="slider">
			  <li><div class="promobox" >BEAUTIFUL TERRACE!</div>
				<img src="images/slider/sliderimg1.jpg" width="100%" />
				<div class="orbit-caption large-3">  <!--Transparent colored bottom caption section-->
					<div class="row hide-for-small">
						<div class="large-3 small-6 columns">
							$2.5M<?php include "images/icons/price_opt.svg"; ?>
						</div>
						<div class="large-3 small-6  columns">
							2 <?php include "images/icons/bedroom_opt.svg"; ?>
						</div>
						<div class="large-3 small-6  columns">
							1.5 <?php include "images/icons/bathroom_opt.svg"; ?>
						</div>
						<div class="large-3 small-6  columns">
							<span>TRIBECA</span><?php include "images/icons/location_opt.svg"; ?>
						</div>
					</div>
					<div class="row hide-for-small">
						<div class="large-12 small-12 columns"> <!-- Full width bottom transparent underneath sections -->
							<div class="row">
								<div class="large-6 small-4 columns slideraddress">
								125 Duane Street
								</div>
								<div class="large-6  small-6 end columns blurb">
									<div><span>LOOKING TO SELL YOUR HOME?</span>
									<span>CLICK </span><a href="">HERE</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </li>
			  <li><div class="promobox" style="width:22%;">JUST LISTED!</div>
				<img src="images/slider/sliderimg2.jpg" width="100%" />
				<div class="orbit-caption">  <!--Transparent colored bottom caption section-->
					<div class="row">
						<div class="large-3 small-6 columns">
							$2.5M<?php include "images/icons/price_opt.svg"; ?>
						</div>
						<div class="large-3 small-6  columns">
							2 <?php include "images/icons/bedroom_opt.svg"; ?>
						</div>
						<div class="large-3 small-6  columns">
							1.5 <?php include "images/icons/bathroom_opt.svg"; ?>
						</div>
						<div class="large-3 small-6  columns">
							<span>TRIBECA</span><?php include "images/icons/location_opt.svg"; ?>
						</div>
					</div>	
					<div class="row">
						<div class="large-12 small-6 columns"> <!-- Full width bottom transparent underneath sections -->
							<div class="row">
								<div class="large-6 small-4 columns slideraddress">
								125 Duane Street
								</div>
								<div class="large-6 small-6 end columns blurb">
									<div><span>LOOKING TO SELL YOUR HOME?</span>
									<span>CLICK </span><a href="">HERE</a></div>
								</div>
							</div>
						</div>
					</div>					
				</div>
			  </li>
			  <li><div class="promobox">BEAUTIFUL TERRACE!</div>
				<img src="images/slider/sliderimg3.jpg" width="100%"/>
				<div class="orbit-caption">   <!--Transparent colored bottom caption section-->
					<div class="row">
						<div class="large-3 small-6 columns">
							$2.5M<?php include "images/icons/price_opt.svg"; ?>
						</div>
						<div class="large-3 small-6  columns">
							2 <?php include "images/icons/bedroom_opt.svg"; ?>
						</div>
						<div class="large-3 small-6  columns">
							1.5 <?php include "images/icons/bathroom_opt.svg"; ?>
						</div>
						<div class="large-3 small-6  columns">
							<span>TRIBECA</span><?php include "images/icons/location_opt.svg"; ?>
						</div>
					</div>	
					<div class="row">
						<div class="large-12 small-12 columns"> <!-- Full width bottom transparent underneath sections -->
							<div class="row">
								<div class="large-6 small-4 columns slideraddress">
								125 Duane Street
								</div>
								<div class="large-6 small-6 end columns blurb">
									<div><span>LOOKING TO SELL YOUR HOME?</span>
									<span>CLICK </span><a href="">HERE</a></div>
								</div>
							</div>
						</div>
					</div>					
				</div>
			  </li>
			</ul>

		</div>
	</div>
			 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
			 <script src="javascripts/range.js"></script>
			 
		<!-- Search Listings -->
	<div class="row whitebg martop20">
		<div class="large-12 columns search_listings_container">
			<div class="row">
				<div class="search_listings large-3 columns">
					SEARCH LISTINGS
				</div>
			
				<div class="large-4 columns large-offset-1 end moresearchoptions">
					<a href="search.php">Want More Search Options? Click Here</a>
				</div>
			</div>
			<form class="custom">
			<div class="row padtop20">
				<div class="large-3 columns">
						<div id="radio">
							<input type="radio" id="radio1" class="radio" name="radio" value="sale" checked="checked"  onchange="search_fun()"/><label for="radio1" class="leftbutton">For Sale</label>
							<input type="radio" id="radio2" class="radio" name="radio"  value="rent"  onchange="search_fun()"/><label for="radio2" class="rightbutton">For Rent</label>
						</div>
					</div>
				<div class="large-2 columns">
					<div class="currently"><div class="locationsmallicon"><?php include "images/icons/location_opt.svg"; ?></div>LOCATION</div>
				</div>
				<div class="large-7 columns ">
					<div class="currently2">CURRENTLY SHOWING ALL LOCATIONS.  &nbsp;&nbsp;&nbsp;<a href="#locationrefine"  onclick="toggle_visibility('locationpane');">CLICK HERE TO REFINE</a></div>
				</div>
			</div>
			 
				<div class="row">
					<div class="large-5 large-offset-1 columns ranges">
						<input type="text" id="amount" style="border: 0; ; font-weight: bold;" />						
						<div class="slider-wrapper"><div id="slider-range-amount"></div></div>
					</div>
					<div class="large-5 end columns ranges">
						<input type="text" id="bath" style="border: 0; font-weight: bold;" />						
						<div class="slider-wrapper"><div id="slider-range-bath"></div></div>
					</div>
				</div>
				<div class="row">
					<div class="large-5 large-offset-1 columns ranges">
						<input type="text" id="bedroom" style="border: 0; font-weight: bold;" />						
						<div class="slider-wrapper"><div id="slider-range-bedroom"></div></div>
					</div>
					<div class="large-5 end columns ranges">
						<input type="text" id="sqft" style="border: 0; font-weight: bold;" />						
						<div class="slider-wrapper"><div id="slider-range-sqft"></div></div>
					</div>
				</div>
				<a id="locationrefine"></a>
				<div class="row" style="display:none;" id="locationpane">
					<div class="large-12 columns">
						<div class="section-container vertical-tabs" data-section="vertical-tabs">
							  <section>
								<p class="title" data-section-title><a href="#">Manhattan</a></p>
								<div class="content" data-section-content>
								  <div style="width:33%; float: left;" >
								        <label for="checkbox1"><input type="checkbox" id="checkbox1" value="all" style="display: none;"><span class="custom checkbox"></span> Any in Manhattan</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox2" value="batteryparkcity" style="display: none;"><span class="custom checkbox"></span> Battery Park City</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox3" value="beekman" style="display: none;"><span class="custom checkbox"></span> Beekman</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox4" value="carnegiehill" style="display: none;"><span class="custom checkbox"></span> Carnegie Hill</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox5" value="centralparksouth" style="display: none;"><span class="custom checkbox"></span> Central Park South</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox6" value="chelsea" style="display: none;"><span class="custom checkbox"></span> Chelsea</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox7" value="clinton" style="display: none;"><span class="custom checkbox"></span> Clinton</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox8" value="eastharlem" style="display: none;"><span class="custom checkbox"></span> East Harlem</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox9" value="eastvillage" style="display: none;"><span class="custom checkbox"></span> East Village</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox10" value="financialdistrict" style="display: none;"><span class="custom checkbox"></span> Financial District</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox11" value="flatiron" style="display: none;"><span class="custom checkbox"></span> Flatiron</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox12" value="gramercy" style="display: none;"><span class="custom checkbox"></span> Gramercy</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox13" value="greenwichvillage" style="display: none;"><span class="custom checkbox"></span> Greenwich Village</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox14" value="hamiltonheights" style="display: none;"><span class="custom checkbox"></span> Hamilton Heights</label>
								  
								  </div>
								  <div style="width:33%; float: left; ">
										<br/>
										<label for="checkbox1"><input type="checkbox" id="checkbox2" value="harlem" style="display: none;"><span class="custom checkbox"></span> Harlem</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox3" value="inwood" style="display: none;"><span class="custom checkbox"></span> Inwood</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox4" value="lowereastside" style="display: none;"><span class="custom checkbox"></span> Lower East Side</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox5" value="midtowneast" style="display: none;"><span class="custom checkbox"></span> Midtown East</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox6" value="midtownwest" style="display: none;"><span class="custom checkbox"></span> Midtown West</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox7" value="morningsideheights" style="display: none;"><span class="custom checkbox"></span> Morningside Heights</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox8" value="murrayhill" style="display: none;"><span class="custom checkbox"></span> Murray Hill</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox9" value="rooseveltisland" style="display: none;"><span class="custom checkbox"></span> Roosevelt Island</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox10" value="sohonolita" style="display: none;"><span class="custom checkbox"></span> Soho/Nolita</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox11" value="suttonarea" style="display: none;"><span class="custom checkbox"></span> Sutton Area</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox12" value="tribeca" style="display: none;"><span class="custom checkbox"></span> Tribeca</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox13" value="uppereastside" style="display: none;"><span class="custom checkbox"></span> Upper East Side</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox14" value="upperwestside" style="display: none;"><span class="custom checkbox"></span> Upper West Side</label>
								  
								  </div>
								  <div style="width:33%; float: left; ">
								        <br/>
										<label for="checkbox1"><input type="checkbox" id="checkbox13" value="washingtonheights" style="display: none;"><span class="custom checkbox"></span> Washington Heights</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox14" value="westvillage" style="display: none;"><span class="custom checkbox"></span> West Village</label>
								  </div>
								  <div style="clear:both;"></div>
								</div>
							  </section>
							  <section>
								<p class="title" data-section-title><a href="#">Brooklyn</a></p>
								<div class="content" data-section-content>
								 <div style="width:33%; float: left;" >
								        <label for="checkbox1"><input type="checkbox" id="checkbox1" value="all" style="display: none;"><span class="custom checkbox"></span> Any in Brooklyn</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox2" value="batteryparkcity" style="display: none;"><span class="custom checkbox"></span> Battery Park City</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox3" value="beekman" style="display: none;"><span class="custom checkbox"></span> Beekman</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox4" value="carnegiehill" style="display: none;"><span class="custom checkbox"></span> Carnegie Hill</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox5" value="centralparksouth" style="display: none;"><span class="custom checkbox"></span> Central Park South</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox6" value="chelsea" style="display: none;"><span class="custom checkbox"></span> Chelsea</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox7" value="clinton" style="display: none;"><span class="custom checkbox"></span> Clinton</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox8" value="eastharlem" style="display: none;"><span class="custom checkbox"></span> East Harlem</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox9" value="eastvillage" style="display: none;"><span class="custom checkbox"></span> East Village</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox10" value="financialdistrict" style="display: none;"><span class="custom checkbox"></span> Financial District</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox11" value="flatiron" style="display: none;"><span class="custom checkbox"></span> Flatiron</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox12" value="gramercy" style="display: none;"><span class="custom checkbox"></span> Gramercy</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox13" value="greenwichvillage" style="display: none;"><span class="custom checkbox"></span> Greenwich Village</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox14" value="hamiltonheights" style="display: none;"><span class="custom checkbox"></span> Hamilton Heights</label>
								  
								  </div>
								  <div style="width:33%; float: left; ">
										<br/>
										<label for="checkbox1"><input type="checkbox" id="checkbox2" value="harlem" style="display: none;"><span class="custom checkbox"></span> Harlem</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox3" value="inwood" style="display: none;"><span class="custom checkbox"></span> Inwood</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox4" value="lowereastside" style="display: none;"><span class="custom checkbox"></span> Lower East Side</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox5" value="midtowneast" style="display: none;"><span class="custom checkbox"></span> Midtown East</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox6" value="midtownwest" style="display: none;"><span class="custom checkbox"></span> Midtown West</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox7" value="morningsideheights" style="display: none;"><span class="custom checkbox"></span> Morningside Heights</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox8" value="murrayhill" style="display: none;"><span class="custom checkbox"></span> Murray Hill</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox9" value="rooseveltisland" style="display: none;"><span class="custom checkbox"></span> Roosevelt Island</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox10" value="sohonolita" style="display: none;"><span class="custom checkbox"></span> Soho/Nolita</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox11" value="suttonarea" style="display: none;"><span class="custom checkbox"></span> Sutton Area</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox12" value="tribeca" style="display: none;"><span class="custom checkbox"></span> Tribeca</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox13" value="uppereastside" style="display: none;"><span class="custom checkbox"></span> Upper East Side</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox14" value="upperwestside" style="display: none;"><span class="custom checkbox"></span> Upper West Side</label>
								  
								  </div>
								  <div style="width:33%; float: left; ">
								        <br/>
										<label for="checkbox1"><input type="checkbox" id="checkbox13" value="washingtonheights" style="display: none;"><span class="custom checkbox"></span> Washington Heights</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox14" value="westvillage" style="display: none;"><span class="custom checkbox"></span> West Village</label>
								  </div>
								  <div style="clear:both;"></div>
								</div>
							  </section>
							  <section>
								<p class="title" data-section-title><a href="#">Hamptons</a></p>
								<div class="content" data-section-content>
								  <div style="width:33%; float: left;" >
								        <label for="checkbox1"><input type="checkbox" id="checkbox1" value="all" style="display: none;"><span class="custom checkbox"></span> Any in Hamptons</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox2" value="batteryparkcity" style="display: none;"><span class="custom checkbox"></span> Battery Park City</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox3" value="beekman" style="display: none;"><span class="custom checkbox"></span> Beekman</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox4" value="carnegiehill" style="display: none;"><span class="custom checkbox"></span> Carnegie Hill</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox5" value="centralparksouth" style="display: none;"><span class="custom checkbox"></span> Central Park South</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox6" value="chelsea" style="display: none;"><span class="custom checkbox"></span> Chelsea</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox7" value="clinton" style="display: none;"><span class="custom checkbox"></span> Clinton</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox8" value="eastharlem" style="display: none;"><span class="custom checkbox"></span> East Harlem</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox9" value="eastvillage" style="display: none;"><span class="custom checkbox"></span> East Village</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox10" value="financialdistrict" style="display: none;"><span class="custom checkbox"></span> Financial District</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox11" value="flatiron" style="display: none;"><span class="custom checkbox"></span> Flatiron</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox12" value="gramercy" style="display: none;"><span class="custom checkbox"></span> Gramercy</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox13" value="greenwichvillage" style="display: none;"><span class="custom checkbox"></span> Greenwich Village</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox14" value="hamiltonheights" style="display: none;"><span class="custom checkbox"></span> Hamilton Heights</label>
								  
								  </div>
								  <div style="width:33%; float: left; ">
										<br/>
										<label for="checkbox1"><input type="checkbox" id="checkbox2" value="harlem" style="display: none;"><span class="custom checkbox"></span> Harlem</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox3" value="inwood" style="display: none;"><span class="custom checkbox"></span> Inwood</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox4" value="lowereastside" style="display: none;"><span class="custom checkbox"></span> Lower East Side</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox5" value="midtowneast" style="display: none;"><span class="custom checkbox"></span> Midtown East</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox6" value="midtownwest" style="display: none;"><span class="custom checkbox"></span> Midtown West</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox7" value="morningsideheights" style="display: none;"><span class="custom checkbox"></span> Morningside Heights</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox8" value="murrayhill" style="display: none;"><span class="custom checkbox"></span> Murray Hill</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox9" value="rooseveltisland" style="display: none;"><span class="custom checkbox"></span> Roosevelt Island</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox10" value="sohonolita" style="display: none;"><span class="custom checkbox"></span> Soho/Nolita</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox11" value="suttonarea" style="display: none;"><span class="custom checkbox"></span> Sutton Area</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox12" value="tribeca" style="display: none;"><span class="custom checkbox"></span> Tribeca</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox13" value="uppereastside" style="display: none;"><span class="custom checkbox"></span> Upper East Side</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox14" value="upperwestside" style="display: none;"><span class="custom checkbox"></span> Upper West Side</label>
								  
								  </div>
								  <div style="width:33%; float: left; ">
								        <br/>
										<label for="checkbox1"><input type="checkbox" id="checkbox13" value="washingtonheights" style="display: none;"><span class="custom checkbox"></span> Washington Heights</label>
										<label for="checkbox1"><input type="checkbox" id="checkbox14" value="westvillage" style="display: none;"><span class="custom checkbox"></span> West Village</label>
								  </div>
								  <div style="clear:both;"></div>
								</div>
							  </section>
							</div>
					</div>
				</div>
			</form>
			
			<div class="row topshadow">
				<div class="large-6 columns large-centered">
					<div id="homeresults">
					</div>
					<a href="search.php" ><img src="images/homesearch.png" class="homesearchimg" alt="TEB Search Listings"/></a>
				</div>
			</div>
		</div>
	</div>	
	
	<!-- Featured Listings -->
	<div class="row padtop20 martop20">
		<div class="large-3 columns end featuredlistings">
			FEATURED LISTINGS
		</div>
	</div>
	
	<div class="row padtop20">
		<div class="large-12">
			<ul class="large-block-grid-5">  <!-- -->
			<li><div class="featuredbox ">
						<img src="images/featured1.jpg"/>
						<div class="featureboxinfo">
						<h3>$250,000</h3>
						<span>TriBeCa</span>
						<div>2 Bed. 2 Bath<br/>
						655 Sq. Ft.</div>
						</div>
					</div></li>
			<li><div class="featuredbox ">
						<img src="images/featured2.jpg"/>
						<div class="featureboxinfo">
						<h3>$250,000</h3>
						<span>TriBeCa</span>
						<div>2 Bed. 2 Bath<br/>
						655 Sq. Ft.</div>
						</div>
					</div></li>
			<li><div class="featuredbox ">
						<img src="images/featured3.jpg"/>
						<div class="featureboxinfo">
						<h3>$250,000</h3>
						<span>TriBeCa</span>
						<div>2 Bed. 2 Bath<br/>
						655 Sq. Ft.</div>
						</div>
					</div></li>
			<li><div class="featuredbox ">
						<img src="images/featured4.jpg"/>
						<div class="featureboxinfo">
						<h3>$250,000</h3>
						<span>TriBeCa</span>
						<div>2 Bed. 2 Bath<br/>
						655 Sq. Ft.</div>
						</div>
					</div></li>
			<li><div class="featuredbox ">
						<img src="images/featured5.jpg"/>
						<div class="featureboxinfo">
						<h3>$250,000</h3>
						<span>TriBeCa</span>
						<div>2 Bed. 2 Bath<br/>
						655 Sq. Ft.</div>
						</div>
					</div></li>
			</ul>
		</div>
	</div>
	
	<!-- twitter and featured open house section-->
<div class="row martop20">
	<div class="large-12">
		<ul class="large-block-grid-2">
		  <li>
			<div class="twitter">
				<div class="twitter-text">"Join us for an open house tonight at 125 Duane Street"</div>
				<div class="twitter-name">@tebrokerage&nbsp;&nbsp;&nbsp;<img src="images/icons/twittericon.png"/></div>
			</div>
		  </li>
		  <li>
			<div class="openhouse">
				<div class="row">
					<div class="large-8 columns openwrapper">
						<h4>FEATURED OPEN HOUSE</h4>
						<div class="opendiv_left">
							<span class="opendate">MAY 2</span><br/>
							<span class="opentime">10AM-2PM</span><br/>
							<span class="openaddress">125 Duane Street</span>
						</div>
						<div class="opendiv_right">
							<a href="">VIEW <br/>LISTING</a><br/><br/>
							<a href="">ADD TO <br/>CALENDAR</a>
						</div>
					</div>
					<div class="large-4 columns openhouseimg hide-for-small">
						<img src="images/openhouseimg.jpg"/>
					</div>
				</div>
			</div>
		  </li>
		</ul>
	</div>
</div>
	
	<!-- private property consultants-->
	<div class="row whitebg martop20">
		<div class="large-12">
			<div class="headersection"><h4>PRIVATE PROPERTY CONSULTANTS</h4></div>
				<div class="row propertyrow">
					<div class="large-6 columns">
						<div class="privateproperty">
							<span>Assisting You With All of Your<br/>
							Property Needs from A-Z</span>
							<div class="clear"></div>
						</div>
					</div>
					<div class="large-6 columns">
						<ul class="propertylist">
							<li>Legal Assistance</li>
							<li>Financing Assistance</li>
							<li>Selling Preparations</li>
							<li>Design & Construction Consultation</li>
							<li>Interim Rentals</li>
							<li>Subletting</li>
							<li>Moving Consulting</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<div class="footersection">
							To Learn More, Contact a Private Property Consultant at <span>(212) 206-6000</span> or <span>click <a href="">here</a>.</span>
						</div>
					</div>
				</div>
		</div>
	</div>	
	
		<!-- buy and sell your home -->
	<div class="row martop40">
		<div class="large-12">
			<ul class="large-block-grid-2">
				<li><div class="headersection2"><h4>BUYING YOUR HOME</h4></div>
					<div class="buysellwrapper"><h4>Our Process</h4>
						<ul class="propertylist">
							<li>One</li>
							<li>Two</li>
							<li>Three</li>
							<li>Four</li>
							<li>Five</li>
						</ul>
						<a class="fl_right" href="sellyourhome.php">Are you also selling a home?</a>
						<div class="clear"></div>
						</div>
				</li>	
				<li><div class="headersection2"><h4>SELLING YOUR HOME</h4></div>
					<div class="buysellwrapper"><h4>Our Process</h4>
						<ul class="propertylist">
							<li>One</li>
							<li>Two</li>
							<li>Three</li>
							<li>Four</li>
							<li>Five</li>
						</ul>
						<a class="fl_right" href="buyhome.php">Are you also buying a home?</a>
						<div class="clear"></div>
						</div>				
				</li>
			</ul>
		</div>
	</div>	
	
	<div class="row whitebg martop20 shadow">
		<div class="large-12">
			<div class="headersection"><h4>INDUSTRY NEWS</h4></div>
				<div class="row propertyrow2">
					<div class="large-4 columns">
						<img class="newsimg" src="images/newsimg1.jpg"/>
					</div>
					<div class="large-4 columns">
						<img class="newsimg" src="images/newsimg1.jpg"/>
					</div>
					<div class="large-4 columns">
						<img class="newsimg" src="images/newsimg1.jpg"/>
					</div>					
				</div>
		</div>
	</div>	
	
	<script>
	$(function() {

	$( "#slider-range-sqft" ).slider({
		      change: function(event, ui) 
		      {
		search_fun(); 
		 }
    		});
	$( "#slider-range-bedroom" ).slider({
		 change: function(event, ui) 
		 {
		search_fun();	  
		}
		});
			 
	$( "#slider-range-bath" ).slider({
	  
		  change: function(event, ui) 
		  {
		search_fun();
		  
	     }
    		});
	$( "#slider-range-amount" ).slider({
		  change: function(event, ui) 
		  {
		search_fun();
	     }
    		});
			
	$('.search').click(function(){						   
	});
			
	$('#advance_serch').click(function()
	       {
		$('#county').show();
		$('#Mahattan').show();
		          
	       });
		 
	$('#county_Hamptons').click(function()
	       {
		$('#Hamptons').show();
		$('#Brooklyn').hide();
		$('#Mahattan').hide();
		       
	       });
		 
	$('#county_Brooklyn').click(function()
	       {
		$('#Brooklyn').show();
		$('#Mahattan').hide();
		$('#Hamptons').hide();
		       
	       });
		 
	$('#county_Mahattan').click(function()
	       {
		$('#Mahattan').show();
		$('#Brooklyn').hide();
		$('#Hamptons').hide();
	       });
		 
	$('#close').click(function()
	       {
		$('#Brooklyn').hide();
		$('#Hamptons').hide();
		$('#Mahattan').hide();
		$('#county').hide();
		
		 $(".checkbox").each(function(){
									   
			 if(this.checked)
			 {
			  $(this).removeAttr('checked');
			
			 }
		});
		 search_fun();
	       });
		 
        });
	
	function search_fun(sale)
{					
	if(typeof sale === 'undefined')
	{
	if ($('#radio2').is(':checked'))
	{
		sale=0;
	}
	else
	{
		sale=1;
	}
					
	}
				  
				
		var checked_values='';	
		$(".checkbox").each(function(){
									 
		       if(this.checked)
		       {
			 var test=$(this).val();
			  checked_values+=test+',';
		       }
		      });		
				
		$('#homeresult').html('');
		
		$.post('search_home.php',{sqft:$('#sqft').val(),
											amount:$('#amount').val(),
											bath:$('#bath').val(),
											bedroom:$('#bedroom').val(),
											radio:$('input:radio[name=radio]:checked').val(),
											checked_values:checked_values,sale:sale},
											function(data){
												$('#homeresults').html(data);
												//alert(data)
												});
}

 </script>	
	
<?php
include_once "layout/footer.php";
?>