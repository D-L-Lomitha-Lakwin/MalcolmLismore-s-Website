<?PHP
$RegID = $_POST['txtRegID'];
$conn = mysqli_connect('localhost', 'root', '', 'malcolmdb');
if ($conn) {
    if (!empty($RegID)) {
        //Searching for a specific record if the employee no. is given. 
        $dRes = "SELECT * FROM regusers WHERE RegID='$RegID'";
        if (mysqli_query($conn, $dRes)) {
            $result = mysqli_query($conn, $dRes);

            if (mysqli_num_rows($result) > 0) {
                echo '<table cellspacing="2" width="98%"> 
        <tr> 
         <th colspan="9" align="left" bgcolor="#23f8e2">RECORD OF User ID:' . $RegID . '</th> 
        </tr> 
       <tr> 
       <th bgcolor="#c2cae8">RegID</th> 
       <th bgcolor="#c2cae8">Full Name</th> 
        <th bgcolor="#c2cae8">Email</th> 
        <th bgcolor="#c2cae8">Contact No</th> 
       <th bgcolor="#c2cae8">Adress</th> 
        <th bgcolor="#c2cae8">Photo Interests</th> 
       <th bgcolor="#c2cae8">HearAboutUs</th> 
        <th bgcolor="#c2cae8">&nbsp;</th> 
        <th bgcolor="#c2cae8">&nbsp;</th> 
       </tr>';

                while ($rowVal = mysqli_fetch_assoc($result)) {
                    $RegID = $rowVal['RegID'];
                    $FName = $rowVal['FullName'];
                    $Email = $rowVal['Email'];
                    $ConNo = $rowVal['ContactNo'];
                    $Address = $rowVal['Adress'];
                    $PhotoInterests = $rowVal['PhotoInterests'];
                    $HearUs = $rowVal['HearAboutUs'];
                    echo '<tr> 
       <td>' . $RegID . '</td> 
       <td>' . $FName . '</td> 
       <td>' . $Email . '</td> 
       <td>' . $ConNo . '</td> 
       <td>' . $Address . '</td> 
       <td>' . $PhotoInterests . '</td> 
       <td>' . $HearUs . '</td> 
       <td><a href="Edit.php?id=' . $RegID . '"><img src="Edit.ico" width="20" height="20"></a></td> 
       <td><a href="Delete.php?id=' . $RegID . '"><img src="Delete.ico" width="20" height="20"></a></td> 
        </tr>  
        </table>';
                }
            } else {
                echo 'There is NO any User Record for Reg ID.' . $RegID . '<br>Please check the Reg No. & Try again.';
            }
        } else {
            echo 'Data is NOT SELECTED!' . mysqli_error($conn);
        }
    } else {
        $dRes = "SELECT * FROM regusers";
        if (mysqli_query($conn, $dRes)) {
            $result = mysqli_query($conn, $dRes);

            if (mysqli_num_rows($result) > 0) {
                echo '<table cellspacing="2" width="98%"> 
       <tr> 
        <th bgcolor="#c2cae8">RegID</th> 
        <th bgcolor="#c2cae8">Full Name</th> 
        <th bgcolor="#c2cae8">Email</th> 
        <th bgcolor="#c2cae8">Contact No</th> 
        <th bgcolor="#c2cae8">Adress</th> 
        <th bgcolor="#c2cae8">Photo Interests</th> 
        <th bgcolor="#c2cae8">HearAboutUs</th>  
        <th bgcolor="#c2cae8">&nbsp;</th> 
        <th bgcolor="#c2cae8">&nbsp;</th> 
       </tr>';

                while ($rowVal = mysqli_fetch_assoc($result)) {
                    $RegID = $rowVal['RegID'];
                    $FName = $rowVal['FullName'];
                    $Email = $rowVal['Email'];
                    $ConNo = $rowVal['ContactNo'];
                    $Address = $rowVal['Adress'];
                    $PhotoInterests = $rowVal['PhotoInterests'];
                    $HearUs = $rowVal['HearAboutUs'];
                    echo '<tr> 
       <td>' . $RegID . '</td> 
       <td>' . $FName . '</td> 
       <td>' . $Email . '</td> 
       <td>' . $ConNo . '</td> 
       <td>' . $Address . '</td> 
       <td>' . $PhotoInterests . '</td> 
       <td>' . $HearUs . '</td> 
       <td><a href="Edit.php?id=' . $RegID . '"><img src="Edit.ico" width="20" height="20"></a></td> 
       <td><a href="Delete.php?id=' . $RegID . '"><img src="Delete.ico" width="20" height="20"></a></td> 
        </tr> ';
                }
                echo '</table>';
            } else {
                echo 'There is NO any Employee Records in the Data Table!';
            }
        } else {
            echo 'Data is NOT SELECTED!' . mysqli_error($conn);
        }
    }
} else {
    echo 'Database is NOT SELECTED!';
    //echo 'Database is NOT CONNECTED!' . mysqli_error($conn);
}
echo '</tr> 
    </table> 
        </div> ';
?>