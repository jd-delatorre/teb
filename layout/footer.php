			<!-- disclaimer and social icons -->
	<div class="row martop30 footer">
		<div class="large-4 columns">
			<a href="">Disclaimer FPO</a>
		</div>
		<div class="large-4 offset-by-4 columns">
		<div class="fl_right right_flat">
		<a href=""><img src="images/icons/tesmalllogo.png"/></a>
		<a href=""><img src="images/icons/facebookicon.png"/></a>
		<a href=""><img src="images/icons/twittericonbottom.png"/></a>
		<a href=""><img src="images/icons/linkedinicon.png"/></a>
		</div>
		</div>
	</div>	
	
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="javascripts/foundation/foundation.js"></script>
	
	<script src="javascripts/foundation/foundation.cookie.js"></script>
	
	<script src="javascripts/foundation/foundation.dropdown.js"></script>
	
	<script src="javascripts/foundation/foundation.forms.js"></script>
	
	<script src="javascripts/foundation/foundation.interchange.js"></script>
	
	<script src="javascripts/foundation/foundation.orbit.js"></script>
	
	<script src="javascripts/foundation/foundation.placeholder.js"></script>
	
	<script src="javascripts/foundation/foundation.reveal.js"></script>
	
	<script src="javascripts/foundation/foundation.section.js"></script>
	
	<script src="javascripts/foundation/foundation.tooltips.js"></script>
	
	<script src="javascripts/foundation/foundation.topbar.js"></script>
	
  
  <script>
    $(document).foundation();
  </script>
  
  <div id="login" class="reveal-modal small">
  <h4>Login</h4>


<form name="login" action="login.php" method="post">
  <fieldset>
    <div class="row">
      <div class="large-6 columns">
        <label>Username</label>
		</div>
      <div class="large-6 columns">		
        <input type="text" name="username" id="username">
      </div>
    </div>
	
	 <div class="row">
      <div class="large-6 columns">
        <label>Password</label>
		</div>
      <div class="large-6 columns">		
        <input type="password" name="password" id="password">
      </div>
    </div>
	
	<div class="row">
		<div class="large-4 large-centered columns">
			<input type="submit" class="button" name="Submit" value="login"/>
		</div>
	</div>
	
	<div class="row">
		<div class="large-12 large-centered columns">
			<p>If you don't have a login, please <a href="newlogin.php">click here</a> to register.</p>
		</div>
	</div>
   </fieldset>
</form>

  <a class="close-reveal-modal">&#215;</a>
</div>
</body>
</html>
