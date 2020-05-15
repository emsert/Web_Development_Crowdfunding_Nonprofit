<!DOCTYPE html>
<html lang="EN"><head>
<!-- Programmer: Enes Sert -->


	<title>THANK YOU!</title>
	<link rel="stylesheet" type="text/css" href="https://swe.umbc.edu/~mser1/is448/d5_enes/donate.css" />
</head>
<body>

<?php
#Connect to mysql database
$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mser1","mser1","mser1");

if (mysqli_connect_errno())
  exit("Error - could not connect to MySQL");



#PROTECT FROM INJECTING
$donation_amount = htmlspecialchars($_POST['donation_amount']);
$card_type = htmlspecialchars($_POST['card_type']);
$card_number = htmlspecialchars($_POST['card_number']);
$security_code = htmlspecialchars($_POST['security_code']);
$exp_month = htmlspecialchars($_POST['exp_month']);
$exp_year = htmlspecialchars($_POST['exp_year']);
$first_name = htmlspecialchars($_POST['first_name']);
$middle_initial = htmlspecialchars($_POST['middle_initial']);
$last_name = htmlspecialchars($_POST['last_name']);
$address = htmlspecialchars($_POST['address']);
$city = htmlspecialchars($_POST['city']);
$state = htmlspecialchars($_POST['state']);
$zip = htmlspecialchars($_POST['zip']);
$country = htmlspecialchars($_POST['country']);
$e_mail = htmlspecialchars($_POST['e_mail']);
$phone = htmlspecialchars($_POST['phone']);
$hear_about_us = htmlspecialchars($_POST['hear_about_us']);



$donation_amount =mysqli_real_escape_string( $db, $donation_amount);
$card_type = mysqli_real_escape_string ($db, $card_type);
$card_number = mysqli_real_escape_string($db, $card_number);
$security_code =mysqli_real_escape_string( $db, $security_code);
$exp_month = mysqli_real_escape_string ($db, $exp_month);
$exp_year = mysqli_real_escape_string($db, $exp_year);
$first_name =mysqli_real_escape_string( $db, $first_name);
$middle_initial = mysqli_real_escape_string ($db, $middle_initial);
$last_name = mysqli_real_escape_string($db, $last_name);
$address =mysqli_real_escape_string( $db, $address);
$city = mysqli_real_escape_string ($db, $city);
$state = mysqli_real_escape_string($db, $state);
$zip =mysqli_real_escape_string( $db, $zip);
$country = mysqli_real_escape_string ($db, $country);
$e_mail = mysqli_real_escape_string($db, $e_mail);
$phone =mysqli_real_escape_string( $db, $phone);
$hear_about_us = mysqli_real_escape_string ($db, $hear_about_us);
?>




<?php
	#Construct a query
	$constructed_query = "insert into donation_mysql (donation_amount, card_type,
  card_number,security_code, exp_month, exp_year, first_name, middle_initial,
  last_name, address, city, state, zip, country, e_mail, phone, hear_about_us)
  values (
    '$donation_amount', '$card_type', '$card_number', '$security_code',
    '$exp_month', '$exp_year', '$first_name', '$middle_initial', '$last_name',
    '$address', '$city', '$state', '$zip', '$country', '$e_mail', '$phone',
    '$hear_about_us')";


	#Execute query
	$result = mysqli_query($db, $constructed_query);


	#If result object is not returned, then print an error and exit the PHP program
	if(! $result){
		print("Error - query could not be executed");
		$error = mysqli_error();
		print "<p> . $error . </p>";
		exit;
	}
?>


<br/>

<?php print "<h1>" ."Thank you " . $first_name . "!"."</h1>"; ?>

<br/>

<h3>Your donation has been processed successfully.</h3>


</body>
</html>
