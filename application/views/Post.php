<section class="hero-post pb-10vh" style="background-image: url('<?= base_url() ?>assets/img/<?= $konten->image ?>')"></section>

<section id="title" class="py-5 ptb-10vh">
    <div class="container text-center">
        <h1 class="fw-bold">JELAJAHI WISATA & DESTINASI TERBAIK KAMI</h1>
    </div>
</section>

<section id="galery" class="py-5 ptb-10vh">
    <div class="container text-center">
        <img src="<?= base_url() ?>assets/img/<?= $konten->image ?>" class="img-fluid rounded mx-auto d-block" style="height: 50vh; width: auto; min-width: 100%; object-fit: cover;">
        <br>
        <div class="row">
            <?php foreach ($galeri as $g) : ?>
                <div class="col-md-3 col-3">
                    <img src="<?= base_url() ?>assets/img/<?= $g->image ?>" class="rounded w-100" style="width: 100%; aspect-ratio: 1/1; height: 20vh; object-fit: cover; object-position: center; border-radius: 10px; display: block;">
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section id="title2" class="py-5 ptb-10vh">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="h1 fw-bold">PAKET <?= $konten->title ?></div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <div class="h3 fw-bold"><u style="text-underline-offset: 2vh;">DESKRIPSI PERJALANAN</u></div>
            </div>
        </div>

        <?php foreach ($hari as $h) : ?>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="h4"><?= strtoupper(preg_replace('/^([^-]+)/', '<strong>$1</strong>', $h->note)) ?></div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <ul>
                        <?php
                        $alur = $this->M_global->getDataResult('alur', ['konten_id' => $konten->id, 'hari_id' => $h->id]);
                        foreach ($alur as $a) :
                        ?>
                            <span><?= date('H:i', strtotime($a->time)) . ' WIB : ' . $a->note ?></span>
                            <br>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>