<?php
include 'db_config.php';
session_start();

include 'includes/header.php';
?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">

        <div class="container-fluid dashboard-content ">
            <div class="ecommerce-widget">

                <div class="row">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="float">
                                <div>
                                    <h5 class="card-header center">Sub-admins data</h5>
                                </div>
                                <div> <a href="add_sub_admin.php" class="btn btn-outline-light dark float-right">add Details</a></div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table" style="overflow:hidden;">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">S.NO</th>
                                                <th class="border-0">Name</th>
                                                <th class="border-0">Email</th>

                                                <th class="border-0">password</th>
                                                <!-- <th class="border-0">Order Time</th>
                                                <th class="border-0">Customer</th>
                                                <th class="border-0">Status</th> -->
                                            </tr>
                                        </thead>
                                        <?php $compsql = mysqli_query($conn, "SELECT * from `admin` where admin_type='sub-admin'");
                                        $i = 0;
                                        while ($comp_row = mysqli_fetch_array($compsql)) {
                                            $i++;
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $i; ?></td>


                                                    <td><?php echo $comp_row['name']; ?> </td>
                                                    <td> <?php echo $comp_row['email']; ?></td>
                                                    <td><?php echo $comp_row['password']; ?></td>
                                                    <!-- <td><?php echo $comp_row['college']; ?></td>
                                                    <td><?php echo $comp_row['department']; ?></td> -->


                                                    <!-- <td>27-08-2018 01:22:12</td>
                                                <td>Patricia J. King </td>
                                                <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td> -->
                                                </tr>
                                            </tbody>
                                        <?php } ?>
                                        <!-- <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>Product #2 </td>
                                                <td>id000002 </td>
                                                <td>12</td>
                                                <td>$180.00</td>
                                                <td>25-08-2018 21:12:56</td>
                                                <td>Rachel J. Wicker </td>
                                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>Product #3 </td>
                                                <td>id000003 </td>
                                                <td>23</td>
                                                <td>$820.00</td>
                                                <td>24-08-2018 14:12:77</td>
                                                <td>Michael K. Ledford </td>
                                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>Product #4 </td>
                                                <td>id000004 </td>
                                                <td>34</td>
                                                <td>$340.00</td>
                                                <td>23-08-2018 09:12:35</td>
                                                <td>Michael K. Ledford </td>
                                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                            </tr>
                                            <tr>
                                                <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                            </tr>
                                        </tbody> -->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include 'includes/footer.php';
?>