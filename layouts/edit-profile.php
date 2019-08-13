<div class="container col-md-offset-3 col-md-6">
    <?php if ($edit == 'error') { ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= T::lang('You have not edited your profile data! Please, try again.', $lang) ?>
        </div>
    <?php } ?>
    <div class="card">
        <div class="card-header bg-success text-white"><?= T::lang('Edit Profile', $lang) ?></div>
        <div class="card-body bg-light col-xs-12">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td><?= T::lang('First Name', $lang) ?></td>
                    <td class="text-center"><i class="fas fa-user-tie"></i></td>
                    <td>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                               value="<?= $user['first_name']; ?>" required>
                        <span class="error-message hint"><?= T::lang('You have entered incorrect first name!', $lang) ?></span>
                        <div class="hint"><?= T::lang('Must contain only letters', $lang) ?></div>
                    </td>
                </tr>
                <tr>
                    <td><?= T::lang('Last Name', $lang) ?></td>
                    <td class="text-center"><i class="far fa-id-card"></i></td>
                    <td>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                               value="<?= $user['last_name']; ?>" required>
                        <span class="error-message hint"><?= T::lang('You have entered incorrect last name!', $lang) ?></span>
                        <div class="hint"><?= T::lang('Must contain only letters', $lang) ?></div>
                    </td>
                </tr>
                <tr>
                    <td><?= T::lang('Email', $lang) ?></td>
                    <td class="text-center"><i class="far fa-envelope"></i></td>
                    <td>
                        <input type="hidden" id="old-email" value="<?= $user['email']; ?>">
                        <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>"
                               required>
                        <span class="error-message hint"><?= T::lang('You have entered incorrect email!', $lang) ?></span>
                        <div class="hint"><?= T::lang('For example', $lang) ?>: john.doe2001@example.com</div>
                    </td>
                </tr>
                <tr>
                    <td><?= T::lang('Gender', $lang) ?></td>
                    <td class="text-center"><i class="fas fa-restroom"></i></td>
                    <td class="text-center">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender"
                                       value="male" <?= $user['gender'] === 'male' ? 'checked' : '' ?>>
                                <i class="fas fa-male"></i>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender"
                                       value="female" <?= $user['gender'] === 'female' ? 'checked' : '' ?>>
                                <i class="fas fa-female"></i>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><?= T::lang('Date of Birth', $lang) ?></td>
                    <td class="text-center"><i class="fas fa-birthday-cake"></i></td>
                    <td>
                        <input type="date" class="form-control" id="date" name="date_birth"
                               value="<?= $user['date_birth']; ?>">
                    </td>
                </tr>
                <tr>
                    <td><?= T::lang('Country', $lang) ?></td>
                    <td class="text-center"><i class="fas fa-home"></i></td>
                    <td>
                        <input type="text" class="form-control" id="country" name="country"
                               value="<?= $user['country'] ?>">
                        <span class="error-message hint"><?= T::lang('You have entered incorrect country!', $lang) ?></span>
                        <div class="hint"><?= T::lang('Must contain only letters', $lang) ?></div>
                    </td>
                </tr>
                <tr>
                    <td><?= T::lang('Photo', $lang) ?></td>
                    <td class="text-center"><i class="fas fa-camera"></i></td>
                    <td class="text-center">
                        <img src="<?= $user['file'] ?>" alt="photo" class="big-photo mb-3">
                        <input type="hidden" id="old_file" value="<?= $user['file'] ?>"/>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
                        <input type="file" class="form-control" id="file" name="file" accept=".gif,.jpg,.jpeg,.png">
                        <span class="error-message hint"><?= T::lang('You have chosen incorrect file type!', $lang) ?></span>
                        <div class="hint"><?= T::lang('You can upload <b>.jpg, .jpeg, .gif, .png</b> files only', $lang) ?></div>
                    </td>
                </tr>
                <tr>
                    <td><?= T::lang('Password', $lang) ?></td>
                    <td class="text-center"><i class="fas fa-unlock-alt"></i></td>
                    <td>
                        <input type="password" class="form-control" id="pass"
                               placeholder="<?= T::lang('Enter password', $lang) ?>"
                               name="password"
                               required>
                        <span class="error-message hint"><?= T::lang('You have entered incorrect password!', $lang) ?></span>
                        <div class="hint"><?= T::lang('Must contain 8 or more characters(letters and special(".", "-", "_") character)', $lang) ?></div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-success">
            <button type="submit" name="sign_up" class="btn btn-dark text-white w-100 edit">
                <?= T::lang('Save Profile', $lang) ?>
            </button>
        </div>
    </div>
</div>
<script src="js/register.js"></script>
<script src="js/edit-profile.js"></script>
<script src="js/autocomplete.js"></script>
