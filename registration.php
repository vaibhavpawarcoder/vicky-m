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
</head>

<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
          <a class="navbar-brand h1" href="index.html"> <span class="h1">Vicky Maghe</span>  </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
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
                <a class="nav-link dropdown-toggle "  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Services </a>
                <ul class="dropdown-menu bg-dark text-light" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item bg-dark text-white" href="services.html">Services</a></li>
                    <li><a class="dropdown-item bg-dark text-white" href="pancard.php">Pan-Card Services</a></li>
                    <li><a class="dropdown-item text-white bg-dark" href="aadhar.php">Adhar-Card Services</a></li>
                    <li class="dropdown-submenu "><a class="dropdown-item dropdown-toggle text-white bg-dark" >Rent Services</a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item bg-dark text-white" href="rent.php">Shop Rentel</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="rent.php">Room Rentel</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="Gallary.html">Gallary</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#FAQ">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- navbar_end -->
    <div  class="banner-pan-image w-100 vh-20 d-flex justify-content-center align-items-center p-5">
        <div class="content text-center p-5">
          <h1 class="text-white p-5 d-none d-lg-block">Registration</h1>
       </div>
      </div>

<br><br><br>
    <!-- services Section  -->
    <section id="services" class=" mt-5 mb-5">
        <div class="container mt-5 mb-5">
            <h1 class="text-center mt-5 mb-5" >Creat New Account </h1>
            <p  class="text-center mt-5 mb-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eligendi recusandae soluta ratione magni, officia vero laborum explicabo rem iste, perferendis molestiae quidem neque? Nostrum ullam asperiores reprehenderit, corporis soluta qui iste esse adipisci totam laudantium, consectetur dolore consequuntur illo eos debitis aliquid non, sunt ea sequi pariatur architecto quas.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus incidunt atque libero ex beatae at necessitatibus laboriosam nisi, adipisci aperiam voluptas nostrum aut laborum explicabo hic eos et, quas dicta corporis qui quasi autem. Officiis labore possimus impedit eligendi, cumque atque? Unde placeat aperiam beatae! Voluptate ipsa aspernatur voluptatum nihil iste, ex quaerat cumque nostrum nemo sapiente expedita magnam odio repellat amet necessitatibus non temporibus modi distinctio optio, minus vel aperiam? Dolorum, explicabo ab enim libero, nesciunt quasi, commodi iure fugit sequi molestiae vero exercitationem. Asperiores, ex dolor, neque mollitia magni dolore autem soluta magnam, vel rerum harum sint sit!
            </p>
                    <div class="row justify-content-evenly ">
                        <div class="col-md-9 ">
                            <br><br>
                            <h1>Customer Information</h1>
                            <br><br>
                            <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="post" enctype="multipart/form-data">
                                <div class="col-md-3">
                                    <label for="validationDefault04" class="form-label">Salutaion</label>
                                    <select class="form-select" name="salutaion" id="validationDefault04" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Ms">Ms</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault01" class="form-label">First name</label>
                                    <input type="text" class="form-control" name="first_name" id="validationDefault01" placeholder="First Name" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault02" class="form-label">Middel name</label>
                                    <input type="text" class="form-control" name="middel_name" id="validationDefault02" placeholder="Middel Name" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault02" class="form-label">Last name</label>
                                    <input type="text" class="form-control" name="last_name" id="validationDefault02" placeholder="Last Name" required>
                                </div>
                                
            
            
                                <!-- SEcond section -->
                                
                                <div class="col-md-4">
                                    <label for="validationDefault03" class="form-label">Mobile</label>
                                    <input type="tel" class="form-control" name="mobile" id="validationDefault03" placeholder="Mobile 91-xxxx-xxx-xxx" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault05" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="validationDefault05" placeholder="Email Id" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault03" class="form-label">Date of Birth</label>
                                    <input type="Date" class="form-control" name="dob" id="validationDefault03" required>
                                </div>
                                <br>
                                
                                <hr>
            
                                <!-- Third section Permaent Address -->
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Permaent Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="add"
                                        placeholder="Permaent Address"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault05" class="form-label">Country</label>
                                    <input type="text" class="form-control" name="country" id="validationDefault05" placeholder="District" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault05" class="form-label">State</label>
                                    <input type="text" class="form-control" name="state" id="validationDefault05" placeholder="District" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault03" class="form-label">City / Village</label>
                                    <input type="text" class="form-control" name="city" id="validationDefault03" placeholder="City" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault05" class="form-label">Tel</label>
                                    <input type="text" class="form-control" name="tel" id="validationDefault05" placeholder="District" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault05" class="form-label">District</label>
                                    <input type="text" class="form-control" name="district" id="validationDefault05" placeholder="District" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault03" class="form-label">Zip</label>
                                    <input type="text" class="form-control" name="zip" id="validationDefault03" placeholder="Zip / Pin-Code" required>
                                </div>
        
                                <hr>
                                <!-- Third section temporary Address -->
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Temporary Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tadd"
                                        placeholder="temporary Address"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault05" class="form-label">Country</label>
                                    <input type="text" class="form-control" name="tcountry" id="validationDefault05" placeholder="District" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault05" class="form-label">State</label>
                                    <input type="text" class="form-control" name="tstate" id="validationDefault05" placeholder="District" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault03" class="form-label">City / Village</label>
                                    <input type="text" class="form-control" name="tcity" id="validationDefault03" placeholder="City" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault05" class="form-label">Tel</label>
                                    <input type="text" class="form-control" name="ttel" id="validationDefault05" placeholder="District" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault05" class="form-label">District</label>
                                    <input type="text" class="form-control" name="tdistrict" id="validationDefault05" placeholder="District" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault03" class="form-label">Zip</label>
                                    <input type="text" class="form-control" name="tzip" id="validationDefault03" placeholder="Zip / Pin-Code" required>
                                </div>
            
                                <br>
                                <hr>
                                <!-- Four section -->
                                <div class="col-md-4">
                                    <label for="validationDefault04" class="form-label">Apply For</label>
                                    <select class="form-select" name="apply" id="validationDefault04" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="Pan-Card">Pan-Card</option>
                                        <option value="Pan-Card-Update">Pan-Card Update</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="validationDefault03" class="form-label">Pan-Card Number (Optional)</label>
                                    <input type="text" class="form-control" name="pan_num" id="validationDefault03" placeholder="Pan-Card Number" >
                                </div>

                                <div class="col-md-4">
                                    <label for="validationDefault03" class="form-label">Adhar-Card Number (Optional)</label>
                                    <input type="text" class="form-control" name="Aadhar_num" id="validationDefault03" placeholder="Aadhar Number" >
                                </div>

                                <div class="col-md-4">
                                    <label for="formFile" class="form-label">Passport Size Photo</label>
                                    <input class="form-control" name="file" type="file" id="formFile">
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
                                    <button class="btn btn-danger" name="submit" type="submit">Submit form</button>
                                </div>
                            </form>
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

         $tadd = mysqli_real_escape_string($con, $_POST['tadd']);

        $tcountry = mysqli_real_escape_string($con, $_POST['tcountry']);
        $tState = mysqli_real_escape_string($con, $_POST['tstate']);
        $tCity = mysqli_real_escape_string($con, $_POST['tcity']);

        $ttel = mysqli_real_escape_string($con, $_POST['ttel']);
        $tDistrict = mysqli_real_escape_string($con, $_POST['tdistrict']);
         $tZip = mysqli_real_escape_string($con, $_POST['tzip']);

         $apply = mysqli_real_escape_string($con, $_POST['apply']);
         $pan_num = mysqli_real_escape_string($con, $_POST['pan_num']);
         $Aadhar_num = mysqli_real_escape_string($con, $_POST['Aadhar_num']);


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


