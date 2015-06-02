<?php
include_once "layout/header.php";
include_once "dblogin.php";

$selection = $_GET['id'];

mysql_select_db("teb", $con);

$sql=mysql_query('SELECT * FROM national_retail_properties WHERE id=\''.$selection.'\'');
$row = mysql_fetch_assoc($sql);

?>

<style>
	.orbit-container{
		background:none!important;
	}
	
	.orbit-slides-container{
		height:465px!important;
	}
	
	#map-canvas{
		width:100%;
		height:350px;
	}
</style>

<script>
function initialize() {
var myLatlng= new google.maps.LatLng(40.735177,-73.993996);

var mapOptions = {
	zoom:15,
	center: myLatlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP,
}

var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 
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
	<div class="large-12 columns" style="padding:0;">
		<div class="full_listing_header">
		<?php echo $row['title']; ?> &nbsp;|&nbsp; UNIT <?php echo $row['unit'] ?> &nbsp;|&nbsp; <?php echo $row['property_city']  ?>, <?php echo $row['property_state'] ?> 
				<div class="full_listing_icons">
					<a href="#" class="facebookiconfull"><?php include "images/icons/facebook_opt.svg";?></a>
					<a href="#" class="twittericonfull"><?php include "images/icons/twitter_opt.svg";?></a>
					<a href="#" class="emailiconfull"><?php include "images/icons/email_opt.svg";?></a>
					<a href="#" class="favoriteiconfull"><?php include "images/icons/favorite_opt.svg";?></a>
				</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="large-12 columns" style="padding:0;">
		<ul data-orbit id="full_listing" data-options="bullets:false;">
		  <li data-orbit-slide="image1"><img src="images/fulllistingimg.jpg" /><div class="orbit-caption" style="background-color:transparent"><div class="row"><div class="large-3 end fl_right" style="background-color:#1473af; padding:5px 5px 5px 15px; font-size: 20px; font-weight:600;">VIEW FLOOR PLAN</div></div><div class="row"><div class="large-12 columns" style="padding:5px;"> <!-- Full width bottom transparent underneath sections --><div class="row"><div class="large-6 columns" style="padding-top:12px;">BEAUTIFUL TERRACE!</div><div class="large-6 end columns blurb" style="padding-left:0; padding-right:0;"><div><ul class="disc" id="full_listing_thumb" style="margin-top:15px; margin-bottom:15px;"><li><a href="#" data-orbit-link="image1"><img src="images/fulllistingthumb1.jpg" /></a></li><li><a href="#" data-orbit-link="image2"><img src="images/fulllistingthumb2.jpg" /></a></li><li><a href="#" data-orbit-link="image3"><img src="images/fulllistingthumb3.jpg" /></a></li><li><a href="#" data-orbit-link="image4"><img src="images/fulllistingthumb4.jpg" /></a></li></ul></div></div></div></div></div></div></li>
		  <li data-orbit-slide="image2"><img src="images/fulllistingimg2.jpg" /><div class="orbit-caption"style="background-color:transparent"><div class="row"><div class="large-3 end fl_right" style="background-color:#1473af; padding:5px 5px 5px 15px; font-size: 20px; font-weight:600;">VIEW FLOOR PLAN</div></div><div class="row"><div class="large-12 columns" style="padding:5px;"> <!-- Full width bottom transparent underneath sections --><div class="row"><div class="large-6 columns" style="padding-top:12px;">BEAUTIFUL TERRACE!</div><div class="large-6 end columns blurb" style="padding-left:0; padding-right:0;"><div><ul class="disc" id="full_listing_thumb" style="margin-top:15px; margin-bottom:15px;"><li><a href="#" data-orbit-link="image1"><img src="images/fulllistingthumb1.jpg" /></a></li><li><a href="#" data-orbit-link="image2"><img src="images/fulllistingthumb2.jpg" /></a></li><li><a href="#" data-orbit-link="image3"><img src="images/fulllistingthumb3.jpg" /></a></li><li><a href="#" data-orbit-link="image4"><img src="images/fulllistingthumb4.jpg" /></a></li></ul></div></div></div></div></div></div></li>
		  <li data-orbit-slide="image3"><img src="images/fulllistingimg3.jpg" /><div class="orbit-caption"style="background-color:transparent"><div class="row"><div class="large-3 end fl_right" style="background-color:#1473af; padding:5px 5px 5px 15px; font-size: 20px; font-weight:600;">VIEW FLOOR PLAN</div></div><div class="row"><div class="large-12 columns" style="padding:5px;"> <!-- Full width bottom transparent underneath sections --><div class="row"><div class="large-6 columns" style="padding-top:12px;">BEAUTIFUL TERRACE!</div><div class="large-6 end columns blurb" style="padding-left:0; padding-right:0;"><div><ul class="disc" id="full_listing_thumb" style="margin-top:15px; margin-bottom:15px;"><li><a href="#" data-orbit-link="image1"><img src="images/fulllistingthumb1.jpg" /></a></li><li><a href="#" data-orbit-link="image2"><img src="images/fulllistingthumb2.jpg" /></a></li><li><a href="#" data-orbit-link="image3"><img src="images/fulllistingthumb3.jpg" /></a></li><li><a href="#" data-orbit-link="image4"><img src="images/fulllistingthumb4.jpg" /></a></li></ul></div></div></div></div></div></div></li>
		  <li data-orbit-slide="image4"><img src="images/fulllistingimg4.jpg" /><div class="orbit-caption"style="background-color:transparent"><div class="row"><div class="large-3 end fl_right" style="background-color:#1473af; padding:5px 5px 5px 15px; font-size: 20px; font-weight:600;">VIEW FLOOR PLAN</div></div><div class="row"><div class="large-12 columns" style="padding:5px;"> <!-- Full width bottom transparent underneath sections --><div class="row"><div class="large-6 columns" style="padding-top:12px;">BEAUTIFUL TERRACE!</div><div class="large-6 end columns blurb" style="padding-left:0; padding-right:0;"><div><ul class="disc" id="full_listing_thumb" style="margin-top:15px; margin-bottom:15px;"><li><a href="#" data-orbit-link="image1"><img src="images/fulllistingthumb1.jpg" /></a></li><li><a href="#" data-orbit-link="image2"><img src="images/fulllistingthumb2.jpg" /></a></li><li><a href="#" data-orbit-link="image3"><img src="images/fulllistingthumb3.jpg" /></a></li><li><a href="#" data-orbit-link="image4"><img src="images/fulllistingthumb4.jpg" /></a></li></ul></div></div></div></div></div></div></li>	  
		</ul>
	</div>
</div>
	
<div class="row">
	<div class="large-3 columns pricebox">
		<?php echo $row['rent'];  include "images/icons/price_opt.svg";  ?>
	</div>
	<div class="large-3 columns brbox">
		<?php echo $row['bedroom'];  include "images/icons/bedroom_opt.svg"; ?>
	</div>
	<div class="large-3 columns bathbox">
		<?php echo $row['bathroom'];  include "images/icons/bathroom_opt.svg";   ?>
	</div>
	<div class="large-3 columns locationbox">
		<span>TRIBECA <?php include "images/icons/location_opt.svg"; ?></span>
	</div>
</div>

<div class="row">
	<div class="large-12 columns whitebg fullpad">
		<p>
			<span class="firstwords">SINGLE FAMILY HOME -</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin mollis. Vestibulum congue lorem at sapien...Lorem ipsum dolor sit amet, 
			consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin mollis. Vestibulum congue lorem at sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin 
			mollis. Vestibulum congue lorem at sapien...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin mollis. Vestibulum congue lorem at sapien.
		</p>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin mollis. Vestibulum congue lorem at sapien...Lorem ipsum dolor sit amet, 
			consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin mollis. Vestibulum congue lorem at sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin 
			mollis. Vestibulum congue lorem at sapien...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin mollis. Vestibulum congue lorem at sapien.
		</p>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin mollis. Vestibulum congue lorem at sapien...Lorem ipsum dolor sit amet, 
			consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin mollis. Vestibulum congue lorem at sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin 
			mollis. Vestibulum congue lorem at sapien...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget nunc eu lacus sollicitudin mollis. Vestibulum congue lorem at sapien.
		</p>
	</div>
</div>

<div class="row">
	<div class="large-4 columns fulllisting whitebg" style="padding:0!important; width:32.33%; margin-right:1%;">
		<div><img src="images/icons/locationiconsearch.png"/> Location
		</div>
		<div id="map-canvas">
		</div>
	</div>
	
	<div class="large-4 columns fulllisting whitebg" style="padding:0!important; width:32.33%; margin-right:1%;">
			<div><img src="images/icons/amenitiesicon.png"/> Amenities
		</div>
		<div class="fullbody">
			<ul>
				<li>Doorman</li>
				<li>Laundry in Building</li>
				<li>Elevator</li>
				<li>Live-in Super</li>
				<li>Community Recreation Facilities</li>
				<li>Gym</li>
				<li>Swimming Pool</li>
			</ul>
		</div>
	</div>
	
	<div class="large-4 columns fulllisting whitebg" style="padding:0!important;">
			<div><img src="images/icons/communityfull.png"/> Community
		</div>
		<div class="fullbody">
			<ul>
				<li>J Z at Broad St (under 500 feet)</li>
				<li>2 3 at Wall St (under 500 feet)</li>
				<li>4 5 at Wall St (under 500 feet)</li>
				<li>R at Rector St (0.1 miles)</li>
				<li>1 at Rector St (0.2 miles)</li>
				<li>Ferry at Pier 11 Ferry Landing (0.3 miles)</li>
			</ul>
			
			<br/>
				Schools zoned for this address:
				<ul>
					<li><a href="">Simon Baruch Middle School (Ms 104)</a>(6-8)</li>
					<li><a href="">PS 234 Independence School</a>(K-5)</li>
					<li><a href="">PS 276 Battery Park City School</a>(K-8)</li>
					<li><a href="">NYC School M343</a>(K-5)</li>					
				</ul>
		</div>
	</div>
</div>

<div class="row" style="margin-top:10px;">
	<div class="large-5 columns fulllistingbroker">
			<div class="large-3 columns" style="margin-top:7px;">
				<img src="images/icons/searchlistingsignature.png" width="50" height="50" alt="TE Logo"/>
			</div>
			<div class="large-9 columns">
				<p class="marbottom0" style="margin-top:3px;"><span class="signaturebold">Listed by Javier Lattanzio </span><br/>
				<span class="signaturebold">O:</span> (212) 206-6121 &nbsp;<span class="signaturebold">C:</span> (917) 670-2268<br/> jlattanzio@timeequities.com</p>
			</div>
	</div>
	<div class="large-7 columns contactusbox">
			<div class="large-4 columns">
				<span>REQUEST A CALL
				</span>
			</div>
			<div class="large-4 columns">
				<input type="text" name="callname" placeholder="Name" />
			</div>
			<div class="large-4 columns">
							<input type="text" name="callphone" placeholder = "Phone"/>
							<input type="button" value="Submit" name="submit"/>
			</div>
	</div>
</div>
	
<div class="row martop40">
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
	
<?php


include_once "layout/footer.php";
?>	