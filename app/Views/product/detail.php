<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<div class="hero">
        <div class="wrapper">
            <div class="heroleft">
            
                <h2><?= $data['nama_resep'] ?></h2>
                <hr>
                <h1><b>INGREDIENTS</b></h1>
                
                <td><?= $data['bahan'] ?></td>
                        

                <h1><b>DIRECTIONS</b></h1>
                
                                <td><?= $data['langkah'] ?></td>
            
                               
                                    
            </div>
           
            <div class="heroright">
                <img src= /photos/<?= $data['photo'] ?> alt="">
            </div>
        </div>
    </div>
<?= $this->endSection() ?>