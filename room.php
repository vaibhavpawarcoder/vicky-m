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
                            <div class="row justify-content-evenly pt-5">
                                <div class="col-md-11">

                                
                                <h2 class="p-5 text-center">Room Rent Request</h2>

                                <div class="table-responsive">
                                    <table class="table p-3">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">First_Name</th>
                                                <th scope="col">Middle_Name</th>
                                                <th scope="col">Last_Name</th>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Date Of Birth</th>
                                                <th scope="col">LandMark</th>
                                                <th scope="col">Permanat Address</th>
                                                <th scope="col">Apply For</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Sgin</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            include 'DB.php';
                                            $query = "select * from rent where apply='Room_Rent'";
                                            $show = mysqli_query($con, $query);

                                            $result = mysqli_num_rows($show);

                                            while ($row = mysqli_fetch_array($show)) {
                                                if($show){

                                                
                                            ?>

                                                <tr>
                                                    <td><?php echo $row['ID'] ?></td>
                                                    <td><?php echo $row['first_name'] ?></td>
                                                    <td><?php echo $row['middle_name'] ?></td>
                                                    <td><?php echo $row['last_name'] ?></td>
                                                    <td><?php echo $row['mobile'] ?></td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['dob'] ?></td>
                                                    <td><?php echo $row['address'] ?></td>
                                                    <td><?php echo $row['country'] ?>,<?php echo $row['state'] ?>,<?php echo $row['city'] ?>,<?php echo $row['tel'] ?>, <?php echo $row['district'] ?>,<?php echo $row['zip'] ?></td>
                                                    <td><?php echo $row['apply'] ?></td>
                                                    <td> <img src=" <?php echo $row['pic'] ?>" height="100px" width="100px" /></td>
                                                    <td> <img src=" <?php echo $row['proof'] ?>" height="100px" width="100px" /></td>
                                                </tr>
                                            <?php
                                            }else{
                                                echo "No Request";
                                                                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
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