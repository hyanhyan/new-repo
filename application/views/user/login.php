<!-- Login Page Content -->


<div class="limiter">
    <div class="container">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="/">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>


                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type email">
                    <input id="Email" class="input100" type="text" name="email" placeholder="Email">
                    <small<?php if (!empty($data) && isset($data['email'])){ echo $data['email'];} ?></small>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                   <small> <?php if (!empty($data) && isset($data['password'])){ echo $data['password'];} ?></small
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

                    <a href="#" class="txt2">
                        User name / password?
                    </a>

                </div>
            <a href='/user/logout' class="login100-form-btn">Logout</a>
            </form>

        </div>
    </div>
</div>



<div id="dropDownSelect1"></div>
