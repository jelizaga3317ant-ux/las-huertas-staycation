<?php
// about.php
$pageTitle = 'About - Las Huertas Staycation';
require_once 'includes/header.php';
?>

<div class="row mb-5">
    <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-5 fw-bold mb-3">About Las Huertas Staycation</h1>
        <p class="lead text-secondary">A staycation website project focused on helping users discover, compare, and book local accommodations in Antipolo.</p>
    </div>
</div>

<!-- Host Section -->
<section class="row justify-content-center mb-5">
    <div class="col-lg-8">
        <div class="bg-secondary rounded-4 p-5 border border-secondary text-center">
            <!-- Album 1: https://imgur.com/a/S5mR18o - Host portrait -->
            <img src="https://via.placeholder.com/200x200/1A1E24/C9A227?text=Mary+Sunshine" alt="Mary Sunshine Huertas" class="rounded-circle img-fluid border border-primary mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            <h3 class="h4 text-warning mb-2">Hosted by Mary Sunshine Huertas</h3>
            <p class="text-light mb-0">Her main goal is to ensure that each and every one of her guests has an enjoyable stay, but she is equally committed to ensuring that each client feels safe and at home as soon as they step through her door.</p>
            <p class="text-muted small mt-3 mb-0">Owner, Las Huertas Staycation</p>
        </div>
    </div>
</section>

<hr class="border-secondary my-5">

<!-- Objectives, Target Users, Scope, Limitations -->
<div class="row g-4">
    <div class="col-md-6">
        <div class="p-4 bg-secondary rounded-3 border border-secondary h-100">
            <h3 class="h5 text-warning mb-3"><i class="bi bi-bullseye me-2"></i>Project Objectives</h3>
            <p class="text-secondary small">A staycation website project focuses on helping users discover, compare, and book local accommodations, short-term rentals, or weekend getaways without traveling far, all in one site.</p>
            <ul class="list-unstyled text-secondary small">
                <li><i class="bi bi-check2 me-1 text-warning"></i> User Registration / Booking</li>
                <li><i class="bi bi-check2 me-1 text-warning"></i> Room Gallery & Search</li>
                <li><i class="bi bi-check2 me-1 text-warning"></i> Online Reservation System</li>
                <li><i class="bi bi-check2 me-1 text-warning"></i> Notifications & Inquiries</li>
                <li><i class="bi bi-check2 me-1 text-warning"></i> Content Management (Admin)</li>
                <li><i class="bi bi-check2 me-1 text-warning"></i> FAQ & Safety Policies</li>
                <li><i class="bi bi-check2 me-1 text-warning"></i> Reporting / Analytics</li>
                <li><i class="bi bi-check2 me-1 text-warning"></i> Responsive Design</li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="p-4 bg-secondary rounded-3 border border-secondary h-100">
            <h3 class="h5 text-warning mb-3"><i class="bi bi-people me-2"></i>Target Users</h3>
            <p class="text-secondary small"><strong>Primary Users:</strong></p>
            <ul class="text-secondary small">
                <li>Staycationers from Metro Manila and nearby provinces</li>
                <li>Ages 18–45</li>
                <li>Couples, families, and groups looking for a short getaway near Antipolo</li>
            </ul>
            <p class="text-secondary small mt-3"><strong>Secondary Users:</strong></p>
            <ul class="text-secondary small">
                <li>Management and staff of Las Huertas Staycation</li>
                <li>Use the admin dashboard to manage bookings and update unit availability</li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="p-4 bg-secondary rounded-3 border border-secondary h-100">
            <h3 class="h5 text-warning mb-3"><i class="bi bi-diagram-3 me-2"></i>Scope</h3>
            <p class="text-secondary small"><strong>Front-end:</strong> Homepage, About Us, Unit Gallery, FAQ, Safety Policies, Booking Form</p>
            <p class="text-secondary small"><strong>Back-end:</strong> User authentication, booking database, admin dashboard, notification system</p>
            <p class="text-secondary small"><strong>Database:</strong> Storage for user accounts, unit details, bookings, and availability</p>
            <p class="text-secondary small"><strong>Admin Module:</strong> Management of units, bookings, reports, and policies</p>
            <p class="text-secondary small"><strong>Responsive Design:</strong> Fully functional on desktop, tablet, and mobile devices</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="p-4 bg-secondary rounded-3 border border-secondary h-100">
            <h3 class="h5 text-warning mb-3"><i class="bi bi-exclamation-triangle me-2"></i>Limitations</h3>
            <ul class="text-secondary small">
                <li>No online payment gateway — deposits and payments are processed offline or upon arrival</li>
                <li>No live chat support — communication is limited to the inquiry form and Facebook Messenger</li>
                <li>Limited to 7 units — expansion would require additional development</li>
                <li>Web-based only — no native mobile application is included</li>
                <li>Technical constraints — limited hosting resources and no third-party API integration for maps or SMS</li>
                <li>Resource constraints — development is limited to the skills of the student team and the semester timeframe</li>
                <li>Guest pax — Max of 4 pax</li>
            </ul>
        </div>
    </div>
</div>

<hr class="border-secondary my-5">

<!-- FAQ & Safety Policies Section (Merged from faq.php) -->
<div class="row mb-5">
    <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-5 fw-bold mb-3">FAQ & Safety Policies</h1>
        <p class="lead text-secondary">Everything you need to know before your stay.</p>
    </div>
</div>

<div class="row justify-content-center mb-5">
    <div class="col-lg-8">
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="bi bi-clock me-2"></i>What are the check-in and check-out times?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Check-in is at 2:00 PM and check-out is at 12:00 NN. Early check-in and late check-out may be arranged subject to availability.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="bi bi-people me-2"></i>What is the maximum guest capacity?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Each unit has a maximum capacity of <strong>4 guests</strong>. Please indicate the correct number of guests when booking.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="bi bi-credit-card me-2"></i>Do you accept online payments?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We currently do not have an online payment gateway. Deposits and payments are processed offline or upon arrival. We will provide payment instructions after confirming your booking.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <i class="bi bi-shield-check me-2"></i>What are your safety protocols?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <ul class="mb-0">
                            <li>All units are thoroughly cleaned and sanitized between guests.</li>
                            <li>Smoke detectors and fire extinguishers are available in common areas.</li>
                            <li>Emergency contact numbers are posted in each unit.</li>
                            <li>Please report any safety concerns to the host immediately.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <i class="bi bi-x-circle me-2"></i>What is your cancellation policy?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Cancellations made 7 days or more before the check-in date are fully refundable. Cancellations made within 7 days may be subject to a fee. Please contact us for more details.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>