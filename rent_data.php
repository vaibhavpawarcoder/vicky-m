<?php include 's.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Blood Bank:Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>




    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <?php include 'nav.php'; ?>



        <!-- Page Content  -->
        <div id="content">

            <?php include 'top-nav.php' ?>


            <div class="main-content">

                <?php include 'main-nav-top.php' ?>


                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="min-height: 490px">
                            <div class="row justify-content-evenly">
                                <div class="container mt-5">
                                    <div class="row justify-content-evenly">
                                        <div class="col-md-9">
                                            <h1 class="text-center text-primary">Creat New Admin</h1>
                                            <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                                            <div class="col-md-4">
                                                    <label for="validationDefault04" class="form-label">Room_Shop</label>
                                                    <select class="form-select" name="Room_Shop" id="validationDefault04" required>
                                                        <option selected disabled value="">Choose Room_Shop...</option>
                                                        <option value="Room">Room</option>
                                                        <option value="Shop">Shop</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationDefault02" class="form-label">Room_Shop Number</label>
                                                    <input type="text" class="form-control" name="Room_Shop_num" id="validationDefault02" placeholder="Room_Shop Number" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationDefault03" class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" name="Full_Name" id="validationDefault03" placeholder="Mobile 91-xxxx-xxx-xxx" required>
                                                </div>


                                                <!-- SEcond section -->
                                                <div class="col-md-4">
                                                    <label for="validationDefault05" class="form-label">deposite</label>
                                                    <input type="text" class="form-control" name="deposite" id="validationDefault05" placeholder="Email Id" required>
                                                </div>


                                                <!-- Third section -->
                                                <div class="col-md-4">
                                                    <label for="validationDefault03" class="form-label">rent_payment</label>
                                                    <input type="text" class="form-control" name="rent_payment" id="validationDefault03" placeholder="rent_payment" required>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <label for="validationDefault05" class="form-label">Number Of Family Member</label>
                                                    <input type="text" class="form-control" name="pepole" id="validationDefault05" placeholder="Number Of Family Member" required>
                                                </div>

                                                <!-- Four section -->
                                                <div class="col-md-4">
                                                    <label for="validationDefault03" class="form-label">rent_date</label>
                                                    <input type="date" class="form-control" name="rent_date" id="validationDefault03" placeholder="rent_date" required>
                                                </div>
                                                <div class="col-md-8">
                                                    <label for="formFile" class="form-label">Document</label>
                                                    <input class="form-control" name="file" type="file" id="formFile">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="formFile" class="form-label">Agrement</label>
                                                    <input class="form-control" name="file2" type="file" id="formFile">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="formFile" class="form-label">Bill</label>
                                                    <input class="form-control" name="file3" type="file" id="formFile">
                                                </div>


                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                                        <label class="form-check-label" for="invalidCheck2">
                                                            Agree to terms and conditions
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <button class="btn btn-danger" name="register" type="submit">Submit form</button>
                                                </div>
                                                <div class="col-5">
                                                    <span>
                                                        View Record Entry
                                                        <a href="views.php" class="btn bg-danger text-white">View</a>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                include 'DB.php';

                                if (isset($_POST['register'])) {
                                    $Room_Shop = mysqli_real_escape_string($con, $_POST['Room_Shop']);
                                    $Room_Shop_num = mysqli_real_escape_string($con, $_POST['Room_Shop_num']);
                                    $Full_Name = mysqli_real_escape_string($con, $_POST['Full_Name']);

                                    $deposite = mysqli_real_escape_string($con, $_POST['deposite']);
                                    $rent_payment = mysqli_real_escape_string($con, $_POST['rent_payment']);

                                    $pepole = mysqli_real_escape_string($con, $_POST['pepole']);
                                    $rent_date = mysqli_real_escape_string($con, $_POST['rent_date']);
                                    $File = $_FILES['file'];

                                    $filename = $File['name'];
                                    $fileerror = $File['error'];
                                    $filetemp = $File['tmp_name'];

                                    $fileext = explode('.', $filename);
                                    $filechk = strtolower(end($fileext));

                                    $fileextstore = array('png', 'jpg', 'jpeg');



                                    $File2 = $_FILES['file2'];

                                    $file2name = $File2['name'];
                                    $file2error = $File2['error'];
                                    $file2temp = $File2['tmp_name'];

                                    $file2ext = explode('.', $file2name);
                                    $file2chk = strtolower(end($file2ext));

                                    $file2extstore = array('png', 'jpg', 'jpeg');


                                    $File3 = $_FILES['file3'];

                                    $file3name = $File3['name'];
                                    $file3error = $File3['error'];
                                    $file3temp = $File3['tmp_name'];

                                    $file3ext = explode('.', $file3name);
                                    $file3chk = strtolower(end($file3ext));

                                    $file3extstore = array('png', 'jpg', 'jpeg');

                                    if (in_array($filechk, $fileextstore)) {
                                        $destination = 'admin/' . $filename;
                                        move_uploaded_file($filetemp, $destination);

                                        if (in_array($file2chk, $file2extstore)) {
                                            $destination2 = 'admin/' . $filename;
                                            move_uploaded_file($filetemp, $destination2);

                                            if (in_array($file3chk, $file3extstore)) {
                                                $destination3 = 'admin/' . $file3name;
                                                move_uploaded_file($file3temp, $destination3);




                                        

                                            $insertquery = "INSERT INTO `rents`( shop_room, number, name, deposite, rent_payment, pepole, rent_date, document, agrement, bill)
        VALUES ('$Room_Shop','$Room_Shop_num','$Full_Name','$deposite','$rent_payment','$pepole','$rent_date','$destination','$destination2','$destination3')";

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
                            }
                                
                                ?>
                            </div>

                        </div>
                    </div>

                </div>

                <?php include 'footer.html' ?>

            </div>



        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>





</body>

</html>