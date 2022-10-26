<?php 
include 'DB.php';

if(isset($_POST['submit'])){

        $Salutaion= mysqli_real_escape_string($con, $_POST['salutaion']);
        $First_name = mysqli_real_escape_string($con, $_POST['first_name']);
        $Middle_name = mysqli_real_escape_string($con, $_POST['middel_name']);
        $Last_name = mysqli_real_escape_string($con, $_POST['last_name']);

        $Mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $Email = mysqli_real_escape_string($con, $_POST['email']);
        $dob = mysqli_real_escape_string($con, $_POST['dob']);

        $add = mysqli_real_escape_string($con, $_POST['add']);

        $country = mysqli_real_escape_string($con, $_POST['country']);
        $State = mysqli_real_escape_string($con, $_POST['state']);
        $City = mysqli_real_escape_string($con, $_POST['city']);

        $tel = mysqli_real_escape_string($con, $_POST['tel']);
        $District = mysqli_real_escape_string($con, $_POST['district']);
         $Zip = mysqli_real_escape_string($con, $_POST['zip']);

         $apply = mysqli_real_escape_string($con, $_POST['apply']);
        //  $pan_num = mysqli_real_escape_string($con, $_POST['pan_num']);
        //  $Aadhar_num = mysqli_real_escape_string($con, $_POST['Aadhar_num']);


        $File = $_FILES['file'];

        $filename = $File['name'];
        $fileerror = $File['error'];
        $filetemp = $File['tmp_name'];

        $fileext = explode('.', $filename);
        $filechk = strtolower(end($fileext));

        $fileextstore = array('png', 'jpg', 'jpeg');

        if (in_array($filechk, $fileextstore)) {
            $destination = 'Upload/' . $filename;
            move_uploaded_file($filetemp, $destination);

            //Email varify
            $emailquery = "select * from apply where email='$Email'";
            $emailquerysolve = mysqli_query($con, $emailquery);

            $emailcount = mysqli_num_rows($emailquerysolve);

            if ($emailcount > 0) {
                ?>
                            <script>
                                alert("Email Alredy Exit");
                            </script>
                            <?php
                        } else {


$insertquery="INSERT INTO `rent`( salutaion, first_name, middle_name, last_name, mobile, email, dob, address, country, state, city, tel, district, zip, apply, pic)
 VALUES ('$Salutaion','$First_name','$Middle_name','$Last_name','$Mobile','$Email','$dob','$add','$country','$State','$City','$tel','$District','$Zip','$apply','$destination')";
            
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
                    }
                }
                ?>