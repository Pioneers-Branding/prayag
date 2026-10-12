<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Principal Rights & Privacy Grievance Portal | Prayag Hospital</title>
    <meta name="description"
        content="Exercise your statutory rights under the Digital Personal Data Protection (DPDP) Act, 2023 at Prayag Hospital — Request data summary, correction, erasure, nomination, or submit a privacy grievance to the DPO.">
    <meta name="keywords"
        content="dpdp rights prayag hospital, data protection grievance, dpo noida hospital, right to erasure, right to access medical data">
    <?php include 'header-links.php'; ?>
    <style>
        .grievance-page-wrapper {
            padding: 60px 0 90px;
            background: #fdfdfd;
        }

        .grievance-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(74, 143, 115, 0.12);
            padding: 40px;
        }

        .info-sidebar-box {
            background: var(--prayag-teal);
            border-radius: 20px;
            padding: 40px 30px;
            color: #ffffff;
        }

        .info-sidebar-box h4 {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 16px;
            font-size: 1.3rem;
        }

        .info-sidebar-box p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .dpo-badge-detail {
            background: rgba(255, 255, 255, 0.1);
            padding: 16px;
            border-radius: 12px;
            margin-top: 20px;
        }

        .dpo-badge-detail h5 {
            font-size: 1rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 8px;
        }

        .dpo-badge-detail p {
            margin-bottom: 4px;
            font-size: 0.88rem;
        }

        .dpo-badge-detail a {
            color: #ffdda1;
            text-decoration: underline;
        }

        .rights-accordion-item {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 12px;
            overflow: hidden;
        }

        .rights-accordion-btn {
            background: #f8fafc;
            padding: 14px 20px;
            font-weight: 600;
            color: #1e293b;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-label {
            font-weight: 600;
            color: #1e293b;
            font-size: 0.92rem;
            margin-bottom: 6px;
        }

        .form-control,
        .form-select {
            padding: 12px 16px;
            border-radius: 10px;
            border: 1.5px solid #e2e8f0;
            font-size: 0.95rem;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--prayag-teal);
            box-shadow: 0 0 0 3px rgba(74, 143, 115, 0.12);
        }

        .btn-submit-grievance {
            background: var(--prayag-teal);
            color: #fff;
            font-weight: 700;
            padding: 14px 30px;
            border-radius: 10px;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-submit-grievance:hover {
            background: #38705b;
            color: #fff;
            transform: translateY(-2px);
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
                    <li class="breadcrumb-item"><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Principal Rights & Grievance</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Data Rights & Privacy Grievance Portal</h1>
                <p class="blog-hero-subtitle">Exercise your rights under the Digital Personal Data Protection (DPDP)
                    Act, 2023 or connect directly with our Data Protection Officer (DPO).</p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="grievance-page-wrapper">
        <div class="container">
            <div class="row g-4">
                <!-- Left Column: Interactive Request Form -->
                <div class="col-lg-8">
                    <div class="grievance-card">
                        <h2 class="h4 mb-2" style="font-weight: 700; color: #1e293b;">
                            <i class="fas fa-user-shield text-primary-orange me-2"></i> Submit a Data Request or
                            Grievance
                        </h2>
                        <p class="text-muted mb-4" style="font-size:0.95rem;">
                            Please fill out the form below. In accordance with DPDP Act mandates, your request will be
                            acknowledged within <strong>48 hours</strong> and addressed within statutory timelines.
                        </p>

                        <form id="dpdpRequestForm" action="https://app.formester.com/forms/D4vYnLrZT/submissions"
                            method="POST" enctype="multipart/form-data">
                            <!-- Hidden identifier -->
                            <input type="hidden" name="form_type" value="DPDP_Act_2023_Data_Rights_Request">

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name of Data Principal (Patient / User) *</label>
                                    <input type="text" name="full_name" class="form-control"
                                        placeholder="Enter full legal name" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Hospital UHID / Patient ID (If registered)</label>
                                    <input type="text" name="uhid_number" class="form-control"
                                        placeholder="e.g. PRY-123456 (Optional)">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" name="email" class="form-control" placeholder="name@example.com"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Mobile Number *</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+91 XXXXX XXXXX"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Are you the Data Principal or Authorized Representative?
                                        *</label>
                                    <select name="applicant_capacity" class="form-select" required>
                                        <option value="Self" selected>Self (The Data Principal)</option>
                                        <option value="Parent/Guardian">Parent / Lawful Guardian of Minor (under 18)
                                        </option>
                                        <option value="Nominee">Nominee / Legal Heir</option>
                                        <option value="Authorized Representative">Authorized Legal Representative
                                        </option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Nature of Request under DPDP Act 2023 *</label>
                                    <select name="request_nature" class="form-select" required>
                                        <option value="">-- Select Right / Request Type --</option>
                                        <option value="Right to Access Data Summary">Right to Access (Summary of
                                            personal data & identities of shared parties)</option>
                                        <option value="Right to Correction / Rectification">Right to Correction (Update
                                            inaccurate/incomplete records)</option>
                                        <option value="Right to Erasure / Deletion">Right to Erasure (Request deletion
                                            where retention laws permit)</option>
                                        <option value="Right to Nominate">Right to Nominate (Designate a representative
                                            in event of incapacity)</option>
                                        <option value="Withdrawal of Consent">Withdrawal of Consent (Stop processing for
                                            non-statutory purposes)</option>
                                        <option value="Privacy Grievance / Complaint">Data Privacy Grievance / Complaint
                                            against Processing</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Description of Request / Grievance *</label>
                                    <textarea name="request_details" class="form-control" rows="4"
                                        placeholder="Please provide specific details regarding your personal data, records, or nature of grievance..."
                                        required></textarea>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Attach Supporting Identification / Document
                                        (Optional)</label>
                                    <input type="file" name="attachment" class="form-control">
                                    <div class="form-text">Accepted formats: PDF, JPG, PNG (Max 5MB). Used strictly for
                                        identity verification.</div>
                                </div>

                                <div class="col-12 mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="dpdpDeclConsent" required>
                                        <label class="form-check-label" for="dpdpDeclConsent"
                                            style="font-size:0.88rem; color:#475569;">
                                            I declare that the information provided above is true and accurate. I
                                            authorize Prayag Hospital's Data Protection Office to verify my identity and
                                            process this request under the provisions of the DPDP Act, 2023.
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 mt-4 text-start">
                                    <button type="submit" class="btn-submit-grievance">
                                        <i class="fas fa-paper-plane me-2"></i> Submit Request to DPO
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Column: DPO Information & FAQ -->
                <div class="col-lg-4">
                    <div class="info-sidebar-box mb-4">
                        <h4><i class="fas fa-id-card-alt me-2"></i> DPO Contact</h4>
                        <p>
                            For direct statutory inquiries or escalated privacy concerns:
                        </p>

                        <div class="dpo-badge-detail">
                            <h5>Data Protection Officer</h5>
                            <p><strong>Prayag Hospital & Research Centre Pvt. Ltd.</strong></p>
                            <p>J-206/A-1, Sector 41, Noida, UP – 201301</p>
                            <p><i class="fas fa-envelope me-1"></i> <a
                                    href="mailto:marketing@prayaghospital.in">marketing@prayaghospital.in</a></p>
                            <p><i class="fas fa-phone-alt me-1"></i> 0120-4021900</p>
                            <p class="mt-2 text-white-50"><small>Hours: Mon–Sat (9 AM – 5 PM)</small></p>
                        </div>

                        <div class="mt-4">
                            <h5 style="color:#fff; font-size:1rem; font-weight:700;"><i class="fas fa-clock me-1"></i>
                                Statutory Timelines</h5>
                            <ul class="mb-0 ps-3" style="font-size:0.88rem; color:rgba(255,255,255,0.9);">
                                <li>Acknowledgment: Within 48 Hours</li>
                                <li>Verification & Resolution: Within 30 Days</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm p-4" style="border-radius:16px;">
                        <h5 class="fw-bold mb-3" style="color:#1e293b;">
                            <i class="fas fa-balance-scale text-primary-orange me-2"></i> Escalation to DPBI
                        </h5>
                        <p class="text-muted" style="font-size:0.88rem; line-height:1.6;">
                            Under Section 13(3) of the DPDP Act 2023, if you do not receive a response from our DPO
                            within 30 days or are unsatisfied with the resolution, you have the right to escalate your
                            grievance to the <strong>Data Protection Board of India (DPBI)</strong>.
                        </p>
                        <a href="privacy-policy.php" class="btn btn-sm btn-outline-secondary w-100"
                            style="border-radius:8px;">
                            <i class="fas fa-book-open me-1"></i> View Full Privacy Policy
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'footer-links.php'; ?>

</body>

</html>