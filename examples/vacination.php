<?php 
include ("nav.html");
include ("../connection.php");
if(isset($_POST['submit'])){

$v_disease = $_POST['v_disease'];
$vaccination = $_POST['vaccination'];

if(isset($_POST['submit']) )


        $sql="insert into vacinationc(v_disease,vaccination)
	  Values('$v_disease','$vaccination')"; 

$result=mysqli_query($con,$sql);


    }




?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://sealsassociates.com/animals/index.php" class="simple-text">
                        HOME
                    </a>
                </div>
                  <ul class="nav">
                   
                    <li>
                        <a class="nav-link" href="./user.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./Total.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Report</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./dashboard.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Animal</p>
                        </a>
                    </li>
                    
                     <li class="nav-item active">
                        <a class="nav-link" href="./breed.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Breed</p>
                        </a>
                    </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="./health.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Health </p>
                        </a>
                    </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="./category.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>grade</p>
                        </a>
                    </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="./purpose.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>purpose</p>
                        </a>
                    </li>
                   <li class="nav-item active">
                        <a class="nav-link" href="./agent.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>agent name</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./disease.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Disease</p>
                        </a>
                    </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="./vacination.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Vaccination</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./expense.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Expense</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> Table List </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            
                          
                           
                        </ul>
                        <ul class="navbar-nav ml-auto">
                           
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="register-form-w3layouts">
        <!-- Form starts here -->
        <form action="#" method="post"  enctype="multipart/form-data">
            <h3 class="sub-heading-agileits">DISEASE</h3>
            <div class="main-flex-w3ls-sectns">
                <div class="field-agileinfo-spc form-w3-agile-text2">
				<label> DISEASE</label>
					<select class="form-control" name="v_disease">
						<option>Select Disease</option>
					<?php
					
					$sel=mysqli_query($con,"SELECT * FROM `disease`");
while ($row = mysqli_fetch_array($sel))
{
    	echo "<option value='$row[1]'>  $row[1]    </option> "; 
}

?>
		
					 </select>
				</div>
                <div class="field-agileinfo-spc form-w3-agile-text2">
                    <label>VACCINATION</label>
                   <input class="field" name="vaccination" required="required" value="<?php echo $rate ?>" type="text" placeholder="VACCINATION">
                </div>
              <div class="field-agileinfo-spc form-w3-agile-text2">
                    <input type="submit" value="Submit" name="submit" />
                </div>
               
            </div>
           
            
            
            
            <div class="clear"></div>
        </form>
        <!--// Form starts here -->


    </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                  
                                </div>
                               <div class="card-body table-full-width table-responsive" style="background: black;opacity: 0.8;color: white;width: 55%; margin: auto;">
                                    <table class="table table-hover">
                                    <thead>
                            <tr>
                                <th>Id</th>
                              <th>Disease</th>
                              <th>Vaccination</th>
                               
                            </tr>
                            </thead>
                            <?php
                            $sel=mysqli_query($con,"SELECT * from vacinationc");
                          while($row=mysqli_fetch_array($sel))
                            {
                                echo "
                            <tbody>
                                <tr>
                                    <td>$row[0]</td>
                                    <td>$row[1]</td>
                                    <td>$row[2]</td>
                                    <td><a href='delete.php?pid=$row[0]' ><i class='fa fa-edit' style='font-size:30px;color:white'></i></a></td>
                                    <td><a href='vacination_delete.php?pid=$row[0]'><i class='fa fa-trash' style='font-size:30px;color:white'></i></a></td>

                                </tr>

                            </tbody>
                            
                          "; } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ??
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> ?? 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> ?? 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>