<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn More - B2B Smart NFC Cards</title>
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

            .badge {
                font-size: 0.8rem;
            }

            .demo-links {
                flex-direction: column;
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
                <h4 class="info-title">What's Included:</h4>
                    <ul>
                        <li>✅ NFC ও QR কোড অপশন</li>
                        <li>✅ কাস্টম কার্ড ডিজাইন</li>
                        <li>✅ সম্পূর্ন কাস্টমাইজেবল প্রোফাইল</li>
                        <li>✅ ৪ টি প্রিমিয়াম থিম</li>
                        <li>✅ ছবির গ্যালারি</li>
                        <li>✅ যাচাইকৃত ব্যাজ/প্রিমিয়াম আইকন</li>
                        <li>✅ সংরক্ষণ এবং ভাগ করার বোতাম</li>
                        <li>✅ ১০ বছরের প্রোফাইল ওয়ারেন্টি</li>
                        <li>✅ ডেটা ব্যাকআপ সুবিধা</li>
                        <li>✅ রেফারেলের মাধ্যমে আয়</li>

                    </ul>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">What is NFC?</h2>
            <p>NFC এর পূর্নরূপ হলো Near Field Communication । এই কার্ডে যুক্ত থাকা NFC চিপ, ইলেকট্রিক সংযোগ ছাড়া আরেকটা NFC ডিভাইসের সাথে ৪ সেন্টিমিটার দূরত্বের মধ্যে কমিউনিকেট করতে পারে। এর ফলে NFC সাপোর্টেড মোবাইলের কাছে নিয়ে যাওয়ার সাথে সাথে এই কার্ডে সংরক্ষিত প্রোফাইলটি দেখা যাবে । এই প্রোফাইলে আপনার নাম, ঠিকানা, কন্টাক্ট নাম্বার , ইমেইল এড্রেস, ছবি, সকল সোশাল মিডিয়া, ওয়েবসাইট, ইমেজ গ্যালারি, বিজিনেস ইনফরমেশন, প্রডাক্ট এন্ড সার্ভিস ইনফরমেশন ইত্যদি এড করে রাখা যায় । এতে খুব সহজে ডিজিটাল ভাবে অন্যদের সাথে নিজেকে রিপ্রেজেন্ট করতে পারবেন । প্রোফাইলে থাকা Save কন্টাক্ট বাটনে ক্লিক করে যে কেউ Save করে নিতে পারবে আপনার সকল কন্টাক্ট ইনফরমেশন । স্মার্ট ফোনে NFC না থাকলে কোন ব্যপার না এই কার্ডে থাকবে ডাইনামিক QR কোড , যে কেউ স্কেন করে আপনার প্রোফাইল দেখতে পারবে ।</p>
        </section>

        <section class="section">
            <h2 class="section-title">QR Code Option</h2>
            <p>আমাদের থেকে যারা কার্ড নিবে সেই কার্ডের সাথে একটা QR কোড থাকবে , যেই QR কোড স্কেন করলে নির্দিষ্ট ব্যাক্তির সকল তথ্য সাথে সাথে প্রোফাইলের মাধ্যমে চলে আসবে । সেই QR কোড চাইলে ইউজার যেইখানে সেইখানে ব্যবহার করতে পারে । নিছে একটি উদাহারন সরূপ QR কোড দেওয়া হলো , যেইটার মতো আপনার সকল তথ্য চলে আসবে ।</p>

            <div class="demo-links">
                <a href="https://nfcdeck.com/p/mrlaboratory23" class="demo-link" target="_blank">
                    <i class="fas fa-external-link-alt"></i> View Demo Profile 1
                </a>
                <a href="https://nfcdeck.com/p/nfcdeck" class="demo-link" target="_blank">
                    <i class="fas fa-external-link-alt"></i> View Demo Profile 2
                </a>
            </div>
        </section>



        <section class="section faq-section">
            <h2 class="section-title">Frequently Asked Questions</h2>

            <div class="faq-item">
                <h3 class="faq-question">কেন B2BPLATFORM থেকে এই স্মার্ট বিজিনেস কার্ড নিবেন ?</h3>
                <p class="faq-answer">আমাদের প্রোফাইলে রয়েছে ইচ্ছামতো কাস্টমাইজ করার সুবিধা । আপনার তথ্য আপনি নিজে আপডেট করে নিতে পারবেন যে কোন সময় । বছরে দিতে হবে না কোন চার্জ । আমরা দিচ্ছি ১০ বছরের প্রিমিয়াম প্রোফাইল ওয়ারেন্টি, এর মধ্যে আপনার প্রোফাইলে কোন সমস্যা হলে আমাদের ওয়েবসাইট এবং Whatsapp এর মাধ্যমে সাপোর্ট নিতে পারবেন । আমাদের কার্ডটি ওয়াটারফ্রুফ , পানিতে ভিজলেও সমস্যা নেই । উচ্চমানের PVC মেটেরিয়াল দিয়ে তৈরি তাই সহজে ভাঙার ও ভয় থাকে না । আমাদের নিজস্ব ডিজাইন থেকে চয়েস করতে পারবেন অথবা নিজের মন মতো কার্ডের ডিজাইন দিতে পারবেন ।</p>
            </div>


            <div class="faq-item">
                <h3 class="faq-question">𝗗𝗲𝗹𝗶𝘃𝗲𝗿𝘆 𝗧𝗶𝗺𝗲</h3>
                <p class="faq-answer">✅ Inside Dhaka: 2/3 Days</p>
                <p class="faq-answer">✅ Outside Dhaka: 3/4 Days</p>
            </div>


            <div class="faq-item">
                <h3 class="faq-question"> ডেমো প্রোফাইল</h3>
                <p class="faq-answer">ডেমো প্রোফাইল মানে আপনার তথ্য দেখতে কেমন হবে , কিভাবে আপনার তথ্য আমাদের প্রোফাইলের মাধ্যমে আসবে সেই প্রোফাইলে কি কি তথ্য থাকবে । নিছে এক্সাম্পল লিঙ্ক দেওয়া আছে</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">What information do I need to provide to order a card?</h3>
                <p class="faq-answer">You just need to provide your name, email, phone number, and delivery address. You can add all other information yourself after receiving the card.</p>
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