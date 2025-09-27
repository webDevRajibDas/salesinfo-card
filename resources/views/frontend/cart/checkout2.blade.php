<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B2B || Checkout - NFC Card Order</title>
    @include('frontend.includes.meta')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        .page-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            margin-top: 15px;
            border-radius: 15px;
        }

        .header-content {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .badge-header {
            display: inline-block;
            background: var(--accent);
            color: var(--dark);
            font-weight: 700;
            font-size: 0.9rem;
            padding: 8px 20px;
            border-radius: 50px;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.4);
        }


        /* Checkout Content */
        .checkout-content {
            padding: 40px;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 25px;
            color: var(--primary);
            position: relative;
            padding-bottom: 10px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 2px;
        }

        /* Design Selection Section */
        .design-selection {
            background: var(--light);
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 30px;
            border-left: 4px solid var(--accent);
        }

        .design-label {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--dark);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .see-list-link {
            color: var(--primary);
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            transition: color 0.3s;
        }

        .see-list-link:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .design-select-container {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .selected-design-badge {
            background: var(--success);
            color: white;
            padding: 8px 15px;
            border-radius: 50px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            width: 40%;
        }

        .form-control {
            border: 2px solid var(--primary-light);
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.25);
        }

        /* Order Summary */
        .order-summary {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #E2E8F0;
        }

        .summary-item:last-child {
            border-bottom: none;
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--primary);
        }

        /* Checkout Form */
        .checkout-form {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 8px;
        }

        .btn-checkout {
            background: var(--primary);
            color: white;
            border: none;
            padding: 14px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 8px;
            width: 100%;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-checkout:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(37, 99, 235, 0.3);
        }

        /* Design Preview */
        .design-preview {
            text-align: center;
            margin-top: 20px;
            padding: 15px;
            background: var(--light);
            border-radius: 8px;
            display: none;
        }

        .design-preview img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .preview-title {
            font-weight: 600;
            margin: 10px 0;
            color: var(--dark);
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
            .page-header, .checkout-content {
                padding: 25px 20px;
            }

            .section-title {
                font-size: 1.6rem;
            }

            .design-select-container {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 1.4rem;
            }

            .design-label {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
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
        <div class="header-content">
            <div class="badge-header">Checkout</div>
        </div>
    </header>

    <section class="checkout-content">
        <form>
        <h2 class="section-title">Order Details</h2>

        <!-- Design Selection -->
        <div class="design-selection">
            <label class="design-label">
                Design No:
                <a href="{{route('design.List')}}" class="see-list-link">
                    <i class="fas fa-list"></i> See Design List
                </a>
            </label>

            <div class="design-select-container">
                <div class="selected-design-badge">
                    <i class="fas fa-check-circle"></i>
                    Selected: Design #<span id="currentDesign">3</span>
                </div>

                <select class="form-control" id="designSelect">
                    <option value="">Change Design...</option>
                    @foreach($designLists as $data)
                        <option value="{{ $data->design_no }}"
                                {{ request('design_id') == $data->design_no ? 'selected' : '' }}>
                            #{{ $data->design_no }}
                        </option>
                    @endforeach
                </select>
            </div>

        </div>

        <!-- Order Summary -->
        <div class="order-summary">
            <h3 class="section-title" style="font-size: 1.4rem;">Order Summary</h3>

            <div class="summary-item">
                <span>Product:</span>
                <span>NFC Smart Business Card</span>
            </div>

            <div class="summary-item">
                <span>Selected Design:</span>
                <span id="summaryDesign">Design #3</span>
            </div>

            <div class="summary-item">
                <span>Quantity:</span>
                <span>1 Card</span>
            </div>

            <div class="summary-item">
                <span>Delivery:</span>
                <span>Free</span>
            </div>

            <div class="summary-item">
                <span>Total:</span>
                <span>1000 BDT</span>
            </div>
        </div>

        <!-- Checkout Form -->

           <div class="checkout-form">
               <h3 class="section-title" style="font-size: 1.4rem;">Your Information</h3>

               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label class="form-label">Full Name</label>
                           <input type="text" class="form-control" name="fullname" placeholder="Enter your full name">
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="form-group">
                           <label class="form-label">Email</label>
                           <input type="email" class="form-control" name="email" placeholder="Enter your email">
                       </div>
                   </div>
               </div>

               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label class="form-label">Phone Number |(WhatsApp Number)</label>
                           <input type="tel" class="form-control" name="whatsapp_number" placeholder="Enter your phone number">
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="form-group">
                           <label class="form-label">Delivery Address</label>
                           <input type="text" class="form-control" name="delivery_address" placeholder="Enter delivery address">
                       </div>
                   </div>
               </div>

               <div class="form-group">
                   <label class="form-label">Additional Notes (Optional)</label>
                   <textarea class="form-control" rows="3" placeholder="Any special instructions..."></textarea>
               </div>

               <button class="btn-checkout">
                   <i class="fas fa-lock"></i> Complete Order
               </button>

               <a href="{{route('terms.conditions')}}" style="float: right; font-size: 10px">Terms & Conditions</a>
           </div>
       </form>



    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const circles = document.querySelectorAll('.circle');
        const designSelect = document.getElementById('designSelect');
        const currentDesignSpan = document.getElementById('currentDesign');
        const summaryDesignSpan = document.getElementById('summaryDesign');

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

        // Get design_id from URL parameters
        function getDesignIdFromURL() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('design_id');
        }

        // Set initial design based on URL parameter
        const urlDesignId = getDesignIdFromURL();
        if (urlDesignId) {
            designSelect.value = urlDesignId;
            updateDesignSelection(urlDesignId);
        }

        // Design selection change handler
        designSelect.addEventListener('change', function() {
            const selectedDesignId = this.value;
            if (selectedDesignId) {
                updateDesignSelection(selectedDesignId);

                // Update URL without page reload (optional)
                const newUrl = new URL(window.location);
                newUrl.searchParams.set('design_id', selectedDesignId);
                window.history.replaceState({}, '', newUrl);
            }
        });

        // Update design selection display
        function updateDesignSelection(designId) {
            currentDesignSpan.textContent = designId;
            summaryDesignSpan.textContent = `Design #${designId}`;

        }

    });
</script>
</body>
</html>