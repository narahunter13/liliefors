<?= $this->extend('user/_layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="container-fluid">
        <div id="accordion">
            <?php
            if ($pengumuman != NULL) {
                foreach ($pengumuman as $row) {
            ?>
                    <div class="card">
                        <div class="card-header" id="heading-<?= $row['id']; ?>">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-<?= $row['id']; ?>" aria-expanded="false" aria-controls="collapse-<?= $row['id']; ?>">
                                    <?= $row['judul']; ?>
                                </button>
                            </h5>
                        </div>
                        <div id="collapse-<?= $row['id']; ?>" class="collapse" aria-labelledby="heading-<?= $row['id']; ?>" data-parent="#accordion">
                            <div class="card-body">
                                <?= $row['konten']; ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <p class="lead text-center font-italic">
                    Tidak ada pengumuman
                </p>
            <?php } ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>