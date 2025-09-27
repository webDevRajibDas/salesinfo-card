<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B2B|Smart NFC Business Cards</title>

    @include('frontend.includes.meta')

    <link rel="mask-icon" href="{{asset('assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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


        /* Header Section */
        .page-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 25px 15px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .badge-header {
            display: inline-block;
            background: var(--accent);
            color: var(--light);
            font-weight: 700;
            font-size: 0.9rem;
            padding: 8px 20px;
            border-radius: 50px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.4);
        }


        /* Gallery Section */
        .gallery-section {
            padding: 40px;
        }


        /* Custom Card Styles */
        .card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .card-img-container {
            position: relative;
            overflow: hidden;
            height: auto;
        }

        .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .badge {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 0.9rem;
            font-weight: 700;
            padding: 8px 15px;
            border-radius: 50px;
            z-index: 10;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }


        .card-text {
            font-size: .8rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0;
            text-align: center;
        }

        /* View Options */
        .view-options {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
            gap: 10px;
        }

        .view-btn {
            padding: 8px 15px;
            background: var(--light);
            border: 1px solid var(--gray);
            border-radius: 8px;
            color: var(--dark);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .view-btn.active, .view-btn:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
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
        @media (max-width: 768px) {
            .page-header, .gallery-section {
                padding: 30px 20px;
            }

        }

        @media (max-width: 576px) {
            .card-img-container {
                height: 200px;
            }
        }

        .wth_order_btn {
            position: relative;
            padding: 12px 32px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            color: #000;
            background-color: #fff;
            border: none;
            border-radius: 50px;
            overflow: hidden;
            z-index: 1;
            transition: all 0.3s ease-in-out;
            box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
            cursor: pointer;
            margin-top: 20px;
        }

        .wth_order_btn:hover {
            transform: scale(1.05);
            color: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .wth_order_btn:active {
            transform: scale(0.9);
        }

        .wth_order_btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #007bff, #00bfff);
            transition: all 0.4s ease-in-out;
            z-index: -1;
            border-radius: 50px;
        }

        .wth_order_btn:hover::before {
            left: 0;
        }

        @keyframes ripple {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1), 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1);
            }

            100% {
                box-shadow: 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1), 0 0 0 80px rgba(255, 255, 255, 0);
            }
        }
        /* Selected Design Indicator */
        .selected-design {
            background: var(--success);
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            margin-top: 10px;
            display: none;
        }

        /* Checkout Modal */
        .modal-content {
            border-radius: 16px;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border-bottom: none;
            border-radius: 16px 16px 0 0;
            padding: 20px;
        }

        .modal-title {
            font-weight: 700;
        }

        .modal-body {
            padding: 30px;
        }

        .design-confirmation {
            text-align: center;
            margin-bottom: 20px;
            padding: 15px;
            background: var(--light);
            border-radius: 8px;
        }

        .design-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin: 10px 0;
        }

        .btn-checkout {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 8px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-checkout:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <header class="page-header">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
        <div class="header-content">
            <div class="badge-header">Browse our collection of premium NFC card designs. Choose your favorite or create
                a custom design.
            </div>
        </div>
    </header>

    <section style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" class="gallery-section">
        <!-- View Options -->
        <div class="view-options">
            <button class="view-btn active" data-view="grid">
                <i class="fas fa-th"></i> Grid
            </button>
            <button class="view-btn" data-view="list">
                <i class="fas fa-list"></i> List
            </button>
        </div>

        <!-- Design Gallery -->
        <div class="row" id="designGallery">
            <!-- Design 1 -->
            @foreach($designLists as $designList)
                <div class="col-md-3 col-sm-6 design-item mt-4 mb-4" data-category="premium">
                    <div class="card">
                        <div class="card-img-container">
                            <span class="badge rounded-pill bg-warning text-dark">Design No: {{$designList->design_no}}</span>
                            <img src="{{ asset('storage/' . $designList->image) }}" alt="Image" class="card-img-top">

                        </div>
                        <div class="card-body">
                            <p class="card-text">{{$designList->title}}</p>
                            <button data-design_id="{{$designList->design_no}}" class="wth_order_btn"><i class="animation"></i>Order with {{$designList->design_no}}
                                No Design<i class="animation"></i>
                            </button>
                            <div class="selected-design">Selected</div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </section>


    <!-- Checkout Modal -->
    <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabel">Confirm Your Order</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="design-confirmation">
                        <p>You have selected:</p>
                        <div class="design-number" id="selectedDesignNumber">Design #001</div>
                        <p>Proceed to checkout with this design?</p>
                    </div>
                    <button id="proceedCheckout" class="btn-checkout">
                        <i class="fas fa-shopping-cart"></i> Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const circles = document.querySelectorAll('.circle');
        const orderButtons = document.querySelectorAll('.wth_order_btn');
        const checkoutModal = new bootstrap.Modal(document.getElementById('checkoutModal'));
        const selectedDesignNumber = document.getElementById('selectedDesignNumber');
        const proceedCheckout = document.getElementById('proceedCheckout');
        let currentDesignId = null;

        // Animation for decorative elements
        circles.forEach((circle, index) => {
            circle.style.opacity = '0';
            circle.style.transform = 'scale(0)';
            circle.style.transition = 'opacity 1s, transform 1s';

            setTimeout(() => {
                circle.style.opacity = '1';
                circle.style.transform = 'scale(1)';
            }, 500 + (index * 300));
        });

        // Order button functionality
        orderButtons.forEach(button => {
            button.addEventListener('click', function() {
                const designId = this.getAttribute('data-design_id');
                currentDesignId = designId;
                selectedDesignNumber.textContent = `Design #${designId}`;
                checkoutModal.show();
            });
        });

        // Proceed to checkout
        proceedCheckout.addEventListener('click', function() {
            if (currentDesignId) {
                //alert(`Redirecting to checkout with Design #${currentDesignId}`);
                 window.location.href = `/checkout?design_id=${currentDesignId}`;
                // Close modal
                checkoutModal.hide();
            }
        });

        // Optional: Add visual feedback for selected design
        orderButtons.forEach(button => {
            button.addEventListener('click', function() {
                orderButtons.forEach(btn => {
                    btn.parentElement.querySelector('.selected-design').style.display = 'none';
                });
                // Add selected class to clicked button
                this.parentElement.querySelector('.selected-design').style.display = 'block';
            });
        });
    });
</script>
</body>
</html>