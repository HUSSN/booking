<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Detaied Billing Report of Hotel Elizabeth</title>
<style type="text/css">
@import url(css1.css);
.style2 {
	font-size: 24px;
	font-weight: bold;
}
</style>
</head>

<body>
<div align="center"><span class="style2">Hotel Elizabeth</span><br />
  #79 Banda St., Kampala City 6100<br />
  Telephone: +63(034) 432-1708<br />
  Mobile: +256705521007<br />
Email: kulobh@gmail.com</div>
<p>&nbsp;</p>

  <div class="paperl">
  <?php
if (isset($_GET['id'])){
$con = mysql_connect("127.0.0.1", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("argie_tamera", $con);

$member_id = $_GET['id'];
			$result = mysql_query("SELECT * FROM reservation WHERE reservation_id = '$member_id'");

while($row = mysql_fetch_array($result))
  {
  echo '<br />';
  echo '<b>'.'Booker Personnal Information'.'</b>';
  echo '<br />';
  echo "FirstName: ".$row['firstname']. "<br />"; 
  echo "LastName: ".$row['lastname']. "<br />"; 
  echo "Address: ".$row['province']. "<br />"; 
  echo "City: ".$row['city']. "<br />"; 
  echo "Zip: ".$row['zip']. "<br />"; 
  echo "Country: ".$row['country']. "<br />"; 
  echo "Email: ".$row['email']. "<br />"; 
  echo "Telephone/Cellphone Number: ".$row['contact']. "<br />"; 
  echo '<br />';
  echo '<b>'.'Payment Information'.'</b>'.'<br />';
 /* echo 'Card Type: '.$row['cardtype'];
  echo '<br>';
   echo 'Card No.: '.$row['cardno'];
  echo '<br>';
   echo 'Expiry Date: '.$row['expiry'];
  echo '<br>';
   echo 'Name of Card Holder: '.$row['cardname'];
  echo '<br>';
   echo 'Security Code: '.$row['security'];*/
  echo '<br>';
 echo '<br />';
  echo '<b>'.'Reservation Details'.'</b>'.'<br />';
  echo "Arrival Date: ".$row['arrival']. "<br />"; 
  echo "Departure Date: ".$row['departure']. "<br />"; 
  echo "Confirmation Code: ".$row['confirmation']. "<br />";  
  echo "Number of night stay: ".$row['result']; 
  echo '<br />';
  echo '<br />';
  echo '<b>'.'Rate Information'.'</b>'.'<br />';
  $q=$row['room_id'];
  $result1 = mysql_query("SELECT * FROM room WHERE room_id = '$q'");

while($row1 = mysql_fetch_array($result1))
  {
  echo "Room Type: ".$row1['type']. "<br />";
  echo "Room Rate: ".$row1['rate']. "<br />";
  }
  
  echo 'Total Payable amount: ';
  echo $row['payable'];
  
		
  }

mysql_close($con);
}
?>



</div>

<p>&nbsp; </p>
</body>
</html>
