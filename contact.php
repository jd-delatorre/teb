<?php
include_once "layout/header.php";
?>
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

	<div class="row whitebg martop20 shadow">
		<div class="large-12">
			<div class="headersection"><h4>CONTACT US</h4></div>
				<div class="row contactbox">
					<div class="large-5 columns padleft40">
						<form>
						<div class="row">
							<div class="large-6 columns">
								<input type="text" placeholder="Name">
							</div>
							<div class="large-6 columns">
								<input type="text" placeholder="Phone">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input type="text" placeholder="Email">													
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
							      <select id="customDropdown1" class="medium contactdropdown">
									<option>Select your subject</option>
									<option>Subject 1</option>
									<option>Subject 2</option>
									<option>Subject 3</option>
								  </select>												
							</div>
						</div>	
						<div class="row">
							<div class="large-12 columns">
								<textarea class="textbox" rows="6" placeholder="Type your message here"></textarea>	
							</div>
						</div>
						<div class="row">
							<div class="large-6 columns">
								<input type="submit" class="radius expand button contactbutton" value="Submit">
							</div>
						</div>
						</form>
					</div>
					<div class="large-7 columns">
						<div class="row">
							<div class="large-5 columns contacttext">
								<h6>Visit Our Office</h6>
								<p>55 Fifth Avenue, 14th Floor<br/>
								New York, NY 10003</p>
								<h6>Telephone</h6>
								<p>(212) 206-6000</p>
								<h6>Fax</h6>
								<p>(212) 206-6023</p>
								<h6>Email</h6>
								<p>info@tebllc.com</p>
								<a href=""><img src="images/icons/twittericonbottom.png"/></a>
								<a href=""><img src="images/icons/linkedinicon.png"/></a>
								<a href=""><img src="images/icons/facebookicon.png"/></a>
							</div>
							<div class="large-7 columns" id="map-canvas">
							<!--<iframe width="275" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=55+fifth+avenue,+new+york,+ny&amp;aq=&amp;sll=40.697488,-73.979681&amp;sspn=0.560155,1.352692&amp;ie=UTF8&amp;hq=&amp;hnear=55+5th+Ave,+New+York,+10003&amp;t=m&amp;ll=40.750508,-73.992405&amp;spn=0.045515,0.05579&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=55+fifth+avenue,+new+york,+ny&amp;aq=&amp;sll=40.697488,-73.979681&amp;sspn=0.560155,1.352692&amp;ie=UTF8&amp;hq=&amp;hnear=55+5th+Ave,+New+York,+10003&amp;t=m&amp;ll=40.750508,-73.992405&amp;spn=0.045515,0.05579&amp;z=13&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>				-->			
							</div>
						</div>
					</div>
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