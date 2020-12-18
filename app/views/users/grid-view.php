<?php
//   require_once "header.php";
 include_once("../../config/database.php");
?>
<?php

if (isset($_GET['del'])){
    $id = $_GET['del'];
    $query = "DELETE FROM student WHERE id = $id";
    $query_run= mysqli_query($conn, $query);
    if (!$query_run) {
        echo " data deleted from database";
    } else {
        die("can not delete data from database: " . mysqli_error($query_run));
    }
}

?>




<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <meta name="generator" content="Hugo 0.79.0">
    <title>listing page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">


    </br>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <?php
            $register ="SELECT * FROM student";
            $register_run = mysqli_query($conn,$register);

            if(mysqli_num_rows($register_run) >0)
            {
               ?>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">username</th>
                            <th scope="col">FirstName</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">email</th>
                            <th scope="col">password</th>
                            <th scope="col">confirm_password</th>
                            <th scope="col">gender</th>
                            <th scope="col">DOB</th>
                            <th scope="col">mobile</th>
                            <th scope="col">country</th>
                            <th scope="col">city</th>
                            <th scope="col">address</th>
                            <th scope="col">course</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         while($reg_row =mysqli_fetch_array($register_run))
                         {
                        ?>
                        <tr>
                            <th><?php echo $reg_row['id']; ?></th>
                            <td><?php echo $reg_row['username']; ?></td>
                            <td><?php echo $reg_row['firstname']; ?></td>
                            <td><?php echo $reg_row['lastname']; ?></td>
                            <td> <?php echo $reg_row['email']; ?></td>
                            <td> <?php echo $reg_row['password']; ?></td>
                            <td> <?php echo $reg_row['confirm_Password'];?></td>
                            <td> <?php echo $reg_row['gender']; ?></td>
                            <td> <?php echo $reg_row['dob']; ?></td>
                            <td> <?php echo $reg_row['mobile']; ?></td>
                            <td><?php echo $reg_row['city']; ?></td>
                            <td><?php echo $reg_row['address']; ?></td>
                            <td> <?php echo $reg_row['course']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $reg_row['id']; ?>" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <a href="<?php $_SERVER['PHP_SELF']?>?del=<?php echo $reg_row['id']?>" ;
                                    class="btn btn-danger">Delete</a>
                            </td>
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
</body>

</html>
<?php
require_once 'footer.php';
?>