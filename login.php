<?php
	$page_title="Login";
    include("include/header.inc");
?>
<!--Start of main Content-->
<div id="main_wrapper_l">
<div id="login_form">
    <form method="post" action="login_process.php">
    	<fieldset>
    		<legend>Login</legend>
       	 		Username:<br /><input type="text" name="username" /><br />
        		Password:<br /><input type="password" name="password" rows="20" cols="30" /><br /><br/>
        		<input type="submit" value="Submit" />
        </fieldset>
    </form>
 </div>
</div>
<!--end of main content-->
<?php
	include("include/footer.inc");
?>
