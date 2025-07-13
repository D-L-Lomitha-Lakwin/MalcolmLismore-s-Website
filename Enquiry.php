<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <title>Enquiry Form - Malcolm Lismore Photography</title>

      <!-----------------Internal CSS----------------->
  <style>
    
    table {
      border: 2px solid black;
      /* Outer border */
      margin-top: -500px;
      margin-right: 15px;

    }


    td,
    th {
      border: none;
      /* Hides all inner borders */

    }

    .style1 {
      font-size: 30px;
      font-weight: bold;
    }

    .style3 {
      font-size: 18px
    }

    .style4 {
      font-size: xx-large
    }

    .Note {
      color: red;
    }

    .UserReg {
      height: 40px;
      width: 90px;
      border-radius: 5px;
    }

    button:hover {
      font-weight: bolder;
      font-size: 14px;
      font-style: italic;
    }
  </style>
</head>

<body background="BlueDesignWall.jpg">
  <div class="nav__header">   <!--Navigation bar -->
    <div>
      <ul class="nav__links" id="nav-links">
        <div class="NavItems"><a href="index.html">Home</a></div> 
        <div class="NavItems"><a href="About.html">About</a></div>
        <div class="NavItems"><a href="Packages.html">Packages</a></div>
        <div class="NavItems">
          <a href="index.html">
            <img src="MalcolmLismoreLogo.png" alt="MalcolmLismoreLogo" class="NavLogo"> <!--Logo for directing home page-->
          </a>
        </div>
        <div class="NavItems"><a href="Enquiry.php">Enquiry</a></div>
        <div class="NavItems"><a href="Gallery.html">Gallery</a></div>
        <div class="NavItems"><a href="ContactUs.html">Contact Us</a></div>
      </ul>
    </div>
  </div>
  <br><br>

  <div>
    <img src="EnquiryIcon.png" alt="Enquiry Image" style="width: 300px; height:auto; display:flex; filter:contrast(3.9);">
  </div>




  <!----------------------------------------------PHP Start----------------------------------------------------->

  <?php
  echo '   
    <form id="form1" name="form1" method="post" action="EnquirySubmit.php">
  <table width="78%" border="0" align="right" cellspacing="10" bordercolor="#000000">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="center" class="style1">Event Photography Enquiry Form</div></td>
    </tr>
    
    <tr>
      <td width="23%"><span class="style3">Full Name</span></td>
      <td colspan="2"><span class="style3">
        <label>
        <input name="txtFullName" type="text" id="txtFullName" value="" size="80" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="style3">Email Address</span></td>
      <td colspan="2"><span class="style3">
        <label>
        <input name="txtEmail" type="text" id="txtEmail" size="90" maxlength="100" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="style3">Phone Number</span></td>
      <td colspan="2"><span class="style3">
        <label>
        <input name="txtPNo" type="text" id="txtPNo" size="12" maxlength="10" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td rowspan="2"><span class="style3">Event Type</span></td>
      <td width="47%"><span class="style3">
        <label>
<input type="radio" name="rbEventType" id="rbEventType" value="Wedding" />        
Wedding        
</label>
      </span></td>
      <td width="30%"><span class="style3">
        <input type="radio" name="rbEventType" id="rbEventType2" value="Portrait" />
Portrait </span></td>
    </tr>
    <tr>
      <td><span class="style3">
        <input type="radio" name="rbEventType" id="rbEventType4" value="Birthday" />
Birthday </span></td>
      <td><span class="style3">
        <input type="radio" name="rbEventType" id="rbEventType3" value="Other" />
Other </span></td>
    </tr>
    <tr>
      <td><span class="style3">Event Date</span></td>
      <td colspan="2"><span class="style3">
        <label>
        <input name="txtEventDate" type="date" id="txtEventDate" size="15" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="style3">Event Location</span></td>
      <td colspan="2"><span class="style3">
        <label>
        <input type="text" name="txtEventLocation" id="txtEventLocation" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="style3">Additional Information</span></td>
      <td colspan="2"><span class="style3">
        <label>
        <textarea name="txtAreaAddInfo" id="txtAreaAddInfo" cols="60" rows="4"></textarea>
        </label>
      </span></td>
    </tr>
    <tr>

    <!----------------Note for User registration--------------->

    <td class="Note"><b>* You will receive priority if you are a registered user....!</b></td>   
    </tr>
    <tr>
      <td>

      <!----------------Link to directing for UserReg--------------->

        <button class="UserReg"><a href="UserReg.php">Register Now >></a>></button> <!--Button for User reg-->
      </td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <div align="left">
          <input name="btnClear" type="reset" class="style4" id="btnClear" value="Clear" />
        </div></td>
      <td><div align="right">
        <input name="btnSubmit" type="submit" class="style4" id="btnSubmit" value="Submit"/>
        
      </div></td>
    </tr>
  </table>
</form>
';
  ?>
  <!----------------------------------------------PHP End----------------------------------------------------->

</body>

</html>