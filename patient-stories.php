<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Stories - Prayag Hospital</title>

    <?php include 'header-links.php'; ?>

    <style>
        .story-hero-section {
            background: linear-gradient(135deg, var(--prayag-teal) 0%, var(--prayag-teal-dark) 100%);
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .story-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="2"/></svg>');
            background-size: 200px;
        }

        .story-hero-content {
            position: relative;
            z-index: 1;
        }

        .story-badge {
            display: inline-block;
            background: var(--prayag-orange);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .story-hero-title {
            font-size: 42px;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .story-hero-subtitle {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.9);
            max-width: 600px;
            margin: 0 auto;
        }

        .story-card-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .story-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            margin-bottom: 40px;
        }

        .story-card-header {
            background: linear-gradient(135deg, var(--prayag-teal) 0%, var(--prayag-teal-dark) 100%);
            padding: 30px;
            text-align: center;
        }

        .story-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .story-icon i {
            font-size: 36px;
            color: white;
        }

        .story-type {
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .story-title {
            color: white;
            font-size: 28px;
            font-weight: 700;
            margin: 0;
        }

        .story-card-body {
            padding: 40px;
        }

        .story-content {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .story-text {
            font-size: 17px;
            line-height: 1.9;
            color: var(--dark-text);
        }

        .story-highlight {
            background: linear-gradient(135deg, rgba(74, 143, 115, 0.1) 0%, rgba(232, 150, 79, 0.1) 100%);
            border-left: 4px solid var(--prayag-teal);
            padding: 25px 30px;
            border-radius: 0 12px 12px 0;
        }

        .story-highlight p {
            font-size: 18px;
            font-style: italic;
            color: var(--dark-text);
            margin: 0;
            line-height: 1.8;
        }

        .story-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .story-detail-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
        }

        .story-detail-icon {
            width: 50px;
            height: 50px;
            background: var(--prayag-teal);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .story-detail-icon i {
            font-size: 20px;
            color: white;
        }

        .story-detail-text {
            flex: 1;
        }

        .story-detail-label {
            font-size: 12px;
            color: var(--light-text);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 4px;
        }

        .story-detail-value {
            font-size: 16px;
            font-weight: 600;
            color: var(--dark-text);
        }

        .story-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .story-feature-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 20px;
            background: linear-gradient(135deg, rgba(74, 143, 115, 0.05) 0%, rgba(232, 150, 79, 0.05) 100%);
            border-radius: 12px;
        }

        .story-feature-icon {
            width: 40px;
            height: 40px;
            background: var(--prayag-teal);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .story-feature-icon i {
            font-size: 16px;
            color: white;
        }

        .story-feature-text {
            flex: 1;
        }

        .story-feature-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--dark-text);
            margin-bottom: 5px;
        }

        .story-feature-desc {
            font-size: 14px;
            color: var(--light-text);
            line-height: 1.6;
            margin: 0;
        }

        .story-cta-section {
            background: linear-gradient(135deg, var(--prayag-teal) 0%, var(--prayag-teal-dark) 100%);
            padding: 60px 0;
            text-align: center;
        }

        .story-cta-title {
            color: white;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .story-cta-text {
            color: rgba(255, 255, 255, 0.9);
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .story-cta-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-story-primary {
            background: var(--prayag-orange);
            color: white;
            padding: 14px 30px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-story-primary:hover {
            background: var(--prayag-orange-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(232, 150, 79, 0.4);
        }

        .btn-story-secondary {
            background: transparent;
            color: white;
            padding: 14px 30px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            border: 2px solid white;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-story-secondary:hover {
            background: white;
            color: var(--prayag-teal);
        }

        .other-stories-section {
            padding: 80px 0;
            background: white;
        }

        .section-header-center {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title {
            font-size: 32px;
            font-weight: 700;
            color: var(--dark-text);
            margin-bottom: 15px;
        }

        .other-stories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .other-story-card {
            background: #f8f9fa;
            border-radius: 16px;
            padding: 30px;
            transition: all 0.3s ease;
        }

        .other-story-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .other-story-icon {
            width: 60px;
            height: 60px;
            background: var(--prayag-teal);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .other-story-icon i {
            font-size: 24px;
            color: white;
        }

        .other-story-title {
            font-size: 20px;
            font-weight: 600;
            color: var(--dark-text);
            margin-bottom: 10px;
        }

        .other-story-text {
            font-size: 14px;
            color: var(--light-text);
            line-height: 1.7;
        }

        .other-story-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--prayag-teal);
            font-weight: 600;
            margin-top: 15px;
        }

        .other-story-link:hover {
            color: var(--prayag-teal-dark);
            gap: 12px;
        }

        /* Photo Gallery Section */
        .story-gallery-section {
            padding: 60px 0;
            background: white;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 40px;
        }

        .gallery-item {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            aspect-ratio: 1;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(74, 143, 115, 0.8), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: flex-end;
            padding: 20px;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-caption {
            color: white;
            font-size: 14px;
            font-weight: 500;
        }

        .gallery-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(74, 143, 115, 0.1) 0%, rgba(232, 150, 79, 0.1) 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 2px dashed var(--prayag-teal);
        }

        .gallery-placeholder i {
            font-size: 40px;
            color: var(--prayag-teal);
            margin-bottom: 10px;
        }

        .gallery-placeholder span {
            font-size: 12px;
            color: var(--light-text);
        }

        @media (max-width: 991px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .story-hero-title {
                font-size: 28px;
            }

            .story-hero-subtitle {
                font-size: 16px;
            }

            .story-card-body {
                padding: 25px;
            }

            .story-title {
                font-size: 22px;
            }

            .story-cta-title {
                font-size: 22px;
            }

            .section-title {
                font-size: 26px;
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
                    <li class="breadcrumb-item"><a href="#">Patient Guide</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Patient Stories</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main>
        <!-- Hero Section -->
        <section class="story-hero-section">
            <div class="container">
                <div class="story-hero-content">
                    <span class="story-badge">Mother's Day Special</span>
                    <h1 class="story-hero-title">A Journey of New Beginnings</h1>
                    <p class="story-hero-subtitle">Celebrating the beautiful story of a healthy baby boy's arrival
                        through a successful LSCS delivery at Prayag Hospital</p>
                </div>
            </div>
        </section>

        <!-- Main Story Section -->
        <section class="story-card-section">
            <div class="container">
                <div class="story-card">
                    <div class="story-card-header">
                        <div class="story-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <p class="story-type">Patient Story</p>
                        <h2 class="story-title">Welcome to the World, Baby Boy!</h2>
                    </div>
                    <div class="story-card-body">
                        <div class="story-content">
                            <div class="story-highlight">
                                <p>This Mother's Day, Prayag Hospital proudly welcomed a healthy baby boy through a
                                    successful LSCS delivery performed by our highly experienced gynecologist.</p>
                            </div>

                            <p class="story-text">
                                In a heartwarming celebration of motherhood, Prayag Hospital & Research Centre witnessed
                                a moment of pure joy as a healthy baby boy entered the world. The successful Lower
                                Segment Cesarean Section (LSCS) delivery was expertly handled by our highly experienced
                                gynecologist and supported by a dedicated team of medical professionals.
                            </p>

                            <div class="story-details">
                                <div class="story-detail-item">
                                    <div class="story-detail-icon">
                                        <i class="fas fa-calendar-check"></i>
                                    </div>
                                    <div class="story-detail-text">
                                        <p class="story-detail-label">Special Occasion</p>
                                        <p class="story-detail-value">Mother's Day</p>
                                    </div>
                                </div>
                                <div class="story-detail-item">
                                    <div class="story-detail-icon">
                                        <i class="fas fa-user-md"></i>
                                    </div>
                                    <div class="story-detail-text">
                                        <p class="story-detail-label">Procedure</p>
                                        <p class="story-detail-value">LSCS Delivery</p>
                                    </div>
                                </div>
                                <div class="story-detail-item">
                                    <div class="story-detail-icon">
                                        <i class="fas fa-hospital"></i>
                                    </div>
                                    <div class="story-detail-text">
                                        <p class="story-detail-label">Location</p>
                                        <p class="story-detail-value">Prayag Hospital</p>
                                    </div>
                                </div>
                                <div class="story-detail-item">
                                    <div class="story-detail-icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="story-detail-text">
                                        <p class="story-detail-label">Outcome</p>
                                        <p class="story-detail-value">Healthy Baby Boy</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Photo Gallery Section -->
                            <div class="story-gallery-section">
                                <h3
                                    style="font-size: 22px; font-weight: 700; color: var(--dark-text); margin-bottom: 10px; text-align: center;">
                                    <i class="fas fa-camera" style="color: var(--prayag-teal); margin-right: 10px;"></i>
                                    Precious Moments Captured
                                </h3>
                                <div class="gallery-grid">
                                    <div class="gallery-item">
                                        <img src="assets/images/patient-story-1.webp" alt="Photo description">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="assets/images/patient-story-2.webp" alt="Photo description">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="assets/images/patient-story-3.webp" alt="Photo description">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="assets/images/patient-story-4.webp" alt="Photo description">
                                    </div>
                                </div>
                            </div>

                            <p class="story-text">
                                With advanced maternity care, expert medical support, and compassionate attention at
                                every step, Prayag Hospital remains committed to ensuring safe deliveries and healthy
                                beginnings for every mother and baby.
                            </p>

                            <div class="story-features">
                                <div class="story-feature-item">
                                    <div class="story-feature-icon">
                                        <i class="fas fa-stethoscope"></i>
                                    </div>
                                    <div class="story-feature-text">
                                        <p class="story-feature-title">Expert Medical Team</p>
                                        <p class="story-feature-desc">Highly experienced gynecologists and skilled
                                            nursing staff ensuring the highest standards of care.</p>
                                    </div>
                                </div>
                                <div class="story-feature-item">
                                    <div class="story-feature-icon">
                                        <i class="fas fa-hospital-user"></i>
                                    </div>
                                    <div class="story-feature-text">
                                        <p class="story-feature-title">Advanced Maternity Care</p>
                                        <p class="story-feature-desc">State-of-the-art facilities and modern equipment
                                            for safe deliveries and comfortable recovery.</p>
                                    </div>
                                </div>
                                <div class="story-feature-item">
                                    <div class="story-feature-icon">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="story-feature-text">
                                        <p class="story-feature-title">Compassionate Support</p>
                                        <p class="story-feature-desc">Emotional support and guidance for parents
                                            throughout their precious journey of motherhood.</p>
                                    </div>
                                </div>
                                <div class="story-feature-item">
                                    <div class="story-feature-icon">
                                        <i class="fas fa-baby-carriage"></i>
                                    </div>
                                    <div class="story-feature-text">
                                        <p class="story-feature-title">Mother & Child Care</p>
                                        <p class="story-feature-desc">Comprehensive care from pregnancy through delivery
                                            and beyond for both mother and baby.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="story-highlight" style="margin-top: 20px;">
                                <p>Congratulations to the proud parents, and thank you for trusting Prayag Hospital on
                                    this precious journey of motherhood.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="story-cta-section">
            <div class="container">
                <h2 class="story-cta-title">Begin Your Journey with Us</h2>
                <p class="story-cta-text">Trust Prayag Hospital for advanced maternity care, experienced specialists,
                    and compassionate support on your path to parenthood.</p>
                <div class="story-cta-buttons">
                    <a href="book-appointment.php" class="btn-story-primary">
                        <i class="fas fa-calendar-alt"></i>
                        Book Appointment
                    </a>
                    <a href="obstetrics-gynecology.php" class="btn-story-secondary">
                        <i class="fas fa-arrow-right"></i>
                        Explore Mother & Child Care
                    </a>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
        </main> <?php include 'footer-links.php'; ?>
        </body> </html>