$insertquery="INSERT INTO apply( salutation, first_name, middle_name, last_name, mobile, email, dob, p_add, p_cou, p_state, p_city, p_tel, p_dis, p_zip, t_add, t_cou, t_state, t_city, t_tel, t_dis, t_zip, apply_for, pan_num, aadhar_num, pic)
 VALUES ('$Salutaion','$First_name','$Middle_name','$Last_name','$Mobile','$Email','$dob','$add','$country','$State','$City','$tel','$District','$Zip','$tadd','$tcountry','$tState','$tCity','$ttel','$tDistrict','$tZip','$apply','$pan_num','$Aadhar_num','$destination')";
            
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
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- services Section  End -->

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
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body bg-light">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body bg-light">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body bg-light">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- FAQ Section End  -->

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
            </div>
        </div>
    </section>

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
                        <h3>Vicky Mahge</h3>
                        <hr class="h1">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rem temporibus, voluptates est, mollitia aliquam repellat explicabo, atque facere pariatur hic corporis officiis. Mollitia quas nulla ducimus quae aspernatur quam corporis. Adipisci aliquid, illum culpa rem, tenetur atque nam amet deleniti fugit tempora consequuntur recusandae et deserunt at excepturi iure!
                        </p>
                    </div>
                    <div class="col-md-5 mt-5">
                        <h3>Contact Us</h3>
                        <hr class="h1">
                        <p> Call Us :- +91-9326-893-891 </p>
                        <p> Mail Us :- vickymaghe333@outlook.com  </p>
                        <p> Address :- At-Vashere Village, Vittal Mandir, Near Post-Amne, 421302 </p>
                    </div>
                </div>
                <hr>

                <a href="" class="text-white">
                    Copyright © 2022 | Vaibhav pawar
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