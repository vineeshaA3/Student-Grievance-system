<?php
include 'db_config.php';
// include 'includes/header.php';

// session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * from `admin` where email='$email' and password='$password'";

    $query = mysqli_query($conn, $sql);
    // $qry = mysqli_fetch_array($query);
    // $rows = mysqli_num_rows($query);

    $qry_admin = mysqli_fetch_array($query);
    if ($qry_admin['admin_type'] == "admin") {
        $_SESSION['admin_email'] = $qry_admin['email'];

        $_SESSION['admin_uid'] = $qry_admin['id'];



?>
        <script>
            alert('Login Successfull..');
            window.location = "index.php";
        </script>
    <?php

    } elseif ($qry_admin['admin_type'] == "sub-admin") {
        $_SESSION['admin_email'] = $qry_admin['email'];

        $_SESSION['admin_uid'] = $qry_admin['id'];



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
            window.location = "login.php";
        </script>
<?php
    }
}



?>



<style>
    /* * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
} 

 body {
     display: flex;
     height: 100vh;
     background-color: #343a40;
 }*/

    .container1 {

        display: flex;
        height: 100vh;
        background-color: #343a40;
        margin: auto;
        display: flex;
        color: #f8f9fa;
        flex-direction: column;
        width: 500px;
        box-shadow: 1px 2px 71px -6px rgba(0, 0, 0, 0.67);
        height: fit-content;
        font-family: sans-serif;
        background-color: #212529;
        padding: 50px 20px;
        border-radius: 10px;
    }

    #Heading {
        padding: 10px;
        text-align: center;
        font-size: 2.5em;
        font-weight: 900;
    }

    label {
        font-size: 1.2em;
        font-weight: 500;
        margin: 10px 0px;
    }

    input {
        padding: 10px;
        border-top-right-radius: 10px;
        height: 50px;
        background-color: #6c757d;
        border-bottom-right-radius: 10px;
        outline: none;
        border: none;
        font-size: 19.2px;
        transition-duration: 0.15s;

        color: #f8f9fa;
    }

    input:focus {
        outline: none;
        background-color: none;
    }

    input::placeholder {
        color: #f8f9fa;
        font-size: 19.2px;
    }

    .row:not(.name) {
        width: 100%;
        height: fit-content;
        display: grid;
        grid-template-columns: 10% 90%;
        grid-template-rows: 50px;
    }

    .name {
        width: 100%;
        height: fit-content;
        display: flex;
        margin-top: 20px;

    }

    .name>input {
        width: calc(50% - 5px);
        margin: 5px;
        border-radius: 10px;
        ;
    }

    .icon {
        height: 32px;
        background-color: #6c757d;
        border-top-left-radius: 10px;
        padding: 10px;
        margin-right: 1px;
        border-bottom-left-radius: 10px;
        fill: white;
    }

    button {
        width: fit-content;
        margin: 20px auto;
        padding: 10px 20px;
        outline: none;
        border: none;
        border-radius: 20px;
        font-weight: 700;
        color: white;
        background-color: #6c757d;
        font-family: sans-serif;
        font-size: 1.1em;
        cursor: pointer;
        transition-duration: 0.25s;
    }

    button:hover {
        background-color: #6c757d;
    }

    span {
        display: flex;
        justify-content: flex-end;

    }

    a {
        text-decoration: none;
        color: #99e2b4;
    }

    span>span>a {
        margin: 0px 5px
    }

    a:hover {
        color: #06d6a0;
    }

    #MsgBx {
        width: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        height: auto;
        padding: 20px;
    }

    #MsgBx>li {
        list-style: none;
        color: white;
        border-radius: 5px;
        padding: 10px;
        background-color: #036666;
        width: fit-content;
        font-family: 'Ubuntu', sans-serif;
        position: relative;
        animation: enteranceError 1s ease;
        margin: 5px;
    }

    input:focus {
        border: 5px solid #06d6a0;
        height: 49px;
        margin-top: 2px;
    }
</style>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">


            <div class="main">


                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="container1">
                        <h3 id="Heading">Sign In</h3>








                        <label>Email:</label>
                        <div class="row">
                            <div class="icon"><i class='fas fa-envelope' style='font-size:25px'></i></div><input type="email" placeholder="Email" name="email" required>
                        </div>
                        <label>Password:</label>
                        <div class="row">

                            <div class="icon"><i class='fas fa-unlock' style='font-size:25px'></i></div><input type="password" placeholder="Password" name="password" required>
                        </div>




                        <button type="submit" name="login">Login</button>
                        <span>
                            <!-- <span>If you dont have an Account <a href="register.php"> Sign Up</a></span></span> -->
                            <form action="" method="POST" enctype="multipart/form-data">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>