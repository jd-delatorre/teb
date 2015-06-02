<?php
include_once "layout/header.php";
?>

<?php

if(!isset($num_rows)){
	$num_rows = 0;
}

?>
		
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="javascripts/range.js"></script>
<script>
$(function() {
$( "#tabs" ).tabs();
});
</script>
 <script>
$(function() {
$( "#accordion" ).accordion({
collapsible: true
});
});
</script>

<script>
function initialize() {
var myLatlng= new google.maps.LatLng(40.735177,-73.993996);

var mapOptions = {
	zoom:14,
	center: myLatlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP,
}

var map = new google.maps.Map(document.getElementById('map-canvas2'), mapOptions);
 
 var market= new google.maps.Marker({
	position: myLatlng,
	map: map,
	title: "55 Fifth Avenue, 14th Floor, New York, NY 10003"
 });

  var request = {
    reference: 'CnRkAAAAGnBVNFDeQoOQHzgdOpOqJNV7K9-c5IQrWFUYD9TNhUmz5-aHhfqyKH0zmAcUlkqVCrpaKcV8ZjGQKzB6GXxtzUYcP-muHafGsmW-1CwjTPBCmK43AZpAwW0FRtQDQADj3H2bzwwHVIXlQAiccm7r4xIQmjt_Oqm2FejWpBxLWs3L_RoUbharABi5FMnKnzmRL2TGju6UA4k'
  };

  var infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);

  service.getDetails(request, function(place, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
      });
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

<div class="row">
	<div class="large-12 columns" style="padding-left:0; padding-right:0;">
		<ul class="large-block-grid-5 searchmenu">
		  <li><a href="#" id="tabs-1link"><img src="images/icons/searchlistingiconactive.png" alt="TE Basic Listing Search"/>Basic Search</a></li>
		  <li><a href="#" class="dropdown" data-dropdown="dropproperty"><img src="images/icons/propertytypeicon.png" alt="TE Property Type"/>Property Type</a></li>
		  <li><a href="#" id="tabs-3" ><img src="images/icons/locationiconsearch.png" alt="TE Location"/>Location</a></li>
		  <li><a href="#" class="dropdown" data-dropdown="dropamenities"><img src="images/icons/amenitiesicon.png" alt="TE Amenities"/>Amenities</a></li>
		  <li><a href="#" class="dropdown" data-dropdown="dropcommunities"><img src="images/icons/communityicon.png" alt="TE Communities"/>Communities</a></li>	  
		</ul>
	</div>
</div>

<ul id="dropproperty" class="f-dropdown content" data-dropdown-content>
	<li><input type="checkbox" id="checkall" /><label for="checkall">All Types</label></li>
	<li> <input type="checkbox" id="checktown" /><label for="checktown">Townhomes</label></li>
	<li> <input type="checkbox" id="checkcoops" /><label for="checkcoops">Co-ops</label></li>
	<li> <input type="checkbox" id="checkcondos" /><label for="checkcondos">Condos</label></li>
	<li> <input type="checkbox" id="checkrental" /><label for="checkrental">Rental</label></li>
</ul>

<ul id="dropamenities" class="f-dropdown content" data-dropdown-content>
	<li><input type="checkbox" id="checkamenities" /><label for="checkamenities">All Types</label></li>
	<li> <input type="checkbox" id="checktownamenities" /><label for="checktownamenities">Townhomes</label></li>
	<li> <input type="checkbox" id="checkcoopsamenities" /><label for="checkcoopsamenities">Co-ops</label></li>
	<li> <input type="checkbox" id="checkcondosamenities" /><label for="checkcondosamenities">Condos</label></li>
	<li> <input type="checkbox" id="checkrentalamenities" /><label for="checkrentalamenities">Rental</label></li>
</ul>

<ul id="dropcommunities" class="f-dropdown content" data-dropdown-content>
	<li><input type="checkbox" id="checkcommunities" /><label for="checkcommunities">All Types</label></li>
	<li> <input type="checkbox" id="checktowncommunities" /><label for="checktowncommunities">Townhomes</label></li>
	<li> <input type="checkbox" id="checkcoopscommunities" /><label for="checkcoopscommunities">Co-ops</label></li>
	<li> <input type="checkbox" id="checkcondoscommunities" /><label for="checkcondoscommunities">Condos</label></li>
	<li> <input type="checkbox" id="checkrentalcommunities" /><label for="checkrentalcommunities">Rental</label></li>
</ul>
		
		<!-- Search Listings -->
