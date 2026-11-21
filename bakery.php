<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisanal Bakery Breads &amp; Treats | La Nueva Bakery Since 1990</title>

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
    <meta name="description" content="Preparing pastries, cakes, breads and delicious flavors all around - from Antojitos Colombianos like pan con queso and bunuelos to Uruguayan and Argentine alfajores, croissants, and empanadas.">
    <meta name="author" content="La Nueva Bakery">
    <meta name="keywords" content="La Nueva Bakery, Bakery, Uruguayan bakery Jackson Heights, Antojitos Colombianos, Argentine pastries, custom cakes Queens NY">

    <meta property="og:image" content="assets/images/slide-principal.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="La Nueva Bakery">
    <meta property="og:title" content="Artisanal Bakery Breads &amp; Treats | La Nueva Bakery Since 1990">
    <meta property="og:description" content="Preparing pastries, cakes, breads and delicious flavors all around - from Antojitos Colombianos like pan con queso and bunuelos to Uruguayan and Argentine alfajores, croissants, and empanadas.">
    <meta property="og:url" content="https://lanuevabakery.com/bakery.html">

    <!-- PhotoSwipe Lightbox Plugin -->
    <link rel="stylesheet" href="assets/plugins/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="assets/plugins/photoswipe/default-skin/default-skin.css">
    <script defer src="assets/plugins/photoswipe/photoswipe.min.js"></script>
    <script defer src="assets/plugins/photoswipe/photoswipe-ui-default.min.js"></script>
</head>

