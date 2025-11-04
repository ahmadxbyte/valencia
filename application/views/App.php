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
        <h2 class="fw-bold pb-5" style="font-size: 36px;">Destinasi Populer</h2>
        <div class="row g-4">
            <?php foreach ($konten as $k) : ?>
                <div class="col-md-4" style="cursor:pointer;" onclick="window.location.href='<?= site_url('App/konten/') . $k->id ?>'">
                    <img src="<?= base_url() ?>assets/img/<?= $k->image ?>" class="img-fluid rounded mx-auto d-block" style="height: 30vh; width: auto; min-width: 100%; object-fit: cover;">
                    <h6 class="fw-bold mt-3" style="font-size: 16px;"><?= strtoupper($k->title) ?></h6>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- Paket Wisata -->
<section id="paket" class="py-5 ptb-20vh" style="background-color: #e7e7e7;">
    <div class="container">
        <h2 class="fw-bold pb-5 text-center" style="font-size: 36px;">Paket Wisata</h2>
        <div class="row g-4 align-items-stretch">
            <?php
            $i = 1;
            foreach ($konten as $k) :
            ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm rounded-4 overflow-hidden">
                        <?php if ($i % 2 == 0): // jika genap, tampilkan image dulu 
                        ?>
                            <img src="<?= base_url() ?>assets/img/<?= $k->image ?>"
                                class="img-fluid mx-auto d-block"
                                style="height: 40vh; width: auto; max-width: 100%; object-fit: cover;">

                            <div class="card-body bg-warning-subtle bg-primary p-4">
                                <h5 class="fw-bold" style="font-size: 24px;">PAKET <?= $k->title ?></h5>
                                <p class="mb-0" style="font-size: 20px;">
                                    <?= $k->note ?>
                                </p>
                            </div>

                        <?php else: // jika ganjil, teks dulu 
                        ?>
                            <div class="card-body bg-warning-subtle bg-primary p-4">
                                <h5 class="fw-bold" style="font-size: 24px;">PAKET <?= $k->title ?></h5>
                                <p class="mb-0" style="font-size: 20px;">
                                    <?= $k->note ?>
                                </p>
                            </div>

                            <img src="<?= base_url() ?>assets/img/<?= $k->image ?>"
                                class="img-fluid mx-auto d-block"
                                style="height: 40vh; width: auto; max-width: 100%; object-fit: cover;">
                        <?php endif; ?>
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
        <h2 class="fw-bold mb-4 text-center pb-5">Mulai Perjalanan Spektakuler Anda dari sini</h2>

        <?php
        $i = 1;
        foreach ($konten2 as $k2) :
        ?>
            <div class="row align-items-center mb-5 flex-column-reverse flex-md-row">
                <?php if ($i % 2 == 0): // Jika genap, gambar di kanan 
                ?>
                    <div class="col-md-7 col-12 mb-4 mb-md-0">
                        <div class="highlight-box-left p-4 rounded-4 shadow-sm" style="height: 50vh;">
                            <div class="h4 fw-bold mb-3" style="font-size: 28px;">
                                Perjalanan Spektakuler ke <?= $k2->title ?> bersama kami.
                            </div>
                            <p style="font-size: 18px; margin-bottom: 6px;">Highlight Perjalanan:</p>
                            <ul style="font-size: 18px; margin-left: 20px;">
                                <?php
                                $hari = $this->M_global->getDataResult('hari', ['konten_id' => $k2->id]);
                                foreach ($hari as $h) :
                                ?>
                                    <li><?= $h->note ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-5 col-12">
                        <img
                            src="<?= base_url() ?>assets/img/<?= $k2->image ?>"
                            class="img-fluid rounded shadow mx-auto d-block"
                            style="height: 50vh; width: 100%; object-fit: cover;" />
                    </div>
                <?php else: ?>
                    <div class="col-md-5 col-12 mt-4 mt-md-0">
                        <img
                            src="<?= base_url() ?>assets/img/<?= $k2->image ?>"
                            class="img-fluid rounded shadow mx-auto d-block"
                            style="height: 50vh; width: 100%; object-fit: cover;" />
                    </div>

                    <div class="col-md-7 col-12">
                        <div class="highlight-box-right p-4 rounded-4 shadow-sm" style="height: 50vh;">
                            <div class="h4 fw-bold mb-3" style="font-size: 28px;">
                                Perjalanan Spektakuler ke <?= $k2->title ?> bersama kami.
                            </div>
                            <p style="font-size: 18px; margin-bottom: 6px;">Highlight Perjalanan:</p>
                            <ul style="font-size: 18px; margin-left: 20px;">
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
        <h2 class="fw-bold mb-4 pb-5 text-center" style="font-size: 36px;">Fasilitas Yang Kami Miliki</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <img src="<?= base_url() ?>assets/img/img7.webp" class="img-fluid rounded mx-auto d-block" style="height: 50vh; width: auto; min-width: 100%; object-fit: cover;">
                <h6 class="fw-bold mt-3 pt-3 pb-3" style="font-size: 24px;">Tenaga Professional Tim Builing (Opsional)</h6>
                <p style="font-size: 20px;">Tingkatkan kekompakan dan semangat kebersamaan selama perjalanan dengan fasilitator tim building profesional. Aktivitas
                    seru dan interaktif ini dirancang untuk mempererat hubungan antar peserta melalui berbagai permainan dan kegiatan
                    kolaboratif yang menyenangkan.</p>
            </div>
            <div class="col-md-4">
                <img src="<?= base_url() ?>assets/img/img8.webp" class="img-fluid rounded mx-auto d-block" style="height: 50vh; width: auto; min-width: 100%; object-fit: cover;">
                <h6 class="fw-bold mt-3 pt-3 pb-3" style="font-size: 24px;">Dokumentasi Wisata Lengkap (Foto & Video UHD, 4K, Drone, GoPro, Story/Reels)</h6>
                <p style="font-size: 20px;">Abadikan setiap momen tak terlupakan dengan layanan dokumentasi profesional menggunakan peralatan modern berkualitas
                    tinggi. Mulai dari foto UHD, video cinematic 4K, hingga pengambilan gambar dengan drone dan GoPro. Tim dokumentasi juga
                    menyediakan hasil dalam format portrait untuk keperluan story atau reels media sosial, memastikan kenangan liburanmu
                    terlihat spektakuler dari setiap sudut.</p>
            </div>
            <div class="col-md-4">
                <img src="<?= base_url() ?>assets/img/img1.webp" class="img-fluid rounded mx-auto d-block" style="height: 50vh; width: auto; min-width: 100%; object-fit: cover;">
                <h6 class="fw-bold mt-3 pt-3 pb-3" style="font-size: 24px;">Pertunjukan / Entertainment Musik</h6>
                <p style="font-size: 20px;">Nikmati hiburan musik yang meriah di sela-sela perjalanan wisata. Suasana hangat dan menyenangkan akan tercipta berkat
                    penampilan musik live yang membuat malam kebersamaan semakin berkesan dan penuh semangat.</p>
            </div>
        </div>
    </div>
