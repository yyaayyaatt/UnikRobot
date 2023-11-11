<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Groovin Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <script type="text/javascript">
        function kirim(name, email, telp, message, addrs) {
            window.open("https://wa.me/+62816693347?text=Mohon Maaf Pak, Saya " + name + ", Email: " + email + ", No.Telepon: " + telp + ", Alamat: " + addrs + ", " + message);
            window.location.href = "index.php";
        }
    </script>
    <!-- =======================================================
  * Template Name: Groovin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <?php
    $name = isset($_GET['name']);
    $email = isset($_GET['email']);
    $telp = isset($_GET['telp']);
    $message = isset($_GET['message']);
    $addrs = isset($_GET['addrs']);

    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['telp']) && isset($_GET['message']) && isset($_GET['addrs'])) {
        echo '<script type="text/javascript">
        kirim("' . $_GET['name'] . '","' . $_GET['email'] . '","' . $_GET['telp'] . '","' . $_GET['message'] . '","' . $_GET['addrs'] . '");
</script>';
    }
    ?>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">UNIK ROBOT</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#why-us">Kerjasama</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
                    <li><a class="nav-link scrollto" href="#contact">Informasi</a></li>
                    <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Woodcraft</h2>
                                <p class="animate__animated animate__fadeInUp">Kerajinan kayu mengacu pada proyek pengerjaan kayu dan
                                    barang-barang yang terbuat dari kayu. Ini mencakup berbagai macam barang buatan tangan seperti
                                    furnitur, lemari, rak, barang dekoratif, mainan, ukiran, dan bahkan patung kayu. Kerajinan kayu dapat
                                    dibuat dengan menggunakan berbagai jenis kayu, mulai dari kayu lunak seperti pinus dan cedar hingga
                                    kayu keras seperti oak dan walnut.</p>
                                <div>
                                    <a href="woodcraft.html" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Aeromodelling</h2>
                                <p class="animate__animated animate__fadeInUp"><B>Aeromodelling</B> adalah suatu kegiatan yang
                                    mempergunakan sarana miniatur (model) pesawat terbang untuk tujuan rekreasi, edukasi, olahraga dan
                                    bisnis. Kegiatan ini umumnya digemari oleh peminat ilmu pengetahuan dan teknologi secara perorangan
                                    ataupun yang tergabung dalam organisasi sosial kemasyarakatan, yang digunakan untuk menyebarluaskan
                                    minat kedirgantaraan di bidang aeromodelling seperti Pramuka melalui kegiatan SAKA (Satuan Karya)
                                    Dirgantara, Karang Taruna, UKM (Unit kegiatan Mahasiswa) di kampus-kampus serta
                                    perkumpulan-perkumpulan olahraga kedirgantaraan.</p>
                                <div>
                                    <a href="aeromodelling.html" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Kenapa Harus Belajar Robotik</h2>
                                <p class="animate__animated animate__fadeInUp">Jelajahi dunia Robotika yang menakjubkan dan pengaruhnya
                                    terhadap teknologi, masyarakat, dan industri. Temukan bagaimana bidang mutakhir ini membentuk kembali
                                    masa depan kita. Perjalanan Robotika adalah salah satu inovasi, kolaborasi, dan eksplorasi.
                                    Bersama-sama, manusia dan robot memiliki kekuatan untuk membuka batas baru, mendorong batas
                                    pengetahuan, dan menciptakan dunia yang lebih baik untuk generasi mendatang.</p>
                                <div>
                                    <a href="robotik.html" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h4>LEMBAGA PENDIDIKAN ROBOTIKA "UNIK ROBOT"</h4>
                            <p>
                                Perkenankan kami memperkenalkan diri, kami adalah Lembaga Pendidikan Robotika "UNIK ROBOT", Purwokerto.
                            </p>
                            <div class="row">
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-receipt"></i>
                                    <h4>ROBOTIKA</h4>
                                    <p>Membuat dan mempelajari rancang bangun, mekatronika / mekanik- elektronika, dan robot sederhana non
                                        programming.</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>AEROMODELLING</h4>
                                    <p>Aeromodelling adalah olah raga dirgantara dengan menggunakan pesawat model. Materi dimulai dari
                                        planning, building sampai flying pesawat model, baik bermesin maupun non mesin.</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-images"></i>
                                    <h4>CODING</h4>
                                    <p>Scratch adalah sebuah bahasa pemrograman visual untuk lingkungan pembelajaran yang memungkinkan
                                        pemula, untuk belajar membuat program tanpa harus memikirkan salah-benar penulisan sintaksis. Siswa
                                        akan mempelajari scratch untuk membuat aplikasi sederhana, permainan, animasi, atau menggerakkan
                                        robot.</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-shield"></i>
                                    <h4>WOOD CRAFTS</h4>
                                    <p>Ekstra kurikuler pembuatan berbagai kerajinan, pajangan, hiasan atau mainan dari kayu dan bahan
                                        lainya. Hasil karya setiap pertemuan bisa dibawa pulang siswa.</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Peserta merasa senang</strong> Kepuasan peserta</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Projects</strong> Projek selesai</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="534" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Jumlah Peserta</strong> Peserta yang pernah bergabung</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="230" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Lulusan</strong> Lulusan yang bekerja</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Biaya dan Peserta</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
                        in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-3 icon-box">
                        <div class="icon"><i class="bi bi-cpu"></i></div>
                        <h4 class="title"><a href="">Robotika</a></h4>
                        <p class="description">Apabila terjalin kerjasama Ekstra kurikuler robotika, biaya pendidikan Rp. 90.000,-
                            per anak, per bulan. Satu minggu satu kali pertemuan.</p>
                    </div>
                    <div class="col-lg-3 col-md-3 icon-box">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Coding</a></h4>
                        <p class="description">Komputer yang digunakan siswa disediakan oleh pihak sekolah atau siswa. Biaya sekali
                            datang untuk pelatih / pengajar, Rp. 150.000,-.</p>
                    </div>
                    <div class="col-lg-3 col-md-3 icon-box">
                        <div class="icon"><i class="bi bi-columns-gap"></i></div>
                        <h4 class="title"><a href="">Wood Crafts</a></h4>
                        <p class="description">Apabila terjalin kerjasama Ekstra kurikuler Wood Crafts, biaya pendidikan Rp.
                            80.000,- per anak, per bulan. Satu minggu satu kali pertemuan. </p>
                    </div>
                    <div class="col-lg-3 col-md-3 icon-box">
                        <div class="icon"><i class="bi bi-controller"></i></div>
                        <h4 class="title"><a href="">Aeromodelling</a></h4>
                        <p class="description">Biaya pendidikan perlu didiskusikan lebih lanjut dengan beberapa pertimbangan.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="section-title">
                    <h2>Kerjasama</h2>
                    <p>Apabila terjalin kerjasama, berikut ini beberapa gambaran pelaksanaan kerja samanya.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box">
                            <span>01</span>
                            <h4>Perekrutan</h4>
                            <p>Pihak sekolah melakukan penawaran dan perekrutan peserta Ekstrakurikuler dari kalangan siswanya, dari
                                kelas 1-5.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box">
                            <span>02</span>
                            <h4>Minimal Peserta</h4>
                            <p>Dengan berbagai pertimbangan, minimal peserta 10 siswa, agar Ekstrakurikuler ini bisa berlangsung.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box">
                            <span>03</span>
                            <h4>Tempat dan Sarana</h4>
                            <p>Pihak sekolah menyediakan tempat pelaksanaan pelatihan / kelas, pihak Unik Robot menyediakan trainer,
                                tool / sarana prasarana pembelajaran, materi dan kurikulumnya.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Portofolio</h2>
                    <p>Berdiri sejak tahun 2009, dan telah bekerja sama mengadakan ekstra kurikuler robotika dengan beberapa
                        sekolah tingat SD, SMP, SMA di Purwokerto, dan Purbalingga. Animo siswa, sekolah dan orangtua siswa sangat
                        tinggi terhadap robotika. Mereka menyadari dan memahami pentingnya mempelajari tehnologi termasuk robotika.
                        Hal tersebut sesuai dengan kalimat pengusaha dan tokoh tehnologi <b>Bill Gate :</b><i>"Di masa mendatang
                            manusia akan tumbuh dan hidup bersama robot."</i> </p>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Hallo selamat datang di Lembaga Pendidikan Robotika "Unik Robot", perkenalkan kami team yang selalu
                        bertanggung jawab dan solid serta teman belajar yang menyenangkan.</p>
                </div>

                <div class="row">

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="member">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Hari Wahyudi Sukarno</h4>
                                    <span>Directur</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Jatmiko</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="assets/img/team/team-4.png" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Ririn</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="assets/img/team/team-4.png" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <h2>Biaya Pelatihan</h2>
                    <p>Berikut ini adalah biaya pelatihan dari setiap bidang yang tersedia di lembaga kami.</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <h3>Robotik</h3>
                            <h4><sup>Rp</sup>90.000<span> / bulan</span></h4>
                            <ul>
                                <li>1x Pertemuan seminggu</li>
                                <!-- <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> -->
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://wa.me/+62816693347?text=Halo%20Admin%2C%20saya%20ingin%20info%20tentang%20pendaftaran%20Pelatihan%20Robotik%20di%20Unik%20Robot." class="btn-buy">Chat</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="box recommended">
                            <h3>Coding/Pemrograman</h3>
                            <h4><sup>Rp</sup>150.000<span> / pertemuan</span></h4>
                            <ul>
                                <li>Menggunakan komputer pribadi</li>
                                <!-- <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> -->
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://wa.me/+62816693347?text=Halo%20Admin%2C%20saya%20ingin%20info%20tentang%20pendaftaran%20Pelatihan%20Coding%20di%20Unik%20Robot." class="btn-buy">Chat</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box">
                            <h3>Wood Crafts</h3>
                            <h4><sup>Rp</sup>80.000<span> / bulan</span></h4>
                            <ul>
                                <li>1x Pertemuan seminggu</li>
                                <li>1 buah karya sehari & dibawa pulang</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://wa.me/+62816693347?text=Halo%20Admin%2C%20saya%20ingin%20info%20tentang%20pendaftaran%20Pelatihan%20Wood%20Crafts%20di%20Unik%20Robot." class="btn-buy">Chat</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box">
                            <h3>AEROMODELLING</h3>
                            <h5>Diskusi lebih lanjut<span> tentang</span></h5>
                            <ul>
                                <li>Jumlah peserta didik</li>
                                <li>Bobot materi Ajar</li>
                                <li>Jumlah pesawat yang dibuat</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://wa.me/+62816693347?text=Halo%20Admin%2C%20saya%20ingin%20info%20tentang%20pendaftaran%20Pelatihan%20Aeromodelling%20di%20Unik%20Robot." class="btn-buy">Chat</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <!-- <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section> -->
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak</h2>
                    <p>Perkenankan kami memperkenalkan diri, kami adalah Lembaga Pendidikan Robotika ”UNIK ROBOT”, Purwokerto.
                        Silahkan hubungi kami jika ada yang ingin ditanyakan</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <address>Jln. Arjuna B2 No 8 Perum Griya Tegalsari
                                <br>Desa Dukuh waluh Kec. Kembaran
                                <br>Kab. Banyumas 53182.
                            </address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">+62 8166 93347</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:uniqrobo@gmail.com">uniqrobo@gmail.com</a></p>
                        </div>
                    </div>

                </div>

                <section id="contact" class="contact">
                    <div class="container">

                        <div class="section-title">
                            <h2>Mendaftar Sebagai Pengajar</h2>
                            <p>Jika anda berminat mengajar di Unik Robot silahkan kirimkan biodata melalui form dibawah ini, jika kami sedang membutuhkan pengajar maka akan kami tindaklanjuti.</p>
                        </div>

                        <div class="form">
                            <form method="get" action="index.php">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="tel" class="form-control" name="telp" id="telp" placeholder="Telepon" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="addrs" id="addrs" rows="5" placeholder="Alamat Lengkap" required></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Pesan" required></textarea>
                                </div><br>
                                <div class="btn-wrap">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success"><i class="bi bi-send"></i> Kirim Permintaan</button>

                                    </div>
                                </div>
                        </div>
                    </div>
            </div>
            </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="footer-info">
                            <h3>Unik Robot</h3>
                            <p>
                                Jln. Arjuna B2 No 8 Perum Griya Tegalsari <br>
                                Desa Dukuh waluh Kec. Kembaran<br>
                                Kab. Banyumas 53182<br><br>
                                <strong>Phone:</strong> +62 8166 93347<br>
                                <strong>Email:</strong> uniqrobo@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/unikrobot/" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Menu</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#services">Layanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#team">Team</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#why-us">Kerjasama</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Layanan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Robotik</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Coding/Pemrograman</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Wood Crafts</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Aeromodelling</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> -->

                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Groovin</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/groovin-free-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <a target="_blank" style="position:fixed;bottom:8px;right:80px;z-index:9999;margin:0;padding:3px 3px;" href="https://wa.me/+62816693347?text=Halo%20Admin%2C%20saya%20ingin%20info%20tentang%20pendidikan%20di%20UNIK%20ROBOT." target="_blank"><img src="assets/img/whatsapp.png" width="60" height="60"></a>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>