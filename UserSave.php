<?php
$RegID = $_POST['txtRegID'];
$FName = $_POST['txtFullName'];
$Email = $_POST['txtEmail'];
$ConNo = $_POST['txtConNo'];
$Address = $_POST['txtAddress'];
$PhotoInterests = $_POST['txtPhoInterest'];
$HearUs = $_POST['cmbHearUs'];

$Conn = mysqli_connect('localhost', 'root', '', 'malcolmdb'); //Connection via database
if ($Conn) {
    $queSave = "INSERT INTO regusers(RegID, FullName, Email, ContactNo, Adress, PhotoInterests, HearAboutUs) VALUES('$RegID','$FName','$Email','$ConNo','$Address','$PhotoInterests','$HearUs')";
    if (mysqli_query($Conn, $queSave)) {
        echo "Registration No :" . $RegID . " successfully SAVE to the Database!";  //  Registration Successful
    } else {
        echo "Error in saving data to the Database!" . mysqli_error($Conn);
    }
} else {
    echo 'Database is NOT Connected!';
}
?>