<section class="hero-post pb-10vh" style="background-image: url('<?= base_url() ?>assets/img/<?= $konten->image ?>'); min-height: 40vh; height: 50vh; background-size: cover; background-position: center; background-repeat: no-repeat;"></section>

<section id="title" class="py-4 py-md-5 ptb-10vh">
    <div class="container text-center">
        <h1 class="fw-bold" style="font-size: clamp(24px, 4vw, 36px);">JELAJAHI WISATA & DESTINASI TERBAIK KAMI</h1>
    </div>
</section>

<section id="galery" class="py-4 py-md-5 ptb-10vh" style="position:relative; overflow:hidden;">
    <div style="position:absolute; inset:0; background-image: url('<?= base_url() ?>assets/img/<?= $konten->image ?>'); background-size:cover; background-position:center; filter: blur(50px) saturate(0.9) scale(1.05); transform: translateZ(0); z-index:0;"></div>
    <div style="position:absolute; inset:0; background-color: rgba(255,255,255,0.15); z-index:0;"></div>

    <div class="container" style="position:relative; z-index:1;">
        <img src="<?= base_url() ?>assets/img/<?= $konten->image ?>" class="img-fluid rounded mx-auto d-block w-100" style="height: 40vh; min-height: 250px; object-fit: cover;">
        <br>
        <div class="row g-3 g-md-4 justify-content-center">
            <?php foreach ($galeri as $g) : ?>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <img src="<?= base_url() ?>assets/img/<?= $g->image ?>" class="rounded w-100" style="aspect-ratio: 1/1; height: 20vh; min-height: 120px; object-fit: cover; object-position: center; border-radius: 10px; display: block;">
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section id="title2" class="py-4 py-md-5 ptb-10vh">
    <div class="container">
        <div class="row mb-4 mb-md-5">
            <div class="col-12">
                <div class="h1 fw-bold text-center text-md-start" style="font-size: clamp(24px, 4vw, 36px);">PAKET <?= $konten->title ?></div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <div class="h3 fw-bold text-center text-md-start" style="font-size: clamp(20px, 3vw, 28px);">
                    <u style="text-underline-offset: 1vh;">DESKRIPSI PERJALANAN</u>
                </div>
            </div>
        </div>

        <?php foreach ($hari as $h) : ?>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="h4 fw-bold text-center text-md-start" style="font-size: clamp(18px, 2.5vw, 24px); padding: 1rem; background-color: #f8f9fa; border-radius: 8px;">
                        <?= preg_replace('/^([^-]+)/', '<strong>$1</strong>', $h->note) ?>
                    </div>
                </div>
            </div>

            <div class="row mb-4 mb-md-5">
                <div class="col-12">
                    <div class="p-3" style="background-color: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                        <?php
                        $alur = $this->M_global->getDataResult('alur', ['konten_id' => $konten->id, 'hari_id' => $h->id]);
                        foreach ($alur as $a) :
                        ?>
                            <div class="mb-2 pb-2" style="border-bottom: 1px solid #eee; font-size: clamp(14px, 2vw, 16px);">
                                <span class="fw-bold"><?= date('H:i', strtotime($a->time)) ?> WIB :</span>
                                <span class="ms-2"><?= $a->note ?></span>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>