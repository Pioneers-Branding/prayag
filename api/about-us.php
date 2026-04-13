<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Prayag Hospital</title>

    <?php include 'header-links.php'; ?>

    <style>
        /* Managing Director Section Styles */
        .md-section {
            padding: 80px 0;
            background-color: #ffffff;
        }

        .md-img-wrapper {
            position: relative;
            padding: 20px;
        }

        .md-img-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            border-top: 5px solid var(--prayag-orange);
            border-right: 5px solid var(--prayag-orange);
            z-index: 1;
        }

        .md-img-wrapper::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100px;
            height: 100px;
            border-bottom: 5px solid var(--prayag-teal);
            border-left: 5px solid var(--prayag-teal);
            z-index: 1;
        }

        .md-img {
            width: 100%;
            border-radius: 10px;
            position: relative;
            z-index: 2;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .md-img-wrapper:hover .md-img {
            transform: scale(1.02);
        }

        .md-content h3 {
            color: var(--prayag-teal);
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .md-content h2 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 30px;
            color: var(--dark-text);
        }

        .md-quote {
            font-size: 18px;
            font-style: italic;
            color: #555;
            border-left: 4px solid var(--prayag-orange);
            padding-left: 20px;
            margin-bottom: 25px;
            line-height: 1.8;
        }

        .md-name {
            font-size: 24px;
            font-weight: 700;
            color: var(--prayag-teal);
            margin-bottom: 5px;
        }

        .md-title {
            color: #777;
            font-size: 16px;
        }

        @media (max-width: 991px) {
            .md-section {
                padding: 40px 0;
            }

            .md-content {
                padding-top: 40px;
            }
        }
    </style>

</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Prayag Group</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main>
        <!-- Hero Section -->
        <section class="blog-hero-section">
            <div class="container">
                <div class="blog-hero-content">
                    <h1 class="blog-hero-title">About Prayag Hospital</h1>
                </div>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="intro-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="intro-image">
                            <!-- Placeholder for Hospital Building Image -->
                            <img src="../assets/images/prayag-hostipal-img.webp" alt="Prayag Hospital Building"
                                class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="intro-content ps-lg-4">
                            <div class="intro-content ps-lg-4">
                                <h2>A Journey of Compassion, Excellence and Growth</h2>

                                <p>Prayag Hospital began its journey in 1995 as <strong>Prayag Orthopedic
                                        Centre</strong>, a small yet dedicated clinic in Sector 29, Noida, founded by
                                    <strong>Dr. B. P. Singh</strong>. Built on the principle of <em>Sewa Parmo
                                        Dharma</em>, meaning service is the highest duty, the institution was
                                    established with a deep commitment to healing with integrity and compassion.
                                </p>

                                <p>Today, Prayag Hospital stands as a <strong>120 bedded hospital accredited by NABH and
                                        NABL</strong>, reflecting its commitment to clinical excellence, safety
                                    standards and quality assurance. Equipped with state of the art facilities and
                                    supported by highly skilled doctors, nurses and healthcare professionals, the
                                    hospital delivers comprehensive medical services across general medicine, surgery,
                                    orthopaedics, emergency care, maternal and child health and specialized treatments.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="intro-content">
                            <p>Over more than fifteen years, Prayag Hospital has provided compassionate and
                                individualized care to a vast number of patients. Millions visit the hospital each year,
                                choosing it for its trusted reputation, accessible location, ethical practice and
                                supportive staff. The hospital is empanelled under government panels and recognized by
                                multiple TPA schemes, ensuring affordability and accessibility for eligible families.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Chairman Message Section -->
        <section class="chairman-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="chairman-img-wrapper">
                            <!-- Chairman Image linked to Profile -->
                            <a href="dr-b-p-singh.php">
                                <img src="../assets/images/doctors/dr-b-p-singh.png"
                                    alt="Dr. B. P. Singh - Founder & Chairman" class="chairman-img">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="chairman-content ps-lg-5">
                            <h3>Leadership Speak</h3>
                            <h2>Message from the Chairman</h2>
                            <blockquote class="chairman-quote">
                                "Patient has a very limited resources, tremendous stress and the fear for unknown. A
                                patient while entering the hospital does not know what the doctors are going to
                                diagnose. We a team of medical doctors and paramedical staff, try to take care of that
                                aspect and also the patient should feel happy in coming to the hospital and leave with
                                at most satisfaction."
                            </blockquote>
                            <p style="color: var(--light-text); margin-bottom: 30px;">
                                We are constantly upgrading our infrastructure and clinical capabilities to ensure that
                                our patients receive the best possible care. Our team of dedicated doctors and staff
                                work tirelessly to uphold the trust you place in us. Thank you for choosing Prayag
                                Hospital as your partner in health.
                            </p>
                            <div class="chairman-signature">
                                <h4 class="chairman-name"><a href="dr-b-p-singh.php"
                                        style="color: inherit; text-decoration: none;">Dr. Bhojendra Pal Singh</a></h4>
                                <p class="chairman-title">Founder & Chairman, Prayag Group</p>
                                <div class="d-flex gap-3">
                                    <a href="dr-b-p-singh.php" class="btn-request-callback btn-sm">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Managing Director Section -->
        <section class="md-section">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="md-img-wrapper">
                            <!-- Managing Director Image linked to Profile -->
                            <a href="mrs-sunita-singh.php">
                                <img src="https://www.saiwebtel.net/prayag/images/md.png"
                                    alt="Mrs. Sunita Singh - Managing Director" class="md-img">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="md-content pe-lg-5">
                            <h3>Executive Leadership</h3>
                            <h2>Message from the Managing Director</h2>
                            <blockquote class="md-quote">
                                "Our mission is to achieve professional excellence in delivering quality care to every
                                section of society at an affordable cost. We are committed to treating every patient
                                with integrity and ethical responsibility."
                            </blockquote>
                            <p style="color: var(--light-text); margin-bottom: 30px;">
                                Mrs. Sunita Singh oversees the overall functioning of Prayag Hospitals, ensuring smooth
                                operations and high standards of patient care. Her leadership has been key in adopting
                                modern healthcare standards and continuously improving service delivery.
                            </p>
                            <div class="md-signature">
                                <h4 class="md-name"><a href="mrs-sunita-singh.php"
                                        style="color: inherit; text-decoration: none;">Mrs. Sunita Singh</a></h4>
                                <p class="md-title">Managing Director, Prayag Group</p>
                                <div class="d-flex gap-3">
                                    <a href="mrs-sunita-singh.php" class="btn-request-callback btn-sm">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision & Mission Section -->
        <section class="mission-vision-section" style="background-color: #F8F9FA;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="mission-card">
                            <div class="mv-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3 class="mv-title">Our Mission</h3>
                            <p class="mv-text">To achieve professional excellence in delivering quality care, to provide
                                healthcare to every section of society at an affordable cost for the benefit of humanity
                                and to ensure treatment with integrity and ethical responsibility.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="vision-card">
                            <div class="mv-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="mv-title">Our Vision</h3>
                            <p class="mv-text">To provide comprehensive, quality and affordable healthcare services with
                                a deep commitment to the health and wellbeing of all communities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Values Section -->
        <section class="values-section">
            <div class="container">
                <div class="section-header-center text-center">
                    <h2 class="section-title" style="font-weight: 700;">Our Core Values</h2>
                    <p style="color: var(--light-text); max-width: 600px; margin: 0 auto;">The pillars that uphold our
                        commitment to excellence</p>
                </div>

                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4 class="value-title">Respect & Caring</h4>
                        <p class="value-text">We treat every individual with dignity and empathy, ensuring a supportive
                            environment for healing.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4 class="value-title">Accountability</h4>
                        <p class="value-text">We take personal and professional responsibility for our actions and the
                            outcomes of our care.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="value-title">Innovation</h4>
                        <p class="value-text">We embrace new ideas and technology to continuously improve our medical
                            services and patient outcomes.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="value-title">Teamwork & Ethics</h4>
                        <p class="value-text">We uphold truthfulness, privacy, and integrity while working together to
                            make a difference.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Prayag Journey Section -->
        <section class="journey-section">
            <div class="container">
                <div class="section-header-center text-center">
                    <h2 class="section-title" style="font-weight: 700;">Our Journey</h2>
                    <p style="color: var(--light-text); max-width: 600px; margin: 0 auto;">A timeline of milestones and
                        medical excellence</p>
                </div>

                <div class="timeline">
                    <!-- Item 1 -->
                    <div class="timeline-item timeline-left">
                        <div class="timeline-content">
                            <span class="year-badge">1995</span>
                            <h4>Foundation and Vision</h4>
                            <p>Prayag Hospital began as Prayag Orthopedic Centre in Sector 29, Noida, founded by Dr. B.
                                P. Singh with a commitment to integrity and compassion.</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="timeline-item timeline-right">
                        <div class="timeline-content">
                            <span class="year-badge">1995 - 2000</span>
                            <h4>Building Trust</h4>
                            <p>Steadily earned patient trust through specialized orthopedic care and ethical medical
                                practice, laying the groundwork for a multi-specialty institution.</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="timeline-item timeline-left">
                        <div class="timeline-content">
                            <span class="year-badge">June 2000</span>
                            <h4>Expansion to Sector 41</h4>
                            <p>Transitioned to a comprehensive hospital named Prayag Hospital and Research Centre
                                Private Limited, strengthening its capacity for advanced care.</p>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="timeline-item timeline-right">
                        <div class="timeline-content">
                            <span class="year-badge">Subsequent</span>
                            <h4>Greater Noida Branch</h4>
                            <p>Established another facility in Delta III, Greater Noida, extending quality healthcare
                                reach across the NCR region.</p>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="timeline-item timeline-left">
                        <div class="timeline-content">
                            <span class="year-badge">Present Day</span>
                            <h4>Accredited Excellence</h4>
                            <p>Now a 120-bedded NABH and NABL accredited institution with state-of-the-art facilities
                                across all major medical specialities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Infrastructure Teaser Link -->
        <section class="infra-teaser">
            <div class="container">
                <h2>World-Class Infrastructure</h2>
                <p>Experience healthcare in a facility designed for comfort, safety, and advanced medical care.</p>
                <a href="infrastructure.php" class="btn btn-outline-light-custom">View Our Infrastructure</a>
            </div>
        </section>

        <?php include 'footer.php'; ?>


    </main>

    <?php include 'footer-links.php'; ?>
</body>

</html>