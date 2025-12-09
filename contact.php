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
            <h1 class="fw-bold display-5">Contact Us</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mt-3">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        Contact Us
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- CONTACT SECTION -->
    <section class="contact-section py-5" id="contact">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Contact Us</h2>
                <p class="section-intro">
                    Get in touch with us for orders, enquiries, or any questions about our products.
                </p>
            </div>

            <div class="row g-4 justify-content-center align-items-center">

                <!-- CONTACT FORM -->
                <div class="col-md-6">
                    <div class="contact-form p-4 shadow-sm rounded">
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your full name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Write your message"
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn submit-btn mb-2">Send Message</button>
                            <button type="button" class="btn whatsapp-btn" onclick="goToWhatsapp()">Go To
                                WhatsApp</button>
                        </form>
                    </div>
                </div>

                <!-- MAP -->
                <div class="col-md-6">
                    <div class="map-responsive rounded shadow-sm">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15887.868680208838!2d78.71605477665081!3d27.512175997156326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39750129b2d5e3d7%3A0xa44b96bd80ef5e3c!2sHarchandpur%20Kalan%2C%20Uttar%20Pradesh%20207003!5e0!3m2!1sen!2sin!4v1763623296728!5m2!1sen!2sin"
                            width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

       <!-- footer -->
     <?php include('footer.php') ?>