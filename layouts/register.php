<div class="container col-md-offset-3 col-md-6">
    <?php if ($signUp == 'error') { ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= T::lang('You have not registered on the site! Please, try again.', $lang) ?>
        </div>
    <?php } ?>
    <div class="card">
        <div class="card-header bg-success text-white"><?= T::lang('Please, Register', $lang) ?>
            <span class="float-right"><?= T::lang('Already registered?', $lang) ?>
                <a href="/sign-in.php" class="text-dark"><?= T::lang('Sign In here', $lang) ?></a>
            </span>
        </div>
        <form action="/sign-up.php" method="post" enctype="multipart/form-data">
            <div class="card-body bg-light">
                <label class="control-label required"></label> - <?= T::lang('These fields are required.', $lang) ?>
                <div class="form-group">
                    <label for="first_name" class="control-label required"><?= T::lang('First Name', $lang) ?></label>
                    <input type="text" class="form-control" id="first_name"
                           placeholder="<?= T::lang('Enter first name', $lang) ?>"
                           name="first_name" required>
                    <span class="error-message hint"><?= T::lang('You have entered incorrect first name!', $lang) ?></span>
                    <div class="hint"><?= T::lang('Must contain only letters', $lang) ?></div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="control-label required"><?= T::lang('Last Name', $lang) ?></label>
                    <input type="text" class="form-control" id="last_name"
                           placeholder="<?= T::lang('Enter last name', $lang) ?>"
                           name="last_name"
                           required>
                    <span class="error-message hint"><?= T::lang('You have entered incorrect last name!', $lang) ?></span>
                    <div class="hint"><?= T::lang('Must contain only letters', $lang) ?></div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label required"><?= T::lang('Email', $lang) ?></label>
                    <input type="email" class="form-control" id="email"
                           placeholder="<?= T::lang('Enter email', $lang) ?>" name="email"
                           required>
                    <span class="error-message hint"><?= T::lang('You have entered incorrect email!', $lang) ?></span>
                    <div class="hint"><?= T::lang('For example', $lang) ?>: john.doe2001@example.com</div>
                </div>
                <div class="form-group">
                    <div class="control-label required"><?= T::lang('Gender', $lang) ?></div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="male" checked>
                            <?= T::lang('Male', $lang) ?>
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="female">
                            <?= T::lang('Female', $lang) ?>
                        </label>
                    </div>
                </div>
                <hr/>
                <div class="form-group">
                    <label for="date"><?= T::lang('Date of Birth', $lang) ?></label>
                    <input type="date" class="form-control" id="date" name="date_birth">
                </div>
                <div class="form-group ui-widget">
                    <label for="country"><?= T::lang('Country', $lang) ?></label>
                    <input type="text" class="form-control" id="country"
                           placeholder="<?= T::lang('Enter country', $lang) ?>" name="country">
                    <span class="error-message hint"><?= T::lang('You have entered incorrect country!', $lang) ?></span>
                    <div class="hint"><?= T::lang('Must contain only letters', $lang) ?></div>
                </div>
                <div class="form-group">
                    <label for="file"><?= T::lang('Choose your avatar', $lang) ?></label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
                    <input type="file" class="form-control" id="file" name="file" accept=".gif,.jpg,.jpeg,.png">
                    <span class="error-message hint"><?= T::lang('You have chosen incorrect file type!', $lang) ?></span>
                    <div class="hint"><?= T::lang('You can upload <b>.jpg, .jpeg, .gif, .png</b> files only', $lang) ?></div>
                </div>
                <hr/>
                <div class="form-group">
                    <label for="pass" class="control-label required"><?= T::lang('Password', $lang) ?></label>
                    <input type="password" class="form-control" id="pass"
                           placeholder="<?= T::lang('Enter password', $lang) ?>" name="password"
                           required>
                    <span class="error-message hint"><?= T::lang('You have entered incorrect password!', $lang) ?></span>
                    <div class="hint"><?= T::lang('Must contain 8 or more characters(letters and special(".", "-", "_") character)', $lang) ?></div>
                </div>
                <div class="form-group">
                    <label for="confirm_pass"
                           class="control-label required"><?= T::lang('Confirmation Password', $lang) ?>
                    </label>
                    <input type="password" class="form-control" id="confirm_pass"
                           placeholder="<?= T::lang('Enter confirmation password', $lang) ?>"
                           name="confirm_pass"
                           required>
                    <span class="error-message hint"><?= T::lang('You have entered wrong confirmation password!', $lang) ?></span>
                    <div class="hint"><?= T::lang('Please, enter your password again for confirmation', $lang) ?></div>
                </div>
            </div>
            <div class="card-footer bg-success">
                <button type="submit" name="sign_up"
                        class="btn btn-dark text-white w-100 register"><?= T::lang('Sign Up', $lang) ?>
                </button>
            </div>
        </form>
    </div>
</div>
<script src="js/register.js"></script>
<script src="js/autocomplete.js"></script>