<?php

    include "Main.php";
    $obj = new Main();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body>
<div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="">
                            <img src="assets/images/icon/logo.png" alt="CoolAdmin" width="100px" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                    <li class="active">
                            <a href="">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fas fa-shopping-basket"></i>Order</a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fas fa-list"></i>Category</a>
                        </li>

                        <li class="">
                            <a href="">
                                <i class="fas fa-tag"></i>Coupon</a>
                        </li>

                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <!-- <img src="assets/images/icon/logo.png" width="100px" /> -->
                   <b> Admin</b>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="">
                            <a href="">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fas fa-cog"></i>Leave Management</a>
                        </li>
                        <li class="">
                            <a href="">
                            <i class="fas fa-star"></i>Department</a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fas fa-users"></i>Employee List</a>
                        </li>

                        <li class="">
                            <a href="">
                                <i class="fas fa-info"></i>Help</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                              
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Welcome Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                           
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                       <div class="row">
         <div class="col">
           
                <h3>Today Attendance</h3>

            <div class="alert alert-warning fade collapse" role="alert" id="myAlert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Holy guacamole!</strong> It's free.. this is an example theme.
            </div>
            <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-primary">
                            <div class="rotate">
                                <i class="fa fa-users fa-3x"></i>
                            </div>
                            <h6 class="text-uppercase">Total Employee</h6>
                            <h1 class="display-4">

                                <?php 
                                     echo $obj->total_employee();
                                 ?>
                                     
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-success h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-users fa-3x"></i>
                            </div>
                            <h6 class="text-uppercase">Present</h6>
                            <h1 class="display-4">
                                <?php 
                                   // present employee = 5
                                     echo $obj->Check_employee_Leave(5);
                                 ?>

                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-user-times fa-3x"></i>
                            </div>
                            <h6 class="text-uppercase">Absent</h6>
                            <h1 class="display-4">
                                <?php 
                                     // Absent employee = 3
                                     echo $obj->Check_employee_Leave(3);
                                 ?>

                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-users fa-3x"></i>
                            </div>
                            <h6 class="text-uppercase">Late comers</h6>
                            <h1 class="display-4">
                                <?php 
                                     // Late employee = 4
                                     echo $obj->Check_employee_Leave(4);
                                 ?>

                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

           <hr>
                <h3>List of Approved Leaves</h3>
            
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="table-responsive">

<?php
  if($obj->GetApprovedLeaves()){ 

    ?>


                        <table class="table table-border table-striped table-earning">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Employee Name</th>
                                    <th>Designation</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>


               <?php
                    // echo "<pre>";
                    // print_r($obj->GetApprovedLeaves());die;

                   foreach ($obj->GetApprovedLeaves() as $data) {
                      ?>
                                <tr>
                                    <td><?php echo $data['id']?></td>
                                    <td><?php echo $data['first_name'].' '.$data['last_name']?></td>
                                    <td><?php echo $data['designation']?></td>
                                    <td><?php echo date('d-M-Y',strtotime($data['from_leave_date']))?></td>
                                    <td><span class="badge badge-pill badge-success">Approved</span></td>
                                </tr>

                        <?php }?>

                            </tbody>
                        </table>

<?php }?>


                    </div>
                </div>
            </div>
            <!--/row-->
<hr>
<h3> Department Wise Employee on leave</h3>
<div class="row mt-2">
    
<?php

    // echo "<pre>";
    // print_r($obj->DepartmentWiseLeave());die;

    if($obj->DepartmentWiseLeave()){ 
        foreach ($obj->DepartmentWiseLeave() as $data) {
?>


    <div class="col-md-3">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
              <div class="card-header"><?php echo $data['department']?> <span class="badge badge-danger"><?php echo $data['total_department']?></span></div>


        </div>
    </div>

<?php }}?>

</div>

<hr>

<h3> Department Wise no. of Employees</h3>
<div class="row mt-2">
    

    <?php

        if($obj->DepartmentWiseNo_Employee()){ 

           foreach ($obj->DepartmentWiseNo_Employee() as $data) {
     ?>

    <div class="col-md-3 mt-2">
          
<button type="button" class="btn btn-info">
  <?php echo $data['department']?> <span class="badge badge-light"><?php echo $data['departmentwise_no_employee']?></span>
</button>     
    </div>

<?php }}?>




</div>

<hr>

<h3> Designation Wise no. of employees</h3>
<hr>
            <div class="row placeholders mb-3">

    <?php

        if($obj->DesignationWiseNo_Employee()){ 

           foreach ($obj->DesignationWiseNo_Employee() as $data) {
     ?>

                <div class="col-6 col-sm-3 placeholder text-center">
                    <h4> <?php echo $data['designation']?> </h4>
                    <span class="badge badge-pill badge-warning"><?php echo $data['designationwise_no_employee']?></span>
                </div>

<?php }}?>
                
            </div>
            <hr>
           
            <h2 class="sub-header mt-3">Employees list</h2>
 <div class="table-responsive mt-2">


<?php

  if($obj->EmployeesLists()){ 

    ?>


                        <table class="table table-border table-striped table-earning">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Employee Name</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Mobile No.</th>
                                    <th>Email</th>
                                    <th>Designation</th>
                                    <th>Join Date</th>
                                </tr>
                            </thead>
                            <tbody>


              <?php
                    // echo "<pre>";
                    // print_r($obj->EmployeesLists());die;


                     $sr_no = 1;
                   foreach ($obj->EmployeesLists() as $data) {
                      ?>


                                <tr>
                                    <td><?php echo $sr_no++?></td>
                                    <td><?php echo $data['first_name'].' '.$data['last_name']?></td>
                                    <td><?php echo $data['gender']?></td>
                                    <td><?php echo $data['dob']?></td>
                                    <td><?php echo $data['mobile_no']?></td>
                                    <td><?php echo $data['email']?></td>
                                    <td><?php echo $data['designation']?></td>
                                    <td><?php echo $data['join_date']?></td>
                                </tr>

                        <?php }?>    

                            </tbody>
                        </table>

<?php }?>

                    </div>
        

                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>


    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>