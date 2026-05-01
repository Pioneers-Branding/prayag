<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mrs. Sunita Singh - Managing Director | Prayag Hospital</title>
    <meta name="description"
        content="Meet Mrs. Sunita Singh, the Managing Director of Prayag Hospitals. A dedicated healthcare administrator with over 25 years of experience in hospital management.">

    <?php include 'header-links.php'; ?>

    <style>
        :root {
            --primary-green: #4A8F73;
            --secondary-orange: #E8964F;
        }

        /* Profile Section Styles */
        .md-profile-section {
            padding: 80px 0;
            background: #fff;
        }

        .md-image-card {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
            border: 8px solid #fff;
            background: #f8f9fa;
        }

        .md-image-card img {
            width: 100%;
            display: block;
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .md-image-card:hover img {
            transform: scale(1.03);
        }

        .md-content {
            padding-left: 40px;
        }

        @media (max-width: 991px) {
            .md-content {
                padding-left: 0;
                margin-top: 40px;
            }
        }

        .md-role-badge {
            display: inline-block;
            padding: 8px 18px;
            background: rgba(74, 143, 71, 0.08);
            color: #4A8F73;
            border-radius: 100px;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-accent-title {
            color: #4A8F73;
            font-weight: 800;
            position: relative;
            margin-bottom: 25px;
            font-size: 2.2rem;
        }

        .md-bio-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #4a5568;
            margin-bottom: 25px;
            text-align: justify;
        }

        .info-grid {
            margin-top: 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .info-card {
            background: #fcfdfc;
            border: 1px solid #edf2ed;
            padding: 35px;
            border-radius: 20px;
            transition: all 0.3s ease;
            height: 100%;
        }

        .info-card:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
            transform: translateY(-5px);
            border-color: #4A8F73;
        }

        .info-card h4 {
            color: #1a4d3a;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-card h4 i {
            color: #E8964F;
            font-size: 1.2rem;
        }

        .check-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .check-list li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 15px;
            color: #4a5568;
            line-height: 1.5;
        }

        .check-list li::before {
            content: "\f058";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: #4A8F73;
        }

        .vision-approach-box {
            background: linear-gradient(135deg, #f0f7f0 0%, #ffffff 100%);
            border-radius: 30px;
            padding: 50px;
            margin-top: 60px;
            border: 1px solid rgba(74, 143, 115, 0.1);
        }

        .approach-content h3 {
            color: #1a4d3a;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .vision-statement {
            border-left: 4px solid #E8964F;
            padding-left: 25px;
            margin-top: 30px;
        }

        .vision-statement h4 {
            color: #E8964F;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .vision-statement p {
            font-size: 1.2rem;
            color: #1a4d3a;
            font-weight: 500;
            font-style: italic;
        }

        .experience-highlight {
            display: inline-flex;
            align-items: center;
            gap: 15px;
            background: white;
            padding: 15px 25px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            margin-top: 20px;
        }

        .exp-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #4A8F73;
            line-height: 1;
        }

        .exp-text {
            font-size: 0.9rem;
            font-weight: 600;
            color: #718096;
            text-transform: uppercase;
            line-height: 1.2;
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Breadcrumb -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="about-us.php">Prayag Group</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Managing Director</li>
                </ol>
            </nav>
        </div>
    </div>

    <main>
        <!-- Hero Section -->
        <section class="blog-hero-section">
            <div class="container">
                <div class="blog-hero-content">
                    <h1 class="blog-hero-title">Mrs. Sunita Singh</h1>
                    <p class="text-white mt-3 lead">Leadership Driven by Compassion and Excellence</p>
                </div>
            </div>
        </section>

        <!-- Profile Section -->
        <section class="md-profile-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-4">
                        <div class="md-image-card">
                            <img src="assets/images/Sunita-Singh.webp" alt="Mrs. Sunita Singh - Managing Director">
                            <div class="p-4 bg-white">
                                <h3 class="fw-bold mb-1" style="color: #1a4d3a;">Mrs. Sunita Singh</h3>
                                <p class="text-muted mb-0">Managing Director, Prayag Hospitals</p>

                                <div class="experience-highlight">
                                    <span class="exp-number">25+</span>
                                    <span class="exp-text">Years of<br>Expertise</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="md-content">
                            <span class="md-role-badge">Managing Director's Profile</span>
                            <h2 class="section-accent-title">Dedicated to Operational Excellence</h2>

                            <div class="md-bio-text">
                                <p>Mrs. Sunita Singh is the Managing Director of Prayag Hospitals and a highly
                                    accomplished healthcare administrator with over 25 years of extensive experience in
                                    hospital management and operations. With her strong leadership, dedication, and
                                    strategic vision, she has played a crucial role in shaping the hospital into a
                                    trusted and efficient healthcare institution.</p>

                                <p>With a deep understanding of hospital administration, Mrs. Singh oversees the overall
                                    functioning of Prayag Hospitals, ensuring smooth operations, high standards of
                                    patient care, and organizational excellence. Her ability to efficiently manage
                                    resources, staff, and systems has significantly contributed to the hospital's
                                    reputation for reliability and quality service.</p>

                                <p>She has been instrumental in implementing structured management systems, enhancing
                                    patient care services, and improving operational efficiency. Her focus on
                                    maintaining hygiene, discipline, and patient satisfaction has helped create a safe
                                    and patient-friendly healthcare environment.</p>

                                <p>Mrs. Singh works closely with the medical team to ensure that clinical excellence is
                                    supported by strong administrative practices. Her leadership has been key in
                                    adopting modern healthcare standards, upgrading facilities, and continuously
                                    improving service delivery.</p>

                                <p>Known for her dedication, professionalism, and compassionate approach, she ensures
                                    that every patient receives respectful and timely care. Her commitment to excellence
                                    and continuous improvement has earned her recognition as a dependable and effective
                                    leader in the healthcare sector.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="info-grid">
                            <div class="info-card">
                                <h4><i class="fas fa-briefcase"></i> Experience & Expertise</h4>
                                <ul class="check-list">
                                    <li>Over 25+ years of rich experience in hospital administration and management
                                    </li>
                                    <li>Expertise in healthcare operations, patient services, and organizational
                                        leadership</li>
                                </ul>
                            </div>

                            <div class="info-card">
                                <h4><i class="fas fa-tasks"></i> Key Responsibilities</h4>
                                <ul class="check-list">
                                    <li>Overall administration and management of hospital operations</li>
                                    <li>Ensuring quality standards in patient care and services</li>
                                    <li>Staff management, coordination, and workflow optimization</li>
                                    <li>Enhancing patient satisfaction and service delivery</li>
                                    <li>Strategic planning and institutional growth</li>
                                </ul>
                            </div>
                        </div>

                        <div class="vision-approach-box">
                            <div class="approach-content">
                                <h3>Leadership Approach</h3>
                                <p class="mb-0">Mrs. Sunita Singh believes in a disciplined, transparent, and
                                    patient-centric approach to management. She emphasizes teamwork, accountability,
                                    and continuous improvement to achieve excellence in healthcare services.</p>
                            </div>

                            <div class="vision-statement">
                                <h4>Her Vision</h4>
                                <p>"To further strengthen Prayag Hospitals as a center of excellence by combining
                                    efficient management with compassionate care, ensuring accessibility, trust, and
                                    high-quality treatment for all."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

</body>

</html>