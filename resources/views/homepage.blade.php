@extends('frontend.layouts.app')

@section('title')
    Home
@endsection

@section('content')

    <section id="intro">
        <video style="width: 100% !important;" class="video-background" autoplay muted loop playsinline>
            <source src="{{ asset('assets/hero_video.mp4') }}" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
        <div class="intro-content">
            <h1 class="text-white">Next Generation NFC Business Cards !! Digital. Smart. Professional. Make lasting
                connections with innovative technology.</h1>
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
              <p class="pb-3 mb-4 appear-animation text-black" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Info Business Card is a modern, paperless alternative to traditional business cards. It securely stores all your essential contact details and can be instantly shared via NFC, QR code, or link. Also known as virtual, electronic, or smart business cards, they offer a convenient, eco-friendly, and tech-savvy way to share professional information anytime, anywhere.</p>
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


    <section id="shop_container" class="product-header">
      <div class="container">
        <header class="product-header-line">
          <!-- Decorative circles -->
          <div class="circle circle-1"></div>
          <div class="circle circle-2"></div>
          <div class="circle circle-3"></div>

          <div class="header-content">
            <h1 class="header-title-pp">CUSTOMIZABLE / NON-CUSTOMIZABLE SMART CARDS PRODUCTS</h1>
          </div>
        </header>

        <div class="product-grid">
          <!-- Product 2 -->
          <div class="product-card">
            <div class="card-preview">
              <div class="nfc-card">
                <div class="card-front">
                  <img class="img-thumbnail" src="{{asset('assets/img/cards/business_card.JPG')}}" alt="Info Card Back">
                </div>
                <div class="card-back">
                  <!-- Replace with your actual image path -->
                  <div class="card-header">
                    <div class="card-logo">B2B SMART NFC</div>
                    <div class="nfc-icon"><i class="fas fa-wifi"></i></div>
                  </div>
                  <div class="card-chip"></div>
                  <div class="card-text">Tap to share your contact info</div>
                  <div class="card-contact">
                    <div class="card-text">www.intro-nfc.com</div>
                    <div class="card-qr">
                      <i class="fas fa-qrcode"></i>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="product-content">
              <h3 class="product-title">Full Customize NFC Card</h3>
              <ul class="product-features">
                <li><i class="fas fa-check"></i> Custom logo design</li>
                <li><i class="fas fa-check"></i> Extended digital profile</li>
                <li><i class="fas fa-check"></i> NFC & QR code technology</li>
                <li><i class="fas fa-check"></i> Home Delivery Free</li>
              </ul>
              <div class="product-price">1000 BDT</div>

              <div class="product-cta">
                <a href="{{route('cart.checkout')}}" class="product_btn btn-primary">
                  <i class="fas fa-shopping-cart"></i> Order Now
                </a>
                <a href="{{route('learn.More')}}" class="product_btn btn-secondary">
                  <i class="fas fa-info-circle"></i> Details
                </a>
              </div>
            </div>
          </div>
          <!-- Product 1 -->
          <div class="product-card">
            <div class="card-preview">
              <div class="nfc-card">
                <div class="card-front">
                  <div class="card-header">
                    <div class="card-logo">Smart Unity Card</div>
                    <div class="nfc-icon"><i class="fas fa-wifi"></i></div>
                  </div>
                  <div class="card-chip"></div>
                  <div class="card-text">Tap to share your contact info</div>
                  <div class="card-contact">
                    <div class="card-text">http://card.b2bplatformbd.com</div>
                    <div class="card-qr">
                      <i class="fas fa-qrcode"></i>
                    </div>
                  </div>
                </div>
                <div class="card-back">
                  <!-- Replace with your actual image path -->
                  <img class="img-thumbnail" src="{{asset('assets/img/cards/info-card-1.jpeg')}}" alt="Info Card Back">
                </div>
              </div>
            </div>

            <div class="product-content">
              <h3 class="product-title">Smart Unity Card</h3>
              <ul class="product-features">
                <li><i class="fas fa-check"></i> Pre-designed templates</li>
                <li><i class="fas fa-check"></i> Basic contact information</li>
                <li><i class="fas fa-check"></i> NFC tap technology</li>
                <li><i class="fas fa-check"></i> Home Delivery Free</li>
              </ul>
              <div class="product-price"></div>

              <div class="product-cta">
                <a href="#" class="product_btn btn-primary">
                  <i class="fas fa-shopping-cart"></i> Order Now
                </a>
                <a href="{{route('learn.More')}}" class="product_btn btn-secondary">
                  <i class="fas fa-info-circle"></i> Details
                </a>
              </div>
            </div>
          </div>
          <!-- Product 3 -->
          <div class="product-card">
            <div class="card-preview">
              <div class="nfc-card">
                <div class="card-front">
                  <img class="img-thumbnail" src="{{asset('assets/img/cards/info-card-2.jpeg')}}" alt="Info Card Back">
                </div>
                <div class="card-back">
                  <!-- Replace with your actual image path -->
                  <img class="img-thumbnail" src="{{asset('assets/img/cards/info-card-1.jpeg')}}" alt="Info Card Back">
                </div>
              </div>
            </div>

            <div class="product-content">
              <h3 class="product-title">Business Bundle</h3>
              <ul class="product-features">
                <li><i class="fas fa-check"></i> Complete branding</li>
                <li><i class="fas fa-check"></i> Admin dashboard access</li>
                <li><i class="fas fa-check"></i> NFC, QR & digital options</li>
                <li><i class="fas fa-check"></i> Home Delivery Free</li>
              </ul>
              <div class="product-price">600 BDT</div>

              <div class="product-cta">
                <a href="#" class="product_btn btn-primary">
                  <i class="fas fa-shopping-cart"></i> Order Now
                </a>
                <a href="{{route('learn.More')}}" class="product_btn btn-secondary">
                  <i class="fas fa-info-circle"></i> Details
                </a>
              </div>
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





    <section class="gallery-section">
      <h2 class="section-title">Featured Designs</h2>

      <div class="gallery-grid">
        <!-- Card 1 -->
        <div class="gallery-item">
          <img src="{{asset('assets/img/business_card/1441.jpg')}}" alt="Modern Business Card" class="gallery-img">
          <div class="gallery-overlay">
            <h3 class="gallery-title">Modern Business</h3>
            <p class="gallery-description">Clean and professional design</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="gallery-item">
          <img src="{{asset('assets/img/business_card/17977622.jpg')}}" alt="Creative Design" class="gallery-img">
          <div class="gallery-overlay">
            <h3 class="gallery-title">Creative Design</h3>
            <p class="gallery-description">For innovative professionals</p>
          </div>
        </div>

        <div class="gallery-item">
          <img src="{{asset('assets/img/business_card/design1_11.png')}}" alt="Modern Business Card" class="gallery-img">
          <div class="gallery-overlay">
            <h3 class="gallery-title">Modern Business</h3>
            <p class="gallery-description">Clean and professional design</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="gallery-item">
          <img src="{{asset('assets/img/business_card/design2_1.png')}}" alt="Creative Design" class="gallery-img">
          <div class="gallery-overlay">
            <h3 class="gallery-title">Creative Design</h3>
            <p class="gallery-description">For innovative professionals</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="{{asset('assets/img/business_card/design1_11.png')}}" alt="Modern Business Card" class="gallery-img">
          <div class="gallery-overlay">
            <h3 class="gallery-title">Modern Business</h3>
            <p class="gallery-description">Clean and professional design</p>
          </div>
        </div>

      </div>

      <a href="#design-list" class="view-all-btn">
        View All Design Options <i class="fas fa-arrow-right"></i>
      </a>
    </section>


<section id="FrequentlyAskedQuestions">
  <div class="container py-5" id="FrequentlyAskedQuestions">
    <div class="row">
      <div class="mb-2 text-center col-12">
        <h2 class="header-title">Frequently Asked Questions</h2>
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
</section>

@endsection