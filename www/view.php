<?php 
session_start();  
if(!isset($_SESSION['emp_id'])) {
    header("Location: index.php");
    exit;
} elseif ($_SESSION['user_stat']=='1') {
    header("Location: update.php");
    exit;
}

include('config/dbcon.php');
$id1= $_SESSION['emp_id'];
$query = mysqli_query($conn, "SELECT * FROM users_gw WHERE emp_id = '$id1'") or die (mysqli_error());
$rows = mysqli_fetch_array($query);
$fname=$rows['first_name'];
$mname=$rows['mid_name'];
$lname=$rows['last_name'];
$mname=$rows['mid_name'];
$extname=$rows['ext_name'];
$user_stat=$rows['user_stat'];
$fullname = $fname. ' ' . $mname . ' ' . $lname . ' ' .$extname;
$query1= mysqli_query($conn, "SELECT * FROM users_info WHERE emp_id = '$id1'") or die (mysqli_error());
$row = mysqli_fetch_array($query1);
$position=$row['position_title'];
$parenthetical=$row['parenthetical_title'];
$email=$row['email'];
$mobile_no=$row['mobile_no'];
$page="payslip";
?>
<!doctype html>
<html lang="en" dir="ltr">

<body class="app sidebar-mini ltr light-mode">


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <?php include('includes/header.php'); ?>
            <?php include('includes/sidebar.php'); ?>
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">VIEW</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">View</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Salary Payslip</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->
                        <?php include('includes/payslip.php');?>   
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->
        </div>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl ">
            <div class="modal-content" id="content-data">
                <div class="modal-header">
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
        <?php include('includes/footer.php'); ?>
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
        <?php include('includes/scripts.php'); ?>
</body>
</html>
