<?php
// include 'db_config.php';
// session_start();

include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['sign'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * from `sub_admin` where email='$email' and password='$password'";

    $query = mysqli_query($conn, $sql);
    $qry = mysqli_fetch_array($query);
    $rows = mysqli_num_rows($query);

    if ($rows == 1) {
        // session_start();
        $_SESSION['sub_admin_email'] = $qry['email'];
        $_SESSION['sub_admin_uid'] = $qry['id'];



?>
        <script>
            alert('Login Successfull..');
            window.location = "index.php";
        </script>
    <?php

    } else {
    ?>
        <script>
            alert('Please enter correct Details.');
            window.location = "sub_admin.php";
        </script>
<?php
    }
}



?>




?>



<style>
    .splash-container {
        height: 100%;
        padding-top: 100px;

    }
</style>





<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="ecommerce-widget">

                <div class="splash-container">
                    <div class="card ">
                        <div class="card-header text-center"><span class="splash-description">Please enter your information.</span></div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input class="form-control form-control-lg" id="username" type="text" placeholder="email" name="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" id="password" type="password" placeholder="Password" name="password">
                                </div>
                                <!-- <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                                    </label>
                                </div> -->
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="sign">Sign in</button>
                            </form>
                        </div>
                        <!-- <div class="card-footer bg-white p-0  ">
                            <div class="card-footer-item card-footer-item-bordered">
                                <a href="#" class="footer-link">Create An Account</a>
                            </div>
                            <div class="card-footer-item card-footer-item-bordered">
                                <a href="#" class="footer-link">Forgot Password</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>