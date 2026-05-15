<?php
// Event details for International Nurses Day
$eventDetails = [
    'title' => 'International Nurses Day Celebration',
    'date' => '2026-05-12',
    'time' => '10:00 AM - 2:00 PM',
    'location' => 'Prayag Hospital Auditorium, Noida',
    'status' => 'Completed',
    'image' => 'assets/images/nurses-day.webp'
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Nurses Day 2026 - Prayag Hospital</title>
    <?php include 'header-links.php'; ?>
    <style>
        .nurses-day-hero {
            background: linear-gradient(135deg, #2C5F2D 0%, #4A8F73 50%, #97BC62 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .nurses-day-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="1.5" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="70" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="90" cy="80" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: 100px 100px;
        }

        .nurses-day-hero .container {
            position: relative;
            z-index: 2;
        }

        .nurses-day-hero h1 {
            color: white;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .nurses-day-hero .subtitle {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .cruz-symbol {
            font-size: 4rem;
            color: white;
            opacity: 0.3;
            position: absolute;
        }

        .cruz-1 {
            top: 20%;
            left: 5%;
            transform: rotate(-15deg);
        }

        .cruz-2 {
            bottom: 20%;
            right: 5%;
            transform: rotate(15deg);
        }

        .nurses-day-content {
            padding: 60px 0;
        }

        .intro-section {
            text-align: center;
            margin-bottom: 50px;
        }

        .intro-section h2 {
            color: #2C5F2D;
            font-size: 2.2rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .intro-section p {
            color: #555;
            font-size: 1.1rem;
            line-height: 1.8;
            margin: 0 auto;
        }

        .highlight-text {
            color: #4A8F73;
            font-weight: 600;
        }

        .nurses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }

        .nurses-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .nurses-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .nurses-card .icon-wrapper {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #2C5F2D, #4A8F73);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .nurses-card .icon-wrapper i {
            font-size: 2rem;
            color: white;
        }

        .nurses-card h4 {
            color: #2C5F2D;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .nurses-card p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .quote-section {
            background: linear-gradient(135deg, #f8fff8 0%, #f0f7f0 100%);
            padding: 60px 0;
            margin: 50px 0;
            border-radius: 20px;
        }

        .quote-wrapper {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .quote-icon {
            font-size: 3rem;
            color: #4A8F73;
            margin-bottom: 20px;
        }

        .quote-text {
            font-size: 1.5rem;
            font-style: italic;
            color: #333;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .quote-author {
            color: #2C5F2D;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .gallery-section {
            margin: 50px 0;
        }

        .gallery-section h3 {
            text-align: center;
            color: #2C5F2D;
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .gallery-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            aspect-ratio: 4/3;
            cursor: pointer;
            background: linear-gradient(135deg, #2C5F2D, #4A8F73);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 15px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
            font-size: 0.9rem;
        }

        .gallery-item .zoom-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .zoom-icon {
            opacity: 1;
        }

        .zoom-icon i {
            color: #2C5F2D;
            font-size: 1.2rem;
        }

        /* Lightbox Modal */
        .lightbox-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .lightbox-modal.active {
            display: flex;
        }

        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 80vh;
        }

        .lightbox-content img {
            max-width: 100%;
            max-height: 80vh;
            border-radius: 10px;
        }

        .lightbox-caption {
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 1.1rem;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            cursor: pointer;
            z-index: 10000;
            transition: transform 0.3s ease;
        }

        .lightbox-close:hover {
            transform: scale(1.2);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 40px;
            cursor: pointer;
            padding: 20px;
            transition: opacity 0.3s ease;
        }

        .lightbox-nav:hover {
            opacity: 0.7;
        }

        .lightbox-prev {
            left: 20px;
        }

        .lightbox-next {
            right: 20px;
        }

        .lightbox-counter {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .nurses-quotes-section {
            background: white;
            padding: 60px 0;
            margin: 50px 0;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .nurses-quotes-section h3 {
            text-align: center;
            color: #2C5F2D;
            font-size: 2rem;
            margin-bottom: 40px;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background: #f8fff8;
            padding: 30px;
            border-radius: 15px;
            border-left: 4px solid #4A8F73;
        }

        .testimonial-card p {
            font-style: italic;
            color: #555;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .testimonial-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2C5F2D, #4A8F73);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .testimonial-info h5 {
            color: #2C5F2D;
            margin: 0;
            font-weight: 600;
        }

        .testimonial-info span {
            color: #888;
            font-size: 0.9rem;
        }

        .cta-section {
            background: linear-gradient(135deg, #2C5F2D 0%, #4A8F73 100%);
            padding: 60px;
            border-radius: 20px;
            text-align: center;
            color: white;
            margin: 50px 0;
        }

        .cta-section h3 {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .cta-section p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 25px;
        }

        .btn-join {
            background: white;
            color: #2C5F2D;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-join:hover {
            background: #f0f7f0;
            transform: scale(1.05);
        }

        .page-number {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #2C5F2D;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .nurses-day-hero h1 {
                font-size: 2rem;
            }

            .nurses-day-hero .subtitle {
                font-size: 1.1rem;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .quote-text {
                font-size: 1.2rem;
            }

            .cta-section {
                padding: 40px 20px;
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
                    <li class="breadcrumb-item"><a href="events.php">Events</a></li>
                    <li class="breadcrumb-item active" aria-current="page">International Nurses Day</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="nurses-day-hero">
        <div class="cruz-symbol cruz-1">✚</div>
        <div class="cruz-symbol cruz-2">✚</div>
        <div class="container text-center">
            <h1>International Nurses Day 2026</h1>
            <p class="subtitle">On the occasion of International Nurses Day, Prayag Hospital expressed heartfelt
                gratitude to our incredible nurses whose care, commitment, and compassion make a difference every day.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="nurses-day-content">
        <div class="container">
            <!-- Introduction Section (Page 1) -->
            <div class="intro-section">
                <h2>Celebrating the Heart of Healthcare</h2>
                <p>
                    Every year on <span class="highlight-text">May 12th</span>, we come together to celebrate
                    International Nurses Day — a day dedicated to honoring the extraordinary men and women who form the
                    backbone of our healthcare system. At Prayag Hospital, we take immense pride in our nursing staff,
                    whose unwavering dedication transforms lives and brings comfort to countless families.
                </p>
                <p>
                    This year's theme, <span class="highlight-text">"Our Nurses. Our Future. The economic power of
                        care,"</span> highlights the invaluable contribution of nurses not just to patient care, but to
                    the entire healthcare ecosystem. Our nurses embody the spirit of compassion, professionalism, and
                    excellence that defines Prayag Hospital.
                </p>
            </div>

            <!-- Quote Section (Page 3) -->
            <div class="quote-section">
                <div class="quote-wrapper">
                    <div class="quote-icon">❝</div>
                    <p class="quote-text">Nursing is not just an art, it has a heart. It requires a commitment to
                        service and a genuine desire to make a difference in someone's life.</p>
                    <p class="quote-author">— Florence Nightingale</p>
                </div>
            </div>

            <!-- Gallery Section (Page 4) -->
            <div class="gallery-section">
                <h3>Moments of Celebration</h3>
                <div class="gallery-grid" id="nursesGallery">
                    <div class="gallery-item" data-index="0">
                        <img src="assets/images/events/nurse-day-1.webp" alt="Nurses Day Celebration"
                            onerror="this.src='assets/images/events/nurse-day-1.webp'">
                        <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                    </div>
                    <div class="gallery-item" data-index="1">
                        <img src="assets/images/events/nurse-day-2.webp" alt="Team Photo"
                            onerror="this.src='assets/images/events/nurse-day-2.webp'">
                        <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                    </div>
                    <div class="gallery-item" data-index="2">
                        <img src="assets/images/events/nurse-day-3.webp" alt="Recognition Event"
                            onerror="this.src='assets/images/events/nurse-day-3.webp'">
                        <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                    </div>
                    <div class="gallery-item" data-index="3">
                        <img src="assets/images/events/nurse-day-4.webp" alt="Cake Cutting Ceremony"
                            onerror="this.src='assets/images/events/nurse-day-4.webp'">
                        <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                    </div>
                    <div class="gallery-item" data-index="4">
                        <img src="assets/images/events/nurse-day-5.webp" alt="Group Photo"
                            onerror="this.src='assets/images/events/nurse-day-5.webp'">
                        <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                    </div>
                    <div class="gallery-item" data-index="5">
                        <img src="assets/images/events/nurse-day-6.webp" alt="Certificate Distribution"
                            onerror="this.src='assets/images/events/nurse-day-6.webp'">
                        <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                    </div>
                    <div class="gallery-item" data-index="6">
                        <img src="assets/images/events/nurse-day-7.webp" alt="Speech Ceremony"
                            onerror="this.src='assets/images/events/nurse-day-7.webp'">
                        <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                    </div>
                    <div class="gallery-item" data-index="7">
                        <img src="assets/images/events/nurse-day-8.webp" alt="Cultural Program"
                            onerror="this.src='assets/images/events/nurse-day-8.webp'">
                        <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                    </div>
                    <div class="gallery-item" data-index="8">
                        <img src="assets/images/events/nurse-day-9.webp" alt="Prize Distribution"
                            onerror="this.src='assets/images/events/nurse-day-9.webp'">
                        <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                    </div>
                </div>
            </div>

            <!-- Lightbox Modal -->
            <div class="lightbox-modal" id="lightboxModal">
                <span class="lightbox-close" id="lightboxClose">&times;</span>
                <div class="lightbox-counter" id="lightboxCounter">1 / 9</div>
                <div class="lightbox-content">
                    <span class="lightbox-nav lightbox-prev" id="lightboxPrev"><i
                            class="fas fa-chevron-left"></i></span>
                    <img src="" alt="Gallery Image" id="lightboxImage">
                    <span class="lightbox-nav lightbox-next" id="lightboxNext"><i
                            class="fas fa-chevron-right"></i></span>
                </div>
                <div class="lightbox-caption" id="lightboxCaption"></div>
            </div>
            <!-- CTA Section -->
            <div class="cta-section">
                <h3>Join Us in Celebrating Our Healthcare Heroes</h3>
                <p>To learn more about our nursing team or to express your gratitude, please reach out to us.</p>
                <a href="contact-us.php" class="btn-join">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- Page Number Indicator -->
    <div class="page-number">6</div>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

    <!-- Lightbox Gallery Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const galleryItems = document.querySelectorAll('.gallery-item');
            const lightboxModal = document.getElementById('lightboxModal');
            const lightboxImage = document.getElementById('lightboxImage');
            const lightboxCaption = document.getElementById('lightboxCaption');
            const lightboxCounter = document.getElementById('lightboxCounter');
            const lightboxClose = document.getElementById('lightboxClose');
            const lightboxPrev = document.getElementById('lightboxPrev');
            const lightboxNext = document.getElementById('lightboxNext');

            let currentIndex = 0;
            const totalImages = 9;

            const imagesData = [
                { src: 'assets/images/events/nurse-day-1.webp' },
                { src: 'assets/images/events/nurse-day-2.webp' },
                { src: 'assets/images/events/nurse-day-3.webp' },
                { src: 'assets/images/events/nurse-day-4.webp' },
                { src: 'assets/images/events/nurse-day-5.webp' },
                { src: 'assets/images/events/nurse-day-6.webp' },
                { src: 'assets/images/events/nurse-day-7.webp' },
                { src: 'assets/images/events/nurse-day-8.webp' },
                { src: 'assets/images/events/nurse-day-9.webp' }
            ];

            function openLightbox(index) {
                currentIndex = index;
                updateLightbox();
                lightboxModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeLightbox() {
                lightboxModal.classList.remove('active');
                document.body.style.overflow = '';
            }

            function updateLightbox() {
                const data = imagesData[currentIndex];
                lightboxImage.src = data.src;
                lightboxImage.onerror = function () {
                    this.src = 'https://via.placeholder.com/800x600/2C5F2D/ffffff?text=Image+' + (currentIndex + 1);
                };
                lightboxCaption.textContent = data.caption;
                lightboxCounter.textContent = (currentIndex + 1) + ' / ' + totalImages;
            }

            function nextImage() {
                currentIndex = (currentIndex + 1) % totalImages;
                updateLightbox();
            }

            function prevImage() {
                currentIndex = (currentIndex - 1 + totalImages) % totalImages;
                updateLightbox();
            }

            galleryItems.forEach((item, index) => {
                item.addEventListener('click', function () {
                    openLightbox(index);
                });
            });

            lightboxClose.addEventListener('click', closeLightbox);
            lightboxNext.addEventListener('click', nextImage);
            lightboxPrev.addEventListener('click', prevImage);

            lightboxModal.addEventListener('click', function (e) {
                if (e.target === lightboxModal) {
                    closeLightbox();
                }
            });

            document.addEventListener('keydown', function (e) {
                if (lightboxModal.classList.contains('active')) {
                    if (e.key === 'Escape') closeLightbox();
                    if (e.key === 'ArrowRight') nextImage();
                    if (e.key === 'ArrowLeft') prevImage();
                }
            });
        });
    </script>

</body>

</html>