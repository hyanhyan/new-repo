<?php
?>
<!Doctype html>
<html lang="en">
<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../assets/admin/style.css">
    <script src="../../../../assets/admin/js/main.js"></script>


    <style>

        .btn {
            background-color: #846459;
            border: 1px solid black;
            text-decoration: none;
            color: white;
            padding: 6px 12px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.6;
            transition: 0.3s;
        }
    </style>

</head>
</head>
<body>

<!-- Login Page Content -->


<div class="limiter">
    <div class="container">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="/admin/dashboard/login">
					<span class="login100-form-title p-b-34">
Account Login
</span>


                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type email">
                    <input id="Email" class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>
                <label for="remember me">Remember me</label>
                <input type="checkbox" name="rememberMe">
                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn" name="submit" value="Sign in">

                </div>

                <div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
Forgot
						</span>


            </form>

        </div>
    </div>
</div>



<div id="dropDownSelect1"></div>

</body>
</html>