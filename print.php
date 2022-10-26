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


    <div class="contanier">
        <div class="row ">
            <div class="col-lg-12 col-md-12">
                <div class="card" style="min-height: 490px">
                    <div class="row justify-content-evenly pt-5">
                        <div class="col-md-11">

                            <?php
                            include 'DB.php';
                            $ids = $_GET['ids'];

                            $query = "select * from payment where ID='$ids'";

                            $queryshow = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_assoc($queryshow)) {
                                // mysqli_query($query);
                            ?>
                                <div class="row justify-content-center" onclick="printDiv('print-content')">
                                    <div class="col-md-9">
                                        <h1 class="text-center text-danger border-bottom border-danger">Savitrabai Apartment Vashera</h1>

                                        <p class="text-center">At-Vashere Villege,Vittal Mandir Near Post-Amne ,Tel-Bhiwandi ,Dist-Thane 421302

                                            Email : vickymaghe333@outlook.com, Contact : 9326893891 / 9657571155 / 9011869630

                                            Prof : Suraj Maghe & Raghunath Maghe

                                            Created On : Vicky Maghe (9326893891)</p>
                                        <div class="row row justify-content-center ">
                                            <div class="col-md-10 border border-success p-5 mb-2 rounded-5">
                                                <p class="px-5"> <span class="h5 text-success">Name :- </span> <?php echo $row['Full_name']; ?></p>
                                                <p>
                                                    <span class="px-5"> <span class="h5 text-success">Mobile</span> :- <?php echo $row['mobile']; ?></span>
                                                    <span><span class="h5 text-success">Email</span>:- <?php echo $row['email']; ?></span>
                                                </p>
                                                <p>
                                                    <span class="px-5"><span class="h5 text-success">Amout</span>:- <?php echo $row['Amount']; ?></span>
                                                    <span class="px-5"><span class="h5 text-success">Room Shop No</span>:- <?php echo $row['room']; ?></span>
                                                </p>
                                                <p>
                                                    <span class="px-5"> <span class="h5 text-success">Receipts </span> :- <?php echo $row['random']; ?></span>
                                                    <span><span class="h5 text-success">Date</span>:- <?php echo $row['Date']; ?></span>
                                                </p>
                                                <button onclick="window.print()" class="btn btn-primary mt-5">Print this Receipts</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>

                </div>
            </div>

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