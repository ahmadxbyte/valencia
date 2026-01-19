<!-- Hero Section -->
<section id="home" class="hero-section text-white d-flex">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner hero-section">
            <?php $no = 1;
            foreach ($konten as $k) : ?>
                <div class="carousel-item <?= (($no == 1) ? 'active' : '') ?>">
                    <img src="<?= base_url() ?>assets/img/<?= $k->image ?>" class="d-block w-100" alt="..." style="height: 80vh !important; width: 100vw !important; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block text-start">
                        <h1>Jelajahi Nusantara Dengan <br> Valencia Mandiri Tour & Travel</h1>
                        <p>Valencia Mandiri Tour & Travel merupakan perusahaan penyedia layanan perjalanan wisata yang berlokasi di Magelang, Jawa
                            Tengah. Kami hadir untuk memberikan pengalaman wisata terbaik dengan pelayanan profesional, fasilitas lengkap, serta
                            berbagai pilihan destinasi menarik di seluruh Indonesia.</p>
                    </div>
                </div>
            <?php $no++;
            endforeach ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Destinasi Populer -->
<section id="destinasi" class="py-5 ptb-20vh">
    <div class="container">
        <h2 class="fw-bold pb-5 text-center text-md-start" style="font-size: clamp(28px, 4vw, 36px);">Destinasi Populer</h2>
        <div class="row g-4">
            <?php foreach ($konten as $k) : ?>
                <div class="col-md-4 col-sm-6 col-12" style="cursor:pointer;" onclick="window.location.href='<?= site_url('App/konten/') . $k->id ?>'">
                    <img src="<?= base_url() ?>assets/img/<?= $k->image ?>" class="img-fluid rounded mx-auto d-block w-100" style="height: 30vh; min-height: 250px; object-fit: cover;">
                    <h6 class="fw-bold mt-3 text-center text-md-start" style="font-size: clamp(14px, 2vw, 16px);"><?= strtoupper($k->title) ?></h6>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- Paket Wisata -->
<section id="paket" class="py-5 ptb-20vh" style="background-color: #e7e7e7;">
    <div class="container">
        <h2 class="fw-bold pb-5 text-center" style="font-size: clamp(28px, 4vw, 36px);">Paket Wisata</h2>
        <div class="row g-4 align-items-stretch">
            <?php
            $i = 1;
            foreach ($konten as $k) :
            ?>
                <div class="col-lg-4 col-md-6 col-12 mb-4" onclick="paketWisataClick(<?= $k->id ?>)" style="cursor: pointer;">
                    <div class="card h-100 shadow-sm rounded-4 overflow-hidden">
                        <div class="d-md-none">
                            <img src="<?= base_url() ?>assets/img/<?= $k->image ?>"
                                class="img-fluid w-100"
                                style="height: 30vh; min-height: 200px; object-fit: cover;">
                            <div class="card-body bg-warning-subtle bg-primary p-4">
                                <h5 class="fw-bold text-center" style="font-size: clamp(18px, 3vw, 24px);">PAKET <?= $k->title ?></h5>
                                <p class="mb-0 text-center" style="font-size: clamp(16px, 2.5vw, 20px);">
                                    <?= $k->note ?>
                                </p>
                            </div>
                        </div>

                        <div class="d-none d-md-block">
                            <?php if ($i % 2 == 0): ?>
                                <img src="<?= base_url() ?>assets/img/<?= $k->image ?>"
                                    class="img-fluid w-100"
                                    style="height: 30vh; min-height: 200px; object-fit: cover;">
                                <div class="card-body bg-warning-subtle bg-primary p-4">
                                    <h5 class="fw-bold" style="font-size: clamp(18px, 3vw, 24px);">PAKET <?= $k->title ?></h5>
                                    <p class="mb-0" style="font-size: clamp(16px, 2.5vw, 20px);">
                                        <?= $k->note ?>
                                    </p>
                                </div>
                            <?php else: ?>
                                <div class="card-body bg-warning-subtle bg-primary p-4">
                                    <h5 class="fw-bold" style="font-size: clamp(18px, 3vw, 24px);">PAKET <?= $k->title ?></h5>
                                    <p class="mb-0" style="font-size: clamp(16px, 2.5vw, 20px);">
                                        <?= $k->note ?>
                                    </p>
                                </div>
                                <img src="<?= base_url() ?>assets/img/<?= $k->image ?>"
                                    class="img-fluid w-100"
                                    style="height: 30vh; min-height: 200px; object-fit: cover;">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            endforeach;
            ?>
        </div>
    </div>
</section>

