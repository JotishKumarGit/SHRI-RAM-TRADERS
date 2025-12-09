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
            <h1 class="fw-bold display-5">Dried Chicory Cubes</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mt-3">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        Dried Chicory Cubes
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
                <img src="assets/img/dried-chicory-cube.webp" alt="Dried Chicory Cubes"
                    class="img-fluid rounded shadow border" style="border: 2px solid #000;">
            </div>

            <!-- Right Side: Product Information -->
            <div class="col-md-6">

                <h2 class="fw-bold mb-3">Dried Chicory Cubes</h2>

                <p class="text-muted">
                    Dried Chicory Cubes are carefully processed using controlled dehydration to preserve
                    the natural aroma, flavor, and nutritional value. Ideal for coffee substitutes,
                    food flavoring, and herbal infusions, they offer consistent quality and long shelf life.
                </p>

                <ul class="list-unstyled mt-3">
                    <li><strong>✔ 100% Naturally Dried Chicory</strong></li>
                    <li><strong>✔ Retains Original Aroma & Flavor</strong></li>
                    <li><strong>✔ Perfect for Coffee Blends & Beverages</strong></li>
                    <li><strong>✔ Long Shelf Life & Easy Storage</strong></li>
                    <li><strong>✔ Uniform Cube Size for Smooth Processing</strong></li>
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