</section>

<!-- Kontak -->
<section id="contact" class="py-5 ptb-20vh">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 m-auto">
                <h2 class="fw-bold" style="font-size: 64px;">Mulai Perjalanan Anda Dengan Kami</h2>
                <p class="pt-5 pb-5" style="font-size: 20px;">Hubungi Kontak Kami Dibawah Ini Untuk Memulai Perjalanan Spektakuler Anda</p>
                <p>
                <div class="contact-box d-inline-flex align-items-center p-3 rounded-3">
                    <i class="fa-solid fa-envelope fa-2x me-3"></i>
                    <div>
                        <div class="text-muted">Email</div>
                        <div class="fw-bold">myemail@gmail.com</div>
                    </div>
                </div>
                </p>
                <p>
                <div class="contact-box d-inline-flex align-items-center p-3 rounded-3">
                    <i class="fa-solid fa-phone fa-2x me-3"></i>
                    <div>
                        <div class="text-muted">Nomor Telepon</div>
                        <div class="fw-bold">+62 877 6767 7678</div>
                    </div>
                </div>
                </p>
            </div>
            <div class="col-md-6 col-12 m-auto">
                <img src="<?= base_url() ?>assets/img/img2.webp" class="img-fluid rounded mx-auto d-block" style="height: 50vh; width: auto; min-width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>