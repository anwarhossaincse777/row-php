<?php
session_start();
require '../../includes/db_connection.php';
if (!isset($_SESSION['login'])) {

    header('location:login.php');

}

$title="Dashboard";

require_once '../../includes/dashboard/header.php';

?>


<?php


require_once '../../includes/dashboard/sidebar.php';

?>




<div class="content-wrapper">
    <div class="row">
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-basket icon-lg text-success"></i>
                        <div class="ml-3">
                            <p class="mb-0">Total Users</p>
                            <h6><?php

                                $TotalCountUsers="Select COUNT('*') as total_users From users";

                                $totalUsers=mysqli_fetch_assoc(mysqli_query($db_connect,$TotalCountUsers));

                                echo $totalUsers['total_users'];

                                ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-rocket icon-lg text-warning"></i>
                        <div class="ml-3">
                            <p class="mb-0">Tasks Completed</p>
                            <h6>2346</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-diamond icon-lg text-info"></i>
                        <div class="ml-3">
                            <p class="mb-0">Monthly Sales</p>
                            <h6>896546</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-chart-line-stacked icon-lg text-danger"></i>
                        <div class="ml-3">
                            <p class="mb-0">Total Revenue</p>
                            <h6>$ 56000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1><?php

        echo $_SESSION['login'];

        ?></h1>














    <?php

    require_once '../../includes/dashboard/footer.php';

    ?>
