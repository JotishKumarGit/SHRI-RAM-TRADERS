<!-- FOOTER SECTION -->
<footer class="footer-section pt-5 pb-3">
    <div class="container">
        <div class="row g-4">

            <!-- ABOUT COMPANY -->
            <div class="col-md-4">
                <h5 class="footer-title">M/S SHRI RAM TRADERS</h5>
                <p>
                    Premium quality Dried & Roasted Chicory Cubes supplier in India.
                    Quality-focused and trusted since 2008.
                </p>
            </div>

            <!-- QUICK LINKS -->
            <div class="col-md-2">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links list-unstyled">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <!-- CONTACT INFO -->
            <div class="col-md-3">
                <h5 class="footer-title">Contact Info</h5>
                <ul class="footer-contact list-unstyled">
                    <li>📞 9458647082 | 9720010333</li>
                    <li>✉️ shriramtraders.etah@gmail.com</li>
                    <li>📍 VILL- HARCHANDPUR KALAN, POST CHHACHHENA, ETAH, U.P., INDIA</li>
                </ul>
            </div>

            <!-- SOCIAL MEDIA -->
            <div class="col-md-3">
                <h5 class="footer-title">Follow Us</h5>
                <div class="social-icons">
                    <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="#" target="_blank"><i class="bi bi-twitter"></i></a>
                    <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

        </div>

        <hr class="my-4">

        <div class="text-center">
            <p class="mb-0">&copy; 2025 M/S SHRI RAM TRADERS. All Rights Reserved.</p> Managed By <a
                href="https://trade4export.com/">Trade4Export</a>
        </div>
    </div>
</footer>

<!-- Enquiry Modal -->
<div class="modal fade " id="enquiryModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border:2px solid #000;">

            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title">Send Enquiry</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="enquiryForm">

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label fw-bold">Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold">Phone Number</label>
                            <input type="text" id="phone" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold">Subject</label>
                            <input type="text" id="subject" class="form-control" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-bold">Message</label>
                            <textarea id="message" class="form-control" rows="3" required></textarea>
                        </div>

                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-dark" onclick="sendToWhatsApp()">
                    Submit
                </button>
            </div>

        </div>
    </div>
</div>

<!-- enquiry modal  -->
<script>
    function sendToWhatsApp() {

        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let phone = document.getElementById("phone").value;
        let subject = document.getElementById("subject").value;
        let message = document.getElementById("message").value;

        let whatsappNumber = "919458647082"; // <-- YOUR WHATSAPP NUMBER HERE

        let url =
            "https://wa.me/" + whatsappNumber +
            "?text=" +
            "📌 *New Enquiry Received*\n" +
            "-----------------------\n" +
            "*Name:* " + name + "\n" +
            "*Email:* " + email + "\n" +
            "*Phone:* " + phone + "\n" +
            "*Subject:* " + subject + "\n" +
            "*Message:* " + message;

        window.open(url, "_blank");
    }
</script>

<!-- go on whatsapp -->
<script>
    function goToWhatsapp() {
        let phone = "9720010333"; // your WhatsApp number
        let message = "Hello! I want to enquire about your chicory cubes.";
        let url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
        window.open(url, "_blank");
    }

    // Optional: Prevent form submit default (demo only)
    document.getElementById("contactForm").addEventListener("submit", function(e) {
        e.preventDefault();
        alert("Form submitted! We'll contact you soon.");
    });
</script>

<!-- Font Awesome CDN (for icons) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>