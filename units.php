<?php
// units.php
$pageTitle = 'Our Units - Las Huertas Staycation';
require_once 'includes/header.php';
?>

<div class="row mb-5">
    <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-5 fw-bold mb-3">Our 7 Signature Units</h1>
        <p class="lead text-secondary">A mood for every stay — from maximalist energy to serene simplicity.</p>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
    <?php
    $units = [
        ['id' => 'casa-fino', 'name' => 'Casa Fino', 'desc' => 'Luxurious elegance · clean minimalist style', 'img' => 'https://via.placeholder.com/600x400/1A1E24/C9A227?text=Casa+Fino'],
        ['id' => 'casa-marino', 'name' => 'Casa Marino', 'desc' => 'Coastal vibes · nautical ambience', 'img' => 'https://via.placeholder.com/600x400/1A1E24/C9A227?text=Casa+Marino'],
        ['id' => 'casa-victoria', 'name' => 'Casa Victoria', 'desc' => 'Vintage vibes · golden elegance', 'img' => 'https://via.placeholder.com/600x400/1A1E24/C9A227?text=Casa+Victoria'],
        ['id' => 'casa-semplicita', 'name' => 'Casa Semplicita', 'desc' => 'Genera simplicity · warm wooden style', 'img' => 'https://via.placeholder.com/600x400/1A1E24/C9A227?text=Casa+Semplicita'],
        ['id' => 'casa-industria', 'name' => 'Casa Industria', 'desc' => 'Warm home stay · stylish comfort', 'img' => 'https://via.placeholder.com/600x400/1A1E24/C9A227?text=Casa+Industria'],
        ['id' => 'casa-macho', 'name' => 'Casa Macho', 'desc' => 'Retro style · barcode design', 'img' => 'https://via.placeholder.com/600x400/1A1E24/C9A227?text=Casa+Macho'],
        ['id' => 'casa-allegro', 'name' => 'Casa Allegro', 'desc' => 'Maximalist design · dim-energy vibes', 'img' => 'https://via.placeholder.com/600x400/1A1E24/C9A227?text=Casa+Allegro'],
    ];
    foreach ($units as $unit): ?>
    <div class="col" id="<?php echo $unit['id']; ?>">
        <div class="card unit-card h-100">
            <!-- 
              Album 2: https://imgur.com/a/UXaJUTu - Primary unit photos
              Album 3: https://imgur.com/a/ocTucZh - Unit detail and styling shots
            -->
            <img src="<?php echo $unit['img']; ?>" class="card-img-top" alt="<?php echo $unit['name']; ?>">
            <div class="card-body d-flex flex-column">
                <h4 class="card-title"><?php echo $unit['name']; ?></h4>
                <p class="card-text text-secondary flex-grow-1"><?php echo $unit['desc']; ?></p>
                <div class="mb-3">
                    <span class="amenity-tag"><i class="bi bi-snow me-1"></i>A/C</span>
                    <span class="amenity-tag"><i class="bi bi-wifi me-1"></i>Fast WiFi</span>
                    <span class="amenity-tag"><i class="bi bi-tv me-1"></i>Smart TV</span>
                </div>
                <a href="booking.php?unit=<?php echo urlencode($unit['name']); ?>" class="btn btn-primary w-100">Book This Unit</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php require_once 'includes/footer.php'; ?>