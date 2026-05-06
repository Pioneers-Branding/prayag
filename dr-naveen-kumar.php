<?php
/**
 * DOCTOR PROFILE PAGE TEMPLATE
 */

// Set the doctor ID - CHANGE THIS for each doctor
$doctor_id = 'dr-naveen-kumar'; // ID in doctors-data.php

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
                            Dr. Naveen Kumar is a highly experienced and dedicated Consultant Medical Gastroenterologist, specialized in the diagnosis and treatment of diseases related to the digestive system, liver, pancreas, gall bladder, and intestines.
                        </p>
                        <p>
                            With strong academic qualifications and vast clinical expertise, the doctor is known for providing advanced and evidence-based treatment for both acute and chronic gastrointestinal disorders. Dr. Naveen Kumar has excellent expertise in managing complex liver and digestive diseases with a patient-centric approach and compassionate care.
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
                                    <h4>MD (Medicine)</h4>
                                    <!-- <p class="institution">Institution</p> -->
                                </div>
                            </div>
                             <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <div class="education-content">
                                    <h4>DM (Medical Gastroenterology)</h4>
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
                                <i class="fas fa-utensils"></i>
                                <h4>Digestive Health</h4>
                                <p>GERD, Gastritis & Ulcers</p>
                            </div>
                            <div class="expertise-card">
                                <i class="fas fa-flask"></i>
                                <h4>Liver Care</h4>
                                <p>Hepatitis, Fatty Liver & Cirrhosis</p>
                            </div>
                             <div class="expertise-card">
                                <i class="fas fa-procedures"></i>
                                <h4>Pancreas & Gall Bladder</h4>
                                <p>Pancreatitis & Bile Duct Disorders</p>
                            </div>
                             <div class="expertise-card">
                                <i class="fas fa-notes-medical"></i>
                                <h4>Chronic Disorders</h4>
                                <p>IBS, IBD & Constipation</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Specializations -->
                    <div class="content-section">
                        <h2 class="section-title">Specializations & Services</h2>
                        <ul class="specialization-list">
                            <li><i class="fas fa-check-circle"></i> Acid reflux (GERD), Gastritis & Peptic ulcer</li>
                            <li><i class="fas fa-check-circle"></i> Fatty liver disease & Liver cirrhosis management</li>
                            <li><i class="fas fa-check-circle"></i> Hepatitis (A, B, C, E) treatment</li>
                            <li><i class="fas fa-check-circle"></i> Jaundice evaluation and treatment</li>
                            <li><i class="fas fa-check-circle"></i> Pancreatitis (acute & chronic)</li>
                            <li><i class="fas fa-check-circle"></i> Gall bladder diseases and bile duct disorders</li>
                            <li><i class="fas fa-check-circle"></i> Irritable Bowel Syndrome (IBS) & Chronic constipation</li>
                            <li><i class="fas fa-check-circle"></i> Inflammatory Bowel Disease (Ulcerative colitis, Crohn's disease)</li>
                            <li><i class="fas fa-check-circle"></i> Gastrointestinal bleeding management</li>
                            <li><i class="fas fa-check-circle"></i> Management of intestinal infections and malabsorption syndromes</li>
                            <li><i class="fas fa-check-circle"></i> Alcoholic liver disease and liver failure care</li>
                            <li><i class="fas fa-check-circle"></i> Gastrointestinal cancer screening & prevention</li>
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
