@extends('frontend.layouts.app')
@section('title') Home @endsection

@section('content')

  <section id="intro">
  <video class="video-background" autoplay muted loop playsinline>
    <source src="{{ asset('assets/hero_video.mp4') }}" type="video/mp4">
    <source src="movie.ogg" type="video/ogg"> Your browser does not support the video tag.
  </video>
  <div class="overlay"></div>
  <div class="intro-content">
    <h1 class="text-white">Next Generation NFC Business Cards !! Digital. Smart. Professional. Make lasting connections with innovative technology.</h1>
    <div class="intro-buttons">
      <button class="btn-intro">Order Now</button>
      <button class="btn-outline-intro">Learn More</button>
    </div>
  </div>
</section>
<section id="features" class="m-0 border-0 section section-height-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200" style="padding: 20px 0;">
  <div class="container">
    <div class="py-2 row align-items-center">
      <div class="mb-5 col-lg-6 mb-lg-0">
        <div class="hero-content appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">
          <p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Info Business Card is a modern, paperless alternative to traditional business cards. It securely stores all your essential contact details and can be instantly shared via NFC, QR code, or link. Also known as virtual, electronic, or smart business cards, they offer a convenient, eco-friendly, and tech-savvy way to share professional information anytime, anywhere.</p>
          <div class="features-grid appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              <span>Name & Surname</span>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              <span>Company/Organization</span>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              <span>Contact Details</span>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              <span>Address</span>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              <span>Website</span>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              <span>Social Media Links</span>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              <span>Photo Gallery</span>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              <span>YouTube Channel & Social Media Links</span>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              <span>Products & Services Portfolio</span>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              <span>Theme Customization</span>
            </div>
          </div>
          <a href="#" data-hash data-hash-offset="70" class="btn btn-primary btn-outline btn-rounded font-weight-bold btn-px-5 btn-py-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">অর্ডার করুন</a>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
        <!-- Video Section -->
        <div class="video-section">
          <div class="video-player">
            <div class="video-placeholder">
              <video width="450" height="640" controls>
                <source src="{{ asset('assets/info-vdo.mp4') }}" type="video/mp4">
                <source src="movie.ogg" type="video/ogg"> Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



 



