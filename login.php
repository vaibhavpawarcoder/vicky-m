<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <title>Savitrabai</title>
</head>

<body>
        <!-- navbar -->
        



        <div  class="banner-image w-100 vh-20 d-flex justify-content-center align-items-center p-5">
        <div class="content text-center p-5">
          <h1 class="text-white p-5">Login</h1>
       </div>
      </div>


    <!-- Donat- Form -->

    <div class="container mt-5">
        <div class="row justify-content-evenly">
            <div class="col-md-9">
                <a href="index.html" class="btn">Home</a>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

                    <div class="mb-3">
                        <label class="form-label">email  address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputemail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputpassword1">
                    </div>
                    <button type="submit" name="login" class="btn btn-danger"> Login </button>
                </form>
            </div>
        </div>
    </div>

    <!-- php for donar-registration -->
    <?php
    include 'DB.php';

    if(isset($_POST['login'])) {
        $email= $_POST['email'];
        $password = $_POST['password'];

        $chk = " select * from admin where email='$email' ";
        $query = mysqli_query($con, $chk);

        $email_count = mysqli_num_rows($query);

        if ($email_count) {
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['Password'];

            $_SESSION['First_Name'] = $email_pass['First_Name'];
            $_SESSION['Last_Name'] = $email_pass['Last_Name'];
            $_SESSION['Email'] = $email_pass['Email'];
            
            $_SESSION['Mobile'] = $email_pass['Mobile'];

            $pass_decode = password_verify($password, $db_pass);

            if ($pass_decode) {
                header('Location: dashboard.php');
            } else {
                echo "password incorrect";
            }
        } else {
            echo "email Incorrect";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>