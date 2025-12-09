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
            <h1 class="fw-bold display-5">About Us</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mt-3">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        About Us
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- ABOUT US SECTION -->
    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- IMAGE LEFT -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="assets/img/roasted-chicory.webp" class="img-fluid rounded about-img" alt="Factory Image">
                </div>

                <!-- TEXT RIGHT -->
                <div class="col-lg-7">
                    <h2 class="section-title">About Us</h2>
                    <p class="section-intro">
                        Established in <strong>2008</strong>, M/S <strong>SHRI RAM TRADERS</strong> is led by
                        <strong>Mr. Vivek Vilas Verma</strong> with over 17 years of expertise in producing high-quality
                        Dried and Roasted Chicory Cubes.
                        Our company prides itself on <strong>quality-focused operations</strong>, certified by
                        <strong>FSSAI & FAS Audited (Farm Sustainability Assessment)</strong>.
                    </p>

                    <div class="about-details row mt-4">

                        <div class="col-md-6 mb-3">
                            <h5>Factory & Production</h5>
                            <ul>
                                <li>Area: 40,000 SQF</li>
                                <li>Machinery: 1 Roaster + 5 Processing Units</li>
                                <li>Production Capacity: 4,000 Tons Dried Chicory Cubes</li>
                                <li>Raw Material Used: 16,000 Tons Green Chicory Roots</li>
                                <li>Customized Production Facility: Yes</li>
                                <li>Testing & R&D Facilities: Yes</li>
                            </ul>
                        </div>

                        <div class="col-md-6 mb-3">
                            <h5>Company Profile</h5>
                            <ul>
                                <li>Establishment Year: 2008</li>
                                <li>Owner/CEO: Vivek Vilas Verma</li>
                                <li>Experience: 17 Years</li>
                                <li>Qualification: Graduation</li>
                                <li>Number of Employees: 10</li>
                                <li>Turnover: 2 Billion Rupees</li>
                                <li>USP: Quality Focused</li>
                                <li>Countries Dealt: India</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

       <!-- footer -->
     <?php include('footer.php') ?>