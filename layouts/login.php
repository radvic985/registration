<div class="container col-md-offset-3 col-md-6">
    <?php if ($signUp) { ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= T::lang('You have registered <strong>successfully</strong> on the site!', $lang) ?>
        </div>
    <?php } ?>
    <div class="card">
        <div class="card-header bg-success text-white"><?= T::lang('Please, Sign In', $lang) ?>
            <span class="float-right"><?= T::lang('Not registered yet?', $lang) ?>
                <a href="/sign-up.php" class="text-dark"><?= T::lang('Sign Up here', $lang) ?></a></span>
        </div>
        <form action="/verification.php" method="post">
            <div class="card-body bg-light">
                <div class="form-group">
                    <label for="email"><?= T::lang('Email', $lang) ?></label>
                    <input type="email" class="form-control" id="email"
                           placeholder="<?= T::lang('Enter email', $lang) ?>" name="email"
                           required>
                </div>
                <div class="form-group">
                    <label for="pass"><?= T::lang('Password', $lang) ?></label>
                    <input type="password" class="form-control" id="pass"
                           placeholder="<?= T::lang('Enter password', $lang) ?>" name="password"
                           required>
                </div>
                <span class="error-message"><?= T::lang('You have entered wrong email or password!', $lang) ?></span>
            </div>
            <div class="card-footer bg-success">
                <button type="submit" class="login btn btn-dark text-white w-100">
                    <?= T::lang('Sign In', $lang) ?>
                </button>
            </div>
        </form>
    </div>
</div>
<script src="js/login.js"></script>