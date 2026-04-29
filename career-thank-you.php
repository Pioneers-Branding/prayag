<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Submitted - Prayag Hospital</title>

    <?php include 'header-links.php'; ?>
    <style>
        .thank-you-section {
            padding: 100px 0;
            text-align: center;
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }
        .thank-you-card {
            background: #ffffff;
            padding: 50px 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            max-width: 600px;
            width: 100%;
        }
        .success-icon {
            font-size: 80px;
            color: var(--prayag-teal, #008080);
            margin-bottom: 20px;
        }
        .thank-you-title {
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }
        .thank-you-text {
            color: #6c757d;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }
        .btn-home {
            background-color: var(--prayag-teal, #008080);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .btn-home:hover {
            background-color: var(--prayag-blue, #004080);
            color: white;
            transform: translateY(-2px);
        }
        .btn-careers {
            background-color: transparent;
            color: var(--prayag-teal, #008080);
            padding: 10px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            border: 2px solid var(--prayag-teal, #008080);
            margin-left: 10px;
            transition: all 0.3s ease;
        }
        .btn-careers:hover {
            background-color: var(--prayag-teal, #008080);
            color: white;
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
                    <li class="breadcrumb-item"><a href="#">Prayag Group</a></li>
                    <li class="breadcrumb-item"><a href="careers.php">Careers</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Application Submitted</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main>
        <section class="thank-you-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 d-flex justify-content-center">
                        <div class="thank-you-card">
                            <i class="fas fa-check-circle success-icon"></i>
                            <h1 class="thank-you-title">Application Submitted!</h1>
                            <p class="thank-you-text">Thank you for your interest in joining Prayag Hospital. Your application has been successfully submitted. Our HR team will review your profile and get in touch with you if your qualifications match our current requirements.</p>
                            
                            <div class="action-buttons mt-4">
                                <a href="index.php" class="btn-home"><i class="fas fa-home me-2"></i>Back to Home</a>
                                <a href="careers.php" class="btn-careers">More Openings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>

    </main>

    <?php include 'footer-links.php'; ?>
</body>

</html>