<div id="tabs-1">
	<div class="row whitebg" >
		<div class="large-12 columns search_listings_container">
			<form class="custom">
			<div class="row padtop20">
				<div class="large-3 columns end">
						<div id="radio">
							<input type="radio" id="radio1" class="radio" name="radio" value="sale" checked="checked"  onchange="search_fun()"/><label for="radio1" class="leftbutton">For Sale</label>
							<input type="radio" id="radio2" class="radio" name="radio"  value="rent"  onchange="search_fun()"/><label for="radio2" class="rightbutton">For Rent</label>
						</div>	
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
			</form>
			<div class="row bluebackground chromeheadline" style="height:47px;">
				<div class="large-6 columns searchlistbottombox padTop5">
				
					<span class="searchresults" style="float:left; margin-top:9px;"><?php echo $num_rows ?> LISTINGS</span><a href="#" class="searchbutton" style="height:35px; color:#808080; background-color:#bccfdf;">LIST VIEW</a><a href="search_individual_map.php" class="searchbutton" style="height:35px; color:#808080;">MAP VIEW</a>
				</div>
				<div class="large-1 columns searchlistbottombox padTop15 padRight0" style="padding-left:0;">
					<span>Sort by:</span>
				</div>				
				<div class="large-3 columns searchlistbottombox" style="padding-top: 3px;">
						<form class="custom marTop5">
							<select id="customDropdown1" class="medium" onchange="search_fun()">
								<option value="lowhighprice" selected>Price - Low to High</option>
								<option value="highlowprice">Price - High to Low</option>
								<option value="lowhighsqfootage">Sq. Footage - Low to High</option>
								<option value="highlowsqfootage">Sq. Footage - High to Low</option>
								<option>Random</option>
							  </select>
						</form>
				</div>
				        <input type="hidden" id="amount1" style="border: 0; color: #f6931f; font-weight: bold;" />
						<input type="hidden" id="amount2" style="border: 0; color: #f6931f; font-weight: bold;" />
						<input type="hidden" id="amount3" style="border: 0; color: #f6931f; font-weight: bold;" />
						<input type="hidden" id="amount4" style="border: 0; color: #f6931f; font-weight: bold;" />
						</br>
						<div id="advance_search" style="display:none">
						<?php
						
						?>
						</div>
				<div class="large-2 columns searchlistbottombox specialsearchbox">
					<span><form>						<div id="radiolayout">
							<input type="radio" id="layout1" class="layoutselect" name="layoutselect" value="detail" checked="checked" onchange="search_fun()"/><label for="layout1" class="">Detailed</label> <span>|</span> 
							<input type="radio" id="layout2" class="layoutselect" name="layoutselect"  value="grid" onchange="search_fun()"/><label for="layout2" class="">Grid</label>
						</div>	</form></span>
				</div>
			</div>
				</div>			<!-- Search section large-12 div -->
			</div>	

	         <!-- Counties-->
    
    <!-- Counties -->
    
    
    
     	<!--Mahattan Neighbourhoods-->
   
    <!--Mahattan Neighbourhoods-->
    
    <!-- Brooklyn Neighbourhoods-->
    
    <!-- Brooklyn Neighbourhoods-->
    
     <!-- Hamptons Neighbourhoods-->
    
    
    <div class="row whitebg martop20" id="county" style="display:none">
		<div class="large-12">
			<div class="headersection"><h4>ADVANCED SEARCH</h4></div>
				<div class="row propertyrow">
					<div class="large-2 columns"  >
						<ul>
						<?php 
                        while($row = mysql_fetch_array($result1))
                        {
							
                        ?>
                           
                          <li style="display:inline-block"> 
                         
                          <a id="county_<?php echo $row['county']; ?>" class="search"><?php echo $row['county']; ?></a>
                          </li>
							<br />
                          <?php }?>  
                          </ul>
                          <a  id="close">Close</a>
						
					</div>
					<div class="large-10 columns" style="display:none" id="Mahattan">
						
                        <ul class="propertylist" style="width:800px">
						<?php 
                        while($row = mysql_fetch_array($res))
                        {
							$i=0;
                        ?>
                            <li style="display:inline-block; float:left; width:180px; padding:5px">
							<div style="width:130px;text-align:left; float:left">
							<?php echo $row['neighborhoods'];?>
                            </div>
                            <div style="width:30px;float:left">
                            <input type="checkbox" value="<?php echo $row['neighborhoods'];?>" onclick="search_fun()" class="checkbox" />
                            </div>
							</li>
                          <?php }?>  
						</ul>
					</div>
                    
                    <div class="large-10 columns" style="display:none" id="Brooklyn">
						
                        <ul class="propertylist" style="width:800px">
						<?php 
                        while($row = mysql_fetch_array($res1))
                        {
							$i=0;
                        ?>
                            <li style="display:inline-block; float:left; width:180px; padding:5px">
							<div style="width:130px;text-align:left; float:left">
							<?php echo $row['neighborhoods'];?>
                            </div>
                            <div style="width:30px;float:left">
                            <input type="checkbox" value="<?php echo $row['neighborhoods'];?>" onclick="search_fun()" class="checkbox" />
                          </div>
							</li>
                          <?php }?>  
						</ul>
					</div>
                    
                    <div class="large-10 columns" style="display:none" id="Hamptons">
						
                        <ul class="propertylist" style="width:800px">
						<?php 
                        while($row = mysql_fetch_array($res2))
                        {
							$i=0;
                        ?>
                            <li style="display:inline-block; float:left; width:180px; padding:5px">
							<div style="width:130px;text-align:left; float:left">
							<?php echo $row['neighborhoods'];?>
                            </div>
                            <div style="width:30px;float:left">
                            <input type="checkbox" value="<?php echo $row['neighborhoods'];?>" onclick="search_fun()" class="checkbox" />
                            </div>
                            </li>
							
                          <?php }?>  
						</ul>
					</div>
                    
				</div>
				<div class="row">
					<div class="large-12 columns">
						
					</div>
				</div>
		</div>
	</div>
    <!-- Hamptons Neighbourhoods-->
	
			<div class="row">
				<div id="result">
						
					
			</div>
		</div>
