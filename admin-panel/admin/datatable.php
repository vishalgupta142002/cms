<?php

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/database.php')
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">datatable</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php
                   $register ="SELECT * FROM employee";
                   $register_run = mysqli_query($conn,$register);
  
                   if(mysqli_num_rows($register_run) >0)
                    {
                     ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>user_name</th>
                                    <th>first_name</th>
                                    <th>last_name</th>
                                    <th>password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                         while($reg_row = mysqli_fetch_array($register_run))
                         {
                        ?>
                                <tr>
                                    <th><?php echo $reg_row['id']; ?></th>
                                    <td><?php echo $reg_row['user_name']; ?></td>
                                    <td><?php echo $reg_row['first_name']; ?></td>
                                    <td><?php echo $reg_row['last_name']; ?></td>
                                    <td><?php echo $reg_row['password']; ?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <?php
                     }
                   else{
                    echo "no record found";
                  }
                  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php

include('includes/footer.php');
?>