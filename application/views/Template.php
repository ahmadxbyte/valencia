<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valencia Mandiri Tour & Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">VALENCIA TOUR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="<?= site_url('App') ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="<?= site_url('Destinasi') ?>">Destinasi</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#paket">Paket Wisata</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="<?= site_url('Layanan') ?>">Layanan & Jasa</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $content ?>

    <!-- Footer -->
    <footer class="bg-primary py-5 ptb-10vh">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-2 col-6 mb-3 text-start">
                    <h6 class="fw-bold">HOME</h6>
                </div>
                <div class="col-md-2 col-6 mb-3 text-start">
                    <h6 class="fw-bold">DESTINASI</h6>
                    <div class="row pt-3">
                        <div class="col-12">
                            <p>Paket Wisata Bali</p>
                            <p>Paket Wisata Bromo</p>
                            <p>Paket Wisata Karimun</p>
                            <p>Paket Wisata Bandung</p>
                            <p>Paket Wisata Pacitan</p>
                            <p>Paket Wisata Banyuwangi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-3 text-start">
                    <h6 class="fw-bold">LAYANAN & JASA</h6>
                    <div class="row pt-3">
                        <div class="col-12">
                            <p>Sewa Transportasi Wisata</p>
                            <p>Paket Wisata Custom</p>
                            <p>Open Trip & Private Trip</p>
                            <p>Dokumentasi Perjalanan</p>
                            <p>Event & Gathering Organizer</p>
                            <p>Camping & Adventure Trip</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-3 text-start">
                    <h6 class="fw-bold">CONTACT US</h6>
                    <div class="contact-box d-inline-flex align-items-center p-3 rounded-3">
                        <i class="fa-solid fa-envelope fa-2x me-3"></i>
                        <div>
                            <div class="text-muted">Email</div>
                            <div class="fw-bold">myemail@gmail.com</div>
                        </div>
                    </div>
                    <div class="contact-box d-inline-flex align-items-center p-3 rounded-3">
                        <i class="fa-solid fa-phone fa-2x me-3"></i>
                        <div>
                            <div class="text-muted">Nomor Telepon</div>
                            <div class="fw-bold">+62 877 6767 7678</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-3 text-start">
                    <h6 class="fw-bold">SOCIAL</h6>
                    <div class="row pt-3">
                        <div class="col-12">
                            <a href="https://facebook.com" target="_blank" class="text-decoration-none text-dark">
                                <i class="fab fa-facebook fa-2x me-3"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank" class="text-decoration-none text-dark">
                                <i class="fab fa-instagram fa-2x me-3"></i>
                            </a>
                            <a href="https://youtube.com" target="_blank" class="text-decoration-none text-dark">
                                <i class="fab fa-youtube fa-2x me-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="pt-5">
            <div class="text-center small">© 2025 Valencia Tour | All Rights Reserved</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
</body>

</html>