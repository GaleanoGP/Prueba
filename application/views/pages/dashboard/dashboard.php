<!--Aquí se mostrarán las noticias. -->
<div class="container my-lg-5">
    <div class="row">
        <?php foreach($news as $n): ?>
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card">
                    <img src="<?= base_url('uploads/news/'.$n['picture']) ?>" alt="<?= $n['title'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h4><?= $n['title'] ?></h4>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
