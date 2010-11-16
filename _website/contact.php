<?

$message="First Name: " . $_POST["first-name"] . "\n";
$message="$message Last Name: " . $_POST["last-name"] . "\n";
$message="$message Contact Phone: " . $_POST["contact-phone"] . "\n";
$message="$message Alt Phone: " . $_POST["alt-phone"] . "\n";
$message="$message Address: " . $_POST["address"] . "\n";
$message="$message City: " . $_POST["city"] . "\n";
$message="$message State: " . $_POST["state"] . "\n";
$message="$message Zip: " . $_POST["zip-code"] . "\n";
$message="$message Email: " . $_POST["email-address"] . "\n";
$message="$message Email Verified: " . $_POST["verify-email-address"] . "\n";
$message="$message Message: " . $_POST["message"] . "\n";


$headers = "From: jbergloff@intelesure.com\r\nX-Mailer: php";
mail ( "jbergloff@intelesure.com"  , "companyname.com - contact us page", $message, $headers );

header('Location: thanks.html');
?>
