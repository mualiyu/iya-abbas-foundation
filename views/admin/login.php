<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin_assets/assets/images/favicon.png">
    <title>Arc Admin - Login</title>
    <link href="/admin_assets/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
            <div class="auth-box row">
                <div class="col-lg-3 col-md-3 "></div>
                <div class="col-lg-6 col-md-6 bg-white">

                    <div class="p-3">
                        <div class="text-center">
                            <img src="/assets/img/iya/logo/iya_logo.JPG" style="width:150px;" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Sign In</h2>
                        <p class="text-center">Enter your username and password to access admin panel.</p>
                        <?php
                        if(isset($_SESSION["errorMessage"])) {
                            ?>
                            <div class="alert alert-secondary alert-dismissible bg-secondary text-white border-0 fade show"
                                role="alert">
                                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                                </button>
                                <?php echo $_SESSION["errorMessage"]; $_SESSION["errorMessage"]=null;?>
                            </div>
                            <?php
                        }
                        ?>
                        <form class="mt-4" action="/admin/login" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark" for="uname">Username</label>
                                        <input class="form-control" name="username" id="uname" type="text"
                                            placeholder="enter your username">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark" for="pwd">Password</label>
                                        <input class="form-control" name="password" id="pwd" type="password"
                                            placeholder="enter your password">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn w-100 btn-dark">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 "></div>
            </div>
        </div>
    </div>
    <script src="/admin_assets/assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/admin_assets/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="/admin_assets/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>