<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank - 24/7 Life Saving Support | Prayag Hospital</title>

    <?php include 'header-links.php'; ?>

    <style>
        .blood-group-item {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid #eee;
        }
        .blood-group-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(220, 38, 38, 0.1);
            border-color: #dc2626;
        }
        .blood-group-name {
            font-size: 2.5rem;
            font-weight: 800;
            color: #dc2626;
            margin-bottom: 5px;
        }
        .blood-group-status {
            font-size: 0.9rem;
            color: #10b981;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .blood-drop-icon {
            position: absolute;
            top: -10px;
            right: -10px;
            font-size: 4rem;
            color: #dc2626;
            z-index: 0;
            opacity: 0.7;
        }
        .blood-group-item * {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Breadcrumb Navigation -->
        <div class="breadcrumb-wrapper">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Support Services</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Blood Bank
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Hero Content -->
        <div class="hero-content-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column: Text Content -->
                    <div class="col-lg-7 col-md-12">
                        <h1 class="hero-main-title">
                            24/7 State-of-the-Art Blood Bank & Storage
                        </h1>
                        <p class="hero-subtitle" style="color:#000 !important">
                            Prayag Hospital's Blood Bank is a licensed unit dedicated to providing safe and quality blood and its components. We follow stringent international protocols for screening and storage to ensure every drop saves a life.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="hero-cta-buttons">
                            <a href="tel:01204021900" class="btn btn-appointment">
                                Emergency Support
                            </a>                            
                        </div>

                        <!-- Hero Stats -->
                        <div class="hero-stats">
                            <div class="hero-stat-item">
                                <strong>NABL Quality Standards</strong>
                                Comprehensive screening for HIV, Hepatitis, Malaria, and Syphilis using advanced diagnostic technology.
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Hero Image -->
                    <div class="col-lg-5 col-md-12">
                        <div class="hero-image-wrapper">
                            <div class="hero-image-container">
                                <img src="../assets/images/blood-donate.webp"
                                    alt="Blood Bank at Prayag Hospital" class="hero-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Table of Contents Navigation Strip -->
    <section class="toc-section">
        <div class="container-fluid px-0">
            <ul class="toc-nav">
                <li class="toc-nav-item">
                    <a href="#overview" class="toc-nav-link">Overview</a>
                </li>
                <li class="toc-nav-item">
                    <a href="#inventory" class="toc-nav-link">Availability</a>
                </li>
                <li class="toc-nav-item">
                    <a href="#components" class="toc-nav-link">Components</a>
                </li>
                <li class="toc-nav-item">
                    <a href="#donor-guide" class="toc-nav-link">Donor Guide</a>
                </li>
                <li class="toc-nav-item">
                    <a href="#why-choose-us" class="toc-nav-link">Why Choose Us</a>
                </li>
                <li class="toc-nav-item">
                    <a href="#faq" class="toc-nav-link">FAQ</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="overview-section" id="overview">
        <div class="container">
            <div class="overview-content">
                <h2 class="overview-heading">Lifeline for Critical Care</h2>
                <p class="overview-text">
                    Blood transfusion is a critical component of modern healthcare, essential for surgeries, trauma care, and managing chronic conditions like thalassemia and cancer. Prayag Hospital's Blood Bank operates round-the-clock to meet these vital needs.
                </p>
                <p class="overview-text">
                    We maintain a robust inventory of varied blood groups and utilize component separation technology. This allows us to provide specific blood products like Packed Red Blood Cells (PRBC), Fresh Frozen Plasma (FFP), and Platelet Concentrates, ensuring targeted treatment for our patients.
                </p>
                <p class="overview-text">
                    Safety is our topmost priority. Every unit of blood collected undergoes rigorous NAT (Nucleic Acid Testing) and conventional screening to prevent transfusion-transmitted infections, providing a safe lifeline for those in need.
                </p>
            </div>           

            <div class="overview-highlights">
                <div class="overview-highlight">
                    <i class="fas fa-vial"></i>
                    <h4>Component Separation</h4>
                    <p>Advanced equipment to separate whole blood into RBCs, Plasma, and Platelets.</p>
                </div>
                <div class="overview-highlight">
                    <i class="fas fa-shield-virus"></i>
                    <h4>Stringent Screening</h4>
                    <p>Mandatory testing for all blood-borne diseases using highly sensitive assays.</p>
                </div>
                <div class="overview-highlight">
                    <i class="fas fa-truck-loading"></i>
                    <h4>24/7 Supply</h4>
                    <p>Constant availability for emergency trauma, obstetric cases, and major surgeries.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Inventory Section -->
    <section class="conditions-section" id="inventory" style="background: #fff5f5;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Blood Group Availability</h2>
                <p class="section-subtitle">
                    We maintain stocks for all major blood groups. Please call for real-time availability.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="blood-group-item">
                        <i class="fas fa-tint blood-drop-icon"></i>
                        <div class="blood-group-name">A+</div>
                        <div class="blood-group-status">Available</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="blood-group-item">
                        <i class="fas fa-tint blood-drop-icon"></i>
                        <div class="blood-group-name">A-</div>
                        <div class="blood-group-status">Available</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="blood-group-item">
                        <i class="fas fa-tint blood-drop-icon"></i>
                        <div class="blood-group-name">B+</div>
                        <div class="blood-group-status">Available</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="blood-group-item">
                        <i class="fas fa-tint blood-drop-icon"></i>
                        <div class="blood-group-name">B-</div>
                        <div class="blood-group-status">Available</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="blood-group-item">
                        <i class="fas fa-tint blood-drop-icon"></i>
                        <div class="blood-group-name">O+</div>
                        <div class="blood-group-status">Available</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="blood-group-item">
                        <i class="fas fa-tint blood-drop-icon"></i>
                        <div class="blood-group-name">O-</div>
                        <div class="blood-group-status">Available</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="blood-group-item">
                        <i class="fas fa-tint blood-drop-icon"></i>
                        <div class="blood-group-name">AB+</div>
                        <div class="blood-group-status">Available</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="blood-group-item">
                        <i class="fas fa-tint blood-drop-icon"></i>
                        <div class="blood-group-name">AB-</div>
                        <div class="blood-group-status">Available</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blood Components Section -->
    <section class="treatment-section" id="components">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Blood Products & Components</h2>
                <p class="section-subtitle">
                    Focused products for specific medical needs.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="treatment-card">
                        <div class="treatment-card-icon">
                            <i class="fas fa-vials"></i>
                        </div>
                        <h3 class="treatment-card-title">Whole Blood</h3>
                        <p class="treatment-card-description">
                            Used in cases of massive blood loss due to trauma or major cardiac surgeries to restore volume and oxygen-carrying capacity.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="treatment-card">
                        <div class="treatment-card-icon">
                            <i class="fas fa-dice-one"></i>
                        </div>
                        <h3 class="treatment-card-title">Packed RBCs</h3>
                        <p class="treatment-card-description">
                            Concentrated Red Blood Cells used to treat severe anemia and chronic blood loss conditions while preventing fluid overload.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="treatment-card">
                        <div class="treatment-card-icon" >
                            <i class="fas fa-tint-slash"></i>
                        </div>
                        <h3 class="treatment-card-title">Platelets (RDP/SDP)</h3>
                        <p class="treatment-card-description">
                             Crucial for patients with low platelet counts due to dengue, cancer treatments, or certain blood disorders to prevent bleeding.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="treatment-card">
                        <div class="treatment-card-icon" >
                            <i class="fas fa-water"></i>
                        </div>
                        <h3 class="treatment-card-title">Fresh Frozen Plasma</h3>
                        <p class="treatment-card-description">
                            Contains vital coagulation factors, used to treat clotting disorders, liver disease, and massive transfusions.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="treatment-card">
                        <div class="treatment-card-icon" >
                            <i class="fas fa-snowflake"></i>
                        </div>
                        <h3 class="treatment-card-title">Cryoprecipitate</h3>
                        <p class="treatment-card-description">
                            Rich in Fibrinogen and Factor VIII, specifically used for treating Hemophilia A and massive hemorrhage.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="treatment-card">
                        <div class="treatment-card-icon" >
                            <i class="fas fa-dna"></i>
                        </div>
                        <h3 class="treatment-card-title">Cross Matching</h3>
                        <p class="treatment-card-description">
                            Rigorous bedside and laboratory cross-matching for every unit to ensure biological compatibility of blood.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donor Guide Section -->
    <section class="why-choose-section" id="donor-guide">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Blood Donation Guide</h2>
                <p class="section-subtitle">
                    Be a hero, donate blood. It takes only 15 minutes to save 3 lives.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="why-point">
                        <div class="why-point-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="why-point-content">
                            <h4>Eligibility Criteria</h4>
                            <ul>
                                <li>Age: 18 - 65 years</li>
                                <li>Weight: Above 45 kg</li>
                                <li>Hemoglobin: Minimum 12.5 g/dL</li>
                                <li>Pulse/Temperature: Normal</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="why-point">
                        <div class="why-point-icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div class="why-point-content">
                            <h4>Who cannot donate?</h4>
                            <ul>
                                <li>History of Hepatitis, HIV, or heart disease</li>
                                <li>Major surgery in the past 6 months</li>
                                <li>Fever or taking antibiotics currently</li>
                                <li>Alcohol consumption in the last 24 hours</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Common Questions</h2>
                <p class="section-subtitle">
                    What you need to know about blood transfusion and donation.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    Is it safe to donate blood?
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse show"
                                aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, blood donation is 100% safe. We use only sterile, disposable needles/kits for every donor. Your body replenishes the donated volume within a few days.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    How long can blood be stored?
                                </button>
                            </h2>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Storage depends on the component: RBCs last for 35-42 days, Platelets for 5 days, and Plasma can be frozen and stored for up to 1 year.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    How long does the blood donation process take?
                                </button>
                            </h2>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The actual donation takes only about 8-10 minutes. However, the entire process—including registration, medical screening, and recovery—takes approximately 45-60 minutes.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    How often can I donate blood?
                                </button>
                            </h2>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Healthy individuals can donate whole blood every 8 weeks (56 days). For platelet donation, you can donate more frequently—up to 24 times a year.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                    What should I eat or drink before donating?
                                </button>
                            </h2>
                            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    It is recommended to have a healthy, low-fat meal and drink plenty of water or non-alcoholic fluids before donation. Avoid donating on an empty stomach.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                                    Can I donate if I have recently been vaccinated?
                                </button>
                            </h2>
                            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Most vaccinations (like for COVID-19 or Flu) have no waiting period if you are symptom-free. However, some live-virus vaccines may require a 2-4 week wait. Please inform our medical officer about any recent vaccinations.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                                    Are there any side effects after donation?
                                </button>
                            </h2>
                            <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Most donors feel perfectly fine. A few may experience slight dizziness or bruising at the needle site. Rest, hydration, and a light snack provided after donation effectively manage these minor occurrences.
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
