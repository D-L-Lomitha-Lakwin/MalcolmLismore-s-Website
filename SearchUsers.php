<?PHP
session_start();
if (isset($_SESSION['RealName'])) {
?>
<style>
    form{
        margin-left: 30%;
        margin-top: 10%;
    }
    body{
        background-color:darkgrey;
    }
</style>
<?PHP

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

.style9 {font-weight: bold; font-size: x-large;}
.style10 {font-size: large}

</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="SearchUserView.php">
  <table width="60%" border="0" cellspacing="5">
    <tr bgcolor="#666666">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style9">Search Registered Users in the website</div></td>
    </tr>
    <tr>
      <td>Registration ID</td>
      <td><label>
        <input type="text" name="txtRegID" id="txtRegID" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2">* To Search all Users, leave the textbox empty...</td>
    </tr>
    <tr>
      <td><label>
        <div align="center">
          <input name="btnClear" type="reset" class="style10" id="btnClear" value="Clear" />
        </div>
      </label></td>
      <td><label>
        <div align="center">
          <input name="btnSearch" type="submit" class="style10" id="btnSearch" value="Search" />
          </div>
      </label></td>
    </tr>
    <tr bgcolor="#666666">
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
';

} ?>