<!DOCTYPE html>
<html lang="en">
<head>
<title>startuppromotion - Clients</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="startuppromotion, startuppromotion.co">
<meta name="keywords" content="startuppromotion, startuppromotion.co">
<meta name="author" content="startuppromotion, startuppromotion.co">
<link rel="shortcut icon" href="http://www.startuppromotion.co/favicon.ico">

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/superslides.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/isotope.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="csslog/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fontslog/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="csslog/demo.css" />
		<link rel="stylesheet" type="text/css" href="csslog/component.css" />
        
         <link rel="stylesheet" href="styles1.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        
         <style>
label,a, body 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}
.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
table
{
	border-bottom-width:14px;
	border-left-width:14px;
}
</style>	
<!-- a helper script for vaidating the form-->
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/superfish.js"></script>

<script src="js/jquery.queryloader2.js"></script>

<script src="js/jquery.superslides.js"></script>

<script src="js/jquery.caroufredsel.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>

<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script>

<script src="js/jquery.parallax-1.1.3.resize.js"></script>

<script src="js/SmoothScroll.js"></script>

<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>

<script src="js/cform.js"></script>

<script src="js/scripts.js"></script>

</head>
<body class="onepage front" data-spy="scroll" data-target="#top1" data-offset="78">

<div id="load"></div>

<div id="main">

<div id="top1">
<div class="container">

<header><div class="logo_wrapper"><a href="#home" class="logo scroll-to"><font color="#CC33CC">start</font><font color="#FF99CC">up</font><font color="#CC33CC">promotion</font></a></div></header>

<div class="navbar navbar_ navbar-default">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<div class="navbar-collapse navbar-collapse_ collapse">
		<ul class="nav navbar-nav sf-menu clearfix">
			<li><a href="home.html">Home</a></li>
			<li><a href="client.html">Clients</a></li>
			<li class=" sub-menu sub-menu-1"><a href="service.html">Services<em></em></a>
				<ul>
					<li><a href="contentwriter.html">Content Writing</a></li>
					
					<li><a href="socialmarket.html">Social Media Marketing</a></li>
                    <li><a href="marketstrategy.html">Marketing Strategy</a></li>
					<li><a href="freeservice.html">Free Services</a></li>
                  <li><a href="articlepub.html">Article Publishing</a></li>
				</ul>
			</li>
			<li><a href="about.html">About Us</a></li>
            <li class="active"><a href="ref.php">Refer your friend</a></li>
            
			<li><a href="contact.html">Contact Us</a></li>
		</ul>
</div>
</div>
</div>
</div>

<div id="events">

<div id="parallax1" class="parallax">

<div class="bg1 parallax-bg"></div>

<div class="overlay"></div>
 <?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
    
    
<div class="container">
  <header class="codrops-header">
    <h1><img src="img/logo.png" width="323" height="184" alt="logo"></h1>
    <h1>Refer and Win<span></span></h1>
  </header>
  
 
               
</div>
  
  
  
  
  
  <section class="content">
  <div class="container">
<div class="parallax-content">
<br><br><br><br><br>
<div class="banner_title_wrapper">

    <h2> <font color="#FFFFFF"><b>Your Information </b></font></h2>
   
    <div  class="form">
    		
            <div id='contact_form_errorloc' class='err'></div>
