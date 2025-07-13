<?php
session_start();
if (isset($_SESSION['RealName'])) {


?>
    <html>

    <head>
        <title>Admin Login</title>

        <style type="text/css">
            body,
            td,
            th {
                font-family: Calibri;
                font-size: 20px;
                color: #FFFFFF;
            }

            body {
                background-color: gray;
            }
        </style>

    </head>

    <body>

    <?php

    $un = $_POST['txtUN'];
    $pw = $_POST['txtPwd'];

    if (!empty("txtUN") && !empty("txtPwd")) {
        $conn = mysqli_connect("localhost", "root", "", "malcolmdb");
        if ($conn) {
            $queCheck = "SELECT * FROM adminlogin WHERE username = '$un'";

            if (mysqli_query($conn, $queCheck)) {
                $dres = mysqli_query($conn, $queCheck);

                if (mysqli_num_rows($dres) > 0) {
                    $rv = mysqli_fetch_assoc($dres);

                    if ($rv["Password"] == $pw) {
                        $_SESSION['RealName'] = $rv["RealName"];
                        $rN = $rv["RealName"];
                        header("Location: AdminMain.php");
                    } else {
                        echo "Incorrect Password";
                    }
                } else {
                    echo "Invalid username or password";
                }
            } else {
                echo "Error: " . $queCheck . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Connection failed: " . mysqli_connect_error();
        }
    } else {
        echo "Please enter both username and password";
    }
} //Session's closing bracket   ?>

    </body>


    </html>