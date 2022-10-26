<nav id="sidebar">
<?php

$email = $_SESSION['Email'];
//echo $email;
include 'DB.php';
$query = "SELECT * FROM admin WHERE Email = '$email' ";
$result = mysqli_query($con, $query);
// mysqli_query($query);

while ($row = mysqli_fetch_array($result)) {
?>
    <div class="sidebar-header">
        <h3><img src="<?php echo $row['Profile']; ?>" class="img-fluid" alt="" srcset=""><span>Vicky Maghe</span></h3>
    </div>
    <ul class="list-unstyled components">
    <li  class="active">
            <a href="dashboard.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
        </li>

        <li class="">
            <a href="newadmin.php"><i class="material-icons">date_range</i><span>New Admin</span></a>
        </li>
    
    
        <li class="dropdown">
            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">aspect_ratio</i><span>Aadhar-Card</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                <li>
                    <a href="aadh-re.php">Aadharcard Request</a>
                </li>
                <li>
                    <a href="up-aadh.php">Update Aadharcard Request</a>
                </li>
                <li>
                    <a href="report-pa.php">Adhar card Report</a>
                </li>
            </ul>
        </li>
        
        <li class="dropdown">
            <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">aspect_ratio</i><span>Pan-Card</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu2">
                <li>
                    <a href="pan.php">Pancard Request</a>
                </li>
                <li>
                    <a href="up-pan.php">Update Pancard Request</a>
                </li>
                <li>
                    <a href="report-pa.php">Pan card Report</a>
                </li>
            </ul>
        </li>
        
         <li class="dropdown">
            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">equalizer</i>
        
            
            <span>Rent-Room Request</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                <li>
                    <a href="room.php">Room Request</a>
                </li>
                <li>
                    <a href="re-shop.php">Report</a>
                </li>
            </ul>
        </li>
          <li class="dropdown">
            <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">extension</i><span>Shop rent Request</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                <li>
                    <a href="shop-r.php">Shop Request</a>
                </li>
                <li>
                    <a href="re-shop.php">Report</a>
                </li>
            </ul>
        </li>
        
        <li class="">
            <a href="receipts.php"><i class="material-icons">date_range</i><span>Receipts</span></a>
        </li>

        <li class="">
            <a href="show-re.php"><i class="material-icons">date_range</i><span>Make Print</span></a>
        </li>
       
        <li class="">
            <a href="rent_data.php"><i class="material-icons">date_range</i><span>Add</span></a>
        </li>
       
       
       <li class="">
            <a href="logout.php"><i class="material-icons">date_range</i><span>LogOut</span></a>
        </li>
       
       
    </ul>

   <?php } ?>
</nav>