<?php
include_once "layout/header.php";
?>

<script>
$(document).ready(function() {
    search_fun(); // start the loop
  });
</script>

<div class="row">
	<div class="large-5 columns end" style="padding-left:0;">
		<div class="featuredheadline ">
			FEATURED LISTINGS
		</div>
	</div>
</div>

<div style="display:none!important;">
	<form class="custom">
		<div class="row padtop20">
			<div class="large-3 columns">
					<div id="radio">
						<input type="radio" id="radio1" class="radio" name="radio" value="sale" checked="checked"  onchange="search_fun()"/><label for="radio1" class="leftbutton">For Sale</label>
						<input type="radio" id="radio2" class="radio" name="radio"  value="rent"  onchange="search_fun()"/><label for="radio2" class="rightbutton">For Rent</label>
					</div>	
			</div>
			<div class="large-2 columns">
				<div class="currently"><img src="images/icons/map.png" alt="TE Listing Location"/>LOCATION</div>
			</div>
			<div class="large-7 columns">
				<div class="currently2"><a href="">CLICK HERE TO REFINE</a></div>
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

<div class="row bluebackground chromeheadline" style="height:47px; margin-top:20px;">
				<div class="large-6 columns searchlistbottombox padTop5">
				
					<span class="searchresults" style="float:left; margin-top:9px;">0 LISTINGS</span><a href="#" class="searchbutton" style="height:35px; color:#808080; background-color:#bccfdf;">LIST VIEW</a><a href="search_individual_map.php" class="searchbutton" style="height:35px; color:#808080;">MAP VIEW</a>
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
				<div class="large-2 columns searchlistbottombox specialsearchbox" style="display:none!important;">
					<span><form>						<div id="radiolayout">
							<input type="radio" id="layout1" class="layoutselect" name="layoutselect" value="detail" onchange="search_fun()"/><label for="layout1" class="">Detailed</label> <span>|</span> 
							<input type="radio" id="layout2" class="layoutselect" name="layoutselect"  value="grid" checked="checked"  onchange="search_fun()"/><label for="layout2" class="">Grid</label>
						</div>	</form></span>
				</div>
			</div>
			
			<div class="row">
				<div class="large-12 columns">
					<div id="featuredresults">
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
				
		$('#featuredresults').html('');
		
		$.post('search_featured.php',{sqft:$('#sqft').val(),
											amount:$('#amount').val(),
											bath:$('#bath').val(),
											bedroom:$('#bedroom').val(),
											customDropdown1:$('#customDropdown1').val(),
											layoutselected:$('input:radio[name=layoutselect]:checked').val(),
											radio:$('input:radio[name=radio]:checked').val(),
											checked_values:checked_values,sale:sale},
											function(data){
												$('#featuredresults').html(data);
												//alert(data)
												});
}

 </script>	
 
<?php
include_once "layout/footer.php";
?>