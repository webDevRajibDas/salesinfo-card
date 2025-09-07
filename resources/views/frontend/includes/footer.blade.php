<footer id="footer" class="mt-0 border-0 bg-dark">
				<div class="container py-5">
					<div class="pt-4 row">
						<div class="text-center col">
							<a href="#"><img src="{{ asset('assets/img/logo-info.jpeg') }}" class="mb-3 img-fluid" width="100" height="48" alt="" /></a>
							<ul class="mb-4 list list-inline list-unstyled custom-list-style-1">



								<li class="list-inline-item">
									<a class="font-weight-semibold" data-hash data-hash-offset="70" href="#intro">Intro</a>
								</li>
								<li class="list-inline-item">
									<a class="font-weight-semibold" data-hash data-hash-offset="70" href="#features">Features</a>
								</li>
								<li class="list-inline-item">
									<a class="font-weight-semibold" data-hash data-hash-offset="70" href="#tour">Tour</a>
								</li>
								<li class="list-inline-item">
									<a class="font-weight-semibold" data-hash data-hash-offset="70" href="#specifications">Specifications</a>
								</li>
								<li class="list-inline-item">
									<a class="font-weight-semibold" data-hash data-hash-offset="70" href="#shop_container">Shop</a>
								</li>
								
							</ul>
							<img src="{{ asset('assets/img/SSLCommerz-Pay-With-logo-All-Size-01.png') }}" alt="Payment Cards" class="pb-2 mb-4 img-fluid" />
							
							<div class="d-flex align-items-center justify-content-center">
								<h4 class="mb-0 mr-2 text-color-light font-weight-normal ls-0 text-4">NEWSLETTER</h4>
								<div>
									<div class="alert alert-success d-none" id="newsletterSuccess">
										<strong>Success!</strong> You've been added to our email list.
									</div>
									<div class="alert alert-danger d-none" id="newsletterError"></div>
									<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="form-style-4 mw-100">
										<div class="input-group input-group-rounded">
											<input class="px-2 border form-control form-control-sm text-3 border-top-0 border-right-0 border-left-0 custom-border-color-2" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="text">
											<span class="input-group-append">
												<button class="p-2 btn btn-primary text-color-light text-2" type="submit"><strong>GO</strong></button>
											</span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright bg-dark">
					<div class="container py-2">
						<hr class="m-0 bg-light opacity-1">
						<div class="py-4 row justify-content-between">
							<div class="col-auto">
								<p class="mb-0">© Copyright 2020. All Rights Reserved.</p>
							</div>
							<div class="col-auto">
								<ul class="mb-0 footer-social-icons social-icons social-icons-clean social-icons-icon-light">
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
									<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>