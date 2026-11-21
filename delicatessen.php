<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicatessen &amp; House-Roasted Meats | La Nueva Bakery Since 1990</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- La Nueva Bakery Artisanal Stylesheets (Zero Google Fonts) -->
    <link rel="stylesheet" href="assets/css/global.css?v=32.0">
    <link rel="stylesheet" href="assets/css/gallery.css?v=26.0">
    <link rel="stylesheet" href="assets/css/responsive.css?v=31.0">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NHPR7142RY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-NHPR7142RY');
    </script>

    <!-- Favicons -->
    <link rel="shortcut icon" href="./favicon.ico?v=3.0" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicons/apple-icon-57x57.png?v=3.0">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/images/favicons/apple-icon-60x60.png?v=3.0">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/images/favicons/apple-icon-72x72.png?v=3.0">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/favicons/apple-icon-76x76.png?v=3.0">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/images/favicons/apple-icon-114x114.png?v=3.0">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/images/favicons/apple-icon-120x120.png?v=3.0">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/images/favicons/apple-icon-144x144.png?v=3.0">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/images/favicons/apple-icon-152x152.png?v=3.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicons/apple-icon-180x180.png?v=3.0">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/images/favicons/android-icon-192x192.png?v=3.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicons/favicon-32x32.png?v=3.0">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicons/favicon-96x96.png?v=3.0">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicons/favicon-16x16.png?v=3.0">
    <link rel="manifest" href="./assets/images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#c67d28">
    <meta name="theme-color" content="#c67d28">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Ready-to-eat products that are out of this world, unique &amp; individual. Excellent products made fresh from scratch &amp; curing and roasting our own meat.">
    <meta name="author" content="La Nueva Bakery">
    <meta name="keywords" content="La Nueva Bakery, Delicatessen, Uruguayan bakery Jackson Heights, Antojitos Colombianos, Argentine pastries, custom cakes Queens NY">

    <meta property="og:image" content="assets/images/slide-principal.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="La Nueva Bakery">
    <meta property="og:title" content="Delicatessen &amp; House-Roasted Meats | La Nueva Bakery Since 1990">
    <meta property="og:description" content="Ready-to-eat products that are out of this world, unique &amp; individual. Excellent products made fresh from scratch &amp; curing and roasting our own meat.">
    <meta property="og:url" content="https://lanuevabakery.com/delicatessen.html">

    <!-- PhotoSwipe Lightbox Plugin -->
    <link rel="stylesheet" href="assets/plugins/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="assets/plugins/photoswipe/default-skin/default-skin.css">
    <script defer src="assets/plugins/photoswipe/photoswipe.min.js"></script>
    <script defer src="assets/plugins/photoswipe/photoswipe-ui-default.min.js"></script>
</head>

<body class="page-delicatessen">
    <!-- Artisanal Header -->
    <?php
    $currentPage = 'delicatessen';
    include __DIR__ . '/includes/header.php';
    ?>

    <main>
        <!-- Category Hero Banner -->
        <section class="delicatessen_slide gallery_slide">
            <div class="container">
                <div class="lnb-stamp-pill mb-3" style="background: rgba(253,251,247,0.14); color: var(--lnb-cream); border-color: rgba(240,228,208,0.4);">
                    <span>Artisanal Catalog &bull; Since 1990</span>
                </div>
                <h1>Delicatessen</h1>
                <p class="gallery-hero-lead">Ready-to-eat products that are out of this world, unique &amp; individual. Excellent products made fresh from scratch &amp; curing and roasting our own meat.</p>
            </div>
        </section>

        <!-- Quick Department Switcher Bar -->
        <nav class="lnb-catalog-nav-bar" aria-label="Bakery Department Switcher">
            <div class="container">
                <div class="lnb-catalog-pills">
                    <a href="bakery.php" class="lnb-catalog-pill">&#129360; Bakery</a>
                    <a href="pastries.php" class="lnb-catalog-pill">&#129473; Pastries</a>
                    <a href="cakes.php" class="lnb-catalog-pill">&#127874; Cakes</a>
                    <a href="custom cakes.php" class="lnb-catalog-pill">&#10024; Custom Cakes</a>
                    <a href="delicatessen.php" class="lnb-catalog-pill active">&#129386; Delicatessen</a>
                    <a href="bite sides.php" class="lnb-catalog-pill">&#129375; Bite Sides</a>
                    <a href="imported.php" class="lnb-catalog-pill">&#129481; Imported</a>
                </div>
                <p class="text-center text-muted mb-0 mt-2" style="font-size: 0.85rem;">
                    Click on any photo to zoom and inspect our fresh specialties. Questions? <a href="contact.php" class="fw-bold" style="color: var(--lnb-red);">Contact our bakery</a>.
                </p>
            </div>
        </nav>

        <!-- Product Catalog Grid -->
        <section class="gallery_section">
            <div class="container">
                <div class="row">
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeDelicatessen(0);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Delicatessen/delicatessen1_big.jpg" alt="Delicatessen Specialty No. 01 - La Nueva Bakery Jackson Heights, NY">
                    <div class="gallery_product_info">
                        <h2>Delicatessen</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeDelicatessen(1);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Delicatessen/delicatessen2_big.jpg" alt="Delicatessen Specialty No. 02 - La Nueva Bakery Jackson Heights, NY">
                    <div class="gallery_product_info">
                        <h2>Delicatessen</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeDelicatessen(2);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Delicatessen/delicatessen3_big.jpg" alt="Delicatessen Specialty No. 03 - La Nueva Bakery Jackson Heights, NY">
                    <div class="gallery_product_info">
                        <h2>Delicatessen</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeDelicatessen(3);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Delicatessen/delicatessen4_big.jpg" alt="Delicatessen Specialty No. 04 - La Nueva Bakery Jackson Heights, NY">
                    <div class="gallery_product_info">
                        <h2>Delicatessen</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeDelicatessen(4);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Delicatessen/delicatessen5_big.jpg" alt="Delicatessen Specialty No. 05 - La Nueva Bakery Jackson Heights, NY">
                    <div class="gallery_product_info">
                        <h2>Delicatessen</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeDelicatessen(5);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Delicatessen/delicatessen6_big.jpg" alt="Delicatessen Specialty No. 06 - La Nueva Bakery Jackson Heights, NY">
                    <div class="gallery_product_info">
                        <h2>Delicatessen</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeDelicatessen(6);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Delicatessen/delicatessen7_big.jpg" alt="Delicatessen Specialty No. 07 - La Nueva Bakery Jackson Heights, NY" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Delicatessen</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeDelicatessen(7);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Delicatessen/delicatessen8_big.jpg" alt="Delicatessen Specialty No. 08 - La Nueva Bakery Jackson Heights, NY" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Delicatessen</h2>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Closing Heritage Banner -->
        <section class="heritage-quote-banner">
            <div class="container">
                <div class="quote-box">
                    <span class="quote-mark" aria-hidden="true">&ldquo;</span>
                    <h2>
                        We have been making delicious pastries for breakfast, snacks, or dessert for over 2 decades. We offer friendly service with simple and delicious food. If you're in the neighborhood drop by and say hi!
                    </h2>
                    <a href="contact.php" class="lnb-btn-primary">
                        <span>Contact Our Bakery</span>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <!-- PhotoSwipe Root Element -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js?v=30.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="assets/js/gallery.js?v=3.0"></script>
</body>

</html>