<?php
/**
 * DOCTOR PROFILE PAGE
 */

$doctor_id = 'dr-garima-srivastav';

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
    <title>Dr. Garima Srivastav – Obstetrician & Gynaecologist in Noida | Prayag Hospital</title>
    <meta name="description" content="Consult Dr. Garima Srivastav, Obstetrician & Gynaecologist at Prayag Hospital, Noida with 15 years' experience. Book an appointment online.">
    <meta name="keywords" content="gynaecologist in noida, obstetrician in noida">

    <?php include 'header-links.php'; ?>

    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Physician",
    "name": "Dr. Garima Srivastav",
    "medicalSpecialty": "Obstetrics & Gynecology",
    "description": "15 years of experience",
    "url": "https://prayaghospital.in/dr-garima-srivastav.php",
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
                            She is a highly accomplished Obstetrician & Gynaecologist with 15 years of clinical experience, specializing in Infertility, Advanced Laparoscopic Gynaecological Surgery, and High-Risk Pregnancy Management.
                        </p>
                        <p>
                            She completed her MBBS from King George’s Medical University (KGMU) as a Gold Medallist, followed by MD in Obstetrics & Gynaecology, where she was a Double Gold Medallist. She further enhanced her professional qualifications with DNB in Obstetrics & Gynaecology and MRCOG (London), reflecting advanced training and exposure to international standards of women’s healthcare.
                        </p>
                        <p>
                            Her clinical approach combines comprehensive medical management with minimally invasive surgical techniques, with a particular focus on fertility preservation, complex gynaecological conditions, and safe management of complicated pregnancies.
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
                                    <h4>MBBS (Gold Medallist)</h4>
                                    <p class="institution">King George's Medical University (KGMU)</p>
                                </div>
                            </div>
                            <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="education-content">
                                    <h4>MD (OBGYN) Double Gold Medallist</h4>
                                </div>
                            </div>
                            <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="education-content">
                                    <h4>DNB</h4>
                                </div>
                            </div>
                            <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div class="education-content">
                                    <h4>MRCOG</h4>
                                    <p class="institution">London</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Areas of Expertise -->
                    <div class="content-section">
                        <h2 class="section-title">Areas of Expertise</h2>
                        <ul class="specialization-list">
                            <li><i class="fas fa-check-circle"></i> <strong>Infertility & Fertility Management:</strong> Evaluation and treatment of infertility, Fertility counselling and reproductive health, PCOS-related infertility, Fertility-preserving approaches</li>
                            <li><i class="fas fa-check-circle"></i> <strong>Advanced Laparoscopic Gynaecological Surgery:</strong> Laparoscopic management of ovarian cysts, Fibroid surgery, Endometriosis management, Diagnostic and operative laparoscopy, Minimally invasive gynaecological procedures</li>
                            <li><i class="fas fa-check-circle"></i> <strong>High-Risk Pregnancy:</strong> Management of complicated pregnancies, Pregnancy with hypertension and diabetes, Previous pregnancy complications, Maternal and fetal risk assessment, Antenatal care for high-risk mothers</li>
                            <li><i class="fas fa-check-circle"></i> <strong>Obstetrics & Gynaecology:</strong> Comprehensive antenatal care, Normal and complicated pregnancy management, Gynaecological disorders, Menstrual and hormonal problems, Women's reproductive health</li>
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
