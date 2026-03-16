<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24/7 Pharmacy Services - Reliable Healthcare | Prayag Hospital</title>
    <?php include 'header-links.php'; ?>

    <style>
        .pharmacy-feature-card {
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid #f1f5f9;
        }
        .pharmacy-feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(74, 143, 115, 0.1);
            border-color: var(--prayag-teal);
        }
        .pharmacy-feature-icon {
            width: 70px;
            height: 70px;
            background: rgba(74, 143, 115, 0.1);
            color: var(--prayag-teal);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }
        .pharmacy-feature-card:hover .pharmacy-feature-icon {
            background: var(--prayag-teal);
            color: #fff;
        }
        .pharmacy-stats {
            background: var(--prayag-teal);
            color: #fff;
            padding: 80px 0;
            margin: 60px 0;
        }
        .stat-box {
            text-align: center;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 5px;
            display: block;
        }
        .stat-text {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        .category-pill {
            display: inline-block;
            padding: 10px 25px;
            background: #f1f5f9;
            border-radius: 50px;
            color: var(--dark-text);
            font-weight: 600;
            margin: 5px;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }
        .category-pill:hover {
            background: var(--prayag-teal);
            color: #fff;
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="support-services.php">Support Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pharmacy</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="hero-content-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1 class="hero-main-title">Trusted 24/7 Pharmacy Services</h1>
                        <p class="hero-subtitle" style="color:#000 !important">
                            Your health doesn't follow a schedule, and neither do we. Prayag Hospital's in-house pharmacy offers a comprehensive range of genuine medicines and surgical supplies around the clock. We are dedicated to ensuring that life-saving drugs and essential healthcare products are always accessible to our patients and the community.
                        </p>
                        <p class="hero-subtitle" style="color:#000 !important">
                            With a focus on safety and accuracy, our licensed pharmacists utilize advanced inventory systems and cold-chain storage to maintain the highest standards of pharmaceutical care. Whether it's post-surgery recovery or managing chronic conditions, we provide reliable support whenever you need it most.
                        </p>                        
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-image-container">
                            <img src="../assets/images/pharmacy-thumb.webp" alt="Prayag Hospital Pharmacy" class="hero-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="overview-section" id="overview">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="overview-heading">Excellence in Pharmaceutical Care</h2>
                    <p class="overview-text">
                        Prayag Hospital Pharmacy is committed to providing high-quality, authentic medicines to our patients. Managed by licensed and experienced pharmacists, our pharmacy ensures that every prescription is filled accurately and with care.
                    </p>
                    <p class="overview-text">
                        We maintain a strictly controlled environment with advanced storage facilities to preserve the efficacy of life-saving drugs, vaccines, and biologics. Our computerized system ensures seamless billing and inventory management.
                    </p>
                    <div class="mt-4">
                        <div class="category-pill">Prescription Drugs</div>
                        <div class="category-pill">OTC Medicines</div>
                        <div class="category-pill">Surgical Supplies</div>
                        <div class="category-pill">Health Supplements</div>
                        <div class="category-pill">Baby Care</div>
                        <div class="category-pill">Wellness Products</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="overview-image-wrapper">
                        <img src="../assets/images/pharmacy-main.webp" alt="Pharmacy Interior" class="overview-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section class="py-5" style="background:#f8fafc;">
        <div class="container py-4">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Why Choose Prayag Pharmacy?</h2>
                <p class="section-subtitle">Delivering reliability and care with every dose.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="pharmacy-feature-card">
                        <div class="pharmacy-feature-icon"><i class="fas fa-clock"></i></div>
                        <h4>24/7 Availability</h4>
                        <p>Open 365 days a year, including holidays, to ensure you never run out of vital medications.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pharmacy-feature-card">
                        <div class="pharmacy-feature-icon"><i class="fas fa-certificate"></i></div>
                        <h4>100% Genuine</h4>
                        <p>We source all medicines directly from authorized distributors to guarantee authenticity and safety.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pharmacy-feature-card">
                        <div class="pharmacy-feature-icon"><i class="fas fa-user-tie"></i></div>
                        <h4>Expert Pharmacists</h4>
                        <p>Our qualified staff provides professional guidance on dosage and potential interactions.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pharmacy-feature-card">
                        <div class="pharmacy-feature-icon"><i class="fas fa-snowflake"></i></div>
                        <h4>Cold Chain Storage</h4>
                        <p>State-of-the-art refrigeration for temperature-sensitive drugs like insulin and vaccines.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pharmacy-feature-card">
                        <div class="pharmacy-feature-icon"><i class="fas fa-truck"></i></div>
                        <h4>Home Delivery</h4>
                        <p>Complimentary home delivery services within a specific radius of the hospital (Contact us for details).</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pharmacy-feature-card">
                        <div class="pharmacy-feature-icon"><i class="fas fa-file-invoice"></i></div>
                        <h4>Digital Records</h4>
                        <p>Computerized billing and record-keeping for easy tracking of your medical history.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container py-4">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Frequently Asked Questions</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="pharmacyFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#f1">
                                    Do I need a prescription to buy medicines?
                                </button>
                            </h2>
                            <div id="f1" class="accordion-collapse collapse show" data-bs-parent="#pharmacyFaq">
                                <div class="accordion-body">
                                    Yes, for Schedule H and specialized drugs, a valid prescription from a registered medical practitioner is mandatory. Over-the-counter (OTC) medicines can be purchased directly.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#f2">
                                    Are you open on Sundays and public holidays?
                                </button>
                            </h2>
                            <div id="f2" class="accordion-collapse collapse" data-bs-parent="#pharmacyFaq">
                                <div class="accordion-body">
                                    Yes, our pharmacy is open 24/7, every single day of the year, including all Sundays and public holidays.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#f3">
                                    Do you provide home delivery?
                                </button>
                            </h2>
                            <div id="f3" class="accordion-collapse collapse" data-bs-parent="#pharmacyFaq">
                                <div class="accordion-body">
                                    Yes, we offer home delivery services for patients residing within a 5km radius of the hospital. Please call our helpline to place your order.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>
</body>

</html>
