<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Bhojendra Pal Singh | Founder & Chairman | Prayag Hospital</title>

    <!-- Signature Font -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <?php include 'header-links.php'; ?>

    <style>
        :root {
            --founder-primary: var(--prayag-teal);
            --founder-primary-dark: var(--prayag-teal-dark);
            --founder-accent: var(--prayag-orange);
            --founder-accent-dark: var(--prayag-orange-dark);
            --founder-dark: #1e3a31;
            /* Even darker teal for depth */
        }

        .founder-hero {
            background: linear-gradient(rgba(30, 58, 49, 0.85), rgba(30, 58, 49, 0.95)), url('assets/images/prayag-hostipal-img.webp');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .founder-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(232, 150, 79, 0.1) 0%, transparent 100%);
        }

        .founder-profile-img {
            border: 8px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
            transition: transform 0.5s ease;
            width: 100%;
            max-width: 450px;
            background: #fff;
        }

        .founder-hero .name-section h4 {
            color: var(--founder-accent);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .founder-hero .name-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.1;
        }

        .founder-hero .designation {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 30px;
            font-style: italic;
        }

        .founder-stats {
            display: flex;
            gap: 40px;
            margin-top: 40px;
        }

        .f-stat-item {
            display: flex;
            flex-direction: column;
        }

        .f-stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--founder-accent);
        }

        .f-stat-label {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: rgba(255, 255, 255, 0.6);
        }

        .legacy-section {
            padding: 100px 0 40px;
            background: #f8fafc;
        }

        .quote-container {
            position: relative;
            padding: 60px;
            background: white;
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            margin-top: -150px;
            z-index: 10;
        }

        .quote-icon {
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 70px;
            background: var(--founder-accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 10px 20px rgba(232, 150, 79, 0.3);
        }

        .founder-quote-text {
            font-size: 1.8rem;
            font-weight: 500;
            color: var(--founder-dark);
            text-align: center;
            line-height: 1.6;
            font-style: italic;
        }

        .expertise-container {
            padding: 40px 0;
        }

        .section-header-founder {
            text-align: center;
            margin-bottom: 20px;
        }

        .section-header-founder h2 {
            font-size: 2.5rem;
            color: var(--founder-dark);
            font-weight: 800;
            position: relative;
            display: inline-block;
            padding-bottom: 20px;
        }

        .section-header-founder h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--founder-accent);
        }

        .dual-expertise-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .expertise-box {
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .expertise-box:hover {
            transform: translateY(-10px);
            border-color: var(--founder-accent);
        }

        .ex-icon {
            font-size: 40px;
            color: var(--founder-accent);
            margin-bottom: 25px;
        }

        .expertise-box h3 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--founder-dark);
        }

        .expertise-box ul {
            list-style: none;
            padding: 0;
        }

        .expertise-box ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
            gap: 15px;
            color: #4a5568;
            border-bottom: 1px solid #edf2f7;
        }

        .expertise-box ul li i {
            color: var(--founder-accent);
        }

        .vision-mission-founder {
            background: var(--founder-dark);
            color: white;
            padding: 40px 0;
        }

        .timeline-founder {
            margin-top: 50px;
        }

        .qualification-badge {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(232, 150, 79, 0.1);
            color: var(--founder-accent);
            border-radius: 50px;
            font-weight: 600;
            margin-right: 10px;
            margin-bottom: 10px;
            border: 1px solid var(--founder-accent);
        }

        .sidebar-founder {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 100px;
        }

        @media (max-width: 991px) {
            .founder-hero .name-section h1 {
                font-size: 2.5rem;
            }

            .dual-expertise-grid {
                grid-template-columns: 1fr;
            }

            .quote-container {
                margin-top: 40px;
            }
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Founder Hero Section -->
    <section class="founder-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2 mb-5 mb-lg-0">
                    <div class="text-center">
                        <img src="assets/images/Bhojendra-Pal-Singh.webp" alt="Dr. Bhojendra Pal Singh"
                            class="founder-profile-img">
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="name-section">
                        <h4>Visionary Founder</h4>
                        <h1>Dr. Bhojendra Pal Singh</h1>
                        <p class="designation">Founder, Chairman & Senior Consultant</p>

                        <div class="mb-4">
                            <span class="qualification-badge">MBBS</span>
                            <span class="qualification-badge">MS – Orthopedics</span>
                            <span class="qualification-badge">MS – ENT (Otorhinolaryngology)</span>
                        </div>

                        <p class="lead text-white-50 mb-5">
                            A legendary figure in North India's medical landscape, Dr. Bhojendra Pal Singh has dedicated
                            over 35
                            years to the pursuit of medical excellence and ethical healthcare. As the pillar of Prayag
                            Group, his journey from a small clinic to a NABH-accredited multi-speciality hospital is a
                            testament to his unwavering commitment to patient care.
                        </p>

                        <div class="founder-stats">
                            <div class="f-stat-item">
                                <span class="f-stat-number">35+</span>
                                <span class="f-stat-label">Years Experience</span>
                            </div>
                            <div class="f-stat-item">
                                <span class="f-stat-number">250K+</span>
                                <span class="f-stat-label">Patients Healed</span>
                            </div>
                            <div class="f-stat-item">
                                <span class="f-stat-number">2</span>
                                <span class="f-stat-label">Major Specialities</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Legacy Quote -->
    <section class="legacy-section">
        <div class="container">
            <div class="quote-container">
                <div class="quote-icon">
                    <i class="fas fa-quote-right"></i>
                </div>
                <p class="founder-quote-text">
                    "My mission was never just to build a hospital, but to create a haven where every patient feels
                    heard, respected, and healed with integrity. Quality healthcare should not be a luxury; it must be a
                    standard accessible to all."
                </p>
                <div class="text-center mt-4">
                    <p class="fw-bold mb-0">Dr. Bhojendra Pal Singh</p>
                    <small class="text-muted">Founder & Chairman, Prayag Hospital</small>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="content-section">
                        <h2 class="mb-4" style="color: var(--founder-dark);">The Architectural Mind Behind Prayag</h2>
                        <p>Throughout his illustrious career spanning more than three decades, Dr. Singh has
                            successfully treated thousands of patients and managed a wide range of simple to highly
                            complex medical and surgical cases. His dual specialization in Orthopedics and ENT is a rare
                            distinction that allows him to offer an integrated approach to complex surgical challenges.
                        </p>
                        <p>Under his leadership, Prayag Hospital has evolved into a center of excellence, integrating
                            advanced medical technology with a patient-centered philosophy. Dr. Singh is widely known
                            for his clinical precision, ethical practice, and compassionate approach to every individual
                            who walks through the doors of his institution.</p>
                    </div>

                    <div class="mt-5">
                        <h3 class="mb-4" style="color: var(--founder-dark);">Founder's Approach to Care</h3>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="p-4 border rounded-3 bg-white h-100 text-center">
                                    <i class="fas fa-microscope mb-3 fs-3" style="color: var(--founder-primary);"></i>
                                    <h5>Early Diagnosis</h5>
                                    <p class="small text-muted">Leveraging 35 years of clinical instinct for accurate
                                        decision making.</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="p-4 border rounded-3 bg-white h-100 text-center">
                                    <i class="fas fa-shield-alt mb-3 fs-3" style="color: var(--founder-accent);"></i>
                                    <h5>Ethical Practice</h5>
                                    <p class="small text-muted">Transparency and medical integrity are the core
                                        foundations.</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="p-4 border rounded-3 bg-white h-100 text-center">
                                    <i class="fas fa-users mb-3 fs-3" style="color: var(--founder-primary);"></i>
                                    <h5>Holistic Wellness</h5>
                                    <p class="small text-muted">Treating the patient as a whole, focusing on long-term
                                        recovery.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section class="expertise-container bg-white">
        <div class="container">
            <div class="section-header-founder">
                <h2>Clinical Excellence Across Specialties</h2>
                <p class="text-muted">A rare combination of mastery in two major surgical fields</p>
            </div>

            <div class="dual-expertise-grid">
                <!-- Ortho -->
                <div class="expertise-box">
                    <div class="ex-icon"><i class="fas fa-bone"></i></div>
                    <h3>Orthopedic Surgery</h3>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i> Complex Fracture & Trauma Management</li>
                        <li><i class="fas fa-chevron-right"></i> Advanced Joint Pain & Arthritis Solutions</li>
                        <li><i class="fas fa-chevron-right"></i> Spine & Back Disorder Correction</li>
                        <li><i class="fas fa-chevron-right"></i> Sports Injury Reconstruction & Rehab</li>
                        <li><i class="fas fa-chevron-right"></i> Geriatric Orthopedic Care</li>
                    </ul>
                </div>

                <!-- ENT -->
                <div class="expertise-box">
                    <div class="ex-icon"><i class="fas fa-ear-listen"></i></div>
                    <h3>ENT & Otorhinolaryngology</h3>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i> Advanced Micro-Ear Surgeries</li>
                        <li><i class="fas fa-chevron-right"></i> Endoscopic Sinus (FESS) Procedures</li>
                        <li><i class="fas fa-chevron-right"></i> Throat, Voice & Airway Management</li>
                        <li><i class="fas fa-chevron-right"></i> Comprehensive Allergy & ENT Care</li>
                        <li><i class="fas fa-chevron-right"></i> Hearing Disorder Diagnostics & Treatment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="vision-mission-founder">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                    <h2 class="mb-4" style="color: var(--founder-accent);">Leadership Vision</h2>
                    <p class="fs-5">As the Founder of Prayag Hospital, Dr. Bhojendra Pal Singh envisions a healthcare
                        system
                        that combines advanced medical technology with compassionate, patient-centered care.</p>
                    <p class="text-white-50">His mission is to make quality healthcare affordable and accessible while
                        maintaining the highest standards of ethics and professionalism. He has been the guiding force
                        behind the hospital's expansion and its reputation as a trusted regional medical hub.</p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4 h-100"
                        style="background: rgba(74, 143, 115, 0.05); border: 2px solid rgba(74, 143, 115, 0.1);">
                        <h4 class="mb-4" style="color: var(--founder-primary);">The Promise of Prayag</h4>
                        <ul class="list-unstyled">
                            <li class="mb-4 d-flex gap-3">
                                <i class="fas fa-check-circle mt-1" style="color: var(--founder-primary);"></i>
                                <div>
                                    <h6>Patient First Always</h6>
                                    <p class="small">Individualized attention for every patient scenario.</p>
                                </div>
                            </li>
                            <li class="mb-4 d-flex gap-3">
                                <i class="fas fa-check-circle mt-1" style="color: var(--founder-primary);"></i>
                                <div>
                                    <h6>Technological Advancements</h6>
                                    <p class="small">Continuous investment in modern surgical equipment.</p>
                                </div>
                            </li>
                            <li class="mb-0 d-flex gap-3">
                                <i class="fas fa-check-circle mt-1" style="color: var(--founder-primary);"></i>
                                <div>
                                    <h6>Ethical Integrity</h6>
                                    <p class="small">A non-commercial, service-first medical approach.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founder's Journey Section -->
    <section class="bg-light border-top">
        <div class="container py-5">
            <div class="section-header-founder">
                <h2>A Journey of 35+ Years</h2>
                <p class="text-muted">From a vision to a multi-speciality healthcare landmark</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-3">
                    <div class="text-center p-4 h-100 bg-white shadow-sm rounded-4">
                        <div class="display-5 fw-bold mb-2" style="color: var(--founder-primary);">1995</div>
                        <h5 class="fw-bold">Founding</h5>
                        <p class="small text-muted mb-0">Established Prayag Orthopedic Centre with a mission of 'Sewa
                            Parmo Dharma'.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-4 h-100 bg-white shadow-sm rounded-4">
                        <div class="display-5 fw-bold mb-2" style="color: var(--founder-primary);">2000</div>
                        <h5 class="fw-bold">Expansion</h5>
                        <p class="small text-muted mb-0">Transitioned to Sector-41 and evolved into Prayag Hospital and
                            Research Centre.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-4 h-100 bg-white shadow-sm rounded-4">
                        <div class="display-5 fw-bold mb-2" style="color: var(--founder-primary);">NABH</div>
                        <h5 class="fw-bold">Accreditation</h5>
                        <p class="small text-muted mb-0">Achieved prestigious NABH and NABL accreditations for quality
                            care.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center p-4 h-100 bg-white shadow-sm rounded-4">
                        <div class="display-5 fw-bold mb-2" style="color: var(--founder-primary);">120</div>
                        <h5 class="fw-bold">Beds Facility</h5>
                        <p class="small text-muted mb-0">Scaled to a multi-facility healthcare group serving millions
                            annually.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Letter from the Founder -->
    <section class="bg-white overflow-hidden">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="assets/images/Bhojendra-Pal-Singh.webp" alt="Dr. Bhojendra Pal Singh"
                        class="img-fluid rounded-5 shadow-lg">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h3 class="display-6 fw-bold mb-4" style="color: var(--founder-dark);">From the Founder's Desk</h3>
                    <p class="lead"><em>"True healthcare is beyond medicine; it is about restoring hope and
                            dignity."</em></p>
                    <p>I started Prayag with a simple hope: that no person should have to compromise on the quality of
                        their treatment due to financial or geographical barriers. Every brick of this institution has
                        been laid with the principle of service. </p>
                    <p>As we look forward to the future, we continue to embrace the latest in medical technology, from
                        AI diagnostics to minimally invasive surgeries, but our heart remains rooted in the same
                        compassion that started this journey in 1995.</p>
                    <div class="mt-4">
                        <div
                            style="font-family: 'Dancing Script', cursive; font-size: 2.5rem; color: var(--founder-dark); opacity: 0.8; margin-bottom: -10px;">
                            Bhojendra Pal Singh</div>
                        <p class="fw-bold mb-0 mt-3">Dr. Bhojendra Pal Singh</p>
                        <p class="small text-muted">Founder & Chairman</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

</body>

</html>