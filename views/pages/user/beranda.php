<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">



            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Cari Informasi Status Kendaraan Anda</h2>
                            <form class="d-flex custom-search" action="search" method="GET">
                                <input class="form-control me-2" type="text" name="nik"
                                    placeholder="Masukan nomor plat kendaraan anda" aria-label="Search" required>
                                <button class="btn text-light me-2" type="submit"
                                    style="background-color: #042165;">Cari</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-2 d-flex align-items-center justify-content-center about-img">
                <img src="<?= $base_url; ?>asset_user/img/pencarian.png" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
            <div class="text-center">
                <h6>Cari informasi status kendaraan anda</h6>
                <p>Untuk mengecek seberapa jauh proses pengerjaan, Anda dapat memulai dengan Memasukkan nomor
                    kendaraan anda.</p>
            </div>
        </div>
    </section>

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p>Hubungi kami untuk lebih lanjut</p>
            </div>

            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Lokasi:</h4>
                                    <p>
                                        <?= $row_profil->alamat; ?>
                                    </p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>
                                        <?= $row_profil->email; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="info">
                                <iframe src="<?= $row_profil->maps; ?>" width="100%" height="450" style="border:0;"
                                    allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->