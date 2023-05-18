<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<!-- <h1 class = "mt-5">Our Best Menu</h1> -->

<!-- <section class="section-card">
    <div class="card">
        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="salad" class="card_img">
        <div class="card_details">
        <ul>
            <li>
                Salmon Salad
            </li>
        </ul>
        <a href="/product/detail" class="btn">Lihat Resep</a>
        </div>
    </div>
    <div class="card">
    <div class="card">
        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="salad" class="card_img">
        <div class="card_details">
        <ul>
            <li>
                Salmon Salad
            </li>
        </ul>
        <a href="/product/detail" class="btn">Lihat Resep</a>
        </div>
        </div>
    </div>
    <div class="card">
    <div class="card">
        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="salad" class="card_img">
        <div class="card_details">
        <ul>
            <li>
                Salmon Salad
            </li>
        </ul>
        <a href="/product/detail" class="btn">Lihat Resep</a>
        </div>
    </div>
</section>        -->

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
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
                    <?php foreach ($products as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=100 height=100></td>
                        <td class="align-middle">
                        <a href="product/details/<?= $item['id_resep'] ?>"><?= $item['nama_resep'] ?></a>
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