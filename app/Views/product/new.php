<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">ADMIN <?= session()->get('username') ?></h5>
            <?php
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($errors as $key => $value) { ?>
                            <li><?= esc($value); ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php  } ?>
            <?php if (session()->getFlashdata('pesan')) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php } ?>

            <?= form_open('authent'); ?>

            <div class="form-group">
                <label for="example-product-name" class="label-center">username</label>
                <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="masukan username" name="name" value="<?= old('username') ?>">
            </div>

            <div class="form-group">
                <label for="example-product-name" class="label-center">password</label>
                <input name="password" type="pasword" class="form-control" id="password" aria-describedby="emailHelp" placeholder="masukan password" name="name">
            </div>



            <button type="submit" class="btn btn-primary">LOGIN</button>
            <?= form_close() ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>