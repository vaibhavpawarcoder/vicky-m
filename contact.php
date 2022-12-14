<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
    <style>
          .banner-contact-image{
    background-image: url('img/s.png');
    background-size: cover;
  }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a class="navbar-brand h1" href="index.html"> <span class="h1">Savitrabai Maghe</span> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Services </a>
                        <ul class="dropdown-menu bg-dark text-light" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item bg-dark text-white" href="services.html">Services</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="pancard.php">Pan-Card Services</a></li>
                            <li><a class="dropdown-item text-white bg-dark" href="aadhar.php">Adhar-Card Services</a></li>
                            <li><a class="dropdown-item text-white bg-dark" href="update.php">Update Adhar/Pan Card</a></li>
                            <li class="dropdown-submenu "><a class="dropdown-item dropdown-toggle text-white bg-dark">Rent Services</a>
                                <ul class="dropdown-menu bg-dark">
                                    <li><a class="dropdown-item bg-dark text-white" href="rent.php">Shop Rentel</a></li>
                                    <li><a class="dropdown-item bg-dark text-white" href="rent.php">Room Rentel</a></li>
                                    <li><a class="dropdown-item bg-dark text-white" href="Gallary.html">Gallary</a></li>
                                </ul>
                                <li><a class="dropdown-item text-white bg-dark" href="login.php" target="_blank">Login</a></li>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#FAQ">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- navbar_end -->

    <div  class="banner-contact-image w-100 vh-20 d-flex justify-content-center align-items-center p-5">
        <div class="content text-center p-5">
          <h1 class="text-white p-5">Contact</h1>
       </div>
      </div>
      <div class="whats_app">
        <p><a href="https://wa.me/917387545206" target="_blank"><i class="bi bi-whatsapp h3 bg-success text-light p-1 "></i></a>
    </div>

<br><br><br>

    <!-- contact -->
    <section id="contact" class="bg-light">
        <div class="container">
            <h1 class="text-center  pt-5 pb-5" id="get">Get In Touch</h1>
            <div class="row bg-white justify-content-evenly pt-5 pb-5">
                <div class="col-md-3 col-10 mt-3 mb-3 border border-dark text-center pt-5 pb-5">
                    <i class="h3 pb-3 bi bi-telephone"></i>
                    <p>+91-9326-893-891</p>
                </div>
                <div class="col-md-3 col-10 mt-3 mb-3 border border-dark text-center pt-5 pb-5">
                    <i class="h3 pb-3 bi bi-envelope"></i>
                    <p> vickymaghe333@outlook.com </p>
                </div>
                <div class="col-md-3 col-10 mt-3 mb-3 border border-dark text-center pt-5 pb-5">
                    <i class="h3 pb-3 bi bi-geo-alt"></i>
                    <p>At-Vashere Village, Vittal Mandir, Near Post-Amne, 421302</p>
                </div>
                <div class="row mt-5 justify-content-between">
                    <div class="col-md-5">
                        <h1>Contact - Us</h1>
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Your Name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Mobile Number" name="mobile">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="enquiry" name="meg"></textarea>
                            </div>
                            <div class="mb-3">
                                <a href="" class="btn btn-primary" name="submit">Submit</a>
                            </div>
                        </form>
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
                    </div>
                    <div class="col-md-5" id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240960.12142484591!2d72.95591874951042!3d19.325723968974433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be79786ded35d2f%3A0xb1b9be7fd096d3fc!2sVitthal%20Mandir%2C%20Vashere%20Village!5e0!3m2!1sen!2sin!4v1665036223905!5m2!1sen!2sin"
                            width="350" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- FAQ Section  -->
        <section id="FAQ" class="mt-5 pt-5">
            <div class="container mt-5 mb-5 " id="faq">
                <div class="row justify-content-evenly">
                    <h1 class="text-center mt-5 mb-5">Frequently Ask question about Services</h1>
                    <div class="col-md-10">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Pan Card Services
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body bg-light">
                                        <strong>This is the first Time Pan Card Services Provided</strong> .by online we
                                        provide online pan card services like apply for pan card . with upadte your pan card
                                        which include Address and Image and other features are included.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        Aadhar-Card Services
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body bg-light">
                                        <strong>This is the first Time Aadhar-Card Services Provided</strong> .by online we
                                        provide online Aadhar-Card services like apply for Aadhar-Card . with upadte your
                                        Aadhar-Card which include Address and Image and other features are included.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        Rental Service
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body bg-light">
                                        <strong>we have Shop And family Room Rent Service</strong> Shop for business owners
                                        and Room for Family to live on we have all facilty. which include Water , light,
                                        Road Touch Area with all necessary needs.
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </section>
    
        <!-- FAQ Section End  -->
        <footer class="bg-dark text-light pt-3 pb-2">
            <div class="container-fluid">
                <div class="row justify-content-evenly mt-5">
                    <div class="col-md-7 mt-3">
                        <h1>
                            We Provide The Best Service In Industry
            
                        </h1>
                        <p>
                            Reach out to us and we can discuss prospective avenues how we can help in your business.
                        </p>
                    </div>
                    <div class="col-md-3 mt-3">
                        <a href="" class="btn btn-primary rounded-pill">
                            <i class="h3 pb-3 bi bi-telephone"> +91-9326-893-891</i>
                        </a>
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-md-5 mt-5">
                            <h3>Vicky Maghe</h3>
                            <hr class="h1">
                            <p><a href=""><i class="bi bi-whatsapp h1 text-success p-3"></i></a>
            
                                <a href=""><i class="bi bi-facebook h1 text-primary p-3"></i></a>
            
                                <a href=""><i class="bi bi-instagram h1 text-danger p-3"></i></a>
                            </p>
                            <p class="text-white">At-Vashere Villege,Vittal Mandir Near Post-Amne ,Tel-Bhiwandi ,Dist-Thane
                                421302</p>
                            <p class="text-white">Email : vickymaghe333@outlook.com, Contact : 9326893891 / 9657571155 /
                                9011869630</p>
                            <p class="text-white">
                                Prof : Suraj Maghe & Raghunath Maghe
                            </p>
                            <p class="text-white">Created On : Vicky Maghe (9326893891)</p>
                        </div>
                        <div class="col-md-5 mt-5">
                            <h3>Contact Us</h3>
                            <hr class="h1">
                            <p> Call Us :- +91-9326-893-891 </p>
                            <p> Mail Us :- vickymaghe333@outlook.com </p>
                            <p> Address :- At-Vashere Village, Vittal Mandir, Near Post-Amne, 421302 </p>
                        </div>
                    </div>
                    <hr>
            
                    <a href="" class="text-white">
                        Copyright ?? 2022 | Vaibhav pawar
                    </a>
                </div>
            </div>
            </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script src="nav.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>