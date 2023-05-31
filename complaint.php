<?php
include 'header.php';
if (isset($_POST['send'])) {


    // $batch = $_POST['batch'];
    // $course = $_POST['course'];

    // $email = $_POST['email'];
    $complaint = $_POST['complaint'];
    // $phonenumber = $_POST['phonenumber'];
    // $name = $_POST['name'];
    // $surname = $_POST['surname'];
    $area = $_POST['area'];
    $upload = 'uploads/';
    $file = $upload . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
        $sql = "INSERT INTO `complaints`(`user_id`, `complaint`,`area`,`file`) 
        VALUES ('" . $_SESSION['uid'] . "','$complaint','$area','$file')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
?>
            <script>
                alert('your Complaint send Successfully..');
                window.location = "index.php";
            </script>
<?php

        } else {
            echo 'error occured';
        }
    }
}

?>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style>
    html,
    body {
        min-height: 100%;
    }

    body,
    div,
    form,
    input,
    select,
    p {
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 14px;
        color: #666;
        line-height: 22px;
    }

    h1 {
        margin: 15px 0;
    }

    .testbox {
        display: flex;
        justify-content: center;
        align-items: center;
        height: inherit;
        padding: 3px;
    }

    form {
        width: 100%;
        padding: 20px;
        background: #fff;
        box-shadow: 0 2px 5px #ccc;
    }

    input,
    select,
    textarea {
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input {
        width: calc(100% - 10px);
        padding: 5px;
    }

    select {
        width: 100%;
        padding: 7px 0;
        background: transparent;
    }

    textarea {
        width: calc(100% - 6px);
    }

    .item {
        position: relative;
        margin: 10px 0;
    }

    .item:hover p,
    .item:hover i {
        color: #095484;
    }

    input:hover,
    select:hover,
    textarea:hover {
        box-shadow: 0 0 5px 0 #095484;
    }

    input[type="date"]::-webkit-inner-spin-button {
        display: none;
    }

    input[type="time"]::-webkit-inner-spin-button {
        margin: 2px 22px 0 0;
    }

    .item i,
    input[type="date"]::-webkit-calendar-picker-indicator {
        position: absolute;
        font-size: 20px;
        color: #a9a9a9;
    }

    .item i {
        right: 1%;
        top: 30px;
        z-index: 1;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
        right: 0;
        z-index: 2;
        opacity: 0;
        cursor: pointer;
    }

    .btn-block {
        margin-top: 20px;
        text-align: center;
    }

    button {
        width: auto;
        padding: 10px;
        border: none;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #095484;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #0666a3;
    }

    @media (min-width: 568px) {

        .name-item,
        .city-item {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .name-item input,
        .city-item input {
            width: calc(50% - 20px);
        }

        .city-item select {
            width: calc(50% - 8px);
        }
    }
</style>


<div class="container" style="background-color: white ; ">
    <div class="row">
        <div class="col-lg-8">

            <div class="testbox">
                <form action="" method="POST" enctype="multipart/form-data">
                    <h1>Grievance Complaint Form</h1>
                    <!-- <div class="item">
                        <p>Complainant's Name</p>
                        <div class="item">
                            <p>name</p>
                            <input type="text" name="name" placeholder="name" />
                        </div>
                    </div>
                    <!-- <div class="item">
                        <p>Address</p> 
                        <input type="text" name="name" placeholder="Street address" />
                        <input type="text" name="name" placeholder="Street address line 2" />
                        <div class="city-item">
                            <input type="text" name="name" placeholder="City" />
                            <input type="text" name="name" placeholder="Region" />
                            <input type="text" name="name" placeholder="Postal / Zip code" />
                            <select>
                                <option value="">Country</option>
                                <option value="1">Russia</option>
                                <option value="2">Germany</option>
                                <option value="3">France</option>
                                <option value="4">Armenia</option>
                                <option value="5">USA</option>
                            </select>
                        </div>
                    </div> 
                    <div class="item">
                        <p>Email</p>
                        <input type="email" name="email" />
                    </div>
                    <div class="item">
                        <p>mobile number</p>
                        <input type="text" name="phonenumber" />
                    </div>
                    <div class="item">
                        <p>Course name</p>
                        <input type="text" name="course" required />
                    </div>
                    <div class="item">
                        <p>Batch</p>
                        <input type="text" name="batch" required />
                    </div>-->
                    <div class="item">
                        <p>Area of Grievance</p>
                        <select name="area">
                            <option value="academic">Academic</option>

                            <option value="adminstration">Administration</option>
                            <!-- <option value="2">Illegal Dispensing</option>
                            <option value="3">Fraud</option>
                            <option value="4">Impairment/Diversion</option>
                            <option value="5">Unethical Conduct</option>
                            <option value="6">Regards Prescriber</option>
                            <option value="6">Other</option> -->
                        </select>
                    </div>
                    <div class="input">
                        <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="file" id="formFile" required>
                        </div>
                    </div>
                    <!--  <div class="item">
                        <p>Pharmacy Involved</p>
                        <input type="text" name="name" />
                    </div> 
                    <div class="item">
                        <p>Complaint filed on behalf of</p>
                        <input type="text" name="name" />
                    </div>-->
                    <div class="item">
                        <p>What happened? Be as specific as possible, including dates, names, etc.</p>
                        <textarea rows="5" name="complaint" required></textarea>
                    </div>
                    <div class="btn-block">
                        <button type="submit" name="send" href="/">Send Complaint</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<div class="container" style="background-color: white ; ">
    <div class="row">
        <div class="col-lg-10">

            <p class="soft-half--top">
                If a student wishes to make a complaint, he or she must do so within 60 days of the date on which the event occurred.
            </p>
            <p class="soft-half--top">
                A complaint may only be made by a student or group of students, not by a third party or representative. Anonymous complaints will only be accepted if there is sufficient evidence to support it and will be treated with caution.
            </p>
            <p class="soft-half--top">
                The student may have reservations about making a complaint, but the University takes complaints very seriously, and regulations provide that the student cannot be put at risk of disadvantage or discrimination as a result of making a complaint when the complaint has been made in good faith.
            </p>
        </div>
    </div>
</div>