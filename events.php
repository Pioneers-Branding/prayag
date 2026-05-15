<?php
// Mock Events Data
$events = [
    [
        'title' => 'International Nurses Day Celebration',
        'date' => '2026-05-12',
        'time' => '10:00 AM - 2:00 PM',
        'location' => 'Prayag Hospital Auditorium, Noida',
        'description' => 'Celebrating our incredible nurses whose care, commitment, and compassion make a difference every day. Heartfelt gratitude to our healthcare heroes.',
        'image' => 'assets/images/events/nurse-day-2.webp',
        'status' => 'Completed',
        'link' => 'international-nurses-day.php'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events & Workshops - Prayag Hospital</title>
    <?php include 'header-links.php'; ?>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">News & Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events & Workshops</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Events & Workshops</h1>
                <p class="blog-hero-subtitle">Participate in our health camps, medical workshops, and community
                    awareness programs.</p>
            </div>
        </div>
    </section>

    <!-- Events Grid Section -->
    <section class="events-section" style="padding: 40px 0; background-color: #f9f9f9;">
        <div class="container">
            <!-- Filter Tabs -->
            <div class="d-flex justify-content-center mb-5">
                <div class="btn-group" role="group">
                    <!-- <button type="button" class="btn btn-outline-success" id="btn-upcoming"
                        onclick="filterEvents('Upcoming')">Upcoming Events</button> -->
                    <button type="button" class="btn btn-outline-secondary active" id="btn-past"
                        onclick="filterEvents('Completed')">Past Events</button>
                </div>
            </div>

            <div class="row g-4" id="events-container">
                <?php foreach ($events as $event):
                    $day = date('d', strtotime($event['date']));
                    $month = date('M', strtotime($event['date']));
                    $isinfo = $event['status'] === 'Upcoming';
                    ?>
                    <div class="col-lg-4 col-md-6 col-12 event-item" data-status="<?php echo $event['status']; ?>">
                        <div class="event-card">
                            <div class="event-image-wrapper">
                                <img src="<?php echo $event['image']; ?>" alt="<?php echo $event['title']; ?>">
                                <div class="event-date-badge">
                                    <span class="event-date-day"><?php echo $day; ?></span>
                                    <span class="event-date-month"><?php echo $month; ?></span>
                                </div>
                            </div>
                            <div class="event-content">
                                <span class="event-status <?php echo $isinfo ? 'status-upcoming' : 'status-completed'; ?>">
                                    <?php echo $event['status']; ?>
                                </span>
                                <h3 class="event-title"><?php echo $event['title']; ?></h3>

                                <div class="event-meta">
                                    <div class="event-meta-item">
                                        <i class="far fa-clock"></i>
                                        <span><?php echo $event['time']; ?></span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span><?php echo $event['location']; ?></span>
                                    </div>
                                </div>

                                <p class="event-description"><?php echo $event['description']; ?></p>

                                <?php if ($isinfo): ?>
                                    <a href="#" class="btn-event btn-register">Register Now</a>
                                <?php else: ?>
                                    <?php $btnText = $event['status'] === 'Completed' ? 'View Recap' : 'Learn More'; ?>
                                    <a href="<?php echo isset($event['link']) ? $event['link'] : '#'; ?>"
                                        class="btn-event btn-view"><?php echo $btnText; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

    <script>
        function filterEvents(status) {
            const items = document.querySelectorAll('.event-item');
            const btnUpcoming = document.getElementById('btn-upcoming');
            const btnPast = document.getElementById('btn-past');

            // Update Buttons
            if (status === 'Upcoming') {
                btnUpcoming.classList.add('active', 'btn-outline-success');
                btnUpcoming.classList.remove('btn-outline-secondary');
                btnPast.classList.remove('active', 'btn-outline-success');
                btnPast.classList.add('btn-outline-secondary');
            } else {
                btnPast.classList.add('active', 'btn-outline-success');
                btnPast.classList.remove('btn-outline-secondary');
                btnUpcoming.classList.remove('active', 'btn-outline-success');
                btnUpcoming.classList.add('btn-outline-secondary');
            }

            // Filter Items
            items.forEach(item => {
                if (item.getAttribute('data-status') === status) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Initialize with filtering
        document.addEventListener('DOMContentLoaded', () => {
            filterEvents('Upcoming');
        });
    </script>

</body>

</html>