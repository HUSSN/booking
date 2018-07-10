<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--sa poip up-->
 <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <!--sa validate from-->
<script type="text/javascript">
function validateForm()
{

var y=document.forms["login"]["user"].value;
var a=document.forms["login"]["password"].value;
if ((y==null || y==""))
  {
  alert("you must enter your username");
  return false;
  }
  if ((a==null || a==""))
  {
  alert("you must enter your password");
  return false;
  }
 

}
</script>

</head>

<body>
<div class="login">
  <form id="form1" name="login" method="post" action="login.php" onsubmit="return validateForm()">
    <label>UserName
      <input type="text" name="user" />
    </label>
    <p>
      <label>Password
      <input type="password" name="password" />
      </label>
    </p>
   <a rel="facebox" href=recover.php>Forgot Password? </a>
    <p>
      <label>
      <input type="submit" name="Submit" value="login" />
      </label>
    </p>
  </form>
</div>
</body>
</html>
