<body>
<div id="container">
<?php include("header.php"); ?>


<div id="content"><!-- Start of the page content. -->
<p>
<?php
// This script performs an INSERT query that adds a record to the users table.
if ($_SERVER['REQUEST_METHOD'] == 'POST') { #1
$errors = array(); // Initialize an error array.
// Was the first name entered?

if (empty($_POST['userid'])) {
$errors[] = 'You did not enter your user id.';
}
else { $fn = trim($_POST['userid']);


}


// Was an email address entered?
if (empty($_POST['email'])) {
$errors[] = 'You did not enter your email address.';
}
else { $e = trim($_POST['email']);
}
// Did the two passwords match? #2
if (!empty($_POST['passid'])) {
if ($_POST['passid'] != $_POST['psword2']) {
$errors[] = 'Your passwords were not the same.';
}
else { $p = trim($_POST['passid']);
}
}
else { $errors[] = 'You did not enter your password.';
}
if (empty($_POST['address'])) {
$errors[] = 'You did not enter your  address.';
}
else { $e = trim($_POST['address']);
if (empty($_POST['country'])) {
$errors[] = 'You did not enter your email Country.';
}
else { $e = trim($_POST['country']);

if (empty($_POST['Zip'])) {
$errors[] = 'You did not enter your email address.';
}
else { $e = trim($_POST['Zip']);



//Start of the SUCCESSFUL SECTION. 
if (empty($errors)) { // If no problems encountered, register user in the database 
require ('mysqli_connect.php'); 
// Connect to the database. 
// Make the qury 





$q = "INSERT INTO users (userid, passid, psword2, email,username,address,country,zip,email, )
VALUES ($userid, $passid, $psword2, $email,$username,$address,$country,$zip,$email, NOW() )"; 
$result = @mysqli_query ($dbcon, $q); // Run the query. #7
if ($result) { // If it ran OK. #8
...header ("location: thanks.php"); #9
exit(); #10

//End of SUCCESSFUL SECTION

...}
?>