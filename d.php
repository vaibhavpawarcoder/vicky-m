<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Vicky Maghe</title>
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
                                <?php
                                  $ids = $_GET['ids'];

                                $query = "select * from rent where ID='$ids'";

                                $queryshow = mysqli_query($con, $query);

                                while ($row = mysqli_fetch_assoc($queryshow)) {
                                
                                ?>
                                <form class="row g-3" method="POST">
                                        <div class="col-md-4">
                                            <label for="validationDefault01" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" name="name" id="validationDefault01" value="<?php echo $row['first_name'] ?> <?php echo $row['middle_name'] ?> <?php echo $row['last_name'] ?>" required>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <label for="validationDefault02" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="validationDefault02" value="<?php echo $row['email'] ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationDefault02" class="form-label">Mobile</label>
                                            <input type="tel" class="form-control" name="mobile" id="validationDefault02" value="<?php echo $row['mobile'] ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationDefault03" class="form-label">Payment</label>
                                            <input type="text" class="form-control" name="payment"  id="validationDefault03" 
                                            placeholder="Enter Amount" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationDefault03" class="form-label">Room / Shop Number</label>
                                            <input type="text" class="form-control" name="srnum"  id="validationDefault03" 
                                            placeholder="Enter Amount" required>
                                        </div>
                                        <!-- <div class="col-md-4">
                                            <label for="validationDefault03" class="form-label">Address</label>
                                            <input type="text" class="form-control" name="radd" id="validationDefault03"
                                            value="<?php echo $row['country'] ?>,<?php echo $row['state'] ?>,<?php echo $row['city'] ?>,<?php echo $row['tel'] ?>, <?php echo $row['district'] ?>,<?php echo $row['zip'] ?>"  required>
                                        </div> -->
                                        <div class="col-md-4">
                                            <label for="validationDefault01" class="form-label">Receipts Number</label>
                                            <input type="text" class="form-control" name="Receipts" id="validationDefault01" value="<?php echo $row['first_name']; echo(rand(1,1000)); ?>" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                                <label class="form-check-label" for="invalidCheck2">
                                                    Agree to terms and conditions
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" name="request"type="submit"> request</button>
                                        </div>
                                    </form>
                                    <?php } ?>
                                    <?php

                                if(isset($_POST['request'])){
                                    $name=$_POST['name'];
                                    $email=$_POST['email'];
                                    $mobile=$_POST['mobile'];

                                    $payment=$_POST['payment'];
                                    $srnum=$_POST['srnum'];
                                    $random=$_POST['Receipts'];

                                    $inserquery="INSERT INTO `payment`( Full_name, email, mobile, Amount, room, random) 
                                     VALUES ('$name','$email','$mobile','$payment','$srnum','$random') ";

                                     $show=mysqli_query($con, $inserquery);

                                     if ($show) {
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
                                </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <?php include 'footer.html' ?>

            </div>

<script> 
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
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