<section id="perjalanan" class="py-5 ptb-20vh">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center pb-5" style="font-size: clamp(24px, 4vw, 32px);">Mulai Perjalanan Spektakuler Anda dari sini</h2>

        <?php
        $i = 1;
        foreach ($konten2 as $k2) :
        ?>
            <div class="row align-items-center mb-5">
                <?php if ($i % 2 == 0): ?>
                    <div class="col-md-7 col-12 mb-4 mb-md-0 order-2 order-md-1">
                        <div class="highlight-box-left p-4 rounded-4 shadow-sm w-100" style="min-height: 40vh; height: auto;">
                            <div class="h4 fw-bold mb-3 text-center text-md-start" style="font-size: clamp(20px, 3vw, 28px);">
                                Perjalanan Spektakuler ke <?= $k2->title ?> bersama kami.
                            </div>
                            <p class="text-center text-md-start" style="font-size: clamp(16px, 2.5vw, 18px); margin-bottom: 6px;">Highlight Perjalanan:</p>
                            <ul style="font-size: clamp(16px, 2.5vw, 18px); margin-left: 20px;">
                                <?php
                                $hari = $this->M_global->getDataResult('hari', ['konten_id' => $k2->id]);
                                foreach ($hari as $h) :
                                ?>
                                    <li><?= $h->note ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-5 col-12 order-1 order-md-2 mb-4 mb-md-0">
                        <img
                            src="<?= base_url() ?>assets/img/<?= $k2->image ?>"
                            class="img-fluid rounded shadow mx-auto d-block w-100"
                            style="height: 40vh; min-height: 300px; object-fit: cover;" />
                    </div>
                <?php else: ?>
                    <div class="col-md-5 col-12 mb-4 mb-md-0">
                        <img
                            src="<?= base_url() ?>assets/img/<?= $k2->image ?>"
                            class="img-fluid rounded shadow mx-auto d-block w-100"
                            style="height: 40vh; min-height: 300px; object-fit: cover;" />
                    </div>

                    <div class="col-md-7 col-12">
                        <div class="highlight-box-right p-4 rounded-4 shadow-sm w-100" style="min-height: 40vh; height: auto;">
                            <div class="h4 fw-bold mb-3 text-center text-md-start" style="font-size: clamp(20px, 3vw, 28px);">
                                Perjalanan Spektakuler ke <?= $k2->title ?> bersama kami.
                            </div>
                            <p class="text-center text-md-start" style="font-size: clamp(16px, 2.5vw, 18px); margin-bottom: 6px;">Highlight Perjalanan:</p>
                            <ul style="font-size: clamp(16px, 2.5vw, 18px); margin-left: 20px;">
                                <?php
                                $hari = $this->M_global->getDataResult('hari', ['konten_id' => $k2->id]);
                                foreach ($hari as $h) :
                                ?>
                                    <li><?= $h->note ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php
            $i++;
        endforeach;
        ?>
    </div>
</section>

<!-- Fasilitas -->
<section id="layanan" class="py-5 ptb-20vh" style="background-color: #e7e7e7;">
    <div class="container">
        <h2 class="fw-bold mb-4 pb-5 text-center" style="font-size: clamp(28px, 4vw, 36px);">Fasilitas Yang Kami Miliki</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <img src="<?= base_url() ?>assets/img/img7.webp" class="img-fluid rounded mx-auto d-block w-100" style="height: 40vh; min-height: 250px; object-fit: cover;">
                <h6 class="fw-bold mt-3 pt-3 pb-3 text-center" style="font-size: clamp(18px, 3vw, 24px);">Tenaga Professional Tim Building (Opsional)</h6>
                <p class="text-center text-md-start" style="font-size: clamp(16px, 2.5vw, 20px);">Tingkatkan kekompakan dan semangat kebersamaan selama perjalanan dengan fasilitator tim building profesional. Aktivitas seru dan interaktif ini dirancang untuk mempererat hubungan antar peserta.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <img src="<?= base_url() ?>assets/img/img8.webp" class="img-fluid rounded mx-auto d-block w-100" style="height: 40vh; min-height: 250px; object-fit: cover;">
                <h6 class="fw-bold mt-3 pt-3 pb-3 text-center" style="font-size: clamp(18px, 3vw, 24px);">Dokumentasi Wisata Lengkap (Foto & Video UHD, 4K, Drone, GoPro, Story/Reels)</h6>
                <p class="text-center text-md-start" style="font-size: clamp(16px, 2.5vw, 20px);">Abadikan setiap momen tak terlupakan dengan layanan dokumentasi profesional menggunakan peralatan modern berkualitas tinggi. Tim dokumentasi menyediakan hasil dalam format portrait untuk keperluan story atau reels media sosial.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <img src="<?= base_url() ?>assets/img/img1.webp" class="img-fluid rounded mx-auto d-block w-100" style="height: 40vh; min-height: 250px; object-fit: cover;">
                <h6 class="fw-bold mt-3 pt-3 pb-3 text-center" style="font-size: clamp(18px, 3vw, 24px);">Pertunjukan / Entertainment Musik</h6>
                <p class="text-center text-md-start" style="font-size: clamp(16px, 2.5vw, 20px);">Nikmati hiburan musik yang meriah di sela-sela perjalanan wisata. Suasana hangat dan menyenangkan akan tercipta berkat penampilan musik live yang membuat malam kebersamaan semakin berkesan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Kontak -->
<section id="contact" class="py-5 ptb-20vh">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12 mb-5 mb-lg-0">
                <h2 class="fw-bold text-center text-md-start" style="font-size: clamp(32px, 5vw, 64px);">Mulai Perjalanan Anda Dengan Kami</h2>
                <p class="pt-5 pb-5 text-center text-md-start" style="font-size: clamp(16px, 2.5vw, 20px);">Hubungi Kontak Kami Dibawah Ini Untuk Memulai Perjalanan Spektakuler Anda</p>
                <div class="d-flex flex-column flex-md-row gap-3">
                    <div class="contact-box d-flex align-items-center p-3 rounded-3 w-100">
                        <i class="fa-solid fa-envelope fa-2x me-3"></i>
                        <div>
                            <div class="text-muted">Email</div>
                            <div class="fw-bold">myemail@gmail.com</div>
                        </div>
                    </div>
                    <div class="contact-box d-flex align-items-center p-3 rounded-3 w-100">
                        <i class="fa-solid fa-phone fa-2x me-3"></i>
                        <div>
                            <div class="text-muted">Nomor Telepon</div>
                            <div class="fw-bold">+62 877 6767 7678</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <img src="<?= base_url() ?>assets/img/img2.webp" class="img-fluid rounded mx-auto d-block w-100" style="height: 50vh; min-height: 300px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>


<script>
    function paketWisataClick(id) {
        window.location.href = '<?= site_url('App/konten/') ?>' + id;
    }
</script>