<?php
/**
 * DOCTOR PROFILE PAGE TEMPLATE
 */

// Set the doctor ID - CHANGE THIS for each doctor
$doctor_id = 'dr-ayushi-agarwal'; // ID in doctors-data.php

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
                            Dr. Ayushi Agarwal is a highly experienced and well-known Senior Consultant Cardiologist specializing in the diagnosis and treatment of heart-related diseases.
                        </p>
                        <p>
                            She is widely recognized for managing complex cardiac cases including hypertension, heart failure, coronary artery disease, and rhythm disorders. With expertise in advanced cardiac investigations and interventional cardiology procedures, she provides evidence-based and patient-centered treatment ensuring the best cardiac outcomes.
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
                                    <!-- <p class="institution">University</p> -->
                                </div>
                            </div>
                            <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="education-content">
                                    <h4>MD (General Medicine)</h4>
                                    <!-- <p class="institution">Institution</p> -->
                                </div>
                            </div>
                             <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <div class="education-content">
                                    <h4>DNB (Cardiology)</h4>
                                    <!-- <p class="institution">Institution</p> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Areas of Expertise -->
                    <div class="content-section">
                        <h2 class="section-title">Areas of Expertise</h2>
                        <div class="expertise-grid">
                            <div class="expertise-card">
                                <i class="fas fa-heartbeat"></i>
                                <h4>Heart Disease</h4>
                                <p>Coronary Artery Disease Management</p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-procedures"></i>
                                <h4>Heart Failure</h4>
                                <p>Treatment & Management</p>
                            </div>
                             <div class="expertise-card">
                                <i class="fas fa-file-medical-alt"></i>
                                <h4>Angiography</h4>
                                <p>& Angioplasty (PTCA)</p>
                            </div>
                             <div class="expertise-card">
                                <i class="fas fa-stethoscope"></i>
                                <h4>Hypertension</h4>
                                <p>High BP Treatment</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Specializations -->
                    <div class="content-section">
                        <h2 class="section-title">Specializations & Services</h2>
                        <ul class="specialization-list">
                            <li><i class="fas fa-check-circle"></i> Coronary Artery Disease (CAD) Management</li>
                            <li><i class="fas fa-check-circle"></i> Heart Attack (Myocardial Infarction) Emergency Care</li>
                            <li><i class="fas fa-check-circle"></i> Angiography & Angioplasty (PTCA)</li>
                            <li><i class="fas fa-check-circle"></i> Hypertension (High Blood Pressure) Treatment</li>
                            <li><i class="fas fa-check-circle"></i> Heart Failure & Cardiomyopathy Management</li>
                            <li><i class="fas fa-check-circle"></i> ECG, Echo (2D Echo) and TMT Interpretation</li>
                            <li><i class="fas fa-check-circle"></i> Arrhythmia (Irregular Heartbeat) Diagnosis & Treatment</li>
                            <li><i class="fas fa-check-circle"></i> Pacemaker Evaluation & Follow-up</li>
                            <li><i class="fas fa-check-circle"></i> Valvular Heart Disease (Heart Valve Disorders)</li>
                            <li><i class="fas fa-check-circle"></i> Preventive Cardiology & Cardiac Risk Assessment</li>
                            <li><i class="fas fa-check-circle"></i> Cholesterol Management & Lifestyle Counseling</li>
                            <li><i class="fas fa-check-circle"></i> Chest Pain & Breathlessness Evaluation</li>
                        </ul>
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
