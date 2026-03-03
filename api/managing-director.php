<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managing Director - Prayag Group | Prayag Hospital</title>

    <?php include 'header-links.php'; ?>
    
    <style>
        .md-hero-section {
            background: linear-gradient(135deg, #1a4d3a 0%, #2e7d32 100%);
            padding: 80px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .md-hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 100%;
            background: url('../assets/images/nabh-logo.png') no-repeat center right;
            opacity: 0.1;
            filter: grayscale(1);
        }

        .md-profile-section {
            padding: 80px 0;
            background: #fff;
        }

        .md-image-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border: 5px solid #fff;
        }

        .md-image-card img {
            width: 100%;
            transition: transform 0.5s ease;
        }

        .md-image-card:hover img {
            transform: scale(1.05);
        }

        .md-content {
            padding-left: 30px;
        }

        .md-title-badge {
            display: inline-block;
            padding: 6px 15px;
            background: rgba(46, 125, 50, 0.1);
            color: #2e7d32;
            border-radius: 50px;
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .md-quote-box {
            background: #f9fbf9;
            border-left: 5px solid #2e7d32;
            padding: 30px;
            margin: 30px 0;
            position: relative;
        }

        .md-quote-box i {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 40px;
            color: rgba(46, 125, 50, 0.05);
        }

        .md-vision-grid {
            margin-top: 50px;
        }

        .vision-item {
            padding: 30px;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: 100%;
            transition: all 0.3s ease;
            border-bottom: 4px solid transparent;
        }

        .vision-item:hover {
            transform: translateY(-5px);
            border-bottom-color: #e67e22;
        }

        .vision-icon {
            width: 60px;
            height: 60px;
            background: rgba(230, 126, 34, 0.1);
            color: #e67e22;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .achievement-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            list-style: none;
        }
        
        .achievement-list li::before {
            content: "\f058";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #2e7d32;
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
                    <li class="breadcrumb-item"><a href="#">Prayag Group</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Managing Director</li>
                </ol>
            </nav>
        </div>
    </div>

    <main>
        <!-- Hero Section -->
        <section class="md-hero-section">
            <div class="container text-center">
                <h1 class="display-4 fw-bold mb-3">Visionary Leadership</h1>
                <p class="lead">Driving Excellence in Healthcare Through Innovation and Compassion</p>
            </div>
        </section>

        <!-- Profile Section -->
        <section class="md-profile-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="md-image-card">
                            <img src="https://www.saiwebtel.net/prayag/images/md.png" alt="Managing Director">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="md-content">
                            <span class="md-title-badge">Managing Director's Desk</span>
                            <h2 class="fw-bold mb-4" style="color: #1a4d3a;">Leading the Way to a Brighter Tomorrow</h2>
                            
                            <p class="lead mb-4">Dedicated to transforming Prayag Group into a global healthcare destination defined by clinical excellence and ethical practices.</p>
                            
                            <div class="md-quote-box">
                                <i class="fas fa-quote-left"></i>
                                <p class="mb-0 fs-5 italic">"Our goal is not just to treat patients, but to create an ecosystem where healing is holistic, accessible, and powered by the latest medical advancements. At Prayag, we believe that quality healthcare is a fundamental right."</p>
                            </div>

                            <p>With a core focus on integrating technology with traditional medical ethics, our Managing Director has been instrumental in the recent expansions of Prayag Group. Her leadership has seen the hospital achieve significant milestones, including NABH accreditation and the launch of specialized centers of excellence.</p>
                            
                            <div class="mt-4">
                                <h4 class="fw-bold mb-3">Key Strategic Focus</h4>
                                <ul class="achievement-list p-0">
                                    <li>Integration of AI-driven diagnostics for early detection</li>
                                    <li>Patient-centric service design across all touchpoints</li>
                                    <li>Expanding healthcare reach to underserved communities</li>
                                    <li>Continuous medical education and staff empowerment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vision Items -->
                <div class="row g-4 md-vision-grid">
                    <div class="col-md-4">
                        <div class="vision-item">
                            <div class="vision-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4>Growth & Expansion</h4>
                            <p>Strategizing the next phase of Prayag Group's journey with a focus on reaching more cities and delivering premium care.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="vision-item">
                            <div class="vision-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <h4>Clinical Research</h4>
                            <p>Fostering an environment of research and innovation to find better treatments for complex medical conditions.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="vision-item">
                            <div class="vision-icon">
                                <i class="fas fa-users-viewfinder"></i>
                            </div>
                            <h4>Community Wellness</h4>
                            <p>Moving beyond the hospital walls to promote preventive healthcare and healthy lifestyles in the community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dynamic CTA -->
        <section class="cta-section" style="background: #f8f9fa;">
            <div class="container text-center">
                <h3 class="fw-bold mb-4">Experience Our World-Class Care</h3>
                <div class="d-flex justify-content-center gap-3">
                    <a href="find-doctor.php" class="btn btn-primary-custom px-4 py-2">Consult a Specialist</a>
                    <a href="about-us.php" class="btn btn-outline-dark px-4 py-2">About Our Group</a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

</body>

</html>
