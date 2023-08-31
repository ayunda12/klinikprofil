<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Klinik Fokus Sehat</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('') }}assets/img/logoatas.png" rel="icon">
    <link href="{{ asset('') }}assets/img/logoatas.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('') }}assets/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Impact
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">fokusehat@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>(021) 4307321 </span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('') }}assets/img/logo.png" alt=""
                    style="width:50px !important; height:100px !important;">

            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#team">Dokter</a></li>
                    <li><a href="#portfolio">Galeri</a></li>
                    <li><a href="#recent-posts">Artikel</a></li>
                    <li><a href="#clients">Rekan</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Klinik Kesehatan <span>Fokus Sehat</span></h2>
                    <p>Klinik yang menyediakan berbagai layanan kesehatan berkualitas dan terstandarisasi mulai dari
                        layanan umum, tumbuh kembang anak, hingga pengobatan syaraf</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        {{-- <a href="#about" class="btn-get-started">Mulai</a> --}}
                        <a href="https://youtu.be/FRlq9Tye4SY?si=Lz2fkJ1CV0b5NUeD"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Tonton Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('') }}assets/img/bg2.png" alt=""
                        style="width:600px !important; height:500px !important;">
                </div>

            </div>
        </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"> <img src="{{ asset('') }}assets/img/fasilitas.png" alt=""
                                    style="width:80px !important; height:80px !important;"></div>
                            <h4 class="title"><a class="stretched-link">Fasilitas Lengkap</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"> <img src="{{ asset('') }}assets/img/pelayanan.png"
                                    alt="" style="width:80px !important; height:80px !important;"></div>
                            <h4 class="title"><a class="stretched-link">Pelayanan Cepat</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"> <img src="{{ asset('') }}assets/img/biaya.png" alt=""
                                    style="width:80px !important; height:80px !important;"></div>
                            <h4 class="title"><a class="stretched-link">Biaya Terjangkau</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><img src="{{ asset('') }}assets/img/24jm.png" alt=""
                                    style="width:80px !important; height:80px !important;"></div>
                            <h4 class="title"><a class="stretched-link">Layanan Support 24/7</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Tentang Kami</h2>
                    <p></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>Klinik fokus sehat</h3>
                        <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <p>Klinik fokus sehat adalah klinik umum daerah milik Pemerintah dan merupakan salah satu klinik
                            tipe B yang terletak di wilayah bali.
                            Klinik ini memberikan pelayanan di bidang kesehatan yang didukung oleh layanan dokter
                            spesialis dan sub spesialis, serta ditunjang dengan fasilitas medis yang memadai.
                            Selain itu klinik fokus sehat juga sebagai pusat rujukan untuk wilayah bali dan sekitarnya.
                        </p>

                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <div class="text-center">
                                <b>
                                    VISI
                                </b>
                            </div>
                            <p>Menjadi Rumah Sakit Terdepan di Denpasar Utara dengan memberikan Pelayanan secara
                                Holistik</p>
                            <div class="text-center">
                                <b> MISI</b>
                            </div>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Memberikan pelayanan prima, bermutu yang
                                    berbasis patient safety dan kepuasan pelanggan.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Melayani Kebahagiaanmu dengan sentuhan yang
                                    ramah dan nyaman.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Meningkatkan kinerja layaan yang
                                    profesional agar tercipta kesejahteraan karyawan.</li>
                            </ul>

                            {{-- 
                            <div class="position-relative mt-4">
                                <img src="{{ asset('') }}assets/assets/img/about-2.jpg"
                                    class="img-fluid rounded-4" alt="">
                                <a href="https://youtu.be/aiQX8_C6tGU?si=LAV9ZB-cfUwVy8ZO"
                                    class="glightbox play-btn"></a>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">

                    <div class="swiper-wrapper align-items-center">
                        @foreach ($rekan as $l)
                            <div class="swiper-slide">

                                {{-- <img src="{{ asset('') }}assets/assets/img/clients/client-1.png"
                                    class="img-fluid" alt=""> --}}
                                <img src="{{ $l->foto ? asset('assets/img/gambar/' . $l->foto) : asset('assets/img/thumbnail.png') }} "
                                    class="img-fluid" alt="">

                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Stats Counter Section ======= -->
        {{-- <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <img src="{{ asset('') }}assets/assets/img/stats-img.svg" alt=""
                            class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
                        </div><!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                        </div><!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Stats Counter Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="https://youtu.be/FRlq9Tye4SY?si=Lz2fkJ1CV0b5NUeD" class="glightbox play-btn"></a>
                <h3>Putar</h3>
                <p> Klinik dengan fasilitas lengkap, kelengkapan fasilitas berobat, pelayanan ambulan bagi pasien
                    rujukan, ruang inap untuk pasien rawat inap, praktik dokter, dan fasilitas lainnya.</p>
                {{-- <a class="cta-btn" href="#">Call To Action</a> --}}
            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Klinik Spesialis</h2>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($layanan as $l)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <div class="iconn">
                                    <img src="{{ $l->foto ? asset('assets/img/gambar/' . $l->foto) : asset('assets/img/thumbnail.png') }} "
                                        alt="" style="width:80px !important; height:80px !important;">
                                </div>
                                <h3>{{ $l->layanan }}</h3>
                                <p>{!! Str::limit($l->detail, 200) !!}</p>
                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#detail-modal{{ $l->id }}"
                                    class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                        {{-- modal detail --}}
                        <div class="modal fade" id="detail-modal{{ $l->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Detail Data
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="foto">
                                                    <img src="{{ $l->foto ? asset('assets/img/gambar/' . $l->foto) : asset('assets/img/thumbnail.png') }} "
                                                        alt="" width="100%" height="auto">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <span class="float-start fw-bold">Nama
                                                                    Layanan</span>
                                                                <div class="float-end">:</div>
                                                            </div>
                                                            <div class="col-md-7">
                                                                {{ $l->nama }}
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <span class="float-start fw-bold">Detail</span>
                                                                <div class="float-end">:</div>
                                                            </div>
                                                            <div class="col-md-7">
                                                                {{ $l->detail }}
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </section><!-- End Our Services Section -->



        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Tim Dokter</h2>
                    <p> Puji syukur berkat rahmat Tuhan Yang Maha Esa, Klinik Fokus Sehat bisa hadir dan berperan dalam
                        pelayanan kesehatan di tengah-tengah masyarakat. Kami berupaya memberikan perawatan medis awal
                        dan berkelanjutan kepada pasien dari segala kelompok usia dan ikut serta dalam pelaksanakan
                        program dan kegiatan prioritas yang diselenggarakan pemerintah dalam pencegahan dan pengendalian
                        penyakit menular dan tidak menular. Sebagai wujud kesungguhan memberikan pelayanan medis kepada
                        masyarakat, kami berkomitmen untuk selalu mengutamakan kualitas layanan. Sehingga mampu
                        memberikan layanan terbaik demi kepuasan masyarakat, saat ini hingga seterusnya. Hal ini sejalan
                        dengan motto klinik kami yaitu “Melayani sepenuh hati dan merawat dengan kasih”</p>
                </div>


                <div class="row gy-4">
                    @foreach ($dokter as $l)
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">

                            <div class="member">
                                {{-- <img src="{{ $l->foto ? asset('assets/img/gambar/' . $l->foto) : asset('assets/img/thumbnail.png') }} "
                                    alt=""width="50%"> --}}
                                <img src="{{ $l->foto ? asset('assets/img/gambar/' . $l->foto) : asset('assets/img/thumbnail.png') }}"
                                    alt="" style="width:200px !important; height:200px !important;">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <h4>{{ $l->nama }}</h4>
                                <span>Spesialis {{ $l->jenis }}</span>
                                <h6 style="font-size: 40px !important; font-style: bold !important">
                                    {!! $l->jadwal !!}</h6>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </section><!-- End Our Team Section -->

        <section id="portfolio" class="portfolio sections-bg">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-header">
                    <h2>Galeri</h2>

                </div>
                <div class="portfolio-isotope aos-init aos-animate" data-portfolio-filter="*"
                    data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="row gy-4 portfolio-container" style="position: relative; height: 6151.13px;">
                        @foreach ($galeri as $l)
                            <div class="col-xl-4 col-md-6 portfolio-item filter-app"
                                style="position: absolute; left: 0px; top: 0px;">
                                <div class="portfolio-wrap">
                                    <a href="{{ $l->foto ? asset('assets/img/gambar/' . $l->foto) : asset('assets/img/thumbnail.png') }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox"><img
                                            src="{{ $l->foto ? asset('assets/img/gambar/' . $l->foto) : asset('assets/img/thumbnail.png') }}"
                                            class="img-fluid" alt=""></a>
                                    {{-- <div class="portfolio-info">
                                        <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    </div> --}}
                                </div>
                            </div>
                        @endforeach

                        <!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section>

        <!-- ======= Pricing Section ======= -->
        {{-- <section id="pricing" class="pricing sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Pricing</h2>
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat
                        sunt id nobis omnis tiledo stran delop</p>
                </div>

                <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Free Plan</h3>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis
                                        hendrerit</span></li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item featured">
                            <h3>Business Plan</h3>
                            <div class="icon">
                                <i class="bi bi-airplane"></i>
                            </div>

                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Developer Plan</h3>
                            <div class="icon">
                                <i class="bi bi-send"></i>
                            </div>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>
        </section> --}}
        <!-- End Pricing Section -->



        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Artikel Kesehatan</h2>
                    <p>Simak artikel kesehatan terbaru dari kami</p>
                </div>

                <div class="row gy-4">
                    @foreach ($artikel as $l)
                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="{{ $l->foto ? asset('assets/img/gambar/' . $l->foto) : asset('assets/img/thumbnail.png') }}"
                                        alt="" class="img-fluid">
                                    {{-- <img
                                                src="{{ $l->foto ? asset('assets/img/gambar/' . $l->foto) : asset('assets/img/thumbnail.png') }} "
                                                alt=""width="50%"> --}}
                                </div>
                                <p class="post-category"> {{ \Carbon\Carbon::parse($l->created_at)->format('d-m-Y') }}
                                </p>

                                <h2 class="title">
                                    <a href="" data-bs-toggle="modal"
                                        data-bs-target="#detail-modall{{ $l->id }}">{{ $l->judul }}</a>
                                </h2>
                                <p>{!! Str::limit($l->keterangan, 200) !!}</p>

                            </article>
                        </div>
                        {{-- modal detail --}}
                        <div class="modal fade" id="detail-modall{{ $l->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Detail Data
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="foto">
                                                    <img src="{{ $l->foto ? asset('assets/img/gambar/' . $l->foto) : asset('assets/img/thumbnail.png') }} "
                                                        alt="" width="100%" height="auto">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <span class="float-start fw-bold">Tanggal</span>
                                                                <div class="float-end">:</div>
                                                            </div>
                                                            <div class="col-md-7">
                                                                {{ \Carbon\Carbon::parse($l->created_at)->format('d-m-Y') }}
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <span class="float-start fw-bold">Judul</span>
                                                                <div class="float-end">:</div>
                                                            </div>
                                                            <div class="col-md-7">
                                                                {{ $l->judul }}
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <span class="float-start fw-bold">Keterangan</span>
                                                                <div class="float-end">:</div>
                                                            </div>
                                                            <div class="col-md-7">
                                                                {!! $l->keterangan !!}
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div><!-- End recent posts list -->

            </div>
        </section><!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">



                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>lokasi:</h4>
                                    <p>jl Nangka Permai, denpasar utara</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>nurhsnah60@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Telepone:</h4>
                                    <p>082228839438</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Jam Buka:</h4>
                                    <p>Mon-Sat: 11AM - 23PM</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>

                    </div>

                    <div class="col-lg-8" style="padding:120px">



                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <h1 class="text-center">Kontak Kami</h1>
                            <p class="text-center">
                                Silahkan tinggalkan pesan anda, pada kontak yang tersedia atau klik tombol dibawah.
                            </p>

                            <div class="text-center"> <button type="submit"><i
                                        class="bi bi-whatsapp flex-shrink-0"></i> Klik
                                    Disini</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>Klinik Fokus Sehat</span>
                    </a>

                    <p>Klinik fokus sehat membangun sistem end-to-end terintegrasi untuk mengoptimalkan operasional
                        pelayanan dan memberikan akses kesehatan yang lebih baik kepada seluruh karyawan.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang kami</a></li>
                        <li><a href="#">Layanan</a></li>
                        <li><a href="#">Dokter</a></li>
                        <li><a href="#">Galeri</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="#">Kulit dan kelamin</a></li>
                        <li><a href="#">Penyakit dalam</a></li>
                        <li><a href="#">Paru dan pernapasan</a></li>
                        <li><a href="#">Kebidanan </a></li>
                        <li><a href="#">Mata dan gigi</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Kontak Kami</h4>
                    <p>
                        Jalan Seroja 36 <br>
                        Denpasar 80239<br>
                        Bali Indonesia<br><br>
                        <strong>Phone:</strong> (021) 4307321<br>
                        <strong>Email:</strong> fokusehat@gmail.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Fokus Sehat</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('') }}assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('') }}assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('') }}assets/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('') }}assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('') }}assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}assets/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}assets/assets/js/main.js"></script>

</body>

</html>
