<?php
// index.php
$pageTitle = 'Home - Las Huertas Staycation';
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section mb-5">
    <h1 class="display-4 mb-3">Las Huertas Staycation</h1>
    <p class="lead mb-4">Different moods, different rooms, same <strong>#LasHuertasStaycation</strong></p>
    <a href="units.php" class="btn btn-primary btn-lg me-2">Explore Units</a>
    <a href="booking.php" class="btn btn-outline-primary btn-lg">Book Your Stay</a>
</section>

<!-- Welcome Section -->
<section class="row align-items-center g-5 mb-5">
    <div class="col-lg-6">
        <h2 class="section-title">Welcome to Las Huertas</h2>
        <p class="section-subtitle">Where every stay is designed to feel like home, but with a touch of luxury and personality.</p>
        <p>Our name "Las Huertas" reflects warmth, abundance, and the feeling of a private garden escape right in the heart of Antipolo.</p>
        <p>What started as a passion for creating unique spaces has grown into a collection of 7 signature units, each with its own distinct mood and character. From the maximalist energy of <strong>CASA ALLEGRO</strong> to the serene simplicity of <strong>CASA SEMPLICITA</strong>, we've curated every detail to match your vibe.</p>
        <p>Located just minutes from LRT2 Antipolo and SM Masinag, we offer the perfect balance of accessibility and tranquility.</p>
        <p class="fst-italic text-warning"><i class="bi bi-stars me-1"></i> Our promise: Clean, safe, reliable, and unforgettable stays.</p>
    </div>
    <div class="col-lg-6">
        <!-- Album 1: https://imgur.com/a/S5mR18o - Main exterior/lobby image -->
        <img src="https://imgur.com/a/S5mR18o">
    </div>
</section>

<!-- Host Section -->
<section class="bg-secondary rounded-4 p-5 mb-5 border border-secondary">
    <div class="row align-items-center g-4">
        <div class="col-md-3 text-center">
            <!-- Album 1: https://imgur.com/a/S5mR18o - Host portrait -->
            <img src="https://via.placeholder.com/200x200/1A1E24/C9A227?text=Mary+Sunshine" alt="Mary Sunshine Huertas" class="rounded-circle img-fluid border border-primary" style="max-width: 180px;">
        </div>
        <div class="col-md-9">
            <h3 class="text-warning">Hosted by Mary Sunshine Huertas</h3>
            <p class="text-light mb-0">Her main goal is to ensure that each and every one of her guests has an enjoyable stay, but she is equally committed to ensuring that each client feels safe and at home as soon as they step through her door.</p>
            <p class="text-muted small mt-2 mb-0">Owner, Las Huertas Staycation</p>
        </div>
    </div>
</section>

<!-- Featured Units Grid -->
<section class="mb-5">
    <h2 class="section-title text-center">Our 7 Signature Units</h2>
    <p class="section-subtitle text-center">A mood for every stay — explore our curated collection.</p>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php
        // Array of units for the homepage grid
        $units = [
            ['name' => 'Casa Fino', 'desc' => 'Luxurious elegance · clean minimalist style', 'img' => 'https://via.placeholder.com/400x300/1A1E24/C9A227?text=Casa+Fino'],
            ['name' => 'Casa Marino', 'desc' => 'Coastal vibes · nautical ambience', 'img' => 'https://via.placeholder.com/400x300/1A1E24/C9A227?text=Casa+Marino'],
            ['name' => 'Casa Victoria', 'desc' => 'Vintage vibes · golden elegance', 'img' => 'https://via.placeholder.com/400x300/1A1E24/C9A227?text=Casa+Victoria'],
            ['name' => 'Casa Semplicita', 'desc' => 'Genera simplicity · warm wooden style', 'img' => 'https://via.placeholder.com/400x300/1A1E24/C9A227?text=Casa+Semplicita'],
            ['name' => 'Casa Industria', 'desc' => 'Warm home stay · stylish comfort', 'img' => 'https://via.placeholder.com/400x300/1A1E24/C9A227?text=Casa+Industria'],
            ['name' => 'Casa Macho', 'desc' => 'Retro style · barcode design', 'img' => 'https://via.placeholder.com/400x300/1A1E24/C9A227?text=Casa+Macho'],
            ['name' => 'Casa Allegro', 'desc' => 'Maximalist design · dim-energy vibes', 'img' => 'https://via.placeholder.com/400x300/1A1E24/C9A227?text=Casa+Allegro'],
        ];
        foreach ($units as $unit): ?>
        <div class="col">
            <div class="card unit-card h-100">
                <!-- 
                  Album 2: https://imgur.com/a/UXaJUTu - Unit photos for Casa Fino, Marino, Victoria, Semplicita, Industria, Macho, Allegro
                  Album 3: https://imgur.com/a/ocTucZh - Additional unit detail shots
                  Album 4: https://imgur.com/a/KY0umiI - Lifestyle and amenity photos
                -->
                <img src="<?php echo $unit['img']; ?>" class="card-img-top" alt="<?php echo $unit['name']; ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php echo $unit['name']; ?></h5>
                    <p class="card-text flex-grow-1"><?php echo $unit['desc']; ?></p>
                    <div class="mt-2">
                        <span class="amenity-tag"><i class="bi bi-snow me-1"></i>A/C</span>
                        <span class="amenity-tag"><i class="bi bi-wifi me-1"></i>Fast WiFi</span>
                        <span class="amenity-tag"><i class="bi bi-tv me-1"></i>Smart TV</span>
                    </div>
                    <a href="units.php#<?php echo strtolower(str_replace(' ', '-', $unit['name'])); ?>" class="btn btn-outline-primary btn-sm mt-3 w-100">Explore <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Call to Action -->
<section class="text-center py-5 border-top border-secondary">
    <h2 class="section-title">Ready for your staycation?</h2>
    <p class="section-subtitle">Book directly with us and enjoy a clean, safe, and unforgettable stay.</p>
    <a href="booking.php" class="btn btn-primary btn-lg">Make a Reservation</a>
</section>

<?php require_once 'includes/footer.php'; ?>