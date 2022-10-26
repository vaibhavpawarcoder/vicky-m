<?php
include 'DB.php';

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $meg = mysqli_real_escape_string($con, $_POST['meg']);

    $insertquery = "INSERT INTO `contact`( Name, email, mobile, message)
             VALUES  ('$name','$email','$mobile','$meg')";

            $result = mysqli_query($con, $insertquery);

            if ($result) {
                ?>
                <script>
                    alert("data insert Successlly");
                </script>
<?php
            } else {
            ?>
                <script>
                    alert("data insert Un-Successlly");
                </script>
<?php

            }
        }
?>