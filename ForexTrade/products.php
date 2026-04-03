<?php
// products.php - Products Page
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products - For Forex Trade LLC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #003366;
            --secondary: #ff8c00;
            --dark: #1a1a2e;
        }
        .navbar { background: var(--primary) !important; }
        .navbar-brand, .nav-link { color: white !important; }
        .nav-link:hover { color: var(--secondary) !important; }
        .btn-whatsapp { background-color: #25D366; color: white; border-radius: 50px; padding: 8px 20px; }
        .btn-whatsapp:hover { background-color: #128C7E; color: white; }
        .product-card { transition: 0.3s; border: none; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.1); }
        .product-card:hover { transform: translateY(-10px); }
        .product-img { height: 250px; object-fit: cover; }
        footer { background: var(--dark); color: #ccc; padding: 40px 0 20px; }
        footer a { color: #ccc; text-decoration: none; }
        footer a:hover { color: var(--secondary); }
        .page-header { background: linear-gradient(rgba(0,51,102,0.9), rgba(0,51,102,0.9)), url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'); background-size: cover; padding: 60px 0; color: white; text-align: center; }
        .whatsapp-float { position: fixed; bottom: 30px; right: 30px; background-color: #25D366; color: white; border-radius: 50px; padding: 12px 20px; z-index: 1000; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold" data-aos="fade-up">Our Products</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="100">High-quality steel structures and pre-engineered buildings</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row" id="all-products"></div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/product-images.js"></script>
<script>
    AOS.init({ duration: 800, once: true });
    
    window.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('all-products');
        if (container && window.productData) {
            window.productData.forEach(product => {
                const col = document.createElement('div');
                col.className = 'col-md-4 col-lg-3 mb-4';
                col.innerHTML = `
                    <div class="card product-card h-100">
                        <img src="${product.image}" class="card-img-top product-img" alt="${product.name}">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">${product.name}</h5>
                            <p class="card-text small">${product.description}</p>
                            <button class="btn btn-whatsapp w-100 inquiry-btn" data-product="${product.name}">
                                <i class="fab fa-whatsapp me-2"></i>Inquire on WhatsApp
                            </button>
                        </div>
                    </div>
                `;
                container.appendChild(col);
            });

            document.querySelectorAll('.inquiry-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const productName = this.getAttribute('data-product');
                    const phone = "84987654321"; // Replace with actual number
                    const message = `I am interested in ${productName}. Please send me details, price, and specifications.`;
                    window.open(`https://wa.me/${phone}?text=${encodeURIComponent(message)}`, '_blank');
                });
            });
        }
    });
</script>
</body>
</html>