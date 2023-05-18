<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<h1>Our Best Menu</h1>

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
</section>       

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Daftar Resep</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">No</th>
                        <th scope="col ">Resep</th>
                        <th scope="col ">Category</th>
                        <th scope="col ">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($products as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['nama_resep'] ?></td>
                        <td><?= $item['kategori'] ?></td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>