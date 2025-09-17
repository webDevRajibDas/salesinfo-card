<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn More - B2B Smart NFC Cards</title><link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/favicon_io/apple-touch-icon.png') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon_io/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon_io/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon_io/favicon-16x16.png')}}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
            line-height: 1.6;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
        }

        /* Header Section */
        .page-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 60px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header-content {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .badge {
            display: inline-block;
            background: var(--accent);
            color: var(--dark);
            font-weight: 700;
            font-size: 0.9rem;
            padding: 8px 20px;
            border-radius: 50px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.4);
        }

        .header-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .header-description {
            font-size: 1.2rem;
            margin-bottom: 25px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 500;
            opacity: 0.95;
        }

        /* Main Content */
        .main-content {
            padding: 60px 40px;
        }

        .section {
            margin-bottom: 60px;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
            color: var(--primary);
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 2px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .feature-card {
            background: var(--light);
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .feature-description {
            color: var(--gray);
            font-size: 1rem;
        }

        .info-box {
            background: var(--light);
            border-left: 4px solid var(--accent);
            padding: 20px;
            border-radius: 8px;
            margin: 30px 0;
        }

        .info-title {
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .demo-links {
            display: flex;
            gap: 20px;
            margin: 20px 0;
            flex-wrap: wrap;
        }

        .demo-link {
            display: inline-block;
            padding: 12px 25px;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: background 0.3s;
        }

        .demo-link:hover {
            background: var(--primary-dark);
        }

        .pricing-section {
            background: linear-gradient(135deg, #E2E8F0 0%, #CBD5E1 100%);
            padding: 40px;
            border-radius: 16px;
            margin: 40px 0;
        }

        .pricing-title {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: var(--dark);
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .pricing-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .pricing-name {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .pricing-price {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .pricing-features {
            list-style: none;
            margin-bottom: 25px;
        }

        .pricing-features li {
            margin-bottom: 10px;
            color: var(--gray);
        }

        .btn-primary {
            display: inline-block;
            padding: 12px 25px;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }

        .faq-section {
            margin-top: 60px;
        }

        .faq-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #E2E8F0;
            padding-bottom: 20px;
        }

        .faq-question {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .faq-answer {
            color: var(--gray);
        }

        /* Decorative Elements */
        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .circle-1 {
            width: 200px;
            height: 200px;
            top: -80px;
            left: -80px;
        }

        .circle-2 {
            width: 120px;
            height: 120px;
            bottom: -40px;
            right: 80px;
        }

        .circle-3 {
            width: 80px;
            height: 80px;
            top: 80px;
            right: -30px;
        }


        /* Custom checkbox style */
        .checkbox-container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 0;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--dark);
            user-select: none;
            flex: 1;
        }

        /* Hide the default checkbox */
        .checkbox-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: white;
            border: 2px solid var(--gray);
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        /* Blue tick style when checked */
        .checkbox-container input:checked ~ .checkmark {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .checkbox-container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .checkbox-container .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg);
        }

        /* Blue tick icon style */
        .blue-tick {
            color: var(--primary);
            font-size: 1.5rem;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 30px;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .features-grid, .pricing-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .header-title {
                font-size: 2.2rem;
            }

            .header-description {
                font-size: 1.1rem;
            }

            .page-header, .main-content {
                padding: 40px 20px;
            }

            .section-title {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 480px) {
            .header-title {
                font-size: 1.8rem;
            }

            .header-description {
                font-size: 1rem;
            }


        }
    </style>
</head>
<body>
<div class="container">
    <header class="page-header">
        <!-- Decorative circles -->
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>

        <div class="header-content">
            <h1 class="header-title">B2B Smart NFC Business Cards</h1>
            <p class="header-description">Digital smart NFC business cards that share your information with a simple tap</p>
        </div>
    </header>

    <div class="main-content">
        <section class="section">
            <h2 class="section-title">Digital Smart NFC Business Card</h2>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tap"></i>
                    </div>
                    <h3 class="feature-title">Tap to Share Information</h3>
                    <p class="feature-description">Simply tap the card on an NFC-enabled phone to instantly share all your contact information.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-qrcode"></i>
                    </div>
                    <h3 class="feature-title">QR Code Option</h3>
                    <p class="feature-description">For phones without NFC, the QR code can be scanned to access your digital profile.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="feature-title">Custom Card Design</h3>
                    <p class="feature-description">Choose from our designs or provide your own for a completely personalized card.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sliders-h"></i>
                    </div>
                    <h3 class="feature-title">Fully Customizable Profile</h3>
                    <p class="feature-description">Easily update your information anytime through your online profile dashboard.</p>
                </div>
            </div>

            <div class="info-box">
                <div class="">
                    <h2 class="text-2xl my-2 font-bold"> ডিজিটাল স্মার্ট NFC বিজনেস কার্ড ✅ <span
                                class="animate-pulse text-red-600">(বিস্তারিত)</span></h2>
                    <h2>ফোনের সাথে ট্যাপ করলে চলে আসবে আপনার সকল তথ্য 📲</h2>
                    <h2>রিজনেবল প্রাইসে সেরা সার্ভিস 🔥</h2>
                    <p>এই NFC স্মার্ট বিজনেস কার্ডে যা যা পাচ্ছেন</p>
                    <p>✅NFC ও QR কোড অপশন</p>
                    <p>✅কাস্টম কার্ড ডিজাইন</p>
                    <p>✅সম্পূর্ন কাস্টমাইজেবল প্রোফাইল</p>
                    <p>✅৪ টি প্রিমিয়াম থিম</p>
                    <p>✅কন্টাক্ট ও সকল সোশ্যাল লিংক যুক্ত করা যাবে</p>
                    <p>✅প্রডাক্ট, সার্ভিস ও পোর্টফলিও যুক্ত করতে পারবেন</p>
                    <p>✅বিজনেস ইনফরমেশন</p>
                    <p>✅ইমেজ গ্যালারি</p>
                    <p>✅ব্লু টিক / প্রিমিয়াম আইকন</p>
                    <p>✅Save এবং Share বাটন</p>
                    <p>✅১০ বছরের প্রোফাইল ওয়ারেন্টি</p>
                    <p>✅তথ্য ব্যাকআপ রাখার সুবিধা</p>
                    <p>✅রেফারিং করে আয়</p></div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">What is NFC?</h2>
            <p>NFC এর পূর্নরূপ হলো <span class="fw-bolder">Near Field Communication</span> । এই কার্ডে যুক্ত থাকা NFC চিপ, ইলেকট্রিক সংযোগ ছাড়া আরেকটা NFC ডিভাইসের সাথে ৪ সেন্টিমিটার দূরত্বের মধ্যে কমিউনিকেট করতে পারে। এর ফলে NFC সাপোর্টেড মোবাইলের কাছে নিয়ে যাওয়ার সাথে সাথে এই কার্ডে সংরক্ষিত প্রোফাইলটি দেখা যাবে । এই প্রোফাইলে আপনার নাম, ঠিকানা, কন্টাক্ট নাম্বার , ইমেইল এড্রেস, ছবি, সকল সোশাল মিডিয়া, ওয়েবসাইট, ইমেজ গ্যালারি, বিজিনেস ইনফরমেশন, প্রডাক্ট এন্ড সার্ভিস ইনফরমেশন ইত্যদি এড করে রাখা যায় । এতে খুব সহজে ডিজিটাল ভাবে অন্যদের সাথে নিজেকে রিপ্রেজেন্ট করতে পারবেন । প্রোফাইলে থাকা Save কন্টাক্ট বাটনে ক্লিক করে যে কেউ Save করে নিতে পারবে আপনার সকল কন্টাক্ট ইনফরমেশন । স্মার্ট ফোনে NFC না থাকলে কোন ব্যপার না এই কার্ডে থাকবে ডাইনামিক QR কোড , যে কেউ স্কেন করে আপনার প্রোফাইল দেখতে পারবে ।</p>

            <div class="info-box">
                <p>This profile can include your name, address, contact number, email address, photo, all social media, website, image gallery, business information, products and services information, etc. You can easily represent yourself digitally to others.</p>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">QR Code Option</h2>
            <p>আমাদের থেকে যারা কার্ড নিবে সেই কার্ডের সাথে একটা QR কোড থাকবে , যেই QR কোড স্কেন করলে নির্দিষ্ট ব্যাক্তির সকল তথ্য সাথে সাথে প্রোফাইলের মাধ্যমে চলে আসবে । সেই QR কোড চাইলে ইউজার যেইখানে সেইখানে ব্যবহার করতে পারে । নিছে একটি উদাহারন সরূপ QR কোড দেওয়া হলো , যেইটার মতো আপনার সকল তথ্য চলে আসবে ।</p>

        </section>

        <section class="pricing-section">
            <h2 class="pricing-title">Affordable Pricing Plans</h2>

            <div class="pricing-grid">
                <div class="pricing-card">
                    <h3 class="pricing-name">Standard NFC Card</h3>
                    <div class="pricing-price">$149</div>
                    <ul class="pricing-features">
                        <li>Pre-designed templates</li>
                        <li>Basic contact information</li>
                        <li>NFC tap technology</li>
                        <li>100 cards per package</li>
                    </ul>
                </div>

                <div class="pricing-card">
                    <h3 class="pricing-name">Premium NFC Card</h3>
                    <div class="pricing-price">$249</div>
                    <ul class="pricing-features">
                        <li>Custom logo design</li>
                        <li>Extended digital profile</li>
                        <li>NFC & QR code technology</li>
                        <li>50 cards per package</li>
                    </ul>
                </div>

                <div class="pricing-card">
                    <h3 class="pricing-name">Business Bundle</h3>
                    <div class="pricing-price">$499</div>
                    <ul class="pricing-features">
                        <li>Complete branding</li>
                        <li>Admin dashboard access</li>
                        <li>NFC, QR & digital options</li>
                        <li>200+ cards</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section faq-section">
            <h2 class="section-title"> ডেমো ডিজাইন</h2>

            <div class="faq-item">
                <p class="faq-answer">ডেমো ডিজাইন দেখতে কেমন হবে আপনার কার্ড , আমাদের কাছে NFC চিপ যুক্ত কার্ড রয়েছে যা ATM কার্ডের সমান । তবে ATM কার্ড নই । সেই কার্ড আমরা আপনার পছন্দের ডিজাইন প্রিন্ট করে আপনার জন্য কার্ড রেডি করবো । সেই ডিজাইন গুলো চাইলে আপনার পছন্দ মতো দিতে পারবেন যদি আপনি ফুল কাস্টমাইজ কার্ড অর্ডার করে থাকেন । আমাদের কাছে সেম্পল ১০০ টার মতো ডিজাইন রয়েছে , আপনি চাইলে আমাদের ডিজাইন গুলো থেকে পছন্দ করতে পারেন , যদি পছন্দ না হয় তাহলে আপনার পছন্দের ডিজাইনটা আমাদের দিয়ে করিয়ে নিতে পারেন। এক্ষেত্রে ডিজাইন চার্জ দিতে হবে ।
                    অথবা আপনি চাইলে ফ্রিফিক থেকে ডিজাইন পছন্দ করে দিতে পারেন ।</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Is there an expiration date for these cards?</h3>
                <p class="faq-answer">No, these cards have no expiration date. Once you purchase a card, you can use it for a lifetime. We also provide a 10-year warranty.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">How will I receive the card after ordering?</h3>
                <p class="faq-answer">After you place your order, we will design and print your card, add your information, and deliver it to your address through a courier service.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">কার্ড অর্ডার করতে কি কি লাগবে?</h3>
                <p class="faq-answer">শুধু আপনার নাম, ইমেইল, ফোন নম্বর, ডেসিভারী এড্রেস দিলেই হবে। বাকি সব তথ্য কার্ড হাতে পাওয়ার পর আপনি নিজেই এড করে নিতে পারবেন। আমাদের টিউটোরিয়াল ভিডিও আছে ইউজার মেনুয়েল আছে । তাও যদি না বুঝে থাকেন তাহলে আমরা করে দিব ইনশাল্লাহ ।</p>
            </div>
        </section>
    </div>
</div>

<script>
    // Simple animation for decorative elements
    document.addEventListener('DOMContentLoaded', function() {
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