<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M/S SHRI RAM TRADERS </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Page Header -->
    <div class="page-header d-flex align-items-center" style="background: url('./assets/img/CHICORY_HAND_CUT_ROOTS.jpeg') center/cover no-repeat;
           height: 350px; position: relative;">

        <!-- Dark Overlay -->
        <div style="position: absolute; top: 0; left: 0;
                width: 100%; height: 100%;
                background: rgba(0,0,0,0.5);"></div>

        <!-- Content -->
        <div class="container text-center text-white position-relative">
            <h1 class="fw-bold display-5">Blog</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mt-3">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        Blog
                    </li>
                </ol>
            </nav>
        </div>
    </div>


    <!-- BLOG SECTION -->
    <section class="blog-section py-5" id="blog">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Latest Blog & News</h2>
                <p class="section-intro">
                    Stay updated with our latest insights, news, and tips on chicory cubes and related products.
                </p>
            </div>

            <div class="row g-4">

                <!-- BLOG CARD 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <img src="assets/img/baner_dried.webp" class="img-fluid blog-img" alt="Blog 1">
                        <div class="blog-content">
                            <h5>Benefits of Dried Chicory Cubes</h5>
                            <p>Learn how dried chicory cubes can enhance the flavor and health benefits of your
                                beverages.</p>
                            <a href="contact.php" class="btn blog-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- BLOG CARD 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <img src="assets/img/roasted-chicory.webp" class="img-fluid blog-img" alt="Blog 2">
                        <div class="blog-content">
                            <h5>Roasted Chicory Cubes: Uses & Tips</h5>
                            <p>Discover the versatile uses of roasted chicory cubes in coffee blends and food products.
                            </p>
                            <a href="contact.php" class="btn blog-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- BLOG CARD 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <img src="assets/img/baner_rosted.webp" class="img-fluid blog-img" alt="Blog 3">
                        <div class="blog-content">
                            <h5>Quality Assurance in Chicory Production</h5>
                            <p>How we ensure the highest quality in our chicory cubes from farm to factory.</p>
                            <a href="contact.php" class="btn blog-btn">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>