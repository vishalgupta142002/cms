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
                        <h3 class="card-title">DataTable </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php
                          $limit =10 ;
                          $page =$_GET['page'];
                          $offset = ($page -1) * $limit;
                   $register ="SELECT * FROM employee LIMIT {$offset},{$limit}";
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
                                    <th>email</th>
                                    <th>address</th>
                                    <th>mobile</th>
                                    <th>country</th>
                                    <th>state</th>
                                    <th>zip</th>
                                    <th>course</th>
                                    <th>gender</th>

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
                                    <td><?php echo $reg_row['password']; ?></td>
                                    <td><?php echo $reg_row['email']; ?></td>
                                    <td><?php echo $reg_row['address']; ?></td>
                                    <td><?php echo $reg_row['mobile']; ?></td>
                                    <td><?php echo $reg_row['country']; ?></td>
                                    <td><?php echo $reg_row['state']; ?></td>
                                    <td><?php echo $reg_row['zip']; ?></td>
                                    <td><?php echo $reg_row['course']; ?></td>
                                    <td><?php echo $reg_row['gender']; ?></td>
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
                <?php
                $sql ="SELECT * FROM employee";
                $result =mysqli_query($conn,$sql) or die("query failed");
                if(mysqli_num_rows($result)>0){
                    $total_record = mysqli_num_rows($result);
                    $limit =10 ;
                    $total_page = ceil($total_record/$limit);

                    echo '  <ul class="pagination ">';
                    for($i=1; $i <=$total_page; $i++ ){
                    echo '<li class="page-item"><a class="page-link" href="datatable.php?page='.$i.'">'.$i.'</a></li>';
                    }
                    echo '</ul>';
                }

                ?>
                <!-- <nav aria-label="Page navigation example">


                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                
                    <li class="page-item"><a class="page-link" href="#">3</a></li>


                </nav> -->
            </div>
        </div>
    </div>



    <?php

include('includes/footer.php');
?>