<?php

use App\Database\Migrations\Users;
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <h4 class="mt-3">Postingan Terbaru</h4>
        <?php foreach ($posts as $post): ?>
            <div class="card my-4 mb-3 mt-4">
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col-md-4">
                            <img class=" rounded-circle mx-2 img-postingan" src="https://i.imgur.com/hczKIze.jpg" alt=""> 
                            <h6 class="card-title ms-3 mt-2">Marcell Bintang Setiawan</h6>
                        </div>
                    
                        <div class="col-md-8 mt-2">
                           <i><p class="text-end"><small class="text-muted"><?= $post['created_at'] ?></small></p></i>
                        </div>
                    </div>
                </div>

                
                <div class="card-body border border-light">
                        <h4 class="mx-2"> 
                            <?= $post['title'] ?>
                        </h4>
                        <p class="mx-2 text-justify">
                            <?= $post['description'] ?>
                        </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>

