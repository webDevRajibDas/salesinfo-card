<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B2B || Terms & Conditions </title>

    @include('frontend.includes.meta')

    <link rel="mask-icon" href="{{asset('assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{asset('assets/favicon_io/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #3B82F6;
            --primary-dark: #2563EB;
            --primary-light: #93C5FD;
            --secondary: #8B5CF6;
            --accent: #F59E0B;
            --accent-dark: #D97706;
            --light: #F8FAFC;
            --dark: #1E293B;
            --gray: #64748B;
            --success: #10B981;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            background: linear-gradient(135deg, #F1F5F9 0%, #E2E8F0 100%);
            line-height: 1.7;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
        }

        /* Header Section */
        .terms-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .terms-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .terms-header h1 i {
            margin-right: 15px;
            font-size: 2.2rem;
        }

        .terms-header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Terms Content */
        .terms-content {
            padding: 40px;
        }

        .terms-section {
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid #E2E8F0;
        }

        .terms-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .section-title {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--primary-light);
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-right: 12px;
            font-size: 1.4rem;
        }

        .terms-section p {
            margin-bottom: 15px;
            color: var(--dark);
        }

        .highlight-box {
            background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%);
            border-left: 4px solid var(--primary);
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }

        .highlight-box p {
            margin-bottom: 0;
            font-weight: 500;
        }

        .terms-list {
            list-style-type: none;
            margin: 15px 0;
        }

        .terms-list li {
            margin-bottom: 12px;
            padding-left: 30px;
            position: relative;
        }

        .terms-list li:before {
            content: '';
            position: absolute;
            left: 0;
            top: 10px;
            width: 8px;
            height: 8px;
            background: var(--primary);
            border-radius: 50%;
        }

        .key-points-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }

        .key-point-card {
            background: var(--light);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .key-point-card:hover {
            transform: translateY(-5px);
        }

        .key-point-card h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .key-point-card h3 i {
            margin-right: 10px;
            color: var(--accent);
        }

        .key-point-card p {
            font-size: 0.95rem;
            color: var(--gray);
            margin-bottom: 0;
        }

        .contact-info {
            background: linear-gradient(135deg, #F0FDF4 0%, #DCFCE7 100%);
            border-radius: 12px;
            padding: 25px;
            margin-top: 30px;
            border-left: 4px solid var(--success);
        }

        .contact-info h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--success);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .contact-info h3 i {
            margin-right: 10px;
        }

        .contact-info address {
            font-style: normal;
        }

        .contact-info a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-info a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        /* Table of Contents */
        .toc-container {
            background: var(--light);
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 30px;
            border-left: 4px solid var(--accent);
        }

        .toc-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--accent);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .toc-title i {
            margin-right: 10px;
        }

        .toc-list {
            list-style-type: none;
        }

        .toc-list li {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }

        .toc-list li:before {
            content: '•';
            position: absolute;
            left: 0;
            color: var(--accent);
            font-weight: bold;
        }

        .toc-list a {
            color: var(--dark);
            text-decoration: none;
            transition: color 0.3s;
        }

        .toc-list a:hover {
            color: var(--primary);
        }

        /* Decorative Elements */
        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .circle-1 {
            width: 150px;
            height: 150px;
            top: -60px;
            left: -60px;
        }

        .circle-2 {
            width: 100px;
            height: 100px;
            bottom: -40px;
            right: 60px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .terms-header {
                padding: 30px 20px;
            }

            .terms-header h1 {
                font-size: 2rem;
                flex-direction: column;
            }

            .terms-header h1 i {
                margin-right: 0;
                margin-bottom: 10px;
            }

            .terms-content {
                padding: 30px 20px;
            }

            .key-points-grid {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 1.4rem;
            }
        }

        @media (max-width: 576px) {
            .terms-header h1 {
                font-size: 1.8rem;
            }

            .section-title {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="terms-header">
        <!-- Decorative circles -->
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>

        <h1><i class="fas fa-file-contract"></i>Terms & Conditions</h1>
        <p>Last updated: January 1, 2025</p>
    </div>

    <div class="terms-content">
        <!-- Table of Contents -->
        <div class="toc-container">
            <h2 class="toc-title"><i class="fas fa-list-ol"></i>Table of Contents</h2>
            <ul class="toc-list">
                <li><a href="#products">Products & Delivery</a></li>
                <li><a href="#pricing">Pricing & Payments</a></li>
                <li><a href="#warranty">Warranty & Support</a></li>
                <li><a href="#referrals">Referral Program</a></li>
                <li><a href="#usage">Usage Policies</a></li>
                <li><a href="#privacy">Privacy & Data</a></li>
                <li><a href="#modifications">Service Modifications</a></li>
                <li><a href="#contact">Contact Information</a></li>
            </ul>
        </div>

        <!-- Key Points Grid -->
        <div class="key-points-grid">
            <div class="key-point-card">
                <h3><i class="fas fa-shipping-fast"></i>Delivery Time</h3>
                <p>Typical preparation and delivery time is 3–4 days; delays may occur for technical reasons or off days.</p>
            </div>

            <div class="key-point-card">
                <h3><i class="fas fa-shield-alt"></i>10-Year Warranty</h3>
                <p>Online profiles carry a 10-year warranty; issues within this period will be resolved promptly.</p>
            </div>

            <div class="key-point-card">
                <h3><i class="fas fa-handshake"></i>Referral Program</h3>
                <p>Both referrer and referee receive a 5% order bonus. Balance withdrawable from 1000 BDT.</p>
            </div>
        </div>

        <!-- Terms Sections -->
        <div class="terms-section" id="products">
            <h2 class="section-title"><i class="fas fa-box-open"></i>1. Products & Delivery</h2>
            <p>Our products include NFC cards, coins, and stickers designed for modern digital networking solutions.</p>

            <div class="highlight-box">
                <p><strong>Delivery Information:</strong> Typical preparation and delivery time is 3–4 days. Please note that delays may occur due to technical issues, holidays, or other unforeseen circumstances.</p>
            </div>

            <p>Multiple NFC cards can point to the same profile, and scanner tools are available as needed to enhance your experience.</p>
        </div>

        <div class="terms-section" id="pricing">
            <h2 class="section-title"><i class="fas fa-tags"></i>2. Pricing & Payments</h2>
            <p>Prices may change based on marketing strategies and cost factors. We reserve the right to adjust pricing without prior notice.</p>

            <div class="highlight-box">
                <p><strong>Important:</strong> Orders placed without full understanding are still payable once prepared, as NFC cards are personalized and not reusable for other customers.</p>
            </div>

            <p>Delivery charges are generally borne by the customer unless otherwise specified in promotional offers.</p>
        </div>

        <div class="terms-section" id="warranty">
            <h2 class="section-title"><i class="fas fa-award"></i>3. Warranty & Support</h2>
            <p>Online profiles carry a 10-year warranty. Any issues arising within this period will be resolved by our support team.</p>

            <ul class="terms-list">
                <li>New profile versions may be released periodically; customers agree to accept necessary updates</li>
                <li>Damaged card? Replacement available at 30% discount when re-using the original profile</li>
                <li>Profiles carry 5–10 year warranty; after that period, fees may apply for continued management</li>
                <li>Temporary downtime may occur due to updates or technical issues</li>
            </ul>

            <p>Premium users may contact support for priority assistance with any issues or questions.</p>
        </div>

        <div class="terms-section" id="referrals">
            <h2 class="section-title"><i class="fas fa-users"></i>4. Referral Program</h2>
            <p>We offer a referral program to reward our loyal customers for spreading the word about our services.</p>

            <ul class="terms-list">
                <li>Both referrer and referee receive a 5% order bonus</li>
                <li>Referral balance is withdrawable once it reaches 1000 BDT via bKash or bank transfer</li>
                <li>Referral rewards are subject to verification and may be revoked in case of abuse</li>
            </ul>
        </div>

        <div class="terms-section" id="usage">
            <h2 class="section-title"><i class="fas fa-user-check"></i>5. Usage Policies</h2>
            <p>To maintain a safe and respectful environment for all users, we enforce certain usage policies.</p>

            <div class="highlight-box">
                <p><strong>Zero Tolerance:</strong> Repeated abuse or harassment can result in indefinite suspension of accounts. Unethical or illegal use may lead to immediate account and card suspension/termination.</p>
            </div>

            <ul class="terms-list">
                <li>Users must comply with all applicable local laws and regulations</li>
                <li>All users must adhere to NFC Deck's rules and guidelines</li>
                <li>Free accounts may be suspended or require ad support for continued service</li>
                <li>Orders placed outside official channels (Facebook page/website) are not our responsibility</li>
            </ul>
        </div>

        <div class="terms-section" id="privacy">
            <h2 class="section-title"><i class="fas fa-lock"></i>6. Privacy & Data</h2>
            <p>We value your privacy and are committed to protecting your personal information.</p>

            <ul class="terms-list">
                <li>User information is not shared with third parties unless required by law or for user benefit</li>
                <li>We implement security measures to protect your data from unauthorized access</li>
                <li>Profile modifications are generally not accepted unless required for valid reasons</li>
            </ul>
        </div>

        <div class="terms-section" id="modifications">
            <h2 class="section-title"><i class="fas fa-cogs"></i>7. Service Modifications</h2>
            <p>We continuously work to improve our services, which may require occasional modifications.</p>

            <ul class="terms-list">
                <li>We may add or modify policies to improve the service quality</li>
                <li>Free designs and marketplace ideas are provided; custom designs are chargeable</li>
                <li>Users can purchase profiles without other physical products</li>
                <li>Service features may be updated or discontinued with notice</li>
            </ul>
        </div>

        <div class="terms-section" id="contact">
            <h2 class="section-title"><i class="fas fa-envelope"></i>8. Contact Information</h2>
            <p>If you have any questions about these Terms & Conditions, please contact us:</p>

            <div class="contact-info">
                <h3><i class="fas fa-headset"></i>Customer Support</h3>
                <address>
                    <strong>NFC Deck</strong><br>
                    Email: <a href="mailto:hello@b2bplatformbd.com">hello@b2bplatformbd.com</a><br>
                    Phone: 018****<br>
                    Official Channels: <a href="https://www.facebook.com/infodigitalcard">INFO Digital Card</a>
                </address>
            </div>

            <p>We typically respond to inquiries within 24-48 hours during business days.</p>
        </div>
    </div>
</div>

<script>
    // Smooth scrolling for table of contents links
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.toc-list a');

        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                window.scrollTo({
                    top: targetElement.offsetTop - 20,
                    behavior: 'smooth'
                });
            });
        });

        // Animation for decorative elements
        const circles = document.querySelectorAll('.circle');

        circles.forEach((circle, index) => {
            circle.style.opacity = '0';
            circle.style.transform = 'scale(0)';
            circle.style.transition = 'opacity 1s, transform 1s';

            setTimeout(() => {
                circle.style.opacity = '1';
                circle.style.transform = 'scale(1)';
            }, 500 + (index * 300));
        });
    });
</script>
</body>
</html>