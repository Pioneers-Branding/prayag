<?php
/**
 * DOCTOR PROFILE PAGE TEMPLATE
 * 
 * Instructions:
 * 1. Copy this file and rename it to match the doctor's slug (e.g., dr-ayushi-agarwal.php)
 * 2. Update the $doctor_id variable below with the doctor's ID from doctors-data.php
 * 3. Customize any additional content as needed
 * 
 * The page will automatically pull all doctor information from doctors-data.php
 */

// Set the doctor ID - CHANGE THIS for each doctor
$doctor_id = 'dr-shivee-pandey'; // Example: Change to match the doctor's ID

// Load doctor data
include 'doctors-data.php';

$doctor = null;
foreach ($doctors as $d) {
    if ($d['id'] === $doctor_id) {
        $doctor = $d;
        break;
    }
}

// Redirect if doctor not found
if (!$doctor) {
    header("Location: find-doctor.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $doctor['name']; ?> - <?php echo $doctor['specialty']; ?> | Prayag Hospital</title>

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
                    <li class="breadcrumb-item"><a href="find-doctor.php">Find a Doctor</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $doctor['name']; ?></li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Doctor Profile Hero Section -->
    <section class="doctor-profile-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5">
                    <div class="doctor-profile-image-container">
                        <img src="<?php echo $doctor['image']; ?>"
                            alt="<?php echo $doctor['name']; ?>" class="doctor-profile-image">
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="doctor-profile-header">
                        <h1 class="doctor-profile-name"><?php echo $doctor['name']; ?></h1>
                        <p class="doctor-profile-designation"><?php echo $doctor['specialty']; ?></p>
                       

                        <p class="lead-text">
                            <?php echo $doctor['name']; ?> is a dedicated and highly skilled Physiotherapist with expertise in providing advanced rehabilitation and pain management services.
                        </p>
                        <p>
                            With strong clinical knowledge and hands-on experience, she specializes in treating patients with musculoskeletal disorders, neurological conditions, sports injuries, post-operative rehabilitation, and geriatric care.
                        </p>
                        <p>
                            She is well known for delivering patient-focused therapy plans, ensuring faster recovery and improving mobility through evidence-based physiotherapy techniques. Her approach includes detailed assessment, accurate diagnosis, and customized treatment plans to achieve the best possible outcomes.
                        </p>

                        <div class="doctor-profile-stats">
                            <div class="profile-stat-item">
                                <i class="fas fa-user-md"></i>
                                <div>
                                    <strong><?php echo $doctor['experience']; ?>+ Years</strong>
                                    <span>Experience</span>
                                </div>
                            </div>
                        </div>

                        <div class="doctor-profile-actions">
                            <a href="#book-appointment" class="btn btn-primary-prayag">
                                <i class="fas fa-calendar-check"></i> Book Appointment
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Doctor Section -->
    <section class="doctor-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Education & Qualifications -->
                    <div class="content-section">
                        <h2 class="section-title">Education & Qualifications</h2>
                        <div class="education-timeline">
                            <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="education-content">
                                    <h4>BPT (BACHELOR OF PHYSIOTHERAPY)</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Areas of Expertise -->
                    <div class="content-section">
                        <h2 class="section-title">Areas of Expertise</h2>
                        <div class="expertise-grid">
                            <div class="expertise-card">
                                <i class="fas fa-bone"></i>
                                <h4>Musculoskeletal Physiotherapy</h4>
                                <p>Back pain, neck pain, joint pain</p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-running"></i>
                                <h4>Sports Injury Rehabilitation</h4>
                                <p>Treatment and recovery for sports-related injuries</p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-procedures"></i>
                                <h4>Post-Surgical Rehabilitation</h4>
                                <p>Ortho & Neuro cases</p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-brain"></i>
                                <h4>Stroke & Neuro Physiotherapy</h4>
                                <p>Stroke Rehabilitation & Neurological Physiotherapy</p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-child"></i>
                                <h4>Pediatric Physiotherapy</h4>
                                <p>Specialized care for children</p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-user-clock"></i>
                                <h4>Geriatric Physiotherapy</h4>
                                <p>Physiotherapy for elderly patients</p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-hand-holding-medical"></i>
                                <h4>Pain Management Therapy</h4>
                                <p>Advanced pain relief techniques</p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-chair"></i>
                                <h4>Posture & Ergonomics</h4>
                                <p>Posture Correction & Ergonomic Training</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <!-- Quick Appointment Form -->
                        <div class="appointment-sidebar-card" id="book-appointment">
                            <h3>Book an Appointment with <?php echo $doctor['name']; ?></h3>
                            <form class="appointment-quick-form">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="Enter phone number" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label>Preferred Date</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Message (Optional)</label>
                                    <textarea class="form-control" rows="3"
                                        placeholder="Any specific concerns?"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary-prayag w-100">
                                    <i class="fas fa-calendar-check"></i> Request Appointment
                                </button>
                            </form>
                        </div>

                        <!-- Contact Info Card -->
                        <div class="contact-info-card" id="contact">
                            <h3>Contact Information</h3>
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <strong>Location</strong>
                                    <p>Prayag Hospital<br><?php echo $doctor['department']; ?> Wing</p>
                                </div>
                            </div>
                                                        <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <strong>Phone</strong>
                                    <p><a href="tel:01204021900">0120 - 4021900</a> | <a href="tel:01204021914">4021914</a></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-fax"></i>
                                <div>
                                    <strong>Fax</strong>
                                    <p>91 - 120 - 2574091</p>
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
