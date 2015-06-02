<?php
include_once "layout/header.php";
?>
	
	<!-- Main Slider Image-->
	<div class="row">
		<div class="large-12">
			<ul data-orbit data-options="slide_number:false" class="slider">
			  <li><div class="promobox" >JUST LISTED!</div>
				<img src="images/slider/sliderimg1.jpg" width="100%" />
				<div class="orbit-caption large-3">  <!--Transparent colored bottom caption section-->
					<div class="row">
						<div class="large-3 columns">
							<span>TRIBECA</span>
						</div>
						<div class="large-3 columns">
							$2.5M
						</div>
						<div class="large-3 columns">
							2 BR
						</div>
						<div class="large-3 columns">
							1.5 Bath
						</div>
					</div>
					<div class="row">
						<div class="large-12 columns"> <!-- Full width bottom transparent underneath sections -->
							<div class="row">
								<div class="large-4 columns">
								125 Duane Street
								</div>
								<div class="large-6 push-2 end columns blurb">
									<div><span>LOOKING TO SELL YOUR HOME?</span>
									<span>CLICK </span><a href="">HERE</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </li>
			  <li><div class="promobox" >JUST LISTED!</div>
				<img src="images/slider/sliderimg2.jpg" width="100%" />
				<div class="orbit-caption">  <!--Transparent colored bottom caption section-->
					<div class="row">
						<div class="large-3 columns">
							Tribeca
						</div>
						<div class="large-3 columns">
							$2.5M
						</div>
						<div class="large-3 columns">
							2 BR
						</div>
						<div class="large-3 columns">
							1.5 Bath
						</div>
					</div>	
					<div class="row">
						<div class="large-12 columns"> <!-- Full width bottom transparent underneath sections -->
							<div class="row">
								<div class="large-4 columns">
								125 Duane Street
								</div>
								<div class="large-6 push-2 end columns blurb">
									<div><span>LOOKING TO SELL YOUR HOME?</span>
									<span>CLICK </span><a href="">HERE</a></div>
								</div>
							</div>
						</div>
					</div>					
				</div>
			  </li>
			  <li><div class="promobox" >JUST LISTED!</div>
				<img src="images/slider/sliderimg3.jpg" width="100%"/>
				<div class="orbit-caption">   <!--Transparent colored bottom caption section-->
					<div class="row">
						<div class="large-3 columns">
							Tribeca
						</div>
						<div class="large-3 columns">
							$2.5M
						</div>
						<div class="large-3 columns">
							2 BR
						</div>
						<div class="large-3 columns">
							1.5 Bath
						</div>
					</div>	
					<div class="row">
						<div class="large-12 columns"> <!-- Full width bottom transparent underneath sections -->
							<div class="row">
								<div class="large-4 columns">
								125 Duane Street
								</div>
								<div class="large-6 push-2 end columns blurb">
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
			
				<div class="large-3 columns large-offset-2 end moresearchoptions">
					<a id="advance_serch">Want More Search Options? Click Here</a>
				</div>
			</div>
			<form class="custom">
			<div class="row padtop20">
				<div class="large-3 columns">
				    <label class="radbuttons blue" for="radio1" onclick="search_fun(0)" >
                    <input name="radio1" type="radio" id="radio1" style="display:none;" class="radio_sale" checked="checked">
                    <span class="custom radio "></span> For Rent</label>
					<label class="radbuttons" for="radio1" onclick="search_fun(1)">
                    <input name="radio1" type="radio" id="radio2" style="display:none;" >
                    <span class="custom radio checked"></span> For Sale</label>				
				</div>
				<div class="large-2 columns" >
					<div class="currently"><img src="images/icons/map.png"/>LOCATION</div>
				</div>
				<div class="large-7 columns">
					<div class="currently2">CURRENTLY SHOWING ALL LOCATIONS.  &nbsp;&nbsp;&nbsp;<a href="">CLICK HERE TO REFINE</a></div>
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
     <div class="row whitebg martop20" >
		<div class="large-12">
			
					<div class="large-5 columns" id="result">
						
					
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
					<div class="large-7 columns">
						<div class="privateproperty">
							<span>Assisting You With All of Your<br/>
							Property Needs from A-Z</span>
							<div class="clear"></div>
						</div>
					</div>
					<div class="large-5 columns">
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
						<a class="fl_right" href="">Are you also selling a home?</a>
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
						<a class="fl_right" href="">Are you also buying a home?</a>
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