<form method="POST" name="contact_form" 
action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
   
    <span class="input input--kaede">
      <input class="input__field input__field--kaede" type="text" name="uname"  value='<?php echo htmlentities($name) ?>'id="input-35" />
      <label class="input__label input__label--kaede" for="input-35"> <span class="input__label-content input__label-content--kaede">Name</span> </label>
    </span> <span class="input input--kaede">
      
        <input class="input__field input__field--kaede" type="text"  name="uorg"value='<?php echo htmlentities($name) ?>' id="input-36" />
        <label class="input__label input__label--kaede" for="input-36"> <span class="input__label-content input__label-content--kaede">Organisation  </span> </label>
        </span> <span class="input input--kaede">
        
          <input class="input__field input__field--kaede" type="text"  name="uemail"value='<?php echo htmlentities($visitor_email) ?>' id="input-37" />
        <label class="input__label input__label--kaede" for="input-37"> <span class="input__label-content input__label-content--kaede">Email id </span> </label>
         </span>
         
         <h2><font color="#FFFFFF"><b> Referral Information</b> </font></h2>
         
         
         
          <span class="input input--kaede">
      <input class="input__field input__field--kaede" type="text" name="rname"  value='<?php echo htmlentities($name) ?>'id="input-38" />
      <label class="input__label input__label--kaede" for="input-38"> <span class="input__label-content input__label-content--kaede">Name</span> </label>
    </span> <span class="input input--kaede">
      
        <input class="input__field input__field--kaede" type="text"  name="rorg"value='<?php echo htmlentities($name) ?>' id="input-39" />
        <label class="input__label input__label--kaede" for="input-39"> <span class="input__label-content input__label-content--kaede">Organisation  </span> </label>
        </span> <span class="input input--kaede">
        
          <input class="input__field input__field--kaede" type="text"  name="remail"value='<?php echo htmlentities($name) ?>' id="input-40" />
        <label class="input__label input__label--kaede" for="input-40"> <span class="input__label-content input__label-content--kaede">Email id </span> </label>
         </span>
         
         <span class="input input--kaede">
      <font color="#000000">  Message : </font> <textarea name="rcomment" class="table"  style="color:#000 !important" placeholder="message"   rows="5" cols="40"     value='<?php echo htmlentities($name) ?>' id="input-40" /></textarea>
         </span>
         
         
          <span class="input input--kaede">
         
         
         
         
         
         
         
          <p class="contact">
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'><font color="#000000">Enter the code above here :</font></label><br><br>
<p><input id="6_letters_code" name="6_letters_code"  style="color:#000" type="text"></p>
<small><font color="#000000">Can't read the image? click </font><a href='javascript: refreshCaptcha();'>here</a><font color="#000000"> to refresh</font></small>
</p>
<p>
<input type="submit"  style="color:#000" value="Submit" name='submit'>
</p>
</form>
  </span> 
  </form>
  </section>
 
</div>
<!-- /container -->
		<script src="jslog/classie.js"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
        
        
        
        <script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();


frmvalidator.addValidation("passw","req","Please provide your password"); 

frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>


    			     
    			     
    			     
   			       
		      </p>
   			   
   			    <p><center><b>Note: While Pressing Submit, You Accept Our Terms and Conditions! </b></p>
   		 
</div>      
</div>

<?php 
$your_email ='yourname@your-website.com';// <<=== update to your email address
$con = mysqli_connect("mysql.hostinger.in","u744643109_refer","inceptionphase","u744643109_refer");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


session_start();
$errors = '';

$visitor_email = '';
$passw = '';

$uname = ' ';
$uorg = ' ';
$uemail = ' ';
$rname = ' ' ;
$rorg = ' ' ;
$remail = ' ' ;
$rcomment = ' ';



if(isset($_POST['submit']))
{
	
	
	$visitor_email = $_POST['uemail'];
	$passw = $_POST['passw'];
	
	$uname = $_POST['uname'];
	$uorg = $_POST['uorg'];
	$rname = $_POST['rname'];
	$rorg = $_POST['rorg'];
	$rcomment = $_POST['rcomment'];
	$remail = $_POST['remail'];
	
	
	
	///------------Do Validations-------------
	
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		session_start();
		session_register("email");
session_register("passw");
		$uemail = $visitor_email;
		
	
	
	  $ip=$_SERVER['REMOTE_ADDR'];
		$sql="INSERT INTO refer (uname,uorg,uemail,rname,rorg,remail,rcomment,datetime,ip)
VALUES ('$uname','$uorg','$uemail','$rname','$rorg','$remail','$rcomment',now(),'$ip')";




if (!mysqli_query($con,$sql)) {
	header('Location: http://www.google.com');
  die('notnow ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
		
		header('Location: thank-you.html');
		
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>


</div>
</div>
</div>
</div>
</center></div>



<div class="container">

<div class="logo2_wrapper"></div>

</div>

<footer>


<div class="copy1"><a href="https://www.facebook.com/promotion.startup" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a> &nbsp;&nbsp;&nbsp;<a href="https://twitter.com/StartupPIndia" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a>

&nbsp;&nbsp;&nbsp;;<a href="https://plus.google.com/u/0/b/108788183608094197137/108788183608094197137/about/p/pub" class="normaltip" title="Google Plus"><img src="images/google-plus-icon.png" alt=""></a>
&nbsp;&nbsp;&nbsp;<a href="http://startuppromotionindia.blogspot.in/" class="normaltip" title="Blog"><img src="images/blogger.png" alt=""></a>
</div><br />
<div class="copy1">Copyright &copy; 2015. All rights reserved.</div><br />
<div class="copy1">Designed and Developed by startuppromotion&reg; team </div><br />
<div class="en"> <a href="http://www.myfreecsstemplates.com/" class="mdc"><font color="#000000">Free CSS Templates</font></a></div>
<div class="copy2"><a href="pp.pdf">Privacy Policy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="tuc.pdf">Terms of use</a></div>

</div>
</div>
</footer>







</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>