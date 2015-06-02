<?php
session_start(); // Must start session first thing

// See if they are a logged in member by checking Session data
$toplinks = "";

if (isset($_SESSION['id'])) {

	// Put stored session variables into local php variable
    $userid = $_SESSION['id'];
    $username = $_SESSION['username'];
	$toplinks = '<a href="member_profile.php?id=' . $userid . '">' . $username . '</a> &bull; 
	<a href="member_account.php">Account</a> &bull; 
	<a href="logout.php">Log Out</a>';
	
} else {

	$toplinks = '<a href="join_form.php">Register</a> &bull; <a href="login.php">Login</a>';

	}
	
?>
<?php
include_once "layout/header.php";
?>

<div class="row">
	<div class="large-12 columns">
<table style="background-color: #CCC" width="100%" border="0" cellpadding="12">
  <tr>
    <td width="78%"><h1>My Website Logo</h1></td>
    <td width="22%"><?php echo $toplinks; ?></td>
  </tr>
</table>
<div style="padding:12px">
  <h2>Welcome to the home page of my website.</h2>
  <p>This is where we do a summary or showcase of  content the site has to offer.</p>
</div>
</div>
</div>

<?php
include_once "layout/footer.php";
?>