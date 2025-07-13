<style>
    form{
        margin-left: 30%;
        margin-top: 10%;
    }
    body{
        background-color:darkgrey;
    }
    button{
        width: 350px;
        height: 45px;
    }
    h1{
        color: blue;
    }
    button:hover{
        width: 390px;
        background-color:grey;
        color: blue;
        font-weight: bolder;
    }
    
</style>
<?PHP
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style5 {
	font-size: x-large;
	font-weight: bold;
	font-style: italic;
}
.style6 {
	font-size: large;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="60%" border="0" cellspacing="5" >
  <caption><b><h1>Welcome to Admin Page</h1> <h2>Administrator - Malcolm Lismore </h2></b></caption>
    <tr>
      <td bgcolor="#666666">&nbsp;</td>
    </tr>
    <tr>
      <td><label>
        <div align="center">
    <button class="AdminMain"><a href="Gallery.html">Upload Photos to Photo Gallery</a></button> <!--Button for Photo Upload-->
          </div>
      </label></td>
    </tr>

    <tr></tr>
    <tr></tr>
    <tr>
      <td><label>
        <div align="center">
    <button class="AdminMain"><a href="SearchUsers.php">Search Users</a></button> <!--Button for Search Users-->
          </div>
      </label></td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr>
      <td><label>
        <div align="center">
    <button class="AdminMain"><a href="ReviewEnquiries.php">Review Enquiries</a></button> <!--Button for Review Enquiries-->
          </div>
      </label></td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr>
      <td bgcolor="#666666">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html> ';
?>