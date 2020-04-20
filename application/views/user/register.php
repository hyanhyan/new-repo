<!-- Register Page Content -->
<div class="container">
    <form method="post" action="/user/register">
        <div class="form-group">
            <label for="first_name">Username</label>
            <?php if (!empty($data) && isset($data['first_name'])) : ?>
                <div><?= $data['first_name'] ?></div>
            <?php endif; ?>
            <input class="form-control" type="text" name="first_name" id="username"  required />
        </div
        <div class="form-group">
            <label for="last_name">Username</label>
            <?php if (!empty($data) && isset($data['last_name'])) : ?>
                <div><?= $data['last_name'] ?></div>
            <?php endif;?>
            <input class="form-control" type="text" name="last_name" id="username"  required />
        </div>
        <div class="container">
        <div class="form-group">
            <label for="email">Email</label>
            <?php if (!empty($data) && isset($data['email'])) : ?>
                <div><?= $data['email']?></div>
            <?php endif; ?>
            <input class="form-control" type="text" name="email" id="email"  required />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <?php if (!empty($data) && isset($data['password'])) : ?>
                <div><?= $data['password'] ?></div>
            <?php endif; ?>
            <input class="form-control" type="password" name="password" id="password" placeholder="********" required />
        </div>
        <div class="form-group">

            <label for="passwordRepeat">Repeat Password</label>
            <?php if (!empty($data) && isset($data['confirm_password'])) : ?>
                <div><?= $data['confirm_password'] ?></div>
            <?php endif; ?>
            <input class="form-control" type="password" name="confirm_password" id="passwordRepeat" placeholder="********" required />
        </div>
        <div class="m-t-lg">
            <ul class="list-inline">
                <li>
                    <input class="btn btn--form" type="submit" name="submit" value="Register" />
                </li>
                <li>
                    <a class="signup__link" href="../user/login">I am already a member</a>
                </li>
            </ul>
        </div>
        </div>
    </form>
</div>
