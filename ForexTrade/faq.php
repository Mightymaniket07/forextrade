<?php
// faq.php - FAQs Page
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - For Forex Trade LLC</title>
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
        .accordion-button:not(.collapsed) { background-color: var(--secondary); color: white; }
        .accordion-button:focus { box-shadow: none; border-color: var(--secondary); }
        .faq-category { background: #f8f9fa; border-radius: 10px; padding: 20px; margin-bottom: 30px; }
        .whatsapp-float { position: fixed; bottom: 30px; right: 30px; background-color: #25D366; color: white; border-radius: 50px; padding: 12px 20px; z-index: 1000; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold" data-aos="fade-up">Frequently Asked Questions</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="100">Find answers to common questions about our products and services</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="faq-category" data-aos="fade-up">
                    <h3 class="fw-bold mb-4"><i class="fas fa-certificate me-2" style="color: var(--secondary);"></i>Certification & Quality</h3>
                    <div class="accordion" id="faq1">
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q1">What is EN ISO 3834-2:2021 certification?</button></h2>
                            <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faq1"><div class="accordion-body">EN ISO 3834-2:2021 specifies comprehensive quality requirements for fusion welding of metallic materials. Our certification from Bureau Veritas Vietnam demonstrates our commitment to highest welding quality standards.</div></div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">How long is the certificate valid?</button></h2>
                            <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faq1"><div class="accordion-body">Our certificate (N°: INY-CER/23/1506 Rev.0) is valid from 27th October 2024 until 27th October 2027, subject to annual re-evaluation by Bureau Veritas auditors.</div></div>
                        </div>
                    </div>
                </div>

                <div class="faq-category" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="fw-bold mb-4"><i class="fas fa-industry me-2" style="color: var(--secondary);"></i>Products & Services</h3>
                    <div class="accordion" id="faq2">
                        <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">What products do you manufacture?</button></h2><div id="q3" class="accordion-collapse collapse"><div class="accordion-body">We manufacture steel structure products and pre-engineered steel buildings including industrial sheds, warehouses, commercial buildings, mezzanine floors, and custom steel fabrications.</div></div></div>
                        <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4">Do you provide installation services?</button></h2><div id="q4" class="accordion-collapse collapse"><div class="accordion-body">Yes, our scope of supply includes manufacturing, supplying, AND installation of steel structure products. We offer complete turnkey solutions.</div></div></div>
                        <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q5">Can you customize products as per requirements?</button></h2><div id="q5" class="accordion-collapse collapse"><div class="accordion-body">Absolutely! We specialize in custom-designed steel structures tailored to your specific project requirements, dimensions, and load specifications.</div></div></div>
                    </div>
                </div>

                <div class="faq-category" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="fw-bold mb-4"><i class="fas fa-truck me-2" style="color: var(--secondary);"></i>Orders & Support</h3>
                    <div class="accordion" id="faq3">
                        <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q6">How can I request a quote?</button></h2><div id="q6" class="accordion-collapse collapse"><div class="accordion-body">You can request a quote by visiting our Contact page, sending a message via WhatsApp, or emailing us with your project specifications. Our team will respond within 24 hours.</div></div></div>
                        <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q7">What is typical lead time?</button></h2><div id="q7" class="accordion-collapse collapse"><div class="accordion-body">Lead time varies based on project complexity and size. Typically, standard products take 2-4 weeks, while custom projects may take 4-8 weeks. Contact us for specific timelines.</div></div></div>
                        <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q8">Do you export internationally?</button></h2><div id="q8" class="accordion-collapse collapse"><div class="accordion-body">Yes, we serve clients both domestically in Vietnam and internationally. Contact us to discuss shipping and export arrangements.</div></div></div>
                    </div>
                </div>

                <div class="text-center mt-5" data-aos="fade-up">
                    <p>Still have questions? <a href="contact.php" style="color: var(--secondary);">Contact us directly</a> or chat on WhatsApp.</p>
                    <a href="https://wa.me/84987654321" class="btn btn-whatsapp" style="background:#25D366;"><i class="fab fa-whatsapp me-2"></i>Chat with Us</a>
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