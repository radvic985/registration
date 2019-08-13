<div class="container col-md-offset-3 col-md-6">
    <div class="card">
        <div class="card-header bg-success text-white"><?= T::lang('Profile information', $lang) ?>
            <span class="float-right">
                <a href="/profile.php?edit=yes" class="text-dark"><?= T::lang('Edit profile', $lang) ?></a>
            </span>
        </div>
        <div class="card-body bg-light col-xs-12">
            <table class="table table-hover table-bordered">
                <tbody>
                <tr>
                    <td><?= T::lang('First Name', $lang) ?></td>
                    <td class="text-center"><i class="fas fa-user-tie"></i></td>
                    <td><?= $user['first_name']; ?></td>
                </tr>
                <tr>
                    <td><?= T::lang('Last Name', $lang) ?></td>
                    <td class="text-center"><i class="far fa-id-card"></i></td>
                    <td><?= $user['last_name']; ?></td>
                </tr>
                <tr>
                    <td><?= T::lang('Email', $lang) ?></td>
                    <td class="text-center"><i class="far fa-envelope"></i></td>
                    <td><?= $user['email']; ?></td>
                </tr>
                <tr>
                    <td><?= T::lang('Gender', $lang) ?></td>
                    <td class="text-center"><i class="fas fa-restroom"></i></td>
                    <td class="text-center"><i class="fas fa-<?= $user['gender']; ?>"></i></td>
                </tr>
                <tr>
                    <td><?= T::lang('Date of Birth', $lang) ?></td>
                    <td class="text-center"><i class="fas fa-birthday-cake"></i></td>
                    <td><?= $user['date_birth']; ?></td>
                </tr>
                <tr>
                    <td><?= T::lang('Country', $lang) ?></td>
                    <td class="text-center"><i class="fas fa-home"></i></td>
                    <td><?= $user['country']; ?></td>
                </tr>
                <tr>
                    <td><?= T::lang('Photo', $lang) ?></td>
                    <td class="text-center"><i class="fas fa-camera"></i></td>
                    <td class="text-center">
                        <img src="<?= $user['file'] ?>" alt="photo" class="big-photo">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-success">
            <a href="/profile.php?edit=yes"
               class="btn btn-dark text-white w-100"><?= T::lang('Edit Profile', $lang) ?></a>
        </div>
    </div>
</div>