</div>		

<div class="row whitebg shadow listingboxrow">
	<div class="large-5 columns listingboxmap whitebg">
		<div class="row">
			<div class="large-12 columns" style="padding:0;">
				<img src="images/searchlistingimgmap.jpg" style="width:100%;"/>
			</div>
		</div>
		<div class="row">
			<div class="large-3 columns listingmoney">
				$2.5M <img src="images/icons/moneyicon.png" alt="Price"/>
			</div> 			
			<div class="large-3 columns listingbedroom">
				2 <img src="images/icons/bedroomicon_listing.png" alt="Bedroom"/>
			</div>
			<div class="large-3 columns listingbathroom">
				1.5 <img src="images/icons/bathroomicon.png" alt="Bathrooms"/>
			</div>
			<div class="large-3 columns listinglocation">
				TRIBECA <img src="images/icons/locationicon_listing2.png" alt="Location"/>
			</div>
		</div>							
		
		<div class="row">
			<div class="large-12 columns listingboxp headersectionsmall" style="padding-left:20px; padding-right:20px;">		
		<h5 class="listingboxheader3">15 BROAD STREET &nbsp;<span>|</span>&nbsp; UNIT 1500 &nbsp;<span>|</span>&nbsp; NEW YORK, NY
<!--			<img src="images/icons/favoriteicon.png" width="29px" height="29px" alt="Favorite"/>
			<img src="images/icons/emailicon.png" width="29px" height="29px" alt="Email"/>
			<img src="images/icons/twittersearchlistingsicon.png" width="28px" height="29px" alt="Twitter"/>
			<img src="images/icons/facebooksearchlistingsicon.png" width="29px" height="29px" alt="Facebook"/>			-->	
		</h5>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
					in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
				<div class="row">
					<div class="large-12 columns">
						<p class="marbottom0"><span class="signaturebold">Listed by Javier Lattanzio - </span><span class="signaturecolor">Request a Call</span><br/>
						<span class="signaturebold">O:</span> (212) 206-6121 &nbsp;<span class="signaturebold">C:</span> (917) 670-2268<br/>
						jlattanzio@timeequities.com</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-7 columns bottomlisting bluebackground">
			<a href="">VIEW FULL LISTING</a>
			</div>
			<div class="large-5 columns whitebg bottomlisting2">
			<img src="images/icons/favoriteicon.png" width="29px" height="29px" alt="Favorite"/>
			<img src="images/icons/emailicon.png" width="29px" height="29px" alt="Email"/>
			<img src="images/icons/twittersearchlistingsicon.png" width="28px" height="29px" alt="Twitter"/>
			<img src="images/icons/facebooksearchlistingsicon.png" width="29px" height="29px" alt="Facebook"/>
			</div>
		</div>

	</div>	<!-- Closing the right side columns-->
		<div class="large-7 columns" >
		<div id="map-canvas2">
			MAP
			</div>
		</div>
</div>		<!-- Closing the top level row -->

<div class="row martop30">
	<div class="large-12">
		<ul class="large-block-grid-2">
		  <li>
			<div class="twitter">
				<div class="twitter-text">"Join us for an open house tonight at 125 Duane Street"</div>
				<div class="twitter-name">@tebrokerage&nbsp;&nbsp;&nbsp;<img src="images/icons/twittericon.png" alt="TE Twitter"/></div>
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
					<div class="large-4 columns openhouseimg">
						<img src="images/openhouseimg.jpg" alt="TE Open House"/>
					</div>
				</div>
			</div>
		  </li>
		</ul>
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
							sale=1;
						}
						else
						{
							sale=0;
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
				  
						  
				  $('#result').html('');
				  
				  $.post('search_post.php',{sqft:$('#sqft').val(),amount:$('#amount').val(),bath:$('#bath').val(),bedroom:$('#bedroom').val(),checked_values:checked_values,sale:sale},function(data){
				  $('#result').html(data);
				  //alert(data)
				  });
}

 </script>	

<?php
include_once "layout/footer.php";
?>