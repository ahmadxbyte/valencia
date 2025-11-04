<section>
    <div class="row">
        <?php foreach ($konten as $k) : ?>
            <div class="col-md-3 col-3 p-0 position-relative">
                <img src="<?= base_url('assets/img/') . $k->image ?>" class="w-100 hover-bright" style="aspect-ratio:1/1; object-fit:cover;">
            </div>
        <?php endforeach ?>
    </div>
</section>

<section id="title" class="py-5 pt-10vh">
    <div class="container text-center">
        <h1 class="fw-bold">JELAJAHI WISATA & DESTINASI TERBAIK KAMI</h1>
    </div>
</section>

<section id="destinasi" class="py-5 ptb-10vh">
    <div class="container">
        <div class="card">
            <div class="card-body" style="background-color: #e7e7e7;">
                <div class="row">
                    <?php foreach ($konten as $k) : ?>
                        <div class="col-md-3 col-12">
                            <div class="card h-100 shadow-sm rounded-4 overflow-hidden">
                                <img src="<?= base_url() ?>assets/img/<?= $k->image ?>"
                                    class="img-fluid mx-auto d-block"
                                    style="height: 40vh; width: auto; max-width: 100%; object-fit: cover;">

                                <div class="card-body bg-warning-subtle bg-primary p-4">
                                    <h5 class="fw-bold" style="font-size: 16px;">PAKET <?= $k->title ?></h5>
                                    <p class="mb-0" style="font-size: 14px;">
                                        <?= substr($k->note, 0, 200) . (strlen($k->note) > 200 ? '...' : '') ?>
                                    </p>
                                </div>

                                <div class="card-footer bg-primary">
                                    <span type="button" onclick="window.location.href='<?= site_url('App/konten/') . $k->id ?>'"><i>PELAJARI LEBIH LANJUT</i></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kontak -->
<section id="contact" class="py-5 ptb-20vh" style="background-color: #e7e7e7;">
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