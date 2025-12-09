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
            <h1 class="fw-bold display-5">Roasted Chicory Cubes</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mt-3">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        Roasted Chicory Cubes
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- products details -->
    <div class="container py-5">

        <div class="row align-items-center g-5">

            <!-- Left Side: Product Image -->
            <div class="col-md-6">
                <img src="assets/img/roasted-chicory.webp" alt="Roasted Chicory Cubes"
                    class="img-fluid rounded shadow border" style="border: 2px solid #000;">
            </div>

            <!-- Right Side: Product Information -->
            <div class="col-md-6">

                <h2 class="fw-bold mb-3">Roasted Chicory Cubes</h2>

                <p class="text-muted">
                    Our premium Roasted Chicory Cubes are carefully processed to deliver a rich, deep aroma
                    and naturally sweet flavor. Ideal for blending with coffee or using as a caffeine-free
                    alternative, these cubes offer superior quality, consistency, and purity for both domestic
                    and industrial applications.
                </p>

                <ul class="list-unstyled mt-3">
                    <li><strong>✔ 100% Natural & Pure</strong></li>
                    <li><strong>✔ Rich Aroma & Deep Flavor</strong></li>
                    <li><strong>✔ High-Quality Roasting Process</strong></li>
                    <li><strong>✔ Suitable for Food & Beverage Industry</strong></li>
                </ul>

                <!-- Enquiry Button -->
                <button class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                    Enquiry Now
                </button>

            </div>
        </div>

    </div>

    <!-- footer -->
    <?php include('footer.php') ?>