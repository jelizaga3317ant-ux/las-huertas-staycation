<?php
// includes/footer.php
// This file contains the footer and closing body/html tags.
?>
    </main>

    <!-- Footer -->
    <footer class="bg-dark border-top border-secondary py-4 mt-auto">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <h5 class="text-uppercase mb-3">Las Huertas Staycation</h5>
                    <p class="text-muted small">Different moods, different rooms, same #LasHuertasStaycation. Your private garden escape in the heart of Antipolo.</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-uppercase mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.php" class="text-muted text-decoration-none">About Us</a></li>
                        <li><a href="units.php" class="text-muted text-decoration-none">Our Units</a></li>
                        <li><a href="booking.php" class="text-muted text-decoration-none">Book a Stay</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-uppercase mb-3">Reach Us</h5>
                    
                    <!-- Clickable Google Maps Link -->
                    <p class="text-muted small mb-1">
                        <a href="https://maps.app.goo.gl/AtaZdA7hsUQ3soC66" target="_blank" class="text-muted text-decoration-none">
                            <i class="bi bi-geo-alt me-2"></i>102 Plaza Condominium, Antipolo
                        </a>
                    </p>
                    
                    <!-- Clickable Facebook Link -->
                    <p class="text-muted small mb-1">
                        <a href="https://www.facebook.com/lashuertasstaycation?rdid=ZQRXzrZhduwxKb35&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1GbqKRuBqW#" target="_blank" class="text-muted text-decoration-none">
                            <i class="bi bi-facebook me-2"></i>Las Huertas Staycation
                        </a>
                    </p>
                    
                    <!-- Clickable Email Link -->
                    <p class="text-muted small">
                        <a href="mailto:inquire@lashuertas.example" class="text-muted text-decoration-none">
                            <i class="bi bi-envelope me-2"></i>inquire@lashuertas.example
                        </a>
                    </p>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center text-muted small">
                &copy; <?php echo date("Y"); ?> Las Huertas Staycation. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Return to Top Button -->
    <button id="returnToTop" class="btn btn-primary return-to-top" aria-label="Return to top">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- Return to Top Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const returnToTopBtn = document.getElementById('returnToTop');

            // Show/Hide button based on scroll position
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    returnToTopBtn.classList.add('show');
                } else {
                    returnToTopBtn.classList.remove('show');
                }
            });

            // Smooth scroll to top
            returnToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>