<div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <span class="material-icons">equalizer</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Aadhar Card Request</strong></p>
                                <h4 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    
                                    $result=mysqli_query($con,"SELECT count(apply_for) as apply_for from apply where apply_for='Aadhar-Card' ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo "Aadhar Card:- ". $data['apply_for'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                </h4>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-info">info</i>
                                    <a href="#pablo">See detailed report</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                    
                    <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-rose">
                                    <span class="material-icons">shopping_cart</span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Pan Card Request</strong></p>
                                <h4 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    
                                    $result=mysqli_query($con,"SELECT count(apply_for) as apply_for from apply where apply_for='Pan-Card' ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo "Pan Card:-". $data['apply_for'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                </h4>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">local_offer</i> Product-wise sales
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                    
                    <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">
                                        attach_money
                                    </span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Update Request</strong></p>
                                <h4 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    
                                    $result=mysqli_query($con,"SELECT count(apply_for) as apply_for from apply where apply_for='Aadhar-Card-Update' ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo "Aadhar Card:-". $data['apply_for'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                <?php 
                                    include 'DB.php';
                                    
                                    $result=mysqli_query($con,"SELECT count(apply_for) as apply_for from apply where apply_for='Pan-Card-Update' ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo "Pan Card:-". $data['apply_for'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                    
                                </h4>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Weekly sales
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-info">

                                    <span class="material-icons">
                                        follow_the_signs
                                    </span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Rent Request</strong></p>
                                <h4 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    
                                    $result=mysqli_query($con,"SELECT count(apply) as apply from rent where apply='Shop_Rent' ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo "Shop:-". $data['apply'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                    <?php 
                                    include 'DB.php';
                                    
                                    $result=mysqli_query($con,"SELECT count(apply) as apply from rent where apply='Room_Rent' ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo "Room:-". $data['apply'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                </h4>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">update</i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div>
                </div>