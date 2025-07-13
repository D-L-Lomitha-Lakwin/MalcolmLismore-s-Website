<?php
$FullName = $_POST['txtFullName'];
$Email = $_POST['txtEmail'];
$PNo = $_POST['txtPNo'];
$EventType = $_POST['rbEventType'];
$EventDate = $_POST['txtEventDate'];
$EventLoc = $_POST['txtEventLocation'];
$AddInfo = $_POST['txtAreaAddInfo'];

$Conn = mysqli_connect('localhost', 'root', '', 'malcolmdb');
if ($Conn) {
    $queSave = "INSERT INTO enquiry(FullName, Email, PhoneNo, EventType, EventDate, EventLocation, AddInfo) VALUES('$FullName','$Email','$PNo','$EventType','$EventDate','$EventLoc','$AddInfo')";
    if(mysqli_query($Conn, $queSave)){
        echo $FullName. ", your enquiry is successfully Added to the Database!"; 
    }
    else{
        echo "Error in saving data to the Database!".mysqli_error($Conn);
    }

}
else{
    echo 'Database is NOT Connected!';
}
?>
