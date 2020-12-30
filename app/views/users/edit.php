<?php
 require_once "header.php";
 include_once("config/database.php");
?>
<?php
$id =$_GET['id'];
$query= "SELECT * FROM student WHERE 'id='";
$query_run =mysqli_query($conn, $query);

if(mysqli_num_rows($query_run)>0)
{
while($row = mysqli_fetch_array($query_run))
  {
    echo $row['firstname'];
  }
}
else
{
    echo "no record found";
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Edit page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet">

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
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light ">

    <div class="container align-items: center  display: flex;">
        <main>

            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-3 mt-3" src="../../../assets/image/logo.png" alt="" width="72"
                    height="57">
                <h2>Registration Edit</h2>
                <p class="lead"></p>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <h4 class="mb-3">Student Details</h4>
                    <form class="needs-validation" novalidate action="../../controllers/users/register.php"
                        method="post">
                        <div class="row g-3">

                            <div class="col-12">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">

                                    <input type="text" class="form-control" name="username" id="username"
                                        placeholder="Username" required>
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" name="firstname" id="firstname"
                                    placeholder="Enter FirstName" value="" required maxlength="10">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                                <input type="hidden" name="token" value="<?php echo $token;?>">
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="lastname" id="lastname"
                                    placeholder="Enter Last Name" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>


                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address .
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password <span
                                        class="text-muted"></span></label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="please enter vaild password">
                                <!-- <div class="invalid-feedback"> -->
                                Please enter a valid password.
                                <!-- </div> -->
                            </div>

                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">confirm Password <span
                                    class="text-muted"></span></label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                                placeholder="please enter same confirm Password ">
                            <!-- <div class="invalid-feedback"> -->
                            Please enter a valid confirm Password.
                            <!-- </div> -->
                        </div>

                        <div class="col-12">
                            <label for="gender" class="form-label">Gender <span class="text-muted"></span></label>
                            <div class="form-check">
                                <input id="male" name="gender" value="male" type="radio" class="form-check-input">
                                <label class="form-check-label" for="credit">Male</label>
                            </div>
                            <div class="form-check">
                                <input id="female" name="gender" value="female" type="radio" class="form-check-input"
                                    required>
                                <label class="form-check-label" for="debit">Female</label>
                            </div>

                            <div class="col-12">
                                <label for="dob" class="form-label">DOB <span class="text-muted"></span></label>
                                <input type="date" class="form-control" name="dob" id="dob" placeholder="" required>
                                <div class="invalid-feedback">
                                    Please enter your Date oF Brith.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="number" class="form-label">Mobile <span class="text-muted"></span></label>
                                <input type="number" class="form-control" name="mobile" id="mobile"
                                    placeholder="Enter vaild Mobile Number" required>
                                <div class="invalid-feedback">
                                    Please enter your Mobile Number.
                                </div>

                            </div>
                            <div class="col-12">
                                <label for="resume" class="form-label">Resume <span class="text-muted"></span></label>
                                <input type="file" class="form-control" name="resume" id="resume" required>
                                <div class="invalid-feedback">
                                    Please Choose your Resume.
                                </div>

                            </div>
                            <div class="col-md-5">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" id="country" name="country" required>
                                    <option value="">Choose Country</option>
                                    <option>India</option>
                                    <option>Nepal</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>


                            <div class="col-12">
                                <label for="address2" class="form-label">city <span class="text-muted"></span></label>
                                <input type="text" class="form-control" name="city" id="city"
                                    placeholder=" Enter vaild City ">
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Enter vaild Address" required>
                                <div class="invalid-feedback">
                                    Please enter your address.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="course[]" value="btech" id="course">
                            <label class="form-check-label" for="course">BTECH
                            </label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="course[]" value="bca" id="course">
                            <label class="form-check-label" for="course">BCA</label>
                        </div>
                        <hr class="my-4">

                        <button class="w-100 btn btn-info btn-md" name="update" type="submit">update</button>
                    </form>
                </div>
            </div>
        </main>
    </div>


    <!-- <script src="../../../assets/js/bootstrap.bundle.min.js"></script> -->

    <!-- <script src="form-validation.js"></script> -->
</body>

</html>
<?php
require_once 'footer.php';
?>