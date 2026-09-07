<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us - CCL Group</title>
<!--header-->
<?php include("inc/header.php"); ?>
<!--header end-->
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-md-7">
                        <h4>Contact form</h4>
                        <div class="dzFormMsg"></div>
                        <div class="p-a30 bg-white clearfix m-b30">
							<form method="post" class="dzForm" action="">
							<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input name="dzName" type="text" required class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input name="dzEmail" type="email" class="form-control" required placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                <textarea name="dzMessage" rows="8" class="form-control" required placeholder="MSG..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                        <button name="Resat" type="reset" value="Reset"  class="site-button  m-l30"> <span>Reset</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-md-5">
                        <h4>Contact Info</h4>
                        <div class="p-a30 bg-white">
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">Address</h6>
                                        <p><b>CORPORATE OFFICE</b><br>C-42, Opp. Yes Bank, RDC Rajnagar, Ghaziabad-201002 Uttar Pradesh</p>

 <p><b>REGISTERED OFFICE</b><br>
M-4, Gupta Tower, B1/1, Commercial Complex, Azadpur, New Delhi-110033</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">EMAIl</h6>
                                        <p>info@evocreteindia.com</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">PHONE</h6>
                                        <p>0120-4214258</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- right part END -->
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
<!--footer-->
<?php include("inc/footer.php"); ?>
<!--footer end-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_YEzHx_YCQvqQSB_xuSC18BT81BlKVvI&amp;sensor=false"></script>