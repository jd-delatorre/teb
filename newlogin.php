
<?php
include_once "layout/header.php";
?>

<div class="row">
	<div class="large-12 columns">
		<form name="register" action="register.php" method="post">
			
			<div class="row">
				<div class="large-3 columns large-offset-3">
				Username: 
				</div>
				<div class="large-3 columns end">
				<input type="text" name="username" maxlength="30" />
				</div>
			</div>
			<div class="row">
				<div class="large-3 columns large-offset-3">
				Password: 
				</div>
				<div class="large-3 columns end">
				<input type="password" name="pass1" />
				</div>
			</div>
			<div class="row">
				<div class="large-3 columns large-offset-3">
				Password Again: 
				</div>
				<div class="large-3 columns end">			
			<input type="password" name="pass2" />
			</div>
			</div>
			<div class="row">
				<div class="large-3 columns large-centered">
				<input type="submit" class="button" value="Register" />
				</div>
			</div>
		</form>
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