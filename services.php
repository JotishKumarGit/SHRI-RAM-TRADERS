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
            <h1 class="fw-bold display-5">Services</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mt-3">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        Services
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- SERVICES SECTION -->
    <section class="services-section py-5" id="services">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Services</h2>
                <p class="section-intro">
                    We offer comprehensive services in the production and supply of premium quality Dried & Roasted
                    Chicory Cubes.
                </p>
            </div>

            <div class="row g-4">

                <!-- SERVICE 1: Production -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h5>Production & Manufacturing</h5>
                        <p>State-of-the-art production units with advanced machinery ensuring top-quality chicory cubes.
                        </p>
                    </div>
                </div>

                <!-- SERVICE 2: Quality Assurance -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-patch-check"></i>
                        </div>
                        <h5>Quality Assurance</h5>
                        <p>Certified by FSSAI & FAS Audited for farm sustainability, ensuring consistent quality
                            products.</p>
                    </div>
                </div>

                <!-- SERVICE 3: Customized Supply -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h5>Customized Supply</h5>
                        <p>Flexible supply options and custom production facilities tailored to client requirements.</p>
                    </div>
                </div>

                <!-- SERVICE 4: R&D & Testing -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi-tools"></i>
                        </div>
                        <h5>R&D & Testing</h5>
                        <p>Advanced R&D labs and testing facilities to ensure innovation and product quality.</p>
                    </div>
                </div>

                <!-- SERVICE 5: National Distribution -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <h5>National Distribution</h5>
                        <p>Delivering premium chicory cubes across India with timely and reliable logistics support.</p>
                    </div>
                </div>

                <!-- SERVICE 6: Customer Support -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5>Customer Support</h5>
                        <p>Dedicated support team to assist clients with orders, enquiries, and product guidance.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>