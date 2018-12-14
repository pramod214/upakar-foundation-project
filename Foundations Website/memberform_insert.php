<?php
$conn = mysqli_connect("localhost", "root" , "" ,"organization"); // Establishing Connection with Server
// $db = mysql_select_db("Organization", $connection); // Selecting Database from Server
if(!$conn){
	die("Database connection error:".mysqli_connect_error());
}
echo "Database Connected";

if(isset($_POST['Register']))// Fetching variables of the form which travels in URL
{ 
$name = $_POST['name_contact'];
$email = $_POST['mail_contact'];
$contact = $_POST['phone_contact'];
$address = $_POST['address_contact'];
$bloodgrp=$_POST['bloodgrp_contact'];
$occupation=$_POST['occupation_contact'];
$dob=$_POST['dob_contact'];
// if($name !=''||$email !=''){
//Insert Query of SQL
$sql = "insert into member(member_name, member_email, member_contact, member_address, member_bloodgrp, member_occupation, member_dob) values ('$name', '$email', '$contact', '$address', '$bloodgrp', '$occupation', '$dob')";
 
if(mysqli_query($conn, $sql)){

echo "<br/><br/><span>Data Inserted successfully...!!<br/>
<a href='memberform.html'>Back to Registration</a></span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($conn); // Closing Connection with Server
?>