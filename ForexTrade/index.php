<?php
// index.php - Home Page
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Forex Trade LLC - Steel Structure & Pre-Engineered Buildings</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary: #003366;
            --secondary: #ff8c00;
            --dark: #1a1a2e;
            --light: #f8f9fa;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        .navbar {
            background: var(--primary) !important;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .nav-link {
            color: white !important;
            font-weight: 500;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: var(--secondary) !important;
        }
        .hero {
            background: linear-gradient(rgba(0,51,102,0.8), rgba(0,51,102,0.8)), url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            color: white;
        }
        .btn-whatsapp {
            background-color: #25D366;
            color: white;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-whatsapp:hover {
            background-color: #128C7E;
            color: white;
            transform: scale(1.05);
        }
        .btn-primary-custom {
            background-color: var(--secondary);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: bold;
        }
        .btn-primary-custom:hover {
            background-color: #e07a00;
            transform: scale(1.05);
        }
        .product-card {
            transition: 0.3s;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }
        .product-img {
            height: 250px;
            object-fit: cover;
        }
        footer {
            background: var(--dark);
            color: #ccc;
            padding: 40px 0 20px;
        }
        footer a {
            color: #ccc;
            text-decoration: none;
        }
        footer a:hover {
            color: var(--secondary);
        }
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25D366;
            color: white;
            border-radius: 50px;
            padding: 12px 20px;
            z-index: 1000;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            text-decoration: none;
            font-weight: bold;
        }
        .whatsapp-float:hover {
            background-color: #128C7E;
            color: white;
        }
        .certificate-badge {
            background: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            border-left: 5px solid var(--secondary);
        }
        .page-header {
            background: linear-gradient(rgba(0,51,102,0.9), rgba(0,51,102,0.9)), url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            padding: 60px 0;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Include Header -->
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up">
                <h1 class="display-4 fw-bold">Quality Steel Structures & Pre-Engineered Buildings</h1>
                <p class="lead mt-3">EN ISO 3834-2:2021 Certified | Manufacturing, Supplying & Installation</p>
                <div class="mt-4">
                    <a href="products.php" class="btn btn-primary-custom me-3">Explore Products</a>
                    <a href="contact.php" class="btn btn-whatsapp"><i class="fab fa-whatsapp me-2"></i>Get Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certificate Showcase -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8" data-aos="fade-right">
                <h2 class="fw-bold">EN ISO 3834-2:2021 Certified</h2>
                <p class="mt-3">FOR FOREX TRADE LLC is proud to be certified by Bureau Veritas Vietnam for comprehensive quality requirements in fusion welding of metallic materials.</p>
                <div class="certificate-badge mt-3">
                    <i class="fas fa-certificate fa-2x text-warning mb-2"></i>
                    <p class="mb-0"><strong>Certificate N°:</strong> INY-CER/23/1506 Rev.0</p>
                    <p><strong>Valid until:</strong> 27th October 2027</p>
                </div>
            </div>
            <div class="col-lg-4 text-center" data-aos="fade-left">
                <img src="assets/bureaveritas.png" alt="Bureau Veritas" class="img-fluid" style="max-width: 200px;">
                <p class="mt-2"><small>Bureau Veritas Vietnam Certification</small></p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5" data-aos="fade-up">Our Featured Products</h2>
        <div class="row" id="featured-products"></div>
        <div class="text-center mt-4">
            <a href="products.php" class="btn btn-primary-custom">View All Products <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5" data-aos="fade-up">Why Choose For Forex Trade LLC?</h2>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center p-4">
                    <i class="fas fa-trophy fa-3x" style="color: var(--secondary);"></i>
                    <h4 class="mt-3">ISO Certified</h4>
                    <p>EN ISO 3834-2:2021 certified welding quality management system.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center p-4">
                    <i class="fas fa-hard-hat fa-3x" style="color: var(--secondary);"></i>
                    <h4 class="mt-3">Expert Team</h4>
                    <p>Skilled welders and engineers with years of experience.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center p-4">
                    <i class="fas fa-truck fa-3x" style="color: var(--secondary);"></i>
                    <h4 class="mt-3">End-to-End Service</h4>
                    <p>Manufacturing, supplying, and installation all under one roof.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Product Images JS -->
<script src="assets/js/product-images.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });

    // Load featured products
    window.addEventListener('DOMContentLoaded', function() {
        const featuredContainer = document.getElementById('featured-products');
        if (featuredContainer && window.productData) {
            const featured = window.productData.slice(0, 3);
            featured.forEach(product => {
                const col = document.createElement('div');
                col.className = 'col-md-4 mb-4';
                col.innerHTML = `
                    <div class="card product-card h-100">
                        <img src="${product.image}" class="card-img-top product-img" alt="${product.name}">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">${product.name}</h5>
                            <p class="card-text">${product.description}</p>
                            <button class="btn btn-whatsapp w-100 inquiry-btn" data-product="${product.name}">
                                <i class="fab fa-whatsapp me-2"></i>Inquire Now
                            </button>
                        </div>
                    </div>
                `;
                featuredContainer.appendChild(col);
            });

            // Add event listeners to inquiry buttons
            document.querySelectorAll('.inquiry-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const productName = this.getAttribute('data-product');
                    const phone = "84987654321"; // Replace with actual WhatsApp number
                    const message = `Hello, I am interested in ${productName}. Please share details and price.`;
                    window.open(`https://wa.me/${phone}?text=${encodeURIComponent(message)}`, '_blank');
                });
            });
        }
    });
</script>
</body>
</html>