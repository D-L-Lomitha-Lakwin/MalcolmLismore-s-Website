<?PHP
session_start();
?>

<?PHP 
echo '
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="styles.css" />
    <title>User Registration</title>
    <style type="text/css">
        .style5 {
            font-size: xx-large;
            font-weight: bold;
            font-style: italic;
        }

        .style6 {
            font-size: large;
            font-weight: bold;
        }

        td {
            font-size: larger;
        }


        .FooterLogo {
            width: 25px;
            height: auto;
        }
    </style>
</head>

<body background="BackgroundUserReg.jpg">

    <div class="nav__header">   <!--Navigation bar start-->
        <div>
            <ul class="nav__links" id="nav-links">
                <div class="NavItems"><a href="index.html">Home</a></div>
                <div class="NavItems"><a href="About.html">About</a></div>
                <div class="NavItems"><a href="Packages.html">Packages</a></div>
                <div class="NavItems">
                    <a href="index.html">
                        <img src="MalcolmLismoreLogo.png" alt="MalcolmLismoreLogo" class="NavLogo">
                    </a>
                </div>
                <div class="NavItems"><a href="Enquiry.php">Enquiry</a></div>
                <div class="NavItems"><a href="Gallery.html">Gallery</a></div>
                <div class="NavItems"><a href="ContactUs.html">Contact Us</a></div>
            </ul>
        </div>
    </div>  <!--Navigation bar end-->

    <div class="UserRegForm" style="margin-left: 25%;">
        <form id="form1" name="form1" method="post" action="UserSave.php">
            <table width="80%" border="0" cellspacing="5" align="center">
                <tr></tr>
                <tr></tr>
                <tr>
                    <td colspan="2">
                        <div align="center"><span class="style5">User Registration </span></div>
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>

                <tr>
                    <td width="52%">Registration ID</td>
                    <td width="48%"><label>
                            <input name="txtRegID" type="text" id="txtRegID" size="8" maxlength="5" />
                        </label></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>Full Name</td>
                    <td><label>
                            <input name="txtFullName" type="text" id="txtFullName" size="25" maxlength="20" />
                        </label></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>Email Address</td>
                    <td><label>
                            <input name="txtEmail" type="text" id="txtEmail" size="55" maxlength="50" />
                        </label></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>Contact Number</td>
                    <td><label>
                            <input name="txtConNo" type="text" id="txtConNo" size="12" maxlength="10" />
                        </label></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>Address</td>
                    <td><label>
                            <textarea name="txtAddress" rows="2" id="txtAddress"></textarea>
                        </label></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>Photography Interest</td>
                    <td><label>
                            <textarea name="txtPhoInterest" id="txtPhoInterest"></textarea>
                        </label></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>How did you hear about us ?</td>
                    <td><label>
                            <select name="cmbHearUs" size="1" id="cmbHearUs">   <!--Drop Down selection option-->
                                <option selected="selected">Google Search</option>
                                <option>Friends or Family</option>
                                <option>Photography Forum/Community </option>
                                <option>Online Advertisement </option>
                                <option>Blog or Article </option>
                            </select>
                        </label></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td><label>
                            <div align="center">
                                <input name="btnSave" type="submit" class="style6" id="btnSave" value="Save" />
                            </div>
                        </label></td>
                    <td><label>
                            <div align="center">
                                <input name="btnClear" type="reset" class="style6" id="btnClear" value="Clear" />
                            </div>
                        </label></td>
                </tr>
            </table>
        </form>
    </div>

    <div class="FooterTable" style="margin-top: 90px;"> <!--Footer-->
        <!--<hr class="hr__line">-->
        <table>
            <tr><hr></tr>
            <tr>
                <td class="FooterUserReg"><b><i>© Malcolm Lismore Photography</i></b></td>
                <td>
                    <div class="Facebook">
                        <a href="https://www.facebook.com/MalcolmLismorePhotography/">
                            <img src="facebook.jpeg" class="FooterLogo"
                                alt="Icon of Facebook and Click to go to facebook page">
                        </a>
                    </div>
                </td>
            </tr>

            <tr></tr>
            <td class="FooterUserReg"><i>~Northwest coast of Scotland</i></td>
            <td>
                <div class="LinkedIn"></div>
                <a href="https://www.linkedin.com/feed/">
                    <img src="Linkedin.ico" class="FooterLogo" alt="Icon of LinkedIn and Click to go to LinkedIn page">
                </a>
            </td>

    </div>
    </td>
    </tr>
    </table>
    </div>

</body>

</html>';
?>