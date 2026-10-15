<?php
// contact.php
$pageTitle = 'Contact - Las Huertas Staycation';
require_once 'includes/header.php';
?>

<div class="row mb-5">
    <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-5 fw-bold mb-3">Get in Touch</h1>
        <p class="lead text-secondary">We'd love to hear from you. Reach out for inquiries, bookings, or feedback.</p>
    </div>
</div>

<div class="row g-5">
    <div class="col-lg-5">
        <div class="p-4 bg-secondary rounded-3 border border-secondary">
            <h3 class="h5 text-warning mb-4"><i class="bi bi-geo-alt me-2"></i>Location</h3>
            <p class="text-secondary small">102 Plaza Condominium<br>Near LRT2 Antipolo / SM Masinag<br>Antipolo City, Philippines</p>
            <hr class="border-secondary">
            <h3 class="h5 text-warning mb-4"><i class="bi bi-chat-dots me-2"></i>Connect</h3>
            <p class="text-secondary small"><i class="bi bi-facebook me-2"></i>Las Huertas Staycation</p>
            <p class="text-secondary small"><i class="bi bi-envelope me-2"></i>inquire@lashuertas.example</p>
            <p class="text-secondary small mb-0"><i class="bi bi-telephone me-2"></i>+63 912 345 6789</p>
            <hr class="border-secondary">
            <p class="text-muted small mb-0"><i class="bi bi-info-circle me-1"></i> We primarily communicate via Facebook Messenger and our inquiry form.</p>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="booking-form-container">
            <h3 class="h5 text-warning mb-4"><i class="bi bi-pencil-square me-2"></i>Send an Inquiry</h3>
            <form method="POST" action="#">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="contactName" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="contactName" name="contactName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="contactEmail" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="contactEmail" name="contactEmail" required>
                    </div>
                    <div class="col-12">
                        <label for="contactSubject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="contactSubject" name="contactSubject" required>
                    </div>
                    <div class="col-12">
                        <label for="contactMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="contactMessage" name="contactMessage" rows="5" required></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Send Inquiry</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>