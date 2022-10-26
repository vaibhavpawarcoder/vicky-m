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
                        <form class="row gy-2 gx-3 justify-content-evenly" method="POST">
                                        <div class="col-md-4">
                                            <?php
                                            $query = "SELECT DISTINCT(Full_name) FROM payment";
                                            $result = $con->query($query);
                                            if ($result->num_rows > 0) {
                                                $Full_name = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                            }


                                            ?>
                                            <label class="" for="autoSizingInput">Full_name</label>
                                            <select class="form-select" id="autoSizingSelect" name="Full_name" require>
                                                <option selected disabled value="">Choose...</option>
                                                <?php
                                                foreach ($Full_name as $Full_name) {
                                                ?>
                                                    <option value="<?php echo $Full_name['Full_name']; ?>"><?php echo $Full_name['Full_name']; ?> </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" name="submit" class="btn btn-danger mt-4">Search</button>
                                        </div>

                                        <div class="row text-center justify-content-evenly mt-5">

                                        </div>
                                    </form>

                                    <div class="table-responsive">
                                        <table class="table p-3" id="tblData">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">First_Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Mobile Number</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">R/S Num</th>
                                                    <th scope="col">Recipt Number</th>
                                                    <th scope="col">RDate Time</th>
                                                    <th scope="col">Make A Print</th>

                                                </tr>



                                                <?php
                                                include 'DB.php';
                                                if (isset($_POST['submit'])) {
                                                    $spname = $_POST['Full_name'];
                                                    $query = "select * from payment where Full_name = '$spname'";
                                                    $show = mysqli_query($con, $query);

                                                    $result = mysqli_num_rows($show);

                                                    while ($row = mysqli_fetch_array($show)) {
                                                        if ($show) {


                                                ?>

                                                            <tr>
                                                                <td><?php echo $row['ID'] ?></td>
                                                                <td><?php echo $row['Full_name'] ?></td>
                                                                <td><?php echo $row['email'] ?></td>
                                                                <td><?php echo $row['mobile'] ?></td>
                                                                <td><?php echo $row['Amount'] ?></td>
                                                                <td><?php echo $row['room'] ?></td>
                                                                <td><?php echo $row['random'] ?></td>
                                                                <td><?php echo $row['Date'] ?></td>
                                                                <td> <a href="print.php?ids=<?php echo $row['ID']; ?>" target="_blank"class="btn bg-primary text-white">Print</a></td>
                                                            </tr>
                                                        <?php
                                                        } else {
                                                            echo "No Request";
                                                        }
                                                    }
                                                } else {
                                                    $query = "select * from payment";
                                                    $show = mysqli_query($con, $query);

                                                    $result = mysqli_num_rows($show);

                                                    while ($row = mysqli_fetch_array($show)) {
                                                        if ($show) {
                                                        ?>

                                                            <tr>
                                                            <td><?php echo $row['ID'] ?></td>
                                                        <td><?php echo $row['Full_name'] ?></td>
                                                        <td><?php echo $row['email'] ?></td>
                                                        <td><?php echo $row['mobile'] ?></td>
                                                        <td><?php echo $row['Amount'] ?></td>
                                                        <td><?php echo $row['room'] ?></td>
                                                        <td><?php echo $row['random'] ?></td>
                                                        <td><?php echo $row['Date'] ?></td>
                                                        <td>
                                                            <a href="print.php?ids=<?php echo $row['ID']; ?>" target="_blank"class="btn bg-primary text-white">Print</a>
                                                    </td>
                                                        
                                                            </tr>
                                                <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                                </tbody>
                                        </table>
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