<?php
// about.php - About Us Page
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - For Forex Trade LLC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root { --primary: #003366; --secondary: #ff8c00; --dark: #1a1a2e; }
        .navbar { background: var(--primary) !important; }
        .navbar-brand, .nav-link { color: white !important; }
        .nav-link:hover { color: var(--secondary) !important; }
        footer { background: var(--dark); color: #ccc; padding: 40px 0 20px; }
        footer a { color: #ccc; text-decoration: none; }
        footer a:hover { color: var(--secondary); }
        .page-header { background: linear-gradient(rgba(0,51,102,0.9), rgba(0,51,102,0.9)), url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'); background-size: cover; padding: 60px 0; color: white; text-align: center; }
        .about-img { border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .certificate-card { background: #f8f9fa; border-left: 5px solid var(--secondary); padding: 20px; border-radius: 10px; }
        .whatsapp-float { position: fixed; bottom: 30px; right: 30px; background-color: #25D366; color: white; border-radius: 50px; padding: 12px 20px; z-index: 1000; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold" data-aos="fade-up">About For Forex Trade LLC</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="100">Your Trusted Partner in Steel Structures</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Factory" class="img-fluid about-img">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="fw-bold">Who We Are</h2>
                <p class="mt-3">FOR FOREX TRADE LLC is a leading provider of high-quality steel structures and pre-engineered buildings. With our state-of-the-art manufacturing facility located at Lot Q9-10-15-16, Street No.7, Hai Son Expanded Industrial Park (Phase 3+4), Duc Hoa Ha Commune, Duc Hoa District, Long An Province, Vietnam, we serve clients across the region.</p>
                <p>Our commitment to quality is demonstrated by our EN ISO 3834-2:2021 certification from Bureau Veritas Vietnam, ensuring comprehensive quality requirements for fusion welding of metallic materials.</p>
                <div class="certificate-card mt-4">
                    <i class="fas fa-certificate fa-2x text-warning mb-2"></i>
                    <h5>Certified Excellence</h5>
                    <p class="mb-0">Certificate N°: INY-CER/23/1506 Rev.0<br>
                    Initial certification: 27th October 2024<br>
                    Valid until: 27th October 2027</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5" data-aos="fade-up">Our Factory & Operations</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center p-4">
                    <i class="fas fa-building fa-3x" style="color: var(--secondary);"></i>
                    <h4 class="mt-3">Modern Facility</h4>
                    <p>Located in Hai Son Expanded Industrial Park with advanced machinery and equipment.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center p-4">
                    <i class="fas fa-users fa-3x" style="color: var(--secondary);"></i>
                    <h4 class="mt-3">Skilled Workforce</h4>
                    <p>Certified welders and engineers dedicated to quality craftsmanship.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center p-4">
                    <i class="fas fa-chart-line fa-3x" style="color: var(--secondary);"></i>
                    <h4 class="mt-3">Quality Control</h4>
                    <p>Rigorous testing and inspection at every stage of production.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 800, once: true });
</script>
</body>
</html>