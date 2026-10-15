<?php
// booking.php
$pageTitle = 'Book Your Stay - Las Huertas Staycation';
require_once 'includes/header.php';

// Simple form submission handling (in production, save to database)
$submitted = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In a real application, you would save this to a database and send an email notification.
    $submitted = true;
}
?>

<div class="row mb-5">
    <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-5 fw-bold mb-3">Book Your Stay</h1>
        <p class="lead text-secondary">Fill out the form below and we'll get back to you to confirm your reservation. No online payment required — deposits are processed upon arrival.</p>
    </div>
</div>

<?php if ($submitted): ?>
    <div class="alert alert-success bg-success-subtle text-success border-success text-center mb-5" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> Thank you! Your booking request has been received. We will contact you shortly to confirm availability and details.
    </div>
<?php endif; ?>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="booking-form-container">
            <form method="POST" action="booking.php">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="pax" class="form-label">Number of Guests</label>
                        <select class="form-select" id="pax" name="pax" required>
                            <option value="" selected disabled>Select guests</option>
                            <option value="1">1 Guest</option>
                            <option value="2">2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="4">4 Guests (Max)</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="unit" class="form-label">Select Unit</label>
                        <select class="form-select" id="unit" name="unit" required>
                            <option value="" selected disabled>Choose your Casa</option>
                            <option value="Casa Fino">Casa Fino</option>
                            <option value="Casa Marino">Casa Marino</option>
                            <option value="Casa Victoria">Casa Victoria</option>
                            <option value="Casa Semplicita">Casa Semplicita</option>
                            <option value="Casa Industria">Casa Industria</option>
                            <option value="Casa Macho">Casa Macho</option>
                            <option value="Casa Allegro">Casa Allegro</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="checkin" class="form-label">Check-in Date</label>
                        <input type="date" class="form-control" id="checkin" name="checkin" required>
                    </div>
                    <div class="col-md-6">
                        <label for="checkout" class="form-label">Check-out Date</label>
                        <input type="date" class="form-control" id="checkout" name="checkout" required>
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">Special Requests / Inquiries</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Let us know if you have any special requests..."></textarea>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="agreePolicies" required>
                            <label class="form-check-label text-secondary small" for="agreePolicies">
                                I have read and agree to the <a href="faq.php" class="text-warning">safety policies and cancellation rules</a>.
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Submit Booking Request</button>
                    </div>
                </div>
            </form>
            <p class="text-muted small text-center mt-3 mb-0">We will confirm your booking via email or Facebook Messenger within 24 hours.</p>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>