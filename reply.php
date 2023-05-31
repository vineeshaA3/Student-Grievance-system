<?php
include 'db_config.php';
// session_start();

include 'includes/header.php';
?>
<?php
$id = $_GET['reply_id'];


if (isset($_REQUEST['submit'])) {


    $reply = $_POST['reply'];

    $update = mysqli_query($conn, "Update `complaints` set reply='$reply' where id='$id'");

    if ($update) {


?>
        <script>
            alert("Send Succesfully");
            window.location = 'adcomplaints.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Error : Please Try Again....');
        </script>
<?php
    }
}

?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">

        <div class="container-fluid dashboard-content ">
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-10">
                        <div class="section-block" id="basicform">
                            <!-- <h3 class="section-title">Basic Form Elements</h3>
                            <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p> -->
                        </div>
                        <div class="card">
                            <h5 class="card-header">Complaints</h5>
                            <div class="card-body">
                                <?php
                                $id = $_GET['reply_id'];
                                $compsql = mysqli_query($conn, "SELECT * from `complaints` where id='$id'");
                                while ($comp_row = mysqli_fetch_array($compsql)) {
                                ?>
                                    <form method="POST" enctype="multipart/form-data">



                                        <!-- <div class="form-group">
                                        <label for="inputEmail"></label>
                                        <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control">
                                        <p>We'll never share your email with anyone else.</p>
                                     </div> -->
                                        <div class="form-group">
                                            <label for="inputText4" class="col-form-label">File :</label>
                                            <a href="../<?php echo $comp_row['file']; ?>" target="_blank"> Complaint file <span><i class="fa fa-file-pdf-o" style="font-size:30px;color:red"></span></i>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Complaint :</label>
                                            <?php echo $comp_row['complaint']; ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Reply:</label>
                                            <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="reply"></textarea>
                                        </div>
                                        <div class="text-center">

                                            <button type="submit" name="submit" class="btn btn-primary pull-right">Send</button>

                                        </div>
                                    </form>
                                <?php } ?>
                            </div>
                            <!-- <div class="card-body border-top">
                                <h3>Sizing</h3>
                                <form>
                                    <div class="form-group">
                                        <label for="inputSmall" class="col-form-label">Small</label>
                                        <input id="inputSmall" type="text" value=".form-control-sm" class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDefault" class="col-form-label">Default</label>
                                        <input id="inputDefault" type="text" value="Default input" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLarge" class="col-form-label">Large</label>
                                        <input id="inputLarge" type="text" value=".form-control-lg" class="form-control form-control-lg">
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php'
?>