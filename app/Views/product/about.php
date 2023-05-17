<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<h5 class="mb-4">Hello <?= session('username') ?> </h5>

<h2>Our Best Menu</h2>

<section class="section-card">
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

    <div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Daftar Produk</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">ID</th>
                        <th scope="col ">Product Name</th>
                        <th scope="col ">Category</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($products as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['stock'] ?></td>
                        <td><?= $item['price'] ?></td>
                        <td><?= $item['category'] ?></td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="/product/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                                    <a href="/product/<?= $item['id'] ?>/edit" class="btn btn-info text-white "><i class='bx bx-pencil'></i></a>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</section>                  



<?= $this->endSection() ?>