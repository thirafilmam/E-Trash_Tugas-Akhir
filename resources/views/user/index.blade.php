<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-TRASH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('resources/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('resources/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('resources/css/style.css') }}" rel="stylesheet">
    <!-- Link ke library WOW.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">E-Trash</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#home" class="nav-item nav-link active" data-bs-target="#home">Home</a>
                <div class="nav-item dropdown">
                    <a href="#layanan" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="pick.html" class="dropdown-item">Jemput Sampah</a>
                        <a href="report.html" class="dropdown-item">Laporkan Tumpukan Sampah</a>
                        <a href="sell.html" class="dropdown-item">Jual Sampah</a>
                    </div>
                </div>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-1.jpeg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start align-items-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-3 animated slideInDown text-start">E-TRASH</h1>
                                    <h2 class="display-4 text-white mb-3 animated slideInDown text-start">Bank Sampah
                                        Online</h2>
                                    <a class="btn btn-primary py-3 px-4" href="" style="float: left;">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container wow fadeInUp" data-wow-delay="0.5s"
        style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; background-color: #cef6cf; padding: 20px;">

        <!-- Introduction SDGS -->
        <div style="margin-right: 20px; text-align: left; color: #000000;">
            <h4>
                <span>What We</span><br>
                <span>Do</span>
            </h4>
            <p style="font-size: 1.5rem;">
                <span>SUSTAINABLE</span><br>
                <span>DEVELOPMENT</span><br>
                <span>GOALS</span>
            </p>
        </div>

        <!-- Baris 2 (Atas) -->
        <div style="margin-right: 20px;">
            <div style="margin-bottom: 10px; display: flex; align-items: center;">
                <img src="img/icon/icon-2.png" alt="Icon" style="width: 70px; height: 70px; margin-right: 10px;">
                <div>
                    <h4>SDGs 12 : Konsumsi dan Produksi <br>
                        yang Berkelanjutan</h4>
                    <p>Mengajak untuk merubah gaya <br>
                        hidup menjadi berkelanjutan.</p>
                </div>
            </div>

            <div style="margin-bottom: 10px; display: flex; align-items: center;">
                <img src="img/icon/icon-1.png" alt="Icon" style="width: 70px; height: 70px; margin-right: 10px;">
                <div>
                    <h4>Edukasi Masyarakat</h4>
                    <p>Memberikan edukasi komprehensif kepada <br>
                        masyarakat tentang pentingnya mengelola <br>
                        dan mendaur ulang sampah</p>
                </div>
            </div>
        </div>

        <!-- Baris 2 (Bawah) -->
        <div style="margin-right: 20px;">
            <div style="margin-bottom: 20px; display: flex; align-items: center;">
                <img src="img/icon/icon-7.png" alt="Icon" style="width: 70px; height: 70px; margin-right: 10px;">
                <div>
                    <h4>SDGs 13 : Tindakan Terhadap <br>
                        Perubahan Iklim</h4>
                    <p>Tindakan Terhadap Perubahan Iklim melalui praktik <br>
                        ramah lingkungan dan pembinaan kesadaran terhadap <br>
                        dampak lingkungan.</p>
                </div>
            </div>

            <div style="margin-bottom: 20px; display: flex; align-items: center;">
                <img src="img/icon/icon-4.png" alt="Icon" style="width: 70px; height: 70px; margin-right: 10px;">
                <div>
                    <h4>Pengembangan Komunitas</h4>
                    <p>Memperkuat komunitas dengan membangun jaringan untuk <br>
                        terlibat aktif dalam gerakan keberlanjutan.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction SDGS END-->



    <!-- about section -->
    <section class="about_section layout_padding mt-5 mb-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="img/about.jpg" alt=""
                                style="width: 610px; height: 400px; margin-right: 10px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="detail-box">
                        <div class="heading_container ">
                            <h1>
                                Sampah Yang Merusak <br>
                                Ekosistem
                            </h1>
                        </div>
                        <p>
                            Tumpukan sampah yang mencemari lingkungan, terutama di wilayah perairan,
                            telah menjadi ancaman serius bagi kehidupan hewan laut yang rapuh. Plastik, logam,
                            dan bahan kimia beracun menumpuk di lautan, menciptakan lingkungan yang beracun dan
                            mematikan bagi biota laut. Hewan-hewan seperti penyu, ikan, dan burung laut dapat
                            tersangkut
                            atau memakan sampah ini, menyebabkan luka serius atau bahkan kematian. Selain itu,
                            proses
                            dekomposisi
                            sampah juga dapat menghasilkan zat beracun yang mencemari habitat alami hewan laut.
                            Situasi ini membutuhkan tindakan segera dan berkelanjutan untuk membersihkan dan
                            melindungi
                            lingkungan laut demi keseimbangan ekosistem global.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Produksi sampah merupakan sesuatu yang tidak bisa dihindari. Mengurangi sampah
                        sendiri bukanlah perkara yang mudah. Hal yang paling sederhana, mudah, dan penting yang dapat
                        kita lakukan setelah menghasilkan sampah adalah memisahkan sampah organik dan sampah anorganik.
                    </p>
                    <a class="btn btn-primary py-3 px-4" href="">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="text-center rounded py-5 px-4"
                                        style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                            style="width: 90px; height: 90px;">
                                            <i class="fa fa-check fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">100% Satisfaction</h4>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="text-center rounded py-5 px-4"
                                        style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                            style="width: 90px; height: 90px;">
                                            <i class="fa fa-users fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Dedicated Team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                    style="width: 90px; height: 90px;">
                                    <i class="fa fa-tools fa-3x text-primary"></i>
                                </div>
                                <h4 class="mb-0">Modern Equipment</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">380</h1>
                    <span class="fs-5 fw-semi-bold text-light">Happy Clients</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">150.870</h1>
                    <span class="fs-5 fw-semi-bold text-light">Sampah Terdaur Ulang (KG)</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">38</h1>
                    <span class="fs-5 fw-semi-bold text-light">Dedicated Staff</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">190</h1>
                    <span class="fs-5 fw-semi-bold text-light">Awards Achieved</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->



    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Layanan Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Jemput Sampah</h4>
                            <p class="mb-4">Dengan e trash, kami bawa kemudahan ke pintu Anda.
                                Nikmati pelayanan jemput sampah yang andal, hemat waktu, dan
                                ramah lingkungan. Jadwalkan pengambilan sampah Anda sekarang!</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/icon-6.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Lapor Tumpukan Sampah</h4>
                            <p class="mb-4">Laporkan tumpukan sampah di sekitar Anda dan saksikan perubahan
                                positif bersama e trash. Setiap laporan Anda adalah langkah menuju lingkungan
                                yang lebih bersih dan berkelanjutan. Mari bergabung dalam upaya kita bersama!</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/icon-5.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Jual Sampah</h4>
                            <p class="mb-4">Sampah Anda adalah potensi yang belum terungkap.
                                Dengan e trash, Anda dapat mengubahnya menjadi nilai. Jual sampah Anda dengan
                                mudah dan tingkatkan kesadaran akan pentingnya daur ulang. Mulai sekarang,
                                jadikan setiap sampah bernilai!</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Quote Start -->
    <div class="container-fluid quote my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-5 text-center mb-5">Formulir Pendaftaran</h1>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="gname"
                                        placeholder="Gurdian Name">
                                    <label for="gname">Nama</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" id="gmail"
                                        placeholder="Gurdian Email">
                                    <label for="gmail">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="cname"
                                        placeholder="Child Name">
                                    <label for="cname">No Telepon</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="cage"
                                        placeholder="Child Age">
                                    <label for="cage">Tipe Layanan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-light border-0" placeholder="Leave a message here" id="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Keterangan</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Project Kita</p>
                <h1 class="display-5 mb-5">Beberapa Project Keren Kita</h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Complete Projects</li>
                        <li class="mx-2" data-filter=".second">Ongoing Projects</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-1.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Jemput Sampah</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-1.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-2.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Lapor Tumpukan Sampah</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-2.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-3.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Jual Sampah</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-3.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Team</p>
                <h1 class="display-5 mb-5">Dedicated & Experienced Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-1.jpeg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Rastama Hanin Berlyan</h4>
                            <p class="text-primary">Supervisor</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-2.png" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Tegar Putra Pradana</h4>
                            <p class="text-primary">Supervisor</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Thirafi Ilmam</h4>
                            <p class="text-primary">Supervisor</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>JL.Semarang 5, Malang, IDN</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 84456782398</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Services</h4>
                    <a class="btn btn-link" href="">Jemput Sampah</a>
                    <a class="btn btn-link" href="">Lapor Tumpukkan Sampah</a>
                    <a class="btn btn-link" href="">Jual Sampah</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Ingin Menggunakan Jasa Kami?</h4>
                    <p>Silahkan Membuat Akun Terlebih Dahulu</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-light border-light w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">E-Trash</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
