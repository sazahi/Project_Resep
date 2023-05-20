<?= $this->extend('base') ?>
<?= $this->section('content') ?>



<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
        <form action="/product/search" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by name" name="search" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
                    <button class="btn-outline-primary" type="submit">Search</button>
                </div>
            </form>
            <h1 class="mb-4">Daftar Resep</h1>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">No</th>
                        <th scope="col ">Photo</th>
                        <th scope="col ">Resep</th>
                        <th scope="col ">Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($results as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=100 height=100></td>
                        <td class="align-middle">
                        <a href="/product/details/<?= $item['id_resep'] ?>"><?= $item['nama_resep'] ?></a>
                            </td>
                        <td><?= $item['kategori'] ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>