<div class="top-navbar">
<?php

$email = $_SESSION['Email'];
//echo $email;
include 'DB.php';
$query = "SELECT * FROM admin WHERE Email = '$email' ";
$result = mysqli_query($con, $query);
// mysqli_query($query);

while ($row = mysqli_fetch_array($result)) {
?>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
					
					<a class="navbar-brand" href="#"> Dashboard </a>
					
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                <span class="material-icons">person</span>
								   
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                    <img src="<?php echo $row['Profile']; ?>" class="img-fluid" alt="" srcset="">
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $row['First_Name']; ?>  <?php echo $row['Last_Name']; ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $row['Mobile']; ?> </a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $row['Email']; ?></a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
								<span class="material-icons">apps</span>
								</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="#">
								<span class="material-icons">settings</span>
								</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
	    </div>
        <?php } ?>