<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Gallery - NFC Card Designs</title>
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
                            <button class="wth_order_btn"><i class="animation"></i>Order with {{$designList->design_no}}
                                No Design<i class="animation"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </section>
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

        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const designItems = document.querySelectorAll('.design-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                // Show/hide design items based on filter
                designItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // View toggle functionality
        const viewButtons = document.querySelectorAll('.view-btn');
        const designGallery = document.getElementById('designGallery');

        viewButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                viewButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                const viewValue = this.getAttribute('data-view');

                // Change layout based on view
                if (viewValue === 'list') {
                    designGallery.classList.add('list-view');
                    designItems.forEach(item => {
                        item.classList.remove('col-md-3', 'col-sm-6');
                        item.classList.add('col-6');
                    });
                } else {
                    designGallery.classList.remove('list-view');
                    designItems.forEach(item => {
                        item.classList.remove('col-6');
                        item.classList.add('col-md-3', 'col-sm-6');
                    });
                }
            });
        });
    });
</script>
</body>
</html>