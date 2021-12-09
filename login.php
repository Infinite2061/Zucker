<html>

<head>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/login.js"></script>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->
    <header>
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                    <h3>Welcome</h3>
                    <a href="register.php"><input type="submit" name="" value="Register" /></a><br />
                </div>
                <div class="col-md-9 register-right">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Login Page</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" value="" id="email" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value="" id="password" />
                                    </div>
                                    <input type="button" class="btnRegister" value="login" onclick="login()" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </header>
</body>

</html>