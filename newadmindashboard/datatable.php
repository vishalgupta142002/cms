<?php
include('includes/header.php');

include('includes/sidebar.php');
 include('database/conection.php')

?>
<div class="contaniner">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php
                   $register ="SELECT * FROM employee";
                   $register_run = mysqli_query($conn,$register);
  
                   if(mysqli_num_rows($register_run) >0)
                    {
                     ?>
                    <table id="example1" style="padding-left:30px;" class="table table-bordered table-striped">
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
            <nav aria-label="Page navigation example">
                <ul class="pagination ">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>

        </div>
    </div>
</div>



<?php
    include('includes/footer.php');