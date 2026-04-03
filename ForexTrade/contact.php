<?php
// contact.php - Contact Page
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - For Forex Trade LLC</title>
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
        .page-header { background: linear-gradient(rgba(0,51,102,0.9), rgba(0,51,102,0.9)), url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'); background-size: cover; padding: 60px 0; color: white; text-align: center; }
        .contact-card { background: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%; }
        .form-control, .form-select { border-radius: 10px; padding: 12px; border: 1px solid #ddd; }
        .btn-submit { background-color: #25D366; color: white; border-radius: 50px; padding: 12px 30px; font-weight: bold; border: none; width: 100%; }
        .btn-submit:hover { background-color: #128C7E; }
        .whatsapp-float { position: fixed; bottom: 30px; right: 30px; background-color: #25D366; color: white; border-radius: 50px; padding: 12px 20px; z-index: 1000; text-decoration: none; font-weight: bold; }
        .info-icon { width: 50px; height: 50px; background: var(--secondary); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: white; margin-right: 15px; }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold" data-aos="fade-up">Contact Us</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="100">Get in touch for quotes, inquiries, or support</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-4" data-aos="fade-right">
                <div class="contact-card">
                    <h3 class="fw-bold mb-4">Get In Touch</h3>
                    <div class="d-flex mb-4">
                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div><strong>Factory Address</strong><br>Lot Q9-10-15-16, Street No.7,<br>Hai Son Expanded Industrial Park (Phase 3+4),<br>Duc Hoa Ha Commune, Duc Hoa District,<br>Long An Province, Vietnam</div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="info-icon"><i class="fas fa-phone"></i></div>
                        <div><strong>Phone</strong><br><a href="tel:+84987654321">+84 987 654 321</a></div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="info-icon"><i class="fab fa-whatsapp"></i></div>
                        <div><strong>WhatsApp</strong><br><a href="https://wa.me/84987654321">+84 987 654 321</a></div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="info-icon"><i class="fas fa-envelope"></i></div>
                        <div><strong>Email</strong><br><a href="mailto:info@forforextrade.com">info@forforextrade.com</a></div>
                    </div>
                    <div class="mt-4">
                        <a href="https://wa.me/84987654321" class="btn btn-whatsapp w-100" style="background:#25D366;"><i class="fab fa-whatsapp me-2"></i>Chat on WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="contact-card">
                    <h3 class="fw-bold mb-4">Send Us a Message</h3>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone *</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Product Interested In</label>
                                <select class="form-select" id="product">
                                    <option>Steel Structures</option>
                                    <option>Pre-Engineered Buildings</option>
                                    <option>Custom Fabrication</option>
                                    <option>Installation Services</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message *</label>
                            <textarea class="form-control" rows="5" id="message" required></textarea>
                        </div>
                        <button type="submit" class="btn-submit"><i class="fab fa-whatsapp me-2"></i>Send via WhatsApp</button>
                    </form>
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
    
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const product = document.getElementById('product').value;
        const message = document.getElementById('message').value;
        const whatsappNumber = "84987654321"; // Replace with actual number
        
        const fullMessage = `*New Inquiry from Website*%0A%0A*Name:* ${name}%0A*Email:* ${email}%0A*Phone:* ${phone}%0A*Product Interest:* ${product}%0A*Message:* ${message}`;
        
        window.open(`https://wa.me/${whatsappNumber}?text=${fullMessage}`, '_blank');
    });
</script>
</body>
</html>