<body class="page-bakery">
    <!-- Artisanal Header -->
    <?php
    $currentPage = 'bakery';
    include __DIR__ . '/includes/header.php';
    ?>

    <main>
        <!-- Category Hero Banner -->
        <section class="bakery_slide gallery_slide">
            <div class="container">
                <div class="lnb-stamp-pill mb-3" style="background: rgba(253,251,247,0.14); color: var(--lnb-cream); border-color: rgba(240,228,208,0.4);">
                    <span>Artisanal Catalog &bull; Since 1990</span>
                </div>
                <h1>Bakery</h1>
                <p class="gallery-hero-lead">Preparing pastries, cakes, breads and delicious flavors all around - from Antojitos Colombianos like pan con queso and bunuelos to Uruguayan and Argentine alfajores, croissants, and empanadas.</p>
            </div>
        </section>

        <!-- Quick Department Switcher Bar -->
        <nav class="lnb-catalog-nav-bar" aria-label="Bakery Department Switcher">
            <div class="container">
                <div class="lnb-catalog-pills">
                    <a href="bakery.php" class="lnb-catalog-pill active">&#129360; Bakery</a>
                    <a href="pastries.php" class="lnb-catalog-pill">&#129473; Pastries</a>
                    <a href="cakes.php" class="lnb-catalog-pill">&#127874; Cakes</a>
                    <a href="custom cakes.php" class="lnb-catalog-pill">&#10024; Custom Cakes</a>
                    <a href="delicatessen.php" class="lnb-catalog-pill">&#129386; Delicatessen</a>
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
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(0);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/AlfajoresdeDulcedeLeche-LaNuevaBakery.jpg" alt="Alfajores de dulce de leche - Bakery at La Nueva Bakery (Since 1990)">
                    <div class="gallery_product_info">
                        <h2>Alfajores de dulce de leche</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(1);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PanMangola-LaNuevaBakery.jpg" alt="Pan mangola - Bakery at La Nueva Bakery (Since 1990)">
                    <div class="gallery_product_info">
                        <h2>Pan mangola</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(2);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PanPebete-LaNuevaBakery.jpg" alt="Pan pebete - Bakery at La Nueva Bakery (Since 1990)">
                    <div class="gallery_product_info">
                        <h2>Pan pebete</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(3);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/AlfajoresdeChocolate-LaNuevaBakery.jpg" alt="Alfajores de chocolate - Bakery at La Nueva Bakery (Since 1990)">
                    <div class="gallery_product_info">
                        <h2>Alfajores de chocolate</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(4);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PandeHuevo-LaNuevaBakery.jpg" alt="Pan de huevo - Bakery at La Nueva Bakery (Since 1990)">
                    <div class="gallery_product_info">
                        <h2>Pan de huevo</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(5);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/CanonesdeDulcedeLeche.jpg" alt="Cañones de dulce de leche - Bakery at La Nueva Bakery (Since 1990)">
                    <div class="gallery_product_info">
                        <h2>Cañones de dulce de leche</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(6);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/ChurrosconDulcedeLeche-LaNuevaBakery.jpg" alt="Churros con Dulce de Leche - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Churros con Dulce de Leche</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(7);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/AppleTurnover-LaNuevaBakery.jpg" alt="Apple turnover - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Apple turnover</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(8);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PlainCroissant-LaNuevaBakery.jpg" alt="Plain croissant - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Plain croissant</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(9);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/bakery_big5.jpg" alt="Bakery Specialty No. 10 - La Nueva Bakery Jackson Heights, NY" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Bakery</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(10);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/bakery_big6.jpg" alt="Bakery Specialty No. 11 - La Nueva Bakery Jackson Heights, NY" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Bakery</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(11);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/bakery_big7.jpg" alt="Bakery Specialty No. 12 - La Nueva Bakery Jackson Heights, NY" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Bakery</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(12);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/bakery_big8.jpg" alt="Bakery Specialty No. 13 - La Nueva Bakery Jackson Heights, NY" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Bakery</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(13);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/bakery_big9.jpg" alt="Bakery Specialty No. 14 - La Nueva Bakery Jackson Heights, NY" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Bakery</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(14);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/bakery_big10.jpg" alt="Bakery Specialty No. 15 - La Nueva Bakery Jackson Heights, NY" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Bakery</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(15);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/bakery_big11.jpg" alt="Bakery Specialty No. 16 - La Nueva Bakery Jackson Heights, NY" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Bakery</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(16);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/bakery_big12.jpg" alt="Bakery Specialty No. 17 - La Nueva Bakery Jackson Heights, NY" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Bakery</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(17);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/Alfajores-de-Maizena---LaNuevaBakery.jpg" alt="Alfajores de maizena - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Alfajores de maizena</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(18);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/BizcochoconCremadePasteleraoDulcedeLeche-LaNuevaBakery.jpg" alt="Bizcocho con crema pastelera o dulce de leche - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Bizcocho con crema pastelera o dulce de leche</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(19);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/BizcochodeCreamCheese-LaNuevaBakery.jpg" alt="Bizcocho con cream cheese - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Bizcocho con cream cheese</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(20);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/ChicharrondeGuayaba-LaNuevaBakery.jpg" alt="Chicarrón de guayaba - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Chicarrón de guayaba</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(21);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/ChicharrondeManteca-LaNuevaBakery.jpg" alt="Chicarrón de manteca - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Chicarrón de manteca</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(22);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/CroissantdeDulcedeLeche-LaNuevaBakery.jpg" alt="Croissant de dulce de leche - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Croissant de dulce de leche</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(23);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/CroissantdeJamonyQueso-LaNuevaBakery.jpg" alt="Croissant de jamón y queso - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Croissant de jamón y queso</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(24);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/EmpanadadeAtun-LaNuevaBakery.jpg" alt="Empanada de atún - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Empanada de atún</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(25);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/EmpanadadeCarne-LaNuevaBakery.jpg" alt="Empanada de carne - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Empanada de carne</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(26);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/EmpanadadeJalapenoconCarneMolida-LaNuevaBakery.jpg" alt="Empanada de jalapeño con carne molida - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Empanada de jalapeño con carne molida</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(27);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PalmaGrande-LaNuevaBakery.jpg" alt="Palma grande - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Palma grande</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(28);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PanAlinado-LaNuevaBakery.jpg" alt="Pan aliñado - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Pan aliñado</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(29);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PanBaguette-LaNuevaBakery.jpg" alt="Pan Baguette - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Pan Baguette</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(30);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PanCanon-LaNuevaBakery.jpg" alt="Pan cañon - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Pan cañon</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(31);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PanCasero-LaNuevaBakery.jpg" alt="Pan casero - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Pan casero</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(32);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PanConQuesoGrande-LaNuevaBakery.jpg" alt="Pan con queso grande - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Pan con queso grande</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(33);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PandeQuesoAlinado-LaNuevaBakery.jpg" alt="Pan de queso aliñado - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Pan de queso aliñado</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(34);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PandeQueso-LaNuevaBakery.jpg" alt="Pan de queso - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Pan de queso</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(35);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PandeUva-LaNuevaBakery.jpg" alt="Pan de uva - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Pan de uva</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(36);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PanFrances-LaNuevaBakery.jpg" alt="Pan frances - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Pan frances</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(37);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PandeYuca-LaNuevaBakery.jpg" alt="Pan de yuca - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Pan de yuca</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(38);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/PanMino-LaNUevaBakery.jpg" alt="Pan miño - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Pan miño</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(39);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/AppleTurnover-LaNuevaBakery.jpg" alt="Apple turnover - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Apple turnover</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(40);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/ArepasdeChocolo-LaNuevaBakery.jpg" alt="Arepa de chocolo - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Arepa de chocolo</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(41);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/BizcochitosdeGrasa-LaNuevaBakery.jpg" alt="Biscochitos de grasa - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Biscochitos de grasa</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(42);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/DedodeQueso-LaNuevaBakery.jpg" alt="Dedo de queso - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Dedo de queso</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(43);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/DonutPlain-LaNuevaBakery.jpg" alt="Donut plain - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Donut plain</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(44);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/DonutsdeFraileDulcedeLeche-LaNuevaBakery.jpg" alt="Donuts de fraile de dulce de leche - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Donuts de fraile de dulce de leche</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(45);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/MargaritasCremaPasteleraMembrilloyDulcedeLeche-LaNuevaBakery.jpg" alt="Margaritas crema pastelera, membrillo y dulce de leche - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Margaritas crema pastelera, membrillo y dulce de leche</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(46);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/MonitodeMembrillo-LaNuevaBakery.jpg" alt="Moñito de membrillo - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Moñito de membrillo</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(47);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/Plantillas-LaNuevaBakery.jpg" alt="Platillas - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Platillas</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(48);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/Polvoron-LaNuevaBakery.jpg" alt="Polvoron - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Polvoron</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(49);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/RoscasdeManteca.jpg" alt="Rosca de manteca - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Rosca de manteca</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(50);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/VigilanteSinCrema-LaNuevaBakery.jpg" alt="Vigilante sin crema - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Vigilante sin crema</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(51);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/Bunuelos-LaNuevaBakery.jpg" alt="Buñuelos - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Buñuelos</h2>
                    </div>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe" onclick="openPhotoSwipeBakery(52);" style="cursor: pointer;">
                    <img decoding="async" src="assets/images/Bakery/CroissantsdeManteca-LaNuevaBakery.jpg" alt="Croissant de manteca - Bakery at La Nueva Bakery (Since 1990)" loading="lazy">
                    <div class="gallery_product_info">
                        <h2>Croissant de manteca</h2>
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