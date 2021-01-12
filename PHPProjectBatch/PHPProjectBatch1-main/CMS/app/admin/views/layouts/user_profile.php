<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <body class="bg-light">

                        <div class="container">
                            <main>
                                <div class="py-5 text-center">
                                    <img class="d-block mx-auto mb-4" src="assets/images/brand/bootstrap-logo.svg"
                                        alt="" width="72" height="57">
                                    <h2>My Profile Details</h2>
                                    <p class="lead"></p>
                                </div>

                                <div class="row g-3">
                                    <div class="col-md-7 col-lg-8">
                                        <h4 class="mb-3">Student Details</h4>
                                        <form class="needs-validation" novalidate
                                            action="?admin=show&module=users&action=profileuser" method="post">
                                            <div class="col-12">
                                                <label for="user_name" class="form-label">Username</label>
                                                <div class="input-group">
                                                    <input class="form-control" readonly name="user name"
                                                        value="<?php echo $user_profile['user_name']; ?>">

                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label for="first_name" class="form-label">First name</label>
                                                    <input class="form-control" readonly name="first Name"
                                                        value=" <?php echo $user_profile ['first_name']; ?>">

                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="last_name" class="form-label">Last name</label>
                                                    <input class="form-control" readonly name="last Name"
                                                        value=" <?php echo $user_profile ['last_name']; ?>">


                                                </div>

                                                <div class="col-12">
                                                    <label for="email" class="form-label">Email <span
                                                            class="text-muted"></span></label>
                                                    <input class="form-control" readonly name="email" id="email"
                                                        value="<?php echo $user_profile ['email']; ?>">

                                                </div>

                                                <div class="col-12">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" readonly class="form-control" name="address"
                                                        id="address" placeholder="1234 Main St"
                                                        value="<?php echo $user_profile ['address']; ?>">
                                                    <div class="invalid-feedback">
                                                        Please enter your address.
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label for="Mobile" class="form-label">Mobile <span
                                                            class="text-muted"></span></label>
                                                    <input type="number" readonly class="form-control" name="mobile"
                                                        id="mobile" placeholder="mobile number"
                                                        value="<?php echo  $user_profile ['mobile']; ?>">
                                                </div>

                                                <div class="col-md-5">
                                                    <label for="country" readonly class="form-label">Country</label>
                                                    <select class="form-select" name="country" id="country">
                                                        <option value="">Choose</option>
                                                        <option value="india" <?php
                                                                if( $user_profile ["country"]=='india'){
                                                                    echo "selected";
                                                                }
                                                                ?>>india</option>
                                                        <option value="japan" <?php
                                                                if( $user_profile ["country"]=='japan'){
                                                                    echo "selected";
                                                                }
                                                                ?>>japan</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a valid country.
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="state" class="form-label">State</label>
                                                    <select class="form-select" name="state" id="state">
                                                        <option value="">Choose...</option>
                                                        <option value="up" <?php
                                                            if($user_profile ["state"] =='up'){
                                                                echo "selected";
                                                            }
                                                            ?>>up</option>
                                                        <option value="mp" <?php
                                                            if( $user_profile ["state"] =='mp'){
                                                                echo "selected";
                                                            }
                                                            ?>>mp</option>

                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid state.
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="zip" class="form-label">Zip</label>
                                                    <input type="text" readonly class="form-control" name="zip" id="zip"
                                                        placeholder="" value="<?php echo $user_profile['zip']; ?>">
                                                    <div class="invalid-feedback">
                                                        Zip code required.
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="course[]"
                                                    id="course" value="btech">
                                                <label class="form-check-label" for="same_address">btech
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="course[]"
                                                    value="bca" id="course">
                                                <label class="form-check-label" for="save-info">bca</label>
                                            </div>

                                            <hr class="my-4">

                                            <h4 class="mb-3">gender</h4>

                                            <div class="my-3">
                                                <div class="form-check">
                                                    <input id="gender" name="gender" type="radio"
                                                        class="form-check-input" value="male" <?php if($user_profile["gender"]=='male'){
                                                            echo "checked";
                                                        }
                                                        ?> <label class="form-check-label" for="credit">male</label>
                                                </div>
                                                <div class="form-check">
                                                    <input id="gender" name="gender" class="form-check-input"
                                                        type="radio" value="female" <?php if ($user_profile["gender"]=='female')
                                                        {
                                                            echo "Checked";
                                                        }
                                                        ?> <label class="form-check-label" for="debit">female</label>
                                                </div>
                                                <!-- <div class="form-check">
                                                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input">
                                                        <label class="form-check-label" for="paypal">PayPal</label>
                                                    </div> -->
                                            </div>

                                            <!--   <div class="row gy-3">
                                                    <div class="col-md-6">
                                                        <label for="cc-name" class="form-label">Name on card</label>
                                                        <input type="text" class="form-control" name="cc-name" id="cc-name" placeholder="">
                                                        <small class="text-muted">Full name as displayed on card</small>
                                                        <div class="invalid-feedback">
                                                            Name on card is required
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="cc-number" class="form-label">Credit card number</label>
                                                        <input type="text" class="form-control" name="cc-number" id="cc-number" placeholder="">
                                                        <div class="invalid-feedback">
                                                            Credit card number is required
                                                        </div>
                                                    </div> -->

                                            <!-- <div class="col-md-3">
                                                        <label for="cc-expiration" class="form-label">Expiration</label>
                                                            <input type="text" class="form-control" name="cc-expiration" id="cc-expiration"
                                                                placeholder="">
                                                            <div class="invalid-feedback">
                                                                Expiration date required
                                                            </div>
                                                        </div> -->

                                            <!-- <div class="col-md-3">
                                                            <label for="cc-cvv" class="form-label">CVV</label>
                                                            <input type="text" class="form-control" name="cc-cvv" id="cc-cvv" placeholder="">
                                                            <div class="invalid-feedback">
                                                                Security code required
                                                            </div>
                                                        </div>
                                                    </div>-->

                                            <hr class="my-4">


                                            <a href="?admin=show&module=users&action=editUser">Edit</a>
                                        </form>
                                    </div>
                                </div>
                            </main>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                </div>
            </div>
        </div>
</body>

</html>