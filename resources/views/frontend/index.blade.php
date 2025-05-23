<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" type="image/png" href="{{ asset('img/PUPRP.png') }}">
    <title>Dinas PUPRP Kabupaten Bintan</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        {{-- <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar --> --}}

        <div class="branding d-flex align-items-center" style="background-color: #031b4e;">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="#" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('img/PUPRP.png') }}" alt="">
                    <h1 class="sitename" style="color: white">
                        Dinas <span style="color: #ffc107 ;">PUPRP</span> Kabupaten Bintan
                    </h1>
                </a>

                {{-- <nav id="navmenu" class="navmenu" style="color: white;">
                    <ul>
                        <li><a href="#hero" class="active" style="color: white;">Home</a></li>
                        <li><a href="#about" style="color: white;">Visi & Misi</a></li>
                        <li><a href="#services" style="color: white;">Berita</a></li>
                        <li><a href="#portfolio" style="color: white;">Galeri</a></li>
                        <li><a href="#team" style="color: white;">Pejabat</a></li>
                        <li><a href="#contact" style="color: white;">Hubungi Kami</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav> --}}


                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" style="color: white">Home</a></li>
                        <li><a href="#about" style="color: white">Visi & Misi</a></li>
                        <li><a href="#services" style="color: white">Berita</a></li>
                        <li><a href="#portfolio" style="color: white">Galeri</a></li>
                        <li><a href="#team" style="color: white">Pejabat</a></li>
                        {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>
                                        <li><a href="#">Deep Dropdown 2</a></li>
                                        <li><a href="#">Deep Dropdown 3</a></li>
                                        <li><a href="#">Deep Dropdown 4</a></li>
                                        <li><a href="#">Deep Dropdown 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="#contact" style="color: white">Hubungi Kami</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>

    </header>

    <main class="main">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>Selamat <span style="color: #031b4e">Datang</span></h1>
                        <p style="color: black">Dinas Pekerjaan Umum, Penataan Ruang dan Pertanahan <br> Kabupaten
                            Bintan</p>
                        <div class="d-flex">
                            {{-- <a href="#about" class="btn-get-started">Get Started</a> --}}
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn-get-started"
                                style="background-color: #ffc107;color:#031b4e"><i class="bi bi-play-circle"></i><span>
                                    Profil OPD</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">
            <div class="container">
                <div class="row gy-4">
                    @foreach ($bidang as $bidang)
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-grip-horizontal"></i></div>
                                <h4><a href="" class="stretched-link">{{ $bidang->namabidang }}</a></h4>
                                <p>{{ $bidang->tentang }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section><!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>
                    <i class="bi bi-building"></i>
                </h2>
                <p>
                    <span>Visi</span> <span class="description-title">& Misi</span>
                </p>

            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-3">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://bintankuindonesia.bintankab.go.id/upload/sub_informasi/46/Dinas_PUPR_Kabupaten_Bintan/gambar_lokasi_1671976934.jpg"
                            alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="about-content ps-0 ps-lg-3">
                            {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p> --}}
                            <ul>
                                @foreach ($visimisi as $visimisi)
                                    <li>
                                        <i class="bi bi-flag"></i>
                                        <div>
                                            <h4>Visi</h4>
                                            <p>{{ $visimisi->visi }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="bi bi-building"></i>
                                        <div>
                                            <h4>Misi</h4>
                                            <p>{{ $visimisi->misi }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            {{-- <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p> --}}
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2><i class="bi bi-newspaper"></i></h2>
                <p><span>Berita Seputar</span> <span class="description-title">Dinas PUPRP Kabupaten Bintan</span></p>
            </div><!-- End Section Title -->
        
            <div class="container">
                <!-- Berita Grid -->
                <div class="row gy-4">
                    @foreach ($berita as $item) <!-- Gunakan $item untuk menghindari konflik variabel -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid mb-3">
                                <a href="#" class="stretched-link" data-bs-toggle="modal"
                                    data-bs-target="#newsModal" data-title="{{ $item->title }}"
                                    data-content="{!! nl2br(e($item->content)) !!}"
                                    data-image="{{ asset('storage/' . $item->image) }}">
                                    <h3>{{ $item->title }}</h3>
                                </a>
                                <p>
                                    {!! Str::before(strip_tags($item->content), '.') !!}.
                                    <span style="color: blue;">Baca Selengkapnya</span>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
        
                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $berita->links() }}
                </div>
            </div>
        
            <!-- Modal -->
            <div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newsModalLabel">Detail Berita</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img id="newsImage" src="" alt="" class="img-fluid mb-3">
                            <h3 id="newsTitle"></h3>
                            <p id="newsContent"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- JavaScript untuk Modal -->
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function () {
                const newsLinks = document.querySelectorAll('[data-bs-toggle="modal"]');
        
                newsLinks.forEach(function (link) {
                    link.addEventListener('click', function () {
                        const title = this.getAttribute('data-title');
                        const content = this.getAttribute('data-content');
                        const image = this.getAttribute('data-image');
        
                        document.getElementById('newsTitle').innerText = title;
                        document.getElementById('newsContent').innerHTML = content;
                        document.getElementById('newsImage').src = image;
                    });
                });
            });
            
        </script>
        <!-- /Services Section -->

        {{-- <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">

            <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                        irure amet legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                        quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                        quis sint minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                        quem dolore labore illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                        esse veniam culpa fore nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section --> --}}

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2><i class="bi bi-images"></i></h2>
                <p><span>Galeri&nbsp;</span> <span class="description-title">Kami</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    {{-- <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-product">Card</li>
                        <li data-filter=".filter-branding">Web</li>
                    </ul><!-- End Portfolio Filters --> --}}

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @forelse ($galeris as $galeri)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                @foreach ($galeri->photos as $photo)
                                    <img src="{{ asset('storage/' . $photo->path) }}" class="img-fluid"
                                        alt="">
                                @endforeach
                                <div class="portfolio-info">
                                    <h4>{{ $galeri->title }}</h4>
                                    {{-- <p>Lorem ipsum, dolor sit</p> --}}
                                    <a href="{{ asset('storage/' . $photo->path) }}" title="{{ $galeri->title }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </section><!-- /Portfolio Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2><i class="bi bi-diagram-3"></i></h2>
                <p><span>Struktur</span> <span class="description-title">Organisasi</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        @foreach ($struktur as $struktur)
                            <img src="{{ asset('storage/' . $struktur->foto) }}" alt="" class="img-fluid">
                        @endforeach
                    </div>
                </div>

            </div>

        </section><!-- /Faq Section -->

        <!-- Team Section -->
        <section id="team" class="team section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2><i class="bi bi-hdd-stack"></i></h2>
                <p><span>Pejabat</span> <span class="description-title">Struktural</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    @foreach ($pejabat as $pejabat)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="team-member">
                                <div class="member-info">
                                    <h4>{{ strtoupper($pejabat->jabatan) }}</h4>
                                </div>
                                <div class="member-img">
                                    <img src="{{ asset('storage/' . $pejabat->foto) }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $pejabat->namapejabat }}</h4>
                                    <span>NIP. {{ $pejabat->nip }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- </section><!-- /Team Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p><span>Check our</span> <span class="description-title">Pricing</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-3">

                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-item featured">
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-item">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-item">
                            <span class="advanced">Advanced</span>
                            <h3>Ultimate</h3>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>

        </section><!-- /Pricing Section --> --}}
            <!-- Contact Section -->
            <section id="contact" class="contact section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2><i class="bi bi-telephone"></i></h2>
                    <p><span>Hubungi</span> <span class="description-title">Kami</span></p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-12">

                            <div class="info-wrap">
                                @foreach ($alamat as $alamat)
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.056147241486!2d{{ explode(',', $alamat->koordinat)[1] }}!3d{{ explode(',', $alamat->koordinat)[0] }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM!5e0!3m2!1sen!2sid!4v1676961268712!5m2!1sen!2sid"
                                        frameborder="0" style="border:0; width: 100%; height: 320px;"
                                        allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                                        <div>
                                            <h3>Alamat</h3>
                                            <p>{{ $alamat->alamat }}</p>
                                        </div>
                                    </div>
                                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                        <i class="bi bi-envelope flex-shrink-0"></i>
                                        <div>
                                            <h3>Email</h3>
                                            <p>dinaspuprpbintan@gmail.com</p>
                                        </div>
                                    </div><!-- End Info Item -->
                                @endforeach

                            </div>
                        </div>

                        {{-- <div class="col-lg-7">
                            <form action="forms/contact.php" method="post" class="php-email-form"
                                data-aos="fade-up" data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <label for="name-field" class="pb-2">Your Name</label>
                                        <input type="text" name="name" id="name-field" class="form-control"
                                            required="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email-field" class="pb-2">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="subject-field" class="pb-2">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="message-field" class="pb-2">Message</label>
                                        <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form --> --}}

                    </div>

                </div>

            </section><!-- /Contact Section -->

            <!-- Stats Section -->
            <section id="stats" class="stats section">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-12 text-center">
                            <h2>Berikan Penilaian Anda</h2>
                            <p>Bagaimana menurut Anda tentang website ini?</p>
                        </div>

                        <form action="{{ route('feedback.store') }}" method="POST"
                            class="d-flex justify-content-center">
                            @csrf
                            <div class="d-flex flex-wrap justify-content-center gap-3">

                                <button type="submit" name="rating" value="kurang_bermanfaat"
                                    class="btn btn-light">
                                    <span style="font-size: 2rem;">😞</span><br>
                                    <span>Kurang Bermanfaat</span>
                                </button>

                                <!-- Bermanfaat -->
                                <button type="submit" name="rating" value="bermanfaat" class="btn btn-light">
                                    <span style="font-size: 2rem;">🙂</span><br>
                                    <span>Bermanfaat</span>
                                </button>

                                <!-- Cukup Bermanfaat -->
                                <button type="submit" name="rating" value="cukup_bermanfaat"
                                    class="btn btn-light">
                                    <span style="font-size: 2rem;">😊</span><br>
                                    <span>Cukup Bermanfaat</span>
                                </button>

                                <!-- Sangat Bermanfaat -->
                                <button type="submit" name="rating" value="sangat_bermanfaat"
                                    class="btn btn-light">
                                    <span style="font-size: 2rem;">😍</span><br>
                                    <span>Sangat Bermanfaat</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Skills Section -->
            <section id="skills" class="skills section">
                @php
                    function calculatePercentage($value, $total)
                    {
                        if ($total <= 0) {
                            return 0;
                        }
                        return round(($value / $total) * 100, 1);
                    }
                @endphp

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="text-center">Statistik Penilaian Website</h2>
                    <p class="text-center">Berikut adalah jumlah penilaian yang telah diberikan:</p>

                    <div class="row skills-content skills-animation">
                        <div class="col-lg-6">
                            <!-- Kurang Bermanfaat -->
                            <div class="progress">
                                <span class="skill">
                                    <span>Kurang Bermanfaat</span>
                                    <i class="val">{{ $stats['kurang_bermanfaat'] }}
                                        ({{ calculatePercentage($stats['kurang_bermanfaat'], $total) }}%)</i>
                                </span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" style="background: #031b4e" role="progressbar"
                                        style="width: {{ calculatePercentage($stats['kurang_bermanfaat'], $total) }}%"
                                        aria-valuenow="{{ calculatePercentage($stats['kurang_bermanfaat'], $total) }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <!-- Bermanfaat -->
                            <div class="progress">
                                <span class="skill">
                                    <span>Bermanfaat</span>
                                    <i class="val">{{ $stats['bermanfaat'] }}
                                        ({{ calculatePercentage($stats['bermanfaat'], $total) }}%)</i>
                                </span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" style="background: #031b4e" role="progressbar"
                                        style="width: {{ calculatePercentage($stats['bermanfaat'], $total) }}%"
                                        aria-valuenow="{{ calculatePercentage($stats['bermanfaat'], $total) }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <!-- Cukup Bermanfaat -->
                            <div class="progress">
                                <span class="skill">
                                    <span>Cukup Bermanfaat</span>
                                    <i class="val">{{ $stats['cukup_bermanfaat'] }}
                                        ({{ calculatePercentage($stats['cukup_bermanfaat'], $total) }}%)</i>
                                </span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" style="background: #031b4e" role="progressbar"
                                        style="width: {{ calculatePercentage($stats['cukup_bermanfaat'], $total) }}%"
                                        aria-valuenow="{{ calculatePercentage($stats['cukup_bermanfaat'], $total) }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <!-- Sangat Bermanfaat -->
                            <div class="progress">
                                <span class="skill">
                                    <span>Sangat Bermanfaat</span>
                                    <i class="val">{{ $stats['sangat_bermanfaat'] }}
                                        ({{ calculatePercentage($stats['sangat_bermanfaat'], $total) }}%)</i>
                                </span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" style="background: #031b4e" role="progressbar"
                                        style="width: {{ calculatePercentage($stats['sangat_bermanfaat'], $total) }}%"
                                        aria-valuenow="{{ calculatePercentage($stats['sangat_bermanfaat'], $total) }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Menampilkan Total Penilaian -->
                    <div class="text-center mt-4">
                        <p>Total Penilaian: <strong>{{ $total }}</strong></p>
                    </div>
                </div>
            </section><!-- /Skills Section -->

            <!-- Clients Section -->
            <section id="clients" class="clients section light-background">
                <div class="container">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                              "loop": true,
                              "speed": 600,
                              "autoplay": {
                                "delay": 5000
                              },
                              "slidesPerView": "auto",
                              "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                              },
                              "breakpoints": {
                                "320": {
                                  "slidesPerView": 2,
                                  "spaceBetween": 40
                                },
                                "480": {
                                  "slidesPerView": 3,
                                  "spaceBetween": 60
                                },
                                "640": {
                                  "slidesPerView": 4,
                                  "spaceBetween": 80
                                },
                                "992": {
                                  "slidesPerView": 6,
                                  "spaceBetween": 120
                                }
                              }
                            }
                        </script>
                        <div class="swiper-wrapper align-items-center justify-content-center">
                            <!-- Swiper Slide 1 -->
                            <div class="swiper-slide text-center">
                                <a href="//bintankab.go.id" target="_blank"
                                    style="display: inline-block; text-decoration: none; padding: 10px 20px; background-color: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                    <img src="https://dinsos.bintankab.go.id/assets/frontend/images/logo_bintankab_bg.png"
                                        class="img-fluid" alt="logo-pemkab-bintan" style="max-width: 150px;">
                                </a>
                            </div>
                            <!-- Swiper Slide 2 -->
                            <div class="swiper-slide text-center">
                                <a href="//diskominfo.bintankab.go.id" target="_blank"
                                    style="display: inline-block; text-decoration: none; padding: 10px 20px; background-color: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                    <img src="https://dinsos.bintankab.go.id/assets/frontend/images/logo_diskominfo_bg.png"
                                        class="img-fluid" alt="logo-kominfo" style="max-width: 150px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>





    </main>

    <footer id="footer" class="footer">

        {{-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                    value="Subscribe"></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">BizLand</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div> --}}

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Dinas PUPRP Kabupaten Bintan</strong> <span>All
                    Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="#">Tim IT Dinas PUPRP Kabupaten Bintan</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