<section id="order_and_setup" style="margin: 50px 0;padding: 25px 0;">
  <div class="container-fluid">
    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <div class="steps">
        <div class="step">
          <h1>ORDER & SETUP</h1>
          <p class="subtitle">GET STARTED IN JUST 3 SIMPLE STEPS</p>
          <p class="tagline">Premium NFC Digital Business Cards</p>
        </div>

        <div class="step">
          <div class="step-number">1</div>
          <div class="step-icon">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <h3>Place Your Order</h3>
          <p>Order through our website or contact us directly on WhatsApp to get started.</p>
        </div>
        <div class="step">
          <div class="step-number">2</div>
          <div class="step-icon">
            <i class="fas fa-palette"></i>
          </div>
          <h3>Custom Design</h3>
          <p>We'll design your card with your logo, brand colors, and custom elements on both sides.</p>
        </div>
        <div class="step">
          <div class="step-number">3</div>
          <div class="step-icon">
            <i class="fas fa-user-cog"></i>
          </div>
          <h3>Setup Your Profile</h3>
          <p>After receiving your card, easily set up your digital profile using our intuitive platform.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="mt-4 mb-5 call-to-action with-borders" style="background-color: antiquewhite;">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-lg-9">
        <div class="call-to-action-content">
          <h3>Ready to Get Started?</h3>
          <p class="mb-0">Contact us on WhatsApp to place your order or request more information</p>
        </div>
      </div>
      <div class="col-sm-3 col-lg-3">
        <div class="call-to-action-btn">
          <a href="https://wa.me/8801824929282" class="whatsapp">
            <i class="fab fa-whatsapp"></i> +8801824929282 </a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container py-5" id="FrequentlyAskedQuestions">
  <div class="row">
    <div class="mb-5 text-center col-12">
      <h2 class="header-title">Frequently Asked Questions</h2>
      <p class="text-muted">Find answers to common questions about our services</p>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="faq-container">
        <div class="text-center faq-header">
          <h3 class="text-white">
            <i class="fas fa-question-circle me-2"></i>How Can We Help You?
          </h3>
        </div>
        <div class="faq-item" id="faq1">
          <div class="faq-question" onclick="toggleFaq('faq1')">
            <h5>Does the other person need Info Card? </h5>
            <span class="faq-icon">
              <i class="fas fa-chevron-down"></i>
            </span>
          </div>
          <div class="faq-answer">
            <p>No! When someone taps your Info Digital Smart Card or scans your QR code your profile will instantly appear on their device via a web browser. No app is needed for them to receive your information.</p>
          </div>
        </div>
        <div class="faq-item" id="faq2">
          <div class="faq-question" onclick="toggleFaq('faq2')">
            <h5>How does INFO CARD work?</h5>
            <span class="faq-icon">
              <i class="fas fa-chevron-down"></i>
            </span>
          </div>
          <div class="faq-answer">
            <p>Our product is Digital Smart Business Card, Employee card, Unity Card, Freelancer Card and Smart Student Card. Our cards have a built-in NFC chip. When you purchase a card, you have to create a profile. In your profile you may include name, designation, company name, website, social media links, address, email, phone number, profile picture etc. Once the profile is set your card is ready to use. Whenever you want to share your contact information with someone, just tap the card with his/her smartphone and your profile will show up on their screen. The other person does not need any app. They can then save your contact information and also send their contact information in your email. You can change your profile information anytime. The tap function only works with NFC enabled smartphones. If a smartphone does not have NFC then QR Code will work the same way. </p>
          </div>
        </div>
        <div class="faq-item" id="faq3">
          <div class="faq-question" onclick="toggleFaq('faq3')">
            <h5>What phones are compatible? </h5>
            <span class="faq-icon">
              <i class="fas fa-chevron-down"></i>
            </span>
          </div>
          <div class="faq-answer">
            <p>Many modern smartphones are equipped with Near Field Communication (NFC) capabilities, including. • Apple iPhone 7 and newer • Samsung Galaxy S7 and newer • Google Pixel 2 and newer • Huawei P30 and newer • LG G6 and newer • Sony Xperia XZ2 and newer • OnePlus 6 and newer This list is not exhaustive, and many other phone models may also have NFC capabilities. To be sure, you can check the specifications of your device or consult the manufacturer’s website.</p>
          </div>
        </div>
        <div class="faq-item" id="faq5">
          <div class="faq-question" onclick="toggleFaq('faq5')">
            <h5>How do I contact customer support?</h5>
            <span class="faq-icon">
              <i class="fas fa-chevron-down"></i>
            </span>
          </div>
          <div class="faq-answer">
            <p>Our customer support team is available 24/7. You can reach us via live chat on our website, email at support@example.com, or by phone at +8801824929282. We typically respond to all inquiries within 2 hours.</p>
          </div>
        </div>
      </div>
      <div class="text-center contact-section">
        <span>Still have questions?</span>
        <button class="btn-contact">Contact Us : 01824929282</button>
      </div>
    </div>
  </div>
</div>
<hr>
<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="mb-5 text-center col-12">
        <h2 class="header-title">Works like Magic</h2>
      </div>
    </div>
    <div class="text-center row">
      <!-- Card 1 -->
      <div class="mb-4 col-lg-4 col-md-4 col-sm-12">
        <div class="works-card card-1">
          <div class="mb-3 icon">
            <i class="fas fa-phone-slash" style="font-size:48px;"></i>
          </div>
          <h2 class="fw-bold" style="color:tomato">No Apps Needed</h2>
          <p>You do not need to install an app to use the B2B SMART card.</p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="mb-4 col-lg-4 col-md-4 col-sm-12">
        <div class="works-card card-2">
          <div class="mb-3 icon">
            <i class="fas fa-check" style="font-size:48px;"></i>
          </div>
          <h2 class="fw-bold" style="color:tomato">Always Work</h2>
          <p>The B2B SMART Card can be used with all smartphones.</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="mb-4 col-lg-4 col-md-4 col-sm-12">
        <div class="works-card card-3">
          <div class="mb-3 icon">
            <i class="fas fa-credit-card" style="font-size:48px;"></i>
          </div>
          <h2 class="fw-bold" style="color:tomato">Change Info Anytime</h2>
          <p>Change your information at any time by using B2B SMART NFC Web-App.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection