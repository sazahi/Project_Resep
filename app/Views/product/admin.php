<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/CSS/admin.css">
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>
</head>

<body>
    <div class="container">
        <!--     SIDE AREA -->
        <div class="sideArea">
            <div class="avatar">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCNOdyoIXDDBztO_GC8MFLmG_p6lZ2lTDh1ZnxSDawl1TZY_Zw" alt="">
                <div class="avatarName">Welcome,<br><?= session()->get('username') ?></div>
            </div>
            <ul class="sideMenu">
                <li><a href="<?= base_url('product/admin') ?>"><span class="fa fa-sitemap"></span>KELOLA RESEP</a></li>
                <li><a href="<?= base_url('logout') ?>"><span class="fa fa-sitemap"></span>LOGOUT</a></li>
            </ul>
        </div>
        <!--     SIDE AREA -->
        <div class="mainArea">
            <!-- BEGIN NAV -->
            <nav class="navTop row">
                <div class="menuIcon fl"><span class="fa fa-bars"></span></div>
                <div class="account fr">
                    <div class="name has-submenu"><?= session()->get('username') ?><span class="fa fa-angle-down"></span></div>
                    <ul class="accountLinks submenu">
                        <li><a href="">View website</a></li>
                        <li><a href="">Log out<span class="fa fa-sign-out fr"></span></a></li>
                    </ul>
                </div>
            </nav>
            <!-- END NAV -->
            <!-- CONTAINER  -->
            <div class="mainContent">
                <!-- LIST FORM -->
                <div class="row filterGroup">
                    <form action="" method="POST" class="formSearch fl">
                        <input type="text" class="inputSearch" placeholder="Search">
                        <button type="submit" class="btnSearch"><i class="fa fa-search"></i></button>
                    </form>
                    <div class="areaFilter fr row">
                        <div class="boxSelect fr">
                            <div class="titleSelect">Sort by</div>
                            <ul class="optionSelect">
                                <li sortIndex="0"><a href="">Alphabet</a></li>
                                <li sortIndex="1"><a href="">Price, Ascending</a></li>
                                <li sortIndex="2"><a href="">Price, Descending</a></li>
                                <li sortIndex="3"><a href="">Latest</a></li>
                            </ul>
                        </div>
                        <!--         FILTER -->
                        <div class="btnFilter fr bg-fff"><span class="fa fa-filter"></span>Filter</div>
                        <div class="boxFilter">
                            <div class="btnFilter"><span class="fa fa-close"></span>Close</div>
                            <!--             GROUP -->
                            <div class="groupInput">
                                <select name="">
                                    <option value="">Brand</option>
                                    <option value="">Brand 01</option>
                                    <option value="">Brand 02</option>
                                </select>
                                <select name="">
                                    <option value="">Category</option>
                                    <option value="">Category 01</option>
                                    <option value="">Category 02</option>
                                </select>
                                <select name="">
                                    <option value="">Author</option>
                                    <option value="">Author 01</option>
                                    <option value="">Author 02</option>
                                </select>
                            </div>
                            <!--             END GROUP -->
                            <!--             GROUP -->
                            <div class="groupInput">
                                <p class="titleInput">Price</p>
                                <div id="filterPrice"></div>
                                <div class="areaValue">
                                    <p>From</p>
                                    <input type="text" class="rangeValue">
                                    <p>To</p>
                                    <input type="text" class="rangeValue">
                                </div>
                            </div>
                            <!--             END GROUP -->
                        </div>
                    </div>
                </div>
                <form action="" method="GET" name="listForm" class="form scrollX">
                    <div class="formHeader row">
                        <h2 class="text-1 fl">Resept List</h2>
                        <!-- <div class="fr">
                            <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button><a href="" class="btnAdd fa fa-plus bg-1 text-fff"></a>
                        </div> -->
                    </div>
                    <style>
                        .table tr th {
                            padding: 15px;
                            color: white;
                        }

                        .table tr td {
                            padding: 5px;
                        }
                    </style>
                    <table class="table" cellspacing="0">
                        <tr class="bg-1">
                            <th>NO</th>
                            <th class="text-left">NAMA RESEP</th>
                            <th class="text-left">KATEGORI</th>
                            <th class="text-left">WAKTU</th>
                            <th class="text-left">BAHAN</th>
                            <th class="text-left">LANGKAH</th>
                            <th>OPSI</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($data as $row) { ?>
                            <tr>
                                <td class="text-center"><?= $no++ ?></td>
                                <td><?= $row['nama_resep'] ?></td>
                                <td><?= $row['kategori'] ?></td>
                                <td><?= $row['waktu'] ?></td>
                                <td><?= $row['bahan'] ?></td>
                                <td><?= $row['langkah'] ?></td>
                                <td class="text-center">
                                    <a style="background-color: red; padding:1vh; color: white; border-radius: 5px;" href="<?= base_url('/product/admin/delete/' . $row['id_resep']) ?>" onclick="return confirm('Yakin?')">Hapus</a>
                                    <a style="background-color: aquamarine; padding:1vh; color: black; border-radius: 5px;" href="<?= base_url('/product/admin/' . $row['id_resep']) ?>">Edit</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>

                </form>
                <!--  -->

                <!-- DETAIL FORM -->
                <form action="<?= ($resep != null) ? base_url('/product/admin/edit') : base_url('/product/admin/insert') ?>" method="POST" class="form">
                    <?php if ($resep != null) { ?>
                        <input type="hidden" name="id_resep" value="<?= $resep['id_resep'] ?>">
                    <?php } ?>
                    <div class="formHeader row">
                        <h2 class="text-1 fl"><?= ($resep != null) ? 'Edit Resept' : 'Add Resept' ?></h2>
                        <div class="fr">
                            <button type="submit" class="btnSave bg-1 text-fff text-bold fr"><?= ($resep != null) ? 'EDIT' : 'SAVE' ?></button>
                        </div>
                    </div>
                    <div class="formBody row">
                        <div class="column s-6">
                            <label class="inputGroup">
                                <span>Nama Resep</span>
                                <span><input type="text" name="nama_resep" required value="<?= ($resep != null) ? $resep['nama_resep'] : '' ?>"></span>
                            </label>
                            <label class="inputGroup">
                                <span>Waktu</span>
                                <span><input type="text" name="waktu" required value="<?= ($resep != null) ? $resep['waktu'] : '' ?>"></span>
                            </label>
                        </div>
                        <div class="column s-6">
                            <label class="inputGroup">
                                Category
                            </label>
                            <select name="kategori" required>
                                <option value="Appetizer" <?= ($resep != null) ? (($resep['kategori'] == 'Appetizer') ? 'selected' : '') : '' ?>>Appetizer</option>
                                <option value="Main Course" <?= ($resep != null) ? (($resep['kategori'] == 'Main Course') ? 'selected' : '') : '' ?>>Main Course</option>
                                <option value="Dessert" <?= ($resep != null) ? (($resep['kategori'] == 'Dessert') ? 'selected' : '') : '' ?>>Dessert</option>
                            </select>
                        </div>
                    </div>
                    <div class="formBody row">
                        <div class="column s-6" style="padding-right: 5px;">
                            <label class="inputGroup">
                                Bahan
                            </label>
                            <textarea name="bahan" required><?= ($resep != null) ? $resep['bahan'] : '' ?></textarea>
                        </div>
                        <div class="column s-6" style="padding-left: 5px;">
                            <label class="inputGroup">
                                Langkah - Langkah
                            </label>
                            <textarea name="langkah" required><?= ($resep != null) ? $resep['langkah'] : '' ?></textarea>
                        </div>
                    </div>
                </form>

                <div id="pagination">
                    <ul class="pagination list-inline text-center">
                        <li><a href="?page=1">1</a></li>
                        <li class="is-active"><a href="?page=2">2</a></li>
                        <li><a href="?page=3">3</a></li>
                        <li><a href="?page=4">4</a></li>
                        <li><a href="?page=5">5</a></li>
                    </ul>
                </div>
            </div>
            <!-- END CONTAINER  -->
        </div>
    </div>