<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div class="container">
        <br />

        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px">
                <h4 class="card-title mt-3 text-center">
                    Registration form for Employee
                </h4>

                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                <form method="POST" action="./empFromDB.php">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            </span>
                        </div>
                        <input name="empid" class="form-control" placeholder="Employee code" id"="text" />
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            </span>
                        </div>
                        <input name="empname" class="form-control" placeholder="Full name" type="text" />
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            </span>
                        </div>
                        <input name="empemail" class="form-control" placeholder="Email address" type="email" />
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            </span>
                        </div>
                        <input name="number" class="form-control" placeholder="Mobile Number" type="number" />
                    </div>
                    <small>Enter Birth Date</small>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            </span>
                        </div>
                        <input name="birthDate" class="form-control" placeholder="Birth Date" type="date" />
                    </div>


                    <!-- form-group// -->

                    <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            </span>
                        </div>
                        <input class="form-control" placeholder="Address" type="text" name="address" />
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            </span>
                        </div>
                        <input class="form-control" placeholder="Adhar Number" type="number" name="adharNumber" />
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            </span>
                        </div>
                        <input class="form-control" placeholder="PAN Number" type="text" name="panNumber" />
                    </div>

                    <small>Enter Joining Date</small>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            </span>
                        </div>
                        <input name="joinDate" class="form-control" placeholder="Date" type="date" />
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            </span>
                        </div>
                        <input class="form-control" placeholder="Starting Salary" type="password" name="salary" />
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            </span>
                        </div>
                        <input class="form-control" placeholder="Create password" type="password" name="emppassword" />
                    </div>
                    <!-- form-group// -->

                    <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            Create Account
                        </button>
                    </div>
                    <!-- form-group// -->
                </form>
            </article>
        </div>
        <!-- card.// -->
    </div>
    <!--container end.//-->

    <br /><br />
</body>

</html>