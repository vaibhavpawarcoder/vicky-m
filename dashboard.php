<?php session_start();
if (!$_SESSION['Email']) {
    header("Location:login.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Vicky Maghe
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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


    <?php include 'nav.php'  ?>

    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->




        <!-- Page Content  -->
        <div id="content">

            <?php include 'top-nav.php' ?>


            <div class="main-content">

                <?php include 'main-nav-top.php' ?>


                <div class="row ">
                    <div class="col-lg-7 col-md-12 ">
                        <div class="card" style="min-height: 485px">
                            <?php

                            $email = $_SESSION['Email'];
                            //echo $email;
                            include 'DB.php';
                            $query = "SELECT * FROM admin WHERE Email = '$email' ";
                            $result = mysqli_query($con, $query);
                            // mysqli_query($query);

                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="row justify-content-center">
                                <div class="col-md-10 mt-5 ">
                                    <h3>Administrator Details</h3>
                            <h5> Name : <?php echo $row['First_Name']; ?>  <?php echo $row['Last_Name']; ?></h5>
                            <h5> Mobile : <?php echo $row['Mobile']; ?>  </h5>
                            <h5> Email : <?php echo $row['Email']; ?>  </h5>
                            <h5> Address : <?php echo $row['City']; ?> <?php echo $row['State']; ?> <?php echo $row['District']; ?> <?php echo $row['Zip']; ?>  </h5>
                             

                                </div>
                            </div>   
                            

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="card" style="min-height: 485px">
                        <div class="row justify-content-center">
                                <div class="col-md-10 mt-5">
                        <img src="<?php echo $row['Profile']; ?>" class="img-fluid" alt="" srcset=""> </div>
                            </div> 

                        </div>
                    </div>
                    <?php

                            }
                            ?>
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