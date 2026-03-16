<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Schedule Your Visit | Prayag Hospital</title>
    <?php include 'header-links.php'; ?>

    <style>
        :root {
            --accent-color: var(--prayag-teal);
            --accent-hover: var(--prayag-teal-dark);
            --secondary-accent: var(--prayag-orange);
        }

        .appointment-page-wrapper {
            padding: 60px 0 100px;
            background: #fdfdfd;
        }

        .appointment-container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .appointment-form-card {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            border: 1px solid rgba(74, 143, 115, 0.1);
        }

        .appointment-form-left {
            flex: 1;
            padding: 60px;
            min-width: 350px;
        }

        .appointment-form-right {
            width: 380px;
            background: var(--prayag-teal);
            padding: 60px 40px;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-section-head {
            margin-bottom: 40px;
        }

        .form-section-title {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--prayag-teal);
            margin-bottom: 10px;
            letter-spacing: -0.5px;
        }

        .form-section-subtitle {
            color: #64748b;
            font-size: 1.05rem;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            font-weight: 600;
            color: var(--dark-text);
            margin-bottom: 8px;
            display: block;
            font-size: 0.95rem;
        }

        .form-control-custom {
            width: 100%;
            padding: 14px 20px;
            border: 2px solid #edf2f7;
            border-radius: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: #f8fafc;
            color: var(--dark-text);
            font-size: 1rem;
        }

        .form-control-custom:focus {
            border-color: var(--prayag-teal);
            outline: none;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(74, 143, 115, 0.1);
        }

        .btn-submit-appointment {
            background: var(--prayag-orange);
            color: #fff;
            border: none;
            padding: 18px;
            border-radius: 12px;
            font-weight: 700;
            width: 100%;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin-top: 15px;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-submit-appointment:hover {
            background: var(--prayag-orange-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(232, 150, 79, 0.3);
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.08);
            padding: 15px;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .contact-item:hover {
            transform: translateX(10px);
            background: rgba(255, 255, 255, 0.12);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--prayag-orange);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 1.3rem;
            flex-shrink: 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .contact-info h4 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 4px;
            color: rgba(255, 255, 255, 0.9);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .contact-info p {
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0;
            color: #fff;
        }

        .contact-info a {
            color: #fff;
            text-decoration: none;
        }

        .branch-selector {
            display: flex;
            gap: 20px;
            background: #f8fafc;
            padding: 15px;
            border-radius: 12px;
            border: 2px solid #edf2f7;
        }

        .form-check-input:checked {
            background-color: var(--prayag-teal);
            border-color: var(--prayag-teal);
        }

        .emergency-sidebar-title {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 25px;
            line-height: 1.2;
        }

        @media (max-width: 991px) {
            .appointment-form-right {
                width: 100%;
                order: -1;
                padding: 40px;
            }
            .appointment-form-left {
                padding: 40px 20px;
            }
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="appointment-page-wrapper">
        <div class="container appointment-container">
            <div class="appointment-form-card">
                <!-- Left Column: Booking Form -->
                <div class="appointment-form-left">
                    <div class="form-section-head">
                        <h2 class="form-section-title">Book an Appointment</h2>
                        <p class="form-section-subtitle">Take the first step towards better health. Fill out the form below to request a consultation with our expert doctors.</p>
                    </div>
                    
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control-custom" placeholder="Enter patient's full name" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control-custom" placeholder="+91 00000 00000" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Select Speciality</label>
                                <select class="form-control-custom" required>
                                    <option value="" disabled selected>Choose a department</option>
                                    <option>Cardiac Sciences</option>
                                    <option>Neurosciences</option>
                                    <option>Orthopaedics</option>
                                    <option>Obstetrics & Gynaecology</option>
                                    <option>Oncology</option>
                                    <option>Gastroenterology</option>
                                    <option>Urology</option>
                                    <option>Others</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">Preferred Date</label>
                                <input type="date" class="form-control-custom" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Preferred Hospital Branch</label>
                            <div class="branch-selector">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="branch" id="noida" checked>
                                    <label class="form-check-label" for="noida"> Noida Sector 41</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="branch" id="grnoida">
                                    <label class="form-check-label" for="grnoida"> Greater Noida</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Patient Message (Optional)</label>
                            <textarea class="form-control-custom" rows="3" placeholder="Tell us about your symptoms or medical history"></textarea>
                        </div>

                        <button type="submit" class="btn-submit-appointment">Confirm Booking Request</button>
                    </form>
                </div>
                
                <!-- Right Column: Info Sidebar -->
                <div class="appointment-form-right">
                    <h3 class="emergency-sidebar-title">Need Urgent Assistance?</h3>
                    <p class="mb-5" style="opacity: 0.9; font-size: 1.05rem;">Our support team is available 24/7 to assist you with emergency bookings and hospital services.</p>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="contact-info">
                            <h4>24/7 Helpline</h4>
                            <p><a href="tel:01204021900">0120 - 4021900</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-ambulance"></i></div>
                        <div class="contact-info">
                            <h4>Ambulance</h4>
                            <p><a href="tel:01204021914">0120 - 4021914</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-info">
                            <h4>Official Email</h4>
                            <p><a href="mailto:info@prayaghospital.in">info@prayaghospital.in</a></p>
                        </div>
                    </div>

                    <div class="mt-4 pt-4 border-top border-light" style="opacity: 0.8; font-size: 0.9rem;">
                        <p><i class="fas fa-info-circle me-2"></i> After submitting the form, our coordinator will call you within 30 minutes to confirm your appointment time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>
</body>

</html>
