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
            <h1 class="fw-bold display-5">Gallery</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mt-3">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        Gallery
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- our gallery  -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Gallery</h2>
            <p class="section-intro">
                Premium chicory products including hand-cut roots, roasted cubes, and naturally dried cubes—crafted for
                rich aroma, authentic taste, and superior quality supplied by M/S SHRI RAM TRADERS.
            </p>
        </div>
        <div class="row g-4 justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="gallery-card">
                    <img src="assets/img/baner_dried.webp" height="300px" width="100%" class="gallery-img">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-card">
                    <img src="assets/img/baner_rosted.webp" height="300px" width="100%" class="gallery-img">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-card">
                    <img src="assets/img/CHICORY_HAND_CUT_ROOTS.jpeg" height="300px" width="100%" class="gallery-img">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-card">
                    <img src="assets/img/dried-chicory-cube.webp" height="300px" width="100%" class="gallery-img">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-card">
                    <img src="assets/img/roasted-chicory.webp" height="300px" width="100%" class="gallery-img">
                </div>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>