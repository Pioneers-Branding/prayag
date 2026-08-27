<?php
/**
 * DOCTOR PROFILE PAGE
 */

$doctor_id = 'dr-swati-thakur';

include 'doctors-data.php';

$doctor = null;
foreach ($doctors as $d) {
    if ($d['id'] === $doctor_id) {
        $doctor = $d;
        break;
    }
}

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
    <title>Dr. Swati Thakur – Opthalmologist in Noida | Prayag Hospital</title>
    <meta name="description" content="Consult Dr. Swati Thakur, Opthalmologist at Prayag Hospital, Noida. Book an appointment online.">
    <meta name="keywords" content="opthalmologist in noida, eye surgeon noida">

    <?php include 'header-links.php'; ?>

    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Physician",
    "name": "Dr. Swati Thakur",
    "medicalSpecialty": "Ophthalmology",
    "description": "3 years of experience",
    "url": "https://prayaghospital.in/dr-swati-thakur.php",
    "worksFor": {
        "@type": "Hospital",
        "name": "Prayag Hospital",
        "address": "Noida, UP"
    }
}
    </script>
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
                        <p class="doctor-profile-designation"><?php echo $doctor['specialty']; ?> - <?php echo $doctor['department']; ?></p>
                        <p class="lead-text">
                            Dr. Swati Thakur is an experienced Ophthalmologist and Eye Surgeon with expertise in the diagnosis and management of a wide range of eye disorders.
                        </p>
                        <p>
                            Her clinical focus includes cataract care, glaucoma management and comprehensive ophthalmology. She has also undergone training in phacoemulsification and LASIK, along with specialized training in glaucoma procedures.
                        </p>
                        <div class="doctor-profile-stats">
                            <div class="profile-stat-item">
                                <i class="fas fa-user-md"></i>
                                <div>
                                    <strong><?php echo $doctor['experience']; ?> Years</strong>
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
                                    <h4>MBBS</h4>
                                </div>
                            </div>
                            <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="education-content">
                                    <h4>MD in Opthalmology</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Areas of Expertise -->
                    <div class="content-section">
                        <h2 class="section-title">Areas of Expertise</h2>
                        <ul class="specialization-list">
                            <li><i class="fas fa-check-circle"></i> Cataract evaluation and surgery</li>
                            <li><i class="fas fa-check-circle"></i> Phacoemulsification (micro-incision cataract surgery)</li>
                            <li><i class="fas fa-check-circle"></i> Glaucoma diagnosis and management</li>
                            <li><i class="fas fa-check-circle"></i> Glaucoma surgery and advanced glaucoma procedures</li>
                            <li><i class="fas fa-check-circle"></i> Comprehensive eye examination</li>
                            <li><i class="fas fa-check-circle"></i> LASIK and refractive surgery assessment</li>
                            <li><i class="fas fa-check-circle"></i> Paediatric glaucoma evaluation</li>
                            <li><i class="fas fa-check-circle"></i> Routine and complex ophthalmic conditions</li>
                            <li><i class="fas fa-check-circle"></i> Diabetic and hypertensive eye screening</li>
                            <li><i class="fas fa-check-circle"></i> Dry-eye and ocular-surface assessment</li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <!-- Quick Appointment Form -->
                        <div class="appointment-sidebar-card" id="book-appointment">
                            <h3>Book an Appointment with <?php echo $doctor['name']; ?></h3>
                            <script defer data-active data-widget-type="group"
                            data-person="5856289c-a991-42eb-b6e6-693a17e44e83" src="https://app.wacrs.com/install-widget/bundle.js?key=2f53d451-0b4f-4dfe-8cc3-503855eaf135"></script>
                        <div data-active id="whatapp-people-widget-5856289c-a991-42eb-b6e6-693a17e44e83"></div>
                        </div>

                        <!-- Contact Info Card -->
                        <div class="contact-info-card" id="contact">
                            <h3>Contact Information</h3>
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
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <strong>Email</strong>
                                    <p><a href="mailto:crm@prayaghospital.in">crm@prayaghospital.in</a></p>
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
