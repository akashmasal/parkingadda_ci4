
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?= $page_title;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url();?>/assets/admin/images/favicon.ico">

		<!-- App css -->

		<link href="<?= base_url();?>/assets/admin/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

		<!-- icons -->
		<link href="<?= base_url();?>/assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="text-center">
                            <a href="index.html">
                                <img src="<?= base_url();?>/assets/admin/images/logo-dark.png" alt="" height="22" class="mx-auto">
                            </a>
                            <p class="text-muted mt-2 mb-4">Admin Dashboard</p>
                        </div>
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Register</h4>
                                </div>
                                <form id="register">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Full Name</label>
                                        <input class="form-control" type="text" id="fullname" placeholder="Enter your name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="email" required placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input class="form-control" type="password" required id="password" placeholder="Enter your password">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                            <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="mb-3 text-center d-grid">
                                        <button class="btn btn-primary" id="sign_up" type="submit"> Sign Up </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account?  <a href="<?= base_url('/admin');?>" class="text-dark ms-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor -->
        <script src="<?= base_url();?>/assets/admin/libs/jquery/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#register").submit(function(event){
                    event.preventDefault();
                    var fullname = $("#fullname").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    $("#sign_up").attr("disabled",true);

                    $.ajax({
                        url : "<?= base_url('/register');?>",
                        data : {"fullname":fullname,"email":email,"password":password},
                        dataType : "json",
                        type : "POST",
                        success : function(data){
                            // console.log(data);
                            $("#sign_up").attr("disabled",false);
                        },
                        error : function(error){
                            console.log(error);
                        }
                    });
                })
            })
        </script>
        <script src="<?= base_url();?>/assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url();?>/assets/admin/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url();?>/assets/admin/libs/node-waves/waves.min.js"></script>
        <script src="<?= base_url();?>/assets/admin/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="<?= base_url();?>/assets/admin/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="<?= base_url();?>/assets/admin/libs/feather-icons/feather.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url();?>/assets/admin/js/app.min.js"></script>
        
    </body>
</html>