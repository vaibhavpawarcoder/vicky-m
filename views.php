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
                                    <form class="row gy-2 gx-3 justify-content-evenly" method="POST">
                                        <div class="col-md-4">
                                            <?php
                                            $query = "SELECT DISTINCT(shop_room) FROM rents";
                                            $result = $con->query($query);
                                            if ($result->num_rows > 0) {
                                                $shop_room = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                            }


                                            ?>
                                            <label class="" for="autoSizingInput">shop_room</label>
                                            <select class="form-select" id="autoSizingSelect" name="shop_room" require>
                                                <option selected disabled value="">Choose...</option>
                                                <?php
                                                foreach ($shop_room as $shop_room) {
                                                ?>
                                                    <option value="<?php echo $shop_room['shop_room']; ?>"><?php echo $shop_room['shop_room']; ?> </option>
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

                                    <h2 class="p-5 text-center">Report For Shop and Room Rent</h2>
                                    <button onclick="exportTableToExcel('tblData')" class="btn bg-primary text-white m-3">Export Data To Excel File</button>

                                    <div class="table-responsive">
                                        <table class="table p-3" id="tblData">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">shop_room</th>
                                                    <th scope="col">number</th>
                                                    <th scope="col">name</th>
                                                    <th scope="col">deposite</th>
                                                    <th scope="col">rent_payment</th>
                                                    <th scope="col">pepole</th>
                                                    <th scope="col">rent_date</th>
                                                    <th scope="col">document</th>
                                                    <th scope="col">agrement</th>
                                                    <th scope="col">bill</th>
                                                </tr>



                                                <?php
                                                include 'DB.php';
                                                if (isset($_POST['submit'])) {
                                                    $spname = $_POST['shop_room'];
                                                    $query = "select * from rents where shop_room = '$spname'";
                                                    $show = mysqli_query($con, $query);

                                                    $result = mysqli_num_rows($show);

                                                    while ($row = mysqli_fetch_array($show)) {
                                                        if ($show) {


                                                ?>

                                                            <tr>
                                                                <td><?php echo $row['ID'] ?></td>
                                                                <td><?php echo $row['shop_room'] ?></td>
                                                                <td><?php echo $row['number'] ?></td>
                                                                <td><?php echo $row['name'] ?></td>
                                                                <td><?php echo $row['deposite'] ?></td>
                                                                <td><?php echo $row['rent_payment'] ?></td>
                                                                <td><?php echo $row['pepole'] ?></td>
                                                                <td><?php echo $row['rent_date'] ?></td>
                                                                <td> <img src=" <?php echo $row['document'] ?>" height="100px" width="100px" /></td>
                                                                <td> <img src=" <?php echo $row['agrement'] ?>" height="100px" width="100px" /></td>
                                                                <td> <img src=" <?php echo $row['bill'] ?>" height="100px" width="100px" /></td>
                                                            </tr>
                                                        <?php
                                                        } else {
                                                            echo "No Request";
                                                        }
                                                    }
                                                } else {
                                                    $query = "select * from rents";
                                                    $show = mysqli_query($con, $query);

                                                    $result = mysqli_num_rows($show);

                                                    while ($row = mysqli_fetch_array($show)) {
                                                        if ($show) {
                                                        ?>

                                                            <tr>
                                                                <td><?php echo $row['ID'] ?></td>
                                                                <td><?php echo $row['shop_room'] ?></td>
                                                                <td><?php echo $row['number'] ?></td>
                                                                <td><?php echo $row['name'] ?></td>
                                                                <td><?php echo $row['deposite'] ?></td>
                                                                <td><?php echo $row['rent_payment'] ?></td>
                                                                <td><?php echo $row['pepole'] ?></td>
                                                                <td><?php echo $row['rent_date'] ?></td>
                                                                <td> <img src=" <?php echo $row['document'] ?>" height="100px" width="100px" /></td>
                                                                <td> <img src=" <?php echo $row['agrement'] ?>" height="100px" width="100px" /></td>
                                                                <td> <img src=" <?php echo $row['bill'] ?>" height="100px" width="100px" /></td>
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
                    </div>

                </div>

                <?php include 'footer.html' ?>

            </div>

            <script>
                function exportTableToExcel(tableID, filename = '') {
                    var downloadLink;
                    var dataType = 'application/vnd.ms-excel';
                    var tableSelect = document.getElementById(tableID);
                    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

                    // Specify file name
                    filename = filename ? filename + '.xls' : 'excel_data.xls';

                    // Create download link element
                    downloadLink = document.createElement("a");

                    document.body.appendChild(downloadLink);

                    if (navigator.msSaveOrOpenBlob) {
                        var blob = new Blob(['\ufeff', tableHTML], {
                            type: dataType
                        });
                        navigator.msSaveOrOpenBlob(blob, filename);
                    } else {
                        // Create a link to the file
                        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                        // Setting the file name
                        downloadLink.download = filename;

                        //triggering the function
                        downloadLink.click();
                    }
                }
            </script>

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